-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2017 at 11:09 AM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_kredit`
--

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE IF NOT EXISTS `keluarga` (
  `Id_keluarga` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(20) NOT NULL,
  `Alamat` text NOT NULL,
  `NoKK` varchar(15) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `Pendidikan_t` varchar(50) NOT NULL,
  `Pekerjaan` varchar(15) NOT NULL,
  `Jumla_anak` varchar(20) NOT NULL,
  `Pendapatan` varchar(50) NOT NULL,
  `Status_rumah` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_keluarga`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`Id_keluarga`, `Nama`, `Alamat`, `NoKK`, `jk`, `Pendidikan_t`, `Pekerjaan`, `Jumla_anak`, `Pendapatan`, `Status_rumah`) VALUES
(38, 'Jasman', 'Padang timur', '334567', 'Laki-laki', 'BPKB Motor', 'Petani', '1 orang', '3.000.000 > P >= 2.100.000', 'P <=30.000.000'),
(37, 'Zulkifli', 'Solok', '675675', 'Laki-laki', 'BPKB Mobil', 'P.Swasta', '4 orang', '4.000.000 > P >= 3.100.000', '80.000.000 > P >= 50.000.000'),
(36, 'Bujang', 'Pariaman', '46545', 'Laki-laki', 'BPKB Mobil', 'P.Swasta', '3 orang', 'P <= 4.100.000', '50.000.000 > P >=30.000.000'),
(35, 'Tando', 'Padang', '545564', 'Laki-laki', 'BPKB Motor', 'P.Swasta', '2 orang', '4.000.000 > P >= 3.100.000', 'P <=30.000.000'),
(34, 'Yurnalis', 'Padang Barat', '078567', 'Perempuan', 'BPKB Motor', 'Honorer', '1 orang', 'P <= 1.000.000', 'P <=30.000.000'),
(33, 'Syafri', 'Padang Pariaman', '00977', 'Laki-laki', 'Sertifikat rumah', 'Petani', '>= 5 orang', '2.000.000 > P >=1.100.000', '80.000.000 > P >= 50.000.000'),
(31, 'Syafrizal', 'Padang barat', '45446456', 'Laki-laki', 'Sertifikat tanah', 'Petani', '3 orang', '2.000.000 > P >=1.100.000', '80.000.000 > P >= 50.000.000'),
(32, 'Mansyur', 'Padang timur', '99076', 'Laki-laki', 'Sertifikat tanah', 'Petani', '2 orang', '2.000.000 > P >=1.100.000', '50.000.000 > P >=30.000.000'),
(26, 'Oyon', 'JL.Khatib Sulaiman', '45678', 'Laki-laki', 'BPKB Motor', 'Honorer', '3 orang', 'P <= 1.000.000', 'P <=30.000.000'),
(39, 'Suardi', 'Padang barat', '3445456', 'Laki-laki', 'BPKB Motor', 'Petani', '1 orang', '2.000.000 > P >=1.100.000', 'P <=30.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `kd_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`kd_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`) VALUES
(11, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbmatrik`
--

CREATE TABLE IF NOT EXISTS `tbmatrik` (
  `idMatrik` int(3) NOT NULL AUTO_INCREMENT,
  `id_keluarga` int(11) NOT NULL,
  `Kriteria1` double NOT NULL,
  `Kriteria2` double NOT NULL,
  `Kriteria3` double NOT NULL,
  `Kriteria4` double NOT NULL,
  `Kriteria5` double NOT NULL,
  `nilai` double NOT NULL,
  PRIMARY KEY (`idMatrik`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `tbmatrik`
--

INSERT INTO `tbmatrik` (`idMatrik`, `id_keluarga`, `Kriteria1`, `Kriteria2`, `Kriteria3`, `Kriteria4`, `Kriteria5`, `nilai`) VALUES
(93, 39, 2, 2, 5, 2, 5, 12.2),
(92, 32, 2, 2, 4, 4, 4, 12.4),
(91, 31, 2, 2, 3, 4, 3, 11),
(90, 33, 2, 2, 1, 5, 3, 10.2),
(89, 34, 1, 1, 5, 2, 5, 10.4),
(88, 35, 4, 5, 4, 2, 5, 15.8),
(87, 36, 5, 5, 3, 3, 4, 16.2),
(86, 37, 4, 5, 2, 3, 3, 13.8),
(85, 38, 3, 2, 5, 2, 5, 13.2),
(84, 26, 1, 1, 3, 2, 5, 8.8);
