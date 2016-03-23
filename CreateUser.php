<?php

	//stuff goes here
	echo "Is this working at all?";
	
	$user=$_POST["username"];
	
	if($user=="")
	{
		echo "Invalid entry, name cannot be blank";
		exit();
	}
	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jjrussel", "Critic05", "jjrussel");
	
	/* check connection */
	if ($mysqli->connect_errno) {
		//printf("Connect failed: %s\n", $mysqli->connect_error);
		echo "Could not connect";
		exit();
	}

	$query = "INSERT INTO Users (user_id) VALUES ( $user )";
	
	if ( $mysqli->query($query) == true )
	{
		//do things here?
		echo "User successfully added";
	}
	else
	{
		echo "User name not valid";
	}
	
?>