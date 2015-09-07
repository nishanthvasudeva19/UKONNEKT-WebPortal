<?php
$mysql_hostname = "omega.uta.edu";
$mysql_user = "sxs9203";
$mysql_password = "md79fY75";
$mysql_database = "sxs9203";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to the server");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>