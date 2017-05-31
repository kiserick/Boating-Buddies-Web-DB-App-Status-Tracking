<?php 

	require_once 'db.php'; // The mysql database connection script
	$query="select * from stateTable ORDER BY id DESC LIMIT 5";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$arr = array();
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo $row['message'].",";
		}
	}

	# JSON-encode the response
	
?>