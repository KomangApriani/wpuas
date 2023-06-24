<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select* from tb_datakaryawan where username= '$username' and password= '$password'");
$ketemu = mysqli_num_rows($login);

if($ketemu > 0){
   #jika ketemu
   $_SESSION['username'] =$username;
   $_SESSION['password'] =$password;
  header("location:menuutama.php");
}else{
  header("location:login.php? pesan=gagal");


}
?>