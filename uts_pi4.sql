-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2013 at 06:28 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uts_pi4`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangmasuks`
--

CREATE TABLE IF NOT EXISTS `barangmasuks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `suplier` text NOT NULL,
  `barang` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `barangmasuks`
--

INSERT INTO `barangmasuks` (`id`, `suplier`, `barang`, `tanggal`, `jumlah`, `created_at`, `updated_at`) VALUES
(7, 'Komputer', 'Laptop', '2013-05-02 00:00:00', '50', '2013-05-29 15:25:22', '2013-05-29 15:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE IF NOT EXISTS `barangs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` text NOT NULL,
  `nama` text NOT NULL,
  `harga` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `kode`, `nama`, `harga`, `created_at`, `updated_at`) VALUES
(4, '182', 'Acer', '5000.000', '2013-05-29 08:19:53', '2013-05-29 08:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_migrations`
--

CREATE TABLE IF NOT EXISTS `laravel_migrations` (
  `bundle` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`bundle`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laravel_migrations`
--

INSERT INTO `laravel_migrations` (`bundle`, `name`, `batch`) VALUES
('application', '2013_04_29_160133_create_mahasiswas', 1),
('application', '2013_04_30_185419_create_nilais', 1),
('application', '2013_05_22_034749_create_users', 1),
('application', '2013_05_22_034804_create_supliers', 1),
('application', '2013_05_22_034820_create_barangs', 1),
('application', '2013_05_22_034829_create_barang-masuks', 1),
('application', '2013_05_22_043911_create_supliers', 2),
('application', '2013_05_29_115916_create_barangmasuks', 3);

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE IF NOT EXISTS `supliers` (
  `id_sup` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id` text NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id_sup`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`id_sup`, `id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(5, '007', 'James Bond', 'Jakarta', '2013-05-29 08:21:24', '2013-05-29 08:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2a$08$bDBjck9BUTlWaU54MmxtauogWPmD8tq.P.9BIhOlcrPmzmilL8DyW', 'Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
