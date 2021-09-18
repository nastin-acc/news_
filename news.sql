-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 18 2021 г., 22:04
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(250) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `image`, `description`) VALUES
(2, 'Новость 4', '2021-09-18 21:01:12', 'media/images/3. Леопард.jpg', 'Описание новости 4Описание новости 4Описание новости 4Описание новости 4Описание новости 4Описание новости 4Описание новости 4Описание новости 4Описание новости 4'),
(3, 'Новость 3', '2021-09-18 21:56:11', 'media/images/12. Вода.jpg', 'Описание новости 3Описание новости 3Описание новости 3Описание новости 3Описание новости 3Описание новости 3Описание новости 3Описание новости 3Описание новости 3'),
(4, 'Новость 2', '2021-09-18 20:59:36', 'media/images/8. Божья коровка.jpg', 'Описание новости 2Описание новости 2Описание новости 2Описание новости 2Описание новости 2Описание новости 2Описание новости 2Описание новости 2Описание новости 2'),
(5, 'Новость 1', '2021-09-18 20:59:08', 'media/images/1. Черный кот с рыбкой.jpg', 'Описание новости 1Описание новости 1Описание новости 1Описание новости 1Описание новости 1Описание новости 1Описание новости 1Описание новости 1Описание новости 1Описание новости 1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
