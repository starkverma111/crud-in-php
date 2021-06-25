-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 06:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `curdphp`
--

CREATE TABLE `curdphp` (
  `id` int(22) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curdphp`
--

INSERT INTO `curdphp` (`id`, `image`, `name`, `email`, `password`, `date`) VALUES
(24, 'uploads/1121340818.jpeg', 'Nobita ', 'Nobita@gmail.com', '7894561238', '2021-06-21 22:08:54'),
(25, 'uploads/1769944767.jpg', 'Shruti SIngh', 'shrutisingh@gmail.com', '9936824577', '2021-06-21 21:00:27'),
(26, 'uploads/1347228275.jpeg', 'Mohit Roy ', 'mohitsingh@gmail.com', '987456158', '2021-06-21 22:10:01'),
(27, 'uploads/448151903.jpg', 'sneha mathur', 'mathur111@gmail.com', '993685546', '2021-06-21 21:02:10'),
(28, 'uploads/754690426.jpg', 'oggy', 'oggy@gmail.com', '7894569875', '2021-06-21 21:24:23'),
(29, 'uploads/267310970.jpg', 'supergirls', 'supergirls@gmail.com', '7815151515', '2021-06-24 09:21:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curdphp`
--
ALTER TABLE `curdphp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curdphp`
--
ALTER TABLE `curdphp`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
