<?php
include 'koneksi.php';

$id = $_POST['id'];
$kode = $_POST['kode_buku'];
$judul = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$status = $_POST['status'];

mysqli_query($koneksi,"INSERT into kamus values('', '$kode', '$judul', '$pengarang', '$status', '$null')");

header("location:kamus_adm.php");

?>