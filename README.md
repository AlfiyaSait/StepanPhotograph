# Сайт-визитка фотографа Степана Свиридова http://stepansviridov.ru/

Личный сайт-визитка фотографа Степана Свиридова, направленный на продвижения услуг по фотосъемке и проведения фотосессий.
Данный сайт был создан в рамках итогового учебного проекта курса "Fullstack-программирование".
Целью итоговой аттестационной работы являлось создание тематического веб-ресурса посредством использования языка гипертекстовой разметки HTML, каскадных таблиц стилей CSS, языка программирования JavaScript и/или его библиотек, языка программирования PHP и СУБД MySQL.

## Разделы сайта и используемые технологии

Сайт организован посредством MVC модели. И имеет следующие разделы:   
* **Главная страница** состоит из 8 секций (представление «обо мне», краткое портфолио, текстовое поле для настроения, услуги и цены, отзывы, краткий блог, контакты).
* **Услуги и цены** – этот блок представляет собой таблицу с описанием услуг и цен.
* **Портфолио** – содержит фотографии из 4 тематик «Портреты», «Пейзажи», «Репортаж», «Интерьер».
*Используется Java Script для переключения контента.*
* **Отзывы**– представляет отзывы клиентов;
* **Блог** – содержит блок записей, с заголовком статьи, изображением, датой создания и кратким текстом. 
*Используется PHP для выгрузки из базы данных.*
* **Контакты** – содержит контактную информацию и ссылки на соц.сети.

### Навигация и авторизация на сайте
В шапке сайта располагается меню навигации, содержащее ссылку на главную страницу, чтобы перейти, если пользователь находится на других страницах сайта. Помимо основной навигации в шапке расположена кнопка для входа на сайт.
Система авторизации была сделана для учебного проекта на будущее, для индивидуальной работы с клиентами и предложения специальных условий каждому клиенту.
При нажатии кнопки «Войти» появляется форма для ввода логина и пароля. Данные проверяются на корректность на клиенте, а также на наличие записи в базе данных на сервере. При вводе корректных данных пользователь успешно авторизуется на сайте и ему становится доступен личный кабинет.
Также в форме входа реализована возможность перейти на страницу с регистрацией, если пользователь еще не зарегистрирован на сайте
После успешной авторизации пользователь в своем личном кабинете может просмотреть контактные данные, свое фото, установить новый пароль.

### Описание главной страницы

* **Блок1** - «Обо мне», это блок-представление с текстом и фотографией.
* **Блок2**  - «Краткое портфолио». Он представляет собой блок с переключаемым контентом. *В данном разделе использован JavaScript.* При нажатии на кнопки «Портреты», «Репортаж», «Пейзаж», «Интерьер» меняются фото снизу. Внизу этот блок имеет ссылку «Смотреть портфолио», ведущую на раздел «Портфолио» из основного меню сайта.

* **Блок 3**  – это текстовый блок для поднятия настроения, можно менять под разные праздники, события, для акций и спец.предложений.
* **Блок 4**  – это информация об услугах и ценах.
* **Блок 5**  – отзывы клиентов.
* **Блок 6**  – это блог со статьями. Он представляет собой подборку статей различной тематики, с соответствующими изображениями,  информацией о дате добавления и категории. *Информация в данный раздел выводится из базы данных с иcпользованием PHP.*
При нажатии на ссылку «Подробнее» открывается страница с полным текстом статьи и кнопками возвращения на главную страницу и перехода в раздел Блог (основного меню сайта), где будут располагаться все статьи.

После всех блоков идет подвал сайта, в котором дублируется основное меню сайта.
При переходе из основного меню по ссылке «Портфолио» открывается  раздел с фотографиями по темам «Портреты», «Репортаж», «Пейзаж», «Интерьер». Фотографии выгружаются из базы данных.
Отдельно реализована загрузка фотографий в разделе администратора. Администратор может загрузить либо все фотографии во все разделы сразу или по одной отдельно в нужный ему раздел.


### Использованные технологии

* HTML
* CSS
* Java Script
* PHP
* MVC-паттерн построения сайта
* Выгрузка текста и фото из базы данных посредством PHP
* Загрузка в базу данных и сохранение в папках изображений посредством PHP

### Дальнейшее развитие проекта
Сайт развивается по мере изучения и освоения новых технологий.
