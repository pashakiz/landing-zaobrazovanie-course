<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package epixx
 */

?>

<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo("name"); ?></title>
	<meta name="description" content="<?php bloginfo("description"); ?>" />
	<meta name="keywords" content="-" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="<?php bloginfo("template_directory"); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/fonts.css" />

	<!-- Custom Google fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/main.css" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/media.css" />

	<!-- Pixeden Stroke Font Icons -->
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />

	<!-- FontAwesome 4.3.0 Icons  -->
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/fontawesome/css/font-awesome.min.css" />

	<!-- Animate CSS  -->
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/animate.css" />
</head>
<body>
	<!-- Preload the Whole Page -->
	<div id="preloader">
		<div class="battery inner">
			<div class="load-line"></div>
		</div>
	</div>

	<div id="wrapper">
		<header>
			<div class="container clearfix">
				<div class="row">
				<div class="nav-bar clearfix">
					<div class="logo">За качественное образование</div>
					<button type="button" class="mobile-nav-toggle">
						<span class="sr-only">Навигация</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
					<nav class="main">
						<ul class="top_mnu nav">
							<li class="active"><a href="#wrapper">Записаться на курс</a></li>
							<li><a href="#courseinfo">Информация о курсе</a></li>
							<li><a href="#lectors">Лекторы</a></li>
							<li><a href="#programm">Программа курса</a></li>
							<li><a href="#faq">FAQ</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<section class="form-bg" data-stellar-background-ratio="0">
			<div class="form-content">
				<div class="container">
					<h5>Первый массовый открытый онлайн-курс по качеству образования</h5>
					<h1>&quot;Как использовать мнение студентов в оценке качества образования&quot;</h1>
					<form method="GET" action="">
						<input class="form-control" type="email" name="email" placeholder="Введите Ваш E-mail">
						<button class="btn btn-lg btn-primary" type="submit">Записаться на курс</button>
						<div id="order_status"></div>
					</form>
					<div class="social">
						<span>Рассказать друзьям</span>
						<script type="text/javascript">(function() {
						  if (window.pluso)if (typeof window.pluso.start == "function") return;
						  if (window.ifpluso==undefined) { window.ifpluso = 1;
						    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
						    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
						    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
						    var h=d[g]('body')[0];
						    h.appendChild(s);
						  }})();</script>
						<div class="pluso" data-background="transparent" data-options="small,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,facebook,twitter" data-url="http://course.zaobrazovanie.ru/" data-title="Как использовать мнение студентов в оценке качества образования" data-description="Первый массовый открытый онлайн-курс по качеству образования &quot;Как использовать мнение студентов в оценке качества образования”"></div>
					</div>
				</div>
			</div>
		</section>
		<div class="container">