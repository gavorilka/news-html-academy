-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 07 2022 г., 18:58
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `html_simple`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(150) NOT NULL COMMENT 'Название статьи',
  `text` text NOT NULL,
  `imgUrl` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `imgUrl`, `date`) VALUES
(1, 'Новая библиотека для создания графиков', 'Теперь вы можете создать дашборд за считанные секунды.', 'img/new-graph.jpg', '2019-10-16 00:00:00'),
(2, 'Что там у роботов?', 'В робототехнике происходит много интересного, эта новость могла бы быть об этом, но нет.', 'img/new-robot.jpg', '2019-10-15 00:00:00'),
(3, 'Бесконечные циклы: пора завязывать с этим', 'Британские учёные выяснили, что работа ПО напрямую зависит от наличия в нём бесконечных циклов.', 'img/new-loop.jpg', '2019-10-15 00:00:00'),
(4, 'Бесконечные циклы: пора завязывать с этим', 'Британские учёные выяснили, что работа ПО напрямую зависит от наличия в нём бесконечных циклов.', 'img/new-loop.jpg', '2019-10-14 00:00:00'),
(5, 'nhh kkh h kh ', 'bn  jbjh hbjbhgjjh g', 'i', '2022-11-07 17:49:04');

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
