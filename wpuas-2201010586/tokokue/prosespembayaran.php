<?php
include "koneksi.php";
$id=$_GET['id'];
$Kode_pembayaran=$_POST['Kode_pembayaran'];
$Kode_kue=$_POST['Kode_kue'];
$Kode_pesanan=$_POST['Kode_pesanan'];
$Harga=$_POST['Harga'];
$Jumlah=$_POST['Jumlah'];
$Total_pembayaran=$_POST['Total_pembayaran'];
$Tanggal_pembayaran=$_POST['Tanggal_pembayaran']

mysqli_query($koneksi, "Update tb_pembayaran set Kode_pembayaran='$Kode_pembayaran', Kode_kue='$Kode_kue',
Kode_pesanan='$Kode_pesanan',
Harga='$Harga',
Jumlah='$Jumlah', Total_pembayaran='$Total_pembayaran',
Tanggal_pembayaran='$Tanggal_pembayaran'");
?>