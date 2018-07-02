-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-06-2018 a las 00:07:13
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `isp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisismuestras`
--

CREATE TABLE IF NOT EXISTS `analisismuestras` (
  `idAnalisisMuestras` int(10) NOT NULL AUTO_INCREMENT,
  `fechaRecepcion` date NOT NULL,
  `temperaturaMuestra` decimal(3,1) NOT NULL,
  `cantidadMuestra` int(10) NOT NULL,
  `Empresa_codigoEmpresa` int(10) NOT NULL,
  `Particular_codigoParticular` int(10) NOT NULL,
  `rutEmpleadoRecibe` varchar(10) NOT NULL,
  PRIMARY KEY (`idAnalisisMuestras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `rutContacto` varchar(10) NOT NULL,
  `nombreContacto` varchar(30) NOT NULL,
  `emailContacto` varchar(45) NOT NULL,
  `telefonoContacto` varchar(15) NOT NULL,
  `Empresa_codigoEmpresa` int(10) NOT NULL,
  PRIMARY KEY (`rutContacto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `rutEmpleado` varchar(10) NOT NULL,
  `nombreEmpleado` varchar(50) NOT NULL,
  `passwordEmpleado` varchar(10) NOT NULL,
  `categoria` varchar(1) NOT NULL,
  PRIMARY KEY (`rutEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `codigoEmpresa` int(10) NOT NULL AUTO_INCREMENT,
  `rutEmpresa` varchar(10) NOT NULL,
  `nombreEmpresa` varchar(30) NOT NULL,
  `passwordEmpresa` varchar(10) NOT NULL,
  `direccionEmpresa` varchar(50) NOT NULL,
  PRIMARY KEY (`codigoEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `particular`
--

CREATE TABLE IF NOT EXISTS `particular` (
  `codigoParticular` int(10) NOT NULL AUTO_INCREMENT,
  `rutParticular` varchar(45) NOT NULL,
  `passwordParticular` varchar(45) NOT NULL,
  `nombreParticular` varchar(45) NOT NULL,
  `direccionParticular` varchar(45) NOT NULL,
  `emailParticular` varchar(100) NOT NULL,
  PRIMARY KEY (`codigoParticular`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultadoanalisis`
--

CREATE TABLE IF NOT EXISTS `resultadoanalisis` (
  `idTipoAnalisis` int(10) NOT NULL AUTO_INCREMENT,
  `idAnalisisMuestras` int(10) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `PPM` int(10) NOT NULL,
  `estado` bit(1) NOT NULL,
  `rutEmpleadoAnalista` varchar(10) NOT NULL,
  PRIMARY KEY (`idTipoAnalisis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE IF NOT EXISTS `telefono` (
  `idTelfono` int(10) NOT NULL AUTO_INCREMENT,
  `numeroTelefono` varchar(15) NOT NULL,
  `Particular_codigoParticular` int(10) NOT NULL,
  PRIMARY KEY (`idTelfono`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoanalisis`
--

CREATE TABLE IF NOT EXISTS `tipoanalisis` (
  `idTipoAnalisis` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoAnalisis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
