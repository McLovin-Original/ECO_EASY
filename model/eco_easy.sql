-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2017 a las 09:13:24
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eco_easy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `access`
--

CREATE TABLE `access` (
  `acc_token` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usu_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `acc_email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `acc_try` int(1) NOT NULL,
  `acc_session` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `acc_secreto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `acc_estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `acc_pass` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `access`
--

INSERT INTO `access` (`acc_token`, `usu_id`, `acc_email`, `acc_try`, `acc_session`, `acc_secreto`, `acc_estado`, `acc_pass`) VALUES
('83DYC65q9R', 'USUnlIbSUUTfm', 'pablofrg98@gmail.coms', 3, 'Pablo', 'oococ', 'inactivo', '$2y$10$2FOpYO9fnu7walHxIXMXhOstqZytnFCAAgaNcpjSX1H.RB4DkEOsi'),
('ckiP5vglBj', 'USUiidTHMf3KI', 's@as', 3, 's', 's', 'inactivo', '$2y$10$w5UaMq21M8Mi4wsiZQvzDOBCtvSy6Wo1DCxHmqdTE/R3HBWRqL76K'),
('EvlDkbYvR3', 'USUHTDFYaNfRQ', 'tupac@yiyi', 3, 'tupaco', 'pa', 'inactivo', '$2y$10$Ul1JDoQpR9VA4N/tqmSCXePcbbjjJmIqoSnljvJ2VSq1ir3HScAP2'),
('fEDpQDHZ4V', 'USUButa25mPQn', 'jpres@gmail.com', 3, 'pablo', 'pablo', 'inactivo', '$2y$10$5acW15riSCGk6A3bsIRG9Oz/r2h3SvZYlKdQMiI4Tbf.PeAqfGbvy'),
('KjnACL7aTc', 'USUKPYxZtDMOi', 'jprestrepo94@misena.edu.co', 3, 'Juan', 'pablo12', 'inactivo', '$2y$10$HEzkVrLFa6dBbc5gd.BqFeDKEE/.5eWu/hYYyrKYMPKa6jUw9Isvy'),
('KLDqx9hi3O', 'USUeJzYArbZp6', 'pierre@gmail.com', 3, 'Pierre', 'pac12', 'inactivo', '$2y$10$3zMhSzosMQa3OdEmRW5BFe42faWv2UiZb6FAd/zlrLVvS3I3vXipS'),
('mGZllV0oBO', 'USULGMMhMAOfp', 'e@e', 3, 'w', 'e', 'inactivo', '$2y$10$GG8.LzMD5YPxG/cQ7LlbweRYwyQOSrl.ojrdNwYnL3YR.xl4DQCeO'),
('pFPVdjnZIp', 'USUNNtk2y2D4k', 'a@ssss', 3, 'Juan', 'x', 'inactivo', '$2y$10$wAMo3wcQ6v91FbBvzZd2V.YkNKxUSdbn5D1eSuRH3wxO03ZSXbcde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campaña`
--

CREATE TABLE `campaña` (
  `camp_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usu_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `camp_foto` longtext COLLATE utf8_spanish_ci,
  `camp_titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `camp_descrip` longtext COLLATE utf8_spanish_ci NOT NULL,
  `camp_fecha` date NOT NULL,
  `camp_direc` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `camp_comen` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `camp_estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `campaña`
--

INSERT INTO `campaña` (`camp_id`, `usu_id`, `camp_foto`, `camp_titulo`, `camp_descrip`, `camp_fecha`, `camp_direc`, `camp_comen`, `camp_estado`) VALUES
('87EJrg1Oy5', 'USUButa25mPQn', 'w', 'w', 'w', '2015-12-02', 'ss', 'sswww', 0),
('hZromnvaPz', 'USUnlIbSUUTfm', 'aa', 'aaaaaaass', 'aaaaaa', '0000-00-00', '2017-04-11', 'xwwww', 1),
('kFmIHuvtsB', 'USUNNtk2y2D4k', 's', 's', 's', '0000-00-00', '2017-04-20', 'ww', 0),
('VF2140jLj0', 'USUnlIbSUUTfm', 'URL:2550', 'Fiesta Edison', 'es puro vicio con salgado', '2017-04-13', 'crrrr', 'no se ', 0),
('zE01mResfz', 'USUiidTHMf3KI', 'wwwwwwwwwwww', 'pierre', 'a', '0021-05-09', '55', '55', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `foro_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `foro_titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `foro_descrip` longtext COLLATE utf8_spanish_ci,
  `foro_comen` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `foro_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localizacion`
--

CREATE TABLE `localizacion` (
  `loc_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `loc_direc` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `loc_barrio` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `localizacion`
--

INSERT INTO `localizacion` (`loc_id`, `loc_direc`, `loc_barrio`) VALUES
('ADSADSDSDFsacxghgh544', 'Cr 50a #41 -61', 'San jose'),
('bhkghkh5247', 'cr41a #33 - 44', 'la cruz'),
('DDXJHTDJASDass2365', 'cr 42 #37 - 42', 'san jose'),
('HVGKUCKIYDv8878', 'cr 39a #34-41', 'los naranjos'),
('JGUDFJYRSXUJTD8878', 'cr 54a #58 - 44', 'el rosario'),
('JHFCTSXHR233', 'cr 46a #46 - 11', 'Asturias'),
('JHFUTFKG988', 'cr39a #44 - 12', 'san isidro'),
('KHYFKGCKJCKUTX9887', 'cr 38a #35-31', 'las mercedes'),
('KUITJGCJG6685', 'cr 56a #48 - 42', 'villa paula'),
('OUTIHVK666', 'cr 29a "38 - 42', 'Artex'),
('POLFSTZ123', 'cr 42a #32 - 45', 'Araucaria'),
('TWEIWVJHfhcvuy544', 'cr 36a #38 - 22', 'playa rica'),
('YFKUTSDHGDSX554', 'cr 37a #45 - 54', 'la independencia'),
('YJCGTYUTRHF8874', 'cr39a #29 - 30', 'san isidro'),
('YTEUTRSTR5545', 'cr 37a #50 - 41', 'satexto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `notc_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `notc_titulo` longtext COLLATE utf8_spanish_ci NOT NULL,
  `notc_ulr` longtext COLLATE utf8_spanish_ci NOT NULL,
  `notc_autor` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `notc_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`notc_id`, `notc_titulo`, `notc_ulr`, `notc_autor`, `notc_estado`) VALUES
('JHFKTCYJF657', 'Se mejorarán planes de emergencia por el aire en el valle de Aburrá', 'http://www.eltiempo.com/colombia/medellin/se-mejoraran-planes-de-emergencia-por-el-aire-82220', 'Jaiver Nieto', 0),
('KFGUTFUYF9764', '\r\nPor primera vez en el país nacen más de 1.900 animales que estaban en vía de extinción', 'http://www.elespectador.com/noticias/medio-ambiente/por-primera-vez-en-el-pais-nacen-mas-de-1900-animales-que-estaban-en-de-extincion-articulo-690835', 'Teresita Del Niño Jesús Alzate Yepes', 0),
('KFTDCYTF6453', 'Colombia hace parte de la mitad del mundo amenazada por la escasez de agua', 'http://blogs.elespectador.com/actualidad/el-rio/colombia-parte-la-mitad-del-mundo-amenazada-la-escasez-agua', 'María Paula Rubiano', 0),
('KHGFTDYUDF976', 'Endesa no tiene prisa en que cierren las nucleares\r\n\r\n', 'http://www.ecoticias.com/sostenibilidad/135369/Endesa-no-tiene-prisa-en-que-cierren-las-nucleares', 'Alex Tintor', 0),
('KHGKUJCIUF97573', '“El Magdalena está llegando al punto de no retorno de contaminación”', 'http://blogs.elespectador.com/actualidad/el-rio/magdalena-esta-llegando-al-punto-no-retorno-contaminacion', 'María Paula Rubiano', 0),
('ZBVXNXNX754', 'Energía solar comienza a brillar en Antioquia', 'http://www.eltiempo.com/colombia/medellin/antioquia-le-apuesta-a-la-energia-solar-80708', 'David Alejandro Mercado', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privacidad`
--

CREATE TABLE `privacidad` (
  `pri_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pri_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pri_tipo` tinyint(1) NOT NULL,
  `pri_descripcion` longtext COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recoleccion`
--

CREATE TABLE `recoleccion` (
  `rec_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `rec_dnm` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rec_tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rec_hora` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `loc_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `recoleccion`
--

INSERT INTO `recoleccion` (`rec_id`, `rec_dnm`, `rec_tipo`, `rec_hora`, `loc_id`) VALUES
('CKHFJHXJTD23662', 'martes, jueves, sabados', 'reciclaje, colchón, cajones', '7:00am a 2:00pm', 'POLFSTZ123'),
('HIYFUTCVLKFIyfiftuy9977', 'martes, jueves, sabados', 'reciclaje, colchón, cajones', '7:00pm a 2:00am', 'bhkghkh5247'),
('IUTTUGtyuydrgño87r852', 'lunes,miercoles,viernes', 'reciclaje, colchón, cajones', '7:00pm a 2:00am', 'DDXJHTDJASDass2365'),
('IUYKGILYFlvil8898', 'martes, jueves, sabados', 'reciclaje, colchón, cajones', '7:00pm a 2:00am', 'YJCGTYUTRHF8874'),
('IUYUTEDFKCFGHCjcyjx 88474', 'lunes, miercoles, viernes', 'reciclaje, colchón, cajones', '7:00pm a 2:00am', 'JHFUTFKG988'),
('JHYDJCKUFVOkufiy887', 'martes, jueves, sabados', 'reciclaje, colchón, cajones', '7:00pm a 2:00m', 'ADSADSDSDFsacxghgh544'),
('JYFRHGCKUYdckfiuyu9998', 'martes, jueves, sabados', 'reciclaje, colchón, cajones', '7:00pm a 2:00am', 'YFKUTSDHGDSX554'),
('JYGFJHFKIYVF6554', 'martes, jueves, sabados', 'reciclaje, colchón, cajones', '7:00pm a 2:00am', 'YTEUTRSTR5545'),
('KHGFUKTCDUTKDCYf098764', 'lunes,miercoles,viernes', 'reciclaje, colchón, cajones', '7:00pm a 2:00am', 'JGUDFJYRSXUJTD8878'),
('KHGLIYHVJLGfkjhcil99871', 'martes, jueves, sabados', 'reciclaje, colchón, cajones', '7:00pm a 2:00am', 'OUTIHVK666'),
('KU6YRIU6TRTYGCDGHCJTY08788', 'lunes, miércoles, viernes', 'reciclaje, colchón, cajones', '7:00pm a 2:00am', 'TWEIWVJHfhcvuy544'),
('LIYFRKHGCKTD646', 'martes, jueves, sabados', 'reciclaje, colchón, cajones', '7:00pm a 2:00am', 'HVGKUCKIYDv8878'),
('LIYGYUCVFTUD435', 'lunes,miércoles,viernes', 'reciclaje, colchón, cajones', '7:00pm a 2:00am', 'KHYFKGCKJCKUTX9887'),
('RUTRYUIRRO664', 'lunes,miercoles,viernes', 'reciclaje, colchón, cajones', '7:00am a 2:00pm', 'JHFCTSXHR233'),
('UTUYvftudyc8565', 'lunes,miercoles,viernes', 'reciclaje, colchón, cajones', '7:00pm a 2:00am', 'KUITJGCJG6685');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `rol_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rol_descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `rol_name`, `rol_descripcion`) VALUES
('6fKTHzZa4U', 'Usuario', 'Hace poco'),
('N7yNUADZJK', 'ww', 'aww'),
('pT8PsEGeDj', 'Administrador', 'Gestiona el aplicativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usu_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `loc_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usu_años` date DEFAULT NULL,
  `pri_id` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_nombre`, `loc_id`, `usu_años`, `pri_id`, `rol_id`) VALUES
('USUButa25mPQn', 'pablo', 'ADSADSDSDFsacxghgh544', NULL, NULL, '6fKTHzZa4U'),
('USUeJzYArbZp6', 'Pierre', 'KUITJGCJG6685', NULL, NULL, 'pT8PsEGeDj'),
('USUHTDFYaNfRQ', 'tupaco', 'bhkghkh5247', NULL, NULL, 'pT8PsEGeDj'),
('USUiidTHMf3KI', 's', 'JHFUTFKG988', NULL, NULL, '6fKTHzZa4U'),
('USUKPYxZtDMOi', 'Juan', 'HVGKUCKIYDv8878', NULL, NULL, '6fKTHzZa4U'),
('USULGMMhMAOfp', 'w', 'YTEUTRSTR5545', NULL, NULL, '6fKTHzZa4U'),
('USUnlIbSUUTfm', 'Pablo', 'JGUDFJYRSXUJTD8878', NULL, NULL, 'pT8PsEGeDj'),
('USUNNtk2y2D4k', 'Juan', 'ADSADSDSDFsacxghgh544', NULL, NULL, '6fKTHzZa4U');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`acc_token`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `campaña`
--
ALTER TABLE `campaña`
  ADD PRIMARY KEY (`camp_id`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`foro_id`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `localizacion`
--
ALTER TABLE `localizacion`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`notc_id`);

--
-- Indices de la tabla `privacidad`
--
ALTER TABLE `privacidad`
  ADD PRIMARY KEY (`pri_id`);

--
-- Indices de la tabla `recoleccion`
--
ALTER TABLE `recoleccion`
  ADD PRIMARY KEY (`rec_id`),
  ADD KEY `loc_id` (`loc_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `pri_id` (`pri_id`),
  ADD KEY `loc_id` (`loc_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `access`
--
ALTER TABLE `access`
  ADD CONSTRAINT `access_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `campaña`
--
ALTER TABLE `campaña`
  ADD CONSTRAINT `campaña_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `foro`
--
ALTER TABLE `foro`
  ADD CONSTRAINT `foro_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usu_id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `recoleccion`
--
ALTER TABLE `recoleccion`
  ADD CONSTRAINT `recoleccion_ibfk_1` FOREIGN KEY (`loc_id`) REFERENCES `localizacion` (`loc_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`pri_id`) REFERENCES `privacidad` (`pri_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`loc_id`) REFERENCES `localizacion` (`loc_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
