<body id="home" data-spy="scroll" data-target=".navbar" data-offset="60">
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

			
	<!--<div class="col-md-8 col-md-offset-2">-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>		
			</ol>
 
			<!-- deklarasi carousel -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo base_url(); ?>assets/images/carousel1.jpg" alt="quotes">
					<div class="carousel-caption">
						
     							 <p class="quotation-mark text-center">
                                      “
                                 </p>
      							 <p class="quote-text text-center">
        						 	Having trouble in searching photographers ? Forder is the answer !
      							 </p>
      							 <hr>
      					 		<div class="blog-post-actions">
        								<p class="blog-post-bottom pull-center">
          									Budi Gunawan - CEO Forder
       									</p>
      					 		</div>
	
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url(); ?>assets/images/carousel2.jpg" alt="register">
					<div class="carousel-caption">
						<h2 class="whiten bigger">Become  Our  Partner</h2>
						<h3 class="whiten reg">Get  your  freelance  job  as  an  online  photographer</h3>
						<div class="visible-lg">
						<a href="<?php echo site_url();?>/Fregister"><button class="btn btn-primary btn-lg">Join Us</button></a>
						</div>
						<div class="visible-md visible-sm">
						<a href="<?php echo site_url();?>/Fregister"><button class="btn btn-primary btn-md">Join Us</button></a>
						</div>
						<div class="visible-xs">
						<a href="<?php echo site_url();?>/Fregister"><button class="btn btn-primary btn-xs">Join Us</button></a>
						</div>
					</div>
				</div>
 
			<!-- membuat panah next dan previous -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	<!--	</div>-->
   </div>

