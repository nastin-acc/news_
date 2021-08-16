<?php

require_once '..\connection.php';

$id=$_GET['id'];
mysqli_query($conn,query:"DELETE FROM `news` WHERE `news`.`id`='$id'");


?>
<!DOCTYPE html>
<html>
<h1 >Запись удалена</h1>
<a href="../index.php">Вернуться назад</a>
</html>