<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
<!-- Load Require CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Font CSS -->
<link href="assets/css/boxicon.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<!-- Load Tempalte CSS -->
<link rel="stylesheet" href="assets/css/templatemo.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/custom.css">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/profile.css">

</head>
<body>

<?php include("navbar.php");?>

<div class="container">
<div id="user-profile-2" class="user-profile">
<div class="tabbable">
      <ul class="nav nav-tabs padding-18">
        <li class="active">
            <a class="nav-link btn-outline-primary rounded-pill px-3" href="edit.php">Edit Profile</a>
          </a>
        </li>

        <li>
            <a class="nav-link btn-outline-primary rounded-pill px-3" href="friends.php">Friends</a>
          </a>
        </li>

      <div class="tab-content no-border padding-24">
        <div id="home" class="tab-pane in active">
          <div class="row">
            <div class="col-xs-12 col-sm-3 center">
              <span class="profile-picture">
                <img class="editable img-responsive" alt=" Avatar" id="avatar2" src="https://bootdey.com/img/Content/avatar/avatar6.png">
              </span>

              <div class="space space-4"></div>

            <div class="col-xs-12 col-sm-9">
              <h4 class="blue">
                <br><br><span class="middle"><?php echo $user_data['user_name']; ?></span>

                <span class="label label-purple arrowed-in-right">
                  <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                  online
                </span>
              </h4>

              <div class="profile-user-info">
                <div class="profile-info-row">
                  <div class="profile-info-name"> Username </div>

                  <div class="profile-info-value">
                    <span><?php echo $user_data['user_name']; ?></span>
                  </div>
                </div>

                <div class="profile-info-row">
                  <div class="profile-info-name"> Location </div>

                  <div class="profile-info-value">
                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                    <span>Jupiter</span>
                    <span>USA</span>
                  </div>
                </div>

                <div class="profile-info-row">
                  <div class="profile-info-name"> Age </div>

                  <div class="profile-info-value">
                    <span>31</span>
                  </div>
                </div>

                <div class="profile-info-row">
                  <div class="profile-info-name"> Joined </div>

                  <div class="profile-info-value">
                    <span>03/27/2021</span>
                  </div>
                </div>

              <div class="hr hr-8 dotted"></div>

          <div class="space-20"></div>

         <br><div class="row">
            <div class="col-xs-12 col-sm-3 center">
              <div class="widget-box transparent">
                  <h4 class="widget-title smaller">
                    <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                   About Me
                  </h4>
                </div><br>

                <!--Insert About Me-->

                <div>
                </div>
              </div>
            </div>
          </div>
        <!-- /#home -->

        <div id="feed" class="tab-pane">
          <div class="profile-feed row">
            <div class="col-sm-6">
              <div class="profile-activity clearfix">
                <div>
                  <img class="pull-left" alt="Alex Doe's avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                  <a class="user" href="#"> Alex Doe </a>
                  changed his profile photo.
                  <a href="#">Take a look</a>

                  <div class="time">
                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                    an hour ago
                  </div>
                </div>

                <div class="tools action-buttons">
                  <a href="#" class="blue">
                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                  </a>

                  <a href="#" class="red">
                    <i class="ace-icon fa fa-times bigger-125"></i>
                  </a>
                </div>
              </div>

              <div class="profile-activity clearfix">
                <div>
                  <img class="pull-left" alt="Susan Smith's avatar" src="https://bootdey.com/img/Content/avatar/avatar2.png">
                  <a class="user" href="#"> Susan Smith </a>

                  is now friends with Alex Doe.
                  <div class="time">
                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                    2 hours ago
                  </div>
                </div>

                <div class="tools action-buttons">
                  <a href="#" class="blue">
                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                  </a>

                  <a href="#" class="red">
                    <i class="ace-icon fa fa-times bigger-125"></i>
                  </a>
                </div>
              </div>

              <div class="profile-activity clearfix">
                <div>
                  <i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
                  <a class="user" href="#"> Alex Doe </a>
                  joined
                  <a href="#">Country Music</a>

                  group.
                  <div class="time">
                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                    5 hours ago
                  </div>
                </div>

                <div class="tools action-buttons">
                  <a href="#" class="blue">
                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                  </a>

                  <a href="#" class="red">
                    <i class="ace-icon fa fa-times bigger-125"></i>
                  </a>
                </div>
              </div>

              <div class="profile-activity clearfix">
                <div>
                  <i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
                  <a class="user" href="#"> Alex Doe </a>
                  uploaded a new photo.
                  <a href="#">Take a look</a>

                  <div class="time">
                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                    5 hours ago
                  </div>
                </div>

                <div class="tools action-buttons">
                  <a href="#" class="blue">
                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                  </a>

                  <a href="#" class="red">
                    <i class="ace-icon fa fa-times bigger-125"></i>
                  </a>
                </div>
              </div>

              <div class="profile-activity clearfix">
                <div>
                  <img class="pull-left" alt="David Palms's avatar" src="https://bootdey.com/img/Content/avatar/avatar3.png">
                  <a class="user" href="#"> David Palms </a>

                  left a comment on Alex's wall.
                  <div class="time">
                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                    8 hours ago
                  </div>
                </div>

                <div class="tools action-buttons">
                  <a href="#" class="blue">
                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                  </a>

                  <a href="#" class="red">
                    <i class="ace-icon fa fa-times bigger-125"></i>
                  </a>
                </div>
              </div>
            </div><!-- /.col -->

            <div class="col-sm-6">
              <div class="profile-activity clearfix">
                <div>
                  <i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
                  <a class="user" href="#"> Alex Doe </a>
                  published a new blog post.
                  <a href="#">Read now</a>

                  <div class="time">
                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                    11 hours ago
                  </div>
                </div>

                <div class="tools action-buttons">
                  <a href="#" class="blue">
                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                  </a>

                  <a href="#" class="red">
                    <i class="ace-icon fa fa-times bigger-125"></i>
                  </a>
                </div>
              </div>

              <div class="profile-activity clearfix">
                <div>
                  <img class="pull-left" alt="Alex Doe's avatar" src="https://bootdey.com/img/Content/avatar/avatar4.png">
                  <a class="user" href="#"> Alex Doe </a>

                  upgraded his skills.
                  <div class="time">
                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                    12 hours ago
                  </div>
                </div>

                <div class="tools action-buttons">
                  <a href="#" class="blue">
                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                  </a>

                  <a href="#" class="red">
                    <i class="ace-icon fa fa-times bigger-125"></i>
                  </a>
                </div>
              </div>

              <div class="profile-activity clearfix">
                <div>
                  <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                  <a class="user" href="#"> Alex Doe </a>

                  logged in.
                  <div class="time">
                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                    12 hours ago
                  </div>
                </div>

                <div class="tools action-buttons">
                  <a href="#" class="blue">
                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                  </a>

                  <a href="#" class="red">
                    <i class="ace-icon fa fa-times bigger-125"></i>
                  </a>
                </div>
              </div>

              <div class="profile-activity clearfix">
                <div>
                  <i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
                  <a class="user" href="#"> Alex Doe </a>

                  logged out.
                  <div class="time">
                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                    16 hours ago
                  </div>
                </div>

                <div class="tools action-buttons">
                  <a href="#" class="blue">
                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                  </a>

                  <a href="#" class="red">
                    <i class="ace-icon fa fa-times bigger-125"></i>
                  </a>
                </div>
              </div>

              <div class="profile-activity clearfix">
                <div>
                  <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                  <a class="user" href="#"> Alex Doe </a>

                  logged in.
                  <div class="time">
                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                    16 hours ago
                  </div>
                </div>

                <div class="tools action-buttons">
                  <a href="#" class="blue">
                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                  </a>

                  <a href="#" class="red">
                    <i class="ace-icon fa fa-times bigger-125"></i>
                  </a>
                </div>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

</body>
</html>