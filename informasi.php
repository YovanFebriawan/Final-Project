<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
	<title>Pepapugo - Informasi</title>
	<style type="text/css">
		/*no-repeat;*/
		body{
			background-image:linear-gradient(rgba(69, 83, 97, 0.7),rgba(69, 83, 97, 0.7)), url(back.jpeg);
			background-position: center;
			margin-right: 15px;
			margin-left: 15px; 
			background-size: cover;
			background-attachment:fixed;
		}

		table{
			margin-left: 1px;
			margin-right: 1px;
			margin-top: 30px;
			text-align: center;
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

		html {
		  box-sizing: border-box;
		}

		*, *:before, *:after {
		  box-sizing: inherit;
		}

		.column {
		  float: left;
		  width: 33.3%;
		  margin-bottom: 16px;
		  padding: 0 8px;
		}

		.card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  margin: 8px;
		}

		.about-section {
		  padding: 50px;
		  text-align: center;
		  background-color: #474e5d;
		  color: white;
		}

		.container {
		  padding: 0 16px;
		}

		.container::after, .row::after {
		  content: "";
		  clear: both;
		  display: table;
		}

		.title {
		  color: grey;
		}

		.button {
		  border: none;
		  outline: 0;
		  display: inline-block;
		  padding: 8px;
		  color: white;
		  background-color: #000;
		  text-align: center;
		  cursor: pointer;
		  width: 100%;
		}

		.button:hover {
		  background-color: #555;
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
			    <a href="#">Informasi</a>
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

	 	<h1>INFORMASI</h1>
	 	<br>
	 	<div class="about-section">
	 		<img src="logo.png" width="30%">
		  <p><b>Pepapugo adalah Sistem pendaftaran pasien Puskesmas Gondang berbasis website</b></p>
		  <p>Jl. Raya Pugeran No.1, Pugeran, Gondang, Mojokerto, Jawa Timur 61372</p>
		  <p>📞 (0321) 511110</p>
		</div>
		<br>
		<h2 style="text-align:center;color: white;">Team</h2>
		<table>
			<tbody>
			<th>
				<td>
					    <div class="card">
					      <img class="card-img-top" src="ilin.png" alt="Ilin" >
					      <div class="container">
					        <h2>Ully Laili M.</h2>
					        <p class="title">Sistem Informasi</p>
					        <p>🎓️ Mahasiswi UPN "Veteran" Jawa Timur</p>
					        <p>📧 19082010007@student.upnjatim.ac.id</p>
					        <p><a href="https://api.whatsapp.com/send?phone=6282119452946"><button class="button">Kontak</button></a></p>
					      </div>
					    </div>
				</td>
			</th>
			<th>
				<td>
					 <!-- <div class="column"> -->
					    <div class="card" style="width: 50%">
					      <img class="card-img-top" src="yov.jpg" alt="Yovan" >
					      <div class="container">
					        <h2>Yovan Febriawan N.</h2>
					        <p class="title">Sistem Informasi</p>
					        <p>🎓️ Mahasiswa UPN "Veteran" Jawa Timur</p>
					        <p>📧 19082010037@student.upnjatim.ac.id</p>
					        <p><a href="https://api.whatsapp.com/send?phone=6285156174868"><button class="button">Kontak</button></a></p>
					      </div>
					    </div>
					  <!-- </div> -->
				</td>
			</th>
			</tbody>
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