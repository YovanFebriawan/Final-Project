<?php
	session_start();
	if(isset($_SESSION['username'])){
		header("location: beranda.php");
	}
?>
<html>
<head>
	<title>Pepapugo - User Login</title>
	<style type="text/css">
		body {
		    margin: 0;
		    padding: 0;
		    font-family: sans-serif;
		   	background-image:linear-gradient(rgba(69, 83, 97, 0.7),rgba(69, 83, 97, 0.7)), url(back.jpeg);
			background-size: cover;
			background-position: center;
		}

		.card {
		    margin-bottom: 20px;
		    border: none
		}

		.box {
		    width: 500px;
		    padding: 40px;
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    background: #191919;
		    ;
		    text-align: center;
		    transition: 0.25s;
		    margin-top: 100px
		}

		.box input[type="text"],
		.box input[type="password"] {
		    border: 0;
		    background: none;
		    display: block;
		    margin: 20px auto;
		    text-align: center;
		    border: 2px solid #3498db;
		    padding: 10px 10px;
		    width: 250px;
		    outline: none;
		    color: white;
		    border-radius: 24px;
		    transition: 0.25s
		}

		.box h1 {
		    color: white;
		    text-transform: uppercase;
		    font-weight: 500
		}

		.box input[type="text"]:focus,
		.box input[type="password"]:focus {
		    width: 300px;
		    border-color: #2ecc71
		}

		.box input[type="submit"] {
		    border: 0;
		    background: none;
		    display: block;
		    margin: 20px auto;
		    text-align: center;
		    border: 2px solid #2ecc71;
		    padding: 14px 40px;
		    outline: none;
		    color: white;
		    border-radius: 24px;
		    transition: 0.25s;
		    cursor: pointer
		}

		.box input[type="submit"]:hover {
		    background: #2ecc71
		}

		.forgot {
		    text-decoration: underline
		}
	</style>
</head>
<body>
	<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form method="POST" class="box" action="cek_login.php">
                    <h1>MASUK</h1>
                    <p class="text-muted">Harap Masukkan Username dan Password</p>
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <a class="forgot text-muted" href="login_admin.php">Admin? Masuk Di sini</a>
                    <input type="submit" name="masuk" value="Masuk">
                    <a class="forgot text-muted" href="index.php">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</body>
</html>