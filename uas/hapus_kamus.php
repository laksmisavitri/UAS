<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE from kamus where id = '$id'");

header("location:kamus_adm.php");

?>