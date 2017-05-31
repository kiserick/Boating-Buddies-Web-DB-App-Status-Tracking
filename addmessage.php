<?php 

	require_once 'db.php'; // The mysql database connection script
	$message=$_REQUEST['msg'];
	$query="INSERT INTO stateTable(message)  
				VALUES ('$message')";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

?>