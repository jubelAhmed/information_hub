
$(document).ready(function(){
	// $( "#submit-for-review" ).on( "click", function() {
	//  	 var job_title = $("#job-title").val()
	//  	 var company = $("#company").val()
	//  	 var applicationDeadline = $("#applicationDeadline").val()
	//  	 var companyLogo = $("#companyLogo")
	//  	 var location = $("#location").val()
	//  	 var company = $("#company").val()
	//  	 var isRemoteWork = $("#isRemoteWork").val()
	//  	 var jobtype = $("#jobtype").val()
	//  	 var compensation = $("#compensation").val()
	//  	 var min_salary = $("#min_salary").val()
	//  	 var max_salary = $("#max_salary").val()
	//  	 var programmingSkills = $("#programmingSkills")
	//  	 var job_description = $("#job_description").val()
	 	  
	// });


	var skills = $(".allSpecialSkills") ; 

	var skillsArr = [];
    for (var i = 0; i < skills.length; i++) {
      skillsArr.push(skills[i].firstChild.nodeValue);
    }

	console.log(skillsArr) ;

	$("#getSkills").on("click", function(){
		console.log($("input[type='checkbox']").val())
	})
 

});