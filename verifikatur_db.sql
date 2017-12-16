-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 10:58 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `verifikatur_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bpp`
--

CREATE TABLE `bpp` (
  `id_bpp` int(11) NOT NULL,
  `nama_bpp` varchar(255) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bpp`
--

INSERT INTO `bpp` (`id_bpp`, `nama_bpp`, `unit_kerja`, `alamat`, `no_telepon`) VALUES
(1, 'Nanang Sudrajat', 'Pelari', 'Rumah Duka', '087825418390');

-- --------------------------------------------------------

--
-- Table structure for table `gu`
--

CREATE TABLE `gu` (
  `id_gu` int(11) NOT NULL,
  `kode_kegiatan` varchar(20) NOT NULL,
  `id_bpp` int(11) DEFAULT NULL,
  `surat_permohonan` varchar(255) DEFAULT NULL,
  `buku_kas_umum` varchar(255) DEFAULT NULL,
  `laporan_pertanggungjawaban` varchar(255) DEFAULT NULL,
  `sptbl` varchar(255) DEFAULT NULL,
  `rekap_pajak_sipkd` varchar(255) DEFAULT NULL,
  `kwitansi` varchar(255) DEFAULT NULL,
  `spp_n_faktur_pajak` varchar(255) DEFAULT NULL,
  `dokumentasi` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gu`
--

INSERT INTO `gu` (`id_gu`, `kode_kegiatan`, `id_bpp`, `surat_permohonan`, `buku_kas_umum`, `laporan_pertanggungjawaban`, `sptbl`, `rekap_pajak_sipkd`, `kwitansi`, `spp_n_faktur_pajak`, `dokumentasi`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513256799.jpg, ', 'Justice-League_1513256799.jpg, ', 'Murder-On-The-Orient-Express_1513256799.jpg, ', 'Power-Rangers', 'Rogue-One-Star-Wars', 'Thor-Ragnarok', 'taman-balai-kota', 'taman-superhero', NULL, '2017-12-14 06:06:39', '2017-12-14 06:06:39'),
(2, '1', 1, 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513270912.jpg, ', 'Justice-League_1513270912.jpg, ', 'Murder-On-The-Orient-Express_1513270912.jpg, ', 'Power-Rangers_1513270912.jpg, ', 'Rogue-One-Star-Wars_1513270912.jpg, ', 'The-Shawshank-Redemption_1513270912.jpg, ', 'Thor-Ragnarok_1513270912.jpg, ', 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513270912.jpg, Justice-League_1513270912.jpg, ', 'Proses Verifikasi', '2017-12-14 10:01:52', '2017-12-14 10:01:52'),
(3, '1', 1, 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513280720.jpg, ', 'Justice-League_1513280721.jpg, ', 'Murder-On-The-Orient-Express_1513280721.jpg, ', 'Power-Rangers_1513280721.jpg, ', 'Rogue-One-Star-Wars_1513280721.jpg, ', 'The-Shawshank-Redemption_1513280721.jpg, ', 'Thor-Ragnarok_1513280721.jpg, ', 'Thor-Ragnarok_1513280721.jpg, ', 'Proses Verifikasi', '2017-12-14 12:45:21', '2017-12-14 12:45:21'),
(4, '1', 1, 'Murder-On-The-Orient-Express_1513280904.jpg, ', 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513280904.jpg, ', 'The-Shawshank-Redemption_1513280904.jpg, ', 'Power-Rangers_1513280904.jpg, ', 'Thor-Ragnarok_1513280904.jpg, ', 'Justice-League_1513280904.jpg, Murder-On-The-Orient-Express_1513280904.jpg, ', 'Justice-League_1513280904.jpg, ', 'Power-Rangers_1513280904.jpg, ', 'Proses Verifikasi', '2017-12-14 12:48:24', '2017-12-14 12:48:24'),
(5, '1', 1, 'Thor-Ragnarok_1513281258.jpg, ', 'The-Shawshank-Redemption_1513281258.jpg, ', 'Rogue-One-Star-Wars_1513281258.jpg, ', 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513281258.jpg, ', 'Justice-League_1513281258.jpg, ', 'Murder-On-The-Orient-Express_1513281258.jpg, ', 'Power-Rangers_1513281258.jpg, ', 'The-Shawshank-Redemption_1513281258.jpg, ', 'Proses Verifikasi', '2017-12-14 12:54:18', '2017-12-14 12:54:18'),
(6, '1', 1, 'Murder-On-The-Orient-Express_1513281338.jpg, ', 'Power-Rangers_1513281338.jpg, ', 'Thor-Ragnarok_1513281338.jpg, ', 'The-Shawshank-Redemption_1513281338.jpg, ', 'Rogue-One-Star-Wars_1513281338.jpg, ', 'Justice-League_1513281338.jpg, ', 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513281338.jpg, ', 'Thor-Ragnarok_1513281338.jpg, ', 'Proses Verifikasi', '2017-12-14 12:55:38', '2017-12-14 12:55:38'),
(7, '1', 1, 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513281434.jpg, ', 'Justice-League_1513281434.jpg, ', 'Murder-On-The-Orient-Express_1513281434.jpg, ', 'Power-Rangers_1513281434.jpg, ', 'Rogue-One-Star-Wars_1513281434.jpg, ', 'The-Shawshank-Redemption_1513281434.jpg, ', 'Thor-Ragnarok_1513281434.jpg, ', 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513281434.jpg, ', 'Proses Verifikasi', '2017-12-14 12:57:14', '2017-12-14 12:57:14'),
(8, '1', 1, 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513281638.jpg, ', 'Justice-League_1513281638.jpg, ', 'Murder-On-The-Orient-Express_1513281638.jpg, ', 'Power-Rangers_1513281638.jpg, ', 'Rogue-One-Star-Wars_1513281638.jpg, ', 'The-Shawshank-Redemption_1513281638.jpg, ', 'Thor-Ragnarok_1513281638.jpg, ', 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513281638.jpg, ', 'Proses Verifikasi', '2017-12-14 13:00:38', '2017-12-14 13:00:38'),
(9, '1', 1, 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513281732.jpg, ', 'Justice-League_1513281732.jpg, ', 'Murder-On-The-Orient-Express_1513281732.jpg, ', 'Power-Rangers_1513281732.jpg, ', 'Rogue-One-Star-Wars_1513281732.jpg, ', 'The-Shawshank-Redemption_1513281732.jpg, ', 'Thor-Ragnarok_1513281732.jpg, ', 'The-Shawshank-Redemption_1513281732.jpg, ', 'Proses Verifikasi', '2017-12-14 13:02:12', '2017-12-14 13:02:12'),
(10, '1', 1, 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513281829.jpg, ', 'Justice-League_1513281829.jpg, ', 'Murder-On-The-Orient-Express_1513281829.jpg, ', 'Power-Rangers_1513281829.jpg, ', 'Rogue-One-Star-Wars_1513281829.jpg, ', 'The-Shawshank-Redemption_1513281829.jpg, ', 'Thor-Ragnarok_1513281829.jpg, ', 'The-Shawshank-Redemption_1513281829.jpg, ', 'Proses Verifikasi', '2017-12-14 13:03:49', '2017-12-14 13:03:49'),
(11, '1', 1, 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513282152.jpg, ', 'Justice-League_1513282152.jpg, ', 'Murder-On-The-Orient-Express_1513282152.jpg, ', 'Power-Rangers_1513282152.jpg, ', 'Rogue-One-Star-Wars_1513282152.jpg, ', 'The-Shawshank-Redemption_1513282152.jpg, ', 'Thor-Ragnarok_1513282152.jpg, ', 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513282152.jpg, ', 'Proses Verifikasi', '2017-12-14 13:09:12', '2017-12-14 13:09:12'),
(12, '2', 1, 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513282431.jpg, ', 'Justice-League_1513282431.jpg, ', 'Murder-On-The-Orient-Express_1513282431.jpg, ', 'Power-Rangers_1513282431.jpg, ', 'Rogue-One-Star-Wars_1513282431.jpg, ', 'The-Shawshank-Redemption_1513282431.jpg, ', 'Thor-Ragnarok_1513282431.jpg, ', 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513282431.jpg, ', 'Proses Verifikasi', '2017-12-14 13:13:51', '2017-12-14 13:13:51'),
(13, '1', 1, 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513282486.jpg, ', 'Justice-League_1513282486.jpg, ', 'Murder-On-The-Orient-Express_1513282486.jpg, ', 'Power-Rangers_1513282486.jpg, ', 'Rogue-One-Star-Wars_1513282486.jpg, ', 'The-Shawshank-Redemption_1513282486.jpg, ', 'Thor-Ragnarok_1513282486.jpg, ', 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513282486.jpg, ', 'Proses Verifikasi', '2017-12-14 13:14:46', '2017-12-14 13:14:46'),
(14, '2', 1, 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513282611.jpg, ', 'Justice-League_1513282611.jpg, ', 'Murder-On-The-Orient-Express_1513282611.jpg, ', 'Power-Rangers_1513282611.jpg, ', 'Rogue-One-Star-Wars_1513282611.jpg, ', 'The-Shawshank-Redemption_1513282611.jpg, ', 'Thor-Ragnarok_1513282611.jpg, ', 'verifikatur_db_1513282611.sql, ', 'Proses Verifikasi', '2017-12-14 13:16:51', '2017-12-14 13:16:51'),
(15, '1', 1, 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513347964.jpg, ', 'Murder-On-The-Orient-Express_1513347965.jpg, ', 'Thor-Ragnarok_1513347965.jpg, ', 'The-Shawshank-Redemption_1513347965.jpg, ', 'Murder-On-The-Orient-Express_1513347965.jpg, ', 'Power-Rangers_1513347965.jpg, ', 'Justice-League_1513347965.jpg, ', 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513347965.jpg, ', 'Proses Verifikasi', '2017-12-15 07:26:05', '2017-12-15 07:26:05'),
(16, '2', 1, 'Murder-On-The-Orient-Express_1513348777.jpg, ', 'Power-Rangers_1513348777.jpg, ', 'Justice-League_1513348777.jpg, ', 'Fantastic-Beasts-and-Where-to-Find-Them-Final-Poster_1513348777.jpg, ', 'Thor-Ragnarok_1513348777.jpg, ', 'Rogue-One-Star-Wars_1513348777.jpg, ', 'The-Shawshank-Redemption_1513348777.jpg, ', 'The-Shawshank-Redemption_1513348777.jpg, ', 'Proses Verifikasi', '2017-12-15 14:39:37', '2017-12-15 14:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `kode_kegiatan` varchar(20) NOT NULL,
  `program_kegiatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `kode_kegiatan`, `program_kegiatan`) VALUES
(1, '1', 'Berlari'),
(2, '2', 'Tidur');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'verifikator'),
(3, 'bpp');

-- --------------------------------------------------------

--
-- Table structure for table `ls`
--

CREATE TABLE `ls` (
  `id` int(11) NOT NULL,
  `id_bpp` int(255) DEFAULT NULL,
  `no_spp` int(11) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `kode_kegiatan` varchar(20) DEFAULT NULL,
  `dpa` int(11) DEFAULT NULL,
  `hps` int(11) DEFAULT NULL,
  `penawaran` int(11) DEFAULT NULL,
  `spk` int(11) DEFAULT NULL,
  `mp` varchar(255) DEFAULT NULL,
  `kak` varchar(255) DEFAULT NULL,
  `rab` varchar(255) DEFAULT NULL,
  `hps2` varchar(255) DEFAULT NULL,
  `dok_pengadaan` varchar(255) DEFAULT NULL,
  `tdp` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `akta` varchar(255) DEFAULT NULL,
  `pernyataan` varchar(255) DEFAULT NULL,
  `ref_bank` varchar(255) DEFAULT NULL,
  `spk2` varchar(255) DEFAULT NULL,
  `kontrak` varchar(255) DEFAULT NULL,
  `surat_bayar` varchar(255) DEFAULT NULL,
  `faktur` varchar(255) DEFAULT NULL,
  `bap` varchar(255) DEFAULT NULL,
  `serah_terima` varchar(255) DEFAULT NULL,
  `penerimaan` varchar(255) DEFAULT NULL,
  `pembayaran` varchar(255) DEFAULT NULL,
  `persetujuan` varchar(255) DEFAULT NULL,
  `kwitansi` varchar(255) DEFAULT NULL,
  `bukti_transfer` varchar(255) DEFAULT NULL,
  `ssp_ebilling` varchar(255) DEFAULT NULL,
  `bukti_stor` varchar(255) DEFAULT NULL,
  `laporan_hasil` varchar(255) DEFAULT NULL,
  `surat_pengantar` varchar(255) DEFAULT NULL,
  `ringkasan` varchar(255) DEFAULT NULL,
  `rincian` varchar(255) DEFAULT NULL,
  `sptjb` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ls`
--

INSERT INTO `ls` (`id`, `id_bpp`, `no_spp`, `pekerjaan`, `perusahaan`, `kode_kegiatan`, `dpa`, `hps`, `penawaran`, `spk`, `mp`, `kak`, `rab`, `hps2`, `dok_pengadaan`, `tdp`, `npwp`, `akta`, `pernyataan`, `ref_bank`, `spk2`, `kontrak`, `surat_bayar`, `faktur`, `bap`, `serah_terima`, `penerimaan`, `pembayaran`, `persetujuan`, `kwitansi`, `bukti_transfer`, `ssp_ebilling`, `bukti_stor`, `laporan_hasil`, `surat_pengantar`, `ringkasan`, `rincian`, `sptjb`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Proses Verifikasi', '2017-12-15 00:08:24', NULL),
(2, NULL, NULL, 'Sare', 'ABC Group', '2', 2000000, 1500000, 1000000, 500000, 'Tidur', 'Justice-League_1513344246.jpg, ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Proses Verifikasi', '2017-12-15 06:24:06', '2017-12-15 06:24:06'),
(3, 1, 1, 'Sare', 'ABC Group', '2', 2000000, 1500000, 1000000, 500000, 'Tidur', 'Justice-League_1513344344.jpg, ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Proses Verifikasi', '2017-12-15 06:25:44', '2017-12-15 06:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bpp` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_bpp`, `name`, `username`, `email`, `password`, `remember_token`, `id_level`, `created_at`, `updated_at`) VALUES
(1, 0, 'Daniel D Fortuna', 'dna2ln48', 'danieldwifortuna48@gmail.com', '$2y$10$e.DuqREIGyGYf9xF/kkzseSYWv9.rYJaABGMuy5JorkaQTKzCu62W', '18hASDx7Yfl3cTQ8F7ZzmHCYGjhNEX1924sMMlMPg5txppsYXERWBrDrSAWj', 1, '2017-12-11 10:11:49', '2017-12-11 10:11:49'),
(2, NULL, 'Ini Verifikator', 'verifikator', 'verifikator@verifikator.com', '$2y$10$iVlppdy.ZSVlb6Xz2y3PC.Ur7e9xdweZbBUjhU5iXW8U1sFZSvnHS', 'l8M3367iwOqO3cbR8SQ3TuEekQilvMHPvemtHLUIMM0xKhi7Kaxnt3G1TRlb', 2, '2017-12-11 10:48:36', '2017-12-11 10:48:36'),
(3, 1, 'Ini BPP', 'bpp', 'bpp@bpp.com', '$2y$10$XkDFlczrIj9VyNoksNX/UuuOERWdLCm3ySwHlSjCHEhHuJR1mpNGS', 'Ok5967wp4et3XtfryUTK8iULd4iablAiLNhyZSYq7agynbnC3AcXfXlhl9JL', 3, '2017-12-11 10:52:35', '2017-12-11 10:52:35'),
(4, NULL, 'admin', 'admin', 'admin@admin.com', '$2y$10$6fftZbXaVsUWlMIu9vvzseKROV9YTHyBF5TrmSnXJHSu4ATcy1awq', 'aWAyYC0Us6v2HjdGEO7uqDK6zXf1znGAQcdwt5KmNjjbcWjuJyVgGRcbeOvI', 1, '2017-12-11 19:53:41', '2017-12-11 19:53:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpp`
--
ALTER TABLE `bpp`
  ADD PRIMARY KEY (`id_bpp`);

--
-- Indexes for table `gu`
--
ALTER TABLE `gu`
  ADD PRIMARY KEY (`id_gu`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `ls`
--
ALTER TABLE `ls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE_EMAIL` (`email`),
  ADD UNIQUE KEY `UNIQUE_USERNAME` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpp`
--
ALTER TABLE `bpp`
  MODIFY `id_bpp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gu`
--
ALTER TABLE `gu`
  MODIFY `id_gu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ls`
--
ALTER TABLE `ls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
