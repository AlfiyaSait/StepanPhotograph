
<?php require "components/header.component.php"; ?>
<?php require "components/nav.component.php"; ?>
<?php
require 'application/models/DbConnect.php';
$pdo = DbConnect::getConnection();
if($_SERVER['REQUEST_METHOD'] === 'POST'){ // если форма отправлена
//    echo '<h3>$_FILES</h3>';
//    d($_FILES);

    if( ( $_FILES['file_1']['error'] !== 0 ) ||
    ( $_FILES['file_2']['error'] !== 0 ) ||
    ( $_FILES['file_3']['error'] !== 0 ) ||
    ( $_FILES['file_4']['error'] !== 0 ) )
    {
        echo '<h2>Выберите файл для загрузки, возможно во время загрузки произошла ошибка</h2>';
    } elseif (
    ($_FILES['file_1']['type'] !== 'image/jpeg' && $_FILES['file_1']['type'] !== 'image/png') ||
    ($_FILES['file_2']['type'] !== 'image/jpeg' && $_FILES['file_2']['type'] !== 'image/png') ||
    ($_FILES['file_3']['type'] !== 'image/jpeg' && $_FILES['file_3']['type'] !== 'image/png') ||
    ($_FILES['file_4']['type'] !== 'image/jpeg' && $_FILES['file_4']['type'] !== 'image/png') )
    { // image/jpeg или
        // image/png
        echo '<h2>Вы можете загружать картинки только в формате jpeg или png</h2>';
    }elseif (
    ($_FILES['file_1']['size'] > 500000) ||
    ($_FILES['file_2']['size'] > 500000) ||
    ($_FILES['file_3']['size'] > 500000) ||
    ($_FILES['file_4']['size'] > 500000)
    )
    {// проверяем размер
        echo '<h2>Размер загружаемого файла должен быть не более 500кб</h2>';
    }else{ // все файлы выбраны

        // получаем имена файлов
        $file_1 = $_FILES['file_1']['name'];
        $file_2 = $_FILES['file_2']['name'];
        $file_3 = $_FILES['file_3']['name'];
        $file_4 = $_FILES['file_4']['name'];

        // получаем временные пути куда загружаются файлы
        $tmp_name_1 = $_FILES['file_1']['tmp_name'];
        $tmp_name_2 = $_FILES['file_2']['tmp_name'];
        $tmp_name_3 = $_FILES['file_3']['tmp_name'];
        $tmp_name_4 = $_FILES['file_4']['tmp_name'];

        // формируем путь к файлу
        // записываем пути к файлам в бд
        $names = [];
        $names[1] = 'images/portraits/'.time().$_FILES['file_1']['size'].'_'.$file_1;
        $names[2] = 'images/reportage/'.time().$_FILES['file_2']['size'].'_'.$file_2;
        $names[3] = 'images/paysage/'.time().$_FILES['file_3']['size'].'_'.$file_3;
        $names[4] = 'images/interior/'.time().$_FILES['file_4']['size'].'_'.$file_4;

// перемещаем файлы в папку с картинками
        move_uploaded_file($tmp_name_1, $names[1]);
        move_uploaded_file($tmp_name_2, $names[2]);
        move_uploaded_file($tmp_name_3, $names[3]);
        move_uploaded_file($tmp_name_4, $names[4]);


        // заносим путь до картинки в бд
        $query1 = "INSERT INTO portraits VALUES(?,?)";
        $result1 = $pdo->prepare($query1); // подготавливаем запрос для портретов
        $result1->execute([null, $names[1]]);

        $query2 = "INSERT INTO reportage VALUES(?,?)";
        $result2 = $pdo->prepare($query2); // подготавливаем запрос для репортажа
        $result2->execute([null, $names[2]]);

        $query3 = "INSERT INTO paysage VALUES(?,?)";
        $result3 = $pdo->prepare($query3); // подготавливаем запрос для пейзажей
        $result3->execute([null, $names[3]]);

        $query4 = "INSERT INTO interior VALUES(?,?)";
        $result4 = $pdo->prepare($query4); // подготавливаем запрос для интерьера
        $result4->execute([null, $names[4]]);

        header('Location: /admin');

    }

}// если форма отправлена

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Загрузка файлов на сервер</title>
    <style>
        form{
            background: lightgrey;
            width: 600px;
            padding: 20px;
            margin: 100px auto;
        }
        .row{
            margin: 15px;
            padding: 10px;
            border: 2px solid black;
            width: 500px;

        }
        .img_box {
            width: 300px;

        }
        .admin {

        }
        h2 {
            collapse: red;
        }


    </style>
</head>
<body>
<div class="admin">
<form action="" method="POST" enctype="multipart/form-data">
    <h2>Загрузка файлов на сервер</h2>
    <div class="row">
        <label for="file_1">Портреты</label>
        <input type="file" name="file_1">
    </div>
    <div class="row">
        <label for="file_2">Репортаж</label>
        <input type="file" name="file_2">
    </div>
    <div class="row">
        <label for="file_3">Пейзаж</label>
        <input type="file" name="file_3">
    </div>
    <div class="row">
        <label for="file_4">Интерьер</label>
        <input type="file" name="file_4">
    </div>
    <input type="submit" name="action" value="Загрузить">
</form>
</div>


<h2>Портфолио</h2>
<h3> Портреты</h3>
<?php
$query_img = "SELECT `img_address` FROM `portraits`";
$result_img = $pdo->query($query_img);
//d( $result_img->fetchAll() );
?>

<div class="img_box" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 30px">

    <?php
    while ( $block_img = $result_img->fetch() ) {
        echo <<<END
        
            <div class="img-item">
                 <img class="image" id="img_link" src="$block_img[img_address]" style="width: 300px; ">
            </div>
END;
    }
    ?>
</div>

<h3> Пейзаж</h3>
<?php
$query_img = "SELECT `img_address` FROM `paysage`";
$result_img = $pdo->query($query_img);
//d( $result_img->fetchAll() );
?>

<div class="img_box" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 30px">

    <?php

    while ( $block_img = $result_img->fetch() ) {
        echo <<<END
        
            <div class="img-item">
                 <img class="image" id="img_link" src="$block_img[img_address]" style="width: 300px; ">
            </div>
END;
    }
    ?>
</div>

<h3> Репортаж </h3>

<?php
$query_img = "SELECT `img_address` FROM `reportage`";
$result_img = $pdo->query($query_img);
//d( $result_img->fetchAll() );
?>
<div class="img_box" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 30px">

    <?php
    while ( $block_img = $result_img->fetch() ) {
        echo <<<END
        
            <div class="img-item">
                 <img class="image" id="img_link" src="$block_img[img_address]" style="width: 300px; ">
            </div>
END;
    }
    ?>
</div>

<h3> Интерьер</h3>
<?php
$query_img = "SELECT `img_address` FROM `interior`";
$result_img = $pdo->query($query_img);
//d( $result_img->fetchAll() );
?>
<div class="img_box" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 30px">

    <?php

    while ( $block_img = $result_img->fetch() ) {
        echo <<<END
        
            <div class="img-item">
                 <img class="image" id="img_link" src="$block_img[img_address]" style="width: 300px; ">
            </div>
END;
    }
    ?>

</div>


</div>

</body>
</html>

<?php require "components/footer.component.php"; ?>