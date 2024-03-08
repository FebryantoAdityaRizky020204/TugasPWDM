-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Mar 2024 pada 07.17
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
-- Database: `spineta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` enum('admin','masteradmin','resepsionis','hotelAdmin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`, `role`) VALUES
(1, 'Aditya Rizky Febryanto', 'masteradmin', 'SkJJMFE0SnpRUUl1QzNWY0ljR0JxY3ZETURwU2drWXhEN3ZzV3c9PQ==', 'masteradmin'),
(2, 'adit', 'adit', 'Ynh4YmRtaDA4YXlZU3B0M2JWdWczY3UvMDZwQTQ2c2J3N3V2NGc9PQ==', 'hotelAdmin'),
(3, 'Abdul Rahman', 'abdul', 'a0R6eWFld00wM3NzY05uWkRQdGh2c3Axc1RXc3J0NThtMStBS1E9PQ==', 'hotelAdmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hotel`
--

CREATE TABLE `tb_hotel` (
  `id_hotel` varchar(200) NOT NULL,
  `id_adminHotel` int NOT NULL,
  `nama_hotel` varchar(200) NOT NULL,
  `alamat_hotel` text NOT NULL,
  `kabupaten_hotel` varchar(200) NOT NULL,
  `provinsi_hotel` varchar(200) NOT NULL,
  `bintang_hotel` int NOT NULL,
  `jumlah_kamar` int NOT NULL,
  `foto_hotel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_hotel`
--

INSERT INTO `tb_hotel` (`id_hotel`, `id_adminHotel`, `nama_hotel`, `alamat_hotel`, `kabupaten_hotel`, `provinsi_hotel`, `bintang_hotel`, `jumlah_kamar`, `foto_hotel`) VALUES
('65ea2abc33132', 2, 'RAMANAYA', 'jl. Tak Bertuan No. 12', 'Kabu', 'Provi', 3, 200, '65ea2abc331493.09039007.png'),
('65eaaf1dd4306', 3, 'EMERALD BAY', 'Jl. Siapa yang tau no.14', 'badung', 'bali', 5, 200, '65eaaf1dd431b9.50138979.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` varchar(200) NOT NULL,
  `id_hotel` varchar(200) NOT NULL,
  `id_tipekamar` varchar(200) NOT NULL,
  `id_hoteladmin` int NOT NULL,
  `nama_kamar` varchar(255) NOT NULL,
  `jumlah_tamu` int NOT NULL,
  `jumlah_bed` int NOT NULL,
  `no_kamar_start` int NOT NULL,
  `no_kamar_end` int NOT NULL,
  `tambahan` varchar(255) NOT NULL,
  `harga_kamar` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `id_hotel`, `id_tipekamar`, `id_hoteladmin`, `nama_kamar`, `jumlah_tamu`, `jumlah_bed`, `no_kamar_start`, `no_kamar_end`, `tambahan`, `harga_kamar`) VALUES
('KMR65ea90b2387a0', '65ea2abc33132', '2165ea6cd89bfc2', 2, 'SINGLE BED', 1, 1, 2, 5, 'none', 660000),
('KMR65eaacafbade6', '65ea2abc33132', '2165ea6fc4a6f1f', 2, 'DOUBLE BED', 2, 2, 6, 10, 'none', 999000),
('KMR65eaaf61df697', '65eaaf1dd4306', '2165eaaf3026b75', 3, 'SINGLE BED', 1, 1, 1, 20, 'none', 800000),
('KMR65eaaf874d7ad', '65eaaf1dd4306', '2165eaaf4603b69', 3, 'SINGLE BED', 1, 1, 21, 30, 'none', 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tipekamar`
--

CREATE TABLE `tb_tipekamar` (
  `id_tipekamar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_hotel` varchar(200) NOT NULL,
  `id_adminHotel` int NOT NULL,
  `tipe_kamar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jumlah_kamar` int NOT NULL,
  `foto_kamar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_tipekamar`
--

INSERT INTO `tb_tipekamar` (`id_tipekamar`, `id_hotel`, `id_adminHotel`, `tipe_kamar`, `jumlah_kamar`, `foto_kamar`) VALUES
('2165ea6cd89bfc2', '65ea2abc33132', 2, 'DELUXE', 20, '65ea6cd89bfde2.66636743.webp'),
('2165ea6fc4a6f1f', '65ea2abc33132', 2, 'STANDAR', 100, '65ea6fc4a6f3c6.37201713.jpg'),
('2165eaaf3026b75', '65eaaf1dd4306', 3, 'STANDARD', 100, '65eaaf3026b893.53301974.webp'),
('2165eaaf4603b69', '65eaaf1dd4306', 3, 'DELUXE', 50, '65eaaf4603b7d0.48614035.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_hotel`
--
ALTER TABLE `tb_hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indeks untuk tabel `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `tb_tipekamar`
--
ALTER TABLE `tb_tipekamar`
  ADD PRIMARY KEY (`id_tipekamar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
