<?php
include "koneksi.php";
$id=$_GET['id'];
$Kode_anggota=$_POST['Kode_anggota'];
$Nama_anggota=$_POST['Nama_anggota'];
$Alamat=$_POST['Alamat'];
$Nomor_telepon=$_POST['Nomor_telepon'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];

mysqli_query($koneksi, "Update tb_datakaryawan set Kode_anggota='$Kode_anggota', Nama_anggota='$Nama_anggota',
Alamat='$Alamat',
Nomor_telepon='$Nomor_telepon', Username='$Username',
Password='$Password'");
?>