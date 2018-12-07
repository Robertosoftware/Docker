-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-12-2018 a las 23:32:32
-- Versión del servidor: 5.7.24-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mandra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_name`, `password`, `create_time`) VALUES
(1, 'root', '31e62ebbba28ef5dcde7a179bf3c32c7', '2018-12-06 04:09:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`, `descripcion`) VALUES
(1, 'Ingenieria', 'Licenciatura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia`
--

CREATE TABLE `competencia` (
  `idcompetencia` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `subcategoria_idsubcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `competencia`
--

INSERT INTO `competencia` (`idcompetencia`, `nombre`, `subcategoria_idsubcategoria`) VALUES
(1, 'Programación orientada a objetos', 1),
(2, 'Bases de datos', 1),
(3, 'Programacion para Web', 1),
(4, 'Sistemas operativos', 1),
(5, 'Programacion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion`
--

CREATE TABLE `educacion` (
  `ideducacion` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `educacion`
--

INSERT INTO `educacion` (`ideducacion`, `nombre`) VALUES
(1, 'Doctorado'),
(2, 'Maestria o especialidad'),
(3, 'Licenciatura'),
(4, 'Bachillerato'),
(5, 'Secundaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idempresa` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `correo` varchar(55) DEFAULT NULL,
  `telefono` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idempresa`, `nombre`, `descripcion`, `correo`, `telefono`) VALUES
(1, 'Grupo salinas', NULL, NULL, '5551911474'),
(2, 'Manpower', 'Insurgentes Centro 36, colonia Tabacalera', NULL, '5528995303'),
(3, 'Posadas', 'Prolongación Paseo de la Reforma 1015 Piso 9 Torre A Col Santa Fe Del. Álvaro Obregón CP 01210, México DF', NULL, '+52 (55) 5326 6700'),
(4, 'Profuturo', NULL, 'servicioaclientes@profuturo.com.mx', '58 09 65 55'),
(5, 'tkm', 'Av. Amores 321, Col. Del Valle, Del. Benito Juárez, C.P. 03100, CDMX', 'soluciones@tkm.com.mx', '+52 (55) 5326 6734'),
(6, 'Santander', NULL, NULL, '51694300'),
(7, 'Citibanamex', NULL, NULL, '2262 6391'),
(8, 'Sanpablo', NULL, NULL, '(55) 5354 9000'),
(9, 'Grupo prodensa', NULL, NULL, '52 81 1161 90 00'),
(10, 'Inbursa', NULL, NULL, ' 5447 8000 '),
(11, 'Nelson Vargas', 'Camino a Santa Teresa 187-C, piso 4, Col. Parque del Pedregal, México D.F, Código postal: 14010', 'contacto@anv.com.mx', '	(55) 5424 8455');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidad`
--

CREATE TABLE `habilidad` (
  `idhabilidad` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `habilidad`
--

INSERT INTO `habilidad` (`idhabilidad`, `nombre`) VALUES
(1, 'Adaptabilidad'),
(2, 'Habilidades comunicativas'),
(3, 'Capacidad para resolver problemas'),
(4, 'Creatividad'),
(5, 'Relaciones interpersonales'),
(6, 'Trabajo en equipo'),
(7, 'Actitud positiva'),
(8, 'Dedicación'),
(9, 'Confianza'),
(10, 'Honestidad'),
(11, 'Iniciativa'),
(12, 'Deseos de aprender'),
(13, 'Empatia'),
(14, 'Liderazgo'),
(15, 'Persuacion'),
(16, 'Negociación'),
(17, 'Elegancia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `tipo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `tipo`) VALUES
(1, 'Medio tiempo matutino'),
(2, 'Medio tiempo vespertino'),
(3, 'Medio tiempo'),
(4, 'Tiempo completo'),
(5, 'Cualquier horario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingles`
--

CREATE TABLE `ingles` (
  `idingles` int(11) NOT NULL,
  `nivel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingles`
--

INSERT INTO `ingles` (`idingles`, `nivel`) VALUES
(1, 'Nada'),
(2, 'Basico'),
(3, 'Intermedio'),
(4, 'Avanzado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `idlocalidad` int(11) NOT NULL,
  `nombre` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`idlocalidad`, `nombre`) VALUES
(1, 'Distrito Federal'),
(2, 'Estado de México'),
(4, 'Toluca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `idsexo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`idsexo`, `nombre`) VALUES
(1, 'Femenino'),
(2, 'Masculino'),
(3, 'Prefiero no especificar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `idsubcategoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`idsubcategoria`, `nombre`, `categoria_idcategoria`) VALUES
(1, 'Ingenieria en sistemas y tecnologias de informacion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnica`
--

CREATE TABLE `tecnica` (
  `idtecnica` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `competencia_idcompetencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tecnica`
--

INSERT INTO `tecnica` (`idtecnica`, `nombre`, `competencia_idcompetencia`) VALUES
(1, 'Java', 1),
(2, 'Mysql', 2),
(3, 'Postgresql', 2),
(4, 'MongoDB', 2),
(5, 'MariaDB', 2),
(6, 'Html', 3),
(7, 'Php', 3),
(8, 'Javascript', 3),
(9, 'Bootstrap', 3),
(10, 'Linux', 4),
(11, 'C', 5),
(12, 'C++', 5),
(13, 'Python', 5),
(14, '.Net', 5),
(15, 'Gambas', 5),
(16, 'Visual Basic', 5),
(17, 'REACT', 1),
(18, 'Node', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `anos_exp` int(11) NOT NULL,
  `activo` varchar(15) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `salario` int(11) DEFAULT NULL,
  `fecha_post` date NOT NULL,
  `descripcion` varchar(800) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `horario_id_horario` int(11) NOT NULL,
  `subcategoria_idsubcategoria` int(11) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL,
  `localidad_idlocalidad` int(11) NOT NULL,
  `ingles_idingles` int(11) NOT NULL,
  `empresa_idempresa` int(11) NOT NULL,
  `sexo_idsexo` int(11) NOT NULL,
  `educacion_ideducacion` int(11) NOT NULL,
  `edad_req` int(11) DEFAULT NULL,
  `id_trabajo` int(11) NOT NULL,
  `Registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`anos_exp`, `activo`, `nombre`, `salario`, `fecha_post`, `descripcion`, `telefono`, `correo`, `horario_id_horario`, `subcategoria_idsubcategoria`, `categoria_idcategoria`, `localidad_idlocalidad`, `ingles_idingles`, `empresa_idempresa`, `sexo_idsexo`, `educacion_ideducacion`, `edad_req`, `id_trabajo`, `Registro`) VALUES
(3, 'Activar', 'Desarrollador junior', 3000, '2018-11-01', 'trabajo descripcion', '552536585937', 'r.lomel@hotmail.com', 4, 1, 1, 1, 2, 1, 1, 3, 2, 12, '2018-11-15 06:56:53'),
(1, 'Activar', 'Becario', 10000, '2018-11-29', 'Trabajo para Becario en Sistemas', '4422420366', 'Alex_macouzet@azteca.com.mx', 4, 1, 1, 1, 3, 1, 3, 3, 18, 47, '2018-11-29 01:18:06'),
(2, 'Activar', 'Analista de BI', 16500, '2018-12-19', 'Puesto de Analista en empresa de talla mundial, ubicado en Santa Fe.', '5554239021', 'j.gonzales@indra.com', 4, 1, 1, 1, 3, 7, 3, 3, 23, 48, '2018-12-06 06:32:40'),
(1, 'Activar', 'Desarrolladores Java / Net / PLSQL / Cobol', 25000, '2018-10-28', 'Desarrollador Java, JSF, Web Services, Ajax, Struts, Jquery, Spring, JSP, Java Scrip, HTML5, Bootstrap, Oracle\\nDesarrollador .NET(C#), MVC, ASP,  SQL Server 2008, Servicios Web\\nDesarrollador de Bases de Datos Oracle PLSQL, vistas, tablas, procedimientos almacenados, Toad\\nDesarrollador cobol, JCL, Linea, BD SQL\\n', '5551911474', 'contacto@gruposalinas.com', 4, 1, 1, 1, 3, 1, 3, 3, 18, 61, '2018-11-27 14:45:52'),
(1, 'Activar', 'Programador Java Sr', 42000, '2018-11-14', 'Experiencia  en:Java, Struts, Spring y/o Hibernate, Jboss, Ajax, servlets.,Web services. ,JSON, PLSQL\', \'Programador Java Sr', '5552152396', 'contacto@gruposalinas.com', 4, 1, 1, 1, 3, 1, 3, 3, 67, 62, '2018-11-27 14:49:54'),
(1, 'Activar', 'DESARROLLADOR PL/SQL ORACLE', 31700, '2018-11-01', 'Experiencia en modelado de bases de datos, desarrollo de procesos y funciones de base de datos con PL/SQL Oracle, optimización y tunning en base de datos. Metodologías de desarrollo ágil: Scrum (deseable)', '5552152396', 'contacto@gruposalinas.com', 3, 1, 1, 2, 2, 1, 3, 3, 18, 63, '2018-11-27 14:53:44'),
(1, 'Activar', 'DESARROLLADOR NET / C# / SQL', 30000, '2018-11-01', 'Desarrollador .NET, WFC y SQL Server 2008. Conocimiento de ASP, JavaScript, Hojas de estilo', '5552152396', 'contacto@gruposalinas.com', 3, 1, 1, 1, 3, 1, 3, 3, 18, 64, '2018-11-27 14:57:14'),
(4, 'Activar', 'Arquitecto de Soluciones Cloud', 70000, '2018-11-15', 'Creación de una infraestructura de TI en plataformas Cloud\\nTransformación y Implementación de aplicaciones de nube en AWS/Google/ azure con seguridad, alta disponibilidad y despliegue continuo.\\nCrear soluciones complejas que incorporen sevicios de datos, gobernanza y seguridad en las plataformas de Nube. \\nSeleccionar el mecanismo de implementación de Nube  mas apropiado (AWS, Azure o Google)\\nDiseña e Implementa estrategias de seguridad, alta disponibilidad y plan de recuperación de desastres.Creación de una infraestructura de TI en plataformas Cloud', '5552152396', 'contacto@gruposalinas.com', 3, 1, 1, 1, 3, 1, 3, 2, 18, 65, '2018-11-27 22:11:48'),
(0, 'Activar', 'Técnico reparador', 8436, '2018-11-26', 'En nuestro centro de servicio requerimos técnicos para el mantenimiento de nuestros dispositivos, diagnostico, mantenimiento, estética y remplazo de bases y etiquetas', '5528995303', 'contacto@manpower.com', 2, 1, 1, 1, 1, 2, 3, 3, 18, 66, '2018-11-27 22:16:42'),
(5, 'Activar', 'Desarrollador de software', 40000, '2018-11-22', 'Licenciatura o Ingenieria en Sistemas Computaciones o a fin.Experiencia minima de 5 años realizando proyectos de Software, Conocimiento de patrones de diseños MVC\\nExperiencia en desarrollo de sistemas Windows Service, Web Service, Servicios REST\\nAlto conocimiento de programación en lenguaje C# c-sharp, Paqueteria Office Avanzado. Actividades: Analizar, diseñar  y desarrollar sistemas con tecnología MS, .Net , tanto en web (ASP. NET, MVC, WEBAPI),Winforms, Windows service, Mobile, etc', '5528995303', 'contacto@manpower.com', 4, 1, 1, 2, 2, 2, 3, 3, 18, 67, '2018-11-27 22:23:28'),
(2, 'Activar', 'PROGRAMADOR DE APLICACIONES MÓVILES', 25000, '2018-11-09', 'Objetivo del puesto: Administrar el ciclo de vida de las aplicaciones móviles de acuerdo a las reglas de negocio y estándares de la empresa. Diseñar, programar, probar y dar mantenimiento a las aplicaciones desarrolladas en la empresa siguiendo las mejores prácticas de la industria. 2. Administrar la atención de los requerimientos de desarrollo de aplicaciones móviles. 3. Sugerir mejoras al diseño y/o desarrollo para beneficio de la experiencia del usuario. ', '17194000', 'contacto@manpower.com', 4, 1, 1, 1, 2, 2, 3, 3, 18, 68, '2018-11-27 22:49:01'),
(2, 'Activar', 'Consultor Especialista en Modelo de Datos', 30000, '2018-11-21', 'REQUISITOS:Mínimo 2 años de experiencia en área de Business Intelligence, Modelo de Datos, Indispensable conocimiento o experiencia en Datawarehouse, datamarts y modelos relacionales),Indispensable conocimiento o experiencia en diseño y construcción de procesos ETL, Manejo de Bases de Datos (preferentemente Oracle),Consulta de datos (SQL). Conocimiento de SAS (no indispensable). Actividades: Análisis y diseño de modelo de datos (Datawarehouse, datamarts y modelos relacionales), Diseño y construcción de procesos ETL, Levantamiento de Información.Generación de diccionario de datos, mapeo de información y flujo de datos.', '58096555', 'servicioaclientes@profuturo.com.mx', 4, 1, 1, 2, 2, 4, 3, 3, 18, 69, '2018-11-27 23:57:52'),
(2, 'Activar', 'Consultor de Estadística', 15000, '2018-10-29', 'Diseñar y desarrollar procesos de depuración, transformación y carga de datos para acumularlos de forma estandarizada.\\n-Diseñar y desarrollar modelos que permitan proyectar los resultados de ventas de las líneas de negocio a su cargo.\\n-Diseñar y desarrollar tableros analíticos y reportes de seguimiento de los concursos e incentivos.\\n-Diseñar y desarrollar procesos automatizados de cálculo de indicadores de gestión y generación de reportes.\\n-Analizar indicadores de los sistemas de información, con la finalidad de identificar fortalezas y debilidades de la gestión y actividad comercial', '58096555', 'servicioaclientes@profuturo.com.mx', 4, 1, 1, 2, 2, 4, 3, 3, 18, 70, '2018-11-28 00:10:13'),
(2, 'Activar', 'ANALISTA DE TELECOMUNICACIONES', 9500, '2018-11-22', '\'OFRECEMOS:\\n· SUELDO BASE DE $9,500 LIBRES DE IMPUESTOS\\n· SEGURO DESDE PRIMER DÍA\\n· PRESTACIONES SUPERIORES A LAS DE LEY\\n· SEGURO DE GASTOS POR ACCIDENTE, SEGURO DE AUTO.\\n· SERVICIOS DENTAL Y ÓPTICO.\\n· ESTABILIDAD LABORAL\\n· PAGO PUNTUAL', '50625800', 'soluciones@tkm.com.mx', 4, 1, 1, 2, 3, 5, 3, 3, 18, 71, '2018-11-28 00:14:54'),
(1, 'Activar', 'Desarrollador VB6', 31700, '2018-11-08', 'Ing. Sistemas Computacionales, Informática, Electrónica, TSU o carrera afín (Titulados o Proceso de titulación comprobable).\\nBuscamos experiencia o bien con conocimientos solidos en los siguiente:\\nDesarrollo en aplicaciones VB6 \\nConocimientos WEB( web Services, ajax, html)\\nManejo de SQL ( Stored Procedure)\\nZona de trabajo DF (Sur) Lunes a Viernes 09 a 19, guardias algunos fines de sem', '5552152396', 'contacto@gruposalinas.com', 4, 1, 1, 1, 2, 1, 3, 3, 18, 72, '2018-11-28 00:31:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo_has_habilidad`
--

CREATE TABLE `trabajo_has_habilidad` (
  `habilidad_idhabilidad` int(11) DEFAULT NULL,
  `importancia` int(11) NOT NULL,
  `trabajo_id_trabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajo_has_habilidad`
--

INSERT INTO `trabajo_has_habilidad` (`habilidad_idhabilidad`, `importancia`, `trabajo_id_trabajo`) VALUES
(1, 1, 47),
(1, 1, 61),
(1, 1, 70),
(1, 1, 71),
(1, 3, 69),
(2, 1, 65),
(2, 1, 66),
(2, 2, 47),
(3, 1, 48),
(3, 1, 64),
(3, 1, 69),
(3, 2, 66),
(3, 2, 67),
(3, 2, 68),
(3, 2, 72),
(3, 3, 47),
(3, 3, 61),
(3, 3, 65),
(3, 3, 70),
(6, 1, 62),
(6, 1, 67),
(6, 1, 68),
(6, 1, 72),
(6, 2, 12),
(6, 2, 63),
(8, 2, 62),
(8, 2, 65),
(8, 3, 63),
(8, 3, 71),
(9, 1, 63),
(10, 1, 12),
(10, 2, 61),
(10, 3, 66),
(11, 2, 64),
(11, 2, 70),
(11, 3, 12),
(11, 3, 68),
(12, 2, 71),
(14, 2, 48),
(14, 2, 69),
(14, 3, 62),
(14, 3, 64),
(14, 3, 67),
(14, 3, 72),
(16, 3, 48);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo_has_tecnica`
--

CREATE TABLE `trabajo_has_tecnica` (
  `tecnica_idtecnica` int(11) DEFAULT NULL,
  `importancia` int(11) NOT NULL,
  `pericidad` int(11) DEFAULT NULL,
  `trabajo_id_trabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajo_has_tecnica`
--

INSERT INTO `trabajo_has_tecnica` (`tecnica_idtecnica`, `importancia`, `pericidad`, `trabajo_id_trabajo`) VALUES
(13, 1, 2, 12),
(1, 1, 1, 47),
(2, 1, 2, 48),
(1, 1, 3, 61),
(8, 1, 4, 62),
(3, 1, 3, 63),
(14, 1, 2, 64),
(8, 1, 8, 65),
(10, 1, 1, 66),
(11, 1, 10, 67),
(1, 1, 4, 68),
(2, 1, 4, 69),
(2, 1, 4, 70),
(2, 1, 4, 71),
(6, 1, 2, 72),
(17, 2, 3, 12),
(2, 2, 1, 47),
(14, 2, 3, 48),
(14, 2, 3, 61),
(3, 2, 4, 62),
(14, 2, 4, 63),
(3, 2, 2, 64),
(14, 2, 8, 65),
(10, 2, 1, 66),
(14, 2, 8, 67),
(14, 2, 4, 68),
(3, 2, 4, 69),
(3, 2, 4, 70),
(7, 2, 2, 71),
(2, 2, 2, 72),
(16, 3, 5, 12),
(6, 3, 3, 47),
(10, 3, 2, 48),
(3, 3, 2, 61),
(14, 3, 1, 62),
(1, 3, 1, 63),
(8, 3, 2, 64),
(1, 3, 8, 65),
(10, 3, 1, 66),
(8, 3, 2, 67),
(12, 3, 1, 68),
(4, 3, 4, 69),
(7, 3, 4, 70),
(10, 3, 2, 71),
(7, 3, 2, 72);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_register`
--

CREATE TABLE `user_register` (
  `id_usuario` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_register`
--

INSERT INTO `user_register` (`id_usuario`, `correo`, `password`, `create_time`) VALUES
(7, 'roberto@gmail.com', '2420', '2018-10-15 21:24:30'),
(8, 'bonilla@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:33:49'),
(9, 'bonilla2@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:38:21'),
(11, 'bonilla20@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:40:38'),
(12, 'bonilla50@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:42:13'),
(13, 'bonilla1100@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:49:13'),
(14, 'hifo@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:54:00'),
(15, 'efle@hotmai.com', 'bc6dc48b743dc5d013b1abaebd2faed2', '2018-10-15 21:54:42'),
(16, 'roberto22@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:55:34'),
(17, 'roberto2340@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 22:02:09'),
(18, 'robbefb@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 22:02:58'),
(21, 'root@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 22:32:11'),
(24, 'roberto24@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 23:14:46'),
(25, 'roberto88@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-23 03:34:49'),
(26, 'roberto34@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-11-08 04:54:04'),
(27, 'admin@gmail.com', '31e62ebbba28ef5dcde7a179bf3c32c7', '2018-12-06 05:29:51'),
(28, 'robbi@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-11-13 08:15:10'),
(29, 'r.lomel@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-11-13 15:33:40'),
(30, 'robonilla@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-11-15 02:13:40'),
(31, 'gordo@gmail.com', '31e62ebbba28ef5dcde7a179bf3c32c7', '2018-11-27 16:40:29'),
(32, 'roberto@mandrapro.com', '31e62ebbba28ef5dcde7a179bf3c32c7', '2018-12-06 06:39:16'),
(33, 'cynthia23@gmail.com', '31e62ebbba28ef5dcde7a179bf3c32c7', '2018-11-30 02:14:26'),
(34, 'gustavoperezgalicia@gmail.com', '31e62ebbba28ef5dcde7a179bf3c32c7', '2018-12-07 03:15:07'),
(35, 'r.lomelin@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-28 00:33:57'),
(36, 'ximenasg@yahoo.com', 'efb3e89216c871fc598b754ff16e2525', '2018-11-28 00:38:59'),
(41, 'gerry.jimenez@gmail.com', '31e62ebbba28ef5dcde7a179bf3c32c7', '2018-12-06 07:48:53'),
(42, 'Erika.gonzales@hotmail.com', '31e62ebbba28ef5dcde7a179bf3c32c7', '2018-12-07 05:04:49'),
(43, 'Enrique.escobar@gmail.com', '31e62ebbba28ef5dcde7a179bf3c32c7', '2018-12-07 05:21:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(12) DEFAULT NULL,
  `apellido_paterno` varchar(22) DEFAULT NULL,
  `apellido_materno` varchar(22) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  `sueldo_actual` int(11) DEFAULT NULL,
  `salario_deseado` int(11) DEFAULT NULL,
  `activo` varchar(15) DEFAULT NULL,
  `descripcion_habilidad` varchar(450) DEFAULT NULL,
  `descripcion_persona` varchar(450) DEFAULT NULL,
  `horario_id_horario` int(11) DEFAULT NULL,
  `subcategoria_idsubcategoria` int(11) DEFAULT NULL,
  `categoria_idcategoria` int(11) DEFAULT NULL,
  `localidad_idlocalidad` int(11) DEFAULT NULL,
  `ingles_idingles` int(11) DEFAULT NULL,
  `sexo_idsexo` int(11) DEFAULT NULL,
  `educacion_ideducacion` int(11) DEFAULT NULL,
  `user_register_id_usuario` int(11) NOT NULL,
  `Registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `telefono`, `celular`, `linkedin`, `sueldo_actual`, `salario_deseado`, `activo`, `descripcion_habilidad`, `descripcion_persona`, `horario_id_horario`, `subcategoria_idsubcategoria`, `categoria_idcategoria`, `localidad_idlocalidad`, `ingles_idingles`, `sexo_idsexo`, `educacion_ideducacion`, `user_register_id_usuario`, `Registro`) VALUES
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '2018-11-15 02:22:35'),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '2018-11-15 02:22:35'),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2018-11-15 02:22:35'),
('eub4', 'rf', 'j', 1, '777', '99', '0990', 987, 89099, '', '33', 'jjj', 1, 1, 1, 2, 2, 2, 2, 27, '2018-11-15 02:22:35'),
('ggmmm', 'uhuuh', 'hb', 1, '1', '1', 'ghh', 55, 66, NULL, NULL, 'h', 1, 1, 1, 1, 4, 1, 1, 28, '2018-11-15 02:22:35'),
('regina', 'lomelin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 29, '2018-11-15 02:22:35'),
('R', 'B', 'I', 12, '22', '23', 'e', 3, 2, 'Activar', 'a', 'a', 4, 1, 1, 2, 2, 2, 4, 30, '2018-11-15 02:22:35'),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 31, '2018-11-27 16:40:29'),
('Roberto', 'Bonilla', 'Ibarra', 21, '4423780146', '4423780146', 'No tengo', 6000, 10000, 'Activar', 'Soy una persona habilidosa', 'Soy una persona apasionada', 4, 1, 1, 1, 4, 2, 3, 32, '2018-11-29 00:51:00'),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '2018-11-30 02:14:26'),
('Gustavo', 'Pérez', 'Galicia', 22, '5549935310', '5549935310', 'no tengo', 11000, 20000, NULL, 'Sistemas operativos, php, css, html5', 'Persona con valores y pasionado por los temas que le interesan', 4, 1, 1, 1, 4, 2, 3, 34, '2018-12-07 03:15:07'),
('Regina', 'Lomelin', 'Contreras', 21, '5552152396', '5552152396', 'reginalomelin', 10000, 20000, 'Activar', 'Trabajo en equipo, iniciativa, trabajo bajo presiÃ³n', '21 aÃ±os, estudiando ingenierÃ­a en sistemas, me gusta trabajar', 4, 1, 1, 2, 4, 1, 3, 35, '2018-11-28 00:33:57'),
('Ximena', 'Suarez', 'Gomez', 30, '55345432', '5529666356', 'ximenasz', 22000, 40000, 'Activar', 'Trabajo en equipo, puntual, trabajadora', 'Estudie ingenieria en sistemas en el extranjero, maestrÃ­a en programaciÃ³n', 4, 1, 1, 1, 4, 1, 2, 36, '2018-11-28 00:38:59'),
('Gerardo', 'Jimenéz', 'Padilla', 25, '5536790928', '5536790928', 'No tengo', 15000, 25000, 'Activar', 'Persona con destrezas mentales.', 'Persona que tiene un carÃ¡cter Ãºnico', 4, 1, 1, 2, 4, 3, 3, 41, '2018-12-06 07:48:53'),
('Erika', 'Gutierrez', 'Escobar', 32, '5542319029', '5542319029', 'Erika.linkedin', 19000, 25600, 'Activar', 'Persona apasionada por desarrollarse todos los días.', 'Persona con objetivos y metas diarias', 4, 1, 1, 1, 4, 1, 2, 42, '2018-12-07 05:04:49'),
('Enrique', 'Escobar', 'Martínez', 34, '7778906536', '7778906536', 'No tengo', 34000, 43000, 'Activar', 'Experiencia profesional comprobada en TI', 'Persona con crecimiento y retroalimentación', 4, 1, 1, 1, 4, 2, 2, 43, '2018-12-07 05:21:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_habilidad`
--

CREATE TABLE `usuario_has_habilidad` (
  `habilidad_idhabilidad` int(11) DEFAULT NULL,
  `importancia` int(11) NOT NULL,
  `user_register_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_has_habilidad`
--

INSERT INTO `usuario_has_habilidad` (`habilidad_idhabilidad`, `importancia`, `user_register_id_usuario`) VALUES
(1, 3, 30),
(1, 1, 31),
(1, 2, 32),
(1, 1, 36),
(1, 1, 41),
(1, 1, 42),
(1, 3, 43),
(2, 1, 30),
(2, 1, 32),
(2, 2, 42),
(3, 3, 32),
(3, 1, 35),
(3, 3, 41),
(4, 1, 33),
(4, 1, 43),
(6, 3, 33),
(7, 3, 35),
(7, 3, 36),
(8, 2, 35),
(9, 2, 30),
(10, 2, 31),
(10, 3, 34),
(11, 2, 36),
(11, 2, 41),
(13, 2, 34),
(14, 1, 34),
(14, 2, 43),
(15, 3, 31),
(15, 2, 33),
(17, 3, 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_tecnica`
--

CREATE TABLE `usuario_has_tecnica` (
  `tecnica_idtecnica` int(11) DEFAULT NULL,
  `importancia` int(11) NOT NULL,
  `pericidad` int(11) DEFAULT NULL,
  `user_register_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_has_tecnica`
--

INSERT INTO `usuario_has_tecnica` (`tecnica_idtecnica`, `importancia`, `pericidad`, `user_register_id_usuario`) VALUES
(1, 1, 2, 27),
(4, 2, 2, 27),
(6, 3, 2, 27),
(1, 1, 2, 30),
(3, 2, 2, 30),
(10, 3, 2, 30),
(12, 1, 1, 31),
(5, 2, 2, 31),
(18, 3, 3, 31),
(1, 1, 3, 32),
(2, 2, 2, 32),
(3, 3, 5, 32),
(8, 1, 1, 33),
(3, 2, 4, 33),
(4, 3, 2, 33),
(9, 1, 3, 34),
(1, 2, 2, 34),
(12, 3, 4, 34),
(6, 1, 2, 35),
(7, 2, 2, 35),
(2, 3, 3, 35),
(7, 1, 4, 36),
(3, 2, 10, 36),
(14, 3, 3, 36),
(2, 1, 2, 41),
(3, 2, 5, 41),
(13, 3, 7, 41),
(2, 1, 1, 42),
(12, 2, 3, 42),
(7, 3, 3, 42),
(7, 1, 8, 43),
(17, 2, 7, 43),
(10, 3, 9, 43);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `correo_UNIQUE` (`admin_name`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`),
  ADD UNIQUE KEY `idcategoria_UNIQUE` (`idcategoria`);

--
-- Indices de la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD PRIMARY KEY (`idcompetencia`),
  ADD UNIQUE KEY `idcompetencia_UNIQUE` (`idcompetencia`),
  ADD KEY `fk_competencia_subcategoria1_idx` (`subcategoria_idsubcategoria`);

--
-- Indices de la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD PRIMARY KEY (`ideducacion`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idempresa`);

--
-- Indices de la tabla `habilidad`
--
ALTER TABLE `habilidad`
  ADD PRIMARY KEY (`idhabilidad`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`),
  ADD UNIQUE KEY `id_horario_UNIQUE` (`id_horario`);

--
-- Indices de la tabla `ingles`
--
ALTER TABLE `ingles`
  ADD PRIMARY KEY (`idingles`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`idlocalidad`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`idsexo`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`idsubcategoria`),
  ADD KEY `fk_subcategoria_categoria1_idx` (`categoria_idcategoria`);

--
-- Indices de la tabla `tecnica`
--
ALTER TABLE `tecnica`
  ADD PRIMARY KEY (`idtecnica`),
  ADD KEY `fk_tecnica_competencia1_idx` (`competencia_idcompetencia`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`id_trabajo`),
  ADD UNIQUE KEY `id_trabajo_UNIQUE` (`id_trabajo`),
  ADD KEY `fk_trabajo_horario1_idx` (`horario_id_horario`),
  ADD KEY `fk_trabajo_subcategoria1_idx` (`subcategoria_idsubcategoria`),
  ADD KEY `fk_trabajo_categoria1_idx` (`categoria_idcategoria`),
  ADD KEY `fk_trabajo_localidad1_idx` (`localidad_idlocalidad`),
  ADD KEY `fk_trabajo_ingles1_idx` (`ingles_idingles`),
  ADD KEY `fk_trabajo_empresa1_idx` (`empresa_idempresa`),
  ADD KEY `fk_trabajo_sexo1_idx` (`sexo_idsexo`),
  ADD KEY `fk_trabajo_educacion1_idx` (`educacion_ideducacion`);

--
-- Indices de la tabla `trabajo_has_habilidad`
--
ALTER TABLE `trabajo_has_habilidad`
  ADD PRIMARY KEY (`importancia`,`trabajo_id_trabajo`),
  ADD KEY `fk_trabajo_has_habilidad_habilidad1_idx` (`habilidad_idhabilidad`),
  ADD KEY `fk_trabajo_has_habilidad_trabajo1_idx` (`trabajo_id_trabajo`);

--
-- Indices de la tabla `trabajo_has_tecnica`
--
ALTER TABLE `trabajo_has_tecnica`
  ADD PRIMARY KEY (`importancia`,`trabajo_id_trabajo`),
  ADD KEY `fk_trabajo_has_tecnica_tecnica1_idx` (`tecnica_idtecnica`),
  ADD KEY `fk_trabajo_has_tecnica_trabajo1_idx` (`trabajo_id_trabajo`);

--
-- Indices de la tabla `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user_register_id_usuario`),
  ADD UNIQUE KEY `user_register_id_usuario_UNIQUE` (`user_register_id_usuario`),
  ADD KEY `fk_usuario_horario1_idx` (`horario_id_horario`),
  ADD KEY `fk_usuario_subcategoria1_idx` (`subcategoria_idsubcategoria`),
  ADD KEY `fk_usuario_categoria1_idx` (`categoria_idcategoria`),
  ADD KEY `fk_usuario_localidad1_idx` (`localidad_idlocalidad`),
  ADD KEY `fk_usuario_ingles1_idx` (`ingles_idingles`),
  ADD KEY `fk_usuario_sexo1_idx` (`sexo_idsexo`),
  ADD KEY `fk_usuario_educacion1_idx` (`educacion_ideducacion`);

--
-- Indices de la tabla `usuario_has_habilidad`
--
ALTER TABLE `usuario_has_habilidad`
  ADD PRIMARY KEY (`user_register_id_usuario`,`importancia`),
  ADD KEY `fk_usuario_has_habilidad_habilidad1_idx` (`habilidad_idhabilidad`),
  ADD KEY `fk_usuario_has_habilidad_usuario1_idx` (`user_register_id_usuario`);

--
-- Indices de la tabla `usuario_has_tecnica`
--
ALTER TABLE `usuario_has_tecnica`
  ADD PRIMARY KEY (`user_register_id_usuario`,`importancia`),
  ADD KEY `fk_usuario_has_tecnica_tecnica1_idx` (`tecnica_idtecnica`),
  ADD KEY `fk_usuario_has_tecnica_usuario1_idx` (`user_register_id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `competencia`
--
ALTER TABLE `competencia`
  MODIFY `idcompetencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `educacion`
--
ALTER TABLE `educacion`
  MODIFY `ideducacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `habilidad`
--
ALTER TABLE `habilidad`
  MODIFY `idhabilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ingles`
--
ALTER TABLE `ingles`
  MODIFY `idingles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `idlocalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `idsexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `idsubcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tecnica`
--
ALTER TABLE `tecnica`
  MODIFY `idtecnica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `id_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT de la tabla `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD CONSTRAINT `fk_competencia_subcategoria1` FOREIGN KEY (`subcategoria_idsubcategoria`) REFERENCES `subcategoria` (`idsubcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `fk_subcategoria_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tecnica`
--
ALTER TABLE `tecnica`
  ADD CONSTRAINT `fk_tecnica_competencia1` FOREIGN KEY (`competencia_idcompetencia`) REFERENCES `competencia` (`idcompetencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `fk_trabajo_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_educacion1` FOREIGN KEY (`educacion_ideducacion`) REFERENCES `educacion` (`ideducacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_empresa1` FOREIGN KEY (`empresa_idempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_horario1` FOREIGN KEY (`horario_id_horario`) REFERENCES `horario` (`id_horario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_ingles1` FOREIGN KEY (`ingles_idingles`) REFERENCES `ingles` (`idingles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_localidad1` FOREIGN KEY (`localidad_idlocalidad`) REFERENCES `localidad` (`idlocalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_sexo1` FOREIGN KEY (`sexo_idsexo`) REFERENCES `sexo` (`idsexo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_subcategoria1` FOREIGN KEY (`subcategoria_idsubcategoria`) REFERENCES `subcategoria` (`idsubcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajo_has_habilidad`
--
ALTER TABLE `trabajo_has_habilidad`
  ADD CONSTRAINT `fk_trabajo_has_habilidad_habilidad1` FOREIGN KEY (`habilidad_idhabilidad`) REFERENCES `habilidad` (`idhabilidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_has_habilidad_trabajo1` FOREIGN KEY (`trabajo_id_trabajo`) REFERENCES `trabajo` (`id_trabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajo_has_tecnica`
--
ALTER TABLE `trabajo_has_tecnica`
  ADD CONSTRAINT `fk_trabajo_has_tecnica_tecnica1` FOREIGN KEY (`tecnica_idtecnica`) REFERENCES `tecnica` (`idtecnica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_has_tecnica_trabajo1` FOREIGN KEY (`trabajo_id_trabajo`) REFERENCES `trabajo` (`id_trabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_educacion1` FOREIGN KEY (`educacion_ideducacion`) REFERENCES `educacion` (`ideducacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_horario1` FOREIGN KEY (`horario_id_horario`) REFERENCES `horario` (`id_horario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_ingles1` FOREIGN KEY (`ingles_idingles`) REFERENCES `ingles` (`idingles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_localidad1` FOREIGN KEY (`localidad_idlocalidad`) REFERENCES `localidad` (`idlocalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_sexo1` FOREIGN KEY (`sexo_idsexo`) REFERENCES `sexo` (`idsexo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_subcategoria1` FOREIGN KEY (`subcategoria_idsubcategoria`) REFERENCES `subcategoria` (`idsubcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_user_register1` FOREIGN KEY (`user_register_id_usuario`) REFERENCES `user_register` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_has_habilidad`
--
ALTER TABLE `usuario_has_habilidad`
  ADD CONSTRAINT `fk_usuario_has_habilidad_habilidad1` FOREIGN KEY (`habilidad_idhabilidad`) REFERENCES `habilidad` (`idhabilidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_habilidad_usuario1` FOREIGN KEY (`user_register_id_usuario`) REFERENCES `user_register` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_has_tecnica`
--
ALTER TABLE `usuario_has_tecnica`
  ADD CONSTRAINT `fk_usuario_has_tecnica_tecnica1` FOREIGN KEY (`tecnica_idtecnica`) REFERENCES `tecnica` (`idtecnica`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
