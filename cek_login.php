<?php
session_start();
include 'connection.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $user = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($user)) {
        header("Location: index.php?error=Username is required");
        exit();
    }else if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    }else {
        $sql = "SELECT * FROM tbl_user WHERE username='$user' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row  = mysqli_fetch_assoc($result);
            if ($row['username'] === $user && $row['password'] === $pass) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['id_user'] = $row['id_user'];
                header("Location: home.php");
                exit();
            }else {
                header("Location: index.php?error=Incorect Username or Password");
                exit();
            }
        }else {
                header("Location: index.php?error=Incorect Username or Password");
                exit();
        }
    }
    
}else {
        header("Location: index.php");
        exit();
}