-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 16 2024 г., 15:22
-- Версия сервера: 10.1.48-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `skudciyh_m4`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Booking`
--

CREATE TABLE `Booking` (
  `id_book` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_user_book` int(11) NOT NULL,
  `id_building_book` int(11) NOT NULL,
  `region_book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Booking`
--

INSERT INTO `Booking` (`id_book`, `name`, `e-mail`, `id_status`, `id_user_book`, `id_building_book`, `region_book`) VALUES
(69, 'Уважаемый', 'e@gmail.com', 2, 14, 8, 7),
(71, 'Уважаемый', 'e@gmail.com', 2, 14, 8, 14),
(75, 'Уважаемый', 'e@gmail.com', 2, 14, 15, 2),
(79, 'Уважаемый', 'e@gmail.com', 2, 14, 18, 3),
(80, 'Лариса Людмиловна', 'wee@gmail.com', 1, 19, 19, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `Building`
--

CREATE TABLE `Building` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(30) NOT NULL,
  `description` text NOT NULL,
  `material` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `image` text NOT NULL,
  `square` decimal(10,2) DEFAULT NULL,
  `room` int(11) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Building`
--

INSERT INTO `Building` (`id`, `name`, `price`, `description`, `material`, `category`, `image`, `square`, `room`, `floor`, `added`) VALUES
(0, 'Чаллад', 8000000, 'Чаллад – это не просто дом, а место, где архитектура танцует с природой, создавая гармонию между землей и небом.  Его  конструкция, вдохновленная скалистыми утесами и струящимися облаками,  притягивает взгляд и  завораживает  своей уникальностью', 2, 2, 'image/product/img2.jpg', '230.00', 1, 1, '2023-04-12'),
(1, 'Копперхан', 6780800, 'Копперхан – это не просто дом, а целый мир, воплощающий в себе очарование старины и удобство современной жизни', 2, 3, 'image/product/img16.jpeg', '240.30', 1, 2, '2015-01-31'),
(2, 'Золотой берег', 8070000, '\"Золотой Берег\" - идеальное место для тех, кто ценит роскошь, комфорт и близость к природе.', 3, 3, 'image/product/img15.jpg', '560.70', 1, 2, '2017-03-01'),
(3, 'Пруга', 4500000, 'Дом Пруга – это не просто жилье, это дверь в мир, где обыденность уступает место волшебству. Его стены, словно полотна художника, покрыты яркими полосами, которые меняют цвет в зависимости от времени суток и настроения обитателей.', 3, 1, 'image/product/img3.jpg', '230.50', 3, 2, '2024-01-03'),
(4, 'Гвинея', 10000000, 'Двери из выжженного дерева, покрытого замысловатым орнаментом, напоминающим древо жизни, распахиваются, приветствуя гостей, а внутри их встречает аромат земли, смешанный с запахом древесины и трав. Воздух в Гвинее наполнен энергией, а каждая деталь дома рассказывает историю, сплетённую из тайн и легенд.', 3, 3, 'image/product/img4.jpeg', '340.80', 4, 3, '2019-04-05'),
(5, 'Рамлер', 15700000, 'В нем живет дух прошлого, но Рамлер не застыл в нем. Он открыт всему новому, готов принять гостей и подарить им частичку своего тепла. ', 2, 5, 'image/product/img5.jpg', '210.00', 1, 2, '2023-08-09'),
(8, 'Флайзер', 7000000, 'Флайзер - это не дом, это убежище, где время течет иначе, где вы можете стать частью чего-то большего, чем просто ваш собственный мир.', 1, 4, 'image/product/img7.jpg', '430.30', 2, 1, '2024-01-10'),
(9, 'Куппи', 9005000, 'Стены Куппи, словно сшитые из лунного света,  пропускают сквозь себя нежные оттенки рассвета и заката. Деревянный пол,  отполированный тысячами касаний времени, хранит истории  невидимых  глазу  призраков,  которые танцевали  на нем  под  звуки  древних мелодий.', 3, 4, 'image/product/img8.jpeg', '86.90', 3, 3, '2014-01-03'),
(10, 'Водосток', 6700000, 'Время в Водостоке движется иначе. Оно течет медленно, словно капли воды в ручье, даря спокойствие и умиротворение. Здесь можно услышать шепот ветра в листьях, шум дождя по крыше и тихий плеск ручья, протекающего неподалеку. ', 1, 1, 'image/product/img9.jpg', '55.20', 4, 3, '2017-09-15'),
(11, 'Изумрудные равнины', 8900800, 'Изумрудные Равнины - это не просто дом, это оазис спокойствия, где роскошь гармонично переплетается с природной красотой. Расположенный на краю живописного леса, дом обладает панорамным видом на ухоженные лужайки, окаймленные изумрудной зеленью, от которой и получил свое имя. ', 2, 1, 'image/product/img10.jpg', '230.50', 1, 2, '2023-04-05'),
(14, 'Веренс', 8900100, 'Огромные окна, словно глаза, смотрящие на мир, заполнены светом, танцующим в лучах восхода и заката. Камин - сердце дома, где треск поленьев рассказывает сказки о старых временах. ', 3, 2, 'image/product/img10.jpg', '510.40', 2, 2, '2019-05-09'),
(15, 'Гармошка', 1005000, '\"Гармошка\" - не дом, а мечта.  Кажется, что он построен из самого воздуха, его фасады то сжимаются, то расширяются, словно  струны старинного инструмента,  отвечая на настроение ветра. Окна, будто  тонкие  клапаны, то приоткрываются, то закрываются,  впуская  внутрь  струи света,  как  дыхание  живой  сущности. ', 1, 2, 'image/product/img11.jpeg', '230.00', 3, 2, '2024-01-01'),
(16, 'Балалайка', 1890000, 'Дом под названием \"Балалайка\" стоит между деревьев, будто спрятанный от лишних глаз. Двухэтажный, он был выстроен из светлого, почти белого, камня, который на солнце отливал перламутровым блеском. Крыша, покрытая медно-красной черепицей, немного напоминала  форму традиционной балалайки, откуда и название. ', 1, 4, 'image/product/img12.jpeg', '440.00', 4, 2, '2020-11-18'),
(17, 'Судан', 9000000, 'Высокая крыша, увенчанная изящным дымоходом, была покрыта черепицей, которая словно шептала о веках, прошедших с момента его возведения. Деревянная входная дверь, украшенная коваными петлями и ручкой, вела в просторный холл с высокими потолками, выкрашенными в мягкий кремовый цвет. ', 2, 4, 'image/product/img13.jpg', '520.00', 1, 2, '2024-01-12'),
(19, 'Берест', 780000, 'Двухэтажный дом \"Берест\"  возвышается на небольшом, но ухоженном участке, окружённом со всех сторон  пышным садом.  Фасад,  выполненный из  светлого кирпича,  украшен  элементами из натурального дерева, придавая  дому  атмосферу  тепла и уюта.  Высокие  окна  с  широкими подоконниками  заливают  интерьер естественным  светом.  На крыше  дома  расположены  два  небольших  мансардных окна,  добавляющие  необычный  акцент в  архитектуру.\n', 1, 4, 'image/product/img3.jpg', '230.00', 1, 1, '0000-00-00'),
(40, 'Дружина', 12300000, 'Войдя в  дом,  вы оказываетесь  в просторном  холле с  высокими потолками.  Пол  выложен  деревянной  доской  тёмного  оттенка,  что  придает  комнате  атмосферу  домашнего  уютa.  С  правой  стороны  расположена  широкая  лестница,  ведущая  на  второй этаж. ', 1, 1, 'image/product/img-69085.jpg', '102.00', 2, 1, '2024-06-08'),
(41, 'Берег', 450000, 'В \"Береге\" чувствовалась особая атмосфера – ощущение свободы, единения с природой и бесконечности. Он был словно остров, спрятанный от мира, но открытый для тех, кто искал умиротворение и вдохновение.', 2, 2, 'image/product/img-6908123111111115.jpg', '123.00', 2, 1, '2024-06-08');

-- --------------------------------------------------------

--
-- Структура таблицы `Category`
--

CREATE TABLE `Category` (
  `id` int(11) NOT NULL,
  `name_category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Category`
--

INSERT INTO `Category` (`id`, `name_category`) VALUES
(1, 'коттедж'),
(2, 'вилла'),
(3, 'особняк'),
(4, 'усадьба'),
(5, 'таунхаус');

-- --------------------------------------------------------

--
-- Структура таблицы `Consultation`
--

CREATE TABLE `Consultation` (
  `id_con` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `e-mail` varchar(45) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '1',
  `user` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `Favourite`
--

CREATE TABLE `Favourite` (
  `id_fav` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_like_building` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Favourite`
--

INSERT INTO `Favourite` (`id_fav`, `id_user`, `id_like_building`) VALUES
(8, 14, 17),
(11, 15, 17),
(12, 15, 15),
(14, 24, 3),
(15, 14, 0),
(16, 1, 15),
(17, 14, 5),
(18, 14, 10),
(19, 19, 5),
(20, 14, 14);

-- --------------------------------------------------------

--
-- Структура таблицы `Floor`
--

CREATE TABLE `Floor` (
  `id_f` int(11) NOT NULL,
  `name_floor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Floor`
--

INSERT INTO `Floor` (`id_f`, `name_floor`) VALUES
(1, 'одноэтажное'),
(2, 'двухэтажное'),
(3, 'трехэтажное');

-- --------------------------------------------------------

--
-- Структура таблицы `Material`
--

CREATE TABLE `Material` (
  `id_m` int(11) NOT NULL,
  `name_material` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Material`
--

INSERT INTO `Material` (`id_m`, `name_material`) VALUES
(1, 'кирпич'),
(2, 'блоки'),
(3, 'дерево');

-- --------------------------------------------------------

--
-- Структура таблицы `Region`
--

CREATE TABLE `Region` (
  `id_region` int(11) NOT NULL,
  `id_booking_region` int(11) DEFAULT NULL,
  `build_region` int(11) DEFAULT NULL,
  `user_region` int(11) DEFAULT NULL,
  `status_pay_region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Region`
--

INSERT INTO `Region` (`id_region`, `id_booking_region`, `build_region`, `user_region`, `status_pay_region`) VALUES
(1, NULL, NULL, NULL, 0),
(2, 75, 15, 14, 1),
(3, 79, 18, 14, 1),
(4, NULL, NULL, NULL, 0),
(5, NULL, NULL, NULL, 0),
(6, NULL, NULL, NULL, 0),
(7, 69, 8, 14, 2),
(8, NULL, NULL, NULL, 0),
(9, NULL, NULL, NULL, 0),
(10, NULL, NULL, NULL, 0),
(11, NULL, NULL, NULL, 0),
(12, NULL, NULL, NULL, 0),
(13, NULL, NULL, NULL, 0),
(14, 71, 8, 14, 2),
(15, NULL, NULL, NULL, 0),
(16, NULL, NULL, NULL, 0),
(17, NULL, NULL, NULL, 0),
(18, NULL, NULL, NULL, 0),
(19, NULL, NULL, NULL, 0),
(20, NULL, NULL, NULL, 0),
(21, NULL, NULL, NULL, 0),
(22, NULL, NULL, NULL, 0),
(23, NULL, NULL, NULL, 0),
(24, NULL, NULL, NULL, 0),
(25, NULL, NULL, NULL, 0),
(26, NULL, NULL, NULL, 0),
(27, NULL, NULL, NULL, 0),
(28, NULL, NULL, NULL, 0),
(29, NULL, NULL, NULL, 0),
(30, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `Region_like`
--

CREATE TABLE `Region_like` (
  `id_like_region` int(11) NOT NULL,
  `id_user_like_region` int(11) NOT NULL,
  `id_region_like_region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Region_like`
--

INSERT INTO `Region_like` (`id_like_region`, `id_user_like_region`, `id_region_like_region`) VALUES
(6, 24, 7),
(7, 14, 3),
(8, 19, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `Role`
--

CREATE TABLE `Role` (
  `id` int(11) NOT NULL,
  `role` varchar(45) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Role`
--

INSERT INTO `Role` (`id`, `role`) VALUES
(0, 'пользователь'),
(1, 'администатор');

-- --------------------------------------------------------

--
-- Структура таблицы `Room`
--

CREATE TABLE `Room` (
  `id_r` int(11) NOT NULL,
  `name_room` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Room`
--

INSERT INTO `Room` (`id_r`, `name_room`) VALUES
(1, 'однокомнатное'),
(2, 'двухкомнатное'),
(3, 'трехкомнатное'),
(4, 'четырехкомнатное');

-- --------------------------------------------------------

--
-- Структура таблицы `Status`
--

CREATE TABLE `Status` (
  `id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Status`
--

INSERT INTO `Status` (`id`, `status`) VALUES
(1, 'На рассмотрении'),
(2, 'Одобрено'),
(3, 'Отклонено');

-- --------------------------------------------------------

--
-- Структура таблицы `Status_pay`
--

CREATE TABLE `Status_pay` (
  `id_region_status` int(11) NOT NULL,
  `name_region_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Status_pay`
--

INSERT INTO `Status_pay` (`id_region_status`, `name_region_status`) VALUES
(0, 'В продаже'),
(1, 'Забронирован'),
(2, 'Продан');

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `image` varchar(120) NOT NULL DEFAULT 'image/user_pas.png',
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `User`
--

INSERT INTO `User` (`id`, `name`, `email`, `password`, `image`, `role`) VALUES
(1, 'Купцов Олег', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'image/user_pas.png', 1),
(14, 'Уважаемый', 'e@gmail.com', '202cb962ac59075b964b07152d234b70', 'image/client/sochi_2014.jpg', 0),
(15, 'Олег Вещий', 'q@gmail.com', '202cb962ac59075b964b07152d234b70', 'image/user_pas.png', 0),
(19, 'Лариса Людмиловна', 'wee@gmail.com', '202cb962ac59075b964b07152d234b70', 'image/user_pas.png', 0),
(24, 'Николай Степаныч', 'proverka@gmail.com', '202cb962ac59075b964b07152d234b70', 'image/user_pas.png', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_user_book` (`id_user_book`),
  ADD KEY `id_building_book` (`id_building_book`),
  ADD KEY `region_book` (`region_book`);

--
-- Индексы таблицы `Building`
--
ALTER TABLE `Building`
  ADD PRIMARY KEY (`id`),
  ADD KEY `material` (`material`,`category`,`room`,`floor`),
  ADD KEY `category` (`category`),
  ADD KEY `floor` (`floor`),
  ADD KEY `room` (`room`);

--
-- Индексы таблицы `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Consultation`
--
ALTER TABLE `Consultation`
  ADD PRIMARY KEY (`id_con`),
  ADD KEY `status` (`id_status`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `Favourite`
--
ALTER TABLE `Favourite`
  ADD PRIMARY KEY (`id_fav`),
  ADD KEY `id_like_building` (`id_like_building`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `Floor`
--
ALTER TABLE `Floor`
  ADD PRIMARY KEY (`id_f`);

--
-- Индексы таблицы `Material`
--
ALTER TABLE `Material`
  ADD PRIMARY KEY (`id_m`);

--
-- Индексы таблицы `Region`
--
ALTER TABLE `Region`
  ADD PRIMARY KEY (`id_region`),
  ADD KEY `id_booking_region` (`id_booking_region`),
  ADD KEY `status_pay_region` (`status_pay_region`);

--
-- Индексы таблицы `Region_like`
--
ALTER TABLE `Region_like`
  ADD PRIMARY KEY (`id_like_region`),
  ADD KEY `id_region_like_region` (`id_region_like_region`),
  ADD KEY `id_user_like_region` (`id_user_like_region`);

--
-- Индексы таблицы `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`id_r`);

--
-- Индексы таблицы `Status`
--
ALTER TABLE `Status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Status_pay`
--
ALTER TABLE `Status_pay`
  ADD PRIMARY KEY (`id_region_status`);

--
-- Индексы таблицы `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Booking`
--
ALTER TABLE `Booking`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT для таблицы `Building`
--
ALTER TABLE `Building`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `Consultation`
--
ALTER TABLE `Consultation`
  MODIFY `id_con` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Favourite`
--
ALTER TABLE `Favourite`
  MODIFY `id_fav` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `Region`
--
ALTER TABLE `Region`
  MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `Region_like`
--
ALTER TABLE `Region_like`
  MODIFY `id_like_region` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `Status_pay`
--
ALTER TABLE `Status_pay`
  MODIFY `id_region_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Booking`
--
ALTER TABLE `Booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `Status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_5` FOREIGN KEY (`id_building_book`) REFERENCES `Favourite` (`id_fav`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_6` FOREIGN KEY (`id_user_book`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Building`
--
ALTER TABLE `Building`
  ADD CONSTRAINT `building_ibfk_1` FOREIGN KEY (`category`) REFERENCES `Category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `building_ibfk_2` FOREIGN KEY (`floor`) REFERENCES `Floor` (`id_f`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `building_ibfk_3` FOREIGN KEY (`room`) REFERENCES `Room` (`id_r`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `building_ibfk_4` FOREIGN KEY (`material`) REFERENCES `Material` (`id_m`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Consultation`
--
ALTER TABLE `Consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `Status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consultation_ibfk_2` FOREIGN KEY (`user`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Favourite`
--
ALTER TABLE `Favourite`
  ADD CONSTRAINT `favourite_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favourite_ibfk_3` FOREIGN KEY (`id_like_building`) REFERENCES `Building` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Region`
--
ALTER TABLE `Region`
  ADD CONSTRAINT `region_ibfk_1` FOREIGN KEY (`status_pay_region`) REFERENCES `Status_pay` (`id_region_status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `region_ibfk_2` FOREIGN KEY (`id_booking_region`) REFERENCES `Booking` (`id_book`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Region_like`
--
ALTER TABLE `Region_like`
  ADD CONSTRAINT `region_like_ibfk_1` FOREIGN KEY (`id_user_like_region`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `region_like_ibfk_2` FOREIGN KEY (`id_region_like_region`) REFERENCES `Region` (`id_region`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `Role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
