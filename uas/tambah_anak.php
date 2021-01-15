<?php
include 'koneksi.php';

// $id = $_POST['id'];
$kode = $_POST['kode_buku'];
$judul = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$status = $_POST['status'];

$sql = mysqli_query($koneksi,"INSERT INTO anak ('kode_buku','judul_buku','pengarang','status') VALUES($kode, $judul, $pengarang, $status)");


header("location:anak_adm.php");

?>