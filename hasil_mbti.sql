-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2025 at 12:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbti`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_mbti`
--

CREATE TABLE `hasil_mbti` (
  `id` int(11) NOT NULL,
  `pengguna_id` int(11) DEFAULT NULL,
  `nilai_I` float DEFAULT NULL,
  `nilai_E` float DEFAULT NULL,
  `nilai_S` float DEFAULT NULL,
  `nilai_N` float DEFAULT NULL,
  `nilai_T` float DEFAULT NULL,
  `nilai_F` float DEFAULT NULL,
  `nilai_J` float DEFAULT NULL,
  `nilai_P` float DEFAULT NULL,
  `hasil_tipe` varchar(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hasil_mbti`
--

INSERT INTO `hasil_mbti` (`id`, `pengguna_id`, `nilai_I`, `nilai_E`, `nilai_S`, `nilai_N`, `nilai_T`, `nilai_F`, `nilai_J`, `nilai_P`, `hasil_tipe`, `created_at`) VALUES
(1, 54, 0.5625, 0.769231, 0, 0, 0, 0, 0, 0, '0', '2025-06-29 05:12:10'),
(2, 55, 0.575, 0.818182, 0.625, 0.555556, 0.375, 0.625, 0.75, 0.666667, '0', '2025-06-29 05:17:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_mbti`
--
ALTER TABLE `hasil_mbti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengguna_id` (`pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_mbti`
--
ALTER TABLE `hasil_mbti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil_mbti`
--
ALTER TABLE `hasil_mbti`
  ADD CONSTRAINT `hasil_mbti_ibfk_1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
