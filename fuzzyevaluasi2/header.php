<?php include('functions.php'); ?>
<!DOCTYPE html>
	<html lang="">
		<head>
			<title>SPK Evaluasi Siswa - Fuzzy Sugeno</title>
			<meta charset="UTF-8">
			<meta name="description" content="">
			
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			
		</head>
		<body>
			<nav class="navbar  navbar-inverse navbar-static" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Fuzzy Evaluasi</a>
				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					
					<ul class="nav navbar-nav ">
						<!-- <li><a href="#">About</a></li> -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-chevron-down"></i> Kelola </b></a>
							<ul class="dropdown-menu">
								<li><a href="evaluasi.php">Kelola Evaluasi Siswa</a></li>
								<li><a href="siswa.php">Kelola Siswa</a></li>
								<li><a href="kelas.php">Kelola Kelas</a></li>
								<li><a href="walikelas.php">Kelola Wali Kelas</a></li>
								<li><a href="rules.php">Kelola Rules</a></li>
								
							</ul>
						</li><li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-chevron-down"></i> Laporan </a>
							<ul class="dropdown-menu">
								
								
								<li><a href="laporan.php">Laporan SPK</a></li>
								
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>