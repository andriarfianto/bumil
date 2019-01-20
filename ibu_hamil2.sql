-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2019 at 01:11 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibu_hamil2`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_user`, `judul_artikel`, `isi_artikel`, `kategori`, `foto`, `tanggal`) VALUES
(1, 1, 'Nutrisi Ibu Hamil di Trimester Tiga', 'Bagaimana kabar Ibu dan janin? Semoga selalu sehat, ya. Pastinya, Ibu tidak sabar bertemu dengan si Kecil ketika memasuki trimester ketiga, Saya pun sangat bersemangat mempersiapkan kelahiran saat itu. Mulai dari menyiapkan perlengkapan bayi hingga mencukupi nutrisi untuk Ibu hamil. Dari sejumlah artikel medis yang saya baca, trimester akhir menjadi waktu yang krusial bagi kesehatan janin. Oleh sebab itu, Ibu perlu mendapatkan nutrisi yang penting bagi Ibu hamil dan janin berikut ini.\r\n\r\n1. Omega 3\r\n\r\nIbu ingin si Kecil tumbuh cedas dan pintar? Biasakan untuk menyantap ikan seperti salmon dan ikan kembung yang mengandung banyak Omega 3. Menurut situs kesehatan National Center for Biotechnology Information dari Amerika Serikat, jenis lemak baik ini berkaitan dengan perkembangan otak dan sistem saraf janin. Bahkan, Ibu hamil yang sering mengonsumsi Omega 3 cenderung memiliki anak yang memiliki kemampuan memecahkan masalah dan berbahasa lebih tinggi ketika berusia 18-24 bulan. Si Kecil nantinya akan lebih pintar menyerap pelajaran dan berkomunikasi dengan orang lain. Kabar baiknya, Omega 3 bahkan sudah bisa menjadi asupan rutin Ibu sejak memasuki trimester pertama. Pada momen tersebut, otak si Kecil akan terus berkembang sampai memasuki trimester tiga.', '1', 'IMG-20180304-WA0004.jpg', '2019-01-02 06:57:49'),
(2, 1, 'Buah yang Bagus Dikonsumsi untuk Kesehatan Hamil Muda', '1. Buah Tinggi Serat\r\n\r\nSalah satu keluhan yang umumnya terjadi pada masa kehamilan adalah gangguan pencernaan. Hal tersebut bisa disebabkan karena kurangnya mengonsumsi makanan yang berserat, Bu. Mengonsumsi banyak serat dapat membantu memperlancar pencernaan. Ibu bisa mengonsumsi buah yang mengandung banyak serat, seperti pisang, jambu biji, kiwi, dan apel.\r\n\r\n2. Buah Tinggi Vitamin C\r\n\r\nMengonsumsi Vitamin C saat masa kehamilan dapat meningkatkan sistem imun Ibu juga si Kecil di dalam kandungan. Kebutuhan Vitamin C untuk ibu hamil adalah sekitar 85 mg/hari atau setara dengan 2 buah jeruk per hari. Beberapa buah yang mengandung banyak Vitamin C adalah jeruk, melon, stroberi, mangga, juga pepaya.\r\n\r\n3. Buah Tinggi Asam Folat\r\n\r\nIbu pastinya sudah tidak asing dengan salah satu bentuk Vitamin B kompleks ini yang mempunyai banyak manfaat untuk kesehatan hamil muda. Asam Folat bermanfaat salah satunya untuk mendukung perkembangan otak si Kecil dalam kandungan, Bu. Selain itu, menurut jurnal yang saya baca, memenuhi kebutuhan kebutuhan Asam Folat  setiap harinya bagi Ibu hamil bisa mengurangi risiko si Kecil lahir cacat sebanyak 70 persen, lho. Ibu perlu mengonsumsi sedikitnya 0,6 mg Asam Folat per hari di bulan pertama kehamilan. Salah satu buah yang tinggi akan Asam Folat yaitu alpukat. Dalam satu gelas jus alpukat mengandung 0,06 mg Asam Folat, Bu. Beberapa buah lainnya yang mengandung Asam Folat adalah pepaya, melon, pisang, juga  jeruk.', '1', 'IMG_20180228_120000_038.jpg', '2019-01-02 06:44:15'),
(3, 1, 'Posisi Tidur Terbaik Ibu Hamil', 'Saat hamil, tubuh mengalami berbagai perubahan, seperti ukuran perut yang semakin membesar, sakit punggung, nyeri asam lambung, kesulitan bernapas, hingga insomnia. Karena itulah kebanyakan ibu hamil selalu merasa nggak bisa tidur dan kehilangan posisi tidur favoritnya. Padahal, posisi tidur yang salah pada ibu hamil bisa mengundang berbagai masalah kesehatan, seperti pembengkakan kaki, nyeri otot, mendengkur, penurunan tekanan darah, atau justru meningkatnya tekanan darah.\r\n\r\nNah, mengingat mencukupi kebutuhan tidur adalah hal penting selama kehamilan, berikut Hipwee Wedding berikan rekomendasi posisi tidur seperti apa yang sebaiknya dipilih selama kehamilan agar bisa tidur dengan nyenyak dan nyaman.', '1', 'IMG_20180302_042202_067.jpg', '2019-01-02 14:50:30'),
(5, 1, 'Minggu Ke-2 Kehamilan', 'Pahami Tubuh Ibu\r\n\r\nTubuh Ibu akan memulai masa baru, yaitu masa kehamilan. Selama rahim Ibu sedang mempersiapkan diri untuk menjadi rumah baru bagi bayi, tidak ada salahnya jika Ibu juga membantu persiapan tersebut. Jika Ibu belum mulai berhenti merokok dan masih mengonsumsi minuman keras, mulailah berhenti dari sekarang. Tentunya Ibu ingin menjaga kondisi tubuh seoptimal mungkin untuk persiapan kehamilan nanti.\r\n\r\nIbu juga sudah bisa memulai mengonsumsi multivitamin yang mengandung setidaknya 400 mcg asam folat sebelum hamil karena sulit menentukan konsepsi/pembuahan, juga untuk mengurangi kemungkinan cacat lahir.\r\n\r\nTahukah Ibu?\r\n\r\nStudi membuktikan, wanita yang memiliki level stres yang tinggi membutuhkan waktu 29% lebih lama untuk bisa hamil. Lakukan berbagai aktivitas yang menenangkan dan menyenangkan, seperti yoga, berenang, membaca buku, atau yang sesuai hobi Ibu untuk mempertinggi kemungkinan hamil.', '1', 'IMG_20180301_051406_046.jpg', '2019-01-02 15:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_makan`
--

CREATE TABLE `bahan_makan` (
  `id_bahan` int(11) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `berat_takaran` int(10) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `energi_bahan` double NOT NULL,
  `karbohidrat_bahan` double NOT NULL,
  `protein_bahan` double NOT NULL,
  `lemak_bahan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_makan`
--

INSERT INTO `bahan_makan` (`id_bahan`, `nama_bahan`, `berat_takaran`, `golongan`, `energi_bahan`, `karbohidrat_bahan`, `protein_bahan`, `lemak_bahan`) VALUES
(1, 'Tempe', 100, '2', 149, 12.7, 18.3, 4),
(2, 'Jagung', 100, '4', 34.5, 54.5, 34, 36.71),
(3, 'Bayam', 100, '4', 36, 12, 18, 4.6),
(4, 'Daun Singkong', 100, '4', 36, 54.5, 18, 36.71);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `pengirim` int(11) NOT NULL COMMENT 'diisi dengan level user',
  `isi_pesan` text NOT NULL,
  `id_ibu` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `pengirim`, `isi_pesan`, `id_ibu`, `tanggal`) VALUES
(1, 2, 'Asssalamualaikum, tanya dok?', 2, '2019-01-14 07:13:58'),
(2, 2, 'Hallo dok', 2, '2019-01-14 07:14:01'),
(3, 1, 'Iya, waalaikumsalam', 2, '2019-01-14 07:14:03'),
(4, 2, 'afwan dok, ijin tanya', 2, '2019-01-14 07:14:06'),
(5, 1, 'Silahan buk', 2, '2019-01-14 07:31:01'),
(6, 3, 'Ha', 3, '2019-01-14 07:14:16'),
(7, 1, 'Ya', 3, '2019-01-14 07:14:18'),
(8, 2, 'Siang', 2, '2019-01-15 00:34:12'),
(9, 2, 'selamat pagi...', 2, '2019-01-15 00:36:48'),
(10, 2, 'selamat pagi...', 2, '2019-01-15 00:37:43'),
(11, 2, 'selamat pagi...', 2, '2019-01-15 00:39:59'),
(12, 2, 'selamat pagi...', 2, '2019-01-15 00:41:57'),
(13, 2, 'selamat pagi...', 2, '2019-01-15 00:42:26'),
(14, 2, 'samskla\r\n', 2, '2019-01-15 00:43:54'),
(15, 1, 'dsfrghty', 2, '2019-01-15 00:48:03'),
(16, 1, 'dsffew', 2, '2019-01-15 00:48:50'),
(17, 1, 'iowfnmweji', 2, '2019-01-15 00:50:38'),
(18, 1, 'pkefmew', 2, '2019-01-15 00:51:34'),
(19, 2, 'yaayyaya', 2, '2019-01-15 00:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `detail_konsultasi`
--

CREATE TABLE `detail_konsultasi` (
  `id_detail_konsultasi` int(11) NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_konsultasi`
--

INSERT INTO `detail_konsultasi` (`id_detail_konsultasi`, `id_konsultasi`, `id_menu`) VALUES
(1, 1, 2),
(2, 1, 5),
(3, 1, 1),
(4, 1, 4),
(5, 1, 3),
(6, 2, 2),
(7, 2, 1),
(8, 2, 5),
(9, 2, 4),
(10, 3, 2),
(11, 3, 1),
(12, 3, 4),
(13, 3, 5),
(14, 3, 3),
(15, 4, 4),
(16, 4, 5),
(17, 4, 3),
(18, 4, 1),
(19, 4, 2),
(20, 5, 4),
(21, 5, 5),
(22, 5, 3),
(23, 5, 1),
(24, 5, 2),
(25, 6, 441),
(26, 6, 204),
(27, 6, 214),
(28, 6, 314),
(29, 6, 472),
(30, 6, 477),
(31, 6, 110),
(32, 6, 185),
(33, 6, 8),
(34, 6, 25),
(35, 6, 337),
(36, 6, 82),
(37, 6, 117),
(38, 6, 210),
(39, 7, 262),
(40, 7, 251),
(41, 7, 144),
(42, 7, 32),
(43, 7, 204),
(44, 7, 381),
(45, 7, 187),
(46, 7, 269),
(47, 7, 526),
(48, 7, 488),
(49, 7, 68),
(50, 7, 37),
(51, 7, 310),
(52, 7, 207),
(53, 8, 265),
(54, 8, 173),
(55, 8, 438),
(56, 8, 209),
(57, 8, 164),
(58, 8, 182),
(59, 8, 442),
(60, 8, 328),
(61, 8, 298),
(62, 8, 241),
(63, 8, 588),
(64, 9, 160),
(65, 9, 586),
(66, 9, 41),
(67, 9, 615),
(68, 9, 74),
(69, 9, 373),
(70, 9, 196),
(71, 9, 445),
(72, 9, 126),
(73, 9, 106),
(74, 9, 400),
(75, 9, 182),
(76, 9, 402),
(77, 9, 565),
(78, 9, 261),
(79, 9, 253),
(80, 10, 491),
(81, 10, 292),
(82, 10, 69),
(83, 10, 510),
(84, 10, 191),
(85, 10, 317),
(86, 10, 235),
(87, 10, 366),
(88, 10, 105),
(89, 10, 334),
(90, 10, 571),
(91, 10, 113),
(92, 11, 181),
(93, 11, 119),
(94, 11, 484),
(95, 11, 474),
(96, 11, 213),
(97, 11, 580),
(98, 11, 175),
(99, 11, 595),
(100, 11, 190),
(101, 11, 167),
(102, 11, 139),
(103, 11, 247),
(104, 11, 296),
(105, 11, 495),
(106, 11, 450),
(107, 11, 257),
(108, 14, 261),
(109, 14, 542),
(110, 14, 562),
(111, 14, 509),
(112, 14, 108),
(113, 14, 316),
(114, 14, 109),
(115, 14, 560),
(116, 14, 17),
(117, 14, 110),
(118, 14, 435),
(119, 14, 283),
(120, 14, 95),
(121, 14, 332),
(122, 14, 514),
(123, 14, 531),
(124, 15, 443),
(125, 15, 292),
(126, 15, 179),
(127, 15, 287),
(128, 15, 544),
(129, 15, 251),
(130, 15, 196),
(131, 15, 119),
(132, 15, 480),
(133, 15, 621),
(134, 15, 252),
(135, 15, 495),
(136, 15, 406),
(137, 15, 376),
(138, 15, 198),
(139, 15, 216);

-- --------------------------------------------------------

--
-- Table structure for table `detail_menu`
--

CREATE TABLE `detail_menu` (
  `id_detail_menu` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_bahan` int(11) NOT NULL,
  `jumlah_bahan` int(10) NOT NULL,
  `satuan_takaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_menu`
--

INSERT INTO `detail_menu` (`id_detail_menu`, `id_menu`, `id_bahan`, `jumlah_bahan`, `satuan_takaran`) VALUES
(1, 1, 1, 1, 'potong'),
(2, 1, 2, 1, 'buah'),
(3, 1, 3, 1, 'ikat'),
(4, 1, 2, 1, 'buah'),
(5, 3, 2, 1, 'buah'),
(6, 3, 2, 1, 'buah'),
(7, 3, 2, 1, 'buah'),
(8, 4, 3, 1, 'ikat'),
(9, 4, 3, 1, 'ikat'),
(10, 5, 1, 1, 'ikat'),
(11, 6, 0, 0, ''),
(12, 6, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tinggi_badan` int(10) NOT NULL,
  `berat_badan` int(10) NOT NULL,
  `usia_ibuhamil` int(10) NOT NULL,
  `usia_kehamilan` int(10) NOT NULL,
  `nilai_trisemester` int(11) NOT NULL,
  `imt` double NOT NULL COMMENT 'Indeks Masa Tubuh',
  `status_gizi` varchar(11) NOT NULL,
  `bbih` double NOT NULL COMMENT 'Berat Badan Ideal Ibu Hamil',
  `tee` double NOT NULL COMMENT 'Total Energi Expenditure',
  `batas_atas` double NOT NULL,
  `energi_karbohidrat` double NOT NULL,
  `energi_protein` double NOT NULL,
  `energi_lemak` double NOT NULL,
  `aktifitas_fisik` varchar(20) NOT NULL,
  `kebutuhan_karbohidrat` double NOT NULL,
  `kebutuhan_protein` double NOT NULL,
  `kebutuhan_lemak` double NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `id_user`, `tinggi_badan`, `berat_badan`, `usia_ibuhamil`, `usia_kehamilan`, `nilai_trisemester`, `imt`, `status_gizi`, `bbih`, `tee`, `batas_atas`, `energi_karbohidrat`, `energi_protein`, `energi_lemak`, `aktifitas_fisik`, `kebutuhan_karbohidrat`, `kebutuhan_protein`, `kebutuhan_lemak`, `tanggal`) VALUES
(1, 2, 160, 73, 28, 19, 300, 28.515625, 'Gemuk', 61.65, 2181.446, 0, 1308.8676, 327.2169, 545.3615, '0.3', 327.2169, 81.804225, 60.595722222222, '2019-01-12 14:40:55'),
(2, 2, 158, 51, 26, 9, 180, 20.429418362442, 'Normal', 56.15, 1733.976, 0, 1040.3856, 260.0964, 433.494, '0.2', 260.0964, 65.0241, 48.166, '2019-01-12 15:07:25'),
(3, 26, 160, 70, 28, 12, 180, 27.34375, 'Gemuk', 59.2, 2133.262, 0, 1279.9572, 319.9893, 533.3155, '0.3', 319.9893, 79.997325, 59.257277777778, '2019-01-16 07:02:07'),
(4, 2, 160, 70, 28, 19, 300, 27.34375, 'Gemuk', 61.65, 2140.262, 0, 1284.1572, 321.0393, 535.0655, '0.3', 321.0393, 80.259825, 59.451722222222, '2019-01-19 01:41:23'),
(5, 2, 158, 69, 25, 12, 180, 27.639801313892, 'Gemuk', 57.2, 2134.549, 0, 1280.7294, 320.18235, 533.63725, '0.3', 320.18235, 80.0455875, 59.293027777778, '2019-01-19 01:44:20'),
(6, 2, 158, 73, 31, 28, 300, 29.242108636436, 'Obesitas', 62.8, 2165.135, 0, 1299.081, 324.77025, 541.28375, '0.3', 324.77025, 81.1925625, 60.142638888889, '2019-01-19 07:14:33'),
(7, 2, 172, 70, 28, 12, 180, 23.661438615468, 'Normal', 66.2, 1998.6, 2198.46, 1199.16, 299.79, 499.65, '0.2', 299.79, 74.9475, 55.516666666667, '2019-01-19 08:48:03'),
(8, 2, 173, 68, 28, 10, 180, 22.720438370811, 'Normal', 66.5, 2137.268, 2350.9948, 1282.3608, 320.5902, 534.317, '0.3', 320.5902, 80.14755, 59.368555555556, '2019-01-19 09:07:33'),
(9, 2, 169, 77, 27, 24, 300, 26.959840341725, 'Gemuk', 67.4, 2271.245, 2498.3695, 1362.747, 340.68675, 567.81125, '0.3', 340.68675, 85.1716875, 63.090138888889, '2019-01-19 10:13:33'),
(10, 2, 156, 60, 26, 30, 300, 24.65483234714, 'Normal', 61.5, 2017.128, 2218.8408, 1210.2768, 302.5692, 504.282, '0.3', 302.5692, 75.6423, 56.031333333333, '2019-01-19 10:33:50'),
(11, 2, 177, 78, 33, 29, 300, 24.897060231734, 'Normal', 77.15, 2270.239, 2497.2629, 1362.1434, 340.53585, 567.55975, '0.3', 340.53585, 85.1339625, 63.062194444444, '2019-01-19 10:53:52'),
(12, 2, 172, 51, 28, 24, 300, 17.239048134127, 'Kurus', 70.4, 1915.318, 2106.8498, 1149.1908, 287.2977, 478.8295, '0.3', 287.2977, 71.824425, 53.203277777778, '2019-01-19 14:03:16'),
(13, 2, 169, 70, 25, 19, 300, 24.508945765204, 'Normal', 65.65, 2183.591, 2401.9501, 1310.1546, 327.53865, 545.89775, '0.3', 327.53865, 81.8846625, 60.655305555556, '2019-01-19 14:11:33'),
(14, 2, 172, 70, 27, 19, 300, 23.661438615468, 'Normal', 68.65, 2177.871, 2395.6581, 1306.7226, 326.68065, 544.46775, '0.3', 326.68065, 81.6701625, 60.496416666667, '2019-01-19 14:13:37'),
(15, 2, 172, 88, 30, 34, 300, 29.74580854516, 'Obesitas', 73.9, 2603.336, 2863.6696, 1562.0016, 390.5004, 650.834, '0.4', 390.5004, 97.6251, 72.314888888889, '2019-01-19 14:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `menu_makan`
--

CREATE TABLE `menu_makan` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `kategori_menu` varchar(50) NOT NULL,
  `energi_menu` double NOT NULL,
  `karbohidrat_menu` double NOT NULL,
  `protein_menu` double NOT NULL,
  `lemak_menu` double NOT NULL,
  `cara_membuat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_makan`
--

INSERT INTO `menu_makan` (`id_menu`, `nama_menu`, `kategori_menu`, `energi_menu`, `karbohidrat_menu`, `protein_menu`, `lemak_menu`, `cara_membuat`) VALUES
(1, 'Ketoprak', '2', 171, 13.89, 7.9, 7.7, 'Tempatkan bihun dalam wadah lalu seduh dengan air panas. Biarkan hingga lembek, kemudian buang airnya dan tiriskan.\r\nSeduh juga taoge yang sudah disiapkan dan dibersihkan, dengan air panas. Buang airnya dan tiriskan.\r\nGoreng tahu yang sudah dipotong-potong dalam minyak panas. Setelah warnanya kecoklatan, angkat dan tiriskan. Anda pun bisa menggorengnya terlebih dahulu baru kemudian memotong-motongnya.\r\nBumbu yang telah dihaluskan dididihkan dan cicipi rasanya sesuai dengan selera. Aduk-aduk sampai saus kacang mengental. Sebaiknya, Anda menghaluskannya dengan cara diblender untuk hasil bumbu kacang yang benar-benar halus dan kental.\r\nSelanjutnya, Anda siapkan piring saji.\r\nTaruh potongan lontong atau ketupat terlebih dahulu, kemudian taruh bihun, tahu, dan taoge di bagian atasnya.\r\nSiram dengan saus kacang dan beri sedikit kecap.\r\nTaburkan bawang goreng dan irisan seledri.'),
(2, 'Gudeg', '2', 110, 3.9, 9.71, 12.1, 'Haluskan bawang merah, bawang putih, kemiri, ketumbar, gula merah, dan garam dengan sedikit air.\nMasukkan nangka muda, ayam , sereh, lengkuas, daun salam, bumbu halus, gula merah, garam , air dan santan . ...\nSetelah 30 menit, masukkan telur rebus dan santan. ...\nSajikan gudeg nangka bersama kuah santan areh.'),
(3, 'Gudeg Yu Djem', '2', 98, 13.89, 9.71, 12.1, 'lllvhufifuyu'),
(4, 'Sayur Bening', '1', 102, 13.89, 9.71, 12.1, 'oskas skajos askjos njsoajo asnojsoa onsao oasnoa siamqisy sao'),
(5, 'Sayur Bayam', '1', 192, 12, 127, 13, 'dsfdsds'),
(6, 'Sayur Asem', '1', 29, 5, 0.7, 6, 'Sajikan'),
(7, 'Sayur Sop', '1', 27, 1, 1.3, 2, 'Sajikan'),
(8, 'Roti Putih', '7', 248, 50, 8, 1.2, 'Sajikan'),
(9, 'Nasi Tim', '7', 90, 1.97, 1.7, 0.02, 'Sajikan'),
(10, 'Susu kedele', '1', 41, 3.5, 2.5, 5, 'Sajikan'),
(11, 'Tahu', '1', 68, 7.8, 4.6, 1.6, 'Sajikan'),
(12, 'Tempe gembus', '1', 73, 5.7, 1.3, 10.3, 'Sajikan'),
(13, 'Ayam', '1', 302, 18.2, 25, 0, 'Sajikan'),
(14, 'Bebek ( itik )', '1', 326, 16, 28.6, 0, 'Sajikan'),
(15, 'Daging domba', '1', 206, 17.1, 14.8, 0, 'Sajikan'),
(16, 'Daging kambing', '1', 154, 16.6, 9.2, 0, 'Sajikan'),
(17, 'Daging asap', '1', 191, 32, 6, 0, 'Sajikan'),
(18, 'Daging kornet  ( corned beef )', '1', 241, 16, 25, 0, 'Sajikan'),
(19, 'Dendeng daging sapi', '1', 433, 55, 9, 0, 'Sajikan'),
(20, 'Sosis daging ( wosrt )', '1', 452, 14.5, 42.3, 2.3, 'Sajikan'),
(21, 'Telur ayam', '1', 162, 12.8, 11.5, 0.7, 'Sajikan'),
(22, 'Telur bebek (DKBM P3G \'90)', '1', 202, 12.5, 16.4, 0, 'Sajikan'),
(23, 'Telur bebek diasin', '1', 195, 13.6, 13.6, 1.4, 'Sajikan'),
(24, 'Bandeng', '1', 129, 20, 4.8, 0, 'Sajikan'),
(25, 'Bawal', '1', 96, 19, 1.7, 0, 'Sajikan'),
(26, 'Belut air tawar', '1', 82, 6.7, 1, 10.9, 'Sajikan'),
(27, 'Cumi-cumi', '1', 75, 16.1, 0.7, 0.1, 'Sajikan'),
(28, 'Ikan mas', '1', 86, 16, 2, 0, 'Sajikan'),
(29, 'Ikan mujair segar', '1', 89, 18.7, 1, 0, 'Sajikan'),
(30, 'Kacangan', '1', 77, 15.6, 0.9, 1.6, 'Sajikan'),
(31, 'Kakap', '1', 92, 20, 0.7, 0, 'Sajikan'),
(32, 'Kembung', '1', 103, 22, 1, 0, 'Sajikan'),
(33, 'Kepiting', '1', 151, 13.8, 3.8, 14.1, 'Sajikan'),
(34, 'Kerang', '1', 101, 14.4, 2.6, 3.9, 'Sajikan'),
(35, 'Mujahir', '1', 89, 18.7, 1, 0, 'Sajikan'),
(36, 'Paling, belut', '1', 303, 14, 27, 0, 'Sajikan'),
(37, 'Sidat', '1', 81, 11.4, 1.9, 3.8, 'Sajikan'),
(38, 'Teri segar', '1', 77, 16, 1, 0, 'Sajikan'),
(39, 'Udang segar', '1', 91, 21, 0.2, 0.1, 'Sajikan'),
(40, 'Cakalang asin', '1', 198, 36.5, 2.2, 5.5, 'Sajikan'),
(41, 'Calo . peda', '1', 81, 11.4, 1.9, 3.8, 'Sajikan'),
(42, 'Dendeng ikan mujair', '1', 582, 68.3, 15.2, 37.2, 'Sajikan'),
(43, 'Ikan asin kering', '1', 193, 42, 1.5, 0, 'Sajikan'),
(44, 'Kerupuk ikan, dengan pati', '1', 342, 16, 0.4, 65.6, 'Sajikan'),
(45, 'Kerupuk udang, dengan pati', '1', 359, 17.2, 0.6, 68.2, 'Sajikan'),
(46, 'Petis ikan', '1', 161, 20, 0.2, 24, 'Sajikan'),
(47, 'Petis udang', '1', 220, 15, 0.1, 40, 'Sajikan'),
(48, 'Sardencis dalam kaleng', '1', 338, 21.1, 27, 1, 'Sajikan'),
(49, 'Sepat kering', '1', 289, 38, 14, 0, 'Sajikan'),
(50, 'Telur ikan', '1', 398, 16.7, 34.8, 4.5, 'Sajikan'),
(51, 'Teri bubuk', '1', 277, 60, 2.3, 1.8, 'Sajikan'),
(52, 'Teri kering', '1', 170, 33.4, 3, 0, 'Sajikan'),
(53, 'Teri nasi kering', '1', 144, 32.5, 0.6, 0, 'Sajikan'),
(54, 'Teri tepung', '1', 347, 48.8, 6.4, 19.6, 'Sajikan'),
(55, 'Udang kering', '1', 259, 62.4, 2.3, 1.8, 'Sajikan'),
(56, 'Bayam', '1', 36, 3.5, 0.5, 6.5, 'Sajikan'),
(57, 'Bayam merah', '1', 51, 4.6, 0.5, 10, 'Sajikan'),
(58, 'Bunga pepaya jantan', '1', 45, 2.6, 0.3, 8.1, 'Sajikan'),
(59, 'Daun bawang', '1', 29, 1.8, 0.7, 5.2, 'Sajikan'),
(60, 'Daun beluntas', '1', 42, 1.8, 0.5, 9.4, 'Sajikan'),
(61, 'Daun gandaria', '1', 60, 3.1, 0.3, 14, 'Sajikan'),
(62, 'Daun jambu mete muda', '1', 73, 4.6, 0.5, 16.2, 'Sajikan'),
(63, 'Daun kacang panjang', '1', 34, 4.1, 0.4, 5.8, 'Sajikan'),
(64, 'Daun katuk', '1', 59, 4.8, 1, 11, 'Sajikan'),
(65, 'Daun kecipir', '1', 47, 5, 0.5, 8.5, 'Sajikan'),
(66, 'Daun kelor', '1', 82, 6.7, 1.7, 14.3, 'Sajikan'),
(67, 'Daun kemangi', '1', 43, 5.5, 0.3, 7.5, 'Sajikan'),
(68, 'Daun ketela rambat (ubi jalar)', '1', 47, 2.8, 0.4, 10.4, 'Sajikan'),
(69, 'Daun koro', '1', 23, 3, 0.3, 3.7, 'Sajikan'),
(70, 'Daun labu siam', '1', 60, 4, 0.4, 4.7, 'Sajikan'),
(71, 'Daun labu waluh', '1', 30, 3.6, 0.6, 4.5, 'Sajikan'),
(72, 'Daun leunca', '1', 45, 4.7, 0.5, 8.1, 'Sajikan'),
(73, 'Daun lobak', '1', 30, 2.3, 0.4, 5.8, 'Sajikan'),
(74, 'Daun lompong tales', '1', 40, 3, 0.8, 7.4, 'Sajikan'),
(75, 'Daun melinjo', '1', 99, 5, 1.3, 21.3, 'Sajikan'),
(76, 'Daun oyong', '1', 22, 1, 0.1, 5.3, 'Sajikan'),
(77, 'Daun pakis', '1', 35, 4, 0.3, 6.4, 'Sajikan'),
(78, 'Daun pepaya', '1', 79, 8, 2, 11.9, 'Sajikan'),
(79, 'Daun pete cina', '1', 128, 12, 6.5, 12.4, 'Sajikan'),
(80, 'Daun singkong', '1', 73, 6.8, 1.2, 13, 'Sajikan'),
(81, 'Daun tales', '1', 71, 4.1, 2.1, 12.3, 'Sajikan'),
(82, 'Daun tespong', '1', 59, 2.9, 0.3, 13.9, 'Sajikan'),
(83, 'Eceng', '1', 18, 1, 0.2, 3.8, 'Sajikan'),
(84, 'Genjer', '1', 33, 1.7, 0.2, 7.7, 'Sajikan'),
(85, 'Kangkung', '1', 29, 3, 0.3, 5.4, 'Sajikan'),
(86, 'Kemangi', '1', 46, 4, 0.5, 8.9, 'Sajikan'),
(87, 'Krokot', '1', 21, 1.7, 0.4, 3.8, 'Sajikan'),
(88, 'Kucai', '1', 45, 2.2, 0.3, 10.3, 'Sajikan'),
(89, 'Kucai muda (lokio)', '1', 42, 3.8, 0.6, 7.8, 'Sajikan'),
(90, 'Seledri', '1', 20, 1, 0.1, 4.6, 'Sajikan'),
(91, 'Buncis', '1', 35, 2.4, 0.2, 7.7, 'Sajikan'),
(92, 'Buncis (DKBM P3G \'90)', '1', 34, 2.4, 0.3, 7.2, 'Sajikan'),
(93, 'Cabe gembor merah', '1', 38, 1.6, 0.8, 6.3, 'Sajikan'),
(94, 'Cabe hijau besar', '1', 23, 0.7, 0.3, 5.2, 'Sajikan'),
(95, 'Cabe merah besar ( kering )', '1', 311, 15.9, 6.2, 61.8, 'Sajikan'),
(96, 'Cabe merah besar ( segar  )', '1', 31, 1, 0.3, 7.3, 'Sajikan'),
(97, 'Cabe rawit ( segar )', '1', 103, 4.7, 2.4, 19.9, 'Sajikan'),
(98, 'Gambas oyong', '1', 18, 0.8, 0.2, 4.1, 'Sajikan'),
(99, 'Jagung muda, termasuk tongkol', '1', 33, 2.2, 0.1, 7.4, 'Sajikan'),
(100, 'Jamur kuping kering', '1', 128, 16, 0.9, 64.6, 'Sajikan'),
(101, 'Jamur kuping segar', '1', 15, 3.8, 0.6, 0.9, 'Sajikan'),
(102, 'Jantung pisang segar', '1', 31, 1.2, 0.3, 7.1, 'Sajikan'),
(103, 'Kacang buncis ( buah )', '1', 35, 2.4, 0.2, 7.7, 'Sajikan'),
(104, 'Kacang kapri ( biji segar )', '1', 98, 6.7, 0.4, 17.7, 'Sajikan'),
(105, 'Kacang panjang', '1', 44, 2.7, 0.3, 7.8, 'Sajikan'),
(106, 'Kapri muda', '1', 42, 3.3, 0.2, 9, 'Sajikan'),
(107, 'Kecipir ( buah muda )', '1', 35, 2.9, 0.2, 5.8, 'Sajikan'),
(108, 'Keluwih, kelawi', '1', 111, 1.5, 0.3, 27.2, 'Sajikan'),
(109, 'Kembang turi', '1', 44, 1.8, 0.6, 9.6, 'Sajikan'),
(110, 'Ketimun', '1', 12, 0.7, 0.1, 2.7, 'Sajikan'),
(111, 'Kool kembang', '1', 25, 2.4, 0.2, 4.9, 'Sajikan'),
(112, 'Kool merah, kool putih', '1', 24, 1.4, 0.2, 5.3, 'Sajikan'),
(113, 'Koro kerupuk ( buah )', '1', 125, 8.3, 0.7, 22.1, 'Sajikan'),
(114, 'Koro wedus ( buah muda )', '1', 38, 3, 0.3, 7.9, 'Sajikan'),
(115, 'Kulit melinjo', '1', 111, 4.5, 1.1, 20.7, 'Sajikan'),
(116, 'Labu air', '1', 17, 0.6, 0.2, 3.8, 'Sajikan'),
(117, 'Labu siam', '1', 26, 0.6, 0.1, 6.7, 'Sajikan'),
(118, 'Labu waluh', '1', 29, 1.1, 0.3, 6.6, 'Sajikan'),
(119, 'Leunca buah (daun leunca)', '1', 33, 1.9, 0.1, 7.4, 'Sajikan'),
(120, 'Lobak', '1', 19, 0.9, 0.1, 4.2, 'Sajikan'),
(121, 'Melinjo', '1', 66, 5, 0.7, 13.3, 'Sajikan'),
(122, 'Nangka muda', '1', 51, 2, 0.4, 11.3, 'Sajikan'),
(123, 'Pare (paria)', '1', 29, 1.1, 0.3, 6.6, 'Sajikan'),
(124, 'Pepaya muda', '1', 26, 2.1, 0.1, 4.9, 'Sajikan'),
(125, 'Rebung', '1', 27, 2.6, 0.3, 5.2, 'Sajikan'),
(126, 'Sawi', '1', 22, 2.3, 0.3, 4, 'Sajikan'),
(127, 'Selada', '1', 15, 1.2, 0.2, 2.9, 'Sajikan'),
(128, 'Selada air', '1', 17, 1.7, 0.3, 3, 'Sajikan'),
(129, 'Taoge kacang ijo', '1', 23, 2.9, 0.2, 4.1, 'Sajikan'),
(130, 'Taoge kacang kedele', '1', 67, 9, 2.6, 6.4, 'Sajikan'),
(131, 'Taoge kacang tunggak', '1', 35, 5, 0.2, 5.8, 'Sajikan'),
(132, 'Tebu terubuk', '1', 25, 4.6, 0.4, 3, 'Sajikan'),
(133, 'Tekokak', '1', 34, 2, 0.1, 7.9, 'Sajikan'),
(134, 'Tekokak kering', '1', 294, 8.3, 1.7, 72.6, 'Sajikan'),
(135, 'Terong', '1', 24, 1.1, 0.2, 5.5, 'Sajikan'),
(136, 'Terong belanda', '1', 48, 1.5, 0.3, 11.3, 'Sajikan'),
(137, 'Tomat ( sari air tomat )', '1', 15, 1, 0.2, 3.5, 'Sajikan'),
(138, 'Tomat masak', '1', 20, 1, 0.3, 4.2, 'Sajikan'),
(139, 'Tomat muda', '1', 23, 2, 0.7, 2.3, 'Sajikan'),
(140, 'Wortel', '1', 42, 1.2, 0.3, 9.3, 'Sajikan'),
(141, 'Alpokat', '1', 85, 0.9, 6.5, 7.7, 'Sajikan'),
(142, 'Anggur', '1', 50, 0.5, 0.2, 12.8, 'Sajikan'),
(143, 'Apel', '1', 58, 0.3, 0.4, 14.9, 'Sajikan'),
(144, 'Arbei', '1', 37, 0.8, 0.5, 8.3, 'Sajikan'),
(145, 'Belimbing', '1', 36, 0.4, 0.4, 8.8, 'Sajikan'),
(146, 'Bengkuang', '1', 55, 1.4, 0.2, 12.8, 'Sajikan'),
(147, 'Buah atung', '1', 23, 0.8, 0.2, 5.2, 'Sajikan'),
(148, 'Buah mentega ( bisbul )', '1', 39, 0.7, 0.2, 9.7, 'Sajikan'),
(149, 'Buah nona', '1', 101, 1.7, 0.6, 25.2, 'Sajikan'),
(150, 'Cempedak', '1', 116, 3, 0.4, 28.6, 'Sajikan'),
(151, 'Duku', '1', 63, 1, 0.2, 16.1, 'Sajikan'),
(152, 'Durian', '1', 134, 2.5, 3, 28, 'Sajikan'),
(153, 'Embacang', '1', 98, 1.4, 0.2, 25.4, 'Sajikan'),
(154, 'Erbis', '1', 70, 0.6, 0, 18.9, 'Sajikan'),
(155, 'Gandaria', '1', 68, 0.7, 0.1, 18, 'Sajikan'),
(156, 'Jambu air', '1', 46, 0.6, 0.2, 11.8, 'Sajikan'),
(157, 'Jambu biji', '1', 49, 0.9, 0.3, 12.2, 'Sajikan'),
(158, 'Jambu bol', '1', 56, 0.6, 0.3, 14.2, 'Sajikan'),
(159, 'Jambu monyet ( buah )', '1', 64, 0.7, 0.6, 15.8, 'Sajikan'),
(160, 'Jeruk bali', '1', 48, 0.6, 0.2, 12.4, 'Sajikan'),
(161, 'Jeruk garut (jeruk keprok)', '1', 44, 0.8, 0.3, 10.9, 'Sajikan'),
(162, 'Jeruk manis', '1', 45, 0.9, 0.2, 11.2, 'Sajikan'),
(163, 'Jeruk manis (air sari jeruk)', '1', 44, 0.8, 0.2, 11, 'Sajikan'),
(164, 'Jeruk nipis', '1', 37, 0.8, 0.1, 12.3, 'Sajikan'),
(165, 'Kedondong masak', '1', 41, 1, 0.1, 10.3, 'Sajikan'),
(166, 'Kemang', '1', 48, 1, 0.2, 11.9, 'Sajikan'),
(167, 'Kesemek', '1', 78, 0.8, 0.4, 20, 'Sajikan'),
(168, 'Kokosan', '1', 86, 1.6, 0.2, 13, 'Sajikan'),
(169, 'Langsat', '1', 56, 0.9, 0.2, 14.3, 'Sajikan'),
(170, 'Mangga gedong', '1', 44, 0.7, 0.2, 11.2, 'Sajikan'),
(171, 'Mangga golek', '1', 63, 0.5, 0.2, 16.7, 'Sajikan'),
(172, 'Mangga harumanis', '1', 46, 0.4, 0.2, 11.9, 'Sajikan'),
(173, 'Mangga indramayu', '1', 72, 0.8, 0.2, 18.7, 'Sajikan'),
(174, 'Mangga kopek', '1', 56, 0.4, 0.2, 14.6, 'Sajikan'),
(175, 'Mangga muda', '1', 59, 0.5, 0.4, 15.1, 'Sajikan'),
(176, 'Manggis', '1', 63, 0.6, 0.6, 15.6, 'Sajikan'),
(177, 'Menteng', '1', 65, 1.7, 0.2, 16.1, 'Sajikan'),
(178, 'Nanas', '1', 52, 0.4, 0.2, 13.7, 'Sajikan'),
(179, 'Nangka masak dipohon', '1', 106, 1.2, 0.3, 27.6, 'Sajikan'),
(180, 'Pala ( dagingnya )', '1', 42, 0.3, 0.2, 10.9, 'Sajikan'),
(181, 'Pepaya', '1', 46, 0.5, 0, 12.2, 'Sajikan'),
(182, 'Pisang ambon', '1', 99, 1.2, 0.2, 25.8, 'Sajikan'),
(183, 'Pisang angleng (pis. ampyang)', '1', 68, 1.3, 0.2, 17.2, 'Sajikan'),
(184, 'Pisang lampung', '1', 99, 1.3, 0.2, 25.6, 'Sajikan'),
(185, 'Pisang mas', '1', 127, 1.4, 0.2, 33.6, 'Sajikan'),
(186, 'Pisang raja', '1', 120, 1.2, 0.2, 31.8, 'Sajikan'),
(187, 'Pisang raja sereh (pis. susu)', '1', 118, 1.2, 0.2, 31.1, 'Sajikan'),
(188, 'Pisang raja uli', '1', 146, 2, 0.2, 38.2, 'Sajikan'),
(189, 'Rambutan', '1', 69, 0.9, 0.1, 18.1, 'Sajikan'),
(190, 'Salak', '1', 77, 0.4, 0, 20.9, 'Sajikan'),
(191, 'Salak bali', '1', 57, 0.5, 0.1, 13.6, 'Sajikan'),
(192, 'Salak pondoh', '1', 368, 0.8, 0.4, 90.3, 'Sajikan'),
(193, 'Sawo', '1', 92, 0.5, 1.1, 22.4, 'Sajikan'),
(194, 'Sawo duren', '1', 64, 1, 3.1, 8, 'Sajikan'),
(195, 'Sawo kecik', '1', 111, 0.9, 2.3, 21.6, 'Sajikan'),
(196, 'Semangka', '1', 28, 0.5, 0.2, 6.9, 'Sajikan'),
(197, 'Sirsak', '1', 65, 1, 0.3, 16.3, 'Sajikan'),
(198, 'Srikaya', '1', 101, 1.7, 0.6, 25.2, 'Sajikan'),
(199, 'Srikaya (DKBM P3G \'90)', '1', 63, 1.1, 0.5, 13.9, 'Sajikan'),
(200, 'Sukun muda', '1', 119, 1.4, 0.2, 28.1, 'Sajikan'),
(201, 'Sukun muda (DKBM P3G \'90)', '1', 119, 1.4, 0.2, 28.1, 'Sajikan'),
(202, 'Sukun tua', '1', 126, 1.6, 0.2, 24.5, 'Sajikan'),
(203, 'Sukun tua (DKBM P3G \'90)', '1', 129, 1.6, 0.2, 24.5, 'Sajikan'),
(204, 'Tempoyak', '1', 142, 2.7, 4.6, 22.7, 'Sajikan'),
(205, 'Wuni', '1', 74, 0.8, 0.3, 17.1, 'Sajikan'),
(206, 'Es krim', '1', 207, 4, 12.5, 20.6, 'Sajikan'),
(207, 'Keju', '1', 326, 22.8, 20.3, 13.1, 'Sajikan'),
(208, 'Kepala susu (krim)', '1', 204, 2.6, 20, 4, 'Sajikan'),
(209, 'Mentega', '1', 725, 0.5, 81.6, 1.4, 'Sajikan'),
(210, 'Susu kambing', '1', 64, 4.3, 2.3, 6.6, 'Sajikan'),
(211, 'Susu kental manis', '1', 336, 8.2, 10, 55, 'Sajikan'),
(212, 'Susu kental tak manis', '1', 138, 7, 7.9, 9.9, 'Sajikan'),
(213, 'Susu kerbau', '1', 160, 6.3, 12, 7.1, 'Sajikan'),
(214, 'Susu sapi', '1', 61, 3.2, 3.5, 4.3, 'Sajikan'),
(215, 'Susu skim (susu tak berlemak)', '1', 36, 3.5, 0.1, 5.1, 'Sajikan'),
(216, 'Tepung susu', '1', 509, 24.6, 30, 36.2, 'Sajikan'),
(217, 'Tepung susu asam untuk bayi', '1', 418, 19, 9, 65.5, 'Sajikan'),
(218, 'Tepung susu skim', '1', 362, 35.6, 1, 52, 'Sajikan'),
(219, 'Yoghurt', '1', 52, 3.3, 2.5, 4, 'Sajikan'),
(220, 'Lemak babi', '1', 902, 0, 0, 0, 'Sajikan'),
(221, 'Lemak kerbau (lemak sapi)', '1', 818, 1.5, 90, 0, 'Sajikan'),
(222, 'Margarin', '1', 720, 0.6, 81, 0.4, 'Sajikan'),
(223, 'Minyak hati hiu (eulamia)', '1', 902, 0, 0, 0, 'Sajikan'),
(224, 'Minyak ikan', '1', 902, 0, 0, 0, 'Sajikan'),
(225, 'Minyak kacang tanah', '1', 902, 0, 0, 0, 'Sajikan'),
(226, 'Minyak kelapa', '1', 870, 1, 98, 0, 'Sajikan'),
(227, 'Minyak kelapa sawit', '1', 902, 0, 0, 0, 'Sajikan'),
(228, 'Minyak wijen', '1', 902, 0, 0, 0, 'Sajikan'),
(229, 'Bier (4% alkohol)', '1', 48, 0.6, 0, 4.4, 'Sajikan'),
(230, 'Coklat manis ( batang )', '1', 472, 2, 29.8, 62.7, 'Sajikan'),
(231, 'Coklat pahit ( batang )', '1', 504, 5.5, 52.9, 29.2, 'Sajikan'),
(232, 'Coklat susu  ( batang )', '1', 381, 9, 35, 53.6, 'Sajikan'),
(233, 'Dodol', '1', 395, 3, 5.7, 81.2, 'Sajikan'),
(234, 'Gelatin', '1', 389, 91, 0, 0, 'Sajikan'),
(235, 'Gula aren', '1', 368, 0, 0, 95, 'Sajikan'),
(236, 'Gula kelapa', '1', 386, 3, 10, 76, 'Sajikan'),
(237, 'Gula merah tebu, belum murni', '1', 356, 0.4, 0.5, 90.6, 'Sajikan'),
(238, 'Gula pasir', '1', 364, 0, 0, 94, 'Sajikan'),
(239, 'Jam sele', '1', 239, 0.5, 0.6, 64.5, 'Sajikan'),
(240, 'Kopi, bagian yang dapat larut', '1', 352, 17.4, 1.3, 69, 'Sajikan'),
(241, 'Lemon squash', '1', 36, 0, 0, 10, 'Sajikan'),
(242, 'Limun', '1', 30, 0, 0, 8, 'Sajikan'),
(243, 'Madu', '1', 294, 0.3, 0, 79.5, 'Sajikan'),
(244, 'Melasse', '1', 276, 0, 0.1, 71, 'Sajikan'),
(245, 'Serbuk coklat', '1', 298, 8, 23.8, 48.9, 'Sajikan'),
(246, 'Setrup, sirup', '1', 213, 0, 0, 55, 'Sajikan'),
(247, 'Teh', '1', 132, 19.5, 0.7, 67.8, 'Sajikan'),
(248, 'Aci aren', '1', 355, 0.6, 1.1, 85.6, 'Sajikan'),
(249, 'Agar laut (DKBM P3G \'90)', '1', 21, 0.1, 0.1, 4.8, 'Sajikan'),
(250, 'Agar-agar', '1', 0, 0, 0.2, 0, 'Sajikan'),
(251, 'Alur', '1', 24, 1.8, 0.3, 4.8, 'Sajikan'),
(252, 'Bonggol pisang', '1', 43, 0.6, 0, 11.6, 'Sajikan'),
(253, 'Bonggol pisang kering', '1', 245, 3.4, 0, 66.2, 'Sajikan'),
(254, 'Bulung', '1', 333, 8.2, 0.1, 64.7, 'Sajikan'),
(255, 'Bulung jajar (agar jajal)', '1', 212, 16.9, 0.2, 47.6, 'Sajikan'),
(256, 'Bulung sangu', '1', 237, 14.7, 0.2, 56, 'Sajikan'),
(257, 'Cengkeh kering', '1', 292, 5.2, 8.9, 57.4, 'Sajikan'),
(258, 'Cuka', '1', 12, 0.1, 0.1, 5, 'Sajikan'),
(259, 'Daun cincau', '1', 122, 6, 1, 26, 'Sajikan'),
(260, 'Donge-donge', '1', 16, 0.5, 0.2, 3.6, 'Sajikan'),
(261, 'Jahe', '1', 51, 1.5, 1, 10.1, 'Sajikan'),
(262, 'Kecap', '1', 46, 5.7, 1.3, 9, 'Sajikan'),
(263, 'Kelangis', '1', 230, 5.7, 20.6, 5.5, 'Sajikan'),
(264, 'Kunyit', '1', 63, 2, 2.7, 9.1, 'Sajikan'),
(265, 'Lawi-lawi', '1', 18, 0.5, 0.9, 2.6, 'Sajikan'),
(266, 'Lidah buaya', '1', 4, 0.1, 0.2, 0.4, 'Sajikan'),
(267, 'Merica', '1', 359, 11.5, 6.8, 64.4, 'Sajikan'),
(268, 'Ragi', '1', 136, 43, 2.4, 3, 'Sajikan'),
(269, 'Saos tomat', '1', 98, 2, 0.4, 24.5, 'Sajikan'),
(270, 'Bacang', '1', 72, 2.3, 1.9, 11.4, 'Sajikan'),
(271, 'Bihun goreng', '1', 308, 5.9, 8.9, 51, 'Sajikan'),
(272, 'Bubur', '1', 6, 0.1, 0, 1.3, 'Sajikan'),
(273, 'Bubur beras (Menu Pgln)', '1', 70, 1.8, 0, 0, 'Sajikan'),
(274, 'Bubur kentang (Menu Pgln)', '1', 76, 1.3, 0, 0, 'Sajikan'),
(275, 'Bubur tepung (Menu Pgln)', '1', 363, 0.5, 0, 0, 'Sajikan'),
(276, 'Bubur wortel (Menu Pgln)', '1', 73, 1.4, 0, 0, 'Sajikan'),
(277, 'Buntil', '1', 106, 4.4, 6.3, 7.9, 'Sajikan'),
(278, 'Buras', '1', 88, 2.3, 1.3, 16.7, 'Sajikan'),
(279, 'Cassava stick', '1', 460, 0.8, 18.7, 17.2, 'Sajikan'),
(280, 'Cemplon', '1', 94, 0.5, 5.28, 12.61, 'Sajikan'),
(281, 'Ceriping getuk singkong', '1', 462, 1.2, 20.7, 67.7, 'Sajikan'),
(282, 'Chilmil', '1', 472, 18, 20, 55, 'Sajikan'),
(283, 'Combro', '1', 105, 0.8, 3.3, 17.9, 'Sajikan'),
(284, 'Deblo', '1', 52, 0.4, 3, 10.6, 'Sajikan'),
(285, 'Dodongkal', '1', 7, 1.3, 0.9, 15.8, 'Sajikan'),
(286, 'Gadung kukus', '1', 88, 0.6, 0.3, 20.9, 'Sajikan'),
(287, 'Ganyong rebus', '1', 100, 0.8, 0.2, 23.8, 'Sajikan'),
(288, 'Gemblong', '1', 115, 1.7, 2.6, 21.1, 'Sajikan'),
(289, 'Gemblong (DKBM P3G \'90)', '1', 274, 1.7, 5.4, 55.5, 'Sajikan'),
(290, 'Gendar goreng', '1', 407, 6.4, 28.2, 32, 'Sajikan'),
(291, 'Geplak', '1', 350, 1.4, 14.4, 53.6, 'Sajikan'),
(292, 'Getuk goreng sukaraja', '1', 360, 1.3, 6.4, 74.3, 'Sajikan'),
(293, 'Getuk lindri', '1', 60, 0.6, 1.4, 11.2, 'Sajikan'),
(294, 'Getuk singkong', '1', 204, 0.5, 1.4, 47.4, 'Sajikan'),
(295, 'Gudangan (urapan)', '1', 84, 2.76, 3.42, 12.06, 'Sajikan'),
(296, 'Hunkwe (Menu Pgln)', '1', 226, 2, 0, 0, 'Sajikan'),
(297, 'Intip goreng', '1', 474, 7.6, 21.6, 62.3, 'Sajikan'),
(298, 'Intip goreng/kerak nasi', '1', 474, 7.6, 21.6, 62.3, 'Sajikan'),
(299, 'Jagung gronto metro', '1', 135, 2.2, 1.1, 28.9, 'Sajikan'),
(300, 'Jagung grontol harapan', '1', 156, 2.7, 1.3, 33.3, 'Sajikan'),
(301, 'Jagung kering dengan kulit', '1', 355, 9.2, 3.9, 73.7, 'Sajikan'),
(302, 'Jagung rebus', '1', 105, 2.6, 1.1, 21.1, 'Sajikan'),
(303, 'Japilus', '1', 500, 1.2, 25.1, 67.3, 'Sajikan'),
(304, 'Jenang', '1', 220, 2.6, 5.7, 39.5, 'Sajikan'),
(305, 'Karoket', '1', 73, 1.2, 2.8, 0.7, 'Sajikan'),
(306, 'Kecimpring singkong', '1', 464, 1.2, 18.6, 73, 'Sajikan'),
(307, 'Kecimpring sinkong goreng', '1', 262, 1.2, 18.6, 73, 'Sajikan'),
(308, 'Kelepon', '1', 107, 0.6, 2.7, 20.1, 'Sajikan'),
(309, 'Kemplang goreng', '1', 504, 5.6, 28.1, 57.1, 'Sajikan'),
(310, 'Kemplang panggang', '1', 356, 9.7, 1.1, 76.9, 'Sajikan'),
(311, 'Keremes', '1', 475, 1.6, 25.2, 64.4, 'Sajikan'),
(312, 'Keripik gadung', '1', 446, 2.8, 14.5, 76, 'Sajikan'),
(313, 'Keripik singkong', '1', 478, 0.9, 20.7, 72, 'Sajikan'),
(314, 'Keripik singkong berbumbu', '1', 481, 2.2, 19.7, 73.6, 'Sajikan'),
(315, 'Kerupuk sayong', '1', 7, 0.2, 2.6, 12.2, 'Sajikan'),
(316, 'Ketapang', '1', 34, 0.7, 1.1, 5.4, 'Sajikan'),
(317, 'Ketela kukus', '1', 153, 1.2, 0.3, 36.4, 'Sajikan'),
(318, 'Ketela tapai', '1', 169, 1.4, 0.3, 40.2, 'Sajikan'),
(319, 'Ketupat ketan', '1', 212, 4, 4.6, 38.6, 'Sajikan'),
(320, 'Ketupat tahu', '1', 274, 7.4, 6.5, 46.6, 'Sajikan'),
(321, 'Komba kukus', '1', 71, 2.3, 0.3, 15.4, 'Sajikan'),
(322, 'Kue Kutu mayang', '1', 100, 0.5, 1.2, 21.9, 'Sajikan'),
(323, 'Kue apem', '1', 84, 1.5, 0.7, 17.8, 'Sajikan'),
(324, 'Kue bugis', '1', 24, 0.3, 0.1, 5.4, 'Sajikan'),
(325, 'Kue koya', '1', 366, 4.2, 4.3, 7.9, 'Sajikan'),
(326, 'Kue mangkok', '1', 91, 1.5, 0.5, 20.2, 'Sajikan'),
(327, 'Kue pacar cina', '1', 38, 0.7, 0.2, 17.2, 'Sajikan'),
(328, 'Kue pia', '1', 148, 2.3, 0.7, 33.2, 'Sajikan'),
(329, 'Kue satu', '1', 59, 1.9, 0.4, 11.9, 'Sajikan'),
(330, 'Kue semprong', '1', 38, 0.1, 0.1, 9.2, 'Sajikan'),
(331, 'Kue talam', '1', 18, 0.1, 0.5, 3.2, 'Sajikan'),
(332, 'Kue tambang', '1', 128, 2.2, 6.5, 15.1, 'Sajikan'),
(333, 'Laksa', '1', 499, 8.2, 11.6, 88.4, 'Sajikan'),
(334, 'Lemper', '1', 177, 3, 2.9, 34.7, 'Sajikan'),
(335, 'Lenting getuk', '1', 422, 0.9, 10.8, 80.4, 'Sajikan'),
(336, 'Leupeut ketan', '1', 96, 3.1, 0.2, 20.5, 'Sajikan'),
(337, 'Lopis', '1', 98, 1.7, 1.3, 19.8, 'Sajikan'),
(338, 'Lumpia', '1', 133, 3.43, 0.47, 28.14, 'Sajikan'),
(339, 'Martabak', '1', 199, 3.5, 4.1, 37, 'Sajikan'),
(340, 'Martabak telur', '1', 200, 8.9, 5.1, 29.5, 'Sajikan'),
(341, 'Mi kuning goreng', '1', 476, 0.1, 21.1, 71.3, 'Sajikan'),
(342, 'Mie +telur (Menu Pgln)', '1', 178, 5, 0, 0, 'Sajikan'),
(343, 'Mie ayam', '1', 360, 5.9, 16.15, 49.87, 'Sajikan'),
(344, 'Mie goreng', '1', 117, 1.9, 5.1, 15.6, 'Sajikan'),
(345, 'Mie goreng (mie kering noodle)', '1', 185, 5.5, 5.3, 23.9, 'Sajikan'),
(346, 'Mie laksa basah', '1', 155, 0.2, 0.1, 38.2, 'Sajikan'),
(347, 'Mie laksa kering', '1', 347, 8, 0.2, 78.2, 'Sajikan'),
(348, 'Mie sua', '1', 320, 9.1, 0.2, 70.4, 'Sajikan'),
(349, 'Misro', '1', 109, 0.4, 2, 25.1, 'Sajikan'),
(350, 'Nasi (Menu Pgln)', '1', 176, 3.3, 0, 0, 'Sajikan'),
(351, 'Nasi Beras giling masak', '1', 178, 2.1, 0.1, 40.6, 'Sajikan'),
(352, 'Nasi beras giling pelita I/1', '1', 180, 3, 0.3, 39.8, 'Sajikan'),
(353, 'Nasi beras giling pelita II/1', '1', 158, 4, 0.5, 33.2, 'Sajikan'),
(354, 'Nasi beras tumbuk pelita I/1', '1', 166, 4.2, 0.5, 35, 'Sajikan'),
(355, 'Nasi beras tumbuk pelita II/1', '1', 144, 3.6, 0.4, 30.6, 'Sajikan'),
(356, 'Nasi goreng', '1', 138, 1.6, 1.6, 15.1, 'Sajikan'),
(357, 'Nasi goreng+telur (Menu Pgln)', '1', 198, 6.4, 0, 0, 'Sajikan'),
(358, 'Nasi tim (Menu Pgln)', '1', 120, 2.3, 0, 0, 'Sajikan'),
(359, 'Nasi uduk', '1', 152, 2.6, 2.6, 7, 'Sajikan'),
(360, 'Onde-onde', '1', 101, 2.9, 3.1, 15.5, 'Sajikan'),
(361, 'Ongol-ongol', '1', 23, 0.3, 1.2, 2.8, 'Sajikan'),
(362, 'Ongol-ongol sagu', '1', 111, 0.3, 2.7, 21.2, 'Sajikan'),
(363, 'Opak singkong', '1', 47, 1.8, 2.1, 5.2, 'Sajikan'),
(364, 'Papais', '1', 107, 2.4, 1.3, 21.6, 'Sajikan'),
(365, 'Pastel', '1', 208, 5.2, 15.4, 31.4, 'Sajikan'),
(366, 'Perkedel kentang', '1', 439, 15.77, 7.13, 79.62, 'Sajikan'),
(367, 'Pilus', '1', 257, 0.5, 13.9, 32.5, 'Sajikan'),
(368, 'Putu', '1', 21, 0.3, 0.6, 3.7, 'Sajikan'),
(369, 'Rarawuan', '1', 118, 2.9, 3.4, 19, 'Sajikan'),
(370, 'Risoles', '1', 134, 2.1, 1.4, 28.2, 'Sajikan'),
(371, 'Roti gambang', '1', 70, 1.5, 0.4, 15.1, 'Sajikan'),
(372, 'Roti isi coklat', '1', 215, 5.29, 1.9, 44.95, 'Sajikan'),
(373, 'Roti isi kacang', '1', 217, 6, 0.23, 45.65, 'Sajikan'),
(374, 'Roti isi kelapa (manis)', '1', 518, 13.7, 30, 48.4, 'Sajikan'),
(375, 'Roti kukus', '1', 249, 5.1, 2.1, 52.5, 'Sajikan'),
(376, 'Sagu ambon', '1', 338, 0.6, 0.3, 83.1, 'Sajikan'),
(377, 'Serabi', '1', 245, 6, 5, 43.9, 'Sajikan'),
(378, 'Singkong goreng', '1', 57, 0.2, 3.6, 5.6, 'Sajikan'),
(379, 'Siomay', '1', 162, 7.5, 3.8, 24.4, 'Sajikan'),
(380, 'Soun', '1', 351, 11.3, 0, 76.5, 'Sajikan'),
(381, 'Sriping talas kebumen', '1', 478, 2.5, 21.2, 69.2, 'Sajikan'),
(382, 'Supermi (Menu Pgln)', '1', 113, 0.6, 0, 0, 'Sajikan'),
(383, 'Supermi+telor (Menu Pgln)', '1', 166, 6.8, 0, 0, 'Sajikan'),
(384, 'Suweg kukus', '1', 93, 1.5, 0.1, 21.9, 'Sajikan'),
(385, 'Talas kukus', '1', 120, 1.5, 0.3, 28.2, 'Sajikan'),
(386, 'Tapai beras ketan hitam', '1', 166, 3.8, 1, 34.4, 'Sajikan'),
(387, 'Tapai beras ketan putih', '1', 172, 3, 0.5, 37.5, 'Sajikan'),
(388, 'Ubi jalar goreng', '1', 48, 1.1, 0.4, 16.6, 'Sajikan'),
(389, 'Ubi jalar kukus', '1', 100, 0.7, 0.3, 23.8, 'Sajikan'),
(390, 'Ubi jalar rebus', '1', 74, 0.9, 6.2, 16.6, 'Sajikan'),
(391, 'Ubi jalar sayur', '1', 110, 0.8, 0.2, 13.5, 'Sajikan'),
(392, 'Ubi kemayung kukus', '1', 165, 0.9, 0.2, 39.8, 'Sajikan'),
(393, 'Ampas tahu kukus', '1', 75, 4.1, 2.1, 10.7, 'Sajikan'),
(394, 'Biji jambu mete goreng', '1', 629, 21.5, 56.6, 19.8, 'Sajikan'),
(395, 'Botok lamtoro', '1', 186, 11.7, 9.7, 13, 'Sajikan'),
(396, 'Bubur kacang ijo', '1', 106, 3.9, 3.6, 14.6, 'Sajikan'),
(397, 'Bubur kacang ijo (Menu Pgln)', '1', 204, 5.9, 0, 0, 'Sajikan'),
(398, 'Emping goreng asin', '1', 431, 11.1, 16.2, 63, 'Sajikan'),
(399, 'Emping goreng manis', '1', 439, 10, 16.4, 65.7, 'Sajikan'),
(400, 'Emping goreng tipis', '1', 485, 11.5, 24.5, 59.1, 'Sajikan'),
(401, 'Goreng oncom', '1', 109, 2.2, 5.8, 12.1, 'Sajikan'),
(402, 'Kacang atom', '1', 533, 27.8, 38.1, 28.8, 'Sajikan'),
(403, 'Kacang babi bogor goreng', '1', 479, 12.7, 23.2, 58.9, 'Sajikan'),
(404, 'Kacang babi bogor rebus', '1', 161, 7.7, 2.8, 27.1, 'Sajikan'),
(405, 'Kacang babi kecipir rebus', '1', 204, 16.9, 8.8, 17.5, 'Sajikan'),
(406, 'Kacang gude rebus', '1', 147, 9, 0.5, 27.5, 'Sajikan'),
(407, 'Kacang hijau rebus', '1', 109, 8.7, 0.5, 18.3, 'Sajikan'),
(408, 'Kacang kapri goreng', '1', 89, 3.8, 2.2, 13.1, 'Sajikan'),
(409, 'Kacang kedelai goreng', '1', 521, 32.2, 37.7, 22.9, 'Sajikan'),
(410, 'Kacang kedelai rebus', '1', 189, 20.2, 8.2, 12.7, 'Sajikan'),
(411, 'Kacang kulit', '1', 628, 30.7, 50.5, 12.7, 'Sajikan'),
(412, 'Kacang merah kering rebus', '1', 158, 10.3, 0.9, 28.2, 'Sajikan'),
(413, 'Kacang merah segar rebus', '1', 144, 10, 1, 24.7, 'Sajikan'),
(414, 'Kacang sari', '1', 561, 25.5, 43.8, 26, 'Sajikan'),
(415, 'Kacang sukro (DKBM P3G \'90)', '1', 484, 8.8, 26.1, 57.7, 'Sajikan'),
(416, 'Kacang sukro putih', '1', 122, 1.3, 6.4, 14.9, 'Sajikan'),
(417, 'Kacang tanah goreng', '1', 564, 25.5, 44.4, 25.5, 'Sajikan'),
(418, 'Kacang tanah rebus', '1', 77, 2.8, 6.2, 2.6, 'Sajikan'),
(419, 'Kacang tanah rebus', '1', 220, 10.6, 18, 8, 'Sajikan'),
(420, 'Kacang tanah sangan', '1', 560, 29.5, 43, 24.1, 'Sajikan'),
(421, 'Kacang telur', '1', 187, 2.5, 5.2, 31.2, 'Sajikan'),
(422, 'Kacang tolo rebus', '1', 138, 10.7, 1.1, 22.6, 'Sajikan'),
(423, 'Kembang tahu rebus', '1', 90, 10.7, 4, 4.7, 'Sajikan'),
(424, 'Kripik abadi besar', '1', 556, 15.8, 37.1, 39.8, 'Sajikan'),
(425, 'Kripik murni', '1', 542, 40.3, 42.4, 11.6, 'Sajikan'),
(426, 'Kripik murni', '1', 540, 16.7, 33.9, 42, 'Sajikan'),
(427, 'Kripik oncom', '1', 598, 8.3, 43.8, 42.6, 'Sajikan'),
(428, 'Kripik sedang', '1', 510, 12.3, 27.9, 52.4, 'Sajikan'),
(429, 'Kripik telur', '1', 529, 20.8, 31.7, 40.2, 'Sajikan'),
(430, 'Kripik tempe', '1', 581, 12.1, 40.6, 41.7, 'Sajikan'),
(431, 'Kripik tempe goreng', '1', 542, 40.3, 42.4, 11.5, 'Sajikan'),
(432, 'Noga kacang tanah', '1', 180, 4.2, 12.5, 12.6, 'Sajikan'),
(433, 'Oncom hitam goreng', '1', 71, 3, 3.6, 3.4, 'Sajikan'),
(434, 'Oncom hitam tepung', '1', 92, 2.7, 5.4, 8.1, 'Sajikan'),
(435, 'Oncom merah bertepung', '1', 96, 2.8, 5.6, 9.3, 'Sajikan'),
(436, 'Oncom merah goreng', '1', 92, 1.7, 8, 3.3, 'Sajikan'),
(437, 'Oncom merah sayur (tumis)', '1', 4, 0.2, 0.2, 0.3, 'Sajikan'),
(438, 'Pepes oncom', '1', 132, 12.7, 3.8, 13.7, 'Sajikan'),
(439, 'Pepes oncom / ampas tahu', '1', 76, 5.2, 1.8, 10.6, 'Sajikan'),
(440, 'Pepes taoco', '1', 184, 11.4, 5.5, 22.2, 'Sajikan'),
(441, 'Rempeyek', '1', 513, 17.5, 32.5, 44.3, 'Sajikan'),
(442, 'Rempeyek kacang tanah', '1', 513, 17.5, 32.5, 44.3, 'Sajikan'),
(443, 'Rempeyek kacang tolo', '1', 451, 11.2, 20.2, 59.7, 'Sajikan'),
(444, 'Rempeyek kacang uci', '1', 497, 17, 27.6, 50.8, 'Sajikan'),
(445, 'Tahu goreng', '1', 32, 1.4, 2.8, 0.3, 'Sajikan'),
(446, 'Tahu goreng (DKBM P3G \'90)', '1', 115, 9.7, 8.5, 2.5, 'Sajikan'),
(447, 'Tahu goreng (Menu Pgln)', '1', 143, 9.6, 0, 0, 'Sajikan'),
(448, 'Tauco', '1', 158, 11.3, 5.4, 18.1, 'Sajikan'),
(449, 'Tauco cap beruang', '1', 347, 7.4, 5.2, 67.6, 'Sajikan'),
(450, 'Tauco cap das', '1', 358, 7.5, 4.3, 70.4, 'Sajikan'),
(451, 'Tauco cap meong', '1', 159, 7.4, 4.9, 21.3, 'Sajikan'),
(452, 'Tauji cap singa', '1', 277, 9.1, 4.7, 49.6, 'Sajikan'),
(453, 'Tempe goreng', '1', 82, 4.6, 5.8, 3.2, 'Sajikan'),
(454, 'Tempe goreng (Menu Pgln)', '1', 335, 23.3, 0, 0, 'Sajikan'),
(455, 'Tempe murni goreng', '1', 350, 24.5, 26.6, 10.4, 'Sajikan'),
(456, 'Tempe pasar goreng', '1', 336, 20, 28, 7.8, 'Sajikan'),
(457, 'Tempe sayur', '1', 36, 0.9, 0.4, 7.4, 'Sajikan'),
(458, 'Abon sapi', '1', 212, 18, 10.6, 59.3, 'Sajikan'),
(459, 'Abon sapi asli', '1', 358, 14.6, 16.1, 38.6, 'Sajikan'),
(460, 'Ati ayam (buras)', '1', 112, 18.3, 3.2, 2.6, 'Sajikan'),
(461, 'Ati ayam (ras)', '1', 105, 16.6, 3.4, 2.1, 'Sajikan'),
(462, 'Ayam goreng (Menu Pgln)', '1', 595, 30.5, 0, 0, 'Sajikan'),
(463, 'Ayam goreng buras mbok berek', '1', 295, 39.2, 13.6, 1, 'Sajikan'),
(464, 'Ayam paha lengkap kalasan', '1', 275, 37.4, 12.2, 1.3, 'Sajikan'),
(465, 'Ayam paha pasundan', '1', 245, 33.1, 11.4, 0.3, 'Sajikan'),
(466, 'Ayam paha sukabumi', '1', 283, 35.7, 14.3, 0.5, 'Sajikan'),
(467, 'Ayam pasundan', '1', 246, 37.9, 9, 0.7, 'Sajikan'),
(468, 'Ayam ras dada church toxas', '1', 338, 35.2, 20.6, 0.4, 'Sajikan'),
(469, 'Ayam ras dada kentucky', '1', 298, 34.2, 16.8, 0.1, 'Sajikan'),
(470, 'Ayam ras dada pioner', '1', 295, 37.4, 14.7, 0.6, 'Sajikan'),
(471, 'Ayam ras paha church', '1', 287, 31, 15.7, 1.7, 'Sajikan'),
(472, 'Ayam ras paha kentucky', '1', 286, 32.1, 16.7, 1.1, 'Sajikan'),
(473, 'Ayam sayap church', '1', 295, 34, 16, 1.5, 'Sajikan'),
(474, 'Ayam sayap kentucky', '1', 297, 35.9, 15.2, 1.6, 'Sajikan'),
(475, 'Ayam sukabumi', '1', 244, 36.7, 9.2, 1, 'Sajikan'),
(476, 'Babi lawar', '1', 174, 17, 10, 3, 'Sajikan'),
(477, 'Ceker ayam (buras)', '1', 197, 20.6, 11.5, 2.7, 'Sajikan'),
(478, 'Ceker ayam (ras)', '1', 245, 20.8, 17.1, 2.1, 'Sajikan'),
(479, 'Daging puyuh (goreng)', '1', 187, 25.6, 8.2, 2.8, 'Sajikan'),
(480, 'Dendeng bekicot', '1', 441, 48.7, 20.3, 15.8, 'Sajikan'),
(481, 'Paru goreng', '1', 488, 39.4, 36.5, 0.4, 'Sajikan'),
(482, 'Penyu lawar', '1', 141, 23, 1.5, 7.6, 'Sajikan'),
(483, 'Penyu sate', '1', 179, 22.5, 3.5, 13.3, 'Sajikan'),
(484, 'Penyu serapah', '1', 174, 13.1, 12.2, 2.2, 'Sajikan'),
(485, 'Pizza sapi', '1', 294, 17.9, 17.5, 16.1, 'Sajikan'),
(486, 'Rawon', '1', 60, 5.4, 2.5, 4, 'Sajikan'),
(487, 'Rempelo ayam', '1', 108, 17.2, 4.1, 0.4, 'Sajikan'),
(488, 'Rempelo ayam (goreng)', '1', 270, 32.3, 11.2, 9.9, 'Sajikan'),
(489, 'Rendang', '1', 193, 22.6, 7.9, 7.8, 'Sajikan'),
(490, 'Rujak cingur', '1', 153, 11.3, 8.4, 8, 'Sajikan'),
(491, 'Sapi rendang', '1', 193, 22.6, 7.9, 7.8, 'Sajikan'),
(492, 'Sate ayam', '1', 227, 41.3, 6.1, 1.8, 'Sajikan'),
(493, 'Sate daging kambing', '1', 211, 41.7, 4.9, 0, 'Sajikan'),
(494, 'Sate daging lembu', '1', 219, 38.9, 6.7, 0.8, 'Sajikan'),
(495, 'Sate kuah', '1', 151, 14.9, 1.3, 20, 'Sajikan'),
(496, 'Sate kulit', '1', 22, 3.1, 0.1, 2.3, 'Sajikan'),
(497, 'Sate perut lembu', '1', 218, 22.6, 11.5, 6.1, 'Sajikan'),
(498, 'Sate usus', '1', 19, 2.1, 1.1, 0.2, 'Sajikan'),
(499, 'Soto dengan daging', '1', 102, 2.1, 7.5, 6.6, 'Sajikan'),
(500, 'Soto tanpa daging', '1', 82, 0.3, 6, 6.7, 'Sajikan'),
(501, 'Sus isi ragout', '1', 221, 7.5, 10.2, 24.8, 'Sajikan'),
(502, 'Usus ayam goreng', '1', 473, 45.2, 26.3, 13.9, 'Sajikan'),
(503, 'Telur ayam dadar', '1', 251, 16.3, 19.4, 1.4, 'Sajikan'),
(504, 'Telur bebek dadar', '1', 301, 20, 23.7, 0, 'Sajikan'),
(505, 'Telur ceplok (Menu Pgln)', '1', 240, 11, 0, 0, 'Sajikan'),
(506, 'Telur dadar (Menu Pgln)', '1', 259, 11.7, 0, 0, 'Sajikan'),
(507, 'Telur dadar+terigu (Menu Pgln)', '1', 289, 10.7, 0, 0, 'Sajikan'),
(508, 'Telur puyuh', '1', 168, 12.3, 12.7, 1.2, 'Sajikan'),
(509, 'Telur rebus (Menu Pgln)', '1', 154, 12.2, 0, 0, 'Sajikan'),
(510, 'Bandeng presto', '1', 296, 17.1, 20.3, 11.3, 'Sajikan'),
(511, 'Belut dendeng goreng', '1', 382, 55.7, 14.1, 8, 'Sajikan'),
(512, 'Belut goreng', '1', 417, 25.9, 19.4, 32, 'Sajikan'),
(513, 'Cumi-cumi goreng', '1', 265, 40.6, 10.1, 0, 'Sajikan'),
(514, 'Dendeng mujahir goreng', '1', 598, 74.3, 26.9, 9.2, 'Sajikan'),
(515, 'Empek kapal selam', '1', 190, 13.2, 6.6, 19.4, 'Sajikan'),
(516, 'Empek kelesan', '1', 211, 12.3, 6.1, 26.6, 'Sajikan'),
(517, 'Empek tangiri', '1', 173, 7.2, 1.2, 33.4, 'Sajikan'),
(518, 'Empek-empek belida', '1', 156, 4.2, 1.4, 31.6, 'Sajikan'),
(519, 'Gurame asam manis', '1', 192, 12.7, 10.1, 12.7, 'Sajikan'),
(520, 'Ikan mas goreng (Menu Pgln)', '1', 182, 18.1, 0, 0, 'Sajikan'),
(521, 'Ikan mas semur (Menu Pgln)', '1', 225, 14.7, 0, 0, 'Sajikan'),
(522, 'Ikan tongkol (tuna)', '1', 117, 23.2, 2.7, 0, 'Sajikan'),
(523, 'Ikan tongkol masak kuwah', '1', 119, 15.7, 3.5, 6.1, 'Sajikan'),
(524, 'Kerupuk udang', '1', 17, 0.7, 1.5, 2.6, 'Sajikan'),
(525, 'Lele dumbo/pecak', '1', 372, 7.8, 36.3, 3.5, 'Sajikan'),
(526, 'Mujahir acar kuning', '1', 330, 17.8, 23.4, 12.1, 'Sajikan'),
(527, 'Mujahir goreng', '1', 416, 46.9, 23.9, 0, 'Sajikan'),
(528, 'Mujahir pepes', '1', 121, 21.7, 2.8, 0.8, 'Sajikan'),
(529, 'Pecak lele', '1', 372, 7.8, 36.3, 3.5, 'Sajikan'),
(530, 'Pepes ikan mas', '1', 209, 15.2, 11.3, 11.8, 'Sajikan'),
(531, 'Petis', '1', 345, 23.8, 1.4, 59.3, 'Sajikan'),
(532, 'Petis udang', '1', 345, 23.8, 1.4, 59.3, 'Sajikan'),
(533, 'Tenggiri', '1', 109, 21.5, 2.6, 0, 'Sajikan'),
(534, 'Teri blado', '1', 365, 23.7, 22.3, 17.5, 'Sajikan'),
(535, 'Bayam kukus', '1', 30, 1.3, 0.7, 5.8, 'Sajikan'),
(536, 'Bayam rebus', '1', 23, 1.2, 0.6, 3.7, 'Sajikan'),
(537, 'Botok lamtoro', '1', 186, 11.7, 9.7, 13, 'Sajikan'),
(538, 'Brongkos', '1', 141, 15.3, 3.3, 12.6, 'Sajikan'),
(539, 'Buncis rebus', '1', 30, 2.2, 0.2, 6.4, 'Sajikan'),
(540, 'Buntil daun talas', '1', 141, 4.4, 10.2, 8, 'Sajikan'),
(541, 'Gado-gado', '1', 203, 6.7, 8.7, 24.6, 'Sajikan'),
(542, 'Gudeg', '1', 160, 3.3, 9.2, 16, 'Sajikan'),
(543, 'Kac. panjang rebus (Menu Pgln)', '1', 38, 2.4, 0, 0, 'Sajikan'),
(544, 'Keredok', '1', 92, 2.2, 3.3, 14.1, 'Sajikan'),
(545, 'Ketoprak', '1', 153, 7.9, 7.7, 13, 'Sajikan'),
(546, 'Kripik bayam', '1', 586, 4.9, 40.6, 50.2, 'Sajikan'),
(547, 'Pecel', '1', 243, 11.14, 12.53, 31.72, 'Sajikan'),
(548, 'Sayur asem', '1', 29, 0.7, 0.6, 5, 'Sajikan'),
(549, 'Sayur daging ayam (Menu Pgln)', '1', 451, 27.2, 0, 0, 'Sajikan'),
(550, 'Sayur daging sapi (Menu Pgln)', '1', 239, 21.7, 0, 0, 'Sajikan'),
(551, 'Sayur kacang merah (Menu Pgln)', '1', 321, 17.4, 0, 0, 'Sajikan'),
(552, 'Sayur lodeh', '1', 240, 9.08, 12.45, 30.65, 'Sajikan'),
(553, 'Sayur lodeh (Menu Pgln)', '1', 108, 1.9, 0, 0, 'Sajikan'),
(554, 'Sayur sop', '1', 27, 1.3, 2, 1, 'Sajikan'),
(555, 'Sayur sosin (Menu Pgln)', '1', 18, 1.9, 0, 0, 'Sajikan'),
(556, 'Sayur soup (Menu Pgln)', '1', 61, 1.4, 0, 0, 'Sajikan'),
(557, 'Sayur tahu sosin (Menu Pgln)', '1', 92, 4.3, 0, 0, 'Sajikan'),
(558, 'Sayur tahu toge (Menu Pgln)', '1', 114, 3.4, 0, 0, 'Sajikan'),
(559, 'Sayur telur wortel (Menu Pgln)', '1', 140, 10.7, 0, 0, 'Sajikan'),
(560, 'Sayur tempe (Menu Pgln)', '1', 161, 9.3, 0, 0, 'Sajikan'),
(561, 'Semur jengkol', '1', 77, 1.8, 2.4, 12.1, 'Sajikan'),
(562, 'Semur jengkol kacang kedele', '1', 212, 6, 8.7, 29.1, 'Sajikan'),
(563, 'Semur telur (Menu Pgln)', '1', 178, 5, 0, 0, 'Sajikan'),
(564, 'Soto', '1', 135, 2.5, 8.8, 11.5, 'Sajikan'),
(565, 'Toge goreng', '1', 88, 3.2, 2.1, 14, 'Sajikan'),
(566, 'Tumis Jagung sayur', '1', 201, 3.7, 14.1, 27.1, 'Sajikan'),
(567, 'Tumis bayam (Menu Pgln)', '1', 193, 2, 0, 0, 'Sajikan'),
(568, 'Tumis bayam + santan', '1', 48, 1.4, 4.2, 2.6, 'Sajikan'),
(569, 'Tumis kangkung (Menu Pgln)', '1', 92, 2.5, 0, 0, 'Sajikan'),
(570, 'Tumis ketang (Menu Pgln)', '1', 120, 1.9, 0, 0, 'Sajikan'),
(571, 'Tumis labu siam (Menu Pgln)', '1', 88, 0.7, 0, 0, 'Sajikan'),
(572, 'Tumis teri +buncis (Menu Pgln)', '1', 158, 33.5, 0, 0, 'Sajikan'),
(573, 'Cerelac', '1', 418, 9, 15.5, 68.9, 'Sajikan'),
(574, 'Enfamil', '1', 525, 11.8, 29, 55, 'Sajikan'),
(575, 'Es krim (coconut milk)', '1', 47, 0.9, 0.5, 9.8, 'Sajikan'),
(576, 'LLM', '1', 481, 20, 21, 0, 'Sajikan'),
(577, 'Lactogen', '1', 464, 21.6, 19, 51.6, 'Sajikan'),
(578, 'Morinaga', '1', 515, 13, 27, 55.1, 'Sajikan'),
(579, 'Promil', '1', 460, 20, 18, 55, 'Sajikan'),
(580, 'Promina', '1', 409, 12.57, 8.78, 71.92, 'Sajikan'),
(581, 'S.G.M', '1', 461, 20, 18, 54.7, 'Sajikan'),
(582, 'Sustagen HP', '1', 1540, 94, 14, 260, 'Sajikan'),
(583, 'Susu full cream', '1', 502, 27, 26, 40, 'Sajikan'),
(584, 'Bakpau', '1', 239, 12.2, 2.6, 41.6, 'Sajikan'),
(585, 'Bakso', '1', 190, 10.3, 6.3, 23.1, 'Sajikan'),
(586, 'Berondong', '1', 60, 0.6, 0.1, 14.3, 'Sajikan'),
(587, 'Bika ambon', '1', 158, 2.1, 0.2, 37, 'Sajikan'),
(588, 'Biskuit mahal (Menu Pgln)', '1', 350, 8, 0, 0, 'Sajikan'),
(589, 'Cake (bolu)', '1', 435, 7.1, 19.8, 57.1, 'Sajikan'),
(590, 'Coklat (Menu Pgln)', '1', 472, 2, 0, 0, 'Sajikan'),
(591, 'Cucur', '1', 145, 2.39, 1.28, 31.36, 'Sajikan'),
(592, 'Dawet', '1', 878, 11.25, 14.9, 175.37, 'Sajikan'),
(593, 'Donat', '1', 357, 9.4, 10.4, 56.5, 'Sajikan'),
(594, 'Geplak', '1', 350, 1.4, 14.4, 53.6, 'Sajikan'),
(595, 'Kelepon', '1', 215, 3.7, 3.7, 41.8, 'Sajikan'),
(596, 'Kue bakpia', '1', 272, 3.7, 6.7, 44.1, 'Sajikan'),
(597, 'Kue karo', '1', 110, 2, 0.9, 23.4, 'Sajikan'),
(598, 'Kue wijen', '1', 565, 18.2, 38.4, 36.8, 'Sajikan'),
(599, 'Lapis legit', '1', 389, 6.6, 15.7, 55.5, 'Sajikan'),
(600, 'Ledre pisang', '1', 405, 4.8, 5.1, 84.9, 'Sajikan'),
(601, 'Lempog durian', '1', 320, 3.5, 5.7, 63.7, 'Sajikan'),
(602, 'Lupis ketan', '1', 164, 1.8, 2.1, 34.5, 'Sajikan'),
(603, 'Mendoan', '1', 92, 4.89, 1.04, 16.19, 'Sajikan'),
(604, 'Mendut/mata kebo', '1', 86, 3.11, 1.19, 16.35, 'Sajikan'),
(605, 'Mpek-mpek', '1', 182, 9.2, 3.8, 27.8, 'Sajikan'),
(606, 'Nopia spesial', '1', 387, 5.3, 7.6, 74.3, 'Sajikan'),
(607, 'Pisang getuk', '1', 144, 1.1, 0.4, 34.1, 'Sajikan'),
(608, 'Pisang goreng', '1', 132, 1.4, 3.8, 23.1, 'Sajikan'),
(609, 'Pisang kripik lampung', '1', 485, 1.7, 22.2, 69.7, 'Sajikan'),
(610, 'Pudding (Menu Pgln)', '1', 194, 1.9, 0, 0, 'Sajikan'),
(611, 'Putu cangkir', '1', 304, 5.3, 7, 54.9, 'Sajikan'),
(612, 'Rujak', '1', 228, 7.6, 15.5, 14.5, 'Sajikan'),
(613, 'Sagon', '1', 84, 0.98, 1.1, 18.1, 'Sajikan'),
(614, 'Satru ponorogo', '1', 380, 13.9, 2.1, 76.4, 'Sajikan'),
(615, 'Sempril sagu', '1', 477, 0.7, 18.4, 77.3, 'Sajikan'),
(616, 'Suwir-suwir', '1', 317, 0.5, 0.9, 84.2, 'Sajikan'),
(617, 'Taro', '1', 523, 5.8, 28.2, 61.3, 'Sajikan'),
(618, 'Wafer', '1', 53, 2.7, 28.7, 66.7, 'Sajikan'),
(619, 'Wajit camilan', '1', 303, 6.3, 2.7, 63.3, 'Sajikan'),
(620, 'Wedang jahe', '1', 59, 0.14, 0.09, 15.07, 'Sajikan'),
(621, 'Wedang jeruk', '1', 60, 0.12, 0.03, 15.75, 'Sajikan'),
(622, 'Widaran', '1', 424, 1.3, 10.7, 80.7, 'Sajikan'),
(623, 'Wingko babat', '1', 355, 3.2, 15.1, 51.4, 'Sajikan'),
(624, 'Yangko', '1', 254, 3, 1.1, 58.1, 'Sajikan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`, `level`, `tanggal_lahir`, `alamat`, `no_telp`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@mail.com', '1', '1990-12-12', 'Jl. Nogorojo, No. 2 Gowok Depok Sleman', '087216521889', 'Hitam_Putih.jpg'),
(2, 'vina', 'e7bb4f7ed097bd6ccefc46018fda32c8', 'Vina Pusparani Sari', 'vina@mail.com', '2', '1988-10-19', 'Jl. Tirtomartani No. 29, Kalasan, Sleman', '087216521880', 'IMG_20180414_131452_006.jpg'),
(3, 'lili', '777bbb7869ae8193249f8ff7d3e59afe', 'Liliana Putri', 'lili@mail.com', '2', '1998-09-09', 'Tirtomartani, Kalasan, Sleman', '08921782919', 'IMG_20180305_045753_0182.jpg'),
(8, 'nana', '518d5f3401534f5c6c21977f12f60989', 'Nana Pratiwi', 'nana_pratiwi@mail.com', '2', '1980-10-20', 'Jogjakarta', '089782675127', 'default.jpg'),
(9, 'fahmi', 'f11d50d63d3891a44c332e46d6d7d561', 'Fahmi Saputri', 'fahmi@mail.com', '2', '1992-06-18', 'hoihoho', '08218273192', 'default.jpg'),
(10, 'fatimah', '3610528e7fee68c6ffb0445603ef2c8e', 'Nurul Fatimah', 'fatimah@mail.com', '2', '1980-09-12', 'Jogokaryan, Bantul, Yogyakarta', '083979826180', 'default.jpg'),
(11, 'sandi', 'ac9b4e0b6a21758534db2a6324d34a54', 'Sandi Aulia', 'sandi@mail.com', '2', '1991-09-22', 'Jl. Nurul Asri Deresan 2, Gejayan, Sleman', '088772871901', 'IMG_20180228_021814_647.jpg'),
(12, 'ani', '29d1e2357d7c14db51e885053a58ec67', 'Ani Karlina', 'ani@gmail.com', '2', '1986-01-30', 'Jl. Nogopuro No. 1 Gowok', '089397873915', 'Bacaan-Doa-Lulus-Ujian-Skripsi-1.png'),
(13, 'leta', '14af248986271bc8894447214c0e8498', 'Leta Azhara', 'leta@mail.com', '2', '2000-07-04', 'Jl. Jendral Sudirman, Kotabaru, Yogyakarta', '089397873915', 'default.jpg'),
(14, 'putri', 'd7c24d51c8d5b3b671952041804add48', 'Adini Putri Lestari', 'adini_putri@mail.com', '2', '1998-09-05', 'Seturan, Selokan Mataram, Sleman, Yogyakarta', '089782675127', 'default.jpg'),
(15, 'prista', 'c7aadc812c1450a6cd8d8c59719314da', 'Prista Prima Pradani', 'prista_prima@mail.com', '2', '2019-01-04', 'Jl. Kaliurang Km. 12, Bangunjiwo,  Sleman, Yogyakarta', '0887728719019', 'default.jpg'),
(16, 'wiwin', 'b6d67c9a0571394fc265616f7f47f9fb', 'Wiwin Khadir', 'wiwin@gmail.com', '2', '1993-10-29', 'Umbulharjo', '0887728719019', 'default.jpg'),
(17, 'irma', '76af47488ac4ecce7c29005f15cf7d0e', 'Irma Novianti', 'irma@mail.com', '2', '0000-00-00', 'Jl. Pegangsaan Timur No. 26 Jakarta Utara', '0887728719019', 'IMG_20180304_070637_261.jpg'),
(18, 'isna', '3d1c3481dd9ce3d7e31f3bee188cee35', 'Isnaini Saputri', 'isnaini@gmail.com', '2', '0000-00-00', 'Jl. Merdeka No. 47, Kotabaru, Yogyakarta', '083179018139', 'IMG_20180309_224338_397.jpg'),
(19, 'maryam', '8a16a1b13939aa7034128948c0c61591', 'Nurul Ar Maryam', 'maryam@mail.com', '2', '0000-00-00', 'Jl. Pedak No.217, Banguntapan Bantul, Yogyakarta', '08931837917', 'IMG_20180414_211206_544.jpg'),
(20, 'eni', 'e3d96c321f2a71cb81cd7d5f05f1a8d7', 'Eni Wijaya', 'eni@mail.com', '2', '0000-00-00', 'Jl. Nilam, Magelang, Jawa Tengah', '083979826180', 'IMG_20180414_163947_671.jpg'),
(21, 'wilda', '6136fb3ef80dc739cc62444c1df1ed7a', 'Wilda Nur Putri', 'wilda@mail.com', '2', '0000-00-00', 'Jl. Nogomudo No. 143, Gowok, Sleman', '088772871901', 'IMG_20180414_135544_697.jpg'),
(22, 'kmod', '61abb983bb8e2266dd52452532d6ef5a', 'oij', 'oij@mail.com', '2', '0000-00-00', 'ksoldjso', '088772871901', 'IMG_20180301_051406_0462.jpg'),
(23, 'nasj', '2a5ff623140d54e638c0dbc448b07e87', 'moksds', 'malmsa@mail.com', '2', '0000-00-00', 'kdoajdo', '089397873915', '31944859_1853060268073062_657210303586500608_n.jpg'),
(24, 'dskol', '5bb191dccfcf61d2b920b71f0f751bfb', 'kosdo', 'mkaod@mail.com', '2', '0000-00-00', 'noad knods doksjdo', '083979826180', 'IMG_20180311_125147_143.jpg'),
(25, 'nksdnk', '550fb0285b6095004d1edc84747bbb53', 'nksopd', 'moksdj@mail.com', '2', '0000-00-00', 'nkdos lpds-00-sm', '083979826180', 'IMG_20180228_021814_6471.jpg'),
(26, 'nina', 'f2ceea1536ac1b8fed1a167a9c8bf04d', 'Nina Gustarlina', 'nina@gmail.com', '2', '2019-01-02', 'Jogjakarta', '089397873915', 'IMG_20180228_160756_4812.jpg'),
(27, 'nina', 'f2ceea1536ac1b8fed1a167a9c8bf04d', 'Nina Gustarlina', 'nina@gmail.com', '2', '2019-01-09', 'Jogjakarta', '089397873915', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `bahan_makan`
--
ALTER TABLE `bahan_makan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `detail_konsultasi`
--
ALTER TABLE `detail_konsultasi`
  ADD PRIMARY KEY (`id_detail_konsultasi`),
  ADD KEY `id_konsultasi` (`id_konsultasi`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `detail_menu`
--
ALTER TABLE `detail_menu`
  ADD PRIMARY KEY (`id_detail_menu`),
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_bahan` (`id_bahan`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `menu_makan`
--
ALTER TABLE `menu_makan`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bahan_makan`
--
ALTER TABLE `bahan_makan`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `detail_konsultasi`
--
ALTER TABLE `detail_konsultasi`
  MODIFY `id_detail_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `detail_menu`
--
ALTER TABLE `detail_menu`
  MODIFY `id_detail_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `menu_makan`
--
ALTER TABLE `menu_makan`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=625;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
