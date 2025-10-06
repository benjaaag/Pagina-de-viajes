-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-10-2025 a las 21:35:25
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
(5, 'Ruta del Vino Mendoza', 'Fin de semana gourmet', 'Degustaciones en bodegas premium, city tour y hotel boutique.', 95000, 12, '1', '2025-05-02', '2025-05-04', 'Activo'),
(48, 'Escapada Córdoba', '2 noches en Sierras', 'Hotel con pileta y desayuno incluido.', 75000, 12, '0', '2024-11-10', '2024-11-12', 'Finalizado'),
(49, 'City Tour Buenos Aires', 'Paquete cultural 3 días', 'Incluye visitas a Caminito, San Telmo y Puerto Madero.', 90000, 20, '0', '2024-12-01', '2024-12-03', 'Finalizado'),
(50, 'Termas de Río Hondo', 'Fin de semana relajante', 'Hotel spa, aguas termales y comidas.', 110000, 18, '0', '2025-01-10', '2025-01-12', 'Finalizado'),
(51, 'Fin de Semana en Rosario', '3 noches en hotel céntrico', 'Incluye city tour, gastronomía y paseos por el río.', 85000, 15, '1', '2025-08-25', '2025-08-27', 'Finalizado'),
(52, 'Escapada Mendoza', '2 noches en bodega boutique', 'Degustación de vinos y recorrido por viñedos.', 120000, 10, '1', '2025-08-30', '2025-09-01', 'Finalizado'),
(53, 'Uruguay Express', '2 días en Colonia', 'Ferry ida y vuelta con city tour.', 65000, 20, '1', '2025-09-10', '2025-09-11', 'Finalizado'),
(54, 'Mar del Plata Low Cost', '3 días de playa', 'Hotel económico con desayuno y excursiones.', 80000, 25, '1', '2025-08-20', '2025-08-23', 'Finalizado'),
(55, 'Escapada Tandil', '2 noches en cabañas', 'Senderismo, sierras y gastronomía local.', 95000, 14, '1', '2025-09-05', '2025-09-07', 'Finalizado'),
(56, 'Ski en Las Leñas', 'Paquete de 4 noches', 'Incluye alquiler de equipos y pases a pistas.', 180000, 12, '1', '2025-09-10', '2025-09-14', 'Finalizado'),
(57, 'Iguazú Último Minuto', '2 noches en Cataratas', 'Hotel 3 estrellas y entradas al parque.', 100000, 20, '1', '2025-08-28', '2025-08-30', 'Finalizado'),
(58, 'Fin de Año en Brasil', '5 noches en Florianópolis', 'Fiesta en la playa y hotel 4 estrellas.', 250000, 22, '0', '2024-12-29', '2025-01-03', 'Finalizado'),
(59, 'Semana Santa en Salta', '4 noches con excursiones', 'Quebrada de Humahuaca y Tren de las Nubes.', 150000, 18, '0', '2025-04-15', '2025-04-19', 'Finalizado'),
(60, 'Oktoberfest Villa General Belgrano', '3 noches', 'Fiesta de la cerveza, gastronomía alemana y hotel.', 130000, 16, '1', '2025-09-30', '2025-10-02', 'Por Vencer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete_servicio`
--

CREATE TABLE `paquete_servicio` (
  `id_paquete` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paquete_servicio`
--

INSERT INTO `paquete_servicio` (`id_paquete`, `id_servicio`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(10) NOT NULL,
  `nombre_servicio` text DEFAULT NULL,
  `documentacion` text DEFAULT NULL,
  `proveedor` varchar(15) DEFAULT NULL,
  `tipo` varchar(15) NOT NULL,
  `precio` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `nombre_servicio`, `documentacion`, `proveedor`, `tipo`, `precio`) VALUES
(1, 'Paquete Turístico Córdoba', 'Incluye pasajes y guía turística', 'Viajes del Sol', 'Turismo', 150000),
(2, 'Servicio de Catering Empresarial', 'Menú completo con postre', 'Gourmet Express', 'Gastronomía', 80001),
(3, 'Mantenimiento de Software', 'Contrato anual con actualizaciones', 'TechSolutions', 'Tecnología', 120000),
(4, 'Transporte Privado', 'Vehículo con chofer por 8 horas', 'Autos VIP', 'Transporte', 45000),
(5, 'Hospedaje 5 Estrellas', 'Incluye desayuno buffet', 'Hotel Imperial', 'Alojamiento', 200000);

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
-- Indices de la tabla `paquete_servicio`
--
ALTER TABLE `paquete_servicio`
  ADD PRIMARY KEY (`id_paquete`,`id_servicio`),
  ADD KEY `fk_servicios_paquete` (`id_servicio`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

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
  MODIFY `id_paquete` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `paquete_servicio`
--
ALTER TABLE `paquete_servicio`
  ADD CONSTRAINT `fk_paquete_servicios` FOREIGN KEY (`id_paquete`) REFERENCES `paquete` (`id_paquete`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_servicios_paquete` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
