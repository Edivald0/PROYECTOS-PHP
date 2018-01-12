-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2017 a las 01:20:59
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conexion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexion1`
--

CREATE TABLE `conexion1` (
  `id` int(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidom` varchar(50) NOT NULL,
  `apellidop` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conexion1`
--

INSERT INTO `conexion1` (`id`, `nombre`, `apellidom`, `apellidop`, `correo`, `password`) VALUES
(9, 'emma', 'ortega', 'moreno', 'emma@gmail.com', '123456789'),
(13, 'Carlos', 'miranda', 'Martinez', 'carlos@gmail.com', '654321|'),
(14, 'Carlos', 'admin', 'Martinez', 'carlos@gmail.com', 'temporal'),
(16, 'Nestor', 'Ortega', 'Moreno', 'nestor@gmail.com', 'nestormoreno'),
(17, 'Rufino', 'Ortega', 'Moreno', 'rufino@gmail.com', 'rufinomoreno'),
(18, 'Rufino', 'Ortega', 'Moreno', 'nelson@gmail.com', ''),
(20, 'Edivaldo', 'Moreno', 'MartÃ­nez', 'edigmail.com', '0987654321');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conexion1`
--
ALTER TABLE `conexion1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conexion1`
--
ALTER TABLE `conexion1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
