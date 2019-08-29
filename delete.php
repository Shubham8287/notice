<?php
require('php/connect.php') ?>
<?php require("php/notification.php") ?>
<?php (require("php/leave.php"))?>
<?php require("php/alertnotification.php") ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<title>admin panel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="adminStyle.css">

	

<script src="elements.js" > 

</script>


</script>
</head>
<body >

<div class="Header">
	<img src=<?php echo (" \" "."du-logo.png"." \" "); ?>  alt="Italian Trulli">
	<h1> Notice Panel</h1>

</div>
<div class = " container-fluid">

<div class="row">
  <div class="col-md-12 select-outline">

    <select class="custom-select bg-primary bg-dark " id="purpose">
      <option value="0" disabled selected>Choose your option</option>
      <option value="1">Photo/Video</option>
      <option value="2">Techers on Leave</option>
      <option value="3">Alert Notification</option>
       <option value="4">Notification</option>
    </select>
    </div>
</div>


<div class="deletealert">

<?php 
$cmd="SELECT * FROM alert"; 

$result= mysqli_query($connection,$cmd);
?>
<table class="table table-dark" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Description</th>
     
    </tr>
  </thead>
<tbody>
<?php
while($row=mysqli_fetch_array($result))
{ ?> <tr><td><?php	echo $row['id']; ?></td>
	<td><?php	echo $row['description']; ?></td></tr>
<?php }?>

</tbody>
</table>

  <form method="POST" class="formi">
    <input type="text" name="delid" placeholder="1 or 1,2,3"></input>
    <button type="submit" name="delete" > DELETE</button>
</form>
<?php 
if(isset( $_POST['delid']) )
{$sql = "DELETE FROM alert WHERE id IN (".$_POST['delid'].")";
mysqli_query($connection,$sql);
header("Refresh:0");
}
?>
</div>



<div class="DeleteLeave">

<?php 
$cmd="SELECT * FROM attendance"; 

$result= mysqli_query($connection,$cmd);
?>
<table  class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Course</th>
      <th scope="col">Start Date</th>
       <th scope="col">End Date</th>
     
    </tr>
  </thead>
<tbody>
<?php
while($row=mysqli_fetch_array($result))
{ ?> <tr><td><?php	echo $row['id']; ?></td>
	<td><?php	echo $row['name']; ?></td>
	<td><?php	echo $row['course']; ?></td>
	<td><?php	echo $row['startDate']; ?></td>
	<td><?php	echo $row['endDate']; ?></td></tr>
<?php }?>

</tbody>
</table>

  <form method="POST" class="formi">
    <input type="text" name="delid"  placeholder="1 or 1,2,3"></input>
    <button type="submit" name="delete   "> DELETE</button>
</form>
<?php 
if(isset( $_POST['delid']) )
{$sql = "DELETE FROM attendance WHERE id IN (".$_POST['delid'].")";

mysqli_query($connection,$sql);
header("Refresh:0");
}
?>
</div>




<div class="deletenotification">

<?php 
$cmd="SELECT * FROM notification"; 

$result= mysqli_query($connection,$cmd);
?>
<table class="table table-dark" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Description</th>
     
    </tr>
  </thead>
<tbody>
<?php
while($row=mysqli_fetch_array($result))
{ ?> <tr><td><?php	echo $row['id']; ?></td>
	<td><?php	echo $row['description']; ?></td></tr>
<?php }?>

</tbody>
</table>

  <form method="POST" class="formi">
    <input type="text" name="delid"  placeholder="1 or 1,2,3"></input>
    <button type="submit" name="delete" > Delete</button>
</form>
<?php 
if(isset( $_POST['delid']) )
{$sql = "DELETE FROM notification WHERE id IN (".$_POST['delid'].")";
mysqli_query($connection,$sql);
header("Refresh:0");
}?>
</div>



<div class="deleteimage">

<?php 
$cmd="SELECT * FROM uploads"; 

$result= mysqli_query($connection,$cmd);
?>
<table class="table table-dark" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
<tbody>
<?php
while($row=mysqli_fetch_array($result))
{ ?> <tr><td><?php  echo $row['id']; ?></td>
  <td><?php  echo $row['title']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td>
  <a  href= <?php echo (" \" ".$row['name']." \" " ); ?> > link </a>
<?php }?>
  </td></tr>
    

</tbody>
</table>


  <form method="POST" class="formi">
    <input type="text" name="delid"  placeholder="1 or 1,2,3"></input>
    <button type="submit" name="delete" > Delete</button>
</form>
<?php 
if(isset( $_POST['delid']) )
{ 
$sql = "SELECT * FROM uploads WHERE id IN (".$_POST['delid'].")";
$result = mysqli_query($connection,$sql);


while($row=mysqli_fetch_array($result))
  {unlink($row['name']);
  echo ($row['name']);


}$sql = "DELETE FROM uploads WHERE id IN (".$_POST['delid'].")";
mysqli_query($connection,$sql);
header("Refresh:0");
}?>
</div>



</div>
</body>
</html>