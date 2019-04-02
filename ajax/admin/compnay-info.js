$( document ).ready(function() {

	$.ajax({
	    url: "../backend/api/user/job/employer.php",
	    type: "POST",
	    dataType: "json",
	    success: function(result) {
	    	//$("#postloader").hide()
	    	if(result.status == 'ok'){
	    		for (var i = 0; i < Object.keys(result).length - 1; i++) {
	    			// // console.log(result[i].post_title)
					// var script = document.createElement('script');						;
					// script.src = "../assets/js/star.js";
					// $("#head").append(script);
					
                    $("#body-section").append(`
                    <div class="top-bar-image">
                    <center>

                        <div style="padding-top:5px;padding-bottom:2px">
                            <img src="../assets/static/img/employer.jpg" width="200px" height="120px" class="image"
                                alt="company image" />
                        </div>
                        <div>
                            <h3 class="text-info"> ${result[i].company_name} </h3>
                        </div>

                    </center>
                </div>
                <div style="background:white;margin-top:3px;height:400px">
                    <div class="row" style="padding:10px;
                        color:gray;font-size:18px">
                        <div class="col-md-3 col-md-offset-4">
                            User Name :

                        </div>
                        <div class="col-md-3">
                            Jubel Ahmed
                        </div>
                    </div>
                    <div class="row" style="padding:10px;
                        color:gray;font-size:18px">
                        <div class="col-md-3 col-md-offset-4">

                            Company Website :

                        </div>
                        <div class="col-md-3">
                            Jubel Ahmed
                        </div>
                    </div>
                    <div class="row" style="padding:10px;
                        color:gray;font-size:18px">
                        <div class="col-md-3 col-md-offset-4">

                            Location :

                        </div>
                        <div class="col-md-3">
                            Jubel Ahmed
                        </div>
                    </div>
                    <div class="row" style="padding:10px;
                        color:gray;font-size:18px">
                        <div class="col-md-3 col-md-offset-4">

                            Email :

                        </div>
                        <div class="col-md-3">
                            @gmail.com
                        </div>
                    </div>
                </div>
                    `);
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