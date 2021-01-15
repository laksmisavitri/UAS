<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE from umum where id = '$id'");

header("location:umum_adm.php");

?>