-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2018 at 04:38 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyz_traders`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories_info`
--

CREATE TABLE `accessories_info` (
  `acc_id` int(5) NOT NULL,
  `acc_brand` varchar(50) NOT NULL,
  `acc_model` varchar(50) NOT NULL,
  `acc_code` varchar(50) NOT NULL,
  `acc_origin` varchar(50) NOT NULL,
  `acc_wholesale` int(5) NOT NULL,
  `acc_quantity` int(4) NOT NULL,
  `acc_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accessories_info`
--

INSERT INTO `accessories_info` (`acc_id`, `acc_brand`, `acc_model`, `acc_code`, `acc_origin`, `acc_wholesale`, `acc_quantity`, `acc_description`) VALUES
(1, 'Remax', 'Charger 3c', 'abc999', 'Dhaka', 500, 70, 'stock'),
(3, 'Anik', '1789', 'cxer00', 'Russia', 100, 1000, '');

-- --------------------------------------------------------

--
-- Table structure for table `mobiles_info`
--

CREATE TABLE `mobiles_info` (
  `mobile_id` int(5) NOT NULL,
  `mobile_brand` varchar(30) NOT NULL,
  `mobile_model` varchar(50) NOT NULL,
  `mobile_code` varchar(50) NOT NULL,
  `mobile_origin` varchar(50) NOT NULL,
  `mobile_wholesale` int(6) NOT NULL,
  `mobile_quantity` int(4) NOT NULL,
  `mobile_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobiles_info`
--

INSERT INTO `mobiles_info` (`mobile_id`, `mobile_brand`, `mobile_model`, `mobile_code`, `mobile_origin`, `mobile_wholesale`, `mobile_quantity`, `mobile_description`) VALUES
(1, 'Samsung', 'J7 Pro', 'SJ001', 'China', 23900, 50, 'too good'),
(3, 'Walton', 'E3', 'WE001', 'Bangladesh', 4500, 200, 'too good'),
(4, 'samsung', 'J2', 'Xyz006', 'China', 20000, 10, ''),
(5, 'Walton', 'R3', 'bho998', 'China', 10230, 20, 'too good'),
(6, 'walton', 'D4', 'ghj123', 'China', 10000, 10, ''),
(7, 'xiaomi', 'Mi 5', 'kkkon12', 'India', 30000, 10, 'too good'),
(8, 'samsung', 'A6', 'bho999', 'India', 36000, 13, 'too good'),
(9, 'Sony', 'Z', 'hol987', '', 0, 5, ''),
(10, 'Sony', 'L', 'nop123', '', 0, 0, ''),
(11, 'Apple', 'Mi 3', 'Xyz008', 'India', 3000, 10, 'too good'),
(12, 'Apple', 'Mi 3', 'bho997', 'Thailand', 1000000000, 20, 'too good to'),
(13, 'Walton', 'R2', 'lol789', 'Bermuda', 3500, 30, 'Santaaaaaaaaaa'),
(14, 'Samsung', 'A3', 'nom789', 'India', 18500, 45, 'too good to');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_mobile` varchar(30) NOT NULL,
  `user_designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_mobile`, `user_designation`) VALUES
(1, 'Rahim', 'rahim@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '+02-8031875', 'Admin'),
(2, 'Sajib', 'sajib@gmail.com', '12345', '+8801680-051462', 'Super Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories_info`
--
ALTER TABLE `accessories_info`
  ADD PRIMARY KEY (`acc_id`),
  ADD UNIQUE KEY `acc_code` (`acc_code`);

--
-- Indexes for table `mobiles_info`
--
ALTER TABLE `mobiles_info`
  ADD PRIMARY KEY (`mobile_id`),
  ADD UNIQUE KEY `mobile_code` (`mobile_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories_info`
--
ALTER TABLE `accessories_info`
  MODIFY `acc_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mobiles_info`
--
ALTER TABLE `mobiles_info`
  MODIFY `mobile_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
