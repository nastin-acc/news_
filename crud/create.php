<?php

require_once '../connection.php';

$name=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],'../media/images/'.$_FILES['image']['name']);
$title=$_POST['title'];
$description=$_POST['description'];
$image='media/images/'.$name;

mysqli_query($conn,query:"INSERT INTO `news` (`id`, `title`, `date`, `image`, `description`) VALUES (NULL, '$title', CURRENT_TIMESTAMP, '$image', '$description')");

?> 
<!DOCTYPE html>
<html>
<h1 >Запись добавлена</h1>
<a href="../index.php">Вернуться назад</a>
</html>