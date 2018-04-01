<?php
include("config.php");
include("globalFunctions.php");
include("links.php");

session_start();
if(isset($_SESSION['insignup'])){
  if(isset($_SESSION['signupsuccess'])){
    echo "<script type='text/javascript'>alert('Signup successful');</script>";
    unset($_SESSION['insignup']);
    unset($_SESSION['signupsuccess']);
  }
}

$_SESSION['status']="false";
$email = (isset($_POST["inputEmail"]))?$_POST["inputEmail"]:"";
$user_password = (isset($_POST["inputPassword"]))?$_POST["inputPassword"]:"";
$_SESSION['rememberme']=(isset($_POST["rememberme"]))?$_POST["rememberme"]:"false";

try{

  $sql="select * from user where email='".$email."' and password='".$user_password."'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $_SESSION['status']="true";
    $row = $result->fetch_assoc();
    $_SESSION['username']=$row['username'];
    $conn->close();
    redirect($main_php);
  }
  else{
    $conn->close();
    redirect($root);
  }
  redirect($main_php);

} catch(Exception $e){
  echo $sql . "<br>" . $e->getMessage();
}
?>
