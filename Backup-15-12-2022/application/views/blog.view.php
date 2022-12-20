<?php require "components/header.component.php"; ?>
<?php require "components/nav.component.php"; ?>
<?php require 'application/models/index.model.php'; ?>
<main>
    <div class="article">
        <?php
        while ($article_item=$result->fetch()){
            echo <<<_HTML_
                <div class="article_item">
                    <h2>$article_item[title]</h2>
                    <div class="article_preview">
                        <img class='article_images' src="$article_item[article_image]" alt="$article_item[title]">
                        <p>$article_item[short_text]...</p>
                    </div>
                    <span>Дата: $article_item[add_date]</span>
                    <span>Категория: $article_item[category]</span>

<!--                    <a href="article_detail.php?id=$article_item[id]">Подробнее</a>-->
                    <a href="blog_detail.php?id=$article_item[id]">Подробнее</a>
                </div>
_HTML_;
        }
        ?>
    </div>
        <div class="article_block">
            <a href="/">На главную страницу</a>
        </div>
    </div>
</main>
<?php require "components/footer.component.php"; ?>
