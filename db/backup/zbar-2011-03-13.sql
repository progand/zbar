-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 13 2011 г., 09:32
-- Версия сервера: 5.1.41
-- Версия PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `zbaranskyi`
--

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `path` varchar(50) NOT NULL DEFAULT '',
  `smalldir` varchar(20) NOT NULL DEFAULT 'small/',
  `mediumdir` varchar(20) NOT NULL DEFAULT 'medium/',
  `bigdir` varchar(20) NOT NULL DEFAULT 'big/',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `path`, `smalldir`, `mediumdir`, `bigdir`) VALUES
(1, 'Етюд', 'Етюд/', 'small/', 'medium/', 'big/'),
(2, 'Копії', 'Копії/', 'small/', 'medium/', 'big/'),
(3, 'Морський пейзаж', 'Морський пейзаж/', 'small/', 'medium/', 'big/'),
(4, 'Пейзаж', 'Пейзаж/', 'small/', 'medium/', 'big/'),
(5, 'Портрети', 'Портрети/', 'small/', 'medium/', 'big/');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `year` int(4) unsigned DEFAULT NULL,
  `width` int(10) unsigned DEFAULT NULL,
  `height` int(10) unsigned DEFAULT NULL,
  `filename` varchar(60) NOT NULL,
  `gallery` int(10) unsigned NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_images_1` (`gallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `year`, `width`, `height`, `filename`, `gallery`, `description`) VALUES
(16, 'Етюд', 2008, 30, 24, 'Етюд24,5х30,52008р.jpg', 1, ' '),
(17, 'Етюд', 2004, 26, 24, 'Етюд24х262004.jpg', 1, ' '),
(18, 'Етюд', 2005, 36, 24, 'Етюд24х362005.jpg', 1, ' '),
(19, 'Етюд', 2007, 36, 24, 'Етюд 24х36 2007.jpg', 1, NULL),
(20, 'Етюд', 2003, 24, 36, 'Етюд 24х36  2003.jpg', 1, NULL),
(21, 'Етюд', 2007, 36, 24, 'Етюд 24х36  2007.jpg', 1, NULL),
(22, 'Етюд', 2008, 36, 24, 'Етюд 24х36  2008.jpg', 1, NULL),
(23, 'Етюд', 2010, 40, 30, 'Етюд 30х40 2010.jpg', 1, NULL),
(24, 'Етюд "Квіти"', 2009, 35, 27, 'Етюд Квіти 27х35 2009.jpg', 1, NULL),
(25, 'Етюд "Флокси"', 2010, 60, 50, 'Етюд флокси 50х60 2010.jpg', 1, NULL),
(26, 'Копія', 2010, 50, 40, 'Копія 40х50 2010.jpg', 2, NULL),
(27, 'Копія В.Перов "Мисливці"', 2007, 118, 70, 'Копія В.Перов Мисливці 70х118 2007.jpg', 2, NULL),
(28, 'Копія В.Щербаков', 2008, 55, 42, 'Копія В.Щербаков 42х55 2008.jpg', 2, NULL),
(29, 'Копія І.Шишкін "Жито"', 2008, 85, 49, 'Копія І.Шишкін Жито 49х85 2008.jpg', 2, NULL),
(30, 'Копія Р.Судковський', 2009, 46, 28, 'Копія Р.Судковський 28х46 2009.jpg', 2, NULL),
(31, 'Морський пейзаж', 2010, 50, 40, 'Морський пейзаж 40х50  2010.jpg', 2, NULL),
(32, 'Морський пейзаж', 2002, 60, 42, 'Морський пейзаж 41,5х59,5 2002.jpg', 2, NULL),
(33, 'Морський пейзаж', 2004, 60, 42, 'Морський пейзаж 42х60 2004.jpg', 2, NULL),
(34, 'Морський пейзаж', 2008, 60, 42, 'Морський пейзаж 42х60 2008.jpg', 2, NULL),
(35, 'Морський пейзаж', 2008, 70, 60, 'Морський пейзаж 60х70 2008.jpg', 2, NULL),
(36, 'Пейзаж', 2004, 70, 50, 'Пейзаж 50х70 2004.jpg', 2, NULL),
(37, 'Морський пейзаж', 2009, 63, 38, 'Морський пейзаж 38х63 2009.jpg', 3, NULL),
(38, 'Морський пейзаж', 2002, 41, 51, 'Морський пейзаж 41х51 2002.jpg', 3, NULL),
(39, 'Морський пейзаж', 2001, 60, 42, 'Морський пейзаж 42х60 2001.jpg', 3, NULL),
(40, 'Морський пейзаж', 2001, 55, 43, 'Морський пейзаж 43х55 2001.jpg', 3, NULL),
(41, 'Морський пейзаж', 2004, 55, 45, 'Морський пейзаж 45х55 2004.jpg', 3, NULL),
(42, 'Морський пейзаж', 2001, 46, 67, 'Морський пейзаж 46х67 2001.jpg', 3, NULL),
(43, 'Морський пейзаж', 2002, 69, 50, 'Морський пейзаж 49,5х69 2002.jpg', 3, NULL),
(44, 'Морський пейзаж', 2002, 70, 50, 'Морський пейзаж 49,8х69,8 2002.jpg', 3, NULL),
(45, 'Морський пейзаж', 2007, 69, 49, 'Морський пейзаж 49х69 2007.jpg', 3, NULL),
(46, 'Морський пейзаж', 2004, 64, 50, 'Морський пейзаж 50х64 2004.jpg', 3, NULL),
(47, 'Морський пейзаж', 2004, 65, 50, 'Морський пейзаж 50х65 2004.jpg', 3, NULL),
(48, 'Морський пейзаж', 2002, 70, 50, 'Морський пейзаж 50х70 2002.jpg', 3, NULL),
(49, 'Морський пейзаж', 2003, 70, 50, 'Морський пейзаж 50х70 2003.jpg', 3, NULL),
(50, 'Морський пейзаж', 2009, 70, 50, 'Морський пейзаж 50х70 2009.jpg', 3, NULL),
(51, 'Морський пейзаж', 2008, 75, 50, 'Морський пейзаж 50х75 2008.jpg', 3, NULL),
(52, 'Морський пейзаж', 2010, 65, 52, 'Морський пейзаж 52х65 2010.jpg', 3, NULL),
(53, 'Морський пейзаж', 2004, 43, 67, 'Морський пейзаж 67х43 2004.jpg', 3, NULL),
(54, 'Пейзаж', NULL, NULL, NULL, 'P1010420.jpg', 4, NULL),
(55, 'Пейзаж', NULL, NULL, NULL, 'P1010435.jpg', 4, NULL),
(56, 'Пейзаж', NULL, NULL, NULL, 'P3080053.jpg', 4, NULL),
(57, 'Пейзаж', NULL, NULL, NULL, 'P3230210.jpg', 4, NULL),
(58, 'Пейзаж', NULL, NULL, NULL, 'P6110857.jpg', 4, NULL),
(59, 'Пейзаж', NULL, NULL, NULL, 'P6110864.jpg', 4, NULL),
(60, 'Пейзаж', 2004, 68, 46, 'Пейзаж 46х68 2004.jpg', 4, NULL),
(61, 'Портрет', NULL, NULL, NULL, 'P1010390.jpg', 5, NULL),
(62, 'Портрет', 2002, 40, 50, 'Портер 40х50 2002.jpg', 5, NULL),
(63, 'Портрет', 2004, 28, 42, 'Портрет 42х28 2004.jpg', 5, NULL),
(64, 'Портрет дівчинки ', NULL, NULL, NULL, 'Портрет дівчинки .jpg', 5, NULL),
(65, 'Портрет друга', 2009, 43, 54, 'Портрет друга 43х54 2009.jpg', 5, NULL),
(66, 'Портрет П.Іванова', 2008, 97, 142, 'Портрет П.Іванова 142х97 2008.jpg', 5, NULL),
(67, 'Портрет П.Орлика', 2010, 49, 63, 'Портрет П.Орлика 63х49 2010..jpg', 5, NULL),
(68, 'Портрет проф.Дудченка', 2009, 42, 58, 'Портрет проф.Дудченка М.А. 42х58 2009.jpg', 5, NULL),
(69, 'Портрет хлопчика ', NULL, NULL, NULL, 'Портрет хлопчика .jpg', 5, NULL),
(70, 'Портрет Шевченко Т.Г.', 2004, 49, 63, 'Портрет Шевченко Т.Г.63х49 2004.jpg', 5, NULL),
(71, 'Прадід', NULL, NULL, NULL, 'Прадід.jpg', 5, NULL),
(72, 'Морський пейзаж', NULL, NULL, NULL, 'P1010429.jpg', 3, NULL),
(73, 'Морський пейзаж', NULL, NULL, NULL, 'P6110848.jpg', 3, NULL),
(74, 'Морський пейзаж', NULL, NULL, NULL, 'P6110853.jpg', 3, NULL),
(75, 'Копія', NULL, NULL, NULL, 'P2210120.jpg', 2, NULL);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_images_1` FOREIGN KEY (`gallery`) REFERENCES `galleries` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
