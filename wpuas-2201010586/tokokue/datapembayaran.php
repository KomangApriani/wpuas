<!DOCTYPE html>
<html>
<head>
	<title>FORM PEMBAYARAN</title>
	<style type="text/css">
		body {background-image: url('bg7.jpg');
		background-repeat: no-repeat;
		background-size: cover;}
		h2 {background-color: grey;}
	</style>
</head>
<body>
	<center>
	<h2>Pembayaran</h2>
	<form action="" method="post">
		<table width="374" border="1" align="center">
			<tr>
				<td width="130"><b>Kode_pembayaran</b></td>
				<td><input type="text" name="Kode_pembayaran"></td>
			</tr>
			<tr>
				<td><b>Kode_kue</b></td>
				<td><input type="text" name="Kode_kue"></td>
			</tr>
			<tr>
              <td><b>Kode_pesanan</b></td>
				<td><input type="text" name="Kode_pesanan"></td>
			</tr>
			<tr>
				<td><b>Harga</b></td>
				<td><input type="text" name="Harga"></td>
			</tr>
			<tr>
              <td><b>Jumlah</b></td>
				<td><input type="text" name="Jumlah"></td>
			</tr>
			<tr>
                <td><b>Total_pembayaran</b></td>
				<td><input type="text" name="Total_pembayaran"></td>
			</tr>
			<tr>
				<td><b>Tanggal_pembayaran</b></td>
				<td><input type="text" name="Tanggal_pembayaran"></td>
			</tr>
			<tr>
				<td colspan="3" align="left"><input type="submit" value="Simpan" name="proses"><input type="reset" name="cancel" id="button2" value="Cancel"/><button
type="reset"><a
href="menuutama.php"
type="submit">Back</a></button>
<button type="reset"><a href="menuutama2.php" type="submit">Back2</a></button>
<button type="submit"><a href="tampilpembayaran.php" type="submit">Lihat Data</a></button>
<button type="submit" onclick="window.print()">Cetak</button>
            </tr>
        </table>
      </form>
    </center>
</body>
</html>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
	mysqli_query($koneksi, "insert into tb_pembayaran set

		Kode_pembayaran= '$_POST[Kode_pembayaran])',
		Kode_kue= '$_POST[Kode_kue]',
        Kode_pesanan= ,$_POST[Kode_pesanan',
		Harga= '$_POST[Harga]',
        Jumlah= '$_POST[Jumlah]',
        Total_pembayaran= '$_POST[Total_pembayaran]',
		Tanggal_pembayaran= '$_POST[Tanggal_pembayaran]'");

		echo "Data baru telah tersimpan";
	}
?>