-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2022 pada 05.41
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upk_2022_ilz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kd_barang` char(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kd_barang`, `nama_barang`) VALUES
('B0001', 'barang 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluar_barang`
--

CREATE TABLE `keluar_barang` (
  `kd_keluar_barang` char(11) NOT NULL,
  `kd_barang` char(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jumlah_keluar_barang` int(11) NOT NULL,
  `keperluan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keluar_barang`
--

INSERT INTO `keluar_barang` (`kd_keluar_barang`, `kd_barang`, `nama_barang`, `tgl_keluar`, `jumlah_keluar_barang`, `keperluan`) VALUES
('KLR0001', 'B0001', 'barang 1', '2022-04-23', 70, 'Jual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk_barang`
--

CREATE TABLE `masuk_barang` (
  `kd_masuk_barang` char(11) NOT NULL,
  `kd_barang` char(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jumlah_masuk_barang` int(11) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masuk_barang`
--

INSERT INTO `masuk_barang` (`kd_masuk_barang`, `kd_barang`, `nama_barang`, `tgl_masuk`, `jumlah_masuk_barang`, `kondisi`) VALUES
('MSK0001', 'B0001', 'barang 1', '2022-04-23', 100, 'BARU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `kd_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_masuk_barang` int(11) NOT NULL,
  `jumlah_keluar_barang` int(11) NOT NULL,
  `total_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '1'),
(2, 'karyawan', 'karyawan', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keluar_barang`
--
ALTER TABLE `keluar_barang`
  ADD PRIMARY KEY (`kd_keluar_barang`);

--
-- Indeks untuk tabel `masuk_barang`
--
ALTER TABLE `masuk_barang`
  ADD PRIMARY KEY (`kd_masuk_barang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
