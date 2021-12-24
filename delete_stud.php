<?php
include("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу");
$id_st = $_GET['id_st'];
if ($_SESSION['type'] == 2)
    $result = $mysqli->query("DELETE FROM stud WHERE id_st ='$id_st'");
else
    echo "Недостаточно прав";
header("Location: studAdm.php");
exit;
?>
