<?php
if (!defined('CHECK')) { 
    die ('YOU ARE NOT ALLOW HERE !!! ');
}

$servername = "127.0.0.1";
$username = "website";
$password = "Phuc0916430598@";
$dbname = "website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Failed Connect to Database: " . $conn->connect_error);
}
?>
