-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-08-2022 a las 03:57:21
-- Versión del servidor: 8.0.30
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lavanderiasos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `dni` char(8) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `celular` char(9) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `dni`, `nombre`, `celular`, `correo`, `direccion`, `created_at`, `updated_at`, `deleted`) VALUES
('2155100e-228b-11ed-bdc8-3c918048434e', '46465424', 'Daniel Alcidez Carrion', '954125877', 'daniel_54@gmail.com', 'Jr. Ricardo Palma N°155', '2022-08-23 02:27:41', '2022-08-22 05:00:00', NULL),
('328b9eb0-25bc-11ed-a24f-2f02c20bbd0b', '46545665', 'miguelser_6@gmail.com', '954416841', 'miguelser_6@gmail.com', 'Jr. Lovato N°452', '2022-08-27 08:56:15', '2022-08-27 08:56:15', NULL),
('d4ac2560-234f-11ed-8c2f-6b0f847e53aa', '78421445', 'José María Argurdas', '954751783', 'josema_8@gmail', 'Jr. Panamá N° 2553', '2022-08-24 06:55:29', '2022-08-24 06:55:29', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
