<?php session_start(); ?>

<html>
<body  bgcolor="#99CCFF">

<div align="center">
<img align="top" src="header7.png" height="120" width="700" />
<p>&nbsp;</p>

<p>This is Kimathi University System. </p>

<input type="button" name="admin" value="CLICK TO UPLOAD AGAIN" onClick="location.href='adminoticeboard.php'">
<div align="right">
<input type="button" name="admin" value="go back" onClick="location.href='adminoticeboard.php'">
</div>
</div>


<div align="center" >


<?php
error_reporting(E_ALL ^ E_NOTICE);

//Include database connection details
	require_once('config.php');
	
	
	$member_id=$_SESSION['SESS_MEMBER_ID'];
	




//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
$filename=$_FILES["fileToUpload"]["name"];
$qry = "INSERT INTO  uploadtime(userid,filename) VALUES('$member_id', '$filename')";
	$result = @mysql_query($qry);




if ((($_FILES["fileToUpload"]["type"] == "image/gif")
 || ($_FILES["fileToUpload"]["type"] == "image/png")
  || ($_FILES["fileToUpload"]["type"] == "image/jpeg")
  || ($_FILES["fileToUpload"]["type"] == "image/jpg")
  || ($_FILES["fileToUpload"]["type"] == "text/plain")
  || ($_FILES["fileToUpload"]["type"] == "application/msword")
  || ($_FILES["fileToUpload"]["type"] == "application/vnd.ms-excel")
  || ($_FILES["fileToUpload"]["type"] == "application/pdf")
  || ($_FILES["fileToUpload"]["type"] == "image/png" ))
  && ($_FILES["fileToUpload"]["size"] < 2000000))
  {
 
	
    if (file_exists("upload/" . $_FILES["fileToUpload"]["name"]))
      {
      echo $_FILES["fileToUpload"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
      "upload/" . $_FILES["fileToUpload"]["name"]);
      
	  
	  echo "<p><h2>FILE UPLOADED!</h2></p>";
  echo "<table border=\"1\">";
echo "<tr><td>Client Filename: </td>
   <td>" . $_FILES["fileToUpload"]["name"] . "</td></tr>";
echo "<tr><td>File Type: </td>
   <td>" . $_FILES["fileToUpload"]["type"] . "</td></tr>";
echo "<tr><td>File Size: </td>
   <td>" . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb</td></tr>";
echo "<tr><td>Name of Temp File: </td>
   <td>" . $_FILES["fileToUpload"]["tmp_name"] . "</td></tr>";
echo "</table>";

echo "Stored in: " . "upload/" . $_FILES["fileToUpload"]["name"];
  
  exit();
    
	  
      }
    
  }
else
  {
  echo "<p><h2>ERROR!</h2></p>";
  echo "File type must either be JPEG, GIF, PDF, TEXT or PNG and less than 20,000 kb";
  echo "<table border=\"1\">";
echo "<tr><td>Client Filename: </td>
   <td>" . $_FILES["fileToUpload"]["name"] . "</td></tr>";
echo "<tr><td>File Type: </td>
   <td>" . $_FILES["fileToUpload"]["type"] . "</td></tr>";
echo "<tr><td>File Size: </td>
   <td>" . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb</td></tr>";
echo "<tr><td>Name of Temp File: </td>
   <td>" . $_FILES["fileToUpload"]["tmp_name"] . "</td></tr>";
echo "</table>";
  
  echo "Invalid file";
  }
?> 