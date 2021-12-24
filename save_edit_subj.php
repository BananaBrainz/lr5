<html>
<body>
<?php
include("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
} // установление соединения с сервером


$id_sub = $_GET['id_sub'];
$name_sub = $_GET['name_sub'];
$fio_subj = $_GET['fio_subj'];

$zapros = "UPDATE subj SET name_sub='$name_sub', fio_subj='$fio_subj' 
WHERE id_sub='$id_sub'";

$result = $mysqli->query($zapros);
if ($result) {
    if ($_SESSION['type'] == 1)
        echo "Все сохранено.<a href=subj.php> Вернуться к списку Предметов </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Все сохранено.<a href=subjAdm.php> Вернуться к списку Предметов </a>";
} else {
    if ($_SESSION['type'] == 1)
        echo "Ошибка сохранения.<a href=subj.php> Вернуться к списку Предметов </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Ошибка сохранения.<a href=subjAdm.php> Вернуться к списку Предметов </a>";
}
?>
</body>
</html>