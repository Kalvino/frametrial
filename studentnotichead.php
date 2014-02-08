

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
	background: url(background2.png) no-repeat center fixed; 
	-webkit-background-size: 100% 1000px;
	-moz-background-size: 100% 1000px;
	-o-background-size: 100% 1000px;
	background-size: 100% 1000px;
	}

</style>
</head>
<body  text="#ffffff" align="center">
<table  align="right">
<tr>
<td align="center"> <div class="button"><a href="logoutall.php"  class="menubutton" target="_top"  title="logout">Logout</a></div></td>
</tr>
</table>



<div name="links" align="center">

<ul id="nav">
<li><a href="studenthome.php"  target="_top">Home</a></li>
<li><a href="studentnoticeboard.php" target="_top">notice-board</a></li>
<li><a href="studentfee.php" target="_top">fee-record</a></li>
<li><a href="studentexam.php" target="_top">exam-card</a></li>

</ul>

</div>

<div>
<hr width="40" align="center"color="#CC6600" />
<hr width="60" align="center"color="#CC6600" />
</div>

<table  align="center">
</table>

<div width="500px" align="center">

<table border="1" width="400" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr bgcolor="blue"><td colspan="2"class="notify" align="center"><h3>Notice-Board</h3></td></tr>

    <tr>
      <th>View Pinned information:</th>
      <td> <div class="button"><a href="upload/" class="menubutton" target="middle" title="Click to view noticeboard content">VIEW FILES</a></div></td>
	 
    </tr>

  </table>
</body>
</html>

