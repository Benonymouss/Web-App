-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2024 at 01:17 AM
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
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `nid` int(20) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dept` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `pic` text NOT NULL,
  `clients` varchar(100) NOT NULL,
  `dateofdraw` int(250) NOT NULL,
  `link` varchar(100) NOT NULL,
  `status` varchar(250) NOT NULL,
  `prizes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `nid`, `address`, `dept`, `degree`, `pic`, `clients`, `dateofdraw`, `link`, `status`, `prizes`) VALUES
(8, 'jam', '12312', 'arcillobenjamin102007@gmail.com', '1234', '0000-00-00', 'Male', '123123', 12312, '3123123', '213123', '213213', 'images/Screenshot 2024-06-06 214336.png', 'Ben', 213154, 'https://devinai.ai/', 'Available', 1000),
(12, 'limlim', 'arcillo', 'limlimarcillo@gmail.com', '1234', '0000-00-00', 'Male', '09161652566', 0, NULL, '', '', 'images/Screenshot 2023-07-18 080412.png', 'bournok', 0, 'https://www.youtube.com/', '', 0),
(13, 'kamkam', 'arcillo', 'kamkam@gmail.com', '1234', '2000-12-12', 'Male', '09776758555', 0, NULL, '', '', 'images/Screenshot 2023-10-16 201820.png', 'DR.Quantom', 0, 'https://www.facebook.com/ricky.mercado.39142', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(6) UNSIGNED NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `user_id` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_name`, `image_path`, `user_id`) VALUES
(1, 'Screenshot 2023-08-15 121834.png', 'uploads/66a37b71f338f_Screenshot 2023-08-15 121834.png', 123123),
(2, 'Screenshot 2023-08-15 121834.png', 'uploads/66a481363db5a_Screenshot 2023-08-15 121834.png', 123123),
(3, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48145999ac_Screenshot 2023-08-16 073835.png', 123123),
(4, 'Screenshot 2023-08-16 073835.png', 'uploads/66a481f351c8d_Screenshot 2023-08-16 073835.png', 123123),
(5, 'Screenshot 2023-08-16 073835.png', 'uploads/66a4846d307e4_Screenshot 2023-08-16 073835.png', 0),
(6, 'Screenshot 2023-08-16 073835.png', 'uploads/66a485ef1cc37_Screenshot 2023-08-16 073835.png', 123123),
(7, 'Screenshot 2023-08-16 073835.png', 'uploads/66a4869989698_Screenshot 2023-08-16 073835.png', 123123),
(8, 'Screenshot 2023-08-16 073835.png', 'uploads/66a486e82855d_Screenshot 2023-08-16 073835.png', 123123),
(9, 'Screenshot 2023-08-16 073835.png', 'uploads/66a4875c296fb_Screenshot 2023-08-16 073835.png', 123123),
(10, 'Screenshot 2023-08-16 073835.png', 'uploads/66a487b9a62f1_Screenshot 2023-08-16 073835.png', 123123),
(11, 'Screenshot 2023-08-16 073835.png', 'uploads/66a487c06412c_Screenshot 2023-08-16 073835.png', 123123),
(12, 'Screenshot 2023-08-16 073835.png', 'uploads/66a487ed1b532_Screenshot 2023-08-16 073835.png', 123123),
(13, 'Screenshot 2023-08-16 073835.png', 'uploads/66a4880f29263_Screenshot 2023-08-16 073835.png', 123123),
(14, 'Screenshot 2023-08-16 073835.png', 'uploads/66a4882213880_Screenshot 2023-08-16 073835.png', 123123),
(15, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48a9b6e884_Screenshot 2023-08-16 073835.png', 123123),
(16, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48ad1a7b37_Screenshot 2023-08-16 073835.png', 123123),
(17, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48aeac4155_Screenshot 2023-08-16 073835.png', 123123),
(18, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48b096f750_Screenshot 2023-08-16 073835.png', 123123),
(19, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48b1565509_Screenshot 2023-08-16 073835.png', 123123),
(20, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48b2302c1a_Screenshot 2023-08-16 073835.png', 123123),
(21, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48ba9bca17_Screenshot 2023-08-16 073835.png', 123123),
(22, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48c08a4e49_Screenshot 2023-08-16 073835.png', 123123),
(23, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48c59cca3e_Screenshot 2023-08-16 073835.png', 123123),
(24, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48c74da451_Screenshot 2023-08-16 073835.png', 123123),
(25, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48cc7064b7_Screenshot 2023-08-16 073835.png', 123123),
(26, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48ccaa1e8e_Screenshot 2023-08-16 073835.png', 123123),
(27, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48d68d6dec_Screenshot 2023-08-16 073835.png', 123123),
(28, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48de2e5a73_Screenshot 2023-08-16 073835.png', 123123),
(29, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48e2f8f5e1_Screenshot 2023-08-16 073835.png', 123123),
(30, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48e32889f1_Screenshot 2023-08-16 073835.png', 123123),
(31, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48e56ee247_Screenshot 2023-08-16 073835.png', 123123),
(32, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48e8c270bf_Screenshot 2023-08-16 073835.png', 123123),
(33, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48eaf3384a_Screenshot 2023-08-16 073835.png', 123123),
(34, 'Screenshot 2023-08-16 073835.png', 'uploads/66a48eb2103aa_Screenshot 2023-08-16 073835.png', 123123),
(35, 'Screenshot 2023-08-16 073835.png', 'uploads/66a4cc8c109d2_Screenshot 2023-08-16 073835.png', 123123),
(36, 'Screenshot 2023-08-09 132820.png', 'uploads/66ac4a5ab5583_Screenshot 2023-08-09 132820.png', 123123),
(37, 'Screenshot 2023-08-16 073835.png', 'uploads/66ad78d1b028f_Screenshot 2023-08-16 073835.png', 123123),
(38, 'Screenshot 2023-10-12 205718.png', 'uploads/66ae9c40a4118_Screenshot 2023-10-12 205718.png', 123123);

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `eid` int(11) NOT NULL,
  `points` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`eid`, `points`) VALUES
(8, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rank`
--
ALTER TABLE `rank`
  ADD CONSTRAINT `rank_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
