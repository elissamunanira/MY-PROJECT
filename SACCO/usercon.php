<?php
 $server ="127.0.0.1";
 $db="user";
 $con = mysqli_connect($server, "root","", $db);
 
 if(!$con){
	 die("Connection failed!");
 }
  //echo "Success";
?>