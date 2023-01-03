<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TreeAce</title>
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

        img {
            width: 100%;
        }

        section {
            padding: 3rem 0 2rem;
        }

        .container {
            max-width: 1068px;
            margin: auto;
            width: 100%;
        }

        header {
            background: var(--main);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 200;
        }

        #nav {
            display: flex;
            justify-content: space-between;
            padding: 25px 0;
            text-decoration: none;
        }

        #nav-item {
            padding-right: 30px;
            font-weight: bold;
        }

        #nav-item a:hover {
            color: var(--second);
        }

        header.shadow #nav-item a:hover {
            color: var(--main);
        }

        header.shadow {
            background: white;
            box-shadow: 0 4px 14px hsl(0 4% 14% / 10%);
            transition: 2s;
            -webkit-transition: 1.5s;
            -moz-transition: 1.5s;
            -ms-transition: 1.5s;
            -o-transition: 1.5s;
        }

        header.shadow #logo {
            color: var(--main);
            transition: 2s;
            -webkit-transition: 1.5s;
            -moz-transition: 1.5s;
            -ms-transition: 1.5s;
            -o-transition: 1.5s;
        }

        #logo {
            font-size: 2rem;
            font-weight: 600;
            color: var(--second);
            padding-right: 185px;
        }

        #logo span {
            color: var(--font);
        }

        .login {
            font-size: 16px;
            background: var(--main);
        }

        .login a {
            text-decoration: none;
            color: var(--second);
            font-weight: bold;
        }

        .login a:hover {
            color: black;
            transition: 0.3s;
            -webkit-transition: 0.3s;
            -moz-transition: 0.3s;
            -ms-transition: 0.3s;
            -o-transition: 0.3s;
        }

        header.shadow .login {
            background-color: var(--second);
            color: black;
            font-weight: bold;
            transition: 2s;
            -webkit-transition: 1.5s;
            -moz-transition: 1.5s;
            -ms-transition: 1.5s;
            -o-transition: 1.5s;
        }

        header.shadow .login a:hover {
            color: var(--main);
            transition: 0.3s;
            -webkit-transition: 0.3s;
            -moz-transition: 0.3s;
            -ms-transition: 0.3s;
            -o-transition: 0.3s;
        }

        header.shadow .login a {
            color: black;
            font-weight: bold;
            transition: 2s;
            -webkit-transition: 1.5s;
            -moz-transition: 1.5s;
            -ms-transition: 1.5s;
            -o-transition: 1.5s;
        }

        .home {
            width: 100%;
            height: 390px;
            background: var(--main);
            box-shadow: 0 4px 14px rgba(57, 130, 255, 0.169);
            display: grid;
            justify-content: center;
            align-items: center;
        }

        .home-text {
            color: var(--second);
            text-shadow: 1px 1px 90px var(--second);
            text-align: center;
        }

        .home-title {
            font-weight: bold;
            font-size: 3.5rem;
        }

        .home-subtitle {
            color: var(--font);
            font-size: 1rem;
            font-weight: 900;
        }

        .magist {
            width: 45%;
            height: auto;
            object-fit: cover;
        }

        .menu-filter {
            display: flex;
            justify-content: center;
            align-items: center;
            column-gap: 2rem;
            margin-top: 2.5rem !important;
        }

        .menu-item {
            font-size: 1.1rem;
            font-weight: 500;
            cursor: pointer;
        }

        .menu-item:hover {
            border-bottom: var(--main) solid 1px;
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, auto));
            justify-content: center;
            gap: 2rem;
        }

        .menu-box {
            background: var(--second);
            box-shadow: 0 4px 14px hsl(355deg 25% 15% / 15%);
            padding: 15px;
            border-radius: 1rem;
            -webkit-border-radius: 1rem;
            -moz-border-radius: 1rem;
            -ms-border-radius: 1rem;
            -o-border-radius: 1rem;
        }

        .menu-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            object-position: center;
            border-radius: 0.5rem;
            -webkit-border-radius: 0.5rem;
            -moz-border-radius: 0.5rem;
            -ms-border-radius: 0.5rem;
            -o-border-radius: 0.5rem;
        }

        .category {
            padding-top: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            color: var(--main);
        }

        .menu-title {
            text-decoration: none;
            font-size: 1.3rem;
            font-weight: 600;
            color: black;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .menu-desc {
            color: var(--font);
            font-size: 1rem;
            line-height: 1.5rem;
            margin: 5px 0 10px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .footer {
            background-color: var(--main);
            display: flex;
            justify-content: space-between;
        }

        .footer-container {
            padding-left: 100px;
            padding-right: 100px;
            padding-bottom: 50px;
        }

        .footer p {
            font-size: 0.9rem;
            color: var(--second);
        }

        .social {
            background-color: var(--main);
            display: flex;
            align-items: center;
            column-gap: 1rem;
        }

        .social .bx {
            color: var(--second);
            font-size: 2rem;
        }

        .social .bx:hover {
            color: black;
        }
    </style>
</head>

<body>
    <?php
    $y = "Berhasil Login !";
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "y") {
            echo "<script type='text/javascript'>alert('$y');</script>";
            // header("location:home.php");
        }
    }
    ?>
    <header>
        <!-- Nav Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div id="nav" class="container container-fluid">
                <a id="logo" class="navbar-brand" href="home.php">Akbar<span>Jaya</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li id="nav-item" class="nav-item">
                            <a class="nav-link" href="stok.php">Stok Management</a>
                        </li>
                        <li id="nav-item" class="nav-item">
                            <a class="nav-link" href="laporan-transaksi.php">Laporan Transaksi</a>
                        </li>
                        <li id="nav-item" class="nav-item">
                            <a class="nav-link" href="laporan-keuntungan.php">Laporan Keuntungan</a>
                        </li>
                    </ul>
                </div>
                <div id="l" class="login">
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Home -->
    <section class="home">
        <div class="home-text container">
            <img src="assets/img/loweb.png" class="magist">
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#47B1FF" fill-opacity="1" d="M0,224L40,218.7C80,213,160,203,240,202.7C320,203,400,213,480,192C560,171,640,117,720,106.7C800,96,880,128,960,138.7C1040,149,1120,139,1200,149.3C1280,160,1360,192,1400,208L1440,224L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
    </svg>
    <!-- Menu Utama -->
    <div class="menu-filter container">

        <span class="home-subtitle">Development By TreeAce Production </span>
    </div>

    <!-- Menu -->
    <section class="menu container">
        <!-- Menu Box -->
        <div class="menu-box laporan">
            <img src="assets/img/keuntungan.jpg" class="menu-img">
            <h2 class="category">Laporan</h2>
            <a href="menu-page" class="menu-title">Laporan Keuntungan</a>
            <p class="menu-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt fuga placeat nobis qui illum cumque laboriosam? Quod, alias ipsam. Ea dignissimos voluptatem qui quisquam cum facilis quod sed hic.
            </p>
        </div>
        <div class="menu-box laporan">
            <img src="assets/img/transaksi.jpg" class="menu-img">
            <h2 class="category">Laporan</h2>
            <a href="menu-page" class="menu-title">Laporan Transaksi</a>
            <p class="menu-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt fuga placeat nobis qui illum cumque laboriosam? Quod, alias ipsam. Ea dignissimos voluptatem qui quisquam cum facilis quod sed hic.
            </p>
        </div>
        <div class="menu-box laporan">
            <img src="assets/img/report.jpg" class="menu-img">
            <h2 class="category">Laporan</h2>
            <a href="menu-page" class="menu-title">Hutang Piutang</a>
            <p class="menu-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt fuga placeat nobis qui illum cumque laboriosam? Quod, alias ipsam. Ea dignissimos voluptatem qui quisquam cum facilis quod sed hic.
            </p>
        </div>
        <div class="menu-box stok">
            <img src="assets/img/stok.jpg" class="menu-img">
            <h2 class="category">Stok</h2>
            <a href="menu-page" class="menu-title">Manajemen Stok</a>
            <p class="menu-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt fuga placeat nobis qui illum cumque laboriosam? Quod, alias ipsam. Ea dignissimos voluptatem qui quisquam cum facilis quod sed hic.
            </p>
        </div>
        <div class="menu-box tracking">
            <img src="assets/img/track.jpg" class="menu-img">
            <h2 class="category">Tracking</h2>
            <a href="menu-page" class="menu-title">Tracking Barang</a>
            <p class="menu-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt fuga placeat nobis qui illum cumque laboriosam? Quod, alias ipsam. Ea dignissimos voluptatem qui quisquam cum facilis quod sed hic.
            </p>
        </div>
        <div class="menu-box tracking">
            <img src="assets/img/riwayat.jpg" class="menu-img">
            <h2 class="category">Tracking</h2>
            <a href="menu-page" class="menu-title">Riwayat Pengiriman</a>
            <p class="menu-desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus incidunt fuga placeat nobis qui illum cumque laboriosam? Quod, alias ipsam. Ea dignissimos voluptatem qui quisquam cum facilis quod sed hic.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#47B1FF" fill-opacity="1" d="M0,160L48,154.7C96,149,192,139,288,117.3C384,96,480,64,576,80C672,96,768,160,864,165.3C960,171,1056,117,1152,96C1248,75,1344,85,1392,90.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        <div class="footer footer-container">
            <p>&copy; Copyright TreeAce X POLIJE Kampus Sidoarjo</p>
            <div class="social">
                <a href="https://www.facebook.com/Marzuki.AkmaLL"><i class='bx bxl-facebook-square'></i></a>
                <a href="https://www.instagram.com/marzuki_akmal/"><i class='bx bxl-instagram-alt'></i></a>
            </div>
        </div>
    </svg>




    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>