	<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','quizzler');

		if($mysqli->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
		}
		
		$query = "INSERT INTO signupdetails VALUES 
(0,'$username','$email','$password1')";
echo $query;
		$insert_row = $mysqli->query($query);
		if($insert_row){
		  header("location:welcome.html");
		}
		else{
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>