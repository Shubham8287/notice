$(function(){console.log("21");
    $('#purpose').on('change', function() {

      if ( this.value == '3')
      
      {
        $(".Notification").show();
         $(".Leave").hide();
         
      }
      else
      {
        $(".Leave").show();
         $(".Notification").hide();
      }
    });
});