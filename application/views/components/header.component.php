<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <link rel="stylesheet" href="style.css">
    <script defer src="app.js"></script>
</head>
<body>
<header>
<!--    <h1>--><?//=$header?><!--</h1>-->
    <div class="reg">
        <?php
        if( isset($_SESSION['valid_user']) ){// если пользователь авторизован
            // показываем какую-то персональную инфу
            //если есть имя и фамилия
            if ( isset($_SESSION['first_name']) && isset($_SESSION['last_name']) ) {
                //отобразить приветствие с их использованием
                echo "<h3>Добро пожаловать, $_SESSION[first_name] $_SESSION[last_name]</h3>";
            } else { // если их нет
                //отобразить приветствие, используя логин - valid_user
                echo "<h3>Добро пожаловать, $_SESSION[valid_user]</h3>";
            }

            echo '<a href="cabinet.php">Личный кабинет</a><br>';
            echo '<a href="exit.php">Выход</a>';
        }
//     elseif (isset($_SESSION['admin'])) {
//         echo '<a href="edit.php">Редактировать</a><br>';
//         echo '<a href="delete.php">Удалить</a>';
//     }
        else{ // если пользователь не авторизован
//     показываем ссылки на регистрацию и вход
            echo '<a href="enter.php">Вход</a><br>';
            echo '<a href="register.php">Регистрация</a>';
        }


        ?>
    </div>
</header>
