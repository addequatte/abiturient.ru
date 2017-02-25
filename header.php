<?php 
session_start();
require_once('data.php');
if(isset($_GET['exit'])){
    session_destroy();
    header('location:index.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#d32121">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font.css">
<script src="js/slider.js"></script>
</head>
<body>
<header>
	<div id="logo" class="left">
		<img class="small" src="img/logo-small.svg"/>
		<img class="full" src="img/logo.svg"/>
	</div>
	<div id="header">
		<h1 class="right small">(АИС) &laquoАбитуриент&raquo </h1>
		<h1 class="right full">Автоматизированная информационная система(АИС) &laquoАбитуриент&raquo </h1>
		<input type="checkbox" id="menu-toggle" class="hidden">
		<label class="menu-toggle" for="menu-toggle">
			<i class="icon-menu"></i>
		</label>
		<nav id="header-nav">
			<li class="left"><a href='http://abiturient.ru'><i class="icon-home"></i>Главная</a></li>
			<?php if(!empty($_SESSION)) {?><li class="left"><a href='http://abiturient.ru/rating.php'><i class="icon-profile"></i>Рейтинг</a></li><?php } ?>
			<?php if(empty($_SESSION)) {?><li class="left"><a href='http://abiturient.ru/WebBlank.php'><i class="icon-pen"></i>Заполнить заявление</a></li><?php } ?>
			<li class="left"><a href='http://abiturient.ru/faq.php'><i class="icon-bubbles3"></i>Вопросы и ответы</a></li>
			<? if(!empty($_SESSION)){ ?><li class="left"><a href="?exit">Выход</a><?php } ?>
		</nav>
	</div>
</header>