<?php
session_start();



require 'ConfigConverter.php';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$side = isset($_REQUEST['side']) ? $_REQUEST['side'] : null;

if ($action == 'upload') {
	if ($_FILES['file']['error'] == 0) {
		$otherside = $side == 'left' ? 'right' : 'left';
		$from = tempnam("/tmp", $side);
		$to = tempnam("/tmp", $otherside);

		$_SESSION[$side . '_file'] = $from;
		$_SESSION[$otherside . '_file'] = $to;
		$pathinfo = pathinfo($_FILES['file']['name']);
		$_SESSION['filename'] = $pathinfo['filename'];

		move_uploaded_file($_FILES['file']['tmp_name'],$from);

		$converter = new ConfigConverter();
		$converter->ignoreEmpty = array('rewards.reward.0.attributes.will_share', 'results.attributes.description');
		
		if ($side == 'left') {
			$converter->convert($from, 'php_array', $to, 'win_csv');
		} else {
			$converter->convert($from, 'win_csv', $to, 'php_array');
		}
	}
} else if ($action == 'download') {
	$contents = file_get_contents($_SESSION[$side . '_file']);
	$ext = $side == 'left' ? 'php' : 'csv';
	header('Content-Disposition:attachment;filename='.$_SESSION['filename'].'.'.$ext.';');
	echo $contents;
	exit;
} else {
	//clear session
	if(isset($_SESSION['left_file']) && file_exists($_SESSION['left_file'])) {
		unlink($_SESSION['left_file']);
	}
	if(isset($_SESSION['right_file']) && file_exists($_SESSION['right_file'])) {
		unlink($_SESSION['right_file']);
	}
	unset($_SESSION['left_file']);
	unset($_SESSION['right_file']);
	unset($_SESSION['filename']);
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
		#padding-top: 30px;
	}
</style>
<body>
	<div class="container-fluid" style="margin:20px;">
		<div class="row">
<div class="col-md-5">
	<h2>PHP File</h2>
	<form class="form-inline" role="form" action="" enctype="multipart/form-data" id="left" method="post">
	<div class="form-group">
	<input type="file" id="php_file" name="file"/>
	<input type="hidden" name="action" value="upload"/>
	<input type="hidden" name="side" value="left"/>
	</div>
	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-open"></span> Upload</button>
	<a class="btn btn-primary" href="?action=download&side=left"><span class="glyphicon glyphicon-download-alt"></span> Download</a>
	<!--
	<div class="btn-group">
  <a type="button" class="btn btn-primary">Download</a>
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#"><img src="http://www.charlesproxy.com/static/img/os_windows.gif?k=e8c912aed5" width="30" height="26"></a></li>
    <li><a href="#"><img src="http://www.charlesproxy.com/static/img/os_macos.gif?k=e8c912aed5" width="30" height="26"></a></li>
  </ul>
</div>
-->
	</form>

	<div class="well well-sm" style="margin-top:10px;overflow:auto;height:600px;">
		<?php 
			if (isset($_SESSION['left_file'])) 
				highlight_file($_SESSION['left_file']);
			else
				echo 'select a php config file and upload';
		?>
	</div>
</div>

<div class="col-md-1 text-center"><span class="glyphicon glyphicon-transfer" style="font-size:38px;margin-top:200px;"></span></div>
<div class="col-md-6">
	<h2>CSV File</h2>
	<form class="form-inline" role="form" action="" enctype="multipart/form-data" id="right" method="post">
	<div class="form-group">
	<input type="file" id="csv_file" name="file">
	<input type="hidden" name="action" value="upload"/>
	<input type="hidden" name="side" value="right"/>
	</div>
	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-open"></span> Upload</button>
	<a class="btn btn-primary" href="?action=download&side=right"><span class="glyphicon glyphicon-download-alt"></span> Download</a>
	</form>

	<div style="margin-top:10px;overflow:auto;height:600px;border:1px solid;border-color:#dcdcdc;border-radius:3px;">
		<?php if (isset($_SESSION['right_file'])) {
			$converter = new ConfigConverter();
			$data = $converter->read($_SESSION['right_file'], 'win_csv');
			echo '<table class="table table-bordered">';
			foreach($data as $row) {
				echo '<tr>';
				foreach($row as $cell) {
					echo "<td>$cell</td>";
				}
				echo '</tr>';
			}
			echo '</table>';
		} else {
			echo 'select a csv file and upload';
		}?>
	</div>
</div>
</div>
	</div>

	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</body>

</html>