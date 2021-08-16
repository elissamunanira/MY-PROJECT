<html>
<head>
    <title>Creating new user account</title>
    <style>
        form {background :rgb(183, 220, 223);margin:0 50% 0 300px }
        p{margin-left: 20px;}
        button{margin-left: 200px;}
        h2{margin-left: 30px;}
    </style>
</head>
<body>
    <?php
include ("userConn.php"); // Using database connection file here

if(isset($_POST['submit']))
{		
    $FNAME= $_POST['FNAME'];
    $LNAME = $_POST['LNAME'];
    $agent_id = $_POST['agent_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $TELNO = $_POST['TELNO'];
    $insert = mysqli_query($user,"INSERT INTO `agent`(`FNAME`, `LNAME`,'agent_id','username','password','TELNO')
     VALUES ('$FNAME','$LNAME','$agent_id','$username','$password','$TELNO')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($user); // Close connection
?>
<form method="POST">
    <h2>Creating new user account</h2>
    <p><label for="firstname"><b>First Name</b></label>
        <input type="text" name="FNAME" placeholder="Enter First Name"required></p>
    <p><label for="lastname"><b>Last Name</b></label>
        <input type="text" name="LNAME" placeholder="Enter Last Name"required></p>
<p><label for="account_no"><b>ACCOUNT NO</b></label>
    <input type="text" name="accoount_no" placeholder="Enter account number"required></p>
<p><label for="user_id"><b>ID</b></label>
    <input type="text" name="user_id" placeholder=" Enter ID No"required></p>
<p><label for="username"><b>Username</b></label>
    <input type="text" name="username" placeholder="Enter Username"required></p>
<p><label for="password"><b>Password</b></label>
    <input type="text"name="password" placeholder="Enter Password"required></p>
 <p><label for="number" ><b>TEL  NO:</b></label>
    <input type="number"name="TELNO" placeholder=" Enter telephone no"required></label></p>   
<a href="HOME.html"></a><button type ="button">Submit</butoon></a>
</form>
</body>
</html>