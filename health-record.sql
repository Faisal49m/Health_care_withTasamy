-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2016 at 01:23 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health-record`
--

-- --------------------------------------------------------

--
-- Table structure for table `brief_desc`
--

CREATE TABLE `brief_desc` (
  `weight` int(3) NOT NULL,
  `height` int(3) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `user_id` int(6) NOT NULL,
  `id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brief_desc`
--

INSERT INTO `brief_desc` (`weight`, `height`, `blood_type`, `user_id`, `id`) VALUES
(45, 157, 'AB+', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `more_det`
--

CREATE TABLE `more_det` (
  `nationality` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `mobile_phone` int(20) NOT NULL,
  `user_id` int(6) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `more_det`
--

INSERT INTO `more_det` (`nationality`, `sex`, `date_of_birth`, `mobile_phone`, `user_id`, `id`) VALUES
('barbadian', 'male', '2016-06-22', 56698123, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `state` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `state`) VALUES
(5, 'Faisal', 'Faisal49m@gmail.com', '5fd924625f6ab16a19cc9807c7c506ae1813490e4ba675f843d5a10e0baacdb8', 2),
(6, 'ÙÙŠØµÙ„', 'fjbsijds@gmail.com', '5fd924625f6ab16a19cc9807c7c506ae1813490e4ba675f843d5a10e0baacdb8', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brief_desc`
--
ALTER TABLE `brief_desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `more_det`
--
ALTER TABLE `more_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brief_desc`
--
ALTER TABLE `brief_desc`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `more_det`
--
ALTER TABLE `more_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
