-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-12-2018 a las 09:35:50
-- Versión del servidor: 5.6.41
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `legion_argendeuda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `pass`) VALUES
(1, 'deudaonline@argenpesos.com.ar', 'eaa95e5e3c635eb13c7804143be0cee3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id` int(11) NOT NULL,
  `nro_credito` int(200) NOT NULL,
  `documento_usuario` int(200) NOT NULL,
  `nombre_usuario` varchar(200) NOT NULL,
  `email_usuario` varchar(200) NOT NULL,
  `telefono_usuario` int(200) NOT NULL,
  `estudio_asignado` text NOT NULL,
  `telefono_estudio_asignado` int(20) NOT NULL,
  `nombre_deuda` char(20) NOT NULL,
  `saldo` decimal(10,2) NOT NULL,
  `cantidad_cuotas_adeudadas` int(11) NOT NULL,
  `fecha_mora` date NOT NULL,
  `fecha_actividad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`id`, `nro_credito`, `documento_usuario`, `nombre_usuario`, `email_usuario`, `telefono_usuario`, `estudio_asignado`, `telefono_estudio_asignado`, `nombre_deuda`, `saldo`, `cantidad_cuotas_adeudadas`, `fecha_mora`, `fecha_actividad`) VALUES
(28, 7, 20205205, 'HEREDIA DANTE WALTER', 'rodrigo@legioncreativa.com', 1156459240, 'SIPEF', 1143941365, 'PR', '1571.04', 6, '2006-02-10', '2018-12-11'),
(29, 85409, 27947185, 'DOTTO NORA VANESA', 'mcd77.1990@gmail.com', 1156459240, '', 203, 'PR', '948.00', 3, '2018-03-01', '2018-12-11'),
(30, 68984, 5394671, 'BADEL, RAMON ALBERTO', 'tmallo@argenpesos.com.ar', 1555750378, 'GESPO', 52733800, 'PR', '5680.00', 10, '2015-10-01', '2018-12-11'),
(31, 139386, 13352302, 'RIQUELME, ADELINA ', 'tomas.mallo@hotmail.com', 1555750378, '', 203, 'PR', '8565.62', 4, '2018-09-01', '2018-12-18'),
(32, 96343, 5193414, 'IERVASI, MARIA JULIA', 'jojola@hotmail.com.ar', 1168527414, 'GESPO', 52733800, 'PR', '9395.23', 5, '2017-03-01', '2018-12-18'),
(33, 159892, 29751859, 'LASTRA, LUIS ALBERTO ', 'ñdñlkdskds@hotmail.com', 1187459623, '', 203, 'PR', '16890.00', 3, '2018-10-01', '2018-12-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
