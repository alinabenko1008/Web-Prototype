-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 03:05 PM
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
-- Table structure for table `tb_stock_gender`
--

CREATE TABLE `tb_stock_gender` (
  `id` int(4) NOT NULL,
  `item` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `man` int(4) NOT NULL,
  `woman` int(4) NOT NULL,
  `kids` int(4) NOT NULL,
  `unsex` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_stock_gender`
--

INSERT INTO `tb_stock_gender` (`id`, `item`, `man`, `woman`, `kids`, `unsex`) VALUES
(1, 'back', 739, 1431, 125, 140),
(2, 'sales', 2621, 3462, 341, 297),
(3, 'shopping', 14, 24, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_stock_gender`
--
ALTER TABLE `tb_stock_gender`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
