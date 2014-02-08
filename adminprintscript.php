<html>
<head>
<style type="text/css">

fieldset  {
  width: 700px;
  align:center;
    border-top: 10px solid #99CCFF;
	border-right: 320px solid #99CCFF;
	border-bottom: 10px solid #99CCFF  ;
	border-left: 310px solid #99CCFF;
}

</style>
</head>
<body>
<body>
<?php
$username="root";
$password="";
$dbhost="localhost";
$database="student";
mysql_connect($dbhost,$username,$password);
@mysql_select_db($database)
 or die( "Unable to select database");
 
 function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$course=$_POST['course'];
	$yearofstudy=$_POST['yearofstudy'];
	$semester=$_POST['semester'];
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	
	//Input Validations
	if($course == '') {
		$errmsg_arr[] = 'Please Choose Course!';
		$errflag = true;
	}
	if($yearofstudy== '') {
		$errmsg_arr[] = 'Please Choose Year of Study!';
		$errflag = true;
	}
	if($semester == '') {
		$errmsg_arr[] = 'Please Choose Semester of Study!';
		$errflag = true;
	}
	//If there are wrong input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: adminprintlist.php");
		exit();
	}
	
	if($course != '' && $yearofstudy!='' && $semester!='')
	{        
	$qry = "SELECT * FROM studentfeerecord WHERE  course='$course' AND yearofstudy='$yearofstudy' AND semester='$semester'  ";
		$result = mysql_query($qry);
		
		
		
$num=mysql_num_rows($result);

}
 ?>

 <fieldset>
 
 <div align="center">

<table border="1" cellspacing="0" cellpadding="2" width="700">
<tr>
  <td><font face="Arial, Helvetica, sans-serif">First name</font></td>
  <td><font face="Arial, Helvetica, sans-serif">Second name</font></td>
  <td><font face="Arial, Helvetica, sans-serif">Registration no.</font></td>
  <td><font face="Arial, Helvetica, sans-serif">Random no.</font></td>
  <td><font face="Arial, Helvetica, sans-serif">Print-times</font></td>
 </tr>

<?php
$i=0;
while ($i < $num) {
 
   $f1=mysql_result($result,$i,"fname");
   $f2=mysql_result($result,$i,"sname");
   $f3=mysql_result($result,$i,"randno");
   $f4=mysql_result($result,$i,"regno");
   $f5=mysql_result($result,$i,"printimes");
   
?>

<tr>
  <td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
  <td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
  <td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
  <td><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
  <td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
</tr>
<?php
$i++;
}
?>

</table>
</div>
	</fieldset>
	
	<div  align="center">
		<input type="button" 
  onClick="window.print()" 
  value="Print List"/>
		
		</div>
		<div align="left">
		<input type="button" name="admin" value="Go Back" onClick="location.href='adminprintlist.php'">
		</div>
</body>
</html>