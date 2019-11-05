-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 01 2019 г., 10:17
-- Версия сервера: 5.7.26
-- Версия PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `taskworker`
--

-- --------------------------------------------------------

--
-- Структура таблицы `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_salary` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `position` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `salary`
--

INSERT INTO `salary` (`id`, `full_salary`, `tax`, `position`) VALUES
(1, 200000, 10, 'Killer ferst lvl'),
(2, 130000, 13, 'Killer second lvl');

-- --------------------------------------------------------

--
-- Структура таблицы `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `location` text NOT NULL,
  `date_birth` date NOT NULL,
  `gender` text NOT NULL,
  `nationality` text NOT NULL,
  `accusation` text NOT NULL,
  `number_target` int(11) NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`id`, `name`, `surname`, `location`, `date_birth`, `gender`, `nationality`, `accusation`, `number_target`, `type`) VALUES
(1, 'Man', 'Super', 'Cripton Planet', '1938-10-11', 'male', 'Criptontion', 'Destruction of the planet Earth infrastructure', 1, 'Task'),
(2, 'Manhattan', 'Doctor', 'Moon', '1986-12-12', 'male', 'American', 'Walking naked', 2, 'Task'),
(3, 'Bat', 'Man', 'Gottam City', '1939-12-24', 'male', 'American', 'Lynching', 3, 'Task'),
(4, 'Logan', 'Wolverine', 'Japan', '1702-10-10', 'male', 'German', 'Uncontrollable beast', 4, 'Task'),
(5, 'Woman', 'Wonder', 'Amazonia', '1941-07-06', 'female', 'Amazon', 'Brings misfortune', 5, 'Task');

-- --------------------------------------------------------

--
-- Структура таблицы `worker`
--

DROP TABLE IF EXISTS `worker`;
CREATE TABLE IF NOT EXISTS `worker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `date_birth` date NOT NULL,
  `gender` text NOT NULL,
  `position` text NOT NULL,
  `position_id` int(11) NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `worker`
--

INSERT INTO `worker` (`id`, `name`, `surname`, `date_birth`, `gender`, `position`, `position_id`, `type`) VALUES
(1, 'Solomon', 'Grundy', '1888-08-08', 'male', 'Killer ferst lvl', 1, 'Hero'),
(2, 'Zod', 'General', '1961-10-08', 'male', 'Killer ferst lvl', 1, 'Hero'),
(3, 'Rorschach', 'Kovacs', '1986-05-05', 'male', 'Killer ferst lvl', 1, 'Hero'),
(4, 'Joker', 'MilkyWay', '1940-10-02', 'male', 'Killer ferst lvl', 1, 'Hero'),
(5, 'Doomsday', 'Kill', '1992-10-07', 'neuter', 'Killer ferst lvl', 1, 'Hero'),
(6, 'Harley', 'Quinn', '1992-01-02', 'female', 'Killer second lvl', 2, 'Hero'),
(7, 'Bird', 'Man', '1980-02-04', 'male', 'Killer second lvl', 2, 'Hero'),
(8, 'Edward', 'Nygma', '1948-08-12', 'male', 'Killer second lvl', 2, 'Hero'),
(9, 'Penguin', 'Cobblepot', '1941-10-03', 'male', 'Killer second lvl', 2, 'Hero'),
(10, 'Widow', 'Black', '1964-07-09', 'female', 'Killer second lvl', 2, 'Hero');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
