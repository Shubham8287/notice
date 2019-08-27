$(function(){
         $(".deletealert").hide();
        $(".Notification").hide();
         $(".Leave").hide();
         $(".alertNotification").hide();
         $(".deletenotification").hide();
         $(".DeleteLeave").hide();
        
          
    $('#purpose').on('change', function() {

        

      if ( this.value == '4')
      
      {
        $(".Notification").show();
         $(".Leave").hide();
         $(".alertNotification").hide();
         $(".deletealert").hide();
         $(".deletenotification").show();
         $(".DeleteLeave").hide();
      }
      else  if ( this.value == '2')
      {
        $(".Leave").show();
         $(".Notification").hide();
          $(".alertNotification").hide();
          $(".deletealert").hide();
          $(".deletenotification").hide();
          $(".DeleteLeave").show();
      }else
      if(this.value == '3')
          {
              $(".Leave").hide();
         $(".Notification").hide();
          $(".alertNotification").show();
           $(".deletealert").show();
           $(".deletenotification").hide();
          $(".DeleteLeave").hide();
          }
          
  
          
    });
});