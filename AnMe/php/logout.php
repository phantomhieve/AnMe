<?php
include("links.php");
include("globalFunctions.php");
# Session variables
# status, rememberme, username
try{
  session_start();
  foreach ($_SESSION as $key=>$val){
    if(isset($_SESSION[$key]))
      unset($_SESSION[$key]);
  }
  session_destroy();
} catch(Exception $e){
  echo "<br>".$e->getMessage()."<br>";
}
redirect($root);
?>
