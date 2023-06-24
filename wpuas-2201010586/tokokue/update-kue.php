<?php
include "koneksi.php";
$id=$_POST['id'];
$Kode_kue=$_POST['Kode_kue'];
$Ukuran=$_POST['Ukuran'];
$Tema_kue=$_POST['Tema_kue'];
$Rasa=$_POST['Rasa'];
$Jumlah=$_POST['Jumlah'];
$Total_harga=$_POST['Total_harga'];
$Kode_pesanan=$_POST['Kode_pesanan'];

$query="UPDATE tb_datakue SET Kode_kue='$Kode_kue',
Ukuran='$Ukuran',
Tema_kue='$Tema_kue',
Rasa='$Rasa',
Jumlah='$Jumlah'
Total_harga='$Total_harga'
Kode_pesanan='$Kode_pesanan'
WHERE Kode_anggota='$id'";
$hasil=mysqli_query($koneksi, $query);

if($hasil){
header('location:tampilkue.php');

}else{
	echo "Update data gagal!";
}

?>