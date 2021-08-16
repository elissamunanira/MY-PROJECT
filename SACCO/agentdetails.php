<?php
include('usercon.php');
$t = "SELECT * FROM agent WHERE agent_id=".$_GET['agent_id'];
$det = mysqli_query($con, $t);
if(!$det){
    echo "Failed";
}
while($row = mysqli_fetch_array($det)){
 echo "DETAILS OF AGENT WHOSE ID =".$row['agent_id']."<br/></br>"; 
  echo "FIRST NAME: ".$row['FNAME']."</br>";
  echo "LAST NAME: ".$row['LNAME']."<br/>"; 
  echo "EMAIL: ".$row['email']."<br/>"; 
  echo "PASSWORD: ".$row['password']."<br/>";
  echo "TELEPHONE: ".$row['TELEPHONE']."<br/>"; 
  echo "ADMIN SUPPORT: ".$row['admin_id']."<br/>"; 
}
?>