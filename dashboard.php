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
    <h2>About Me</h2>

    <div  style="padding-left:30px;"><img id=profileImage src="#"></div>
    <h2>Bio</h2>

    <p>About me  ,About meAbout meAbout meAbout meAbout meAbout meAbout meAbout meAbout meAbout me</p>
    <h3>Email:</h3>
    <p id="email"> <?php echo $row['email'];?></p>
    <h3>Username:</h3>
    <p id="email"> <?php echo $_SESSION['id']?></p>
  </div>
  <div class="main">
    <h2>Previous Quizes : </h2>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>About me  ,About meAbout meAbout meAbout meAbout meAbout meAbout meAbout meAbout meAbout me</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>About me  ,About meAbout meAbout meAbout meAbout meAbout meAbout meAbout meAbout meAbout me.</p>
  </div>
</div>

<div class="footer">
  <h3> All rights reserved®</h3>
</div>

</body>
</html>
