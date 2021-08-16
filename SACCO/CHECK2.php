<!DOCTYPE html>
<html>
<head>
<title>checking</title>
</head>
<body>
<center>
<form action="">
<h2>
<?php
   include("usercon.php"); 
   $h= "SELECT * FROM client where account_no=".$_GET['account_no'];
   if(isset($_GET['account_no']));
   {
   $m = mysqli_query($con, $h);
   while($row = mysqli_fetch_array($m)){ 
    echo"YOUR BALANCE IS : ".$row['BALANCE']." "."RWF";
   } }
?>
</h2>
</form>
</center>
</body>
</html>