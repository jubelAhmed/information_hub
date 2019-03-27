$(document).ready(function() {
    $("#applyBtn").on("click", function() {
      var applicantId = $("#applicantId").val();
      var jobId = $("#jobId").val();
      console.log(applicantId);
      console.log(jobId);
      $.ajax({
        url: "../../backend/api/user/job/apply_job.php",
        type: "POST",
        data: {
          applicantId: applicantId,
          jobId: jobId
          
        },
        dataType: "json",
        success: function(result) {
          
          if (result.status == "error") {
             $("#applyError").html(result.msg);
           
          } else if (result.status == "ok") {
            $("#applySuccess").html(result.msg);
            
          }
        }
      });
   

    })

})   