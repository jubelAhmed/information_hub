$( document ).ready(function() {
    $("#job_details_continue_btn").on('click', function(){
        var job_title = $("#job_title").val()
        var company = $("#company").val()
        var deadline = $("#deadline").val()
        var joblocation = $("#joblocation").val()
        var jobtype = $("input[name='jobtype']:checked").val();
        
        var remotework = 'no'

        if($("#remotework").prop('checked') == true){
            remotework = "yes"
        }
        var compensationtype = $("#compensationtype").val()
        var mincompensation = $("#mincompensation").val()
        var maxcompensation = $("#maxcompensation").val()
        

        // console.log(job_title)
        // console.log(company)
        // console.log(deadline)
        // console.log(joblocation)
        // console.log(remotework)
        // console.log(jobtype)
        // console.log(compensationtype)
        // console.log(mincompensation)
        // console.log(maxcompensation)

        if(job_title.trim().length > 0 && company.trim().length > 0){
            console.log('Good to go')
        }else{
            console.log('Problem')
        }
    })
});