-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 14 2023 г., 18:04
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(355) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `groupNumber` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `coockie` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `groupNumber`, `email`, `amount`, `coockie`) VALUES
(199, 'Станислав', 'Евдокимов', 'uiz-166', 'SAMSONOV.OLGA@mail.ru', '332', ''),
(200, 'Борис', 'Ларионов', 'azg-112', 'KABANOV.DARY@SIRYEV.ru', '183', ''),
(201, 'Ирина', 'Большаков', 'eki-171', 'ZUKOV.TATYNA@KRASILNIKOV.net', '132', ''),
(202, 'Иосиф', 'Смирнов', 'zaw-165', 'eSAFONOV@TUROV.com', '217', ''),
(203, 'Нина', 'Фролов', 'jui-113', 'nFOMICEV@LARIONOV.ru', '257', ''),
(204, 'Макар', 'Гурьев', 'rhc-113', 'yKORNILOV@NIKITIN.ru', '207', ''),
(205, 'Светлана', 'Бобылёв', 'djs-126', 'uSAVELEV@EFIMOV.com', '113', ''),
(206, 'Кузьма', 'Давыдов', 'qzr-109', 'BRONISLAV.USTINOV@ZUKOV.org', '134', ''),
(207, 'Люся', 'Сидоров', 'pxz-121', 'iLAVRENTEV@KIRILLOV.ru', '153', ''),
(208, 'Анна', 'Борисов', 'seb-128', 'VOROBEV.OLEG@inbox.ru', '350', ''),
(209, 'Афанасий', 'Бирюков', 'xlw-176', 'EKATERINA.LIKACEV@GUSEV.com', '314', ''),
(210, 'Александра', 'Лапин', 'psd-126', 'ELIZAVETA76@ya.ru', '389', ''),
(211, 'Пётр', 'Гордеев', 'jwm-185', 'DOMINIKA.DROZDOV@inbox.ru', '248', ''),
(212, 'Изабелла', 'Миронов', 'aer-175', 'SOFIY54@LOGINOV.com', '365', ''),
(213, 'Федосья', 'Александров', 'feh-128', 'AKIM45@rambler.ru', '345', ''),
(214, 'Александра', 'Шашков', 'ozu-123', 'SVYTOSLAV.KOLOBOV@gmail.com', '331', ''),
(215, 'Святослав', 'Фадеев', 'kfa-197', 'fMURAVEV@gmail.com', '198', ''),
(216, 'Доминика', 'Егоров', 'ekz-157', 'rABRAMOV@MOISEEV.com', '124', ''),
(217, 'Никодим', 'Емельянов', 'mri-186', 'uBOBYLEV@mail.ru', '360', ''),
(218, 'Ева', 'Назаров', 'xrl-123', 'zORLOV@AFANASEV.ru', '375', ''),
(219, 'Наталья', 'Фомичёв', 'qys-182', 'EVGENII76@BORISOV.com', '112', ''),
(220, 'Рада', 'Жуков', 'vog-132', 'VENIAMIN.NOVIKOV@EVDOKIMOV.com', '109', ''),
(221, 'Таисия', 'Большаков', 'mkm-172', 'VLAD15@ELISEEV.com', '299', ''),
(222, 'София', 'Миронов', 'upu-164', 'STRELKOV.ANFISA@KULAGIN.com', '387', ''),
(223, 'Эмилия', 'Лапин', 'ncw-191', 'SERGEI30@SESTAKOV.net', '174', ''),
(224, 'Нина', 'Ефимов', 'kaw-161', 'LEONID.MARTYNOV@mail.ru', '240', ''),
(225, 'Альбина', 'Лихачёв', 'dpa-163', 'VESELOV.ZANNA@hotmail.com', '155', ''),
(226, 'Макар', 'Кошелев', 'yte-106', 'LEBEDEV.MALVINA@BELYEV.ru', '181', ''),
(227, 'Люся', 'Крылов', 'zqj-140', 'eGERASIMOV@SUBBOTIN.net', '319', ''),
(228, 'Анфиса', 'Орехов', 'qdx-169', 'LAVRENTII.KONSTANTINOV@inbox.ru', '139', ''),
(229, 'Ульяна', 'Ефимов', 'xtp-122', 'VORONTOV.GEORGII@GORBACEV.ru', '356', ''),
(230, 'Людмила', 'Кудрявцев', 'rca-135', 'qSAMOILOV@KULAGIN.ru', '285', ''),
(231, 'Ярослав', 'Захаров', 'apk-106', 'gRODIONOV@yandex.ru', '141', ''),
(232, 'Сава', 'Воробьёв', 'svg-165', 'VALERII02@BORISOV.com', '191', ''),
(233, 'Милан', 'Королёв', 'nax-118', 'pYKOVLEV@KNYZEV.ru', '231', ''),
(234, 'Семён', 'Лаврентьев', 'yxu-169', 'ANTON59@gmail.com', '111', ''),
(235, 'Иннокентий', 'Сазонов', 'ghb-181', 'STEFAN39@PAVLOV.ru', '213', ''),
(236, 'Александра', 'Федотов', 'fzt-125', 'kNOVIKOV@bk.ru', '105', ''),
(237, 'Маргарита', 'Кононов', 'nqm-151', 'KRISTINA.DOROFEEV@VLASOV.ru', '175', ''),
(238, 'Фаина', 'Кудряшов', 'cje-139', 'DIANA.MERKUSEV@NAZAROV.org', '153', ''),
(239, 'Родион', 'Лихачёв', 'oks-168', 'xLOGINOV@list.ru', '251', ''),
(240, 'Артём', 'Бирюков', 'qad-171', 'NIKOLAEV.VERA@mail.ru', '145', ''),
(241, 'Филипп', 'Кулаков', 'bkm-154', 'jMELNIKOV@SILIN.ru', '154', ''),
(242, 'Захар', 'Белозёров', 'usc-184', 'KLEMENTINA.SAVELEV@SIDOROV.net', '214', ''),
(243, 'Аркадий', 'Туров', 'kft-128', 'aKUZNETOV@VINOGRADOV.net', '346', ''),
(244, 'Юлиан', 'Волков', 'rba-120', 'VIL43@GORBUNOV.com', '198', ''),
(245, 'Назар', 'Воронцов', 'gtg-131', 'nFROLOV@KULAGIN.org', '312', ''),
(246, 'Кристина', 'Русаков', 'zid-142', 'YROSLAVA.BRAGIN@MUKIN.com', '257', ''),
(247, 'Жанна', 'Игнатьев', 'kie-171', 'EVDOKIMOV.DENIS@bk.ru', '173', ''),
(248, 'Вера', 'Хохлов', 'bdo-133', 'MURAVEV.EVGENIY@ya.ru', '225', ''),
(249, 'Артур', 'Кузьмин', 'sdn-171', 'LAVRENTII80@KAZAKOV.org', '307', ''),
(250, 'Денис', 'Шилов', 'fra-128', 'AKSENOV.ANDREI@rambler.ru', '330', ''),
(251, 'Екатерина', 'Осипов', 'ukb-165', 'LYSY.MIKAILOV@BLOKIN.ru', '203', ''),
(252, 'Жанна', 'Копылов', 'ujw-168', 'NINA32@list.ru', '231', ''),
(253, 'Тимур', 'Григорьев', 'yrg-117', 'EVGENIY.KAPUSTIN@narod.ru', '328', ''),
(254, 'Антонина', 'Овчинников', 'urn-185', 'vROMANOV@yandex.ru', '395', ''),
(255, 'Лариса', 'Комиссаров', 'nrh-115', 'EVGENIY.EVSEEV@SIMONOV.ru', '260', ''),
(256, 'Яна', 'Агафонов', 'kqg-152', 'RAISA94@yandex.ru', '241', ''),
(257, 'Вера', 'Лобанов', 'iio-113', 'GORDEI.FILATOV@list.ru', '212', ''),
(258, 'Антон', 'Александров', 'ixt-191', 'hPROKOROV@bk.ru', '210', ''),
(259, 'Алина', 'Галкин', 'smy-192', 'RODIONOV.VASILII@yandex.ru', '146', ''),
(260, 'Федосья', 'Гаврилов', 'feu-162', 'cZUEV@bk.ru', '393', ''),
(261, 'Евгения', 'Костин', 'znu-177', 'SOKOLOV.FLORENTINA@ZYKOV.org', '210', ''),
(262, 'Диана', 'Лебедев', 'coy-194', 'VOROBEV.INESSA@rambler.ru', '274', ''),
(263, 'Иннокентий', 'Мухин', 'qou-149', 'xKALININ@rambler.ru', '180', ''),
(264, 'Валентина', 'Волков', 'hav-192', 'cFILATOV@ZIMIN.org', '317', ''),
(265, 'Эмма', 'Ершов', 'bmw-178', 'oDMITRIEV@KONSTANTINOV.com', '295', ''),
(266, 'Игнат', 'Котов', 'jiy-124', 'FAINA.ZUEV@BOGDANOV.com', '362', ''),
(267, 'Герасим', 'Зайцев', 'lrk-186', 'pTROFIMOV@inbox.ru', '284', ''),
(268, 'Алла', 'Чернов', 'vyb-137', 'SOFY.ROMANOV@SAZONOV.ru', '309', ''),
(269, 'Розалина', 'Пономарёв', 'ttn-124', 'nEFIMOV@rambler.ru', '255', ''),
(270, 'Елизавета', 'Кириллов', 'lmw-123', 'uLAPIN@ALEKSEEV.net', '339', ''),
(271, 'Людмила', 'Осипов', 'aag-176', 'SOFY50@narod.ru', '288', ''),
(272, 'Яна', 'Захаров', 'yqg-159', 'BELOUSOV.GALINA@ya.ru', '306', ''),
(273, 'Геннадий', 'Селиверстов', 'hjy-141', 'dTIKONOV@DMITRIEV.ru', '358', ''),
(274, 'Розалина', 'Красильников', 'zky-102', 'VLADISLAV.SUVOROV@list.ru', '143', ''),
(275, 'Зинаида', 'Осипов', 'zvq-134', 'zSOLOVEV@ANTONOV.ru', '361', ''),
(276, 'Вячеслав', 'Белов', 'qyb-130', 'IGNATII.GUREV@MURAVEV.ru', '179', ''),
(277, 'Дина', 'Рябов', 'vfo-124', 'SERGEEV.KONSTANTIN@VORONTOV.net', '282', ''),
(278, 'Розалина', 'Шубин', 'kfa-125', 'VLADLENA.SUKIN@MAKAROV.ru', '289', ''),
(279, 'Ева', 'Кулаков', 'lvo-170', 'BORIS.UVAROV@rambler.ru', '219', ''),
(280, 'Нина', 'Лебедев', 'adz-158', 'MIKAIL.DROZDOV@narod.ru', '376', ''),
(281, 'Инна', 'Пономарёв', 'rkh-133', 'KRISTINA26@gmail.com', '257', ''),
(282, 'Антонина', 'Дьячков', 'bwd-130', 'DAN36@ANTONOV.com', '386', ''),
(283, 'Милан', 'Антонов', 'kcg-172', 'BELOZEROV.KONSTANTIN@inbox.ru', '227', ''),
(284, 'Эльвира', 'Лазарев', 'wgy-163', 'ALBERT.BARANOV@gmail.com', '376', ''),
(285, 'Капитолина', 'Рябов', 'mhk-141', 'aBIRYKOV@MAKSIMOV.ru', '370', ''),
(286, 'Лариса', 'Артемьев', 'wuy-157', 'AKIM28@BELYKOV.net', '101', ''),
(287, 'Евгений', 'Орлов', 'jqv-139', 'SILIN.POLINA@EVDOKIMOV.ru', '334', ''),
(288, 'Валерия', 'Сергеев', 'gdf-140', 'ARTEMEV.IRAKLII@KRYLOV.ru', '105', ''),
(289, 'Нина', 'Логинов', 'ldd-102', 'DOMINIKA.LEBEDEV@ya.ru', '102', ''),
(290, 'Людмила', 'Баранов', 'wcs-191', 'DMITRII.TROFIMOV@SESTAKOV.ru', '392', ''),
(291, 'Дмитрий', 'Лобанов', 'zme-156', 'nFILATOV@SELEZNEV.ru', '190', ''),
(292, 'Артём', 'Поляков', 'own-178', 'KIRILL.LEBEDEV@SAROV.org', '100', ''),
(293, 'Никодим', 'Герасимов', 'xyk-110', 'jROGOV@IVANOV.ru', '215', ''),
(294, 'Трофим', 'Симонов', 'eps-100', 'vPANOV@BIRYKOV.org', '218', ''),
(295, 'Аким', 'Потапов', 'hic-147', 'MAKAROV.VERA@rambler.ru', '368', ''),
(296, 'Ираклий', 'Кудряшов', 'rkp-162', 'MARGARITA43@KUDRYSOV.ru', '100', ''),
(297, 'Анастасия', 'Евсеев', 'fku-155', 'SOKOLOV.VALENTINA@list.ru', '400', ''),
(298, 'Анастасия', 'Миронов', 'qvx-141', 'EFIMOV.KLAVDIY@KOLOBOV.com', '251', ''),
(299, 'Иванов', 'Сидоров', 'xlt-555', 'irncjas@rqq.com', '148', ';`lT`y`((r\"M]Zxf7');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
