<?php
session_start();
if (isset($_SESSION['admin'])) {
    header('location: admin/home.php');
}

if (isset($_SESSION['voter'])) {
    header('location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Page | TCM Voting System</title>
            <link rel="icon" type="image/png" href="images/newCMlogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1 class="how-to-vote">How to Vote?</h1>
                <ol>
                    <li>Enter your ID number and the password provided to you.</li>
                    <li>Click the "Login" button to access the voting system.</li>
                    <li>Once logged in, proceed to select your candidates for the following positions:
                        <ul>
                            <li>1 President</li>
                            <li>1 Vice President</li>
                            <li>1 Secretary</li>
                            <li>1 Treasurer</li>
                            <li>1 Auditor</li>
                            <li>2 Public Information Officers</li>
                            <li>4 Senators</li>
                        </ul>
                    </li>
                    <li>Submit your vote to finalize the process.</li>
                </ol>
                <button type="button" id="WatchBtn">Watch Tutorial Now!</button>
            </form>

            <!-- Modal for Video -->
            <div id="videoModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <iframe id="tutorialVideo" width="600" height="400" src="https://www.youtube.com/embed/PlpM2LJWu-s" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="form-container sign-in">
            <form action="login.php" method="POST">
            <h1 class="sign-in">Sign In</h1>

             
                <input type="text" name="voter" placeholder="ID Number" required>
                <input type="password" name="password" placeholder="Password" required>
                <img src="images/newCMlogo.png" alt="BSIT" class="dept_icon"  width="50px" height="auto"></a>
                <button type="submit" name="login">Sign In</button>
            </form>

            <?php
            if (isset($_SESSION['error'])) {
                echo "
                    <div class='callout callout-danger text-center mt20'>
                        <p>".$_SESSION['error']."</p> 
                    </div>
                ";
                unset($_SESSION['error']);
            }
            ?>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1 class="welcome-back">Quick Voting Tips</h1>
                    <ul>
                    <li>Review Platforms: Click "Platform" to read about each candidate.</li>
                    <li>Follow Limits: Pay attention to how many candidates you can vote for per position.</li>
                    <li>Double-Check: Use "Preview" to review your selections before submitting.</li>
                    <li>Reset if Needed: Use the "Reset" button to change your choices.</li>
                    <li>Submit & Confirm: Once happy, click "Submit" and look for a success message.</li>
                    <li>Vote Securely: Your vote is private and protected.</li>
                    </ul>

                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1 class="hello-students">Hello, Students!</h1>
                    <p>Welcome to the TCM Student Voting System! Log in with your student credentials to access the ballot and cast your vote. Let’s ensure a fair and transparent election process.</p>
                    <button class="hidden" id="how">How to Vote?</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
