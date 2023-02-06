-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2022 a las 01:02:54
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_chat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `nombre`) VALUES
(0, 'Global'),
(3, 'grupo A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatdirecto`
--

CREATE TABLE `chatdirecto` (
  `id` int(11) NOT NULL,
  `id_user1` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `message_date` varchar(255) DEFAULT NULL,
  `message_hora` varchar(27) NOT NULL,
  `id_chat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `id_user`, `message`, `message_date`, `message_hora`, `id_chat`) VALUES
(3, 3, 'Hola amigos', '23/11/2022', '20:20', 0),
(4, 2, 'qfqfq', '23/11/2022', '20:21', 0),
(5, 2, 'yjeue4y', '23/11/2022', '20:25', 0),
(6, 3, 'alo', '23/11/2022', '20:30', 0),
(7, 2, 'twtfqwpignqk4ñantgpiq3kñl.', '23/11/2022', '20:33', 0),
(8, 2, '', '23/11/2022', '21:24', 0),
(9, 2, 'Fw', '24/11/2022', '16:19', 0),
(10, 2, 'Fw', '24/11/2022', '16:20', 0),
(11, 2, 'wWWF', '24/11/2022', '16:20', 0),
(15, 2, 'ADF', '24/11/2022', '16:23', 0),
(16, 2, 'u', '24/11/2022', '16:33', 0),
(17, 2, 't', '24/11/2022', '16:34', 0),
(18, 2, 'as', '24/11/2022', '16:37', 0),
(19, 3, 'hola', '24/11/2022', '17:47', 0),
(20, 3, 'hola mundo', '24/11/2022', '18:20', 0),
(21, 3, 'Hola amigos', '28/11/2022', '18:19', 0),
(22, 2, 'hola pablo', '28/11/2022', '18:21', 0),
(23, 2, 'holi', '28/11/2022', '18:23', 3),
(24, 3, 'alo', '28/11/2022', '18:24', 0),
(25, 3, 'hola mundo', '28/11/2022', '18:30', 0),
(26, 3, 'hola comino', '28/11/2022', '18:36', 3),
(27, 2, 'adios', '28/11/2022', '21:18', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messagesdirectos`
--

CREATE TABLE `messagesdirectos` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `message_date` varchar(255) NOT NULL,
  `message_hora` varchar(255) NOT NULL,
  `id_chat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `rol` int(1) DEFAULT 0,
  `status` int(11) NOT NULL,
  `last_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`, `rol`, `status`, `last_login`) VALUES
(1, 'pablitoXxAmores', 'c20ad4d76fe97759aa27a0c99bff6710', 1, 0, 1669307426),
(2, 'jairo', 'c4ca4238a0b923820dcc509a6f75849b', 1, 1, 1669667330),
(3, 'pablito', '7719f1e81b76ef1409b07dbca07bff4d', 0, 1, 1669659539);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `messagesdirectos`
--
ALTER TABLE `messagesdirectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `messagesdirectos`
--
ALTER TABLE `messagesdirectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
