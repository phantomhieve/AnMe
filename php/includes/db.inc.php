<?php
    include 'credential.inc.php';
    try{
        //create connection
        $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    } catch(Exception $e){
        echo "Connection failed : <br>" . $e->getMessage();
    }
?>