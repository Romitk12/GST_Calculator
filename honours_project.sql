-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 09:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honours_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `BillNo` int(10) NOT NULL,
  `userid` int(11) NOT NULL,
  `gst` int(10) NOT NULL,
  `amt` float NOT NULL,
  `tax` float NOT NULL,
  `dop` varchar(10) CHARACTER SET utf8 NOT NULL,
  `profit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`BillNo`, `userid`, `gst`, `amt`, `tax`, `dop`, `profit`) VALUES
(2582008, 25, 3, 189909, 5868.19, '18/8/2008', 3),
(2622020, 26, 5, 75000, 3937.5, '10/2/2020', 5);

-- --------------------------------------------------------

--
-- Table structure for table `gst`
--

CREATE TABLE `gst` (
  `id` int(10) NOT NULL,
  `name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `business` varchar(32) CHARACTER SET utf8 NOT NULL,
  `email` varchar(32) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gst`
--

INSERT INTO `gst` (`id`, `name`, `business`, `email`, `password`) VALUES
(25, 'Gauravi Dungarwal', 'abcd', 'gauravidungarwal06@gmail.com', '$2y$10$HVzp5VjVWz93JvkUf830DOE75Vs71vK1.j7l7UF6wBa/SZU46R7GK'),
(26, 'Kirti Shahi', 'xyz', 'kirti.shahi18@vit.edu', '$2y$10$hUUWHh8z37KIlBxIVuue7eD8Fjc8dL2Um6ocICPyOdOU/h/KlfqKW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`BillNo`);

--
-- Indexes for table `gst`
--
ALTER TABLE `gst`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gst`
--
ALTER TABLE `gst`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
