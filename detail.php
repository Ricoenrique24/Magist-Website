<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail Transaksi</title>
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
			margin: auto;
			width: 100%;
		}

		#container {
			padding-top: 150px;
			padding-bottom: 40px;
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

		#grand {
			vertical-align: middle;
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
							<a class="nav-link" href="laporan-keuntungan.php">Laporan Keuntungan</a>
						</li>
					</ul>
				</div>
				<button class="login" type="button" class="btn btn-lg">
					<a href="logout.php">Logout</a>
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
													<?php
													include 'connection.php';

													//SQL Syntax
													$data = $conn->query("SELECT brg.nama_barang, deTrx.jumlah, brg.satuan_barang, brg.harga_jual FROM tbl_transaksi AS trx INNER JOIN tbl_detail_transaksi AS deTrx ON trx.id_transaksi = deTrx.id_transaksi INNER JOIN tbl_barang AS brg ON brg.id_barang = deTrx.id_barang WHERE trx.id_transaksi = " . $_GET["id_transaksi"] . ";");

													$grand_total = 0;

													//echo '<pre>';
													//print_r($data);
													//echo '</pre>';
													?>
													<thead style="background-color: var(--main);">
														<tr>
															<th scope="col">Nama barang</th>
															<th scope="col">Jumlah</th>
															<th scope="col">Satuan</th>
															<th scope="col">Harga</th>
															<th scope="col">Total Harga</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach ($data as $key => $dt) : ?>
															<tr>
																<td><?= $dt['nama_barang'] ?></td>
																<td><?= $dt['jumlah'] ?></td>
																<td><?= $dt['satuan_barang'] ?></td>
																<td>Rp. <?= number_format($dt['harga_jual'], 0, ",", ".") ?></td>
																<td><?php $total = $dt['harga_jual'] * $dt['jumlah'];
																	$grand_total += $total; ?>
																	Rp. <?= number_format($total, 0, ",", ".") ?></td>
															</tr>
														<?php endforeach; ?>
													</tbody>
													<tbody>
														<tr style="background-color: var(--main); color: #fff;">
															<th colspan="4">Grand Total</th>
															<th>Rp. <?php echo number_format($grand_total, 0, ",", ".") ?></th>
														</tr>
													</tbody>
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