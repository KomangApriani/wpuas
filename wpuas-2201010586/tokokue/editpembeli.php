<?php
include "koneksi.php";
$id= $_GET['id'];

$tampil = mysqli_query($koneksi, "select*from tb_datapembeli where Kode_pembeli='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM UPDATE PEMBELI</title>
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
	<h2>UPDATE DATA PEMBELI</h2>
	<form method="post" action="update-pembeli.php">
		<?php while ($hasil = mysqli_fetch_array($tampil)){?>
		<table width="374" border="1" align="center">
			<tr>
				<td>Kode Pembeli</td>
				<td><label><input type="text" value="<?php echo $hasil['Kode_pembeli'];?>" name="Kode_pembeli"></label></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" value="<?php echo $hasil['Nama'];?>" name="Nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" value="<?php echo $hasil['Alamat'];?>" name="Alamat"></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td><input type="text" value="<?php echo $hasil['Nomor_telepon'];?>" name="Nomor_telepon"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" value="<?php echo $hasil['Username'];?>" name="Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" value="<?php echo $hasil['Password'];?>" name="Password"></td>
			</tr>
			<tr>
				<input type="hidden" value="<?php echo $hasil['Kode_pembeli']?>" name="id"/>
				<td><button><a href="proseseditpembeli.php">Simpan Perubahan</a></button></td>
				<td><button><a href="tampilpembeli.php">Back</a></button></td>
			</tr>
		</table>
	<?php }?>
	</form>
</center>
</body>
</html>