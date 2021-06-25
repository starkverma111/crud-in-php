<?php
// Turn off all error reporting
error_reporting(0);

require_once "config.php";



$id = 	mysqli_real_escape_string($link, $_GET['id']);
	
	$query = "DELETE FROM curdphp WHERE id='$id'";
		$data = mysqli_query($link, $query);
		if($data)
		{
			echo "deleted from database</h2> ";
			header('Location: read.php');
		}
		else
		{
			
			echo "Error to delete ";
		}

?>