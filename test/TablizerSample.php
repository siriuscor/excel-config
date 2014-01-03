<?php
require '../Tablizer.php';

//can use multiple key column in table data
$table = array(
	array('key.task', 'key.attr', 'name'),
	array('100', '0', 'test100-0'),
	array('100', '1', 'test100-1'),
	array('101', '0', 'test101-0'),

    //can use mutliple head in one table
    //can use '//' as comment mark to ignore follow cells
    array('//some comment'),
    array('key.task', 'key.attr', 'name'),
	array('101', '1', 'test101-1'),
	);

$comparetable = array(
    array('key.task', 'key.attr', 'name'),
    array('100', '0', 'test100-0'),
    array('100', '1', 'test100-1'),
    array('101', '0', 'test101-0'),
    array('101', '1', 'test101-1'),
    );

//use tableMeta to specify table head when needed
$tableMeta = array(
	array('key.task', 'key.attr', 'name'),
	);

$array = array(
	100 => array(
		'task' => array(
			0 => array(
				'attr' => array(
					'name' => 'test100_0',
					),
				),
			1 => array(
				'attr' => array(
					'name' => 'test100_1',
					),
				),
		),
	),
	101 => array(
		'task' => array(
			0 => array(
				'attr' => array(
					'name' => 'test101_0',
					),
				),
			1 => array(
				'attr' => array(
					'name' => 'test101_1',
					),
				),
		),
	),
);

$tablizer = new tablizer\Tablizer();

//use hook to change tablize/untablize behavior custome
//use reference to change the value when tablize
$tableCB = function($key, &$value) {
    $value = str_replace('_', '-', $value);
};

$untableCB = function($head, &$value, $row) {
    $value = str_replace('-', '_', $value);
};
$newTable = $tablizer->tablize($array, $tableMeta, $tableCB);
compareArray($comparetable, $newTable);
$newArray = $tablizer->untablize($table, $newMeta, $untableCB);
compareArray($array, $newArray);

function compareArray($array1, $array2) {
	array_path_walk($array1, function($path, $value) use ($array2) {
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