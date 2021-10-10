-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2021 a las 21:58:22
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokeapi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemons`
--

CREATE TABLE `pokemons` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `habilidades` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pokemons`
--

INSERT INTO `pokemons` (`id`, `nombre`, `imagen`, `habilidades`) VALUES
(1, 'Bulbasaur', '001.png', 'Overgrow'),
(2, 'ivysaur', '002.png', 'Overgrow'),
(3, 'Venusaur', '003.png', 'Overgrow'),
(4, 'Charmander', '004.png', 'Blaze'),
(4, 'Charmander', '004.png', 'Blaze'),
(5, 'Charmeleon', 'imagen_2021-10-10_134525.png', 'Blaze'),
(6, 'Charizard', '006.png', 'Blaze'),
(7, 'Squirtle', '007.png', 'Torrent'),
(8, 'Wartortle', '008.png', 'Torrent'),
(9, 'Blastoise', '009.png', 'Torrent');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `username`, `pass`, `email`) VALUES
(1, 'Jhon Huoker', 'JHker', '12345', 'jchalarcaramirez@gmail.com'),
(3, 'Joana Carolina', 'Joa2002', '12345', 'joacarol@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
