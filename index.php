<?php require('php/connect.php'); 
      require('php/deleteTeacher.php');
    
if(isset($_POST['data']) ){
   //Data 1

        $sql = "SELECT Count(*) FROM uploads ";

     $data['value1'] = mysqli_fetch_array(mysqli_query($connection,$sql) );

     
     $sql = "SELECT Count(*) FROM attendance ";

     $data['value2'] = mysqli_fetch_array(mysqli_query($connection,$sql) );

     
     $sql = "SELECT Count(*) FROM notification";

     $data['value3'] = mysqli_fetch_array(mysqli_query($connection,$sql) );

     
     $sql = "SELECT Count(*)FROM alert";

     $data['value4'] = mysqli_fetch_array(mysqli_query($connection,$sql) );
    
     echo json_encode($data);
     exit;
}
     ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Digital Notice</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
                    if(strpos($row['name'], 'mp4') == false){

                ?>  
                <img class="mySlides" src="<?php echo($row['name']) ?>" width="90%" hight="90%" alt="">
                <div class="qw" ><?php echo($row['time']) ?> </div> 
                    <?php }
                     else{ ?>
                <video class="mySlides"  width="90%" hight="90%" autoplay muted loop>  <source src="<?php echo($row['name']) ?>" > </video>
                <div class="qw" ><?php echo($row['time']) ?> </div> 
                <?php }  } ?>
        	<!-- </marquee> -->
        </div>
        <div class="sec teachers-on-leave">
            <div class="sec-heading teachers-on-leave-heading">
                <h2>Teachers on Leave</h2>
            </div>
            <marquee behavior="scroll" direction="up">
            <div class="teachers-on-leave-names">
            	 <?php $cmd="SELECT * FROM attendance WHERE startDate <= '".$date."' && endDate >= '".$date."' 
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
    <script>

    $(document).ready( function(){
       var upload_len="-1",teacher_len="-1",notice_len="-1",alert_len="-1",data="-1";
    setInterval(function() {

        jQuery.ajax({
    type: "POST",
  //  dataType: 'json',
    data: {"data":data},
    success: function(data){
      
         data = jQuery.parseJSON( data );
       

         upload=data["value1"]["0"]
         teacher=data["value2"]["0"]
        notice=data["value3"]["0"]
         alert=data["value4"]["0"]

        if(upload_len=="-1"&&teacher_len=="-1"&&notice_len=="-1"&&alert_len=="-1")
            {console.log(upload,upload_len , teacher,teacher_len , notice,notice_len , alert,alert_len );
            upload_len=upload;
            teacher_len=teacher;
            notice_len=notice;
            alert_len=alert}
                else
        if(upload!=upload_len || teacher!=teacher_len || notice!=notice_len || alert!=alert_len )
        {location.reload();

        }

        
    },
    error: function(jqXHR, exception){
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
      console.log(msg);
    }
    });
    }, 2000); 
    });
    </script>
    
    <script src="jj.js" type="text/javascript" charset="utf-8" async defer></script>
</body>

</html>
