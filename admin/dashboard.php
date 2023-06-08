<? 	
	session_start();
 	require_once ('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Computer Store Backend</title>
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
</div>
</body>
</html>
