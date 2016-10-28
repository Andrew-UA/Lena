<!DOCTYPE html>
<html lang="uk">

<head>
	<meta charset="UTF-8">
	<title>Rostik111111</title>

	<link rel="stylesheet" type="text/css" href="/styles/styles.css">

	<script type="text/javascript" src="/modules/fancybox/lib/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="/modules/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="/modules/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="modules/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<script>
			$(document).ready(function() {
					$('.fancybox').fancybox();
			});
	</script>
</head>

<body>
	<div class="wrapper">
		<div class="spacer">
			<nav class="main-menu">
				<ul class="main-menu__list">
					<li class="main-menu__element"><a class="main-menu__link" href="/">Головна</a></li>
					<li class="main-menu__element"><a class="main-menu__link" href="/services">Послуги</a></li>
					<li class="main-menu__element"><a class="main-menu__link" href="/gallery">Мої роботи</a></li>
					<li class="main-menu__element"><a class="main-menu__link" href="/contacts">Контакти</a></li>
				</ul>
			</nav>
			<header class="header">
				<div class="logo">
					<div class="logo__image">
						<p> Лена Хабовська</p>
					</div>
					<div class="logo__text">
						<p> Tell: 0 800 357 258 </p>
					</div>
				</div>
			</header>

			<main>
				<div class="content content_gallery">
					<?php include $content; ?>
				</div>
			</main>

			<footer class="footer">
				<nav class="menu">
					<ul class="menu__list">
						<li class="menu__element"><a class="main-menu__link menu__link" href="/">Головна</a></li>
						<li class="menu__element"><a class="main-menu__link menu__link" href="/services">Послуги</a></li>
						<li class="menu__element"><a class="main-menu__link menu__link" href="/gallery">Мої роботи</a></li>
						<li class="menu__element"><a class="main-menu__link menu__link" href="/contacts">Контакти</a></li>
					</ul>
				</nav>
				<div class="info">
					Tell: 0 800 357 258
				</div>
			</footer>
		</div>
	</div>

</body>

</html>
