<?php
	$sess_userid=$_SESSION['logged_in'];
	$sess_user=$_SESSION['username'];
	if($sess_userid <> session_id() or $sess_user=="")
	{
		echo("<script>window.location = 'index.php';</script>");		
	}
?>