<?php
include ("checks.php");
require_once 'connect1.php';
$link = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysql_connect_error());
    exit();
}
mysqli_query($link, "INSERT INTO subj SET name_sub='" . $_GET['name_sub']
    . "', fio_subj='" . $_GET['fio_subj'] . "'");
if (mysqli_affected_rows($link) > 0) // если нет ошибок при выполнении запроса
{
    print "<p>Спасибо, Ваш Предмет добавлен в базу данных.";
    if ($_SESSION['type'] == 1)
        echo "<p><a href=subj.php> Вернуться к списку Предмет </a>";
    elseif ($_SESSION['type'] == 2)
        echo "<p><a href=subjAdm.php> Вернуться к списку Предмет </a>";
} else {
    if ($_SESSION['type'] == 1)
        echo "Ошибка сохранения . <p><a href=subj.php> Вернуться к списку Предмет </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Ошибка сохранения . <p><a href=subjAdm.php> Вернуться к списку Предмет </a>";
}
?>
