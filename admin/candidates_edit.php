<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $conn->real_escape_string($_POST['firstname']);
		$lastname = $conn->real_escape_string($_POST['lastname']);
		$position = $_POST['position'];
		$platform = $conn->real_escape_string($_POST['platform']); // Escape platform
		$course = $conn->real_escape_string($_POST['course']);
		$year = $conn->real_escape_string($_POST['year']);
		
		$sql = "UPDATE candidates SET course = '$course', year = '$year', firstname = '$firstname', lastname = '$lastname', position_id = '$position', platform = '$platform' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: candidates.php');

?>
