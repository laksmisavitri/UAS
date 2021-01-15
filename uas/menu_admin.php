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
         <?php
			session_start();
			if($_SESSION['status']!="login"){
				header("location:login.php?pesan=gagal");
			}
		?>
        	<div class="login"><?php echo $_SESSION['username']; ?> anda telah login!</div>
		<div class="middle">
          <div align="center">
          		<h2 align="center">DAFTAR BUKU</h2><br>
            <div class="buku">
			<div class="foto">
				<img src="image/book8.jpg" width="280">
				<div class="judul">Ilmu Bertahan Hidup</div>
				<div class="penulis">Penulis: Yearimdang</div>
			</div>
			</div>
			<div class="buku">
			<div class="foto">
				<img src="image/book1.jpg" width="280">
				<div class="judul">Anak Pantai</div>
				<div class="penulis">Penulis: Boen Boen</div>
			</div>
			</div>
            <div class="buku">
			<div class="foto">
				<img src="image/book11.jpg" width="280">
				<div class="judul">200 Kanji Jepang</div>
				<div class="penulis">Penulis: Windra .S., William .P.N</div>
			</div>
			</div>
            <div class="buku">
			<div class="foto">
				<img src="image/book3.jpg" width="280">
				<div class="judul">Lima Sekawan Dari Tiom</div>
				<div class="penulis">Penulis: Dyah Rudhini</div>
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
				<img src="image/book5.jpg" width="280">
				<div class="judul">Kumpulan Cerita</div>
				<div class="penulis">Penulis: Stella Ernes</div>
			</div>
			</div>
            <div class="buku">
			<div class="foto">
				<img src="image/book6.jpg" width="280">
				<div class="judul">Antologi Puisi Kopi Kehidupan</div>
				<div class="penulis">Penulis: Muhammad Syaufudin</div>
			</div>
			</div>
            <div class="buku">
			<div class="foto">
				<img src="image/book4.jpg" width="280">
				<div class="judul">Liburan Tak Terduga</div>
				<div class="penulis">Penulis: Dyah Rudhini</div>
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
            <div class="buku">
			<div class="foto">
				<img src="image/book2.jpg" width="280">
				<div class="judul">Senggutru Dan Raksasa</div>
				<div class="penulis">Penulis: Nancy Sitohan, Gufront Vedian</div>
			</div>
			</div>
            <div class="buku">
			<div class="foto">
				<img src="image/book13.jpg" width="280">
				<div class="judul">Kamus Italia Indonesia</div>
				<div class="penulis">Penulis: S. Faizah Soenoto Rivai</div>
			</div>
			</div>
           </div>
		</div>
	</div>
	<th width="1234" height="23" scope="col"><span class="style6">copyright @ laksmi savitri_18510007</span></th>
	</div>
</div>
</body>
</html>
