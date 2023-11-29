-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 07:16 AM
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
-- Database: `dbpln`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `gol_id` tinyint(3) NOT NULL,
  `gol_kode` varchar(10) NOT NULL,
  `gol_nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upadated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_golongan`
--

INSERT INTO `tb_golongan` (`gol_id`, `gol_kode`, `gol_nama`, `created_at`, `upadated_at`) VALUES
(2, '25', 'A-2', '2023-11-28 04:38:32', NULL),
(5, '26', 'B-1', '2023-11-28 12:25:16', NULL),
(6, '27', 'A-1', '2023-11-29 04:51:05', NULL),
(7, '28', 'B-2', '2023-11-29 04:51:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `pel_id` int(11) NOT NULL,
  `gol_id` tinyint(3) NOT NULL,
  `pel_no` varchar(20) NOT NULL,
  `pel_nama` varchar(50) NOT NULL,
  `pel_alamat` text NOT NULL,
  `pel_hp` varchar(20) NOT NULL,
  `pel_ktp` varchar(50) NOT NULL,
  `pel_seri` varchar(50) NOT NULL,
  `pel_meteran` int(11) NOT NULL,
  `pel_aktif` enum('Y','N') DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upadated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`pel_id`, `gol_id`, `pel_no`, `pel_nama`, `pel_alamat`, `pel_hp`, `pel_ktp`, `pel_seri`, `pel_meteran`, `pel_aktif`, `user_id`, `created_at`, `upadated_at`) VALUES
(1, 2, '23', 'PROBOWO', 'jakarta', '09725726', '6542314161', '265', 54, 'Y', 124, '2023-11-28 09:48:12', NULL),
(2, 2, '24', 'GANJAR', 'jakarta', '08364632323', '341343432532531', '266', 55, 'Y', 123, '2023-11-28 09:55:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_Password` varchar(100) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_alamat` text DEFAULT NULL,
  `user_hp` varchar(25) NOT NULL,
  `user_pos` varchar(5) NOT NULL,
  `user_role` tinyint(2) NOT NULL,
  `user_aktif` tinyint(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upadated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_email`, `user_Password`, `user_nama`, `user_alamat`, `user_hp`, `user_pos`, `user_role`, `user_aktif`, `created_at`, `upadated_at`) VALUES
(123, 'operator@gmail.com', '*60CE05C60319F4878B7A51EDF3DC98089E0C6E26', 'operator', 'medan', '082212345634', '12345', 1, 2, '2023-11-27 13:08:35', NULL),
(124, 'Zorashhi@gmail.com', '*00A51F3F48415C7D4E8908980D443C29C69B60C9', 'Bima Sanjaya', 'United State of America', '0987654345', '23456', 1, 1, '2023-11-28 06:11:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`gol_id`),
  ADD UNIQUE KEY `gol_kode` (`gol_kode`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`pel_id`),
  ADD KEY `gol_id` (`gol_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `gol_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `pel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`gol_id`) REFERENCES `tb_golongan` (`gol_id`),
  ADD CONSTRAINT `tb_pelanggan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
