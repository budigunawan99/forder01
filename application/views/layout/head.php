<?php
   $this->session->unset_userdata('username');
   $this->session->unset_userdata('id_login');
   $this->session->unset_userdata('id');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/forderlogico.png">
  <title>Forder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  
  <style>
  	 body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
      margin-top: 50px;
}
  	}
  	h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  	}
  	h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  	}  
	.whiten {
		color: white;
	}
	.bigger{
		font-size: 40px;
		font-weight: 550;
	}
	.jumbotron { 
		position: relative;
    	background: url("<?php echo base_url(); ?>assets/images/forderbanner.png") no-repeat center center;
    	min-width: 650px;
    	height: 100%;
    	background-size: cover;
    	overflow: hidden; 
		color: #ffffff;
		background-attachment: scroll;
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
	.container-fluid {
     	padding: 60px 50px;
  	}
  	.logo {
      color: #115619;
      font-size: 200px;
  	}
	.atas{
	  color: #115619;
	}
	.slideanim {visibility:hidden;}
	@media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
   	@media screen and (max-width: 480px) {
    	.logo {
        	font-size: 150px;
    	}
  	}
	.quotation-mark{
		margin-bottom: -60px;
    	font-weight: bold;
    	font-size:100px;
    	color:black;
    	font-family: "Times New Roman", Georgia, Serif;
	}

	.quote-text{
    	color:black;
    	font-size: 19px;
    	
	}
	.blog-post-actions{
		color:black;
	}
	hr{
		border-color:black;
	}	
	.carousel-indicators li {
    	border-color: #115619;
	}

	.carousel-indicators li.active {
    	background-color: #115619;
	}
	.carousel-control.right, .carousel-control.left {
    	background-image: none;
    	color: #115619;
	}
	.carousel-caption{
		margin-bottom: 20px;
	}
	.reg{
		margin-bottom: 4%;
	}
	@media (max-width: 1190px) {
		.bigger{
			display: none;
		}
		.quotation-mark{
    		display: none;
		}
		.blog-post-actions{
			display:none;
		}
		hr{
			display:none;
		}
		.quote-text{
			font-size: 23px;
			
		}		
	}
	@media (max-width: 875px) {
		.kecil{
			width: 25%;
		}
		.carousel-caption{
			height: 90%;
		}
		.quote-text{
			font-size: 20px;
			margin-top: 50px;
		}
		.reg{
			font-size: 25px;
		}
		.carousel-indicators{
    		bottom: -30%;
		}
	}
	@media (max-width: 767px) {
		.quote-text{
			font-size: 15px;
			margin-top: 50px;
		}
	}
	@media (max-width: 625px) {
		.carousel-caption{
			height: 80%;
		}
		.reg{
			font-size: 15px;
		}
		.carousel-indicators{
    		bottom: -45%;
		}
		.quote-text{
			font-size: 15px;
			margin-top: 20px;
		}
	}
	@media (max-width: 550px) {
		.reg{
			font-size: 12px;
		}
		.quote-text{
			font-size: 14px;
		}
	}

	@media (max-width: 460px) {
		.carousel-indicators{
    		bottom: -65%;
		}
		.reg{
			font-size: 10px;
		}
		.quote-text{
			font-size: 12px;
		}
	}
	@media (max-width: 403px) {
		.reg{
			font-size: 8px;
		}
		.quote-text{
			font-size: 10px;
		}
	}
	@media (max-width: 342px) {
		.reg{
			font-size: 7px;
		}
		.carousel-indicators{
    		bottom: -75%;
		}
		.quote-text{
			font-size: 9px;
		}
	}
	@media (max-width: 319px) {
		.carousel-caption{
    		display: none;
		}
	}
	.carousel img {
    	width: 100%;
	}
	.footer{
		padding: 5em 0 2em;
    	background: linear-gradient(to top, #115619, #219a2f);
		padding-bottom: 10px;
		padding-top:10px
	}
</style>
</head>

