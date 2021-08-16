<?php
include('usercon.php');
if(isset($_POST['submit']))
{
$agent_id=$_POST['agent_id'];
$FNAME=$_POST['FNAME'];
$LNAME=$_POST['LNAME'];
$email=$_POST['email'];
$password=$_POST['password'];
$TELNO=$_POST['TELNO'];
$admin_id=$_POST['admin_id'];
$sql="INSERT INTO agent (agent_id,FNAME,LNAME,email,password,TELNO,admin_id) value ('$agent_id','$FNAME','$LNAME','$email','$password','$TELNO','$admin_id')";
$result=mysqli_query($con,$sql);
if($result)
{
		echo '<script>
        alert("your accoumt has been created successfuly, you can now login as an agent")
        </script>';
        echo '<script>
        window.location ="agent.php";
        </script>';
}
else
{
echo "query erros";
}
}
?>
<html>
    <head>
        <title>signing up</title>
        <style>
            .button { border: none;color: white; padding: 12px 32px; text-align: center; text-decoration: none; display: inline-block;font-size: 12px;margin: 4px 2px;transition-duration: 0.4s;cursor: pointer; }
            .button1 { background-color: white;text-decoration: none;  color: black;  border: 2px solid #111311; } 
            .button1:hover {background-color: #f02424;text-decoration: none; color: white;  }
            .button2 {background-color: white;  color: black;  border: 2px solid #101111;text-decoration-style: none;}
             .button2:hover {background-color: #008CBA;text-decoration: none;color: white;}
            </style>
    </head>
    <body>
        <form action="" method="POST">
            <table>
                <tr><td>ID</td>
                <td><input type="number"id="name"name="agent_id"placeholder="Enter Agent_id"required></td></tr>
                <tr><td>FNAME</td>
                <td><input type="text"id="name"name="FNAME"placeholder="Enter First Name"required></td></tr>
                <tr><td>LNAME</td>
                <td><input type="text"id="name"name="LNAME"placeholder="Enter Last Name"required></td></tr>
                <tr><td>email</td>
                <td><input type="text"id="name"name="email"placeholder="Enter email"required></td></tr>
                <tr><td>Password:</td>
                <td><input type="password"id="pssd"name="password"placeholder="Enter password"required></td></tr>
                <tr><td>TELEPHONE :</td>
                <td><input type="number"name="TELNO"placeholder="Enter valid phone number"required></tr>
                <tr><td>ADMIN_ID</td>
                <td><input type="number"name="admin_id"placeholder="emter admin id"required></tr>
                </table>  
                <button class="button button2" name="submit">confirm</button>
                <button class="button button1"><a href="agent.php">Cancel</a></button>
        </form>
    </body>
</html>