<!doctype html>
<html lang="en">

	<head>
	
		<meta charset="utf-8">
		   
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	
		<meta name="description" content="Water Managers" />
    
		<meta name="keywords" content="Water, Township, Infrastructure, Development, Industrial, dams, weirs" />
    
		<meta name="author" content="Shashank" />
	
		<title>Water Managers</title>
		
		<!--x-icon of the page-->
		<link rel="shortcut icon" type="image/x-icon" href="images/logo.ico">
		
		<!--Bootstrap plugs-->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- jQuery library -->
		<script src="js/jquery-1.9.1.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
		
		<!--Font Awesome icon's-->
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
		
		<!--w3.css -->
		<link rel="stylesheet" href="css/w3.css" />
		
		<!--External Css-->
		<link rel="stylesheet" type="text/css" href="css/WMGeneralStyle.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/WMHome.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/WMClientsStyle.css" media="all" /> 
		<link rel="stylesheet" type="text/css" href="css/WMHeaderFooter.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/WMContactUS.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/wm-progress-bar.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/WMCards.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/WMSmallScreen.css" media="only screen and (max-device-width: 780px)" />
		
		<!--to top button javascript-->
	<script>
	$(document).ready(function () {	
		if ($('#back-to-top').length) {
			var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('#back-to-top').addClass('show');
				} else {
					$('#back-to-top').removeClass('show');
				}
			};
			backToTop();
			$(window).bind('scroll', function () {
				backToTop();
			});
			$('#back-to-top').bind('click', function (e) {
				e.preventDefault();
				$('html,body').animate({
					scrollTop: 0
				}, 700);
			});
		}
	});
	</script>
	
	</head>
	
	<body>