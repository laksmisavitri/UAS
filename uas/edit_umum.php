<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Uniga - Perpustakaan Online</title>
</head>
<body>
	<div id="container">
		<div class="header"><img src="image/logo_uniga.png" width="100" height="100"><h1>Perpustakaan Universitas Gajayana Malang</h1>
    	<div class="main">
			<div class="left">
				<h3 align="center">MENU</h3>
					<ul>
						<li><a href="menu_admin.php">Home</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
        		<h3 align="center">DAFTAR BUKU</h3>
					<ul>
						<li><a href="anak_adm.php">Buku Anak</a></li>
						<li><a href="umum_adm.php">Pengetahuan Umum</a></li>
						<li><a href="kamus_adm.php">Kamus</a></li>
					</ul>
			</div>
         </div>
         </div>
		<div class="middle">
          <div align="center">
    <?php
	include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi,"SELECT * from umum where id = '$id'");
	while($d = mysqli_fetch_array($data)) {
		?>
		<form method="post" action="update_umum.php">
			<table align="center">
				<tr>
					<td>Kode</td>
                    <td>
                    	<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="kode_buku" maxlength="6" value="<?php echo $d['kode_buku']; ?>">
                    </td>
				</tr>
				<tr>
					<td>Judul</td>
					<td>
                    	<input type="text" name="judul_buku" value="<?php echo $d['judul_buku']; ?>">
                    </td>
				</tr>
            	<tr>
					<td>Pengarang</td>
					<td>
                    	<input type="text" name="pengarang" value="<?php echo $d['pengarang']; ?>">
                    </td>
				</tr>
                <tr>
					<td>Status</td>
					<td>
                    	<input type="text" name="status" value="<?php echo $d['status']; ?>">
                    </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN">&nbsp;<input type="submit" value="KEMBALI"><a href = "update_umum.php"></td>
				</tr>
			</table>
		</form>
		<?php
	}
	?>
<p>&nbsp;</p>
	<div class="footer"><p align="center">Copyright © 2018 - Belajar CSS Responsive</a></p>
	</div>
</div>
</body>
</html>
