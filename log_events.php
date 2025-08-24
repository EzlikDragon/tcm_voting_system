<?php
// Ensure session and database connection are available
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'includes/conn.php';

/**
 * Logs an event into the logs table.
 * 
 * @param int|null $user_id The ID of the user associated with the event, or NULL for failed logins.
 * @param string $user_type The type of user ("voter", "admin", etc.).
 * @param string $event_type The type of event ("login", "failed_login", etc.).
 * @param string $ip_address The IP address from where the event originated.
 */
function log_event($user_id, $user_type, $event_type, $ip_address) {
    global $conn;

    try {
        // Prepare the SQL query to insert the log
        $stmt = $conn->prepare("INSERT INTO logs (user_id, user_type, event_type, ip_address, timestamp) 
                                VALUES (?, ?, ?, ?, NOW())");

        // Handle NULL for failed login attempts
        if ($user_id === 0) {
            $user_id = NULL;
        }

        $stmt->bind_param("isss", $user_id, $user_type, $event_type, $ip_address);

        // Execute the statement
        if (!$stmt->execute()) {
            throw new Exception("Log event failed: " . $stmt->error);
        }

        $stmt->close();
    } catch (Exception $e) {
        // Optionally, log errors to a file for debugging
        error_log($e->getMessage(), 3, "error_log.log");
    }
}
?>
