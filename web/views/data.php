{% extends "layout.html" %}

{% block content %}
<p>Coucou</p>


<a>To connect the database click <a href="http://localhost:8080/">here</a></a></br>

<input type="button" value="Start Receiving Data" onclick="openWin();myVar = setInterval(openWin, 29000)" />

<h1>Temperature Data</h1>
<div class="container">
  <div class="alert alert-info text-center" role="alert">
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

/*include('connection.php');

$query = "DROP TABLE Temperature";
$result = $db->query($query);

$query = "CREATE TABLE Temperature
		(
		Value_T int,
		kit_ID int,
		);";
$result = $db->query($query);

$query ="INSERT INTO `db2f0ivcdh2a5s`.`temperature` (`Value_T`, `kit_ID`) VALUES ('25', '1');";
$result = $db->query($query);

$query = "SELECT Value_T, kit_ID FROM temperature;";
$result = $db->query($query);

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row["Value_T"] . "</td>";
    echo "<td>" . $row["kit_ID"] . "</td>";	
    echo "</tr>";
}
$result->closeCursor();
	
$vSql ="DROP TABLE Temperature";
$vQuery=mysqli_query($vConn,$vSql);

$vSql ="CREATE TABLE Temperature
		(
		Value_T int,
		kit_ID int,
		);";
$vQuery=mysqli_query($vConn,$vSql);

$vSq2 ="INSERT INTO `db2f0ivcdh2a5s`.`temperature` (`Value_T`, `kit_ID`) VALUES ('25', '1');";
$vQuery2=mysqli_query($vConn,$vSq2);

$vSq3="SELECT Value_T, kit_ID FROM temperature;";
$vQuery3=mysqli_query($vConn,$vSq3);

while ($vResult = mysqli_fetch_array($vQuery3)) 
			{
echo "<td>$vResult[ID_T]</td>";
echo "<td>$vResult[Value_T]</td>";
			};

*/

?>
</div>
</div>
{% endblock %}

