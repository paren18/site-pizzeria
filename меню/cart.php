<?php
  session_start();
   
    $servername = "localhost";
    $username = "root";
   $password = "";
   $dbname = "restoran";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
   
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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel="stylesheet" type="text/css" href="../jqry/css/lightbox.css">
    <script src="../jqry/jquery-3.6.4.min.js"></script>
    <script src="../jqry/js/lightbox-plus-jquery.js"></script>
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
            <?php if ($_SESSION['user']): ?>
                <button type="submit"><a href="../Регестрация/Личный_кабинет.php">Личный кабинет</a></button>
            <?php else: ?>
                <button type="submit"><a href="../Регестрация/регестрация.php">Регистрация</a></button>
                <button type="submit"><a href="../Регестрация/Вход.php">Вход</a></button>
            <?php endif ?>
        </div>
    </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
        </div>
        <div class="table-responsive mt-2">
          <table class="table  border-dark bg-warning text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-centertext-dark m-0">Товары в корзине!</h4>
                </td>
              </tr>
              <tr>
                <th></th>
                <th>ТОВАР</th>
                <th>ЦЕНА</th>
                <th>КОЛИЧЕСТВО</th>
                <th>ОБЩАЯ ЦЕНА</th>
                <th>
                  
                </th>
              </tr>
            </thead>
            <tbody>
              
<?php
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']['login'];

    $stmt = $conn->prepare('SELECT * FROM cart WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    $grand_total = 0;
    while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <input type="hidden" class="username" value="<?= $_SESSION['user']['login'] ?>">
            <td><img src="<?php echo $row["photo"]?>" width="100"></td>
            <td><b><?= $row['name'] ?></b></td>
            <input type="hidden" class="name" value="<?= $row['name'] ?>">
            <td><i class="fas"></i><?= number_format($row['prize']); ?></td>
            <input type="hidden" class="price" value="<?= $row['prize'] ?>">
            <td>
                <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:80px;">
            </td>
            <td>
                <i class="fas"></i><span class="total_price"><?= number_format($row['total_price']); ?></span>
            </td>
            <td>
                <a href="funcs.php?remove=<?= $row['name'] ?>" class="text-danger lead" onclick="return confirm('Вы уверены, что хотите удалить товар?');"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        <?php $grand_total += $row['total_price'];
    }
}
?>

              <tr>
  <td colspan="2">
    <a href="menu.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Посмотреть меню</a>
  </td>
  <td colspan="2"><b>Общая стоимость</b></td>
  <td><b><i class="fas"></i><span id="grand_total"><?= number_format($grand_total); ?></span></b></td>
  <td>
    <a href="order.php" class="btn btn-info <?= ($grand_total > 0) ? '' : 'disabled'; ?>"><i class="far order"></i>Оформить заказ</a>
  </td>
</tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

 <script type="text/javascript">
$(".itemQty").on('change', function() {
    var $el = $(this).closest('tr');
  
    var pname = $el.find(".name").val();
    var pusername = $el.find(".username").val();
    var pprize = $el.find(".price").val();
    var pqty = parseInt($el.find(".itemQty").val()); // Parse the quantity as an integer
  
    if (pqty < 1) { // Check if the quantity is less than 1
        pqty = 1; // Set the quantity to 1 if it's less than 1
        $el.find(".itemQty").val(pqty); // Update the input field with the new quantity
    }
  
    $.ajax({
        url: 'funcs.php',
        method: 'post',
        cache: false,
        data: {
            qty: pqty,
            pname: pname,
            pusername: pusername,
            prize: pprize
        },
        success: function(response) {
            console.log(response);
            var total_price = parseFloat(pprize) * parseInt(pqty);
            $el.find(".total_price").text(total_price.toFixed(0));
            updateGrandTotal();
            updateOrderButton();
        }
    });
});

function updateGrandTotal() {
    var grand_total = 0;
    $(".total_price").each(function() {
        grand_total += parseFloat($(this).text());
    });
    $("#grand_total").text(grand_total.toFixed(0));
}

function updateOrderButton() {
    var grand_total = parseFloat($("#grand_total").text());
    var orderButton = $(".btn-info");
    if (grand_total > 0) {
        orderButton.removeClass("disabled");
    } else {
        orderButton.addClass("disabled");
    }
}

// Вызываем функции updateGrandTotal() и updateOrderButton() для инициализации общей стоимости и состояния кнопки при загрузке страницы
updateGrandTotal();
updateOrderButton();
</script>
</body>

</html>