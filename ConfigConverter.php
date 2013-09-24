<?php
/**
 * @author siriuscor@gmail.com
 **/

//TODO: save xls file
include 'Tablizer.php';

class ConfigConverter {

    public $seperatorConfig = array(
        'win_csv' => ',',
        'mac_csv' => ';',
        'xls' => "\t",
        );
    public function __construct() {
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

        $tablizer = new Tablizer();
        if (in_array($input_format, array('win_csv', 'mac_csv', 'xls'))
            && in_array($output_format, array('php_object', 'php_array'))) {
            $data = $tablizer->untablize($data);
        } else if (in_array($output_format, array('win_csv', 'mac_csv', 'xls'))
            && in_array($input_format, array('php_object', 'php_array'))){
            $data = $tablizer->tablize($data);
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

}

?>