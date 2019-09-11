<?php require("php/notification.php"); 
?>
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

	<script> $(function() {
	$(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
} );
</script>

  <script src= teachersSuggestion.js>
  </script>


<script src="elements.js" > 

</script>


</script>
</head>
<body >

<div class="Header">
	<img src="du-logo.png" alt="Italian Trulli">
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



<div class="Notification">
	  <div class="col-md-12 select-outline">
    <form method="POST"  >
  <div class="form-group">

    <textarea class="form-control" name="disc" rows="3" placeholder="notification..." required></textarea>
  </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
</div>

<div class="alertNotification">
    <div class="col-md-12 select-outline">
    <form method="POST" >
  <div class="form-group">

    <textarea class="form-control" name="alertdisc" rows="3" placeholder="notification..." required></textarea>
  </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
</div>



  <div class="Image">
     <div class="col-md-12 select-outline">
      <form method="POST" enctype="multipart/form-data">
        <div class="row">
           <div class="col-md-4"> 
          <h2>Title: &nbsp</h2> 
          <?php require("php/image.php") ?>
            <input type="text"   name="title" placeholder="Title" class="ui-widgets" required>
            <input type="file" name="fileToUpload" id="imageUpload" required>
             <button type="submit" name="imagesubmit" class="btn btn-primary">Save</button>

          </div>
        </div>
      </form></div></div>
  
  <div clss="row">
<div class="Leave">
		 <div class="col-md-12 select-outline">
		 	<form method="POST" >
		 		<div class="row">
		 			 <div class="col-md-4"> 
		 			<h2>Name: &nbsp</h2> 
		 		    <input type="text"  id="name" name="name" placeholder="Name" class="ui-widgets" required>
		 			</div>
		 			 <div class="col-md-4"> 
		 			<h2>Course: &nbsp</h2> 	

		 			<select class="mdb-select " name="selectedCourse">
					  <option value="" disabled selected>Course</option>
					  <option value="BSC CS(HONS)">BSC CS(HONS)</option>
					  <option value="BSC MATH(HONS)">BSC (HONS)</option>
					  <option value="BSC BVOC(HONS)">BSC BVOC(HONS)</option>
					  
					</select>
					</div>
		 			
						
		 		</div>

		 		<div class= "row ">
		 			 <div class="col-md-4"> 
		 			<h2>From: &nbsp</h2> 
		 			<input type="text" class="datepicker" name="sdate" placeholder="yyyy-mm-dd" required>
		 			&nbsp &nbsp
		 			</div>
		 			 <div class="col-md-4">  <h2>To:&nbsp</h2>
		 		 	<input type="text"  class="datepicker" name="edate"  placeholder="yyy-mm-dd" required> 
		 		</div><br> </div>
		 		
		 		
		 		 <button type="submit" class="btn btn-primary">Save</button>
		 	
		  </form>
		 		

		 </div>
</div>
</div>

</div>




</body>
</html>