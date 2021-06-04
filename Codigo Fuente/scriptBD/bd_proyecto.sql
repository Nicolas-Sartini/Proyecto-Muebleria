-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2021 a las 23:01:09
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Base de datos: `bdproyecto`
--

DROP DATABASE IF EXISTS `bdproyecto`;
CREATE DATABASE IF NOT EXISTS `bdproyecto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdproyecto`;


--
-- Estructura de tabla para la tabla `mueble`
--

CREATE TABLE `mueble` (
  `id` int(11) NOT NULL,
  `medida` float UNSIGNED NOT NULL,
  `largo` float UNSIGNED NOT NULL,
  `ancho` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indices de la tabla `mueble`
--

ALTER TABLE `mueble`
  ADD PRIMARY KEY (`id`);
  
  
--
-- AUTO_INCREMENT de la tabla `mueble`
--

 ALTER TABLE `mueble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
