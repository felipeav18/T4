-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2024 a las 04:49:51
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compania`
--

CREATE TABLE `compania` (
  `nombre` varchar(75) DEFAULT NULL,
  `Edad` int(100) DEFAULT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `VIP` text DEFAULT NULL,
  `Provincia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compania`
--

INSERT INTO `compania` (`nombre`, `Edad`, `Direccion`, `Fecha`, `VIP`, `Provincia`) VALUES
('marlen2', 23, '', '2017-10-17', 'si', 'Bilbao'),
('hugo', 22, '', '1995-10-20', 'si', 'Madrid'),
('marcela  ', 21, '', '1996-10-13', 'si', 'Sevilla'),
('rocky', 18, '', '2024-11-05', 'si', 'Bilbao'),
('sebastian gachancipa', 15, 'calle 89', '2024-11-07', 'si', 'Madrid'),
('paola', 34, 'calle45', '2024-11-19', 'no', 'Barcelona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(28, 'nidia', '$2y$10$mYpemc9nVcZIzZi8nW3XMOsL.efutq0GG1qt/VyKr63Z2F8ucE47C'),
(29, 'julian', '$2y$10$fbXYcSlMhT4GV8qBX2piSuXKWtt9ph4jXoQGDI7LgpcIjOjH3w1a.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
