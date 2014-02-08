<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form</title>
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

<p>&nbsp;</p>

<div align="center">
<img align="top" src="header7.png" height="120" width="700" />
</div>

<div align="center">

<p>&nbsp;</p>


<p>This is Kimathi University System. </p>


</div>

<hr width="1" align="center"color="#CC6600" />
<hr width="8" align="center"color="#CC6600" />
<hr width="24" align="center"color="#CC6600" />
<hr width="40" align="center"color="#CC6600" />

<p align="center" class="label">Click Relevant button to login</p>

<hr width="10" align="center"color="#CC6600" />
<hr width="10" align="center"color="#CC6600" />
<hr width="10" align="center"color="#CC6600" />
<table align="center"l width="480">
<tr><td>

<fieldset align="center"  bgcolor="brown" length="">
<legend class="label"><b>Login Here</b></legend>

  <table width="400" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th>Administration Area:</th>
      <td><input type="button" name="admin" value="ADMINISTRATION" onClick="location.href='adminlogin.php'"></td>
    </tr>
	<tr>
      <th>Student Area:</th>
      <td><input type="button" name="student" value="STUDENT" onClick="location.href='studentlogin.php'"></td>
    </tr>

  </table>
  </fieldset>
</form>
</table>
</td>
</tr>
</table>
</body>
</html>