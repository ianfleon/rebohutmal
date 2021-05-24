-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 01:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farah_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `bibit`
--

CREATE TABLE `bibit` (
  `id` int(11) NOT NULL,
  `nama_bibit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bibit`
--

INSERT INTO `bibit` (`id`, `nama_bibit`) VALUES
(1, 'Kayu merah'),
(2, 'Bintanggur'),
(3, 'Makila'),
(4, 'Nani air'),
(5, 'Siki'),
(6, 'Meranti'),
(7, 'Manggis hutan'),
(8, 'Halaor'),
(9, 'Kayu burung'),
(10, 'Matoa');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(1, 'Budi', 'budi@gmail.com', 'Tolong lihat hutan saya di seram pak!', '2021-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_hutan_lindung` varchar(100) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `jenis_pohon` varchar(50) NOT NULL,
  `jenis_satwa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_dan_info_hutan`
--

CREATE TABLE `lokasi_dan_info_hutan` (
  `id` int(11) NOT NULL,
  `nama_hutan_lindung` text NOT NULL,
  `link_maps` varchar(500) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi_dan_info_hutan`
--

INSERT INTO `lokasi_dan_info_hutan` (`id`, `nama_hutan_lindung`, `link_maps`, `info`) VALUES
(9, 'HL Gn Tipukekene', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2038609.925108798!2d127.88678963161705!3d-3.664672866055733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ceb72d255d343%3A0x69ff574b116c5785!2sKabupaten%20Maluku%20Tengah%2C%20Maluku!5e0!3m2!1sid!2sid!4v1621748078058!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Segera'),
(11, 'HL Gunung Kalapain', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2038609.925108798!2d127.88678963161705!3d-3.664672866055733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ceb72d255d343%3A0x69ff574b116c5785!2sKabupaten%20Maluku%20Tengah%2C%20Maluku!5e0!3m2!1sid!2sid!4v1621748078058!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Wajib');

-- --------------------------------------------------------

--
-- Table structure for table `reboisasi`
--

CREATE TABLE `reboisasi` (
  `id` int(11) NOT NULL,
  `nama_hutan` varchar(100) NOT NULL,
  `jenis_bibit` varchar(100) NOT NULL,
  `jumlah_bibit` int(50) NOT NULL,
  `jenis_kerusakan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reboisasi`
--

INSERT INTO `reboisasi` (`id`, `nama_hutan`, `jenis_bibit`, `jumlah_bibit`, `jenis_kerusakan`, `tanggal`) VALUES
(6, 'HL Gunung Kalapain', 'Kayu Merah', 10, 'Penebangan Liar', '2021-05-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bibit`
--
ALTER TABLE `bibit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi_dan_info_hutan`
--
ALTER TABLE `lokasi_dan_info_hutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reboisasi`
--
ALTER TABLE `reboisasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bibit`
--
ALTER TABLE `bibit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasi_dan_info_hutan`
--
ALTER TABLE `lokasi_dan_info_hutan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reboisasi`
--
ALTER TABLE `reboisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
