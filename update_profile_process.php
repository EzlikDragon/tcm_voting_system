<?php
session_start();
include 'includes/conn.php'; // Include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture the values from the POST request
    $id = $_POST['id'];
    $voters_id = $_POST['voters_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $course = $_POST['course'];    
    $year = $_POST['year'];
    $password = $_POST['password'];
    $photo = $_FILES['photo'];

    // Debugging: Log values for verification
    error_log("Received data: ID: $id, Voter ID: $voters_id, First Name: $firstname, Last Name: $lastname, Course: $course, Year: $year, Password: $password");

    // Start building the update query
    $update_query = "UPDATE voters SET 
        voters_id = '$voters_id', 
        firstname = '$firstname', 
        lastname = '$lastname', 
        course = '$course', 
        year = '$year'";

    // Check if password is provided and not empty
    if (!empty($password)) {
        $update_query .= ", password = '$password'"; // Remember to hash the password if using in production
    }

    // Handle photo upload
    if ($photo['error'] == UPLOAD_ERR_OK) {
        $target_dir = "images/"; // Specify the images directory
        $target_file = $target_dir . basename($photo["name"]);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($photo['tmp_name'], $target_file)) {
            $update_query .= ", photo = '$target_file'";
        } else {
            $_SESSION['error'] = "Sorry, there was an error uploading your photo.";
            header('location: update_profile.php?id=' . $id);
            exit();
        }
    }

    // Complete the SQL query
    $update_query .= " WHERE id = '$id'";

    // Debugging: Log the complete SQL query for verification
    error_log("SQL Query: " . $update_query);

    // Execute the query
    if ($conn->query($update_query) === TRUE) {
        $_SESSION['success'] = "Profile updated successfully";
    } else {
        $_SESSION['error'] = "Error updating profile: " . $conn->error; // Capture any SQL errors
    }

    // Redirect to the profile page or wherever appropriate
    header('location: home.php'); // Redirect after processing
    exit();
}
?>
