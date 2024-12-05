<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Если пользователь не авторизован, перенаправляем на страницу входа
    exit;
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = $user_id LIMIT 1";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Обрабатываем обновление данных
    $new_username = $_POST['username'];
    $new_password = $_POST['password'];
    $new_password_hashed = password_hash($new_password, PASSWORD_DEFAULT);

    // Обновление данных в базе данных
    $update_sql = "UPDATE users SET username = ?, password = ? WHERE id = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param('ssi', $new_username, $new_password_hashed, $user_id);
    $stmt->execute();

    // Обновляем данные в сессии
    $_SESSION['username'] = $new_username;

    echo "<p>Данные обновлены успешно!</p>";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="styles/main.css">
	<style>
	main {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: 80vh; /* Чтобы блок занимал большую часть экрана */
    background-color: #f4f4f4;
    padding: 20px;
}

/* Блок с данными пользователя */
.main-content {
	margin-top:60px;
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
}

/* Заголовок и подзаголовки */
h1, h2 {
    text-align: center;
    color: #333;
	font-family: sans-serif;
}

/* Стили для вывода данных пользователя */
p {
    font-size: 16px;
    color: white;
    margin: 10px 0;
	padding:2%;
	background-color:#555;
	font-family: sans-serif;
	border-radius:5px;
	
}

/* Стили для формы изменения данных */
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 20px;
	font-family: sans-serif;
}

label {
    font-size: 16px;
    color: #333;
}

input[type="text"], input[type="password"] {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    width: 100%;
}

input[type="submit"] {
    padding: 12px;
    font-size: 16px;
    background-color: black;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: grey;
}

/* Стили для кнопки выхода */
a {
    display: inline-block;
    text-align: center;
    color: white;
	background-color:black;
    font-size: 16px;
    margin-top: 20px;
	padding:2%;
    text-decoration: none;
	border-radius:5px;
	font-family: sans-serif;
	
}
a:hover{
	cursor: pointer;
    transition: background-color 0.3s;
	background-color:grey;
}


/* Мобильные стили */
@media (max-width: 768px) {
    main {
        padding: 10px;
    }

    .main-content {
        padding: 15px;
    }
}
	</style>
</head>
<body>

<header class="fixed">
    <div class="main_nav">
        <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
    </div>
    <nav class="navigation">
        <ul class="menu_2">
            <li><a href="index.php">Главная</a></li>
            <li><a href="movies.php">Фильмы</a></li>
            <li><a href="about.php">О кинотеатре</a></li>

            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="account.php">Личный кабинет</a></li>
            <?php else: ?>
                <li><a href="login.php">Вход</a></li>
                <li><a href="register.php">Регистрация</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<main>
    <div class="main-content">
        <h1>Личный кабинет</h1>

        <p><strong>Логин:</strong> <?php echo $user['username']; ?></p>
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>

        <!-- Форма для изменения данных -->
        <h1>Изменить данные</h1>
        <form method="POST" action="account.php">
            <label for="username">Новый логин:</label>
            <input type="text" name="username" id="username" value="<?php echo $user['username']; ?>" required>

            <label for="password">Новый пароль:</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Сохранить изменения">
        </form>

        <a href="logout.php">Выйти</a>
    </div>
</main>

<footer>
    <p>LLC "KnoslashCo." All rights reserved</p>
    <p>2024.</p>
</footer>

</body>
</html>