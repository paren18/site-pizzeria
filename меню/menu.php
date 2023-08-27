<?php 
session_start();
require_once 'db1.php' ;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Диплом_главие.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<title>Пиццерия</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

	<div class="md-12" id="menu">
		<img src="../фото/лого.png">
		<div id="Name">PizzaKaif</div>
     <div class="menu__comp">

			<a href="../Диплом_главие.php">Главная</a>
			<a href="menu.php">Меню</a>
			<a href="../Отзывы/Отзывы.php">Отзывы</a>
			<a href="../Сотрудники/workers.php">Сотрудники</a>
			<a href="cart.php">Корзина</a>
		</div>
<div class="menu__part">
<?php if($_SESSION['user']): ?>
<button type="submit"><a href="../Регестрация/Личный_кабинет.php">Личный кабинет</a></button>
<?php else:?>
<button type="submit"><a href="../Регестрация/регестрация.php">Регистрация</a></button>
<button type="submit"><a href="../Регестрация/Вход.php">Вход</a></button>
<?php endif ?>
  </div>
  </div>
  <div id="bludo_BEGIN">&bull;<u>НАШИ БЛЮДА</u>&bull;</div>
  <div>
  	
<div>

<h2 id="bludo"><a href="menu_pizza.php">Пицца</a></h2>
<a href="menu_pizza.php"><img  src="фотки/ПИЦЦА.jpg" id="MENU_PHOTO"></a>
<p id="bludo" >Описание:</p><p class="border border-dark bg-light bg-gradient h4" id="o_bludo">Традиционное итальянское блюдо в виде круглой дрожжевой лепёшки, выпекаемой с уложенной сверху начинкой из томатного соуса, сыра и зачастую других ингредиентов, таких как мясо, овощи, грибы и других продуктов.</p>


<h2 id="bludo" class="otstup"><a href="">Спагетти</a></h2>
<a href="menu_spaghetti.php"><img  src="фотки/СПАГЕТТИ.jpg" id="MENU_PHOTO"></a>
<p id="bludo">Описание:</p><p class="border border-dark bg-light bg-gradient h4" id="o_bludo">Итальянское название длинной прямой вермишели, нитевидных макаронных изделий длиной до 50—75 см и диаметром около 2 мм.
Родиной спагетти является Италия и их широко используют в итальянской кухне, часто подают с томатным соусом. </p>

<h2 id="bludo" class="otstup"><a href="">Бургер</a></h2>
<a href="menu_burger.php"><img  src="фотки/Бургер.jpg" id="MENU_PHOTO"></a>
<p id="bludo">Описание:</p><p class="border border-dark bg-light bg-gradient h4" id="o_bludo">Бургер – это сэндвич, состоящий из разрезанной булки, внутрь которой кладут рубленую жареную котлету, кетчуп, майонез, листья салата, маринованный огурец, сырой или жареный лук, помидор, сыр.
Бургер, рецепт которого относят к американской кухне, завоевал популярность во всем мире из-за простоты приготовления. Его относят к разряду фаст фуда.</p>


<h2 id="bludo" class="otstup"><a href="">Напитки</a></h2>
<a href="menu_drink.php"><img  src="фотки/Напиток.jpg" id="MENU_PHOTO"></a>
<p id="bludo">Описание:</p><p class="border border-dark bg-light bg-gradient h4" id="o_bludo">Напиток (или напиток) - это жидкость, предназначенная для употребления человеком. Помимо своей основной функции утоления жажды, напитки играют важную роль в человеческой культуре. Распространенные виды напитков включают обычную питьевую воду, молоко, сок, коктейли и безалкогольные напитки.</p>
 
</div>


  	
  </div>

</body>
</html>