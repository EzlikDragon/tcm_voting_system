<?php
include 'includes/session.php'; // Make sure to include your session and database connection

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT firstname, lastname, photo, course, year, platform FROM candidates WHERE id = '$id'";
    $query = $conn->query($sql);
    
    if ($query->num_rows > 0) {
        $candidate = $query->fetch_assoc();
        echo json_encode(['success' => true, 'firstname' => $candidate['firstname'], 'lastname' => $candidate['lastname'], 'photo' => $candidate['photo'], 'course' => $candidate['course'], 'year' => $candidate['year'], 'platform' => $candidate['platform']]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>
