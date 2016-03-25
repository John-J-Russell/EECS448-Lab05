<?php

	$author_id = $_POST["selectedUser"];

	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jjrussel", "Critic05", "jjrussel");
	
	
	/* check connection */
	if ($mysqli->connect_errno) {
		//printf("Connect failed: %s\n", $mysqli->connect_error);
		echo "Could not connect";
		exit();
	}
	
	
	
	$query = "SELECT post_id, content FROM Posts WHERE author_id = \"" . $author_id . "\" ORDER by post_id";
	
	if ( $result=$mysqli->query($query) ) 
	{
		echo "Post id# and content of selected user \"" . $author_id . "\" are: <br>";
		echo "<table style=\"width:100%\">
				<tr>
					<td> Post ID</td>
					<td> Post Content</td>
				</tr>";
		while($row=$result->fetch_assoc())
		{
			echo "<tr> <td> " . $row[post_id] . " </td> <td> " . $row[content] . "</td> </tr>";
		}
		echo "</table>";
		$result->free();
	}
	else
	{
		echo "Didn't work.";
	}
	
	$mysqli->close();
	
	echo "<br> <br> <a href=\"ViewUserPosts.html\">Return to last page</a>";

?>