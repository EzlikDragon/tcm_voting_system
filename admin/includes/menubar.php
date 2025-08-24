<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>

  .skin-blue .main-header .logo {
    background-color: #113325;
    color: #fff;
    border-bottom: 0 solid transparent;
}

.skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
    background-color: #ffffff;
}

.skin-blue .sidebar a {
    color: #113325;
}

.user-panel>.info>p {
    font-weight: 600;
    margin-bottom: 9px;
    color: #113325;
}
b, strong {
    font-weight: 700;
    color: #ffffff;
}

.btn-success:hover, .btn-success:active, .btn-success.hover {
    background-color: beige;
    color: #113325;
}

.btn-success, .btn-success:active {
    background-color: #113325;
}

.btn-danger:hover, .btn-danger:active, .btn-danger.hover {
  background-color: beige;
  color: #113325;
  border-color: #ffffff;
}
.btn-danger, .btn-danger:active{
  background-color: #740000;
  border-color: #ffffff;
}

.small-box>.inner h3 {
    color: #ffffff;
}

.small-box>.inner {
    padding: 10px;
    background-color: #740000;
}

.small-box>.small-box-footer {
    position: relative;
    text-align: center;
    padding: 3px 0;
    color: #fff;
    color: rgba(255,255,255,0.8);
    display: block;
    z-index: 10;
    background: rgba(0,0,0,0.1);
    text-decoration: none;
    background-color: #113325;
}
.box-header {
    color: #ffffff;
    display: block;
    padding: 10px;
    position: relative;
    background-color: #113325;
}
h3, .h3 {
    font-family: 'Source Sans Pro',sans-serif;
    font-weight: bold;
    color: #113325;
}
.col-xs-12 {
    width: 100%;
    background-color: #740000;
}

.col-xs-12 h3{
    color: #ffffff;
}
.skin-blue .sidebar-menu>li.header {
    color: #ffffff;
    background: #113325;
}

.fa-edit:before, .fa-pencil-square-o:before {
    color: #113325;
}

.btn-info, .btn-info:active {
    background-color: beige;
    color: #113325;
    border-color: black;
}
.btn-info:hover, .btn-info:active, .btn-info.hover {
    background-color: #113325;
    border-color: #740000;

}

.content-header>h1 {
    margin: 0;
    font-size: 24px;
    color: #113325;
    font-weight: bolder;
}

.skin-blue .main-header .logo:hover {
    background-color: #740000;
    color: #fff;
    border-bottom: 0 solid transparent;
}

.skin-blue .main-header .navbar .sidebar-toggle:hover {
    background-color: #740000;
}

.skin-blue .sidebar-menu>li.active>a, 
.skin-blue .sidebar-menu>li.menu-open>a {
    color: #ffffff;
    background-image: url(includes/Images/hover.jpg);
    filter: saturate(20%);
    font-size: larger;
    text-shadow: 2px 2px 3px black;
    transition: background-image 0.5s ease, filter 0.5s ease, font-size 0.5s ease, text-shadow 0.5s ease;
}

.skin-blue .sidebar-menu>li:hover>a {
    background-color: #113325;
    filter: saturate(100%); /* Full saturation on hover */
    font-size: x-large;     /* Slightly larger font on hover */
    text-shadow: 3px 3px 4px black; /* Slightly bigger text shadow */
    transition: background-color 0.5s ease, filter 0.5s ease, font-size 0.5s ease, text-shadow 0.5s ease;
}

    

.small-box>.small-box-footer:hover{
  background-color: beige;
  color: #113325;
}
</style>
<body>
  


<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['firstname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li>
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class=""><a href="votes.php"><span class="glyphicon glyphicon-lock"></span> <span>Votes</span></a></li>
      <li class="header">MANAGE</li>
      <li class=""><a href="voters.php"><i class="fa fa-users"></i> <span>Voters</span></a></li>
      <li class=""><a href="positions.php"><i class="fa fa-tasks"></i> <span>Positions</span></a></li>
      <li class=""><a href="candidates.php"><i class="fa fa-black-tie"></i> <span>Candidates</span></a></li>
      <li class="header">SETTINGS</li>
      <li class=""><a href="ballot.php"><i class="fa fa-file-text"></i> <span>Ballot Position</span></a></li>
      <li class=""><a href="#config" data-toggle="modal"><i class="fa fa-cog"></i> <span>Election Title</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>

</body>
</html>