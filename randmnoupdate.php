	<?php 
	
	
	//Include database connection details
	require_once('config.php');
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	$change=$_POST['submit'];
if ($change){

 $update = mysql_query("UPDATE studentfeerecord SET randno=UPDATE studentfeerecord SET randno = rand() WHERE randno=''");}
 
 
 ?>