<?php
set_time_limit(0);
session_start();
define('PMCONF', dirname(__FILE__) . '/../../pmconf/');
define('UPLOAD_PATH', dirname(__FILE__) . '/nxytools/upload/');
require 'excel-config/ConfigConverter.php';
require_once('excel-config/spreadsheet-reader/php-excel-reader/excel_reader2.php');
require_once('excel-config/spreadsheet-reader/SpreadsheetReader.php');

$combine = array(
    'ItemsProduction'   => 'store',
    'Animals'            => 'store',
    'Misc'               => 'store',
    'Monetization'       => 'store',
    'Automation'         => 'store',
    'Fertilizer'         => 'store',
    'Special'            => 'store',
    'Construction'       => 'store',
    'BarnSilo Upgrades' => 'store',
    'Expansions'         => 'store',
    'Level Curve'        => 'level',
    'OrderDurations'     => 'order_durations',
    'Recipes'            => 'cookbook',
    'Quests'             => 'story',
    'Quest Tasks'        => 'story',
    'Drop'               => 'dropItem',
    'BoardOrder'         => 'b_order',
    'NPC'                => 'npc',
    'Achievement'        => 'achievement',
    'Lang'              => 'lang',
    'OrderModifiers'     => 'b_order_modifier',
	'SalePackage'     => 'sale_package',
    'LuaFeature'        => 'lua_feature',
);

$makeConfig = array(
    'store'          => array('makestore', 'makelevel', 'makeorders'),
    'story'          => array('makestory'),
    'cookbook'       => array('makestore'),
    'workshop'       => array('makestore'),
    'level'          => array('makelevel', 'makeorders'),
    'dropItem'       => array('makedropindex'),
    'orders'         => array('makeorderindex'),
    'achievement'    => array('makeachieveindex'),
    'b_order_modifier'=> array('makeorders'),
);

$lang   = isset($_REQUEST['lang']) && in_array($_REQUEST['lang'], $langs) ? $_REQUEST['lang'] : 'en';
$output = array();

$updateFlag = false;
if (isset($_REQUEST['confirm']) && $_REQUEST['confirm'] == 'yes' && isset($_REQUEST['files']) && !empty($_REQUEST['files'])) {//confirm update
    // $files = explode(',', $_REQUEST['files']);
    $files = $_REQUEST['files'];
    foreach ($files as $configName) {
        $savePath = UPLOAD_PATH . $configName . '.php';
        $confPath = PMCONF . 'platforms/' . $lang . '/' . $configName . '.php';
        executeCmd('cp -f ' . $savePath . ' ' . $confPath . ' 2>&1');
        makeConfig($configName, $lang);
    }
    
    $updateFlag = true;
}

if (isset($_REQUEST['sync']) && $_REQUEST['sync'] == 'yes') {
    if (extension_loaded('openssl')) {
        header('Location: serviceAuth.php');
    } else {
        header('Location: oauth2callback.php');
    }
    die();
}
//back from oauth login
if (isset($_REQUEST['local']) && $_REQUEST['local'] == 'yes') {
    $savePath = UPLOAD_PATH . 'config.ods';
    if (file_exists($savePath)) {
        // $begin = microtime(true);
        $excelData = readExcel($savePath);
        // var_dump(microtime(true) - $begin);
        convertConfig($excelData);
        // var_dump(microtime(true) - $begin);
        // unlink($savePath);
    } else {
        // echo 'error occurs:file not exist';
        // die();
    }
}

if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
    //TODO:check file type
    $savePath         = UPLOAD_PATH . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $savePath);
    $_SESSION['file'] = $savePath;

    $excelData = readExcel($savePath);
    convertConfig($excelData);

    unlink($savePath);
}

function makeConfig($configName, $lang = 'en') {
    global $makeConfig;
    static $ARR;

    if (!isset($makeConfig[$configName]))
        return;
    $scripts = $makeConfig[$configName];
    foreach ($scripts as $script) {
        $cmd = 'php ' . PMCONF . 'script/' . $script . '.php ' . $lang . ' 2>&1';
        if (isset($ARR[$cmd])) { continue; }

        executeCmd($cmd);

        $ARR[$cmd] = 1;
    }
}

function executeCmd($cmd) {
    $output = array();
    // var_dump($cmd);
    exec($cmd, $output);
    if (!empty($output)) {
        if (!(count($output) == 1 && empty($output[0]))) {
            var_dump($output);
        }
    }
}

function readExcel($filepath) {
    global $combine;
    $reader     = new \SpreadsheetReader($filepath);
    $sheetsName = $reader->Sheets();
    // var_dump($sheetsName);
    $sheets = array();
    foreach ($combine as $sheet => $config) {
        // $sheetIndex = array_search($sheet, $sheetsName);
        // if ($sheetIndex === false) {
        //     throw new Exception('sheet not found:' . $sheet);
        // }
        $changeResult = $reader->changeSheet($sheet);
        $result       = array();
        foreach ($reader as $row) {
            // var_dump($row);
            foreach ($row as &$cell) {
                $cell = str_replace('::', ':', $cell);
                $cell = str_replace(',,', ',', $cell);
            }
            $result[] = $row;
            
        }
        if (!isset($sheets[$config])) {
            $sheets[$config] = $result;
        } else {
            $sheets[$config] = array_merge($sheets[$config], $result);
        }
    }

    return $sheets;
}

function convertConfig($excelData) {
    global $lang, $output;
    $tablizer              = new tablizer\Tablizer();
    $tablizer->onUntablize = function($headCell, &$value, $row) {
        // if (in_array($headCell, array('giftable', 'trade_for', 'buyable', 'map_object', 'giftinvisible', 'constructible', 'flipable', 'new_giftable', 'show_name', 'need_invite', 'buy_gift', 'is_link', 'ignore_filter', 'can_make_feed'))) {
        //     if ($value === '0' || $value === 'FALSE') {
        //         $value = false;
        //     }

        //     if ($value === '1' || $value === 'TRUE') {
        //         $value = true;
        //     }
        // }
        // var_dump($head);
        if (in_array($headCell, array('attributes.visible', 'use_all_rp', 'autojump'))) {
            if ($value === '0') {
                $value = 'FALSE';
            }

            if ($value === '1') {
                $value = 'TRUE';
            }
        } else {
            if ($value === 'FALSE') {
                $value = false;
            }
            if ($value === 'TRUE') {
                $value = true;
            }
        }

        if (in_array($headCell, array('rewards.reward.0.attributes.will_share', 'nexts.next.0.attributes.id', 'results.attributes.description'))) {
            return true;
        }
    };

    $objectConfig = array('store', 'level', 'story');
    foreach ($excelData as $configName => $data) {
        // var_dump('processing ' . $configName);
        $begin  = microtime(true);
        $result = $tablizer->untablize($data);
        if (in_array($configName, $objectConfig)) {
            $makeObject = true;
        } else {
            $makeObject = false;
        }
        $stream   = new tablizer\PHPStream($makeObject);
        $content  = $stream->write($result);
        $savePath = UPLOAD_PATH . $configName . '.php';
        file_put_contents($savePath, $content);


        //make config file
        $confPath = PMCONF . 'platforms/' . $lang . '/' . $configName . '.php';
        // $output .= 'DIFF in ' . $configName . "\n";
        // $output[] = array('DIFF', $configName);
        $diff = compareConfigFile($confPath, $savePath);
        if (!empty($diff)) {
            $output[$configName] = $diff;
        }
        // var_dump($output);
        // var_dump($configName . ' use ' . (microtime(true) - $begin));
        // executeCmd('cp -f '. $savePath . ' ' .$confPath . ' 2>&1');
        // makeConfig($configName, $lang);
    }
}

function compareConfigFile($origin, $new) {
    if (!defined('SYS_PATH'))
        define('SYS_PATH', '');
    if (!file_exists($origin))
        return;
    $originData = require $origin;
    $newData    = require $new;

    $originData = json_decode(json_encode($originData), true);
    $newData    = json_decode(json_encode($newData), true);

    $diff = compareConfig($originData, $newData);
    return $diff;
}

function compareConfig($originData, $newData) {
    // global $output;
    $output = array();
    array_path_walk($originData, function($path, $value) use ($newData, &$output) {
        if (!array_path_isset($newData, $path)) {
            // echo "$path not set : $value<br>\n";
            // $output .= "$path not set : $value\n";
            $output[] = array($path, $value, 'Not Set');
            return;
        }
        $newValue = array_path_get($newData, $path);
        if ($newValue !== $value) {
            if (strval($newValue) === strval($value)) {
                
            } else {
                // $output .= "$path not equal $value <-> $newValue(new)\n";
                $output[] = array($path, $value, $newValue);
                // echo "$path not equal $value:$newValue<br>\n";
                return;
            }
        }
    });
    array_path_walk($newData, function($path, $value) use ($originData, &$output) {
        if (!array_path_isset($originData, $path)) {
            // echo "$path not set : $value<br>\n";
            // $output .= "add field $path value : $value\n";
            $output[] = array($path, 'Not Set', $value);
            return;
        }
    });

    return $output;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
    </head>
    <style>
        body {
            /*        padding-top: 30px;*/
        }
    </style>
    <body>
        <div class="container" style="margin:20px;">
            <?php if ($updateFlag) { ?>
                <div class="alert alert-success">Config files updated!</div>
            <?php } ?>
            <div class="jumbotron">
                <form method="post">
                    <h2>Use Google Doc <a href="https://docs.google.com/spreadsheet/ccc?key=1wo2YZ6kMIYJZEOgZ5Px5rY-H8VVjQQYrtdSw7vtsGEk">Here</a>

                        <button class="btn btn-primary btn-lg" data-loading-text="Loading..." onclick="$(this).button('loading');"><span class="glyphicon glyphicon-refresh"></span> Sync</button>
                        <input type="hidden" name="sync" value="yes"/>

                    </h2>
                </form>
                <!--
                <h2> Or </h2>
                <h2>Upload Excel Download from Google Doc</h2>
                <form class="form-inline" role="form" action="" enctype="multipart/form-data" id="right" method="post">
                    <div class="form-group">
                        <input type="file" id="file" name="file">
                    </div>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-open"></span> Upload</button>
                </form>
                -->
            </div>
            <?php if (isset($output) && isset($excelData)) { ?>
                <div class="well">
                    <h1>Diffs:(scroll down to confirm update)</h1>
                    <?php foreach($output as $configName => $diff) { ?>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><?php echo 'DIFF in [<b>' . $configName . '</b>]'; ?></div>
                        <table class="table table-bordered table-condensed">
                        <tr class="success"><th>DIFF KEY</th><th>Old Value</th><th>New Value</th></tr>
                        <?php 
                        foreach($diff as $line) {
                            echo '<tr>';
                            foreach($line as $cell) {
                                if ($cell === 'Not Set') {
                                    $cell = '<span class="label label-warning">' . $cell . '</span>';
                                }
                                echo '<td>' . $cell . '</td>';
                            }
                            
                            echo '</tr>';
                        }
                        ?>
                        </table>
                    </div>
                    <?php } ?>
                    <form method="post">
                        <h2><center> Files to Update:
                                <?php
                                foreach (array_keys($excelData) as $configName) {
                                    // echo '<input type="checkbox" name="file" value="' . $configName . '" checked>'.$configName.'</input> ';
                                    echo '<label class="checkbox-inline">
  <input type="checkbox" name="files[]" value="' . $configName . '" checked> ' . $configName . '
</label>';
                                }
                                ?>
                            </center></h2>
                        <center><button class="btn btn-warning btn-lg">Confirm Update</button></center>
                        <input type="hidden" name="confirm" value="yes"/>
                        <input type="hidden" name="local" value="no"/>
                    </form>
                </div>
            <?php } ?>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
