-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2024 a las 16:47:08
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `modaluz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `IdCarrito` int(25) NOT NULL,
  `IdUsuario` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `IdCategoria` int(5) NOT NULL,
  `NombreCategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`IdCategoria`, `NombreCategoria`) VALUES
(1, 'Polo'),
(2, 'Polera'),
(3, 'Vestido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecarrito`
--

CREATE TABLE `detallecarrito` (
  `IdDetalle` int(25) NOT NULL,
  `IdCarrito` int(25) NOT NULL,
  `IdPrenda` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prenda`
--

CREATE TABLE `prenda` (
  `IdPrenda` int(25) NOT NULL,
  `NombrePrenda` varchar(50) NOT NULL,
  `Precio` double(10,2) NOT NULL,
  `Descripcion` varchar(250) DEFAULT 'undefined',
  `IdSexo` int(2) NOT NULL,
  `IdCategoria` int(5) NOT NULL,
  `Imagen` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prenda`
--

INSERT INTO `prenda` (`IdPrenda`, `NombrePrenda`, `Precio`, `Descripcion`, `IdSexo`, `IdCategoria`, `Imagen`) VALUES
(1, 'Polo Overside', 39.50, 'undefined', 3, 1, 'polo-overside'),
(2, 'Polo One Piece', 39.50, 'undefined', 3, 1, 'polo-one-piece'),
(3, 'Polo Monkey D. Luffy', 39.50, 'undefined', 3, 1, 'polo-monkey-d-luffy'),
(4, 'Polo Roronoa Zoro', 39.50, 'undefined', 3, 1, 'polo-roronoa-zoro'),
(5, 'Polo Nami', 39.50, 'undefined', 3, 1, 'polo-nami'),
(6, 'Polo Mob Psycho', 39.50, 'undefined', 3, 1, 'polo-mob-psycho'),
(7, 'Polera Con Capucha', 49.50, 'undefined', 3, 2, 'polera-con-capucha'),
(8, 'Vestido Con Patrones', 99.50, 'undefined', 3, 3, 'vestido-con-patrones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `IdRol` int(3) NOT NULL,
  `NombreRol` varchar(45) NOT NULL DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`IdRol`, `NombreRol`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `IdSexo` int(2) NOT NULL,
  `NombreSexo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`IdSexo`, `NombreSexo`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'Unisex');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(10) NOT NULL,
  `IdRol` int(3) NOT NULL DEFAULT 2,
  `Nombres` varchar(20) NOT NULL,
  `Apellidos` varchar(20) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contrasena` varchar(300) NOT NULL,
  `Telefono` int(50) DEFAULT NULL,
  `imagen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `IdRol`, `Nombres`, `Apellidos`, `Correo`, `Contrasena`, `Telefono`, `imagen`) VALUES
(1, 2, 'Tilin', 'Nazo', 'anya@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, ''),
(2, 2, 'Aña', 'xdd', 'asd@gmail.com', 'd5f12e53a182c062b6bf30c1445153faff12269a', 999555444, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`IdCarrito`),
  ADD UNIQUE KEY `IdCarrito_UNIQUE` (`IdCarrito`),
  ADD KEY `IdUsuario_idx` (`IdUsuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`IdCategoria`);

--
-- Indices de la tabla `detallecarrito`
--
ALTER TABLE `detallecarrito`
  ADD PRIMARY KEY (`IdDetalle`),
  ADD KEY `IdCarrito_idx` (`IdCarrito`),
  ADD KEY `IdPrenda_idx` (`IdPrenda`);

--
-- Indices de la tabla `prenda`
--
ALTER TABLE `prenda`
  ADD PRIMARY KEY (`IdPrenda`),
  ADD KEY `IdSexo_idx` (`IdSexo`),
  ADD KEY `IdCategoria_idx` (`IdCategoria`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`IdSexo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `IdUsuario_UNIQUE` (`IdUsuario`),
  ADD UNIQUE KEY `Correo_UNIQUE` (`Correo`),
  ADD KEY `IdRol_idx` (`IdRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `IdUsuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detallecarrito`
--
ALTER TABLE `detallecarrito`
  ADD CONSTRAINT `IdCarrito` FOREIGN KEY (`IdCarrito`) REFERENCES `carrito` (`IdCarrito`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `IdPrenda` FOREIGN KEY (`IdPrenda`) REFERENCES `prenda` (`IdPrenda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prenda`
--
ALTER TABLE `prenda`
  ADD CONSTRAINT `IdCategoria` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`IdCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `IdSexo` FOREIGN KEY (`IdSexo`) REFERENCES `sexo` (`IdSexo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `IdRol` FOREIGN KEY (`IdRol`) REFERENCES `rol` (`IdRol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
