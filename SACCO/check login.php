<?php
$username=$_POST['users'];
$password=$_POST['user_pssd'];
$conn= new MySQLi('localhost','root','','user');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

else{
	$stmt=$conn->prepare("select * from client where username=? AND password=? ");
	$stmt->bind_param("ss",$username,$password);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data = $stmt_result->fetch_assoc();
	    $_session["username"] = $username;
		$_session["password"] = $data['password'];
		echo '<script>
		window.location="wel.php";
		</script>';
}
	else{
		echo '<script>
         alert("Wrong username or Password, Please enter the correct ones");
		</script>';
		echo '<script>
		window.location="userl.php";
		</script>';
	}
}

?>
	