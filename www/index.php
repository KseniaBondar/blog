<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include('/php/menu.php'); ?>
    <h2>Главная страница</h2>

    <!-- Start header -->
    <header id="header">
      <div class="col-sm-7 col-xs-12">
        <form class="form-inline" action="/php/testreg.php" method="post">

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
      </div>
      <div class="col-sm-5 col-xs-12">
        <?php
        // Проверяем, пусты ли переменные логина и id пользователя
        var_dump($_SESSION);
        if (empty($_SESSION['k_login'])){
          // Если пусты, то мы не выводим ссылку
          echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
        }
        else{
        // Если не пусты, то мы выводим ссылку
          echo "Вы вошли на сайт, как ".$_SESSION['k_login']."<br><a  href='/'>Эта ссылка доступна только  зарегистрированным пользователям</a>";
        }
        ?>
      </div>
  
    </header><!-- end header -->
    
    <!-- Start Navigation-->
    <nav>
      
    </nav><!-- end navigation-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>