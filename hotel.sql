-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 03:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
-- Table structure for table `decorations_and_furniture`
--

CREATE TABLE `decorations_and_furniture` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `decorations_and_furniture`
--

INSERT INTO `decorations_and_furniture` (`id`, `title`, `image`, `Description`) VALUES
(13, 'gbjgjkgjk', 'worker813743.png', '                                            gfjghjkghkl                                        '),
(14, 'hnvngh', 'worker607286.jpeg', '                                            uyjkjkhhjhjkh                                        ');

-- --------------------------------------------------------

--
-- Table structure for table `electrical_appliances`
--

CREATE TABLE `electrical_appliances` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electrical_appliances`
--

INSERT INTO `electrical_appliances` (`id`, `title`, `image`, `description`) VALUES
(2, 'jksdhfjdshjghsdjkhg', 'worker852729.jpeg', '                                            fsdkfjdsgkjhgkljxdfklgjkldfjgklsdfjgkljdfsklgj          ');

-- --------------------------------------------------------

--
-- Table structure for table `electronic_devices`
--

CREATE TABLE `electronic_devices` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electronic_devices`
--

INSERT INTO `electronic_devices` (`id`, `title`, `image`, `description`) VALUES
(1, 'gkdfkgjdfkjg', 'worker465858.jpeg', '                                            dfgfdkgdfjklgjk                                        ');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_department`
--

CREATE TABLE `furniture_department` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `furniture_department`
--

INSERT INTO `furniture_department` (`id`, `title`, `image`, `Description`) VALUES
(3, 'gfjfgjkghk', 'worker386798.jpeg', '                                            tyutyutyui                                        ');

-- --------------------------------------------------------

--
-- Table structure for table `household_appliances_section`
--

CREATE TABLE `household_appliances_section` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `household_appliances_section`
--

INSERT INTO `household_appliances_section` (`id`, `title`, `image`, `description`) VALUES
(1, 'klfdjgkdfjgkjdfklg', 'worker635700.jpeg', '                                            fgdkjgfdjkgjfdkljg                                      ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `subject`, `message`) VALUES
(7, 'mohammed sharaf basyoun', 'mmmm876@gmail.com', 'creat a hotels', 'mkmkmkm'),
(8, 'kfjgkdfgjfdkjgklfj', 'mshshshshsh97@gmail.com', 'dfgdghkfjgklje', 'fdgjdfkgjdfkjgkl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `decorations_and_furniture`
--
ALTER TABLE `decorations_and_furniture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electrical_appliances`
--
ALTER TABLE `electrical_appliances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronic_devices`
--
ALTER TABLE `electronic_devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture_department`
--
ALTER TABLE `furniture_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `household_appliances_section`
--
ALTER TABLE `household_appliances_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `decorations_and_furniture`
--
ALTER TABLE `decorations_and_furniture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `electrical_appliances`
--
ALTER TABLE `electrical_appliances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `electronic_devices`
--
ALTER TABLE `electronic_devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `furniture_department`
--
ALTER TABLE `furniture_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `household_appliances_section`
--
ALTER TABLE `household_appliances_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
