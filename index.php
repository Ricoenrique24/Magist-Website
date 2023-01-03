<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Your Account</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600&display=swap');

        * {
            font-family: 'Rubik', sans-serif;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            scroll-padding-top: 2rem;
            box-sizing: border-box;
        }

        :root {
            --main: #47B1FF;
            --second: #FFFFFF;
            --bg: #f1f1f1;
            --font: #292E32;
        }

        ::selection {
            color: var(--main);
            background: var(--second);
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        .container {
            max-width: 1068px;
            width: 100%;
        }

        #container {
            padding-top: 160px;
            padding-bottom: 40px;
        }

        #img {
            max-height: 400px;
        }

        header {
            background: var(--second);
            box-shadow: 0 4px 14px rgba(41, 125, 252, 0.199);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 200;
        }

        #nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 0;
            text-decoration: none;
        }

        #sub {
            font-size: 2rem;
            font-weight: 600;
            color: var(--font);
        }

        #logo {
            font-size: 2rem;
            font-weight: 600;
            color: var(--main);
        }

        #logo span {
            color: var(--font);
        }

        .login {
            padding: 8px 135px;
            text-transform: uppercase;
            font-weight: 500;
            color: var(--second);
            background: var(--main);
            border: var(--main) solid 1px;
            border-radius: 4px;
            transition: 0.3s;
            -webkit-transition: 0.3s;
            -moz-transition: 0.3s;
            -ms-transition: 0.3s;
            -o-transition: 0.3s;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
        }

        .login a {
            text-decoration: none;
            color: #FFFFFF;
        }

        .login a:hover {
            text-decoration: none;
            color: var(--second);
        }

        .login:hover {
            text-decoration: none;
            border: var(--second) solid 1px;
            background: var(--font);
            color: var(--second);
            border-radius: 4px;
            transition: 0.3s;
            -webkit-transition: 0.3s;
            -moz-transition: 0.3s;
            -ms-transition: 0.3s;
            -o-transition: 0.3s;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            padding: 30px 0;
        }

        .footer p {
            font-size: 0.9rem;
            color: var(--font);
        }

        .social {
            display: flex;
            align-items: center;
            column-gap: 1rem;
        }

        .social .bx {
            color: var(--font);
            font-size: 2rem;
        }

        .social .bx:hover {
            color: var(--main);
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
</head>

<body>
    <?php
    $x = "Username atau Password Salah !";
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "x") {
            echo "<script type='text/javascript'>alert('$x');</script>";
        }
    }
    $n = "Berhasil Logout !";
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "n") {
            echo "<script type='text/javascript'>alert('$n');</script>";
            // header("location:index.php");
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
                    <form action="cek_login.php" method="post">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p id="sub" class="mb-0 me-3">Log in Your Account</p><br><br><br><br>
                        </div>

                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <input type="text" name="username" class="form-control form-control-lg" placeholder="Masukkan Username Anda" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" class="form-control form-control-lg" placeholder="Masukkan Password Anda" />
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
                <a href="https://www.facebook.com/Marzuki.AkmaLL"><i class='bx bxl-facebook-square'></i></a>
                <a href="https://www.instagram.com/marzuki_akmal/"><i class='bx bxl-instagram-alt'></i></a>
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