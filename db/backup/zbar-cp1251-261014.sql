-- phpMyAdmin SQL Dump
-- version 4.2.10.1
-- http://www.phpmyadmin.net
--
-- Хост: db1.ho.ua
-- Час створення: Жов 26 2014 р., 14:31
-- Версія сервера: 5.5.40-log
-- Версія PHP: 5.5.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `zbar`
--

-- --------------------------------------------------------

--
-- Структура таблиці `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `path` varchar(50) NOT NULL DEFAULT '',
  `smalldir` varchar(20) NOT NULL DEFAULT 'small/',
  `mediumdir` varchar(20) NOT NULL DEFAULT 'medium/',
  `bigdir` varchar(20) NOT NULL DEFAULT 'big/'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=cp1251;

--
-- Дамп даних таблиці `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `path`, `smalldir`, `mediumdir`, `bigdir`) VALUES
(1, 'Етюд', 'etud/', 'small/', 'medium/', 'big/'),
(2, 'Копія', 'copy/', 'small/', 'medium/', 'big/'),
(3, 'Морський пейзаж', 'sea/', 'small/', 'medium/', 'big/'),
(4, 'Пейзаж', 'nature/', 'small/', 'medium/', 'big/'),
(5, 'Портрет', 'portrait/', 'small/', 'medium/', 'big/');

-- --------------------------------------------------------

--
-- Структура таблиці `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `year` int(4) unsigned DEFAULT NULL,
  `width` int(10) unsigned DEFAULT NULL,
  `height` int(10) unsigned DEFAULT NULL,
  `filename` varchar(60) NOT NULL,
  `gallery` int(10) unsigned NOT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=cp1251;

--
-- Дамп даних таблиці `images`
--

INSERT INTO `images` (`id`, `name`, `year`, `width`, `height`, `filename`, `gallery`, `description`) VALUES
(16, 'Етюд', 2008, 30, 24, 'etud24,5х30,52008.jpg', 1, ' '),
(17, 'Етюд', 2004, 26, 24, 'etud24х262004.jpg', 1, ' '),
(18, 'Етюд', 2005, 36, 24, 'etud24х362005.jpg', 1, ' '),
(19, 'Етюд', 2007, 36, 24, 'etud24х36_2007.jpg', 1, NULL),
(20, 'Етюд', 2003, 24, 36, 'etud24х36_2003.jpg', 1, NULL),
(21, 'Етюд', 2007, 36, 24, 'etud24х36-2007.jpg', 1, NULL),
(22, 'Етюд', 2008, 36, 24, 'etud24х36_2008.jpg', 1, NULL),
(23, 'Етюд', 2010, 40, 30, 'etud30х40_2010.jpg', 1, NULL),
(24, 'Етюд "Квіти"', 2009, 35, 27, 'etud_flowers27х35_2009.jpg', 1, NULL),
(25, 'Етюд "Флокси"', 2010, 60, 50, 'etud_floksa50х60_2010.jpg', 1, NULL),
(26, 'Копія', 2010, 50, 40, 'copy40х502010.jpg', 2, NULL),
(27, 'Копія В.Перов "Мисливці"', 2007, 118, 70, 'petrov_hunters70х118 2007.jpg', 2, NULL),
(28, 'Копія В.Щербаков', 2008, 55, 42, 'VScherbakov42х55 2008.jpg', 2, NULL),
(29, 'Копія І.Шишкін "Жито"', 2008, 85, 49, 'Shishkin_zhito49х85 2008.jpg', 2, NULL),
(30, 'Копія Р.Судковський', 2009, 46, 28, 'RSydkovsky28х46 2009.jpg', 2, NULL),
(31, 'Морський пейзаж', 2010, 50, 40, 'sea40х50_2010.jpg', 2, NULL),
(32, 'Морський пейзаж', 2002, 60, 42, 'sea41,5х59,5_2002.jpg', 2, NULL),
(33, 'Морський пейзаж', 2004, 60, 42, 'sea42х60_2004.jpg', 2, NULL),
(34, 'Морський пейзаж', 2008, 60, 42, 'sea42х60_2008.jpg', 2, NULL),
(35, 'Морський пейзаж', 2008, 70, 60, 'sea60х70_2008.jpg', 2, NULL),
(36, 'Пейзаж', 2004, 70, 50, 'nature50х70_2004.jpg', 2, NULL),
(37, 'Морський пейзаж', 2009, 63, 38, 'sea38х63_2009.jpg', 3, NULL),
(38, 'Морський пейзаж', 2002, 41, 51, 'sea41х51_2002.jpg', 3, NULL),
(39, 'Морський пейзаж', 2001, 60, 42, 'sea42х60_2001.jpg', 3, NULL),
(40, 'Морський пейзаж', 2001, 55, 43, 'sea43х55_2001.jpg', 3, NULL),
(41, 'Морський пейзаж', 2004, 55, 45, 'sea45х55_2004.jpg', 3, NULL),
(42, 'Морський пейзаж', 2001, 46, 67, 'sea46х67_2001.jpg', 3, NULL),
(43, 'Морський пейзаж', 2002, 69, 50, 'sea49,5х69_2002.jpg', 3, NULL),
(44, 'Морський пейзаж', 2002, 70, 50, 'sea49,8х69,8_2002.jpg', 3, NULL),
(45, 'Морський пейзаж', 2007, 69, 49, 'sea49х69_2007.jpg', 3, NULL),
(46, 'Морський пейзаж', 2004, 64, 50, 'sea50х64_2004.jpg', 3, NULL),
(47, 'Морський пейзаж', 2004, 65, 50, 'sea50х65_2004.jpg', 3, NULL),
(48, 'Морський пейзаж', 2002, 70, 50, 'sea50х70_2002.jpg', 3, NULL),
(49, 'Морський пейзаж', 2003, 70, 50, 'sea50х70_2003.jpg', 3, NULL),
(50, 'Морський пейзаж', 2009, 70, 50, 'sea50х70_2009.jpg', 3, NULL),
(51, 'Морський пейзаж', 2008, 75, 50, 'sea50х75_2008.jpg', 3, NULL),
(52, 'Морський пейзаж', 2010, 65, 52, 'sea52х65_2010.jpg', 3, NULL),
(53, 'Морський пейзаж', 2004, 43, 67, 'sea67х43_2004.jpg', 3, NULL),
(54, 'Пейзаж', NULL, NULL, NULL, 'P1010420.jpg', 4, NULL),
(55, 'Пейзаж', NULL, NULL, NULL, 'P1010435.jpg', 4, NULL),
(56, 'Пейзаж', NULL, NULL, NULL, 'P3080053.jpg', 4, NULL),
(57, 'Пейзаж', NULL, NULL, NULL, 'P3230210.jpg', 4, NULL),
(58, 'Пейзаж', NULL, NULL, NULL, 'P6110857.jpg', 4, NULL),
(59, 'Пейзаж', NULL, NULL, NULL, 'P6110864.jpg', 4, NULL),
(60, 'Пейзаж', 2004, 68, 46, 'nature46х68_2004.jpg', 4, NULL),
(61, 'Портрет', NULL, NULL, NULL, 'P1010390.jpg', 5, NULL),
(62, 'Портрет', 2002, 40, 50, 'portrait40х50_2002.jpg', 5, NULL),
(63, 'Портрет', 2004, 28, 42, 'portrait42х28_2004.jpg', 5, NULL),
(64, 'Портрет дівчинки ', NULL, NULL, NULL, 'portrait_girl.jpg', 5, NULL),
(65, 'Портрет друга', 2009, 43, 54, 'portrait_friend43х54_2009.jpg', 5, NULL),
(66, 'Портрет П.Іванова', 2008, 97, 142, 'portrait_ivanov142х97_2008.jpg', 5, NULL),
(67, 'Портрет П.Орлика', 2010, 49, 63, 'portrait_orlyk63х49_2010.jpg', 5, NULL),
(68, 'Портрет проф.Дудченка', 2009, 42, 58, 'portrait_dudchenko42х58_2009.jpg', 5, NULL),
(69, 'Портрет хлопчика ', NULL, NULL, NULL, 'portrait_boy.jpg', 5, NULL),
(70, 'Портрет Шевченко Т.Г.', 2004, 49, 63, 'portrait_shevchenko63х49_2004.jpg', 5, NULL),
(71, 'Прадід', NULL, NULL, NULL, 'grandfather.jpg', 5, NULL),
(72, 'Морський пейзаж', NULL, NULL, NULL, 'P1010429.jpg', 3, NULL),
(73, 'Морський пейзаж', NULL, NULL, NULL, 'P6110848.jpg', 3, NULL),
(74, 'Морський пейзаж', NULL, NULL, NULL, 'P6110853.jpg', 3, NULL),
(75, 'Копія', NULL, NULL, NULL, 'P2210120.jpg', 2, NULL),
(76, 'Троянди', NULL, NULL, NULL, 'rozes.jpg', 1, NULL),
(77, 'Двоє', 2012, NULL, NULL, 'portrait001.jpg', 5, NULL),
(78, 'Дуби', 2012, NULL, NULL, 'copy_duby_65_100.jpg', 2, NULL),
(79, 'Пейзаж', 2012, NULL, NULL, 'nature_1905.JPG', 4, NULL),
(80, 'Козаки', 2012, NULL, NULL, 'cossaks.jpg', 4, NULL),
(81, 'Пейзаж', 2012, NULL, NULL, '1 001.jpg', 4, NULL),
(82, 'Буклет', 2014, NULL, NULL, 'etud_buket-261014.jpg', 1, NULL),
(83, 'Етюд', 2014, NULL, NULL, 'etud-261014-1.jpg', 1, ' '),
(84, 'Квіти', 2014, NULL, NULL, 'etud-kvity-261014.jpg', 1, ' '),
(85, 'Андрій Первозванний', 2014, NULL, NULL, 'anrdiy_pervozvannyi.jpg', 2, NULL),
(86, 'Чесменська битва. Айвазовський І.К.', 2014, NULL, NULL, 'ayvazovskiy_ik_chesmenska_bytva.jpg', 2, NULL),
(87, 'Ілля Муромець', 2014, NULL, NULL, 'illya_muromets.jpg', 2, NULL),
(88, 'Кіт і свічка', 2014, NULL, NULL, 'kit_i_svichka.jpg', 2, NULL),
(89, 'Натюрморт. Раймонд кемпбел', 2014, NULL, NULL, 'rjmond_kempbel_naturmort.jpg', 2, NULL),
(90, 'Козаки біля гірської річки. Рубо Франц', 2014, NULL, NULL, 'rubo_franz_kazaki_u_gornoq_rechki.jpg', 2, NULL),
(91, 'Віктор Дамаск', 2014, NULL, NULL, 'victor_damask.jpg', 2, NULL),
(96, 'Пейзаж', 2014, NULL, NULL, 'peyzaj-261014-2.jpg', 4, NULL),
(97, 'Пейзаж', 2014, NULL, NULL, 'peyzaj-261014-3.jpg', 4, NULL),
(98, 'Пейзаж', 2014, NULL, NULL, 'peyzaj-261014.jpg', 4, NULL),
(99, 'М.В. Лисенко', 2014, NULL, NULL, 'mv_lysenko.jpg', 5, NULL),
(100, 'Портрет', 2014, NULL, NULL, 'portrait-261011.jpg', 5, NULL),
(101, 'Товариш', 2014, NULL, NULL, 'tovarrysh.jpg', 5, NULL),
(102, 'Морський пейзаж', 2014, NULL, NULL, 'sea-261011-5.jpg', 3, NULL),
(103, 'Морський пейзаж', 2014, NULL, NULL, 'sea-261011-4.jpg', 3, NULL),
(104, 'Морський пейзаж', 2014, NULL, NULL, 'sea-261011-3.jpg', 3, NULL),
(105, 'Морський пейзаж', 2014, NULL, NULL, 'sea-261011-2.jpg', 3, NULL),
(106, 'Морський пейзаж', 2014, NULL, NULL, 'sea-261011-1.jpg', 3, NULL),
(107, 'Морський пейзаж', 2014, NULL, NULL, 'sea-261011.jpg', 3, NULL),
(108, 'Морський пейзаж', 2014, NULL, NULL, 'sea-261011-9.jpg', 3, NULL),
(109, 'Морський пейзаж', 2014, NULL, NULL, 'sea-261011-8.jpg', 3, NULL),
(110, 'Морський пейзаж', 2014, NULL, NULL, 'sea-261011-7.jpg', 3, NULL),
(111, 'Морський пейзаж', 2014, NULL, NULL, 'sea-261011-6.jpg', 3, NULL);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `galleries`
--
ALTER TABLE `galleries`
 ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`), ADD KEY `FK_images_1` (`gallery`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `galleries`
--
ALTER TABLE `galleries`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблиці `images`
--
ALTER TABLE `images`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `images`
--
ALTER TABLE `images`
ADD CONSTRAINT `FK_images_1` FOREIGN KEY (`gallery`) REFERENCES `galleries` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
