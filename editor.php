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
    echo json_encode($data);
    exit;
		break;
	case 'save':
    $pathinfo = pathinfo($filename);
    $base = $pathinfo['filename'];

		$converter = new ConfigConverter();
		$data = $_REQUEST['data'];

    $content = $converter->write($data, 'win_csv');
    file_put_contents(CSV_PATH . $base . '.csv', $content);

    $tablizer = new Tablizer();
		$array = $tablizer->untablize($data);
		$content = $converter->write($array, 'php_array');
		file_put_contents(CONFIG_PATH . $base . '.php', $content);
		echo 'ok';
		exit;
		break;
	case 'download':
    $wholePath = CSV_PATH . $filename;
		if (file_exists($wholePath)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename='.basename($wholePath));
      header('Content-Transfer-Encoding: binary');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($wholePath));
      readfile($wholePath);
      exit;
    }
		break;
	case 'upload':
		
		break;
	default:
    $fileList = scandir(CSV_PATH);
    $csvList = array();
    foreach($fileList as $file){
        $pi = pathinfo($file);
        if(isset($pi['extension'])){
            if(strtolower($pi['extension']) == 'csv'){
                array_push($csvList, $file);
            }
        }
    }
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
		#padding-top: 20px;
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
<div class="col-md-2">
  <div class="panel panel-info">
  <div class="panel-heading">Files</div>
  <div class="list-group">
  <?php foreach($csvList as $file) { ?>
  <a href="#" class="list-group-item" onclick="viewCSV('<?php echo $file;?>')"><?php echo $file;?></a>
  <?php } ?>
  </div>
</div>

  
</div>
<div class="col-md-10">
	<form class="form-inline" role="form" action="" enctype="multipart/form-data" id="right" method="post">
<!-- 	<div class="form-group">
	<input type="file" id="csv_file" name="file">
	<input type="hidden" name="action" value="upload"/>
	</div> -->
	<!-- <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-open"></span> Upload</button> -->
	<button class="btn btn-primary"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
	
	<button class="btn btn-primary" id="saveBtn" onclick="postTable('<?php echo $file;?>');return false;" data-loading-text="Saving...">
    <span class="glyphicon glyphicon-floppy-disk"></span> Save
  </button>
    </form>
<div id="dataTable" style="overflow:auto;height:600px;margin-top:10px;"></div>

<div id="textConsole"/>
</div>
</div>
	</div>


	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="handsontable/jquery.handsontable.full.js"></script>
<script>
  var data = [];
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
  	minSpareRows: 1,
    manualColumnResize: true,
  });

var $console = $('#textConsole');
var handsontable = $("#dataTable").data('handsontable');
var viewfile = '';

function viewCSV(filename) {
    $.ajax({
    url : 'editor.php',
    data: {"filename": filename, 'action':'view'}, //returns all cells' data
    dataType: 'json',
    type: 'POST',
    success: function (res) {
      // $console.text(res);
      handsontable.loadData(res);
      viewfile = filename;
    },
    error: function () {
      $console.text('Request error.');
    }
  });
}

function postTable() {
  $('#saveBtn').button('loading');
  $.ajax({
  	url : 'editor.php',
    data: {"data": handsontable.getData(), "filename": viewfile, "action":'save'}, //returns all cells' data
    dataType: 'text',
    type: 'POST',
    success: function (res) {
      if (res === 'ok') {
        $console.text('Data saved');
        $('#saveBtn').button('reset');
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