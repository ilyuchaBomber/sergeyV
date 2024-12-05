<?php
// Настройки подключения к базе данных
$host = 'MySQL-8.0'; // Хост базы данных (для локального сервера это 'localhost')
$username = 'root';  // Имя пользователя MySQL (по умолчанию 'root')
$password = 'Sfdv11!vg#fg';      // Пароль к базе данных (оставьте пустым, если его нет)
$dbname = 'cinema_kinoslash'; // Имя базы данных

// Создание подключения
$conn = new mysqli($host, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>