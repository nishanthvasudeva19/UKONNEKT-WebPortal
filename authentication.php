<?php
	//Start session
	session_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(($_SESSION['SESS_FIRST_NAME']) == '' || ($_SESSION['SESS_LAST_NAME'] == '')) {
		header("location: index.php");
		exit();
	}
?>