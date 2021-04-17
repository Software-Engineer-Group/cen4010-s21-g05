<?php
session_start();

include("connection.php");
include("functions.php");
$user_data = check_login($con);

$gid =$_GET['gid'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Chatflix</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="css/discussion.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <?php include("navbar.php");?>

    <div class="limiter">
		<div class="redbackground" style="background-image: url('images/red.jpg');">

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInRight">

                    <div class="ibox-content m-b-sm border-bottom">
                        <div class="p-xs">
                            <div class="pull-left m-r-md">
                            </div>
                            <h2 style="color:black;">Chatflix Forums</h2>
                        </div>
                    </div>

                    <div class="ibox-content forum-container">

                        <div class="forum-title">
                            <div class="pull-right forum-desc">
                                <samll>Total posts: 320,800</samll>
                            </div>
                            <h3 style="color:black;">Add a new thread:</h3>
                        </div>

                        <!--- Using input fields and a form field to submit a post request which allows users to create unique threads for any discussions with the category:gid--->

                        <div class="forum-item">
                            <div class="row">
                            </div>
                        </div>
                    </div>

                    <form class="form" action="create_discThread_parse.php" method="post">
                        <div class="row">
                            <div class="col">
                                <br>
                                <label style="color:white;">Thread Topic:</label>
                                <input class="form-control" type="text" name="discThread" size="98" maxlength="150" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <br>
                                <label style="color:white;" >Thread Keywords:</label>
                                <input class="form-control" type="text" name="discKeys" size="98" maxlength="150" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <br>
                                <label style="color:white;">Thread Description:</label>
                                <textarea class="form-control" type="text" name="discContent" rows="5" cols="75" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">


                                <div class="row">
                                    <div class="col d-flex justify-content-end">
                                        <input type="hidden" name="gid" value="<?php echo $gid; ?>">
                                        <input class="btn btn-primary" type="submit" name="thread_submit" value="Create your thread">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>




                </div>
            </div>
            <!-- Bootstrap -->
            <script src="assets/js/bootstrap.bundle.min.js"></script>
            <!-- Templatemo -->
            <script src="assets/js/templatemo.js"></script>
            <!-- Custom -->
            <script src="assets/js/custom.js"></script>

</body>

</html>
