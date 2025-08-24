<?php
include("includes/conn.php");
session_start(); // Ensure the session is started

// Use the correct session variable for the logged-in voter's ID
$loggedInVoterId = $_SESSION['voter']; // Accessing the correct session variable

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['photo'])) {
    // Check if the file was uploaded without errors
    if ($_FILES['photo']['error'] == 0) {
        // Define the upload directory
        $upload_dir = 'images/'; // Ensure this directory exists and is writable
        $photo_name = basename($_FILES['photo']['name']);
        $upload_file = $upload_dir . $photo_name;

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $upload_file)) {
            // Update the database with the new photo path
            $query = mysqli_query($conn, "UPDATE voters SET photo='$photo_name' WHERE id='$loggedInVoterId'");
            if ($query) {
                // Redirect to home.php on successful upload and database update
                header("Location: home.php");
                exit(); // Stop further execution
            } else {
                echo "<h2>Database update failed: " . mysqli_error($conn) . "</h2>";
            }
        } else {
            echo "<h2>Error moving uploaded file.</h2>";
        }
    } else {
        echo "<h2>Error uploading file: " . $_FILES['photo']['error'] . "</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
</head>
<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full height to center vertically */
            margin: 0;
            font-family: Arial, sans-serif;
        }

        input[type="file"], input[type="submit"]{
            background-color: #ffffff;
            color: #620312;
        }

   
        .update_container {
            text-align:start; /* Center text inside the container */
            margin: 10px 10px;
        }
        form {
            display: inline-block; /* Make the form an inline block */
            margin-bottom: 20px; /* Space below the form */
        }
        input[type="file"], input[type="submit"] {
            display: inline-block; /* Keep the inputs inline */
            margin: 5px; /* Space between inputs */
        }
        img {
            width: 100px;
            height: auto;
            margin-top: 10px; /* Space above the image */
        }
    </style>
<body>
<div class="update_container">  
    <form action="update_profile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" accept="image/*" required>
        <input type="submit" value="Update Photo" name="submit">
    </form>

    <br>
  
</div>
    
</body>
</html>
