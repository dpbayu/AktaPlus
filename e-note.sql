-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 01:14 PM
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
(1, '9902747433', 'AJB', 'Robin', 'Eren', 46990, 'Jakarta', '800m', '1.000.000', 593352, 7605445, 84659283, 834364380, 1340544862, 'Nice one', 'Contoh Jurnal 1.pdf', '2022-12-13 23:23:45'),
(2, '6772086371', 'AJB', 'Syifa Kh', 'Seprilla Rizky', 63096, 'Tangerang', '500m', '2.000.000', 139788, 3114302, 99290064, 593833244, 2147483647, 'Good', 'Contoh Jurnal 2.pdf', '2022-12-13 23:35:24'),
(3, '2314133808', 'APHB', 'Nami', 'Monkey D Luffy', 74901, 'Laught Tale', '2000m', '5.000.000', 556002, 8672117, 12805227, 775522559, 2147483647, 'Nakama', 'Contoh Jurnal 3.pdf', '2022-12-13 23:37:14'),
(4, '5751523640', 'APHT', 'Dwi Rahmah', 'Yunita Syaba', 24527, 'Bandung', '100m', '8.000.000', 890560, 5241372, 29318136, 894087363, 2147483647, 'Great', '1. Halaman Judul.pdf', '2022-12-13 23:52:35'),
(5, '9458504208', 'Hibah', 'Sanji', 'Dwi Satria', 63502, 'Alabasta', '1.000m', '10.000.000', 213739, 2055961, 32049625, 813321784, 2147483647, 'Sand castle', 'Contoh Jurnal 6.pdf', '2022-12-13 23:56:02');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `password`, `fullname`, `user_profile`, `role`) VALUES
(1, '41815010140', '$2y$10$4qmyKbZSbUzwqv5rHwWg4.t9BBuUks9HfngWuxEisomAfWR4bZdIW', 'Dwi Putra Bayu', 'Tzuyu 2.jpg', 'Admin'),
(2, '41815010141', '$2y$10$XINR9eT6kb8msLj3LjE9huMYWU2P/oj2qxYAgAbzhSg5LiNZ8.KB6', 'Syifa Khairunnisa', 'Tzuyu 4.jpg', 'Admin'),
(6, '41815010143', '$2y$10$7S6KU74w1fgc8fpORK6N1.tu1w/jqd1e4VnTKpzDuriQP8H9QeIsG', 'Seprilla Rizky', 'Lunafreya.jpg', 'Admin'),
(7, '41815010144', '$2y$10$uHZV1Azju9Y3TgmJ.yiE4.9REqtOaFgQPuWF5714G42JjOVkcsJVy', 'Sila Indi', 'Tzuyu 1.jfif', 'Admin'),
(8, '41815010145', '$2y$10$KEMiGHo5maT9xVgWzcBiiOQFIG276d.A2bD74o9.LZB.Bxn.FsqZG', 'Velika Hafiza', 'Tzuyu 3.jpg', 'Admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
