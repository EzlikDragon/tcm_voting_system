<?php
	$conn = new mysqli('localhost', 'root', '', 'if0_37565517_tcmvotesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>