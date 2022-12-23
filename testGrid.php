<?php
$a=3;
$b=4;
echo $a+$b;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>Document</title>
</head>
<body>

<div class="img_box" style="display: grid; grid-template-columns:repeat(auto-fit,minmax(100px,300px)); gap: 2rem">
               
                    <div class="img-item" style="background: url('images/reviews/person01.jpg') center no-repeat;
                    background-size:contain; height: 35rem">
                    </div>    
                    <div class="img-item" style="background: url('images/reviews/person01.jpg') center no-repeat;
                    background-size:contain; height: 35rem">
                    </div>
                    <div class="img-item" style="background: url('images/reviews/person01.jpg') center no-repeat;
                    background-size:contain; height: 35rem">
                    </div>
                    <div class="img-item" style="background: url('images/reviews/person01.jpg') center no-repeat;
                    background-size:contain; height: 35rem">
                    </div>
                    <div class="img-item" style="background: url('images/reviews/person01.jpg') center no-repeat;
                    background-size:contain; height: 35rem">
                    </div>          

            </div>

<div class="img_box" style="display: grid; grid-template-columns:repeat(auto-fit,minmax(100px,300px)); gap: 2rem">
     <div>1</div>
     <div>2</div>
     <div>3</div>
     <div>4</div>
     <div>5</div>
     <div>6</div>
    </div>


    <div class="prices-table">
            <table data-table-width="20%;10%;60%;10%" width="100%">
                
                <tr>
                    <th width="20%">Пакет</th>
                    <th width="10%">Время</th>
                    <th width="60%">Что получите по итогу:</th>
                    <th width="10%">Цена</th>
<!--                    <th>Заказать</th>-->
                </tr>
                <tr>
                    <td width="20%">Мини</td>
                    <td width="10%">1 час одна локация</td>
                    <td width="60%">Все исходники и 10 фото в ретуши.</td>
                    <td width="10%">70 евро</td>
<!--                    <td><a href="#" class="prices-btn">Заказать</a></td>-->
                </tr>
                <tr>
                    <td width="20%">Комфорт</td>
                    <td width="10%">2 часа, 1 или 2 локации.</td>
                    <td width="60%">Все исходники и 20 фото в ретуши.</td>
                    <td width="10%">130 евро</td>
<!--                    <td><a href="#" class="prices-btn">Заказать</a></td>-->
                </tr>
                <tr>
                    <td width="20%">ВИП</td>
                    <td width="10%">3 часа, до 3х локаций.</td>
                    <td width="60%">Все исходники и 30 фото в ретуши.</td>
                    <td width="10%">180 евро</td>
<!--                    <td><a href="#" class="prices-btn">Заказать</a></td>-->
                </tr>
                <tr>
                    <td width="20%">Интерьерная или рекламная съёмка </td>
                    <td width="10%">1 час</td>
                    <td width="60%">Все итоговые фотографии в обработке.</td>
                    <td width="10%">70 евро</td>
<!--                    <td><a href="#" class="prices-btn">Заказать</a></td>-->
                </tr>
            </table>
        </div>
</body>
</html>
