<!DOCTYPE HTML>
<!--
	Autonomy by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Autonomy by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
		<div id="header">
			<div class="container">
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Autonomy</a></h1>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html">Homepage</a></li>
						<li class="active"><a href="twocolumn1.html">Left Sidebar</a></li>
						<li><a href="twocolumn2.html">Right Sidebar</a></li>
						<li><a href="onecolumn.html">No Sidebar</a></li>
					</ul>
				</nav>

			</div>
		</div>
		<!-- Header -->

		<div id="banner">&nbsp;</div>

		<div id="featured">
			<div class="container">
				<div class="row">

					<div class="3u">
						<section>
							<header>
								<h2><li><a>Top Forwards --</a></li><h2>
							</header>
						<?php
						$url = $_POST["week"];
						$file = "data/forward".$url.".txt";
						$content = file($file);
						foreach ($content as $line) {
					    echo ('<li>' . $line . '</li>');
						}
						?>			
						</section>
					</div>

					<div class="3u">
						<section>
							<header>
								<h2><li><a>Top Midfielders</a></li><h2>
							</header>
							<?php
							$url = $_POST["week"];
							$file = "data/mid".$url.".txt";
							$content = file($file);
							foreach ($content as $line) {
						    echo ('<li>' . $line . '</li>');
							}
							?>					
						</section>
					</div>

					<div class="3u">
						<section>
							<header>
								<h2><li><a>Top Defenders</a></li><h2>
							</header>
							<?php
							$url = $_POST["week"];
							$file = "data/defender".$url.".txt";
							$content = file($file);
							foreach ($content as $line) {
						    echo ('<li>' . $line . '</li>');
							}
							?>				
						</section>
					</div>

					<div class="3u">
						<section>
							<header>
								<h2><li><a>Top GoalKeeper</a></li><h2>
							</header>
							<?php
							$url = $_POST["week"];
							$file = "data/goalie".$url.".txt";
							$content = file($file);
							foreach ($content as $line) {
						    echo ('<li>' . $line . '</li>');
							}
							?>				
						</section>
					</div>

				</div>
			</div>
		</div>
		
	</body>
</html>