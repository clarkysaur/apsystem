<?php
	$conn = new mysqli('localhost', 'dev', 'dev', 'apsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>
