<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Кинослэш. Кинотеатры под рукой.</title>
    <link rel="stylesheet" href="styles/main.css">
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
<div class="slider middle">
   <div class="slides">
      <input type="radio" name="r" id="r1" checked>
      <input type="radio" name="r" id="r2">
      <input type="radio" name="r" id="r3">
      <input type="radio" name="r" id="r4">
      
      <div class="slide s1">
         <img src="images/JW4.webp" alt="Изображение" class="img">
      </div>
      <div class="slide">
         <img src="images/BR.jpg" alt="Изображение" class="img">
      </div>
      <div class="slide">
         <img src="images/you.webp" alt="Изображение" class="img">
      </div>
      <div class="slide">
         <img src="images/OH.jpg" alt="Изображение" class="img">
      </div>
   </div>
   <div class="navi_gat">
      <label for="r1" class="bar"></label>
      <label for="r2" class="bar"></label>
      <label for="r3" class="bar"></label>
      <label for="r4" class="bar"></label>
   </div>
</div>

<wrapper>
    <h1>Популярное</h1>
    <hr></hr>

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
        <nav class="button_more">
            <ul class="button_cust">
                <li>
                    <a href="movies.html">Больше фильмов</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="title_1">
        <h1>Премьеры новинок</h1>
        <hr></hr>
    </div>
    <div class="content_main">
        <div class="content_1">
            <div class="box1">
                <a href="#"><img src="images/catalogue/GT.jpg" alt="Avatar" style="width:100%"></a>
            </div>
            <div class="box2">
                <a href="#"><img src="images/catalogue/OH1.jpg" alt="Avatar" style="width:100%"></a>
            </div>
            <div class="box3">
                <a href="#"><img src="images/catalogue/BC.webp" alt="Avatar" style="width:100%"></a>
            </div>
            <div class="box4">
                <a href="#"><img src="images/catalogue/FR.jpg" alt="Avatar" style="width:100%"></a>
            </div>
            <div class="box5">
                <a href="#"><img src="images/catalogue/114.jpg" alt="Avatar" style="width:100%"></a>
            </div>
        </div>
    </div>
</wrapper>

<footer>
    <p>LLC "KnoslashCo." All rights reserved</p>
    <p>2024.</p>
</footer>
</body>
</html>
