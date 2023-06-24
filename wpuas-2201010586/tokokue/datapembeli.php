<!DOCTYPE html>
<html>
<head>
	<title>FORM PEMBELI</title>
	<style type="text/css">
		body{background-image: url(bg3.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;}
			h2{background-color: lightblue;}
	</style>
</head>
<body>
	<center>
	<h2>Data Pembeli</h2>
	<form action="" method="post">
		<table width="374" border="1" align="center">
			<tr>
				<td width="130"><b>Kode pembeli</b></td>
				<td><label><input type="text" name="Kode_pembeli"></label></td>
			</tr>
			<tr>
				<td><b>Nama</b></td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td><b>Alamat</b></td>
				<td><input type="text" name="Alamat"></td>
			</tr>
			<tr>
				<td><b>Nomor telepon</b></td>
				<td><input type="text" name="Nomor_telepon"></td>
			</tr>
			<tr>
				<td><b>Username</b></td>
				<td><input type="text" name="Username"></td>
			</tr>
			<tr>
				<td><b>Password</b></td>
				<td><input type="text" name="Password"></td>
			</tr>
			<tr>
			<td colspan="3" align="left">
              <input type="submit" value="Simpan" name="proses">
              <input type="reset" name="cancel" id="button2" value="Cancel"/><button
type="reset"><a
href="menuutama.php"
type="submit">Back</a></button>
<button type="reset"><a href="menuutama2.php" type="submit">Back2</a></button>
              <button type="submit"><a href="tampilpembeli.php" type="submit">Lihat Data</a></button></td>
		</table>
	</form>
</center>

</body>
  </html>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
	mysqli_query($koneksi, "insert into tb_pembeli set
		Kode_pembeli= '$_POST[Kode_pembeli]',
        Nama=$_POST[Nama]
		Alamat= '$_POST[Alamat]',
		Nomor_telepon= '$_POST[Nomor_telepon]',
		Username= '$_POST[Username]',
		Password= '$_POST[Password]'");

		echo "Data baru telah tersimpan";
	}
?>