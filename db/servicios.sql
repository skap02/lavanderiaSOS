-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-09-2022 a las 01:11:24
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
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `descripcion`, `precio`, `created_at`, `updated_at`) VALUES
('02feb870-2f13-11ed-9202-8598d2d7e2e1', 'SERVICIO DE RECOJO Y ENTREGA', 'Recogemos y entregamos en su domicilio Puede solicitar todos nuestros servicios.', '15.00', '2022-09-08 06:10:21', '2022-09-08 06:10:21'),
('b945c609-2e70-11ed-9bc3-c8d9d2971826', 'SERVICIO DE LAVADO EN SECO', 'Este servicio es recomendado para prendas finas y delicadas', '20.00', '2022-09-07 05:44:48', '2022-09-08 05:44:48'),
('b945cde0-2e70-11ed-9bc3-c8d9d2971826', 'SERVICIO DE LAVADO EN AGUA', 'Servicio orientado a prendas de casa: cortinas, edredones, juegos de sabanas', '15.00', '2022-09-07 05:44:48', '2022-09-08 05:44:48'),
('c8323be0-2f12-11ed-9b4d-a901e483ee35', 'SERVICIO DE TEÑIDO DE PRENDAS', 'Especial para prendas de algodón', '15.00', '2022-09-08 06:08:43', '2022-09-08 06:08:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
