<?php
 require('db_connect.php');

if (isset($_POST['username']) and isset($_POST['password1'])){

// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password1'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `signupdetails` WHERE uname='$username' and psw='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
header("Location: welcome.html");

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
?>
