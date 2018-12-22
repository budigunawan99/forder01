<html>
<!DOCTYPE html>
			<html lang="en">
			<head>
				<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/forderlogico.png">
    			<title>Forder</title>
    			
				 <meta name="viewport" content="width=device-width, initial-scale=1">
    			 <meta charset="utf-8" />
    			 <meta name="keywords" content="Beverages Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    			 SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
 	 			 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 			 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    
				 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  				 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  				 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  				 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  				 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  				 <link href="<?php echo base_url();?>assets/tema1/asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
				<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
				<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
				<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
				
				<link href="<?php echo base_url();?>assets/pp/css/style.css" rel="stylesheet">
				<script>
				$(document).ready(function() {
						$("#imageUpload").change(function(){
        					readURL(this);
        					//other uploading proccess [server side by ajax and form-data ]
    					});

						function readURL(input) {
        					if (input.files && input.files[0]) {
            					var reader = new FileReader();
            
            					reader.onload = function (e) {
                					$('#profileImage').attr('src', e.target.result);
            					}
            
            				reader.readAsDataURL(input.files[0]);
        					}
    					}
						 $('.imgArea').cropit({
          imageState: {
            src: 'http://lorempixel.com/500/400/',
          },
        });

				});
				       
				</script>
				<style>
					.user-row {
   						 margin-bottom: 14px;
					}

					.user-row:last-child {
    					margin-bottom: 0;
					}

					.dropdown-user {
   						 margin: 13px 0;
    					 padding: 5px;
    					 height: 100%;
					}

					.dropdown-user:hover {
    					cursor: pointer;
					}

					.table-user-information > tbody > tr {
    					border-top: 1px solid rgb(221, 221, 221);
					}

					.table-user-information > tbody > tr:first-child {
    					border-top: 0;
					}


					.table-user-information > tbody > tr > td {
    					border-top: 0;
					}
					.toppad{
						margin-top:20px;
					}
					
					body {
      					font: 400 15px Lato, sans-serif;
      					line-height: 1.8;
      					color: #818181;
	  					background-color: #efeded;
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
						height: 45px;
						
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
					.atas{
	  					color: #115619;
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
						margin-top: 50px;
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
					.profil{
						margin-top: -8px;
					}
					.container-fluid {
     					padding: 60px 50px;
  					}
					.fonted{
						font: 400 15px Lato, sans-serif;
					}
					<!-- sticky button -->

					#feedback1 {
    					height: 0px;
    					width: 85px;
    					position: fixed;
    					right: 0;
    					top: 30%;
    					z-index: 1000;
    					transform: rotate(-90deg);
    					-webkit-transform: rotate(-90deg);
   						-moz-transform: rotate(-90deg);
    					-o-transform: rotate(-90deg);
    					filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
					}

					#feedback1 a {
						display: block;
						background:url(pc.png) no-repeat;
						height: 52px;
						width: 155px;
						color: #fff;
						font-family: Arial, sans-serif;
						font-size: 17px;
						font-weight: bold;
						text-decoration: none;

					}
					#feedback1 a:hover {
						background:url(pc-over.png) no-repeat;
					}

					#feedback {
						height: 0px;
						width: 85px;
						position: fixed;
						right: 0;
						top: 50%;
						z-index: 1000;
						transform: rotate(-90deg);
						-webkit-transform: rotate(-90deg);
						-moz-transform: rotate(-90deg);
						-o-transform: rotate(-90deg);
						filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
					}
					#feedback a {
						display: block;
						background:#f45642;
						height: 52px;
						padding-top: 10px;
						width: 100px;
						text-align: center;
						color: #fff;
						font-family: Arial, sans-serif;
						font-size: 17px;
						font-weight: bold;
						text-decoration: none;
					}
					#feedback a:hover {
						background:#00495d;
					}
					#profileImage
					{
    					cursor: pointer;
					}
					.overlay {
  						position: absolute;
  						top: 0;
  						bottom: 0;
  						left: 0;
  						right: 0;
  						height: 100%;
  						width: 100%;
  						opacity: 0;
  						transition: .5s ease;
  						background-color: rgba(0,0,0, 0.5);
					}
					.text {
  						color: white;
  						font-size: 14px;
  						position: absolute;
  						top: 50%;
  						left: 50%;
  						transform: translate(-50%, -50%);
  						-ms-transform: translate(-50%, -50%);
  						text-align: center;
					}
					#imgArea:hover .overlay {
  						opacity: 1;
					}
					.footer{
						padding: 5em 0 2em;
    					background: linear-gradient(to top, #115619, #219a2f);
						padding-bottom: 10px;
						padding-top:10px;
						bottom: 0px;
						position: absolute;
						width: 100%;
						clear: both;
						 
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
			 
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo site_url();?>/dashboard#kategori"><p class="fonted">CATEGORIES</p></a></li>
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
	
	<div class="container">
      	<div class="row">
      		<div class="col-md-5  toppad  pull-right col-md-offset-3 ">	
       			<br>
							
      		</div>
        	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
				
				<div class="panel panel-info">
            				<div class="panel-heading">
              					<h3 class="panel-title"><?php echo $this->session->userdata('username');?></h3>
            				</div>
            	<div class="panel-body">
              	<div class="row">
				<div class="col-md-3 col-lg-3 " align="center">
					<div id="imgContainer">
						<?php echo form_open_multipart('upload/do_upload');?>
	
							<div id="imgArea">
								<img id="profileImage" alt="User Pic" src="<?php echo base_url().'uploads/'.$this->session->userdata('avatar');;?>" class="img-circle img-responsive">	
      								<div class="overlay">
    									<div class="text">Square Image</div>
  									</div>
									<div id="imgChange"><span>Change Photo</span>
        									<input id="imageUpload" type="file" name="userfile" id="image_upload_file" capture>
      								</div>
												
    						</div>
									<input type="submit" value="Done" class="btn btn-md btn-success pull-left" style="margin-top:10px; margin-bottom:10px;"/>
				
				

						</form>
					</div>
				</div>
						
						</div>
					</div>			
					</div>
					
					<div class="panel panel-info">
            				<div class="panel-heading">
              					<h3 class="panel-title">Ordered List</h3>
            				</div>
            			<div class="panel-body">
              				<div class="row">
								<div class="table-responsive">          
  									<table class="table">
    									<thead>	
      										<tr>
        										<th>No</th>
        										<th>Fotografer</th>
        										<th>Specialist</th>
        										<th>Order Time</th>
												<th>Status</th>
      										</tr>
    									</thead>
    									<tbody>
										<?php 
	include'koneksi.php';
	
	$this->load->helper('array');
	$category = array(
        		0 => 'Pra-wedding',
        		1 => 'Wedding',
        		2 => 'Graduation',
				3 => 'Birthday',
				4 => 'Formal Event'
	);					
       
      	$value=$_SESSION['username'];     
		$sql = "SELECT * FROM orderfg WHERE username='$value'";
		$result=$mysqli->query($sql);
		$id=0;
	if(mysqli_num_rows($result)>0){		
		while($row=mysqli_fetch_assoc($result)){
			$kategori=$row['kategori'];
			
			echo'
      										<tr>
        										<td>'.++$id.'</td>
        										<td>'.$row['fotografer'].'</td>
        										<td>'.element($kategori, $category).'</td>
        										<td>'.$row['ordertime'].'</td>
												<td>'.$row['status'].'</td>
												';
												if($row['status']=="waiting"){ echo'
												<td>
													<form id="pilih_mode" method="post" action="'.site_url().'/orderfg/cancel">
														<button type="submit" class="submit btn btn-danger" name="cancel" value="'.$row['id_order'].'">Cancel</button>
													</form>
												</td>
												'; } echo'
											</tr>';
		}
	}
		?>
    									</tbody>
  									</table>
						
						</div>
					</div>
					
				
					</div>
					
				</div>
			</div>
		</div>
	</div>
	</body>
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
</html>