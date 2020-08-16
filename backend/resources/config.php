<?php

ob_start();
session_start();

$connection = mysqli_connect("localhost", "root", "", "book_rental");
require_once("functions.php");

?>