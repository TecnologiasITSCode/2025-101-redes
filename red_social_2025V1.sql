-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-11-2025 a las 17:06:40
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `red_social_2025`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `correo`, `fecha_registro`) VALUES
(100, 'CESAR ADOLFO', 'cesar', 'cagm.utp@gmail.com', '2025-11-04 14:55:38'),
(1001, 'CESAR ADOLFO', 'cesar', 'cagm.utp@gmail.com', '2025-11-04 14:59:43'),
(1002, 'CESAR ADOLFO', 'cesar', 'cagm.utp@gmail.com', '2025-11-04 15:00:56'),
(1003, 'CESAR ADOLFO', 'cesar', 'cagm.utp@gmail.com', '2025-11-04 15:06:14'),
(1005, 'CESAR ADOLFO', 'cesar', 'cagm.utp@gmail.com', '2025-11-04 15:09:32'),
(1023, 'ANA MARCELA', 'ana', 'ana.gmail.com', '2025-10-14 15:23:04'),
(2020, 'RENE GONZALEZ', 'rene', 'rene@gmail.com', '2025-10-14 15:16:28'),
(3030, 'RENE GONZALEZ', 'rene_gonzalez', 'rene.gonzalez@server.com', '2025-10-14 15:17:07'),
(3521, 'ANA MARAIA', 'ana', 'anita@server.com', '2025-10-14 15:23:40'),
(4040, 'ANA MARIA LEDESMA', 'ana', 'ana@gmail.com', '2025-10-14 15:17:42'),
(9512, 'HELENA AGUALIMPIA', 'helena', 'helena@gmail.com', '2025-10-14 15:24:18'),
(10030, 'CESAR ADOLFO GONZALEZ MARIN', 'cesar', 'cesar.gonzalez@itspereira.edu.co', '2025-10-14 15:09:35'),
(1054400, 'MIGUEL ANGEL TRIANA', 'miguel', 'miguel@gmail.com', '2025-11-04 15:54:37'),
(1034295317, 'LIA SAMARA CUCHIA GRISALES', 'lia', 'lia.cuchia@itspereira.edu.co', '2025-10-14 15:18:29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
