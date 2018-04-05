<?php
    if(isset($_POST['submit'])){
        include_once 'db.inc.php';
        session_start();
        $user_firstName = mysqli_real_escape_string($conn, $_POST['inputFirstName']);
        $user_lastName = mysqli_real_escape_string($conn, $_POST['inputLastName']);
        $user_gender = mysqli_real_escape_string($conn, $_POST['inputGender']);
        //user image not working
        $user_image = mysqli_real_escape_string($conn, $_POST['inputImage']);
        if(isset($_SESSION['signup'])){
            $user_name = $_SESSION['user_name'];
            $sql = "UPDATE users SET user_firstName ='$user_firstName', user_lastName = '$user_lastName',user_gender = '$user_gender',
            user_image = '$user_image'
            WHERE user_name = '$user_name';";
            mysqli_query($conn, $sql);
            header("Location: ../main.php?page=1");
            exit();
        }
        else{
            //In case person want to change details need to implemet here
            header("Location: ../main.php?page=1");
            exit();
        }
    }
    else{
        header("Location: ../../index.php");
        exit();
    }
?>