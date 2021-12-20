-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2021 a las 11:41:54
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galacticos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDOS` varchar(50) DEFAULT NULL,
  `DNI` varchar(9) DEFAULT NULL,
  `TELEFONO` int(11) DEFAULT NULL,
  `FECHA_NACIMIENTO` date DEFAULT NULL,
  `DIRECCION` varchar(100) DEFAULT NULL,
  `MAIL` varchar(50) NOT NULL,
  `PASS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`NOMBRE`, `APELLIDOS`, `DNI`, `TELEFONO`, `FECHA_NACIMIENTO`, `DIRECCION`, `MAIL`, `PASS`) VALUES
('Marcos', 'Fernandito Malamanera', '79175585V', 111111111, '2021-11-20', 'España', 'marcos@gmail.com', '7777777'),
('Paquita ', 'Salas Contreras', '78944980X', 666777999, '2012-10-21', 'Madrid', 'paquita@gmail.com', '123456'),
('Rayo', 'McQueen ', '12345678Z', 555666777, '2000-02-19', 'Copa Piston', 'rayito@gmail.com', '00000000'),
('Unai', 'Duran Arce', '79266785E', 688822414, '2001-04-08', 'San Ignacio', 'unai@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

CREATE TABLE `viaje` (
  `USUARIO` varchar(50) NOT NULL,
  `ORIGEN` varchar(50) DEFAULT NULL,
  `DESTINO` varchar(50) DEFAULT NULL,
  `FECHA_INICIO` date DEFAULT NULL,
  `FECHA_FIN` date DEFAULT NULL,
  `ID_VIAJE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `viaje`
--

INSERT INTO `viaje` (`USUARIO`, `ORIGEN`, `DESTINO`, `FECHA_INICIO`, `FECHA_FIN`, `ID_VIAJE`) VALUES
('unai@gmail.com', 'España', 'Sol', '2021-10-22', '2021-12-23', 8),
('unai@gmail.com', 'Bilbao', 'Urano', '2021-10-31', '2021-11-01', 9),
('unai@gmail.com', 'Bilbao', 'Urano', '2021-10-31', '2021-11-01', 10),
('marcos@gmail.com', 'Ecuador', 'Tierra', '2021-10-24', '2021-10-20', 14),
('paquita@gmail.com', 'Urzikistan', 'Urano', '2001-12-20', '2021-10-31', 15),
('marcos@gmail.com', 'Alemania', 'Mercurio', '2021-10-23', '2001-01-01', 16),
('rayito@gmail.com', 'España', 'Marte', '2021-10-20', '2021-10-20', 19);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`MAIL`),
  ADD UNIQUE KEY `DNI` (`DNI`);

--
-- Indices de la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD PRIMARY KEY (`ID_VIAJE`),
  ADD KEY `USUARIO` (`USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `viaje`
--
ALTER TABLE `viaje`
  MODIFY `ID_VIAJE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD CONSTRAINT `viaje_ibfk_1` FOREIGN KEY (`USUARIO`) REFERENCES `usuario` (`MAIL`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
