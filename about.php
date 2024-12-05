<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Кинослэш. Кинотеатры под рукой.</title>
    <link rel="stylesheet" href="styles/about.css">
</head>
<header class="fixed">
    <div class="main_nav">
        <a href="index.php"><img src="images/logo.png"></a>
    </div>
	<nav class="navigation">
            <ul class="menu_2">
                <li><a href="index.php">Главная</a></li>
                <li><a href="movies.php">Фильмы</a></li>
                <li><a href="about.php">О кинотеатре</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                <!-- Если пользователь авторизован, показываем "Личный кабинет" -->
                <li><a href="account.php">Личный кабинет</a></li>
				<?php else: ?>
                <!-- Если пользователь не авторизован, показываем "Вход" и "Регистрация" -->
                <li><a href="login.php">Вход</a></li>
                <li><a href="register.php">Регистрация</a></li>
				<?php endif; ?>
            </ul>
        </nav>
</header>
<body>
<div class="one_block">
	<p>LTD Kinoslash Cinema — Это сеть кинотеатров по всему городу. Для удобства использования мы рады представить данный сайт, где все кинотеатры собраны в одном месте. Здесь вы можете в пару кликов выбрать интересующий вас фильм, узнать о предстоящих премьерах, посмотреть новинки, и ближайшие к вам кинотеатры, показывающие тот или иной фильм.</p>
</div>

<div id="double_block">
	<div class="wrapper">
		<img src="images/grid-flower-2.webp">
	</div>
	
	<div class="aside">
		<p>График работы киноетатра:</p>
	</div>
</div>
<footer>
    <p>LLC "KnoslashCo." All rights reserved</p>
    <p>2024.</p>
</footer>
</body>
</html>
