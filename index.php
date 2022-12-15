<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Account</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<?php
    $x = "Username atau Password Salah !";
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<script type='text/javascript'>alert('$x');</script>";
        }
    }
    ?>
    <header>
        <!-- Nav Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div id="nav" class="container container-fluid justify-content-center align-items-center">
                <a id="logo" class="navbar-brand" href="index.php">Akbar<span>Jaya Management</span></a>
            </div>
        </nav>
    </header>

    <section class="vh-100">
        <div class="container-fluid" id="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-10 col-lg-6 col-xl-5">
                    <img id="img" src="assets/img/login.jpg" class="img-fluid">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-3 offset-xl-1">
                    <form action="action/cek_login.php" method="post">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p id="sub" class="mb-0 me-3">Log in Your Account</p><br><br><br><br>
                        </div>

                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <input type="text" name="user" id="user" class="form-control form-control-lg" placeholder="Enter Your Username" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="pass" id="pass" class="form-control form-control-lg" placeholder="Enter Your Password" />
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button class="login" type="submit">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer container">
            <p>&copy; Copyright TreeAce X POLIJE Kampus Sidoarjo</p>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook-square'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
            </div>
        </div>
    </section>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>