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
          		<h2 align="center">BUKU UMUM</h2><br>
			<div class="buku">
			<div class="foto">
				<img src="image/book6.jpg" width="280">
				<div class="judul">Antologi Puisi Kopi Kehidupan</div>
				<div class="penulis">Penulis: Muhammad Syaufudin</div>
			</div>
			</div>
            <div class="buku">
			<div class="foto">
				<img src="image/book7.jpg" width="280">
				<div class="judul">Otak</div>
				<div class="penulis">Penulis: Yearimdang</div>
			</div>
			</div>
            <div class="buku">
			<div class="foto">
				<img src="image/book8.jpg" width="280">
				<div class="judul">Ilmu Bertahan Hidup</div>
				<div class="penulis">Penulis: Yearimdang</div>
			</div>
			</div>
            <div class="buku">
			<div class="foto">
				<img src="image/book9.jpg" width="280">
				<div class="judul">Seni Hidup Tenang Di Usia Muda</div>
				<div class="penulis">Penulis: Muhammad Chandra</div>
			</div>
			</div>
            <div class="buku">
			<div class="foto">
				<img src="image/book10.jpg" width="280">
				<div class="judul">Pemudaku</div>
				<div class="penulis">Penulis: A.Y Hegar</div>
			</div>
			</div>
            <table border="10">
        		<tr>
					<th>No</th>
					<th>Kode</th>
					<th>Judul</th>
					<th>Pengarang</th>
            		<th>Status</th>
                    <th>Opsi</th>
                 </tr>
				<?php
				include 'koneksi.php';
				$data = mysqli_query($koneksi,"SELECT * from umum");
				$no = 1;
				while($d = mysqli_fetch_array($data)) {
				?>
				<tr>
					<td><center><?php echo $no++; ?></td>
					<td><center><?php echo $d['kode_buku']; ?></td>
					<td><?php echo $d['judul_buku']; ?></td>
                	<td><?php echo $d['pengarang']; ?></td>
                	<td><center><?php echo $d['status']; ?></td>
                    <td>
						<a href="edit_umum.php?id=<?php echo $d['id']; ?>">EDIT</a>
						<a href="hapus_umum.php?id=<?php echo $d['id']; ?>">HAPUS</a>
					</td>
				</tr>
				<?php
				}
				?>
       		 </table>
             <p>&nbsp;</p>
         <p> Input Buku Baru</p>
         <form method="post" action="tambah_umum.php">
			<table align="center">
				<tr>
					<td>Kode</td>
					<td><input type="text" name="kode_buku" maxlength="6"></td>
				</tr>
				<tr>
					<td>Judul</td>
					<td><input type="text" name="judul_buku"></td>
				</tr>
            	<tr>
					<td>Pengarang</td>
					<td><input type="text" name="pengarang"></td>
				</tr>
            	 <tr>
					<td>Status</td>
					<td><input type="text" name="status"></td>
				</tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"><a href = "tambah_umum.php"></td>
				</tr>
			</table>
		</form>
          </div>
		</div>
	</div>
	<div class="footer"><p align="center">Copyright © 2018 - Belajar CSS Responsive</a></p>
	</div>
</div>
</body>
</html>
