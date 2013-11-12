<?php
namespace tablizer;

define('ARRAY_PATH_SEPERATOR', '.');
include 'array_path.php';
/**
 * use for tablize and untablize array data
 */
//TODO: escape keyword
//TODO: compatible with simple key-value
class Tablizer {
    const COMMENT_MARK = '//';
    const KEY_MARK = 'key';
    const VALUE_MARK = 'value';

    private $_keywords = array(self::COMMENT_MARK, self::KEY_MARK, self::VALUE_MARK, ARRAY_PATH_SEPERATOR);
    private $_ignoreEmpty;
    private $_tablizeCallback;
    private $_untablizeCallback;

    public function __construct($ignoreEmpty=array()) {
        $this->_ignoreEmpty = $ignoreEmpty;
    }

    public function onTablize($func) {
        if (!is_callable($func)) {
            throw new \Exception('function type error');
        }
        $this->_tablizeCallback = $func;
    }

    public function onUntablize($func) {
        if (!is_callable($func)) {
            throw new \Exception('function type error');
        }
        $this->_untablizeCallback = $func;
    }

    public function tablize($array, $tableMeta=null) {
        if (empty($tableMeta)) {
            $head = array();
            foreach ($array as $key => $value) {
                if (is_array($value)){
                    $head = $this->merge_head($head, $this->gemHead($value, null, array()));
                } else {
                    $head = array(self::VALUE_MARK);
                }
            }

            $head = array_unique($head);
            $head = array_merge(array(self::KEY_MARK), $head);
            $tableMeta[] = $head;
        }

        $tableData = array();

        foreach ($tableMeta as $tableHead) {
            $keyColumn = array();
            $valueColumn = array();
            foreach ($tableHead as $headCell) {
                if ($this->isKey($headCell)) {
                    $keyColumn[] = $headCell;
                } else {
                    $valueColumn[] = $headCell;
                }
            }

            if (empty($keyColumn)) {
                throw new \Exception('not have key column');
            }
            

            $keyParts = explode(ARRAY_PATH_SEPERATOR, implode(ARRAY_PATH_SEPERATOR, $keyColumn));
            
            $this->growKeytree($keyTree, $keyParts, 0, $array);

            $rows = array();
            $self = $this;
            array_path_walk ($keyTree, function ($key, $value) use (&$rows, $keyColumn, $valueColumn, $array, $self) {
                //TODO:VALUE KEYWORD
                $row = array();
                $keys = explode(ARRAY_PATH_SEPERATOR, $key);

                $row = $keys;

                foreach ($keys as $index => $keyCell) {
                    $parts[] = $self->combineKey($keyColumn[$index], $keyCell);
                }
                $wholeKey = implode(ARRAY_PATH_SEPERATOR, $parts);

                $node = array_path_get($array, $wholeKey);

                foreach ($valueColumn as $head) {
                    $row[] = array_path_get($node, $head);
                }

                $rows[] = $row;
            });

            $tableData = array_merge($tableData, array($tableHead), $rows);
        }
        
        return $tableData;
    }

    public function untablize($tableData, &$tableMeta=null) {
        $result = array();
        
        $metaData = array();

        foreach($tableData as $row) {
            $firstCell = $row[0];
            if ($firstCell == null || $firstCell == "\n") 
                continue;//ignore break

            //match *key*,but not match *\.key
            if ($this->isKey($row[0])) {
                $head = $row;
                $metaData[] = $head;//save meta data
                continue;
            }

            $key = '';//empty key
            for($i = 0; $i < count($row); $i ++) {
                //empty cell skip
                if (!isset($row[$i])) continue;
                $cell = $row[$i];
                
                //if no head info, skip
                if (empty($head)) continue;
                $headCell = $head[$i];
                //empty head skip
                if ($headCell === null || $headCell === '') continue;

                //ignore empty cell or in ignore empty
                if ($cell == '' && !in_array($headCell, $this->ignoreEmpty)) continue;
                //row comment,ignore follows
                if ($this->startWith($cell, self::COMMENT_MARK)) break;

                //first column to be array key, to support multi-key column
                if ($this->isKey($headCell)) {
                    $singleKey = $this->combineKey($headCell, $cell);
                    if ($key === '') {
                        $key = $singleKey;
                    } else {
                        $key .= ARRAY_PATH_SEPERATOR . $singleKey;
                    }
                    continue;
                }

                if (is_numeric($cell)) {
                    $value = $this->getNumber($cell);
                } else {
                    $value = $cell;
                }

                if ($this->startWith($cell, '[') 
                        || $this->startWith($cell, '{')) {
                    $value = json_decode($cell, true);
                    if ($value == null) {
                        $value = $cell; //fallback
                    }
                }

                if ($headCell == self::VALUE_MARK) {
                    array_path_set($result, $key, $value);
                } else {
                    array_path_set($result, $key, $headCell, $value);
                }
            }
        }

        //output meta data
        $tableMeta = $metaData;
        return $result;
    }

    //TODO: very slow, need optimize
    private function growKeyTree(&$node, $keyParts, $partIndex, $array) {
        if (!isset($keyParts[$partIndex])) return;
        $part = $keyParts[$partIndex];
        if ($part != self::KEY_MARK) {
            $this->growKeyTree($node, $keyParts, $partIndex + 1, array_path_get($array, $part));
        } else {
            if (empty($node)) {
                $child = array_keys($array);
                $node = array_fill_keys($child, 0);
            }

            foreach($node as $keyNode => &$childKeys) {
                $subArray = array_path_get($array, $keyNode);
                $this->growKeytree($childKeys, $keyParts, $partIndex + 1, $subArray);
            }
            
        }
    }

    protected function isKey($value) {
        $matchTimes = preg_match_all('/\b' . self::KEY_MARK. '\b/', $value, $unuse);
        //check two KEY keyword
        if ($matchTimes > 1) {
            throw new Exception('1 column can only have 1 key');
        }
        return $matchTimes;
    }

    public function combineKey($head, $value) {
        return str_replace(self::KEY_MARK, $value, $head);
    }

    protected function merge_head($head1, $head2) {
        foreach($head2 as $index => $key) {
            if (!in_array($key, $head1)) {
                $head1 = $this->array_insert($head1, $key, $index);
            }
        }
        return $head1;
    }
    protected function gemHead($array, $prefix=null, $exclude=null) {
        $head = array();
        if ($exclude === null) {
            $exclude = array();
        }
        foreach($array as $key => $value) {
            $add_key = $prefix !== null ? $prefix . ARRAY_PATH_SEPERATOR .$key : $key;

            if (is_array($value) && !in_array($key, $exclude, true)) {
                $head = array_merge($head, $this->gemHead($value, $add_key, $exclude));
            } else {
                if (!in_array($add_key, $head))$head[] = $add_key;
            }
        }

        return $head;
    }

    protected function array_insert($myarray, $value, $position=0) {
       $fore = ($position == 0) ? array() : array_splice($myarray, 0, $position);
       $fore[] = $value;
       $ret = array_merge($fore, $myarray);
       return $ret;
    }

    protected function startWith($string, $prefix) {
        return (strpos($string, $prefix) === 0);
    }

    protected function endWith($string, $suffix) {
        return (strpos($string, $suffix) === strlen($string));
    }

    protected function getNumber($value) {
        if (!is_numeric($value)) return $value;
        $intval = intval($value);
        if ($value == $intval) {
            return $intval;
        } else {
            return floatval($value);
        }
    }
}