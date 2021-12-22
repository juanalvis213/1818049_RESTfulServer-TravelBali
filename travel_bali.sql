-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 02:47 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_bali`
--

-- --------------------------------------------------------

--
-- Table structure for table `pantai_bali`
--

CREATE TABLE `pantai_bali` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pantai_bali`
--

INSERT INTO `pantai_bali` (`id`, `nama`, `alamat`, `gambar`) VALUES
(1, 'Pantai Kuta', 'Kuta, kabupaten Badung, Bali', 'kuta.jpg'),
(2, 'Pantai Nusa Dua Bali', 'Nusa Dua, Bali', 'nusadua.jpg'),
(3, 'Pantai Jimbaran', 'Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali', 'jimbaran.jpg'),
(4, 'Pantai Pandawa', 'Pandawa, Bali', 'pandawa.jpg'),
(5, 'Pantai Sanur Bali', 'SAnur, Denpasar Selatan, Bali', 'sanur.jpg'),
(6, 'Pantai Tanah Lot', 'Beraban, Kec. Kediri, Kabupaten Tabanan, Bali 82121', 'tanahlot.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pantai_bali`
--
ALTER TABLE `pantai_bali`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pantai_bali`
--
ALTER TABLE `pantai_bali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
