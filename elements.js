$(function(){

        $(".Notification").hide();
         $(".Leave").hide();
         $(".alertNotification").hide();
          
    $('#purpose').on('change', function() {

        

      if ( this.value == '4')
      
      {
        $(".Notification").show();
         $(".Leave").hide();
         $(".alertNotification").hide();
      }
      else  if ( this.value == '2')
      {
        $(".Leave").show();
         $(".Notification").hide();
          $(".alertNotification").hide();
      }else
      if(this.value == '3')
          {
              $(".Leave").hide();
         $(".Notification").hide();
          $(".alertNotification").show();
          }
          
  
          
    });
});