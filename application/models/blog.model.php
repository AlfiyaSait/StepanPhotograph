<?php
require 'DbConnect.php';
$pdo = DbConnect::getConnection();


//function d($arr){
//    echo '<pre>';
//    print_r($arr);
//    echo '</pre>';
//}

$id= (int)$_GET['id'];
//echo $id;

$query="SELECT id,category,title,full_text,article_image,add_date
        FROM articles
        WHERE id=?;";

$result=$pdo->prepare($query);//подготавливаем запрос
$result->execute([$id]);//выполняем запрос
//d($result->fetch());
$article_data=$result->fetch();
////заменяем технические переносы '\r\n\r\n' на теги параграфов '</p><p>'
$article_data['full_text']=str_replace("\r\n\r\n",'</p><p>',$article_data['full_text']);
//
//d ($article_data);
?>