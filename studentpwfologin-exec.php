<?php	
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
	$login = clean($_POST['login']);
	$password = clean($_POST['password']);
	$nwpasswd= md5($_POST['nwpasswd']);
	$cnfpasswd = md5($_POST['cnfpasswd']);
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Username missing!';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing!';
		$errflag = true;
	}
	
	if($nwpasswd == '') {
		$errmsg_arr[] = 'New Password Missing!';
		$errflag = true;
	}
	if($cnfpasswd == '') {
		$errmsg_arr[] = 'You failed to confirm New Password!';
		$errflag = true;
	}
	if( strcmp($nwpasswd , $cnfpasswd) != 0 ) {
		$errmsg_arr[] = '<b>New Passwords do not Match!</b>';
		$errflag = true;
	}
	
	//If there are wrong input validations, redirect back to the home-login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: studentpwdfologin.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM members WHERE login='$login' AND passwd='$password' ";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			 $query= mysql_query("UPDATE members SET passwd='$nwpasswd' WHERE login='$login'");
			header("location: studentpwfochangesuccess.php");
			exit();
		}else {
			//Login failed
			header("location: studentpwfologin-failed.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>