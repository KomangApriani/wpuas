<html>
<head>
  <title> Form Login </title>
  <style>
    body {
      background-image: url(bg2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }
  </style>
  </head>
  <body>
  <?php
if(isset($_GET['pesan'])){
  if($_GET['pesan'] == "gagal"){
    echo "Login gagal! username dan password salah!";
  }else if($_GET['pesan'] == "logout"){
    echo "Anda telah berhasil logout";
  }else if($_GET['pesan'] == "belum_login"){
    echo "Anda harus login untuk mengakses halaman admin";
  }
}
?>
    <br>

 <form method="post"
action="proseslogin.php">
  <table width="374" border="1" align="center">
    <tr>
      <td width="105" rowspan="4" align="center"></td>
      <th colspan="3">LOGIN</th>
    </tr>
    <tr>
      <td width="105">USERNAME</td>
      <td width="3" class="bordless">:</td>
      <td width="144"><label>
        <input type="text" name="username" id="username">
      </label></td>
    </tr>
    <tr>
      <td>PASSWORD</td>
      <td class="bordless">:</td>
      <td><label>
        <input type="password" name="password" id="password">
      </label></td>
    </tr>
    <tr>
      <td colspan="3" align="right">
<input type="submit" name="login" id="button"value="LOGIN"/>
      <input type="reset" name="cansel" id="button2" value="CANCEL" /></td>
      <button><center><font style="color: white;"><a href="login2.php">Masuk Sebagai User?</a></font></center></button>
    </tr>
  </table>
  </form>
  </body>
  </html>