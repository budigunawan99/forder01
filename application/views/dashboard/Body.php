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
            			<input type="text" class="form-control" placeholder="Search" name="search">
            			<div class="input-group-btn">
                			<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            			</div>
        			</div>
        		</form>
    		   </div>
				<ul class="nav navbar-nav navbar-right">
				    <li><a href="#kategori"><p class="fonted">CATEGORIES</p></a></li>
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

<div class="jumbotron">        
		<p class="text-center"><br/>
        <img src="<?php echo base_url(); ?>assets/images/jumbo.png" alt="Logo"width="550" height="150">
        </p>
</div>

<div class="brands">
	<div class="container">
	<section id="kategori">
	<div class="brands">
	<h3>Kategori</h3>
		<div class="row" style="margin:0px; margin-top:50px;">

				<div class="daftar-menu col-md-12">
					

					<div id="box-men">
						
								<div class="box-food">
									<div class="centr">
									 	<div class="col-sm-4"><br><br>
      										<a href="<?php echo site_url(); ?>/choosefg/prawed"><img src="<?php echo base_url(); ?>assets/images/prewed.jpg" class="img-circle person" alt="Random Name"></a>
      										<br><p><strong>Pra-wedding</strong></p>
									 	</div>
									 </div>
									 <div class="centr">
    								 	<div class="col-sm-4"><br><br>
      										<a href="<?php echo site_url(); ?>/choosefg/wedding"><img src="<?php echo base_url(); ?>assets/images/wedding.jpg" class="img-circle person" alt="Random Name"></a>
      										<br><p><strong>Wedding</strong></p>
										 </div>
									 </div>
									 <div class="centr">
    								 	<div class="col-sm-4"><br><br>
      										<a href="<?php echo site_url(); ?>/choosefg/graduation"><img src="<?php echo base_url(); ?>assets/images/graduation.jpg" class="img-circle person" alt="Random Name"></a>
      										<br><p><strong>Graduation</strong></p>
									 	</div>
									</div>
									<div class="centr">
    								 	<div class="col-sm-4"><br><br>
      										<a href="<?php echo site_url(); ?>/choosefg/birthday"><img src="<?php echo base_url(); ?>assets/images/birthday.jpg" class="img-circle person" alt="Random Name"></a>
      										<br><p><strong>Birthday</strong></p>
									 	</div>
									</div>
									<div class="centr">
    								 	<div class="col-sm-4"><br><br>
      										<a href="<?php echo site_url(); ?>/choosefg/formal"><img src="<?php echo base_url(); ?>assets/images/formal.jpg" class="img-circle person" alt="Random Name"></a>
      										<br><p><strong>Formal Event</strong></p>
									 	</div>
									</div>
								</div>
							</div>


						</div>
					</div>
		
				</div>
			</div>
			  <div class="clearfix"></div>
          </div>
		</section>

</body>