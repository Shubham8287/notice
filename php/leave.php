<?php
require('connect.php');
$d=date('y-m-d');
 $sql = "DELETE FROM attendance WHERE endDate <'".$d."'";

 mysqli_query($connection,$sql) ;

if(isset($_POST['name'])&&isset($_POST['selectedCourse'])&&isset($_POST['sdate'])&&isset($_POST['edate'])){
		$name=$_POST['name'];
		$course=$_POST['selectedCourse'];
		$sdate=$_POST['sdate'];
		$edate=$_POST['edate'];

		$dateTimestamp1 = strtotime($sdate); 
		$dateTimestamp2 = strtotime($edate); 
  
// Compare the timestamp date  
	if ($dateTimestamp1 > $dateTimestamp2) 
    echo("<script>alert('fill Dates correctly');</script>"); 
else
    {
	$query = "INSERT INTO `attendance` (name,course,startDate,endDate) VALUES('$name','$course','".$sdate."','".$edate."')";
	 mysqli_query($connection,$query) ;

	}
	 

}



?>
