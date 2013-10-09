<?php

require '../ConfigConverter.php';
$inputFile = 'story-extend.xlsx';
$outputFile = 'story-extend.php';

$converter = new tablizer\ConfigConverter();
$converter->ignoreEmpty = array('rewards.reward.0.attributes.will_share', 'results.attributes.description');
$converter->convertFile($inputFile, 'xlsx', $outputFile, 'php_object');


//test
$origin = 'story.php';
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
	if (!array_path_isset($newData, $path)) {
		echo "$path not set\n";
		return;
	}
	$newValue = array_path_get($newData, $path);
	if ($newValue != $value) {
		echo "$path not equal $value:$newValue\n";
		return;
	}
});

?>