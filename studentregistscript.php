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
	$regno= clean($_POST['regno']);
	
	
	//Input Validations
	if($regno == '') {
		$errmsg_arr[] = 'Please Enter Your Registration Number!';
		$errflag = true;
	}
	//If there are wrong input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: studentexam.php");
		exit();
	}
	
	if($regno != '') 
	{
	$qry = "SELECT * FROM studentfeerecord WHERE regno='$regno' AND amountpaid >=0.6*fee";
		$result = mysql_query($qry);
		
		//Check if the reg no entered exists
		if(mysql_num_rows($result)>0)
		{
	
		  if(mysql_num_rows($result) == 1)
		  { 
		
		       while($line=mysql_fetch_array($result ,MYSQL_ASSOC))
			   {
		      
			         echo $line['fname']; "<br>\n";
			  
			         echo $line['regno'];
			
			         echo $line['course'];
			  
			         echo $line['yearofstudy'];
			 
			  }
		    }
			else {
			header("location: databaseredundancy.php");
			exit();
			}
		
			  
			  
		}
		else{
			header("location: regnotexist.php");
			exit();
			}
	}
		
	else 
		die("Query failed");
		
		?>