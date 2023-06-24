<!DOCTYPE html>
<html>
<head>
	<title>FORM LOGIN</title>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "logingagal! username dan password salah";
	}else if($_GET['pesan']=="logout"){
		echo "Anda telah berhasil logout";
	}else if($_GET['pesan']=="belum login"){
		echo "Anda harus login untuk mengakses halaman admin";
	}
}
?>

<br>

<form method="post" action="proseslogin2.php">
	<table width="374" border="1" align="center">
		<tr>
			<th colspan="3">LOGIN</th>
		</tr>
		<tr>
			<td width="130"><b>Username</b></td>
			<td width="140"><label><input type="text" name="Username" id="Username"></label></td>
		</tr>
		<tr>
			<td><b>Password</b></td>
			<td><label><input type="Password" name="Password" id="Password"></label></td>
		</tr>
		<tr>
		<td colspan="3" align="right">
          <input type="submit" name="login" id="button" value="LOGIN"/>
          <input type="reset" name="cancel" id="button2" value="CANCEL"/>
          <input type="submit" name="Buat Akun" id="button" value="BUAT AKUN"/></td>
		<tr>
      <br>
		<button><center><font style="color: white;"><a href="login.php">Masuk Sebagai Admin?</a></font></center></button>
    </tr>
	</table>
</form>
</body>
</html>