<?php
include "koneksi.php";
?>

<h2>DATA KARYAWAN</h2>
<table border="1">
	<tr>
		<td>Kode_anggota</td>
        <td>Nama_anggota</td>
		<td>Alamat</td>
		<td>Nomor_telepon</td>
		<td>Username</td>
		<td>Password</td>
        <td>Action</td>
	</tr>
	<tr>
		<?php

		$tampil=mysqli_query($koneksi, "select* from tb_datakaryawan");
		while($hasil=mysqli_fetch_array($tampil)){
			?>
			<tr>
				<td><?php echo $hasil['Kode_anggota'];?></td>
				<td><?php echo $hasil['Nama_anggota'];?></td>
				<td><?php echo $hasil['Alamat'];?></td>
				<td><?php echo $hasil['Nomor_telepon'];?></td>
				<td><?php echo $hasil['Username'];?></td>
				<td><?php echo $hasil['Password'];?></td>
				<td><a href="editkaryawan.php?id=<?php echo $hasil['Kode_anggota'];?>">Edit</a><a href="delete-datakaryawan.php?id=<?php echo $data['id'];?>" onclick="javascript:return confirm('Anda yakin akan hapus data?')">Delete</a></td>
			</tr>
			<?php
        }
		?>
		<tr>
<td align="right"><button>
                  <a               href="datakaryawan.php">Back</button></td>
		</tr>
</table>