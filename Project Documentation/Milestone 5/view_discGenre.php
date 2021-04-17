<?php
session_start();

include("connection.php");
include("functions.php");
include("header.php");
$user_data = check_login($con);

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
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="css/discussion.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<div class="limiter">
	<div class="redbackground" style="background-image: url('images/red.jpg');">
    <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="p-xs">
                            <h1>Chatflix Forum</h1>
                        </div>
                    </div>
                    <div class="forum-title">
                        <?php
                        $gid = $_GET['gid'];
                        if($gid == '1')
                        {
                            echo "<h4>TV Show Topics</h4>";
                        }
                        else if ($gid == '2')
                        {
                            echo "<h4>Movie Topics</h4>";
                        }
                        else
                        {
                             echo "<h4>Other subjects</h4>";
                        }
                        ?>
                    </div>

                    <div class="forum-item">
                    <?php

                        //$gid = $_GET['gid'];
                        // Creating a sql query of all unique genres to avoid duplicate categories
                        $sql = "SELECT gid FROM discgenre WHERE gid ='".$gid."' LIMIT 1";
                        $res = mysqli_query($con,$sql) or die(mysqli_error($con));
                        if (mysqli_num_rows($res) == 1) 
                        {
                            // Takes the data of all discussion threads related to the genre and order them by the title ascending order
                            $sql2 = "SELECT * FROM discThread WHERE gid ='".$gid."' ORDER BY threadTopic ASC";
                            $res2 = mysqli_query($con,$sql2) or die(mysqli_error($con));
                            if (mysqli_num_rows($res2) > 0) 
                            {
                                $thread = "";
                                while($row = mysqli_fetch_assoc($res2))
                                {
                                    $threadId = $row['threadId'];
                                    $threadTopic = $row['threadTopic'];
                                    $threadContent = $row['threadContent'];
                                    // Generates a hmtl link depended on the genre identification and thread identification
                                    // $thread .= "
                                    //     <div class='ibox-content'>
                                    //     <a href='view_discThread.php?gid=".$gid."&threadId=".$threadId."' class='forum-item-title'>$threadTopic</a></div>
                                    //     </div>";
                                
                                echo "
                                        <div class='ibox-content'>
                                        <a href='view_discThread.php?gid=".$gid."&threadId=".$threadId."' class='forum-item-title'>$threadTopic</a>
                                        </div>
                                    ";
                            
                                }
                            }
                            else
                            {
                                // error case for no threads being in the genre category yet
                                echo "<p>There are no threads in this genre yet.</p>";
                            }
                        }
                        else{
                            // error case if category page isn't linked or user manualy changed url
                            echo "<p> You are trying to view a category that does not exist</p>";
                        }
                    ?>



                        
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-start">
                            <!-- Using the genre identification to create a new thread that is linked to creating thread php function -->
                            <?php echo "<a class='nav-link btn-primary rounded-pill px-3' href='create_discThread.php?gid=".$gid."'>Click here to make a new thread</a>"; ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col d-flex justify-content-start">
                            <a class="nav-link btn-primary rounded-pill px-3" href="/chatflix/discussion.php">Go back to Forum</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
