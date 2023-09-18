-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 05:09 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moora-nedika`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisis`
--

CREATE TABLE `analisis` (
  `id_analisis` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_proses` varchar(125) NOT NULL,
  `absensi` int(11) NOT NULL,
  `masa_kerja` int(11) NOT NULL,
  `kedisiplinan` int(11) NOT NULL,
  `target_kerja` int(11) NOT NULL,
  `hasil` double NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisis`
--

INSERT INTO `analisis` (`id_analisis`, `id_karyawan`, `id_user`, `tgl_proses`, `absensi`, `masa_kerja`, `kedisiplinan`, `target_kerja`, `hasil`, `approved`) VALUES
(1, 1, 1, '2023-09-15', 3, 4, 3, 1, 0.3005, 0),
(2, 2, 1, '2023-09-15', 2, 4, 3, 4, 0.4046, 0),
(3, 3, 1, '2023-09-15', 4, 3, 1, 4, 0.4162, 0),
(4, 4, 1, '2023-09-15', 1, 2, 4, 1, 0.2075, 0),
(5, 5, 1, '2023-09-15', 3, 4, 1, 4, 0.3803, 0),
(6, 6, 1, '2023-09-15', 3, 3, 2, 3, 0.2928, 0),
(7, 7, 1, '2023-09-15', 2, 3, 2, 4, 0.3114, 0),
(8, 8, 1, '2023-09-15', 1, 1, 1, 1, 0.0381, 0),
(9, 9, 1, '2023-09-15', 4, 1, 4, 3, 0.4434, 0),
(10, 10, 1, '2023-09-15', 1, 1, 3, 4, 0.2789, 0),
(11, 11, 1, '2023-09-15', 2, 1, 3, 3, 0.2379, 0),
(12, 12, 1, '2023-09-15', 2, 3, 4, 4, 0.4321, 0),
(13, 13, 1, '2023-09-15', 3, 3, 1, 4, 0.3374, 0),
(14, 14, 1, '2023-09-15', 2, 4, 1, 2, 0.1958, 0),
(15, 15, 1, '2023-09-15', 2, 1, 2, 4, 0.2624, 0),
(16, 16, 1, '2023-09-15', 2, 2, 4, 3, 0.3267, 0),
(17, 17, 1, '2023-09-15', 2, 2, 4, 4, 0.4015, 0),
(18, 18, 1, '2023-09-15', 3, 2, 2, 4, 0.337, 0),
(19, 19, 1, '2023-09-15', 4, 2, 2, 2, 0.2875, 0),
(20, 20, 1, '2023-09-15', 3, 3, 3, 2, 0.2897, 0),
(21, 21, 1, '2023-09-15', 3, 1, 2, 4, 0.3186, 0),
(22, 22, 1, '2023-09-15', 4, 3, 4, 4, 0.5672, 0),
(23, 23, 1, '2023-09-15', 2, 3, 3, 1, 0.2014, 0),
(24, 24, 1, '2023-09-15', 3, 3, 2, 4, 0.3676, 0),
(25, 25, 1, '2023-09-15', 4, 4, 2, 3, 0.4144, 0),
(26, 26, 1, '2023-09-15', 3, 1, 4, 2, 0.3112, 0),
(27, 27, 1, '2023-09-15', 4, 1, 3, 3, 0.3729, 0),
(28, 28, 1, '2023-09-15', 3, 2, 4, 4, 0.4578, 0),
(29, 29, 1, '2023-09-15', 1, 1, 3, 4, 0.2789, 0),
(30, 30, 1, '2023-09-15', 2, 3, 3, 1, 0.2014, 0),
(31, 31, 1, '2023-09-15', 3, 2, 4, 1, 0.2975, 0),
(32, 32, 1, '2023-09-15', 1, 2, 3, 4, 0.2973, 0),
(33, 33, 1, '2023-09-15', 1, 2, 1, 4, 0.2168, 0),
(34, 34, 1, '2023-09-15', 3, 2, 2, 3, 0.2622, 0),
(35, 35, 1, '2023-09-15', 3, 3, 4, 2, 0.3602, 0),
(36, 36, 1, '2023-09-15', 2, 4, 4, 1, 0.3147, 0),
(37, 37, 1, '2023-09-15', 4, 2, 2, 2, 0.2875, 0),
(38, 38, 1, '2023-09-15', 1, 1, 4, 4, 0.3494, 0),
(39, 39, 1, '2023-09-15', 1, 2, 1, 2, 0.0886, 0),
(40, 40, 1, '2023-09-15', 4, 3, 2, 4, 0.4464, 0),
(41, 41, 1, '2023-09-15', 3, 2, 1, 2, 0.1786, 0),
(42, 42, 1, '2023-09-15', 4, 3, 4, 4, 0.5672, 0),
(43, 43, 1, '2023-09-15', 2, 2, 2, 2, 0.1525, 0),
(44, 44, 1, '2023-09-15', 1, 3, 2, 4, 0.2776, 0),
(45, 45, 1, '2023-09-15', 3, 2, 2, 3, 0.2622, 0),
(46, 46, 1, '2023-09-15', 3, 1, 1, 3, 0.2136, 0),
(47, 47, 1, '2023-09-15', 4, 2, 2, 2, 0.2875, 0),
(48, 48, 1, '2023-09-15', 3, 2, 2, 2, 0.2088, 0),
(49, 49, 1, '2023-09-15', 1, 1, 1, 4, 0.1984, 0),
(50, 50, 1, '2023-09-15', 3, 2, 1, 3, 0.232, 0),
(51, 51, 1, '2023-09-15', 1, 2, 4, 1, 0.2075, 0),
(52, 52, 1, '2023-09-15', 1, 3, 1, 4, 0.2474, 0),
(53, 53, 1, '2023-09-15', 4, 3, 1, 3, 0.3414, 0),
(54, 54, 1, '2023-09-15', 2, 4, 3, 4, 0.4046, 0),
(55, 55, 1, '2023-09-15', 4, 4, 1, 3, 0.3842, 0),
(56, 56, 1, '2023-09-15', 3, 4, 3, 4, 0.4608, 0),
(57, 57, 1, '2023-09-15', 4, 1, 3, 4, 0.4477, 0),
(58, 58, 1, '2023-09-15', 4, 2, 4, 4, 0.5365, 0),
(59, 59, 1, '2023-09-15', 4, 2, 1, 1, 0.2253, 0),
(60, 60, 1, '2023-09-15', 4, 2, 1, 3, 0.3108, 0),
(61, 61, 1, '2023-09-15', 4, 4, 1, 2, 0.3308, 0),
(62, 62, 1, '2023-09-15', 3, 3, 3, 4, 0.4179, 0),
(63, 63, 1, '2023-09-15', 4, 1, 1, 4, 0.3672, 0),
(64, 64, 1, '2023-09-15', 4, 3, 3, 2, 0.3685, 0),
(65, 65, 1, '2023-09-15', 2, 2, 2, 1, 0.1204, 0),
(66, 66, 1, '2023-09-15', 3, 4, 1, 4, 0.3803, 0),
(67, 67, 1, '2023-09-15', 3, 3, 2, 2, 0.2394, 0),
(68, 68, 1, '2023-09-15', 1, 2, 3, 3, 0.2225, 0),
(69, 69, 1, '2023-09-15', 4, 4, 3, 4, 0.5396, 0),
(70, 70, 1, '2023-09-15', 1, 3, 1, 2, 0.1192, 0),
(71, 71, 1, '2023-09-15', 4, 4, 4, 4, 0.61, 0),
(72, 72, 1, '2023-09-15', 3, 2, 3, 4, 0.3873, 0),
(73, 73, 1, '2023-09-15', 2, 3, 4, 2, 0.3039, 0),
(74, 74, 1, '2023-09-15', 3, 3, 3, 2, 0.2897, 0),
(75, 75, 1, '2023-09-15', 4, 2, 1, 4, 0.3856, 0),
(76, 76, 1, '2023-09-15', 4, 3, 3, 2, 0.3685, 0),
(77, 77, 1, '2023-09-15', 2, 4, 2, 2, 0.226, 0),
(78, 78, 1, '2023-09-15', 3, 4, 4, 2, 0.403, 0),
(79, 79, 1, '2023-09-15', 1, 1, 3, 3, 0.2041, 0),
(80, 80, 1, '2023-09-15', 3, 4, 3, 1, 0.3005, 0),
(81, 81, 1, '2023-09-15', 2, 1, 4, 3, 0.3083, 0),
(82, 82, 1, '2023-09-15', 3, 3, 1, 2, 0.2092, 0),
(83, 83, 1, '2023-09-15', 1, 2, 1, 2, 0.0886, 0),
(92, 84, 1, '2023-09-18', 4, 2, 4, 1, 0.3762, 0);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(125) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `no_hp_karyawan` varchar(15) NOT NULL,
  `alamat_karyawan` text NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `stat_analisis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `jk`, `no_hp_karyawan`, `alamat_karyawan`, `divisi`, `jabatan`, `stat_analisis`) VALUES
(1, ' Adit', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(2, ' Om', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(3, ' Adi', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(4, ' Soenoto', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(5, ' Ageng', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(6, ' Iman', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(7, ' Romli', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(8, ' Herdi', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(9, ' Sandy', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(10, ' Mia', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(11, ' Alfi', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(12, ' Haning', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(13, ' Titin', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(14, ' Dian', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(15, ' Novi', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(16, ' Yanti', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(17, ' Devi', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(18, ' Nova', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(19, ' Ratno', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(20, ' Ina', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(21, ' Fitri', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(22, ' Nenden', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(23, ' Nani', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(24, ' Een', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(25, ' Dicky', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(26, ' Eti', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(27, 'Kendy', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(28, ' Yuyus', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(29, ' Po Ella', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(30, ' AAN', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(31, ' Nyai', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(32, ' Yayat', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(33, ' Dede', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(34, ' Andi', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(35, ' Jari', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(36, ' Imas', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(37, ' Sapti', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(38, ' Yuyun', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(39, ' Kiki', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(40, ' Endang', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(41, 'Sum', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(42, ' Jejen', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(43, ' Onah', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(44, ' AAN', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(45, ' Nita', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(46, ' Ropi', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(47, ' Rudi', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(48, ' Ukin', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(49, ' Neneng', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(50, ' Cicih', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(51, ' Mimin', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(52, ' Titin', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(53, ' Ria', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(54, ' Agung', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(55, ' Dodi', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(56, ' Res', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(57, ' Diah', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(58, ' Dini', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(59, ' Nyai', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(60, ' Topan', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(61, ' Aef', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(62, ' Udin', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(63, ' Enah', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(64, ' Ati', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(65, ' Sair', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(66, ' Agung', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(67, ' Asep', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(68, ' Arul', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(69, ' Nia', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(70, ' Dian', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(71, ' Evi', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(72, ' Yeyet', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(73, ' Aris', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(74, ' Agung', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(75, ' Yayah', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(76, ' Fixsy', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(77, ' Tia', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(78, ' Dian', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(79, ' Imas', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(80, ' Eti', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(81, ' Udin', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(82, ' Lia', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(83, ' Didi', 'Laki - Laki', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1),
(84, ' Umi', 'Perempuan', '08998765456', 'Kuningan, Jawa Barat', 'Produksi', 'Staff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `range_awal` int(11) NOT NULL,
  `range_akhir` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `range_awal`, `range_akhir`, `type`) VALUES
(1, 'Sangat Baik', 80, 100, 1),
(2, 'Baik', 81, 70, 1),
(3, 'Cukup', 71, 60, 1),
(4, 'Kurang', 61, 50, 1),
(5, 'Sangat Baik', 0, 0, 2),
(6, 'Baik', 1, 1, 2),
(7, 'Cukup', 2, 2, 2),
(8, 'Kurang', 3, 3, 2),
(9, 'Sangat Baik', 0, 0, 3),
(10, 'Baik', 1, 1, 3),
(11, 'Cukup', 2, 2, 3),
(12, 'Kurang', 3, 3, 3),
(13, 'Sangat Baik', 4, 4, 4),
(14, 'Baik', 3, 3, 4),
(15, 'Cukup', 2, 2, 4),
(16, 'Kurang', 1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_hp`, `username`, `password`, `level_user`) VALUES
(1, 'HRD', 'Kuningan, Jawa Barat', '089987656543', 'admin', 'admin', 1),
(2, 'Kepala Pabrik', 'Kuningan, Jawa Barat', '089987656543', 'pimpinan', 'pimpinan', 2),
(3, 'Manager', 'Kuningan, Jawa Barat', '089876676765', 'manager', 'manager', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`id_analisis`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisis`
--
ALTER TABLE `analisis`
  MODIFY `id_analisis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
