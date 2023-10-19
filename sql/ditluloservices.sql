-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2023 a las 01:03:55
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ditluloservices`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `Id` int(20) NOT NULL,
  `tipotrabajo` varchar(45) NOT NULL,
  `precio` varchar(45) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `tipoasistencia` varchar(15) NOT NULL,
  `CedulaUsuario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`Id`, `tipotrabajo`, `precio`, `correo`, `descripcion`, `tipoasistencia`, `CedulaUsuario`) VALUES
(1, 'EdiciÃ³n', '19.000', 'alejodelrio1901@gmial.com', 'Necesito ayudante para editar fotos', 'Virtual', NULL),
(2, 'ConstrucciÃ³n', '500.000', 'Pedrito100@gmail.com', 'Necesito ayudante de construcciÃ³n', 'Presencial', NULL),
(3, 'Mantenimiento', '200.000', 'edrri@gmail.com', 'Sean bienvenidos todos a un mundo mental Por mÃ­ creado y que por hoy los pienso dejar pasar Es Tyrone y Can, peor pesadilla de cierta gente Al que detestan comÃºnmente por pensar diferente Lamentable', 'Presencial', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `Id` varchar(20) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Observacion` varchar(200) DEFAULT NULL,
  `CedulaUsuario` varchar(20) DEFAULT NULL,
  `IdServicios` varchar(20) DEFAULT NULL,
  `Estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Cedula` varchar(20) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Clave` varchar(20) NOT NULL,
  `Numero` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Cedula`, `Nombre`, `Apellido`, `Correo`, `Direccion`, `Clave`, `Numero`) VALUES
('', '', '', '', '', '', ''),
('123456789', 'Admin', 'istrador', 'admin@gmail.com', 'Cra11a#11a11', 'adminroot', '3203866300'),
('51427579', 'alfredos', 'esmeraldo', 'alfredo@gmail.com', 'cra4949', '12345', '123456789'),
('74185296', 'cristina', 'osorio', 'cristina@gmail.com', 'cra389e1', '12345', '123457'),
('8654', 'alejandro', 'marquez', 'asda@gmail.com', 'cra4949', '87451', '32037459'),
('8745', 'jarvier', 'fernande', 'alejodelrio1901@gmial.com', 'Cra84a#54a81', '9865474', '748596'),
('94865', 'alfredo', 'mar', 'alejodelrio1901@gmial.com', 'Cra84a#54a81', '8451', '845');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CedulaUsuario_idx` (`CedulaUsuario`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CedulaUsuario_idx` (`CedulaUsuario`),
  ADD KEY `IdServicios_idx` (`IdServicios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `CedulaUsuario` FOREIGN KEY (`CedulaUsuario`) REFERENCES `usuarios` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
