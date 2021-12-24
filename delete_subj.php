<?php
include("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database)
or die ("Невозможно подключиться к серверу");
$id_sub = $_GET['id_sub'];
if ($_SESSION['type'] == 2)
    $result = $mysqli->query("DELETE FROM subj WHERE id_sub='$id_sub'");
else
    echo "Недостаточно прав";
header("Location: subjAdm.php");
exit;
?>
