<?php
include "koneksi.php";
?>

<h2>DATA KUE</h2>
<table border="1">
	<tr>
		<td>Kode_kue</td>
		<td>Ukuran</td>
		<td>Tema_kue</td>
		<td>Rasa</td>
		<td>Jumlah</td>
        <td>Harga</td
        <td>Total_harga</td>
        <td>Kode_pesanan
        <td>Action</td>
	</tr>
	<tr>
		<?php

		$tampil=mysqli_query($koneksi, "select* from tb_datakue");
		while($hasil=mysqli_fetch_array($tampil)){
			?>
			<tr>
              <td><?php echo $hasil['Kode_kue'];?><a href="update-tampilkue.php?id=<?php echo $data['id'];?>"></a></td>
				<td><?php echo $hasil['Ukuran'];?></td>
				<td><?php echo $hasil['Tema_kue'];?></td>
				<td><?php echo
$hasil['Rasa'];?></td>
				<td><?php echo $hasil['Jumlah'];?></td>
                <td><?php echo
$hasil['Harga'];?></td>
				<td><?php echo $hasil['Total_harga'];?></td>
				<td><?php echo $hasil['Kode_pesanan'];?></td>
                <td><a href="editkue.php?id=<?php echo $hasil['Kode_kue'];?>">Edit</a><a href="delete-datakue.php?id=<?php echo
$data['id'];?>"         onclick="javascript:return confirm('Anda yakin akan hapus data?')">Delete</a></td>
			</tr>
			<?php
        }
		?>
		<tr>
          <td align="right"><button><a       href="datakue.php">Back</button></td>
		</tr>
</table>