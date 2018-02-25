<?php
    include("config.php");
    include("globalFunctions.php");
    include("links.php");

    session_start();
    $user = $_POST["inputEmail"];
    $user_password = $_POST["inputPassword"];

    try{
        
        $sql="select * from user where email='".$user."' and password='".$user_password."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $_SESSION["status"]="true";
            redirect($main_php);
        }
        else{
            $_SESSION["status"]="false";
            redirect($root);
        }
    } catch(Exception $e){
        echo $sql . "<br>" . $e->getMessage();
    }
?>