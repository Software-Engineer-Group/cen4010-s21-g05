<?php
session_start();

include("connection.php");
include("functions.php");
include("header.php");
$user_data = check_login($con);

$gid =$_GET['gid'];
$threadId = $_GET['threadId'];
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
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet">
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
                            <div class="row">
                            <?php
                                
                                $gid = $_GET['gid'];
                                $threadId = $_GET['threadId'];
                                $sql = "SELECT * FROM discThread WHERE gid='".$gid."' AND threadId='".$threadId."' LIMIT 1";
                                $res = mysqli_query($con,$sql) or die(msqli_error($con));
                                $row = mysqli_fetch_assoc($res);
                                echo "<h4>$row[threadTopic]</h4>";
                            ?>
                        <?php
                                $gid = $_GET['gid'];
                                $threadId = $_GET['threadId'];
                                $sql = "SELECT * FROM discThread WHERE gid='".$gid."' AND threadId='".$threadId."' LIMIT 1";
                                $res = mysqli_query($con,$sql) or die(msqli_error($con));
                                if(mysqli_num_rows($res) == 1)
                                {
                                    
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                        echo "
                                        <div class='ibox-content forum-container'>
                                        <strong>Posted by</strong> $row[userName]<br><br>$row[threadContent]
                                        </div>
                                        ";
                                    }
                                }
                        ?>
                        </div>
                        </div>
                    <form class="form" action="create_discPost_parse.php" method="post">
                        <div class="row">
                            <div class="col">
                                <br>
                                <b style='color:white;'>Add a Comment:</b>
                                <input class="form-control" type="text" name="postCont" size="98" maxlength="150" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col d-flex justify-content-end">
                                        <input type="hidden" name="gid" value="<?php echo $gid; ?>">
                                        <input type="hidden" name="threadId" value="<?php echo $threadId; ?>">
                                        <input class="btn btn-primary" type="submit" name="reply_submit" value="Post your reply">
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
