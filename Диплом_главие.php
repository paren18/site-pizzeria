<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Диплом_главие.css">
	<title>Пиццерия</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
</head>
<body>

	<div class="md-12" id="menu">
		<img src="фото/лого.png">
		<div id="Name">PizzaKaif</div>
     <div class="menu__comp ">

			<a href="Диплом_главие.php">Главная</a>
			<a href="меню/menu.php">Меню</a>
			<a href="Отзывы/Отзывы.php">Отзывы</a>
			<a href="Сотрудники/workers.php">Сотрудники</a>
			<a href="меню/cart.php">Корзина</a>
		</div>
<div class="menu__part">
<?php if($_SESSION['user']): ?>
<button type="submit"><a href="Регестрация/Личный_кабинет.php">Личный кабинет</a></button>
<?php else:?>
<button type="submit"><a href="Регестрация/регестрация.php">Регистрация</a></button>
<button type="submit"><a href="Регестрация/Вход.php">Вход</a></button>
<?php endif ?>
  </div>

	</div>
	

<div id="o_nas">&bull;<u id="o_nas_zag">О НАС</u>&bull;</div>
<p id="o_nas_text">Одно из лучших заведений. Здесь царит прекрасная атмосфера, идеально подходящая для веселых встреч с друзьями, теплых семейных обедов и ужинов, а также для романтического свидания со своей второй половинкой.</p>

<div id="o_nas">&bull;<u id="o_nas_zag">ФИЛОСОФИЯ БЛЮД</u>&bull;</div>
<p id="o_nas_text">Наше основное итальянское меню, было разработано совместно с шефом- поваром итальянского ресторана со звёздами Мишлен. В меню вы найдёте все, что так любят в Италии: самые свежие продукты, огромные порции вкусных и сытных салатов, большой выбор супов, горячих блюд средиземноморской кухни и настоящую итальянскую пиццу.</p>
<div id="o_nas">&bull;<u id="o_nas_zag">ИНТЕРЬЕР</u>&bull;</div>
<div id="interier">
<img src="фото/интерьер_1.jpg" id="interier_photo_1">
<img src="фото/интерьер_2.jpg" id="interier_photo_2">
<img src="фото/интерьер_3.jpg" id="interier_photo_3">
<img src="фото/интерьер_4.jpg"id="interier_photo_4">
</div>
<footer class="border-top border-dark" >
	<p>Сайт сделан Зеленовым Игорем</p>
	

</footer>

</body>
</html>