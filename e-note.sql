-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 12:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-note`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akta`
--

INSERT INTO `akta` (`id`, `no_akta`, `type_akta`, `seller`, `buyer`, `no_hak`, `address`, `surface_area`, `transaction`, `certificate`, `pbb`, `njop`, `ssp`, `ssb`, `description`, `pdf_akta`, `created_at`) VALUES
(8, '41815010147', 'AJB', 'Bayu', 'Velika', 78945, 'Madura', '800m', '7.0000.000', 212315, 1231864, 32168468, 123456, 2147483647, 'Good vibe', 'CV, Ijazah & Transkip.pdf', '2022-12-13 03:20:14'),
(9, '41815010174', 'APHT', 'Velika Hafiza Fatihah', 'Prima Rifqah Nabiilah', 78945, 'Jakarta', '1000m', '7.0000.000', 212315, 1231864, 32168468, 123456, 2147483647, 'Good vibe', 'goodbrief.pdf', '2022-12-13 07:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `profile_pic` text NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `password`, `fullname`, `profile_pic`, `role`) VALUES
(1, '41815010140', '$2y$10$4qmyKbZSbUzwqv5rHwWg4.t9BBuUks9HfngWuxEisomAfWR4bZdIW', 'Dwi Putra Bayu', '1670915468Antony.jpeg', 'Admin'),
(2, '41815010141', '$2y$10$MCwv3cEI5aopl5/oZ3A76OychoAoNDy3nmEN2ywj7nXKL9Cz2lK5e', 'Syifa Khairunnisaa', '1670920089Tzuyu 4.jpg', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akta`
--
ALTER TABLE `akta`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
