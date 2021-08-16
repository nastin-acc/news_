<?php

require_once '../connection.php';

$id=$_POST['id'];

if ($_FILES['image']['size']!= 0){

	echo $_FILES['image']['name'];
	$name=$_FILES['image']['name'];
	$image='media/images/'.$name;
	move_uploaded_file($_FILES['image']['tmp_name'],'../media/images/'.$_FILES['image']['name']);
}else{

	$image=$_POST['old_image'];


}


$title=$_POST['title'];
$description=$_POST['description'];


mysqli_query($conn,query:"UPDATE `news` SET `title`='$title', `date`= CURRENT_TIMESTAMP, `image`='$image', `description`='$description' WHERE `news`.`id`='$id'");
?>
<!DOCTYPE html>
<html>
<h1 >Запись отредактирована</h1>
<a href="../index.php">Вернуться назад</a>
</html>