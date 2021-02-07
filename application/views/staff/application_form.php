<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Application for Teaching Staff Selection</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid topbar">
    </div>  
    <header class="container-fluid">
      <div class="container">
        <div class="row">
            <div class="logo-text col-sm-8 col-xs-12">
              <img src="<?php echo base_url(); ?>assets/assets/images/logo200.png" alt="FMNC" width="90px" />
              <h1>Fatima Mata National College</h1>
              <p>Affiliated to the University of Kerala</p>
              <p>Re-accredited with A- Grade by NAAC</p>
            </div>
            <div class="helpline col-sm-4 col-xs-12">
                 <ul>
                  <li><i class="glyphicon glyphicon-envelope"></i> itsupport@fmnc.ac.in</li>
                  <li><i class="glyphicon glyphicon-envelope"></i> +91 123-456-4545</li>
                </ul>
            </div>
        </div>
      </div>
    </header>
    <div class="header-bottom"></div>
    <div class="container content-wrapper">
      <div class="row">
        <h2 class="align-center content-title">Recruitment for the post of professor, associate professor - 2019</h2>
        <!-- multistep form -->
        
          <form id="msform" class="f1" method="POST" action="#">
          <!-- progressbar -->
          <ul id="progressbar">
            <?php if($step == "step_one"){ ?>
            <li class="active">Personal</li><li>Educational</li><li>Employment</li><li>Publications</li><li>References</li><li>Payment</li><li>Completed</li>
          <?php }elseif($step == "step_two"){ ?>
            <li>Personal</li><li class="active">Educational</li><li>Employment</li><li>Publications</li><li>References</li><li>Payment</li><li>Completed</li>
             <?php }elseif($step == "step_three"){ ?>
            <li>Personal</li><li>Educational</li><li class="active">Employment</li><li>Publications</li><li>References</li><li>Payment</li><li>Completed</li>
          <?php }elseif($step == "step_four"){ ?>
            <li>Personal</li><li>Educational</li><li>Employment</li><li class="active">Publications</li><li>References</li><li>Payment</li><li>Completed</li>
          <?php }elseif($step == "step_five"){ ?>
            <li>Personal</li><li>Educational</li><li>Employment</li><li>Publications</li><li class="active">References</li><li>Payment</li><li>Completed</li>
             <?php }elseif($step == "step_six"){ ?>
            <li>Personal</li><li>Educational</li><li>Employment</li><li>Publications</li><li>References</li><li class="active">Payment</li><li>Completed</li>
             <?php }elseif($step == "step_seven"){ ?>
            <li>Personal</li><li>Educational</li><li>Employment</li><li>Publications</li><li>References</li><li>Payment</li><li class="active">Completed</li>
          <?php } ?>
          </ul>
          <!-- fieldsets -->
          <fieldset>
            <h5>(Make sure you fill all the required fields. Incomplete application will not be considered)</h5>
            <br/>
            <div class="row">
              <div class="col-sm-12 col-xs-12">
                <p>APPLICATION FOR THE POST OF : <input type="radio" name="applied_for" value="professor" id="professor" <?php if($application_basic_info[0]['post'] == 'professor'){echo "checked"; } else{ echo "";} ?>/><label for="professor">Professor</label><input type="radio" name="applied_for" value="associate_professor" id="associate_professor" <?php if($application_basic_info[0]['post'] == 'associate_professor'){echo "checked"; } else{ echo "";} ?> /><label for="associate_professor">Associate Professor</label></p>
              </div>
              <div class="col-sm-12 col-xs-12">
                <p>DEPARTMENT : 
                  <select name="department">
                    <option value=""></option>
                    <option value="Botany"  <?php echo ($application_basic_info[0]['department'] == 'Botany') ? "selected" : ""; ?> >Botany</option>
                    <option value="Chemistry" <?php echo ($application_basic_info[0]['department'] == 'Chemistry') ? "selected" : ""; ?>>Chemistry</option>
                    <option value="Commerce" <?php echo ($application_basic_info[0]['department'] == 'Commerce') ? "selected" : ""; ?>>Commerce</option>
                    <option value="Computer Science" <?php echo ($application_basic_info[0]['department'] == 'Computer Science') ? "selected" : ""; ?>>Computer Science</option>
                    <option value="Economics" <?php echo ($application_basic_info[0]['department'] == 'Economics') ? "selected" : ""; ?>>Economics</option>
                    <option value="English" <?php echo ($application_basic_info[0]['department'] == 'English') ? "selected" : ""; ?>>English</option>
                    <option value="French" <?php echo ($application_basic_info[0]['department'] == 'French') ? "selected" : ""; ?>>French</option>
                    <option value="Hindi" <?php echo ($application_basic_info[0]['department'] == 'Hindi') ? "selected" : ""; ?>>Hindi</option>
                    <option value="History" <?php echo ($application_basic_info[0]['department'] == 'History') ? "selected" : ""; ?>>History</option>
                    <option value="Malayalam" <?php echo ($application_basic_info[0]['department'] == 'Malayalam') ? "selected" : ""; ?>>Malayalam</option>
                    <option value="Mathematics" <?php echo ($application_basic_info[0]['department'] == 'Mathematics') ? "selected" : ""; ?>>Mathematics</option>
                    <option value="Physical Education" <?php echo ($application_basic_info[0]['department'] == 'Physical Education') ? "selected" : ""; ?>>Physical Education</option>
                    <option value="Physics" <?php echo ($application_basic_info[0]['department'] == 'Physics') ? "selected" : ""; ?>>Physics</option>
                    <option value="Political Science" <?php echo ($application_basic_info[0]['department'] == 'Political Science') ? "selected" : ""; ?>>Political Science</option>
                    <option value="Psychology" <?php echo ($application_basic_info[0]['department'] == 'Psychology') ? "selected" : ""; ?>>Psychology</option>
                    <option value="Sanskrit"<?php echo ($application_basic_info[0]['department'] == 'Sanskrit') ? "selected" : ""; ?>>Sanskrit</option>
                    <option value="Statistics" <?php echo ($application_basic_info[0]['department'] == 'Statistics') ? "selected" : ""; ?>>Statistics</option>
                    <option value="Zoology" <?php echo ($application_basic_info[0]['department'] == 'Zoology') ? "selected" : ""; ?>>Zoology</option>
                  </select>
                </p>
              </div>
            </div>
            <h2 class="fs-title">Personal Details</h2>
            <h3 class="fs-subtitle"></h3>
            <section class="personal-info">
              <div class="row">
                <div class="col-sm-3 col-sm-offset-1 left-col">
                  <label>1. NAME :</label>
                </div>
                <div class="col-sm-7">
                  <input type="text" name="name" placeholder="Name" value="<?php if(isset($application_basic_info[0]['name'] )){echo $application_basic_info[0]['name']; } ?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-sm-offset-1 left-col">
                  <label>2. SEX :</label>
                </div>
                <div class="col-sm-7">
                  <input type="radio" name="sex" id="male" value="Male" <?php echo ($application_basic_info[0]['gender'] == 'Male') ? "checked" : ""; ?> />&nbsp; <label for="male">MALE</label>
                  <input type="radio" name="sex" id="female" value="Female" <?php echo ($application_basic_info[0]['gender'] == 'Female') ? "checked" : ""; ?>/>&nbsp; <label for="female">FEMALE</label>
                  <input type="radio" name="sex" id="transgender" value="Transgender" <?php echo ($application_basic_info[0]['gender'] == 'Transgender') ? "checked" : ""; ?> />&nbsp; <label for="transgender">TRANSGENDER</label>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-sm-offset-1 left-col">
                  <label>3. AGE & DATE OF BIRTH :</label>
                </div>
                <div class="col-sm-7">
                  <input type="text" name="age" id="age" placeholder="00" maxlength="2" value="<?php if(isset($application_basic_info[0]['age'] )){echo $application_basic_info[0]['age']; } ?>" />
                  <input type="text" name="dob" placeholder="dd-mm-yyyy" value="<?php if(isset($application_basic_info[0]['dob'] )){echo $application_basic_info[0]['dob']; } ?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-sm-offset-1 left-col">
                  <label>4. PLACE OF BIRTH :</label>
                </div>
                <div class="col-sm-7">
                  <input type="text" name="place_of_birth_district" placeholder="District" value="<?php if(isset($application_basic_info[0]['place_of_birth_district'] )){echo $application_basic_info[0]['place_of_birth_district']; } ?>"/>
                  <input type="text" name="place_of_birth_state" placeholder="State" value="<?php if(isset($application_basic_info[0]['place_of_birth_state'] )){echo $application_basic_info[0]['place_of_birth_state']; } ?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-sm-offset-1 left-col">
                  <label>5. RELIGION (With Community) :</label>
                </div>
                <div class="col-sm-7">
                  <input type="text" name="religion" placeholder="Religion" value="<?php if(isset($application_basic_info[0]['religion'] )){echo $application_basic_info[0]['religion']; } ?>"/>
                  <input type="text" name="community" placeholder="Community" value="<?php if(isset($application_basic_info[0]['caste'] )){echo $application_basic_info[0]['caste']; } ?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-sm-offset-1 left-col">
                  <label>6. PHYSICAL DISABILITY (If any) :</label>
                </div>
                <div class="col-sm-7">
                  <input type="text" name="disability" placeholder="" width="30%" value="<?php if(isset($application_basic_info[0]['physical_disability'] )){echo $application_basic_info[0]['physical_disability']; } ?>"/>
                  <input type="text" name="disablity_percentage" placeholder="Percentage" value="<?php if(isset($application_basic_info[0]['disability_percentage'] )){echo $application_basic_info[0]['disability_percentage']; } ?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-sm-offset-1 left-col">
                  <label>7. PERMANENT ADDRESS :</label>
                </div>
                <div class="col-sm-7">
                  <input type="text" name="permanent_address" id="permanent_address" placeholder="Address" value="<?php if(isset($application_basic_info[0]['present_address'] )){echo $application_basic_info[0]['present_address']; } ?>"/>
                  <br/>
                  <input type="text" name="permanent_city" placeholder="City" value="<?php if(isset($application_basic_info[0]['present_city'] )){echo $application_basic_info[0]['present_city']; } ?>"/>
                  <input type="text" name="permanent_district" placeholder="District" value="<?php if(isset($application_basic_info[0]['present_district'] )){echo $application_basic_info[0]['present_district']; } ?>"/>
                  <br/>
                  <input type="text" name="permanent_state" placeholder="State" value="<?php if(isset($application_basic_info[0]['present_state'] )){echo $application_basic_info[0]['present_state']; } ?>"/>
                  <input type="text" name="permanent_zipcode" placeholder="Pincode" value="<?php if(isset($application_basic_info[0]['present_pincode'] )){echo $application_basic_info[0]['present_pincode']; } ?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-sm-offset-1 left-col">
                  <label>8. CONTACT ADDRESS :</label>
                </div>
                <div class="col-sm-7">
                  <input type="text" name="contact_address" id="contact_address" placeholder="Address" value="<?php if(isset($application_basic_info[0]['contact_address'] )){echo $application_basic_info[0]['contact_address']; } ?>"/>
                  <br/>
                  <input type="text" name="contact_city" placeholder="City" value="<?php if(isset($application_basic_info[0]['contact_city'] )){echo $application_basic_info[0]['contact_city']; } ?>"/>
                  <input type="text" name="contact_district" placeholder="District" value="<?php if(isset($application_basic_info[0]['contact_district'] )){echo $application_basic_info[0]['contact_district']; } ?>"/>
                  <br/>
                  <input type="text" name="contact_state" placeholder="State" value="<?php if(isset($application_basic_info[0]['contact_state'] )){echo $application_basic_info[0]['contact_state']; } ?>"/>
                  <input type="text" name="contact_zipcode" placeholder="Pincode" value="<?php if(isset($application_basic_info[0]['contact_pincode'] )){echo $application_basic_info[0]['contact_pincode']; } ?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-sm-offset-1 left-col">
                  <label>9. PHONE :</label>
                </div>
                <div class="col-sm-7">
                  <input type="text" name="phone" placeholder="" value="<?php if(isset($application_basic_info[0]['phone'] )){echo $application_basic_info[0]['phone']; } ?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-sm-offset-1 left-col">
                  <label>10. MOBILE :</label>
                </div>
                <div class="col-sm-7">
                  <input type="text" name="mobile" placeholder="" maxlength="10" required value="<?php if(isset($application_basic_info[0]['mobile'] )){echo $application_basic_info[0]['mobile']; } ?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-sm-offset-1 left-col">
                  <label>11. EMAIL :</label>
                </div>
                <div class="col-sm-7">
                  <input type="email" name="email" placeholder="" required value="<?php if(isset($application_basic_info[0]['email'] )){echo $application_basic_info[0]['email']; } ?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-sm-offset-1 left-col">
                  <label>12. PARENTS :</label>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-10 col-sm-offset-1 left-col">
                  <table class="table table-bordered parents-table">
                    <thead>
                      <th></th><th>NAME</th><th>EDUCATION</th><th>OCCUPATION</th><th>REMARKS</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><label>FATHER</label></td>
                        <td><input type="text" name="father_name" placeholder="Father's Name" value="<?php if(isset($application_basic_info[0]['father_name'] )){echo $application_basic_info[0]['father_name']; } ?>"/></td>
                        <td><input type="text" name="father_education" placeholder="Father's Education" value="<?php if(isset($application_basic_info[0]['father_education'] )){echo $application_basic_info[0]['father_education']; } ?>"/></td>
                        <td><input type="text" name="father_occupation" placeholder="Father's Occupation" value="<?php if(isset($application_basic_info[0]['father_occupation'] )){echo $application_basic_info[0]['father_occupation']; } ?>"/></td>
                        <td><input type="text" name="father_remarks" placeholder="Remarks" value="<?php if(isset($application_basic_info[0]['father_remarks'] )){echo $application_basic_info[0]['father_remarks']; } ?>"/></td>
                      </tr>
                      <tr>
                        <td><label>MOTHER</label></td>
                        <td><input type="text" name="mother_name" placeholder="Mother's Name" value="<?php if(isset($application_basic_info[0]['mother_name'] )){echo $application_basic_info[0]['mother_name']; } ?>"/></td>
                        <td><input type="text" name="mother_education" placeholder="Mother's Education" value="<?php if(isset($application_basic_info[0]['mother_education'] )){echo $application_basic_info[0]['mother_education']; } ?>"/></td>
                        <td><input type="text" name="mother_occupation" placeholder="Mother's Occupation" value="<?php if(isset($application_basic_info[0]['mother_occupation'] )){echo $application_basic_info[0]['mother_occupation']; } ?>"/></td>
                        <td><input type="text" name="mother_remarks" placeholder="Remarks" value="<?php if(isset($application_basic_info[0]['mother_remarks'] )){echo $application_basic_info[0]['mother_remarks']; } ?>"/></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 col-sm-offset-1 left-col">
                  <label>13. MARITAL STATUS :</label>
                </div>
                <div class="col-sm-9">
                  <input type="radio" name="marital" id="single" value="Single" <?php echo ($application_basic_info[0]['marital_status'] == 'Single') ? "checked" : ""; ?>/>&nbsp; <label for="single">Single</label>
                  <input type="radio" name="marital" id="married" value="Married" <?php echo ($application_basic_info[0]['marital_status'] == 'Married') ? "checked" : ""; ?>/>&nbsp; <label for="married">Married</label>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5 col-sm-offset-1 left-col">
                  <label>13.a. IF MARRIED, EDUCATIONAL QUALIFICATION OF SPOUSE :</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="spouse_qualification" placeholder="" value="<?php if(isset($application_basic_info[0]['spouse_education'] )){echo $application_basic_info[0]['spouse_education']; } ?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5 col-sm-offset-1 left-col">
                  <label>13.b. OCCUPATION OF SPOUSE :</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="spouse_occupation" placeholder="" value="<?php if(isset($application_basic_info[0]['spouse_occupation'] )){echo $application_basic_info[0]['spouse_occupation']; } ?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5 col-sm-offset-1 left-col">
                  <label>14. HAVE YOU APPLIED FOR ANY OTHER JOB?, IF YES, DETAILS :</label>
                </div>
                <div class="col-sm-6">
                  <input type="radio" name="applied_other_job" id="applied_other_job_yes" value="YES" <?php echo ($application_basic_info[0]['applied_other_job'] == 'YES') ? "checked" : ""; ?>/>&nbsp; <label for="applied_other_job_yes">YES</label>
                  <input type="radio" name="applied_other_job" id="applied_other_job_no" value="NO" <?php echo ($application_basic_info[0]['applied_other_job'] == 'NO') ? "checked" : ""; ?>/>&nbsp; <label for="applied_other_job_no">NO</label>
                  <br/>
                  <input type="text" name="other_job_detail" placeholder="" value="<?php if(isset($application_basic_info[0]['other_job_detail'] )){echo $application_basic_info[0]['other_job_detail']; } ?>"/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5 col-sm-offset-1 left-col">
                  <label>15. IF APPOINTED, MINIMUM PERIOD OF ASSURED SERVICE :</label>
                </div>
                <div class="col-sm-6">
                  <input type="text" name="min_assured_service" placeholder="" value="<?php if(isset($application_basic_info[0]['minimum_period'] )){echo $application_basic_info[0]['minimum_period']; } ?>"/> (in years)
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 col-sm-offset-1 left-col">
                  <label>16. LANGUAGES KNOWN :</label>
                </div>
                <div class="col-sm-7">
                  <table class="table table-bordered language-table">
                    <thead>
                      <th>LANGUAGE</th><th>READ</th><th>WRITE</th><th>SPEAK</th>
                    </thead>
                    <tbody>
                      <tr>
                        <?php if(isset($application_basic_info[0]['language_one'] )){
                          $l = explode('-',$application_basic_info[0]['language_one']);
                          $lm = ltrim($l[1]);
                          if($lm != NULL){
                          $m = explode(',', $lm); }else{$m= ""; $m[0] = ""; $m[1]= ""; $m[2]=""; }
                        } ?>
                        <td><input type="text" name="language" value="<?php if($l[0] != NULL){echo $l[0]; } ?>" /></td>
                        <td><input type="checkbox" name="language_read" <?php echo ($m[0] == 'on') ? 'checked' : ''; ?> /></td>
                        <td><input type="checkbox" name="language_write" <?php echo ($m[1] == 'on') ? 'checked' : ''; ?> /></td>
                        <td><input type="checkbox" name="language_speak" <?php echo ($m[2] == 'on') ? 'checked' : ''; ?> /></td>
                      </tr>
                      <tr>
                        <?php if(isset($application_basic_info[0]['language_two'] )){
                          $a = explode('-',$application_basic_info[0]['language_two']);
                          $ab = ltrim($a[1]);
                          if($ab != NULL){
                          $b = explode(',', $ab); }else{$b= ""; $b[0] = ""; $b[1]= ""; $b[2]=""; }
                        } ?>
                        <td><input type="text" name="language2" value="<?php if($a[0] != NULL){echo $a[0]; } ?>" /></td>
                        <td><input type="checkbox" name="language_read2" <?php echo ($b[0] == 'on') ? 'checked' : ''; ?> /></td>
                        <td><input type="checkbox" name="language_write2" <?php echo ($b[1] == 'on') ? 'checked' : ''; ?> /></td>
                        <td><input type="checkbox" name="language_speak2" <?php echo ($b[2] == 'on') ? 'checked' : ''; ?> /></td>
                      </tr>
                      <tr>
                        <?php if(isset($application_basic_info[0]['language_three'] )){
                          $p = explode('-',$application_basic_info[0]['language_three']);
                          $pq = ltrim($p[1]);
                          if($pq != NULL){
                          $q = explode(',', $pq); }else{$q= ""; $q[0] = ""; $q[1]= ""; $q[2]=""; }
                        } ?>
                        <td><input type="text" name="language3" value="<?php if($p[0] != NULL){echo $p[0]; } ?>" /></td>
                        <td><input type="checkbox" name="language_read3" <?php echo ($q[0] == 'on') ? 'checked' : ''; ?> /></td>
                        <td><input type="checkbox" name="language_write3" <?php echo ($q[1] == 'on') ? 'checked' : '';  ?> /></td>
                        <td><input type="checkbox" name="language_speak3" <?php echo ($q[2] == 'on') ? 'checked' : '';  ?> /></td>
                      </tr>
                      <tr>
                        <?php if(isset($application_basic_info[0]['language_four'] )){
                          $x = explode('-',$application_basic_info[0]['language_four']);
                          $xy = ltrim($x[1]);
                          if($xy != NULL){
                          $y = explode(',', $xy); }else{$y= ""; $y[0] = ""; $y[1]= ""; $y[2]=""; }
                        } ?>
                        <td><input type="text" name="language4" value="<?php if($x[0] != NULL){echo $x[0]; } ?>" /></td>
                        <td><input type="checkbox" name="language_read4" <?php echo ($y[0] == 'on') ? 'checked' : '';  ?> /></td>
                        <td><input type="checkbox" name="language_write4" <?php echo ($y[1] == 'on') ? 'checked' : '';  ?> /></td>
                        <td><input type="checkbox" name="language_speak4" <?php  echo ($y[2] == 'on') ? 'checked' : '';  ?> /></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              </section>
            <input type="button" name="next" class="next action-button" id="page_one" value="Next" />
          </fieldset>
          <fieldset>
            <h2 class="fs-title">Educational Qualifications</h2>
            <h3 class="fs-subtitle">Please Enclose Attached Copies of Certificates</h3>
             <div class="row">
                <div class="col-sm-2 left-col">
                  <label>SSLC</label>
                  <input type="hidden" name="sslc_type" value="SSLC">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table">
                    <thead>
                      <th>Institution</th><th>Board</th><th>Subject(s)</th><th>Year of Passing</th><th>No: of Attempts</th><th>Class/Grade</th><th>Percentage of Marks</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="sslc_institution" value="<?php echo $sslc_details['institution'];  ?>"/></td>
                        <td><input type="text" name="sslc_board" value="<?php echo $sslc_details['board']; ?>"/></td>
                        <td><input type="text" name="sslc_subject" value="<?php echo $sslc_details['subjects']; ?>"/></td>
                        <td><input type="text" name="sslc_yr_passed" value="<?php echo $sslc_details['year_of_passing']; ?>"/></td>
                        <td><input type="text" name="sslc_attempts" value="<?php echo $sslc_details['no_of_attempts']; ?>"/></td>
                        <td><input type="text" name="sslc_grade" value="<?php echo $sslc_details['class_grade']; ?>"/></td>
                        <td><input type="text" name="sslc_pom" value="<?php echo $sslc_details['percentage_marks']; ?>"/></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 left-col">
                  <label>Plus Two</label>
                  <input type="hidden" name="plustwo_type" value="Plus Two">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table">
                    <thead>
                      <th>Institution</th><th>Board</th><th>Subject(s)</th><th>Year of Passing</th><th>No: of Attempts</th><th>Class/Grade</th><th>Percentage of Marks</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="plustwo_institution" value="<?php echo $plustwo_details['institution'];  ?>"/></td>
                        <td><input type="text" name="plustwo_board" value="<?php echo $plustwo_details['board'];  ?>"/></td>
                        <td><input type="text" name="plustwo_subject" value="<?php echo $plustwo_details['subjects'];  ?>"/></td>
                        <td><input type="text" name="plustwo_yr_passed" value="<?php echo $plustwo_details['year_of_passing'];  ?>"/></td>
                        <td><input type="text" name="plustwo_attempts" value="<?php echo $plustwo_details['no_of_attempts'];  ?>"/></td>
                        <td><input type="text" name="plustwo_grade" value="<?php echo $plustwo_details['class_grade'];  ?>"/></td>
                        <td><input type="text" name="plustwo_pom" value="<?php echo $plustwo_details['percentage_marks'];  ?>"/></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 left-col">
                  <label>UG</label>
                  <input type="hidden" name="ug_type" value="UG">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table" id="customFields">
                    <thead>
                      <th>Examination</th><th>Institution</th><th>Board</th><th>Subject(s)</th><th>Year of Passing</th><th>No: of Attempts</th><th>Class/Grade</th><th>Percentage of Marks</th><th>Add More</th>
                    </thead>
                    <tbody>
                      <?php $i=0; foreach($application_ug_info as $key => $row){  ?>
                      <tr>
                        <td><input type="text" name="ug_exam_name[]" value="<?php echo $row['examination'];  ?>" /></td>
                        <td><input type="text" name="ug_institution_name[]" value="<?php echo $row['institution'];  ?>"/></td>
                        <td><input type="text" name="ug_board_name[]" value="<?php echo $row['board'];  ?>"/></td>
                        <td><input type="text" name="ug_subject_name[]" value="<?php echo $row['subjects'];  ?>" /></td>
                        <td><input type="text" name="ug_passed_yr[]" value="<?php echo $row['year_of_passing'];  ?>" /></td>
                        <td><input type="text" name="ug_no_attempts[]" value="<?php echo $row['no_of_attempts'];  ?>" /></td>
                        <td><input type="text" name="ug_grade_got[]" value="<?php echo $row['class_grade'];  ?>" /></td>
                        <td><input type="text" name="ug_percentage_marks[]" value="<?php echo $row['percentage_marks'];  ?>" /></td>
                        <?php if($i == 0){?>
                          <td><a href="javascript:void(0);" class="addCF">Add</a></td>
                       <?php }else{ ?>
                           <td><a href="javascript:void(0);" class="remOtherCF">Remove</a></td>
                     <?php } ?>
                      </tr>
                    <?php $i++; } ?>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 left-col">
                  <label>PG</label>
                  <input type="hidden" name="pg_type" value="PG">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table" id="customPgFields">
                    <thead>
                      <th>Examination</th><th>Institution</th><th>Board</th><th>Subject(s)</th><th>Year of Passing</th><th>No: of Attempts</th><th>Class/Grade</th><th>Percentage of Marks</th><th>Add More</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="pg_exam_name[]" placeholder="" /></td>
                        <td><input type="text" name="pg_institution_name[]" placeholder="" /></td>
                        <td><input type="text" name="pg_board_name[]" placeholder="" /></td>
                        <td><input type="text" name="pg_subject_name[]" placeholder="" /></td>
                        <td><input type="text" name="pg_passed_yr[]" placeholder="" /></td>
                        <td><input type="text" name="pg_no_attempts[]" placeholder="" /></td>
                        <td><input type="text" name="pg_grade_got[]" placeholder="" /></td>
                        <td><input type="text" name="pg_percentage_marks[]" placeholder="" /></td>
                        <td><a href="javascript:void(0);" class="addPgCF">Add</a></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 left-col">
                  <label>M. Phil</label>
                  <input type="hidden" name="mphil_type" value="M. Phil">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table" id="customMphilFields">
                    <thead>
                      <th>Examination</th><th>Institution</th><th>Board</th><th>Subject(s)</th><th>Year of Passing</th><th>No: of Attempts</th><th>Class/Grade</th><th>Percentage of Marks</th><th>Add More</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="mphil_exam_name[]" placeholder="" /></td>
                        <td><input type="text" name="mphil_institution_name[]" placeholder="" /></td>
                        <td><input type="text" name="mphil_board_name[]" placeholder="" /></td>
                        <td><input type="text" name="mphil_subject_name[]" placeholder="" /></td>
                        <td><input type="text" name="mphil_passed_yr[]" placeholder="" /></td>
                        <td><input type="text" name="mphil_no_attempts[]" placeholder="" /></td>
                        <td><input type="text" name="mphil_grade_got[]" placeholder="" /></td>
                        <td><input type="text" name="mphil_percentage_marks[]" placeholder="" /></td>
                        <td><a href="javascript:void(0);" class="addMphilCF">Add</a></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 left-col">
                  <label>Ph. D.</label>
                  <input type="hidden" name="phd_type" value="Ph. D.">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table" id="customPhdFields">
                    <thead>
                      <th>Examination</th><th>Institution</th><th>Board</th><th>Subject(s)</th><th>Year of Passing</th><th>No: of Attempts</th><th>Class/Grade</th><th>Percentage of Marks</th><th>Add More</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="phd_exam_name[]" placeholder="" /></td>
                        <td><input type="text" name="phd_institution_name[]" placeholder="" /></td>
                        <td><input type="text" name="phd_board_name[]" placeholder="" /></td>
                        <td><input type="text" name="phd_subject_name[]" placeholder="" /></td>
                        <td><input type="text" name="phd_passed_yr[]" placeholder="" /></td>
                        <td><input type="text" name="phd_no_attempts[]" placeholder="" /></td>
                        <td><input type="text" name="phd_grade_got[]" placeholder="" /></td>
                        <td><input type="text" name="phd_percentage_marks[]" placeholder="" /></td>
                        <td><a href="javascript:void(0);" class="addPhdCF">Add</a></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 left-col">
                  <label>Any Other</label>
                  <input type="hidden" name="other_type" value="other">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table" id="customOtherFields">
                    <thead>
                      <th>Examination</th><th>Institution</th><th>Board</th><th>Subject(s)</th><th>Year of Passing</th><th>No: of Attempts</th><th>Class/Grade</th><th>Percentage of Marks</th><th>Add More</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="o_exam_name[]" placeholder="" /></td>
                        <td><input type="text" name="o_institution_name[]" placeholder="" /></td>
                        <td><input type="text" name="o_board_name[]" placeholder="" /></td>
                        <td><input type="text" name="o_subject_name[]" placeholder="" /></td>
                        <td><input type="text" name="o_passed_yr[]" placeholder="" /></td>
                        <td><input type="text" name="o_no_attempts[]" placeholder="" /></td>
                        <td><input type="text" name="o_grade_got[]" placeholder="" /></td>
                        <td><input type="text" name="o_percentage_marks[]" placeholder="" /></td>
                        <td><a href="javascript:void(0);" class="addOtherCF">Add</a></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" id="page_two" value="Next" />
          </fieldset>
          <fieldset>
            <h2 class="fs-title">Employment History</h2>
            <h3 class="fs-subtitle">Please begin with the Latest</h3>
            <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table" id="employmentFields">
                    <thead>
                      <th>Organisation</th><th>Designation</th><th>Full Time/Part Time</th><th>Paid/Honorary</th><th>If Paid, Scale of Pay</th><th>Period</th><th>Name & Ph. No. of Supervisor</th><th>Add More</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="organistaion[]" /></td>
                        <td><input type="text" name="designation[]" /></td>
                        <td><input type="text" name="full_part[]" /></td>
                        <td><input type="text" name="paid[]"/></td>
                        <td><input type="text" name="salary[]" /></td>
                        <td><input type="text" name="period[]"/></td>
                        <td><input type="text" name="supervisor[]"/></td>
                        <td><a href="javascript:void(0);" class="addEmploymentRows">Add</a></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
          </fieldset>
          <fieldset>
            <h2 class="fs-title">Publications</h2>
            <h3 class="fs-subtitle">Please enclose printed hard copies</h3>
            <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table" id="publishFields">
                    <thead>
                      <th>International</th><th>National</th><th>Regional</th><th>Proceedings with ISSN</th><th>Any Other</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="international" placeholder="(Nos.)" /></td>
                        <td><input type="text" name="national" placeholder="(Nos.)"/></td>
                        <td><input type="text" name="regional" placeholder="(Nos.)"/></td>
                        <td><input type="text" name="issn" placeholder="(Nos.)"/></td>
                        <td><input type="text" name="any_other" placeholder="(Nos.)"/></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <h2 class="fs-title">Details Of Extracurricular Activities</h2>
              <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table" id="activityFields">
                    <thead>
                      <th width="90%">Details</th><th>Add More</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><textarea name="activity[]"></textarea></td>
                        <td><a href="javascript:void(0);" class="addActivityRows">Add</a></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
          </fieldset>
          <fieldset>
            <h2 class="fs-title">References</h2>
            <h3 class="fs-subtitle">(Please provide Name and Contact number)</h3>
            <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table" id="publishFields">
                    <thead>
                      <th>Name</th><th>Phone Number</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="ref_name1" placeholder="Name" /></td>
                        <td><input type="text" name="ref_phone1" placeholder="Phone Number"/></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="ref_name2" placeholder="Name" /></td>
                        <td><input type="text" name="ref_phone2" placeholder="Phone Number"/></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
          </fieldset>
          <fieldset>
            <h2 class="fs-title">Personal Details</h2>
            <h3 class="fs-subtitle">We will never sell it</h3>
            <input type="text" name="fname" placeholder="First Name" />
            <input type="text" name="lname" placeholder="Last Name" />
            <input type="text" name="phone" placeholder="Phone" />
            <textarea name="address" placeholder="Address"></textarea>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
          </fieldset>
          <fieldset>
            <h2 class="fs-title">Confirmation</h2>
            <h3 class="fs-subtitle">Please verify the details you entered and click the Submit button</h3>
            <hr>
            <div class="row">
                <div class="col-sm-6 left-col">
                  <label>APPLICATION FOR THE POST OF :</label>
                </div>
               
                <div class="col-sm-6 left-col">
                  <label></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 left-col">
                  <label>DEPARTMENT : </label>
                </div>
               
                <div class="col-sm-6 left-col">
                  <label></label>
                </div>
            </div>
            <h2 class="fs-title">Personal Details</h2><br>
            <div class="row">
                <div class="col-sm-3 left-col">
                  <label>1. NAME :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label>Sample Name</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label>2. SEX :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label>Female</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 left-col">
                  <label>3. AGE:</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label>38</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label>4. DATE OF BIRTH :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 left-col">
                  <label>5. PLACE OF BIRTH :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
                <div class="col-sm-3 left-col">
                  <label>6. RELIGION/COMMUNITY :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 left-col">
                  <label>7. PERMANENT ADDRESS :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
                <div class="col-sm-3 left-col">
                  <label>8. CONTACT ADDRESS :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 left-col">
                  <label>9. PHONE :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
                <div class="col-sm-3 left-col">
                  <label>10. MOBILE :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 left-col">
                  <label>11. E-MAIL :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
                <div class="col-sm-3 left-col">
                  <label>12. PHYSICAL ABILITY (If any) :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3  left-col">
                  <label>13. PARENTS :</label>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-10  left-col">
                  <table class="table table-bordered parents-table">
                    <thead>
                      <th></th><th>NAME</th><th>EDUCATION</th><th>OCCUPATION</th><th>REMARKS</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><label>FATHER</label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                      </tr>
                      <tr>
                        <td><label>MOTHER</label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 left-col">
                  <label>14. MARITAL STATUS :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 left-col">
                  <label>14a. SPOUSE'S QUALIFICATION :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
                <div class="col-sm-3 left-col">
                  <label>14b. SPOUSE'S OCCUPATION :</label>
                </div>
                <div class="col-sm-3 left-col">
                  <label></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 left-col">
                  <label>15. HAVE YOU APPLIED FOR ANY OTHER JOB? IF YES, DETAILS :</label>
                </div>
                <div class="col-sm-6 left-col">
                  <label></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 left-col">
                  <label>16. IF APPOINTED, MINIMUM PERIOD OF ASSURED SERVICE? </label>
                </div>
               
                <div class="col-sm-6 left-col">
                  <label></label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 left-col">
                  <label>17. LANGUAGES KNOWN : </label>
                </div>
               
                <div class="col-sm-6 left-col">
                  <label></label>
                </div>
            </div>
            <h2 class="fs-title">Educational Qualifications</h2><br>
              <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table" id="customFields">
                    <thead>
                      <th>Examination</th><th>Institution</th><th>Board</th><th>Subject(s)</th><th>Year of Passing</th><th>No: of Attempts</th><th>Class/Grade</th><th>Percentage of Marks</th>
                    </thead>
                    <tbody>

                      <tr>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <h2 class="fs-title">Employment History</h2><br>
            <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table">
                    <thead>
                      <th>Organisation</th><th>Designation</th><th>Full Time/Part Time</th><th>Paid/Honorary</th><th>If Paid, Scale of Pay</th><th>Period</th><th>Name & Ph. No. of Supervisor</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <h2 class="fs-title">Publications</h2><br>
            <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table">
                    <thead>
                      <th>International</th><th>National</th><th>Regional</th><th>Proceedings with ISSN</th><th>Any Other</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                        <td><label></label></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <h2 class="fs-title">Details Of Extracurricular Activities</h2><br>
              <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table">
                    <thead>
                      <th>Details</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><label></label></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <h2 class="fs-title">References</h2><br>
            <div class="row">
                <div class="col-sm-12">
                   <table class="table table-bordered language-table">
                    <thead>
                      <th>Name</th><th>Phone Number</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="text" name="ref_name1" placeholder="Name" /></td>
                        <td><input type="text" name="ref_phone1" placeholder="Phone Number"/></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="ref_name2" placeholder="Name" /></td>
                        <td><input type="text" name="ref_phone2" placeholder="Phone Number"/></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" class="submit action-button" value="Submit" />
          </fieldset>
        </form>
      </div>
    </div>  
    <footer>

    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/js/multi-step-form.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"> </script>
  </body>
  </html>
