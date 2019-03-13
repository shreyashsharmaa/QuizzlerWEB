	<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','quizzler');

		if($mysqli->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
		}
		
		$query = "INSERT INTO signupdetails VALUES 
('$username','$email','$password1')";
		$insert_row = $mysqli->query($query);
		if($insert_row){
		  header("location:welcome.html");
		}
		else{
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>