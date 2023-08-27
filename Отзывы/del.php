<?php 
session_start();
require_once 'db1.php';
$result = mysqli_query($mysql, "SELECT * FROM `otziv`");
 foreach($result as $otziv);
$userlogin= $_SESSION["user"]['login'];
$otzivlogin = $_GET["login"];
$otzivid = $_GET['id'];
if ($userlogin == $otzivlogin){

$mysql->query("DELETE FROM `otziv` WHERE `id` = '$otzivid'");
}
else {
	$_SESSION['commistake'] = 'Это не ваш комментарий';
}
 header('Location: Отзывы.php');

?>

