
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="hero.css"> <!-- Link to home.css -->
    <!-- Other CSS links -->

</head>
<div class="hero-section">
    <div class="hero-content">
	<img src="<?php echo (!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg' ?>" class="user-image" alt="User Image" style="width: 150px; height: auto; border-radius: 50%;">
	<h1 class="hidden-xs">Welcome, <?php echo $voter['firstname'].' '.$voter['lastname']; ?> to</h1>
        <h1 class="hero-title">TCM Student Voting System</h1>
        <p class="hero-subtitle">Elevating student elections with a secure, intuitive platform. Your voice, your vote, your future.</p>
        <button class="cta-button">Get Started</button>
    </div>
</div>

</body>
</html>