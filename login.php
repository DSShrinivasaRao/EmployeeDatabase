<?php include('server.php') ;  ?>
<html>
<head>
<meta charset="UTF-8">
<title>LOG IN</title>



    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

<style>
body{background-image: url('https://gualapackgroup.com/wp-content/uploads/2017/03/business-background.jpg');}
</style>
</head>
<body>

  <div class="login-card" >
    <h1>Log-in</h1><br>
<form method="post" action="login.php">
<?php include('errors.php');?>
	<input type = "text" name="email" placeholder="EMAIL" required>
	<input type = "password" name="password" placeholder="PASSWORD" required>
	<input type = "submit" name = "login" value="Login" style="background-color:grey;" class="login login-submit" >
	
	</form>
	 <div class="login-help">
    •••• <a href="signup.php"><input type = "submit" value="Register " style="background-color:grey;width:274px"></a>
  </div>
   
	</div>
</body>
</html>
