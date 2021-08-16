<html>
    <title>creating new user account</title>
    <style>body{background:skyblue;}
    form{background:aqua;}
    </style>
    <body>
<?php
$server="127.0.0.1";
$user="root";
$pass="";
$db="user";
$connection=mysqli_connect($server,$user,$pass,$db);
if(!$connection){
echo"not passing";
}else{
echo"create new user account";
}
?>
<form action="" method="POST">
<p style="text-align: right;"><a style="background-color: red;border-radius:40%;font-size: xx-large;text-decoration:none;" href="logout.php">Logout</a></p>
    <table>
        <tr><td>FIRST NAME</td>
<td><input type ="text"name="FNAME"placeholder="enter first name"></td></tr>
<tr><td>LAST NAME</td>
<td><input type ="text"name="LNAME"placeholder="enter last name"></td></tr>
<tr><td>ACCOUNT NUMBER</td>
<td><input type ="number"name="account_no"placeholder="enter account number"></td></tr>
<tr><td>ID</td>
<td><input type="number"name="user_id"placeholder="enter ID"></td></tr>
<tr><td>USENAME</td>
<td><input type ="text"name="username"placeholder="enter username"></td></tr>
<tr><td>PASSWORD</td>
<td><input type ="password"name="password"placeholder="enter password"></td></tr>
<tr><td>TELEPHONE</td>
<td><input type ="number"name="TELNO"placeholder="enter telephone number"></td></tr>
<tr><td>BALANCE</td>
<td><input type="number"name="BALANCE"placeholder="enter BALANCE TO SAVE"></td></tr>
</table>
<input type ="submit"name="submit"id="submit" value="Save">
</br>
<input type="submit"name="retrieve" id="retrieve"value="Retrieve">
</form>
<?php
if(isset($_POST["submit"])){
echo $FNAME= $_POST['FNAME'];
echo $LNAME= $_POST['LNAME'];
echo $accoumt_no= $_POST['account_no'];
echo $user_id= $_POST['user_id'];
echo $username= $_POST['username'];
echo $password= $_POST['password'];
echo $TELNO= $_POST['TELNO'];
echo $BALANCE= $_POST['BALANCE'];
$query="INSERT INTO client(FNAME,LNAME,account_no,user_id,username,password,TELNO,BALANCE)
VALUES('$FNAME','$LNAME','$accoumt_no','$user_id','$username','$password','$TELNO','$BALANCE')";
$result=mysqli_query($connection,$query);
if(!$result){//echo $query;
echo"failed".mysqli_error($connection);
}else{
    echo"account created";
}
}
if(isset($_POST['retrieve'])){
    $retrieve="SELECT*FROM client";
    $result=mysqli_query($connection,$retrieve);
    if(!$result){
        echo "Something is wrong".mysqli_error($con);
    }else{
?>
<?php
 echo"<table border=1>
    <tr>
        <th>FNAME</th>
        <th>LNAME</th>
        <th>ACCOUNT_NO</th>
        <th>USER ID</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
         <th>TELEPHONE</th>
         <th colspan=3>ACTION </th></tr>";
?>
<?php
    while($row=mysqli_fetch_array($result)){?>
        <tr>
        <td><?php echo $row['FNAME']; ?></td>
        <td><?php echo $row['LNAME']; ?></td>
        <td><?php echo $row['account_no']; ?></td>
        <td><?php echo $row['user_id']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['TELNO']; ?></td>
        <td><a href="clientdetails.php?user_id=<?php echo $row['user_id']; ?>">View</a></td>
	    <td><a href="clientupdate.php?user_id=<?php echo $row['user_id']; ?>">Update</a></td>
	    <td><a href="clientdelete.php?user_id=<?php echo $row['user_id']; ?>">Delete</a></td>
        </tr>
        <?php
}
echo"</table>";
}
}
?>
</body>
</html>