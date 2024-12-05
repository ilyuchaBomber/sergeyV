<?php
include 'db.php'; // подключаем файл с настройками подключения к базе данных

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Проверка на совпадение паролей
    if ($password != $confirm_password) {
        echo "Пароли не совпадают!";
        exit;
    }

    // Хеширование пароля
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Запрос на добавление пользователя в базу данных
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    if (mysqli_query($conn, $sql)) {
        header("Location: login.php"); // Переадресация на страницу входа
        exit;
    } else {
        echo "Ошибка: " . mysqli_error($conn);
    }
}
?>