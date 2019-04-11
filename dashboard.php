<?php
	$mysqli = new mysqli('localhost', 'root','','quizzler');

		if($mysqli->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
		}

	session_start();

	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('Loginui.php');
	}
	$id=$_SESSION['id'];
	$query = "SELECT * from signupdetails WHERE uname='$id'";

$result = $mysqli->query($query);


$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>DashBoard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}


body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

#profileImage
{
  background:black;
  border-radius:50%;
  height:200px;
  width:200px;


}



.header {
  padding: 30px;
  text-align: center;
  background: linear-gradient( 30deg ,rgb(253, 156, 0),rgb(253, 156, 0),yellow);
  color: black;
}

.header h1 {
  font-size: 75px;
}

.navbar {
  overflow: hidden;
  background-color: black;
}

.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

.navbar a.right {
  float: right;
}

.navbar a:hover {
  background-color: rgb(253, 156, 0);
  color: black;
}


.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}


.side {
  -ms-flex: 32%; /* IE10 */
  flex: 20%;
  background-color: #f1f1f1;
  padding: 20px;
}


.main {
  -ms-flex: 70%;
  flex: 70%;
  background-color: white;
  padding: 20px;
}

.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 50px;

}


.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}


@media screen and (max-width: 700px) {
  .row {
    flex-direction: column;
  }
}


@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header" id="grad1">
  <h1>QUIZZLER</h1>
  <p>Your personal dashboard</p>
</div>

<div class="navbar">
  <a href="welcome.html">Home</a>
  <a href="logout.php" class="right">Log Out</a>
</div>

<div class="row">
  <div class="side">
    <h2> WELCOME !!</h2>

    <h3>Email:</h3>
    <p id="email"> <?php echo $row['email'];?></p>
    <h3>Username:</h3>
    <p id="email"> <?php echo $_SESSION['id']?></p>
  </div>
  <div class="main">
    <h2>ABOUT QUIZZLER:</h2>
    <p>The website “Quizzler” is a general trivia quiz website. It is basically to enhance the user’s knowledge in different fields like general knowledge, science , arts , history , geography , politics or random question from any general topic the user has to login if already registered by a username and password combination , or signup by email id . The user is then asked to select the topic of choice and the difficulty level. The user’s each  quiz result will be saved and user can view these on personal dashboard page where his personal profile and details will be displayed. After playing , the user can log out.
		</p>

		<h3> Important links </h3>

		<p> Github link  for web :</p><a href="https://github.com/shreyashsharmaa/QuizzlerWEB"> Click here </a>

		<p> The Android version of the Quizzler is also available :</p>
		<p> Github link :</p><a href="https://github.com/shreyashsharmaa/QuizzlerAndroid "> Click here </a>



  </div>
</div>

<div class="footer">
  <h3> All rights reserved®</h3>
</div>

</body>
</html>
