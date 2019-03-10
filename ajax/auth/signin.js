
$(document).ready(function(){
	$( "#signinBtn" ).on( "click", function() {
	 	var email = $("#email").val()
	 	var pass = $("#password").val()

 
	 	//$("#loginstatus").html("<img src='https://cdn.dribbble.com/users/473527/screenshots/3443226/success.gif' style='max-height:70px; max-width:170px'>")
	 	// Checking user and password is filled up or not
	 	if( email.trim() != '' && pass.trim() != ''){
	 		$.ajax({
		  		url: "./backend/api/user/auth/login.php",
				type: "POST",
				data: {'email' : email, 'password' : pass},
				dataType: "json",
				success: function(result){
					if(result.status == 'error'){
						$('#error').html(result.msg)
					}else if(result.status == 'ok'){
						window.location.href = "./profile/";
					}
				}
		  	});
	 	}else{
 	 		$('#error').html('You must enter your username and password!')
	 	}
	 	
	});
 
});