-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 02:16 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `admin_profile` text NOT NULL,
  `nik` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `admin_profile`, `nik`, `password`) VALUES
(1, 'Dwi Putra Bayu', '1663495722Foto.jpeg', '41815010140', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `akta`
--

CREATE TABLE `akta` (
  `id` int(11) NOT NULL,
  `no_akta` varchar(255) NOT NULL,
  `tipe_akta` varchar(255) NOT NULL,
  `penjual` varchar(255) NOT NULL,
  `pembeli` varchar(255) NOT NULL,
  `no_hak` int(5) NOT NULL,
  `alamat_tanah` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `transaksi` varchar(255) NOT NULL,
  `sertifikat` int(6) NOT NULL,
  `pbb` int(7) NOT NULL,
  `njop` int(8) NOT NULL,
  `ssp` int(9) NOT NULL,
  `ssb` int(10) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `pdf_akta` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akta`
--

INSERT INTO `akta` (`id`, `no_akta`, `tipe_akta`, `penjual`, `pembeli`, `no_hak`, `alamat_tanah`, `luas_tanah`, `transaksi`, `sertifikat`, `pbb`, `njop`, `ssp`, `ssb`, `keterangan`, `pdf_akta`, `created_at`) VALUES
(1, '1/2022', 'APHB', 'Nami', 'Robin', 12345, 'Fusha Street, East Blue', '500m', '2.000.000', 123456, 1234567, 12345678, 123456789, 1234567890, 'Nice place', 'file_1.pdf', '2022-09-15 13:04:04'),
<<<<<<< HEAD
(2, '2/2022', 'Hibah', 'Mikasa', 'Eren', 54321, 'Jl Keabadian No 7', '400m', '400.000', 965435, 2183465, 73281034, 264738219, 2147483647, 'Uwaw', 'file_2.pdf', '2022-09-15 13:05:17'),
=======
(2, '2/2022', 'Hibah', 'Mikasa', 'Eren', 54321, 'Jl Keabadian No 7', '400m', '400.000', 96543, 2183465, 73281034, 264738219, 2147483647, 'Uwaw', 'file_2.pdf', '2022-09-15 13:05:17'),
>>>>>>> 4ce176abb569e0931c16a41c9aa0e8c64381cb80
(3, '3/2022', 'APHT', 'Sanji', 'Judge', 10932, 'Jl North Blue', '900m', '5.000.000', 283746, 1735490, 19304652, 162738491, 2147483647, 'This place like shit!!!', 'file_3.pdf', '2022-09-15 13:07:03'),
(4, '4/2022', 'AJB', 'Syifa', 'Seprilla', 26374, 'Jl Kesesatan', '800m', '6.000.000', 126472, 2674823, 12345891, 213645984, 1264539062, 'Like this one', 'file_4.pdf', '2022-09-15 13:24:49'),
(5, '5/2022', 'AJB', 'Sabo', 'Monkey D Luffy', 23467, 'Lulusiana Kingdom', '600m', '4.000.000', 253849, 1527392, 14253748, 162732109, 2147483647, 'This is it!', 'file_5.pdf', '2022-09-18 11:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `admin_profile` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `username`, `admin_profile`, `password`) VALUES
(1, 'dwiputrabayu', '1662911065Wallpaper 7.jpg', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `akta`
--
ALTER TABLE `akta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `akta`
--
ALTER TABLE `akta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
