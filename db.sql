-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2023 at 12:17 PM
-- Server version: 8.0.30
-- PHP Version: 8.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_praktik`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_dosen`
--

CREATE TABLE IF NOT EXISTS `t_dosen` (
  `idDosen` int NOT NULL AUTO_INCREMENT,
  `namaDosen` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `noHP` varchar(25) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`idDosen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Truncate table before insert `t_dosen`
--

TRUNCATE TABLE `t_dosen`;
--
-- Dumping data for table `t_dosen`
--

INSERT INTO `t_dosen` (`idDosen`, `namaDosen`, `noHP`) VALUES
(3, 'Bagas Kurniawan, M.Kom.', '087777121313');

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE IF NOT EXISTS `t_login` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `tgl_registrasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Truncate table before insert `t_login`
--

TRUNCATE TABLE `t_login`;
-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `t_mahasiswa` (
  `npm` int NOT NULL,
  `namaMhs` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `prodi` varchar(25) COLLATE utf8mb3_unicode_ci NOT NULL,
  `alamat` varchar(70) COLLATE utf8mb3_unicode_ci NOT NULL,
  `noHP` varchar(25) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`npm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Truncate table before insert `t_mahasiswa`
--

TRUNCATE TABLE `t_mahasiswa`;
-- --------------------------------------------------------

--
-- Table structure for table `t_matakuliah`
--

CREATE TABLE IF NOT EXISTS `t_matakuliah` (
  `kodeMK` int NOT NULL,
  `namaMK` varchar(70) COLLATE utf8mb3_unicode_ci NOT NULL,
  `sks` int NOT NULL,
  `jam` int NOT NULL,
  PRIMARY KEY (`kodeMK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Truncate table before insert `t_matakuliah`
--

TRUNCATE TABLE `t_matakuliah`;
-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE IF NOT EXISTS `t_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_email` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `surename` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Truncate table before insert `t_users`
--

TRUNCATE TABLE `t_users`;
--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`id`, `user_email`, `user_password`, `surename`) VALUES
(1, 'fahrul@gmail.com', '17ba52910a437254d5adef280f71b6ce', 'Fahrul Roziqin Akbar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
