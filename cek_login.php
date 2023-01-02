<?php
session_start();
include 'connection.php';
$user = $_POST['user'];
$pass = md5($_POST['pass']);
$data = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username='$user' AND password='$pass'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['user'] = $user;
    $_SESSION['status'] = "login";
    header("location:index.php?pesan=y");
} else {
    if ($cek['user' && 'pass'] == NULL) {
        header("location:index.php?pesan=x");
    }
}
