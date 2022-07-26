<?php
	$color = $_POST['color'];
	$size = $_POST['size'];
	$decor = $_POST['decor'];
	$bag = $_POST['bag'];
	$phone = $_POST['phone'];

	$color = htmlspecialchars($color);
	$size = htmlspecialchars($size);
	$decor = htmlspecialchars($decor);
	$bag = htmlspecialchars($bag);
	$phone = htmlspecialchars($phone);

	$color = urldecode($color);
	$size = urldecode($size);
	$decor = urldecode($decor);
	$bag = urldecode($bag);
	$phone = urldecode($phone);

	$color = trim($color);
	$size = trim($size);
	$decor = trim($decor);
	$bag = trim($bag);
	$phone = trim($phone);

	$success = mail("izbetpro@yandex.ru", "Заявка с сайта", "Цвет: ".$color.". Размер: ".$size.". Декорация: ".$decor.". Упаковка: ".$bag.". Телефон: ".$phone,"From: all@minecraft-store.ru\r\n");

	echo $success;
          
	
	
?>