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

<div background="gold">
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

<div align="center"><p>Only Students Who have Registered in this site can renew their password/username</p></div>


<hr width="20" align="center"color="#CC6600" />
<hr width="40" align="center"color="#CC6600" />
<hr width="60" align="center"color="#CC6600" />


</head>
<body>
<table align="center"l width="480">
<tr><td>
<fieldset align="center"  bgcolor="brown" length="">
<legend  class="label"><b>Enter your Reg. Number</b></legend>
<p>&nbsp;</p>
<form id="loginForm" name="loginForm" method="post" action="emailscript.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><b>Reg Number:</b></td>
      <td width="188"><input name="regno" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
	
	 <tr>
      <td colspan="2"><hr width="300" align="center"color="#CC6600"></td>
    </tr
	 <tr>
      <td colspan="2">You have to enter your Reg. Number to proceed</td>
    </tr>
	<tr>
      <td colspan="2"><hr width="300" align="center"color="#CC6600"></td>
    </tr>
	 
  </table>
</form>
<p>&nbsp;</p>
</td></tr>
 </table>
</body>
</html>


  
 
