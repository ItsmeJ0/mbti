-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2025 at 09:29 AM
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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `teks_soal` text NOT NULL,
  `dimension` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `kode`, `teks_soal`, `dimension`) VALUES
(1, 'p1', 'Apakah Anda merasa lelah atau kehabisan energi setelah berada di tengah kerumunan orang?', 'IE'),
(2, 'p2', 'Apakah Anda merasa lebih tenang dan nyaman ketika berada di tempat yang sepi?', 'IE'),
(3, 'p3', 'Apakah Anda lebih nyaman berbicara secara mendalam dengan satu orang dibandingkan berinteraksi dengan banyak orang sekaligus?', 'IE'),
(4, 'p4', 'Apakah Anda cenderung mempertimbangkan dan merefleksikan diri sebelum berbicara?', 'IE'),
(5, 'p5', 'Apakah Anda lebih suka berbicara langsung dengan seseorang daripada berbicara melalui pesan atau media lain?', 'IE'),
(6, 'p6', 'Apakah Anda lebih senang menghabiskan waktu sendirian di rumah?', 'IE'),
(7, 'p7', 'Apakah Anda merasa lebih nyaman berbicara dengan teman dekat dibandingkan dengan orang yang baru Anda kenal?', 'IE'),
(8, 'p8', 'Apakah Anda suka bergaul dengan banyak teman dalam acara sosial?', 'IE'),
(9, 'p9', 'Apakah Anda merasa lebih bersemangat saat berada di tengah keramaian?', 'IE'),
(10, 'p10', 'Apakah Anda sering mencari kegiatan yang melibatkan interaksi sosial?', 'IE'),
(11, 'p11', 'Apakah Anda merasa senang jika dapat berinteraksi sosial setiap hari?', 'IE'),
(12, 'p12', 'Apakah Anda suka berdiskusi dalam kelompok besar mengenai topik-topik yang menarik?', 'IE'),
(13, 'p13', 'Apakah Anda merasa lebih antusias dalam kegiatan yang melibatkan banyak orang?', 'IE'),
(14, 'p14', 'Apakah Anda merasa berenergi ketika berinteraksi dengan banyak orang?', 'IE'),
(15, 'p15', 'Apakah Anda lebih suka berpikir tentang konsep-konsep abstrak dan ide-ide besar?', 'SN'),
(16, 'p16', 'Apakah Anda sering membayangkan masa depan dan kemungkinan yang dapat terjadi?', 'SN'),
(17, 'p17', 'Apakah Anda senang berbicara tentang ide-ide besar dan kreatif?', 'SN'),
(18, 'p18', 'Apakah Anda merasa lebih bersemangat ketika memikirkan peluang dan kemungkinan di masa depan?', 'SN'),
(19, 'p19', 'Apakah Anda cenderung merencanakan masa depan dengan hati-hati?', 'SN'),
(20, 'p20', 'Apakah Anda senang mencoba ide-ide baru dan berspekulasi?', 'SN'),
(21, 'p21', 'Apakah Anda suka membuat rencana jangka panjang?', 'SN'),
(22, 'p22', 'Apakah Anda lebih suka fokus pada hal-hal yang detail dan konkret?', 'SN'),
(23, 'p23', 'Apakah Anda cenderung mencari informasi melalui pengalaman dan pengamatan langsung?', 'SN'),
(24, 'p24', 'Apakah Anda merasa lebih nyaman menghadapi situasi yang sudah Anda kenal sebelumnya?', 'SN'),
(25, 'p25', 'Apakah Anda lebih suka fokus pada hal-hal yang dapat Anda lihat, dengar, atau sentuh?', 'SN'),
(26, 'p26', 'Apakah Anda merasa lebih nyaman dengan informasi yang konkret dan sudah ada?', 'SN'),
(27, 'p27', 'Apakah Anda lebih percaya pada data dan bukti yang sudah terbukti daripada asumsi?', 'SN'),
(28, 'p28', 'Apakah Anda sering mengambil tindakan berdasarkan pengalaman sebelumnya?', 'SN'),
(29, 'p29', 'Apakah Anda sering membuat keputusan berdasarkan logika dan analisis?', 'TF'),
(30, 'p30', 'Apakah Anda cenderung memahami masalah dari sudut pandang yang objektif?', 'TF'),
(31, 'p31', 'Apakah Anda menilai keputusan orang lain berdasarkan akal sehat dan rasionalitas?', 'TF'),
(32, 'p32', 'Apakah Anda memberikan saran dengan mempertimbangkan logika dan alasan yang kuat?', 'TF'),
(33, 'p33', 'Apakah Anda sering menimbang pro dan kontra sebelum mengambil keputusan?', 'TF'),
(34, 'p34', 'Apakah Anda selalu fokus pada fakta dan bukti ketika berdebat?', 'TF'),
(35, 'p35', 'Apakah Anda lebih memilih menjaga kestabilan emosi Anda sendiri?', 'TF'),
(36, 'p36', 'Apakah Anda merasa penting memegang teguh prinsip dan nilai pribadi dalam pengambilan keputusan?', 'TF'),
(37, 'p37', 'Apakah Anda ingin menghindari konflik dan berusaha menjaga perdamaian?', 'TF'),
(38, 'p38', 'Apakah Anda merasa lebih baik ketika dapat mengekspresikan emosi secara terbuka?', 'TF'),
(39, 'p39', 'Apakah Anda sering kesulitan mengendalikan emosi dalam situasi yang menantang?', 'TF'),
(40, 'p40', 'Apakah Anda akan memilih keputusan yang menguntungkan banyak orang dibanding satu orang?', 'TF'),
(41, 'p41', 'Apakah penting bagi Anda mempertimbangkan perasaan orang lain dalam pengambilan keputusan?', 'TF'),
(42, 'p42', 'Apakah Anda berusaha mencari solusi yang membuat semua orang merasa puas dan bahagia?', 'TF'),
(43, 'p43', 'Apakah Anda cenderung merencanakan aktivitas Anda dengan hati-hati?', 'JP'),
(44, 'p44', 'Apakah Anda merasa lebih nyaman ketika memiliki jadwal yang terstruktur?', 'JP'),
(45, 'p45', 'Apakah Anda biasanya menyelesaikan tugas sebelum tenggat waktu?', 'JP'),
(46, 'p46', 'Apakah Anda merasa tertekan ketika rencana Anda berubah atau terganggu?', 'JP'),
(47, 'p47', 'Apakah Anda suka membuat daftar dan menetapkan tujuan jangka panjang?', 'JP'),
(48, 'p48', 'Apakah Anda memiliki rutinitas dan kebiasaan yang konsisten?', 'JP'),
(49, 'p49', 'Apakah Anda lebih suka bersikap fleksibel dan terbuka terhadap perubahan?', 'JP'),
(50, 'p50', 'Apakah Anda nyaman menjalani hari tanpa rencana yang pasti?', 'JP'),
(51, 'p51', 'Apakah Anda merasa nyaman dengan ketidakpastian dan perubahan dalam hidup?', 'JP'),
(52, 'p52', 'Apakah Anda senang beradaptasi dengan perubahan yang mendadak?', 'JP'),
(53, 'p53', 'Apakah Anda baik-baik saja hidup tanpa rencana yang jelas?', 'JP'),
(54, 'p54', 'Apakah Anda merasa lebih nyaman ketika dapat membuat keputusan secara spontan?', 'JP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
