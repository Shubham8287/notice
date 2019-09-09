<?php
require('connect.php');
if(isset($_POST['alertdisc'])){
	$disc=$_POST['alertdisc'];

	$query = "INSERT INTO `alert` (description) VALUES('$disc')";
	 mysqli_query($connection,$query);
}
?>
