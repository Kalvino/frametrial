    <?php
	session_start();
    include 'session.php';
	
	if ($_POST['submit'])
                 {
                    $oldpassword = md5($_POST['oldpassword']);
                    $newpassword = md5($_POST['newpassword']);
                    $repeatnewpassword = md5($_POST['repeatnewpassword']);

                    $queryget = mysql_query("SELECT * from administration where login='$member_id'") or die("Could not get password field");
                    $row = mysql_fetch_assoc($queryget);
                    $oldpassworddb = $row['passwd'];

                        if ($oldpassword==$oldpassworddb)
                             {
                                if ($newpassword==$repeatnewpassword)
                                      {
                                            $querychange = mysql_query("
                                            UPDATE administration SET passwd='$newpassword' WHERE login='$member_id'");
	
	                                             if($querychange)
	                                                   {
		                                                 die("Your password has been changed <a href='adminlogin.php'>Login</a>");
	                                                 	 session_destroy();
	                                                	}
	                                          	else
    												  {
		                                                 die("Query failed");
                                                    	} 
    
                                        }

                                    else
                                        die("The new passwords don't match!");
                               }
                      else{
                        	die("Old password doesn't match!");
	                         }
	
          }
	else{
	header("location: adminpwchange.php");
	}

    ?>