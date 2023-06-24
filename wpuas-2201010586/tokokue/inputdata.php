<html>
  <head>
    <title></title>
    </head>
  <body>
    <h3> Form Tambah Karyawan </h3>
    <Form action=" " method="post">
      <table>
        <tr>
          <td width="130">Kode anggota</td>
          <td><input type="text" name="kode_anggota"></td>
        </tr>
        <tr>
          <td>Nama nggota</td>
          <td><input type="text" name="nama_anggota"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
          <td>Nomor Telepon</td>
          <td><input type="text" name="nomor_telepon"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="text" name="password"></td>
        </tr>
        <tr>
         <td></td>
         <td><input type="submit" value="simpan" name="proses"></td>
        </tr>
      </table>
      </Form>
    </body>
  </html>

<?php
include "koneksi.php";

if (isset($_POST['proses'])){
        mysqli_query($koneksi, "insert into tb_datakaryawan set

 Kode anggota='$_POST[Kode_anggota]',

 Nama anggota='$_POST[Nama_anggota]',

 Alamat='$_POST[Alamat]',

 Nomor telepon='$_POST[Nomor_telepon]',

 Username='$_POST[Username]',

 Password='$_POST[Password]',
 ");
         echo "Data karyawan baru telah tersimpan";
  }
?>