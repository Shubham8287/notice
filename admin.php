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
	$(".datepicker").datepicker();
} );
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

    <select class="custom-select bg-primary glyphicon-ok " id="purpose">
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
    <form >
  <div class="form-group">
  	  <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
</div>

  
<div class="Leave">
		 <div class="col-md-12 select-outline">
		 	<form >
		 		<div class= "row">
		 		<h2>From: &nbsp</h2> 
		 		<input type="text" class="datepicker" name="sdate" placeholder="dd/mm/yyyy">
		 		&nbsp &nbsp <h2>To:&nbsp</h2>
		 		 <input type="text"  class="datepicker" name="edate"  placeholder="dd/mm/yyyy"> 
		 		</div><br> 
		 		<div class= "row">
		 		 <button type="submit" class="btn btn-primary">Save</button>
		 		</div>
		  </form>
		 		

		 </div>
</div>


</div>




</body>
</html>