<?php
session_start();
$member_id =$_SESSION['admin_id'];

if($member_id)
    {

if ($_POST['submit'])
{
//check fields

        $oldpasswd = md5($_POST['oldpasswd']);
	$newpasswd=md5($_POST['newpasswd']);
	$cfmpasswd= md5($_POST['cfmpasswd']);

//check password against db
//connect to db
include('config.php');

$queryget = mysql_query("SELECT passwd FROM administraiton WHERE admin_id='$member_id'")or die("query failed");
$row=mysql_fetch_assoc($queryget);

$oldpasswdb= $row['passwd'];

//check passwords

if($oldpasswd==$oldpasswdb)
{
//check two new passwords
  if($newpasswd==$cfmpasswd)
  {
   //change password in database
   
   $querychange=mysql_query("
   UPDATE administration SET passwd='$newpasswd' WHERE admin_id='$member_id' 
   ");
session_destroy();
   
   die("your password has been changed.<a href='adminlogin.php'>return </a>to login page");

  }
  else 
      die("New passwords dont match!");

}
else
    die("old password doesnt match!");


}
else
 
{


echo"



<form  method="post" action="adminpasswordchange.php">

      Old Password : <input name="oldpasswd" type="password" class="textfield"  /><br />
    
    
      New Password:<input name="newpasswd" type="password" class="textfield" i/><br />
   
  
      Confirm Password:<input name="cfmpasswd" type="password" class="textfield" /><br />
    

      <input type="submit" name="Submit" value="Change Password" />
  
</form>
";
}


 
    }
else 
    die("you mustbe loged in to change your password");