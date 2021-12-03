-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2021 pada 04.38
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti_karyawan`
--

CREATE TABLE `cuti_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `NIK` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `bagian` varchar(20) NOT NULL,
  `pengajuan_cuti` int(100) DEFAULT NULL,
  `sisa_cuti` int(2) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cuti_karyawan`
--

INSERT INTO `cuti_karyawan` (`id_karyawan`, `NIK`, `nama`, `jabatan`, `bagian`, `pengajuan_cuti`, `sisa_cuti`, `date`) VALUES
(37, '19020001', 'Aisyah Khalida Fajria', 'Spv', 'Hrd', 1, 7, '2021-11-29'),
(38, '19020001', 'Yayah', 'Spv', 'Produksi', 1, 10, '2021-11-30'),
(40, '360322640500000', 'Dita', 'Leader', 'Produksi', 2, 6, '2021-12-08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
