-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 01:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardware_den`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `woym` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone_number`, `woym`) VALUES
(1, 'Test', 'Test@gmail.com', 982901812, 'Test Message');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `laptop_id` int(11) NOT NULL,
  `manufacturer` varchar(60) NOT NULL,
  `model_name` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `screen_size` decimal(11,0) NOT NULL,
  `screen_reso` varchar(50) NOT NULL,
  `panel_type` varchar(150) NOT NULL,
  `cpu_brand` varchar(25) NOT NULL,
  `cpu_series` varchar(25) NOT NULL,
  `cpu_name` varchar(50) NOT NULL,
  `cpu_speed` double NOT NULL,
  `gpu_type` varchar(25) NOT NULL,
  `gpu_brand` varchar(50) NOT NULL,
  `gpu_series` varchar(50) NOT NULL,
  `vram` int(11) NOT NULL,
  `ram_size` int(11) NOT NULL,
  `ram_speed` int(11) NOT NULL,
  `storage_type` varchar(250) NOT NULL,
  `storage_size` int(11) NOT NULL,
  `os` varchar(250) NOT NULL,
  `weight` double NOT NULL,
  `price` double NOT NULL,
  `no_of_rating` int(11) NOT NULL,
  `no_of_reviews` int(11) NOT NULL,
  `images` mediumblob NOT NULL,
  `release_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`laptop_id`, `manufacturer`, `model_name`, `category`, `screen_size`, `screen_reso`, `panel_type`, `cpu_brand`, `cpu_series`, `cpu_name`, `cpu_speed`, `gpu_type`, `gpu_brand`, `gpu_series`, `vram`, `ram_size`, `ram_speed`, `storage_type`, `storage_size`, `os`, `weight`, `price`, `no_of_rating`, `no_of_reviews`, `images`, `release_year`) VALUES
(1, 'Apple', 'MacBook Pro', 'Ultrabook', 13, '2560x1600', 'IPS Panel Retina Display', 'Intel', 'i5', '', 2.3, '', 'Intel', 'Iris Plus Graphics 640', 512, 8, 2133, 'SSD', 128, 'macOS', 1.37, 109900, 0, 0, '', '2017'),
(3, 'HP', 'Smartchoice 14s', 'Notebook', 14, '1920x1080', 'IPS Anti-Glare FHD', 'Intel', 'i3', '1125G4', 4.1, 'Integrated', 'Intel', 'Intel UHD Graphics', 512, 8, 3200, 'SSD NVMe M.2', 8, 'Windows 11 Home', 1.41, 32990, 0, 0, '', '2022'),
(4, 'Asus', 'Vivobook 14', 'Ultrabook', 14, '1920x1080', 'IPS FHD', 'Intel', 'i3', '1115G4', 3, 'Integrated', 'Intel', 'Intel UHD Graphics', 512, 8, 3200, 'SSD NVMe M.2', 512, 'Windows 11 Home', 1.6, 29990, 0, 0, '', '2022'),
(5, 'HP ', 'Victus Gaming', 'Gaming', 16, '1920x1080', 'IPS FHD 144Hz', 'Intel', 'i5', '12450H', 2.5, 'Dedicated', 'Nvidia', 'GeForce RTX 3050 Laptop', 4096, 16, 3200, 'SSD NVMe M.2', 512, 'Windows 11 Home', 2.29, 69599, 0, 0, '', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `login_credential`
--

CREATE TABLE `login_credential` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `name` varchar(125) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `admin` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_credential`
--

INSERT INTO `login_credential` (`id`, `user`, `pass`, `name`, `email`, `phone_number`, `address`, `city`, `state`, `pincode`, `country`, `admin`) VALUES
(1, 'Aryan728', 'neeta728', 'Aryan Sharma', 'Saryan728@gmail.com', '9757142120', '', '', '', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `nw_id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`nw_id`, `email`, `status`) VALUES
(1, 'Saryan728@gmail.com', 1),
(2, '', 1),
(640, 'Sar@gmail.com', 1),
(1292, 'neetasharma2007@rediffmail.com', 1),
(1418, 'mj123@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`laptop_id`);

--
-- Indexes for table `login_credential`
--
ALTER TABLE `login_credential`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD KEY `user_2` (`user`,`email`,`phone_number`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`nw_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `laptop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_credential`
--
ALTER TABLE `login_credential`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `nw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1435;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
