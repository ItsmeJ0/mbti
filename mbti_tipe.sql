-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2025 at 03:47 PM
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
-- Table structure for table `mbti_tipe`
--

CREATE TABLE `mbti_tipe` (
  `id` int(11) NOT NULL,
  `tipe_mbti` varchar(4) NOT NULL,
  `penjelasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mbti_tipe`
--

INSERT INTO `mbti_tipe` (`id`, `tipe_mbti`, `penjelasan`) VALUES
(1, 'ISTJ', 'Tipe kepribadian ISTJ digambarkan sebagai individu yang praktis dan berorientasi pada fakta, dengan keandalan yang tak diragukan. Orang ISTJ cenderung pendiam, sistematis, dan berpikir logis. Mereka menghargai struktur dan tradisi, menepati komitmen, serta melaksanakan tugas dengan ketelitian tinggi.'),
(2, 'ISFJ', 'Tipe ISFJ dikenal sebagai pelindung yang sangat berdedikasi dan hangat, selalu siap membela orang yang mereka sayangi. Mereka umumnya ramah, bertanggung jawab, dan detail dalam bekerja. ISFJ bekerja keras dan teliti memastikan tugas yang dipercayakan selesai dengan baik. Kekuatan ISFJ adalah empati, kesetiaan, dan keteraturan; misalnya, mereka sering mengingat hari penting atau momen spesial, dan dengan antusias membantu orang terdekat.'),
(3, 'INFJ', 'Tipe kepribadian INFJ digambarkan sebagai idealis yang tenang dan mistis, namun sangat inspiratif. Mereka berpikiran dalam dan imajinatif, dengan kehidupan batin yang kaya serta dipandu oleh nilai pribadi dan visi kemanusiaan. INFJ sangat idealis; mereka terdorong untuk membuat perbedaan positif dan membantu orang lain demi memenuhi tujuan hidup yang bermakna. Kekuatan INFJ mencakup kreativitas, empati, dan kemampuan komunikasi yang hangat, sehingga mereka sering menjadi pendukung dan pemberi inspirasi bagi orang lain. Di sisi lain, INFJ cenderung sangat sensitif terhadap kritik dan keadilan; mereka bisa mudah stres bila idealisme terganggu dan terkadang sulit bergaul jika merasa tidak dipahami.'),
(4, 'INTJ', 'Tipe INTJ adalah pemikir strategis dan imajinatif. Mereka mandiri, analitis, dan memiliki wawasan mendalam; INTJ secara konsisten mengembangkan kemampuannya dan berusaha menguasai bidang yang diminati. Dalam memecahkan masalah, INTJ mengutamakan logika dan kreativitas, senantiasa mempertanyakan status quo demi berinovasi. Kekuatan INTJ terletak pada visi jangka panjang, disiplin, dan ketekunan tinggi. Sebaliknya, mereka cenderung kurang sabar menghadapi ketidakefisienan atau ketidaklogisan orang lain, serta kesulitan mengekspresikan emosi karena lebih mengandalkan pemikiran rasional.'),
(5, 'ISTP', 'Tipe kepribadian ISTP adalah eksperimenter praktis yang berani dan mandiri. Mereka berpikiran logis dan suka bereksperimen dengan ide atau benda nyata; keingintahuan dan keterampilan teknis mereka tinggi, sehingga sering menciptakan atau memperbaiki sesuatu secara langsung. ISTP unggul dalam tugas yang membutuhkan solusi praktis: mereka cenderung menyelesaikan masalah dengan mencoba dan mengamati sendiri, bekerja sesuai kecepatan dan metode pilihan mereka. Kekuatan ISTP meliputi adaptabilitas, ketenangan dalam situasi krisis, dan kemampuan praktis yang luar biasa. Kelemahannya bisa berupa sikap blak-blakan yang kadang dianggap kurang peka, serta kesulitan dalam merencanakan jauh ke depan atau menjaga rutinitas yang sangat terstruktur.'),
(6, 'ISFP', 'Tipe ISFP adalah seniman yang fleksibel dan menawan. Mereka berpikiran terbuka dan suka menjalani hidup dengan kehangatan yang sederhana; kemampuan mereka untuk hidup di saat ini memungkinkan mereka menemukan potensi baru dalam pengalaman sehari-hari. Secara sosial, ISFP ramah dan penyayang, menikmati waktu bersama orang terdekat, meskipun perlu waktu sendiri untuk mengisi ulang energi. Kekuatan ISFP mencakup kreativitas artistik, empati yang tulus, dan toleransi tinggi terhadap perbedaan. Kelemahan mereka adalah sulitnya membuat rencana jangka panjang dan kepekaan emosional yang tinggi—mereka bisa mudah tertekan jika menghadapi kritikan atau konflik.'),
(7, 'INFP', 'Tipe kepribadian INFP dikenal sebagai puitis, baik hati, dan altruistik. Mereka pendiam namun imajinatif, dengan kehidupan batin yang kaya akan mimpi dan refleksi diri. INFP sangat idealis dan peduli mendalam terhadap hubungan pribadi; mereka termotivasi membantu orang lain dan mencari makna dalam setiap hal yang mereka lakukan. Kekuatan INFP termasuk empati, kreativitas artistik, dan kesetiaan terhadap nilai-nilai pribadi. Sebaliknya, kelemahan mereka adalah kecenderungan berfantasi terlalu jauh serta kebimbangan dalam mengambil keputusan praktis, karena emosi dan idealisme sering menguasai.'),
(8, 'INTP', 'Tipe INTP adalah penemu inovatif yang haus akan pengetahuan. Mereka berpikir fleksibel dan sering menempuh pendekatan tidak konvensional untuk memahami hal-hal di sekitarnya. INTP menikmati kehilangan diri dalam pemikiran abstrak; kecerdasan analitis mereka tinggi dan tidak ragu mempertanyakan segala hal demi menemukan jawaban yang logis. Kekuatan INTP meliputi kreativitas intelektual, kemampuan berpikir kritis, dan pemikiran terbuka. Sementara itu, kelemahan mereka adalah ketidakmampuan menyelesaikan detail rutin atau implementasi ide serta kecenderungan melamun terlalu lama.'),
(9, 'ESTP', 'Tipe kepribadian ESTP digambarkan sebagai tipe yang cerdas, enerjik, dan sangat peka yang menikmati tantangan. ESTP bersikap spontan dan berani; mereka fokus pada masa kini dan sangat waspada terhadap peluang di sekitar. Mereka cenderung menyelesaikan masalah dengan tindakan langsung—melompat ke dalam situasi tanpa banyak perencanaan dan mengoreksi kesalahan sambil berjalan. Kekuatan ESTP adalah kecepatan berpikir, keberanian, dan kemampuan mempengaruhi orang lain melalui aksi nyata. Sisi lemah mereka mencakup impulsivitas, kecenderungan mengambil risiko tanpa perhitungan matang, serta kurangnya kesabaran terhadap tugas yang membosankan atau aturan ketat.'),
(10, 'ESFP', 'Tipe ESFP adalah tipe yang spontan, enerjik, dan antusias, sehingga kehadiran mereka membuat suasana ceria. ESFP sangat menikmati menjadi pusat perhatian dan membagikan kegembiraan pada orang lain. Mereka memiliki rasa estetika tinggi dan pandangan yang ceria terhadap kehidupan, serta sangat peka terhadap emosi orang di sekitarnya. Kekuatan ESFP meliputi keterampilan sosial, kebaikan hati, dan kemampuan menciptakan momen menyenangkan. Namun, kelemahan mereka adalah mudah terganggu oleh keinginan mencari kesenangan, sering mengabaikan tanggung jawab rutin, serta sensitif terhadap kritik atau konfrontasi.'),
(11, 'ENFP', 'Tipe kepribadian ENFP dikenal sebagai tipe yang antusias, kreatif, dan sosial, selalu mencari alasan untuk tersenyum. Mereka ramah, penuh semangat, dan berpikiran terbuka; ENFP bersemangat menyuarakan ide besar yang mencerminkan optimisme dan niat baik mereka. ENFP banyak memikirkan dinamika hubungan dan kehidupan, menggunakan imajinasi untuk memahami diri sendiri dan orang lain secara mendalam. Kekuatan ENFP termasuk empati tinggi, energi positif yang menular, dan kreativitas inspiratif. Sebaliknya, kelemahan mereka adalah kesulitan dalam mempertahankan fokus jangka panjang serta kecenderungan terlalu merenungi interaksi sosial.'),
(12, 'ENTP', 'Tipe ENTP adalah pemikir yang cerdas dan penasaran secara intelektual yang tidak tahan dengan tantangan berpikir. ENTP berani dan kreatif dalam merombak ide-ide; mereka senang memainkan peran penantang untuk menguji argumen dan melahirkan perspektif baru. Kekuatan ENTP terletak pada kefasihan berbicara, fleksibilitas intelektual, dan analisis cepat. Namun, ENTP dapat kesulitan menyelesaikan tugas rutin atau ide yang telah dirancang karena minatnya yang mudah berpindah ke hal lain, serta kadang dianggap terlalu kontrarian dan kurang perhatian pada perasaan orang lain dalam berdebat.'),
(13, 'ESTJ', 'Tipe kepribadian ESTJ adalah pemimpin alami yang terorganisir dan tegas. Mereka menghargai tradisi, aturan, dan tanggung jawab; ESTJ terkenal karena dedikasi, kejujuran, serta kemampuan merencanakan dan mengeksekusi tugas hingga tuntas. Dalam bekerja, mereka sangat disiplin, senang memimpin tim, dan akan terus mendorong diri sendiri serta orang lain untuk memenuhi standar tinggi. Kekuatan ESTJ adalah kepemimpinan yang kuat, efisiensi, dan kepercayaan diri. Sebaliknya, kelemahan mereka berupa kecenderungan kaku terhadap aturan, sulit menerima sudut pandang berbeda, serta kurang sabar menghadapi situasi di luar kendali mereka.'),
(14, 'ESFJ', 'Tipe ESFJ dikenal sebagai pribadi yang sangat peduli, sosial, dan senang membantu. Mereka ramah, perhatian, dan sangat mementingkan keharmonisan dalam komunitas; ESFJ sering kali menjadi sosok penengah dalam keluarga atau lingkungan sosial dengan mengutamakan sopan santun serta tradisi. Dengan moral yang kuat, ESFJ senang memberi dukungan praktis dan emosional—misalnya selalu siap mengingat ulang tahun dan merencanakan acara bersama. Kekuatan ESFJ meliputi empati, kehangatan sosial, dan keterampilan organisasi untuk menyatukan orang lain. Kelemahan mereka adalah kadang terlalu sensitif terhadap penolakan atau konflik, serta sulit menerima bahwa orang lain punya cara berbeda dalam menjalani hidup.'),
(15, 'ENFJ', 'Tipe kepribadian ENFJ adalah pemimpin karismatik yang sabar, optimis, dan bertujuan mulia. Mereka ramah dan berempati tinggi, selalu tergerak untuk membantu orang lain mencapai potensi terbaiknya. ENFJ mendorong orang-orang di sekitarnya dengan inspirasi dan kepercayaan diri; dalam berbagai situasi, mereka cenderung tampil sebagai penuntun yang peduli. Kekuatan ENFJ termasuk kemampuan motivasi, wawasan intuitif terhadap perasaan orang lain, serta ketulusan dalam berkomunikasi. Namun, mereka dapat terjebak dalam terlalu banyak mengurusi masalah orang lain sehingga kadang lelah sendiri, serta mudah tersinggung apabila saran mereka tidak diindahkan.'),
(16, 'ENTJ', 'Tipe ENTJ dikenal sebagai pemberani, visioner, dan berkemauan keras. Mereka adalah pemimpin alamiah yang tegas, ambisius, dan fokus mencapai hasil. ENTJ bekerja dengan cara strategis: mereka menyusun visi besar dan terus-menerus terdorong oleh logika dan efisiensi untuk mencapai tujuan tersebut. Kekuatan ENTJ meliputi kepemimpinan yang karismatik, pikiran analitis, dan disiplin tinggi. Sebaliknya, kelemahan mereka dapat berupa kesan terlalu dominan atau tidak peka secara emosional, karena mereka lebih mengutamakan prestasi dan logika daripada hubungan interpersonal.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mbti_tipe`
--
ALTER TABLE `mbti_tipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mbti_tipe`
--
ALTER TABLE `mbti_tipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
