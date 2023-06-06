<?php
require_once 'connect.php';
define('CHECK', true);
$sql = "SELECT website, ipaddress, port, rcon_user, rcon_password FROM your_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $website = $row["website"];
    $ipaddress = $row["ipaddress"];
    $port = $row["port"];
    $rcon_user = $row["rcon_user"];
    $rcon_password = $row["rcon_password"];

    echo "Website: " . $website . "<br>";
    echo "IP Address: " . $ipaddress . "<br>";
    echo "Port: " . $port . "<br>";
    echo "RCON User: " . $rcon_user . "<br>";
    echo "RCON Password: " . $rcon_password . "<br>";
} else {
    echo "Không có dữ liệu.";
}

$conn->close();
?>
