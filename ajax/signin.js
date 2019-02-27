$(document).ready(function(){
	 
	// Signin
	$( "#signinbutton" ).click(function() {
	  	var username = $("#username");
	  	var username = $("#username");

	  	$.ajax{
	  		url: "./backend/api/user/auth/login.php",
			type: "POST",
			data: {'username' : username, 'password' : password},
			dataType: "json",
			success: function(result){
				console.log(result)
			}
	  	}
	});
});