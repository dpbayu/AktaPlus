-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 03:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aktaplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `akta`
--

CREATE TABLE `akta` (
  `id` int(11) NOT NULL,
  `no_akta` varchar(255) NOT NULL,
  `type_akta` varchar(255) NOT NULL,
  `seller` varchar(255) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `no_hak` int(5) NOT NULL,
  `address` varchar(255) NOT NULL,
  `surface_area` varchar(255) NOT NULL,
  `transaction` varchar(255) NOT NULL,
  `certificate` int(6) NOT NULL,
  `pbb` int(7) NOT NULL,
  `njop` int(8) NOT NULL,
  `ssp` int(9) NOT NULL,
  `ssb` int(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pdf_akta` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akta`
--

INSERT INTO `akta` (`id`, `no_akta`, `type_akta`, `seller`, `buyer`, `no_hak`, `address`, `surface_area`, `transaction`, `certificate`, `pbb`, `njop`, `ssp`, `ssb`, `description`, `pdf_akta`, `created_at`) VALUES
(1, '9876543210', 'AJB', 'Chou Tzuyu', 'Irene', 35565, 'Shigasina', '500m', '800.000', 123123, 1234567, 63300530, 900367505, 1234567890, 'War Pirate', 'ID_Panduan_Harvest_Moon_Back_to_Nature_Bahasa_Indonesia.pdf', '2023-02-07 12:24:35'),
(2, '8078218285', 'AJB', 'Mythia', 'Date Masamune', 12345, 'Solo', '700m', '50.000.000', 213229, 6686426, 12345678, 2147483647, 2147483647, 'Ditto', 'ATS - Dwi Putra Bayu Oktantyo.pdf', '2023-02-07 12:26:04'),
(3, '3752288266', 'Hibah', 'Aisyah Amelia', 'Portgas D Ace', 44236, 'Marineford', '5.000m', '25.000.000', 672915, 1238028, 27972167, 1072051169, 1302633326, 'Ditto', 'Contoh Jurnal 1.pdf', '2023-02-07 12:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(255) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `admin_profile` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `username`, `admin_profile`, `password`, `role`) VALUES
(1, 'Dwi', 'Antony.jpeg', '$2y$10$f.3kmePwygonkKAIKVmN.OEFbSi4f/FFy6XnJ8QuYWrZz59uVUeYm', 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `user_profile` text NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `password`, `fullname`, `user_profile`, `role`) VALUES
(1, '41815010140', '$2y$10$sLt53wVO.1Hvbrcgv2jhi.a5XJztZgOYISJ8kqp2uTY28L2UPe.RG', 'Dwi Putra Bayu', 'Wallpaper 1.jpg', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akta`
--
ALTER TABLE `akta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akta`
--
ALTER TABLE `akta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
