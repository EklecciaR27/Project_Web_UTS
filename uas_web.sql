-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 03:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `email`, `psw`, `level`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$FmFV2m8p5iaQamhv.QDLKOu/ALvqnHWznoVt4jzvceDRqJIuubZCm', ''),
(2, 'admin', 'admin@gmail.com', '$2y$10$rNqslY6zi2aHeeC3QkHvh.zYZeLgAtYTS/zeDFDOqYh7iILHdE9vG', 'admin'),
(0, 'ciacia', 'ekleccia.reydianto88@gmail.com', '$2y$10$iXe871ITF6Qd42zheSqXQe4UFUbqeYeT6Su/jVcKy5LzaG0aGXvhK', '');

-- --------------------------------------------------------

--
-- Table structure for table `formpembelian`
--

CREATE TABLE `formpembelian` (
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pn` int(255) NOT NULL,
  `dob` date NOT NULL,
  `ticket` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formpembelian`
--

INSERT INTO `formpembelian` (`nama`, `email`, `pn`, `dob`, `ticket`, `id`) VALUES
('Rannel Elgio', 'elgio@gmail.com', 2147483647, '2022-11-08', 2, 4),
('alexander', 'alex@gmail.com', 2147483647, '2022-11-09', 2, 5),
('Seven', 'seven@gmail.com', 12121121, '2022-11-07', 2, 6),
('Seven', 'seven@gmail.com', 12121121, '2022-11-07', 2, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formpembelian`
--
ALTER TABLE `formpembelian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formpembelian`
--
ALTER TABLE `formpembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
