<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title>Data Pasien</title>
	<style type="text/css">
		body{
			background-image:linear-gradient(rgba(69, 83, 97, 0.7),rgba(69, 83, 97, 0.7)), url(back.jpeg);
			background-size: cover;
			background-position: center;
			margin-right: 15px;
			margin-left: 15px;
		}

		table{
			margin-left: 1px;
			margin-right: 1px;
			margin-top: 30px;
			text-align: center;
			color: white;
		}

		footer{
			color: white;
			padding-top: 3px;
			padding-bottom: 3px;
		}

		img{
			padding-left: -15px;
			padding-bottom: -15px;
		}

		h1{
			color: white;
			font-family: helvetica;
			font-size: 50px;
			padding-left: 0px;
			padding-top: -5px;
			margin-bottom: -14px;
		}

		.sidenavR{
			background-color:#fb795b;
			height:100%;
			overflow-x:hidden;
			padding-top:60px;
			position:fixed;
			right:0;
			top:0;
			transition:.5s;
			width:0;
			z-index:1;
		}
		.sidenavR a{
			color:#818181;
			display:block;
			font-size:25px;
			padding:8px 8px 8px 32px;
			text-decoration:none;
			transition:.3s;
		}
		.sidenavR a:hover,.offcanvas a:focus{
			color:#f1f1f1;
		}
		.sidenavR .closebtn{
			font-size:36px;
			margin-left:50px;
			position:absolute;
			right:25px;
			top:0;
		}
		@media screen and max-height 450px {
		.sidenavR{padding-top:15px;}
		.sidenavR a{font-size:18px;}
		}
	</style>
</head>
<body>
	<?php
		include_once("koneksi.php");
		$result = mysqli_query($koneksi, "SELECT * FROM pendaftaran");
	?>
	<script language="javascript">
    function openNavR() {
        document.getElementById("mySidenavR").style.width = "250px";
    }

    function closeNavR() {
        document.getElementById("mySidenavR").style.width = "0";
    }
	</script>
	 <nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	   <div class="navbar-header">
	    <img src="logo.png" width="20%">
	   </div>
	   <ul class="nav navbar-nav navbar-right">
	    <li>
	    	<div id="mySidenavR" class="sidenavR">
			    <a href="javascript:void(0)" class="closebtn" onclick="closeNavR()">×</a>
			    <a href="beranda_admin.php">Data Pasien</a>
			    <a href="logout.php">Keluar</a>
			</div>

			<div class="row">
			    <div class="col-md-12 text-center">
			        <div class="row">
			            <div class="col-xs-1">
			                <span style="font-size:30px;cursor:pointer; color:white;" onclick="openNavR()">☰</span>
			            </div>
			        </div>
			    </div>
			</div>
	    </li>
	   </ul>
	  </div>
	 </nav>

	<h1>DATA PASIEN</h1>
	<table class="table table-hover table-bordered" id="umum">
	  <thead>
	    <tr>
	      <th scope="col">No.</th>
	      <th scope="col">Username</th>
	      <th scope="col">Nama Lengkap</th>
	      <th scope="col">Jenis Kelamin</th>
	      <th scope="col">Alamat</th>
	      <th scope="col">Usia</th>
	      <th scope="col">Nomor Telepon</th>
	      <th scope="col">Opsi</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php  
	  	$no=1;
	  	$sql = mysqli_query($koneksi, "Select * From pendaftaran");
	  	while($row=mysqli_fetch_array($sql)){
	  	echo "<tr>
	      <td>".$no++."</td>
	      <td>".$row['username']."</td>
	      <td>".$row['nama_lengkap']."</td>
	      <td>".$row['jenis_kelamin']."</td>
	      <td>".$row['alamat']."</td>
	      <td>".$row['usia']."</td>
	      <td>".$row['nomor_telp']."</td>
	      <td>
	        <a href='ubah.php?username=$row[username]' class='btn btn-primary btn-flat btn-xs' data-toggle='modal'><i class='fa fa-pencil'></i> Ubah</a>
	        <a href='hapus.php?username=$row[username]' class='btn btn-danger btn-flat btn-xs'><i class='fa fa-trash'></i> Hapus</a>
	      </td>
	    </tr>";
	  	};
	  	?>    
	  </tbody>
	</table>
	<table cellpadding="7" id="unduh">
		<th>
			<td>
				<form action="pdf.php">
					<button type="submit" class="btn btn-danger">Unduh PDF</button>
				</form>
			</td>
			<td>
				<form action="excel.php">
					<button type="submit" class="btn btn-success">Unduh Excel</button>
				</form>
			</td>
		</th>
	</table>
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; Ully Laili | Yovan Febriawan 2021
            </p>
          </div>
        </div>
      </div>
</footer>
</body>
</html>