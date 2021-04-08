<?php
session_start();

include("connection.php");
include("functions.php");
$user_data = check_login($con);

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "chatflix_db";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $id = $_SESSION['user_id'];
   $fname = $_POST['fullName'];
   $userEmail = $_POST['userEmail'];
   //$userpwd = $_POST['password'];
   $userBio = $_POST['userBio'];

           
   // mysql query to Update data
   $query = "UPDATE `defaultuser` SET `fullName`='$fname',`userEmail`='$userEmail', 
  `userBio`='$userBio'  WHERE `user_id` = $id";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    <?php include("navbar.php");?>
    <div class="container">

        <div class="col">
            <div class="row">
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="e-profile">
                                <div class="row">
                                    <div class="col-12 col-sm-auto mb-3">
                                        <div class="mx-auto" style="width: 140px;">
                                            <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                                                <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo $user_data['fullName']; ?></h4>
                                            <p class="mb-0"><?php echo $user_data['userEmail']; ?></p>
                                            <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                                            <div class="mt-2">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fa fa-fw fa-camera"></i>
                                                    <span>Change Avatar</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="text-center text-sm-right">
                                            <span class="badge badge-secondary">administrator</span>
                                            <div class="text-muted"><small><?php echo $user_data['date']; ?></small></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content pt-3">

                                    <div class="tab-pane active">

                                        <div class="row">
                                            <div class="col">
                                                
                                                <form class="form" action="edit.php" method="post">
                                                    <div class="row">
                                                        <div class="col">

                                                            <label>Full Name:</label>
                                                            <input class="form-control" type="text" name="fullName" placeholder=<?php echo $user_data['fullName']; ?> >
                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col">

                                                                <label>Email:</label>
                                                                <input class="form-control" type="text" name="userEmail" placeholder=<?php echo $user_data['userEmail']; ?> >
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col">

                                                                <label>About Me:</label> 
                                                                <input class="form-control" type="text" name="userBio" placeholder=<?php echo $user_data['userBio']; ?> >
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col d-flex justify-content-end">
                                                                <input class="btn btn-primary" type="submit" name="update" value="Update Data">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
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
