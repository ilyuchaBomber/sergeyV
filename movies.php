<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Кинослэш. Кинотеатры под рукой.</title>
    <link rel="stylesheet" href="styles/movies.css">
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
<wrapper>
<div class="main_catalogue">
        <div class="catalogue">
            <div class="catalogue_1">
                <p>9.0</p>
                <a href="#"><img src="images/catalogue/11.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"1+1"</a>
            <p>2011.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>8.8</p>
                <a href="#"><img src="images/catalogue/BC.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Бойцовский клуб"</a>
            <p>1999.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>9.0</p>
                <a href="#"><img src="images/catalogue/FG.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Форест гамп"</a>
            <p>1994.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>9.1</p>
                <a href="#"><img src="images/catalogue/GM.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Зеленая миля"</a>
            <p>1999.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>8.9</p>
                <a href="#"><img src="images/catalogue/IS.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Интерстеллар"</a>
            <p>2014.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>8.8</p>
                <a href="#"><img src="images/catalogue/KC.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Криминальное чтиво"</a>
            <p>1994.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>9.0</p>
                <a href="#"><img src="images/catalogue/PS.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Побег из шоушенка"</a>
            <p>1994.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>8.8</p>
                <a href="#"><img src="images/catalogue/SS.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Список Шиндлера"</a>
            <p>1993.</p>
        </div>
    </div>
    <div class="catalogue">
            <div class="catalogue_1">
                <p>9.0</p>
                <a href="#"><img src="images/catalogue/SH.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Шрек"</a>
            <p>2001.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>8.8</p>
                <a href="#"><img src="images/catalogue/GB.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Зеленая книга"</a>
            <p>2018.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>9.0</p>
                <a href="#"><img src="images/catalogue/YNP.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Унесенные призраками"</a>
            <p>2001.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>9.1</p>
                <a href="#"><img src="images/catalogue/TM.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Терминатор 2:"</a>
            <a href="#">"Судный день"</a>
            <p>1991.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>8.9</p>
                <a href="#"><img src="images/catalogue/BEGIN.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Начало"</a>
            <p>2010.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>8.8</p>
                <a href="#"><img src="images/catalogue/VK.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Властелин колец"</a>
            <p>2002.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>9.0</p>
                <a href="#"><img src="images/catalogue/LEON.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Леон"</a>
            <p>1994.</p>
        </div>
        <div class="catalogue">
            <div class="catalogue_1">
                <p>8.8</p>
                <a href="#"><img src="images/catalogue/OsP.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <a href="#">"Остров проклятых"</a>
            <p>2009.</p>
        </div>
    </div>
</wrapper>

<footer>
    <p>LLC "KnoslashCo." All rights reserved</p>
    <p>2024.</p>
</footer>
