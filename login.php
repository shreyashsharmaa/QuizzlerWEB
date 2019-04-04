<?php
 require('db_connect.php');
 
if(isset($_POST['login'])){
if (isset($_POST['username']) and isset($_POST['password1'])){

// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password1'];
session_start();
// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `signupdetails` WHERE uname='$username' and psw='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
header("Location: welcome.html");
if (isset($_POST['remember'])){
				//set up cookie
				setcookie("user", $row['uname'], time() + (86400 * 30)); 
				setcookie("pass", $row['psw'], time() + (86400 * 30)); 
			}
 
			$_SESSION['id']=$row['userid'];

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
header("Location:Loginui.php");
}
}
}
else
{$_SESSION['message']="Please Login!";}
?>
