<?php
    $servername = "localhost";
    $username = "id4870226_user";
    $db_name = "id4870226_anme";
    $password = "123456";

    try{
        //create connection
        $conn = mysqli_connect($servername,$username,$password,$db_name);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    } catch(Exception $e){
        echo $sql . "<br>" . $e->getMessage();
    }
?>