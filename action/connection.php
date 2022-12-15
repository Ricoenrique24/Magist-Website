<?php 
    $conn = new mysqli("localhost", "root","","magist");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>