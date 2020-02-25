<?php
//redirect function
function redirect_to($location){
    header("Location: $location");
    exit;
}
?>