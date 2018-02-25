<?php
$servername = "localhost";
$username = "username";
$password = "password";
try{
    //create connection
    $conn = mmysqli_connect($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //Check connection from user and pass
    //if correct
        //redirect to website
    //else redirect back to login
}
catch(Exception $e){
    echo $sql . "<br>" . $e->getMessage();
}