<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
<body>
<?php
include('studentheaderinclude.php');
?>
<table bgcolor="blue" align="center">
<tr><td class="notify">Fee-Record</td></tr>
</table>
<p>&nbsp;</p>

<table width="800" align="center" >
<tr><td>

<form method="post" name="dosplay" action="studentfeedisplay.php" >
<fieldset align="center"   bgcolor="#6666CC">

<legend  align="left" class="label"><b>Enter Your Registration Number to See Your Fee Record</b></legend>
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0" >
  <tr>
  <td>&nbsp;</td>
  <tr>
    <tr>
      <th>Registration Number:</th>
      <td><input name="regno" type="text" class="textfield" id="regno" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
	<tr>
  <td>&nbsp;</td>
  <tr>
  </table>
  
  </fieldset>
</form>

</td></tr>
</table>
</body>
</html>
