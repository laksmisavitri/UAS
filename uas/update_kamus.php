<?php
include 'koneksi.php';

$id = $_POST['id'];
$kode = $_POST['kode_buku'];
$judul = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$status = $_POST['status'];

mysqli_query($koneksi,"UPDATE kamus set kode_buku = '$kode', judul_buku = '$judul', pengarang = '$pengarang', status = '$status' where id = '$id'");

header("location:kamus_adm.php");

?>