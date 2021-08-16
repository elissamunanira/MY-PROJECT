<?php
   include("insert.php");
   $r = "SELECT * FROM client WHERE user_id =".$_GET['user_id'];
   $dx = mysqli_query($connection,$r);
   if(!$dx){
	   echo "Failed";
   }
   if($row = mysqli_fetch_array($dx)){
	   echo "updating user data here";
	   ?>
	   <form action="" method="post">
		  <input type="hidden" name ="user_id" value="<?php echo $row['user_id'];?>" placeholder="Enter the user_id"/>
		   <br/>
         <input type="text" name ="FNAME" value="<?php echo $row['FNAME'];?>" placeholder="Enter the first name"/>
         <br/>
         <input type="text" name ="LNAME" value="<?php echo $row['LNAME'];?>" placeholder="Enter the lastname"/>
		  <br/> 		  
			<input type="number" name ="account_no" value="<?php echo $row['account_no'];?>" placeholder="Enter the account number"/>
            <br/> 		  
			<input type="text" name ="username" value="<?php echo $row['username'];?>"  placeholder="Enter the username"/>
            <br/> 		  
			<input type="password" name ="password" value="<?php echo $row['password'];?>" placeholder="Enter the password"/>
            <br/> 		  
			<input type="number" name ="TELNO" value="<?php echo $row['TELNO'];?>"  placeholder="Enter telephone"/>
		   <br/> 
			<input type="submit" name ="update" value="Update"/>
			<input type="submit" name ="retrieve" value="Retrieve"/>
		</form> 
	   <?php  
	     if(isset($_POST['update'])){
             $user_id=$_POST['user_id'];
			 $FNAME= $_POST['FNAME'];
             $LNAME= $_POST['LNAME'];
             $account_no = $_POST['account_no'];
             $username= $_POST['username'];
             $password= $_POST['password'];
             $TELNO= $_POST['TELNO'];
			 echo $w = "UPDATE client SET user_id='$user_id',FNAME='$FNAME' , LNAME='$LNAME', account_no='$account_no',  username='$username',password='$password',TELNO='$TELNO'
			 WHERE user_id=".$_POST['user_id'];
             $r = mysqli_query($connection,$w);
			 if(!$w){
				 echo "error ";
			 }else{
				 echo "Updated successfully";
			 }
			 
		 }
   }
?>