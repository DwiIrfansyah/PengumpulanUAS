-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2021 pada 03.43
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restohelperdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_pemesanan`
--

CREATE TABLE `catatan_pemesanan` (
  `no_pemesanan` int(8) NOT NULL,
  `no_meja` int(3) NOT NULL,
  `kuantitas` int(50) NOT NULL,
  `kd_menu` varchar(8) NOT NULL,
  `kd_pelanggan` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_menu_tak_tersedia`
--

CREATE TABLE `daftar_menu_tak_tersedia` (
  `id_tak_tersedia` varchar(8) NOT NULL,
  `hari_berlaku` varchar(10) NOT NULL,
  `tanggal_berlaku` date NOT NULL,
  `kd_menu` varchar(8) NOT NULL,
  `kd_pegawai` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `kd_menu` varchar(8) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `satuan_harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `kd_pegawai` varchar(8) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(13) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`kd_pegawai`, `nama_pegawai`, `tanggal_lahir`, `jabatan`, `alamat`, `no_telepon`, `username`, `password`, `role_id`) VALUES
('AD1', 'admin', '1998-06-15', 'admin', 'bla bla bla', '08776612221', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `kd_pelanggan` varchar(8) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `jumlah_pelanggan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `struk_pembayaran`
--

CREATE TABLE `struk_pembayaran` (
  `kd_pembayaran` char(12) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `satuan_harga` double NOT NULL,
  `total_harga` double NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `no_pemesanan` int(8) NOT NULL,
  `kd_pegawai` varchar(8) NOT NULL,
  `kd_menu` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `catatan_pemesanan`
--
ALTER TABLE `catatan_pemesanan`
  ADD PRIMARY KEY (`no_pemesanan`),
  ADD KEY `kd_menu` (`kd_menu`),
  ADD KEY `kd_pelanggan` (`kd_pelanggan`);

--
-- Indeks untuk tabel `daftar_menu_tak_tersedia`
--
ALTER TABLE `daftar_menu_tak_tersedia`
  ADD PRIMARY KEY (`id_tak_tersedia`),
  ADD KEY `kd_menu` (`kd_menu`),
  ADD KEY `kd_pegawai` (`kd_pegawai`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`kd_menu`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`kd_pegawai`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kd_pelanggan`);

--
-- Indeks untuk tabel `struk_pembayaran`
--
ALTER TABLE `struk_pembayaran`
  ADD PRIMARY KEY (`kd_pembayaran`),
  ADD KEY `kd_pegawai` (`kd_pegawai`),
  ADD KEY `kd_menu` (`kd_menu`),
  ADD KEY `no_pemesanan` (`no_pemesanan`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `catatan_pemesanan`
--
ALTER TABLE `catatan_pemesanan`
  ADD CONSTRAINT `catatan_pemesanan_ibfk_1` FOREIGN KEY (`kd_pelanggan`) REFERENCES `pelanggan` (`kd_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `catatan_pemesanan_ibfk_2` FOREIGN KEY (`kd_menu`) REFERENCES `menu` (`kd_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `daftar_menu_tak_tersedia`
--
ALTER TABLE `daftar_menu_tak_tersedia`
  ADD CONSTRAINT `daftar_menu_tak_tersedia_ibfk_1` FOREIGN KEY (`kd_menu`) REFERENCES `menu` (`kd_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftar_menu_tak_tersedia_ibfk_2` FOREIGN KEY (`kd_pegawai`) REFERENCES `pegawai` (`kd_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `struk_pembayaran`
--
ALTER TABLE `struk_pembayaran`
  ADD CONSTRAINT `struk_pembayaran_ibfk_1` FOREIGN KEY (`kd_menu`) REFERENCES `menu` (`kd_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `struk_pembayaran_ibfk_2` FOREIGN KEY (`kd_pegawai`) REFERENCES `pegawai` (`kd_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
