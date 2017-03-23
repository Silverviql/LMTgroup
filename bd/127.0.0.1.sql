-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 18 2016 г., 10:31
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `gamestore_ru`
--
CREATE DATABASE `gamestore_ru` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gamestore_ru`;

-- --------------------------------------------------------

--
-- Структура таблицы `reg_orders`
--

CREATE TABLE IF NOT EXISTS `reg_orders` (
  `id_order` int(5) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `reg_orders`
--

INSERT INTO `reg_orders` (`id_order`, `f_name`, `surname`, `l_name`, `address`, `gender`, `email`) VALUES
(1, 'Emil', 'Khabibulin', 'Shamilovich', 'glushko4', 'male', 'crafty5@mail.ru'),
(2, 'Dima', 'Kochedaev', 'Shamilovich', 'Spartakoskaya9', 'male', 'obama5@gmail.com'),
(3, 'Michail', 'Vasyta', 'Sergeevich', 'Gagafd4', 'male', 'canavisd2342@mail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
