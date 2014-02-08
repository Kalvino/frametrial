<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>administration login page</title>
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

</style>
</head>

<body bgcolor="#99CCFF" text="#ffffff" align="center">

<div background="gold">
<div align="center">
<img align="top" src="header1.png" height="100" width="700" />
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

<div align="center"><p>Only Registered Students of Kimathi can Log-in/Register</p></div>


<hr width="20" align="center"color="#CC6600" />
<hr width="40" align="center"color="#CC6600" />
<hr width="60" align="center"color="#CC6600" />


</head>
<body>
<table align="center"l width="700">
<tr><td>
<fieldset align="center"  bgcolor="brown" length="">
<legend  class="label"><b>Use the Details from Your email to Login Here</b></legend>
<p>&nbsp;</p>
<form  name="loginForm" method="post" action="studentpwfologin-exec.php">
  <table width="400" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><b>Username:</b></td>
      <td width="188"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <td><b>Password (<i>paste</i>):</b></td>
      <td><input name="password" type="password" class="textfield" /></td>
    </tr>
	
	 <tr>
      <td colspan="2"><hr width="450" align="center"color="#CC6600"></td>
    </tr>
	<tr>
      <td colspan="2"><i>Copy and Paste the username and password strings from your email in the username/ password textfields above!</i></td>
    </tr>
	<tr>
      <td colspan="2"><hr width="400" align="center"color="#CC6600"></td>
    </tr>
	<tr>
      <td><b>New Password:</b></td>
      <td><input name="nwpasswd" type="password" class="textfield" /></td>
    </tr>
	<tr>
      <td><b>Confirm Password:</b></td>
      <td><input name="cnfpasswd" type="password" class="textfield" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Login" /></td>
    </tr>
	
	 
  </table>
</form>
<p>&nbsp;</p>
</td></tr>
 </table>
</body>
</html>


  
 
