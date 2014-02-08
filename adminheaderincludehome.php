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
width:166px;
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

<div align="center">
<img  id="header"align="top" src="header7.png" height="80" width="700" />
</div>

<div align="center">
<p>&nbsp;</p>
<p>Kimathi University System(admin area)</p>
</div>	 

<hr width="60" align="center"color="#CC6600" />

<div name="links" align="center">

<ul id="nav">
<li><a href="adminhome.php"  target="_top">Home</a></li>
<li><a href="adminoticeboard.php" target="_top">notice-board</a></li>
<li><a href="adminregister.php"  target="_top">register</a></li>
<li><a href="adminprintlist.php" target="_top">print list</a></li>
</ul>

</div>
<hr width="60" align="center"color="#CC6600" />

<table  align="center"width="600" border="0">
<tr>
<td >&nbsp;</td>
<td  bgcolor="blue" align="center" width="100" class="notify">Home</td>
<td >&nbsp;</td></tr>

<tr>
<td  align="center" bgcolor="#666666" colspan="3"><font color="white">Kimathi University System, Administration Area.</font></td>
</tr>
</table>

<table align="left">
<tr>
 <td align="center"> <div class="button"><a href="adminpwchange.php"  class="menubutton" target="_top" title="Change password">Change password</a></div></td>
</tr>
</table>

<table  align="right">
<tr>
<td align="center"> <div class="button"><a href="logoutall.php"  class="menubutton" target="_top"  title="logout">Logout</a></div></td>
</tr>
</table>

 
  <p>&nbsp;</p><h2>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?>!!</h2>


</body>
</html>
