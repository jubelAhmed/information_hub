$( document ).ready(function() {

	$("#loadingPublishBtn").hide()


	$("#publishPostBtn").click(function(){
		

		var post_title = $("#postTile").val()
		var post_description = $("#postDetails").val()
		var post_category = $("#postCatagories").val()
		var userid = $("#userid").val()
		console.log('You clicked Me!')
		post_category = post_category.join(',')
		// Now sending those data to database

		if(post_title.trim() !== ''&& post_description.trim() !== '' && post_category !== '' && userid.trim() !== ''){
			$("#showPublish").hide();
			$("#loadingPublishBtn").show()

			$.ajax({
			    url: "../backend/api/user/profile/own_post.php",
			    type: "POST",
			    data: { userid: userid, title: post_title, category: post_category, description: post_description },
			    dataType: "json",
			    success: function(result) {
			    	if(result.status == 'ok'){
			    		console.log("System saying it's ok!")
			    		window.location.href = "./home.php";
			    	}else{
			    		alert('you are not able to create a new post right now. Try later!')
			    	}
			    }
			});
		}else{
			alert('You must fill up all fields!')
		}	
	})
})