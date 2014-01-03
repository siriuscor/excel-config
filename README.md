excel-config
============

convert php array to table data(refer as 'Tablize')
or oppsite flow(refer as 'Untablize')
commonly used in convert excel file to php config file

Sample:

	$data = array(
				2 => array('item1' => 1, 'item2' => 2),
				3 => array('item1' => 3, 'item2' => 4),
			);

	$tablizer = new Tablizer();
	$table = $tablizer->tablize($data);
	//table will be
	//array(
	//	array('key', 'item1', 'item2'),
	//	array('2', '1', '2'),
	//	array('3', '3', '4'),
	//)

	//follow will turn it back
	$data = $tablizer->untablize($table);

more samples see test/TablizerSample