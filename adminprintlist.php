
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
<tr><td class="notify">Print-List</td></tr>
</table>
<p>&nbsp;</p>

<table width="800" align="center">
<tr><td>
<form id="loginForm" name="loginForm" method="post" action="adminprintscript.php">
<fieldset align="center"  bgcolor="brown" >
<legend  align="left" class="label"><b>Choose Class List To Print</b></legend>
<p>&nbsp;</p>

 <table width="400" border="0" align="center" cellpadding="2" cellspacing="0">

<tr>
<td align="left">Select Course:</td>
<td align="left"><select name="course">
<option value="">Select...</option>
  <optgroup length="100" label="School of Engineering">
    <option value="TIE">TIE</option>
    <option value="Electrical engineering">Electrical engineering</option>
	<option value="Civil engineering">Civil engineering</option>
  </optgroup>
  <optgroup label="School Computing and IT">
    <option value="Computer Science">Computer Science</option>
    <option value="Information Technology">Information Technology</option>
  </optgroup>
  <optgroup label="School Business">
    <option value="Actuarial Science">Actuarial Science</option>
    <option value="Bachelor of Commerce">Bachelor of Commerce</option>
	<option value="Finance">Finance</option>
  </optgroup>
  <optgroup label="Other Schools">
    <option value="tourism">Tourism</option>
    <option value="nursing">Nursing</option>
  </optgroup>
</select></td>
</tr>

<tr>
<td align="left">Select Year of Study:</td>
<td align="left"><select name="yearofstudy">
       <option value="">Select...</option>
  <optgroup  length="100" label="Year of Study">
    <option value="First">First</option>
    <option value="Second">Second</option>
	<option value="Third">Third</option>
	<option value="Fourth">Fourth</option>
	<option value="Fifth">Fifth</option>
  </optgroup>
</select></td>
</tr>

<tr>
<td align="left">Select semester:</td>
<td align="left"><select name="semester">
  <option value="">Select...</option>
  <optgroup  length="100" label="semester">
    <option value="1st">1st</option>
    <option value="2nd">2nd</option>
  </optgroup>
</select></td>
</tr>

<tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  </fieldset>
</form>
</td></tr>
</table> 
 </body>
</html>
