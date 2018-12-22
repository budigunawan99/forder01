 <!DOCTYPE html>
			<html lang="en">
			<head>
				<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/forderlogico.png">
    			<title>Forder</title>
    			
				 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  				 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  				 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  				 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  				 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  				 <link href="<?php echo base_url();?>assets/tema1/asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
				<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
				<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
				<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
				<!-- gallery-->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    			<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    			<link rel="stylesheet" href="<?php echo base_url();?>assets/gallery1/grid/gallery-grid.css">
				<link href="<?php echo base_url();?>assets/tema1/asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
					
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
						background-image: url("<?php echo base_url(); ?>assets/images/bg.jpg");
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
					.modal-dialog{
   						width:60%;
   						margin-left:-30%;
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
				<a class="navbar-brand" href="<?php echo base_url();?>index.php/pagefg">
						<img src="<?php echo base_url();?>assets/images/panelog.png" alt="Forder Logo"width="130" height="20">
				</a>
				
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  
				<ul class="nav navbar-nav navbar-right">
					<li>
						<?php 
							echo anchor('flogin/logout','<p class="fonted">LOG OUT</p>'); 
						?>
					</li>
				</ul>
			</div>
		</div>
	</nav>
 <?php 
	include'koneksi.php';
	
	$this->load->helper('array');
	$category = array(
        		0 => 'Pra-wedding',
        		1 => 'Wedding',
        		2 => 'Graduation'
	);					
       
      	$value=$_SESSION['username'];     
		$sql = "SELECT * FROM fglist WHERE username='$value'";
		$result=$mysqli->query($sql);
			
		while($row=mysqli_fetch_assoc($result)){
			$kategori=$row['kategori'];
			echo'
			
			
				<div class="container">
      				<div class="row">
      					<div class="col-md-5  toppad  pull-right col-md-offset-3 ">	
       						<br>
							
      					</div>
        				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
  
          				<div class="panel panel-info">
            				<div class="panel-heading">
              					<h3 class="panel-title">'.$row['nama'].'</h3>
            				</div>
            				<div class="panel-body">
              					<div class="row">
			 
                					<div class="col-md-3 col-lg-3 " align="center">
										<div id="imgContainer">
										 '.form_open_multipart('upload/profilfg').'
  											
    											<div id="imgArea">
													<img id="profileImage" alt="User Pic" src="'.base_url().'uploades/'.$row['avatar'].'" class="img-circle img-responsive">	
      												<div class="overlay">
    													<div class="text">Square Image</div>
  													</div>
													<div id="imgChange"><span>Change Photo</span>
        													<input id="imageUpload" type="file" name="image_upload_file" id="image_upload_file" capture>
      												</div>
												
    											</div>
													<input type="submit" value="Done" class="btn btn-md btn-success pull-left"/>
  												</form>
											</div>																										
									</div>
									
									
									
										<div class=" col-md-9 col-lg-9 "> 
                  							<table class="table table-user-information">
                    							<tbody>
                      								<tr>
                        								<td>Specialist</td>
                        								<td>'.element($kategori, $category).'</td>
                      								</tr>
                      								<tr>
                        								<td>Register date</td>
                        								<td>'.$row['waktu'].'</td>
                      								</tr>
                      								<tr>
                        								<td>Date of Birth</td>
                        								<td>'.$row['tanggal_lahir'].'</td>
                      								</tr>
                   
                         							<tr>
                             						<tr>
                        								<td>Gender</td>
                        								<td>'.$row['gender'].'</td>
                      								</tr>
                        							<tr>
                        							<td>Home Address</td>
                        							<td>'.$row['alamat'].'</td>
                      								</tr>
                      								<tr>
                        								<td>Email</td>
                        								<td>'.$row['email'].'</td>
                      								</tr>
                        								<td>Phone Number</td>
                        								<td>'.$row['telp'].'
                       									 </td>
                           
                      								</tr>
                     
                    							</tbody>
                 							 </table>
										
                					</div>
              					</div>
            				</div>
                 			<div class="panel-footer">
                        		<a data-original-title="Broadcast Message" data-toggle="modal" data-target="#modal-register" type="button" class="btn btn-sm btn-primary"><p style="color:white;">See Order</p></a>		
                    		</div>
            
          				</div>
        				</div>
      					</div>
    				</div>
			';
			
		}
			echo' <br><br><br>
			 <section id="gallery">
				<div class="container gallery-container">
		    		<h1>My Gallery</h1>
			    		<p class="page-description text-center">See my pictures before order</p>
    			    		<div class="tz-gallery">
				       			<div class="row">
			';
		$imgsql="SELECT * FROM images WHERE username='$value'";
		$images = $mysqli->query($imgsql);
		if(mysqli_num_rows($images)>0){
		  while ($image=mysqli_fetch_assoc($images)){
   			echo'				
            			<div class="col-sm-6 col-md-4">
                			<a class="lightbox" href="'.base_url().'assets/gallery1/images/'.$image["file_name"].'">
                    			<img src="'.base_url().'assets/gallery1/images/'.$image["file_name"].'" alt="'.$image["file_name"] .'">
                			</a>
							 '.form_open_multipart('upload/delete_group').'

  								<div class="modal-footer">     						
     								<button class="btn btn-warning pull-left" type="submit" name="group_picture" value="'.$image["file_name"].'">Delete</button>
   								</div>
 							</form>
            			</div>		
				';  
		  }
		}else{
			echo'
				<br><br><br><br><h4 class="text-center" style="color:grey;">No photo</h4>							
			';
		}
		echo'			
						'.form_open_multipart('upload/do_uploadfg').' <br>
											<div class="col-sm-6 col-md-4" style="background-color:rgb(0,0,0,0.1);">
												<br><br><br><input type="file" name="userfile" size="20" class="pull-left"/>
												<br><br>
												<input type="submit" value="Upload" class="btn btn-md btn-success pull-left"/>
												<br><br><br>
											</div>
						 </form>		
					</div>
    			</div>
			</div>
		  </section>			
		';			
	
	?>
	
		<!-- MODAL -->
        <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header" style="background: linear-gradient(to top, #115619, #219a2f);">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only" style="color:red;">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-register-label" style="color:white;">See Order</h3>
        			</div>
        			
					<div class="modal-body">
							<div class="table-responsive">          
  									<table class="table">
    									<thead>	
      										<tr>
        										<th>No</th>
        										<th>Customer</th>
												<th>Due Date</th>
												<th>Due Time</th>
        										<th>Location</th>
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
		$sql = "SELECT * FROM orderfg WHERE fotografer='$value'";
		$result=$mysqli->query($sql);
		$id=0;
	if(mysqli_num_rows($result)>0){		
		while($row=mysqli_fetch_assoc($result)){
			$kategori=$row['kategori'];
			
			echo'
      										<tr>
        										<td>'.++$id.'</td>
        										<td>'.$row['username'].'</td>
												<td>'.$row['duedate'].'</td>
												<td>'.$row['time'].'</td>
        										<td>'.$row['location'].'</td>
												<td>'.$row['status'].'</td>
												'; 
												if($row['status']=="waiting"){ echo'
												  <td>
													<form id="pilih_mode" method="post" action="'.site_url().'/pagefg/konfirmasi">
														<button type="submit" class="submitted btn btn-success" name="submit" value="'.$row['id_order'].'">Submit</button>
														<span class="inline"><button type="submit" class="submit btn btn-warning" name="cancel" value="'.$row['id_order'].'">Cancel</button></span>
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
	
	<div id="feedback">
			<a href="#gallery"><i class="glyphicon glyphicon-picture" style="color:white;"></i></a>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script>
    	baguetteBox.run(".tz-gallery");
	</script>
	
	<script>
		$(document).ready(function(){
  			// Add smooth scrolling to all links
  			$("a").on('click', function(event) {

    		// Make sure this.hash has a value before overriding default behavior
    		if (this.hash !== "") {
      		// Prevent default anchor click behavior
      			event.preventDefault();

      		// Store hash
      			var hash = this.hash;

      		// Using jQuery's animate() method to add smooth page scroll
      		// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      			$('html, body').animate({
        			scrollTop: $(hash).offset().top
      			}, 800, function(){
   
        		// Add hash (#) to URL when done scrolling (default click behavior)
        		window.location.hash = hash;
      			});
    		} // End if
  			});
		});
	</script>
	</body>
	<footer class="container-fluid text-center">
  		<a href="#home" title="To Top">
    		<span class="glyphicon glyphicon-chevron-up atas"></span>
  		</a>
  		<p>Copyright &copy; 2018 Forder Company. All rights reserved.</p>
	</footer>
</html>