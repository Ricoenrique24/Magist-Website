<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "magist";

$conn = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($conn));
