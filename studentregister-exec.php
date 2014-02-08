<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$regno = clean($_POST['regno']);
	$login = clean($_POST['login']);
	$email = clean($_POST['email']);
	$password = clean($_POST['password']);
	$cpassword = clean($_POST['cpassword']);
	
	$email_address = $email;
if (filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
  // The email address is valid
} else {

$errmsg_arr[] = 'The email format entered is invalid!';
		$errflag = true;
  // The email address is not valid
}
	
	//Input Validations
	if($fname == '') {
		$errmsg_arr[] = 'First name missing';
		$errflag = true;
	}
	if($lname == '') {
		$errmsg_arr[] = 'Last name missing';
		$errflag = true;
	}
	if($regno == '') {
		$errmsg_arr[] = 'Registration number missing';
		$errflag = true;
	}
	if($login == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	
	if($login == '') {
		$errmsg_arr[] = 'Email address missing';
		$errflag = true;
	}
	
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
	}
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = '<b>Passwords do not match!!!</b>';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	if($login != '') {
		$qry = "SELECT * FROM members WHERE login='$login'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'Username ID already in use, choose another username';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	if($login != '') {
		$qryy = "SELECT * FROM members WHERE regno='$regno'";
		$ressult = mysql_query($qryy);
		if($ressult) {
			if(mysql_num_rows($ressult) > 0) {
				$errmsg_arr[] = 'You already have an account on this site!!!';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	if($regno != '') {
		$query = "SELECT * FROM studentfeerecord WHERE regno='$regno'";
		$resultt = mysql_query($query);
		if($resultt) {
			if(mysql_num_rows($resultt) <1) {
				header("location: studentregfail.php");
				exit();			}
					}
		
	}
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: studentregister.php");
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO  members(fname, lname,regno, login, email, passwd) VALUES('$fname','$lname','$regno','$login','$email','".md5($_POST['password'])."')";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: studentregistration-success.php");
		exit();
	}else {
		die("Query failed");
	}
?>