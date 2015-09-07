<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	//unset($_SESSION['SESS_NET_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head><title> UKONNEKT Login </title></head>
<body style="background-color: black;" style="background-image: http://omega.uta.edu/~tmm4546/UkonnekLogo.png;">

<p style="background-color: #f58025;">Most of our tasks in today�s life are completed using the smart phone without 
the need of computer. The main aim of this application is to help the Student as well as the Professor to access 
the resources of the University directly from their smart phones. Researching more on it, we came to know that there 
were similar apps in the Android market place, but were not useful enough, and missed many of the important features 
that is required to have in a course management system. The solution is UKONNEKT</p>

<img src="http://omega.uta.edu/~tmm4546/UkonnekLogo.png" align="left">

<form name="loginform" action="login_exec.php" method="post" style="background-color: #f58025;">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
  </tr>
  <tr>
    <td width="116"><div align="left" style="background-color: #f58025;">Username</div></td>
    <td width="177"><input name="UserName" type="text" /></td>
  </tr>
  <tr>
    <td><div align="left" style="background-color: #f58025;">Password</div></td>
    <td><input name="Password" type="password" /></td>
  </tr>
  <tr>
    <td><div align="left"></div></td>
    <td><input name="" type="submit" value="login" /></td>
  </tr>
</table>
</form>
</body>
</html>