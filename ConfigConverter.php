<?php
/**
 * config converter
 * @author Sirius Lee <siriuscor@gmail.com>
 * @link https://github.com/siriuscor/excel-config
 **/
namespace tablizer;
require 'Tablizer.php';
/**
 * config converter class
 */
//TODO: make file streamly
class ConfigConverter {

    public $seperatorConfig = array(
        'win_csv' => ',',
        'csv' => ',',
        'mac_csv' => ';',
        'xls' => "\t",
        );

    public $ignoreEmpty;
    public function __construct() {
    }

    public function filterChain($file, $chain) {
        if (count($chain) < 2) {
            throw new Exception('chain count must above 2');
        }
        $pass = $file;
        $writer = array_pop($chain);
        foreach ($chain as $chainItem) {
            $pass = $chainItem->read($pass);
        }
        return $writer->write($pass);
    }

    public function detectStream($format) {
        switch($format) {
            case 'win_csv':
            case 'mac_csv':
            case 'csv':
                return new CSVStream($this->seperatorConfig[$format]);
                break;
            case 'xls':
            case 'xlsx':
                return new ExcelStream();
                break;
            case 'php_object':
                return new PHPStream(true);
                break;
            case 'php':
            case 'php_array':
                return new PHPStream();
                break;
            default:
                throw new \Exception('format not supported');
        }
    }

    public function read($path, $format) {
        $stream = $this->detectStream($format);
        return $stream->read($path);
    }

    public function convertFile($input_file, $input_format, $output_file, $output_format) {
        $chain = array();
        $chain[] = $this->detectStream($input_format);

        $tablizeFormat = array('win_csv', 'mac_csv', 'xls', 'xlsx', 'csv');
        $untablizeFormat = array('php', 'php_object', 'php_array');
        if (in_array($input_format, $tablizeFormat)
            && in_array($output_format, $untablizeFormat)) {
            $chain[] = new UntablizeStream($this->ignoreEmpty);
        } else if (in_array($output_format, $tablizeFormat)
            && in_array($input_format, $untablizeFormat)) {
            $chain[] = new TablizeStream($this->ignoreEmpty);
        }

        $chain[] = $this->detectStream($output_format);
        $content = $this->filterChain($input_file, $chain);
        if ($output_format == 'win_csv') $content = iconv("utf-8", "gbk", $content);
        file_put_contents($output_file, $content);
    }

}


interface Stream {
    public function read($data);
    public function write($data);
}

class PHPStream implements Stream{
    private $makeObject;
    public function __construct($makeObject=false) {
        $this->makeObject = $makeObject;
    }

    public function read($filepath) {
        if (!file_exists($filepath)) {
            throw new \Exception('file not exist');
        }
        if (!defined('SYS_PATH')) define('SYS_PATH', '');
        $config = require $filepath;
        return json_decode(json_encode($config), true);
    }

    public function write($data) {
        $script = var_export($data, true);
        if ($this->makeObject) {
            $script = str_replace("array (", "(object)array (", $script);
        }
        $content = '<?php return ' . $script . ';?>';
        return $content;
    }
}


class CSVStream implements Stream {
    private $seperator;
    public function __construct($seperator=',') {
        $this->seperator = $seperator;
    }
    public function read($filepath) {
        @ini_set("auto_detect_line_endings", "1");
        $fp = fopen($filepath, 'r');
        $result = array();
        while (($buffer = fgetcsv($fp, 0, $this->seperator)) !== false) {
            foreach ($buffer as &$cell) {
                $cell = str_replace('::', ':', $cell);
                $cell = str_replace(',,', ',', $cell);
            }
            $result[] = $buffer;
        }
        
        return $result;
    }

    public function write($data) {
        if (empty($data)) return '';
        $lines = array();
        foreach ($data as $row) {
            $line = array();
            foreach ($row as $cell) {
                if (is_array($cell)) {
                    $cell = json_encode($cell);
                }
                $cell = str_replace(':', '::', $cell);
                $cell = str_replace(',', ',,', $cell);
                $cell = str_replace('"', '""', $cell);
                $line[] = '"' . $cell . '"';
            }
            $lines[] = $line;
        }

        $result = '';
        foreach ($lines as $line) {
            $result .= implode($this->seperator, $line);
            $result .= "\n";
        }

        return $result;
    }
}

class TablizeStream implements Stream {
    public function __construct() {
    }

    public function read($data) {
        $tablizer = new Tablizer();
        return $tablizer->tablize($data);
    }

    public function write($data) {
        return $data;
    }
}

class UntablizeStream implements Stream {
    private $ignoreEmpty;
    public function __construct($ignoreEmpty=array()) {
        $this->ignoreEmpty = $ignoreEmpty;
    }
    public function read($data) {
        $tablizer = new Tablizer($this->ignoreEmpty);
        $metaData = array();
        $result = $tablizer->untablize($data, $metaData);
        return $result;
    }

    public function write($data) {
        return $data;
    }
}

/**
 * class not complish
 */
class MemoryStream implements Stream {
    public function read($data) {

    }

    public function write($data) {

    }
    protected function makeStream($string) {
        $stream = fopen('php://memory', 'r+');
        fwrite($stream, $string);
        rewind($stream);
        return $stream;
    }
}


class ExcelStream implements Stream {
    public function __construct() {
        require_once('spreadsheet-reader/php-excel-reader/excel_reader2.php');
        require_once('spreadsheet-reader/SpreadsheetReader.php');
    }

    public function read($filepath) {
        $reader = new \SpreadsheetReader($filepath);
        $result = array();
        foreach ($reader as $row) {
            foreach ($row as &$cell) {
                $cell = str_replace('::', ':', $cell);
                $cell = str_replace(',,', ',', $cell);
            }
            $result[] = $row;
        }

        return $result;
    }

    public function write($data) {
        throw new Exception('not implement yet');
    }
}

?>