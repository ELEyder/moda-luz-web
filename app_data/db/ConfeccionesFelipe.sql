-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2023 a las 03:20:42
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `confeccionesFelipe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Prenda`
--

CREATE TABLE `Prenda` (
  `IdProducto` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Precio` double(10,2) NOT NULL,
  `Descripcion` varchar(250) DEFAULT 'undefined',
  `Existe` boolean DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Prenda`
--

INSERT INTO `Prenda` (`IdProducto`, `Nombre`, `Precio`, `Descripcion` ) VALUES
(1, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(2, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(3, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(4, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(5, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(6, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(7, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(8, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(9, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(10, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(11, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(12, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(13, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(14, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(15, 'Polo Simple Cuello Redondo', 39.50, 'undefined'),
(16, 'Polo Simple Cuello Redondo', 39.50, 'undefined');

-- --------------------------------------------------------
CREATE TABLE `Categoria` (
  `IdCategoria` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `Categoria` (`IdCategoria`, `Nombre`) VALUES
(1, 'Unisex');

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `IdUsuario` int(10) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Numero` varchar(10) NOT NULL,
  `Contrasena` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Prenda`
--
ALTER TABLE `Prenda`
  ADD PRIMARY KEY (`IdProducto`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`IdUsuario`);

ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`IdCategoria`);
--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Prenda`
--
ALTER TABLE `Prenda`
  MODIFY `IdPrenda` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `IdUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
ALTER TABLE `Categoria`


  MODIFY `IdCategoria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
