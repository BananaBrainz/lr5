<html>
<head><title> Добавление нового Предмета </title></head>
<body>
<H2>Добавление нового Предмета:</H2>
<?php include("checks.php"); ?>
<form action="save_new_subj.php" method="get">
    Предмет: <input name="name_sub" size="50" type="text">
    <br>ФИО преподавателя: <input name="fio_subj" size="50" type="text">
    <p><input name="add" type="submit" value="Добавить">
        <input name="b2" type="reset" value="Очистить"></p>
</form>
<?php
if ($_SESSION['type'] == 1)
    echo "<p><a href=subj.php> Вернуться к списку Предметов </a>";
elseif ($_SESSION['type'] == 2)
    echo "<p><a href=subjAdm.php> Вернуться к списку Предметов </a>";
?>
</body>
</html>
