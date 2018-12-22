<body id="home" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		    <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/login">
					<span class="glyphicon glyphicon-log-in"></span> LOGIN</a>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home">HOME</a></li>
					<li><a href="#about">ABOUT</a></li>
				</ul>
			</div>
		</div>
	</nav>

<div class="jumbotron">        
		<p class="text-center"><br/>
        <img src="<?php echo base_url(); ?>assets/images/jumbo.png" alt="Logo"width="550" height="150">
        </p>
</div>

===================================================================

<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Dashboard | Tutorial Simple Login Register CodeIgniter @ http://recodeku.blogspot.com
   </title>
 </head>
 <body>
      <h3>Dashboard</h3>
      <p>
           Selamat datang di halaman dashboard, <?php echo ucfirst($this->session->userdata('username')); ?>!
           Untuk logout dari sistem, silakan klik <?php echo anchor('login/logout','di sini...'); ?>
      </p>
 </body>
 </html>
 ===================================================================
 <script type="text/javascript">
		window.onload = function () {
    		if (typeof history.pushState === "function") {
        		history.pushState("jibberish", null, null);
        		window.onpopstate = function () {
            	history.pushState('newjibberish', null, null);
				window.alert("You're not allowed to go back");
            	// Handle the back (or forward) buttons here
            	// Will NOT handle refresh, use onbeforeunload for this.
        	};
    	}
    	else {
        	var ignoreHashChange = true;
        		window.onhashchange = function () {
            		if (!ignoreHashChange) {
                		ignoreHashChange = true;
                		window.location.hash = Math.random();
                		// Detect and redirect change here
                		// Works in older FF and IE9
                		// * it does mess with your hash symbol (anchor?) pound sign
                		// delimiter on the end of the URL
            		}
            	else {
                	ignoreHashChange = false;   
            	}
        	};
    	}
	}
  </script>
======================================================================
<script language="javascript" type="text/javascript">
	window.onbeforeunload = function()
	{
    	return "Are you sure want to close";
	}
</script>
=======================================================================
'hostname' => 'localhost',
	'username' => 'bnawanusr',
	'password' => 'informatika',
	'database' => 'bnawanusr',
=======================================================================
'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'forder',
=======================================================================
http://cs.unsyiah.ac.id/~bnawan/
http://localhost/CI/
========================================================================
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

</style>
</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		    <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Dashboard">
					<img src="<?php echo base_url(); ?>assets/images/panelog.png" alt="Forder Logo"width="130" height="20">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			   <form class="navbar-form navbar-left" role="search">
  				<div class="input-group">
    				<input type="text" class="form-control" placeholder="Search">
    				<div class="input-group-btn">
      					<button class="btn btn-default" type="submit">
        					<i class="glyphicon glyphicon-search"></i>
      					</button>
    				</div>
  				</div>
			</form>
				<ul class="nav navbar-nav navbar-right">
				    <li><a href="#about">CATEGORIES</a></li>
					
					<li>
					<?php 
					     echo anchor('login/logout','<span class="glyphicon glyphicon-log-out"></span>LOG OUT'); 
					?>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<div class="jumbotron">        
		<p class="text-center"><br/>
        <img src="<?php echo base_url(); ?>assets/images/jumbo.png" alt="Logo"width="550" height="150">
        </p>
</div>

Selamat datang di halaman dashboard, <?php echo ucfirst($this->session->userdata('username')); ?>!

<footer class="container-fluid text-center">
  <a href="#home" title="To Top">
    <span class="glyphicon glyphicon-chevron-up atas"></span>
  </a>
  <p>Copyright &copy; 2018 Forder Company. All rights reserved.</p>
</footer>
	
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#home']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
</html>
==========================================================================
<?php
							$userImage = $this->session->userdata('avatar');
							$defaultImage = 'uploads/No_Avatar.png/';
							$avatar = (file_exists($userImage)) ? $userImage : $defaultImage;
							$this->session->set_userdata('avatar',$avatar);
						?>
===========================================================================
22/5/2018
Kerjaan buat Budi dan Rinaldi:
Buat proses memesan dimulai dari si pelanggan klik salah satu mode :
1. On the spot, direct ke memesan tempat. Pelanggan memesan tempat dan menu. Simpan ke tabel bernama 'pesanan'
2. Take home, direct ke menu, di tabel pesanan no meja = 0.
===========================================================================
<footer class="container-fluid text-center">
  		<a href="#home" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up atas"></span>
  		</a>
  		<p>Copyright &copy; 2018 Forder Company. All rights reserved.</p>
</footer>
============================================================================
 '.form_open_multipart('upload/profilfg').'
  											
    											<div id="imgArea"><img class="profileImage" alt="User Pic" src="'.base_url().'uploades/'.$row['avatar'].'" class="img-circle img-responsive">	
      												<div class="progressBar">
        												<div class="bar"></div>
        													<div class="percent">0%</div>
      													</div>
      													<div id="imgChange" class="imgChange"><span>Change Photo</span>							
        													<input id="imageUpload" type="file" name="image_upload_file" id="image_upload_file">
      													</div>
														
    												</div>
													<input type="submit" value="Done" class="btn btn-md btn-success pull-left"/>
  												</form>