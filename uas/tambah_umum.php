<?php
include 'koneksi.php';

$id = $_POST['id'];
$kode = $_POST['kode_buku'];
$judul = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$status = $_POST['status'];

mysqli_query($koneksi,"INSERT into umum values('', '$kode', '$judul', '$pengarang', '$status', '$null')");

header("location:umum_adm.php");

?>