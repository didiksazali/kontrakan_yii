-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 10:26 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kontrakan_yii`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `kode_kamar` varchar(5) NOT NULL,
  `nama_kamar` varchar(35) NOT NULL,
  `tarif_normal` int(10) NOT NULL,
  `tarif_khusus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`kode_kamar`, `nama_kamar`, `tarif_normal`, `tarif_khusus`) VALUES
('1235', 'Kamar Pria Kelas 2', 27000, 18000),
('1245', 'kamar perempuan Ac', 30000, 250000),
('2345', 'Kamar Wanita Kelas 1', 32000, 28000),
('2346', 'Kamar Wanita Kelas 2', 29000, 26000),
('445', 'Kamar Pria AC', 50000, 45000),
('4567', 'kamar perempuan Ac', 400000, 100000),
('7778', 'kamar perempuan', 500000, 400000);

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE IF NOT EXISTS `orang` (
`id_orang` int(11) NOT NULL,
  `nama_orang` varchar(35) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`id_orang`, `nama_orang`, `jenis_kelamin`) VALUES
(6, 'Didik S', 'Laki-laki'),
(7, 'Ratna Yulia', 'Perempuan'),
(15, 'Novella', 'Perempuan'),
(22, 'Didik Sazali', 'Laki-laki'),
(26, 'Ratna Yulia', 'Perempuan'),
(27, 'Novella Ayu Astuti', 'Perempuan'),
(28, 'supardi', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(11) NOT NULL,
  `id_orang` int(11) NOT NULL,
  `kode_kamar` varchar(5) NOT NULL,
  `lama_inap` int(11) NOT NULL,
  `biaya_tambahan` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_orang`, `kode_kamar`, `lama_inap`, `biaya_tambahan`) VALUES
(2, 7, '2345', 12, 10000),
(14, 15, '2346', 3, 20000),
(20, 7, '2346', 5, 5000),
(28, 27, '2345', 11, 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
 ADD PRIMARY KEY (`kode_kamar`), ADD KEY `kode_kamar` (`kode_kamar`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
 ADD PRIMARY KEY (`id_orang`), ADD KEY `id_jenis_kelamin_2` (`jenis_kelamin`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `id_orang` (`id_orang`), ADD KEY `kode_kamar` (`kode_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
MODIFY `id_orang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_orang`) REFERENCES `orang` (`id_orang`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_kamar`) REFERENCES `kamar` (`kode_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
