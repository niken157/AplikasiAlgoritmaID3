-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2023 pada 06.44
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataset`
--

CREATE TABLE `dataset` (
  `id` int(11) NOT NULL,
  `nama_calon` varchar(225) NOT NULL,
  `kehadiran` enum('baik','sedang','rendah') NOT NULL,
  `adart` enum('bagus','cukup','kurang') NOT NULL,
  `pembukuan` enum('baik','buruk') NOT NULL,
  `kondisi` enum('ya','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dataset`
--

INSERT INTO `dataset` (`id`, `nama_calon`, `kehadiran`, `adart`, `pembukuan`, `kondisi`) VALUES
(1, 'c1', 'baik', 'bagus', 'baik', 'ya'),
(2, 'c2', 'baik', 'cukup', 'baik', 'ya'),
(3, 'c3', 'baik', 'cukup', 'buruk', 'ya'),
(4, 'c4', 'baik', 'kurang', 'buruk', 'tidak'),
(5, 'c5', 'sedang', 'bagus', 'baik', 'ya'),
(6, 'c6', 'sedang', 'cukup', 'baik', 'ya'),
(7, 'c7', 'sedang', 'cukup', 'buruk', 'ya'),
(8, 'c8', 'sedang', 'kurang', 'buruk', 'tidak'),
(9, 'c9', 'rendah', 'bagus', 'baik', 'ya'),
(10, 'c10', 'rendah', 'cukup', 'buruk', 'tidak'),
(11, 'c11', 'rendah', 'kurang', 'baik', 'ya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dataset`
--
ALTER TABLE `dataset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
