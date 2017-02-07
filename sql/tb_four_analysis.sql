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
-- Table structure for table `tb_four_analysis`
--

CREATE TABLE `tb_four_analysis` (
  `id` int(4) NOT NULL,
  `date` date NOT NULL,
  `storevisitor` int(4) NOT NULL,
  `fittingroom` int(4) NOT NULL,
  `consumerrate` float NOT NULL,
  `fittingrate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_four_analysis`
--

INSERT INTO `tb_four_analysis` (`id`, `date`, `storevisitor`, `fittingroom`, `consumerrate`, `fittingrate`) VALUES
(1, '2017-01-19', 294, 358, 32.31, 30),
(2, '2017-01-20', 352, 797, 37.43, 18),
(3, '2017-01-21', 619, 1746, 47.04, 11),
(4, '2017-01-22', 535, 835, 26.06, 8),
(5, '2017-01-23', 862, 1191, 27.36, 10),
(6, '2017-01-24', 194, 132, 36.39, 15),
(7, '2017-01-25', 663, 873, 26.35, 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_four_analysis`
--
ALTER TABLE `tb_four_analysis`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
