<?php
$mysql = new mysqli('localhost', 'root', '', 'restoran');
if (!$mysql) {
    die('Error');
}

