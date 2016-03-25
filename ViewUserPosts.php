<?php

	$author_id = $_POST["selectedUser"];

	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jjrussel", "Critic05", "jjrussel");
	
	
	/* check connection */
	if ($mysqli->connect_errno) {
		//printf("Connect failed: %s\n", $mysqli->connect_error);
		echo "Could not connect";
		exit();
	}
	
	
	
	$query = "SELECT post_id, content FROM Posts ORDER by post_id";
	
	if ( $result=$mysqli->query($query) ) 
	{
		echo "Post id# and content of selected user \"" . $author_id . "\" are: <br>";
		while($row=$result->fetch_assoc())
		{
			echo $row[post_id] . " | " . $row[content] . "<br>";
		}
		$result->free();
	}
	else
	{
		echo "Didn't work.";
	}
	
	$mysqli->close();

?>