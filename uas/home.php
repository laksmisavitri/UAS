<html>
<head>
	<title>Login - Perpustakaan Online</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<form method="post" action="cek_anggota.php">
	<div class="tampilan">
		<div class="kepala">
			<div class="logo"></div>
			<h2 class="judul">Login Anggota</h2>
		</div>
	<div class="artikel">
	<div class="kesalahan">
<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
    		echo "Username atau password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah logout";
   		}
	}
?>
	</div>
<form method="post" action="cek_anggota.php">
	<table width="415" height="87" align="center">
<tr>
			<td>Username</td>
			<td><input type="text" name="username" placeholder="Masukkan username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" placeholder="Masukkan password"></td>
		</tr>
		<tr>
			<td></td>
			<td><center><input type="submit" value="LOGIN"></td>
		</tr>
	</table>
</form>
    <div class="login"><a href="signup.php">Signup</a> or <a href="login_admin.php">Admin Access</a></div>
    </div>
  </div>
  </div>
  </div>
</body>
</html> 