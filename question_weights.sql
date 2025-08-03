-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2025 at 09:30 AM
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
-- Table structure for table `question_weights`
--

CREATE TABLE `question_weights` (
  `id` int(11) NOT NULL,
  `kode_soal` varchar(10) NOT NULL,
  `indikator` varchar(5) NOT NULL,
  `bobot` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question_weights`
--

INSERT INTO `question_weights` (`id`, `kode_soal`, `indikator`, `bobot`) VALUES
(1, 'p1', 'I', 0.75),
(2, 'p2', 'I', 1.00),
(3, 'p3', 'I', 1.00),
(4, 'p4', 'I', 0.75),
(5, 'p5', 'I', 0.50),
(6, 'p6', 'I', 1.00),
(7, 'p7', 'I', 0.50),
(8, 'p8', 'I', 0.25),
(9, 'p10', 'I', 0.25),
(10, 'p12', 'I', 0.50),
(11, 'p14', 'I', 0.25),
(12, 'p4', 'E', 0.25),
(13, 'p5', 'E', 0.50),
(14, 'p7', 'E', 0.75),
(15, 'p8', 'E', 1.00),
(16, 'p9', 'E', 1.00),
(17, 'p10', 'E', 1.00),
(18, 'p11', 'E', 0.50),
(19, 'p12', 'E', 0.50),
(20, 'p13', 'E', 1.00),
(21, 'p14', 'E', 1.00),
(22, 'p15', 'N', 1.00),
(23, 'p16', 'N', 1.00),
(24, 'p17', 'N', 1.00),
(25, 'p18', 'N', 1.00),
(26, 'p19', 'N', 0.25),
(27, 'p20', 'N', 0.75),
(28, 'p21', 'N', 0.50),
(29, 'p24', 'N', 0.25),
(30, 'p27', 'N', 0.25),
(31, 'p28', 'N', 0.25),
(32, 'p16', 'S', 0.25),
(33, 'p20', 'S', 0.25),
(34, 'p21', 'S', 0.50),
(35, 'p22', 'S', 1.00),
(36, 'p23', 'S', 1.00),
(37, 'p24', 'S', 0.75),
(38, 'p25', 'S', 1.00),
(39, 'p26', 'S', 1.00),
(40, 'p27', 'S', 0.75),
(41, 'p28', 'S', 0.50),
(42, 'p29', 'T', 1.00),
(43, 'p30', 'T', 1.00),
(44, 'p31', 'T', 1.00),
(45, 'p32', 'T', 1.00),
(46, 'p33', 'T', 1.00),
(47, 'p34', 'T', 0.75),
(48, 'p35', 'T', 0.50),
(49, 'p36', 'F', 1.00),
(50, 'p37', 'F', 1.00),
(51, 'p38', 'F', 0.25),
(52, 'p39', 'F', 0.50),
(53, 'p40', 'F', 1.00),
(54, 'p41', 'F', 1.00),
(55, 'p42', 'F', 1.00),
(56, 'p43', 'J', 1.00),
(57, 'p44', 'J', 1.00),
(58, 'p45', 'J', 0.50),
(59, 'p46', 'J', 0.75),
(60, 'p47', 'J', 0.75),
(61, 'p48', 'J', 0.50),
(62, 'p49', 'J', 0.25),
(63, 'p53', 'J', 0.25),
(64, 'p49', 'P', 1.00),
(65, 'p50', 'P', 0.50),
(66, 'p51', 'P', 0.25),
(67, 'p52', 'P', 0.75),
(68, 'p53', 'P', 0.75),
(69, 'p54', 'P', 0.75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_weights`
--
ALTER TABLE `question_weights`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question_weights`
--
ALTER TABLE `question_weights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
