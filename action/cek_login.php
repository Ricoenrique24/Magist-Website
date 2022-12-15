<?php
session_start();
include 'connection.php';
$user = $_POST['user'];
$pass = md5($_POST['pass']);
$data = mysqli_query($conn, "SELECT * FROM akun WHERE id='$user' AND pw='$pass'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['user'] = $user;
    $_SESSION['status'] = "login";
    header("location:../home.php");
} else {
    if ($cek['user' && 'pass'] == NULL) {
        header("location:../index.php?pesan=gagal");
    }
}
