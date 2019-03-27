const url = "http://localhost/information_hub/backend/api/user/job/job_post.php";


$(document).ready(function() {
  // Skiping licence page because no need!
  var job_title = '';
  var company = '';
  var applicationDeadline = '';
  // var companyLogo = '';
  var location = '';
  var companywebsite = '';
  var jobtype = '';
  var compensation = '';
  var min_salary = '';
  var max_salary = '';
  var requiredSkills = '';
  var remotework = '0';
  jobdescriptioninfo = ''

  // var selectedCompanylogo = '';

  // Job Details First Page
  $("#job_details_continue_btn").on("click", function(){
    job_title = $("#job_title").val()

    console.log(job_title);
    company = $("#company").val()
    applicationDeadline = $("#applicationDeadline").val()
    // companyLogo = $("#companyLogo").val()
    location = $("#location").val()
    company = $("#company").val()
    companywebsite = $("#companywebsite").val()
    if($("#isRemoteWork").prop('checked') == true){
        remotework = "1"
    }
    jobtype = $("input[name='jobtype']:checked").val();
    compensation = $("#compensationtype").val()
    min_salary = $("#min_salary").val()
    max_salary = $("#max_salary").val()
    // selectedCompanylogo = $("#selectedCompanylogo").attr('src');
    //console.log(selectedCompanylogo)
  })
  // Required Skill Details second Page
  $("#skill_details_continue_btn").on("click", function(){
    var requireSkillsLocal = [];
    $.each($("input[name='skillyesno']:checked"), function(){            
      requireSkillsLocal.push($(this).val());
    });
    
    $.each($("input[name='extraskill']"), function(){            
      requireSkillsLocal.push($(this).val());
    });
    requiredSkills = requireSkillsLocal.join(", ")
  })

  // Job Description Third Page
  $("#description_details_continue_btn").on("click", function(){
    jobdescriptioninfo = $("#jobdescriptioninfo").val()
    $("#job_title_display").text("Job Title: "+ job_title)
    $("#SimpleViewDetails").text("Address: " + location + " | Remotework? : "+ remotework + " | Job Type:"  + jobtype + " | Compensation: "+ compensation + " | Minimum Salary: " + min_salary + "| Maximum Salary: "+ max_salary )
    
      $("#reviewSkills").text(requiredSkills)
      $("#JobDescriptionPreview").text(jobdescriptioninfo)
    
  })

  
  // Submit For Review Fourth Page
  $( "#submit-for-review" ).on( "click", function() {

  

    $.ajax({
      url: url,
      method: "post",
      data: {
      job_title:job_title,
      company:company,
      applicationDeadline:applicationDeadline, 
      location:location, 
      companywebsite:companywebsite, 
      jobType:jobtype, 
      compensation:compensation, 
      minSalary:min_salary, 
      maxSalary:max_salary, 
      requiredSkills:requiredSkills, 
      remoteWork:remotework, 
      jobdescriptioninfo:jobdescriptioninfo
      },
      success: function(response) {
        if (result.status == "error") {
          $("#error").html(result.msg);
         
        } else if (result.status == "ok") {
          $("#success").html("Account Registraion Successfull");
          
        }
      },
      error: function(err) {
        console.log(err);
      },
      dataType: "text"
    });
     
      
  });
});


/* $.ajax({
  url: "http://localhost/information_hub/backend/api/user/job/job_post.php",
  type: "POST",
  data: {
    job_title:job_title,
    company:company,
    applicationDeadline:applicationDeadline, 
    companyLogo:"ssdadsssd", 
    location:location, 
    companywebsite:companywebsite, 
    jobType:jobtype, 
    compensation:compensation, 
    minSalary:min_salary, 
    maxSalary:max_salary, 
    requiredSkills:requiredSkills, 
    remoteWork:remotework, 
    jobdescriptioninfo:jobdescriptioninfo
  } ,
 
  processData: false,
  success: function (response) {
    if(response.data.length == 0){ 
      // EMPTY
     }else{
      var obj =jQuery.parseJSON(response.data);
        console.log(obj);
     }
  },
  error: function(jqXHR, textStatus, errorThrown) {
    console.log("Ajax Error form script " +jqXHR, textStatus, errorThrown);
    
  }


});


/   console.log(job_title);
//   console.log(company);
//   console.log(applicationDeadline);
//  // console.log(selectedCompanylogo);
//   console.log(location);
//   console.log(companywebsite);
//   console.log(min_salary);
//   console.log(max_salary);
//   console.log(requiredSkills);
//   console.log(remotework);

//   console.log(jobdescriptioninfo);



*/
