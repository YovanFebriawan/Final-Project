<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title>Pepapugo</title>
	<style type="text/css">
		.judul h1{
			color: #fb795b;
			font-family: league gothic;
			font-size: 1000%;
		}
		.judul h4{
			color: white;
			font-family: helvetica;
			font-size: 200%;
		}

		footer{
			color: white;
			padding-top: 3px;
			padding-bottom: 3px;
		}

		body{
			padding-left: 3%;
			padding-right: 3%;
			margin-top: 13%;
			background-image:linear-gradient(rgba(69, 83, 97, 0.5),rgba(69, 83, 97, 0.5)), url(back.jpeg);
			background-size: cover;
			background-position: center;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<div class="judul">
			<h1>PEPAPUGO<span class="badge badge-secondary"></span></h1>
			<h4>SISTEM PENDAFTARAN PUSKESMAS GONDANG<span class="badge badge-secondary"></span></h4>
			<table cellpadding="7" align="center">
				<th>
					<td>
						<form action="form_pendaftaran.php">
						<button type="submit" class="btn btn-primary btn-lg">DAFTAR</button>
					</form>
					</td>
				</th>
				<th>
					<td>
						<form action="login_user.php">
						<button type="submit" class="btn btn-primary btn-lg">MASUK</button>
					</form>
					</td>
				</th>
			</table>		
		</div>
	</header>
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
          	<br><br><br>
            <p class="copyright-text">Copyright &copy; Ully Laili | Yovan Febriawan 2021
            </p>
          </div>
        </div>
      </div>
</footer>
</body>
</html>