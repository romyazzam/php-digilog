	<!DOCTYPE HTML>
<html>
<head>
	<link rel="icon" href="images/telkom.png" type="image/png">
	<title>DIGILOG (CONSTRUCTION)</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/bootstrap-datepicker.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

	<script src="assets/js/jquery-3.3.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style>

</style>
</head>
<body class="landing is-preload">

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1><a href="index.php">DIGILOG</a></h1>
			<nav id="nav">
				<ul>
					<li class="special">
						<a href="#menu" class="menuToggle"><span>Menu</span></a>
						<div id="menu" style= " background-color: #d02222d6;">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="#">Sign Up</a></li>
								<li><a href="#">Log In</a></li>
								<li><a href="logbook.php">Logbook</a></li>
								<li><a href="layout.php">Layout</a></li>
								<li><a href="mapping.php">Mapping</a></li>
								<li><a href="pelaporan.php">Pelaporan</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</header>

<section id="banner">
		<div class="inner">
			<h2>login</h2>
				<div class="col-12">
				
					<div style="margin-left: 580px;" class="col-3 col-12-xsmall" align="">
						<input type="email" name="email" id="email" value="" placeholder="Email" required />
					</div>
					
					<div style="margin-left: 580px; margin-top: 10px;" class="col-3 col-12-xsmall">
						<input type="password" name="password" id="password" value="" placeholder="Password" required />
					</div>

					<div style="margin-top: 30px;" class="col-12" >
					<button type="submit"class="primary">Login</button>
					<button type="submit"class="primary">Sign Up</button>
 					</div>
				</div>		
		</div>
	</section>		

<?php include('foot.php'); ?>