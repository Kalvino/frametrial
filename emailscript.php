<?php 

    require_once('config.php');
	
	error_reporting(E_ALL ^ E_NOTICE);
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
		header("location: studentforgotpwd.php");
		exit();
	}
	
	if($regno != '') 
	{
	$qry = "SELECT * FROM members WHERE regno='$regno' ";
		$result = mysql_query($qry);
		
		//Check if the reg no entered exists
		if(mysql_num_rows($result)>0)
		{
	
		  if(mysql_num_rows($result) == 1)
		  { 
		      $queryy="SELECT * FROM members WHERE regno='$regno' ";
			  $resultt=mysql_query($queryy);
			  if(mysql_num_rows($resultt) == 1){
		
		            while($line=mysql_fetch_array($resultt ,MYSQL_ASSOC))
			       {
		      
			         $f1=$line['login']; 
					 $f2=$line['passwd']; 
					 $f3=$line['email'];
			 
			        }
		        }
			   
			}
		    
		}
		else{
			$errmsg_arr[] = 'Registration number duplication! Please contact administration to clear this error!';
		$errflag = true;
			}
	}
	


/*email subject and  and address*/
$emailSubject='Your Password and Username Details';
$emailAddress=$f3;
$kimathiemail='calvodira@gmail.com';

/*gather data members*/

$body=<<<EOD
Usesrname: $f1</br>
Password: $f2<br />
EOD;

    $headers="From: $kimathiemail\r\n";
    $headers .="Content-type: text/html\r\n";
	$success= mail($emailAddress, $emailSubject,$body,$headers);
	
	$theResult=<<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Successful</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include('studentheaderinclude.php');
?>
<h1  class="notify">Process Successfull !!!</h1>
<p align="center">Your username and password details have been sent to the email address you registered with in this site</p>
<p align="center">Check your email and use the details to help you change your login password</p>
<p align="center">Please <a href="studentpwdfologin.php" >Click here</a> to use the details to change your password.</p>
</body>
</html>
EOD;

if($success){
echo "$theResult";
}
else {
		die("Unable to connect to the internet right now, please make sure you are connected to the internet and try again ");
	}

?>