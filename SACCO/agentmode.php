<?php
session_start();
include('usercon.php');
if(isset($session['email']))
{header("location:agent.php");
exit();}
?><html>
<head>
    <title></title>
</head>
<body>
<p style="text-align: right;"><a style="background-color: red;border-radius:40%;font-size: xx-large;text-decoration:none;" href="logout.php">Logout</a></p>
<h2>WELCOME IN AGENT MODE</h2>
<ol style="font-size: large;">
    <li><a href="insert.php">Make more about User account</a></li>
    <li><a href="#">Accepting the loan request</a></li>
    <li><a href="#">Accepting the cheque book request</a></li>
</ol>
</body>
</html>