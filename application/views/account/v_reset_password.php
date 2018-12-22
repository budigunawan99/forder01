  <!DOCTYPE html>  
  <html lang="en">  
  <head> 
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/forderlogico.png">  
  <title>Forder</title>  
   <meta charset="utf-8">  
   <meta http-equiv="X-UA-Compatible" content="IE=edge">  
   <meta name="viewport" content="width=device-width, initial-scale=1"> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
   <!-- Latest compiled and minified CSS -->  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
	
   <style type="text/css">  
    	.form-signin{
    		max-width: 330px;
    		padding: 15px;
    		margin: 0 auto;
		}
		.form-signin .form-signin-heading, .form-signin .checkbox{
    		margin-bottom: 10px;
		}
		.form-signin .checkbox{
    		font-weight: normal;
		}
		.form-signin .form-control{
    		position: relative;
    		font-size: 16px;
    		height: auto;
    		padding: 10px;
    		-webkit-box-sizing: border-box;
    		-moz-box-sizing: border-box;
   			box-sizing: border-box;
		}
		.form-signin .form-control:focus{
    		z-index: 2;
		}
		.form-signin input[type="text"]{
    		margin-bottom: -1px;
    		border-bottom-left-radius: 0;
    		border-bottom-right-radius: 0;
		}
		.form-signin input[type="password"]{
    		margin-bottom: 10px;
    		border-top-left-radius: 0;
    		border-top-right-radius: 0;
		}
		.account-wall{
    		margin-top: 20px;
    		padding: 40px 0px 20px 0px;
    		background-color: #f7f7f7;
    		-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    		-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		}
		.login-title{
    		color: #555;
    		margin-top: 20%;
    		font-weight: 400;
    		display: block;
			font: 400 25px Lato, sans-serif;
		}
		.profile-img{
    		width: 96px;
    		height: 96px;
    		margin: 0 auto 10px;
    		display: block;
    		-moz-border-radius: 50%;
    		-webkit-border-radius: 50%;
    		border-radius: 50%;
		}
		.need-help{
    		margin-top: 15px;
		}
		.new-account{
    		display: block;
    		margin-top: 10px;
			margin-bottom: 10px;
		}
		.warning{
			color:red;
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

   </style>  
  </head>      
 <body> 
	<div class="container">
    	<div class="row"> 
   <h2>Reset Password</h2>   
   <h5>Hello <span><?php echo $nama; ?></span>, Silakan isi password baru anda.</h5>   
   <?php echo form_open('lupa_password/reset_password/token/'.$token); ?>  
   <p>Password Baru:</p>   
   <p>   
     <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control"/>   
   </p>   
   <p> <?php echo form_error('password'); ?> </p>   
   <p>Konfirmasi Password:</p>   
   <p>   
     <input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" class="form-control"/>   
   </p>   
   <p> <?php echo form_error('passconf'); ?> </p>   
   <p>   
     <input type="submit" name="btnSubmit" value="Reset" />   
   </p>

		</div>
		</div>		
 </body>   
 </html>   