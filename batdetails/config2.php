<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$mysql_hostname = "localhost";
$mysql_user = "user";
$mysql_password = "";
$mysql_database = "test2";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>