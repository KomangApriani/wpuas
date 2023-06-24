<?php
include "koneksi.php";
$id= $_GET['id'];

$tampil = mysqli_query($koneksi, "select*from tb_datakue where Kode_kue='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM UPDATE KUE</title>
	<style>
	body{
		background-image: url(KUE4.jpg);
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>
</head>
<body>
	<center>
	<h2>UPDATE DATA KUE</h2>
	<form method="post" action="update-datakue.php">
		<?php while ($hasil = mysqli_fetch_array($tampil)){?>
		<table width="374" border="1" align="center">
			<tr>
				<td>Kode Kue</td>
				<td><label><input type="text" value="<?php echo $hasil['Kode_kue'];?>" name="Kode_kue"></label></td>
			</tr>
			<tr>
				<td>Ukuran</td>
				<td><input type="text" value="<?php echo $hasil['Ukuran'];?>" name="Ukuran"></td>
			</tr>
			<tr>
				<td>Tema Kue</td>
				<td><input type="text" value="<?php echo $hasil['Tema_kue'];?>" name="Tema_kue"></td>
			</tr>
			<tr>
				<td>Rasa</td>
				<td><input type="text" value="<?php echo $hasil['Rasa'];?>" name="Rasa"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" value="<?php echo $hasil['Jumlah'];?>" name="Jumlah"></td>
			</tr>
			<tr>
                <td>Harga</td>
				<td><input type="text" value="<?php echo $hasil['Harga'];?>" name="Harga"><td>
                <td>Total_harga</td>
				<td><input type="text" value="<?php echo $hasil['Total_harga'];?>" name="Total_harga"><td>
			</tr>
			<tr>
				<input type="hidden" value="<?php echo $hasil['Kode_kue']?>" name="id"/>
				<td><button><a href="proseseditkue.php">Simpan Perubahan</a></button></td>
				<td><button><a href="tampilkue.php">Back</a></button></td>
			</tr>
		</table
    <?php }?>
	</form>
</center>
</body>
</html>