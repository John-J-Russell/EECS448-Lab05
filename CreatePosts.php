<?php

	
	$user=$_POST["username"];
	$content=$_POST["postcontent"];
	
	if($content=="")
	{
		echo "Post must contain actual content, not just be blank. <br> I'll even accept a series of spaces, just not an empty string please.<br>";
		exit();
	}
	
	echo "you said $user <br>";
	echo "Content of post was: \"" . $content . "\" <br>";
	
	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jjrussel", "Critic05", "jjrussel");
	
	
	/* check connection */
	if ($mysqli->connect_errno) {
		//printf("Connect failed: %s\n", $mysqli->connect_error);
		echo "Could not connect";
		exit();
	}
	
	//These series of quotes and escape quotes hurt to look at
	$query = "INSERT INTO Posts (content, author_id)
	VALUES ( \"" . $content . "\", \"" . $user . "\")";
	
	if ( $mysqli->query($query) === false ) //triple equal sign?
	{
		//do things here?
		echo "Post not successfully added <br>Author name is probably invalid?";
	}
	else
	{
		echo "Post added to database!";
	}
	
	
?>