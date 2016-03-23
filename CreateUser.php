<?php
	
	$user=$_POST["username"];
	
	echo "you said $user <br>";
	
	
	if($user=="")
	{
		echo "Invalid entry, name cannot be blank";
		exit();
	}
	
	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jjrussel", "Critic05", "jjrussel");
	
	/* check connection */
	if ($mysqli->connect_errno) 
	{
		echo "Could not connect";
		exit();
	}

	$query = "INSERT INTO Users (user_id) 
	VALUES ( \"" . $user . "\" )";
	
	if ( $mysqli->query($query) === false ) //triple equal sign?
	{
		echo "User not successfully added <br>Name is already taken.";
	}
	else
	{
		echo "User added to database!";
	}
	
	$mysqli->close();
?>