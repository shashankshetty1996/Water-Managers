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
					
						<li class="active"><a href="#">Statistics</a></li>
					
						<li><a href="wmservices.php">Services</a></li>
					
						<li><a href="wmassociate-firms.php">Associated Firms</a></li>
       
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

	<p id="card-intro"> We are having Water Managers' consulting firm over 10 years. Below are some of the facts that we are providing for your reference.</p>

	<div class="col-md-6 col-xs-12 col-sm-12 card">
	
		<img src="images/Total-Projects.jpg" alt="Image Not Loaded" width="100%" height="200" />
		
		<p style="width:70%" data-value="50">Total Projects</p>
			
		<progress max="100" value="70" class="html5">
		
			<div class="progress-bar">

				<span style="width: 70%">70%</span>
			
			</div>
		
		</progress>
		
	</div>
	
	<div class="col-md-6 col-xs-12 col-sm-12 card">
		
		<img src="images/Completed.jpg" alt="Image Not Loaded" width="100%" height="200" />
		
		<p style="width:60%" data-value="40">Completed</p>
		
		<progress max="100" value="60" class="jquery">
		
			<!-- Browsers that support HTML5 progress element will ignore the html inside `progress` element. Whereas older browsers will ignore the `progress` element and instead render the html inside it. -->
			
			<div class="progress-bar">
				
				<span style="width: 60%">60%</span>
			
			</div>
		
		</progress>
		
	</div>
	
	<div class="col-md-6 col-xs-12 col-sm-12 card">
		
		<img src="images/Happy-Clients.jpg" alt="Image Not Loaded" width="100%" height="200" />
		
		<p style="width:100%" data-value="50">Happy Client</p>
		
		<progress max="100" value="100" class="python">
			
			<!-- Browsers that support HTML5 progress element will ignore the html inside `progress` element. Whereas older browsers will ignore the `progress` element and instead render the html inside it. -->
			
			<div class="progress-bar">
			
				<span style="width: 100%">100%</span>
			
			</div>
		
		</progress>
		
	</div>
	
	<div class="col-md-6 col-xs-12 col-sm-12 card">
		
		<img src="images/OngoingProjects.jpg" alt="Image Not Loaded" width="100%" height="200" />
		
		<p style="width:40%" data-value="10">Ongoing Projects</p>
		
		<progress max="100" value="40" class="node-js">
			
			<!-- Browsers that support HTML5 progress element will ignore the html inside `progress` element. Whereas older browsers will ignore the `progress` element and instead render the html inside it. -->
			
			<div class="progress-bar">
				
				<span style="width: 40%">40%</span>
			
			</div>
		
		</progress>		
		
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