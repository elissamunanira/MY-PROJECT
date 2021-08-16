<?php
include('usercon.php');
if(isset($session['username']))
{header("location:HOME.php");
exit();}
?><html>
<head>
    <title>admin mode</title>
</head>
<body>
<p style="text-align: right;"><a style="background-color: red;border-radius:40%;font-size: xx-large;text-decoration:none;" href="logout.php">Logout</a></p>
<h2>WELCOME IN ADMIN MODE</h2>
<ol style="font-size: larger;">
    <li><a href="seeingagent.php">Make more about agent account</a></li>
    <li><a href="#">Accepting the agent request</a></li>
</ol>
</body>
</html>