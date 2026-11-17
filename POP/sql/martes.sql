-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2026 at 12:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `martes`
--
CREATE DATABASE IF NOT EXISTS `martes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `martes`;

-- --------------------------------------------------------

--
-- Table structure for table `artistas`
--

CREATE TABLE `artistas` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `nacimiento` int(4) NOT NULL,
  `fallecimiento` int(4) DEFAULT NULL,
  `obra_clave` varchar(120) NOT NULL,
  `descripcion` text NOT NULL,
  `enlace` varchar(100) NOT NULL DEFAULT 'artistas.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artistas`
--

INSERT INTO `artistas` (`id`, `nombre`, `apellido`, `nacionalidad`, `nacimiento`, `fallecimiento`, `obra_clave`, `descripcion`, `enlace`) VALUES
(1, 'Andy', 'Warhol', 'Estados Unidos', 1928, 1987, 'Campbell’s Soup Cans (1962)', 'Convirtió productos de supermercado y rostros de celebridades en series repetidas con serigrafía.', 'artistas.php#warhol'),
(2, 'Roy', 'Lichtenstein', 'Estados Unidos', 1923, 1997, 'Whaam! (1963)', 'Amplió viñetas de historietas con contornos negros, colores planos y puntos Ben-Day.', 'artistas.php#lichtenstein'),
(3, 'Richard', 'Hamilton', 'Reino Unido', 1922, 2011, 'Just what is it that makes today’s homes so different, so appealing? (1956)', 'Figura clave del Independent Group y autor de uno de los collages fundacionales del Pop Art.', 'artistas.php#hamilton'),
(4, 'Claes', 'Oldenburg', 'Suecia / Estados Unidos', 1929, 2022, 'Floor Burger (1962)', 'Transformó alimentos y objetos cotidianos en esculturas blandas y monumentales.', 'artistas.php#oldenburg'),
(5, 'James', 'Rosenquist', 'Estados Unidos', 1933, 2017, 'F-111 (1964–1965)', 'Combinó fragmentos de anuncios publicitarios en pinturas de enorme escala.', 'obras.php#obra-01'),
(6, 'Peter', 'Blake', 'Reino Unido', 1932, NULL, 'On the Balcony (1955–1957)', 'Mezcló colección personal y cultura popular británica en pinturas y relieves.', 'galeria.php#galeria-08'),
(7, 'Robert', 'Indiana', 'Estados Unidos', 1928, 2018, 'LOVE (1966)', 'Usó palabras y números como imágenes con la fuerza gráfica de un cartel.', 'obras.php#obra-07'),
(8, 'David', 'Hockney', 'Reino Unido', 1937, NULL, 'A Bigger Splash (1967)', 'Retrató piscinas y escenas de ocio californianas con superficies lisas y colores intensos.', 'obras.php#obra-08'),
(9, 'Eduardo', 'Paolozzi', 'Reino Unido', 1924, 2005, 'I Was a Rich Man’s Plaything (1947)', 'Sus collages con recortes de revistas anticiparon el vocabulario visual del Pop Art.', 'obras.php#obra-09'),
(10, 'Tom', 'Wesselmann', 'Estados Unidos', 1931, 2004, 'Still Life #30 (1963)', 'Combinó pintura, collage y objetos de consumo en composiciones de grandes áreas de color.', 'galeria.php#galeria-07'),
(11, 'Marisol', 'Escobar', 'Venezuela', 1930, 2016, 'The Family (1962)', 'Creó esculturas-ensamblaje en madera que mezclan dibujo, pintura y objetos reales.', 'galeria.php#galeria-09'),
(12, 'Jasper', 'Johns', 'Estados Unidos', 1930, NULL, 'Three Flags (1958)', 'Pintó banderas, blancos y números, imágenes conocidas que anticiparon el Pop Art.', 'galeria.php#galeria-12'),
(13, 'Marta', 'Minujín', 'Argentina', 1943, NULL, 'La Menesunda (1965)', 'Referente del Pop argentino; creó instalaciones y experiencias participativas en el Instituto Di Tella.', 'movimiento.php#expansion');

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
