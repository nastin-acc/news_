<?php

$server = "localhost";
$login = "root";
$password = "";
$database = "news";
// Создаем соединение
$conn = mysqli_connect($server, $login, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>