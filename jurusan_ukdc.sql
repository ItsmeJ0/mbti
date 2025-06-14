-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2025 at 02:55 PM
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
-- Table structure for table `jurusan_ukdc`
--

CREATE TABLE `jurusan_ukdc` (
  `id` int(11) NOT NULL,
  `mbti` varchar(4) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan_ukdc`
--

INSERT INTO `jurusan_ukdc` (`id`, `mbti`, `jurusan`) VALUES
(1, 'ENFJ', 'Akupuntur'),
(2, 'ENFJ', 'Manajemen Perhotelan'),
(3, 'ENFJ', 'Manajemen Pemasaran'),
(4, 'ENFP', 'Ilmu Informatika'),
(5, 'ENFP', 'Manajemen Perhotelan'),
(6, 'ENFP', 'Hukum'),
(7, 'ENFP', 'Manajemen Pemasaran'),
(8, 'ENTJ', 'Akuntansi'),
(9, 'ENTJ', 'Arsitektur'),
(10, 'ENTJ', 'Manajemen Perhotelan'),
(11, 'ENTJ', 'Hukum'),
(12, 'ENTJ', 'Manajemen Pemasaran'),
(13, 'ENTJ', 'Ilmu Informatika'),
(14, 'ENTP', 'Akuntansi'),
(15, 'ENTP', 'Arsitektur'),
(16, 'ENTP', 'Ilmu Informatika'),
(17, 'ENTP', 'Industri'),
(18, 'ENTP', 'Hukum'),
(19, 'ESFJ', 'Akuntansi'),
(20, 'ESFJ', 'Akupuntur'),
(21, 'ESFJ', 'Manajemen Perhotelan'),
(22, 'ESFJ', 'Hukum'),
(23, 'ESFJ', 'Manajemen Pemasaran'),
(24, 'ESFP', 'Akupuntur'),
(25, 'ESFP', 'Manajemen Perhotelan'),
(26, 'ESFP', 'Hukum'),
(27, 'ESTJ', 'Akuntansi'),
(28, 'ESTJ', 'Manajemen Perhotelan'),
(29, 'ESTJ', 'Industri'),
(30, 'ESTJ', 'Hukum'),
(31, 'ESTP', 'Ilmu Informatika'),
(32, 'ESTP', 'Industri'),
(33, 'ESTP', 'Manajemen Pemasaran'),
(34, 'INFJ', 'Arsitektur'),
(35, 'INFJ', 'Hukum'),
(36, 'INFJ', 'Manajemen Pemasaran'),
(37, 'INFP', 'Arsitektur'),
(38, 'INFP', 'Hukum'),
(39, 'INTJ', 'Ilmu Informatika'),
(40, 'INTP', 'Arsitektur'),
(41, 'INTP', 'Ilmu Informatika'),
(42, 'INTP', 'Hukum'),
(43, 'INTP', 'Arsitektur'),
(44, 'INTP', 'Ilmu Informatika'),
(45, 'INTP', 'Hukum'),
(46, 'ISFP', 'Ilmu Informatika'),
(47, 'ISFP', 'Akupuntur'),
(48, 'ISFP', 'Hukum'),
(49, 'ISTJ', 'Akuntansi'),
(50, 'ISTJ', 'Arsitektur'),
(51, 'ISTJ', 'Ilmu Informatika'),
(52, 'ISTJ', 'Akupuntur'),
(53, 'ISTJ', 'Hukum'),
(54, 'ISTP', 'Ilmu Informatika'),
(55, 'ISTP', 'Akupuntur'),
(56, 'ISTP', 'Industri'),
(57, 'ISTP', 'Arsitektur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan_ukdc`
--
ALTER TABLE `jurusan_ukdc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan_ukdc`
--
ALTER TABLE `jurusan_ukdc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
