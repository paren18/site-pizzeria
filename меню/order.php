<?php
  session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restoran";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['user'])) {
} else {
    $grand_total = 0;
    $allItems = '';
    $items = [];
    $username = $_SESSION['user']['login'];

    $sql = "SELECT CONCAT(name, '(', qty, ')') AS ItemQty, total_price FROM cart WHERE username = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $grand_total += $row['total_price'];
            $items[] = $row['ItemQty'];
        }
        $allItems = implode(', ', $items);
    } else {
        die("Error: " . $conn->error);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="регестрация1.css">
  <link rel="stylesheet" type="text/css" href="../Диплом_главие.css">
  <script src="../jqry/jquery-3.6.4.min.js"></script>
    <script src="../jqry/js/lightbox-plus-jquery.js"></script>
    <style type="text/css">
      #butt{
  background-color: #800000;
  border: 0px;
  box-shadow: 10px 10px 5px black;
  border-radius: 15px; 
}
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
<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-dark  p-3">Завершите заказ!</h4>
        <div class="jumbotron p-2 mb-2 text-center bg-warning text-dark">
          <h5><b>Продукт(ы): </b><?= $allItems; ?></h5>
          <h5><b>Общая стоимость : </b><?= number_format($grand_total) ?> &#x20bd;</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder=" E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Номер телефона" required>
          </div>
          <div class="form-group mb-5">
            <textarea name="address" class="form-control " rows="3" cols="10" placeholder="Адрес"></textarea>
          </div>

          <h6 class="text-center lead"><b>Выберите способ оплаты</b></h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>Способ оплаты</option>
              <option value="Наличные">Наличкой курьеру</option>
              <option value="Банковской картой">Банковской картой</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Заказать"  class="btn  btn-block text-light " id="butt">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'funcs.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });
  }); 
  </script>
</body>
</html>