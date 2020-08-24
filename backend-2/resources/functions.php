<?php

function redirect($location){
    header("Location: $location");
}

function escape_string($result){
    global $connection;
    return mysqli_real_escape_string($connection, $result);
}

?>