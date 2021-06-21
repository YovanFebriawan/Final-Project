<!-- <?php
include_once("koneksi.php");
if(isset($_POST['update'])){	
	$username=$_POST['username'];
	$nama_lengkap=$_POST['nama_lengkap'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$almat=$_POST['alamat'];
	$usia=$_POST['usia'];
	$nomor_telp=$_POST['nomor_telp'];
		
	$result = mysqli_query($mysqli, "UPDATE pendaftaran SET nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin',alamat='$alamat',usia='$usia', nomor_telp='$nomor_telp' WHERE username='$username'");
	
	header("Location: beranda_admin.php");
}
?> -->
<?php
  require "koneksi.php";
  if (isset($_GET['username'])) {
    $username=$_POST['username'];
    $nama_lengkap=$_POST['nama_lengkap'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $almat=$_POST['alamat'];
    $usia=$_POST['usia'];
    $nomor_telp=$_POST['nomor_telp'];
    $sql = "UPDATE pendaftaran SET nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin',alamat='$alamat',usia='$usia', nomor_telp='$nomor_telp' WHERE username='$username'";
    mysqli_query($koneksi, $sql);
    if (mysqli_error($koneksi)) {
      echo "<script>alert('Data gagal di ubah!');</script>";
    }else {
      echo "<script>alert('Data berhasil di ubah!');location.replace('beranda_admin.php');</script>";
    }
  }
?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubah Data Pasien</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style type="text/css">
      body{
        background-image:linear-gradient(rgba(69, 83, 97, 0.7),rgba(69, 83, 97, 0.7)), url(back.jpeg);
        background-size: cover;
        background-position: center;
        background-color: #dee9ff;
        font-family: helvetica;
        }

        footer{
            color: white;
            padding-top: 3px;
            padding-bottom: 3px;
        }

        .registration-form{
          padding: 50px 0;
        }

        .registration-form form{
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 50px 70px;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        }

        .registration-form .form-icon{
          text-align: center;
            background-color: #5891ff;
            border-radius: 50%;
            font-size: 40px;
            color: white;
            width: 100px;
            height: 100px;
            margin: auto;
            margin-bottom: 50px;
            line-height: 100px;
        }

        .registration-form .item{
          border-radius: 20px;
            margin-bottom: 25px;
            padding: 10px 20px;
        }

        .registration-form .create-account{
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #5791ff;
            border: none;
            color: white;
            margin-top: 20px;
        }
    </style>
</head>
<body>
	<div class="registration-form">
        <form method="post" action="ubah.php">
            <div>
                <span><h1 align="center">Ubah Data Pasien</h1></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="nama" placeholder="Nama Lengkap" name="nama_lengkap" value="<?php echo $nama_lengkap ?>" required>
            </div>
            <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline1" name="jenis_kelamin" class="custom-control-input" value="Laki-laki">
                  <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline2" name="jenis_kelamin" class="custom-control-input" value="Perempuan">
                  <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="alamat" placeholder="Alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control item" id="usia" placeholder="Usia" name="usia" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="nomor_telp" placeholder="Nomor Telepon" name="nomor_telp" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account" name="update">Ubah</button>
            </div>
            <div class="form-group" align="center">
                <a class="forgot text-muted" href="beranda_admin.php">Batal</a>
            </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="assets/js/script.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#usia').mask('00')
        $('#nomor_telp').mask('0000-0000-0000');
       })
    </script>
</body>
</html>