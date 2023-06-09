<? 	
	session_start();
 	require ('session.php');
	require ('connect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ADMIN PAGE</title>
    <link href="css/dashboard.css" rel="stylesheet" type="text/css" />
    <script src="js/myjs.js" type="text/javascript"></script>
</head>
<?
	$page = $_GET['page'];
	if($page == ''){
		$page = 'dashboard';
	}
?>
<body>
<div class="container">
<nav>
		<ul class="mcd-menu">
			<li>
				<a href="?page=dashboard" <?if ($page == "dashboard") {echo'class="active"'; } ?>>
					<strong>Dashboard</strong>
				</a>
			</li>
			<?
				$sql = "SHOW TABLES";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_array()) {
						echo '	<li> <a href="?page='.$row[0].'"'; 
						if ($page == $row[0]) {echo'class="active"'; }
									echo '><strong>'. $row[0]  .'</strong></a>
								</li>';
					}
				} else {
					echo "NO INFORMATION ON THIS DATABASE !!!";
				}
			 ?>
		</ul>
	</nav>
</div>
</body>
</html>
