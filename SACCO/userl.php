<!DOCTYPE html>
<html>
<head>
<title>Log In </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif; }
form {background :rgb(183, 183, 223);margin:0 250px 0 250px;}
p{text-align:center;}
h2{text-align:center;}
input[type=text], input[type=password] {text-align:center; width: 30%;  padding: 12px 20px;margin: 8px 0;display: inline-block; border: 1px solid rgb(87, 63, 63);}
button.btn1 { background-color: #04AA6D; margin-left:500px;color: white;target: self;padding: 14px 20px;margin: 8px 0; border: none; cursor: pointer; width: 10%;}
button.btn2 { background-color: red; text-decoration:none; color: white;target: self;padding: 14px 20px;margin: 8px 0; border: none; cursor: pointer; width: 10%;}
button:hover { opacity: 0.8;}
.container {padding: 16px;}
span.psw {float: right;
  padding-top: 16px;}

</style>
</head>
<body>
    <h2><u>User Login</u></h2>
<form action="check login.php"method="post">
    <div class="container"></div>
<p><label for="username"><b>Username</b></label></p>
<p><input type="text" name="users" placeholder="Enter Username"required></p>
<p><label for="psw"><b>Password</b></label></p>
<p><input type="password" name="user_pssd" placeholder="Enter Password"required></p>
<a href="wel.php">
<button type="submit"class="btn1">Login</button>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="btn2"><a href="HOME.php">Cancel</a></button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>