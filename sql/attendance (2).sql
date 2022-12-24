-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 01:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `description`, `created_at`) VALUES
(2018, 'lorem ipsum dami text!', '2022-12-12 20:30:23'),
(2019, 'lorem ipsum dami text!', '2022-12-12 20:30:44'),
(2020, 'lorem ipsum dami text!', '2022-12-12 20:30:51'),
(2021, 'lorem ipsum dami text!', '2022-12-12 20:31:00'),
(2022, 'lorem ipsum dami text!', '2022-12-12 18:21:20'),
(2023, 'lorem ipsum dami text!', '2022-12-12 20:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `class_description`) VALUES
(7, 'one', 'lorem ipsum dami text'),
(8, 'two', 'lorem ipsum dami text'),
(9, 'three', 'lorem ipsum dami text'),
(10, 'four', 'lorem ipsum dami text'),
(11, 'five', 'lorem ipsum dami text');

-- --------------------------------------------------------

--
-- Table structure for table `present`
--

CREATE TABLE `present` (
  `p_id` int(11) NOT NULL,
  `present` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `p_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `present`
--

INSERT INTO `present` (`p_id`, `present`, `batch_id`, `class_id`, `p_date`) VALUES
(1, '20180701,20180702,20180703,20180704,20180705', 2018, 7, '2022-12-13'),
(2, '20180701,20180702,20180703,20180704,20180705', 2018, 7, '2022-12-14'),
(3, '20180701,20180702,20180704,20180705', 2018, 7, '2022-12-15'),
(5, '20180801,20180802,20180803,20180804', 2018, 8, '2022-12-12'),
(6, '20180701,20180702,20180703,20180704', 2018, 7, '2022-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_father` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_mother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_father`, `s_mother`, `batch_id`, `class_id`, `phone`) VALUES
(20180701, 'Rana Miya', 'jolmot', 'kannis', 2018, 7, '07425252522'),
(20180702, 'kasem', 'billal', 'Monora', 2018, 7, '01866936562'),
(20180703, 'Rajib', 'Bala', 'Mukta', 2018, 7, '07425252522'),
(20180704, 'Tanim', 'Kholil', 'Unkhown', 2018, 7, '01921324091'),
(20180705, 'Robil', 'Unkhown', 'Unkhown', 2018, 7, '07425252567'),
(20180801, 'Hujaifa', 'Unkhown', 'Unkhown', 2018, 8, '07425252567'),
(20180802, 'Redoy', 'Unkhown', 'Unkhown', 2018, 8, '07425252522'),
(20180803, 'Shobuj', 'Sokot', 'Rojina', 2018, 8, '01624128156'),
(20180804, 'Said', 'Bablu', 'Aliya', 2018, 8, '01921324091'),
(20180805, 'Juwel', 'kuddos', 'Unkhown', 2018, 8, '01624128156');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `t_email`, `t_designation`, `password`, `role`, `created_at`) VALUES
(2, 'Md.Ashanaur', 'ashanur@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, '2022-11-13 23:50:38'),
(3, 'akash', 'akash@gmail.com', 'Teacher', 'e10adc3949ba59abbe56e057f20f883e', 0, '2022-11-14 17:17:51'),
(9, 'sappno', 'sappno@gmail.com', 'Teacher', 'c51ce410c124a10e0db5e4b97fc2af39', 1, '2022-11-14 17:32:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`),
  ADD UNIQUE KEY `class_name` (`class_name`);

--
-- Indexes for table `present`
--
ALTER TABLE `present`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `batch_id` (`batch_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `batch_id` (`batch_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `t_email` (`t_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2032;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `present`
--
ALTER TABLE `present`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `present`
--
ALTER TABLE `present`
  ADD CONSTRAINT `present_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`),
  ADD CONSTRAINT `present_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
