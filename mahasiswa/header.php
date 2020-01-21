<?php include"koneksi.php" ?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>UAS NDARU PURNAGATI CRUD PHP MYSQL</title>

		<style>
			footer {
				padding: 10px 0;
				position: fixed;
				left: 0;
				bottom: 0;
				width: 100%;
				background: #e3e3e3;
				text-align: center;
			}
		</style>
		
	</head>
	<body>
	 <div class="conteiner" style="margin-top:20px;">
	  <nav class="navbar navbar-default">
	  	<div class="container-fluid">
	  		<!-- Brand and toogle get grpoued for better mobile display -->
	  		<div class="navbar-header">
	  			<button type="button" class="navbar-toogle colappsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	  				<span class="sr-only">Toogle navigation</span>
	  				<span class="icon-bar"></span>
	  				<span class="icon-bar"></span>
	  				<span class="icon-bar"></span>
	  			</button>
	  			<a class="navbar-brand" href="#">MY APP</a>
	  		</div>
	  		
	  		<!-- Collect the nav links, forms, and other content for toogling -->
	  		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  			<ul class="nav navbar-nav">
	  				<li><a href="index.php">BERANDA</a></li>
	  				<li><a href="getMahasiswa.php">DATA MAHASISWA</a></li>
	  				<li><a href="tambahMahasiswa.php">TAMBAH DATA MAHASISWA</a></li>
	  					</ul>
	  				</li>
	  			</ul>
	  		</div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fuild -->
	  </nav>						 		
	  