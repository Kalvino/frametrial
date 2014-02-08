<html>
<head>

<style type="text/css">

fieldset  {
  width: 700px;
  align:center;
    border-top: 10px solid #99CCFF;
	border-right: 300px solid #99CCFF;
	border-bottom: 10px solid #99CCFF  ;
	border-left: 300px solid #99CCFF;
}

</style>
</head>
<body>
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

	
			require_once( 'fpdf.php');
$fpdf = new FPDF();
$fpdf->AddPage();
$fpdf->Image('gwangi.jpg',90,2);
$fpdf->Ln(15);
$fpdf->SetFont( 'Arial', 'B',8 );
$fpdf->SetTextColor( 0 );
$fpdf->Cell( 0,5, "YOUR FEE RECORD IS:",'0','0','C' );
$fpdf->Ln();
$fpdf->Ln();
$fpdf->Cell(7,5,"");
$fpdf->Cell(65,5,"FIRST-NAME");
$fpdf->Cell(15,5,"SECOND NAME");
$fpdf->Cell(35,5,"ADDRESS");
$fpdf->Cell(10,5,"BEDS");
$fpdf->Cell(35,5,"BRANCH");
$fpdf->Ln();
$fpdf->Cell(430,3,"-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$fpdf->Ln();
	
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
	$qry = "SELECT * FROM studentfeerecord WHERE regno='$regno' ";
		$result = mysql_query($qry);
        $numrows=mysql_num_rows($result);
		
		
		//Check if the reg no entered exists
		if($numrows>0)
		{

		  if($numrows== 1)
		  {

		       while($row=mysql_fetch_array($result ,MYSQL_ASSOC))
			   {

			        
					  $f1= $fpdf->Cell(7,5,"{$row['fname']}");

					  $f2= $fpdf->Cell(7,5,"{$row['sname']}");

					  $f3= $fpdf->Cell(7,5,"{$row['regno']}");

					  $f4= $fpdf->Cell(7,5,"{$row['course']}");

					  $f5= $fpdf->Cell(7,5,"{$row['fee']}");

					  $f1= $fpdf->Cell(7,5,"{$row['amountpaid']}");

					 $f7=$f5-$f6;
					 if($f7>0){
					 $f8=$f5-$f6;
					 $f9="Under-payment!";
					 }
					 if($f7<0){
					 $f8=$f6-$f5;
					 $f9="Over-payment!";
					 }
					 if($f7==0){
					 $f8=0;
					 $f9="Exact-Payment!";
					 }
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
		

 //$trimmed = trim($var);
 //if ($var == "")
  /*{
  //header('location:viewdutyrota.php');
  //exit;
  }
  if (!isset($var))
  {
  echo "<p>We dont seem to have a search parameter!</p>";
  exit;
  }*/
	

		?>
		<fieldset>
		 <div align="center">
		<table border="1" cellspacing="2" cellpadding="2">
		<tr>
		   <td colspan="2" ><img  src="header.png" height="70" width="500" /></td>
	   </tr>
		<tr>
		   <th>Name:</th>
           <td><font face="Arial, Helvetica, sans-serif"><?php echo $f1."   ".$f2; ?></font></td>
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
           <th>Fee:</th>
           <td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
        </tr>
		<tr>
           <th>Amount Paid:</th>
           <td><font face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font></td>
        </tr
		<tr>
           <th>Balance:</th>
           <td><font face="Arial, Helvetica, sans-serif"><?php echo $f8." ~> ".$f9; ?></font></td>
        </tr>
		</table>
		</div>
		</fieldset>
		<div align="center">
		<input type="button" name="student" value="Go Back" onClick="location.href='studentfeedisplay.php'">
		</div>
		<?php
		$fpdf->Output();
		?>
		
</body>
</html>