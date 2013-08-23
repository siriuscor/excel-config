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
define('TRANS_FUNC', 't');
error_reporting(E_ALL);
define('SEPERATOR', ";");

function packExcel($script) {
	$script = str_replace(':', '::', $script);
	$script = str_replace(',', ',,', $script);
	return $script;
}

function packOutExcel($script) {
	$script = str_replace('::', ':', $script);
	$script = str_replace(',,', ',', $script);
	return $script;
}

function loadConfig($path) {
	if (file_exists($path)) {
		return require $path;
	}
}

function encode_file($array, $file_path) {
    if (!file_exists($file_path)) {
        touch($file_path);
    }
    
    $content = '';
    foreach($array as $key => $data) {
        $content .= "[$key]\n";
        $content .= csv_encode($data);
        $content .= "\n";
    }
    // echo $content;
    file_put_contents($file_path, $content);
}

function csv_encode($array) {
    
    $head = array();
    $record = array();
    
    foreach($array as $key => $value) {
        if (is_array($value)){
            $head = merge_head($head, gemHead($value, null, array()));
        } else {
            $head = array('value');
        }
    }
    $head = array_unique($head);
    
    $head = array_merge(array('key'), $head);
    // usort($head, 'key_sort');
    // var_dump($head);
    
    $count = 0;
    foreach($array as $key => $value) {
        $line = array();
        foreach($head as $head_key) {
            if ($head_key == 'key') {
                $line[] = '"' . $key . '"';
                continue;
            }
            
            if ($head_key == 'value') {
                if (is_array($value)) {
                    $value = '"' . json_encode($value) . '"';
                }
                
                if ($value === null) {
                    $line[] = null;
                } else {
                    $line[] = '"' . $value . '"';
                }
                continue;
            }
            
            $t = getProp($value, $head_key);
            if (is_array($t)) {
                $line[] = '"' . str_replace('"','""',json_encode($t)) . '"';
            } else {
                $line[] = '"' . $t . '"';
            }
        }
        $record[$count++] = $line;
    }
    
    $result = array_merge(array($head), $record);
    $content = '';
    foreach($result as $line) {
        $line = implode(SEPERATOR, $line);
        $line = iconv("utf-8", "gbk", $line);
        $content .= $line . "\n";
    }
    
    return $content;
}

function merge_head($head1, $head2) {
    foreach($head2 as $index => $key) {
        if (!in_array($key, $head1)) {
            $head1 = array_insert($head1, $key, $index);
        }
    }
    return $head1;
}

function array_insert($myarray,$value,$position=0)
{
   $fore=($position==0)?array():array_splice($myarray,0,$position);
   $fore[]=$value;
   $ret=array_merge($fore,$myarray);
   return $ret;
}

function gemHead($array, $prefix=null, $exclude=null) {
    $head = array();
    if ($exclude === null) {
        $exclude = array();
    }
    foreach($array as $key => $value) {
        $add_key = $prefix !== null ? $prefix . '.' .$key : $key;

        if (is_array($value) && !in_array($key, $exclude, true)) {
            $head = array_merge($head, gemHead($value, $add_key, $exclude));
        } else {
            if (!in_array($add_key, $head))$head[] = $add_key;
        }
    }
    return $head;
}

function csv_decode($file_path) {
	global $language, $ignoreEmpty;
    if (empty($ignoreEmpty)) $ignoreEmpty = array();
	ini_set("auto_detect_line_endings", "1");
    $fp = fopen($file_path, 'r');
    $result = array();
    
    $head_flag = true;
    
    while (($buffer = fgetcsv($fp, 0, SEPERATOR)) !== false) {
        if (startWith($buffer[0], '//') || $buffer[0] == null || $buffer[0] == "\n") {
            continue;//ignore comment and break
        }
        
//         if (startWith($buffer[0], '[')) {
//             $current_key = substr($buffer[0], 1, -1);
//             $head_flag = true;
//             continue;
//         }
        
        if ($head_flag) {
            $head = $buffer;//explode(',', $buffer);
            $head_flag = false;
        } else {
            $record = $buffer;//explode(',', $buffer);
            for($i = 0; $i < count($head); $i ++) {
                if ($head[$i] === null || $head[$i] === '') continue;
                if (!isset($record[$i])) continue;
                if ($record[$i] == '' && !in_array($head[$i], $ignoreEmpty)) continue;
                if ($head[$i] == 'key') {
                    $key = $record[$i];
                } else {
                    if (!isset($record[$i])) $record[$i] = null;
//                     if (is_numeric($record[$i])) {
//                         $intval = intval($record[$i]);
//                         if ($record[$i] == $intval) {
//                             $record[$i] = intval($record[$i]);
//                         } else {
//                             $record[$i] = floatval($record[$i]);
//                         }
//                     } else {
//                         $record[$i] = iconv("gbk", "utf-8", $record[$i]);
						
// 						if (preg_match('/[\x7f-\xff]+/', $record[$i])) {
// 							$language[$record[$i]] = $record[$i];
// 						}
//                     }
                    if (startWith($record[$i], '[') || startWith($record[$i], '{')) {
                        $record[$i] = json_decode($record[$i], true);
                    }
                    
                    if ($head[$i] == 'value') {
                        setProp($result, $key, $record[$i]);
                    } else {
                        setProp($result, $key .'.'.$head[$i], $record[$i]);
                    }
                }
            }
        }
    }
    
    fclose($fp);
    
    return $result;
}

function startWith($string, $prefix) {
    return (strpos($string, $prefix) === 0);
}


function getProp($array, $key) {
    $params = explode('.', $key);
    $stack = $array;
    foreach($params as $param) {
        if (isset($stack[$param])) {
            $stack = $stack[$param];
        } else {
            return null;
        }
    }
    
    return $stack;
}

function setProp(&$array, $key, $value) {
    $params = explode('.', $key);
    $stack = & $array;
    foreach($params as $param) {
        if (isset($stack[$param])) {
            $stack = & $stack[$param];
        } else {
            $stack[$param] = array();
            $stack = & $stack[$param];
        }
    }
    $stack = $value;
}

function makeMultiLang($arr) {
	$script = var_export($arr, true);
	preg_match_all('/\'.+?\'/', $script, $matches);
	
	$all = $matches[0];
	$all = array_unique($all);
	foreach($all as $text) {
		if (preg_match('/[\x7f-\xff]+/', $text)) {
			$script = str_replace($text, TRANS_FUNC . '('. $text . ')', $script);
		}
	}
	
	$script = '<?php ' . "\n" . '$config = ' . $script . ';';
	return $script;
}

function makeConfigFile($array, $makeObject=true) {
	$script = "<?php  \nreturn  ";
	
	$script .= var_export($array,true).";\n";
	$script .= "?>";
	if ($makeObject)
		$script = str_replace("array (", "(object)array (", $script);
	
	return $script;
}
?>