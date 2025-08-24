<?php
session_start();

// Redirect to home.php if the user is already logged in
if (isset($_SESSION['admin'])) {
    header('Location: home.php');
    exit();
}

// Include header
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Login | TCM Admin</title>
    <link rel="stylesheet" href="login.css">


</head>
<body>
    <div class="wrapper">
        <img class="cmlogo" img  src="/images/newCMlogo.png">
        <h1>Admin Login</h1>

        <form action="login.php" method="POST">
            <div>
                <label for="username-input">Username</label>
                <input type="text" name="username" id="username-input" required>
            </div>
            <div>
                <label for="password-input">Password</label>
                <input type="password" name="password" id="password-input" required>
            </div>
            <button type="submit" name="login">Login</button>

        </form>

        <?php
        // Display error message if set
        if (isset($_SESSION['error'])) {
            echo "
                <div class='alert alert-danger'>
                    " . htmlspecialchars($_SESSION['error']) . "
                </div>
            ";
            unset($_SESSION['error']);
        }
        ?>
            <p class="letsgo">Would you like a brief tutorial for administrators? <a href="signup.php">Let’s get started!</a></p>
            <img class="slicky" img  src="/images/SlickyTech.png">
    </div>
    	<script>document.addEventListener("mousemove", function (e) {
		let body = document.querySelector('body');
		let bubbles = document.createElement('span');
		bubbles.style.left = -75 + e.offsetX+'px';
		bubbles.style.top = -75 + e.offsetY+'px';
		
		body.appendChild(bubbles);
		setTimeout(function(){
			bubbles.remove();
		} ,1500)
	})</script>

    <?php include 'includes/scripts.php'; ?>
</body>
</html>