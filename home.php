<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TreeAce</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <script>
        alert('Login Berhasil !');
    </script>
    <header>
        <!-- Nav Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div id="nav" class="container container-fluid">
                <a id="logo" class="navbar-brand" href="home.php">Akbar<span>Jaya</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav" id="menu" >
                        <li id="nav-item" class="nav-item">
                            <a class="nav-link" href="stok.php">Stok Management</a>
                        </li>
                        <li id="nav-item" class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Laporan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Laporan Transaksi</a></li>
                            <li><a class="dropdown-item" href="#">Laporan Keuntungan</a></li>
                            <li><a class="dropdown-item" href="#">Hutang Piutang</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="login" type="button" class="btn btn-lg">
                    <a href="index.php">Logout</a>
                </button>
            </div>
        </nav>
    </header>

    <!-- Home -->
    <section class="home">
        <div class="home-text container">
            <h2 class="home-title">Management Website</h2>
            <span class="home-subtitle">By TreeAce</span>
        </div>
    </section>

    <!-- Menu Utama -->
    <div class="menu-filter container">
        <span class="menu-item active-filter" data-menu='all'>All</span>
        <span class="menu-item" data-menu='stok'>Stok Management</span>
        <span class="menu-item" data-menu='laporan'>Laporan</span>
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
            <a href="#"><i class='bx bxl-facebook-square'></i></a>
            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
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