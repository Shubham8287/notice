<?php
require('connect.php');
$d=date('y-m-d');
 $sql = "DELETE FROM attendance WHERE endDate <'".$d."'";

 mysqli_query($connection,$sql) ;
?>