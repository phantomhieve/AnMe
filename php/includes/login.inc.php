<?php
    if(isset($_POST['submit'])){
        include_once 'db.inc.php';
        $user_name = mysqli_real_escape_string($conn, $_POST['inputUser']);
        $user_pass = mysqli_real_escape_string($conn, $_POST['inputPassword']);
        $sql = "SELECT * FROM users WHERE user_name = '$user_name' OR user_email = '$user_name'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1 || $resultCheck>1){
            header("Location: ../../index.php?login=error");
            exit();
        }
        else{
            if($row = mysqli_fetch_assoc($result)){
                //De-hassing the password
                $hashedPwdCheck = password_verify($user_pass,$row['user_pass']);
                if($hashedPwdCheck == false){
                    header("Location: ../../index.php?login=error");
                    exit();
                }
                elseif($hashedPwdCheck == true){
                    //login the user here
                    session_start();
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['user_moderator'] = $row['user_moderator'];
                    $_SESSION['user_email'] = $row['user_email'];
                    $_SESSION['user_firstName'] = $row['user_firstName'];
                    $_SESSION['user_lastName'] = $row['user_lastName'];
                    $_SESSION['user_gender'] = $row['user_gender'];
                    $_SESSION['user_contribution'] = $row['user_contribution'];
                    $_SESSION['user_rating'] = $row['user_rating'];
                    header("Location: ../main.php?page=1");
                    exit();
                }
            }
        }
    }
    else{
        header("Location: ../../index.php?login=error");
        exit();
    }
?>