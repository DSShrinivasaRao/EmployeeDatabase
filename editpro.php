<?php include('server.php'); ?>
<!DOCTYPE html>

<html>
<head>
<title>edit profile</title>

<style>
body{background-image: url('https://cdn.hipwallpaper.com/i/26/83/ELyrv5.jpg') ;}
.profilepress-edit-profile-status {
  width: 400px;
  text-align: center;
  background-color: #e74c3c;
  color: snow white;
  border: medium none;
  border-radius: 4px;
  font-size: 17px;
  font-weight: normal;
  line-height: 1.4;
  padding: 8px 5px;
  margin: auto;
}

.memo-edprofile-success {
  width: 400px;
  text-align: center;
  background-color: #2ecc71;
  color: #ffffff;
  border: medium none;
  border-radius: 4px;
  font-size: 17px;
  font-weight: normal;
  line-height: 1.4;
  padding: 8px 5px;
  margin: auto;
}

#sc-edprofile {
  background: white;
  width: 400px;
  margin: 0 auto;
  margin-top: 8px;
  margin-bottom: 2%;
  transition: opacity 1s;
  -webkit-transition: opacity 1s;
}

#sc-edprofile h1 {
  background: green;
  padding: 20px 0;
  font-size: 140%;
  font-weight: 300;
  text-align: center;
  color: #fff;
}

div#sc-edprofile .sc-container {
  background: #f0f0f0;
  padding: 6% 4%;
}

div#sc-edprofile input[type="email"],
div#sc-edprofile input[type="text"],
div#sc-edprofile input[type="varchar"],
div#sc-edprofile input[type="password"], 
div#sc-edprofile select, div#sc-edprofile textarea {
  width: 92%;
  background: #fff;
  margin-bottom: 4%;
  border: 1px solid #ccc;
  padding: 4%;
  font-family: 'Open Sans', sans-serif;
  font-size: 95%;
  color: #555;
}

div#sc-edprofile select {
  width: 100%;
}

div#sc-edprofile textarea {
  height: 100px;
}

div#sc-edprofile input[type="submit"] {
  width: 100%;
  background: green;
  border: 0;
  padding: 4%;
  font-family: 'Open Sans', sans-serif;
  font-size: 100%;
  color: #fff;
  cursor: pointer;
  transition: background .3s;
  -webkit-transition: background .3s;
}

div#sc-edprofile input[type="submit"]:hover {
  background: darkgrey;
}
</style>
</head>
<body>
<?php include('server.php'); 
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'monu12345');
define('DBNAME', 'employee');
$db = mysql_connect(DBHOST,DBUSER,DBPASS,DBNAME);
       	 $email=$_SESSION['email'];
		 
		$query= " select * from details where email = '$email' ";
	    $results = mysqli_query($db, $query);
		if(mysqli_num_rows($results))
		{ 
	    while($row = mysqli_fetch_assoc($results)) {
			  $username= $row['name'];
			  $number=$row['number'];
			  $designation=$row['designation'];
			$certification=$row['certification'];
			 $address=$row['address'];
			  $password=$row['password'];
			
		  }
		}
	echo'<a href="logged.php" style="color:white;"> BACK </a>';	
   echo'<br><br><div id="sc-edprofile">';
  echo'<h1>Edit Profile </h1>';
  echo'<div class="sc-container"> ';
  echo '<form method="post" action="logged.php" >';
    echo"<input type='text' name='username1' value='$username'>";
	echo"<input type='text'  name='number1' value='$number' />";
    echo"<input type='email'  name='email1' value='$email'/>"; 
	 echo"<input type='text'  name='address1' value='$address'/>";
  echo"<input type='text' name='designation1' value='$designation'>";
  echo"<input type='text' name='certification1' value='$certification'>"; 
   echo"<input type='password'  name='password1'  value='$password'/>";
	    echo"<input type='submit' name='update' value='Update' />";
	echo '</form>';

  echo'</div>';
echo'</div>';
?>
</body>
</html>
