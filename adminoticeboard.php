<?php
	require_once('auth.php');
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
<body>
<?php
include('adminheaderinclude.php');
?>

<table bgcolor="blue" align="center">
<tr><td class="notify">Notice-board</td></tr>
</table>
<p>&nbsp;</p>

<table width="800" align="center">
<tr><td>
<fieldset class="label">
<legend>Click to Browse for a file to pin</legend>
<form enctype="multipart/form-data" action="newupload.php" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
   <table align="center">
   <tr>
      <td>Choose a file to upload: </p></td>
      <td><input name="fileToUpload" type="file" /></td>
   </tr>
   <tr>
        <td>&nbsp;</td>
       <td><input type="submit" value="Upload" /></td>
	</tr>
	</table>
  </form> 
  </fieldset>
  </td></tr>
</table> 
</body>
</html>
