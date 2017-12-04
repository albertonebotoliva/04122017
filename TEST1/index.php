<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<?php require_once("./functions.php") ?>
<?php 
$arr = array(1042,701, 512, 819, 1139, 971);
	$result = maxMoneyICouldHaveDone($arr);


?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<?php 
			print_r($arr)
		?>
	<br />
	<br />
	Result:
	<h4><?php echo $result ?></h4>
	</div>
	<div class="col-md-3"></div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>