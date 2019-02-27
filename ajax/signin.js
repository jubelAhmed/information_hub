$(document).ready(function(){
	 
	// Signin
	$( "#signinbutton" ).click(function() {
	  	var email = $("#email");
	  	var password = $("#password");
	  	console.log("You clicked me!")
	  	$.ajax({
	  		url: "./backend/api/user/auth/login.php",
			type: "POST",
			data: {'email' : email, 'password' : password},
			dataType: "json",
			success: function(result){
				console.log(result)
			}
	  	});

	});
});