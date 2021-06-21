<?php
  require "koneksi.php";
  if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $sql = "DELETE FROM pendaftaran WHERE username = '$username'";
    mysqli_query($koneksi, $sql);
    if (mysqli_error($koneksi)) {
      echo "<script>alert('Data gagal di hapus!');</script>";
    }else {
      echo "<script>alert('Data berhasil di hapus!');location.replace('beranda_admin.php');</script>";
    }
  }
?>