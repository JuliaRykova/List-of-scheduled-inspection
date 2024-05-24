-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2024 г., 11:38
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register`
--

-- --------------------------------------------------------

--
-- Структура таблицы `the register of scheduled inspections`
--

CREATE TABLE `the register of scheduled inspections` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `control` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `beginningVerification` date DEFAULT NULL,
  `endVerification` date DEFAULT NULL,
  `duration` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `the register of scheduled inspections`
--

INSERT INTO `the register of scheduled inspections` (`id`, `title`, `control`, `beginningVerification`, `endVerification`, `duration`) VALUES
(1, 'ООО колос', '    Роспотребнадзорjjjjj', '2020-12-02', '2021-12-01', 4777),
(2, 'ООО Второй Колос2222222', ' Налоговая', '2001-03-20', '2022-12-20', 5),
(5, 'bhggpp', '   fffffffffffffffkkk', '2024-05-18', '2024-05-08', 6),
(15, 'илья рыков', '   ппппппппппппп', '2024-05-02', '2024-05-31', 89),
(17, 'Задание 3', ' ммм', '2024-05-09', '2024-05-10', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `the register of scheduled inspections`
--
ALTER TABLE `the register of scheduled inspections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `the register of scheduled inspections`
--
ALTER TABLE `the register of scheduled inspections`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
