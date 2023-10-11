-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 03:36 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `nama`, `username`, `password`) VALUES
(1, 'Muhammad Al farisi', 'aris', 'aris'),
(2, 'Muhammad Irfan', 'irfan', 'irfan');

-- --------------------------------------------------------

--
-- Table structure for table `iterasi`
--

CREATE TABLE IF NOT EXISTS `iterasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `it1` float NOT NULL,
  `it2` float NOT NULL,
  `it3` float NOT NULL,
  `it4` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `iterasi`
--

INSERT INTO `iterasi` (`id`, `it1`, `it2`, `it3`, `it4`) VALUES
(22, 423.214, 423.214, 660, 540),
(23, 423.214, 423.214, 360, 240),
(24, 423.214, 423.214, 360, 240),
(25, 423.214, 423.214, 360, 240),
(26, 423.214, 423.214, 360, 240),
(27, 400, 200, 156.429, 156.429),
(28, 310, 290, 182.143, 182.143),
(29, 500, 128.571, 100, 128.571),
(30, 423.214, 423.214, 360, 240);

-- --------------------------------------------------------

--
-- Table structure for table `maxmin`
--

CREATE TABLE IF NOT EXISTS `maxmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persediaanmax` float NOT NULL,
  `persediaanmin` float NOT NULL,
  `permintaanmax` float NOT NULL,
  `permintaanmin` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `maxmin`
--

INSERT INTO `maxmin` (`id`, `persediaanmax`, `persediaanmin`, `permintaanmax`, `permintaanmin`) VALUES
(33, 0.7, 0.3, 0.910714, 0.0892857),
(34, 0.7, 0.3, 0.910714, 0.0892857),
(35, 0.7, 0.3, 0.910714, 0.0892857),
(36, 0.7, 0.3, 0.910714, 0.0892857),
(37, 0.7, 0.3, 0.910714, 0.0892857),
(38, 0.166667, 0.833333, 0.0214286, 0.978571),
(39, 0.466667, 0.533333, 0.107143, 0.892857),
(40, -0.166667, 1.16667, -0.0714286, 1.07143),
(41, 0.7, 0.3, 0.910714, 0.0892857);

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE IF NOT EXISTS `produksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idadmin` int(11) NOT NULL,
  `permintaan` int(11) NOT NULL,
  `persediaan` int(11) NOT NULL,
  `produksi` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id`, `idadmin`, `permintaan`, `persediaan`, `produksi`, `tanggal`) VALUES
(1, 1, 120, 25, 250, '2020-02-28 00:00:00'),
(2, 1, 200, 30, 300, '2020-02-29 00:00:00'),
(3, 1, 189, 35, 350, '2020-03-01 00:00:00'),
(4, 1, 350, 25, 250, '2020-03-02 00:00:00'),
(5, 1, 348, 45, 450, '2020-03-03 00:00:00'),
(6, 1, 356, 37, 370, '2020-03-04 00:00:00'),
(7, 1, 189, 15, 150, '2020-03-05 00:00:00'),
(8, 1, 230, 20, 200, '2020-03-06 00:00:00'),
(9, 1, 330, 25, 250, '2020-03-07 00:00:00'),
(10, 1, 240, 30, 300, '2020-03-08 00:00:00'),
(11, 1, 350, 25, 250, '2020-03-09 00:00:00'),
(12, 1, 198, 30, 300, '2020-03-10 00:00:00'),
(13, 1, 310, 27, 270, '2020-03-11 00:00:00'),
(14, 1, 310, 30, 312, '2020-03-12 00:00:00'),
(15, 1, 198, 35, 350, '2020-03-13 00:00:00'),
(16, 1, 310, 25, 250, '2020-03-14 00:00:00'),
(17, 1, 329, 42, 420, '2020-03-15 00:00:00'),
(18, 1, 275, 35, 350, '2020-03-16 00:00:00'),
(19, 1, 400, 20, 200, '2020-03-17 00:00:00'),
(20, 1, 350, 45, 450, '2020-03-18 00:00:00'),
(21, 1, 195, 25, 250, '2020-03-19 00:00:00'),
(22, 1, 195, 20, 210, '2020-03-20 00:00:00'),
(23, 1, 400, 35, 350, '2020-03-21 00:00:00'),
(24, 1, 345, 40, 400, '2020-03-22 00:00:00'),
(25, 1, 290, 30, 300, '2020-03-23 00:00:00'),
(26, 1, 290, 30, 300, '2020-03-24 00:00:00'),
(27, 1, 398, 39, 390, '2020-03-25 00:00:00'),
(28, 1, 288, 20, 200, '2020-03-26 00:00:00'),
(29, 1, 187, 18, 180, '2020-03-27 00:00:00'),
(30, 1, 289, 27, 300, '2020-03-28 00:00:00'),
(73, 2, 375, 36, 339, '2020-04-30 22:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE IF NOT EXISTS `rule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rule1` float NOT NULL,
  `rule2` float NOT NULL,
  `rule3` float NOT NULL,
  `rule4` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id`, `rule1`, `rule2`, `rule3`, `rule4`) VALUES
(25, 0.0892857, 0.0892857, 0.7, 0.3),
(26, 0.0892857, 0.0892857, 0.7, 0.3),
(27, 0.0892857, 0.0892857, 0.7, 0.3),
(28, 0.0892857, 0.0892857, 0.7, 0.3),
(29, 0.0892857, 0.0892857, 0.7, 0.3),
(30, 0.166667, 0.833333, 0.0214286, 0.0214286),
(31, 0.466667, 0.533333, 0.107143, 0.107143),
(32, -0.166667, 1.07143, -0.166667, -0.0714286),
(33, 0.0892857, 0.0892857, 0.7, 0.3);
