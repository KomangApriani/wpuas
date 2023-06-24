<?php
include "koneksi.php";
?>

<h2>DATA PEMBELI</h2>
<table border="1">
	<tr>
		<td>Kode_pembeli</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Nomor_telepon</td>
		<td>Username</td>
		<td>Password</td>
	</tr>
	<tr>
		<?php

		$tampil=mysqli_query($koneksi, "select* from tb_pembeli");
		while($hasil=mysqli_fetch_array($tampil)){
			?>
			<tr>
				<td><?php echo $hasil['Kode_pembeli'];?><a href="update-tampilpembeli.php?id=<?php echo $data['id'];?>"></a></td>
				<td><?php echo
$hasil['Nama'];?></td>
				<td><?php echo $hasil['Alamat'];?></td>
				<td><?php echo $hasil['Nomor_telepon'];?></td>
				<td><?php echo $hasil['Username'];?></td>
				<td><?php echo $hasil['Password'];?></td>
				<td><a href="delete-tampilpembeli.php?id_pembeli=<?php echo $data['id'];?>" onclick="javascript:return confirm('Anda yakin akan hapus data?')">Delete</a></td>
			</tr>
			<?php
		}
		?>
		<tr>
				<td align="right"><button><a href="datapembeli.php">Back</button></td>
		</tr>
</table>