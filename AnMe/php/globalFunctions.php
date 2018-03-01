<?php
function redirect($location,$delay=0){
  sleep($delay);
  header("location:$location");
  //echo "<meta http-equiv='refresh' content='$delay;url=$location'>";
}
?>