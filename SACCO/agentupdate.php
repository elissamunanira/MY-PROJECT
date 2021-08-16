<?php
include('usercon.php');?>
<?php
$qry="SELECT * FROM agent WHERE agent_id=".$_GET['agent_id'];
$result= mysqli_query($con,$qry);
if(!$result){
echo"failed";}
if($row= mysqli_fetch_array($result)){
    ?>
 <form action=""method="POST">
 <input type="hidden" name ="agent_id" value="<?php echo $row['agent_id'];?>" placeholder="Enter the agent_id"/>
		   <br/>
         <input type="text" name ="f" value="<?php echo $row['FNAME'];?>" placeholder="Enter the first name"/>
         <br/>
         <input type="text" name ="l" value="<?php echo $row['LNAME'];?>" placeholder="Enter the lastname"/>		  
            <br/> 		  
			<input type="email" name ="e" value="<?php echo $row['email'];?>"  placeholder="Enter the email or username"/>
            <br/> 		  
			<input type="password" name ="password" value="<?php echo $row['password'];?>" placeholder="Enter the password"/>
            <br/> 		  
			<input type="number" name ="tel" value="<?php echo $row['TELEPHONE'];?>"  placeholder="Enter telephone"/>
		   <br/> 
           <input type="number" name ="id" value="<?php echo $row['admin_id'];?>" placeholder="Enter the admin id"/>
           <br/>
           <input type="submit" name ="update" value="Update"/>
			<input type="submit" name ="retrieve" value="Retrieve"/>
			</form> 
	   <?php  
	     if(isset($_POST['update'])){
             $agent_id=$_POST['agent_id'];
			 $f= $_POST['f'];
             $l= $_POST['l'];
             $e = $_POST['e'];
             $p= $_POST['password'];
             $t= $_POST['tel'];
             $ad= $_POST['id'];
             echo $m="UPDATE FROM agent SET agent_id='$agent_id',FNAME='$f',LNAME='$l',email='$e',password='$p',TELEPHONE='$t',admin_id='$ad'
             WHERE agent_id=".$_POST['agent_id'];
             echo"</br>";
            $r = mysqli_query($con,$m);
            if(!$m){
            echo "error ";
            }else{
            echo '<script>
            alert("Agent Account has been successfully Updated");
            </script>';
            echo '<script>
            window.location="seeingagent.php";
            </script>';
             }
}
}?>

