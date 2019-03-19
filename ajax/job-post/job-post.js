$(document).ready(function() {
  $( "#submit-for-review" ).on( "click", function() {
      var job_title = $("#job-title").val()
      var company = $("#company").val()
      var applicationDeadline = $("#applicationDeadline").val()
      var companyLogo = $("#companyLogo")
      var location = $("#location").val()
      var company = $("#company").val()
      var companywebsite = $("#companywebsite").val()
      var isRemoteWork = $("#isRemoteWork").val()
      var jobtype = $("#jobtype").val()
      var compensation = $("#compensation").val()
      var min_salary = $("#min_salary").val()
      var max_salary = $("#max_salary").val()
      var programmingSkills = $("#programmingSkills")
      var job_description = $("#job_description").val()

      var favorite = [];

      $.each($("input[name='skillyesno']:checked"), function(){            
        favorite.push($(this).val());
      });
      
      $.each($("input[name='extraskill']"), function(){            
        favorite.push($(this).val());
      });
        alert("skills are: " + favorite.join(", "));
  });

//   console.log(
//     job_title + '\n' + company
//   )

//   var favorite = [];
//     // <span class="allSpecialSkills">Lol
//   $("#getSkills").click(function(){

//     $.each($("input[name='skillyesno']:checked"), function(){            
//         favorite.push($(this).val());
//     });
    
//     $.each($("input[name='extraskill']"), function(){            
//       favorite.push($(this).val());
//   });
//     alert("skills are: " + favorite.join(", "));
// });

  // $("#getSkills").on("click", function() {
  //   console.log($("input[type='checkbox']").val());
  // });
});
