-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 09:08 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `money_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `musers`
--

CREATE TABLE `musers` (
  `id` int(50) NOT NULL,
  `u_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `u_email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `u_pass` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `musers`
--

INSERT INTO `musers` (`id`, `u_name`, `u_email`, `u_pass`) VALUES
(1, 'khaitk', 'khaitkfa@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `update_n`
--

CREATE TABLE `update_n` (
  `id` int(50) NOT NULL,
  `prod` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `money` int(25) NOT NULL,
  `ndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `update_n`
--

INSERT INTO `update_n` (`id`, `prod`, `money`, `ndate`) VALUES
(20, 'Bánh Mì', 159000, '2020-03-07 09:15:06'),
(21, 'Kẹo', 12000, '2020-03-07 10:01:20'),
(22, 'Coffee', 123000, '2020-03-07 10:01:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musers`
--
ALTER TABLE `musers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_n`
--
ALTER TABLE `update_n`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `musers`
--
ALTER TABLE `musers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `update_n`
--
ALTER TABLE `update_n`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
