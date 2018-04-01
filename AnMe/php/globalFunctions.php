<?php
function redirect($location,$delay=2){
  //header("location:$location");
  echo "<meta http-equiv='refresh' content='$delay;url=$location'>";
}
?>