-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 08:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadimasak`
--

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(10) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_kecamatan`, `kecamatan`, `biaya`) VALUES
(110, 'klojen', 7000),
(111, 'lowokwaru', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_resep` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `namaresep` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `ongkir` int(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_resep`, `id_user`, `nama`, `alamat`, `namaresep`, `harga`, `ongkir`, `qty`, `tanggal_pesan`, `status`) VALUES
(37, 5, 5, 'ardia', 'jln. bendungan sutami', 'Bakso Sapi', 57000, 7000, 1, '2017-12-11', 'sudah dibayar'),
(38, 6, 5, 'ardia', 'jln. terusan cikampek kav 1', 'Sate Padang', 38000, 8000, 1, '2017-12-11', 'sudah dibayar'),
(39, 5, 3, 'Putrianii', 'Jln. Sigura-Gura', 'Bakso Sapi', 57000, 7000, 1, '2017-12-14', 'sudah dibayar'),
(40, 5, 3, 'Putrianii', 'Jln. Sigura-Gura', 'Bakso Sapi', 57000, 7000, 1, '2017-12-19', 'sudah dibayar'),
(41, 6, 3, 'Putrianii', 'Jln. Sigura-Gura', 'Sate Padang', 67000, 7000, 2, '2017-12-19', 'sudah dibayar'),
(42, 5, 8, 'ana', 'malang', 'Bakso Sapi', 157000, 7000, 3, '2018-05-11', 'sudah dibayar'),
(43, 6, 8, 'ana', 'malang', 'Sate Padang', 67000, 7000, 2, '2018-05-11', 'sudah dibayar'),
(44, 5, 9, 'lucinta', 'malang', 'Bakso Sapi', 57000, 7000, 1, '2018-05-11', 'sudah dibayar'),
(45, 6, 9, 'lucinta', 'malang', 'Sate Padang', 67000, 7000, 2, '2018-05-11', 'sudah dibayar'),
(46, 6, 9, 'lucinta', 'malang', 'Sate Padang', 37000, 7000, 1, '2018-05-11', 'sudah dibayar'),
(47, 6, 9, 'lucinta', 'malang', 'Sate Padang', 37000, 7000, 1, '2018-05-11', 'sudah dibayar'),
(48, 6, 9, 'lucinta', 'malang', 'Sate Padang', 37000, 7000, 1, '2018-05-11', 'sudah dibayar'),
(49, 6, 9, 'lucinta', 'malang', 'Sate Padang', 67000, 7000, 2, '2018-05-11', 'sudah dibayar'),
(50, 6, 9, 'lucinta', 'malang', 'Sate Padang', 67000, 7000, 2, '2018-05-11', 'sudah dibayar'),
(51, 6, 9, 'lucinta', 'malang', 'Sate Padang', 67000, 7000, 2, '2018-05-11', 'sudah dibayar'),
(52, 6, 9, 'lucinta', 'malang', 'Sate Padang', 67000, 7000, 2, '2018-05-11', 'sudah dibayar'),
(53, 6, 9, 'lucinta', 'malang', 'Sate Padang', 67000, 7000, 2, '2018-05-12', 'sudah dibayar'),
(54, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'sudah dibayar'),
(55, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'sudah dibayar'),
(56, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'sudah dibayar'),
(57, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(58, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'sudah dibayar'),
(59, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(60, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'sudah dibayar'),
(61, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'sudah dibayar'),
(62, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'sudah dibayar'),
(63, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'sudah dibayar'),
(64, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'sudah dibayar'),
(65, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(66, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(67, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(68, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(69, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(70, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(71, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(72, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(73, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(74, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(75, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(76, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(77, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(78, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(79, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(80, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(81, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(82, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(83, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(84, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(86, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(90, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(94, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(97, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(98, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(99, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(100, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(101, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(102, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(103, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(104, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(105, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(106, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(107, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(108, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(109, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(110, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(111, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(112, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(113, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(114, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(115, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(116, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(117, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(118, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(119, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(120, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(121, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(122, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(123, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(124, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(126, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(127, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(128, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(129, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(130, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(131, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(132, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(133, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(134, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(135, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(136, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(137, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(138, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(139, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(140, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(141, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(142, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(143, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(144, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(145, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(146, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(147, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(148, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(149, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(150, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(151, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(152, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(153, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(154, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(155, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(156, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(157, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(158, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(159, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(166, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(168, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(171, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(172, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(173, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(174, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(175, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(176, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(177, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(178, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(179, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(180, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(181, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(182, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(183, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(184, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(185, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(186, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(187, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(188, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(189, 6, 38, 'Fay', 'Malang', 'Sate Padang', 38000, 8000, 1, '2018-05-14', 'belum dibayar'),
(190, 6, 43, 'ana', 'solo', 'Sate Padang', 67000, 7000, 2, '2018-05-23', 'belum dibayar'),
(191, 225, 51, 'lucinta', '', 'Steak Daging', 3207000, 7000, 4, '2018-12-15', 'sudah dibayar'),
(192, 225, 51, 'lucinta', 'solo', 'Steak Daging', 80007000, 7000, 100, '2018-12-15', 'belum dibayar'),
(193, 225, 51, 'lucinta', 'solo', 'Steak Daging', 807000, 7000, 1, '2018-12-15', 'belum dibayar'),
(194, 225, 51, 'lucinta', 'solo', 'Steak Daging', 807000, 7000, 1, '2018-12-15', 'belum dibayar');

--
-- Triggers `pemesanan`
--
DELIMITER $$
CREATE TRIGGER `update_stock` AFTER INSERT ON `pemesanan` FOR EACH ROW UPDATE resep SET stock = stock - new.qty where id_resep = new.id_resep
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `namaresep` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `id_user`, `namaresep`, `harga`, `kategori`, `stock`, `deskripsi`, `gambar`) VALUES
(5, 1, 'Bakso Sapi', 50000, 'Indonesia', 1000, 'Resep Bakso Sapi yang memiliki bahan yang lengkap dan berkualitas.', 'assets/images/resep/resep_Bakso Sapi.jpg'),
(6, 1, 'Sate Padang', 30000, 'Indonesia', 1000, 'Resep Sate Padang yang memiliki bahan yang berkualitas', 'assets/images/resep/resep_Sate Padang.jpg'),
(223, 1, 'FuyungHai', 50000, 'Cina', 100, 'telur dengan balutan kuah asam manis yang sedap', 'assets/images/resep/resep_FuyungHai.jpg'),
(225, 1, 'Steak Daging', 800000, 'Western', -100, 'Daging impor yang dimakan serasa di surga', 'assets/images/resep/resep_Steak Daging.jpg'),
(226, 48, 'bubur', 40000, 'Indonesia', 5, 'bubur dengan taburan ayam cincang yang menggugah selera saat sarapan', 'assets/images/resep/resep_bubur.jpg'),
(233, 1, 'kimbab', 50000, 'Korea', 20, 'enak', 'assets/images/resep/resep_kimbab.jpg'),
(236, 1, 'pasta', 30000, 'Western', 10, 'enak', 'assets/images/resep/resep_pasta.jpg'),
(237, 1, 'steak', 50000, 'Western', 10, 'enak', 'assets/images/resep/resep_steak.jpg'),
(241, 1, 'Sate Ponorogo', 40000, 'Indonesia', 10, 'enak', 'assets/images/resep/resep_Sate Ponorogo.jpg'),
(242, 1, 'Sate bebek', 50000, 'Indonesia', 10, 'enak', 'assets/images/resep/resep_Sate bebek.jpg'),
(243, 1, 'Ayam Kungpow', 40000, 'Cina', 20, 'enak', 'assets/images/resep/resep_Ayam Kungpow.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(12) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `first_name`, `last_name`, `alamat`, `kecamatan`, `email`, `password`, `mobile_number`, `level`) VALUES
(1, 'admin', 'Ardia', 'RP', '', '', 'ardia@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '081213141516', 'Admin'),
(3, 'putriani1111', 'Putrianii', 'Puput', 'Jln. Sigura-Gura', 'Klojen', 'pupud@gmail.com', '9b31faf63880fbcad2fc51b69a45ebba', '089687123476', 'Member'),
(4, 'kurir1', 'Bambang', 'Sudarso', '', '', 'sudar@gmail.com', 'a9711cbb2e3c2d5fc97a63e45bbe5076', '089687123476', 'Kurir'),
(45, 'fay', '', '', '', 'Klojen', '', '26657d5ff9020d2abefe558796b99584', '', 'Member'),
(46, '', 'ana ', 'kusuma', '', 'Klojen', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'Member'),
(47, '', 'ana', 'kusuma', 'malang', 'Klojen', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'Member'),
(48, 'ana', 'ana', 'kusuma', 'solo', 'Klojen', 'anakusuma@gmail.com', '202cb962ac59075b964b07152d234b70', '085725669142', 'Kurir'),
(49, '', 'lucinta', 'luna', 'solo', 'Lowokwaru', 'aaaa', 'd41d8cd98f00b204e9800998ecf8427e', '', 'Member'),
(50, '', 'lucinta', 'luna', 'solo', 'Klojen', '', '698d51a19d8a121ce581499d7b701668', '', 'Member'),
(51, 'lucinta', 'lucinta', 'luna', 'solo', 'Klojen', 'anann', '698d51a19d8a121ce581499d7b701668', '3232323223', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `pemesanan_ibfk_1` (`id_resep`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_resep`) REFERENCES `resep` (`id_resep`);

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
