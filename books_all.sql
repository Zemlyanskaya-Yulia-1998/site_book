-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 08 2019 г., 19:28
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `books_all`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `id_janr` int(11) NOT NULL,
  `fio` text NOT NULL,
  `name` text NOT NULL,
  `kol` int(11) NOT NULL,
  `izd` text NOT NULL,
  `god` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `id_janr`, `fio`, `name`, `kol`, `izd`, `god`) VALUES
(1, 1, 'Хелен Филдинг', '«Дневник Бриджит Джонс»\r\n', 500, '«Альфа-книга»\r\n', 2004),
(4, 1, 'Дуглас Адамс\r\n', '«Автостопом по Галактике»\r\n', 350, '«Альфа-книга»\r\n', 1990),
(5, 1, 'Оскар Уайльд\r\n', '«Как важно быть серьезным»\r\n', 450, '«Эксмо»\r\n', 2000),
(6, 2, 'Борис Акунин\r\n', '«Лекарство от скуки»\r\n', 250, '«Азбука»\r\n', 1970),
(7, 2, 'Вильмонт Екатерина\r\n', '«Гормон счастья и прочие глупости»', 185, '«АСТ»\r\n', 2000),
(8, 3, 'Дмитрий Казаков\r\n', '«День коронации»\r\n', 448, '«Эксмо»\r\n', 2003),
(9, 3, 'Антон Орлов\r\n', '«Гостеприимный край кошмаров»\r\n', 480, '«Азбука»\r\n', 2005),
(10, 3, 'Кир Булычев\r\n', '«Искушение чародея»\r\n', 832, '«АСТ»\r\n', 2003),
(11, 4, 'Святослав Логинов\r\n', '«Темная сторона города»\r\n', 512, '«Эксмо»\r\n', 2011),
(12, 4, 'Стивен Хэнд\r\n', '«Техасская резня бензопилой»\r\n', 480, '«АСТ»\r\n', 2005),
(13, 1, 'ыуп', 'кверп', 400000, 'вяа', 42543);

-- --------------------------------------------------------

--
-- Структура таблицы `janr`
--

CREATE TABLE `janr` (
  `id` int(11) NOT NULL,
  `name_janr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `janr`
--

INSERT INTO `janr` (`id`, `name_janr`) VALUES
(1, 'Комедия'),
(2, 'Роман'),
(3, 'Фантастика'),
(4, 'Ужасы');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_janr` (`id_janr`);

--
-- Индексы таблицы `janr`
--
ALTER TABLE `janr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `janr`
--
ALTER TABLE `janr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`id_janr`) REFERENCES `janr` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
