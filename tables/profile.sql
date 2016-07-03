-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2016 at 09:32 PM
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
  `judul` varchar(64) NOT NULL,
  `isi` text NOT NULL,
  `img` text NOT NULL,
  `kategori` varchar(16) NOT NULL,
  `headline` int(11) NOT NULL,
  `show` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `recdate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `img`, `kategori`, `headline`, `show`, `tanggal`, `recdate`) VALUES
(4, 'Artikel Baru', '<p>Artikel Baru</p>\r\n\r\n<p>Artikel BaruArtikel BaruArtikel BaruArtikel BaruArtikel BaruArtikel BaruArtikel BaruArtikel BaruArtikel BaruArtikel BaruArtikel BaruArtikel BaruArtikel Baru</p>\r\n', 'b65030dfea9fa40da60356f91665fb1f.jpg', 'ARTIKEL', 1, 1, '2016-05-30', '2016-05-30 01:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(11) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `kategori` varchar(16) NOT NULL,
  `deskripsi` text NOT NULL,
  `img` text NOT NULL,
  `headline` int(11) NOT NULL,
  `publish` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `recdate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `kategori`, `deskripsi`, `img`, `headline`, `publish`, `tanggal`, `recdate`) VALUES
(1, 'Gallery update', 'PHOTO', 'Kegiatan Perusahaan Update', 'd4ab8ca5e22fa177e16816967040110f.jpg', 1, 0, '2016-05-31', '2016-05-30 07:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `email`, `type`) VALUES
(1, 'adminsuper', 'e00b29d5b34c3f78df09d45921c9ec47', 'The Amazing Super Admin', 'fitoplankton@yahoo.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
