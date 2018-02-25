<?php
function redirect($location, $delay=0){
    echo "<meta http-equiv='refresh' content='$delay; url=$location' />";
}
?>