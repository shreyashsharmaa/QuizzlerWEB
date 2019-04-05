<?php
 $mysqli = new mysqli('localhost', 'root','','quizzler');

		if($mysqli->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
		}
 
if(isset($_POST['login'])){
//if (isset($_POST['username']) and isset($_POST['password1'])){

// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password1'];
session_start();
//echo $username;
// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT userid,uname,psw FROM `signupdetails` WHERE uname='$username' and psw='$password'";

$result = $mysqli->query($query);
$count = $result->num_rows;
$row=$result->fetch_assoc();
//echo $row['uname'];

if ($count >0){

//echo "Login Credentials verified";
header("Location: welcome.html");
if (isset($_POST['remember'])){
				//set up cookie
				setcookie("user", $row['uname'], time() + (86400 * 30)); 
				setcookie("pass", $row['psw'], time() + (86400 * 30)); 
			}
 
			$_SESSION['id']=$row['uname'];

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
header("Location:Loginui.php");
}
}

else
{$_SESSION['message']="Please Login!";}
?>
