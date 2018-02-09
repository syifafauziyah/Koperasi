-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Feb 2018 pada 02.50
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `no_anggota` int(255) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `no_rek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`no_anggota`, `nama_anggota`, `no_hp`, `alamat`, `bank`, `no_rek`) VALUES
(1, 'Fauzi', '089234', 'Tasik', 'Mandiri', '12345'),
(2, 'syifa fauziyah nurul islam', '0878222222', 'bandung', 'BNI', '44555'),
(3, 'ahsan nurrijal', '87654', 'Sukabumi', 'BCA', '888162'),
(4, 'faris almujadid', '908216', 'bandung', 'BRI', '08210'),
(5, 'rijal jaisyi', '21937', 'bandung', 'BCA', '90217'),
(6, 'fatimah lathifah', '92137', 'Jakarta', 'mandiri', '82319'),
(7, 'azizah', '823748', 'Bandung', 'BNI', '92310'),
(8, 'fadlan', '9238', 'Jakarta', 'Mandiri', '820137'),
(9, 'Malik', '290378', 'Bandung', 'BNI', '923710'),
(10, 'Afifah', '93489', 'Cirebon', 'BCA', '21434219');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(225) NOT NULL,
  `no_anggota` int(225) NOT NULL,
  `jml_terima` int(40) NOT NULL,
  `jml_pinjaman` int(40) NOT NULL,
  `bulan` int(100) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `no_anggota`, `jml_terima`, `jml_pinjaman`, `bulan`, `jenis`) VALUES
(22, 1, 9800000, 10000000, 5, 'cicilan3'),
(23, 2, 9800000, 10000000, 4, 'cicilan1'),
(24, 3, 2940000, 3000000, 8, 'cicilan2'),
(25, 4, 5880000, 6000000, 5, 'cicilan3'),
(26, 5, 7840000, 8000000, 3, 'cicilan1'),
(27, 6, 97999999, 99999999, 7, 'cicilan2'),
(28, 7, 3920000, 4000000, 2, 'cicilan3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `tgl_pembayaran` date NOT NULL,
  `angsuransipinjaman` int(255) NOT NULL,
  `jasa_pinjaman` int(255) NOT NULL,
  `id_tagihan` int(255) NOT NULL,
  `no_anggota` int(255) NOT NULL,
  `bulan` int(100) NOT NULL,
  `jml_potongan` bigint(40) NOT NULL,
  `jml_sisa` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`tgl_pembayaran`, `angsuransipinjaman`, `jasa_pinjaman`, `id_tagihan`, `no_anggota`, `bulan`, `jml_potongan`, `jml_sisa`) VALUES
('0000-00-00', 2000000, 100000, 5, 1, 5, 2100000, 0),
('2018-02-08', 2500000, 100000, 6, 2, 4, 2600000, 0),
('2018-02-08', 375000, 30000, 7, 3, 8, 405000, 0),
('2018-02-08', 1200000, 60000, 8, 4, 5, 1260000, 0),
('2018-02-08', 2666667, 80000, 9, 5, 3, 2746667, 0),
('2018-02-08', 14285714, 1000000, 10, 6, 7, 15285714, 0),
('2018-02-08', 2000000, 40000, 11, 7, 2, 2040000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`no_anggota`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `no_anggota` (`no_anggota`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `no_anggota` (`no_anggota`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `no_anggota` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
