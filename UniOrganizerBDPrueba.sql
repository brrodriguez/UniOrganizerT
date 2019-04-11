

DROP DATABASE IF EXISTS `uniorganizer`;
CREATE DATABASE IF NOT EXISTS `uniorganizer` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `uniorganizer`;
GRANT ALL PRIVILEGES ON * . * TO 'root'@'localhost';
FLUSH PRIVILEGES;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2018 a las 22:35:45
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `UniOrganizer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `idAsignatura` int(10) NOT NULL,
  `nombreAsignatura` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`idAsignatura`, `nombreAsignatura`) VALUES
(1, 'Asignatura de prueba 1'),
(2, 'Asignatura de prueba 2'),
(3, 'Asignatura de prueba 3'),
(4, 'asignatura de prueba 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE `pagina` (
  `idPagina` int(10) NOT NULL,
  `linkPagina` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `nombrePagina` varchar(80) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`idPagina`, `linkPagina`, `nombrePagina`) VALUES
(1, '../templates/UsuarioShowall.html.twig', 'USUARIO SHOWALL'),
(2, '../templates/UsuarioSelect.html.twig', 'USUARIO SELECT'),
(3, '../templates/UsuarioAdd.html.twig', 'USUARIO ADD'),
(4, '../templates/UsuarioEdit.html.twig', 'USUARIO EDIT'),
(5, '../templates/UsuarioDelete.html.twig', 'USUARIO DELETE'),
(6, '../templates/UsuarioShow.html.twig', 'USUARIO SHOW'),
(100, '../templates/AsignaturaShowall.html.twig', 'Asignatura SHOWALL'),
(101, '../templates/AsignaturaDelete.html.twig', 'Asignatura DELETE'),
(150, '../templates/CursoShowall.html.twig', 'Curso SHOW ALL'),
(151, '../templates/CursoAdd.html.twig', 'Curso ADD'),
(152, '../templates/CursoEdit.html.twig', 'Curso EDIT'),
(153, '../templates/CursoDelete.html.twig', 'Curso DELETE'),
(154, '../templates/CursoFilter.html.twig', 'Curso FILTER'),
(200, '../templates/AlertaAdd.html.twig', 'Alerta ADD'),
(201, '../templates/AlertaDelete.html.twig', 'Alerta DELETE'),
(202, '../templates/AlertaEdit.html.twig', 'Alerta EDIT'),
(300, '../templates/EventoShowall.html.twig', 'Evento SHOWALL'),
(301, '../templates/EventoAdd.html.twig', 'Evento ADD'),
(302, '../templates/EventoDelete.html.twig', 'Evento DELETE'),
(303, '../templates/EventoEdit.html.twig', 'Evento EDIT'),
(304, '../templates/EventoFilter.html.twig', 'Evento FILTER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionalidad`
--

CREATE TABLE `funcionalidad` (
  `idFuncionalidad` int(10) NOT NULL,
  `nombreFuncionalidad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `categoriaFuncionalidad` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `funcionalidad`
--

INSERT INTO `funcionalidad` (`idFuncionalidad`, `nombreFuncionalidad`, `categoriaFuncionalidad`) VALUES
(1, 'Listar Usuarios', 'Gestion Usuarios'),
(2, 'Seleccionar Usuarios', 'Gestion Usuarios'),
(3, 'Añadir Usuario', 'Gestion Usuarios'),
(4, 'Modificar Usuario', 'Gestion Usuarios'),
(5, 'Borrar Usuario', 'Gestion Usuario'),
(6, 'Ver Usuario', 'Gestion Usuarios'),
(100, 'Listar Asignaturas', 'Gestion Asignaturas'),
(101, 'Borrar Asignatura', 'Gestion Asignaturas'),
(150, 'Listar Cursos', 'Gestion Cursos'),
(151, 'Añadir Curso', 'Gestion Cursos'),
(152, 'Editar Curso', 'Gestion Cursos'),
(153, 'Borrar Curso', 'Gestion Cursos'),
(154, 'Filtrar Cursos', 'Gestion Cursos'),
(200, 'Insertar Alerta', 'Gestion Alertas'),
(201, 'Baja Alerta', 'Gestion Alertas'),
(202, 'Modificar Alerta', 'Gestion Alertas'),
(300, 'Listar Eventos', 'Gestion Eventos'),
(301, 'Insertar Evento', 'Gestion Eventos'),
(302, 'Baja Evento', 'Gestion Eventos'),
(303, 'Modificar Evento', 'Gestion Eventos'),
(304, 'Filtrar Eventos', 'Gestion Eventos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionalidad_pagina`
--

CREATE TABLE `funcionalidad_pagina` (
  `idFuncionalidad` int(10) NOT NULL,
  `idPagina` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `funcionalidad_pagina`
--

INSERT INTO `funcionalidad_pagina` (`idFuncionalidad`, `idPagina`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(100, 100),
(101, 101),
(150, 150),
(151, 151),
(152, 152),
(153, 153),
(154, 154),
(200, 200),
(201, 201),
(202, 202),
(300, 300),
(301, 301),
(302, 302),
(303, 303),
(304, 304);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionalidad_rol`
--

CREATE TABLE `funcionalidad_rol` (
  `idFuncionalidad` int(10) NOT NULL,
  `idRol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `funcionalidad_rol`
--

INSERT INTO `funcionalidad_rol` (`idFuncionalidad`, `idRol`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(6, 2),
(100, 1),
(100, 2),
(101, 1),
(150, 1),
(150, 2),
(151, 2),
(152, 1),
(152, 2),
(153, 1),
(153, 2),
(154, 1),
(154, 2),
(200, 2),
(201, 1),
(201, 2),
(202, 1),
(202, 2),
(300, 1),
(300, 2),
(301, 2),
(302, 1),
(302, 2),
(303, 1),
(303, 2),
(304, 1),
(304, 2);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idCurso` int(10) NOT NULL,
  `nombreCurso` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `descripcionCurso` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idCurso`, `nombreCurso`, `descripcionCurso`, `username`) VALUES
(1, 'Curso de prueba 1', 'Curso de preuba', 'admin'),
(2, 'Curso de prueba 2', 'Curso de prueba', 'bruno'),
(3, 'Curso de prueba 3', 'Curso de preuba', 'admin2'),
(4, 'Curso de prueba 4', 'Curso de prueba', 'bruno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alerta`
--

CREATE TABLE `alerta` (
  `idAlerta` int(10) NOT NULL,
  `asuntoAlerta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcionAlerta` text COLLATE utf8_spanish_ci,
  `dia` date NOT NULL,
  `horaInicio` time NOT NULL,
  `horaFin` time NOT NULL,
  `idEvento` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alerta`
--

INSERT INTO `alerta` (`idAlerta`, `asuntoAlerta`, `descripcionAlerta`, `dia`, `horaInicio`, `horaFin`, `idEvento`) VALUES
(1, 'Alerta de prueba', 'Alerta de prueba', '2018-11-2', '10:00', '11:00', 1),
(2, 'Alerta examen', 'Alerta de examen', '2018-11-3', '10:00', '11:00', 2),
(3, 'Alerta de prueba 2', 'Alerta', '2018-11-5', '09:00', '10:00', 3),
(4, 'Alerta de prueba 3', 'Alerta de prueba', '2018-11-8', '12:00', '13:00', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idEvento` int(10) NOT NULL,
  `asuntoEvento` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcionEvento` text COLLATE utf8_spanish_ci,
  `dia` date NOT NULL,
  `horaInicio` time NOT NULL,
  `horaFin` time NOT NULL,
  `idAsignatura` int(10)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idEvento`, `asuntoEvento`, `descripcionEvento`, `dia`, `horaInicio`, `horaFin`, `idAsignatura`) VALUES
(1, 'Evento de prueba', 'Evento de prueba','2018-11-5', '10:00', '11:00', 1),
(2, 'Examen', 'Examen','2018-11-6', '10:00', '11:00', 2),
(3, 'Evento de prueba 2', 'Evento de prueba 2','2018-11-7', '09:00', '10:00', NULL),
(4, 'Evento de prueba 3', 'Evento de prueba 3','2018-11-8', '12:00', '13:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_evento`
--

CREATE TABLE `curso_evento` (
  `idCurso` int(10) NOT NULL,
  `idEvento` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `curso_evento` (`idCurso`, `idEvento`) VALUES
(2, 1),
(2, 2),
(2, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(10) NOT NULL,
  `nombreRol` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombreRol`) VALUES
(1, 'Administrador'),
(2, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `username` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipoUsuario` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `fechaNac` date NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`username`, `password`, `tipoUsuario`, `nombre`, `apellidos`, `dni`, `fechaNac`, `email`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Bruno', 'Romero Rodríguez', '44488795X', '1996-04-22', 'administracion@gmail.com'),
('admin2', '220a15a78a728aa88fcf45d009705d96', 1, 'Alberto', 'Míguez Fernández', '54064900L', '1994-09-17', 'alberto@gmail.com'),
('bruno', 'e3928a3bc4be46516aa33a79bbdfdb08', 2, 'Bruno', 'Romero Rodriguez', '45147231W', '1995-10-10', 'brrodriguez@gmail.com'),
('alex', '9dafe1b7ef8477287cc4ff5cf99d1fa1', 2, 'Alejandro', 'García Gomez', '44495311V', '1997-01-12', 'alejandro@gmail.com'),
('nicolas', 'deb97a759ee7b8ba42e02dddf2b412fe', 2, 'Nicolas', 'Ferran Torres', '72163040B', '1994-06-17', 'nicolasft@gmail.com'),
('brais', 'e77a37f64e93e3e3e0211e76bfe512b7', 2, 'Brais', 'Cruz Vázquez', '47507291D', '1995-03-23', 'braisCV@gmail.com');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_rol`
--

CREATE TABLE `usuario_rol` (
  `username` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idRol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario_rol`
--

INSERT INTO `usuario_rol` (`username`, `idRol`) VALUES
('admin', 1),
('admin2', 1),
('bruno', 2),
('alex', 2),
('nicolas', 2),
('brais', 2);

-- --------------------------------------------------------

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idCurso`),
  ADD KEY `username` (`username`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`idAsignatura`);

--
-- Indices de la tabla `funcionalidad`
--
ALTER TABLE `funcionalidad`
  ADD PRIMARY KEY (`idFuncionalidad`);

--
-- Indices de la tabla `funcionalidad_pagina`
--
ALTER TABLE `funcionalidad_pagina`
  ADD PRIMARY KEY (`idFuncionalidad`,`idPagina`),
  ADD KEY `idFuncionalidad` (`idFuncionalidad`),
  ADD KEY `idPagina` (`idPagina`);

--
-- Indices de la tabla `funcionalidad_rol`
--
ALTER TABLE `funcionalidad_rol`
  ADD PRIMARY KEY (`idFuncionalidad`,`idRol`),
  ADD KEY `idFuncionalidad` (`idFuncionalidad`),
  ADD KEY `idRol` (`idRol`);

--
-- Indices de la tabla `alerta`
--
ALTER TABLE `alerta`
  ADD PRIMARY KEY (`idAlerta`),
  ADD KEY `idEvento` (`idEvento`);
  
--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idEvento`),
  ADD KEY `idAsignatura` (`idAsignatura`);
  
--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`idPagina`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);
  
--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `tipoUsuario` (`tipoUsuario`);

--
-- Indices de la tabla `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD PRIMARY KEY (`username`,`idRol`),
  ADD KEY `usuario_rol_ibfk_2` (`idRol`);
  
--
-- Indices de la tabla `curso_evento`
--
ALTER TABLE `curso_evento`
 ADD PRIMARY KEY(`idCurso`, `idEvento`),
 ADD KEY `idCurso` (`idCurso`),
 ADD KEY `idEvento` (`idEvento`);
 
--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `idAsignatura` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `funcionalidad`
--
ALTER TABLE `funcionalidad`
  MODIFY `idFuncionalidad` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=606;

--
-- AUTO_INCREMENT de la tabla `alerta`
--
ALTER TABLE `alerta`
  MODIFY `idAlerta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

  --
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idEvento` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
  
--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `idPagina` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=606;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
  
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idCurso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
  
--
-- AUTO_INCREMENT de la tabla `usuario_rol`
--
ALTER TABLE `usuario_rol`
  MODIFY `idRol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `funcionalidad_pagina`
--
ALTER TABLE `funcionalidad_pagina`
  ADD CONSTRAINT `funcionalidad_pagina_ibfk_1` FOREIGN KEY (`idFuncionalidad`) REFERENCES `funcionalidad` (`idFuncionalidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `funcionalidad_pagina_ibfk_2` FOREIGN KEY (`idPagina`) REFERENCES `pagina` (`idPagina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `funcionalidad_rol`
--
ALTER TABLE `funcionalidad_rol`
  ADD CONSTRAINT `funcionalidad_rol_ibfk_1` FOREIGN KEY (`idFuncionalidad`) REFERENCES `funcionalidad` (`idFuncionalidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `funcionalidad_rol_ibfk_2` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE;

  
--
-- Filtros para la tabla `curso_evento`
--
ALTER TABLE `curso_evento`
  ADD CONSTRAINT `curso_evento_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `curso_evento_ibfk_2` FOREIGN KEY (`idEvento`) REFERENCES `evento` (`idEvento`) ON DELETE CASCADE ON UPDATE CASCADE;
  
--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`username`) REFERENCES `usuario` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
  

--
-- Filtros para la tabla `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD CONSTRAINT `usuario_rol_ibfk_1` FOREIGN KEY (`username`) REFERENCES `usuario` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_rol_ibfk_2` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE;
 
--
-- constraints for table `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_2` FOREIGN KEY (`idAsignatura`) REFERENCES `asignatura` (`idAsignatura`) ON DELETE CASCADE ON UPDATE CASCADE;
  
--
-- constraints for table `alerta`
--
ALTER TABLE `alerta`
  ADD CONSTRAINT `alerta_ibfk_2` FOREIGN KEY (`idEvento`) REFERENCES `evento` (`idEvento`) ON DELETE CASCADE ON UPDATE CASCADE;

  
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
