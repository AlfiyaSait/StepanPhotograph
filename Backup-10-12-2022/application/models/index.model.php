<?php

require 'DbConnect.php';
$pdo = DbConnect::getConnection();

$query="SELECT id,category,title,short_text,article_image,add_date 
        FROM articles
        ORDER BY add_date DESC;";
$result=$pdo->query($query);
//d($result);
//d($result->fetch());
