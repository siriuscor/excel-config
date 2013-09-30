<?php

include 'ConfigConverter.php';
$inputFile = 'test-csv/story-extend.csv';
$outputFile = 'test-config/story-extend.php';

// $filename = $inputFile;
// $pathinfo = pathinfo($filename);
// $base = $pathinfo['filename'];

$converter = new tablizer\ConfigConverter();
// $csvStream = new tablizer\CSVStream(';');
// $phpStream = new tablizer\PHPStream();
// $data = $converter->filterChain($inputFile, array($csvStream, $phpStream));
$converter->ignoreEmpty = array('rewards.reward.0.attributes.will_share', 'results.attributes.description');
// var_dump($data);
$converter->convertFile($inputFile, 'mac_csv', $outputFile, 'php_object');
// die();
/*
$data = $converter->read($inputFile, 'mac_csv');

// $content = $converter->write($data, 'mac_csv');
// file_put_contents($inputFile, $content);

// die();
$tablizer = new Tablizer();
$tablizer->ignoreEmpty = array('rewards.reward.0.attributes.will_share', 'results.attributes.description');
$data = $tablizer->untablize($data);
// $content = $converter->write($array, 'php_array');
// file_put_contents(CONFIG_PATH . $base . '.php', $content);

$content = $converter->write($data, 'php_object');
file_put_contents($outputFile, $content);
*/
// die();
//test
$origin = 'test-config/story.php';
$originData = require $origin;
$originSign = md5(json_encode($originData));
echo $originSign . "\n";

$newData = require $outputFile;
$newSign = md5(json_encode($newData));
echo $newSign . "\n";

$originData = json_decode(json_encode($originData), true);
$newData = json_decode(json_encode($newData), true);

//compare two array
array_path_walk($originData, function($path, $value) {
	global $newData;
	$newValue = array_path_get($newData, $path);
	if ($newValue != $value) {
		echo "$path not equal $value:$newValue\n";
	}
})
// var_dump(array_diff(json_decode(json_encode($originData), true), json_decode(json_encode($newData), true)));
?>