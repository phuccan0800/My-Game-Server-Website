<?php
session_start();
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        echo("<script>window.location = 'dashboard.php';</script>");		
        exit();
    } else {
		echo("<script>window.location = 'index.php?action=fail';</script>");		
        exit();
    }
}
?>
