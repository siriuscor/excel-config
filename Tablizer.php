<?php
define('ARRAY_PATH_SEPERATOR', '.');
include 'array_path.php';
//TODO: save meta data
class Tablizer {
    const COMMENT_MARK = '//';
    const KEY_MARK = 'key';
    const VALUE_MARK = 'value';

    private $keywords = array(self::COMMENT_MARK, self::KEY_MARK, self::VALUE_MARK, ARRAY_PATH_SEPERATOR);

    public function __construct() {
        if (!function_exists('array_path_get')) {
            throw new Exception('tablizer need include array_path first');
        }
    }

    public function tablize($array, &$tableMeta=null) {
        $head = array();
        $rows = array();
        
        foreach($array as $key => $value) {
            if (is_array($value)){
                $head = $this->merge_head($head, $this->gemHead($value, null, array()));
            } else {
                $head = array(self::VALUE_MARK);
            }
        }

        $head = array_unique($head);
        $head = array_merge(array(self::KEY_MARK), $head);
        foreach($array as $key => $value) {
            $row = array();
            foreach($head as $head_key) {
                switch($head_key) {
                    case self::KEY_MARK:
                        $cell = $key;
                        break;
                    case self::VALUE_MARK:
                        $cell = $value;
                        break;
                    default:
                        $cell = array_path_get($value, $head_key);
                        break;
                }
                $row[] = $cell;
            }
            $rows[] = $row;
        }
        
        $tableData = array_merge(array($head), $rows);

        return $tableData;
    }

    public function untablize($tableData, $tableMeta=null) {
        $result = array();
        
        foreach($tableData as $row) {
            $firstCell = $row[0];
            if ($firstCell == null || $firstCell == "\n") 
                continue;//ignore break

            //match *.key,but not match *\.key
            if ($row[0] == self::KEY_MARK
                || preg_match('/^(.*[^\\\\])\.'.self::KEY_MARK .'$/', $row[0], $matches)) {
                $head = $row;
                if (!empty($matches[1])) {
                    $prepend_key = $matches[1];
                } else {
                    $prepend_key = '';
                }
                continue;
            }

            for($i = 0; $i < count($row); $i ++) {
                //empty cell skip
                if (!isset($row[$i])) continue;
                $cell = $row[$i];
                if ($cell == '') continue;
                //row comment,ignore follows
                if ($this->startWith($cell, self::COMMENT_MARK)) break;
                
                //if no head info, skip
                if (empty($head)) continue;
                $headCell = $head[$i];
                //empty head skip
                if ($headCell === null || $headCell === '') continue;
                
                if ($i == 0) {
                    $key = $cell;
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
                    array_path_set($result, $prepend_key, $key, $value);
                } else {
                    array_path_set($result, $prepend_key, $key, $headCell, $value);
                }
            }
        }
        return $result;
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
            $add_key = $prefix !== null ? $prefix . '.' .$key : $key;

            if (is_array($value) && !in_array($key, $exclude, true)) {
                $head = array_merge($head, $this->gemHead($value, $add_key, $exclude));
            } else {
                if (!in_array($add_key, $head))$head[] = $add_key;
            }
        }
        return $head;
    }

    protected function array_insert($myarray,$value,$position=0)
    {
       $fore=($position==0)?array():array_splice($myarray,0,$position);
       $fore[]=$value;
       $ret=array_merge($fore,$myarray);
       return $ret;
    }

    protected function startWith($string, $prefix) {
        return (strpos($string, $prefix) === 0);
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