<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="регестрация1.css">
	<link rel="stylesheet" type="text/css" href="../Диплом_главие.css">
	<script src="../jqry/jquery-3.6.4.min.js"></script>
    <script src="../jqry/js/lightbox-plus-jquery.js"></script>

	<title>Вход/Регистрация</title>
</head>
<body>
	<div class="md-12" id="menu">
		<img src="../фото/лого.png">
		<div id="Name">PizzaKaif</div>
     <div class="menu__comp">

			<a href="../Диплом_главие.php">Главная</a>
			<a href="../меню/menu.php">Меню</a>
			<a href="../Отзывы/Отзывы.php">Отзывы</a>
			<a href="../Сотрудники/workers.php">Сотрудники</a>
			<a href="../меню/cart.php">Корзина</a>
		</div>
		<div class="menu__part">
<?php if($_SESSION['user']): ?>

<?php else:?>
<button type="submit"><a href="Вход.php">Вход</a></button>
<?php endif ?>
  </div>
	</div>

	<div class="container mt-4">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
				<h1>Форма регистрации</h1>
				<form id="regstr" method="post">
					<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
					<input type="text" name="name" class="form-control" id="name" placeholder="Имя"><br>
					<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
					<input type="password" name="pass_too" class="form-control" id="pass_too" placeholder="Потвердите пароль"><br>
					<button type="submit" class="btn btn-success" id="butt">Зарегистрироваться</button>
					<p></p>
					<div id="msg"></div>	
					
				</form> 
			</div>
			
			<div class="col-4"></div>

		</div>
	</div>
	<script>
		$(document).on('submit', '#regstr', function(e) {
			e.preventDefault();
			$.ajax({
				method: "POST",
				url: "regstr.php",
				data: $(this).serialize(),
				success: function(data) {
					$('#msg').html(data);
					$('#regstr').find('input').val('');
				}
			});
		});
	</script>
</body>
</html>