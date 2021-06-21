-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2021 pada 19.09
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidan`
--

CREATE TABLE `bidan` (
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tanggal_antri` date NOT NULL,
  `hari` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidan`
--

INSERT INTO `bidan` (`username`, `nama_lengkap`, `tanggal_antri`, `hari`) VALUES
('a', 'a', '2021-06-14', 'Senin'),
('b', 'b', '2021-06-15', 'Selasa'),
('c', 'c', '2021-06-16', 'Rabu'),
('d', 'd', '2021-06-17', 'Kamis'),
('e', 'e', '2021-06-18', 'Jumat'),
('f', 'f', '2021-06-19', 'Sabtu'),
('g', 'g', '2021-06-20', 'Minggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter_umum`
--

CREATE TABLE `dokter_umum` (
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tanggal_antri` date NOT NULL,
  `hari` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter_umum`
--

INSERT INTO `dokter_umum` (`username`, `nama_lengkap`, `tanggal_antri`, `hari`) VALUES
('a', 'a', '2021-06-19', 'Sabtu'),
('b', 'b', '2021-06-20', 'Minggu'),
('c', 'c', '2021-06-14', 'Senin'),
('d', 'd', '2021-06-15', 'Selasa'),
('e', 'e', '2021-06-16', 'Rabu'),
('f', 'f', '2021-06-17', 'Kamis'),
('g', 'g', '2021-06-18', 'Jumat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `nomor_telp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`username`, `password`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `usia`, `nomor_telp`) VALUES
('a', 'a', 'a', 'Laki-laki', 'a', 12, '1234-5566-7889'),
('s', 's', 's', 'Laki-laki', 's', 33, '1243-5455-47'),
('v', 'v', 'v', 'Perempuan', 'v', 1, '2325'),
('yovan_feb', 'yoyoyo', 'Yovan Febriawan', 'Laki-laki', 'Pendak', 19, '1242-4565-7324');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tes_darah`
--

CREATE TABLE `tes_darah` (
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tanggal_antri` date NOT NULL,
  `hari` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tes_darah`
--

INSERT INTO `tes_darah` (`username`, `nama_lengkap`, `tanggal_antri`, `hari`) VALUES
('a', 'a', '2021-06-14', 'Senin'),
('b', 'b', '2021-06-15', 'Selasa'),
('c', 'c', '2021-06-16', 'Rabu'),
('d', 'd', '2021-06-17', 'Kamis'),
('e', 'e', '2021-06-18', 'Jumat'),
('f', 'f', '2021-06-19', 'Sabtu'),
('g', 'g', '2021-06-20', 'Minggu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `bidan`
--
ALTER TABLE `bidan`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `dokter_umum`
--
ALTER TABLE `dokter_umum`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tes_darah`
--
ALTER TABLE `tes_darah`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
