<?php


	$mysqli = new mysqli("mysql.eecs.ku.edu", "jjrussel", "Critic05", "jjrussel");
	
	
	/* check connection */
	if ($mysqli->connect_errno) {
		//printf("Connect failed: %s\n", $mysqli->connect_error);
		echo "Could not connect";
		exit();
	}
	
	
	//These series of quotes and escaped quotes hurt to look at
	$query = "SELECT user_id FROM Users ORDER by user_id";
	
	if ( $result=$mysqli->query($query) ) //triple equal sign?
	{
		echo "All current registered users are as follows: <br>";
		while($row=$result->fetch_assoc())
		{
			echo "<br> " . $row[user_id];
		}
		$result->free();
	}
	else
	{
		echo "Didn't work.";
	}
	
	$mysqli->close();

	echo "<br> <br> <a href=\"AdminHome.html\">Return to Admin Home</a>";

?>