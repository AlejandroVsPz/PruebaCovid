-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-11-2021 a las 20:37:14
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `SimuladorCovid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sintomas`
--

CREATE TABLE `Sintomas` (
  `resultado_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `user_lastname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `fiebre` tinyint(1) DEFAULT NULL,
  `tos` tinyint(1) DEFAULT NULL,
  `perdida_de_olfato` tinyint(1) DEFAULT NULL,
  `dificultad_para_respirar` tinyint(1) DEFAULT NULL,
  `dolores_musculares` tinyint(1) DEFAULT NULL,
  `dolor_de_cabeza` tinyint(1) DEFAULT NULL,
  `dolor_de_garganta` tinyint(1) DEFAULT NULL,
  `dolor_torax` int(11) DEFAULT NULL,
  `diarrea` tinyint(1) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `estatura` float DEFAULT NULL,
  `temperatura` float DEFAULT NULL,
  `nivel_de_oxigeno` float DEFAULT NULL,
  `presion_arterial` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `imc` float DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `sintomas_relacionados` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `Sintomas`
--

INSERT INTO `Sintomas` (`resultado_id`, `user_id`, `user_name`, `user_lastname`, `fiebre`, `tos`, `perdida_de_olfato`, `dificultad_para_respirar`, `dolores_musculares`, `dolor_de_cabeza`, `dolor_de_garganta`, `dolor_torax`, `diarrea`, `edad`, `peso`, `estatura`, `temperatura`, `nivel_de_oxigeno`, `presion_arterial`, `imc`, `fecha`, `sintomas_relacionados`) VALUES
(9, 12, 'Alejandro ', 'Vargas P&eacute;rez', 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 70, 1.67, 37, 96, '120/80', 25.0995, NULL, NULL),
(10, 12, 'Alejandro ', 'Vargas P&eacute;rez', 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 72, 1.68, 38, 96, '120/80', 25.5102, NULL, NULL),
(11, 12, 'Alejandro ', 'Vargas P&eacute;rez', 1, 1, 1, 0, 0, 0, 0, 0, 0, 25, 68, 1.68, 36.9, 96, '120/80', 24.093, NULL, NULL),
(12, 12, 'Alejandro ', 'Vargas P&eacute;rez', 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 75, 1.67, 38, 96, '120/80', 26.8923, NULL, '0'),
(13, 12, 'Alejandro ', 'Vargas P&eacute;rez', 1, 1, 1, 1, 0, 1, 0, 0, 0, 25, 70, 1.7, 38, 93, '120/80', 24.2215, '2021-11-16 04:34:02', '1'),
(14, 12, 'Alejandro ', 'Vargas P&eacute;rez', 1, 0, 0, 0, 0, 0, 0, 0, 0, 25, 78, 1.63, 38, 96, '120/80', 29.3575, '2021-11-15 21:36:21', '0'),
(15, 13, 'iker', 'vargas', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 65, 1.68, 38, 96, '120/80', 23.03, '2021-11-15 23:57:54', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `User`
--

CREATE TABLE `User` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `user_lastname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `user_email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `user_password` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `user_phone` double DEFAULT NULL,
  `user_adress` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `user_birthday` date DEFAULT NULL,
  `user_image` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Sintomas`
--
ALTER TABLE `Sintomas`
  ADD PRIMARY KEY (`resultado_id`);

--
-- Indices de la tabla `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Sintomas`
--
ALTER TABLE `Sintomas`
  MODIFY `resultado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `User`
--
ALTER TABLE `User`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
