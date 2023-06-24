<?php
session_start();
include 'koneksi.php';

$Username = $_POST['Username'];
$Password = $_POST['Password'];

$login = mysqli_query($koneksi,"select* from tb_pembeli where Username='$Username' and Password='$Password'");
$ketemu = mysqli_num_rows($login);

if($ketemu > 0){
	#jika ketemu
	$_SESSION['Username'] = $Username;
	$_SESSION['Password'] = $Password;
	header("location:menuutama2.php");
}else{
	header("location:login2.php?pesan=gagal");
}

?>