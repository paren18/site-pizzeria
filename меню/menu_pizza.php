<?php
session_start();
require_once 'db1.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Диплом_главие.css">
    <script src="photo.js"></script>
    <link rel="stylesheet" type="text/css" href="menu.css">
    <link rel="stylesheet" type="text/css" href="photo.css">
       <title>Пиццерия</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="../jqry/jquery-3.6.4.min.js"></script>
    <script type="text/javascript"></script>

    
</head>
<body>
<script src="photo.js"></script>
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
            <?php if ($_SESSION['user']): ?>
                <button type="submit"><a href="../Регестрация/Личный_кабинет.php">Личный кабинет</a></button>
            <?php else: ?>
                <button type="submit"><a href="../Регестрация/регестрация.php">Регистрация</a></button>
                <button type="submit"><a href="../Регестрация/Вход.php">Вход</a></button>
            <?php endif ?>
        </div>
    </div>
    <div id="message"></div>
    <?php
    $result = mysqli_query($mysql, "SELECT * FROM `bluda` WHERE `tip_bluda`='Пицца'");
    echo '<table cellpadding="10"><tr id="pizza_menu"><th>Название</th><th>Описание</th><th></th><th>Цена</th></tr>';
    foreach ($result as $bluda) {
        echo '<tr id="pizza_menu_name">';
        echo '<td class="border border-dark fw-bold bg-warning">' . $bluda["name"] . "</td>";
        echo '<td class="border border-dark bg-warning">' . $bluda["opisanie"] . "</td>";
        ?>
    <td class="border border-dark"><a href="../фото/Пиццы/<?php echo $bluda["photo"]?>" data-lightbox="images"><img src="../фото/Пиццы/<?php echo $bluda["photo"]?>" width="245"></a></td>
    <?php
    echo '<td class="border border-dark fw-bold bg-warning">' . $bluda["prize"] . "</td>";
    ?>
    <?php if (isset($_SESSION['user'])): ?>
  <td class=" border-dark bg-secondary bg-gradient fw-bold">
    <div class="product-details">
      <input type="hidden" class="username" value="<?= $_SESSION["user"]['login'] ?>">
      <input type="hidden" class="name" value="<?= $bluda['name'] ?>">
      <input type="hidden" class="prize" value="<?= $bluda['prize'] ?>">
      <input type="hidden" class="photo" value="../фото/Пиццы/<?= $bluda['photo'] ?>">
      <button class="link-dark add-to-cart btn btn-warning">Заказать</button>
    </div>
  </td>
<?php else: ?>
  <td class=" border-dark bg-secondary bg-gradient fw-bold">
    <div class="product-details">
      <input type="hidden" class="username" value="<?= $_SESSION['user']['login'] ?>">
      <input type="hidden" class="name" value="<?= $bluda['name'] ?>">
      <input type="hidden" class="prize" value="<?= $bluda['prize'] ?>">
      <input type="hidden" class="photo" value="../фото/Пиццы/<?= $bluda['photo'] ?>">
      <button class="link-dark viziv btn btn-warning">Заказать</button>
    </div>
  </td>
<?php endif ?>

<?php 
echo "</tr>";
}
echo "</table>";
?>

<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>  
<script type="text/javascript">
$(document).ready(function() {
  $(".add-to-cart").click(function(e) {
    e.preventDefault();
    let $form = $(this).closest(".product-details");
    let username = $form.find(".username").val();
    let name = $form.find(".name").val();
    let prize = $form.find(".prize").val();
    let photo = $form.find(".photo").val();
    const qty = 1;

    // AJAX request
    $.ajax({
      url: "funcs.php",
      type: "POST",
      data: {
        username: username,
        name: name,
        prize: prize,
        qty: qty,
        photo: photo
      },
      success: function(data) {
        console.log(data);
        $("#message").html(data);
        window.scrollTo(0, 0);
      }
    });
  });

  $(".viziv").click(function() {
    alert("Чтобы оформить заказ, пожалуйста, авторизуйтесь");

  });
   });

</script>
<footer class="border-top border-dark" >
    <div class="mt-4"></div>
    

</footer>
</body>
</html>
