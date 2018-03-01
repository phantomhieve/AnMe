<?php
  include("config.php");
  include("globalFunctions.php");
  include("links.php");

  session_set_cookie_params(0);
  session_start();
  $_SESSION['status']="false";
  $email = (isset($_POST["inputEmail"]))?$_POST["inputEmail"]:"";
  $user_password = (isset($_POST["inputPassword"]))?$_POST["inputPassword"]:"";
  $_SESSION['rememberme']=(isset($_POST["rememberme"]))?$_POST["rememberme"]:"false";

  if(isset($_SESSION['insignup'])){
    if(isset($_SESSION['signupsuccess'])){
      echo "<script type='text/javascript'>alert('Signup successful');</script>";
      unset($_SESSION['insignup']);
      unset($_SESSION['signupsuccess']);
    }
  }
  try{
    $sql="select * from user where email='".$email."' and password='".$user_password."'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
      $_SESSION['status']="true";
      $sql="select username from user where email='".$email."' and password='".$user_password."'";
      $result = $conn->query($sql);
      if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username']=$row['username'];
      }
      $conn->close();
      redirect($main_php);
    }
    else{
      $conn->close();
      redirect($root);
    }

  } catch(Exception $e){
    echo $sql . "<br>" . $e->getMessage();
  }
?>