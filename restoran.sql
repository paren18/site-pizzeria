-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 18 2023 г., 16:26
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `restoran`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bluda`
--

CREATE TABLE `bluda` (
  `tip_bluda` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `opisanie` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `prize` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `bluda`
--

INSERT INTO `bluda` (`tip_bluda`, `name`, `opisanie`, `prize`, `photo`) VALUES
('Напитки ', ' Апельсиновый лимонад', 'Вкусный, освежающий домашний лимонад из  апельсинов.', '180 руб', 'Апельсиновый лимонад.jpg'),
('Спагетти', 'Арабьята с пепперони', 'Паста \"Арабьята\" — классическое блюдо из итальянской кухни. Это томатная паста с «огоньком». Острая, жгучая, но такая вкусная!', '490 руб', 'Арабьята с пепперони.jpg'),
('Пицца', 'Барбекю', 'Пицца BBQ впервые была придумана в США. В ней есть все, что так ценят американцы: большое количество начинки и мясо, замаринованное и зажаренное с ароматным соусом барбекю. Она особенно ценится в мужской компании. Почему? Все просто – в начинке очень много мяса, которое пропитано легким ароматом дымка!', '520 руб', 'Барбекю_big.jpg'),
('Бургер', 'Бургер BBQ', 'Отборная, сочная высококачественная говядина, репчатый лук, хрустящие маринованные огурчики и сыр Чеддер на сдобной булочке, приправлен кетчупом из спелых томатов, дижонской горчицей высочайшего качества и фирменным огуречным соусом на основе майонеза.', '400 руб', 'Барбекю.jpg'),
('Бургер', 'Гамбургер', 'Это горячее блюдо, обычно состоящее из котлеты из измельченного мяса, как правило, говядины, помещенной внутрь нарезанной булочки.', '300 руб', 'Гамбургер.jpg'),
('Напитки ', 'Грушевый лимонад', 'Вкусный, освежающий домашний лимонад из груши.', '190 руб', 'Грушевый лимонад.jpg'),
('Спагетти', 'Карбонара', 'Паста карбонара  — спагетти с мелкими кусочками гуанчиале или панчетты (иногда заменяют на бекон), смешанные с соусом из яиц, сыра пекорино романо, соли и свежемолотого чёрного перца. Этот соус доходит до полной готовности от тепла только что сваренной пасты.', '500 руб', 'Карбонара_big.jpg'),
('Напитки ', 'Классический лимонад с лимоном', 'Вкусный, освежающий домашний лимонад из  лимонов.', '180 руб', 'Классический лимонад с лимоном.jpg'),
('Напитки ', 'Клубничный лимонад', 'Вкусный, освежающий домашний лимонад из клубники и мёда.', '200 руб', 'Клубничный лимонад.jpg'),
('Напитки ', 'Кофе ', 'Кофе — один из самых популярных и древних напитков на земном шаре. Миллионы людей начинают свой день с чашечки кофе. С молоком, с сахаром, с холодной водой, с лимоном и даже с солью… Его необыкновенный вкус и аромат порождает настоящую кофеманию. Кофе — это больше, чем напиток. Кофе — это искусство наслаждения.', '150 руб', 'Кофе.jpg'),
('Спагетти', 'Мак н чиз', 'Мак энд чиз – традиционные американские макароны с сырным соусом. Это один из самых вкусных вариантов приготовления макарон, особенно для любителей сыра.\r\nСырный соус очень универсальный.', '460 руб', 'Мак н чиз.jpg'),
('Напитки ', 'Малиновый лимонад', 'Вкусный, освежающий домашний лимонад из малины и мёда.', '200 руб ', 'Малиновый лимонад.jpg'),
('Пицца', 'Маргарита ', 'Пицца «Маргарита» — национальное блюдо итальянской кухни. Представляет собой открытую лепешку из теста, которую смазывают томатным соусом, покрывают сыром и листочками свежего базилика. Это сочетание красного, белого и зеленого цветов символизирует итальянский флаг.\r\nПо классическому рецепту пиццу готовят с моцареллой, но по желанию можно добавлять и другие виды сыра. Некоторые повара дополнительно кладут кружки помидоров.', '400 руб', 'Маргарита_big.jpg'),
('Спагетти', 'Паста Дель маре', 'Традиционная итальянская паста с морепродуктами. Тесто, разрезанное на тонкие полосы, приготовленное по этому рецепту, приобретает нежный вкус креветок, кальмаров, мидий или их коктейля. В составе этого угощения принято использовать любые морепродукты. Главным ингредиентом в пасте является нежнейший соус Бешамель. Соус Бешамель – белый сливочный соус с оттенком мускатного ореха, который часто в итальянской кухне используется, чтобы подчеркнуть вкус рыбы и макарон. Идеальное сочетание продуктов в этом блюде создаёт гармонию ароматов и комбинацию вкусов, которые ценят настоящие гурманы.', '700 руб', 'Паста Дель маре.jpg'),
('Пицца', 'Пепперони', 'Острая разновидность салями итало-американского происхождения, приготовленная из вяленого мяса и приправленная паприкой или разновидностями перца чили, а также название пиццы американского происхождения.', '700 руб', 'Пепперони_big.jpg'),
('Пицца', 'Супермясная', 'Сливочная моцарелла, фирменный соус и оочень много мяса! Для тех, кто любит суперсытно поесть.', '550 руб', 'Супермясная.jpg'),
('Спагетти', 'Тальятелли 5 грибов', 'Паста с грибами — супер-классика итальянской кухни, блюдо, которое нравится всем своим вкусом и ароматом. Посмотрите, как приготовить тальятелле с грибами, просто «пальчики оближешь», вам понравится! ', '550 руб', 'Тальятелли 5 грибов.jpg'),
('Пицца', 'Фермерская', 'Оригинальная пицца с копченым картофелем, нежным беконом, маринованными огурцами, хрустящим луком и соусом тар-тар.', '390 руб', 'Фермерская.jpg'),
('Бургер', 'Хот бургер', 'Большой сэндвич, приготовленные в булочке с кунжутом, с большой котлетой из говядины, майонезом, острым соусом сальса, салатом айсберг, двумя ломтиками помидора, кусочком сыра чеддер и жгучим перцем халапеньо.', '400 руб', 'Хот_бургер.jpg'),
('Напитки ', 'Чай', 'Чай — напиток, получаемый варкой, завариванием и/или настаиванием листа чайного куста, который предварительно подготавливается специальным образом.', '150 руб', 'Чай.jpg'),
('Пицца', 'Четыре сыра', 'Пицца “Четыре сыра” относится к типу белых пицц («pizza Bianca»), т.е. в неё не кладётся традиционный для большинства пицц томатный соус и помидоры. Самое главное тут сыры, а точнее их сочетание. В этой пицце присутствуют четыре разных типа сыров: мягкий, твёрдый, ароматный (пряный) и голубой сыры. ', '470 руб', 'Четыре_сыра_big.jpg'),
('Бургер', 'Чизбургер', 'Это гамбургер с сыром. Традиционно ломтик сыра кладется поверх мясной котлеты. Сыр обычно добавляют в готовящийся гамбургер незадолго до подачи на стол, что позволяет сыру расплавиться.', '340 руб', 'Чизбургер.jpg'),
('Бургер', 'Чикенбургер', 'Чикенбургер — это нежнейшее сочетание котлеты из ароматной и нежной курицы со свежими листьями салата, нежным соусом, и все это тает во рту вместе с румяной булочкой. Чикенбургер вкусный, сочный, сытный, и по привлекательной цене — нет ни единого повода, чтобы отказаться от него.', '320 руб', 'Чикен-бургер.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `username` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `prize` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `qty` int NOT NULL,
  `total_price` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`username`, `name`, `prize`, `photo`, `qty`, `total_price`) VALUES
('lob', 'Барбекю', '520 руб', '../фото/Пиццы/Барбекю_big.jpg', 1, '520'),
('admin', 'Пепперони', '700 руб', '../фото/Пиццы/Пепперони_big.jpg', 1, '700');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pmode` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `products` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `amount_paid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(28, 'admin', 'igor.zelenov.1998@mail.ru', '+79117876634', 'Строителей 7', 'Наличные', 'Арабьята с пепперони(1), Паста Дель маре(1), Тальятелли 5 грибов(1)', '1740'),
(29, 'admin', 'igor.zelenov.1998@mail.ru', '+79117876634', 'Строителей 7', 'Банковской картой', 'Барбекю(1), Супермясная(1), Фермерская(1)', '1460'),
(30, 'admin', 'igor.zelenov.1998@mail.ru', '+79117876634', '', 'Наличные', 'Тальятелли 5 грибов(1), Барбекю(1)', '1070'),
(31, 'admin', 'igor.zelenov.1998@mail.ru', '+79117876634', 'Строителей 7', 'Банковской картой', 'Барбекю(1)', '520'),
(32, 'lob', 'igor.zelenov.1998@mail.ru', '+79117876634', 'Строителей 7', 'Наличные', 'Барбекю(1), Фермерская(1), Маргарита (1)', '1310'),
(45, 'admin', 'igor.zelenov.1998@mail.ru', '+79117876634', 'Строителей 7', 'Банковской картой', 'Барбекю(1), Пепперони(1)', '1220');

-- --------------------------------------------------------

--
-- Структура таблицы `otziv`
--

CREATE TABLE `otziv` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `text` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mark` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `otziv`
--

INSERT INTO `otziv` (`id`, `login`, `text`, `mark`) VALUES
(9, 'login4', 'Хорошое место', 5),
(10, 'lob', 'Круто', 4),
(12, 'rat', 'Не плохо', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `staff`
--

CREATE TABLE `staff` (
  `photo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `age` int NOT NULL,
  `work` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `staff`
--

INSERT INTO `staff` (`photo`, `name`, `age`, `work`) VALUES
('Вадим Булков.jpg', 'Вадим Булков', 27, 'Официант '),
('Валерий Краснов.jpg', 'Валерий Краснов', 24, 'Официант '),
('Иван Белый.jpg', 'Иван Белый', 31, 'Менеджер'),
('Коля Володской.jpg', 'Коля Володской', 34, 'Официант '),
('Петр Троцкий.jpg', 'Петр Троцкий', 40, 'Менеджер');

-- --------------------------------------------------------

--
-- Структура таблицы `tip_bluda`
--

CREATE TABLE `tip_bluda` (
  `tip_bluda` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `opisanie` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `tip_bluda`
--

INSERT INTO `tip_bluda` (`tip_bluda`, `opisanie`) VALUES
('Бургер', 'Бургер – это сэндвич, состоящий из разрезанной булки, внутрь которой кладут рубленую жареную котлету, кетчуп, майонез, листья салата, маринованный огурец, сырой или жареный лук, помидор, сыр.\r\nБургер, рецепт которого относят к американской кухне, завоевал популярность во всем мире из-за простоты приготовления. Его относят к разряду фаст фуда.'),
('Напитки ', 'Напиток (или напиток) - это жидкость, предназначенная для употребления человеком. Помимо своей основной функции утоления жажды, напитки играют важную роль в человеческой культуре. Распространенные виды напитков включают обычную питьевую воду, молоко, сок, коктейли и безалкогольные напитки.'),
('Пицца', 'Традиционное итальянское блюдо в виде круглой дрожжевой лепёшки, выпекаемой с уложенной сверху начинкой из томатного соуса, сыра и зачастую других ингредиентов, таких как мясо, овощи, грибы и других продуктов.'),
('Спагетти', 'Итальянское название длинной прямой вермишели, нитевидных макаронных изделий длиной до 50—75 см и диаметром около 2 мм.\r\nРодиной спагетти является Италия и их широко используют в итальянской кухне, часто подают с томатным соусом. ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(50) CHARACTER SET utf8mb3 NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8mb3 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES
(32, 'admin', '1234', 'admin'),
(37, 'admin1234', '1234', 'admin'),
(31, 'lob', '1234', 'log'),
(26, 'login1', '12345', 'paren'),
(27, 'login2', '12345', 'paer'),
(28, 'login33', '4321', 'igorek'),
(25, 'login4', '1234', 'log'),
(29, 'login55', '12345', 'parenec'),
(30, 'paren18', '1234', 'peter'),
(33, 'rat', '1234', 'ratik'),
(35, 'toha', '122', 'toha');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bluda`
--
ALTER TABLE `bluda`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `tip_bluda` (`tip_bluda`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD KEY `username` (`username`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `otziv`
--
ALTER TABLE `otziv`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `login` (`login`);

--
-- Индексы таблицы `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`photo`);

--
-- Индексы таблицы `tip_bluda`
--
ALTER TABLE `tip_bluda`
  ADD PRIMARY KEY (`tip_bluda`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `otziv`
--
ALTER TABLE `otziv`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bluda`
--
ALTER TABLE `bluda`
  ADD CONSTRAINT `bluda_ibfk_1` FOREIGN KEY (`tip_bluda`) REFERENCES `tip_bluda` (`tip_bluda`);

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`login`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `otziv`
--
ALTER TABLE `otziv`
  ADD CONSTRAINT `otziv_ibfk_1` FOREIGN KEY (`login`) REFERENCES `users` (`login`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
