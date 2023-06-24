<?php

#Deklarasi variabel
    $hostname="localhost";
    $username="root";
    $password="";
    $database="db_tokokue";

#Koneksi ke server database
    $koneksi
=mysqli_connect($hostname,$username,$password,$database) or die ("Koneksi Gagal");

#Memilih database
      if(mysqli_connect_error()){
      echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
}
?>