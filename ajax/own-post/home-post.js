$( document ).ready(function() {
	$.ajax({
	    url: "../backend/api/user/profile/getposts.php",
	    type: "POST",
	    dataType: "json",
	    success: function(result) {
	    	if(result.status == 'ok'){
	    		console.log('Ok Status Detected!')
	    	}else if(result.status == 'error'){
	    		console.log('Error Status Detected!')
	    	}else{
	    		console.log('Network problem!')
	    	}
	    }
	});
	 
})
// http://localhost/University/information_hub/backend/api/user/profile/getposts.php
// $.ajax({
//     url: "../backend/api/user/profile/own_post.php",
//     type: "POST",
//     data: { userid: userid, title: post_title, category: post_category, description: post_description },
//     dataType: "json",
//     success: function(result) {
//     	if(result.status == 'ok'){
//     		console.log("System saying it's ok!")
//     		window.location.href = "./home.php";
//     	}else{
//     		alert('you are not able to create a new post right now. Try later!')
//     	}
//     }
// });