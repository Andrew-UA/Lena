<!DOCTYPE html>
<html lang="uk">

<head>
	<meta charset="UTF-8">
	<title>Rostik111111</title>

	<link rel="stylesheet" type="text/css" href="/styles/styles.css">
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
				<div class="content">
					<?php include $content; ?>
				</div>
				<div class="sidebar">
					<div class="sidebar__block search">
						<div class="sidebar__title">
							<div class="sidebar__title-ico"></div>
							<div class="sidebar__title-text">
								<p>Пошук</p>
							</div>
						</div>
						<form class="search__form" action="/search/" method="POST">
							<input class="search__text" type="text" name="q" value="" placeholder="Введіть текст...">
							<input class="search__submit" type="submit" name="search" value="Пошук">
						</form>
					</div>
					<div class="sidebar__block mini-gallery">
						<div class="sidebar__title">
							<div class="sidebar__title-ico"></div>
							<div class="sidebar__title-text">
								<p>Мої роботи</p>
							</div>
						</div>

						<div class="mini-gallery__wrapper">

							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/2.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/3.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/4.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/5.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/6.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/7.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/8.png" alt="" />
							</div>
							<div class="mini-gallery__picture">
								<img class="mini-gallery__picture-img" src="/images/content/gallery/1.png" alt="" />
							</div>
						</div>
					</div>
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
