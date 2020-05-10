-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 04:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas9`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nim`, `nama`, `alamat`) VALUES
(1, 1701, 'suas', 'nusa penida'),
(2, 1703, 'ben', 'nusa dua'),
(3, 1704, 'dode', 'tabanan'),
(4, 1705, 'giri', 'batur'),
(5, 1706, 'rizky', 'jawa'),
(6, 1707, 'anggita', 'sesetan'),
(7, 1708, 'agus', 'dalung'),
(8, 1709, 'purnami', 'singaraja'),
(9, 1710, 'dharma', 'tukad balian'),
(10, 1711, 'sandi', 'lombok'),
(11, 1713, 'denny', 'dalung'),
(12, 1714, 'ardi', 'mengwi'),
(13, 1715, 'dela', 'jawa'),
(14, 1717, 'yulia', 'nusa dua'),
(15, 1718, 'bw', 'buleleng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
