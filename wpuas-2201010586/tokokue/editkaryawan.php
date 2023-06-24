<?php
include "koneksi.php";
$id= $_GET['id'];

$tampil = mysqli_query($koneksi, "select*from tb_datakaryawan where Kode_Anggota='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM UPDATE KARYAWAN</title>
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
	<h2>UPDATE DATA KARYAWAN</h2>
	<form method="post" action="update-karyawan.php">
		<?php while ($hasil = mysqli_fetch_array($tampil)){?>
		<table width="374" border="1" align="center">
			<tr>
				<td>Kode Anggota</td>
				<td><label><input type="text" value="<?php echo $hasil['Kode_anggota'];?>" name="Kode_anggota"></label></td>
			</tr>
			<tr>
				<td>Nama Anggota</td>
				<td><input type="text" value="<?php echo $hasil['Nama_anggota'];?>" name="Nama_anggota"></td>
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
				<input type="hidden" value="<?php echo $hasil['Kode_anggota']?>" name="id"/>
				<td><button><a href="proseseditkaryawan.php">Simpan Perubahan</a></button></td>
				<td><button><a href="tampilkaryawan.php">Back</a></button></td>
			</tr>
		</table>
	<?php }?>
	</form>
</center>
</body>
</html>