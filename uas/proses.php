<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi,"INSERT into anggota values('', '$nama', '$username', '$password', '$null')");

header("location:home.php");

?>