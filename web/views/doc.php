<?php

$servername = "ec2-54-195-248-0.eu-west-1.compute.amazonaws.com";
$username = "ghqgvyvbsjsghj";
$password = "c69adb2fba0395decb22bb9fa446e4d15c70be022b51d3ef0cc034de471b056a";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


?>


