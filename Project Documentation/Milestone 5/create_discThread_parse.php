<?php
session_start();

include("connection.php");
include("functions.php");
$user_data = check_login($con);

if(isset($_POST['thread_submit'])){
    if(($_POST['discThread'] == "") && ($_POST['discContent']) == ""){
        echo "Did not fill in both fields";
        exit();
    }
    else{
        $gid = $_POST['gid'];
        $threadTitle = $_POST['discThread'];
        $threadKeys = $_POST['discKeys'];
        $threadContent = addslashes($_POST['discContent']);
        $creator = $user_data['user_name'];
        
        // Takes user data entered in create_discThread.php and inserts into database for general info of a thread
        // $new_thread_id = random_num(20);
        $sql = "INSERT INTO `discthread`(`threadTopic`, `gid`, `threadKeyword`, `threadContent`, `userName`) VALUES ('$threadTitle','$gid', '$threadKeys','$threadContent','$creator')";
        $res = mysqli_query($con,$sql) or die(mysqli_error($con));
        $new_thread_id = mysqli_insert_id($con);

        // Takes user data entered in create_discThread.php and inserts into database for use in the first post of a thread
        //$sql2 = "INSERT INTO discPost (gid, threadId, postCont, userName) VALUES ('".$gid."','".$new_thread_id."','".$threadContent."','".$creator."')";
        //$res2 = mysqli_query($con,$sql2) or die(mysqli_error($con));
        
        
        // Creating a new page only on the condition that both sql querries executed correctly beforehand
        if(($res)){
            header("Location: view_discThread.php?gid=".$gid."&threadId=".$new_thread_id);
        }
        else{
            // Handing error and letting the user know that an issue has occured
            echo "There was a problem creating your topic";
        }
    }
}

?>