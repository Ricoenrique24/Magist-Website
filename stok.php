<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Management</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
            padding-top: 150px;
            padding-bottom: 30px;
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
            justify-content: space-between;
            padding: 25px 0;
            text-decoration: none;
        }

        #nav-item {
            padding-right: 30px;
            font-weight: bold;
        }

        #nav-item a:hover {
            color: var(--main);
        }

        #logo {
            font-size: 2rem;
            font-weight: 600;
            color: var(--main);
            padding-right: 185px;
        }

        #logo span {
            color: var(--font);
        }

        .login a {
            font-size: 16px;
            background: var(--second);
            text-decoration: none;
            color: var(--main);
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

        /* Modal styles */
        #bm {
            background-color: var(--main);
            color: white;
        }

        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
            font-size: 14px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
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

        .table-title {
            background: var(--main);
            color: #fff;
            padding: 15px 30px;
            min-width: 100%;
            border-radius: 4px 4px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            padding-right: 50px;
            color: whitesmoke;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: white;
            padding: 12px 40px;
            vertical-align: middle;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 10px;
            margin: 10px 10px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
        }

        table.table td a {
            padding-right: 20px;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        /* Custom checkbox */
        /* .custom-checkbox {
            padding-left: 15px;
            float: right;
        }

        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }

        .custom-checkbox label:before {
            width: 18px;
            height: 18px;
        }

        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }

        .custom-checkbox input[type="checkbox"]:checked+label:before {
            border-color: var(--main);
            background: var(--main);
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            border-color: #fff;
        }

        .custom-checkbox input[type="checkbox"]:disabled+label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        } */
    </style>
</head>

<body>
    <?php include 'connection.php'; ?>
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
                            <a class="nav-link" href="stok.php" style="font-weight: bold; color: var(--main);">Stok Management</a>
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
    <section class="vh-100">
        <div class="container" id="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Stok <b>Management</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#addStok"><i class='bx bxs-plus-circle'></i><span>Tambah Baru</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <!-- <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th> -->
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Jumlah</th>
                            <th>Unit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($conn, "SELECT * FROM tbl_barang");
                        while ($dt = mysqli_fetch_array($data)) :
                        ?>
                            <tr>
                                <!-- <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td> -->
                                <td><?= $no++ ?>.</td>
                                <td><?= $dt['nama_barang'] ?></td>
                                <td>Rp. <?= number_format($dt['harga_beli'], 0, ",", ".") ?></td>
                                <td>Rp. <?= number_format($dt['harga_jual'], 0, ",", ".") ?></td>
                                <td><?= $dt['jumlah_stok'] ?></td>
                                <td><?= $dt['satuan_barang'] ?></td>
                                <td>
                                    <a href="#" class="edit" data-bs-toggle="modal" data-bs-target="#editStok<?= $no ?>"><i class='bx bxs-pencil'></i>Ubah</a>
                                    <a href="#" class="delete" data-bs-toggle="modal" data-bs-target="#deleteStok<?= $no ?>"><i class='bx bxs-minus-circle'></i>Hapus</a>
                                </td>
                            </tr>
                            <!-- Add Modal -->
                            <div id="addStok" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="action.php" method="POST">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Ubah Data Barang</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="form-check-label">Nama Barang</label>
                                                    <input type="text" class="form-control" name="nama" required>
                                                </div><br>
                                                <div class="form-group">
                                                    <label class="form-check-label">Harga Beli</label>
                                                    <input type="text" class="form-control" name="harga_beli" required>
                                                </div><br>
                                                <div class="form-group">
                                                    <label class="form-check-label">Harga Jual</label>
                                                    <input type="text" class="form-control" name="harga_jual" required>
                                                </div><br>
                                                <div class="form-group">
                                                    <label class="form-check-label">Jumlah</label>
                                                    <input type="text" class="form-control" name="jumlah" required>
                                                </div><br>
                                                <div class="form-group">
                                                    <label class="form-check-label">Unit</label>
                                                    <input type="text" class="form-control" name="unit" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Batal">
                                                <input type="submit" id="bm" class="btn btn-info" name="add" value="Simpan">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Edit Modal -->
                            <div id="editStok<?= $no ?>" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="action.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $dt['id_barang'] ?>">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Ubah Data Barang</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="form-check-label">Nama Barang</label>
                                                    <input type="text" class="form-control" name="nama" value="<?= $dt['nama_barang'] ?>">
                                                </div><br>
                                                <div class="form-group">
                                                    <label class="form-check-label">Harga Beli</label>
                                                    <input type="text" class="form-control" name="harga_beli" value="<?= $dt['harga_beli'] ?>">
                                                </div><br>
                                                <div class="form-group">
                                                    <label class="form-check-label">Harga Jual</label>
                                                    <input type="text" class="form-control" name="harga_jual" value="<?= $dt['harga_jual'] ?>">
                                                </div><br>
                                                <div class="form-group">
                                                    <label class="form-check-label">Jumlah</label>
                                                    <input type="text" class="form-control" name="jumlah" value="<?= $dt['jumlah_stok'] ?>">
                                                </div><br>
                                                <div class="form-group">
                                                    <label class="form-check-label">Unit</label>
                                                    <input type="text" class="form-control" name="unit" value="<?= $dt['satuan_barang'] ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Batal">
                                                <input type="submit" id="bm" class="btn btn-info" name="up" value="Simpan Perubahan">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Delete Modal -->
                            <div id="deleteStok<?= $no ?>" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="action.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $dt['id_barang'] ?>">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Konfirmasi Hapus Barang ?</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin ingin meenghapus barang ini ?</p>
                                                <p class="text-warning"><small><?= $dt['nama_barang'] ?> ini akan dihapus permanen</small></p>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Batal">
                                                <input type="submit" class="btn btn-danger" name="del" value="Ya, Hapus">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </tbody>
                </table>
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
    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>