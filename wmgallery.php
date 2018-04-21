<?php include("wmheader.php") ?>
	
	<!--div class="header_bottom" id="top">
	
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
					
						<li><a href="wmassociate-firms.php">Associated Firms</a></li>
       
						<li><a href="Water-Managers-Clients.php">Clients</a></li>
					
						<li class="active"><a href="#">Gallery</a></li>
       
						<li><a href="contact-us.php">Contact Us</a></li>
					
						<div class="clearfix"></div>
				
					</ul>
				
				</div>			
		
			</div>
	
		</div>
		
	</div>
    
	<div class="clearfix"></div>
	
	<style type="text/css">
	
		#slider-fixer{
			min-height: 720px;
			display: flex;
			align-items: center;				/* Vertical center alignment */
			justify-content: center;			/* Horizontal center alignment */
		}

	
	</style>
	
	<div class="container">
	
		
		
	</div-->
	
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>3D Gallery with CSS3 and jQuery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="3D Gallery with CSS3 and jQuery" />
        <meta name="keywords" content="3d, gallery, jquery, css3, auto, slideshow, navigate, mouse scroll, perspective" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        
        <link rel="stylesheet" type="text/css" href="css/WMGallerySlider.css" />
		<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
		<style type="text/css">
			#galleryTitle{
				color: #02903C;
				margin: 50px 0px;
				text-align: center;
			}
			
			#slider-fixer{
				min-height: 750px;
				display: flex;
				align-items: center;				/* Vertical center alignment */
				justify-content: center;			/* Horizontal center alignment */
			}
		</style>
    </head>
    <body>
	
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
					
						<li><a href="wmassociate-firms.php">Associated Firms</a></li>
       
						<li><a href="Water-Managers-Clients.php">Clients</a></li>
					
						<li class="active"><a href="#">Gallery</a></li>
       
						<li><a href="contact-us.php">Contact Us</a></li>
					
						<div class="clearfix"></div>
				
					</ul>
				
				</div>			
		
			</div>
	
		</div>
		
	</div>
    
	<div class="clearfix"></div>
		
        <div class="container" id="slider-fixer">
			<!-- Codrops top bar
            <div class="codrops-top">
                <a href="http://tympanus.net/Tutorials/CSS3PageTransitions/index.html#home">
                    <strong>&laquo; Previous Demo: </strong>Page Transitions with CSS3
                </a>
                <span class="right">
					<a href="http://www.thebestdesigns.com" target="_blank">Websites found on The Best Designs</a>
                    <a href="http://tympanus.net/codrops/2012/02/06/3d-gallery-with-css3-and-jquery/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div> Codrops top bar -->
			
			<!--
			<header>
				<h1>3D Gallery <span>with CSS3 &amp; jQuery</span></h1>
				<nav class="codrops-demos">
					<a href="index.html">Navigation</a>
					<a class="current-demo" href="index2.html">Auto-Slideshow</a>
					<a href="index3.html">3 Elements</a>
				</nav>
			</header>
			-->
			
								
			<section id="dg-container" class="dg-container">
				<h1 id="galleryTitle">Our Photos</h1>
				<div class="dg-wrapper">
					<a href="#"><img src="images/gallery/1.jpg" alt="image01"><div>About image 1</div></a>
					<a href="#"><img src="images/gallery/2.jpg" alt="image02"><div>About image 2</div></a>
					<a href="#"><img src="images/gallery/3.jpg" alt="image03"><div>About image 3</div></a>
					<a href="#"><img src="images/gallery/4.jpg" alt="image04"><div>About image 4</div></a>
					<a href="#"><img src="images/gallery/5.jpg" alt="image05"><div>About image 5</div></a>
					<a href="#"><img src="images/gallery/6.jpg" alt="image06"><div>About image 6</div></a>
					<a href="#"><img src="images/gallery/7.jpg" alt="image07"><div>About image 7</div></a>
					<a href="#"><img src="images/gallery/8.jpg" alt="image08"><div>About image 8</div></a>
					<a href="#"><img src="images/gallery/9.jpg" alt="image09"><div>About image 9</div></a>
					<a href="#"><img src="images/gallery/10.jpg" alt="image10"><div>About image 10</div></a>
					<a href="#"><img src="images/gallery/11.jpg" alt="image11"><div>About image 11</div></a>
					<a href="#"><img src="images/gallery/12.jpg" alt="image12"><div>About image 12</div></a>
					<a href="#"><img src="images/gallery/13.jpg" alt="image13"><div>About image 13</div></a>
					<a href="#"><img src="images/gallery/14.jpg" alt="image14"><div>About image 14</div></a>
					<a href="#"><img src="images/gallery/15.jpg" alt="image15"><div>About image 15</div></a>
					<a href="#"><img src="images/gallery/16.jpg" alt="image16"><div>About image 16</div></a>
					<a href="#"><img src="images/gallery/17.jpg" alt="image17"><div>About image 17</div></a>
					<a href="#"><img src="images/gallery/18.jpg" alt="image18"><div>About image 18</div></a>
					<a href="#"><img src="images/gallery/19.jpg" alt="image19"><div>About image 19</div></a>
					<a href="#"><img src="images/gallery/20.jpg" alt="image20"><div>About image 20</div></a>
					<a href="#"><img src="images/gallery/21.jpg" alt="image21"><div>About image 21</div></a>
					<a href="#"><img src="images/gallery/22.jpg" alt="image22"><div>About image 22</div></a>
					<a href="#"><img src="images/gallery/23.jpg" alt="image23"><div>About image 23</div></a>
					<a href="#"><img src="images/gallery/24.jpg" alt="image24"><div>About image 24</div></a>
					<a href="#"><img src="images/gallery/25.jpg" alt="image25"><div>About image 25</div></a>
					<a href="#"><img src="images/gallery/26.jpg" alt="image26"><div>About image 26</div></a>
					<a href="#"><img src="images/gallery/27.jpg" alt="image27"><div>About image 27</div></a>
					<a href="#"><img src="images/gallery/28.jpg" alt="image28"><div>About image 28</div></a>
					<a href="#"><img src="images/gallery/29.jpg" alt="image29"><div>About image 29</div></a>
					<a href="#"><img src="images/gallery/30.jpg" alt="image30"><div>About image 30</div></a>
					<a href="#"><img src="images/gallery/31.jpg" alt="image31"><div>About image 31</div></a>
					<a href="#"><img src="images/gallery/32.jpg" alt="image32"><div>About image 32</div></a>
					<a href="#"><img src="images/gallery/33.jpg" alt="image33"><div>About image 33</div></a>
					<a href="#"><img src="images/gallery/34.jpg" alt="image34"><div>About image 34</div></a>
					<a href="#"><img src="images/gallery/35.jpg" alt="image35"><div>About image 35</div></a>
					<a href="#"><img src="images/gallery/36.jpg" alt="image36"><div>About image 36</div></a>
					<a href="#"><img src="images/gallery/37.jpg" alt="image37"><div>About image 37</div></a>
					<a href="#"><img src="images/gallery/38.jpg" alt="image38"><div>About image 38</div></a>
					<a href="#"><img src="images/gallery/39.jpg" alt="image39"><div>About image 39</div></a>
					<a href="#"><img src="images/gallery/40.jpg" alt="image40"><div>About image 40</div></a>
				</div>
				<!--nav>	
					<span class="dg-prev">&lt;</span>
					<span class="dg-next">&gt;</span>
				</nav-->
			</section>
        </div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.gallery.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#dg-container').gallery({
					autoplay	:	true
				});
			});
		</script/>
			

<?php include("wmfooter.php") ?>