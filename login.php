<?php
    $conn = new mysqli("localhost", "root","","signup");
 if($conn->connect_error){
 	die("failed connection ".$conn->connect_error);
 }
?>