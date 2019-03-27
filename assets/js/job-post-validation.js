$( document ).ready(function() {
    // Job Basic Information
    $("#job_details_continue_btn").on('click', function(e){
        var job_title = $("#job_title").val()
        var company = $("#company").val()
        var deadline = $("#applicationDeadline").val()
        var joblocation = $("#location").val()
        var jobtype = $("input[name='jobtype']:checked").val();
        
        var remotework = 'no'

        if($("#isRemoteWork").prop('checked') == true){
            remotework = "yes"
        }
        var compensationtype = $("#compensationtype").val()
        var mincompensation = $("#min_salary").val()
        var maxcompensation = $("#max_salary").val()
        

        // console.log(job_title)
        // console.log(company)
        // console.log(deadline)
        // console.log(joblocation)
        // console.log(remotework)
        // console.log(jobtype)
        // console.log(compensationtype)
        // console.log(mincompensation)
        // console.log(maxcompensation)

        if(job_title.trim().length > 0 && company.trim().length > 0 && deadline.trim().length > 0 && joblocation.trim().length > 0 && jobtype.trim().length > 0 
        && remotework.trim().length > 0 && compensationtype.trim().length > 0 && mincompensation.trim().length > 0 && maxcompensation.trim().length > 0){
            // Form Validation Successfull
  
                var parent_fieldset = $(this).parents('fieldset');
                var next_step = true;
                var current_active_step = $(this).parents('form').find('.form-wizard.active');
                var progress_line = $(this).parents('form').find('.progress-line');
                
                parent_fieldset.find('input[type="text"], input[type="password"], input[type="username"], input[type="email"], input[type="tel"], input[type="url"], textarea').each(function() {
                    if( $(this).val() == "" ) {
                        $(this).addClass('input-error');
                        next_step = false;
                    }
                    else {
                        $(this).removeClass('input-error');
                    }
                });
                
                parent_fieldset.find('input[type="checkbox"]').each(function() {
                    if( $(this).prop("checked") == false ) {
                        $('.form-check-label').css("color","green");
                        next_step = true;
                    }
                    else {
                        $('.form-check-label').css("color","black");
                    }
                });
                
                if( next_step ) {
                    parent_fieldset.fadeOut(400, function() {
                        current_active_step.removeClass('active').addClass('activated').next().addClass('active');
                        bar_progress(progress_line, 'right');
                        $(this).next().fadeIn();
                        scroll_to_class( $('form'), 20 );
                    });
                }
                
          
            // Next operation success
        }else{
            $("#error").text("All Fields Are Required!")
            return false;
        }
        e.preventDefault();
    })

    // Skill Selection Section

    $("#skill_details_continue_btn").on('click', function(e){

            
                var parent_fieldset = $(this).parents('fieldset');
                var next_step = true;
                var current_active_step = $(this).parents('form').find('.form-wizard.active');
                var progress_line = $(this).parents('form').find('.progress-line');
                
                parent_fieldset.find('input[type="text"], input[type="password"], input[type="username"], input[type="email"], input[type="tel"], input[type="url"], textarea').each(function() {
                    if( $(this).val() == "" ) {
                        $(this).addClass('input-error');
                        next_step = false;
                    }
                    else {
                        $(this).removeClass('input-error');
                    }
                });
                
                parent_fieldset.find('input[type="checkbox"]').each(function() {
                    if( $(this).prop("checked") == false ) {
                        $('.form-check-label').css("color","green");
                        next_step = true;
                    }
                    else {
                        $('.form-check-label').css("color","black");
                    }
                });
                
                if( next_step ) {
                    parent_fieldset.fadeOut(400, function() {
                        current_active_step.removeClass('active').addClass('activated').next().addClass('active');
                        bar_progress(progress_line, 'right');
                        $(this).next().fadeIn();
                        scroll_to_class( $('form'), 20 );
                    });
                }
                
          
            // Next operation success
            e.preventDefault();
        
    })

    //========================================Description ========================
    $("#description_details_continue_btn").on('click', function(e){

       
            var parent_fieldset = $(this).parents('fieldset');
            var next_step = true;
            var current_active_step = $(this).parents('form').find('.form-wizard.active');
            var progress_line = $(this).parents('form').find('.progress-line');
            
            parent_fieldset.find('input[type="text"], input[type="password"], input[type="username"], input[type="email"], input[type="tel"], input[type="url"], textarea').each(function() {
                if( $(this).val() == "" ) {
                    $(this).addClass('input-error');
                    next_step = false;
                }
                else {
                    $(this).removeClass('input-error');
                }
            });
            
            parent_fieldset.find('input[type="checkbox"]').each(function() {
                if( $(this).prop("checked") == false ) {
                    $('.form-check-label').css("color","green");
                    next_step = true;
                }
                else {
                    $('.form-check-label').css("color","black");
                }
            });
            
            if( next_step ) {
                parent_fieldset.fadeOut(400, function() {
                    current_active_step.removeClass('active').addClass('activated').next().addClass('active');
                    bar_progress(progress_line, 'right');
                    $(this).next().fadeIn();
                    scroll_to_class( $('form'), 20 );
                });
            }
            
      
        // Next operation success
        e.preventDefault();
    
})
});