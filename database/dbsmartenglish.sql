-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsmartenglish`
--

-- --------------------------------------------------------

--
-- Table structure for table `tadmin`
--

CREATE TABLE `tadmin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tartikel`
--

CREATE TABLE `tartikel` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `articleImage` longblob NOT NULL,
  `articleDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tpengajar`
--

CREATE TABLE `tpengajar` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tprogram`
--

CREATE TABLE `tprogram` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `schedule` time NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tregistrasi`
--

CREATE TABLE `tregistrasi` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `eduStage` varchar(255) NOT NULL,
  `eduGrade` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `birthPlace` varchar(255) NOT NULL,
  `birthDate` date NOT NULL,
  `parentJob` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `programName` varchar(255) NOT NULL,
  `programSchedule` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tregistrasi`
--

INSERT INTO `tregistrasi` (`id`, `email`, `password`, `fname`, `lname`, `eduStage`, `eduGrade`, `school`, `birthPlace`, `birthDate`, `parentJob`, `Location`, `province`, `city`, `address`, `phone`, `programName`, `programSchedule`) VALUES
(1, 'irfanesa@upi.edu', '$2y$10$4F0Ywq78AT1RpXEJxsMEiucPZFvRbP1gxTeUjjQ4ZrR2fRnCXsT4W', 'asdasd', 'asdasd', 'junior', '1', 'asdasd', 'asdasd', '2022-05-03', 'PNS', 'Local', 'jakarta', 'java', 'asdasd', '081220830725', 'English Only', '00:11:11'),
(2, 'irfanmesa13@gmail.com', '$2y$10$AAjOu1agckbcbLmK3Y1MfuGSyrfZK7RJpJ2zAG3ROi3iiZJEs89Be', 'irfan', 'mochamad esa', 'senior', 'Grade 2', 'Alfa Centauri', 'Tulungagung', '2022-04-05', 'other', 'Local', 'java', 'Bandung', 'Margahayu', '081220830725', 'Cram School', 'Friday and Saturday, 19.00-20.30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tadmin`
--
ALTER TABLE `tadmin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tartikel`
--
ALTER TABLE `tartikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpengajar`
--
ALTER TABLE `tpengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tprogram`
--
ALTER TABLE `tprogram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tregistrasi`
--
ALTER TABLE `tregistrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tartikel`
--
ALTER TABLE `tartikel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tpengajar`
--
ALTER TABLE `tpengajar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tprogram`
--
ALTER TABLE `tprogram`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tregistrasi`
--
ALTER TABLE `tregistrasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
