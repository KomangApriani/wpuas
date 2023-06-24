<!DOCTYPE html>
<html>
<head>
	<title>FORM PESANAN</title>
	<style type="text/css">
		body {
			background-image: url('bg5.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;}
	</style>
</head>
<body>
	<br>
	<br>
	<br>
	<center>
	<h2>Data Pesanan</h2>
	<form action="" method="post">
		<table width="374" border="3" align="center">
			<tr>
				<td width="130"><b>Kode pesanan</b></td>
				<td><input type="text" name="Kode_pesanan"></td>
			</tr>
			<tr>
				<td><b>Kode Kue</b></td>
				<td><input type="text" name="Kode_Kue"></td>
			</tr>
			<tr>
				<td><b>Nama pemesan</b></td>
				<td><input type="text" name="Nama_pemesan"></td>
			</tr>
			<tr>
				<td><b>Alamat pemesan</b></td>
				<td><input type="text" name="Alamat_pemesan"></td>
			</tr>
			<tr>
				<td><b>Nomor telepon</b></td>
				<td><input type="text" name="Nomor_telepon"></td>
			</tr>
			<tr>
              <td><b>Kode pembayaran</b></td>
				<td><input type="text" name="Kode_pembayaran"></td>
			</tr>
			<tr>
				<td colspan="3" align="left"><input type="submit" value="Simpan" name="proses"><input type="reset" name="cancel" id="button2" value="Cancel"/><button type="reset"><a href="menuutama.php"
type="submit">Back</a></button>
<button type="reset"><a href="menuutama2.php" type="submit">Back2</a></button>         <button type="submit"><a
href="tampilpembeli.php" type="submit">Lihat Data</a></button>

			</tr>
		</table>
	</form>
</center>

</body>
</html>



<?php
include "koneksi.php";

if(isset($_POST['proses'])){
	mysqli_query($koneksi, "insert into tb_datapesanan set
		Kode_pesanan= '$_POST[Kode_pesanan]',
		Kode_kue= '$_POST[Kode_kue])',
		Nama_pemesan= '$_POST[Nama_pemesan]',
		Alamat_pemesan= '$_POST[Alamat_pemesan]',
		Nomor_telepon= '$_POST[Nomor_telepon]',
        Kode_pembayaran= '$_POST[Kode_pembayaran]','");

		echo "Data baru telah tersimpan";
	}
?>