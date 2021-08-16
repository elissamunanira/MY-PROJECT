
<php code>
<? require ("tracker.php");
?>
<center>
<?php 
    include 'usercon.php';
?>
<title>J~Net Level Up</title>
 <?php session_start();
 $_SESSION['user_id'] = "hi";
 $id = $_SESSION['user_id']; 
 // Connects to your Database 
 mysql_connect("localhost", "root", " ","user"); 
 mysql_select_db("messages") or die(mysql_error()); 

 $user = mysql_query("SELECT * FROM `client` WHERE `client`.`user_id` =$id") or die(mysql_error());

 $balance = $user['BALANCE'] > 1000 ? ($balance - 1000) : 0;

 mysql_query("UPDATE `client` SET `BALANCE` = $balance WHERE `client`.`user_id` =$id") 
 or die(mysql_error()); 
 echo "<table border cellpadding=3>"; 
 while($info = mysql_fetch_array( $data )) 
 { 
     echo "<tr>"; 
     echo "<th>User:</th> <td>".$user['LNAME'] . "</td> "; 
     echo "<th>Balance:</th> <td>".$balance . " </td></tr>"; 
 } 
 echo "</table>";
  echo "Balance Is ".$balance; 
echo $user['LNAME'] . " " . $balance;
 ?>
<META HTTP-EQUIV=REFRESH CONTENT="0; URL=010101levup.php">

<end php code for page 1>