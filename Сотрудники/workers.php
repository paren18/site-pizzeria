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
	<link rel="stylesheet" type="text/css" href="workers.css">

	<title>Пиццерия</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../jqry/css//lightbox.css">

</head>
<body>
<script src="../jqry/js/lightbox-plus-jquery.js"></script>
	<div class="md-12" id="menu">
		<img src="../фото/лого.png">
		<div id="Name">PizzaKaif</div>
     <div class="menu__comp">

			<a href="../Диплом_главие.php">Главная</a>
			<a href="../меню/menu.php">Меню</a>
			<a href="../Отзывы/Отзывы.php">Отзывы</a>
			<a href="workers.php">Сотрудники</a>
			<a href="../меню/cart.php">Корзина</a>
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
  <?php
 $result = mysqli_query($mysql, "SELECT * FROM `staff`");
  ?> 

<div class="container overflow-hidden ">
  <div class="row gy-5 worekers_text">
  	<?php
     foreach($result as $staff){
     ?> 
    <div class="col-4">
     <div class="image">
    <img src="Сотрудники/<?php echo $staff["photo"]?>">
  </div>
    <div><?php echo $staff["name"]?></div>
    <div>Возраст: <?php echo $staff["age"]?></div>
    <div class="fw-bolder"><?php echo $staff["work"]?></div> 
     </div>
    <?php 
  }
?>
</div>
</div>




	
</body>
</html>