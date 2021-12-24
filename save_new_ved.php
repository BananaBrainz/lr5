<?php
include ("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к БД";
}

$date_ved = $_GET['date_ved'];
$id_st = $_GET['id_st'];
$id_sub = $_GET['id_sub'];
$ocen = $_GET['ocen'];

// Выполнение запроса
$result = $mysqli->query("INSERT INTO ved SET date_ved='$date_ved', id_st='$id_st', id_sub='$id_sub', ocen='$ocen'");
if ($result) {
    print "<p>Внесение данных прошло успешно!";
    if ($_SESSION['type'] == 1)
        echo "<p><a href=ved.php> Вернуться к списку </a>";
    elseif ($_SESSION['type'] == 2)
        echo ".<p><a href=vedAdm.php> Вернуться к списку </a>";
} else {
    if ($_SESSION['type'] == 1)
        echo "Ошибка сохранения . <p><a href=ved.php> Вернуться к списку </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Ошибка сохранения . <p><a href=vedAdm.php> Вернуться к списку </a>";
}
?>