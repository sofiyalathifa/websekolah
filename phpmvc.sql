-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Sep 2023 pada 14.33
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `Id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kode_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`Id`, `nama`, `mapel`, `kode_mapel`) VALUES
(1, 'Ivans Zuwanta, S.Kom', 'Basis Data', 'Produktif'),
(2, 'Fikrotu Dwi Faudatuzzahro, S.Pd', 'Pemrograman Web dan Perangkat Bergerak', 'Produktif'),
(3, 'Estri Handayani, S.pd', 'Pemrograman Beriorientasi Objek', 'Produktif'),
(4, 'Labib Fayumi, S.Pd', 'Produk Kreatif dan Wirausaha', 'Produktif'),
(5, 'Dini Zakiyatul Isna, S.Pd', 'Matematika', 'Normatif'),
(6, 'Wisnu Fathur Rahman, S.Pd', 'PPKN', 'Normatif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `Id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`Id`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(1, 'Hafida Zahra Sofiya Lathifa', 'Perempuan', 'Pule'),
(2, 'Ida Royani', 'Perempuan', 'Parakan'),
(3, 'Niha Sulalatusa\'diah', 'Perempuan', 'Gandusari'),
(15, 'Adinda', 'perempuan', 'Tulungangung'),
(16, 'Yolla Yuliana', 'perempuan', 'Jakarta'),
(17, 'Rivan', 'laki-laki', 'Semarang'),
(18, 'Nizar', 'laki-laki', 'Malang'),
(19, 'Alfin Daniel', 'laki-laki', 'Kediri'),
(20, 'Tas Ransel Pria', 'laki-laki', 'Trenggalek');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
