<html>
<head>
<style type="text/css">

fieldset  {
    width: 700px;
    align:center;
    }

</style>
</head>
<body>
<?php
	//Start session
	
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
	
	if($regno != '' ) 
	{
	$qry = "SELECT * FROM studentfeerecord WHERE regno='$regno' ";
		$result = mysql_query($qry);
		
		//Check if the reg no entered exists
		if(mysql_num_rows($result)>0)
		{
	
		  if(mysql_num_rows($result) == 1)
		  { 
		      $queryy="SELECT * FROM studentfeerecord WHERE regno='$regno' AND amountpaid >=fee";
			  $resultt=mysql_query($queryy);
			  if(mysql_num_rows($resultt) == 1){
		
		            while($line=mysql_fetch_array($resultt ,MYSQL_ASSOC))
			       {
		      
			         $f1=$line['fname']; 
					 
					 $f2=$line['sname']; 
			  
			         $f3=$line['regno'];
			
			         $f4=$line['course'];
			  
			         $f5=$line['yearofstudy'];
					 
					 $f6=$line['randno'];
					 
					 $f7=$line['printimes'];
					 
					 $f8=$f7+1;
					 
					 $query= mysql_query("UPDATE studentfeerecord SET printimes='$f8' WHERE regno='$regno'");
			 
			        }
		        }
			   else {
			           header("location: feenotcleared.php");
			            exit();
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
	
		
?>
		
		<table align="center">
		<tr><td>
		<fieldset>
		
		
		<div align="center">
		
		<table border="1" cellspacing="0" cellpadding="2" align="center">
		<tr>
		   <td colspan="3" ><img  src="cardheader.png" height="100" width="500" /></td>
	   </tr>
		<tr>
		   <th>Name:</th>
           <td><font face="Arial, Helvetica, sans-serif"><?php echo $f1." " .$f2; ?></font></td>
	   </tr>
	   <tr>
	       <th>Reg No:</th>
           <td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
		</tr> 
		<tr>
           <th>Course:</th>		
           <td><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
        </tr>
		<tr>
           <th>Year of Study:</th>		
           <td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
        </tr>
		<tr>
           <th>Random Number:</th>		
           <td><font face="Arial, Helvetica, sans-serif"><h2><?php echo $f6; ?></h2></font></td>
        </tr>
		</table>
		<p>&nbsp;</p>
		<p align="center"><b><u><h3>Read the following conditions </h3></u></b></p>
		<p><b><i>This card is issued under the following conditions:</i></b></p>
		<table align="center">
		<tr><td align="left"><p>1. This card shall be valid for only the examination period indicated.</p></td></tr>
		<tr><td align="left"><p>2. This card shall be produced for identification during the examination <br />of all the units he candidate will sitin the specified semester.</p></td></tr>
		<tr><td align="left"><p>3.This card shall be obtained from the Dean of School/Directorof Institute<br /> in which the candidate is registered at times to be specified by the Registrar <br />or dowloaded from student area from exam-card site.</p></td></tr>
		<tr><td align="left"><p>4. In case of loss, this card can be easily downloaded form the sitein three above.</p></td></tr>
		<tr><td align="left"><p>5. No writings or erasures shall bemade on this card.</p></td></tr>
		<tr><td align="left"><p>6. It is an offence to present an invalid/forged/stolen examination card.</p></td></tr>
		</table>
		<p>&nbsp;</p>
		<p>REGISTRAR(ACADEMIC AFFAIRS)</p>
		</div>
		</fieldset>
		
		</td></tr>
		</table>
	
		</body>
		</html>