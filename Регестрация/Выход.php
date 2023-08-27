<?php 
session_start();
unset($_SESSION["user"]);
header('Location:../Диплом_главие.php ');
?>