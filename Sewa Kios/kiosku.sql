-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2023 pada 10.26
-- Versi server: 10.4.25-MariaDB-log
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiosku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akunpengelolah`
--

CREATE TABLE `akunpengelolah` (
  `userPengelolah` varchar(30) NOT NULL,
  `passPengelolah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akunpengelolah`
--

INSERT INTO `akunpengelolah` (`userPengelolah`, `passPengelolah`) VALUES
('bagas', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akunpenyewa`
--

CREATE TABLE `akunpenyewa` (
  `userPenyewa` varchar(30) NOT NULL,
  `passPenyewa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akunpenyewa`
--

INSERT INTO `akunpenyewa` (`userPenyewa`, `passPenyewa`) VALUES
('Ditaelysyia', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakios`
--

CREATE TABLE `datakios` (
  `idKios` int(8) NOT NULL,
  `kioss` varchar(30) NOT NULL,
  `penyewa` varchar(30) DEFAULT NULL,
  `statuss` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datakios`
--

INSERT INTO `datakios` (`idKios`, `kioss`, `penyewa`, `statuss`) VALUES
(1, 'A1', 'Restu', 'Aktif'),
(2, 'A2', 'Surya', 'Aktif'),
(3, 'A3', 'Rafli', 'Aktif'),
(4, 'A4', 'Ellena', 'Aktif'),
(5, 'A5', '', 'Kosong'),
(6, 'A6', '', 'Kosong'),
(7, 'A7', '', 'Kosong'),
(8, 'A8', '', 'Kosong'),
(9, 'A9', '', 'Kosong'),
(10, 'A10', '', 'Kosong'),
(11, 'B1', '', 'Kosong'),
(12, 'B2', '', 'Kosong'),
(13, 'B3', '', 'Kosong'),
(14, 'B4', '', 'Kosong'),
(15, 'B5', '', 'Kosong'),
(16, 'B6', '', 'Kosong'),
(17, 'B7', '', 'Kosong'),
(18, 'B8', '', 'Kosong'),
(19, 'B9', '', 'Kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(100) NOT NULL,
  `penyewa` varchar(255) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `tanggapan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id`, `penyewa`, `keluhan`, `tanggapan`) VALUES
(2, 'Restu', 'banyak serangga', ''),
(3, 'Restu', 'HUAHUBSU', ''),
(4, 'Restu', 'asdfghjhgfd', 'Ada sarang tawon di genteng bang'),
(5, 'Restu', 'sdffdsaASD', ''),
(6, 'Restu', 'qqsdfghhgfrew', ''),
(7, 'Restu', 'sdcvgfred', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpanjangansewa`
--

CREATE TABLE `perpanjangansewa` (
  `idKios` int(8) NOT NULL,
  `kioss` varchar(30) DEFAULT NULL,
  `sisa` varchar(255) DEFAULT NULL,
  `syarat` varchar(255) DEFAULT NULL,
  `validate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perpanjangansewa`
--

INSERT INTO `perpanjangansewa` (`idKios`, `kioss`, `sisa`, `syarat`, `validate`) VALUES
(1, 'A1', '1 Bulan', 'terpenuhi', 'Belum divalidasi'),
(2, 'A2', '1 Tahun', 'terpenuhi', 'Belum divalidasi'),
(4, 'A4', '1 Bulan', 'terpenuhi', 'Belum divalidasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `validasipembayaran`
--

CREATE TABLE `validasipembayaran` (
  `idKios` int(8) NOT NULL,
  `kioss` varchar(30) NOT NULL,
  `sisa` varchar(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `validate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `validasipembayaran`
--

INSERT INTO `validasipembayaran` (`idKios`, `kioss`, `sisa`, `pembayaran`, `validate`) VALUES
(1, 'A1', '1 Bulan', '123454321234', 'tervalidasi'),
(2, 'A2', '1 bulan', '12332', 'tervalidasi'),
(3, 'A3', '6 Bulan', '2u83939u93', 'tervalidasi'),
(4, 'A4', '1 Tahun', '1234432123', 'tervalidasi'),
(5, 'A5', '6 Bulan', 'w23e432123er', 'Belum divalidasi'),
(6, 'A6', '6 Bulan', '123454321', 'Belum divalidasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akunpengelolah`
--
ALTER TABLE `akunpengelolah`
  ADD PRIMARY KEY (`userPengelolah`);

--
-- Indeks untuk tabel `akunpenyewa`
--
ALTER TABLE `akunpenyewa`
  ADD PRIMARY KEY (`userPenyewa`);

--
-- Indeks untuk tabel `datakios`
--
ALTER TABLE `datakios`
  ADD PRIMARY KEY (`idKios`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perpanjangansewa`
--
ALTER TABLE `perpanjangansewa`
  ADD PRIMARY KEY (`idKios`);

--
-- Indeks untuk tabel `validasipembayaran`
--
ALTER TABLE `validasipembayaran`
  ADD PRIMARY KEY (`idKios`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `perpanjangansewa`
--
ALTER TABLE `perpanjangansewa`
  ADD CONSTRAINT `perpanjangansewa_ibfk_1` FOREIGN KEY (`idKios`) REFERENCES `datakios` (`idKios`);

--
-- Ketidakleluasaan untuk tabel `validasipembayaran`
--
ALTER TABLE `validasipembayaran`
  ADD CONSTRAINT `validasipembayaran_ibfk_1` FOREIGN KEY (`idKios`) REFERENCES `datakios` (`idKios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
