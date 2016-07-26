-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2016 at 06:32 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `img` text NOT NULL,
  `kategori` varchar(16) NOT NULL,
  `headline` int(11) NOT NULL,
  `show` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `recdate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `img`, `kategori`, `headline`, `show`, `tanggal`, `recdate`) VALUES
(6, 'Sertifikat Digital Indonesia, Apa Itu ?', '<p>REPUBLIKA.CO.ID, JAKARTA -- Kementerian Komunikasi dan Informatika (Kemenkominfo) meluncurkan sertifikat digital (ROOT AC) Indonesia untuk mengantisipasi permasalahan keamanan dalam transaksi elektronik. Direktur Jenderal Aplikasi Informatika Kemenkominfo Bambang Heru Tjahjono, mengatakan, khusus untuk layanan publik wajib menggunakan sertifikat digital.</p>\r\n\r\n<p>&quot;Layanan publik yang menggunakan sertifikat digital ini untuk menunjukkan bahwa mereka terpercaya karena kunci dari suatu transaksi adalah kepercayaan,&quot; katanya, Selasa (2/12).</p>\r\n\r\n<p>http://nasional.republika.co.id/berita/nasional/umum/14/12/02/nfy5ns-sertifikat-digital-indonesia-apa-itu</p>\r\n', '182330afd791c46a1f980f9acc0df409.jpg', 'NEWS', 1, 1, '2016-07-25', '2016-07-25 06:30:30'),
(7, 'Pemerintah akan Membentuk Penyelenggara Sertifikat Digital', '<p>JAKARTA (IndoTelko) &ndash; Pemerintah melalui Kementrian Komunikasi dan Informatika (Kemenkominfo) akan membentuk penyelenggara sertifikat digital nasional seiring akan diberlakukannya sertifikat digital pada akhir 2015.</p>\r\n\r\n<p>&quot;Selama ini kita masih membeli sertifikat digital dari luar negeri. Dalam beberapa tahun ke depan kami akan membentuk penyelenggara sertifikat digital nasional,&quot; ungkap Direktur Jenderal Aplikasi Informatika Kemenkominfo, Bambang Heru Tjahjono, kemarin.</p>\r\n\r\n<p>http://www.indotelko.com/kanal?c=&amp;it=pemerintah-akan-membentuk-penyelenggara-sertifikat-digital</p>\r\n', 'f2ce5a8d2b4afd09f4f4a4f2fada8e77.jpg', 'NEWS', 1, 1, '2016-07-25', '2016-07-25 06:27:44'),
(8, 'Kominfo Gratiskan Sertifikat Tandatangan Digital saat Sosialisasi', '<p>Jakarta, KomiT &ndash; Sosialisasi dan Promosi Pemanfaatan Tandatangan Digital (TTD) untuk kalangan instansi Pemerintah, Aparat, Perbankan, Akademisi dan Praktisi Telematika dengan tema &ldquo;Pemanfaatan Tandatangan Digital pada Transaksi Elektronik&rdquo; digelar 12 Mei 2016 di Hotel Sari Pan Pasifik, mendahului Peraturan Menteri yang juga akan segera terbit, ujar Aidil Chendramata Direktur Keamanan Informasi bersama Riki Arif Gunawan , Kasubdit Teknologi Keamanan Informasi dan Anthonius Malau; Kasubdit Hukum dan Kerjasama, Ditjen Aptika (Aplikasi Informatika) Kementrian Kominfo kepada Rudi Rusdiah, editor Komite.ID</p>\r\n\r\n<p>http://komite.id/2016/05/16/pemanfaatan-tandatangan-digital-pada-transaksi-elektronik/</p>\r\n', '9cbd60a9ea1becbae3bfd846dd1fc810.jpg', 'NEWS', 1, 1, '2016-07-25', '2016-07-25 06:30:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
