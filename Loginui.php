 <?php session_start();?>
<html>
<head>
  <link rel="stylesheet" href="style2.css">
  <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
<title>Login</title>
<script>
function validate(){
	var uname=document.forms["loginForm"]["username"].value;
	var psw=document.forms["loginForm"]["password1"].value;
	if(uname=="" ||psw=="")
	{alert("All feilds are required");
  return false;
	}return true;
	    
	}
</script>
</head>


<body>


  <div   id="logoLogin" class="header">
    <img src="quizzler-logo.png" alt="logoImage" style="text-align:center;margin-top:30%;margin-left:10%;" width="70%" >
  </div>

<div id="login-Box" >
    <form id="loginForm" onsubmit="return validate()"  action="login.php" method="post">
    <h1> Login </h1><br>
   <input  id="username" type="text" name="username"   id="username" placeholder="Username"><br>
   <input id="password1" type="password" name="password1"  id="password1" placeholder="Password"><br>
   <input type="checkbox" name="remember" value="1"   >Remember me<br>
   <input id="loginButton" type="submit" value="Login" name="login" >
 </form>
      </div>
	  <span>
	  <?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
	</span>
	</body>
</html>
<?php

       
	if(isset($_COOKIE['username'])||isset($_COOKIE['password']))
	{ $email = $_COOKIE['username'];
      
      echo "<script >
		document.getElementById('username').value='$email';
		
        
	</script>";
	}
    
	?>
