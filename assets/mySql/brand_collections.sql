-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2016 at 03:12 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_collections`
--

CREATE TABLE `brand_collections` (
  `code_id` varchar(50) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `status` enum('available','unavailable','','') NOT NULL DEFAULT 'unavailable'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_collections`
--

INSERT INTO `brand_collections` (`code_id`, `brand_name`, `status`) VALUES
('AT-002A', 'Adidas Foot wear', 'available'),
('PU-001E', 'Puma wear', 'available'),
('PU-001F', 'Puma', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_collections`
--
ALTER TABLE `brand_collections`
  ADD PRIMARY KEY (`code_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
