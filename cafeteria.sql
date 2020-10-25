-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2020 a las 19:25:12
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafeteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `categorias`
--

TRUNCATE TABLE `categorias`;
--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Postres'),
(2, 'Bebidas'),
(3, 'Bocadillos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `clientes`
--

TRUNCATE TABLE `clientes`;
--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `email`, `telefono`, `direccion`) VALUES
(2, 'Cristian', 'Cabrera', 'crisscout6@gmail.com', '75004779', 'Calle Macondo'),
(3, 'Cristian', 'Cabrera', 'cris.mothy@gmail.com', '75004779', 'sdfghjkl;\''),
(4, 'Cristian', 'Cabrera', 'crisscout6@gmail.com', '75004779', 'sdfghjk'),
(5, 'Cristian', 'Cabrera', 'cris.mothy@gmail.com', '78525625', 'zwxecrfvtbyhnujmik,ol.'),
(6, 'dfghjk', 'sdfghj', 'dddgdgd@gdhjdsf', '74125', 'asdfghjk'),
(7, 'Daniel', 'Lopez', 'd.ivan_03@hotmail.com', '1888888', 'urbanizacion los nogales'),
(8, 'Daniel', 'Cartagena', 'daniel.cartagena@gmail.com', '12345678', 'Calle los arboles, casa #15'),
(9, 'Carlos', 'Moran', 'carlos.moran@gmail.com', '12345678', 'Calle la reforma, Casa #45'),
(10, 'Diego', 'Alvarado', 'coffeeplace202@gmail.com', '12345678', 'Calle la reforma, casa #14'),
(11, 'Laura', 'Alvarado', 'df@d.com', '87456123', 'Calle La mascota casa #4'),
(12, 'Jairo', 'Cordoba', 'jairo@gmail.com', '75004796', 'Calle la ardilla casa #4'),
(13, 'David', 'Najera', 'david@gmail.com', '12345678', 'Calle Don Bosco, Casa #4'),
(14, 'Miguel', 'Mendoza', 'miguel@gmail.com', '76324561', 'Calle La mascota, Casa #5'),
(15, 'Luis', 'Rodas', 'luis@gmail.com', '12345678', 'Calle Samsung, casa #3'),
(16, 'Laura', 'Consuegra', 'laura@gmail.com', '75203645', 'Calle Don Bosco, Casa # 3'),
(17, 'Guillermo', 'Flores', 'guille@gmail.com', '12345678', 'Calle Don Bosco, casa #4'),
(18, 'Ernesto', 'Canales', 'ernesto@gmail.com', '7425631', 'Calle la mascota, casa #4'),
(19, 'Efrain', 'Rodriguez', 'efrain@gmail.com', '12345678', 'Calle las araucarias, casa #4'),
(21, 'Ignacio', 'Martinez', 'ignacio@gmail.com', '12345678', 'Calle las arboledas, cas #5'),
(22, 'Alan', 'Alvarenga', 'alan@gmail.com', '12345678', 'Calle la mascota, casa # 7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedidos`
--

CREATE TABLE `detalle_pedidos` (
  `id` int(10) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `panaderia_id` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `detalle_pedidos`
--

TRUNCATE TABLE `detalle_pedidos`;
--
-- Volcado de datos para la tabla `detalle_pedidos`
--

INSERT INTO `detalle_pedidos` (`id`, `pedido_id`, `panaderia_id`, `precio`, `cantidad`, `estado`) VALUES
(1, 2, 24, '1.50', 1, 1),
(2, 2, 23, '2.00', 1, 1),
(3, 2, 22, '3.00', 1, 1),
(4, 3, 24, '1.50', 1, 1),
(5, 3, 18, '2.00', 1, 1),
(6, 3, 21, '1.00', 1, 1),
(7, 4, 22, '3.00', 7, 1),
(8, 4, 21, '1.00', 100, 1),
(9, 5, 23, '2.00', 5, 1),
(10, 5, 22, '3.00', 2, 1),
(11, 5, 21, '1.00', 100, 1),
(12, 6, 24, '1.50', 100, 1),
(13, 7, 32, '2.50', 1, 1),
(14, 7, 29, '3.00', 2, 1),
(15, 8, 32, '2.50', 3, 1),
(16, 8, 22, '3.00', 2, 1),
(17, 8, 28, '5.00', 1, 1),
(18, 9, 24, '1.50', 3, 1),
(19, 9, 18, '2.00', 5, 1),
(20, 10, 29, '3.00', 3, 1),
(21, 10, 22, '3.00', 12, 1),
(22, 11, 28, '5.00', 3, 1),
(23, 11, 24, '1.50', 5, 1),
(24, 12, 28, '5.00', 4, 1),
(25, 12, 24, '1.50', 3, 1),
(26, 13, 29, '3.00', 6, 1),
(27, 13, 18, '2.00', 2, 1),
(28, 14, 43, '1.00', 10, 1),
(29, 14, 28, '5.00', 3, 1),
(30, 15, 28, '5.00', 5, 1),
(31, 15, 21, '1.00', 8, 1),
(32, 16, 28, '5.00', 3, 1),
(33, 16, 45, '2.00', 3, 1),
(34, 17, 28, '5.00', 4, 1),
(35, 17, 46, '1.50', 4, 1),
(36, 18, 21, '1.00', 10, 1),
(37, 18, 29, '3.00', 1, 1),
(38, 19, 28, '5.00', 1, 1),
(39, 19, 48, '1.00', 1, 1),
(40, 19, 24, '1.50', 3, 1),
(41, 20, 29, '2.00', 2, 1),
(42, 20, 22, '3.00', 4, 1),
(43, 21, 48, '2.00', 1, 1),
(44, 21, 24, '1.50', 1, 1),
(45, 22, 28, '5.00', 6, 1),
(46, 22, 48, '2.00', 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `panaderia`
--

CREATE TABLE `panaderia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `panaderia`
--

TRUNCATE TABLE `panaderia`;
--
-- Volcado de datos para la tabla `panaderia`
--

INSERT INTO `panaderia` (`id`, `titulo`, `descripcion`, `foto`, `precio`, `categoria_id`, `fecha`, `estado`) VALUES
(19, 'Pastel de Zanahoria ', 'Porción de pastel de zanahoria', 'PasteldeZanahoria.jpg', '1.50', 1, '2020-08-13', 1),
(20, 'Pastel de chocolate', 'Porción de pastel de chocolate', 'Pastel.jfif', '1.50', 1, '2020-08-13', 1),
(21, 'Tartaleta', 'Tartaleta tropical', 'Tartaleta.jfif', '1.00', 1, '2020-08-13', 1),
(22, 'Cupcakes', 'Docena de cupcakes de chocolate', 'Cupcakes.jpg', '3.00', 1, '0000-00-00', 1),
(24, 'Tres Leches', 'postre Tres leches con fresa ', 'tresleches.jfif', '1.50', 1, '2020-08-09', 1),
(28, 'Pizza personal', 'Pizza artesanal de un ingrediente', 'Pizza.jpg', '5.00', 3, '2020-08-14', 1),
(29, 'Sandwich', 'Sandwich clasico con papas', 'Sandwich.jfif', '2.00', 3, '2020-09-11', 1),
(48, 'Limonada', 'refrescante limonada', 'cold-drink-1535766_1920.jpg', '1.00', 2, '2020-08-22', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(10) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `pedidos`
--

TRUNCATE TABLE `pedidos`;
--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `cliente_id`, `total`, `fecha`, `estado`) VALUES
(2, 2, '6.50', '2020-08-09', 2),
(3, 3, '4.50', '2020-08-10', 2),
(4, 4, '121.00', '2020-08-11', 2),
(5, 5, '116.00', '2020-08-11', 2),
(6, 6, '150.00', '2020-08-13', 2),
(7, 7, '8.50', '2020-08-14', 2),
(8, 8, '18.50', '2020-08-14', 2),
(9, 9, '14.50', '2020-08-14', 2),
(10, 10, '45.00', '2020-08-19', 1),
(11, 11, '22.50', '2020-08-19', 1),
(12, 12, '24.50', '2020-08-19', 1),
(13, 13, '22.00', '2020-08-19', 1),
(14, 14, '25.00', '2020-08-19', 1),
(15, 15, '33.00', '2020-08-20', 1),
(16, 16, '21.00', '2020-08-20', 1),
(17, 17, '26.00', '2020-08-20', 1),
(18, 18, '13.00', '2020-08-20', 1),
(19, 19, '10.50', '2020-08-21', 2),
(20, 20, '16.00', '2020-08-21', 1),
(21, 21, '3.50', '2020-08-21', 1),
(22, 22, '42.00', '2020-08-22', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `usuarios`
--

TRUNCATE TABLE `usuarios`;
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `clave`, `estado`) VALUES
(3, 'Cris', '123', 1),
(4, 'Admin', '1234', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `panaderia`
--
ALTER TABLE `panaderia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `panaderia`
--
ALTER TABLE `panaderia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
