-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2019 at 12:30 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prueba2`
--

-- --------------------------------------------------------

--
-- Table structure for table `amigos`
--

CREATE TABLE `amigos` (
  `id` int(11) NOT NULL,
  `id_amigo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `amisgos_desde` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amigos`
--

INSERT INTO `amigos` (`id`, `id_amigo`, `id_usuario`, `amisgos_desde`) VALUES
(1, 2, 11, '2019-06-24'),
(2, 2, 10, '2019-06-24'),
(3, 10, 2, '2019-06-24'),
(4, 11, 2, '2019-06-24'),
(5, 11, 10, '2019-06-24'),
(6, 10, 11, '2019-06-24'),
(7, 4, 12, '2019-06-24'),
(8, 3, 13, '2019-06-24'),
(9, 3, 14, '2019-06-24'),
(10, 5, 15, '2019-06-25'),
(11, 15, 16, '2019-06-25'),
(12, 16, 15, '2019-06-25'),
(13, 1, 17, '2019-06-25'),
(14, 17, 1, '2019-06-25'),
(15, 4, 17, '2019-06-25'),
(16, 17, 4, '2019-06-25'),
(17, 16, 17, '2019-06-25'),
(18, 17, 16, '2019-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `apellido` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`) VALUES
(1, 'ee', 'ee'),
(2, 'ee', 'ee'),
(3, 'EWW', 'WWW'),
(4, 'SDS', 'SSS'),
(5, 'aaa', 'aa'),
(6, 'ss', 'sss'),
(7, 'rr', 'rrr'),
(8, 'rr', 'rrr'),
(9, 'rr', 'rrr'),
(10, 'rr', 'rrr'),
(11, 'rr', 'rrr'),
(12, 'asasa', 'aaa'),
(13, 'a', 'a'),
(14, 'a', 'a'),
(15, 'stalin', 'chacon'),
(16, 'edgar', 'guzman'),
(17, 'aaaa1111', 'aaa666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amigos`
--
ALTER TABLE `amigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
