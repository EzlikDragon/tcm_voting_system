<?php
session_start();
include 'includes/conn.php';

function log_event($user_id, $user_type, $event_type, $ip_address) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO logs (user_id, user_type, event_type, ip_address) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $user_type, $event_type, $ip_address);
    $stmt->execute();
}

if (isset($_POST['login'])) {
    $voter = $_POST['voter'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM voters WHERE voters_id = ?");
    $stmt->bind_param("s", $voter);
    $stmt->execute();
    $query = $stmt->get_result();

    if ($query->num_rows < 1) {
        $_SESSION['error'] = 'Cannot find voter with the ID';
        log_event(0, 'voter', 'failed_login', $_SERVER['REMOTE_ADDR']);
    } else {
        $row = $query->fetch_assoc();
        if ($password == $row['password']) {
            $_SESSION['voter'] = $row['id']; // Use 'id' for session value
            log_event($row['id'], 'voter', 'login', $_SERVER['REMOTE_ADDR']);
            header('location: home.php'); // Directly redirect to home.php
            exit();
        } else {
            $_SESSION['error'] = 'Incorrect password';
            log_event(0, 'voter', 'failed_login', $_SERVER['REMOTE_ADDR']);
        }
    }
} else {
    $_SESSION['error'] = 'Input voter credentials first';
}

header('location: index.php');
exit();
?>
