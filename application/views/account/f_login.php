 <?php
   $this->session->unset_userdata('username');
   $this->session->unset_userdata('id_login');
   $this->session->unset_userdata('id');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/forderlogico.png">
	<title>FORDER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/logintheme/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/logintheme/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/logintheme/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/logintheme/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/logintheme/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/logintheme/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/logintheme/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/logintheme/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/logintheme/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/logintheme/css/main.css">
<!--===============================================================================================-->
<style>
	.regs{
		color:blue;
		margin-left:12px;
		margin-top:14px;
	}
	.warning{
		color:red;
		font-color:red;
	}
	.sel{
		margin-top:15px;
	}
	.sels{
		margin-top:10px;
	}
	.navbar {
		margin-bottom: 0;
		background-color: #115619;
		z-index: 9999;
		border: 0;
		font-size: 15px !important;
		line-height: 1.42857143 !important;
		letter-spacing: 4px;
		border-radius: 0;
	}

	.navbar li a, .navbar .navbar-brand {
		color: #fff !important;
		margin-left: 10px;
		font-size: 15px !important;
	}

	.navbar-nav li a:hover, .navbar-nav li.active a {
		color: #006400 !important;
		background-color: #fff !important;
	}

	.navbar-default .navbar-toggle {
		border-color: transparent;
		color: #fff !important;
	}
  	.logo {
      color: #115619;
      font-size: 200px;
  	}
	.footer{
		padding: 5em 0 2em;
    	background: linear-gradient(to top, #115619, #219a2f);
		padding-bottom: 10px;
		padding-top:10px
	}
	label {
  		display: block;
  		margin-bottom: 5px;
  		color: #666;
	}
	.inline {
  		display: inline;
  		margin-right: 1em;
	}
</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		    <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="<?php echo base_url(); ?>">
					<img src="<?php echo base_url(); ?>assets/images/panelog.png" alt="Forder Logo"width="130" height="20">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url(); ?>index.php/login"><span class="glyphicon glyphicon-log-in"></span>LOGIN</a></li>
					<li><a href="<?php echo base_url() ?>index.php/Register">SIGN UP</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?php echo base_url(); ?>assets/logintheme/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Login
					</span>
				</div>
				
				<div class="col-sm-12">  
              <?php
   				// Cetak jika ada notifikasi
      				if($this->session->flashdata('sukses')) {
           			echo '<p class="warning text-center" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      				}
      			?> 
           </div>  
			
				
				<?php echo form_open(site_url('flogin'),array('class' => 'login100-form validate-form'));?>
	
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span> 
					</div>

					<div class="container-login100-form-btn sels">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					
					<div class="regs">
					<a href="<?php echo site_url(); ?>/fregister" class="txt1 text-center">
								Click here to register
					</a>
					</div>	
				<?php echo form_close();?>  
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/logintheme/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/logintheme/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/logintheme/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/logintheme/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/logintheme/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/logintheme/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/logintheme/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/logintheme/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/logintheme/js/main.js"></script>

</body>
<footer class=" footer container-fluid text-center">
  		<a href="#home" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up atas" style="color:white;"></span>
  		</a>
  		<p style="color:white;">Copyright &copy; 2018 Forder Company. All rights reserved.</p>
</footer>
	
</html>