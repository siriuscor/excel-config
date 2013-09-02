<?php
/**
 * @author siriuscor@gmail.com
 * 
 * 2013-6-28 change csv to xls file
 *	a tool convert csv file to PHP array
 *	sample:
 *		$file = '../doc/item.csv';
 *		$array = csv_decode($file);
 *		
 *	also can convert PHP array to csv file
 *	默认第一级为配置名称,第二级为列
 *	例: $config['skillConfig'] = array('skill_001' => array('name'=>'abc', 'level'=>1));
 *	生成csv为
 *	skill_001,abc,1
 *	
 *	sample:
 *		$array = array(...);
 *		encode_file($array, '../doc/arr.csv');
 *	
 *	make a multi_lang script config file:
 *	multi_lang func define as TRANS_FUNC
 *	sample:
 *		$array = array('a' => '中文');
 *		$script = makeMultiLang($array);// array('a' => t('中文'));
 *		
**/
define('ARRAY_PATH_SEPERATOR', '.');
include 'array_path.php';

class ConfigConverter {
    public $seperatorConfig = array(
        'win_csv' => ',',
        'mac_csv' => ';',
        'xls' => "\t",
        );

    public function __construct() {
        if (!function_exists('array_path_get')) {
            throw new Exception('please include array_path first');
        }
    }

    public function array2table($array) {
        $head = array();
        $rows = array();
        
        foreach($array as $key => $value) {
            if (is_array($value)){
                $head = $this->merge_head($head, $this->gemHead($value, null, array()));
            } else {
                $head = array('value');
            }
        }

        $head = array_unique($head);
        $head = array_merge(array('key'), $head);
        foreach($array as $key => $value) {
            $row = array();
            foreach($head as $head_key) {
                switch($head_key) {
                    case 'key':
                        $cell = $key;
                        break;
                    case 'value':
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

    public function table2array($tableData) {
        $result = array();
        
        $firstValidRow = true;
        foreach($tableData as $row) {
            $firstCell = $row[0];
            if ($this->startWith($firstCell, '//') 
                || $firstCell == null 
                || $firstCell == "\n") 
                continue;//ignore comment and break

            if ($firstValidRow) {
                $head = $row;
                $firstValidRow = false;
                continue;
            }

            for($i = 0; $i < count($head); $i ++) {
                $headCell = $head[$i];
                if ($headCell === null || $headCell === '') continue;
                if (!isset($row[$i])) continue;
                $cell = $row[$i];
                if ($cell == '') continue;

                if ($headCell == 'key') {
                    $key = $cell;
                    continue;
                }

                if (is_numeric($cell)) {
                    $value = $this->getNumber($cell);
                } else {
                    $value = iconv("gbk", "utf-8", $cell);
                }

                if ($this->startWith($cell, '[') 
                        || $this->startWith($cell, '{')) {
                    $value = json_decode($cell, true);
                }

                if ($headCell == 'value') {
                    array_path_set($result, $key, $value);
                } else {
                    array_path_set($result, $key, $headCell, $value);
                }
            }
        }
        return $result;
    }

    public function read($filepath, $format='win_csv') {
        switch($format) {
            case 'win_csv':
            case 'mac_csv':
            case 'xls':
                $data = $this->readCSV($filepath, $this->seperatorConfig[$format]);
                break;
            case 'php_object':
            case 'php_array':
                $data = $this->readPHP($filepath);
                break;
            default:
                throw new Exception('format not supported');
        }

        return $data;
    }

    public function write($data, $format='win_csv') {
        switch($format) {
            case 'win_csv':
            case 'mac_csv':
            case 'xls':
                $content = $this->writeCSV($data, $this->seperatorConfig[$format]);
                if ($format == 'win_csv') $content = iconv("utf-8", "gbk", $content);
                break;
            case 'php_object':
                $content = $this->writePHP($data, true);
                break;
            case 'php_array':
                $content = $this->writePHP($data, false);
                break;
            default:
                throw new Exception('format not supported');
        }

        return $content;
    }

    public function convert($input_file, $input_format, $output_file, $output_format) {
        $data = $this->read($input_file, $input_format);
        if (in_array($input_format, array('win_csv', 'mac_csv', 'xls'))
            && in_array($output_format, array('php_object', 'php_array'))) {
            $data = $this->table2array($data);
        } else if (in_array($output_format, array('win_csv', 'mac_csv', 'xls'))
            && in_array($input_format, array('php_object', 'php_array'))){
            $data = $this->array2table($data);
        }
        $content = $this->write($data, $output_format);
        file_put_contents($output_file, $content);
    }

    protected function readCSV($filepath, $seperator=',') {
        ini_set("auto_detect_line_endings", "1");
        $fp = fopen($filepath, 'r');
        $result = array();
        while (($buffer = fgetcsv($fp, 0, $seperator)) !== false) {
            $result[] = $buffer;
        }
        
        return $result;
    }

    protected function readPHP($filepath) {
        define('SYS_PATH', '');
        $config = require $filepath;
        return json_decode(json_encode($config), true);
    }

    protected function makeStream($string) {
        $stream = fopen('php://memory','r+');
        fwrite($stream, $string);
        rewind($stream);
        return $stream;
    }
    protected function writeCSV($data, $seperator=',') {
        if (empty($data)) return '';
        $lines = array();
        foreach($data as $row) {
            $line = array();
            foreach($row as $cell) {
                if (is_array($cell)) {
                    $cell = json_encode($cell);
                }
                $line[] = '"' . str_replace('"','""',$cell) . '"';
            }
            $lines[] = $line;
        }

        $result = '';
        foreach($lines as $line) {
            $result .= implode($seperator, $line);
            $result .= "\n";
        }

        return $result;
    }

    protected function writePHP($data, $makeObject=false) {
        $script = var_export($data, true);
        if ($makeObject) {
            $script = str_replace("array (", "(object)array (", $script);
        }
        $content = '<?php $config = ' . $script . ';?>';
        return $content;
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

?>