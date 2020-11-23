<?php


  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	$name="";
	$phone="";
	$email="";
	$address="";
	$designation="";
	$password="";
	$password1="";
	$errors = array(); 
	$count=0;
$db=mysqli_connect('localhost','root','monu12345','employee');
if (!$db) {
    echo "Error" . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//register

if(isset($_POST['register']))
{
	$name=mysqli_real_escape_string($db,$_POST['username']);
	$phone=mysqli_real_escape_string($db,$_POST['phone']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$address=mysqli_real_escape_string($db,$_POST['address']);
	$designation=mysqli_real_escape_string($db,$_POST['designation']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$password1=mysqli_real_escape_string($db,$_POST['password1']);
	if($password!=$password1)
	{
		array_push($errors, "The two passwords do not match");
	
	$count=1;
	}
	$querycheck=" Select * from details where email= '$email' ";
	$result=mysqli_query($db,$querycheck);
 $user = mysqli_fetch_assoc($result); 
  if ($user) { // if user exists
    if ($user['email'] == $email) {
      array_push($errors, "Email already exists");
    }
  }
	if(count($errors)==0)
	{ 
		$queryinsert=" INSERT INTO details( name , number , address , designation , email , password) VALUES('$name','$phone','$address','$designation','$email','$password') ";
		mysqli_query($db,$queryinsert);
		$_SESSION['username'] = $name;
		
  	$_SESSION['success'] = "You are now logged in";
	
  	header('location: login.php');
	
	}
}
if(isset($_POST['login']))
{
	
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$query = " SELECT * FROM details WHERE email= '$email' AND password= '$password' ";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = " ";
  	  header('location: logged.php');
  	}
  else {
  		array_push($errors, "Wrong username/password combination");
  }
}
if(isset($_POST['logout']))
{
	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
}
?>
