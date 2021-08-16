<?php
   include("insert.php"); 
   $r= "SELECT * FROM client WHERE user_id =".$_GET['user_id'];
   $det = mysqli_query($connection, $r);
   if(!$det){
	   echo "Failed";
   }
   while($row = mysqli_fetch_array($det)){
    echo "DETAILS OF CLIENT WHOSE ID =".$row['user_id']."<br/></br>"; 
     echo "FIRST NAME: ".$row['FNAME']."</br>";
     echo "LAST NAME: ".$row['LNAME']."<br/>"; 
     echo "ACCOUNT NUMBER: ".$row['account_no']."<br/>"; 
     echo "USERNAME: ".$row['username']."<br/>";
     echo "PASSWORD: ".$row['password']."<br/>"; 
     echo "TELEPHONE: ".$row['TELNO']."<br/>"; 
     echo "BALANCE: ".$row['BALANCE'];
   } 
?>