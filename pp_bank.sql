-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 04:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pp_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `accs`
--

CREATE TABLE `accs` (
  `id` int(50) NOT NULL,
  `acc_name` varchar(100) NOT NULL,
  `acc_pic` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ppbacc`
--

CREATE TABLE `ppbacc` (
  `id` int(50) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `salt` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `failed_login` int(11) NOT NULL DEFAULT '0',
  `acc_type` varchar(50) NOT NULL,
  `acc_number` int(100) NOT NULL,
  `acc_bal` int(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `second_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mob_no` varchar(100) NOT NULL,
  `addr` varchar(250) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `curr_status` varchar(50) NOT NULL,
  `pic` varchar(290) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ppbacc`
--

INSERT INTO `ppbacc` (`id`, `username`, `password`, `email`, `salt`, `last_login`, `failed_login`, `acc_type`, `acc_number`, `acc_bal`, `first_name`, `second_name`, `last_name`, `mob_no`, `addr`, `Nationality`, `curr_status`, `pic`) VALUES
(61, 'chandan', '16eb9e8446a541e0a01ba2487caa3f9f04403f6c86b37039807e660af8f34133763367857f16954632fbe9caf7b43f2fd891dc6d90ce11b31ae89b433e9c64dc', 'adiwalchandan@gmail.com', '5e286c91e68c7', '2020-01-28 15:32:18', 0, '', 0, 0, '', '', '', '', '', '', '', ''),
(62, 'pentest1', '4927f4e4d64bdf9f48ded5e5a8faef2f0d399c6cada086a089eea47dc5671b45ed6430ad9b979639680cb015339a425df4f476f4c0a55e57da6e443292c5e474', 'pentest1@gmail.com', '5e29ca06b16fa', '2020-01-23 10:29:58', 0, '', 0, 0, '', '', '', '', '', '', '', ''),
(63, 'admin', 'a78a0be1dd098b296ed752e8a1cdcd7e88407bab7ec8da1041b0e86cb0cd1e24b12d299a270c30a0a4e79ae1bf7ee6834c96feb2d1a8785b54a02446cf466895', 'admin@gmail.com', '5e29da2342986', '2020-01-23 11:55:04', 0, '', 0, 0, '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accs`
--
ALTER TABLE `accs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppbacc`
--
ALTER TABLE `ppbacc`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accs`
--
ALTER TABLE `accs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppbacc`
--
ALTER TABLE `ppbacc`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
