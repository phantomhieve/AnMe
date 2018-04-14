<?php
    if(isset($_POST['submit'])){
        include_once 'db.inc.php';
        session_start();
        $user_firstName = mysqli_real_escape_string($conn, $_POST['inputFirstName']);
        $user_lastName = mysqli_real_escape_string($conn, $_POST['inputLastName']);
        $user_gender = mysqli_real_escape_string($conn, $_POST['inputGender']);
        //user image not working
        $user_image = mysqli_real_escape_string($conn, $_POST['inputImage']);
        $user_name = $_SESSION['user_name'];
        $sql = "UPDATE users SET user_firstName ='$user_firstName', user_lastName = '$user_lastName',user_gender = '$user_gender',
        user_image = '$user_image'
        WHERE user_name = '$user_name';";
        mysqli_query($conn, $sql);
        if(isset($_SESSION['edit']) && $_SESSION['edit']= true){
            header("Location: ../profile.php?edit=success");
            exit();
        }
        else{
            session_start();
            $_SESSION['user_firstName'] = $user_firstName;
            $_SESSION['user_lastName'] = $user_lastName;
            $_SESSION['user_gender'] = $user_gender;
            $_SESSION['user_contribution'] = 0;
            header("Location: ../main.php?page=1");
            exit();
        }
    }
    else{
        header("Location: ../../index.php");
        exit();
    }
?>