-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 08 2015 г., 15:07
-- Версия сервера: 5.1.68-community-log
-- Версия PHP: 5.4.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `gost`
--
CREATE DATABASE `gost` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gost`;

-- --------------------------------------------------------

--
-- Структура таблицы `catalog_content`
--

CREATE TABLE IF NOT EXISTS `catalog_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_name` varchar(512) NOT NULL,
  `content_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `catalog_content`
--

INSERT INTO `catalog_content` (`id`, `content_name`, `content_id`) VALUES
(1, 'Действующий', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `fav`
--

CREATE TABLE IF NOT EXISTS `fav` (
  `user_id` int(255) NOT NULL,
  `gost_id` int(255) NOT NULL,
  PRIMARY KEY (`gost_id`),
  UNIQUE KEY `gost_id` (`gost_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fav`
--

INSERT INTO `fav` (`user_id`, `gost_id`) VALUES
(1, 11),
(1, 14),
(1, 31),
(1, 41),
(1, 83),
(2, 47),
(2, 48);

-- --------------------------------------------------------

--
-- Структура таблицы `gost`
--

CREATE TABLE IF NOT EXISTS `gost` (
  `gost_id` int(11) NOT NULL AUTO_INCREMENT,
  `gost_number` varchar(15) NOT NULL,
  `gost_name` varchar(1024) NOT NULL,
  `gost_status` int(11) NOT NULL,
  `gost_type` int(11) NOT NULL,
  `gost_upload_name` varchar(1024) NOT NULL,
  `gost_text` text NOT NULL,
  `gost_comment` varchar(1024) NOT NULL,
  `gost_favorites` int(1) DEFAULT NULL,
  PRIMARY KEY (`gost_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

--
-- Дамп данных таблицы `gost`
--

INSERT INTO `gost` (`gost_id`, `gost_number`, `gost_name`, `gost_status`, `gost_type`, `gost_upload_name`, `gost_text`, `gost_comment`, `gost_favorites`) VALUES
(11, '19.001-77', 'Общие положения', 1, 19, 'GOST19.001-77.pdf', 'Г О С У Д А Р С Т В Е Н Н Ы Й   С Т А Н Д А Р Т   С О Ю З А   С С Р\r\nЕдиная система программной документации\r\n\r\nГОСТ 19.001-77\r\n\r\n \r\nОБЩИЕ ПОЛОЖЕНИЯ\r\n \r\nUnited system for program documentation. \r\nGeneral principles\r\n\r\nПостановлением Государственного комитета стандартов Совета Министров СССР от 20 мая 1977 г. № 1268 срок введения установлен\r\n\r\nс 01.01. 1980 г.\r\n\r\nНастоящий стандарт устанавливает целевое назначение, область распространения, классификацию и правила обозначения стандартов, входящих в комплекс Единой системы программной документации (ЕСПД).\r\n\r\n1. НАЗНАЧЕНИЕ ЕСПД\r\n1.1. Единая система программной документации - комплекс государственных стандартов, устанавливающих взаимоувязанные правила разработки, оформления и обращения программ и программной документации.\r\n\r\n1.2. В стандартах ЕСПД устанавливают требования, регламентирующие разработку, сопровождение, изготовление и эксплуатацию программ, что обеспечивает возможность:\r\n\r\nунификации программных изделий для взаимного обмена программами и применения ранее разработанных программ в новых разработках;\r\nснижения трудоемкости и повышения эффективности разработки, сопровождения, изготовления и эксплуатации программных изделий;\r\nавтоматизации изготовления и хранения программной документации.\r\nСопровождение программы включает анализ функционирования, развитие и совершенствование программы, а также внесение изменений в нее с целью устранения ошибок.\r\n\r\n2. ОБЛАСТЬ РАСПРОСТРАНЕНИЯ И СОСТАВ ЕСПД\r\n2.1. Правила и положения, установленные в стандартах ЕСПД, распространяются на программы и программную документацию для вычислительных машин, комплексов и систем независимо от их назначения и области применения.\r\n\r\n2.2. В состав ЕСПД входят:\r\n\r\nосновополагающие и организационно-методические стандарты;\r\nстандарты, определяющие формы и содержание программных документов, применяемых при обработке данных;\r\nстандарты, обеспечивающие автоматизацию разработки программных документов.\r\n2.3. Разработка организационно-методической документации, определяющей и регламентирующей деятельность организаций по разработке, сопровождению и эксплуатации программ, должна проводиться на основе стандартов ЕСПД.\r\n\r\n3. КЛАССИФИКАЦИЯ И ОБОЗНАЧЕНИЕ СТАНДАРТОВ ЕСПД\r\n3.1. Стандарты ЕСПД подразделяют на группы, приведенные в таблице.\r\nКод группы	Наименование группы\r\n0	Общие положения\r\n1	Основополагающие стандарты\r\n2	Правила выполнения документации разработки\r\n3	Правила выполнения документации изготовления\r\n4	Правила выполнения документации сопровождения\r\n5	Правила выполнения эксплуатационной документации\r\n6	Правила обращения программной документации\r\n7	Резервные группы\r\n8\r\n9	Прочие стандарты\r\n3.2. Обозначения стандартов ЕСПД строят по классификационному признаку.\r\n\r\nВ обозначение стандарта ЕСПД должны входить:\r\n\r\nцифры 19, присвоенные классу стандартов ЕСПД;\r\nодна цифра (после точки), обозначающая код классификационной группы стандартов, указанной в п. 3.1;\r\nдвузначное число, определяющее порядковый номер стандарта в группе;\r\nдвузначное число (после тире), указывающее год регистрации стандарта.\r\nПример обозначения стандарта « Единая система программной документации. Общие положения »:\r\n\r\n  ГОСТ 19.001-77\r\n  |    |  ||  |\r\n  |    |  ||  |  Год регистрации стандарта\r\n  |    |  ||     Порядковый номер стандарта в группе\r\n  |    |  |      Классификационная группа стандартов\r\n  |    |         Класс (стандарты ЕСПД)\r\n  |              Категория стандарта (государственный стандарт)', '', 1),
(12, '19.002-80', 'Схемы алгоритмов и программ. Правила выполнения', 1, 19, 'GOST19.002-80.pdf', '', '', 0),
(13, '19.003-80', 'Схемы алгоритмов и программ. Обозначения условные графические', 1, 19, 'GOST19.003-80.pdf', '', '', 0),
(14, '19.004-80', 'Термины и определения', 1, 19, 'GOST19.004-80.pdf', '', '', 1),
(15, '19.005-85', 'Р-схемы алгоритмов и программ', 1, 19, 'GOST19.005-85.pdf', '', '', 0),
(16, '19.101-77', 'Виды программ и программных документов', 1, 19, 'GOST19.101-77.pdf', 'ГОСТ 19.101-77 ЕСПД Виды программ и программных документов (с Изменением N 1).\r\n\r\nГОСТ 19.101-77\r\n\r\nГруппа Т55\r\n     \r\nМЕЖГОСУДАРСТВЕННЫЙ СТАНДАРТ\r\n     \r\n\r\nЕдиная система программной документации\r\n     \r\nВИДЫ ПРОГРАММ И ПРОГРАММНЫХ ДОКУМЕНТОВ\r\n     \r\nUnified system for program documentation. Types of programs and program documents\r\n\r\nМКС 35.080\r\nДата введения 1980-01-01\r\n\r\n     \r\n     Постановлением Государственного комитета стандартов Совета Министров СССР от 20 мая 1977 г. N 1268 дата введения установлена 01.01.80\r\n     \r\n     ИЗДАНИЕ (январь 2010 г.) с Изменением N 1, утвержденным в июне 1981 г. (ИУС 9-81).\r\n     \r\n     \r\n     Настоящий стандарт устанавливает виды программ и программных документов для вычислительных машин, комплексов и систем независимо от их назначения и области применения.\r\n     \r\n     Стандарт полностью соответствует СТ СЭВ 1626-79.\r\n     \r\n     (Измененная редакция, Изм. N 1).\r\n     \r\n     \r\n\r\n1. ВИДЫ ПРОГРАММ\r\n1.1. Программу (по ГОСТ 19781-90) допускается идентифицировать и применять самостоятельно и (или) в составе других программ.\r\n     \r\n1.2. Программы подразделяют на виды, приведенные в табл.1.\r\n     \r\n     \r\nТаблица 1\r\nВид программы\r\nОпределение\r\nКомпонент\r\nПрограмма, рассматриваемая как единое целое, выполняющая законченную функцию и применяемая самостоятельно или в составе комплекса\r\nКомплекс\r\nПрограмма, состоящая из двух или более компонентов и (или) комплексов, выполняющих взаимосвязанные функции, и применяемая самостоятельно или в составе другого комплекса\r\n\r\n     \r\n1.3. Документация, разработанная на программу, может использоваться для реализации и передачи программы на носителях данных, а также для изготовления программного изделия.\r\n     \r\n1.2, 1.3. (Измененная редакция, Изм. N 1).\r\n     \r\n     \r\n2. ВИДЫ ПРОГРАММНЫХ ДОКУМЕНТОВ\r\n\r\n2.1. К программным относят документы, содержащие сведения, необходимые для разработки, изготовления, сопровождения и эксплуатации программ.\r\n     \r\n2.2. Виды программных документов и их содержание приведены в табл.2.\r\n     \r\n     \r\nТаблица 2\r\nВид программного документа\r\nСодержание программного документа\r\nСпецификация\r\nСостав программы и документации на нее\r\nВедомость держателей подлинников\r\nПеречень предприятий, на которых хранят подлинники программных документов\r\nТекст программы\r\nЗапись программы с необходимыми комментариями\r\nОписание программы\r\nСведения о логической структуре и функционировании программы\r\nПрограмма и методика испытаний\r\nТребования, подлежащие проверке при испытании программы, а также порядок и методы их контроля\r\nТехническое задание\r\nНазначение и область применения программы, технические, технико-экономические и специальные требования, предъявляемые к программе, необходимые стадии и сроки разработки, виды испытаний\r\nПояснительная записка\r\nСхема алгоритма, общее описание алгоритма и (или) функционирования программы, а также обоснование принятых технических и технико-экономических решений\r\nЭксплуатационные документы\r\nСведения для обеспечения функционирования и эксплуатации программы\r\n\r\n     \r\n2.3. Виды эксплуатационных документов и их содержание приведены в табл.3.\r\n     \r\n     \r\nТаблица 3\r\nВид эксплуатационного документа\r\nСодержание эксплуатационного документа\r\nВедомость эксплуатационных документов\r\nПеречень эксплуатационных документов на программу\r\nФормуляр\r\nОсновные характеристики программы, комплектность и сведения об эксплуатации программы\r\nОписание применения\r\nСведения о назначении программы, области применения, применяемых методах, классе решаемых задач, ограничениях для применения, минимальной конфигурации технических средств\r\nРуководство системного программиста\r\nСведения для проверки, обеспечения функционирования и настройки программы на условия конкретного применения\r\nРуководство программиста\r\nСведения для эксплуатации программы\r\nРуководство оператора\r\nСведения для обеспечения процедуры общения оператора с вычислительной системой в процессе выполнения программы\r\nОписание языка\r\nОписание синтаксиса и семантики языка\r\nРуководство по техническому обслуживанию\r\nСведения для применения тестовых и диагностических программ при обслуживании технических средств\r\n\r\n     \r\n2.4. В зависимости от способа выполнения и характера применения программные документы подразделяются на подлинник, дубликат и копию (ГОСТ 2.102-68), предназначенные для разработки, сопровождения и эксплуатации программы.\r\n     \r\n2.5. Виды программных документов, разрабатываемых на разных стадиях, и их коды приведены в табл.4.\r\n     \r\n     \r\nТаблица 4\r\nКод\r\nвида документа\r\nВид документа\r\nСтадии разработки\r\nЭскизный проект\r\nТехнический проект\r\nРабочий проект\r\nкомпонент\r\nкомплекс\r\n-\r\nСпецификация\r\n-\r\n-\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n05\r\nВедомость держателей подлинников\r\n-\r\n-\r\n-\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n12\r\nТекст программы\r\n-\r\n-\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n13\r\nОписание программы\r\n-\r\n-\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n20\r\nВедомость эксплуатационных документов\r\n-\r\n-\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n30\r\nФормуляр\r\n-\r\n-\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n31\r\nОписание применения\r\n-\r\n-\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n32\r\nРуководство системного программиста\r\n-\r\n-\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n33\r\nРуководство программиста\r\n-\r\n-\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n34\r\nРуководство оператора\r\n-\r\n-\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n35\r\nОписание языка\r\n-\r\n-\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n46\r\nРуководство по техническому обслуживанию\r\n-\r\n-\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n51\r\nПрограмма и методика испытаний\r\n-\r\n-\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n81\r\nПояснительная записка\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n-\r\n-\r\n90-99\r\nПрочие документы\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\nГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1)\r\n\r\n     \r\n     Условные обозначения:\r\n        \r\n     ГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1) - документ обязательный;\r\n          \r\n     ГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1) - документ обязательный для компонентов, имеющих самостоятельное применение;\r\n    \r\n     ГОСТ 19.101-77 ЕСПД. Виды программ и программных документов (с Изменением N 1) - необходимость составления документа определяется на этапе разработки и утверждения технического задания;\r\n     \r\n       -     - документ не составляют.\r\n     \r\n     \r\n2.2-2.5. (Измененная редакция, Изм. N 1).\r\n     \r\n2.6. Допускается объединять отдельные виды эксплуатационных документов (за исключением ведомости эксплуатационных документов и формуляра). Необходимость объединения этих документов указывается в техническом задании. Объединенному документу присваивают наименование и обозначение одного из объединяемых документов.\r\n     \r\n     В объединенных документах должны быть приведены сведения, которые необходимо включать в каждый объединяемый документ.\r\n     \r\n2.7. На этапе разработки и утверждения технического задания определяют необходимость составления технических условий, содержащих требования к изготовлению, контролю и приемке программы.\r\n     \r\n     Технические условия разрабатывают на стадии "Рабочий проект".\r\n     \r\n2.8. Необходимость составления технического задания на компоненты, не предназначенные для самостоятельного применения, и комплексы, входящие в другие комплексы, определяется по согласованию с заказчиком.\r\n     \r\n     (Введен дополнительно, Изм. N 1).', '', 1),
(17, '19.102-77', 'Стадии разработки', 1, 19, 'GOST19.102-77.pdf', '', '', 0),
(18, '19.103-77', 'Обозначения программ и программных документов', 1, 19, 'GOST19.103-77.pdf', '', '', 0),
(19, '19.104-78', 'Основные надписи', 1, 19, 'GOST19.104-78.pdf', '', '', 0),
(20, '19.105-78', 'Общие требования к программным документам', 1, 19, 'GOST19.105-78.pdf', '', '', 0),
(21, '19.106-78', 'Требования к программным документам, выполненным печатным способом', 1, 19, 'GOST19.106-78.pdf', '', '', 0),
(22, '19.201-78', 'Техническое задание. Требования к содержанию и оформлению', 1, 19, 'GOST19.201-78.pdf', '', '', 0),
(23, '19.202-78', 'Спецификация. Требования к содержанию и оформлению', 1, 19, 'GOST19.202-78.pdf', '', '', 0),
(24, '19.301-79', 'Программа и методика испытаний. Требования к содержанию и оформлению', 1, 19, 'GOST19.301-79.pdf', '', '', 1),
(25, '19.401-78', 'Текст программы. Требования к содержанию и оформлению', 1, 19, 'GOST19.401-78.pdf', '', '', 0),
(26, '19.402-78', 'Описание программы', 1, 19, 'GOST19.402-78.pdf', '', '', 0),
(27, '19.403-79', 'Ведомость держателей подлинников', 1, 19, 'GOST19.403-79.pdf', '', '', 0),
(28, '19.404-79', 'Пояснительная записка. Требования к содержанию и оформлению', 1, 19, 'GOST19.404-79.pdf', '', '', 0),
(29, '19.501-78', 'Формуляр. Требования к содержанию и оформлению', 1, 19, 'GOST19.501-78.pdf', '', '', 0),
(30, '19.502-78', 'Общее описание. Требования к созданию и оформлению', 1, 19, 'GOST19.502-78.pdf', '', '', 0),
(31, '19.503-79', ' Руководство системного программиста. Требования к содержанию и оформлению', 1, 19, 'GOST19.503-79.pdf', '', '', 0),
(32, '19.504-79', ' Руководство программиста. Требования к содержанию и оформлению', 1, 19, 'GOST19.504-79.pdf', '', '', 0),
(33, '19.505-79', ' Руководство оператора. Требования к содержанию и оформлению', 1, 19, 'GOST19.505-79.pdf', '', '', 0),
(34, '19.506-79', 'Описание языка. Требования к содержанию и оформлению', 1, 19, 'GOST19.506-79.pdf', '', '', 0),
(35, '19.507-79', 'Ведомость эксплуатационных документов', 1, 19, 'GOST19.507-79.pdf', '', '', 0),
(36, '19.508-79', 'Руководство по техническом обслуживанию. Требования к содержанию и оформлению', 1, 19, 'GOST19.508-79.pdf', '', '', 0),
(37, '19.601-78', 'Общие правила дублирования, учета и хранения', 1, 19, 'GOST19.601-78.pdf', '', '', 0),
(38, '19.602-7', 'Правила дублирования, учета и хранения программных документов, выполненных печатным способом', 1, 19, 'GOST19.602-78.pdf', '', '', 0),
(39, '19.603-78', 'Общие правила внесения изменений', 1, 19, 'GOST19.603-78.pdf', '', '', 0),
(40, '19.604-78', 'Правила внесения изменений в программные документы, выполненных печатным способом', 1, 19, 'GOST19.604-78.pdf', '', '', 0),
(41, '34.201-89', 'Виды, комплектность и обозначения документов при создании автоматизированных систем', 1, 34, '34.201-89.pdf', '', '', 0),
(42, '34.320-96', 'Концепции и терминология для концептуальной схемы и информационной базы', 1, 34, '34.320-96.pdf', '', '', 0),
(43, '34.321-96', 'Информационные технологии. Система стандартов по базам данных. Эталонная модель управления', 1, 34, '34.321-96.pdf', '', '', 0),
(44, '34.601-90', 'Автоматизированные системы. Стадии создания', 1, 34, '34.601-90.pdf', '', '', 0),
(45, '34.602-89', 'Техническое задание на создание автоматизированной системы', 1, 34, '34.602-89.pdf', '', 'Взамен ГОСТ 24.201-85', 1),
(46, '34.603-92', 'Информационная технология. Виды испытаний автоматизированных систем', 1, 34, '34.603-92.pdf', '', '', 1),
(47, 'РД 50-34.698-90', 'Автоматизированные системы. Требования к содержанию документов', 1, 34, '50_34_698_90.pdf', '', '', 1),
(48, '2.001-93', 'Общие положения', 1, 2, '2.001-93.pdf', '', '', 1),
(49, '2.002-72', 'Требования к моделям, макетам и темплетам, применяемым при проектировании', 1, 2, '2.002-72.pdf', '', '', 1),
(50, '2.004-88', 'Общие требования к выполнению конструкторских и технологических документов на печатающих и графических устройствах вывода ЭВМ', 1, 2, '2.004-88.pdf', '', '', 1),
(51, '2.051-2006', 'Электронные документы. Общие положения', 1, 2, '2.051-2006.pdf', '', '', 0),
(52, '2.052-2006', 'Электронная модель изделия. Общие положения', 1, 2, '2.052-2006.pdf', '', '', 0),
(53, '2.053-2006', 'Электронная структура изделия. Общие положения', 1, 2, '2.053-2006.pdf', '', '', 0),
(54, '2.101-68', 'Виды изделий', 1, 2, '2.101-68.pdf', '', '', 0),
(55, '2.102-68', 'Виды и комплектность конструкторских документов', 1, 2, '2.102-68.pdf', '', '', 0),
(56, '2.103-68', 'Стадии разработки', 1, 2, '2.103-68.pdf', '', '', 0),
(57, '2.104-2006', 'Основные надписи', 1, 2, '2.104-2006.pdf', '', '', 0),
(58, '2.105-95', 'Общие требования к текстовым документам', 1, 2, '2.105-95.pdf', '', '', 0),
(59, '2.106-96', 'Текстовые документы', 1, 2, '2.106-96.pdf', '', '', 0),
(60, '2.109-73', 'Основные требования к чертежам', 1, 2, '2.109-73.pdf', '', '', 0),
(61, '2.111-68', 'Нормоконтроль', 1, 2, '2.111-68.pdf', '', '', 0),
(62, '2.113-75', 'Групповые и базовые конструкторские документы', 1, 2, '2.113-75.pdf', '', '', 0),
(63, '2.114-95', 'Технические условия', 1, 2, '2.114-95.pdf', '', '', 0),
(64, '2.116-84', 'Карта технического уровня и качества продукции', 1, 2, '2.116-84.pdf', '', '', 0),
(65, '2.118-73', 'Техническое предложение', 1, 2, '2.118-73.pdf', '', '', 1),
(66, '2.119-73', 'Эскизный проект', 1, 2, '2.119-73.pdf', '', '', 0),
(67, '2.120-73', 'Технический проект', 1, 2, '2.120-73.pdf', '', '', 0),
(68, '2.123-93', 'Комплектность конструкторских документов на печатные платы при автоматизированном проектировании', 1, 2, '2.123-93.pdf', '', '', 0),
(69, '2.124-85', 'Порядок применения покупных изделий', 1, 2, '2.124-85.pdf', '', '', 0),
(70, '2.125-2008', 'Правила выполнения эскизных конструкторских документов. Общие положения', 1, 2, '2.125-2008.pdf', '', '', 0),
(71, '2.201-80', 'Обозначение изделий и конструкторских документов', 1, 2, '2.201-80.pdf', '', '', 1),
(72, '2.501-88', 'Правила учёта и хранения', 1, 2, '2.501-88.pdf', '', '', 0),
(73, '2.502-68', 'Правила дублирования', 1, 2, '2.502-68.pdf', '', '', 0),
(74, '2.503-90', 'Правила внесения изменений', 1, 2, '2.503-90.pdf', '', '', 0),
(75, '2.601-2006', 'Эксплуатационные документы ', 1, 2, '2.601-2006.pdf', '', '', 0),
(76, '2.610-2006', 'Правила выполнения эксплуатационных документов', 1, 2, '2.610-2006.pdf', '', '', 0),
(77, '2.701-2008', 'Схемы. Виды и типы. Общие требования к выполнению', 1, 2, '2.701-2008.pdf', '', '', 0),
(78, 'ИСО-МЭК 12207-9', 'Процессы жизненного цикла программных средств', 1, 77, '12207-99.pdf', '', 'ГОСТ Р ', 1),
(79, 'ИСО-МЭК 15271-0', 'Руководство по применению ГОСТ Р ИСО-МЭК 12207.pdf', 1, 77, '15271-02.pdf', '', 'ГОСТ Р ', 0),
(80, 'ИСО-МЭК 15288-2', 'Процессы жизненного цикла систем', 1, 77, '15288-2005.pdf', '', 'ГОСТ Р ', 1),
(81, 'ИСО-МЭК 15910-2', 'Процесс создания документации пользователя программного средства', 1, 77, '15910-2002.pdf', '', 'ГОСТ Р ', 0),
(82, '51904-2002', 'Программное обеспечение встроенных систем. Общие требования к разработке и документированию', 1, 77, '51904-2002.pdf', '', 'ГОСТ Р ', 0),
(83, 'ИСО-МЭК 9126-93', 'Характеристики качества и руководства по их применению', 1, 77, '9126-93.pdf', '', 'ГОСТ Р ', 0),
(84, 'ИСО 9127-94', 'Системы обработки информации. Документация пользователя и информация на упаковке для потребительских программных пакетов', 1, 77, '9127-94.pdf', '', 'ГОСТ Р', 0),
(85, 'ИСО-МЭК ТО 9294', 'Рукеоводство по управлению документированием программного обеспечения', 1, 77, '9294-93.pdf', '', 'ГОСТ Р ', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `in_doc`
--

CREATE TABLE IF NOT EXISTS `in_doc` (
  `in_doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_doc_iac` int(11) NOT NULL,
  `in_doc_date_vh` varchar(512) NOT NULL,
  `In_doc_vh` varchar(512) NOT NULL,
  `in_doc_name` varchar(512) NOT NULL,
  `in_doc_from` text NOT NULL,
  `in_doc_date_iac` varchar(512) NOT NULL,
  `in_doc_path` varchar(512) NOT NULL,
  `in_doc_cont` varchar(512) NOT NULL,
  `in_doc_kalina` varchar(512) NOT NULL,
  PRIMARY KEY (`in_doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `in_doc`
--

INSERT INTO `in_doc` (`in_doc_id`, `in_doc_iac`, `in_doc_date_vh`, `In_doc_vh`, `in_doc_name`, `in_doc_from`, `in_doc_date_iac`, `in_doc_path`, `in_doc_cont`, `in_doc_kalina`) VALUES
(1, 1, '1', '7', '7', '7', '7', 'GOST19.106-78.pdf', '7', '7'),
(2, 1, '6', '6', '6', '6', '6', 'GOST19.104-78.pdf', '6', '6'),
(3, 1, '6', '6', '6', '6', '6', 'GOST19.104-78.pdf', '6', '6'),
(4, 1, '1', '1', '1', '1', '1', 'GOST19.404-79.pdf', '1', '1'),
(5, 0, '0', '0', '0', '0', '0', 'GOST19.104-78.pdf', '0', '0'),
(6, 0, '0', '0', '0', '0', '0', 'GOST19.104-78.pdf', '0', '0'),
(7, 7, '7', '7', '7', '7', '7', '', '7', '7'),
(8, 6, '6', '6', '6', '6', '6', '34.201-89.pdf', '6', '6'),
(9, 0, '0', '0', '', '', '0', '', '0', '0'),
(10, 245, '2505', '200', 'Служебка', 'Московский окружной военный суд', '2505', '', '0', '350'),
(11, 245, '25.05.2014', '200', 'Служебка', 'Московский окружной военный суд', '25.05.2014', '', '', '350'),
(12, 0, '25,05,2013', 'вх -33.23.2013', 'Запрос', 'УСД в Москве', '25,05,2313', '', '', '200'),
(13, 0, 'й', 'й', 'й', 'й', 'й', '', 'й', '0'),
(14, 9, '9', '9', '9', '9', '9', '', '9', '9'),
(15, 1, 'ФФФФФФФФФФФФ', 'ФФФФФФФФФФФФ', 'ФФФФФФФФФФФФ', 'ФФФФФФФФФФФФФФФ', 'ФФФФФФФФФФФФФФФФФФФФФФФ', '', 'ФФФФФФФФФФФФФФ', 'ФФФФФФФФФФФФФФФФФФФФФФФФФФФФ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_hash` varchar(512) NOT NULL,
  `user_role` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_hash`, `user_role`) VALUES
(1, 'Admin', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(2, 'User1', 'c81e728d9d4c2f636f067f89cc14862c', 0);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `fav`
--
ALTER TABLE `fav`
  ADD CONSTRAINT `fav_ibfk_4` FOREIGN KEY (`gost_id`) REFERENCES `gost` (`gost_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;