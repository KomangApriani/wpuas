<?php
include "koneksi.php";
$id=$_POST['id'];
$Kode_anggota=$_POST['Kode_anggota'];
$Nama_anggota=$_POST['Nama_anggota'];
$Alamat=$_POST['Alamat'];
$Nomor_telepon=$_POST['Nomor_telepon'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];

$query="UPDATE tb_datakaryawan SET Kode_anggota='$Kode_anggota',Nama_anggota='$Nama_anggota',Alamat='$Alamat',Nomor_telepon='$Nomor_telepon',Username='$Username',Password='$Password' WHERE Kode_Anggota='$id'";
$hasil=mysqli_query($koneksi, $query);

if($hasil){
header('location:tampilkaryawan.php');

}else{
	echo "Update data gagal!";
}

?>