<?php 
include 'connection.php';
// Your code in here

$nama   = $_POST['nama'];
$beli   = $_POST['beli'];
$jual   = $_POST['jual'];
$jumlah = $_POST['jumlah'];
$unit   = $_POST['unit'];

//SQL Syntax 
$sql = "INSERT INTO `tbl_barang` (`id`, `nama`, `harga_beli`, `harga_jual`, `jumlah`, `unit`) VALUES (NULL, '".$nama."', '".$beli."', '".$jual."', '".$jumlah."', '".$unit."');";

if ($conn->query($sql)) {
    header('location:index.php');
} else {
    echo mysqli_error($conn);
}
?>