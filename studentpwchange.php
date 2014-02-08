<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin password change</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
	include('studentheaderinclude.php');
?>


<table align="center"l width="480">
<tr><td>
<fieldset align="center"  bgcolor="brown" length="">
<legend ><b>Fill In</b></legend>
<p>&nbsp;</p>
<form  name="admpasswdchnge" method="post" action="studentpwchngescript.php">

  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th>Old Password </th>
      <td><input name="oldpasswd" type="password" class="textfield"  /></td>
    </tr>
    <tr>
      <th>New Password</th>
      <td><input name="newpasswd" type="password" class="textfield" i/></td>
    </tr>
    <tr>
      <th width="124">Confirm Password</th>
      <td><input name="cfmpasswd" type="password" class="textfield" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Change Password" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</fieldset>
</td>
</tr>
</table>
</body>
</html>
