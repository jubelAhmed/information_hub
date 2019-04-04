$(document).ready(function() {
    $("#newuserbtn").on("click", function() {
      var username = $("#username").val();
 
      var email = $("#emailb").val();
      var company_name = $("#company_name").val();
      var company_website = $("#company_website").val();
      var location = $("#location").val();
      var passwordb = $("#passwordb").val();
      var passwordc = $("#passwordc").val();

      var logoFile = document.getElementById("file").files[0];
      
     
        if(logoFile){
            var type = logoFile.type;
        
            var imageName = logoFile.name ; 
            var imageExtension = imageName.split('.').pop().toLowerCase();
            
            if( jQuery.inArray(imageExtension,['gif','png','jpg','jpeg']) == -1){
                alert("invalid image file");
                return false;
            }
        }

  
      // $("#newuserbtn").hide();
      // $("#loading").html(
      //   "<img src='./assets/static/img/gif/loading.gif' style='max-height:70px; max-width:170px'>"
      // );
  
      if (
        username.trim() != "" &&
        company_website.trim() != "" &&
        email.trim() != "" &&
        company_name.trim() != "" &&
        location.trim() != "" 
        
      ) {
        if (passwordb.trim() != "" && passwordb.trim() == passwordc.trim()) {

          console.log("inner");
            var data = new FormData();
            if(logoFile){
              console.log(logoFile);
              data.append("file",logoFile);
            }
            data.append('username',username);
            data.append('email',email);
            data.append('company_name',company_name);
            data.append('company_website',company_website);
            data.append('location',location);
            data.append('password',passwordb);
            
            $("#newuserbtn").hide();
            $("#loading").html(
              "<img src='./assets/static/img/gif/loading.gif' style='max-height:70px; max-width:170px'>"
            );

          $.ajax({
            url: "./backend/api/user/auth/employer_signup.php",
            type: "POST",
            data: data,
            processData:false,
            contentType:false,
            success: function(result) {
              console.log(result);
              if (result.status == "error") {
                $("#error").html(result.msg);
                $("#loading").hide();
                setTimeout(function() {
                  window.location.href = "http://localhost/information_hub/index-employer.php";
                }, 500);
              } else if (result.status == "ok") {
                $("#success").html("Account Registraion Successfull");
                $("#loading").hide();
                setTimeout(function() {
                  window.location.href = "http://localhost/information_hub/index-employer.php";
                }, 500);
              }
            },
            error:function(err){
              console.log(err);
            }

          });
        } else {
          setTimeout(function() {
            
            $("#error").html("Your password must match!");
            $("#newuserbtn").show();
      $("#loading").html("");
          }, 5000);
          
        }
      } else {

        setTimeout(function() {
          $("#loading").hide();
         
        }, 1000);
        $("#error").html("You must enter all required informaiton!");
        setTimeout(function() {
          window.location.href = "http://localhost/information_hub/index-employer.php";
        }, 5000);
      }
    });
  });
  