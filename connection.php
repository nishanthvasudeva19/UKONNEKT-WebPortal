<?php
$mysql_hostname = "omega.uta.edu";
$mysql_user = "***";
$mysql_password = "***";
$mysql_database = "***";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to the server");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
