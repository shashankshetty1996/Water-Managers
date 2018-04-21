<?php include("wmheader.php")?>
	
	<div class="header_bottom" id="top">
	
		<div class="container">	
		  
			<div class="navlogo">
					
				<a href="index.php"><img src="images/watermanagermenulogo.png" class="img-responsive"/></a>
			
			</div>				
			
			<div class="navigation">	
			
				<div>
              
					<label class="mobile_menu" for="mobile_menu">
             
						<span>Menu</span>
              
					</label>
             
					<input id="mobile_menu" type="checkbox">
				
					<ul class="nav">
					
						<li><a href="index.php">Home</a></li>
					
						<li><a href="wmstatistics.php">Statistics</a></li>
					
						<li><a href="wmservices.php">Services</a></li>
					
						<li class="active"><a href="#">Associated Firms</a></li>
       
						<li><a href="Water-Managers-Clients.php">Clients</a></li>
					
						<li><a href="wmgallery.php">Gallery</a></li>
       
						<li><a href="contact-us.php">Contact Us</a></li>
					
						<div class="clearfix"></div>
				
					</ul>
				
				</div>			
		
			</div>
	
		</div>
		
	</div>
    
	<div class="clearfix"></div>
	
	<div class="container">
	
		<div class="col-md-6 col-xs-12 col-sm-12 card">
		
			<img src="images/Rohit-Realcon.jpg" alt="Image Not Loaded" width="100%" height="240"/>
			
			<hr>
			
			<div class="card-container">
			
				<p>Rohit Realcon India Pvt Ltd.</p>
				
				<h6>Building Construction</h6>
			
			</div>
		
		</div>
		
		<div class="col-md-6 col-xs-12 col-sm-12 card">
		
			<img src="images/watermanagerlogo.jpg" alt="Image Not Loaded" width="100%" height="240"/>
			
			<hr>
			
			<div class="card-container">
			
				<p>Suresh B Fatate.</p>
				
				<h6>Consultancy Services</h6>
			
			</div>
		
		</div>
		
		<div class="col-md-6 col-xs-12 col-sm-12 card">
		
			<img src="images/Moana-Developers.jpg" alt="Image Not Loaded" width="100%" height="240"/>
			
			<hr>
			
			<div class="card-container">
			
				<p>Moana Developers.</p>
				
				<h6>Real Estate & Land Development</h6>
			
			</div>
		
		</div>
		
		<div class="col-md-6 col-xs-12 col-sm-12 card">
		
			<img src="images/Njoy-Learning-Processes-Pvt-Ltd.jpg" alt="Image Not Loaded" width="100%" height="240"/>
			
			<hr>
			
			<div class="card-container">
			
				<p>Njoy Learning Processes Pvt Ltd.</p>
				
				<h6>Business & Marketing Simulation</h6>
			
			</div>
		
		</div>
	
	</div>
	
	<style>
		#back-to-top {
			position: fixed;
			bottom: 100px;
			right: 100px;
			z-index: 9999;
			width: 32px;
			height: 32px;
			text-align: center;
			line-height: 30px;
			background: #f5f5f5;
			color: #444;
			cursor: pointer;
			border: 0;
			border-radius: 2px;
			text-decoration: none;
			transition: opacity 0.2s ease-out;
			opacity: 0;
		}
		#back-to-top:hover {
			background: #e9ebec;
		}
		#back-to-top.show {
			opacity: 1;
		}
		
		@media all and (max-width: 768px ){
			a#back-to-top {
				bottom: 200px;
				right: 40px;
			}
		}
	</style>
	
	<a href="#" id="back-to-top" title="Back to top" style="font-size:135%;background-color:#b7b7b7;color:white;height: 36px;">
	
		<span class="fa fa-arrow-up" style="font-size:150%;padding-top:10%;"></span>
	
	</a>

<?php include("wmfooter.php")?>