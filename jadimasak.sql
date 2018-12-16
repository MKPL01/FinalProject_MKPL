-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Des 2017 pada 14.49
-- Versi Server: 10.1.21-MariaDB
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
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(10) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id_kecamatan`, `kecamatan`, `biaya`) VALUES
(110, 'klojen', 7000),
(111, 'lowokwaru', 8000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
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
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_resep`, `id_user`, `nama`, `alamat`, `namaresep`, `harga`, `ongkir`, `qty`, `tanggal_pesan`, `status`) VALUES
(37, 5, 5, 'ardia', 'jln. bendungan sutami', 'Bakso Sapi', 57000, 7000, 1, '2017-12-11', 'sudah dibayar'),
(38, 6, 5, 'ardia', 'jln. terusan cikampek kav 1', 'Sate Padang', 38000, 8000, 1, '2017-12-11', 'belum dibayar'),
(39, 5, 3, 'Putrianii', 'Jln. Sigura-Gura', 'Bakso Sapi', 57000, 7000, 1, '2017-12-14', 'sudah dibayar'),
(40, 5, 3, 'Putrianii', 'Jln. Sigura-Gura', 'Bakso Sapi', 57000, 7000, 1, '2017-12-19', 'sudah dibayar'),
(41, 6, 3, 'Putrianii', 'Jln. Sigura-Gura', 'Sate Padang', 67000, 7000, 2, '2017-12-19', 'belum dibayar');

--
-- Trigger `pemesanan`
--
DELIMITER $$
CREATE TRIGGER `update_stock` AFTER INSERT ON `pemesanan` FOR EACH ROW UPDATE resep SET stock = stock - new.qty where id_resep = new.id_resep
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
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
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id_resep`, `id_user`, `namaresep`, `harga`, `kategori`, `stock`, `deskripsi`, `gambar`) VALUES
(5, 1, 'Bakso Sapi', 50000, 'Indonesia', 4, 'Resep Bakso Sapi yang memiliki bahan yang lengkap dan berkualitas.', 'assets/images/resep/resep_Bakso Sapi.jpg'),
(6, 1, 'Sate Padang', 30000, 'Indonesia', 1, 'Resep Sate Padang yang memiliki bahan yang berkualitas', 'assets/images/resep/resep_Sate Padang.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `first_name`, `last_name`, `alamat`, `kecamatan`, `email`, `password`, `mobile_number`, `level`) VALUES
(1, 'admin', 'Ardia', 'RP', '', '', 'ardia@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '081213141516', 'Admin'),
(3, 'putriani1111', 'Putrianii', 'Puput', 'Jln. Sigura-Gura', 'Klojen', 'pupud@gmail.com', '9b31faf63880fbcad2fc51b69a45ebba', '089687123476', 'Member'),
(4, 'kurir1', 'Bambang', 'Sudarso', '', '', 'sudar@gmail.com', 'a9711cbb2e3c2d5fc97a63e45bbe5076', '089687123476', 'Kurir'),
(5, 'ardiaa', 'ardia', 'rp', 'jln. terusan cikampek kav 1', 'Lowokwaru', 'ardia@yahoo.com', 'a32f675e7c77e330cc3e1aae8a8bc4f4', '02939495555', 'Member'),
(6, 'femilia', 'femi', 'nopianti', 'malang', 'Klojen', 'femi@gmail.com', '5c8e82f0bdac09f37b0111c79f1fe0fa', '09888', 'Member');

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
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_resep`) REFERENCES `resep` (`id_resep`);

--
-- Ketidakleluasaan untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
