$(document).ready(function() {


  $("#search").click(function(){
      skills = $("#whatIwantToSearch").val()
      $.ajax({
        url: "../../backend/api/user/job/filter-job.php",
        type: "POST",
        data: { skills:skills },
        dataType: "json",
        success: function(result) {
          // working area
        }
      });
  }) 
    
})   