<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<?php require_once("./functions.php") ?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form action="" method="post" >
			<label>Enter a string:</label>
			<input class="form-control" type="text" required name="str" value="" />
			<input type="submit" value="submit" class="btn btn-default" />
		</form>
	</div>
	<div class="col-md-3"></div>
</div>

<?php 
$outputArr = array();	
if ( isset( $_POST['str'] ) && !empty( $_POST['str'] ) ) {
	$str = $_POST['str'];
	permutatorEngine($str,0,strlen($str),$outputArr); 
}
?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<ul class="list-group"> 
		<?php 
			foreach ($outputArr as $value) {
		?>
				<li class="list-group-item">
					<?php echo $value ?>
				</li>	
		<?php 	
			}
		?>
		</ul>
	</div>
	<div class="col-md-3"></div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>