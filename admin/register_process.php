<?php
include 'includes/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO admin (username, password, firstname, lastname) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $password, $firstname, $lastname);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New admin registered successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>