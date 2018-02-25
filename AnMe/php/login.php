<?php
include("config.php");
include("globalFunctions.php");
include("links.php");

$user = $_POST["inputEmail"];
$user_password = $_POST["inputPassword"];

try{
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql="select * from user where username='".$user."' and password='".$user_password."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION["status_".$user]="true";
        redirect($main_html);
    }
    else{
        $_SESSION["status_".$user]="false";
        redirect($root);
    }
}
catch(Exception $e){
    echo $sql . "<br>" . $e->getMessage();
}
?>