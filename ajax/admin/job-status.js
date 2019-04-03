$(document).ready(function() {
    $("#publishBtn").on("click", function() {
    
      var jobId = $("#jobId").val();
     
      console.log(jobId);
      $.ajax({
        url: "../backend/api/user/job/update_job.php",
        type: "POST",
        data: {
          jobId: jobId
          
        },
        dataType: "json",
        success: function(result) {
          
          if (result.status == "error") {
             $("#error").html(result.msg);
             $("#publishBtn").attr("disabled", "disabled");
          } else if (result.status == "ok") {
            
            $("#success").html(result.msg);
           $("#publishBtn").attr("disabled", "disabled");
            
            
          }
        }
      });
   

    })

    //delte job
    $("#deleteBtn").on("click", function() {
    
      var jobId = $("#jobId").val();
     
      console.log(jobId);
      $.ajax({
        url: "../backend/api/user/job/delete_job.php",
        type: "POST",
        data: {
          jobId: jobId
          
        },
        dataType: "json",
        success: function(result) {
          
          if (result.status == "error") {
             $("#error").html(result.msg);
             $("#deleteBtn").attr("disabled", "disabled");
              setTimeout(function() {
            window.location.href = "../../admin/job-post-status.php";
          }, 5000);
          } else if (result.status == "ok") {
            
            $("#success").html(result.msg);
           $("#deleteBtn").attr("disabled", "disabled");
            setTimeout(function() {
            window.location.href = "../../admin/job-post-status.php";
          }, 5000);
            
          }
        }
      });
   

    })

})   

