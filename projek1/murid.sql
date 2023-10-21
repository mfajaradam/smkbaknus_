-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2023 pada 05.44
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjects` varchar(225) NOT NULL,
  `messages` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`id`, `nama`, `email`, `subjects`, `messages`) VALUES
(1, 'rehan', 'rehan@gmail.com', 'wkwkwkw', 'saya ingin menjadi programmer'),
(2, 'irvan', 'irvan@gmail.com', 'hahaha', 'saya ingin menjadi streamer'),
(28, 'Rizky F', 'rizky@gmail.com', 'akakaka', 'saya ingin menjadi polisi'),
(29, 'Bayu F', 'bayu112@gmail.com', 'hahahha,wkwkwkwkwkw', 'saya ingin menjadi programmer'),
(31, 'yubi', 'ayubi@gmail.com', 'mantap pak', 'saya ingin menjadi ilmuan'),
(32, 'burhan', 'burhan@gmail.com', 'hahahaha', 'keren bos');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `murid`
--
ALTER TABLE `murid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
