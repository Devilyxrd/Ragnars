$(document).ready(function () {

     $("#dmd").change(function () {
          var selectedOption = $(this).val();
          

          $.ajax({
               url: "assets/php/select",
               method: "POST",
               data: {veri: selectedOption},

               success: function(response){
                    $("#answer").text(response);
               }
          })
     });

})