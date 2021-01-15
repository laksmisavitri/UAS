<?php
    session_start();
	include 'koneksi.php';
    
    $username=$_POST['username'];
    $password=$_POST['password'];
	
	$data = mysqli_query($koneksi, "SELECT * from anggota WHERE username='$username' and password='$password'");
	$cek = mysqli_num_rows($data);
    
    if($cek > 0){
        $_SESSION['username']=$username;
		$_SESSION['status'] = "login";
		header("location:menu.php");
    }else{
        header("location:home.php?pesan=gagal");
    }
?>
