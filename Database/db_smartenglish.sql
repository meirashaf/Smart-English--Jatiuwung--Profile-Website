-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 12:39 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smartenglish`
--

-- --------------------------------------------------------

--
-- Table structure for table `tadmin`
--

CREATE TABLE `tadmin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tartikel`
--

CREATE TABLE `tartikel` (
  `id_artikel` int(11) NOT NULL,
  `foto_artikel` varchar(255) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `last_update` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `jml_tayang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tartikel`
--

INSERT INTO `tartikel` (`id_artikel`, `foto_artikel`, `judul_artikel`, `isi_artikel`, `last_update`, `status`, `jml_tayang`) VALUES
(24, 'wrong.png', 'dsdcs dsc dcs', 'weqqwergerggweg', '2022-05-29', 'Publish', 25),
(25, 'compiler error.png', 'dfdfdf', 'hdfhfd', '2022-05-29', 'Draft', 99),
(26, 'wrong_1.png', 'fddsafgd', 'fdgdfsgdsfg', '2022-05-22', 'Publish', 50),
(28, 'compiler error_1.png', 'wewfefwe', 'etajyjutygedsvdfvavadvd', '2022-05-29', 'Draft', 27);

-- --------------------------------------------------------

--
-- Table structure for table `tkontak`
--

CREATE TABLE `tkontak` (
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `wa_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tprofil`
--

CREATE TABLE `tprofil` (
  `id_profile` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tprogram`
--

CREATE TABLE `tprogram` (
  `id_program` int(10) NOT NULL,
  `judul_program` varchar(255) NOT NULL,
  `deksripsi_program` varchar(255) NOT NULL,
  `jadwal_program` varchar(255) NOT NULL
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
  `programSchedule` varchar(255) NOT NULL,
  `profilePicture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tregistrasi`
--

INSERT INTO `tregistrasi` (`id`, `email`, `password`, `fname`, `lname`, `eduStage`, `eduGrade`, `school`, `birthPlace`, `birthDate`, `parentJob`, `Location`, `province`, `city`, `address`, `phone`, `programName`, `programSchedule`, `profilePicture`) VALUES
(4, 'irfanesa@upi.edu', '$2y$10$RSNjMrC/x286k2g3W/pd3ODMnrbCG0UKfjzLrAak9XFP3dHahE3U6', 'Irfan', 'Mochamad Esa', 'college', 'Bachelor', 'UPI', 'Tulungagung', '2001-01-13', 'other', 'Local', 'java', 'Bandung', 'Margahayu', '+6281220830725', 'English and Mathematics', 'Tuesday and Thursday, 09.00-10.30', '');

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
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tprofil`
--
ALTER TABLE `tprofil`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `tprogram`
--
ALTER TABLE `tprogram`
  ADD PRIMARY KEY (`id_program`);

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
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tprofil`
--
ALTER TABLE `tprofil`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tprogram`
--
ALTER TABLE `tprogram`
  MODIFY `id_program` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tregistrasi`
--
ALTER TABLE `tregistrasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
