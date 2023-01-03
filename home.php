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
            align-items: center;
            justify-content: space-between;
            padding: 18px 0;
            text-decoration: none;
        }

        header.shadow {
            background: white;
            box-shadow: 0 4px 14px hsl(0 4% 14% / 10%);
            transition: 1.5s;
            -webkit-transition: 1.5s;
            -moz-transition: 1.5s;
            -ms-transition: 1.5s;
            -o-transition: 1.5s;
        }

        header.shadow #logo {
            color: var(--main);
            transition: 1.5s;
            -webkit-transition: 1.5s;
            -moz-transition: 1.5s;
            -ms-transition: 1.5s;
            -o-transition: 1.5s;
        }

        #logo {
            font-size: 2rem;
            font-weight: 600;
            color: var(--second);
            padding-right: 310px;
        }

        #logo span {
            color: var(--font);
        }

        .login {
            padding: 8px 14px;
            text-transform: uppercase;
            font-weight: 500;
            border: var(--second) solid 1px;
            border-radius: 4px;
            background: var(--main);
            color: var(--second);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
        }

        .login a {
            text-decoration: none;
            color: #FFFFFF;
        }

        .login:hover {
            border: var(--main) solid 1px;
            background: var(--second);
            color: var(--main);
            transition: 0.3s;
            -webkit-transition: 0.3s;
            -moz-transition: 0.3s;
            -ms-transition: 0.3s;
            -o-transition: 0.3s;
        }

        #nav-item {
            color: white;
            padding: 10px;
            font-size: 14px;
            font-weight: 500;
        }

        .home {
            width: 100%;
            min-height: 540px;
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
    </style>
</head>

<body>
    <header>
        <!-- Nav Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div id="nav" class="container container-fluid">
                <a id="logo" class="navbar-brand" href="home.php">Akbar<span>Jaya</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav" id="menu">
                        <li id="nav-item" class="nav-item">
                            <a class="nav-link" href="stok.php">Stok Management</a>
                        </li>
                        <li id="nav-item" class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Laporan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="laporan-transaksi.php">Laporan Transaksi</a></li>
                                <li><a class="dropdown-item" href="lapor">Laporan Keuntungan</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="login" type="button" class="btn btn-lg">
                    <a href="logout.php">Logout</a>
                </button>
            </div>
        </nav>
    </header>

    <!-- Home -->
    <section class="home">
        <div class="home-text container">
            <img src="assets/img/logo_web.png" class="magist">
        </div>
    </section>

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
    <div class="footer container">
        <p>&copy; Copyright TreeAce X POLIJE Kampus Sidoarjo</p>
        <div class="social">
            <a href="https://www.facebook.com/Marzuki.AkmaLL"><i class='bx bxl-facebook-square'></i></a>
            <a href="https://www.instagram.com/marzuki_akmal/"><i class='bx bxl-instagram-alt'></i></a>
        </div>
    </div>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>