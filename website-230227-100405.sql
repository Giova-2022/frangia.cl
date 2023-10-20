-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2023 a las 17:03:44
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
-- Base de datos: `website`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_configuraciones`
--

CREATE TABLE `tbl_configuraciones` (
  `ID` int(11) NOT NULL,
  `nombreconfiguracion` varchar(255) NOT NULL,
  `valor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_configuraciones`
--

INSERT INTO `tbl_configuraciones` (`ID`, `nombreconfiguracion`, `valor`) VALUES
(1, 'bienvenida_principal', 'Bienvenid@ a la academia'),
(3, 'bienvenida_secundaria', 'APRENDE PASO A PASO'),
(4, 'boton_principal', 'EMPEZAR'),
(5, 'link_boton_principal', '#services'),
(6, 'titulo_servicios', 'SERVICIOS'),
(7, 'descripcion_servicios', 'Estos son nuestros servicios'),
(8, 'titulo_portfolio', 'PORTAFOLIO'),
(9, 'descripcion_portfolio', 'Estos son nuestros proyectos'),
(10, 'titulo_about', 'NOSOTROS'),
(11, 'descripcion_about', 'Conoce nuestra historia'),
(12, 'ultima_opcion_about', 'Ahora faltas tú'),
(13, 'titulo_team', 'NUESTRO EQUIPO'),
(14, 'descripcion_team', 'Personas que vuelven realidad este proyecto'),
(15, 'titulo_contacto', 'CONTACTAR'),
(16, 'descripcion_contacto', 'uhperezoscar@gmail.com'),
(17, 'link_tw', 'http://twitter.com/develoteca'),
(18, 'link_facebook', 'http://facebook.com/develoteca'),
(19, 'link_linkedin', 'http://linkedin.com/develoteca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_entradas`
--

CREATE TABLE `tbl_entradas` (
  `ID` int(11) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_entradas`
--

INSERT INTO `tbl_entradas` (`ID`, `fecha`, `titulo`, `descripcion`, `imagen`) VALUES
(4, '2023-02-10', 'Nuestros inicios', 'En este año empezamos con el proyecto', '1676153705_imagen_about.jpg'),
(5, '2024-02-28', 'Aumentamos nuestra plantilla', 'Empezamos a contratar gente profesional para unirse al quipo.', '1676153766_2 (1).jpg'),
(6, '20226-02-10', 'Nos mudamos', 'Nos mudamos a nuestras nuevas instalaciones', '1676153891_3 (1).jpg'),
(7, '2027-02-11', 'Nos expandimos', 'Nos expandimos a nivel mundial', '1676153927_4 (1).jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_equipo`
--

CREATE TABLE `tbl_equipo` (
  `ID` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `nombrecompleto` varchar(255) NOT NULL,
  `puesto` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_equipo`
--

INSERT INTO `tbl_equipo` (`ID`, `imagen`, `nombrecompleto`, `puesto`, `twitter`, `facebook`, `linkedin`) VALUES
(5, '1676824081_218219423_10215845167322599_6295680861914261894_n.jpg', 'OSCAR UH', 'CEO', 'http://twitter.com/develote', 'http://facebook.com/develote', 'http://linkedin.com/develote'),
(6, '1676824172_1674348862_360_F_443979460_9hcghscsNriF3FDrEIrYYQ6nvwUX7hlC.jpg', 'MARISA', 'CTO', 'http://twitter.com/develoteca', 'http://facebook.com/develoteca', 'http://linkedin.com/develoteca'),
(9, '1676824216_1674348973_istockphoto-1034235626-612x612.jpg', 'EQUIPO', 'Colaboradores', 'http://twitter.com/develoteca', 'http://facebook.com/develoteca', 'http://linkedin.com/develoteca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_portafolio`
--

CREATE TABLE `tbl_portafolio` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_portafolio`
--

INSERT INTO `tbl_portafolio` (`ID`, `titulo`, `subtitulo`, `imagen`, `descripcion`, `cliente`, `categoria`, `url`) VALUES
(12, 'Tienda DEVELOTECA', 'Creamos sitios web a la medida', '1676137935_tienda.jpg', 'Nuestros sitios web a la medida buscan mostrar productos y venderlos a sus clientes', 'DEVELOTECA', 'VENTAS', 'https://tienda.develoteca.com'),
(13, 'Academia DEVELOTECA', 'Plataformas para aprender', '1676138156_academia.jpg', 'Configuramos sitios para publicar cursos en internet y poder venderlos a todo el mundo', 'DEVELOTECA', 'Educación', 'http://cursos.develoteca.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_servicios`
--

CREATE TABLE `tbl_servicios` (
  `ID` int(11) NOT NULL,
  `icono` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_servicios`
--

INSERT INTO `tbl_servicios` (`ID`, `icono`, `titulo`, `descripcion`) VALUES
(2, 'fa-laptop', 'Cursos en línea', 'Venta de cursos de programación'),
(3, 'fa-address-book', 'Mentoría', 'Apoyo a creación de cursos'),
(7, 'fa-commerce', 'Venta de software', 'Vendemos todo tipo de software');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `usuario`, `password`, `correo`) VALUES
(2, 'develoteca', '12345', 'dimit82@gmail.com'),
(3, 'dev', '12345', 'uhperezoscar@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_configuraciones`
--
ALTER TABLE `tbl_configuraciones`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_entradas`
--
ALTER TABLE `tbl_entradas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_equipo`
--
ALTER TABLE `tbl_equipo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_portafolio`
--
ALTER TABLE `tbl_portafolio`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_configuraciones`
--
ALTER TABLE `tbl_configuraciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `tbl_entradas`
--
ALTER TABLE `tbl_entradas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_equipo`
--
ALTER TABLE `tbl_equipo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tbl_portafolio`
--
ALTER TABLE `tbl_portafolio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
