<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/detail.css">
    <title>Document</title>
</head>
<body>
    
    <?php
    include 'action/connection.php';

    $data = $conn->query('SELECT * FROM `tbl_barang`');
    ?>

	<table border="1"> 
	<thead>
		<tr>
			<th colspan="4">DETAIL BARANG</th>
		</tr>
		<tr>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Unit</th>
			<th>Harga</th>
		</tr>
	
	</thead>
	<tbody>
		<?php foreach ($data as $key => $dt) : ?>
			<tr>
				<td>
					<?= $dt['nama'] ?>
				</td>
				<td>
					<?= $dt['jumlah'] ?>
				</td>
				<td>
					<?= $dt['unit'] ?>
				</td>
				<td>
					Rp. <?= number_format($dt['harga_beli'], 0, ",", ".") ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
	<tbody>
		<tr>
			<th colspan="3">TOTAL HARGA</th>
			<th>Rp.</th>
		</tr>
	</tbody>
</body>
</html>