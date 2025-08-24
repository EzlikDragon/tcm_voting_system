<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

.btn.btn-flat:active {
    background-color: #740000; /* Turns red when clicked */
}
    body {
      background-color: #113325;
    }
    .content-wrapper {
      background-color: #113325;
    }
    b {
      color: white;
    }
    .content {
      min-height: 250px;
      margin-right: auto;
      margin-left: auto;
    }
    .box-body {
      background-color: #113325;
      color: white;
    }
    .box-header {
      background-color: white;
      color: #113325;
    }
    .box-title b {
      color: #113325;
      font-size: 30px;
    }
    .cta-button {
      padding: 15px 30px;
      background-color: #113325;
      color: white;
      font-size: 1.2rem;
      font-weight: 600;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .cta-button:hover {
      background-color: white;
      color: #113325;
      transform: scale(1.05);
    }
    .navbar-toggle {
      display: block; /* Ensure it's always displayed */
    }
    .btn-success {
      background-color: #ff0000;
      border-color: #ffffff;
    }
    .btn-primary {
      background-color: #ffffff;
      border-color: #ffffff;
      color: #113325;
      font-weight: 600;
    }
    .modal-content {
      padding: 20px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: white;
      text-align: center;
      -webkit-box-shadow: 0 2px 3px rgba(0,0,0,0.125);
      box-shadow: 0 2px 3px rgba(0,0,0,0.125);
    }
  </style>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>

<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="#" class="navbar-brand"><b>TCM</b> Student Voting System</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <?php if (isset($_SESSION['student'])): ?>
            <li><a href='index.php'>HOME</a></li>
            <li><a href='transaction.php'>TRANSACTION</a></li>
          <?php endif; ?>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="display: none;" id="user-nav">
          <li class="logout-button">
            <a href="logout.php"><i class="fa fa-sign-out"></i> LOGOUT</a>
          </li>
          <li class="update-profile-button">
            <a href="#" id="update-profile-link" data-id="<?php echo $voter['id']; ?>"><i class="fa fa-camera"></i> Update Photo</a>
          </li>
        </ul>
      </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="user user-menu">
            <a href="">
              <span class="" style="font-size: 12px;"><?php echo $voter['firstname'] . ' ' . $voter['lastname']; ?></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div id="update-profile-container" style="display: none;"></div> <!-- Added container for AJAX content -->

<script>
$(document).ready(function() {
    $(".navbar-toggle").click(function() {
        var isExpanded = $(this).attr('aria-expanded') === 'true';
        $(this).attr('aria-expanded', !isExpanded);
        $("#user-nav").toggle(); // Toggle the visibility of the logout and update photo buttons
    });

    $("#update-profile-link").click(function(e) {
        e.preventDefault(); // Prevent the default link behavior
        var voterId = $(this).data('id'); // Get the voter ID

        // Load the update_profile.php content via AJAX
        $("#update-profile-container").load("update_profile.php", { id: voterId }, function(response, status, xhr) {
            if (status == "error") {
                var msg = "Sorry but there was an error: ";
                $("#update-profile-container").html(msg + xhr.status + " " + xhr.statusText);
            } else {
                $("#update-profile-container").show(); // Show the container with the loaded content
            }
        });
    });
});
</script>

</body>
</html>
