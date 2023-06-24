<?php
include "koneksi.php";
$id=$_POST['id'];
$Kode_pembeli=$_POST['Kode_pembeli'];
$Nama=$_POST['Nama'];
$Alamat=$_POST['Alamat'];
$Nomor_telepon=$_POST['Nomor_telepon'];
$Username=$_POST['Username'];

$query="UPDATE tb_datakue SET Kode_pembeli='$Kode_pembeli',
Nama='$Nama',
Alamat='$Alamat',
Nomor_telepon='$Nomor_telepon',
Username='$Username'
WHERE Kode_pembeli='$id'";
$hasil=mysqli_query($koneksi, $query);

if($hasil){
header('location:tampilpembeli.php');

}else{
	echo "Update data gagal!";
}

?>