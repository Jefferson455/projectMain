-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-01-2023 a las 12:19:34
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_projectmain`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frases`
--

CREATE TABLE `frases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `frases`
--

INSERT INTO `frases` (`id`, `name`) VALUES
(1, 'Te convertiste en lo más lindo de mi vida'),
(2, 'Y eres lo más lindo de esta vida que mis ojos hayan podido contemplar'),
(3, 'Cada momento a tu lado se convierte en la experiencia más linda'),
(4, 'E iré contento al infierno presumiendo que estuve en el paraíso, que conocí al ángel más lindo de todos y la besé'),
(5, 'Eres mi droga'),
(6, 'Nunca pensé que habría una loca como tú, en este mundo lleno de cuerdos'),
(7, 'Anímate las princesas no lloran, las guerreras siempre se levantan, las damas mantienen su estilo, las loquitas no se dejan convencer de nadie y tu eres eso y ¡mucho más!'),
(8, 'Un beso tuyo es la droga más poderosa, me hace sentir que puedo acabar con mil demonios'),
(9, 'Dame ese beso, dame esa droga...'),
(10, 'Cada momento por más simple que sea cerca de ti, se convierte en un mundo lleno de emociones únicas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `idlibro` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fk_idUsuarios` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`idlibro`, `nombre`, `descripcion`, `fk_idUsuarios`) VALUES
(77, 'Test II', 'Test II para mirar si toma bien los archivos', 1),
(81, 'sddad', 'adada', 9),
(82, 'sdafsdfaf', 'afafafa', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombre`, `usuario`, `password`) VALUES
(1, 'Jefferson', 'J3ff3rson', 'J3ff3rson45X'),
(2, 'Eduardo', '3du4rd0', 'J3ff3rson45X'),
(3, 'guz', '3du4rd0', 'J3ff3rson45X'),
(4, 'Jose', 'J0s3', 'asdadasdas'),
(5, 'Monica', 'M0n1c4', 'Masda'),
(6, 'Juli', 'Jul1', 'Ju123'),
(8, 'Quitian', 'Quiti4n', 'JeffersonGuzman45x'),
(9, 'Tatiana', 'T4T14na', 'T4t1ana123'),
(10, 'Jeffersonn', 'Jeffer45', 'J3ff3rson45x'),
(11, 'asdfg', 'asdfg45', 'FFF$%X'),
(12, 'Andrés', 'andres45', 'Andreselmascapo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `frases`
--
ALTER TABLE `frases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`idlibro`),
  ADD KEY `fk_idusuarios` (`fk_idUsuarios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `frases`
--
ALTER TABLE `frases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `idlibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `fk_idusuarios` FOREIGN KEY (`fk_idUsuarios`) REFERENCES `usuarios` (`idusuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
