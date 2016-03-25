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
	
	$mysqli->close();

	echo "<br> <br> <a href=\"DeletePost.html\">Return to last page</a>";

?>