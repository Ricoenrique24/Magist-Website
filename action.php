<?php
include 'connection.php';

if (isset($_POST['add'])) {
    $add = mysqli_query($conn, "INSERT INTO tbl_barang (nama_barang, harga_beli, harga_jual, jumlah_stok, satuan_barang) VALUES ('$_POST[nama]', '$_POST[harga_jual]', '$_POST[harga_beli]', '$_POST[jumlah]', '$_POST[unit]')");
    if ($add) {
        header('location:stok.php');
        // echo "<script> alert ('Barang Berhasil Ditambahkan !');
        // document.location='stok.php';
        // </script>";
    } else {
        echo mysqli_error($conn);
        // echo "<script> alert ('Barang Gagal Ditambahkan !');
        // document.location='stok.php';
        // </script>";
    }
}

if (isset($_POST['up'])) {
    $up = mysqli_query($conn, "UPDATE tbl_barang SET nama_barang = '$_POST[nama]', harga_jual = '$_POST[harga_jual]', harga_beli = '$_POST[harga_beli]', jumlah_stok = '$_POST[jumlah]', satuan_barang = '$_POST[unit]' WHERE id='$_POST[id]'");
    if ($up) {
        header('location:stok.php');
        // echo "<script> alert ('Barang Berhasil Ditambahkan !');
        // document.location='stok.php';
        // </script>";
    } else {
        echo mysqli_error($conn);
        // echo "<script> alert ('Barang Gagal Ditambahkan !');
        // document.location='stok.php';
        // </script>";
    }
}

if (isset($_POST['del'])) {
    $del = mysqli_query($conn, "DELETE FROM tbl_barang WHERE id_barang = '$_POST[id]'");
    if ($del) {
        header('location:stok.php');
        // echo "<script> alert ('Barang Berhasil Ditambahkan !');
        // document.location='stok.php';
        // </script>";
    } else {
        echo mysqli_error($conn);
        // echo "<script> alert ('Barang Gagal Ditambahkan !');
        // document.location='stok.php';
        // </script>";
    }
}

if (isset($_POST['delAll'])) {
    $del = mysqli_query($conn, "DELETE FROM tbl_barang WHERE id = '$_POST[id]'");
    if ($del) {
        header('location:stok.php');
        // echo "<script> alert ('Barang Berhasil Ditambahkan !');
        // document.location='stok.php';
        // </script>";
    } else {
        echo mysqli_error($conn);
        // echo "<script> alert ('Barang Gagal Ditambahkan !');
        // document.location='stok.php';
        // </script>";
    }
}
