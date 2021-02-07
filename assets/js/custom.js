'use strict';

 $(document).ready(function(){
      $(".addCF").click(function(){
        $("#customFields").append('<tr><td><input type="text" name="ug_exam_name[]" /></td><td><input type="text" name="ug_institution_name[]" /></td><td><input type="text" name="ug_board_name[]"/></td><td><input type="text" name="ug_subject_name[]" /></td> <td><input type="text" name="ug_passed_yr[]" /></td><td><input type="text" name="ug_no_attempts[]" /></td><td><input type="text" name="ug_grade_got[]" /></td><td><input type="text" name="ug_percentage_marks[]" /></td> &nbsp;<td> <a href="javascript:void(0);" class="remCF">Remove</a></td></tr>');
      });
        $("#customFields").on('click','.remCF',function(){
            $(this).parent().parent().remove();
        });

        $(".addPgCF").click(function(){
        $("#customPgFields").append('<tr><td><input type="text" name="pg_exam_name[]" /></td><td><input type="text" name="pg_institution_name[]" /></td><td><input type="text" name="pg_board_name[]"/></td><td><input type="text" name="pg_subject_name[]" /></td> <td><input type="text" name="pg_passed_yr[]" /></td><td><input type="text" name="pg_no_attempts[]" /></td><td><input type="text" name="pg_grade_got[]" /></td><td><input type="text" name="pg_percentage_marks[]" /></td> &nbsp;<td> <a href="javascript:void(0);" class="remPgCF">Remove</a></td></tr>');
      });

        $("#customPgFields").on('click','.remPgCF',function(){
            $(this).parent().parent().remove();
        });

        $(".addMphilCF").click(function(){
        $("#customMphilFields").append('<tr><td><input type="text" name="mphil_exam_name[]" /></td><td><input type="text" name="mphil_institution_name[]" /></td><td><input type="text" name="mphil_board_name[]"/></td><td><input type="text" name="mphil_subject_name[]" /></td> <td><input type="text" name="mphil_passed_yr[]" /></td><td><input type="text" name="mphil_no_attempts[]" /></td><td><input type="text" name="mphil_grade_got[]" /></td><td><input type="text" name="mphil_percentage_marks[]" /></td> &nbsp;<td> <a href="javascript:void(0);" class="remMphilCF">Remove</a></td></tr>');
      });
        $("#customMphilFields").on('click','.remMphilCF',function(){
            $(this).parent().parent().remove();
        });


         $(".addPhdCF").click(function(){
        $("#customPhdFields").append('<tr><td><input type="text" name="phd_exam_name[]" /></td><td><input type="text" name="phd_institution_name[]" /></td><td><input type="text" name="phd_board_name[]"/></td><td><input type="text" name="phd_subject_name[]" /></td> <td><input type="text" name="phd_passed_yr[]" /></td><td><input type="text" name="phd_no_attempts[]" /></td><td><input type="text" name="phd_grade_got[]" /></td><td><input type="text" name="phd_percentage_marks[]" /></td> &nbsp;<td> <a href="javascript:void(0);" class="remPhdCF">Remove</a></td></tr>');
      });
        $("#customPhdFields").on('click','.remPhdCF',function(){
            $(this).parent().parent().remove();
        });

        $(".addOtherCF").click(function(){
        $("#customOtherFields").append('<tr><td><input type="text" name="o_exam_name[]" /></td><td><input type="text" name="o_institution_name[]" /></td><td><input type="text" name="o_board_name[]"/></td><td><input type="text" name="o_subject_name[]" /></td> <td><input type="text" name="o_passed_yr[]" /></td><td><input type="text" name="o_no_attempts[]" /></td><td><input type="text" name="o_grade_got[]" /></td><td><input type="text" name="o_percentage_marks[]" /></td> &nbsp;<td> <a href="javascript:void(0);" class="remOtherCF">Remove</a></td></tr>');
      });
        $("#customOtherFields").on('click','.remOtherCF',function(){
            $(this).parent().parent().remove();
        });


        $(".addEmploymentRows").click(function(){
        $("#employmentFields").append('<tr><td><input type="text" name="organistaion[]" /></td><td><input type="text" name="designation[]" /></td><td><input type="text" name="full_part[]" /></td><td><input type="text" name="paid[]"/></td><td><input type="text" name="salary[]" /></td><td><input type="text" name="period[]"/></td><td><input type="text" name="supervisor[]"/></td> &nbsp;<td> <a href="javascript:void(0);" class="remEmploymentCF">Remove</a></td></tr>');
      });
        $("#employmentFields").on('click','.remEmploymentCF',function(){
            $(this).parent().parent().remove();
        });

         $(".addActivityRows").click(function(){
        $("#activityFields").append('<tr><td><textarea name="activity[]"></textarea></td> &nbsp;<td> <a href="javascript:void(0);" class="remActivityCF">Remove</a></td></tr>');
      });
        $("#activityFields").on('click','.remActivityCF',function(){
            $(this).parent().parent().remove();
        });

        //form submission - first page of multi page form

        $('#page_one').on('click', function(){
       // var postData = $('#msform').serialize(); console.log(postData);
        $.ajax({
        url:'insert_application_form',
        data:$('#msform').serialize()+'&step=1',
        type: 'POST',
        success:function(html){ 
             console.log(html);
            }
        });

    });

        //page two submission

         $('#page_two').on('click', function(){
        var postData = $('#msform').serialize(); console.log(postData);
        $.ajax({
        url:'insert_education_details',
        data:$('#msform').serialize()+'&step=2',
        type: 'POST',
        success:function(html){ 
             console.log(html);
            }
        });

    });

    });