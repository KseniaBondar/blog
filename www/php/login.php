<?php
session_start();

//заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['login'])) {
    $login = $_POST['login'];
}
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}
//если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
if (empty($login) or empty($password)) {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);
// подключаемся к базе
include("bd.php"); // файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
//извлекаем из базы все данные о пользователе с введенным логином
$result = mysql_query("SELECT * FROM users WHERE name='$login'", $db);
$myrow = mysql_fetch_assoc($result);
if (empty($myrow['password'])) {
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.");
} else {
    //если существует, то сверяем пароли
    if ($myrow['password'] == $password) {
        //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
        $_SESSION['k_login'] = $myrow['name'];
        $_SESSION['k_id'] = $myrow['id']; //эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь

        header("Location: /");
        exit();

    } else {
        //если пароли не сошлись

        exit ("Извините, введённый вами login или пароль неверный.");
    }
}
?>