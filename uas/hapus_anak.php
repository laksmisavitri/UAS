<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE from anak where id = '$id'");

header("location:anak_adm.php");

?>