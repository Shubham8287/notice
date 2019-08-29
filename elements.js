$(function(){
         $(".deletealert").hide();
        $(".Notification").hide();
         $(".Leave").hide();
         $(".alertNotification").hide();
         $(".deletenotification").hide();
         $(".DeleteLeave").hide();
        $(".Image").hide();
          $(".deleteimage").hide();
    $('#purpose').on('change', function() {

        

      if ( this.value == '4')
      
      {    $(".deleteimage").hide();
        $(".Notification").show();
         $(".Leave").hide();
         $(".alertNotification").hide();
         $(".deletealert").hide();
         $(".deletenotification").show();
         $(".DeleteLeave").hide();
         $(".Image").hide();
      }
      else  if ( this.value == '2')
      {    $(".deleteimage").hide();
        $(".Leave").show();
         $(".Notification").hide();
          $(".alertNotification").hide();
          $(".deletealert").hide();
          $(".deletenotification").hide();
          $(".DeleteLeave").show();
          $(".Image").hide();
      }else
      if(this.value == '3')
          {  $(".Image").hide();
              $(".Leave").hide();
         $(".Notification").hide();
          $(".alertNotification").show();
           $(".deletealert").show();
           $(".deletenotification").hide();
          $(".DeleteLeave").hide();
              $(".deleteimage").hide();}
          else
            if(this.value=='1')
              {    $(".deleteimage").show();
                $(".Image").show();
              $(".Leave").hide();
         $(".Notification").hide();
          $(".alertNotification").hide();
           $(".deletealert").hide();
           $(".deletenotification").hide();
          $(".DeleteLeave").hide();
              }  
          
    });
});