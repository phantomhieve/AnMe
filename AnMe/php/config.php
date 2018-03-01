<?php
    $servername = "sql308.epizy.com";
    $username = "epiz_21684013";
    $db_name = $username."_anme";
    $password = "tX9dARlo8BIz";

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