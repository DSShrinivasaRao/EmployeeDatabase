<?php
include('server.php');
 
 if(!isset($_SESSION['email']))
 {
	 header("location:login.php");
	 
 }
 			$emailid=$_SESSION['email'];
 if (isset($_POST['update'])) {
	
  $username1 = mysqli_real_escape_string($db, $_POST['username1']);
   $number1 = mysqli_real_escape_string($db, $_POST['number1']);

   $designation1 = mysqli_real_escape_string($db, $_POST['designation1']);
$certification1 = mysqli_real_escape_string($db, $_POST['certification1']);
  $address1 = mysqli_real_escape_string($db, $_POST['address1']);
  $email1 = mysqli_real_escape_string($db, $_POST['email1']);
   $password1 = mysqli_real_escape_string($db, $_POST['password1']); 
  
  $query = "UPDATE `details` SET `name`='$username1',`number`='$number1',`address`='$address1',`designation`='$designation1',`certification`='$certification1',`email`='$email1',`password`='$password1' where email='$emailid'";
  mysqli_query($db, $query);
 
  }
  

 ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial;
	color:white;
	background-image: url('https://wallpapercave.com/wp/wp2019258.jpg');
}

h1,h2 {
font-family:Courier new;
}
/* Style tab links */
.tablink {
   color:gold;
	background-color:black;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 10px ;
    font-size: 16px;
    width: 8%;
}


.tablink:hover {
    background-color: grey;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: gold;
//    display: none;
    padding: 100px 5px;
    height: 500%;
}
#more {display: none;}
body {
  font: 16px Arial;  
}


</style>

</head>
<body>

<button class="tablink" onclick="openPage('Home', this)"id="defaultOpen"  ><i class="fa fa-home"></i>Home</button>
<?php 
  		include('server.php');
		 $email=$_SESSION['email'];
echo '<form method="post" action="editpro.php" >';
echo '<button class="tablink"  ><i class="fa fa-edit"></i>  Edit Profile</button></form>';

echo'<form method="post" >';
echo'<button class="tablink"  style=" margin-left:1000px;" name="logout" ><i class="fa fa-sign-out"></i>  Log out</button></form>';
?>

<div id="Home" class="tabcontent">
<?php include('server.php'); 
$db = mysqli_connect('localhost', 'root', '', 'employee');

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
  echo '<center><p style="font-size: 40px;font-family: cursive;color:red">Welcome back '.$username.'</p></center>';
echo '<h1 style="font-size: 40px;font-family: cursive;color:red; margin-left:100px;">YOUR PROFILE </h1>';
echo "<h3> Name : $username <br>";
echo "Phone Number : $number <br>";
echo "Address : $address <br>";
echo "Designation : $designation <br>";
echo "Certification : $certification ";

  ?>



 

<script>
function openPage(pageName,elmnt) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        
    }
    document.getElementById(pageName).style.display = "block";

}
document.getElementById("defaultOpen").click();

</script>

     
</body>
</html> 