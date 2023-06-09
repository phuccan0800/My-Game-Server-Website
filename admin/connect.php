<?php
$servername = "103.27.239.251";
$username = "website";
$password = "Phuc0916430598@";
$dbname = "website";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Failed Connect to Database: " . $conn->connect_error);
}
?> 
