<?php
	require_once('authentication.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>
 
<body style="background-color: black;">
<div>
<form name="loginform" action="PostAnnouncements.php" method="post">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td width="116"><div align="left" style="background-color: #f58025;">Post Announcements</div></td>
    <td width="177"><input name="Announcements" type="submit" value="PostAnnouncements" /></td>
  </tr>
</table>
</form>
</div>

<div>
<form name="loginform" action="PostGrades.php" method="post">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td width="116"><div align="left" style="background-color: #f58025;">Post Grades</div></td>
    <td width="177"><input name="Events" type="submit" value="PostGrades"/></td>
  </tr>
</table>
</form>
</div>

<div style="background-color: #f58025;">
<form name="logoutform" action="index.php" method="post">
<p>LOGOUT</p>
<input name="logout" type="submit" value="Logout"/>
</div>

</body>
</html>