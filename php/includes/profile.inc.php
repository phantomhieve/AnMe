<?php
    if(isset($_POST['submit'])){
        include_once 'db.inc.php';
        session_start();
        $user_firstName = mysqli_real_escape_string($conn, $_POST['inputFirstName']);
        $user_lastName = mysqli_real_escape_string($conn, $_POST['inputLastName']);
        $user_gender = mysqli_real_escape_string($conn, $_POST['inputGender']);
        //image Data
        $user_imageName = mysqli_real_escape_string($_FILES["inputImage"]["name"]);
        /*$user_imageData = mysqli_real_escape_string(file_get_content($_FILES['inputImage']['tmp_name']));
        $user_imageType = mysql_real_escape_string($_FILES['inputImage']['type']);
        if(substr($user_imageType,0,5)=="image"){
            header("Location: ../profile.php?edit=error");
            exit();
        }*/
        //user name from session
        $user_name = $_SESSION['user_name'];
        //sql part
        $sql = "UPDATE users SET user_firstName ='$user_firstName', user_lastName = '$user_lastName',user_gender = '$user_gender',
        WHERE user_name = '$user_name';";
        mysqli_query($conn, $sql);
        session_start();
        //updating sessions
        $_SESSION['user_firstName'] = $user_firstName;
        $_SESSION['user_lastName'] = $user_lastName;
        $_SESSION['user_gender'] = $user_gender;
        $_SESSION['user_contribution'] = 0;
        //redirection
        if(isset($_SESSION['edit']) && $_SESSION['edit']= true){
            $a = isset($_FILES["inputImage"]['name']);
            header("Location: ../profile.php?edit=$a");
            exit();
        }
        else{
            header("Location: ../main.php?page=1");
            exit();
        }
    }
    else{
        header("Location: ../../index.php");
        exit();
    }
?>