<?php

	//Starting the session

	session_start();

	//Check whether  "SESS_MEMBER_ID" is there or not

	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {

		header("location: login.php");

		exit();

	}

?>

