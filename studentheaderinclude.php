
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

html { 
	background: url(background1.png) no-repeat center fixed; 
	-webkit-background-size: 100% 1000px;
	-moz-background-size: 100% 1000px;
	-o-background-size: 100% 1000px;
	background-size: 100% 1000px;
	}

</style>
</head>
<body  text="#ffffff" align="center">

<div align="center">
<img align="top" src="header7.png" height="100" width="700" />
</div>

<div align="center">
<p>&nbsp;</p>
<p>Kimathi University System(student area)</p>

<div name="logout" align="right">
<input type="button" name="logout" value="Logout" onClick="location.href='logoutall.php'">
</div>

</div>

<hr width="60" align="center"color="#CC6600" />
<hr width="40" align="center"color="#CC6600" />
<hr width="20" align="center"color="#CC6600" />

<div name="links" align="center">

<ul id="nav">
<li><a href="studenthome.php">Home</a></li>
<li><a href="studentnoticeboard.php">notice-board</a></li>
<li><a href="studentfee.php">fee-record</a></li>
<li><a href="studentexam.php">exam-card</a></li>

</ul>

</div>
<hr width="20" align="center"color="#CC6600" />
<hr width="40" align="center"color="#CC6600" />
<hr width="60" align="center"color="#CC6600" />

</body>
</html>
