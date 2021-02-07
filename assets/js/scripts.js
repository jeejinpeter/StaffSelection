function scroll_to_class(element_class, removed_height) {
	var scroll_to = $(element_class).offset().top - removed_height;
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 0);
	}
}

function bar_progress(progress_line_object, direction) {
	var number_of_steps = progress_line_object.data('number-of-steps');
	var now_value = progress_line_object.data('now-value');
	var new_value = 0;
	if(direction == 'right') {
		new_value = now_value + ( 100 / number_of_steps );
	}
	else if(direction == 'left') {
		new_value = now_value - ( 100 / number_of_steps );
	}
	progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
}

jQuery(document).ready(function() {
	
    /* Fullscreen background*/
    
    $.backstretch("assets/img/backgrounds/1.jpg");
    
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$.backstretch("resize");
    });
    
    /*Form*/
    
    $('.f1 fieldset:first').fadeIn('slow');
    

    
    // next step
    $('.f1 .btn-next').on('click', function() {
    	var parent_fieldset = $(this).parents('fieldset');
        //alert("1");
        console.log($(this).parent().parent());
        $(this).parent().find('form').each(function(){
            console.log($('form').valid());
            //console.log($(this).val());
        });
        //console.log($(this).parent().find('input[name="form_order"]'));
        //console.log($("d").value);
    	var next_step = true;
    	// navigation steps / progress steps
    	var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    	var progress_line = $(this).parents('.f1').find('.f1-progress-line');


        parent_fieldset.find('input[type="text"], input[type="password"], textarea').each(function() {
            if( $(this).val() == "" ) {
                $(this).addClass('input-error');
                next_step = false;
            }
            else {
                $(this).removeClass('input-error');
            }
        });
    	

    	
    	if( next_step ) {
    		parent_fieldset.fadeOut(400, function() {
    			// change icons
    			current_active_step.removeClass('active').addClass('activated').next().addClass('active');
    			// progress bar
    			bar_progress(progress_line, 'right');
    			// show next step
	    		$(this).next().fadeIn();
	    		// scroll window to beginning of the form
    			 scroll_to_class( $('.f1'), 20 );
	    	});
    	}
    	
    });
    
    // previous step
    $('.f1 .btn-previous').on('click', function() {
    	// navigation steps / progress steps
    	var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    	var progress_line = $(this).parents('.f1').find('.f1-progress-line');
    	
    	$(this).parents('fieldset').fadeOut(400, function() {
    		// change icons
    		current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
    		// progress bar
    		bar_progress(progress_line, 'left');
    		// show previous step
    		$(this).prev().fadeIn();
    		// scroll window to beginning of the form
			scroll_to_class( $('.f1'), 20 );
    	});
    });


    
    
    
});

function update_caste(e){
    var religion = document.getElementById("religion").value;

    if(religion == "Hindu"){
        $('#caste_hindu').show();
        $('#caste_christian').hide();
        $('#caste_islam').hide();
        $('#caste_others').hide();
        $('#dummy_select').hide();
    }else if(religion == "Christian"){
        $('#dummy_select').hide();
        $('#caste_hindu').hide();
        $('#caste_christian').show();
        $('#caste_islam').hide();
        $('#caste_others').hide();

    }else if(religion == "Muslim"){
        $('#dummy_select').hide();
        $('#caste_hindu').hide();
        $('#caste_christian').hide();
        $('#caste_islam').show();
        $('#caste_others').hide();
    }else{
        $('#dummy_select').hide();
        $('#caste_hindu').hide();
        $('#caste_christian').hide();
        $('#caste_islam').hide();
        $('#caste_others').show();
    }
}



function update_lc(){
    var religion = document.getElementById("religion").value;
    var caste = document.getElementById("caste_christian").value;

    if((religion=="Christian" && caste=="128") || (religion=="Christian" && caste=="140") || (religion=="Christian" && caste=="141") || (religion=="Christian" && caste=="142")){
        $('#lc_details').show();
    }else{
        $('#lc_details').hide();
    }
}

function caste_selected(e){
    document.getElementById("caste").value = e.value;
}
function country_selected(e){
    document.getElementById("hide_state").value = e.value;
}
function check_unique(op){
    var option = op;
   if(op == "secprefer"){
        if(document.getElementById(op).value == document.getElementById("firstprefer").value){
            document.getElementById(op).value ="Select Programme";
            alert("Choose a different programme.");
        }
    }else{
        if(document.getElementById(op).value == document.getElementById("firstprefer").value){
            document.getElementById(op).value ="Select Programme";
            alert("Choose a different programme.");
        }else if(document.getElementById(op).value == document.getElementById("secprefer").value){
            document.getElementById(op).value ="Select Programme";
            alert("Choose a different programme.");
        }
    }
}
function update_subjects(e){
    var board =e.value;
    if(board == "hsc" || board == "other"){
        $('#streams').show();

    }else{
        $('#streams').hide();
    }
    if(board == "hsc" || board == "vhse" || board == "others" ){
        document.getElementById("out_of_english_mark").value = 200;
    }else{
        document.getElementById("out_of_english_mark").value = 100;
    }
    console.log(board);
    if(board == "hsc" || board == "others"){
        var stream = document.getElementById("stream").value;
        if(board == "others"){
            stream = "science";
        }
        if(stream == "Please select"){
            //document.getElementById("sec_language").innerHTML = "";
            document.getElementById("op_sub1").innerHTML = "";
            document.getElementById("op_sub2").innerHTML = "";
            document.getElementById("op_sub3").innerHTML = "";
            document.getElementById("op_sub4").innerHTML = "";
            document.getElementById("op_sub5").innerHTML = "";
            document.getElementById("op_sub6").innerHTML = "";
        }else{
            console.log(stream);
            var target_url = "";
            if(board == "others"){
                board = "hsc";
                target_url='http://localhost/edufizz/v2/admission/admission/get_subjects/'+board;
            }else{
                target_url ='http://localhost/edufizz/v2/admission/admission/get_subjects_based_on_stream/'+board+'_'+stream;
            }
            $.ajax({
            url:target_url,
            data:'',
            type: 'POST',
            beforeSend:function(){
                 $('#preloader').show();
            },
            success:function(data){
                 $('#preloader').hide();
                //var dd = data;
                //            $('#loadingIcon').modal('hide');
                console.log(data);
                //var valuew =32;
                //alert(data);
                //document.getElementById("sec_language").innerHTML = data;
                document.getElementById("op_sub1").innerHTML = data;
                document.getElementById("op_sub2").innerHTML = data;
                document.getElementById("op_sub3").innerHTML = data;
                document.getElementById("op_sub4").innerHTML = data;
                document.getElementById("op_sub5").innerHTML = data;
                document.getElementById("op_sub6").innerHTML = data;
                document.getElementById("out_of_second_lang_mark").value = 0;
                document.getElementById("out_of_op_sub1_mark").value = 0;
                document.getElementById("out_of_op_sub2_mark").value = 0;
                document.getElementById("out_of_op_sub3_mark").value = 0;
                document.getElementById("out_of_op_sub4_mark").value = 0;
                document.getElementById("out_of_op_sub5_mark").value = 0;
                document.getElementById("out_of_op_sub6_mark").value = 0;

                
            }
        });
        }
        
    }else{
        $.ajax({
        url:'http://localhost/edufizz/v2/admission/admission/get_subjects/'+board,
        data:'',
        type: 'POST',
        beforeSend:function(){
             $('#preloader').show();
        },
        success:function(data){
             $('#preloader').hide();
            //var dd = data;
            //            $('#loadingIcon').modal('hide');
            console.log(data);
            //var valuew =32;
            //alert(data);
            //document.getElementById("sec_language").innerHTML = data;
            document.getElementById("op_sub1").innerHTML = data;
            document.getElementById("op_sub2").innerHTML = data;
            document.getElementById("op_sub3").innerHTML = data;
            document.getElementById("op_sub4").innerHTML = data;
            document.getElementById("op_sub5").innerHTML = data;
            document.getElementById("op_sub6").innerHTML = data;
            
        }
    });
    }
    if(board == "vhse"){
        $('.non_vhse').hide();
    }else{
        $('.non_vhse').show();
    }

    
}

function update_stream(e){
    var stream =e.value;
    console.log(stream);
    $.ajax({
        url:'http://localhost/edufizz/v2/admission/admission/get_stream_subject/'+stream,
        data:'',
        type: 'POST',
        beforeSend:function(){
             $('#preloader').show();
        },
        success:function(data){
             $('#preloader').hide();
            //            $('#loadingIcon').modal('hide');
            console.log(data);
            console.log("sd");
            //var valuew =32;
            //alert(data);
            //document.getElementById("sec_language").innerHTML = data;
            document.getElementById("op_sub1").innerHTML = data;
            document.getElementById("op_sub2").innerHTML = data;
            document.getElementById("op_sub3").innerHTML = data;
            document.getElementById("op_sub4").innerHTML = data;
            document.getElementById("op_sub5").innerHTML = data;
            document.getElementById("op_sub6").innerHTML = data;
            
        }
    });
}

function update_total_mark(){
    var mark_one = document.getElementById('english_mark').value;
    var mark_two = document.getElementById('second_lang_mark').value;
    var mark_three = document.getElementById('op_sub1_mark').value;
    var mark_four = document.getElementById('op_sub2_mark').value;
    var mark_five = document.getElementById('op_sub3_mark').value;
    var mark_six = document.getElementById('op_sub4_mark').value;
    var mark_seven = document.getElementById('op_sub5_mark').value;
    var mark_eight = document.getElementById('op_sub6_mark').value;

    var total = parseInt(mark_one) + parseInt(mark_two) + parseInt(mark_three) + parseInt(mark_four) + parseInt(mark_five) + parseInt(mark_six) + parseInt(mark_seven) + parseInt(mark_eight);
    document.getElementById("total").value = total;

}

function update_total_max_mark(){
    var max_mark_one = document.getElementById('out_of_english_mark').value;
    var max_mark_two = document.getElementById('out_of_second_lang_mark').value;
    var max_mark_three = document.getElementById('out_of_op_sub1_mark').value;
    var max_mark_four = document.getElementById('out_of_op_sub2_mark').value;
    var max_mark_five = document.getElementById('out_of_op_sub3_mark').value;
    var max_mark_six = document.getElementById('out_of_op_sub4_mark').value;
    var max_mark_seven = document.getElementById('out_of_op_sub5_mark').value;
    var max_mark_eight = document.getElementById('out_of_op_sub6_mark').value;
    var max_total = parseInt(max_mark_one) + parseInt(max_mark_two) + parseInt(max_mark_three) + parseInt(max_mark_four) + parseInt(max_mark_five) + parseInt(max_mark_six) + parseInt(max_mark_seven) + parseInt(max_mark_eight);
    document.getElementById("out_of_total").value = max_total;
}

function activate_marks(subject, e){
    var board = document.getElementById('board').value;
    console.log(subject);
    if(e.value != ""){
        switch(subject){
            case "sec_language":
                document.getElementById("second_lang_mark").removeAttribute("disabled");
                document.getElementById("out_of_second_lang_mark").removeAttribute("disabled");
                if(board == "hsc" || board == "vhse"){
                    document.getElementById("out_of_second_lang_mark").value = 200;
                }else{
                    document.getElementById("out_of_second_lang_mark").value = 100;
                }
                update_total_max_mark();
                break;
            case "op_sub1_mark":
                document.getElementById("op_sub1_mark").removeAttribute("disabled");
                document.getElementById("out_of_op_sub1_mark").removeAttribute("disabled");
                if(board == "hsc" || board == "vhse"){
                    document.getElementById("out_of_op_sub1_mark").value = 200;
                }else{
                    document.getElementById("out_of_op_sub1_mark").value = 100;
                }
                update_total_max_mark();
                break;
            case "op_sub2_mark":
                document.getElementById("op_sub2_mark").removeAttribute("disabled");
                document.getElementById("out_of_op_sub2_mark").removeAttribute("disabled");
                if(board == "hsc" || board == "vhse"){
                    document.getElementById("out_of_op_sub2_mark").value = 200;
                }else{
                    document.getElementById("out_of_op_sub2_mark").value = 100;
                }
                update_total_max_mark();
                break;
            case "op_sub3_mark":
                document.getElementById("op_sub3_mark").removeAttribute("disabled");
                document.getElementById("out_of_op_sub3_mark").removeAttribute("disabled");
                if(board == "hsc" || board == "vhse"){
                    document.getElementById("out_of_op_sub3_mark").value = 200;
                }else{
                    document.getElementById("out_of_op_sub3_mark").value = 100;
                }
                update_total_max_mark();
                break;
            case "op_sub4_mark":
                document.getElementById("op_sub4_mark").removeAttribute("disabled");
                document.getElementById("out_of_op_sub4_mark").removeAttribute("disabled");
                if(board == "hsc" || board == "vhse"){
                    document.getElementById("out_of_op_sub4_mark").value = 200;
                }else{
                    document.getElementById("out_of_op_sub4_mark").value = 100;
                }
                update_total_max_mark();
                break;
            case "op_sub5_mark":
                document.getElementById("op_sub5_mark").removeAttribute("disabled");
                document.getElementById("out_of_op_sub5_mark").removeAttribute("disabled");
                if(board == "hsc" || board == "vhse"){
                    document.getElementById("out_of_op_sub5_mark").value = 200;
                }else{
                    document.getElementById("out_of_op_sub5_mark").value = 100;
                }
                update_total_max_mark();
                break;
            case "op_sub6_mark":
                document.getElementById("op_sub6_mark").removeAttribute("disabled");
                document.getElementById("out_of_op_sub6_mark").removeAttribute("disabled");
                if(board == "hsc" || board == "vhse"){
                    document.getElementById("out_of_op_sub6_mark").value = 200;
                }else{
                    document.getElementById("out_of_op_sub6_mark").value = 100;
                }
                update_total_max_mark();
                break;

        }    
    }else{
        switch(subject){
            case "sec_language":
                document.getElementById("second_lang_mark").setAttribute("disabled", "true");
                document.getElementById("out_of_second_lang_mark").setAttribute("disabled", "true");
                break;
            case "op_sub1_mark":
                document.getElementById("op_sub1_mark").setAttribute("disabled", "true");
                document.getElementById("out_of_op_sub1_mark").setAttribute("disabled", "true");
                break;
            case "op_sub2_mark":
                document.getElementById("op_sub2_mark").setAttribute("disabled", "true");
                document.getElementById("out_of_op_sub2_mark").setAttribute("disabled", "true");
                break;
            case "op_sub3_mark":
                document.getElementById("op_sub3_mark").setAttribute("disabled", "true");
                document.getElementById("out_of_op_sub3_mark").setAttribute("disabled", "true");
                break;
            case "op_sub4_mark":
                document.getElementById("op_sub4_mark").setAttribute("disabled", "true");
                document.getElementById("out_of_op_sub4_mark").setAttribute("disabled", "true");
                break;
            case "op_sub5_mark":
                document.getElementById("op_sub5_mark").setAttribute("disabled", "true");
                document.getElementById("out_of_op_sub5_mark").setAttribute("disabled", "true");
                break;
            case "op_sub6_mark":
                document.getElementById("op_sub6_mark").setAttribute("disabled", "true");
                document.getElementById("out_of_op_sub6_mark").setAttribute("disabled", "true");
                break;

        }
    }

    

    
}


///////Coded by Abu//////////////

function update_programmes(type){

         $.ajax({
            url:'http://localhost/edufizz/v2/admission/admission/get_programmes/'+type,
            data:'',
            type: 'POST',
            beforeSend:function(){
            
                       $('#preloader').show();
            },
            success:function(response){
                 $('#preloader').hide();
                $(".cource_preference").empty();
                $(".cource_preference").append(response);
            }
        });
}

function update_other_university(e){
    if(e.value == "others"){
        $('#other_university').show();
        $('#upload_marksheet').show();
    }else{
        $('#other_university').hide();
        $('#upload_marksheet').hide();
    }
}

function check_grade(e){
    var scale = document.getElementById("grading_scale").value;
    if(scale == "10 Point Scale"){
        
        $('#ccpa_table').show();
        if(parseFloat(e.value) > 10.00 ){
            e.value = 0;
            alert("You have entered a score higher than the max score!")
            
        }
    }else if(scale == "4 Point Scale"){
        
        $('#ccpa_table').show();
        if(parseFloat(e.value) > 4.00 ){
            e.value = 0;
            alert("You have entered a score higher than the max score!")
            
        }
    }else{
        
        $('#ccpa_table').hide();
    }
    
}

function show_ccpa_table(e){
    var scale = document.getElementById("grading_scale").value;
    if(scale == "10 Point Scale"){
        $('#ccpa_table').show();
        
    }else if(scale == "4 Point Scale"){
        $('#ccpa_table').show();
        
    }else{
        $('#ccpa_table').hide();
    }
}


