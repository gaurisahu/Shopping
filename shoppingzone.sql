-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2016 at 10:01 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `lname`, `gender`, `date`, `email`, `password`, `phone`, `address`, `city`, `country`) VALUES
('', '', '', '', 'afs@gmail.com', '', '', 'tryry', 'yryr', ''),
('gauri', 'sahu', 'female', '1992-10-07', 'gauri@gmail.com', 'gauri', '8984563214', 'bbsr', 'bbsr', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` bigint(20) NOT NULL,
  `catg` varchar(40) NOT NULL,
  `subcatg` varchar(40) NOT NULL,
  `image` varchar(200) NOT NULL,
  `item_no` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `catg`, `subcatg`, `image`, `item_no`, `price`, `description`, `link`) VALUES
(1, '1', 'Casual Shirts', 'image/shirts/cs1.jpg', 101, 200, 'gfxdn', 'collaspe-1'),
(2, '1', 'Casual Shirts', 'image/shirts/cs2.jpg', 102, 222, 'sdvsv', 'collaspe-2'),
(3, '1', 'Casual Shirt', 'image/shirts/cs3.jpg', 103, 200, 'hjfgjh', 'collaspe-3');

-- --------------------------------------------------------

--
-- Table structure for table `shirts`
--

CREATE TABLE IF NOT EXISTS `shirts` (
  `id` bigint(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `item_no` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` bigint(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `caption1` varchar(50) NOT NULL,
  `caption2` varchar(50) NOT NULL,
  `caption3` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `caption1`, `caption2`, `caption3`) VALUES
(1, 'image/4.jpg', 'DAZZLE THE', 'WORLD', 'WITH YOUR CHRISMA'),
(2, 'image/3.jpg', 'SHOPPINGZONE', 'FOR THE HIGHEST', 'KEY OF YOUR SUCCESS'),
(3, 'image/8.jpg', 'THE WAY OF', '', 'WHY ARE YOU WAITING');

-- --------------------------------------------------------

--
-- Table structure for table `slider1`
--

CREATE TABLE IF NOT EXISTS `slider1` (
  `id` bigint(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `caption1` varchar(50) NOT NULL,
  `caption2` varchar(50) NOT NULL,
  `caption3` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider1`
--

INSERT INTO `slider1` (`id`, `image`, `caption1`, `caption2`, `caption3`) VALUES
(1, 'image/3.jpg', 'DAZZLE THE', 'WORLD', 'WITH YOUR CHRISMA');

-- --------------------------------------------------------

--
-- Table structure for table `slider2`
--

CREATE TABLE IF NOT EXISTS `slider2` (
  `id` bigint(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `caption1` varchar(50) NOT NULL,
  `caption2` varchar(50) NOT NULL,
  `caption3` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider2`
--

INSERT INTO `slider2` (`id`, `image`, `caption1`, `caption2`, `caption3`) VALUES
(1, 'image/4.jpg\r\n', 'SHOPPINGZONE', 'FOR THE HIGHEST', 'KEY OF YOUR SUCCESS');

-- --------------------------------------------------------

--
-- Table structure for table `slider3`
--

CREATE TABLE IF NOT EXISTS `slider3` (
  `id` bigint(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `caption1` varchar(50) NOT NULL,
  `caption2` varchar(50) NOT NULL,
  `caption3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider3`
--

INSERT INTO `slider3` (`id`, `image`, `caption1`, `caption2`, `caption3`) VALUES
(1, 'image/8.jpg', 'THE WAY OF', '', 'WHY ARE YOU WAITING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shirts`
--
ALTER TABLE `shirts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider1`
--
ALTER TABLE `slider1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider2`
--
ALTER TABLE `slider2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider3`
--
ALTER TABLE `slider3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shirts`
--
ALTER TABLE `shirts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slider1`
--
ALTER TABLE `slider1`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider2`
--
ALTER TABLE `slider2`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
