<?php include('server.php'); 
// if(isset($_SESSION['email']))
 //{
//	 header("location:p1.html");
 //}
?>
<html>
<head>
<title>CREATE ACCOUNT</title>
<link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<style>
body{background-image: url('https://wallpaperaccess.com/full/656668.jpg');}
</style>
</head>
<body >
<center>

<?php include('errors.php');?>
	<div class="login-card">
	<h1>SIGN UP </h1><br>
	<form method="post" action="signup.php">
	<input type = "text" name="username" value="" placeholder="NAME" required>
	<input type = "text" style="width:100%;height:44px; margin-bottom: 10px;  border: 1px solid #d9d9d9;  border-top: 1px solid #c0c0c0;" name="phone" value="" placeholder="PHONE NUMBER"  pattern="[0-9].{9}"  required>
	<input type = "email" style="width:100%;height:44px; margin-bottom: 10px;  border: 1px solid #d9d9d9;  border-top: 1px solid #c0c0c0;" name="email" value=""  placeholder="EMAIL"required>
	<input type = "text" name="address" value="" placeholder="ADDRESS" required>
	<input type = "password" name="password"  placeholder="PASSWORD"   title="Upper and lower case characters , minimum 8 required" required>
	<input type = "password" name="password1"  placeholder="CONFIRM PASSWORD" required>
<input type = "text" name="designation" value="" placeholder="DESIGNATION" >
	<input type = "submit" name="register" class="btn" >  

	</form>
	 <div class="login-help">
    •••• 
	<p style="color:Blue;">Existing User??</p>
	<a href="login.php"><input type = "submit" value="LOGIN" style="background-color:grey;width:274px"></a>
  </div>
	</div>
</center>
</body>
</html>