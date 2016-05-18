<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav>
    <ul class="nav nav-pills">
        <li><a href="/">Главная</a></li>
        <li><a href="/php/exit.php">Выход</a></li>
        <?php if (!empty($_SESSION['k_login'])) { ?>
            <li><a href="/php/create_post.php">Написать статью</a></li>
        <?php } ?>
    </ul>
</nav>
<!-- Start header -->
<header id="header">
    <div class="col-sm-7 col-xs-12">
        <form id="login-form" class="form-inline">

            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword2">Пароль</label>
                <input name="login" type="text" class="form-control" placeholder="Login">
            </div>

            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword2">Пароль</label>
                <input name="password" type="password" class="form-control" placeholder="Password">
            </div>

            <button name="submit" type="submit" class="btn btn-default">Войти</button>
            <a href="/php/reg.php">Зарегистрироваться</a>

        </form>
        <div class="bg-warning login-empty-error">Нужно заполнить все поля.</div>
        <div class="bg-warning login-error">Введенный вами логин или пароль неверный.</div>
    </div>
    <div class="col-sm-5 col-xs-12">
        <?php
        // Проверяем, пусты ли переменные логина и id пользователя
        if (empty($_SESSION['k_login'])) {
            // Если пусты, то мы не выводим ссылку
            echo "Вы вошли на сайт, как гость<br>";
        } else {
            // Если не пусты, то мы выводим ссылку
            echo "Вы вошли на сайт, как " . $_SESSION['k_login'] . "<br>";
        }
        ?>
    </div>

</header>
<!-- end header -->
