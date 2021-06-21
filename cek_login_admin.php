<?php 
session_start();
include 'koneksi.php'; 
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM admin WHERE username='$username' and password='$password'";
$hasil = $koneksi->query($sql) or die($koneksi->error.__LINE__);
if($hasil->num_rows > 0) {
	header("location:beranda_admin.php");
} else {
	echo 'Username/Password yang Anda masukkan salah. Silahkan ulang kembali';	
}
?>