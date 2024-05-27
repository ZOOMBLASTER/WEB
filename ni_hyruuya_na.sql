-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 27-05-2024 a las 06:20:34
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ni_hyruuya_na`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_peces`
--

CREATE TABLE `informacion_peces` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tamaño_acuario` int(11) NOT NULL,
  `temperatura_min` float NOT NULL,
  `temperatura_max` float NOT NULL,
  `ph_min` float NOT NULL,
  `ph_max` float NOT NULL,
  `dureza_min` float NOT NULL,
  `dureza_max` float NOT NULL,
  `nitritos_min` float NOT NULL,
  `nitritos_max` float NOT NULL,
  `nitratos_min` float NOT NULL,
  `nitratos_max` float NOT NULL,
  `amoniaco_min` float NOT NULL,
  `amoniaco_max` float NOT NULL,
  `salinidad_min` float NOT NULL,
  `salinidad_max` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `informacion_peces`
--

INSERT INTO `informacion_peces` (`Id`, `nombre`, `tamaño_acuario`, `temperatura_min`, `temperatura_max`, `ph_min`, `ph_max`, `dureza_min`, `dureza_max`, `nitritos_min`, `nitritos_max`, `nitratos_min`, `nitratos_max`, `amoniaco_min`, `amoniaco_max`, `salinidad_min`, `salinidad_max`) VALUES
(1, 'Axolote', 60, 14, 20, 6.5, 8, 7, 14, 0, 0.25, 0, 40, 0, 0.25, 0, 0.25),
(2, 'Barbo tigre', 20, 22, 27, 6, 8, 5, 19, 0, 0.25, 0, 0.25, 0, 0.25, 0, 0.25),
(3, 'Betta', 20, 24, 28, 6.5, 7.5, 3, 5, 0, 0.25, 0, 20, 0, 0.25, 0, 0.25),
(4, 'Caballito de mar', 100, 22, 26, 8.1, 8.4, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 1.02, 1.025),
(5, 'Camarón cristal', 10, 18, 26, 6.5, 7.5, 4, 8, 0, 0.25, 0, 20, 0, 0.25, 0, 0.25),
(6, 'Cangrejo de rio', 20, 18, 25, 6.5, 8, 4, 15, 0, 0.25, 0, 40, 0, 0.25, 0, 0.25),
(7, 'Caracol manzana', 10, 18, 28, 7, 8, 6, 12, 0, 0.25, 0, 20, 0, 0.25, 0, 0.25),
(8, 'Cocodrilo enano', 800, 24, 28, 6.5, 7.5, 3, 12, 0, 0.25, 0, 40, 0, 0.05, 0, 0.5),
(9, 'Cangrejo fiddler', 38, 24, 28, 7.5, 8.5, 12, 30, 0, 0.5, 0, 20, 0, 0.25, 1.005, 1.015),
(10, 'Goldfish', 75, 18, 24, 7, 8.4, 5, 19, 0, 0.25, 0, 40, 0, 0.25, 0, 0.25),
(11, 'Guppy', 10, 24, 28, 6.8, 7.8, 8, 12, 0, 0.25, 0, 0.25, 0, 0.25, 0, 0.25),
(12, 'Cangrejo ermitaño', 75, 22, 26, 8, 8.4, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 1.022, 1.026),
(13, 'Medusa acrópolis', 20, 18, 24, 8, 8.4, 8, 12, 0, 0.25, 0, 0.25, 0, 0.25, 30, 35),
(14, 'Medusa luna', 20, 18, 24, 8, 8.4, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 25, 30),
(15, 'Molly', 38, 24, 28, 7.5, 8.5, 10, 20, 0, 0.25, 0, 0.25, 0, 0.25, 0, 0.25),
(16, 'Pez ángel emperador', 380, 24, 28, 8.1, 8.4, 4, 12, 0, 0.25, 0, 20, 0, 0.25, 1.02, 1.025),
(17, 'Pez ángel', 75, 24, 28, 6.5, 7.5, 4, 12, 0, 0.25, 0, 20, 0, 0.25, 0, 0.25),
(18, 'Pez arquero', 200, 24, 28, 7, 8, 10, 20, 0, 0.25, 0, 20, 0, 0.25, 1.002, 1.01),
(19, 'Pez cirujano', 250, 24, 28, 8.1, 8.4, 8, 12, 0, 0.25, 0, 0.25, 0, 0.25, 1.02, 1.025),
(20, 'Pez cirujano amarillo', 250, 24, 28, 8.1, 8.4, 8, 12, 0, 0.25, 0, 10, 0, 0.25, 1.02, 1.025),
(21, 'Pez damisela', 75, 24, 27, 8.1, 8.4, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 1.02, 1.025),
(22, 'Pez disco', 190, 26, 30, 6, 7, 1, 8, 0, 0.25, 0, 20, 0, 0.25, 0, 0.25),
(23, 'Pez escorpión', 300, 22, 26, 8.1, 8.4, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 30, 35),
(24, 'Pez globo', 75, 24, 28, 7, 8, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 1.005, 1.025),
(25, 'Pez gobio', 36, 22, 28, 7.5, 8.5, 8, 12, 0, 0.25, 0, 40, 0, 0.25, 0, 40),
(26, 'Pez león', 284, 24, 27, 8.1, 8.4, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 1.02, 1.025),
(27, 'Pez mandarín', 100, 22, 26, 8.1, 8.4, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 1.02, 1.025),
(28, 'Pez mariposa', 100, 24, 27, 8.1, 8.4, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 1.02, 1.025),
(29, 'Pez payaso', 75, 24, 28, 8.1, 8.4, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 1.02, 1.025),
(30, 'Platys', 38, 22, 28, 7, 8, 10, 30, 0, 0.25, 0, 20, 0, 0.25, 0, 0.25),
(31, 'Cangrejo pompom', 75, 22, 26, 8, 8.4, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 1.02, 1.025),
(32, 'Cangrejo de porcelana', 38, 22, 25, 7.5, 8.5, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 1.02, 1.025),
(33, 'Pulpo anillos azules', 100, 22, 26, 8, 8.4, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 1.025, 1.027),
(34, 'Pulpo común', 200, 16, 22, 7.5, 8.4, 8, 12, 0, 0.25, 0, 20, 0, 0.25, 1.024, 1.026),
(35, 'Tetra', 20, 24, 26, 6.5, 7.5, 2, 10, 0, 0.25, 0, 0.25, 0, 0.25, 0, 0.25),
(36, 'Tortuga orejas rojas', 75, 24, 29, 6.8, 7.6, 150, 300, 0, 0.25, 0, 40, 0, 0.25, 0, 0.25),
(37, 'Cangrejo vampiro', 38, 22, 28, 7.5, 8.5, 5, 15, 0, 0.25, 0, 20, 0, 0.25, 0, 1.025);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Correo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Contraseña` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Correo`, `Contraseña`) VALUES
(1, 'ZOOM', 'elmainsupp@gmail.com', '0000'),
(2, 'Alejandra', 'arrazolavasquezkarenalejandra@gmail.com', '0000'),
(3, 'ROBUS', 'robus3916@gmail.com', '0000'),
(8, 'Luis', 'thesevenservant.saber@gmail.com', '0000'),
(11, 'Manuel', 'alguienpanda8@gmail.com', '$2y$10$dPhaiU.iyoRlhwUo0e0O1eOLq740vLIoH9Wdiebf5QoOnKjBpQoqy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `informacion_peces`
--
ALTER TABLE `informacion_peces`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Correo` (`Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `informacion_peces`
--
ALTER TABLE `informacion_peces`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
