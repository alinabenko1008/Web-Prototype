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
-- Table structure for table `tb_refill`
--

CREATE TABLE `tb_refill` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `refill_10` int(11) NOT NULL,
  `refill_30` int(11) NOT NULL,
  `refill_60` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_refill`
--

INSERT INTO `tb_refill` (`id`, `date`, `refill_10`, `refill_30`, `refill_60`) VALUES
(1, '2017-01-19', 98, 37, 36),
(2, '2017-01-20', 59, 72, 36),
(3, '2017-01-21', 74, 186, 186),
(4, '2017-01-22', 146, 34, 34),
(5, '2017-01-23', 170, 96, 95),
(6, '2017-01-24', 79, 15, 14),
(7, '2017-01-25', 64, 102, 102);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_refill`
--
ALTER TABLE `tb_refill`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
