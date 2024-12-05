<?php
session_start();
include('db.php'); // Подключаем файл для работы с базой данных

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем данные из формы
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Подготавливаем запрос для поиска пользователя по электронной почте
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Если пользователь найден
    if ($result->num_rows > 0) {
        // Получаем данные пользователя
        $user = $result->fetch_assoc();

        // Проверяем правильность пароля
        if (password_verify($password, $user['password'])) {
            // Успешный вход: сохраняем id пользователя в сессию
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];

            // Перенаправляем на главную страницу
            header("Location: index.php");
            exit();
        } else {
            // Если пароль неверный
            echo "Неверный пароль.";
        }
    } else {
        // Если пользователь не найден
        echo "Пользователь с таким email не найден.";
    }
}
?>