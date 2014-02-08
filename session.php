    <?php
      
      include 'config.php';
	  
    if (isset($_SESSION['admin_id']))
    {
	$member_id=$_SESSION['admin_id'];
	
	  $playerinfo="SELECT * from administration where login='$member_id'";
    $playerinfo2=mysql_query($playerinfo) or die("could not get player stats!");
    $playerinfo3=mysql_fetch_array($playerinfo2);
    }
    else
    {
      echo "Not Logged in <br><br> <A href='adminlogin.php'>Login</a>";
      exit;
    }




  
    ?>