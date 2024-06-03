-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2024 a las 10:11:29
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
-- Base de datos: `db_admin`
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
-- Estructura de tabla para la tabla `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL COMMENT 'role_id',
  `role` varchar(255) DEFAULT NULL COMMENT 'role_text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Editor'),
(3, 'User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `roleid` tinyint(4) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `roleid`, `isActive`, `created_at`, `updated_at`) VALUES
(7, 'Wacha ', 'elwacha', 'wacha@gmail.com', '889a3a791b3875cfae413574b53da4bb8a90d53e', '01717090233', 1, 0, '2020-03-12 16:23:01', '2020-03-12 16:23:01'),
(22, 'usuario1', 'usuario1', 'usuario1@gmail.com', 'ada6d34bca926b40be00893cabc0aeae138ea2a0', '9511876622', 3, 1, '2024-06-03 02:24:02', '2024-06-03 02:24:02'),
(23, 'manu', 'manu', 'manu@gmail.com', '9b58a26403b5cab0dd16fe88f68583ec8ebfc67d', '9511876322', 1, 0, '2024-06-03 02:26:34', '2024-06-03 02:26:34'),
(24, 'usuario 2', 'usuario 2', 'usuario2@gmail.com', '515ab0557a960be2bcc227943c20de357fb5672d', '9515644646', 3, 0, '2024-06-03 02:33:49', '2024-06-03 02:33:49'),
(25, 'usuario 2', 'usuario 3', 'usuario3@gmail.com', 'cd016c515962508538b851783fee065726058a4a', '9515688646', 3, 0, '2024-06-03 02:35:34', '2024-06-03 02:35:34'),
(26, 'usuario 4', 'usuario 4', 'usuario4@gmail.com', '3077ac558f0bb4c8c4834e6907f6ee0fa5b45171', '9515688669', 3, 0, '2024-06-03 02:36:02', '2024-06-03 02:36:02'),
(27, 'usuario 5', 'usuario 5', 'usuario5@gmail.com', '126476a0ec49d71c0cdc772e5856616d29649855', '9515683269', 3, 0, '2024-06-03 02:36:32', '2024-06-03 02:36:32'),
(28, 'usuario 6', 'usuario 6', 'usuario6@gmail.com', '0a5c0018b56b509b5061ed054c2fb0c8ba67039f', '9516383269', 3, 0, '2024-06-03 02:36:56', '2024-06-03 02:36:56'),
(29, 'editor1', 'editor1', 'editor1@gmail.com', 'b9b85b9de7c2225d0bdccb65bfc75a9b75bcf66e', '9515685278', 2, 0, '2024-06-03 03:20:05', '2024-06-03 03:20:05'),
(30, 'editor2', 'editor2', 'editro2@gmail.com', 'dca51001e938d082f9bd520e46d33c865ed14cd5', '9515685271', 2, 1, '2024-06-03 03:20:27', '2024-06-03 03:20:27'),
(31, 'editor3', 'editor3', 'editro3@gmail.com', 'e1501478fc1aebb8f005dcfe65fc574a490c8e2e', '9515686971', 2, 1, '2024-06-03 03:20:58', '2024-06-03 03:20:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `informacion_peces`
--
ALTER TABLE `informacion_peces`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `informacion_peces`
--
ALTER TABLE `informacion_peces`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'role_id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;
