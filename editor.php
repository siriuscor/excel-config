<?php
session_start();
define('CSV_PATH', dirname(__FILE__) . '/test-csv/');
define('CONFIG_PATH', dirname(__FILE__) . '/test-config/');

require 'ConfigConverter.php';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$filename = isset($_REQUEST['filename']) ? $_REQUEST['filename'] : null;
switch ($action) {
	case 'view':
		$wholePath = CSV_PATH . $filename;
		if (empty($filename) || !file_exists($wholePath)) {
			die('file not assign');
		}

		$converter = new ConfigConverter();
		$data = $converter->read($wholePath, 'win_csv');
		break;
	case 'save':
		$converter = new ConfigConverter();
		$data = $_REQUEST['data'];
		$array = $converter->table2array($data);
		$content = $converter->write($array, 'php_array');
		file_put_contents(CONFIG_PATH . 'cookbook.php', $content);
		echo 'ok';
		die();
		break;
	case 'download':
		# code...
		break;
	case 'upload':
		# code...
		break;
	default:
		break;
}

// $data = $converter->array2table($data);
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

	<link rel="stylesheet" media="screen" href="handsontable/jquery.handsontable.full.css">

</head>
<style>
	body {
		#padding-top: 30px;
	}
    .handsontable .currentRow {
      background-color: #E7E8EF;
    }

    .handsontable .currentCol {
      background-color: #F9F9FB;
    }
</style>
<body>
	<div class="container-fluid" style="margin:20px;">
		<div class="row">
<div class="col-md-12">
	<h2>Config Converter</h2>
	<form class="form-inline" role="form" action="" enctype="multipart/form-data" id="right" method="post">
	<div class="form-group">
	<input type="file" id="csv_file" name="file">
	<input type="hidden" name="action" value="upload"/>
	</div>
	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-open"></span> Upload</button>
	<a class="btn btn-primary" href="?action=download"><span class="glyphicon glyphicon-download-alt"></span> Download</a>
	
	</form>
	<button class="btn btn-primary" id="saveBtn" onclick="postTable();return false;"><span class="glyphicon glyphicon-download-alt"></span> Save</button>
<div id="dataTable" style="overflow:auto;height:200px;margin-top:10px;"></div>

<div id="textConsole"/>
</div>
</div>
	</div>


	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="handsontable/jquery.handsontable.full.js"></script>

<script>
  var data = <?php 
  echo json_encode($data);
?>;
  $("#dataTable").handsontable({
    data: data,
    rowHeaders: true,
	colHeaders: true,
    startRows: 6,
    startCols: 8,
    stretchH: 'all',
    contextMenu: true,
    currentRowClassName: 'currentRow',
	currentColClassName: 'currentCol',
    fixedRowsTop: 1,
  	fixedColumnsLeft: 1,
  	minSpareRows: 1
  });

var $console = $('#textConsole');

function postTable() {
  $.ajax({
  	url : 'editor.php',
    data: {"data": $("#dataTable").data('handsontable').getData(), 'action':'save'}, //returns all cells' data
    dataType: 'text',
    type: 'POST',
    success: function (res) {
      if (res === 'ok') {
        $console.text('Data saved');
      }
      else {
        $console.text('Save error');
      }
    },
    error: function () {
      $console.text('Request error.');
    }
  });
  // return false;
}
</script>
</body>

</html>