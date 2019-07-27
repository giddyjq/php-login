<?php

	//Commence session

	session_start();
 

	//Database connection details config

	require_once('connection.php');

 

	//Array for validation errors

	$errmsg_arr = array();

 

	//Validation error flag

	$errflag = false;

 

	//Lil bit of security on the SQL injection

	function clean($str) {

		echo "str: ".$str;

		$str = @trim($str);

		if(get_magic_quotes_gpc()) {

			$str = stripslashes($str);

		}

		return mysqli_real_escape_string($str);

	}

 


	$username = $_POST['username'];

	$password = $_POST['password'];

 

	//Input validations

	if($username == '') {

		$errmsg_arr[] = 'Please enter your username.';

		$errflag = true;

	}

	if($password == '') {

		$errmsg_arr[] = 'Please enter your password.';

		$errflag = true;

	}

 

	//Redirect if there's any input validations present.

	if($errflag) {

		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

		session_write_close();

		header("location: login.php");

		exit();

	}

 

	//Creating the query

	$qry="SELECT * FROM login WHERE username='$username' AND password='$password'";

	$result=mysqli_query($bd, $qry);

 

	//Checking whether it's been a success...

	if($result) {

		if(mysqli_num_rows($result) > 0) {

			//We have SUCCESS!

			session_regenerate_id();

			$login = mysqli_fetch_assoc($result);

			$_SESSION['SESS_MEMBER_ID'] = $login['mem_id'];

			$_SESSION['SESS_FIRST_NAME'] = $login['username'];

			$_SESSION['SESS_LAST_NAME'] = $login['password'];

			session_write_close();

			header("location: index.php");

			exit();

		}else {

			//Login failed

			$errmsg_arr[] = 'An error has occurred. Unable to sign in.';

			$errflag = true;

			if($errflag) {

				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

				session_write_close();

				header("location: login.php");

				exit();

			}

		}

	}else {

		die("An error has occurred. The query has failed. Are you sure everything is configured properly?");

	}

?>
