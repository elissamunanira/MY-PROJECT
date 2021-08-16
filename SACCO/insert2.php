<?php
            include('usercon.php')
            ?><html>
    <head>
        <title>Inserting new agent</title>
</head>
<style></style>
<body>
    <form action=""method="POST">
    <div>
    <h2>CREATING AGENT ACCOUNT</h2>
        <table>
            <tr><td>AGENT_ID</td>
            <td><input type="number"name="id"placeholder="Enter agent id"required></td></tr>
            <tr><td>FIRST NAME</td>
            <td><input type="text"name="fname"placeholder="Type the first name"required></td></tr>
            <tr><td>LAST NAME</td>
            <td><input type="text"name="lname"placeholder="Type the last name here"required></td></tr>
            <tr><td>EMAIL</td>
            <td><input type="email"name="email"placeholder="Type Email here"required></td></tr>
            <tr><td>PASSWORD</td>
            <td><input type="password"name="password"placeholder="Enter password"required></td></tr>
            <tr><td>TELEPHONE</td>
            <td><input type="number"name="tel"placeholder="Enter telephone"required></td></tr>
            <tr><td>ADMIN ID</td>
            <td><input type="number"name="id"placeholder="Enter admin_id"required></td></tr>
</table>
            <input type="submit"name="submit"id="submit"value="save">
            <a  href="seeingagent.php"><input type="button"name="retrieve"id="retrieve"value="retrieve"></a>
</br> </br>
            <?php
            if(isset($_POST["submit"])){
              echo $id=$_POST['id'];
              echo $f=$_POST['fname'];
              echo $l=$_POST['lname'];
              echo $e=$_POST['email'];
              echo $p=$_POST['password'];
              echo $t=$_POST['tel'];
              echo $a=$_POST['id']; 
              echo "</br></br>";
             $m="INSERT INTO agent (agent_id,FNAME,LNAME,email,password,TELEPHONE,admin_id)
             VALUES('$id','$f','$l','$e','$p','$t','$a')";
             $res=mysqli_query($con,$m);
             if(!$res){
                 echo"failed" .mysqli_error($con);
             }
             else {echo"account has been created successfully!";}
            }
            ?>