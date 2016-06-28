-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2016 a las 01:23:51
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `pel_id` int(11) NOT NULL,
  `pel_titulo` varchar(500) NOT NULL,
  `pel_anio` int(11) NOT NULL,
  `pel_director` int(11) NOT NULL,
  `pel_fregistro` date NOT NULL,
  `pel_sinopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_login` varchar(50) NOT NULL,
  `usu_nombre` varchar(500) NOT NULL,
  `usu_pass` varchar(50) NOT NULL,
  `usu_apellidop` varchar(500) NOT NULL,
  `usu_apellidom` varchar(500) NOT NULL,
  `usu_fnacimiento` date NOT NULL,
  `usu_fcreacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_login`, `usu_nombre`, `usu_pass`, `usu_apellidop`, `usu_apellidom`, `usu_fnacimiento`, `usu_fcreacion`) VALUES
(1, 'admin', 'bryan', 'pass', 'Ramirez', 'Chavez', '1992-04-15', '2016-05-25'),
(2, 'bramirez', 'Omar', '123456', 'Ramirez', 'Chavez', '1992-04-15', '2016-05-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD UNIQUE KEY `pel_id` (`pel_id`),
  ADD KEY `pel_id_2` (`pel_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `usu_id` (`usu_id`),
  ADD KEY `usu_id_2` (`usu_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
