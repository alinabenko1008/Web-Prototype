-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 03:04 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_detego_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_optional`
--

CREATE TABLE `tb_optional` (
  `id` int(4) NOT NULL,
  `date` date NOT NULL,
  `inbound` int(4) NOT NULL,
  `outbound` int(4) NOT NULL,
  `sales` int(4) NOT NULL,
  `returns` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_optional`
--

INSERT INTO `tb_optional` (`id`, `date`, `inbound`, `outbound`, `sales`, `returns`) VALUES
(1, '2017-01-19', 250, 5, 190, 0),
(2, '2017-01-20', 351, 12, 224, 2),
(3, '2017-01-21', 555, 55, 495, 2),
(4, '2017-01-22', 690, 74, 237, 3),
(5, '2017-01-23', 342, 99, 401, 10),
(6, '2017-01-24', 295, 124, 120, 5),
(7, '2017-01-25', 107, 149, 297, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_optional`
--
ALTER TABLE `tb_optional`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
