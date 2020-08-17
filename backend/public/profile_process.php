<?php
	
  include "config.php";

	$name = $_POST["name"];
	$username = $_POST["username"];
	$address = $_POST["address"];
	$phone = $_POST["phone"];




  $sql = "INSERT INTO profile (name, username, address, phone) VALUES ('$name', '$username', '$address', '$phone')";


    
?>