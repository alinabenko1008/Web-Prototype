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
-- Table structure for table `tb_stock_division`
--

CREATE TABLE `tb_stock_division` (
  `id` int(4) NOT NULL,
  `item` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `footwear` int(4) NOT NULL,
  `apparel` int(4) NOT NULL,
  `accessories` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_stock_division`
--

INSERT INTO `tb_stock_division` (`id`, `item`, `footwear`, `apparel`, `accessories`) VALUES
(1, 'back', 150, 2075, 210),
(2, 'sales', 471, 5729, 521),
(3, 'shopping', 8, 19, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_stock_division`
--
ALTER TABLE `tb_stock_division`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
