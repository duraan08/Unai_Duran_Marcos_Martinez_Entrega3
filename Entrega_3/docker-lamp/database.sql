-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 19-12-2021 a las 13:37:43
-- Versión del servidor: 10.6.4-MariaDB-1:10.6.4+maria~focal
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexiones`
--

CREATE TABLE `conexiones` (
  `MAIL` varchar(50) NOT NULL,
  `FECHA` datetime NOT NULL,
  `CONEXION` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conexiones`
--

INSERT INTO `conexiones` (`MAIL`, `FECHA`, `CONEXION`) VALUES
('marcos@gmail.com', '2021-11-24 17:23:01', 'T'),
('inaki321@gmail.com', '2021-11-24 17:23:41', 'F'),
('paco@paco.es', '2021-11-24 17:25:26', 'F'),
('marcos@gmail.com', '2021-11-24 17:29:49', 'F'),
('marcos@gmail.com', '2021-11-24 17:39:02', 'T'),
('siuuuuuuuuu@messi.goldenboy', '2021-11-24 18:08:58', 'T'),
('marcos@gmail.com', '2021-11-25 11:31:34', 'T'),
('marcos@gmail.com', '2021-11-25 11:34:15', 'F'),
('unai@gmail.com', '2021-12-09 10:37:22', 'F'),
('marcos@gmail.com', '2021-12-09 10:37:55', 'F'),
('marcos@gmail.com', '2021-12-09 11:03:48', 'F'),
('unai@gmail.com', '2021-12-09 11:04:47', 'T'),
('unai@gmail.com', '2021-12-09 11:06:25', 'T'),
('esti@gmail.com', '2021-12-09 11:06:33', 'F'),
('unai@gmail.com', '2021-12-09 11:06:45', 'T'),
('unai@gmail.com', '2021-12-09 11:21:09', 'T'),
('unai@gmail.com', '2021-12-09 11:22:01', 'T'),
('unai@gmail.com', '2021-12-09 11:33:58', 'T'),
('esti@gmail.com', '2021-12-12 15:25:58', 'F'),
('alain.duran@gmail.com', '2021-12-12 15:30:58', 'F'),
('alain.duran@gmail.com', '2021-12-12 15:31:45', 'T'),
('alain.duran@gmail.com', '2021-12-12 15:36:51', 'F'),
('alain.duran@gmail.com', '2021-12-12 15:44:17', 'T'),
('alain.duran@gmail.com', '2021-12-12 15:49:25', 'T'),
('alain.duran@gmail.com', '2021-12-12 16:07:38', 'F'),
('alain.duran@gmail.com', '2021-12-12 16:07:45', 'F'),
('unai@gmail.com', '2021-12-12 16:08:27', 'T'),
('unai@gmail.com', '2021-12-12 16:09:00', 'F'),
('unai@gmail.com', '2021-12-12 16:11:01', 'F'),
('unai@gmail.com', '2021-12-12 16:11:47', 'F'),
('unai@gmail.com', '2021-12-12 16:11:58', 'F'),
('unai@gmail.com', '2021-12-12 16:12:45', 'F'),
('unai@gmail.com', '2021-12-12 16:12:53', 'F'),
('unai@gmail.com', '2021-12-12 16:14:03', 'F'),
('unai@gmail.com', '2021-12-12 16:14:09', 'F'),
('alain@gmail.com', '2021-12-12 16:21:02', 'T'),
('alain.duran@gmail.com', '2021-12-12 16:21:24', 'F'),
('alain.duran@gmail.com', '2021-12-12 16:21:37', 'F'),
('alain.duran@gmail.com', '2021-12-12 16:22:10', 'F'),
('alain@gmail.com', '2021-12-12 16:29:24', 'T'),
('alain@gmail.com', '2021-12-12 16:30:13', 'F'),
('alain@gmail.com', '2021-12-12 16:30:21', 'T'),
('alain@gmail.com', '2021-12-12 16:30:50', 'T'),
('unai@gmail.com', '2021-12-18 12:10:05', 'F'),
('alain@gmail.com', '2021-12-18 12:10:56', 'T'),
('alain@gmail.com', '2021-12-18 12:11:24', 'F'),
('alain@gmail.com', '2021-12-18 12:11:39', 'T'),
('unai@gmail.com', '2021-12-18 12:24:37', 'T'),
('unai@gmail.com', '2021-12-18 12:26:42', 'T'),
('marcos@gmail.com', '2021-12-18 12:30:39', 'T'),
('unai@gmail.com', '2021-12-19 13:13:03', 'T'),
('unai.duran@gmail.com', '2021-12-19 13:13:41', 'T'),
('unai.duran@gmail.com', '2021-12-19 13:14:27', 'F'),
('unai.duran@gmail.com', '2021-12-19 13:15:19', 'T'),
('unai@gmail.com', '2021-12-19 13:15:41', 'F'),
('alain@gmail.com', '2021-12-19 13:17:30', 'F'),
('alain@gmail.com', '2021-12-19 13:17:37', 'T'),
('alain@gmail.com', '2021-12-19 13:18:09', 'T'),
('unai.duran@gmail.com', '2021-12-19 13:18:24', 'F'),
('unai.duran@gmail.com', '2021-12-19 13:19:20', 'T'),
('unai.duran@gmail.com', '2021-12-19 13:19:47', 'T'),
('unai.duran@gmail.com', '2021-12-19 13:22:15', 'T'),
('unai.duran@gmail.com', '2021-12-19 13:24:41', 'T'),
('unai.duran@gmail.com', '2021-12-19 13:25:49', 'T'),
('unai.duran@gmail.com', '2021-12-19 13:27:12', 'T'),
('unai.duran@gmail.com', '2021-12-19 13:32:57', 'T'),
('unai.duran@gmail.com', '2021-12-19 13:34:23', 'T'),
('unai.duran@gmail.com', '2021-12-19 13:35:38', 'T'),
('unai.duran@gmail.com', '2021-12-19 13:36:07', 'F'),
('unai.duran@gmail.com', '2021-12-19 13:36:22', 'F'),
('unai.duran@gmail.com', '2021-12-19 13:36:39', 'F'),
('unai.duran@gmail.com', '2021-12-19 13:37:21', 'T');

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
  `PASS` varchar(50) DEFAULT NULL,
  `BANCO` varchar(200) DEFAULT NULL,
  `SALT` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`NOMBRE`, `APELLIDOS`, `DNI`, `TELEFONO`, `FECHA_NACIMIENTO`, `DIRECCION`, `MAIL`, `PASS`, `BANCO`, `SALT`) VALUES
('Alain', 'Duran Arce', '42777481B', 123456789, '2021-12-10', 'SANI', 'alain@gmail.com', 'UTBQaHNDVFpHamQ2TDhWbE00KzF5UT09', 'K1BEQnh6SHc3aFFsSE5nNmJaL0U2RzRsMUJjWGlVVUxMbXZBd3RwYUxsND0=', 'hQ8nsTZrUl'),
('Marcos', 'Martinez ', '12345678Z', 678098123, '2021-12-10', 'Artxanda', 'marcos@gmail.com', 'Y2FTTG5pUDBXMnQ4WEp2SUNYZnYxZz09', 'cmt4L0Fyb1lMdHZzOHdCOEoyUXFjeXlSOStGL3VHbjROUlJ5ZUxxQkllbz0=', 'CTVKkRzFvO'),
('Unai', 'Duran Arce', '79266785E', 688822414, '2001-04-08', 'Juan de Antxeta 12, 1E', 'unai.duran@gmail.com', 'RThwbEg3MjBrVzlsVVlqZ24wRE5vZz09', 'YUlFQzlmaDkydzI3QjMwWDE1Tjc3MVhsRjVHNW8vRDE2c3V0NWJHckwzVT0=', 'qYGDK14sBl');

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
('marcos@gmail.com', 'Ghana', 'Neptuno', '2021-12-17', '2021-12-08', 25),
('unai.duran@gmail.com', 'España', 'Sol', '2021-12-09', '2021-12-15', 26);

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
  MODIFY `ID_VIAJE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
