<?php require "components/header.component.php"; ?>
<?php require "components/nav.component.php"; ?>
<?php require 'application/models/index.model.php';?>


<main>
    <!-- Section-1 About Start -->

    <section>
        <div class="sec-1">
            <div class="sec1Text">
                <h1>Фотосессия в Аланье и Газипаше</h1>
                <p>Я – Свиридов Степан, профессиональный фотограф, работаю в районах Аланьи и Газипаши. Я снимаю портреты и пейзажи, живые репортажи, мне нравится делать фотографии рассказывающие истории.  </p><br>
                <p>Я покажу вам лучшие локации. С удовольствием помогу запечатлеть ценные моменты вашего отдыха в Турции и сохранить приятные воспоминания на всю жизнь. </p><br>
                <p>Также имею опыт в коммерческой фотографии: съёмка товаров для Интернет-магазинов и объектов недвижимости. Буду рад сотрудничеству.</p>
                <div class="sec1-contacts">
                    <p><a href="tel: +79163936961">+7-916-393-69-61</a> WhatsApp </p>
                    <p><a href="tel: +905461013576">+90-546-101-35-76 </a> Звонки </p>
                    <p>sviridoff1980@yandex.ru</p>
                </div>
            </div>
            <div class="sec1Photo"></div>
        </div>
    </section>    
    <!-- Section-1 About End -->

    <!-- Section-2 Portfolio Start -->

    <section class="sec-2">
        <div class="operations">  <!-- блок с переключаемым контентом -->
            <!-- контейнер с кнопками - табами -->
            <div class="operations__tab-container">
                <button class="btn operations__tab operations__tab--1 operations__tab--active" data-tab="1">
                    Портреты</button>
                <button class="btn operations__tab operations__tab--2" data-tab="2">
                    Репортаж</button>
                <button class="btn operations__tab operations__tab--3" data-tab="3">
                    Пейзаж</button>
                <button class="btn operations__tab operations__tab--4" data-tab="4">
                    Интерьер</button>

            </div>
            <!-- зона контента 1, активная на старте -->
            <div class="operations__content operations__content--1 operations__content--active">                
                <div class="sec2-grid"> 
                    <div class="portrait-1"></div>
                    <div class="portrait-2"></div>
                    <div class="portrait-3"></div>
                    <div class="portrait-4"></div>
                </div>              
            </div>

            <!-- зона контента 2 -->
            <div class="operations__content operations__content--2">
                <div class="sec2-grid"> 
                    <div class="reportage-1"></div>
                    <div class="reportage-2"></div>
                    <div class="reportage-3"></div>
                    <div class="reportage-4"></div>
                </div>          
            </div>

            <!-- зона контента 3 -->
            <div class="operations__content operations__content--3">
                <div class="sec2-grid"> 
                    <div class="peysage-1"></div>
                    <div class="peysage-2"></div>
                    <div class="peysage-3"></div>
                    <div class="peysage-4"></div>
                </div>    
            </div>
            <!-- зона контента 4 -->
            <div class="operations__content operations__content--4">
                <div class="sec2-grid"> 
                    <div class="interior-1"></div>
                    <div class="interior-2"></div>
                    <div class="interior-3"></div>
                    <div class="interior-4"></div>
                </div>    
            </div>
            <div class="gallery-link"><a href="portfolio" class="gallery-a">СМОТРЕТЬ ПОРТФОЛИО</a></div>
        </div>

    </section>
    <!-- Section-2 Portfolio End -->

    <!-- Section-3 Text Start -->
    <section class="sec-3">
        <div class="sec3-text">
            <p>Моя работа — сохранить приятные воспоминания, атмосферу событий на природе, в городе или студии. Я также успешно справляюсь с различными видами коммерческих проектов.</p>
        </div>
    </section>
    <!-- Section-3 Text End -->

    <!-- Section-4 Prices Start -->
    <section class="sec-4">
        <div class="prices">
            <h2>Цены </h2>
            <p>Если вас заинтересовали работы на сайте и вы хотите уточнить цены, то ниже можете найти всю необходимую информацию, более детально обсудить ваш конкретный случай можно лично:</p>
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

    </section>
    <!-- Section-4 Prices End -->

    <!-- Section-5 Reviews Start -->
    <section class="sec-5">
           <div class="sec-5-block">
            <h2>Отзывы</h2>
            <div class="reviews">
                <div class="review-item" >
                    <div class="item-1"> </div>
                    <div class="review-item-title">Лана Хамитова</div>
                    <div class="review-item-text">Мне очень понравилось работать со Степаном. Наша фотосессия была сделана отлично, весело и со вкусом.</div>
                </div>
                <div class="review-item">
                    <div class="item-2"></div>
                    <div class="review-item-title">Сергей Семахин</div>
                    <div class="review-item-text">Степан - настоящий знаток своего дела. Фото вышли потрясающие, я всем доволен. </div>
                </div>
                <div class="review-item">
                    <div class="item-3"></div>
                    <div class="review-item-title">Фарух Мустафа</div>
                    <div class="review-item-text">The shooting process was easy and relaxed. The photos from Stepan exceeded all my expectations.</div>
                </div>
                <div class="review-item">
                    <div class="item-4"></div>
                    <div class="review-item-title">Айнара Нургишиева</div>
                    <div class="review-item-text">Степан работает с професионнальной техникой, знает, как построить кадр. Фото насыщенные, всем очень понравились. </div>
                </div>
            </div>
        </div>


    </section>
    <!-- Section-5 Reviews End -->

    <!-- Section-6 Order Start -->
<!--    <section class="sec-6">-->
<!--        <form action="" method="POST">-->
<!--            <h2>Заказать фотосессию</h2>-->
<!--            <div>-->
<!--                <label for="first_name">Имя:</label>-->
<!--                <input type="text" name="first_name" placeholder="Только русские буквы" value="$input[first_name]">-->
<!--                <span>$errors[first_name]</span>-->
<!--            </div>-->
<!--            <div>-->
<!--                <label for="last_name">Фамилия:</label>-->
<!--                <input type="text" name="last_name" placeholder="Только русские буквы" value="$input[last_name]">-->
<!--                <span>$errors[last_name]</span>-->
<!--            </div>-->
<!--            <div>-->
<!--                <label for="email">Электронная почта:</label>-->
<!--                <input type="email" name="email" value="$input[email]">-->
<!--                <span>$errors[email]</span>-->
<!--            </div>-->
<!--            <div>-->
<!--                <label for="login">Комментарий:</label>-->
<!--                          <textarea rows="5" cols="80" id="comment" name="comment"></textarea>-->
<!--                <span>$errors[login]</span>-->
<!--            </div>-->
<!---->
<!--            <input type="submit" value="Отправить данные">-->
<!---->
<!--        </form>-->
<!---->
<!---->
<!--    </section>-->

    <!-- Section-6 Order End -->

    <!-- Section-7 Blog Start -->
    <section class="sec-7" id="s">
        <div class="container">
            <div class="sec-7-header">
                <h2>Блог</h2>
                <p>Основываясь на своем опыте фотографа, в своем блоге я буду публиковать статьи о технике фотосъемки и полезную информацию о проведении фотосессии.</p>
            </div>
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
            <div class="blog-link"><a href="blog">Посмотреть все статьи в блоге</a></div>
        </div>
    </section>

    <!-- Section-7 Blog End -->

    <!-- Section-8 Contacts Start -->
    <section class="sec-8">
        <div class="sec8-text">
            <p>Я - АКТИВНЫЙ ПОЛЬЗОВАТЕЛЬ СОЦИАЛЬНЫХ СЕТЕЙ. ПОДПИСЫВАЙТЕСЬ!</p>
            <div class="icons-block">
                <a href="https://www.instagram.com/stepan_sviridoff/"><img src="images/icons/instagram_black_logo_icon.png" class="icons" alt="Instagram">
                </a>
                <a href="https://www.facebook.com/stepan.sviridov.56"><img src="images/icons/social_facebook_fb.png" class="icons" alt="Facebook">
                </a>
                <a href="https://vk.com/businesseasy"><img src="images/icons/free-icon-vkontakte.png" class="icons" alt="VKontakte">
                </a>
            </div>
            <p><a href="tel: +79163936961">+7-916-393-69-61</a> WhatsApp </p>
            <p><a href="tel: +905461013576">+90-546-101-35-76 </a> Звонки </p>
            <p>sviridoff1980@yandex.ru</p>
        </div>
    </section>
    <!-- Section-8 Contacts End -->
</main>
</body>
</html>
<?php require "components/footer.component.php"; ?>