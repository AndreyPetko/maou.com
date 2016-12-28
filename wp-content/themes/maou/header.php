<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>school</title>
	<link rel="stylesheet" href="/wp-content/themes/maou/bootstrap-jq/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/maou/style/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="/wp-content/themes/maou/bootstrap-jq/jquery.js"></script>
	<script src="/wp-content/themes/maou/js/main.js"></script>

</head>
<body>
	<div class="container">
		<div class="header">
			<a href="/">
				<div class="logo-div">
					<img src="/wp-content/themes/maou/images/logo.png">
				</div>
			</a>
			<div class="header-left">
				<div class="header-left-top">
					<h2>МАОУ </h2><h2>Селенгинская средняя общеобразовательная школа №1</h2>
				</div>
				<div class="header-left-bottom">
					<img class="header-hid"  src="/wp-content/themes/maou/images/icon-mail.png">
					<p class="header-hid">1selenga@gmail.com</p>
					<img src="/wp-content/themes/maou/images/icon-phone.png">
					<p>(30138) 43-4-36</p>
					<img class="header-hid" src="/wp-content/themes/maou/images/icon-home.png">
					<p class="header-hid" style="margin-top:10px!important;">671200, Бурятия, Кабанский район, <br>
						с. Кабанск, ул. Кирова 10</p>
						<div class="search search-form ">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
			<div id="nav">
				<?php

				?>

				<?php
				wp_nav_menu('menu=header_menu');
				?>


			</div>
			<div id="nav-mob">
				<div id="nav-mob-button"><div></div><div></div><div></div></div>
				<?php
				?>

				<?php
				wp_nav_menu('menu=header_menu');
				?>


				
		</div>