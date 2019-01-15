-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2019 at 10:00 AM
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
  `dari` int(11) NOT NULL,
  `kepada` int(11) NOT NULL,
  `isi_pesan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `dari`, `kepada`, `isi_pesan`, `tanggal`) VALUES
(1, 2, 1, 'Asssalamualaikum, tanya dok?', '2019-01-13 15:13:15'),
(2, 2, 1, 'Hallo dok', '2019-01-13 15:31:38'),
(3, 1, 2, 'Iya, waalaikumsalam', '2019-01-13 15:31:38'),
(4, 9, 1, 'afwan dok, ijin tanya', '2019-01-13 15:33:38'),
(5, 14, 12, 'hai apa kabar', '2019-01-13 15:34:45');

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
(9, 2, 4);

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

INSERT INTO `konsultasi` (`id_konsultasi`, `id_user`, `tinggi_badan`, `berat_badan`, `usia_ibuhamil`, `usia_kehamilan`, `nilai_trisemester`, `imt`, `status_gizi`, `bbih`, `tee`, `energi_karbohidrat`, `energi_protein`, `energi_lemak`, `aktifitas_fisik`, `kebutuhan_karbohidrat`, `kebutuhan_protein`, `kebutuhan_lemak`, `tanggal`) VALUES
(1, 2, 160, 73, 28, 19, 300, 28.515625, 'Gemuk', 61.65, 2181.446, 1308.8676, 327.2169, 545.3615, '0.3', 327.2169, 81.804225, 60.595722222222, '2019-01-12 14:40:55'),
(2, 2, 158, 51, 26, 9, 180, 20.429418362442, 'Normal', 56.15, 1733.976, 1040.3856, 260.0964, 433.494, '0.2', 260.0964, 65.0241, 48.166, '2019-01-12 15:07:25');

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
(1, 'Ketoprak', '2', 523, 13.89, 7.9, 7.7, 'Tempatkan bihun dalam wadah lalu seduh dengan air panas. Biarkan hingga lembek, kemudian buang airnya dan tiriskan.\r\nSeduh juga taoge yang sudah disiapkan dan dibersihkan, dengan air panas. Buang airnya dan tiriskan.\r\nGoreng tahu yang sudah dipotong-potong dalam minyak panas. Setelah warnanya kecoklatan, angkat dan tiriskan. Anda pun bisa menggorengnya terlebih dahulu baru kemudian memotong-motongnya.\r\nBumbu yang telah dihaluskan dididihkan dan cicipi rasanya sesuai dengan selera. Aduk-aduk sampai saus kacang mengental. Sebaiknya, Anda menghaluskannya dengan cara diblender untuk hasil bumbu kacang yang benar-benar halus dan kental.\r\nSelanjutnya, Anda siapkan piring saji.\r\nTaruh potongan lontong atau ketupat terlebih dahulu, kemudian taruh bihun, tahu, dan taoge di bagian atasnya.\r\nSiram dengan saus kacang dan beri sedikit kecap.\r\nTaburkan bawang goreng dan irisan seledri.'),
(2, 'Gudeg', '2', 453, 3.9, 9.71, 12.1, 'Haluskan bawang merah, bawang putih, kemiri, ketumbar, gula merah, dan garam dengan sedikit air.\r\nMasukkan nangka muda, ayam , sereh, lengkuas, daun salam, bumbu halus, gula merah, garam , air dan santan . ...\r\nSetelah 30 menit, masukkan telur rebus dan santan. ...\r\nSajikan gudeg nangka bersama kuah santan areh.'),
(3, 'Gudeg', '2', 351, 13.89, 9.71, 12.1, 'lllvhufifuyu'),
(4, 'Sayur Bening', '1', 618, 13.89, 9.71, 12.1, 'oskas skajos askjos njsoajo asnojsoa onsao oasnoa siamqisy sao'),
(5, 'Sayur Bayam', '1', 723, 12, 127, 13, 'dsfdsds');

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@mail.com', '1', '1990-12-12', 'Sleman', '087216521889', 'default.jpg'),
(2, 'vina', 'e7bb4f7ed097bd6ccefc46018fda32c8', 'Vina Pusparani Sari', 'vina@mail.com', '2', '1988-10-19', 'Jl. Tirtomartani No. 29, Kalasan, Sleman', '087216521889', 'IMG_20180305_045753_0181.jpg'),
(3, 'lili', '777bbb7869ae8193249f8ff7d3e59afe', 'Liliana Putri', 'lili@mail.com', '2', '1998-09-09', 'Tirtomartani, Kalasan, Sleman', '08921782919', 'default.jpg'),
(8, 'nana', '518d5f3401534f5c6c21977f12f60989', 'Nana Pratiwi', 'nana_pratiwi@mail.com', '2', '1980-10-20', 'Jogjakarta', '089782675127', 'default.jpg'),
(9, 'fahmi', 'f11d50d63d3891a44c332e46d6d7d561', 'Fahmi Saputri', 'fahmi@mail.com', '2', '1992-06-18', 'hoihoho', '08218273192', 'default.jpg'),
(10, 'fatimah', '3610528e7fee68c6ffb0445603ef2c8e', 'Nurul Fatimah', 'fatimah@mail.com', '2', '1980-09-12', 'Jogokaryan, Bantul, Yogyakarta', '083979826180', 'default.jpg'),
(11, 'sandi', 'ac9b4e0b6a21758534db2a6324d34a54', 'Sandi Aulia', 'sandi@mail.com', '2', '1991-09-22', 'Jl. Nurul Asri Deresan 2, Gejayan, Sleman', '088772871901', 'IMG_20180228_021814_647.jpg'),
(12, 'ani', '29d1e2357d7c14db51e885053a58ec67', 'Ani Karlina', 'ani@gmail.com', '2', '1986-01-30', 'Jl. Nogopuro No. 1 Gowok', '089397873915', 'Bacaan-Doa-Lulus-Ujian-Skripsi-1.png'),
(13, 'leta', '14af248986271bc8894447214c0e8498', 'Leta Azhara', 'leta@mail.com', '2', '2000-07-04', 'Jl. Jendral Sudirman, Kotabaru, Yogyakarta', '089397873915', 'default.jpg'),
(14, 'putri', 'd7c24d51c8d5b3b671952041804add48', 'Adini Putri Lestari', 'adini_putri@mail.com', '2', '1998-09-05', 'Seturan, Selokan Mataram, Sleman, Yogyakarta', '089782675127', 'default.jpg'),
(15, 'prista', 'c7aadc812c1450a6cd8d8c59719314da', 'Prista Prima Pradani', 'prista_prima@mail.com', '2', '2019-01-04', 'Jl. Kaliurang Km. 12, Bangunjiwo,  Sleman, Yogyakarta', '0887728719019', 'default.jpg'),
(16, 'wiwin', 'b6d67c9a0571394fc265616f7f47f9fb', 'Wiwin Khadir', 'wiwin@gmail.com', '2', '1993-10-29', 'Umbulharjo', '0887728719019', 'default.jpg');

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
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `detail_konsultasi`
--
ALTER TABLE `detail_konsultasi`
  MODIFY `id_detail_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `detail_menu`
--
ALTER TABLE `detail_menu`
  MODIFY `id_detail_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu_makan`
--
ALTER TABLE `menu_makan`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
