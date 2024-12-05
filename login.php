
    <style>
        /* Общие стили для страницы */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Стили для формы входа */
        .login_form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
        }

        .login_form h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .login_form label {
            display: block;
            font-size: 14px;
            margin-bottom: 8px;
            color: #333;
        }

        .login_form input[type="email"],
        .login_form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 14px;
        }

        .login_form button {
            background-color: #000;
            color: white;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
        }

        .login_form button:hover {
            background-color: #fff;
            color: black;
        }

        /* Стили для кнопки возврата на главную */
        .back_to_home {
            background-color: #000;
            color: white;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            display: block;
            width: 100%;
            text-decoration: none;
            margin-top: 10px;
        }

        .back_to_home:hover {
            background-color: #fff;
            color: black;
        }

    </style>
    <div class="login_form">
        <h2>Вход</h2>
        <form action="login_process.php" method="POST">
            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Войти</button>
        </form>
        
        <a href="index.php" class="back_to_home">Вернуться на главную</a>
		<p>Нет аккаунта?<a href="register.php"> Регистрация</a></p>
    </div>
