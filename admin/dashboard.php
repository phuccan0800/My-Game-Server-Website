<? 	
	session_start();
 	require ('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ADMIN PAGE</title>
    <link href="css/admin.css" rel="stylesheet" type="text/css" />
    <script src="js/myjs.js" type="text/javascript"></script>
</head>
<?
	$page = $_GET['page'];
	if($page == ''){
		$page = 'dashboard';
	}

?>
<body>
<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="/"><h1><img src="images/logo.png" alt="logo"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll active"><a href="#navigation">Home</a></li> 
						<li class="scroll"><a href="#about-us">About Us</a></li> 
						<li class="scroll"><a href="#listserver">List Server</a></li>  
						<li class="scroll"><a href="#contact">Contact</a></li> 
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
</header> <!--/#navigation--> 
<div class="container">
<nav>
		<ul class="mcd-menu">
			<li>
				<a href="">
					<i class="fa fa-home"></i>
					<strong>Home</strong>
					<small>sweet home</small>
				</a>
			</li>
			<li>
				<a href="" class="active">
					<i class="fa fa-edit"></i>
					<strong>About us</strong>
					<small>sweet home</small>
				</a>
			</li>
			<li>
				<a href="">
					<i class="fa fa-gift"></i>
					<strong>Features</strong>
					<small>sweet home</small>
				</a>
			</li>
			<li>
				<a href="">
					<i class="fa fa-globe"></i>
					<strong>News</strong>
					<small>sweet home</small>
				</a>
			</li>
			<li>
				<a href="">
					<i class="fa fa-comments-o"></i>
					<strong>Blog</strong>
					<small>what they say</small>
				</a>
				<ul>
					<li><a href="#"><i class="fa fa-globe"></i>Mission</a></li>
					<li>
						<a href="#"><i class="fa fa-group"></i>Our Team</a>
						<ul>
							<li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
							<li>
								<a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a>
								<ul>
									<li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
									<li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
								</ul>
							</li>
							<li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="fa fa-trophy"></i>Rewards</a></li>
					<li><a href="#"><i class="fa fa-certificate"></i>Certificates</a></li>
				</ul>
			</li>
			<li>
				<a href="">
					<i class="fa fa-picture-o"></i>
					<strong>Portfolio</strong>
					<small>sweet home</small>
				</a>
			</li>
			<li>
				<a href="">
					<i class="fa fa-envelope-o"></i>
					<strong>Contacts</strong>
					<small>drop a line</small>
				</a>
			</li>
			<li class="float">
				<a class="search">
					<input type="text" value="search ...">
					<button><i class="fa fa-search"></i></button>
				</a>
				<a href="" class="search-mobile">
					<i class="fa fa-search"></i>
				</a>
			</li>
		</ul>
	</nav>
</div>
</body>
</html>
