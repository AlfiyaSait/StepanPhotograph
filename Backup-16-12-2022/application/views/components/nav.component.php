
<?php

$uri=parse_url($_SERVER['REQUEST_URI'])['path'];

$nav=[
            "/"=>"Главная",
            "/services" =>"Услуги",
            "/portfolio"=>"Портфолио",
            "/blog"=>"Блог",
            "/contacts"=>"Контакты",

];
?>

<div class="navigation">
<nav>
<!--    --><?php
//        foreach ($nav as $key => $value) {
//            echo "<a href='$key'>$value </a>";
//        }
//    ?>

    <?php foreach ( $nav as $key => $value): ?>
        <a href="<?=$key?>" <?php echo $uri===$key ? 'class="link-active"' : ''     ?> ><?=$value?></a>
    <?php endforeach; ?>


<!--    <a href="/">Главная</a>-->
<!--    <a href="/services">Услуги</a>-->
<!--    <a href="/portfolio">Портфолио</a>-->
<!--    <a href="/contacts">Контакты</a>-->

</nav>

</div>