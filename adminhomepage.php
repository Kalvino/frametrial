
<?php
	require_once('auth.php');
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
<style type="text/css">
div.button {
	color: black ;
	
	border-top: 3px solid #99CCFF;
	border-right: 3px solid #99CCFF;
	border-bottom: 3px solid #99CCFF  ;
	border-left: 3px solid #99CCFF;
	padding: 2;
	margin: 0 ;
	width:172px;
	}
	#content {
  margin-left:  65%;
}
#navbar {
  float: left;
  width: 35%;
}
#container {
  width: 900px ;
  margin-left: auto ;
  margin-right: auto ;
  border-right: 3px solid #ccffff;
  border-bottom: 3px solid #99CCFF  ;
}
</style>
</head>
<body>
<?php
include('adminheaderinclude.php');
?>

<table bgcolor="blue" align="center">
<tr><td>Home</td></tr>
</table>

<h2>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?>!!</h2>


<div id="container">
<div id="navbar">

<div class="button"><a href="adminoticeboard.html" accesskey="2" class="menubutton" target="_top" title="notice-board information">notice-board info</a></div>
<div class="button"><a href="adminregistration.html" accesskey="3" class="menubutton" target="_top" title="administration registration information">registration info</a></div>
<div class="button"><a href="printlist.html" accesskey="4" class="menubutton" target="_top" title="print-list information">Print-list info</a></div>

 <p>&nbsp;</p>
	  <div name="logout" align="left">
      <input type="button" name="cpassword" value="change password" onClick="location.href='adminpasswordchange.php'" />
    </div>

</div>

     

<div id="content">

</div>
</div>

</body>
</html>
