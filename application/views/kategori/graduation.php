<!DOCTYPE html>
<html lang="zxx">

<head>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/forderlogico.png">
    <title>Forder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Beverages Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
 	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    
    <!-- banner slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/tema1/asset_/css/zoomslider.css" />
    <!--gallery -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/tema1/asset_/css/cm-overlay.css" />
    <!-- //gallery -->
    <script src="<?php echo base_url();?>assets/tema1/asset_/js/jquery-2.2.3.min.js"></script>
     <!-- numscroller -->
     <script type="text/javascript" src="<?php echo base_url();?>assets/tema1/asset_/js/numscroller-1.0.js"></script>
    <script src="<?php echo base_url();?>assets/tema1/asset_/js/bootstrap.js"></script>
    <!-- font-awesome icons -->
    <link href="<?php echo base_url();?>assets/tema1/asset_/css/font-awesome.css" rel="stylesheet">
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //web-fonts -->
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
    	opacity: 0.7;
	}
	.person:hover {
    	border-color: #c7c7c7;
	}
	.profil{
		margin-top: -8px;
	}
	select {
  		margin-bottom: 1em;
  		padding: .25em;
		margin-left: 20px;
  		border: 0;
  		border-bottom: 2px solid currentcolor; 
  		
  		letter-spacing: .15em;
  		border-radius: 0;
  		&:focus, &:active {
    		outline: 0;
    		border-bottom-color: red;
  		}
	}
	
	.footer{
		padding: 5em 0 2em;
    	background: linear-gradient(to top, #115619, #219a2f);
		padding-bottom: 10px;
		padding-top:10px
	}
	.centr{
		margin-top:-15px;
	}
</style>

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
			  <div class="col-sm-3 col-md-3">
        		<form class="navbar-form" role="search">
        			<div class="input-group">
            			<input type="text" class="form-control" placeholder="Search" name="q">
            			<div class="input-group-btn">
                			<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            			</div>
        			</div>
        		</form>
    		   </div>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						
                        	<span>
							
							<img src="<?php echo base_url().'uploads/'.$this->session->userdata('avatar');;?>" width="25px" class="img-circle profil" alt="avatar">
							
							</span> 
                        	
                        	<span class="glyphicon glyphicon-chevron-down"></span>
                    	</a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                   
                                    <div class="col-lg-12">
                                        <p class="text-center identity"><strong><?php echo ucfirst($this->session->userdata('username')); ?></strong></p>                   
                                        <p class="text-center butset">
                                            <a href="<?php echo base_url(); ?>index.php/setAcc" class="btn btn-primary btn-block btn-sm btnset">Settings</a>
                                        </p>
										 <p class="text-center butset">
											                                       
												<?php 
					     							echo anchor('login/logout','<button class="btn btn-danger btn-block btnout"><span class="glyphicon glyphicon-log-out"></span> LOG OUT</button>'); 
												?>
                                    		
										</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </li>
					
				</ul>
			</div>
		</div>
	</nav>
<!--menu-->
<div class="brands">
	<div class="container">
	<section id="pesan_menu">
	<div class="brands">
	<h3>Graduation</h3>
		
		<div class="row" style="margin:0px; margin-top:50px;">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form_filter">
			
				<select name="sorting" class="selection">
					<?php $selected = $_POST['sorting']; ?>
   					<option name="all" value="all" <?php if($selected == 'all'){echo("selected");}?> >All</option>
   					<option name="alfabet" value="alfabet"  <?php if($selected == 'alfabet'){echo("selected");}?> >Alphabet</option>
  			 		<option name="waktu" value="waktu"  <?php if($selected == 'waktu'){echo("selected");}?> >Waktu Pendaftaran</option>
				</select>
			
				<input type="submit" value = "Sort">
			
		
			</form> 
				<div class="daftar-menu col-md-12">
					

					<div id="box-men">
						
								<div class="box-food">
									<?php

										include'koneksi.php';
										
										$sql="SELECT * FROM fglist WHERE kategori=2";
										if(isset($_POST['sorting'])) {
											$value= $_POST['sorting'];
											if($value == 'alfabet') {
    											// query to get all Fitzgerald records
   												$sql="SELECT * FROM fglist WHERE kategori=2 ORDER BY nama";
											}
												elseif($value == 'waktu') {
    												// query to get all Herring records
    												$sql="SELECT * FROM fglist WHERE kategori=2 ORDER BY id DESC";
													}
																			
										}

								if ($result=mysqli_query($mysqli,$sql)){
									if(mysqli_num_rows($result)>0){
										while($row=mysqli_fetch_assoc($result)){
											echo'<div class="col-md-4 top_brand_left">
													<div class="hover14 column">
														<div class="agile_top_brand_left_grid">
															<div class="agile_top_brand_left_grid_pos">
																</div>
																<div class="agile_top_brand_left_grid1">
																	<figure>
																		<div class="snipcart-item block" >
																			<div class="snipcart-thumb">';
											echo'<label class="box text-center">
												<img class="img-responsive" src="'.base_url().'uploades/'.$row['avatar'].'" ><br><h4>'.$row['nama'].'</h4><br>
												<div class="centr">
													<form id="pilih_mode" method="post" action="'.site_url().'/choosefg/detailfg">
														<button type="submit" class="submit btn btn-primary" name="detail" value="'.$row['username'].'">Details</button>
													</form>
												</div>
												</label>';
											echo'		</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>';
										}
									} else{
										 echo'
										 	<div class="container">
      											<div class="row">
      			
       												<br><br><p class="text-center">Ooops, no photographer . . .</p><br><br>
      							                    										
												</div>
											</div>
										 ';
									}
								}
									?>
								</div>
							</div>


						</div>
					</div>
		
				</div>
			</div>
			  <div class="clearfix"></div>
          </div>
		</section>





<!--//menu-->
    <!-- services -->
    <!-- services -->
    <!-- testimonials -->
    <!-- //testimonials -->
    <!-- footer -->
 	<footer class=" footer container-fluid text-center">
  		<a href="#home" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up atas" style="color:white;"></span>
  		</a>
  		<p style="color:white;">Copyright &copy; 2018 Forder Company. All rights reserved.</p>
	</footer>
    <!-- //footer -->
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
    <!-- banner slider -->
    <script src="<?php echo base_url();?>assets/tema1/asset_/js/modernizr-2.6.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/tema1/asset_/js/jquery.zoomslider.min.js"></script>
    <!-- //banner slider -->
    <!-- //gallery -->
    <script src="<?php echo base_url();?>assets/tema1/asset_/js/jquery.tools.min.js"></script>
    <script src="<?php echo base_url();?>assets/tema1/asset_/js/jquery.mobile.custom.min.js"></script>
    <script src="<?php echo base_url();?>assets/tema1/asset_/js/jquery.cm-overlay.js"></script>

    <script>
        $(document).ready(function () {
            $('.cm-overlay').cmOverlay();
        });
    </script>
    <!-- //gallery -->
    <!-- testimonials -->
    <!-- required-js-files-->
    <link href="assets/tema1/asset_/css/owl.carousel.css" rel="stylesheet">
    <script src="assets/tema1/asset_/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                items: 1,
                lazyLoad: true,
                autoPlay: false,
                navigation: true,
                navigationText: true,
                pagination: true,
            });
        });
    </script>

	<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

    <!--//required-js-files-->
    <!-- start-smooth-scrolling -->
    <script src="assets/tema1/asset_/js/move-top.js"></script>
    <script src="assets/tema1/asset_/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
         var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
         };
         */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="<?php echo base_url();?>assets/tema1/asset_/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- navigation  -->
    <script src="<?php echo base_url();?>assets/tema1/asset_/js/main.js"></script>
    <!-- //navigation -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</body>

</html>
