<?php
/*$vHost="ec2-54-195-248-0.eu-west-1.compute.amazonaws.com";
// NOM DE LA BASE DE DONNEES A MODIFIER AVEC LE VOTRE
$vDbname="db2f0ivcdh2a5s";
$vUser="ghqgvyvbsjsghj";
$vPassword="c69adb2fba0395decb22bb9fa446e4d15c70be022b51d3ef0cc034de471b056a";
$vConn = mysqli_connect($vHost,$vUser,$vPassword,$vDbname);
mysqli_query($vConn, "SET NAMES UTF8");*/
$dsn = "pgsql:"
    . "host=ec2-54-195-248-0.eu-west-1.compute.amazonaws.com;"
    . "dbname=db2f0ivcdh2a5s;"
    . "user=ghqgvyvbsjsghj;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=c69adb2fba0395decb22bb9fa446e4d15c70be022b51d3ef0cc034de471b056a";

$db = new PDO($dsn);
?>