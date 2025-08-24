<?php
// Database connection parameters
$servername = 'localhost'; // Change to your server name
$username = 'root'; // Change to your database username
$password = ''; // Change to your database password
$dbname = 'votesystem'; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all users
$sql = "SELECT id, password FROM voters";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop through each user
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $plaintextPassword = $row['password']; // Current plaintext password

        // Hash the password
        $hashedPassword = password_hash($plaintextPassword, PASSWORD_DEFAULT);

        // Update the password in the database
        $updateSql = "UPDATE voters SET password = ? WHERE id = ?";
        $stmt = $conn->prepare($updateSql);
        $stmt->bind_param("si", $hashedPassword, $id); // 'si' means string and integer
        $stmt->execute();
    }
    echo "All passwords have been hashed and updated successfully.";
} else {
    echo "No users found.";
}

// Close the connection
$conn->close();
?>