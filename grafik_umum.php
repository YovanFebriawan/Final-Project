<?php
include('koneksi.php');
$sql = mysqli_query($koneksi,"SELECT * FROM dokter_umum");
while($row = mysqli_fetch_array($sql)){
	$query = mysqli_query($koneksi,"SELECT hari FROM dokter_umum");
	$row = $query->fetch_array();
	$senin[] = $row['hari'];
	$selasa[] = $row['hari'];
	$rabu[] = $row['hari'];
	$kamis[] = $row['hari'];
	$jumat[] = $row['hari'];
	$sabtu[] = $row['hari'];
	$minggu[] = $row['hari'];
}
?>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<html>
<head>
	<title>Grafik Kunjungan Bidan</title>
	<script type="text/javascript" src="Chart.js"></script>
	<style type="text/css">
	body{
			background-image:linear-gradient(rgba(69, 83, 97, 0.7),rgba(69, 83, 97, 0.7)), url(back.jpeg);
			background-size: cover;
			background-position: center;
			margin-right: 15px;
			margin-left: 15px;
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

		h2{
			color: white;
			font-family: helvetica;
			font-size: 50px;
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
			    <a href="beranda.php">Beranda</a>
			    <a href="informasi.php">Informasi</a>
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
	<center>
		<h2>Grafik Pengunjung</h2>
	</center>
	<?php 
	include 'koneksi.php';
	?>
	<div style="width: 700px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
	<br/>
	<br/>
<br>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				
				labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
				datasets: [{
					data: [
					<?php 
					$jumlah_senin = mysqli_query($koneksi,"select * from dokter_umum where hari = 'Senin'");
					echo mysqli_num_rows($jumlah_senin);
					?>,
					<?php 
					$jumlah_selasa = mysqli_query($koneksi,"select * from dokter_umum where hari = 'Selasa'");
					echo mysqli_num_rows($jumlah_selasa);
					?>,
					<?php 
					$jumlah_rabu = mysqli_query($koneksi,"select * from dokter_umum where hari = 'Rabu'");
					echo mysqli_num_rows($jumlah_rabu);
					?>,
					<?php 
					$jumlah_kamis = mysqli_query($koneksi,"select * from dokter_umum where hari = 'Kamis'");
					echo mysqli_num_rows($jumlah_kamis);
					?>,
					<?php 
					$jumlah_jumat = mysqli_query($koneksi,"select * from dokter_umum where hari = 'Jumat'");
					echo mysqli_num_rows($jumlah_jumat);
					?>,
					<?php 
					$jumlah_sabtu = mysqli_query($koneksi,"select * from dokter_umum where hari= 'Sabtu'");
					echo mysqli_num_rows($jumlah_sabtu);
					?>,
					<?php 
					$jumlah_minggu = mysqli_query($koneksi,"select * from dokter_umum where hari = 'Minggu'");
					echo mysqli_num_rows($jumlah_minggu);
					?>
					],

					// mengatur warna background grafik
					backgroundColor: [
					'rgba(255, 0, 0, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 255, 0, 1)',
					'rgba(0, 255, 72, 1)',
					'rgba(0, 78, 255, 1)',
					'rgba(98, 0, 235, 1)',
					'rgba(255, 120, 0, 1)'
					],

					// mengatur warna border grafik
					borderColor: [
					'rgba(255, 0, 0, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 255, 0, 1)',
					'rgba(0, 255, 72, 1)',
					'rgba(0, 78, 255, 1)',
					'rgba(98, 0, 235, 1)',
					'rgba(255, 120, 0, 1)'
					],

					// mengatur ketebalan border
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
	<center>
		<a href="umum.php" style="color: white">Tampilkan tabel</a>
	</center>
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