-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2022 pada 07.30
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
-- Trigger `barang`
--
DELIMITER $$
CREATE TRIGGER `insertmulitple` AFTER INSERT ON `barang` FOR EACH ROW BEGIN 
INSERT INTO stok(kd_barang) VALUES(new.kd_barang);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluar_barang`
--

CREATE TABLE `keluar_barang` (
  `kd_keluar_barang` char(10) NOT NULL,
  `kd_barang` char(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `jumlah_keluar_barang` int(11) NOT NULL,
  `keperluan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `keluar_barang`
--
DELIMITER $$
CREATE TRIGGER `trigger_keluar_barang` AFTER INSERT ON `keluar_barang` FOR EACH ROW BEGIN
UPDATE stok SET 
nama_barang=new.nama_barang,
jumlah_keluar_barang=jumlah_keluar_barang+new.jumlah_keluar_barang,
total_barang=total_barang-new.jumlah_keluar_barang
WHERE
kd_barang=new.kd_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk_barang`
--

CREATE TABLE `masuk_barang` (
  `kd_masuk_barang` char(10) NOT NULL,
  `kd_barang` char(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jumlah_masuk_barang` int(11) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `masuk_barang`
--
DELIMITER $$
CREATE TRIGGER `trigger_masuk_barang` AFTER INSERT ON `masuk_barang` FOR EACH ROW BEGIN
UPDATE stok SET
nama_barang=new.nama_barang,
jumlah_masuk_barang=jumlah_masuk_barang + new.jumlah_masuk_barang,
total_barang=total_barang + new.jumlah_masUk_barang
WHERE
kd_barang=new.kd_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `kd_barang` char(10) NOT NULL,
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
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indeks untuk tabel `keluar_barang`
--
ALTER TABLE `keluar_barang`
  ADD PRIMARY KEY (`kd_keluar_barang`),
  ADD UNIQUE KEY `kd_barang` (`kd_barang`);

--
-- Indeks untuk tabel `masuk_barang`
--
ALTER TABLE `masuk_barang`
  ADD PRIMARY KEY (`kd_masuk_barang`),
  ADD UNIQUE KEY `kd_barang` (`kd_barang`);

--
-- Indeks untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD UNIQUE KEY `kd_barang` (`kd_barang`);

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

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keluar_barang`
--
ALTER TABLE `keluar_barang`
  ADD CONSTRAINT `keluar_barang_ibfk_1` FOREIGN KEY (`kd_barang`) REFERENCES `barang` (`kd_barang`);

--
-- Ketidakleluasaan untuk tabel `masuk_barang`
--
ALTER TABLE `masuk_barang`
  ADD CONSTRAINT `masuk_barang_ibfk_1` FOREIGN KEY (`kd_barang`) REFERENCES `barang` (`kd_barang`);

--
-- Ketidakleluasaan untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`kd_barang`) REFERENCES `barang` (`kd_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
