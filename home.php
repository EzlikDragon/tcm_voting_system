<?php 
include 'includes/session.php'; 
include 'includes/header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $parse['election_title']; ?></title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<style>
    body{
        color: #ffffff;
    }
</style>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <?php include 'includes/navbar.php'; ?>
    <?php include 'hero.php'; ?>

    <div class="content-wrapper">
        <div class="container">
            <!-- Main content -->
            <section class="content">
                <?php
                $parse = parse_ini_file('admin/config.ini', FALSE, INI_SCANNER_RAW);
                $title = $parse['election_title'];
                ?>
                <h1 class="page-header text-center title"><b><?php echo strtoupper($title); ?></b></h1>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <?php
                        // Handle session messages
                        if (isset($_SESSION['error']) && is_array($_SESSION['error'])) {
                            echo "<div class='alert alert-danger alert-dismissible'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                    <ul>";
                            foreach ($_SESSION['error'] as $error) {
                                echo "<li>".$error."</li>";
                            }
                            echo "</ul></div>";
                            unset($_SESSION['error']);
                        }
                        if (isset($_SESSION['success'])) {
                            echo "<div class='alert alert-success alert-dismissible'>
                                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                    <h4><i class='icon fa fa-check'></i> Success!</h4>
                                    ".$_SESSION['success']."
                                  </div>";
                            unset($_SESSION['success']);
                        }
                        ?>

                        <div class="alert alert-danger alert-dismissible" id="alert" style="display:none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <span class="message"></span>
                        </div>

                        <?php
                        // Check if the voter has already voted
                        $sql = "SELECT * FROM votes WHERE voters_id = '".$voter['id']."'";
                        $vquery = $conn->query($sql);
                        if ($vquery->num_rows > 0) {
                            echo "<div class='text-center'>
                                    <h3>You have already voted for this election.</h3>
                                    <a href='#view' data-toggle='modal' class='btn btn-flat btn-primary btn-lg'>View Ballot</a>
                                  </div>";
                        } else {
                            ?>
                            <!-- Voting Ballot -->
                            <form method="POST" id="ballotForm" action="submit_ballot.php">
                                <?php
                                include 'includes/slugify.php';
                                $candidate = '';

                                $sql = "SELECT * FROM positions ORDER BY priority ASC";
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                    $sql = "SELECT * FROM candidates WHERE position_id='".$row['id']."'";
                                    $cquery = $conn->query($sql);
                                    while ($crow = $cquery->fetch_assoc()) {
                                        $slug = slugify($row['description']);
                                        $checked = '';

                                        if (isset($_SESSION['post'][$slug])) {
                                            $value = $_SESSION['post'][$slug];
                                            if (is_array($value) && in_array($crow['id'], $value)) {
                                                $checked = 'checked';
                                            } elseif ($value == $crow['id']) {
                                                $checked = 'checked';
                                            }
                                        }

                                        $input = ($row['max_vote'] > 1) ? 
                                            '<input type="checkbox" class="flat-red '.$slug.'" name="'.$slug."[]".'" value="'.$crow['id'].'" '.$checked.'>' : 
                                            '<input type="radio" class="flat-red '.$slug.'" name="'.slugify($row['description']).'" value="'.$crow['id'].'" '.$checked.'>';
                                        
                                        $image = !empty($crow['photo']) ? 'images/'.$crow['photo'] : 'images/profile.jpg';
                                        $candidate .= '
                                            <li>
                                                '.$input.'
                                                <button type="button" class="btn btn-primary btn-sm btn-flat clist platform" 
                                                        data-platform="'.$crow['platform'].'" 
                                                        data-fullname="'.$crow['firstname'].' '.$crow['lastname'].'"
                                                        data-candidate-id="'.$crow['id'].'"> <!-- Add candidate ID -->
                                                    <i class="fa fa-search"></i> Platform
                                                </button>
                                                <img src="'.$image.'" height="100px" width="100px" class="clist">
                                                <span class="cname clist">'.$crow['firstname'].' '.$crow['lastname'].'</span>
                                            </li>';
                                    }

                                    $instruct = ($row['max_vote'] > 1) ? 'You may select up to '.$row['max_vote'].' candidates' : 'Select only one candidate';
                                    echo '
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="box box-solid" id="'.$row['id'].'">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title"><b>'.$row['description'].'</b></h3>
                                                    </div>
                                                    <div class="box-body">
                                                        <p>'.$instruct.'
                                                            <span class="pull-right">
                                                                <button type="button" class="btn btn-success btn-sm btn-flat reset" data-desc="'.slugify($row['description']).'"><i class="fa fa-refresh"></i> Reset</button>
                                                            </span>
                                                        </p>
                                                        <div id="candidate_list">
                                                            <ul>'.$candidate.'</ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                    $candidate = '';
                                }	
                                ?>
                                <div class="text-center">
                                    <button type="button" class="btn btn-success btn-flat" id="preview"><i class="fa fa-file-text"></i> Preview</button> 
                                    <button type="submit" class="btn btn-primary btn-flat" name="vote"><i class="fa fa-check-square-o"></i> Submit</button>
                                </div>
                            </form>
                            <!-- End Voting Ballot -->
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/ballot_modal.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
<script>
    $(document).ready(function(){
        $('.cta-button').click(function(e) {
            e.preventDefault(); // Prevent default behavior
            console.log("CTA button clicked"); // Debug message
            $('html, body').animate({
                scrollTop: $('.content-wrapper').offset().top // Adjust this to the ID of your target section
            }, 1000); // Duration of the animation
        });
    });
    $(function(){
    // Initialize iCheck for custom checkbox/radio
    $('.content').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });

    // Reset button functionality
    $(document).on('click', '.reset', function(e){
        e.preventDefault();
        var desc = $(this).data('desc');
        $('.' + desc).iCheck('uncheck'); // Uncheck all inputs for this position
    });

    // Platform modal handling
    $(document).on('click', '.platform', function(e){
        e.preventDefault();
        $('#platform').modal('show');
        var platform = $(this).data('platform');
        var fullname = $(this).data('fullname');
        $('.candidate').html(fullname);
        $('#plat_view').html(platform);
    });
});
</script>
</body>
</html>
