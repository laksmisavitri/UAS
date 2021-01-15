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
						<li><a href="menu.php">Home</a></li>
						<li><a href="kontak.php">Kontak</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
        		<h3 align="center">DAFTAR BUKU</h3>
					<ul>
						<li><a href="buku_anak.php">Buku Anak</a></li>
						<li><a href="buku_umum.php">Pengetahuan Umum</a></li>
						<li><a href="buku_kamus.php">Kamus</a></li>
					</ul>
			</div>
         </div>
         </div>
		<div class="middle">
          <div align="center">
          		<h2 align="center">BUKU UMUM</h2><br>
			<div class="buku">
			<div class="foto">
				<img src="image/book11.jpg" width="280">
				<div class="judul">200 Kanji Jepang</div>
				<div class="penulis">Penulis: Windra .S., William .P.N</div>
			</div>
			</div>
            <div class="buku">
			<div class="foto">
				<img src="image/book12.jpg" width="280">
				<div class="judul">Kamus Saku Korea Indonesia</div>
				<div class="penulis">Penulis: Usmi</div>
			</div>
			</div>
            <div class="buku">
			<div class="foto">
				<img src="image/book13.jpg" width="280">
				<div class="judul">Kamus Italia Indonesia</div>
				<div class="penulis">Penulis: S. Faizah Soenoto Rivai</div>
			</div>
			</div>
            <table border="10">
        		<tr>
					<th>No</th>
					<th>Kode</th>
					<th>Judul</th>
					<th>Pengarang</th>
            		<th>Status</th>
                 </tr>
				<?php
				include 'koneksi.php';
				$data = mysqli_query($koneksi,"SELECT * from kamus");
				$no = 1;
				while($d = mysqli_fetch_array($data)) {
				?>
				<tr>
					<td><center><?php echo $no++; ?></td>
					<td><center><?php echo $d['kode_buku']; ?></td>
					<td><?php echo $d['judul_buku']; ?></td>
                	<td><?php echo $d['pengarang']; ?></td>
                	<td><center><?php echo $d['status']; ?></td>
				</tr>
				<?php
				}
				?>
       		 </table>
          </div>
		</div>
	</div>
	<div class="footer"><p align="center">Copyright © 2018 - Belajar CSS Responsive</a></p>
	</div>
</div>
</body>
</html>
