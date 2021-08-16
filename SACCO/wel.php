<?php
session_start();
include('usercon.php');
if(isset($_session["username"])){
    header("location:HOME.php");}
?>
<html>
<head>
<title>welcome </title>
<meta charset="utf-8">
<style>body{background: url(ik.png);}
div{background-color: mediumaquamarine;border:2px solid; padding:2%; resize: both;  overflow:auto;  width:30%; margin-left: 30%;}
</style>
</head>
<body>
<p style="text-align: right;"><a style="background-color: red;border-radius:40%;font-size: xx-large;text-decoration:none;" href="logout.php">Logout</a></p>
<div class="container">
    <h1 style="margin-left: 10%;color:aliceblue">welcome</h1>
<ol style="font-size:larger;">
<li><a href="my account.html">My account</a></li>
<li><a href="cheque.html">Request for cheque book</a></li>
<li><a href="loan.html">loan</a></li>
<li><a href="send.php">Send money</a></li>
<li><a href="airtime.html">Buy airtime</a></li></ol>
</ol>
</div>
</body>
</html>