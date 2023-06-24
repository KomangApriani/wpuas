<!DOCTYPE html>
<html>
<head>
	<title>FORM KARYAWAN</title>
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
	<h2>Data Karyawan</h2>
	<form action="" method="post">
		<table width="374" border="1" align="center">
			<tr>
				<td width="130"><b>Kode anggota</b></td>
				<td><label><input type="text" name="Kode_anggota"></label></td>
			</tr>
			<tr>
				<td><b>Nama snggota</b></td>
				<td><input type="text" name="Nama_anggota"></td>
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
				<td colspan="3" align="left"><input type="submit" value="Simpan" name="proses"><button type="submit">
<input type="reset" value="Cancel" name=cencel><button type="censel">
<input type="submit" values="" name="proses"><button type="update"><a type="reset" href="menuutama.php" type="submit">Back</a></button>
<button type="submit"><a href="tampilKaryawan.php" type="submit">Lihat Data</a></button>
                  </tr>
		</table>
	 </form>
   </center>

</body>
</html>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
	mysqli_query($koneksi, "insert into tb_datakaryawan set
		Kode_anggota='$_POST[Kode_anggota])',
		Nama_anggota= '$_POST[Nama_anggota]',
		Alamat= '$_POST[Alamat]',
		Nomor_telepon= '$_POST[Nomor_telepon]',
		Username= '$_POST[Username]',
		Password= '$_POST[Password]'");

		echo "Data baru telah tersimpan";
	}
?>