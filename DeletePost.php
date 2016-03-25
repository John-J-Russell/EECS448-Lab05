<?php

	$checked = $_POST["check_list"];

	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jjrussel", "Critic05", "jjrussel");
	
	
	/* check connection */
	if ($mysqli->connect_errno) {
		//printf("Connect failed: %s\n", $mysqli->connect_error);
		echo "Could not connect";
		exit();
	}
	
	for($x=0; $x< count($checked) ; $x++)
	{
		$query = "DELETE FROM Posts WHERE post_id = \"" . $checked[$x] . "\" ";
		if( $result=$mysqli->query($query))
		{
			echo "<br>Deleted post number:  " . $checked[$x] ;
			
		}
		//$result->free();
		else
		{
			echo "<br>Something went wrong <br>";
		}
	}
	 //idk finish later
	/*
	if ( $result= ) 
	{
		echo "Post id# and content of selected user \"" . $author_id . "\" are: <br>";
		while($row=$result->fetch_assoc())
		{
			echo $row[post_id] . " | " . $row[content] . "<br>";
		}
		
	}
	else
	{
		echo "Didn't work.";
	}
	*/
	$mysqli->close();


?>