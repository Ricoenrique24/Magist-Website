<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuntungan</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/laporan.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .intro {
            height: 100%;
        }

        table.table tr th,
        table.table tr td {
            padding: 12px 50px;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        table.table td a {
            text-decoration: none;
            font-weight: bold;
            color: #25A0E2;
        }

        thead th {
            color: #fff;
        }

        .card {
            border-radius: .5rem;
        }

        .table-scroll {
            border-radius: .5rem;
        }

        .table-scroll table thead th {
            font-size: 1.25rem;
        }

        thead {
            top: 0;
            position: sticky;
        }
    </style>
</head>

<body>
    <?php
    include 'connection.php';

    //SQL Syntax
    $date = $conn->query("SELECT `tanggal` FROM `tbl_transaksi`;");
    $total_keuntungan = 0;

    //echo '<pre>';
    //print_r($data);
    //echo '</pre>';
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
                    <ul class="navbar-nav" id="menu">
                        <li id="nav-item" class="nav-item">
                            <a class="nav-link" href="stok.php">Stok Management</a>
                        </li>
                        <li id="nav-item" class="nav-item">
                            <a class="nav-link" href="laporan-transaksi.php">Laporan Transaksi</a>
                        </li>
                        <li id="nav-item" class="nav-item">
                            <a class="nav-link" href="laporan-keuntungan.php" style="color: #03A9F4;">Laporan Keuntungan</a>
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
            <section class="intro">
                <div class="bg-image h-100" style="background-color: #f5f7fa;">
                    <div class="mask d-flex align-items-center h-100">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 335px">
                                                <table class="table table-striped">
                                                    <thead style="background-color: #25A0E2;">
                                                        <tr>
                                                            <th scope="col">Tanggal</th>
                                                            <th scope="col">Modal Pembelian</th>
                                                            <th scope="col">Hasil Penjualan</th>
                                                            <th scope="col">Keuntungan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Ambil data tanggal dahulu -->
                                                        <?php foreach ($date as $key => $tgl) : ?>
                                                            <?php
                                                            $data = $conn->query("SELECT SUM(`total_modal`), SUM(`grand_total`) FROM `tbl_transaksi` WHERE `tanggal` = '" . $tgl['tanggal'] . "';");
                                                            ?>
                                                            <!-- Ambil Jumlah  -->
                                                            <?php foreach ($data as $key => $dt) : ?>
                                                                <tr>
                                                                    <td><?= $tgl['tanggal'] ?></td>
                                                                    <td><?= $dt['SUM(`total_modal`)'] ?></td>
                                                                    <td><?= $dt['SUM(`grand_total`)'] ?></td>
                                                                    <td><?php
                                                                        $keuntungan = $dt['SUM(`grand_total`)'] - $dt['SUM(`total_modal`)'];
                                                                        $total_keuntungan += $keuntungan;
                                                                        ?>
                                                                        <?= $keuntungan ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php endforeach ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr style="background-color: #25A0E2; color: #fff;">
                                                            <th colspan="3">
                                                                Total Keuntungan
                                                            </th>
                                                            <th>
                                                                Rp. <?php echo number_format($total_keuntungan, 0, ",", ".") ?>
                                                            </th>
                                                        </tr>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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