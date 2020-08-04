-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2020 a las 04:48:59
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id` int(20) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Mascota` varchar(20) NOT NULL,
  `Raza` varchar(25) NOT NULL,
  `Edad` varchar(5) NOT NULL,
  `Fecha` int(11) NOT NULL,
  `Observacion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id`, `Nombre`, `Mascota`, `Raza`, `Edad`, `Fecha`, `Observacion`) VALUES
(0, '', 'cosmo', 'gato', '1', 0, 'prueba'),
(0, '100', 'cosmo', 'gato', '1', 0, 'prueba'),
(0, '100', 'cosmo', 'gato', '2 a;o', 20, 'prueba'),
(0, '100', 'cosmo', 'gato', '1 a;o', 20, 'prueba'),
(0, '100', 'cosmo', 'gato', '1 a;o', 20, 'prueba'),
(0, '100', 'cosmo', 'gato', '1 a;o', 20, 'prueba'),
(100, 'pame', 'cosmo', 'gato', '1 a;o', 20, 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cedula` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `telefono` int(50) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `nombre`, `telefono`, `direccion`, `estado`, `rol`, `correo`, `password`) VALUES
(1111, 'Jason', 1111, 'jahkjshk', 'activo', 'adm', 'jasonteto@gmail.com', 'diazarias'),
(1111, 'pame', 1111, 'sdsd', 'activo', '_', 'pameparra@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
