<?php

//Start session
	session_start();
	
	$member_id=$_SESSION['SESS_MEMBER_ID'];
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: access-denied.php");
		exit();
	}
	
	error_reporting(E_ALL ^ E_NOTICE);
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
	if (isset($_POST['submit']))

    {
	//Sanitize the POST values
	

	$oldpasswd =md5($_POST['oldpasswd']);
	$newpasswd=md5($_POST['newpasswd']);
	$cfmpasswd=md5($_POST['cfmpasswd']);
	
	if($oldpasswd == '') {
		$errmsg_arr[] = 'Old password missing';
		$errflag = true;
	}
	if($newpasswd == '') {
		$errmsg_arr[] = 'New password missing';
		$errflag = true;
	}
	if($cfmpasswd == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
	}
	if( strcmp($newpasswd , $cfmpasswd) != 0 ) {
		$errmsg_arr[] = '<b>New Passwords do not Match!</b>';
		$errflag = true;
	}
	
	$queryget=mysql_query("SELECT  passwd  FROM administration WHERE admin_id='$member_id' ") or die("query did not work");
	
	$oldpasswdb=$queryget;
 // Check if Old password is the correct

        if($oldpasswd!=$oldpasswdb) {
		$errmsg_arr[] = '<b>Old password is wrong!</b>';
		$errflag = true; 
		}
		       
      if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location:adminpwchange.php");
		exit();
	}
      else{  // If everything is ok, use auth class to modify the record
	  
	    $query= mysql_query("UPDATE administration SET passwd='$newpasswd' WHERE login='$member_id'");
		

       if($query) {
		header("location: adminpwcngesuccess.php");
		exit();
	}
	
	else {
		die("Query failed");
	}
	} }
			

?>