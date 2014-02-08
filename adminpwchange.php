<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>administration password change</title>
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

<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>', '<br />'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
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

<hr width="20" align="center"color="#CC6600" />
<hr width="40" align="center"color="#CC6600" />
<hr width="60" align="center"color="#CC6600" />

<div align="center"><p>Only Registered Administrators can Change their Passwords</p></div>

<hr width="60" align="center"color="#CC6600" />
<hr width="40" align="center"color="#CC6600" />
<hr width="20" align="center"color="#CC6600" />

<table align="center"l width="480">
<tr><td>
<fieldset align="center"  bgcolor="brown" length="">
<legend ><b>Enter:</b></legend>
<p>&nbsp;</p>

<form id="admpasswdchnge" name="admpasswdchnge" action='adminpwchngescript.php' method='POST'>

  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th>Old Password </th>
      <td><input type="password" id='oldpasswd' name='oldpasswd' class="textfield" /></td>
    </tr>
    <tr>
      <th>New Password</th>
      <td><input type='password' id='newpasswd' name='newpasswd' class="textfield" /></td>
    </tr>
    <tr>
      <th width="124">Confirm Password</th>
      <td><input type='password' id='cfmpasswd'  name='cfmpasswd' class="textfield"  /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type='submit' name='submit' value='Change Password' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>

</fieldset>

 </table>

</body>
</html>
