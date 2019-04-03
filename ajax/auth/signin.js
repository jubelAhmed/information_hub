$(document).ready(function() {
  $("#signinBtn").on("click", function() {
    console.log('test')
    var email = $("#email").val();
    var pass = $("#password").val();
    $("#newuserbtn").hide();
    $("#loading").html(
      "<img src='./assets/static/img/gif/loading.gif' style='max-height:70px; max-width:170px'>"
    );
   // $("#loginstatus").html("<img src='https://cdn.dribbble.com/users/473527/screenshots/3443226/success.gif' style='max-height:70px; max-width:170px'>")
    // Checking user and password is filled up or not
    if (email.trim() != "" && pass.trim() != "") {
      $.ajax({
        url: "./backend/api/user/auth/login.php",
        type: "POST",
        data: { email: email, password: pass },
        dataType: "json",
        success: function(result) {
          console.log(result.type);
          if (result.status == "error") {
            $("#loading").hide();
            $("#newuserbtn").show();
            $("#error").html(result.msg);
          } else if (result.status == "ok") {
            $("#loading").hide();
            $("#newuserbtn").show();
              if(result.type == "employer"){
                window.location.href = "./employer/employer-home.php";
              }else if(result.type == "user"){
                window.location.href = "./profile/home.php";
              }
          }
        }
      });
    } else {
      $("#error").html("You must enter your username and password!");
    }
  });
});
