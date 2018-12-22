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
  <link href="<?php echo base_url();?>assets/tema1/asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <script src="<?php echo base_url();?>assets/tema1/js/minicart.min.js"></script>
  
  <style>
  		.daftar-menu,.rincian{
			margin:0;
			padding:0;
		}
		.rincian ul li{
			background-color:rgb(238, 238, 238);
		}
		.rincian ul li a:hover{
			color:rgb(51, 122, 183);
		}
		.box-food,.box-drink{
			margin:0px;
			padding:5px;
			overflow:hidden;
		}
		.box-food .box{
			margin-bottom:4px;
			margin-right:3px;
			display:inline-block;
			padding:5px 25px;
			background-color:rgba(245,245,245,0.3);
		}
		.box-food,.box-drink{
			margin:0px;
			padding:5px;
			overflow:hidden;
		}
		.box-food .box{
			margin-bottom:4px;
			margin-right:3px;
			display:inline-block;
			padding:5px 25px;
			background-color:rgba(245,245,245,0.3);
		}

		.text {
  			color: white;
  			font-size: 15px;
  			position: absolute;
  			top: 50%;
  			left: 50%;
  			transform: translate(-50%, -50%);
  			-ms-transform: translate(-50%, -50%);
  			text-align: center;
		}
	.button{
		background-color: #0099cc;
		color: white;
		margin-top: 15px;
		border-radius: 20px;
		border-color: none;
	}
	.tables{
		margin-top: 30px;
	}

	.black{
		color:black;
	}
  	 body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
	  background-color: #e3f3fc;
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
		letter-spacing: 2px;
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
    	.btn-lg {
        	width: 100%;
        	margin-bottom: 35px;
    	}
  	}
   	@media screen and (max-width: 480px) {
    	.logo {
        	font-size: 150px;
    	}
  	}
	.navbar-login{
    	width: 140px;
		padding-top: 8px;
    	padding-bottom: 0px;
		padding-left: 4px;
		line-height: 7px;
	}
	.icon-size{
    	font-size: 87px;
	}
	.identity{
		font-size: 12px;
		color:black;
		font-family: Arial, Helvetica, sans-serif;
		font-weight: 100;
		letter-spacing: 1px;	
	}
	.butset{
		margin-top: 30px;
	}
	.btnset{
		width: 130px;
	}
	.btnout{
		width: 130px;
		margin-left:9.5px;
		margin-top: -30px;
	}
	.glyphicon-chevron-down{
		font-size: 10px;
	}
	.person {
    	border: 10px solid transparent;
    	margin-bottom: 25px;
    	width: 80%;
    	height: 80%;
    	opacity: 0.9;
	}
	.person:hover {
    	border-color: #c7c7c7;
	}
	.profil{
		margin-top: -8px;
	}
	.centr{
		text-align:center;
	}
	.fonted{
		font: 400 15px Lato, sans-serif;
	}
	.footer{
		padding: 5em 0 2em;
    	background: linear-gradient(to top, #115619, #219a2f);
		padding-bottom: 10px;
		padding-top:10px
	}
</style>
</head>