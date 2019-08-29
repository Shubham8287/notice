<?php require("php/connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="50"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<title>Digital Notice Board</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="adminStyle.css">

	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<?$result= mysqli_query($connection,$cmd);
	<script type="text/javascript">
		$(function()
		{

		$("#m").attr("src","uploads/du-logo.png");



		});
	</script>

	<div class="main-class ">
	
		<div class="main-head col-12 my-2 p-2">
			<h1>Ramanujan College - Digital Notice Board</h1>
		</div>

		<!-- ROW 1 -->

		<div class="row mb-3 d-flex justify-content-center">

			<!-- Teacher Absent Section -->

			<div class="sec col-5 mr-4">
				<div class="sec-heading photos-videos m-2">
					<h5>Photos/Videos</h5>
				</div>
				<div >
					
					<img  id ="im" width="220px" src="getData.php" alt="">
				</div> 
			</div>

			<!-- Teacher Absent Section -->

			<div class="sec col-5 ml-4 ">
				<div class="sec-heading teacher-absent m-2">
					<h5>Teacher Absent</h5>
				</div>
				<div class="row d-flex justify-content-center">
					
					<?php $cmd="SELECT * FROM attendance; ";
					$result= mysqli_query($connection,$cmd);

				while($row=mysqli_fetch_array($result))	
				{
       			 
        		?>
					<div class="mx-2 teacher-absent-name col-5">
						<?php  echo $row['name']; ?>
					</div><?php } ?>

				</div>
			</div>

		</div>

		<!-- ROW 2 -->

		<div class="row mb-3 d-flex justify-content-center">

			<!-- Imp Notification Section -->

			<div class="sec col-5 mr-4">
				<div class="sec-heading imp-notification m-2">
					<h5>Imp Notification</h5>
				</div>
				<div class="col-12 text-danger">
					<?php $cmd="SELECT * FROM alert ";
					$result= mysqli_query($connection,$cmd);

				while($row=mysqli_fetch_array($result))	
				{
       			 
        		?>
						<div class="imp-notification-border">
						<h6><?php  echo $row['description']; ?></h6>
					</div>
					<?php }?>
				</div>
			</div>

			<!-- Notification Section -->

			<div class="sec col-5 ml-4">
				<div class="sec-heading notification m-2">
					<h5>Notification</h5>
				</div>
				<div id="test">
				<div class="col-12">
					<?php $cmd="SELECT * FROM notification ";
					$result= mysqli_query($connection,$cmd);

				while($row=mysqli_fetch_array($result))	
				{
       			 
        		?>
					<div class="notification-border">
						<h6><?php  echo $row['description']; ?>.</h6>
					</div><?php } ?>
					
				</div>
				</div>
			</div>

		</div>




	</div>
	
</body>
</html>