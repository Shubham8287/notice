<?php
require("connect.php");
$date=date('y-m-d');
 $sql = "DELETE FROM attendance WHERE endDate <'".$date."'";

 mysqli_query($connection,$sql) ;
?>