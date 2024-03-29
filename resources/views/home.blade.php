<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Дмитрий Алексеев</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ url('files/swiper-bundle.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/files/styles.css') }}" />
	<style type="text/css">
		@font-face {
			font-family: Roboto;
			src: url('{{ public_path('fonts/Roboto-Regular.woff') }}');
		}
		@font-face {
			font-family: Roboto;
			src: url('{{ public_path('fonts/Roboto-Bold.woff') }}');
		}
		@font-face {
			font-family: Roboto;
			src: url('{{ public_path('fonts/Roboto-Black.woff') }}');
		}
    </style>
	<script src="{{ url('files/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ url('files/script.js') }}"></script>
	<script src="{{ url('files/jquery.maskedinput.min.js') }}"></script>
</head>
<body>
<div class="modal">
	<div class="modal__window">
		<div class="window__wrapper">
			<div class="close__wrapper">
				<button class="close modal-toggle"></button>
				<button class="close modal-toggle-await"></button>
			</div>
			<form method="POST" action="https://formfor.site/send/BoBe9XPMOFri4ytRnVi1aPNS7nD4CG">
				<p class="window__text modal-toggle">Укажите ваш номер телефона:</p>
				<input type="text" name="modal-phone" class="window__input_phone modal-toggle" placeholder="+7 (999) 999 99-99">
				<p class="window__text modal-toggle">Раскажите немного о вашей услуге, которую вы хотите получить:</p>
				<textarea name="modal-service" class="window__input modal-toggle"></textarea>
				<button class="window__submit modal-toggle">Заказать звонок</button>
				<p class="window__await modal-toggle-await">Спасибо!</p>
				<p class="window__await-signature modal-toggle-await">Ожидайте ответа в течение дня.</p>
				<button type="submit" class="window__submit-again modal-toggle-await">Отправить заявку повторно?</button>
			</form>
		</div>
	</div>
</div>
<header class="header">
	<div class="header__container">
		<nav class="header__nav">
			<ul class="header__list">
				<li class="header__list-item"><a href="#skills" class="scroll">Услуги</a></li>
				<li class="header__list-item"><a href="#examples" class="scroll">Портфолио</a></li>
				<li class="header__list-item"><a href="#prices" class="scroll">Стоимость</a></li>
			</ul>
		</nav>
		<button class="menu"></button>
		<a class="phone__number-mobile" href="tel:+74999955577">+7 (499) 995-55-77</a>
		<div class="phone">
			<a class="phone__number" href="tel:+74999955577">+7 (499) 995-55-77</a>
			<button class="phone__button-header modal-open">Заказать звонок</button>
			<button class="phone__button-mobile modal-open"></button>
		</div>
	</div>
</header>
<div class="header__menu">
	<li class="header__list-item"><a href="#skills" class="scroll">Услуги</a></li>
	<li class="header__list-item"><a href="#examples" class="scroll">Портфолио</a></li>
	<li class="header__list-item"><a href="#prices" class="scroll">Стоимость</a></li>
</div>
<main class="main">
	<div class="me">
		<picture>
			<source media="(max-width:1580px)" srcset="{{ url('img/ellipse-tablet.png') }}">
			<img class="me__ellipse" src="{{ url('img/ellipse.png') }}">
		</picture>
		<div class="me__container">
			<h1 class="me__header">Дмитрий Алексеев</h1>
			<p class="me__signature">Frontend-разработчик и веб-верстальщик</p>
			<button class="me__button modal-open">Узнать больше</button>
			<img class="me__man" srcset="{{ url('img/man.png') }}">
		</div>
		<div class="me__container_mobile">
			<h1 class="me__header_mobile">Дмитрий Алексеев</h1>
			<p class="me__signature_mobile">Frontend-разработчик и&nbsp;веб&nbsp;-&nbsp;верстальщик</p>
			<button class="me__button_mobile modal-open">Узнать больше</button>
			<img class="me__man" srcset="{{ url('img/man.png') }}">
		</div>
		<div class="tag-brackets"></div>
		<div class="tag-hashtag"></div>
		<div class="tag-slash"></div>
		<div class="tag-div"></div>
		<div class="tag-div_big"></div>
		<div class="tag-slash_tablet"></div>
	</div>
	</section>
	<section class="skills" id="skills">
		<div class="container">
			<h2 class="skills__header">Что я делаю</h2>
			<ul class="skills__list">
				<li class="skills__list-item skills__list-item-bg-1"><p class="skills__text">Вёрстка лендинг-страниц и сайтов любой сложности</p></li>
				<li class="skills__list-item skills__list-item-bg-2"><p class="skills__text">Адаптивная вёрстка под все браузеры и устройства</p></li>
				<li class="skills__list-item skills__list-item-bg-3"><p class="skills__text">Frontend-разработка и программирование</p></li>
				<li class="skills__list-item skills__list-item-bg-4"><p class="skills__text">Исправление и доработка существующей вёрстки</p></li>
			</ul>
			<button class="skills__button modal-open">Узнать стоимость</button>
		</div>
	</section>
	<section class="examples" id="examples">
		<h2 class="examples__header">Примеры моих работ</h2>
		<ul class="examples__catalog slider-container">
			<button class="arrow_left swiper-button-prev"></button>
			<button class="arrow_right swiper-button-next"></button>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<li class="catalog__item catalog__item-bg-1 swiper-slide">
						<img class="catalog-bg" src="{{ url('img/examples-catalog-1.png') }}">
						<img class="catalog-bg-tablet" src="{{ url('img/examples-catalog-1-tablet.png') }}">
						<img class="catalog-bg-mobile" src="{{ url('img/examples-catalog-1-mobile.png') }}">
						<p class="catalog__item-header">Сайт психолога Веры Антоновой</p>
					</li>
					<li class="catalog__item catalog__item-bg-2 swiper-slide">
						<img class="catalog-bg" src="{{ url('img/examples-catalog-2.png') }}">
						<img class="catalog-bg-tablet" src="{{ url('img/examples-catalog-2-tablet.png') }}">
						<img class="catalog-bg-mobile" src="{{ url('img/examples-catalog-2-mobile.png') }}">
						<p class="catalog__item-header">Сайт магазина детской одежды</p></li>
					<li class="catalog__item catalog__item-bg-3 swiper-slide">
						<img class="catalog-bg" src="{{ url('img/examples-catalog-3.png') }}">
						<img class="catalog-bg-tablet" src="{{ url('img/examples-catalog-3-tablet.png') }}">
						<img class="catalog-bg-mobile" src="{{ url('img/examples-catalog-3-mobile.png') }}">
						<p class="catalog__item-header">Сайт магазина «Рыболов»</p></li>
					<li class="catalog__item catalog__item-bg-1 swiper-slide">
						<img class="catalog-bg" src="{{ url('img/examples-catalog-1.png') }}">
						<img class="catalog-bg-tablet" src="{{ url('img/examples-catalog-1-tablet.png') }}">
						<img class="catalog-bg-mobile" src="{{ url('img/examples-catalog-1-mobile.png') }}">
						<p class="catalog__item-header">Сайт психолога Веры Антоновой</p>
					</li>
					<li class="catalog__item catalog__item-bg-2 swiper-slide">
						<img class="catalog-bg" src="{{ url('img/examples-catalog-2.png') }}">
						<img class="catalog-bg-tablet" src="{{ url('img/examples-catalog-2-tablet.png') }}">
						<img class="catalog-bg-mobile" src="{{ url('img/examples-catalog-2-mobile.png') }}">
						<p class="catalog__item-header">Сайт магазина детской одежды</p></li>
					<li class="catalog__item catalog__item-bg-3 swiper-slide">
						<img class="catalog-bg" src="{{ url('img/examples-catalog-3.png') }}">
						<img class="catalog-bg-tablet" src="{{ url('img/examples-catalog-3-tablet.png') }}">
						<img class="catalog-bg-mobile" src="{{ url('img/examples-catalog-3-mobile.png') }}">
						<p class="catalog__item-header">Сайт магазина «Рыболов»</p></li>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</ul>
		<button class="examples__button modal-open">Заказать проект</button>
	</section>
	<section class="prices" id="prices">
		<div class="prices-container">
			<h2 class="prices__header">Адаптивная&nbsp;вёрстка под&nbsp;все&nbsp;устройства <br> и браузеры от&nbsp;1000&nbsp;рублей всего за&nbsp;4&nbsp;часа.*</h2>
			<p class="prices__signature">*&nbsp;Срок и&nbsp;стоимость могут отличаться от&nbsp;заявленных и&nbsp;рассчитываются индивидуально, <br> в&nbsp;зависимости от&nbsp;сложности задач.</p>
		</div>
		<div class="tag-brackets-white"></div>
		<div class="tag-hashtag-white"></div>
		<div class="tag-slash-white"></div>
		<div class="tag-div-white"></div>
		<div class="tag-brackets-white_right"></div>
		<div class="tag-brackets-white-mobile"></div>
		<div class="tag-slash-white-mobile"></div>
		<div class="tag-div-white-mobile"></div>
	</section>
</main>
<footer class="footer">
	<div class="container footer-container">
		<ul class="footer__list">
			<li class="footer__list-item"><a href="#skills" class="scroll">Услуги</a></li>
			<li class="footer__list-item"><a href="#examples" class="scroll">Портфолио</a></li>
			<li class="footer__list-item"><a href="#prices" class="scroll">Стоимость</a></li>
		</ul>
		<ul class="contacts">
			<li class="number"><a href="tel:+74999957755" class="number-ref">+7 (499) 995-77-55</a></li>
			<li class="mail"><a href="mailto:dmitry@alekseev.com" class="mail-ref">dmitry@alekseev.com</a></li>
		</ul>
		<div class="footer__divider">
			<button class="footer__button phone__button-footer modal-open">Заказать звонок</button>
			<ul class="social">
				<li class="social__vk"><a target="_blank" href="https://vk.com/" class="vk__ref"></a></li>
				<li class="social__fb"><a target="_blank" href="https://www.facebook.com/" class="fb__ref"></a></li>
				<li class="social__twit"><a target="_blank" href="https://twitter.com/" class="twit__ref"></a></li>
				<li class="social__inst"><a target="_blank" href="https://www.instagram.com/" class="inst__ref"></a></li>
			</ul>
		</div>
	</div>
</footer>
<div class="copyrights">&copy; Дмитрий Алексеев, 2016 - 2018</div>
<script src="files/swiper-bundle.min.js"></script>
<script src="files/swiper.js"></script>
</body>
</html>