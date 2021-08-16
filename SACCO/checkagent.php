<?php
session_start();
$email=$_POST['uname'];
$password=$_POST['psw'];
$conn= new MySQLi('localhost','root','','user');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
	$stmt=$conn->prepare("select * from agent where email=? AND password=? ");
	$stmt->bind_param("ss",$email,$password);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data=$stmt_result->fetch_assoc();

		echo '<script>
		window.location="agentmode.php";
		</script>';	
}
	else{
		echo '<script>
         alert("Wrong username or Password, Please enter the correct ones");
		</script>';
		echo '<script>
		window.location="agent.php";
		</script>';
	}

}

?>
	