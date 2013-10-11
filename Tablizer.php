<?php
namespace tablizer;

define('ARRAY_PATH_SEPERATOR', '.');
include 'array_path.php';
//TODO: escape keyword
//TODO: cell process hook
class Tablizer {
    const COMMENT_MARK = '//';
    const KEY_MARK = 'key';
    const VALUE_MARK = 'value';

    private $keywords = array(self::COMMENT_MARK, self::KEY_MARK, self::VALUE_MARK, ARRAY_PATH_SEPERATOR);
    public $ignoreEmpty;

    public function __construct($ignoreEmpty=array()) {
        if (!function_exists('array_path_get')) {
            throw new Exception('tablizer need include array_path first');
        }
        $this->ignoreEmpty = $ignoreEmpty;
    }

    public function tablize($array, $tableMeta=null) {
        if (empty($tableMeta)) {
            $head = array();
            foreach($array as $key => $value) {
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

        foreach($tableMeta as $tableHead) {
            $keyColumn = array();
            $valueColumn = array();
            foreach($tableHead as $headCell) {
                if ($this->isKey($headCell)) {
                    $keyColumn[] = $headCell;
                } else {
                    $valueColumn[] = $headCell;
                }
            }

            if (empty($keyColumn)) {
                throw new \Exception('not have key column');
            }
            
            //extract key tree
            $keyLeft = '';
            $keyTree = array();
            foreach($keyColumn as $index => $keyCell) {
                $processArray = $array;
                
                if (!empty($keyLeft)) $keyCell .= ARRAY_PATH_SEPERATOR . $keyLeft;
                $keyPart = preg_split('/' . self::KEY_MARK . '/', $keyCell);
                $path = '';
                foreach($keyPart as $part) {
                    if ($this->endWith($part, ARRAY_PATH_SEPERATOR)) {
                        $part = substr($part, 0, strlen($part) - strlen(ARRAY_PATH_SEPERATOR));
                        $processArray = array_path_get($processArray, $part);
                    }

                    if ($this->startWith($part, ARRAY_PATH_SEPERATOR)) {
                        $keyLeft = substr($part, strlen(ARRAY_PATH_SEPERATOR));
                    }
                }

                // function growKeyTree(&$node, $level, $array) {
                //     global $keyColumn;
                //     foreach($node as $keyNode => &$childKeys) {
                //         $path = $this->combineKey($keyColumn[$level], $keyNode);
                //         $childKeys = array_keys(array_path_get($array, $path));
                //     }
                // }

                if (empty($keyTree)) {
                    $keys = array_keys($processArray);
                    $keyTree = array_fill_keys($keys, 0);
                } else {
                    //TODO:infinite level
                    $level = 0;
                    // while($level < $index) {
                    //     growKeyTree($keyTree, $level, $processArray);
                    //     $level ++;
                    // }
                    foreach($keyTree as $keyNode => &$childKeys) {
                        $path = $this->combineKey($keyColumn[$level], $keyNode);
                        $childKeys = array_fill_keys(array_keys(array_path_get($processArray, $path)), 0);
                    }
                }

                // var_dump($keyTree);
            }
            
            $rows = array();
            $self = $this;
            array_path_walk($keyTree, function($key, $value) use (&$rows, $keyColumn, $valueColumn, $array, $self) {
                $row = array();
                $keys = explode(ARRAY_PATH_SEPERATOR, $key);

                $row = $keys;

                foreach($keys as $index => $keyCell) {
                    $parts[] = $self->combineKey($keyColumn[$index], $keyCell);
                }
                $wholeKey = implode(ARRAY_PATH_SEPERATOR, $parts);

                $node = array_path_get($array, $wholeKey);

                foreach($valueColumn as $head) {
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
                    if (empty($key)) {
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

    protected function isKey($value) {
        return preg_match('/' . self::KEY_MARK. '/', $value);
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