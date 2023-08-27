<?php 
session_start();


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="регестрация1.css">
  <link rel="stylesheet" type="text/css" href="../Диплом_главие.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  

  </style>
  <title></title>
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
  </div>
<div class="container mt-4">
  <div class="row">
<div class="col-4"></div>
<div class="col-4"  >
  
<?php 

if (isset($_SESSION["user"]))
{
    
  
      echo '<h2>  Логин: ' .$_SESSION["user"]['login'] . '</h2>';
      echo '<h2>  Имя: ' .$_SESSION["user"]['name'] . '</h2>';

  }


?>
<p></p>
<form action="Выход.php" method="post">
  <button class="btn btn-success" id="butt">Выход из акаунта</button>
  </div>
  
  </form>

<div class="col-4"></div>
</div>
</div>
</body>
</html>