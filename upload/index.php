<?php
/**
* Change the path to your folder.
* This must be the full path from the root of your
* web space. If you're not sure what it is, ask your host.
*
* Name this file index.php and place in the directory.
*/
require_once('C:\wamp\www\frametrial\config.php');
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
	
	
	 $queryy="SELECT * FROM uploadtime";
			  $resultt=mysql_query($queryy);
			  if(mysql_num_rows($resultt) == 1){
		
		            while($line=mysql_fetch_array($resultt ,MYSQL_ASSOC))
			       {
		      
			         $f1=$line['date.filename']; 
					 
					 }
		}			 

    // Define the full path to your folder from root
    $path = "C:/wamp/www/frametrial/upload/";

    // Open the folder
    $dir_handle = @opendir($path) or die("Unable to open $path");

    // Loop through the files
    while ($file = readdir($dir_handle)) {

    if($file == "." || $file == ".." || $file == "index.php" )

        continue;
        echo "<a href=\"$file\">$file</a><br />";
		

    }
    // Close
    closedir($dir_handle);
?>