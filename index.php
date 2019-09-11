<?php require('php/connect.php'); 
      require('php/deleteTeacher.php');?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="5">
    <title>Digital Notice</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="FirstRow">
        <div class="photo-galery">
        	<!-- <marquee behavior="scroll" direction="left"> -->
				 <?php $cmd="SELECT * FROM uploads
                    ORDER BY id DESC ";
                    $result= mysqli_query($connection,$cmd);

                while($row=mysqli_fetch_array($result)) 
                {
                 
                ?>  
                <img class="mySlides" src="<?php echo($row['name']) ?>" width="300px" hight="300px" alt="">
				<?php } ?>
        	<!-- </marquee> -->
        </div>
        <div class="sec teachers-on-leave">
            <div class="sec-heading teachers-on-leave-heading">
                <h2>Teachers on Leave</h2>
            </div>
            <marquee behavior="scroll" direction="up">
            <div class="teachers-on-leave-names">
            	 <?php $cmd="SELECT * FROM attendance
                    ORDER BY id DESC ";
                    $result= mysqli_query($connection,$cmd);

                while($row=mysqli_fetch_array($result)) 
                {
                 
                ?>  
                <h3 class="teachers-name"><?php  echo $row['name'] ?></h3>
                <?php } ?>
                
            </div>
            </marquee>
        </div>
    </div>
    <div class="SecondRow">
        <div class="sec">
            <div class="sec-heading imp-notification-heading">
                <h2>Announcements</h2>
            </div>
                <div class="imp-notification">
                    <?php $cmd="SELECT * FROM alert
                    ORDER BY id DESC ";
                    $result= mysqli_query($connection,$cmd);

                while($row=mysqli_fetch_array($result)) 
                {
                 
                ?>  
                    <h4 class="imp-txt"><?php  echo $row['description']; ?>.</h4>
                    <?php } ?>
                   
                </div>
        </div>
        <div class="sec">
            <div class="sec-heading notification-heading">
                <h2>Notifications</h2>
            </div>
            <marquee behavior="scroll" direction="up">
                
                 <?php $cmd="SELECT * FROM notification
                    ORDER BY id DESC ";
                    $result= mysqli_query($connection,$cmd);

                while($row=mysqli_fetch_array($result)) 
                {
                 
                ?>  
                <div class="notification">
                    <h4 class="txt"><?php  echo $row['description']; ?>.</h4>
                 
                </div><?php } ?>
            </marquee>
        </div>
    </div>
    <script src="jj.js" type="text/javascript" charset="utf-8" async defer></script>
</body>

</html>
