<?php 
session_start();
require_once 'db1.php' ;
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="регестрация1.css">
      <link rel="stylesheet" type="text/css" href="../Диплом_главие.css">
      <style type="text/css">
        td > a {
  padding-left: 20px;
}

      </style>
</head>
<body>
<div class="md-12" id="menu">
    <img src="../фото/лого.png">
    <div id="Name">PizzaKaif</div>
     <div class="menu__comp">

      <a href="../Диплом_главие.php">Главная</a>
      <a href="../меню/menu.php">Меню</a>
      <a href="Отзывы.php">Отзывы</a>
      <a href="../Сотрудники/workers.php">Сотрудники</a>
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
<div class="container mt-12">
  <div class="row">
<div class="col-5">
<div class="menu__part">
<?php if($_SESSION['user']):
 echo '<h2> ' .$_SESSION["user"]['login'] . '</h2>';
 ?>
 <form action="otziv.php" method="post">
<textarea type="text" name="text" class="form-control" id="text" placeholder=" Отзыв" ></textarea>
<p></p>
<input type="mark" name="mark" class="form-control" id="mark" placeholder=" Оценка от 1-5"><br>
<p></p>
<button class="btn btn-success" id="butt">Оставить отзыв</button>
<p></p>
<?php else:?>
  <h2>Вы не можете остовлять отзывы</h2>
<?php endif ?>
<p></p>
<?php  
if ($_SESSION['mistake_mark']){
  echo '<p class="py-2  bg-danger text-black ">' . $_SESSION['mistake_mark'] . '</p>';
}
unset($_SESSION['mistake_mark']);
?>
<?php
if ($_SESSION['commistake']){
  echo '<p class="py-2  bg-warning text-black ">' . $_SESSION['commistake'] . '</p>';
}

unset($_SESSION['commistake']); 
?>

</form>
</div>

  


</div>
<div class="col-2"></div>
<div class="col-5 pt-5" >

  <?php 
$result = mysqli_query($mysql, "SELECT * FROM `otziv`");
 foreach($result as $otziv){


?>
<table >

<tr><h2><?php echo $otziv["login"] ?></h2></tr>
<tr><h3>Комментарий:</h3><p class="border border-dark bg-white pb-3" ><?php echo $otziv["text"] ?></p></tr>
<tr>
  <td><h4>Оценка:<?php echo $otziv["mark"]?></h4></td>

  <td><a href="del.php?id= <?php echo $otziv["id"]; ?>& login=<?php echo$otziv["login"];?> " class="text-dark h5">Удалить комментарий</a></td></tr>


 </table>
<?php } ?>
</div>
</div>


  </div>
</body>
</html>




