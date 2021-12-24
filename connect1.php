<?php
$host = 'localhost';
$database = 'users';
$user = 'root';
$password = 'root';
//require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database)
or die("ошибка" . mysqli_error($link));
?>
