-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2020 a las 16:24:02
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuarios`
--

CREATE TABLE IF NOT EXISTS `datos_usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Apellido` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Direccion` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `datos_usuarios`
--

INSERT INTO `datos_usuarios` (`Id`, `Nombre`, `Apellido`, `Direccion`) VALUES
(1, 'Ana', 'López', 'Gran Vía, 34'),
(2, 'Antonio', 'López', 'Príncipe de Bergara'),
(3, 'Sarah', 'Connor', 'California'),
(4, 'Analfalfo', 'Gutierrez', 'Gran Cuesta'),
(5, 'Sarah', 'Connor', 'Marte,1 Bis'),
(6, 'Jacinto', 'Benavente', 'Serrano, 18'),
(8, 'Astrucio', 'Geméz', 'Puerto Dptivo, 4'),
(9, 'Lady', 'Connor', 'California'),
(10, 'Sarah', 'López', 'California'),
(11, 'Sarah', 'Martínez', 'Marte,1 Bis 2 A'),
(17, 'Gustavo', 'Gutierrez', 'Bermudas, 3'),
(18, 'Anastasio', 'Bermudez', 'Serrano, 18'),
(19, 'Pepe', 'Palo', 'Av Grande, 56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
