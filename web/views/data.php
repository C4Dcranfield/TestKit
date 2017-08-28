{% extends "layout.html" %}

{% block content %}
<p>Coucou</p>


<a>To connect the database click <a href="http://localhost:8080/">here</a></a></br>

<input type="button" value="Start Receiving Data" onclick="openWin();myVar = setInterval(openWin, 29000)" />
<?php
echo "Cfhgfnvbjh,nsfully";
 
?>
<h1>Temperature Data</h1>
<div class="container">
  <div class="alert alert-info text-center" role="alert">
<?php
<<<<<<< HEAD
echo "Cfhgfnvbjh,nsfully";
require("doc.php");
=======

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


>>>>>>> parent of cf9173a... c
?>
</div>
</div>
{% endblock %}

