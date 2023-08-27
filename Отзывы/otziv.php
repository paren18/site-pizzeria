<?php 
session_start();
require_once 'db1.php' ;
$login = $_SESSION["user"]['login'];
$text = $_POST['text'];
$mark = $_POST['mark'];
if ($mark <= 5 && $mark >= 1){
$sql = "INSERT INTO `otziv` (`login`, `text`, `mark`) VALUES('$login', '$text', '$mark')"; 
if($mysql->query($sql));
} else{
    $_SESSION['mistake_mark'] ='Неподходящая оценка';
    header('Location: Отзывы.php');
}
header('Location: Отзывы.php');
?>