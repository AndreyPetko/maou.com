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
			  //   if ( function_exists( 'wp_nav_menu' ) )
			  //       wp_nav_menu( 
				 //        array( 
				 //        'theme_location' => 'header_menu',
				 //        'fallback_cb'=> 'header_menu',
				 //        'container' => 'ul',
				 //        'menu_id' => '',
				 //        'menu_class' => '') 
					// );
			  //   else custom_menu();

				?>

				<?php
					wp_nav_menu('menu=header_menu');
				?>

			
			</div>
			<div id="nav-mob">
				<div id="nav-mob-button"><div></div><div></div><div></div></div>
				<ul>
					<li><a href="">Главная</a></li>
					<li><a href="">О нас</a></li>
					<div>
						<ul>
							<li><a href="">Подпункт второго уровня меню</a></li>
							<li><a href="">Подпункт второго уровня меню</a></li>
							<li><a href="">Подпункт второго уровня меню</a></li>
							<li><a href="">Длинный длинный подпункт второго уровня меню</a></li>
							<li><a href="">Подпункт второго уровня меню</a></li>
						</ul>
					</div>
					<li><a href="">Деятельность</a></li><div>
					<ul>
						<li><a href="">Подпункт второго уровня меню</a></li>
						<li><a href="">Подпункт второго уровня меню</a></li>
						<li><a href="">Подпункт второго уровня меню</a></li>
						<li><a href="">Длинный длинный подпункт второго уровня меню</a></li>
						<li><a href="">Подпункт второго уровня меню</a></li>
					</ul>
				</div>
				<li><a href="">Аттестация</a></li>
				<li><a href="">Коллектив</a></li>
				<div>
					<ul>
						<li><a href="">Подпункт второго уровня меню</a></li>
						<li><a href="">Подпункт второго уровня меню</a></li>
						<li><a href="">Подпункт второго уровня меню</a></li>
						<li><a href="">Длинный длинный подпункт второго уровня меню</a></li>
						<li><a href="">Подпункт второго уровня меню</a></li>
					</ul>
				</div>
				<li><a href="">Условия</a></li>
				<li><a href="">Финансирование</a></li>
				<li><a href="">Документы</a></li>
				<li><a href="">Е-сервисы</a></li>

			</ul>
		</div>