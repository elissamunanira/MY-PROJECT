<?php
$Email=$_POST['uname'];
$Password=$_POST['psw'];
$conn= new MySQLi('localhost','root','','user');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
	$stmt=$conn->prepare("select * from admin where Email=? AND Password=? ");
	$stmt->bind_param("ss",$Email,$Password);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data=$stmt_result->fetch_assoc();
	
		echo '<script>
		window.location="adminmode.php";
		</script>';	
}
	else{
		echo '<script>
         alert("Wrong Email or Password");
		</script>';
		echo '<script>
		window.location="adminl.php";
		</script>';
	}
}

?>