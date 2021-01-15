<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['user'];
$password = $_POST['pass'];

mysqli_query($koneksi,"INSERT into anggota values('', '$nama', '$username', '$password', '$null')");

header("location:home.php");

?>