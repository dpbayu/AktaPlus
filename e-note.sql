-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 05:58 AM
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
(5, '9458504208', 'Hibah', 'Sanji', 'Dwi Satria', 63502, 'Alabasta', '1.000m', '10.000.000', 213739, 2055961, 32049625, 813321784, 2147483647, 'Sand castle', 'Contoh Jurnal 6.pdf', '2022-12-13 23:56:02'),
(6, '8078218285', 'Hibah', 'Mythia', 'Portgas D Ace', 35565, 'Marineford', '5000m', '25.000.000', 672915, 6686426, 63300530, 311834911, 1302633326, 'War Pirate', 'CV, Ijazah & Transkip.pdf', '2023-01-19 16:32:10'),
(7, '1330325766', 'APHB', 'Marco', 'Armin', 12364, 'Shigashina', '700m', '2.000.000', 123345, 2147483, 21474312, 107205116, 2147483647, 'Scare place', 'CV, Ijazah & Transkip.pdf', '2023-01-19 16:42:41'),
(8, '9067520372', 'AJB', 'Chou Tzuyu', 'Wendy', 21474, 'Banjar', '900m', '800.000', 214748, 2147483, 21474836, 214748364, 2147483647, 'Nice', 'Dwi Putra Bayu Oktantyo.pdf', '2023-01-19 17:09:27'),
(9, '3652250772', 'APHB', 'Aisyah Amelia', 'Date Masamune', 44236, 'Solo', '4.000m', '50.000.000', 213229, 7902698, 23444268, 900367505, 2147483647, 'Great job', 'Sertifikat.pdf', '2023-01-19 17:20:04'),
(10, '3752288266', 'AJB', 'Nekoturnal', 'Qory Gore', 67419, 'Isekai', '200m', '500.000', 396723, 9793350, 26189885, 467591381, 405394814, 'Messi is goat', '15. BAB 6.pdf', '2023-01-19 17:24:41'),
(11, '6064868261', 'APHT', 'Kobo', 'Dustin', 20605, 'Medan', '750m', '5.000.000', 455821, 6831925, 35711878, 152140119, 2147483647, 'Discord is good', '2. Abstrak.pdf', '2023-01-19 17:26:39'),
(12, '3752288266', 'APHT', 'Chou Tzuyu', 'Qory Gore', 12345, 'Solo', '500m', '800.000', 123123, 6686426, 63300530, 2147483647, 1234567890, 'Humanity', 'Quotation.pdf', '2023-02-05 16:26:59'),
(13, '8078218285', 'AJB', 'Mythia', 'Portgas D Ace', 35565, 'Isekai', '500m', '800.00m', 123123, 1234567, 63300530, 900367505, 1234567890, 'War Pirate', 'Quotation.pdf', '2023-02-05 16:27:58'),
(14, '9876543210', 'APHB', 'Mythia', 'Date Masamune', 35565, 'Banjar', '700m', '50.000.000', 672915, 1234567, 12345678, 2147483647, 2147483647, 'Great job', 'Quotation.pdf', '2023-02-05 16:30:56'),
(15, '9067520372', 'Hibah', 'Chou Tzuyu', 'Irene', 35565, 'Shigasina', '5000m', '800.00', 213229, 6686426, 12345678, 900367505, 1234567890, 'Ditto', 'goodbrief.pdf', '2023-02-06 09:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(255) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `username`, `admin_profile`, `password`, `role`) VALUES
(1, 'Bayudp', 'Wallpaper 1.jpg', '$2y$10$E3dMqFV3OqammYcgXsdJIOlbNXgKhdK9IoX1yLiL6mXRpXbzH3BSW', 'Owner'),
(2, 'Syifa', 'Tzuyu 4.jpg', '$2y$10$71EzvrOAWaojAOHH8RLBBuejySdJUxR10HzxC/ikIa/WfFHbYkoIS', 'Owner');

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
(1, '41815010140', '$2y$10$sLt53wVO.1Hvbrcgv2jhi.a5XJztZgOYISJ8kqp2uTY28L2UPe.RG', 'Dwi Putra Bayu', 'Antony.jpeg', 'Admin'),
(6, '41815010141', '$2y$10$3jV35ZqobAiklMPic2LKoeMPu46sNyTNXH0GUWYSgTCze5Dgz6kM2', 'Chou Tzuyu', 'Tzuyu 4.jpg', 'Admin'),
(7, '41815010142', '$2y$10$2Cz9LTrKQyP76hriV9OyNe9B5W7cA5lGWIo7FYvInj.GZ6nnGiSri', 'Syifa Khairunnisa', 'Tzuyu 3.jpg', 'Admin'),
(9, '41815010143', '$2y$10$DJVX4cxkgT7tHLui1CimQ.bqz4rUBO87x68GPqDJPms.5GLxKZthm', 'Yeri', 'Twice.jpg', 'Admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
