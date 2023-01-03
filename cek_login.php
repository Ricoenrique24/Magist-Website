<?php
session_start();
include 'connection.php';
$user = $_POST['username'];
$pass = $_POST['password'];
$data = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username='$user' AND password='$pass'");
$cek = mysqli_num_rows($data);
// print_r($data);

if ($cek > 0) {
    $_SESSION['username'] = $user;
    $_SESSION['status'] = "login";
    header("location:home.php?pesan=y");
} else {
    if ($cek['username' && 'password'] == NULL) {
        header("location:index.php?pesan=x");
    }
}
