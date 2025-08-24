
<?php
/*
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$voters_id = $_POST['voters_id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = $_POST['password'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		//generate voters id
		$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$voter = substr(str_shuffle($set), 0, 15);

		$sql = "INSERT INTO voters (voters_id, password, firstname, lastname, photo) VALUES ('$voter', '$password', '$firstname', '$lastname', '$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: voters.php');
*/




include 'includes/session.php';
include 'includes/conn.php';

if (isset($_POST['add'])) {
    $voter_id = $_POST['voters_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $filename = $_FILES['photo']['name'];

    // ✅ Validate Voter ID format
    if (!preg_match('/^\d{6,15}$/', $voter_id)) {
        $_SESSION['error'] = 'Voter ID must be 6 to 15 digits.';
        header('location: voters.php');
        exit();
    }

    // ✅ Check if Voter ID already exists
    $check = $conn->prepare("SELECT * FROM voters WHERE voters_id = ?");
    $check->bind_param("s", $voter_id);
    $check->execute();
    $result = $check->get_result();
    if ($result->num_rows > 0) {
        $_SESSION['error'] = 'Voter ID already exists.';
        header('location: voters.php');
        exit();
    }

    // ✅ Save uploaded photo if present
    if (!empty($filename)) {
        $allowed_types = ['image/jpeg', 'image/png', 'image/jpg'];
        if (in_array($_FILES['photo']['type'], $allowed_types)) {
            move_uploaded_file($_FILES['photo']['tmp_name'], '../images/' . $filename);
        } else {
            $_SESSION['error'] = 'Invalid image format.';
            header('location: voters.php');
            exit();
        }
    }

    // ✅ Hash password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // ✅ Insert using prepared statement
    $sql = "INSERT INTO voters (voters_id, password, firstname, lastname, course, year, photo)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sssssis", $voter_id, $hashed_password, $firstname, $lastname, $course, $year, $filename);
        if ($stmt->execute()) {
            $_SESSION['success'] = 'Voter added successfully';
        } else {
            $_SESSION['error'] = 'Execution failed: ' . $stmt->error;
        }
    } else {
        $_SESSION['error'] = 'SQL prepare failed: ' . $conn->error;
    }
} else {
    $_SESSION['error'] = 'Fill up add form first';
}

header('location: voters.php');
exit();