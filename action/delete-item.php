<?php 
include "connection.php";

// Your Code in here
$id = $_GET['id'];

$sql = "DELETE FROM tbl_barang WHERE id = '$id'";

if ($conn->query($sql)) {
    header('location:../stok.php');
} else {
    echo mysqli_error($conn);
}


?>