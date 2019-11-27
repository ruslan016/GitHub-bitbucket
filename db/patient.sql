-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 27 2019 г., 10:16
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `patient`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `email`, `type`, `token`, `status`, `firstName`, `lastName`, `password`) VALUES
(23, 'admin4775@gmail.com', 'type3', '3JD3l4^*4fF1KNg', 'confirmed', 'Ruslan', 'Bazilanski', 'ruslan016'),
(24, 'alf.adman@gmail.com', 'type2', 'hjhg3*4FFHUkFl2', 'confirmed', 'Ruslan', 'Bazilanski', 'ruslan016'),
(25, 'admin45@gmail.com', 'type1', 'dKfkFS#D)Jsghdl', 'confirmed', 'Vasiliy', 'Pupkin', '784kljlgh'),
(26, 'alf.adman@gmail.com', 'type2', '4NfUKsa3j4FFS3^', 'created', NULL, NULL, NULL),
(31, 'alf.adman@gmail.com', 'type2', 'KDK42jf24K)JNdS', 'created', NULL, NULL, NULL),
(32, 'admin47775@gmail.com', 'type2', 'KDShD(Fa#gJDDSs', 'confirmed', 'Ruslan', 'Bazilanski', '46879'),
(33, 'gaytbazilanski@gmail.com', 'type2', 's3lf#H*KgSas33S', 'confirmed', 'sdfsdfs', 'xcvxvxc', '$2y$10$hIy5wkOfP4AnXlfHAkYPTOmtNqi3A0y7yfvcxFoNN9WQfB54BZCN.'),
(34, 'testing@gmail.com', 'type2', '2ss25Kd4D3jkg3K', 'confirmed', 'xcvcxvxc', 'xcvxcv', '$2y$10$MnGOYnqSgbTpKvkohEnIc.3oS5X/EJA5qhRQ6lDrax2TmL7V5.1DS'),
(35, 'sdfsf@gmail.com', 'type2', 'D3sdNl4s2KLDFg3', 'confirmed', 'dfsfsd', 'sdfsdfsd', '$2y$10$If9yL//i32MXIXla3F5TZOrh2XL4DmCnmkWbjXb1x1yhA/0M2jLQu'),
(36, 'testing555@gmail.com', 'type3', 's3HhsD%sj4F3j34', 'confirmed', 'sdfsd', 'sdfs', '$2y$10$ekR.TCTiTA.clMms75p0seCbWmdpRJ8v5h9oyTkPnctt22E6l/NEO'),
(37, 'sdfdsfs@gmail.com', 'type2', 'dJ35DUl4ss^Kf(_', 'created', NULL, NULL, NULL),
(38, 'testing555777@gmail.com', 'type1', 'Fd*d2SD3^JDfsFj', 'created', NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
