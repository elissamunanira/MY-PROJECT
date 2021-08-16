<?php
   include("insert.php");
   $r = "DELETE FROM client WHERE user_id =".$_GET['user_id'];
   $del = mysqli_query($connection, $r);
   if(!$del){
	   echo "Failed ".mysqli_error($connection);
   }else{
	   echo "User deleted successfly";
   }  
?>