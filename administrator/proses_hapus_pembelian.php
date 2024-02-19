<?php
include '../koneksi.php';

$PelangganID = $_POST['PelangganID'];

mysqli_query($koneksi,"DELETE from pelanggan where PelangganID='$PelangganID'");
mysqli_query($koneksi,"DELETE from penjualan where PelangganID='$PelangganID'");

header("location:pembelian.php?pesan=hapus");
?>