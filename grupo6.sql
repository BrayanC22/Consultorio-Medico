-- DROP DATABASE IF EXISTS `grupo6`;
CREATE DATABASE IF NOT EXISTS `grupo6` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `grupo6`;

-- Estructura de tabla para la tabla `Citas`
CREATE TABLE `especialidad` (
  `id_especialidad` int(10)  PRIMARY KEY,
  `especialidad_nombre` varchar(100) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `especialidad` (`id_especialidad`, `especialidad_nombre`) VALUES
(1, 'Nutriccion y dietetica'),
(2, 'Dermatologia'),
(3, 'Cardiologia'),
(4, 'Cirujia General');


CREATE TABLE `especialista` (
  `id_especialista` int(10) PRIMARY KEY,
  `especialista_nombre` varchar(100) NOT NULL,
  `especialista_cedula` varchar(100) NOT NULL

  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `especialista` (`id_especialista`, `especialista_nombre`, `especialista_cedula`) VALUES
(1, 'Dr. Carlos Cisnero Castro', '1207844530'),
(2, 'Dra. Ana Maria Polo', '0985144368'),
(3, 'Dr. Oscar Asadobay', '1207974225');


CREATE TABLE `clinica` (
  `id_clinica` int(10) AUTO_INCREMENT PRIMARY KEY,
  `clinica_nombre` varchar(100) NOT NULL,
  `clinica_direccion` varchar(100) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `clinica` (`id_clinica`, `clinica_nombre`, `clinica_direccion`) VALUES
(1, 'Medicad S.A', 'Norte de Guayaquil'),
(2, 'Clinica Guayaquil', 'Alborada'),
(3, 'Hospital Clinica Alborada', 'Avenida Babahoyo');


CREATE TABLE `Citas` (
  `id_citas` int(10) AUTO_INCREMENT PRIMARY KEY,
  `nombres` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `cita_id_especialidad` int(11) NOT NULL,
  `cita_id_especialista` int(11) NOT NULL,
  `cita_id_clinica` int(11) NOT NULL,
  `acuerdo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for table `Citas`
--
ALTER TABLE `Citas`
  ADD KEY `fk_especialidad` (`cita_id_especialidad`),
  ADD KEY `fk_especialista` (`cita_id_especialista`),
  ADD KEY `fk_clinica` (`cita_id_clinica`);
--
--
-- Constraints for table `Citas`
--
ALTER TABLE `Citas`
  ADD CONSTRAINT `fk_especialidad` FOREIGN KEY (`cita_id_especialidad`) REFERENCES `especialidad` (`id_especialidad`),
  ADD CONSTRAINT `fk_especialista` FOREIGN KEY (`cita_id_especialista`) REFERENCES `especialista` (`id_especialista`),
  ADD CONSTRAINT `fk_clinica` FOREIGN KEY (`cita_id_clinica`) REFERENCES `clinica` (`id_clinica`);


-- Estructura de tabla para la tabla `Cursos`


CREATE TABLE `Productoscurso` (
  `id_productocurso` int(10) PRIMARY KEY,
  `produc_nombre` varchar(100) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `productoscurso` (`id_productocurso`, `produc_nombre`) VALUES
(1, 'Curso superior en medicina de urgencias'),
(2, 'Cursos para personal médico'),
(3, 'Formación integral en emergencias para enfermeros'),
(4, 'Programa de actualización en gastroenterología');


DROP TABLE IF EXISTS `Cursos`;
CREATE TABLE `cursos` (
  `id_cursos` int(10)  AUTO_INCREMENT PRIMARY KEY,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `tiempo` varchar(100) NOT NULL,
  `id_productocurso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Indexes for table `cursos`
--
ALTER TABLE `Cursos`
  ADD KEY `fk_productocurso` (`id_productocurso`);
--
--
-- Constraints for table `cursos`
--
ALTER TABLE `Cursos`
  ADD CONSTRAINT `fk_productocurso` FOREIGN KEY (`id_productocurso`) REFERENCES `productoscurso` (`id_productocurso`);


-- Estructura de tabla para la tabla `Consultas`

CREATE TABLE `Consultas` (
  `id_consulta` int(5) AUTO_INCREMENT PRIMARY KEY,
  `NombreUsuario` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `Asunto` varchar(100) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL,
  `Subscripcion` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `especialistas` (
  `idEspecialista` int(11) NOT NULL,
  `tipoDocumento` varchar(15) NOT NULL,
  `numDocumento` varchar(10) NOT NULL,
  `nombre_completo` varchar(60) NOT NULL,
  `sexo` varchar(25) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `grado_preparacion` varchar(35) NOT NULL,
  `especialidad` varchar(45) NOT NULL,
   `experiencia` int NOT NULL,
  `estado` int not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursodisponible`
--
ALTER TABLE `especialistas`
  ADD PRIMARY KEY (`idEspecialista`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursodisponible`
--
ALTER TABLE `especialistas`
  MODIFY `idEspecialista` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `especialistas` (`idEspecialista`, `tipoDocumento`, `numDocumento`, `nombre_completo`, `sexo`, `telefono`, `correo`, `grado_preparacion`, `especialidad`, `experiencia`,  `estado` ) VALUES
(1, 'cedula', '1199283928', 'Klever Vallejo', 'Masculino', '0988377361', 'klever@gmail.com', 'postgrado', 'Dermatologia', 2, 1),
(2, 'pasaporte', '0928822123', 'Karla Alvarez', 'Femenino', '0983724598', 'karla@gmail.com', 'postgrado', 'Cirugia general', 4, 1),
(3, 'Cedula', '0288282231', 'Kevin ', 'Masculino', '0982762213', 'KEVIN@GMAIL.COM', 'Pregrado', 'Medicina general', 2, 1),
(4, 'Pasaporte', '1233333333', 'Maria Cruz', 'Femenino', '0994847434', 'maria@gmail.com', 'Postgrado', 'Dermatologia', 4, 1),
(5, 'Cedula', '0990135535', 'Ricardo Pereza', 'Masculino', '0998745632', 'pepe@gmail.com', 'Pregrado', 'Cirug&iacute;a general', 2, 1),
(6, 'Pasaporte', 'numDocumen', 'nombre_completo', 'Masculino', '1234567890', 'memo@example.com', 'Pregrado', 'Medicina general', 2, 1),
(7, 'Cedula', 'numDocumen', 'nombre_completo', 'Femenino', '8585858520', 'editado@correo.com', 'Postgrado', 'Cirugia', 4, 1),
(8, 'Pasaporte', '0939388322', 'Maia Delgado', 'Femenino', '0922222354', 'mariag@gmail.com', 'Pregrado', 'Cardiologia', 2, 1);

