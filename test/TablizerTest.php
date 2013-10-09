<?php
require '../Tablizer.php';

$table = array(
	array('key.task', 'key.attr', 'name'),
	array('100', '0', 'test100-0'),
	array('100', '1', 'test100-1'),
	array('101', '0', 'test101-0'),
	array('101', '1', 'test101-1'),
	);

$tableMeta = array(
	array('key.task', 'key.attr', 'name'),
	);

$array = array(
	100 => array(
		'task' => array(
			0 => array(
				'attr' => array(
					'name' => 'test100-0',
					),
				),
			1 => array(
				'attr' => array(
					'name' => 'test100-1',
					),
				),
		),
	),
	101 => array(
		'task' => array(
			0 => array(
				'attr' => array(
					'name' => 'test101-0',
					),
				),
			1 => array(
				'attr' => array(
					'name' => 'test101-1',
					),
				),
		),
	),
);

$tablizer = new tablizer\Tablizer();

$newArray = $tablizer->tablize($array, $tableMeta);
compareArray($array, $newArray);

function compareArray($array1, $array2) {
	array_path_walk($array1, function($path, $value) {
	global $array2;
	if (!array_path_isset($array2, $path)) {
		echo "$path not set\n";
		return;
	}
	$newValue = array_path_get($array2, $path);
	if ($newValue != $value) {
		echo "$path not equal $value:$newValue\n";
		return;
	}
});
}
?>