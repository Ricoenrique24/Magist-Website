<?php 
include 'connection.php';
// Your code in here

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$beli   = $_POST['beli'];
$jual   = $_POST['jual'];
$jumlah = $_POST['jumlah'];
$unit   = $_POST['unit'];

//SQL Syntax 
$sql = "UPDATE `tbl_barang` SET `nama` = '".$nama."', `harga_beli` = '".$beli."', `harga_jual` = '".$jual."', `jumlah` = '".$jumlah."', `unit` = '".$unit."' WHERE `tbl_barang`.`id` = ".$id.";";

if ($conn->query($sql)) {
    header('location:index.php');
} else {
    echo mysqli_error($conn);
}
?>