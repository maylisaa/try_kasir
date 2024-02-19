<?php
include '../koneksi.php';

$ProdukID = $_POST['ProdukID'];

mysqli_query($koneksi,"DELETE from produk where ProdukID='$ProdukID'");

header("location:data_barang.php?pesan=hapus");
?>