<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TestKit test</title>

    
	
	
  </head>
 <body>
  	<h1>Temperature Data</h1>
	
	<?php
include('connection.php');	
$vSql ="CREATE TABLE Temperature
		(
		Value_T int,
		kit_ID int,
		ID_T int NOT NULL AUTO_INCREMENT,
		heure int,
		Minute int,
		Second int
		);";
$vQuery=mysqli_query($vConn,$vSql);
$vSql ="INSERT INTO `testkit`.`temperature` (`Value_T`, `kit_ID`, `ID_T`, `heure`, `minute`, `second`) VALUES ('2', '1', NULL, '3', '4', '5');";
$vQuery=mysqli_query($vConn,$vSql);
while ($vResult = mysqli_fetch_array($vQuery)) 
			{
echo "<td>$vResult[ID_T]</td>";
echo "<td>$vResult[Value_T]</td>";
			}
	


?>
 </body>
</html>