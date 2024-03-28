-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 10:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
(1, 'Test', 'Test@gmail.com', 982901812, 'Test Message'),
(5, 'Neeta Sharma', 'neetasharma2007@rediffmail.com', 2147483647, 'Wanted to inquire about The RTX 4060 Availability');

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
  `images` longtext NOT NULL,
  `other_images` longtext NOT NULL,
  `release_year` year(4) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`laptop_id`, `manufacturer`, `model_name`, `category`, `screen_size`, `screen_reso`, `panel_type`, `cpu_brand`, `cpu_series`, `cpu_name`, `cpu_speed`, `gpu_type`, `gpu_brand`, `gpu_series`, `vram`, `ram_size`, `ram_speed`, `storage_type`, `storage_size`, `os`, `weight`, `price`, `no_of_rating`, `no_of_reviews`, `images`, `other_images`, `release_year`, `stock`) VALUES
(1, 'Apple', 'MacBook Pro', 'Ultrabook', 13, '2560x1600', 'IPS Panel Retina Display', 'Intel', 'i5', '', 2.3, '', 'Intel', 'Iris Plus Graphics 640', 512, 8, 2133, 'SSD', 128, 'macOS', 1.37, 109900, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222517742062534756/c719531606218950ad67c10472083cf1.png?ex=6616815e&is=66040c5e&hm=3bfc74cef60a89cc8dafa063dd727a89a3f481e14a5fed572b753564da6181aa&=&format=webp&quality=lossless&width=701&height=701', '', '2017', 0),
(3, 'HP', 'Smartchoice 14s', 'Notebook', 14, '1920x1080', 'IPS Anti-Glare FHD', 'Intel', 'i3', '1125G4', 4.1, 'Integrated', 'Intel', 'UHD Graphics', 512, 8, 3200, 'SSD NVMe M.2', 512, 'Windows 11 Home', 1.41, 32990, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222542674716921906/269904_0_fxgoip.png?ex=66169897&is=66042397&hm=1f8157d7a04087cb56b8039f17ab787645894edc72ed3f9d82c3da47c28e8dbd&=&format=webp&quality=lossless&width=701&height=701', '', '2022', 0),
(4, 'Asus', 'Vivobook 14', 'Ultrabook', 14, '1920x1080', 'IPS FHD', 'Intel', 'i3', '1115G4', 3, 'Integrated', 'Intel', 'UHD Graphics', 512, 8, 3200, 'SSD NVMe M.2', 512, 'Windows 11 Home', 1.6, 29990, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222543031081762887/31736f29-2307-4583-b887-a9fc5a85f259.png?ex=661698ec&is=660423ec&hm=0a0fb30654f72d90a659af1c7104892bdcfa3af34ccad3706f1c2918072a85af&=&format=webp&quality=lossless&width=350&height=350', '', '2022', 0),
(5, 'HP ', 'Victus Gaming', 'Gaming', 16, '1920x1080', 'IPS FHD 144Hz', 'Intel', 'i5', '12450H', 2.5, 'Dedicated', 'Nvidia', 'GeForce RTX 3050 Laptop', 4096, 16, 3200, 'SSD NVMe M.2', 512, 'Windows 11 Home', 2.29, 69599, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222543262640767028/21-c-1-victus-taffyta-16-60-w-lcd-mica-silver-nt-h-dcam-non-odd-freedos-core-set-front-copy.png?ex=66169923&is=66042423&hm=6f1e1697e76a01af989ede56440c7928b3991918955330d72db4b817b8995a83&=&format=webp&quality=lossless&width=404&height=350', '', '2023', 0),
(6, 'Asus', 'ZenBook UX430UN', 'Ultrabook', 14, '1920x1080', 'VA FHD', 'Intel', 'i7', '8550U', 1.8, 'Integrated', 'Nvidia', 'MX150', 256, 8, 2400, 'SSD', 512, 'Windows 10 Home', 1.3, 58999, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222544442402279434/dc960661-0bcf-4674-9f5c-7c2ccdcd7cb1.png?ex=66169a3c&is=6604253c&hm=eab6426d8fc37bc955ffdffa1c41b74a482356ccac04bd5f624edbe3fdeed1fb&=&format=webp&quality=lossless&width=350&height=350', '', '2018', 0),
(7, 'Dell', 'G15-5520', 'Gaming', 16, '1920x1080', 'FHD WVA AG 120Hz', 'Intel', 'i5', '12500H', 4.5, 'Dedicated', 'Nvidia', 'GeForce RTX 3050 Laptop', 4096, 16, 4800, 'SSD NVMe M.2', 1024, 'Windows 11 Home', 2.81, 75990, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222544698321932309/273309_oi32ro.png?ex=66169a79&is=66042579&hm=88b38eaa5b268b7b2966aa9cdf4f8d02a89a489753707fbd7160ca88f1dc6ad9&=&format=webp&quality=lossless&width=350&height=350', '', '2023', 0),
(8, 'Asus', 'TUF Gaming F15', 'Gaming', 16, '1920x1080', 'IPS FHD 144Hz', 'Intel', 'i5', '11400H', 2.7, 'Dedicated', 'Nvidia', 'GeForce RTX 2050 Laptop', 4096, 16, 3200, 'SSD', 512, 'Windows 10 Home', 2.3, 52990, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222544894292267129/f93bdd99-47d7-4f97-8800-5a83d0bd46a6.png?ex=66169aa8&is=660425a8&hm=1904629e42f8a8f85f3710d56f37adbf6eff79bdd3b91cdcfeb3e9b3d02ab3de&=&format=webp&quality=lossless&width=350&height=350', '', '2023', 0),
(9, 'HONOR', 'MagicBook X14', 'Notebook', 14, '1920x1080', 'IPS Anti-Glare FHD', 'Intel', 'i5', '12450H', 2, 'Integrated', 'Intel', 'UHD Graphics', 512, 16, 3200, 'SSD NVMe PCIe', 512, 'Windows 11 Home', 1.43, 54990, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222545136844673034/428_428_FBA083DC6E91B772E9607A121CDCC313C33A61EAB2C92D30mp.png?ex=66169ae2&is=660425e2&hm=8b01a99c2ea583318b2fc885f39c7807e2c5053fc02fbaf317981c223a642676&=&format=webp&quality=lossless', '', '2023', 0),
(10, 'Asus', 'ROG Strix G15', 'Gaming', 16, '1920x1080', 'IPS FHD 144Hz', 'AMD', 'Ryzen 7', '6800H', 4.7, 'Dedicated', 'Nvidia', 'GeForce RTX 2050 Laptop', 4096, 16, 4800, 'SSD NVMe M.2', 1024, 'Windows 11 Home', 2.1, 83100, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222545277345599568/h732.png?ex=66169b03&is=66042603&hm=8701646d8aee744c34ffdc747c1a685673dfdd6223e55ed6e23443c96a17a6e2&=&format=webp&quality=lossless&width=476&height=350', '', '2022', 0),
(11, 'Dell', 'Alienware m18 R1', 'Gaming', 18, '2560x1440', 'QHD 165Hz Nvidia G-Sync Compatible 3ms', 'Intel', 'i9', '13900HX', 3.9, 'Dedicated', 'Nvidia', 'GeForce RTX 4080', 12288, 32, 3200, 'SSD NVMe M.2', 1024, 'Windows 11 Home', 3.86, 365690, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222545491007639582/awx16nt-cnb-0055rf110-gy-perkey-track-pad-off.png?ex=66169b36&is=66042636&hm=5f5ddbe2301df9cae0a0046381f4aa2d38b98ca2f1fd63fbbe627c146759beba&=&format=webp&quality=lossless&width=350&height=350', '', '2023', 0),
(12, 'HP ', 'OMEN Gaming Laptop', 'Gaming', 18, '2560x1440', 'QHD IPS 240Hz 3ms', 'Intel', 'i9', '13900HX', 5.4, 'Dedicated', 'Nvidia', 'GeForce RTX 4080', 12288, 32, 5600, 'SSD NVMe PCIe Gen 4', 1024, 'Windows 11 Home', 2.76, 303501, 0, 0, 'https://media.discordapp.net/attachments/1196163965110202440/1222545772307021874/ImageMain2x.png?ex=66169b79&is=66042679&hm=ecdcbf0e63b9a516c32643fb1f82026de8946151e9721a0913a093b7338eb3be&=&format=webp&quality=lossless&width=412&height=350', '', '2023', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_credential`
--

CREATE TABLE `login_credential` (
  `id` int(10) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `name` varchar(125) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `billing_address` varchar(1000) NOT NULL,
  `ba_country` varchar(50) NOT NULL,
  `ba_state` varchar(50) NOT NULL,
  `ba_city` varchar(50) NOT NULL,
  `ba_pincode` int(10) NOT NULL,
  `shipping_address` varchar(1000) NOT NULL,
  `sa_country` varchar(50) NOT NULL,
  `sa_state` varchar(50) NOT NULL,
  `sa_city` varchar(50) NOT NULL,
  `sa_pincode` int(10) NOT NULL,
  `admin` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_credential`
--

INSERT INTO `login_credential` (`id`, `user`, `pass`, `name`, `email`, `phone_number`, `billing_address`, `ba_country`, `ba_state`, `ba_city`, `ba_pincode`, `shipping_address`, `sa_country`, `sa_state`, `sa_city`, `sa_pincode`, `admin`) VALUES
(1, 'Saryan728', 'Neeta72819', 'Aryan Sharma', 'Saryan728@gmail.com', '9757142120', '203, Ashtavinayak Darshan CHS, Tekdi Bangla Panchpakhadi, Thane (W) - 400602', 'IN', 'MH', 'Thane', 400602, '203, Ashtavinayak Darshan CHS, Tekdi Bangla Panchpakhadi, Thane (W) - 400602', '', '', '', 0, 1);

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
(1292, 'neetasharma2007@rediffmail.com', 1),
(1418, 'mj123@gmail.com', 1),
(1444, 'oyecadbury@gmail.com', 1);

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
  ADD UNIQUE KEY `user_2` (`user`,`email`,`phone_number`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user` (`user`,`email`,`phone_number`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`nw_id`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `laptop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login_credential`
--
ALTER TABLE `login_credential`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `nw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1476;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
