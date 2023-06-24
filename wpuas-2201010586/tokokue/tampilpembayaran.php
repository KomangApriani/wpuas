<?php
include "koneksi.php";
?>

<h2>DATA PEMBAYARAN</h2>
<table border="1">
	<tr>
		<td>Kode_pembayaran</td>
		<td>Kode_kue</td>
		<td>Kode_pesanan</td>
		<td>Harga</td>
		<td>Jumlah</td>
		<td>Total_pembayaran</td>
        <td>Tanggal_pembayaran</td>
        <td>Action</td>

      <td>
      </td>
		<?php

		$tampil=mysqli_query($koneksi, "select* from tb_pembayaran");
		while($hasil=mysqli_fetch_array($tampil)){
			?>
			<tr>
				<td><?php echo $hasil['Kode_pembayaran'];?></td>
				<td><?php echo $hasil['Kode_kue'];?></td>
				<td><?php echo $hasil['Kode_pesanan'];?></td>
				<td><?php echo $hasil['Harga'];?></td>
				<td><?php echo $hasil['Jumlah'];?></td>
				<td><?php echo $hasil['Total_pembayaran'];?></td>
                <td><?php echo $hasil['Tanggal_pembayaran'];?></td>
				<td><a href="editpembayaran.php?id=<?php echo $hasil['Kode_pembayaran'];?>"></a>
<a href="delete-datapembayaran.php?id=<?php echo $hasil['Kode_pembayaran'];?>" onclick="javascript: return confirm('Anda Yakin Akan Hapus Data?')">Delete</a></td>

			</tr>
			<?php
		}
		?>
		<tr>
				<td align="right"><button><a href="datapembayaran.php">Back</button></td>
		</tr>
</table>