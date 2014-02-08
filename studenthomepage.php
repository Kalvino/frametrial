
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
	width:150px;
	}
	#content {
  margin-left:  65%;
}
#navbar {
  float: left;
  width: 35%;
}
#container {
  width: 800px ;
  margin-left: auto ;
  margin-right: auto ;
}
#container {
  width: 900px ;
  margin-left: auto ;
  margin-right: auto ;
}
</style>
</head>
<body>
<?php
include('studentheaderinclude.php');
?>
<table bgcolor="blue" align="center">
<tr><td>Home</td></tr>
</table>
<p>&nbsp;</p>

<div id="container">
  <div id="navbar">
  


<div class="button"><a href="studentnoticeboard.html" accesskey="2" class="menubutton" target="_top" title="notice-board information">noticeboard info</a></div>
<div class="button"><a href="feerecord.html" accesskey="3" class="menubutton" target="_top" title="fee record information">fee record info</a></div>
<div class="button"><a href="examcard.html" accesskey="4" class="menubutton" target="_top" title="exam-card information">exam-card info</a></div>
<div class="button"><a href="studentregister.html" accesskey="5" class="menubutton" target="_top" title="student registration information">registration info</a></div>


</div>

<div id="content">

</div>

</div>

</body>
</html>
