-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 03:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `app_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE IF NOT EXISTS `surat_keluar` (
`id` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `no_surat`, `tanggal`, `pengirim`, `tujuan`, `perihal`, `lampiran`) VALUES
(1, '56-UNIKOM-ERG', '2017-11-29', 'ERG UNIKOM', 'SMAN 1 BANDUNG', 'Seminar IoT', '1 Lembar');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE IF NOT EXISTS `surat_masuk` (
`id` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `no_surat`, `tanggal_masuk`, `pengirim`, `penerima`, `perihal`, `lampiran`) VALUES
(1, '56-ERG-KO', '2017-11-02', 'Agun Wiguna', 'Enda Saeful A', 'Penting', '3 '),
(4, '57-ERG-KO', '2017-11-10', 'LDK UMMI', 'ERG UNIKOM', 'Undangan Peresmian', '-'),
(5, '58-ERG-KO', '2017-12-09', 'Asep Kusnandar', 'Atep Rizal', 'Undangan Rapat', '2 '),
(6, '59-ERG-KO', '2017-12-01', 'Codepolitan', 'ERG UNIKOM', 'Undangan Kompetisi', '2'),
(7, '60-ERG-KO', '2017-12-01', 'Codelabs', 'ERG UNIKOM', 'Undangan Rapat', '-'),
(8, '61-ERG-KO', '2017-12-02', 'DIRK', 'ERG', 'Undangan Rapat', '-'),
(9, '62-ERG-KO', '2017-12-01', 'Robotic', 'ERG', 'Undangan Rapat', '-'),
(10, '63-ERG-KO', '2017-12-07', 'Refactory', 'ERG', 'Pemberitahuan', '-'),
(11, '64-ERG-KO', '2017-12-02', 'YES UNIKOM', 'ERG', 'Undangan ', '-'),
(12, '65-ERG-KO', '2017-12-01', 'PERSIB', 'ERG', 'Undangan', '-'),
(13, '66-ERG-KO', '2017-12-01', 'BEM UNIKOM', 'ERG', 'Rapat Divisi', '-'),
(14, '67-ERG-KO', '2017-12-01', 'BEM UNIKOM', 'ERG', 'Undangan Kongres', '-'),
(15, '67-ERG-KO', '2017-12-01', 'UNPAD', 'UNIKOM', 'Undangan Dies natalis', '-'),
(16, '98-ERG-34', '2017-12-01', 'Agun', 'Sandi', 'Tugas', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tolensi_rapat`
--

CREATE TABLE IF NOT EXISTS `tolensi_rapat` (
`id` int(11) NOT NULL,
  `waktu` date NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `pimpinan` varchar(255) NOT NULL,
  `agenda` varchar(255) NOT NULL,
  `kehadiran` int(11) NOT NULL,
  `ringkasan` text NOT NULL,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tolensi_rapat`
--

INSERT INTO `tolensi_rapat` (`id`, `waktu`, `tempat`, `pimpinan`, `agenda`, `kehadiran`, `ringkasan`, `lampiran`) VALUES
(1, '2017-11-29', 'LAB ERG UNIKOM', 'Iqbal Syahrul', 'Rapat PKM', 20, 'asasas', '-');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `active` enum('0','1') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `active`) VALUES
(1, 'kioskaryawan', '5887685f0a63c736cbbf45dfebb771e3', 'user', '1'),
(2, 'kiosmanager', '5887685f0a63c736cbbf45dfebb771e3', 'admin', '1'),
(3, 'admin', '0192023a7bbd73250516f069df18b500', 'admin', '1'),
(4, 'user', '6ad14ba9986e3615423dfca256d04e3f', 'user', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tolensi_rapat`
--
ALTER TABLE `tolensi_rapat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tolensi_rapat`
--
ALTER TABLE `tolensi_rapat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
