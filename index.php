<?php require("php/connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="50"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<title>Digital Notice Board</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script async src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script async src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script async src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="style.css">
	
</head>

<body>
	<?$result= mysqli_query($connection,$cmd);

	<div class="main-class ">
	
		<header class="main-head col-12 mb-4 p-3">
			<h1>Ramanujan College - Digital Notice Board</h1>
		</header>

		<!-- ROW 1 -->

		<div class="row mb-4 d-flex justify-content-center">

			<!-- Teacher Absent Section -->

			<div class="sec col-5 mr-4">
				<div class="sec-heading photos-videos">
					<h3>Photo Gallery</h3>
				</div>
			</div>

			<!-- Teacher Absent Section -->

			<div class="sec col-5 ml-4 ">

				<div class="sec-heading teacher-absent">
					<h3>Teacher Absent</h3>
				</div>
				<div class="row d-flex justify-content-center">
					
				<?php $cmd = "SELECT * FROM attendance;";
				$result = mysqli_query($connection,$cmd);

				while($row = mysqli_fetch_array($result))	
				{
       			 
        		?>
				<div class="mx-1 mb-2 teacher-absent-name col-5">
					<h5><?php echo $row['name']; ?></h5>
				</div><?php } ?>

				</div>
			</div>

		</div>

		<!-- ROW 2 -->

		<div class="row mb-2 d-flex justify-content-center">

			<!-- Imp Notification Section -->

			<div class="sec col-5 mr-4">
				<div class="sec-heading imp-notification">
					<h3>Imp Notification</h3>
				</div>
				<div class="col-12">
					<?php $cmd="SELECT * FROM alert
					ORDER BY id DESC";
					$result= mysqli_query($connection,$cmd);

					while($row=mysqli_fetch_array($result))	
					{
       			 
        			?>
					<div class="my-2 imp-notification-border">
						<h6><?php  echo $row['description']; ?></h6>
					</div>
						<?php }?>
				</div>

			</div>

			<!-- Notification Section -->

			<div class="sec col-5 ml-4">
				<div class="sec-heading notification">
					<h3>Notification</h3>
				</div>
				<div id="test">
				<div class="col-12">
					<?php $cmd="SELECT * FROM notification
					ORDER BY id DESC ";
					$result= mysqli_query($connection,$cmd);

				while($row=mysqli_fetch_array($result))	
				{
       			 
        		?>
					<div class="my-2 notification-border">
						<h6><?php  echo $row['description']; ?>.</h6>
					</div><?php } ?>
					
				</div>
				</div>
			</div>

		</div>
	</div>
	<script src="myScript.js" type="text/javascript"></script>
</body>
</html>