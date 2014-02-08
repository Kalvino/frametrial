<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>student register page</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
<style type="text/css">
fieldset.explicit-width{
    width: 1%; /* Will expand to fit content */
}
fieldset.inline-block{
    display: inline-block;
}
ul
{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
border-left-color:#006666;
}
li
{
float:left;
}
a:link,a:visited
{
display:block;
width:120px;
font-weight:bold;
color:#FFFFFF;
background-color:#6666CC;
text-align:center;
padding:4px;
text-decoration:none;
text-transform:uppercase;
}
a:hover,a:active
{
background-color:#000080;
}
#nav {width:700px; margin:20;}

html { 
	background: url(background.png) no-repeat center fixed; 
	-webkit-background-size: 100% 1000px;
	-moz-background-size: 100% 1000px;
	-o-background-size: 100% 1000px;
	background-size: 100% 1000px;
	}

</style>
</head>

<body  text="#ffffff" align="center">

<?php
	if($errflag){
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>', '<br />'; 
		}
		echo '</ul>';
		}
		
	
?>

<div align="center">
<img align="top" src="header7.png" height="100" width="700" />
</div>

<div align="center">
<p>This is Kimathi University System. </p>
</div>

<div name="logout" align="right">
<input type="button" name="logout" value="Logout" onClick="location.href='logoutall.php'">
</div>

<hr width="60" align="center"color="#CC6600" />
<hr width="40" align="center"color="#CC6600" />
<hr width="20" align="center"color="#CC6600" />

<div align="center"><p>Only Registered Students of Kimathi can Register To use this System</p></div>


<hr width="20" align="center"color="#CC6600" />
<hr width="40" align="center"color="#CC6600" />
<hr width="60" align="center"color="#CC6600" />


<table bgcolor="blue" align="center">
<tr><td class="notify">Register</td></tr>
</table>
<p>&nbsp;</p>

<table align="center"l width="700">
<tr><td>

<form id="loginForm" name="loginForm" method="post" action="studentregister-exec.php">
<fieldset align="center"  bgcolor="brown" >
<legend class="label" ><b>Register Here To Use This System</b></legend>

  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th>First Name:</th>
      <td><input name="fname" type="text" class="textfield" id="fname" /></td>
    </tr>
    <tr>
      <th>Last Name:</th>
      <td><input name="lname" type="text" class="textfield" id="lname" /></td>
    </tr>
	<tr>
      <th>Reg. Number:</th>
      <td><input name="regno" type="text" class="textfield" id="regno" /></td>
    </tr>
    <tr>
      <th>Username:</th>
      <td ><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
	
	<tr>
      <th width="124">Email Address:</th>
      <td width="168"><input name="email" type="text" class="textfield" id="email" /></td>
    </tr>
	
    <tr>
      <th>Password:</th>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <th>Confirm Password: </th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
  </table>
  </fieldset>
</form>
</td></tr>
 </table>
</body>
</html>
