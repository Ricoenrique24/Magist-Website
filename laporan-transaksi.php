<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Management</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/laporan-transaksi.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                                <li><a class="dropdown-item" href="laporan-keuntungan.php">Laporan Keuntungan</a></li>
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
            <section class="vh-100">
            <div class="container container-fluid" id="container">
            <p class="judul">LAPORAN TRANSAKSI</p>
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Pembeli</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total Pembayaran</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-1">Detail Barang</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include 'action/connection.php';
                                            $data = mysqli_query($conn, "SELECT * FROM tbl_transaksi");
                                            while($result = mysqli_fetch_array($data)) {
                                        ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm"><?php echo $result['tanggal']?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                               <h6 class="mb-0 text-sm"><?php echo $result['nama_pembeli']?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <p class="text-xs font-weight-bold mb-0"> Rp. <?php echo $result['grand_total']?></p>
                                                    </td>
                                                    <td>
                                                        <a href="detail.php?id_transaksi=<?=$result['id_transaksi']?>" class="detail">Detail Barang</a>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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