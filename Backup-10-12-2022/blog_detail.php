<?php require "application/views/components/header.component.php"; ?>
<?php require "application/views/components/nav.component.php"; ?>
<?php //require "application/models/blog.model.php"; ?>
<?php
require 'application/models/DbConnect.php';
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
<main>
      <div class="article-item">
        <h1><?php echo $article_data['title'] ?></h1>
        <div class="article_block">
            <?php
//            echo "$article_data[article_image]";
            echo <<<_HTML_
            <div class="blog_article">
                <h1><?php echo $article_data[title] ?></h1>
                <img src="$article_data[article_image]" alt="$article_data[title]">
                <p>Категория: $article_data[category]</p><br>
                <div class="full_text">
                    <p>$article_data[full_text]</p>
                </div>
                <br><p>Дата публикации: $article_data[add_date]</p>

            </div>
_HTML_;

            ?>

        </div>
        <div class="article_block">
            <a href="/">На главную страницу</a>
            <a href="/blog">Перейти к списку статей</a>
        </div>
    </div>

</main>
<?php //require "application/views/components/footer.component.php"; ?>
