<html>
<head>
	<title>FORM KUE</title>
	<style type="text/css">
		body {background-image: url('bg4.jpg');
		background-repeat: no-repeat;
		background-size: cover;}
	</style>
</head>
<body>
	<br>
	<br>
	<center>
	<h1>Data Kue</h1>
	<form action="" method="post">
		<table width="374" border="3" align="center">
			<tr>
				<td width="130"><b>Kode kue</b></td>
				<td><label><input type="text" name="Kode_kue"></label></td>
			</tr>
			<tr>
				<td><b>Ukuran</b></td>
				<td><input type="radio" name="Ukuran" value="Kecil"><b>Kecil</b><input type="radio" name="Ukuran" value="Sedang"><b>Sedang</b><input type="radio" name="Ukuran" value="Besar"><b>Besar</b></td>

			</tr>
			<tr>
				<td><b>Tema kue</b></td>
				<td><input type="text" name="Tema_kue"></td>
			</tr>
			<tr>
				<td><b>Rasa</b></td>
				<td><input type="text" name="Rasa"></td>
			</tr>
			<tr>
				<td><b>Jumlah</b></td>
				<td><input type="text" name="Jumlah"></td>
			</tr>
			<tr>
              <td><b>Harga</b></td>
				<td><input type="text" name="Harga"></td>
			</tr>
			<tr>
              <td><b>Total Harga</b></td>
				<td><input type="text" name="Total_harga"></td>
			</tr>
			<tr>
              <td><b>Kode pesanan</b></td>
				<td><input type="text" name="Kode_pesanan"></td>
			</tr>
			<tr>
				<td colspan="3" align="left"><input type="submit" value="Simpan" name="proses"><input type="reset" name="cancel" id="button2" value="Cancel"/>
<button type="reset"><a href="menuutama.php"
type="submit">Back</a></button>
<button type="reset"><a href="menuutama2.php" type="submit">Back2</a></button>         <button type="submit"><a href="tampilkue.php"   type="submit">Lihat Data</a></button></td>
		</table>
	</form>
  </center>
</body>
</html>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
	mysqli_query($koneksi, "insert into tb_datakue set
		Kode_Kue='$_POST[Kode_Kue])',
		Ukuran= '$_POST[Ukuran]',
		Tema_Kue= '$_POST[Tema_Kue]',
		Rasa= '$_POST[Rasa]',
		Jumlah= '$_POST[Jumlah]',
        Harga= '$_POST[Harga]',
        Total_harga= '$_POST[Total_harga]',
        Kode_pesanan= '$_POST[Kode_pesanan]',");

		echo "Data baru telah tersimpan";
	}
?>