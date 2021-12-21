-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 21 2021 г., 15:21
-- Версия сервера: 5.7.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shoping`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` mediumint(9) DEFAULT NULL,
  `likes` mediumint(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `likes`) VALUES
(1, 'шкаф', 'nec, euismod in, dolor. Fusce feugiat. Lorem ipsum dolor sit', 17307, 339),
(2, 'шкаф', 'nec, cursus a, enim. Suspendisse aliquet, sem ut cursus luctus,', 15090, 428),
(4, 'Синди', 'id, libero. Donec consectetuer mauris id sapien. Cras dolor dolor,', 14964, 424),
(5, 'Кресло', 'sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus', 12310, 181),
(6, 'Диван-кровать', 'sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus', 9323, 348),
(7, 'Уют', 'vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac', 3563, 90),
(8, 'Книжный', 'at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et', 16147, 93),
(9, 'Стенка', 'In ornare sagittis felis. Donec tempor, est ac mattis semper,', 15681, 173),
(10, 'Атланта', 'Donec non justo. Proin non massa non ante bibendum ullamcorper.', 405, 384),
(11, 'Диван-кровать', 'egestas, urna justo faucibus lectus, a sollicitudin orci sem eget', 17617, 124),
(12, 'Кресло', 'facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus', 17668, 76),
(13, 'Книжный', 'arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt', 17339, 190),
(15, 'Атланта', 'vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem ipsum dolor', 17534, 363),
(16, 'диван', 'semper pretium neque. Morbi quis urna. Nunc quis arcu vel', 16057, 485),
(17, 'шкаф', 'elit elit fermentum risus, at fringilla purus mauris a nunc.', 5240, 22),
(18, 'Книжный', 'et libero. Proin mi. Aliquam gravida mauris ut mi. Duis', 13425, 409),
(19, 'шкаф', 'semper rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque', 18381, 25),
(20, 'Угловой', 'Ut tincidunt vehicula risus. Nulla eget metus eu erat semper', 5806, 286),
(21, 'Пуф', 'mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed', 3712, 162),
(22, 'Уют', 'rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed', 9933, 267),
(23, 'Угловой', 'Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit', 3493, 354),
(24, 'Стенка', 'habitant morbi tristique senectus et netus et malesuada fames ac', 3847, 133),
(25, 'Книжный', 'gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa', 2025, 223),
(26, 'Кресло', 'adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', 14865, 244),
(27, 'Шкаф-купе', 'condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing', 12576, 257),
(28, 'Диван-книжка', 'eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc', 7019, 418),
(29, 'Пуф', 'velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat,', 12378, 427),
(30, 'шкаф', 'est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada', 10277, 424),
(31, 'Пуф', 'Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis', 4229, 224),
(32, 'Кресло', 'ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor.', 6673, 434),
(33, 'Синди', 'mauris ut mi. Duis risus odio, auctor vitae, aliquet nec,', 6737, 93),
(34, 'диван', 'orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero', 9083, 114),
(35, 'Пуф', 'consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus sit', 3238, 312),
(36, 'шкаф', 'lectus sit amet luctus vulputate, nisi sem semper erat, in', 3386, 249),
(37, 'Смеситель', 'mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed', 14138, 11),
(38, 'Уют', 'turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus.', 5715, 349),
(39, 'Диван-кровать', 'Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor', 3545, 457),
(40, 'Диван-книжка', 'lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id,', 16205, 395),
(41, 'Уют', 'dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a', 513, 268),
(42, 'Диван-книжка', 'odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa.', 15483, 377),
(43, 'Пуф', 'sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum', 19158, 33),
(44, 'Диван-книжка', 'lobortis. Class aptent taciti sociosqu ad litora torquent per conubia', 6136, 291),
(45, 'Стенка', 'dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam', 11727, 164),
(46, 'Диван-книжка', 'Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue.', 12367, 253),
(47, 'Книжный', 'vitae aliquam eros turpis non enim. Mauris quis turpis vitae', 9220, 254),
(48, 'Смеситель', 'justo. Proin non massa non ante bibendum ullamcorper. Duis cursus,', 15231, 40),
(49, 'Стенка', 'non, vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem ipsum', 11789, 463),
(50, 'Кресло', 'iaculis, lacus pede sagittis augue, eu tempor erat neque non', 13654, 327),
(51, 'Атланта', 'convallis erat, eget tincidunt dui augue eu tellus. Phasellus elit', 14415, 127),
(52, 'Диван-кровать', 'mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras', 15531, 308),
(53, 'Книжный', 'tellus justo sit amet nulla. Donec non justo. Proin non', 967, 167),
(54, 'Уют', 'nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim', 7403, 156),
(55, 'Кресло', 'ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem', 17184, 323),
(57, 'Атланта', 'magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed,', 1262, 254),
(58, 'Шкаф-купе', 'euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate', 16448, 116),
(59, 'Атланта', 'tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris.', 13916, 96),
(60, 'Угловой', 'Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu,', 9954, 180),
(61, 'Синди', 'quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed', 4308, 21),
(62, 'Смеситель', 'tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac', 15884, 486),
(63, 'Пуф', 'penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean', 389, 34),
(64, 'Пуф', 'mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla', 15396, 275),
(65, 'Смеситель', 'consequat enim diam vel arcu. Curabitur ut odio vel est', 6995, 66),
(66, 'диван', 'sed turpis nec mauris blandit mattis. Cras eget nisi dictum', 5432, 316),
(67, 'шкаф', 'facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo', 2247, 269),
(68, 'Кресло', 'lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis', 11877, 152),
(69, 'Кресло', 'lectus. Cum sociis natoque penatibus et magnis dis parturient montes,', 14707, 368),
(70, 'Кресло', 'arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi.', 14898, 354),
(71, 'Книжный', 'pede. Praesent eu dui. Cum sociis natoque penatibus et magnis', 9888, 299),
(72, 'Уют', 'Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc', 7264, 38),
(73, 'Диван-кровать', 'ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida', 16409, 90),
(74, 'Книжный', 'tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi', 17805, 80),
(75, 'Угловой', 'non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed', 4202, 477),
(76, 'Стенка', 'elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet', 10699, 420),
(77, 'Синди', 'ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend', 17204, 287),
(78, 'Пуф', 'molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris.', 8774, 132),
(79, 'диван', 'sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut', 5423, 138),
(80, 'диван', 'consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat', 14909, 53),
(81, 'Угловой', 'vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce', 12391, 89),
(82, 'диван', 'Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis', 2704, 217),
(83, 'Шкаф-купе', 'rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi', 1952, 357),
(84, 'Стенка', 'sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor', 7550, 426),
(85, 'Диван-кровать', 'aliquam eros turpis non enim. Mauris quis turpis vitae purus', 12067, 124),
(86, 'Шкаф-купе', 'euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate', 11912, 293),
(87, 'шкаф', 'scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada', 7763, 119),
(88, 'Смеситель', 'litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut', 18778, 358),
(89, 'Синди', 'elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu', 2613, 194),
(90, 'Шкаф-купе', 'at augue id ante dictum cursus. Nunc mauris elit, dictum', 17689, 396),
(91, 'Кресло', 'lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec', 18728, 143),
(92, 'Стенка', 'massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices', 15579, 452),
(93, 'диван', 'lorem, eget mollis lectus pede et risus. Quisque libero lacus,', 19672, 456),
(94, 'Синди', 'pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac', 18620, 320),
(95, 'Диван-книжка', 'Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc', 16669, 217),
(96, 'шкаф', 'a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc', 716, 13),
(97, 'Уют', 'id risus quis diam luctus lobortis. Class aptent taciti sociosqu', 7625, 258),
(98, 'Атланта', 'parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio', 4262, 467),
(99, 'Угловой', 'vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt', 18882, 193),
(100, 'Атланта', 'nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse', 13854, 70);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
