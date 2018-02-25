<?php
    include("config.php");
    include("globalFunctions.php");
    include("links.php");

    $username = $_POST["inputUser"];
    $email = $_POST["inputEmail"];
    $pwd = $_POST["inputPassword"];

    try{
        $sql = "INSERT INTO `user` VALUES (NULL, '$username', '$pwd', '$email');";
        echo "$sql <br>";
        $result = $conn->query($sql);
        echo "Testing ... $result <br> done! <br>";
        redirect($login_php);
    } catch(Exception $e){
        echo $sql . "<br>" . $e->getMessage();
    }
?>