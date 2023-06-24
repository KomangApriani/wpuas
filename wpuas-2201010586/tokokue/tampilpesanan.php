<?php
include "koneksi.php";
?>

<h2>DATA KUE</h2>
<table border="1">
	<tr>
		<td>Kode_pesanan</td>
		<td>Kode_kue</td>
		<td>Nama_pemesan</td>
		<td>Alamat</td>
        <td>Nomor_telepon</td>
        <td>Kode_pembayaran
        <td>Action</td>
	</tr>
	<tr>
		<?php

		$tampil=mysqli_query($koneksi, "select* from tb_datakue");
		while($hasil=mysqli_fetch_array($tampil)){
			?>
			<tr>
              <td><?php echo $hasil['Kode_pesanan'];?><a href="update-tampilpesanan.php?id=<?php echo $data['id'];?>"></a></td>
				<td><?php echo $hasil['Kode_kue'];?></td>
				<td><?php echo $hasil['Nama_pemesan'];?></td>
				<td><?php echo $hasil['Alamat'];?></td>
               <td><?php echo
$hasil['Nomor_telepon'];?></td>
              	<td><?php echo $hasil['Kode_pembayaran'];?></td>
                <td><a href="delete-datapemesan.php?id=<?php echo
$data['id'];?>"         onclick="javascript:return confirm('Anda yakin akan hapus data?')">Delete</a></td>
			</tr>
			<?php
        }
		?>
		<tr>
          <td align="right"><button><a       href="datapesanan.php">Back</button></td>
		</tr>
</table>