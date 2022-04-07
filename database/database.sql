-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 04:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amblncbking_and_helthmnitring`
--

-- --------------------------------------------------------

--
-- Table structure for table `actv_booking`
--

CREATE TABLE `actv_booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `str_tme` varchar(200) NOT NULL,
  `end_tme` varchar(200) DEFAULT NULL,
  `order_id` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE `car_info` (
  `id` int(11) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `images` varchar(100) NOT NULL,
  `car_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL,
  `asigned_area` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `availability` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_info`
--

INSERT INTO `car_info` (`id`, `driver_name`, `images`, `car_no`, `email`, `phone`, `role`, `asigned_area`, `password`, `availability`) VALUES
(1, 'Soumen Nath', 'images/a1.jpg', 'KA 19P 8470', 'someonedv1@gmail.com', '8563421023', 'driver', 'DumDum', 'driver123', 'YES'),
(2, 'Rakesh Ghosh', 'images/a2.jpg', 'KA 19P 8488', 'someonedv2@gmail.com', '9631742534', 'driver', 'DumDum', 'driver743', 'YES'),
(3, 'Rana Hazra', 'images/a3.jpg', 'PU 42R 6377', 'someonedvr3@gmail.com', '7452310252', 'driver', 'Ruby', 'driver520', 'YES'),
(4, 'Roma Pal', 'images/a4.jpg', 'TS 81S 5200', 'someonedv4@gmail.com', '8032146597', 'Driver', 'NagerBazar', 'driver857', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `car_no` varchar(100) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sensor1`
--

CREATE TABLE `sensor1` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `dt_tm` varchar(200) NOT NULL,
  `snr_val` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sensor2`
--

CREATE TABLE `sensor2` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `dt_tm` varchar(200) NOT NULL,
  `snr_val` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sensor3`
--

CREATE TABLE `sensor3` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `dt_tm` varchar(200) NOT NULL,
  `snr_val` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sensor4`
--

CREATE TABLE `sensor4` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `dt_tm` varchar(200) NOT NULL,
  `snr_val` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sensor5`
--

CREATE TABLE `sensor5` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `dt_tm` varchar(200) NOT NULL,
  `snr_val` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sensor6`
--

CREATE TABLE `sensor6` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `dt_tm` varchar(200) NOT NULL,
  `snr_val` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `phone`, `email`, `password`, `role`, `area`, `address`) VALUES
(1, 'Username Surname1', '8032467124', 'uname1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user', 'Dumdum', '256 A Hanuman Mandir,Opposite of Agamani Sweets , Dumdum, Kolkata - 700074'),
(2, 'Username Surname2', '7063214852', 'uname2@gmail.com', 'c33367701511b4f6020ec61ded352059', 'user', 'Tollygaunge', 'House no - 5A, 201 C near Lake , Tollygaunge Kolkata - 700095');
-- password for user1 is 123456 -- and user2 is 654321
--
-- Indexes for dumped tables
--

--
-- Indexes for table `actv_booking`
--
ALTER TABLE `actv_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_info`
--
ALTER TABLE `car_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor1`
--
ALTER TABLE `sensor1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor2`
--
ALTER TABLE `sensor2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor3`
--
ALTER TABLE `sensor3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor4`
--
ALTER TABLE `sensor4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor5`
--
ALTER TABLE `sensor5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor6`
--
ALTER TABLE `sensor6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actv_booking`
--
ALTER TABLE `actv_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car_info`
--
ALTER TABLE `car_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sensor1`
--
ALTER TABLE `sensor1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sensor2`
--
ALTER TABLE `sensor2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sensor3`
--
ALTER TABLE `sensor3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sensor4`
--
ALTER TABLE `sensor4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sensor5`
--
ALTER TABLE `sensor5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sensor6`
--
ALTER TABLE `sensor6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
