-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2021 pada 10.56
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkaryawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_karyawan` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `jenis kelamin` enum('pria','wanita') NOT NULL,
  `tempat lahir` varchar(100) NOT NULL,
  `tanggal lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `nama`, `email`, `telepon`, `alamat`, `jenis kelamin`, `tempat lahir`, `tanggal lahir`) VALUES
(1, 'Fayusri Royfanto', 'pzy.royfanto@student.uns.ac.id', '0895363665664', 'Kiringan, Ponggok, Polanharjo, Klaten', 'pria', 'Bangkalan', '2000-07-03'),
(2, 'Royfanto', 'hydrex.ion45@gmail.com', '+628992472151', 'kiringan, ponggok', 'pria', 'Bangkalan', '2000-07-03'),
(3, 'royfanto', 'hydrex.ion45@gmail.com', '+628992472151', 'Kiringan', '', 'Bangkalan', '2021-05-11'),
(4, 'asd', 'asd@gmail.com', '+2293139123', 'asdasd', '', 'Bangkalan', '2021-05-13'),
(5, 'Roy', 'roy@ymail.com', '+8929332', 'valhala', 'pria', 'Asgard', '2021-05-11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id_karyawan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
