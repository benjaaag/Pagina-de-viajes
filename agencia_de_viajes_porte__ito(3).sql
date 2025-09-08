-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-09-2025 a las 19:33:36
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencia_portenito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(10) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `iniciar_sesion` varchar(50) NOT NULL,
  `id_carrito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `edad`, `correo_electronico`, `telefono`, `iniciar_sesion`, `id_carrito`) VALUES
(1, 'María López', 28, 'maria.lopez@email.com', '3512345678', '1', 1),
(2, 'Juan Pérez', 35, 'juan.perez@email.com', '1134567890', '1', 2),
(3, 'Lucía Fernández', 22, 'lucia.ferna@email.com', '2998765432', '0', 3),
(4, 'Carlos Gómez', 40, 'carlos.gomez@email.com', '2612233445', '1', 4),
(5, 'Ana Torres', 31, 'ana.torres@email.com', '3811122233', '1', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

CREATE TABLE `paquete` (
  `id_paquete` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion_corta` varchar(50) NOT NULL,
  `descripcion_larga` varchar(100) NOT NULL,
  `precio` int(10) NOT NULL,
  `limite_personas` int(10) NOT NULL,
  `disponible` varchar(30) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paquete`
--

INSERT INTO `paquete` (`id_paquete`, `nombre`, `descripcion_corta`, `descripcion_larga`, `precio`, `limite_personas`, `disponible`, `fecha_inicio`, `fecha_fin`, `estado`) VALUES
(1, 'Aventura en Bariloche', 'Viaje de 5 días con excursiones', 'Incluye hospedaje, traslados, excursiones al Cerro Catedral y Circuito Chico.', 120000, 20, '1', '2025-01-15', '2025-01-20', 'Activo'),
(2, 'Caribe All Inclusive', '7 noches en Cancún', 'Resort frente al mar con comidas, bebidas y actividades acuáticas incluidas.', 350000, 30, '1', '2025-02-10', '2025-02-17', 'Activo'),
(3, 'Europa Express', 'Tour por 3 países en 10 días', 'Visita París, Roma y Madrid con guías en español y entradas a museos.', 600000, 25, '1', '2025-03-01', '2025-03-11', 'Activo'),
(4, 'Escapada a Iguazú', '3 días en Misiones', 'Incluye entrada a las Cataratas, alojamiento y transporte.', 80000, 15, '0', '2025-04-05', '2025-04-07', 'Inactivo'),
(5, 'Ruta del Vino Mendoza', 'Fin de semana gourmet', 'Degustaciones en bodegas premium, city tour y hotel boutique.', 95000, 12, '1', '2025-05-02', '2025-05-04', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `paquete`
--
ALTER TABLE `paquete`
  ADD PRIMARY KEY (`id_paquete`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `paquete`
--
ALTER TABLE `paquete`
  MODIFY `id_paquete` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
