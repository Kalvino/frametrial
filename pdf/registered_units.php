
<page >
<?php
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
		header("Location:index.php");
	}

	define('MyConst', TRUE);

session_start();
include 'connect.php';
	error_reporting (E_ALL ^ E_NOTICE);
$username=$_SESSION['user'];
$sql="SELECT * from compsci2009 where regno='$username'";
$sql2="SELECT * from yearsem where regno='$username'";
$result=mysql_query($sql);
$result2=mysql_query($sql2);
while($row1=mysql_fetch_array($result2))
{
?>

<p align="center"  style="background:url(../../../images/watermark.png);"><img src="../../../images/kuct.png" align="center"/></p>
<h1 align='center'>KIMATHI UNIVERSITY</h1>
	<h3 align='center'><u>STUDENTS ADMISSION CHECKLIST</u></h3>
	<table align="left" width="100%" >
	  <tr><th width="20%" align="right">YEAR OF STUDY</th>
	  <td width="6%" align="left"><u><? echo $row1[1];?></u></td>
	  <td width="9%"></td>
	  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
	  <th width="22%" align="right">ACADEMIC YEAR</th>
	  <td width="12%" align="left"><u><? echo $row1[2]; ?></u></td>
	  </tr>
  </table>
  <? } ?>
	<p>&nbsp;</p>
	<table>
	<tr>
	<th align="left">SCHOOL:</th><td align="left"><u>COMPUTER SCIENCE AND IT</u></td>
	<th align="left">PROGRAMME:</th><td align="left"><u>Bachelor of Science in Computer Science</u></td>
	</tr>
	</table>
	<br />
	<table width="1041">
	<tr><th colspan="2" align="left">STUDENTS DETAILS:</th>
	</tr>

	<? 
	while($rows=mysql_fetch_array($result))
{
?>
<tr style="padding:3;">
<td width="7%" ><b>NAME :</b></td>
<td width="30%"><? echo "<u>".$rows['sname']." ". $rows['fname']." ".$rows['oname']."</u>"; ?> </td>
<td width="8%" ><b>REG NO.</b></td>
<td width="22%"><? echo "<u>".$rows['regno']."</u>"; ?> </td>
<td width="10%" ><b>MOBILE NO.</b></td>
<td width="23%"><? echo "<u>".$rows['phone']."</u>"; ?> </td>
</tr>
</table>
<br />
<? }
	 ?>
	 <h4>REGISTERED UNITS</h4>
<table width="100%"  cellpadding="1" cellspacing="1" bgcolor="#000000"  >
<tr  bgcolor="#FFFFFF" >
<th width="256" >UNIT CODE</th>
<th width="442" >UNIT DESCRIPTION</th>
<th width="247" >UNIT TYPE</th>
</tr>
<?php

	$query="SELECT * 
FROM  reg_compsci WHERE regno='$username'";
$result=mysql_query($query);

while($row=mysql_fetch_array($result))
{ 
$unitcode=$row['unitcode']; ?>
<tr bgcolor="#FFFFFF"  >
<td style="padding:3px;"><? echo $unitcode; ?></td>
<?
$units="SELECT * 
FROM  compsci_units WHERE code='$unitcode'";
$nameresults=mysql_query($units);
$count=mysql_num_rows($nameresults);
if($count>1){ ?>
<td>Computer Systems Project*</td><td>core</td></tr>
<? }
else{
while($row2=mysql_fetch_array($nameresults))
{?> <td> <? echo $row2['name'];?></td><td><? echo $row2['type'];?></td>
<? }?></tr> <?
} 
}
?>
</table>
<br />
<br />
<br />
<br /><br />
<br />
<table width="1060">
<tr><th align="left">STUDENT</th> <td>SIGNED: __________________</td><td> DATE______________________</td></tr>
<tr><th align="left">COD</th> <td>SIGNED: __________________</td><td> DATE/STAMP_________________</td></tr>
<tr><th>DEAN OF SCHOOL</th> <td>SIGNED: __________________</td><td> DATE_______________________</td></tr>
<tr><th>REGISTRAR AA</th> <td>NAME: ___________________</td><td> SIGN:_________________________</td><td> DATE/STAMP_________________________</td></tr>
</table>
</page>

