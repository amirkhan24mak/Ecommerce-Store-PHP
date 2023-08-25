-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 08:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `passward` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `passward`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `ptitle` varchar(50) NOT NULL,
  `pshortdes` text NOT NULL,
  `plongdes` text NOT NULL,
  `pthumbnail` varchar(130) NOT NULL,
  `color_id` int(11) NOT NULL,
  `cata_id` int(11) NOT NULL,
  `statuss` tinyint(1) NOT NULL,
  `Pprice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `ptitle`, `pshortdes`, `plongdes`, `pthumbnail`, `color_id`, `cata_id`, `statuss`, `Pprice`) VALUES
(1, 'XIAOMI MI 11T2', 'XIAOMI MI 11T ipsum dolor sit amet consectetur adipisicing elit', 'XIAOMI MI 11T ipsum dolor sit amet consectetur adipisicing elitfsfdfsdfsdfsdfsdfsdfsdf', 'xiomo11T.png', 12, 6, 0, 'PKR 98000'),
(2, 'IPHONE 13', 'Iphone13 loremnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium', 'Iphone13 loremnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\n', '5_86c44f89-2212-49cd-8759-639d11afd9b1_1024x1024.jpg', 2, 4, 0, 'PKR 27,3899'),
(3, 'NOKIA 7.2', 'Nokia7.2 ipsum dolor sit amet consectetur adipisicing elit', 'Nokia7.2 ipsum dolor sit amet consectetur adipisicing elit dolor sit amet consectetur adipisicing elit', 'Nokia-7-2.jpg', 11, 2, 1, 'PKR 45,000'),
(4, 'OPPO RENO 5', 'Specification 8x128', 'Oppo Reno5 ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,', 'RENO 5.jpg', 6, 3, 0, 'PKR 59,999'),
(5, 'SAMSUNG GALAXY Z FLIP4', 'Specification 8x128', 'Samsung-Galaxy-Z-Flip4 ipsum dolor sit amet consectetur adipisicing elit', 'Flip-GRAY_1024x1024.jpg', 8, 5, 0, 'PKR 265,000'),
(6, 'OPPO A11K', 'Specification 2x32', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,', 'A11-Blue_1024x1024.jpg', 10, 3, 0, '19,999');

-- --------------------------------------------------------

--
-- Table structure for table `product_catageroy`
--

CREATE TABLE `product_catageroy` (
  `cata_id` int(11) NOT NULL,
  `cata_name` varchar(50) NOT NULL,
  `cata_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_catageroy`
--

INSERT INTO `product_catageroy` (`cata_id`, `cata_name`, `cata_img`) VALUES
(2, 'NOKIA', 'nokialogo.png'),
(3, 'OPPO', 'bXDVG6Hx_400x400.png'),
(4, 'APPLE', 'applelogo.png'),
(5, 'SAMSUNG', 'samsunglogo.png'),
(6, 'XIOAMI', 'xiaomi-logo-png-transparent.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`color_id`, `color_name`) VALUES
(2, 'red'),
(3, 'Purple'),
(6, 'Dark Blue'),
(7, 'Skin'),
(8, 'Black'),
(9, 'Light Pink'),
(10, 'White'),
(11, 'See Green '),
(12, 'Teal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `cata_id` (`cata_id`);

--
-- Indexes for table `product_catageroy`
--
ALTER TABLE `product_catageroy`
  ADD PRIMARY KEY (`cata_id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`color_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_catageroy`
--
ALTER TABLE `product_catageroy`
  MODIFY `cata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`color_id`) REFERENCES `product_color` (`color_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`cata_id`) REFERENCES `product_catageroy` (`cata_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
