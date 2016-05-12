<?php
session_start();

if (isset($_POST['title'])) {
    $title = $_POST['title'];
}
if (isset($_POST['content'])) {
    $content = $_POST['content'];
}

if (empty($title) or empty($content)) {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

$title = stripslashes($title);
$title = htmlspecialchars($title);
$content = stripslashes($content);
$content = htmlspecialchars($content);

$user_id = $_SESSION['k_id'];

include("bd.php");

$bd_query = mysql_query("INSERT INTO posts (user_id,title,content) VALUES('$user_id','$title','$content')");

if ($bd_query == 'TRUE') {
    echo "Ваша статья успешно добавлена";
} else {
    echo "Ошибка! Статья не добавлена.";
}

?>