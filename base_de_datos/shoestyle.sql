-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2025 a las 22:12:04
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
-- Base de datos: `shoestyle`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `email`, `usuario`, `contrasena`, `fecha_registro`) VALUES
(6, 'justin', 'yotdhm@dhiohf', 'justind', '$2y$10$HZfYtQI73hHWvsSGHuLcvu/3iOIub3YXZpmKuSiPSLbwNWGjsPzSW', '2025-05-21 18:55:30'),
(7, 'rge', 'bibvivff@giy', 'rge', '$2y$10$CHg7KgvGMhsmlPYHKQvxPefE.uhdJghRfQN3m2G7XkS3If2wiFOri', '2025-05-21 19:01:40'),
(8, 'ss', 'ss@dd', 'ss', '$2y$10$ylCXy6A0TW5GZGLdnO05muf3J2dmeCsheyJdlwY3oQ9bHpvf5L0WW', '2025-05-21 19:16:35'),
(9, 'qw', 'qq@w', 'qq', '$2y$10$yngRwth5iXuQifUVqQfCQ./yhzHz1tq0P9u/TegZVaVh.zShM17n6', '2025-05-21 19:21:38'),
(10, 'ww', 'ww@dfgg', 'qqqq', '$2y$10$Pnaerkcrd/AWKCPlah965ueOWDYuI3zfFozSTqGkJ4o2chV/kAJv6', '2025-05-21 19:36:11'),
(11, 'wwwvff', 'wwww@ss', 'qqqqff', '$2y$10$6eFxMKG2vjqG0hyUYd2/c.e0PNYY3WHPX4UHJb.Q0wFvIMIVAVOly', '2025-05-21 19:43:45'),
(12, 'qqq', 'qqqqqqqq@qq', 'qqqqq', '$2y$10$3mIZhNHIA.2sQPTMq1LfUOImSQvNgp.j9pgnGJOLHUsvncs/oTIDS', '2025-05-21 19:57:37'),
(13, 'kaka', 'ksmdkamnsfim@sklmoisgd', 'jajjaa', '$2y$10$o5nV3P2nZynfWaq5GIgEDe5LSqP6JKjXLRFPtdSEOOiz014Kn3vWC', '2025-05-21 19:58:28'),
(14, 'kakaaa', 'ksmdkamnsfim@sklmoisgsasda', 'jajaja', '$2y$10$RjOgRocxMSJy8R8iU9sqhe8milvA0C3ZjftKgurJUl5swkKkPxdyC', '2025-05-21 19:59:12'),
(15, 'trjjt', 'jrtjjr@dfsere', 'qwe', '$2y$10$DZXImF1IAokqoaIqo9snwe.gLaKO4yZbIEpGrM2VHzDv2wHmeLQNS', '2025-05-26 21:10:27'),
(16, 'jose', 'ewfwefwfewf@efwf', 'josef', '$2y$10$rrNJtBXgzox96PUHksVvYOkjKt2rxelN4cyu/N1ZDyeFNZ8jdop1i', '2025-07-16 21:17:52'),
(17, 'jesusu', 'jdanielrodri573@gmail.com', 'jesusus', '$2y$10$MlCDcxJz4bXO0lNjSy5PneOrMepW7mWvTBdz/yCSlHJkiJp/9zcJW', '2025-09-08 20:41:27'),
(18, 'kgsgd', 'gwged@uhgoiewd', 'wert', '$2y$10$2E0g3AubF7OgIGlYOeom1.4Hn9hb8XjiXblaWaiPJL0JhjgKY7gzy', '2025-09-08 20:42:44'),
(19, 'Yostin', 'efobwevgwrgveg@ihve', 'kira', '$2y$10$VN8nHtCycq1JMIvmQVg3PO/pff2bzl303AvkkZNOl14ZUSkiGdl1G', '2025-09-29 19:47:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `mensaje` text NOT NULL,
  `fecha_envio` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre_completo`, `correo_electronico`, `telefono`, `mensaje`, `fecha_envio`) VALUES
(2, 'dsvzfv', 'dfvzdf@sdfsd', 'zfdbdzfb', 'zfdvbzfd', '2025-07-20 01:42:46'),
(3, 'JESUS', 'dfvzdf@sdfsd', 'zfdbdzfb', 'SADADFAEF', '2025-07-20 01:53:07'),
(4, 'rhy5y', '5y5y5@wd', 'yry5', 'y5ry5y5y5', '2025-09-01 19:10:09'),
(5, 'rhy5y', '5y5y5@wd', '4444', '444444', '2025-09-01 19:10:20'),
(6, 'Yostin', 'yostinbarrios23@gmail.com', '3134867434', 'Tuve un problema con una entrega ', '2025-09-29 19:46:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `salario` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `cargo`, `salario`) VALUES
(1, 'Yostin', 'Administrador', 3000000.99),
(2, 'Jesús', 'Administrador', 3000000.99),
(9, 'manuel', 'Contador', 500000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `pass`, `rol`) VALUES
('yostin', '1234', 'Admin'),
('jesus', '1234', 'Admin'),
('nose', 'qwer', 'Usuario'),
('qwe', '123', 'Usuario'),
('josef', '1234', 'Usuario'),
('jesusus', '12345', 'Usuario'),
('wert', 'qwer', 'Usuario'),
('kira', '2345', 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resenas`
--

CREATE TABLE `resenas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `comentario` text NOT NULL,
  `estrellas` int(11) NOT NULL CHECK (`estrellas` between 1 and 5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `resenas`
--

INSERT INTO `resenas` (`id`, `nombre`, `comentario`, `estrellas`) VALUES
(1, 'Mariana G.', 'Me encantó la calidad de los zapatos. ¡Volveré a comprar!', 5),
(2, 'Andrés P.', 'Rápido envío y excelente atención al cliente.', 5),
(3, 'Laura M.', 'Muy buenos precios y variedad. Recomendado.', 4),
(4, 'Felipe T.', 'Las zapatillas que compré son muy cómodas y se ven increíbles.', 5),
(5, 'Camila R.', 'Todo bien, aunque el empaque llegó un poco golpeado.', 4),
(16, 'Jesus', 'Me encanto los resultados ', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `monto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `cliente`, `monto`) VALUES
(7, '2025-07-23', 'FREDY VARGAS', 52000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapatos`
--

CREATE TABLE `zapatos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `talla` varchar(10) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `zapatos`
--

INSERT INTO `zapatos` (`id`, `nombre`, `marca`, `talla`, `genero`, `color`, `tipo`, `imagen`, `precio`) VALUES
(2, 'Ultraboost', 'Adidas', '40', 'Mujer', 'Blanco', 'Runningete', 'uploads/ultraboost_blanco.jpg', 52000),
(3, 'Chuck Taylor', 'Converse', '41', 'Unisex', 'Rojo', 'Casual', 'uploads/chuck_rojo.jpg', 48000),
(4, 'Classic Slip-On', 'Vans', '43', 'Hombre', 'Negro', 'Casual', 'uploads/vans_classic.jpg', 60000),
(5, 'Air Max 90', 'Nike', '39', 'Mujer', 'Rosa', 'Urbano', 'uploads/airmax90_rosa.jpg', 55000),
(6, 'Old Skool', 'Vans', '42.5', 'Unisex', 'Blanco y Negro', 'Skate', 'uploads/oldskool.jpg', 47000),
(7, 'Gel-Kayano', 'Asics', '44', 'Hombre', 'Azul', 'Running', 'uploads/gelkayano_azul.jpg', 53000),
(8, 'Speedcross', 'Salomon', '40', 'Mujer', 'Verde', 'Trail', 'uploads/speedcross_verde.jpg', 49000),
(9, 'Stan Smith', 'Adidas', '42', 'Unisex', 'Blanco', 'Casual', 'uploads/stan_smith.jpg', 58000),
(10, 'Pegasus 38', 'Nike', '41', 'Hombre', 'Gris', 'Running', 'uploads/pegasus38_gris.jpg', 62000),
(11, 'Classic Leather', 'Reebok', '40', 'Mujer', 'Beige', 'Casual', 'uploads/classic_leather.jpg', 54000),
(12, 'Superstar', 'Adidas', '43', 'Hombre', 'Blanco y Negro', 'Urbano', 'uploads/superstar_bn.jpg', 50000),
(13, 'Zoom Fly 5', 'Nike', '41.5', 'Unisex', 'Azul Marino', 'Competencia', 'uploads/zoomfly5.jpg', 59000),
(14, 'Metcon 8', 'Nike', '42', 'Hombre', 'Negro', 'Entrenamiento', 'uploads/metcon8.jpg', 56000),
(15, 'Nano X2', 'Reebok', '40.5', 'Mujer', 'Violeta', 'Entrenamiento', 'uploads/nano_x2.jpg', 47000),
(16, 'Cloud X', 'On', '44', 'Unisex', 'Gris Claro', 'Deportivo', 'uploads/cloudx.jpg', 53000),
(17, 'React Infinity', 'Nike', '41', 'Hombre', 'Rojo', 'Running', 'uploads/react_infinity.jpg', 48000),
(18, 'FuelCell Rebel', 'New Balance', '40', 'Mujer', 'Celeste', 'Running', 'uploads/fuelcell_rebel.jpg', 61000),
(19, 'Fresh Foam', 'New Balance', '42.5', 'Unisex', 'Negro y Verde', 'Running', 'uploads/freshfoam.jpg', 5700),
(20, 'Wave Rider', 'Mizuno', '43', 'Hombre', 'Azul Oscuro', 'Running', 'uploads/waverider.jpg', 49000),
(21, 'Clifton 9', 'Hoka', '40', 'Mujer', 'Rosa Claro', 'Running', 'uploads/clifton9.jpg', 55000),
(22, 'Bondi 8', 'Hoka', '42', 'Unisex', 'Gris Oscuro', 'Running', 'uploads/bondi8.jpg', 60000),
(23, 'Trail Glove', 'Merrell', '43', 'Hombre', 'Marrón', 'Trail', 'uploads/trail_glove.jpg', 52000),
(24, 'Altra Escalante', 'Altra', '41', 'Unisex', 'Negro', 'Running', 'uploads/escalante.jpg', 58000),
(25, 'ZoomX Vaporfly', 'Nike', '42', 'Hombre', 'Verde Fosforescente', 'Competencia', 'uploads/zoomx_vaporfly.jpg', 54000),
(26, 'Cloudmonster', 'On', '40', 'Mujer', 'Lila', 'Deportivo', 'uploads/cloudmonster.jpg', 47000),
(27, 'X Ultra', 'Salomon', '44', 'Unisex', 'Gris y Naranja', 'Trail', 'uploads/x_ultra.jpg', 51000),
(28, 'InfinityRN', 'Nike', '41', 'Hombre', 'Verde Oliva', 'Running', 'uploads/infinityrn.jpg', 56000),
(29, 'Noosa Tri', 'Asics', '40', 'Mujer', 'Multicolor', 'Triatlón', 'uploads/noosa_tri.jpg', 60000),
(30, 'MX857', 'New Balance', '43', 'Hombre', 'Negro y Gris', 'Entrenamiento', 'uploads/mx857.jpg', 58000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resenas`
--
ALTER TABLE `resenas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `zapatos`
--
ALTER TABLE `zapatos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `resenas`
--
ALTER TABLE `resenas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `zapatos`
--
ALTER TABLE `zapatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
