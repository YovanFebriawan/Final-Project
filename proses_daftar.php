<?php
include 'koneksi.php';
$username		= $_POST['username'];
$password		= $_POST['password'];
$nama			= $_POST['nama'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$alamat			= $_POST['alamat']; 
$usia			= $_POST['usia'];
$nomor			= $_POST['nomor_telp'];
$query = "INSERT INTO pendaftaran SET username='$username', password='$password', nama_lengkap='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', usia='$usia', nomor_telp='$nomor'";
    mysqli_query($koneksi, $query);
if (mysqli_error($koneksi)) {
	echo "<script>alert('Registrasi gagal!');location.replace('form_pendaftaran.php');</script>";
} else {
	echo "<script>alert('Registrasi berhasil!');location.replace('index.php');</script>";
}
?>