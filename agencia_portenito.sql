-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-10-2025 a las 21:09:03
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

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
  `estado` varchar(10) NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paquete`
--

INSERT INTO `paquete` (`id_paquete`, `nombre`, `descripcion_corta`, `descripcion_larga`, `precio`, `limite_personas`, `disponible`, `fecha_inicio`, `fecha_fin`, `estado`, `Imagen`) VALUES
(1, 'Aventura en Bariloche', 'Viaje de 5 días con excursiones', 'Incluye hospedaje, traslados, excursiones al Cerro Catedral y Circuito Chico.', 120000, 20, '1', '2025-01-15', '2025-01-20', 'Activo', ''),
(2, 'Caribe All Inclusive', '7 noches en Cancún', 'Resort frente al mar con comidas, bebidas y actividades acuáticas incluidas.', 350000, 30, '1', '2025-02-10', '2025-02-17', 'Activo', ''),
(3, 'Europa Express', 'Tour por 3 países en 10 días', 'Visita París, Roma y Madrid con guías en español y entradas a museos.', 600000, 25, '1', '2025-03-01', '2025-03-11', 'Activo', ''),
(4, 'Escapada a Iguazú', '3 días en Misiones', 'Incluye entrada a las Cataratas, alojamiento y transporte.', 80000, 15, '0', '2025-04-05', '2025-04-07', 'Inactivo', ''),
(5, 'Ruta del Vino Mendoza', 'Fin de semana gourmet', 'Degustaciones en bodegas premium, city tour y hotel boutique.', 95000, 12, '1', '2025-05-02', '2025-05-04', 'Activo', ''),
(6, 'Machu Picchu Aventura', 'Excursión de 5 días en Perú', 'Incluye tren a Aguas Calientes, guía en Machu Picchu y alojamiento en Cusco.', 250000, 20, '1', '2025-06-01', '2025-06-05', 'Activo', 'imagen/machu_picchu.jpg'),
(7, 'Disney Orlando', '7 días mágicos en Disney World', 'Entradas a todos los parques, hospedaje dentro del complejo y traslados incluidos.', 750000, 30, '1', '2025-06-10', '2025-06-17', 'Activo', 'imagen/disney_orlando.jpg'),
(8, 'Torres del Paine', 'Aventura en la Patagonia Chilena', 'Trekking en los glaciares, hospedaje en refugios y guía especializado.', 300000, 15, '1', '2025-07-01', '2025-07-07', 'Activo', 'imagen/torres_del_paine.jpg'),
(9, 'New York Express', '5 días en la Gran Manzana', 'Visita Times Square, Estatua de la Libertad y Central Park con guía en español.', 400000, 25, '1', '2025-07-15', '2025-07-20', 'Activo', 'imagen/new_york.jpg'),
(10, 'París Romántico', 'Escapada de 6 días a París', 'Tour por la Torre Eiffel, Museo del Louvre y crucero por el Sena.', 500000, 18, '1', '2025-08-01', '2025-08-06', 'Activo', 'imagen/paris.jpg'),
(11, 'Roma Clásica', 'Tour histórico de 5 días', 'Incluye Coliseo, Vaticano, Fontana di Trevi y degustación gastronómica.', 480000, 20, '1', '2025-08-10', '2025-08-15', 'Activo', 'imagen/roma.jpg'),
(12, 'Cataratas del Iguazú', '3 días en Misiones', 'Paquete con entradas al Parque Nacional, alojamiento y city tour en Puerto Iguazú.', 120000, 25, '1', '2025-08-20', '2025-08-23', 'Activo', 'imagen/iguazu.jpg'),
(13, 'Bariloche Nieve', '5 días en la Patagonia', 'Incluye excursiones al Cerro Catedral, Circuito Chico y navegación en el Nahuel Huapi.', 180000, 22, '1', '2025-09-01', '2025-09-05', 'Activo', 'imagen/bariloche.jpg'),
(14, 'Madrid Cultural', 'Escapada de 4 días', 'Museo del Prado, Palacio Real, tapas en la Gran Vía y city tour panorámico.', 350000, 20, '1', '2025-09-10', '2025-09-14', 'Activo', 'imagen/madrid.jpg'),
(15, 'Tokio Futurista', '7 días en Japón', 'Recorrido por Shibuya, Akihabara, templos de Asakusa y excursión al Monte Fuji.', 800000, 18, '1', '2025-09-20', '2025-09-27', 'Activo', 'imagen/tokio.jpg'),
(16, 'Mendoza Ruta del Vino', 'Fin de semana gourmet', 'Degustación en bodegas premium, city tour y hospedaje en hotel boutique.', 95000, 12, '1', '2025-10-02', '2025-10-04', 'Activo', 'imagen/mendoza_vino.jpg'),
(17, 'Río de Janeiro', 'Carnaval y playas', 'Visita al Cristo Redentor, Pan de Azúcar y playas de Copacabana e Ipanema.', 220000, 30, '1', '2025-10-10', '2025-10-15', 'Activo', 'imagen/rio_de_janeiro.jpg'),
(18, 'Cusco y Valle Sagrado', '4 días en Perú', 'Excursión a Pisac, Ollantaytambo y mercados artesanales con guía local.', 180000, 25, '1', '2025-10-20', '2025-10-24', 'Activo', 'imagen/cusco.jpg'),
(19, 'Islas Galápagos', 'Expedición de 6 días', 'Crucero por las islas, snorkel con tortugas y guía especializado en biodiversidad.', 600000, 14, '1', '2025-11-01', '2025-11-07', 'Activo', 'imagen/galapagos.jpg'),
(20, 'Salta y Jujuy', '5 días en el norte argentino', 'Quebrada de Humahuaca, Cafayate y excursión a Salinas Grandes.', 160000, 20, '1', '2025-11-15', '2025-11-20', 'Activo', 'imagen/salta_jujuy.jpg'),
(21, 'Egipto Místico', '10 días en El Cairo y Luxor', 'Pirámides de Giza, crucero por el Nilo y visitas a templos históricos.', 900000, 25, '1', '2025-12-01', '2025-12-10', 'Activo', 'imagen/egipto.jpg'),
(22, 'Londres Imperial', '5 días en Inglaterra', 'Tour por el Big Ben, London Eye, Museos y visita a Stonehenge.', 520000, 20, '1', '2025-12-15', '2025-12-20', 'Activo', 'imagen/londres.jpg'),
(23, 'Barcelona Mediterránea', '4 días en Cataluña', 'Visita a la Sagrada Familia, Park Güell y tapas en Las Ramblas.', 400000, 22, '1', '2026-01-05', '2026-01-09', 'Activo', 'imagen/barcelona.jpg'),
(24, 'Grecia Clásica', '8 días en Atenas y Santorini', 'Incluye Acrópolis, islas griegas y paseo en barco.', 700000, 20, '1', '2026-01-15', '2026-01-23', 'Activo', 'imagen/grecia.jpg'),
(25, 'Dubai Lujo', '5 días en Emiratos Árabes', 'Burj Khalifa, desierto en 4x4 y alojamiento 5 estrellas.', 850000, 15, '1', '2026-02-01', '2026-02-06', 'Activo', 'imagen/dubai.jpg'),
(26, 'Tailandia Tropical', '10 días en Bangkok y Phuket', 'Templos, playas paradisíacas y gastronomía local.', 780000, 25, '1', '2026-02-15', '2026-02-25', 'Activo', 'imagen/tailandia.jpg'),
(27, 'Costa Rica Natural', '6 días de aventura', 'Visita a volcanes, selva tropical y playas del Pacífico.', 500000, 20, '1', '2026-03-01', '2026-03-07', 'Activo', 'imagen/costa_rica.jpg'),
(28, 'Islas Maldivas', '7 días de lujo', 'Resort sobre el agua, snorkel y actividades acuáticas.', 1200000, 12, '1', '2026-03-15', '2026-03-22', 'Activo', 'imagen/maldivas.jpg'),
(29, 'Ushuaia Fin del Mundo', '4 días en Tierra del Fuego', 'Excursión al Canal Beagle, Parque Nacional y tren del fin del mundo.', 190000, 18, '1', '2026-04-01', '2026-04-05', 'Activo', 'imagen/ushuaia.jpg'),
(30, 'Chile Desierto de Atacama', '5 días de aventura', 'Valle de la Luna, géiseres del Tatio y observación astronómica.', 320000, 20, '1', '2026-04-15', '2026-04-20', 'Activo', 'imagen/atacama.jpg'),
(31, 'Canadá Lagos y Montañas', '7 días en las Rocosas', 'Parques nacionales, lagos glaciares y excursiones de senderismo.', 650000, 22, '1', '2026-05-01', '2026-05-07', 'Activo', 'imagen/canada.jpg'),
(32, 'Hawái Paraíso', '6 días en Honolulu', 'Playas, volcanes y espectáculos de hula.', 700000, 20, '1', '2026-05-15', '2026-05-21', 'Activo', 'imagen/hawai.jpg'),
(33, 'México Riviera Maya', '7 días en Cancún', 'Resort all inclusive, Chichén Itzá y actividades acuáticas.', 500000, 28, '1', '2026-06-01', '2026-06-08', 'Activo', 'imagen/cancun.jpg'),
(34, 'Turquía Encantada', '9 días en Estambul y Capadocia', 'Paseo en globo, mezquitas y bazares históricos.', 720000, 25, '1', '2026-06-15', '2026-06-24', 'Activo', 'imagen/turquia.jpg'),
(35, 'Alemania Histórica', '5 días en Berlín y Múnich', 'Muro de Berlín, castillos bávaros y cerveza artesanal.', 480000, 20, '1', '2026-07-01', '2026-07-06', 'Activo', 'imagen/alemania.jpg'),
(36, 'Australia Salvaje', '8 días en Sídney y Cairns', 'Gran Barrera de Coral, Ópera de Sídney y excursión en el outback.', 950000, 22, '1', '2026-07-15', '2026-07-23', 'Activo', 'imagen/australia.jpg'),
(37, 'China Milenaria', '10 días en Pekín y Shanghái', 'Muralla China, Ciudad Prohibida y modernidad en Shanghái.', 880000, 30, '1', '2026-08-01', '2026-08-10', 'Activo', 'imagen/china.jpg'),
(38, 'India Espiritual', '9 días en Delhi, Jaipur y Agra', 'Visita al Taj Mahal, templos y mercados tradicionales.', 750000, 28, '1', '2026-08-15', '2026-08-23', 'Activo', 'imagen/india.jpg'),
(39, 'Islandia Aventura Ártica', '7 días entre glaciares y volcanes', 'Auroras boreales, aguas termales y paisajes únicos.', 1100000, 18, '1', '2026-09-01', '2026-09-07', 'Activo', 'imagen/islandia.jpg'),
(40, 'Marruecos Desierto', '6 días en Marrakech y Sahara', 'Noche en el desierto en haima, zocos y palacios históricos.', 560000, 20, '1', '2026-09-15', '2026-09-20', 'Activo', 'imagen/marruecos.jpg'),
(41, 'Sudáfrica Safari', '8 días de aventura', 'Parque Kruger, Ciudad del Cabo y excursiones en safaris fotográficos.', 980000, 25, '1', '2026-10-01', '2026-10-08', 'Activo', 'imagen/sudafrica.jpg'),
(42, 'Noruega Fiordos', '7 días en crucero', 'Navegación entre fiordos, cascadas y pueblos pesqueros.', 1050000, 20, '1', '2026-10-15', '2026-10-21', 'Activo', 'imagen/noruega.jpg'),
(43, 'Irlanda Verde', '5 días en Dublín y Belfast', 'Castillos, pubs tradicionales y paisajes de película.', 480000, 22, '1', '2026-11-01', '2026-11-05', 'Activo', 'imagen/irlanda.jpg'),
(44, 'Portugal Encantador', '6 días en Lisboa y Oporto', 'Tour por barrios históricos, fado y degustación de vinos.', 450000, 20, '1', '2026-11-15', '2026-11-20', 'Activo', 'imagen/portugal.jpg'),
(45, 'Suiza Alpes', '7 días de aventura', 'Excursiones en Zermatt, tren panorámico y paisajes alpinos.', 1100000, 18, '1', '2026-12-01', '2026-12-07', 'Activo', 'imagen/suiza.jpg'),
(46, 'Holanda en Bicicleta', '4 días en Ámsterdam', 'Recorridos en bici, canales y molinos tradicionales.', 420000, 20, '1', '2026-12-10', '2026-12-14', 'Activo', 'imagen/holanda.jpg'),
(47, 'Escocia Misteriosa', '6 días en Edimburgo y Highlands', 'Castillos medievales, lagos y leyendas del monstruo del Lago Ness.', 520000, 22, '1', '2026-12-20', '2026-12-26', 'Activo', 'imagen/escocia.jpg'),
(48, 'Escapada Córdoba', '2 noches en Sierras', 'Hotel con pileta y desayuno incluido.', 75000, 12, '0', '2024-11-10', '2024-11-12', 'Finalizado', ''),
(49, 'City Tour Buenos Aires', 'Paquete cultural 3 días', 'Incluye visitas a Caminito, San Telmo y Puerto Madero.', 90000, 20, '0', '2024-12-01', '2024-12-03', 'Finalizado', ''),
(50, 'Termas de Río Hondo', 'Fin de semana relajante', 'Hotel spa, aguas termales y comidas.', 110000, 18, '0', '2025-01-10', '2025-01-12', 'Finalizado', ''),
(51, 'Fin de Semana en Rosario', '3 noches en hotel céntrico', 'Incluye city tour, gastronomía y paseos por el río.', 85000, 15, '1', '2025-08-25', '2025-08-27', 'Finalizado', ''),
(52, 'Escapada Mendoza', '2 noches en bodega boutique', 'Degustación de vinos y recorrido por viñedos.', 120000, 10, '1', '2025-08-30', '2025-09-01', 'Finalizado', ''),
(53, 'Uruguay Express', '2 días en Colonia', 'Ferry ida y vuelta con city tour.', 65000, 20, '1', '2025-09-10', '2025-09-11', 'Finalizado', ''),
(54, 'Mar del Plata Low Cost', '3 días de playa', 'Hotel económico con desayuno y excursiones.', 80000, 25, '1', '2025-08-20', '2025-08-23', 'Finalizado', ''),
(55, 'Escapada Tandil', '2 noches en cabañas', 'Senderismo, sierras y gastronomía local.', 95000, 14, '1', '2025-09-05', '2025-09-07', 'Finalizado', ''),
(56, 'Ski en Las Leñas', 'Paquete de 4 noches', 'Incluye alquiler de equipos y pases a pistas.', 180000, 12, '1', '2025-09-10', '2025-09-14', 'Finalizado', ''),
(57, 'Iguazú Último Minuto', '2 noches en Cataratas', 'Hotel 3 estrellas y entradas al parque.', 100000, 20, '1', '2025-08-28', '2025-08-30', 'Finalizado', ''),
(58, 'Fin de Año en Brasil', '5 noches en Florianópolis', 'Fiesta en la playa y hotel 4 estrellas.', 250000, 22, '0', '2024-12-29', '2025-01-03', 'Finalizado', ''),
(59, 'Semana Santa en Salta', '4 noches con excursiones', 'Quebrada de Humahuaca y Tren de las Nubes.', 150000, 18, '0', '2025-04-15', '2025-04-19', 'Finalizado', ''),
(60, 'Oktoberfest Villa General Belgrano', '3 noches', 'Fiesta de la cerveza, gastronomía alemana y hotel.', 130000, 16, '1', '2025-09-30', '2025-10-02', 'Por Vencer', '');

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
