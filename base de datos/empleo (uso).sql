-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2017 a las 03:21:26
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empleo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `id_apre` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `identificacion` int(10) NOT NULL,
  `area` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `contrasena` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`id_apre`, `nombre`, `apellido`, `identificacion`, `area`, `correo`, `contrasena`) VALUES
(4, 'neffer', 'torrenegra', 1234567890, 'adsi', 'neffer@misena', '1234'),
(5, 'santiago', 'torrenegra', 123456789, 'mantenimiento', 'santiago@misena', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_emp` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `nit` int(10) NOT NULL,
  `razon_social` varchar(20) NOT NULL,
  `rep_legal` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_emp`, `tipo`, `nit`, `razon_social`, `rep_legal`, `correo`, `telefono`, `direccion`, `contrasena`) VALUES
(1, 'Persona natural', 123, 'no', 'no', 'no', 123, 'no', '123'),
(2, 'Persona juridica', 1234567890, 'no', 'neffer', 'neffer@gmail', 315675665, 'bosque', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoja_de_vida`
--

CREATE TABLE `hoja_de_vida` (
  `id_hoja` int(11) NOT NULL,
  `nombre_hoja` varchar(20) NOT NULL,
  `tipo_hoja` varchar(20) NOT NULL,
  `id_apre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hoja_de_vida`
--

INSERT INTO `hoja_de_vida` (`id_hoja`, `nombre_hoja`, `tipo_hoja`, `id_apre`) VALUES
(1, '1.pdf', 'application/pdf', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafoleo`
--

CREATE TABLE `portafoleo` (
  `id_port` int(11) NOT NULL,
  `nombre_archivo` varchar(60) NOT NULL,
  `tipo_archivo` varchar(60) NOT NULL,
  `id_apre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`id_apre`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indices de la tabla `hoja_de_vida`
--
ALTER TABLE `hoja_de_vida`
  ADD PRIMARY KEY (`id_hoja`),
  ADD KEY `id_apre` (`id_apre`);

--
-- Indices de la tabla `portafoleo`
--
ALTER TABLE `portafoleo`
  ADD PRIMARY KEY (`id_port`),
  ADD KEY `id_apre` (`id_apre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  MODIFY `id_apre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `hoja_de_vida`
--
ALTER TABLE `hoja_de_vida`
  MODIFY `id_hoja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `portafoleo`
--
ALTER TABLE `portafoleo`
  MODIFY `id_port` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hoja_de_vida`
--
ALTER TABLE `hoja_de_vida`
  ADD CONSTRAINT `hoja_de_vida_ibfk_1` FOREIGN KEY (`id_apre`) REFERENCES `aprendiz` (`id_apre`);

--
-- Filtros para la tabla `portafoleo`
--
ALTER TABLE `portafoleo`
  ADD CONSTRAINT `portafoleo_ibfk_1` FOREIGN KEY (`id_apre`) REFERENCES `aprendiz` (`id_apre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
