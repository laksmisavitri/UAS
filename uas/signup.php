<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - Perpustakaan Online</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<form method="post" action="login_admin.php">
	<div class="tam">
		<div class="kepala">
			<div class="logo"></div>
			<h2 class="judul">Registrasi Anggota</h2>
</div>
	<div class="artikel">
<form method="post" action="proses.php">
		<table width="415" height="87" align="center">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
            <tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
				<td></td>
				<td><center><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
    	<div class="login"><a href="home.php">Anggota Access</a> or <a href="login_admin.php">Admin Access</a></div>

</div>
</body>
</html> 