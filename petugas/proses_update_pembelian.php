<?php
include '../koneksi.php';

$PelangganID = $_POST['PelangganID'];
$NamaPelanggan = $_POST['NamaPelanggan'];
$NomerTelepon = $_POST['NomorTelepon'];
$Alamat = $_POST['Alamat'];

mysqli_query($koneksi,"update pelanggan set NamaPelanggan='$NamaPelanggan', NomorTelepon='$NomerTelepon', Alamat='$Alamat' where PelangganID='$PelangganID'");

header("location:pembelian.php?pesan=update");

?>