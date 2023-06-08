<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
	<meta name="author" content=""> 
	<title>VN-TOP SERVER</title> 
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet"> 
	<link href="css/font-awesome.min.css" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet"> 
	<link rel="shortcut icon" href="images/logo.png"> 
</head><!--/head-->
<body>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner"> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	<? require 'header.php'; ?>
	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel"> 
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
			</ol><!--/.carousel-indicators--> 
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(images/slider/slide3.gif)"> 
					<div class="carousel-caption"> 
						<div> 
							<h2 class="heading animated bounceInDown">ONTOP SERVER WEBSITE</h2> 
							<p class="animated bounceInUp">Join our server community</p> 
							<a class="btn btn-default slider-btn animated fadeIn" href="#listserver">Get Started</a> 
						</div> 
					</div> 
				</div>
				<div class="item" style="background-image: url(images/slider/slide2.gif)"> 
					<div class="carousel-caption"> <div> 
						<h2 class="heading animated bounceInDown">Get Notifications</h2> 
						<p class="animated bounceInUp"> Here you will get recognized </p> <a class="btn btn-default slider-btn animated fadeIn" href="https://discord.gg/hWTXCdVe">Join us DISCORD</a> 
					</div> 
				</div> 
			</div> 
			<div class="item" style="background-image: url(images/slider/slide1.jpg)"> 
				<div class="carousel-caption"> 
					<div> 
						<h2 class="heading animated bounceInRight">Our Admin</h2> 
						<p class="animated bounceInLeft">Trương Tấn Phúc</p> 
						<a class="btn btn-default slider-btn animated bounceInUp" href="https://www.facebook.com/TTP.0937039625">Contact</a> 
					</div> 
				</div> 
			</div>
		</div><!--/.carousel-inner-->
		<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div> 
	</section><!--/#home-->
	<? 
	require 'aboutus.php';  	
	require 'listserver.php'; 
	require 'contactus.php';
	require 'footer.php'?>
	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script> 
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
	<script type="text/javascript" src="js/jquery.parallax.js"></script> 
	<script type="text/javascript" src="js/main.js"></script> 
</body>
</html>