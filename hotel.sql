-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 07:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `troom` varchar(20) DEFAULT NULL,
  `bed` varchar(10) DEFAULT NULL,
  `nroom` varchar(2) DEFAULT NULL,
  `meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `fname`, `lname`, `email`, `country`, `phone`, `troom`, `bed`, `nroom`, `meal`, `cin`, `cout`) VALUES
(0, 'Sushan', 'Xtha', 'xthamikey@gmail.com', 'Barbados', '1287398283', 'Family Suite', 'Double', '1', 'Breakfast', '2022-04-02', '2022-04-09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
