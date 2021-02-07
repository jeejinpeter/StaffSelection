<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Staff Selection | Fatima Mata National College</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js');?>"></script>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-datepicker3.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/styles.css');?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <div class="body-content-wrapper"></div>
    <div class="dark_overlay"></div>
    <div class="main-wrapper">

     <!--Main Content Section Begins-->
    <div class="main-content-wrapper container-fluid">
        <div class="row">

  			 <div class="col-sm-5 col-sm-offset-4 login-form-wrapper mrgn-b-lg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-block">
                            <div class="prtm-form-block prtm-full-block overflow-wrappper">
                                <div class="prtm-block-title text-center">
                                    <div class="mrgn-b-lg">
                                        <h1 class="text-center color-one">FATIMA MATA NATIONAL COLLEGE </h1>
                                    </div>
                                    <div class="login-top mrgn-b-lg">
                                        <div class="mrgn-b-md">
                                            <h2 class="text-capitalize base-dark font-2x fw-normal">Staff Selection Portal </h2> </div>

                                    </div>
                                </div>
                                <div class="prtm-block-content">
                                    <form class="login-form"  method="POST" action="<?php echo site_url('enquiry/submit_enquiry'); ?>">
                                        <div class="form-group has-feedback">
                                            <label>Enter Name</label>
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Name" required>  </div>
                                        <div class="form-group has-feedback">
                                            <label>Enter Email</label>
                                            <input class="form-control" id="email" name="email"  type="email" placeholder="Email" required> </div>
                                        <div class="form-group has-feedback">
                                            <label>Enter Mobile</label>
                                            <input class="form-control" id="mobile" name="mobile"  type="text" placeholder="Mobile Number" required> </div>
                                        <div class="form-group has-feedback">
                                            <label>Enter Date Of Birth</label>
                                            <input class="form-control" id="dob" name="dob"  type="text" placeholder="DD/MM/YYYY" required> </div>
                                        <!--<div class="login-meta mrgn-b-lg">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="remember_me" id="remember_me"><span class="text-capitalize">Remember me</span> </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6 text-right"> <a href="javascript:;" class="text-primary password-style">Forgot Password?</a> </div>
                                            </div>
                                        </div>-->
                                        <div class="mrgn-b-lg">
                                            <button type="submit" class="btn btn-success btn-block font-2x">SUBMIT</button>
                                        </div>
                                        
										<p class="error_message center-align"></p>
                                        <!-- <div class="mrgn-b-lg">
                                        	<h4 class="center-align">OR</h4>
                                        </div> -->
                                         </form>
                                       <!-- <div class="mrgn-b-lg">
                                        	<a href="<?php echo base_url('admission/registration'); ?>"><button>REGISTER</button></a>
                                        </div>

-->
                                        
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
  		</div>
</div>
</div>
</div>
<script type="text/javascript">
            $(function () {
                $('#dob').datepicker({format: 'dd/mm/yyyy'});

            });
</script>

</body>
</html>