<?php

require_once 'connection.php';

$new_id=$_GET['id'];
$new =mysqli_query($conn,query:"SELECT * FROM `news` WHERE `id`='$new_id'");
$new= mysqli_fetch_assoc($new);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <style>
  body{
    padding: 30px;

  }
  </style>
  <title >Редактирование новости</title>
</head>
<h1 align="center">Редактирование новости</h1>
<form action ="crud/update.php " method ="post" enctype="multipart/form-data" >
  <input type="hidden" name="id" value="<?=$new['id']?>">
  <input type="hidden" name="old_image" value="<?=$new['image']?>">
  <div class="mb-3">
    <p>Заголовок</p>
    <input type ="text" class="form-control" name="title" value="<?=$new['title']?>" >
  </div>
  <div class="mb-3">
    <p>Описание</p>
    <textarea rows="4" class="form-control form-control-lg" name ="description"><?=$new['description']?></textarea>
  </div>
  <div class="mb-3">
    <p>Загрузить  новую картинку: <input type ="file" name="image" class="img-fluid" ></p>
    <p>Старая картинка:<img src="<?=$new['image']?>" class="img-fluid" alt=""></p>

  </div>
  <button type ="submit" value="Отправить">Редактировать</button>
</form>

</html>
