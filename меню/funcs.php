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

    // Add products into the cart table
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $prize = $_POST['prize'];
        $photo = $_POST['photo'];

        $qty = $_POST['qty'];
        $total_price = $prize * $qty;

        $stmt = $conn->prepare('SELECT name FROM cart WHERE name = ? AND username = ?');
         $stmt->bind_param('ss', $name, $username);
        $stmt->execute();
        $res = $stmt->get_result();
        $r = $res->fetch_assoc();
        $code = $r['name'] ?? '';

        if (!$code) {
            $query = $conn->prepare('INSERT INTO cart (username ,name, prize, photo, qty, total_price) VALUES (?, ?, ?, ?, ?, ?)');
            $query->bind_param('ssssss',$username, $name, $prize, $photo, $qty, $total_price);
            $query->execute();

            echo '<div id="success-message" class="alert alert-success alert-dismissible mt-2">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Блюдо добавлено!</strong>
                    </div>';
        } else {
            echo '<div id="error-message" class="alert alert-danger alert-dismissible mt-2">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Блюдо уже в корзине!</strong>
                    </div>';
        }
    }

    if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'restoran') {
      $stmt = $conn->prepare('SELECT * FROM cart');
      $stmt->execute();
      $stmt->store_result();
      $rows = $stmt->num_rows;

      echo $rows;
    }
   if (isset($_GET['remove'])) {
  $name = $_GET['remove'];

  $stmt = $conn->prepare('DELETE FROM cart WHERE name = ?');
  $stmt->bind_param('s', $name);
  $stmt->execute();

 $_SESSION['showAlert'] = 'block';
  $_SESSION['message'] = 'Продукт удален!';
  header('location: cart.php');
}
if (isset($_POST['qty'])) {
  $qty = $_POST['qty'];
  $pname = $_POST['pname'];
  $pusername = $_POST['pusername'];
  $pprice = $_POST['prize'];

  $tprice = $qty * $pprice;

  $stmt = $conn->prepare('UPDATE cart SET qty=?, total_price=? WHERE name=? AND username=?');
  $stmt->bind_param('isss', $qty, $tprice, $pname, $pusername);
  $stmt->execute();
  $stmt->close();
}
if (isset($_POST['action']) && $_POST['action'] == 'order') {
    $name = $_SESSION['user']['login'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $products = $_POST['products'];
    $grand_total = $_POST['grand_total'];
    $address = $_POST['address'];
    $pmode = $_POST['pmode'];

    $data = '';

    $stmt = $conn->prepare('INSERT INTO `order` (name, email, phone, address, pmode, products, amount_paid) VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->bind_param('ssssssd', $name, $email, $phone, $address, $pmode, $products, $grand_total);
    $stmt->execute();
    
    if ($stmt->error) {
        // Handle the error, e.g., log it or display an error message
        echo 'Error: ' . $stmt->error;
    } else {
$stmt2 = $conn->prepare('DELETE FROM cart WHERE username = ?');
$stmt2->bind_param('s', $name);
$stmt2->execute();

        $data .= '<div class="text-center">
                        <h1 class=" mt-2 text-dark">Спасибо за заказ!</h1>
                        <h2 class="text-dark">Ваш заказ готовится!</h2>
                        <h4 class="bg-warning text-light rounded p-2 text-dark">Продукт(ы) : ' . $products . '</h4>
                        <h4>Имя : ' . $name . '</h4>
                        <h4>E-mail : ' . $email . '</h4>
                        <h4>Номер телефона : ' . $phone . '</h4>
                        <h4>Обшая стоимость : ' . number_format($grand_total) . ' &#x20bd;</h4>
                        <h4>Способ оплаты : ' . $pmode . '</h4>
                        <h4><a href="../Диплом_главие.php" class="btn  btn-block text-light " id="butt">Вернутся на главную</a></h4>
                  </div>';
        echo $data;
    }
}
?>
<script src="messege.js"></script>