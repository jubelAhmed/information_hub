$(document).ready(function() {
  // Skiping licence page because no need!
  let job_title = '';
  let company = '';
  let applicationDeadline = '';
  let companyLogo = '';
  let location = '';
  let companywebsite = '';
  let jobtype = '';
  let compensation = '';
  let min_salary = '';
  let max_salary = '';
  let requiredSkills = '';
  var remotework = 'no';
  jobdescriptioninfo = ''

  var selectedCompanylogo = '';

  // Job Details First Page
  $("#job_details_continue_btn").on("click", function(){
    job_title = $("#job_title").val()
    company = $("#company").val()
    applicationDeadline = $("#applicationDeadline").val()
    companyLogo = $("#companyLogo")
    location = $("#location").val()
    company = $("#company").val()
    companywebsite = $("#companywebsite").val()
    if($("#isRemoteWork").prop('checked') == true){
        remotework = "yes"
    }
    jobtype = $("input[name='jobtype']:checked").val();
    compensation = $("#compensationtype").val()
    min_salary = $("#min_salary").val()
    max_salary = $("#max_salary").val()
    selectedCompanylogo = $("#selectedCompanylogo").attr('src');
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
  /*
let job_title = '';
let company = '';
let applicationDeadline = '';
let companyLogo = '';
let location = '';
let companywebsite = '';
let jobtype = '';
let compensation = '';
let min_salary = '';
let max_salary = '';
let requiredSkills = '';
var remotework = 'no';
var jobdescriptioninfo = ''
*/
      $.ajax({
          url: "http://localhost/University/information_hub/backend/api/user/job/job_post.php",
          type: "POST",
          data: {
            job_title:job_title,
            company:company,
            applicationDeadline:applicationDeadline, 
            companyLogo:companyLogo, 
            location:location, 
            companywebsite:companywebsite, 
            jobtype:jobtype, 
            compensation:compensation, 
            min_salary:min_salary, 
            max_salary:max_salary, 
            requiredSkills:requiredSkills, 
            remotework:remotework, 
            jobdescriptioninfo:jobdescriptioninfo
          } ,
          success: function (response) {
            console.log(response)
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log("Ajax Error form script" + textStatus, errorThrown);
          }


      });
      console.log("Hello")
  });
});
