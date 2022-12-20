-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 06 2022 г., 21:39
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stepan-photograph`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `category`, `title`, `short_text`, `full_text`, `article_image`, `add_date`) VALUES
(1, 'Обзоры техники', 'Обзор новой камеры NIKON D3500 18-55 P VR KIT BLACK', 'Начинающим фотографам следует обратить внимание на современный фотоаппарат Nikon D3500 18-55 P VR Kit Black, который обладает специальным справочником Guide. В данном справочнике имеется множество подсказок и фотографий-примеров.', 'Начинающим фотографам следует обратить внимание на современный фотоаппарат Nikon D3500 18-55 P VR Kit Black, который обладает специальным справочником Guide. В данном справочнике имеется множество подсказок и фотографий-примеров. Это позволяет максимально быстро не только освоить особенности управления устройством, но и усовершенствовать свои знания и навыки для получения отличного итогового результата.\r\n\r\nКамера отличается продуманной до мельчайших деталей эргономикой. Устройство отличается компактными размерами и достаточно удобным хватом. Поэтом аппарат максимально удобно располагается в руке. Кнопки, которые необходимы для управления устройством, находятся прямо под большим пальцем от дисплея. Благодаря этому при съемке обеспечено большее удобство. За счет металлического крепления байонета существенно увеличивается срок службы фотоаппарата, если применять сменную оптику.', '/images/blog/article-1.jpg', '2022-11-25'),
(2, 'Полезная информация', 'Как подготовиться к фотосессии?', 'В этой статье я расскажу, как можно подготовиться к фотосессии, на что обратить внимание.', '<p>Результат фотосессии во многом будет зависеть от того, как вы к ней подготовитесь. В процессе подготовке предлагаю пройти следующие шаги:</p>\r\n<ol>\r\n<li>Определитесь с целью:</li>\r\n</ol>\r\n<p>Что это будет за фотосессия, что Вы хотите получить по её итогу? Какой конкретно результат Вам нужен?</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"2\">\r\n<li>Подготовьте референсы:</li>\r\n</ol>\r\n<p>Определитесь со стилем фотосессии. Подготовьте moodboard будущей фотосессии. Удобный сервис для этого Pinterest.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"3\">\r\n<li>Определитесь с локацией:</li>\r\n</ol>\r\n<p>Это может быть, например, ваш дом, дикий скалистый пляж, конный клуб, уютное кафе, атмосферные улочки города.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"4\">\r\n<li>Определитесь с удобной для Вас датой и временем фотосессии.</li>\r\n</ol>\r\n<p>Желательно, чтобы в этот день вам никуда больше не нужно было спешить, и Вы могли бы уделить творческому процессу столько времени и сил, сколько потребуется для достижения цели фотосессии.</p>\r\n<p>Для съёмки на природе желательно выбирать утреннее, либо вечернее время, в течение первого часа после восхода солнца, либо за час до его заката.</p>\r\n<p>Для фотосессии с малышом нужно выбирать то время, в которое малыш будет максимально бодр.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"5\">\r\n<li>Выберите образы для фотосессии.</li>\r\n</ol>\r\n<p>Подготовьте одежду, реквизиты и аксессуары. Это очень важная часть подготовки.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"6\">\r\n<li>Ваше тело и лицо должны быть максимально готовы к фотосессии.</li>\r\n</ol>\r\n<p>Будьте аккуратны с загаром накануне фотосессии, излишний загар может вызвать раздражение на коже.</p>\r\n<p>Заранее продумайте причёску и макияж. Ваши руки так же будут играть важную роль в кадре, они будут выглядеть ухоженно, если сделать хороший маникюр.</p>\r\n<p>Мужчинам так же нужно будет подготовиться. Аккуратная стрижка, ухоженная кожа.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"7\">\r\n<li>Вам нужно продумать позы, в которых на фото вы будете выглядеть наиболее выигрышно.</li>\r\n</ol>\r\n<p>Результат получится гораздо лучше, если вы заранее подготовитесь. Оденьтесь в подготовленные для фотосессии образы, определитесь с позами, потренируйте их перед зеркалом.</p>\r\n<p>&nbsp;</p>\r\n<ol start=\"8\">\r\n<li>Перед фотосессией нужно хорошо выспаться, вкусно покушать и взять со собой максимум позитива и хорошего настроения.</li>\r\n</ol>', '/images/blog/article-2.jpg', '2022-11-23'),
(3, 'Полезная информация', 'Одежда для фотосессии', 'Ничто так не делает фотографию лучше, как правильно подобранный образ.\r\nОдежда участников фотосессии должна гармонировать по предназначению: спортивная, вечерняя, деловая.', '<p>Ничто так не делает фотографию лучше, как правильно подобранный образ.</p>\r\n<p><strong>Одежда участников фотосессии должна гармонировать по предназначению</strong>: спортивная, вечерняя, деловая&hellip;</p>\r\n<p>Каждый образ должен сочетаться по стилю и цветам с локацией фотосъёмки.</p>\r\n<p><strong>Если это съёмка на природе</strong>, то минимум макияжа, минимум украшений, простая одежда в этническом стиле, простая причёска, обувь без каблуков.</p>\r\n<p><strong>Если это съёмка в ресторане</strong>, то смокинг и коктейльное платье, высокий каблук.</p>\r\n<p><strong>Для съёмки на пляже</strong> будут хорошо смотреться лёгкие летящие платья, способные развиваться на ветру. С белым купальником загар кажется на два тона темнее. Чёрный купальник стройнит, любая девушка в нём &ndash; супермодель. Слитные купальники выглядят более профессионально. Лучше фотографироваться без обуви, но, если вы хотите залезть на скалы, можно взять сандалии.</p>\r\n<p><strong>Избегайте одежду с принтами!</strong> Она хороша для повседневной жизни. Но для фото наиболее уместна однотонная одежда.</p>\r\n<p>Избегайте одежды абсолютно одного цвета, это будет выглядеть скучно.</p>\r\n<p>Кислотный цвета исключены. С окружающей обстановкой всегда будут хорошо сочетаться благородные цвета или цвета пастельных тонов.</p>\r\n<p>Обувь должна гармонично завершать ваш образ.</p>\r\n<p><strong>Желательно для фотосессии подготовить несколько образов и менять их по ходу съёмки.</strong></p>\r\n<p>Масса аксессуаров поможет разнообразить съёмку. Это может быть: элегантная шляпа, модные очки, яркая сумка, красивое парео для пляжа, интересная бижутерия, фрукты, канат, платки, удочка, доска для сёрфинга.</p>', '/images/blog/article-3.jpg', '2022-11-24');

-- --------------------------------------------------------

--
-- Структура таблицы `interior`
--

CREATE TABLE `interior` (
  `img_id` int(11) NOT NULL,
  `img_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `interior`
--

INSERT INTO `interior` (`img_id`, `img_address`) VALUES
(4, 'images/interior/167034247293925_interior-1.jpg'),
(5, 'images/interior/1670342487149593_interior-3.jpg'),
(6, 'images/interior/167034249898818_interior-4.jpg'),
(7, 'images/interior/1670342550124554_interior-11.jpg'),
(8, 'images/interior/1670342620207014_1670330957207014_interior-18.jpg'),
(9, 'images/interior/1670342673177689_interior-15.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `paysage`
--

CREATE TABLE `paysage` (
  `img_id` int(11) NOT NULL,
  `img_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `paysage`
--

INSERT INTO `paysage` (`img_id`, `img_address`) VALUES
(20, 'images/paysage/1670185185_1_279391_paysage-1.jpg'),
(21, 'images/paysage/1670185233_1_182570_paysage-2.jpg'),
(22, 'images/paysage/1670185241_1_395264_paysage-3.jpg'),
(23, 'images/paysage/1670185248_1_123915_paysage-4.jpg'),
(24, 'images/paysage/1670185255_1_115296_paysage-5.jpg'),
(25, 'images/paysage/1670185263_1_283458_paysage-8.jpg'),
(26, 'images/paysage/1670185283_1_258428_paysage-6.jpg'),
(27, 'images/paysage/1670185307_1_150259_paysage-7.jpg'),
(28, 'images/paysage/1670185318_1_182847_paysage-10.jpg'),
(29, 'images/paysage/1670185327_1_385330_paysage-12.jpg'),
(30, 'images/paysage/1670185339_1_243613_paysage-9.jpg'),
(31, 'images/paysage/1670185353_1_135421_paysage-13.jpg'),
(32, 'images/paysage/1670185364_1_189821_paysage-14.jpg'),
(33, 'images/paysage/1670185371_1_189375_paysage-15.jpg'),
(34, 'images/paysage/1670185381_1_216949_paysage-16.jpg'),
(35, 'images/paysage/1670185395_1_163524_paysage-17.jpg'),
(36, 'images/paysage/1670185404_1_184289_paysage-11.jpg'),
(37, 'images/paysage/1670185415_1_131327_paysage-18.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `portraits`
--

CREATE TABLE `portraits` (
  `img_id` int(11) NOT NULL,
  `img_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `portraits`
--

INSERT INTO `portraits` (`img_id`, `img_address`) VALUES
(25, 'images/portraits/1670182942_1_198673_portrait-11.jpg'),
(26, 'images/portraits/1670182954_1_250528_portrait-3.jpg'),
(27, 'images/portraits/1670182963_1_176232_portrait-10.jpg'),
(28, 'images/portraits/1670182977_1_165268_portrait-2.jpg'),
(29, 'images/portraits/1670182985_1_168609_portrait-17.jpg'),
(30, 'images/portraits/1670183003_1_328097_portrait-4.jpg'),
(31, 'images/portraits/1670183039_1_132450_portrait-13.jpg'),
(32, 'images/portraits/1670183048_1_109543_portrait-14.jpg'),
(33, 'images/portraits/1670183075_1_107607_portrait-9.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `reportage`
--

CREATE TABLE `reportage` (
  `img_id` int(11) NOT NULL,
  `img_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reportage`
--

INSERT INTO `reportage` (`img_id`, `img_address`) VALUES
(5, 'images/reportage/167034197196095__DSC09014.jpg'),
(6, 'images/reportage/1670341989284399__MDF7155.jpg'),
(7, 'images/reportage/1670342021183690_DSC_3904.jpg'),
(8, 'images/reportage/1670342034203055__MDF7422.jpg'),
(9, 'images/reportage/1670342049241502_DSC_0620.jpg'),
(10, 'images/reportage/1670342076133358_DSC_6206.jpg'),
(11, 'images/reportage/1670342102215908_DSC_0032.jpg'),
(12, 'images/reportage/1670342108133598_DSC_6856.jpg'),
(13, 'images/reportage/1670342114116412_DSC_7349.jpg'),
(14, 'images/reportage/167034213578663_DSC_9133.jpg'),
(15, 'images/reportage/1670342142101111_DSC_9566.jpg'),
(16, 'images/reportage/1670342148255031_P9120137.jpg'),
(17, 'images/reportage/1670342191110416_DSC_6622.jpg'),
(18, 'images/reportage/1670342198149039_DSC_2913.jpg'),
(19, 'images/reportage/1670342212107254_DSC_2380.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `first_name`, `last_name`, `email`, `password`, `image`, `add_date`) VALUES
(1, 'ira', 'Ирина', 'Смирнова', 'ira@mail.ru', '$2y$10$.2Y8VELA1x6s8qM4AiFzPOC7px5.AVArOs.kNzKXRZL85RHSmMSCe', 'images/20522_1669714611_3_20522_de-an-sun-3JCL1hAyrG4-unsplash.jpg', '2022-11-30 10:36:00'),
(2, 'ivan', 'Иван', 'Семенов', 'ivan@mail.ru', '$2y$10$F55EzOWrrpdhexeWpeGf8uUV/hJxJsyoXCylDAf0ig9ysHUU0uTd6', 'images/32951_1669716855_2_32951_andri-klopfenstein-VpaTEPFRiIs-unsplash.jpg', '2022-12-01 09:39:42'),
(3, 'musa', 'Муся', 'Ахмадов', 'm@mail.ru', '$2y$10$f0K1t1KVT.23ZKZXMt3M5uT622cBq1XSTLQOmhF5o5jggrD09f8Pe', 'images/61025_1669714652_1_61025_aidan-feddersen-krK-DxB9MGo-unsplash.jpg', '2022-12-01 10:00:08'),
(4, 'alta', 'Альфия', 'Саитова', 'alta2004@inbox.ru', '$2y$10$8Gr9TTRFSBsSBHfaSmPbsODELLMEdYYP39f0HcaEhktys9NISdxmO', 'images/61025_1669714652_1_61025_aidan-feddersen-krK-DxB9MGo-unsplash.jpg', '2022-12-01 15:16:49'),
(5, 'karina', 'Карина', 'Саитова', 'kari@mail.ru', '$2y$10$RxUfABBNoUeqVzlQETBnRedQol/dAN.PycbHLPaM86mVCRIl2EFO2', 'images/64705_1669716506_2_64705_adria-sanchez-roque-3PtXzzZLp-s-unsplash.jpg', '2022-12-01 16:56:50'),
(6, 'karim', 'Карим', 'Ренатов', 'karim@ren.ru', '$2y$10$oDDaLj8Oa3kmX0U9Yz3FXe3/uvE6oyvQyeZd8Xmp8tiHgr8V6gTTW', 'images/215908_DSC_0032.jpg', '2022-12-04 12:18:21');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `interior`
--
ALTER TABLE `interior`
  ADD PRIMARY KEY (`img_id`);

--
-- Индексы таблицы `paysage`
--
ALTER TABLE `paysage`
  ADD PRIMARY KEY (`img_id`);

--
-- Индексы таблицы `portraits`
--
ALTER TABLE `portraits`
  ADD PRIMARY KEY (`img_id`);

--
-- Индексы таблицы `reportage`
--
ALTER TABLE `reportage`
  ADD PRIMARY KEY (`img_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `interior`
--
ALTER TABLE `interior`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `paysage`
--
ALTER TABLE `paysage`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `portraits`
--
ALTER TABLE `portraits`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `reportage`
--
ALTER TABLE `reportage`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
