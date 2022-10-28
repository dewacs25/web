-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 04:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-wan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bantuan`
--

CREATE TABLE `tb_bantuan` (
  `id_bantuan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bantuan`
--

INSERT INTO `tb_bantuan` (`id_bantuan`, `nama`, `email`, `telepon`, `keterangan`) VALUES
(2108126473, 'jamal', 'jamal@gmail.com', '0283374343', 'hahahah ga ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_con`
--

CREATE TABLE `tb_con` (
  `id_con` int(11) NOT NULL,
  `con1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `judul`, `isi`, `gambar`) VALUES
(263407826, 'Maintenance', '<p>Lakukan perawatan dan pemeliharaan sistem bisnis Anda.</p>\r\n', '6358aac156bd7.png'),
(323872440, 'Website dan Aplikasi', '<p>Ciptakan Website &amp; Aplikasi sesuai kebutuhan bisnis anda.</p>\r\n', '6358a9f7b36a5.png'),
(386401125, 'Digital Marketing', '<p>Tingkatkan Jangkauan Promosi Bisnis Anda dengan cepat dan tepat.</p>\r\n', '6358aaa99e0b5.png'),
(1002316080, 'Hosting dan Security', '<p>Tingkatkan akselerasi dan keamanan sistem pada bisnis Anda.</p>\r\n', '6358aa1fb42db.png'),
(1047729230, 'Mobile Apps Android dan IOS', '<p>Ciptakan Aplikasi Android &amp; iOS sesuai kebutuhan bisnis anda.</p>\r\n', '6358aa4f3ea8b.png'),
(1290267535, 'Training', '<p>Tingkatkan pengetahuan dan kemampuan skill sesuai dengan bisnis anda.</p>\r\n', '6358aa91abc27.png'),
(1650802478, 'Networking', '<p>Tingkatkan infrastruktur sarana dan prasarana IT untuk memperlancar bisnis anda.</p>\r\n', '6358aa3716411.png'),
(1914511836, 'Design dan Multimedia', '<p>Ciptakan branding bisnis anda dengan desain yang exclusive dan premium.</p>\r\n', '6358aa6a6c5dd.png'),
(2133485412, 'Jasa IT Lainnya', '<p>Kami melayani semua kebutuhan IT bisnis anda.</p>\r\n', '6358aad939e9d.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `judul`, `harga`, `deskripsi`) VALUES
(4, 'WAN Starter', '1.500.000', '<p>Cocok Untuk Yang Baru Memulai Usaha<br />\r\n(Website Company Profile dan Personal)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Revisi 2x</li>\r\n	<li>Domain Perusahaan</li>\r\n	<li>Penyimpanan 2Gb</li>\r\n	<li>Unlimited Bandwith</li>\r\n	<li>5 Akun Email</li>\r\n	<li>Responsive Mobile Desain</li>\r\n	<li>Fitur &amp; Menu Navigasi : Menu, Produk/Jasa,</li>\r\n	<li>Galeri, Testimonial, Maps, Lokasi dll</li>\r\n	<li>Chat WhatsApp</li>\r\n	<li>Training Admin</li>\r\n	<li>Garansi</li>\r\n	<li>4x Update Content</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n'),
(5, 'WAN Business', '2.000.000', '<p>Cocok Untuk Bisnis Yang Sedang Berkembang</p>\r\n\r\n<p>(Wesbite Company Profile dan Semi Toko Online)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Revisi 4x</li>\r\n	<li>Domain Perusahaan</li>\r\n	<li>Unlimited Bandwith</li>\r\n	<li>10 Akun Email</li>\r\n	<li>Desain Custom</li>\r\n	<li>Responsive Mobile Desain</li>\r\n	<li>Fitur Lebih Lengkap</li>\r\n	<li>Booking Online</li>\r\n	<li>Pixel Facebook</li>\r\n	<li>Chat WhatsApp</li>\r\n	<li>Maintenance</li>\r\n	<li>Training Admin</li>\r\n	<li>Garansi</li>\r\n	<li>6x Update Content</li>\r\n</ul>\r\n'),
(6, 'WAN Custom', '3.000.000', '<p>Fitur Lebih Lengkap dan Kompleks</p>\r\n\r\n<p>(Wesbite Company Profile dan Toko Online)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Revisi 6x</li>\r\n	<li>Domain Perusahaan</li>\r\n	<li>Penyimpanan 10Gb</li>\r\n	<li>Unlimited Bandwith</li>\r\n	<li>Unlimited Akun Email</li>\r\n	<li>Desain Custom</li>\r\n	<li>Opsi Desain</li>\r\n	<li>Responsive Mobile Desain</li>\r\n	<li>Fitur Lebih Lengkap</li>\r\n	<li>Fitur E-Commerce</li>\r\n	<li>Integrasi API</li>\r\n	<li>2 Multiple Languange</li>\r\n	<li>Chat WhatsApp</li>\r\n	<li>Maintenance</li>\r\n	<li>Training Admin</li>\r\n	<li>Garansi</li>\r\n	<li>Unlimited Update Content</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sosial_media`
--

CREATE TABLE `tb_sosial_media` (
  `id_media` int(11) NOT NULL,
  `no_whatsapp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url_facebook` text NOT NULL,
  `url_instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sosial_media`
--

INSERT INTO `tb_sosial_media` (`id_media`, `no_whatsapp`, `email`, `url_facebook`, `url_instagram`) VALUES
(1, '082125246091', 'mai.gmail.com', 'www.facebook.com', 'https://www.instagram.com/wanteknologiinternasional');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentang_kami`
--

CREATE TABLE `tb_tentang_kami` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tentang_kami`
--

INSERT INTO `tb_tentang_kami` (`id`, `judul`, `isi`, `gambar`) VALUES
(353711324, 'Desain Website Profesional ', 'Desain website yang profesional dengan informasi serta tata letak yang telah dipotimalkan, mencerminkan Bisnis dan Perusahaan yang Anda jalankan saat ini. Pelanggan akan memberikan apresiasi khusus untuk website yang Profesional. Di WANTeknologi Anda akan mendapatkan website yang dibuat oleh tim ahli profesional dan berpengalaman. Website yang dikerjakan oleh tim WANTeknologi mengutamakan desain yang unik, serta Profesional, yang disesuaikan dengan informasi serta visi misi dari Perusahaan Anda. Konsultasikan dengan kami jika Anda membutuhkan sebuah desain khusus untuk membantu meningkatkan penjualan Anda.', '6358b94c95d09.png'),
(632005516, 'Sukses dengan website Anda ', 'Membuat website hanyalah awal kesuksesan. Niagaweb akan memberikan solusi dengan memanfaatkan website untuk membuat rencana pemasaran dan mengajarkan Anda bagaimana cara mendapatkan calon pelanggan potensial. Dapatkan ebook dan tutorial bermanfaat berdasarkan praktek dan pengalaman terbaik kami untuk membantu Anda dalam mengembangkan konten website yang lebih menarik dan berorientasi penjualan.', '6358b9932706c.png'),
(1156528328, 'Layanan Konsultasi dan Bantuan Jarak Jauh ', 'Konsultasikan permasalahan website Anda dengan tim ahli kami melalui telepon dan email. Anda juga dapat meminta bantuan jarak jauh untuk melakukan konfigurasi tertentu ataupun bantuan untuk mengupdate konten website Anda.', '6358b97c95557.png'),
(1474655052, 'Harga Website Murah Mulai Sejutaan! ', 'Kami tidak akan kalah dalam hal harga pembuatan website. Kami memberikan Anda harga pembuatan website yang murah untuk membuat sebuah website profesional yang berorientasi penjualan dengan dukungan server, tim teknis, dan teknologi website terbaru dan handal. ', '6358b93408052.png'),
(1777090333, 'Fasilitas Editor yang Mudah Digunakan ', 'Setelah selesai, team kami akan mempublish website yang telah dioptimasi ke domain utama yang anda pilih.', '6358b964775ca.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_web_hasil`
--

CREATE TABLE `tb_web_hasil` (
  `id_web` int(11) NOT NULL,
  `link` text NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_web_hasil`
--

INSERT INTO `tb_web_hasil` (`id_web`, `link`, `gambar`) VALUES
(493275162, 'https://www.google.com', '6358b732af953.png'),
(496341644, 'https://www.google.com', '6358b72901cd6.png'),
(1504240503, 'https://www.google.com', '6358b73e5cc63.png'),
(1872782886, 'https://www.google.com', '6358b74a12584.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_bantuan`
--
ALTER TABLE `tb_bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indexes for table `tb_con`
--
ALTER TABLE `tb_con`
  ADD PRIMARY KEY (`id_con`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tb_sosial_media`
--
ALTER TABLE `tb_sosial_media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `tb_tentang_kami`
--
ALTER TABLE `tb_tentang_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_web_hasil`
--
ALTER TABLE `tb_web_hasil`
  ADD PRIMARY KEY (`id_web`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_bantuan`
--
ALTER TABLE `tb_bantuan`
  MODIFY `id_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2108126474;

--
-- AUTO_INCREMENT for table `tb_con`
--
ALTER TABLE `tb_con`
  MODIFY `id_con` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2133485413;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_sosial_media`
--
ALTER TABLE `tb_sosial_media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_tentang_kami`
--
ALTER TABLE `tb_tentang_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1777090334;

--
-- AUTO_INCREMENT for table `tb_web_hasil`
--
ALTER TABLE `tb_web_hasil`
  MODIFY `id_web` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1872782887;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
