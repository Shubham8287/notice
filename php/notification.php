<?php
require('connect.php');
if(isset($_POST['disc'])){
	$disc=$_POST['disc'];

	$query = "INSERT INTO `notification` (description) VALUES('$disc')";
	 mysqli_query($connection,$query);
}
?>
