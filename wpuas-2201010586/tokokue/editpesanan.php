<?php
include "koneksi.php";
$id= $_GET['id'];

$tampil = mysqli_query($koneksi, "select*from tb_datapesana where Kode_pesanan='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM UPDATE PESANAN</title>
	<style>
	body{
		background-image: url(.jpg);
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>
</head>
<body>
	<center>
	<h2>UPDATE DATA PESANAN</h2>
	<form method="post" action="update-pembeli.php">
		<?php while ($hasil = mysqli_fetch_array($tampil)){?>
		<table width="374" border="1" align="center">
			<tr>
				<td>Kode Pesanan</td>
				<td><label><input type="text" value="<?php echo $hasil['Kode_pesanan'];?>" name="Kode_pesanan"></label></td>
			</tr>
			<tr>
				<td>Kode Kue</td>
				<td><input type="text" value="<?php echo $hasil['Kode_kue'];?>" name="Kode_kue"></td>
			</tr>
			<tr>
				<td>Nama_pemesan</td>
				<td><input type="text" value="<?php echo $hasil['Nama_pemesan'];?>" name="Nama_pemesan"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" value="<?php echo $hasil['Alamat'];?>" name="Alamat"></td>
			</tr>
			<tr>
				<td>Nomor_telepon</td>
				<td><input type="text" value="<?php echo $hasil['Nomor_telepon'];?>" name="Nomor_telepon"></td>
			</tr>
			<tr>
				<td>Kode_pembayaran</td>
				<td><input type="text" value="<?php echo $hasil['Kode_pembayaran'];?>" name="Kode_pembayaran"></td>
			</tr>
			<tr>
				<input type="hidden" value="<?php echo $hasil['Kode_pesanan']?>" name="id"/>
				<td><button><a href="proseseditpesanan.php">Simpan Perubahan</a></button></td>
				<td><button><a href="tampilpesanan.php">Back</a></button></td>
			</tr>
		</table>
	<?php }?>
	</form>
</center>
</body>
</html>