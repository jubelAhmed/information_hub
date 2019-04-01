$( document ).ready(function() {

	$.ajax({
	    url: "../backend/api/user/profile/getposts.php",
	    type: "POST",
	    dataType: "json",
	    success: function(result) {
	    	$("#postloader").hide()
	    	if(result.status == 'ok'){
	    		for (var i = 0; i < Object.keys(result).length - 1; i++) {
	    			// console.log(result[i].post_title)
					var script = document.createElement('script');						;
					script.src = "../assets/js/star.js";
					$("#head").append(script);
					
	    			$("#postsection").append("" +
							"<div class=\"row\">" +
							" <div class=\"col-md-12\">" +
							" <!-- post start -->" +
							" <div class=\"box box-widget\">" +
							" <div class=\"box-header with-border\"> <div class=\"row\">" +
							" <div class=\"col-md-6\">" +
							" <div class=\"user-block\">" +
							" <img class=\"img-circle\" alt=\"User Image\" src=\"../assets/static/img/dark-blue.png\"> <span class=\"username\"><a href=\"#\">"+ result[i].fullname +"</a></span> <span class=\"description\">"+
							" " + result[i].time + " </span> </div>" +
							" </div>" +
							" <div class=\"col-md-6\">" +
							" <ul id=\"catagoryList\">" +
							// " <li>JavaScript</li>" +
							// " <li>ReactJs</li>" +
							" " + returnCategory(result[i].post_categories) +
							" </ul>" +
							" </div>" +
							" </div>" +
							" </div>" +
							" <div class=\"box-body\">" +
							" <p class=\" text-center \" ><i>" + result[i].post_title.toUpperCase() + "</i></p>" +
							" <p>"+ result[i].post_description +"</p>" +
							" <div class=\"row\" style=\"margin-left:2px;margin-top:25px; margin-right:2px;" +
							" border-bottom:1px solid #c9b7b7\"> <div class=\"col-md-4 col-sm-2 \"> "+ `
							<div class='rating-stars text-center'>
								<ul id="stars">
									<li class="star" title='Poor' data-value='1'>
										<i class='fa fa-star fa-fw'></i>
									</li>
									<li class='star' title='Fair' data-value='2'>
										<i class='fa fa-star fa-fw'></i>
									</li>
									<li class='star' title='Good' data-value='3'>
										<i class='fa fa-star fa-fw'></i>
									</li>
									<li class='star' title='Excellent' data-value='4'>
										<i class='fa fa-star fa-fw'></i>
									</li>
									<li class='star' title='WOW!!!' data-value='5'>
										<i class='fa fa-star fa-fw'></i>
									</li>
								</ul>
							</div>
							` + " </div>" +
							" <div class=\"col-md-1 col-sm-1 \"></div> <div class=\"col-md-2 col-sm-2 \"> <span class=\"text-info\">80 point </span> </div>" +
							" <div class=\"col-md-3 col-sm-3 \"> <span class=\"text-info\">5 comments</span> </div>" +
							" <div class=\"col-md-2 col-sm-2 \" style=\"float:right\"> <button class=\"btn btn-info btn-xs\" type=\"button\"><i class=\"fa fa-share\"></i> share </button>" +
							" </div>" +
							" </div>" +
							" </div>" +
							" <div class=\"box-footer box-comments\"> <div class=\"box-comment\">" +
							" <img class=\"img-circle img-sm\" alt=\"User Image\" src=\"../assets/static/img/dark-blue.png\"> <div class=\"comment-text\">" +
							" <span class=\"username\">" +
							" Maria Gonzales" +
							" <span class=\"text-muted pull-right\">8:03 PM Today</span> </span>" +
							" It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout." +
							" </div>" +
							" </div>" +
							" <div class=\"box-comment\">" +
							" <img class=\"img-circle img-sm\" alt=\"User Image\" src=\"../assets/static/img/dark-blue.png\"> <div class=\"comment-text\">" +
							" <span class=\"username\">" +
							" Nora Havisham" +
							" <span class=\"text-muted pull-right\">8:03 PM Today</span> </span>" +
							" The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English." +
							" </div>" +
							" </div>" +
							" </div>" +
							" <div class=\"box-footer\">" +
							" <form action=\"#\" method=\"post\"> <img class=\"img-responsive img-circle img-sm\" alt=\"Alt Text\" src=\"../assets/static/img/dark-blue.png\"> <div class=\"img-push\">" +
							" <input class=\"form-control input-sm\" type=\"text\" placeholder=\"Press enter to post comment\"> </div>" +
							" </form>" +
							" </div>" +
							" </div>" +
							" <!-- End Post -->" +
							" </div>" +
							" </div>" +
	    				"");
	    		}
				 
	    	}else if(result.status == 'error'){
	    		console.log('Error Status Detected!')
	    	}else{
	    		console.log('Network problem!')
	    	}
	    }
	});

function returnCategory(string){
	myArray = string.split(",")
	myRes = []
	for(var j=0; j < 2 ; j++){

		if (typeof myArray[j] === "undefined") {
		   continue
		}

		myRes.push("<li>"+ myArray[j] +"</li>").toString()
		
	}
	return myRes.toString().replace(',', '').replace(',', '').replace(',', '')
}


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