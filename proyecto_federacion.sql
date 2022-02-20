-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 09:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyecto_federacion`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificados_medicos`
--

CREATE TABLE `certificados_medicos` (
  `id` int(10) NOT NULL,
  `Descripcion_Certificado` varchar(150) NOT NULL,
  `Institucion_Emisora` varchar(30) NOT NULL,
  `Fecha_Expedicion` date NOT NULL,
  `Fecha_Expiracion` date NOT NULL,
  `CI_Estudiante` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificados_medicos`
--

INSERT INTO `certificados_medicos` (`id`, `Descripcion_Certificado`, `Institucion_Emisora`, `Fecha_Expedicion`, `Fecha_Expiracion`, `CI_Estudiante`) VALUES
(2, 'Certificado Por COVID19', 'Hospital Verdi Cevallos', '2022-02-18', '2022-02-26', 959821067);

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE `estudiantes` (
  `CI` int(10) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(40) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `Disciplina` varchar(50) NOT NULL,
  `Categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`CI`, `Nombres`, `Apellidos`, `Fecha_Nacimiento`, `Genero`, `Disciplina`, `Categoria`) VALUES
(0, '', '', '0000-00-00', '', '', ''),
(959821067, 'Marcos Alberto', 'Torres Izaguirre', '1998-12-13', 'Masculino', 'Baloncesto', '2da Categoria');

-- --------------------------------------------------------

--
-- Table structure for table `evaluadores`
--

CREATE TABLE `evaluadores` (
  `id` int(11) NOT NULL,
  `CI` int(10) NOT NULL,
  `E_Nombres` varchar(30) NOT NULL,
  `E_Apellidos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluadores`
--

INSERT INTO `evaluadores` (`id`, `CI`, `E_Nombres`, `E_Apellidos`) VALUES
(2, 1234567890, 'Fernando Emilio', 'Solorzano Zambrano');

-- --------------------------------------------------------

--
-- Table structure for table `examen`
--

CREATE TABLE `examen` (
  `id` int(11) NOT NULL,
  `Fecha_Examen` date NOT NULL,
  `ID_Evaluador_1` int(10) NOT NULL,
  `ID_Evaluador_2` int(10) NOT NULL,
  `ID_Evaluador_3` int(10) NOT NULL,
  `CI_Estudiante` int(10) NOT NULL,
  `Calificacion` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examen`
--

INSERT INTO `examen` (`id`, `Fecha_Examen`, `ID_Evaluador_1`, `ID_Evaluador_2`, `ID_Evaluador_3`, `CI_Estudiante`, `Calificacion`) VALUES
(3, '2022-02-17', 1234567890, 1234567891, 1234567892, 959821067, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificados_medicos`
--
ALTER TABLE `certificados_medicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `C.I_Estudiante` (`CI_Estudiante`);

--
-- Indexes for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`CI`);

--
-- Indexes for table `evaluadores`
--
ALTER TABLE `evaluadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `C.I.` (`CI`);

--
-- Indexes for table `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CI_Estudiante` (`CI_Estudiante`),
  ADD KEY `ID_Evaluador1` (`ID_Evaluador_1`,`ID_Evaluador_2`,`ID_Evaluador_3`),
  ADD KEY `ID_Evaluador_2` (`ID_Evaluador_2`),
  ADD KEY `ID_Evaluador_3` (`ID_Evaluador_3`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificados_medicos`
--
ALTER TABLE `certificados_medicos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `evaluadores`
--
ALTER TABLE `evaluadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `examen`
--
ALTER TABLE `examen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificados_medicos`
--
ALTER TABLE `certificados_medicos`
  ADD CONSTRAINT `certificados_medicos_ibfk_1` FOREIGN KEY (`CI_Estudiante`) REFERENCES `estudiantes` (`CI`) ON UPDATE CASCADE;

--
-- Constraints for table `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `examen_ibfk_1` FOREIGN KEY (`CI_Estudiante`) REFERENCES `estudiantes` (`CI`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
