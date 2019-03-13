$(document).ready(function() {
  $("#newuserbtn").on("click", function() {
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var email = $("#emailb").val();
    var birthday = $("#birthday").val();
    var ocopation = $("#ocopation").val();
    var gender = $("input:checked").val();
    var passwordb = $("#passwordb").val();
    var passwordc = $("#passwordc").val();

    $("#newuserbtn").hide();
    $("#loading").html(
      "<img src='./assets/static/img/gif/loading.gif' style='max-height:70px; max-width:170px'>"
    );

    if (
      firstname.trim() != "" &&
      lastname.trim() != "" &&
      email.trim() != "" &&
      birthday.trim() != "" &&
      ocopation.trim() != "" &&
      gender.trim() != ""
    ) {
      if (passwordb.trim() != "" && passwordb.trim() == passwordc.trim()) {
        $.ajax({
          url: "./backend/api/user/auth/signup.php",
          type: "POST",
          data: {
            firstName: firstname,
            lastName: lastname,
            email: email,
            birthday: birthday,
            occupation: ocopation,
            gender: gender,
            password: passwordb
          },
          dataType: "json",
          success: function(result) {
            if (result.status == "error") {
              $("#error").html(result.msg);
              $("#loading").hide();
              setTimeout(function() {
                window.location.href = "./";
              }, 2000);
            } else if (result.status == "ok") {
              $("#success").html("Account Registraion Successfull");
              $("#loading").hide();
              setTimeout(function() {
                window.location.href = "./";
              }, 2000);
            }
          }
        });
      } else {
        setTimeout(function() {
          $("#loading").hide();
          $("#error").html("Your password must match!");
        }, 500);
        setTimeout(function() {
          window.location.href = "./";
        }, 3000);
      }
    } else {
      setTimeout(function() {
        $("#loading").hide();
        $("#error").html("You must enter all required informaiton!");
      }, 500);
      setTimeout(function() {
        window.location.href = "./";
      }, 1000);
    }
  });
});
