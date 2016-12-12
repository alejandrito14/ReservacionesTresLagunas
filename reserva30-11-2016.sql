-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2016 a las 21:22:56
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reserva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_actividad`
--

CREATE TABLE `c_actividad` (
  `id_actividad` int(11) NOT NULL,
  `cmpnombreActividad` varchar(25) DEFAULT NULL,
  `cmptarifa` double DEFAULT NULL,
  `cmpdetalle` varchar(100) DEFAULT NULL,
  `cmpurl` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `c_actividad`
--

INSERT INTO `c_actividad` (`id_actividad`, `cmpnombreActividad`, `cmptarifa`, `cmpdetalle`, `cmpurl`) VALUES
(3, 'Recorrido 1', 100, 'Recorrido por una de las lagunas', NULL),
(4, 'Paseo en el paisaje', 200, 'Durante la madrugada', NULL),
(5, 'Recorrido 2', 200, 'Recorrido por tres lagunas', NULL),
(6, 'Paseo en Canoa', 300, 'Recorrido en cano', NULL),
(7, 'Visita al santuario de co', 500, 'Recorrido', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_asignacioncabania`
--

CREATE TABLE `c_asignacioncabania` (
  `id_reservacion` varchar(45) NOT NULL,
  `id_cabania` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_asignacionpaquete`
--

CREATE TABLE `c_asignacionpaquete` (
  `id_reservacion` varchar(45) NOT NULL,
  `id_actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_asignacionpaqueteactividad`
--

CREATE TABLE `c_asignacionpaqueteactividad` (
  `id_paquete` int(11) NOT NULL,
  `id_actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `c_asignacionpaqueteactividad`
--

INSERT INTO `c_asignacionpaqueteactividad` (`id_paquete`, `id_actividad`) VALUES
(4, 4),
(4, 7),
(5, 4),
(5, 5),
(5, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_cabania`
--

CREATE TABLE `c_cabania` (
  `id_cabania` int(11) NOT NULL,
  `cmpnombre` varchar(25) DEFAULT NULL,
  `cmptarifa` double DEFAULT NULL,
  `cmpdescripcion` varchar(100) DEFAULT NULL,
  `cmpurl` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `c_cabania`
--

INSERT INTO `c_cabania` (`id_cabania`, `cmpnombre`, `cmptarifa`, `cmpdescripcion`, `cmpurl`) VALUES
(4, 'Cabaña4', 5000, 'Cabaña para 5 personas', NULL),
(5, 'Cabaña6', 6000, 'Cabaña para 6 personas', NULL),
(6, 'Cabaña7', 7000, 'Cabaña para 7 personas', NULL),
(7, 'Cabaña8', 300, 'Cabaña para tres personas', NULL),
(9, 'Cabaña10', 1000, 'Cabaña para 3', NULL),
(12, 'Cabaña5', 2000, 'Cabaña para 2 personas', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_estadoreservacion`
--

CREATE TABLE `c_estadoreservacion` (
  `id_estadoReservacion` int(11) NOT NULL,
  `estado` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_paquete`
--

CREATE TABLE `c_paquete` (
  `id_paquete` int(11) NOT NULL,
  `cmpnombrePaquete` varchar(25) DEFAULT NULL,
  `cmptarifa` double DEFAULT NULL,
  `cmpdetalle` varchar(100) DEFAULT NULL,
  `cmpurl` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `c_paquete`
--

INSERT INTO `c_paquete` (`id_paquete`, `cmpnombrePaquete`, `cmptarifa`, `cmpdetalle`, `cmpurl`) VALUES
(4, 'Paquete basico', 3000, 'Consta de 2 actividades', NULL),
(5, 'Paquete plus', 5000, 'Consta de 3 actividades', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_turista`
--

CREATE TABLE `c_turista` (
  `id_usuario` int(11) NOT NULL,
  `cmpnumeroTelefono` varchar(15) DEFAULT NULL,
  `cmplugarOrigen` varchar(45) DEFAULT NULL,
  `cmpfechaNacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `c_turista`
--

INSERT INTO `c_turista` (`id_usuario`, `cmpnumeroTelefono`, `cmplugarOrigen`, `cmpfechaNacimiento`) VALUES
(1, '6026509', 'tuxtla Gutierrez', '2016-11-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_usuario`
--

CREATE TABLE `c_usuario` (
  `id_usuario` int(11) NOT NULL,
  `cmpcorreo` varchar(30) DEFAULT NULL,
  `cmpcontrasena` varchar(15) DEFAULT NULL,
  `cmpnombre` varchar(25) DEFAULT NULL,
  `cmpapellidoPaterno` varchar(25) DEFAULT NULL,
  `cmpapellidoMaterno` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `c_usuario`
--

INSERT INTO `c_usuario` (`id_usuario`, `cmpcorreo`, `cmpcontrasena`, `cmpnombre`, `cmpapellidoPaterno`, `cmpapellidoMaterno`) VALUES
(1, 'alejandro14fe@msn.com', '12345', 'alejandro', 'hernandez', 'guzman');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_reservacion`
--

CREATE TABLE `p_reservacion` (
  `id_reservacion` varchar(45) NOT NULL,
  `cmpfechaEntrada` date DEFAULT NULL,
  `cmpfechaSalida` date DEFAULT NULL,
  `cmpnumeroDeActividades` int(11) DEFAULT NULL,
  `cmpcantidadPersonas` int(11) DEFAULT NULL,
  `cmpcomprobantePago` varchar(45) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_estadoReservacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `c_actividad`
--
ALTER TABLE `c_actividad`
  ADD PRIMARY KEY (`id_actividad`);

--
-- Indices de la tabla `c_asignacioncabania`
--
ALTER TABLE `c_asignacioncabania`
  ADD PRIMARY KEY (`id_reservacion`,`id_cabania`),
  ADD KEY `c_asignacionCabania_fki01` (`id_cabania`),
  ADD KEY `c_asignacionCabania_fki02` (`id_reservacion`);

--
-- Indices de la tabla `c_asignacionpaquete`
--
ALTER TABLE `c_asignacionpaquete`
  ADD PRIMARY KEY (`id_reservacion`,`id_actividad`),
  ADD KEY `c_asignacionPaquete_fki01` (`id_actividad`),
  ADD KEY `c_asignacionPaquete_fki02` (`id_reservacion`);

--
-- Indices de la tabla `c_asignacionpaqueteactividad`
--
ALTER TABLE `c_asignacionpaqueteactividad`
  ADD PRIMARY KEY (`id_paquete`,`id_actividad`),
  ADD KEY `c_asignacionPaqueteActividad_fki01` (`id_actividad`),
  ADD KEY `c_asignacionPaqueteActividad_fki02` (`id_paquete`);

--
-- Indices de la tabla `c_cabania`
--
ALTER TABLE `c_cabania`
  ADD PRIMARY KEY (`id_cabania`);

--
-- Indices de la tabla `c_estadoreservacion`
--
ALTER TABLE `c_estadoreservacion`
  ADD PRIMARY KEY (`id_estadoReservacion`);

--
-- Indices de la tabla `c_paquete`
--
ALTER TABLE `c_paquete`
  ADD PRIMARY KEY (`id_paquete`);

--
-- Indices de la tabla `c_turista`
--
ALTER TABLE `c_turista`
  ADD KEY `c_turista_fki01` (`id_usuario`);

--
-- Indices de la tabla `c_usuario`
--
ALTER TABLE `c_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `p_reservacion`
--
ALTER TABLE `p_reservacion`
  ADD PRIMARY KEY (`id_reservacion`),
  ADD KEY `p_reservacion_fki01` (`id_usuario`),
  ADD KEY `p_reservacion_fki02` (`id_estadoReservacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `c_actividad`
--
ALTER TABLE `c_actividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `c_cabania`
--
ALTER TABLE `c_cabania`
  MODIFY `id_cabania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `c_paquete`
--
ALTER TABLE `c_paquete`
  MODIFY `id_paquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `c_usuario`
--
ALTER TABLE `c_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `c_asignacioncabania`
--
ALTER TABLE `c_asignacioncabania`
  ADD CONSTRAINT `c_asignacionCabania_fk01` FOREIGN KEY (`id_reservacion`) REFERENCES `p_reservacion` (`id_reservacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `c_asignacionCabania_fk02` FOREIGN KEY (`id_cabania`) REFERENCES `c_cabania` (`id_cabania`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `c_asignacionpaquete`
--
ALTER TABLE `c_asignacionpaquete`
  ADD CONSTRAINT `c_asignacionPaquete_fk01` FOREIGN KEY (`id_reservacion`) REFERENCES `p_reservacion` (`id_reservacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `c_asignacionPaquete_fk02` FOREIGN KEY (`id_actividad`) REFERENCES `c_actividad` (`id_actividad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `c_asignacionpaqueteactividad`
--
ALTER TABLE `c_asignacionpaqueteactividad`
  ADD CONSTRAINT `c_asignacionPaqueteActividad_fk01` FOREIGN KEY (`id_paquete`) REFERENCES `c_paquete` (`id_paquete`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `c_asignacionPaqueteActividad_fk02` FOREIGN KEY (`id_actividad`) REFERENCES `c_actividad` (`id_actividad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `c_turista`
--
ALTER TABLE `c_turista`
  ADD CONSTRAINT `c_turista_fk01` FOREIGN KEY (`id_usuario`) REFERENCES `c_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `p_reservacion`
--
ALTER TABLE `p_reservacion`
  ADD CONSTRAINT `p_reservacion_fk01` FOREIGN KEY (`id_usuario`) REFERENCES `c_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `p_reservacion_fk02` FOREIGN KEY (`id_estadoReservacion`) REFERENCES `c_estadoreservacion` (`id_estadoReservacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
