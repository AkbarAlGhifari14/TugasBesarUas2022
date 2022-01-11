-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 12:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poliklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_apoteker`
--

CREATE TABLE `data_apoteker` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_apoteker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_apoteker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_apoteker`
--

INSERT INTO `data_apoteker` (`id`, `id_apoteker`, `id_user`, `nama_apoteker`, `alamat`, `telepon`, `created_at`, `updated_at`) VALUES
(1, 'APO0001', '35', 'Apoteker', 'bandung', '0837647363', '2021-12-30 08:36:54', '2021-12-30 08:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `data_dokter`
--

CREATE TABLE `data_dokter` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif_pemeriksaan` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_dokter`
--

INSERT INTO `data_dokter` (`id`, `id_user`, `id_dokter`, `nama_dokter`, `alamat`, `telepon`, `tarif_pemeriksaan`, `created_at`, `updated_at`) VALUES
(10, 1, '1', '1', '1', '1', 1.00, NULL, NULL),
(13, 36, 'DOK0011', 'dokter', 'bandung', '0837647363', 50000.00, '2021-12-30 09:49:15', '2021-12-30 09:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `data_kategori_obat`
--

CREATE TABLE `data_kategori_obat` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_kategori_obat`
--

INSERT INTO `data_kategori_obat` (`id`, `id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(6, 'KTOB0006', 'Saluran Nafas', '2021-12-22 04:09:38', '2021-12-22 04:09:38'),
(7, 'KTOB0007', 'Vitamin Mineral', '2021-12-22 04:09:43', '2021-12-22 04:09:43'),
(8, 'KTOB0008', 'Antimigrain', '2021-12-22 04:09:48', '2021-12-22 04:09:48'),
(10, 'KTOB0009', 'keracunan', '2021-12-22 04:14:13', '2021-12-22 04:14:13'),
(11, 'KTOB0011', 'Sisidueun', '2021-12-24 07:04:32', '2021-12-24 07:04:32'),
(12, 'KTOB0012', 'Mata', '2021-12-24 07:15:19', '2021-12-24 07:15:19'),
(14, 'KTOB0013', 'Gigi', '2021-12-24 07:20:25', '2021-12-24 07:20:25'),
(15, 'KTOB0015', 'Telinga', '2021-12-24 07:24:52', '2021-12-24 07:24:52'),
(18, 'KTOB0016', 'Perut', '2021-12-24 07:32:40', '2021-12-24 07:32:40'),
(19, 'KTOB0019', 'Kulit', '2021-12-24 07:33:18', '2021-12-24 07:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `data_obat`
--

CREATE TABLE `data_obat` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double(8,2) NOT NULL,
  `status` enum('ada','habis') COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_obat`
--

INSERT INTO `data_obat` (`id`, `id_obat`, `nama_obat`, `id_kategori`, `jenis_obat`, `keterangan`, `harga`, `status`, `avatar`, `created_at`, `updated_at`) VALUES
(67, 'OBT0002', '1', 'KTOB0009', 'Kapsul', '2', 15000.00, 'ada', 'obat-obatan--iStock_ratio-16x9.jpg', '2021-12-29 05:19:35', '2021-12-29 05:19:35'),
(68, 'OBT0003', 'Obat Ikan', 'KTOB0007', 'Cair', '-', 50000.00, 'ada', 'vitamin-e_detail-647x395.jpg', '2021-12-29 05:31:41', '2021-12-29 05:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id` int(10) NOT NULL,
  `id_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `status` enum('antri','periksa','obat','selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`id`, `id_pasien`, `nama_pasien`, `alamat`, `telepon`, `tgl_lahir`, `jk`, `tgl_pemeriksaan`, `status`, `created_at`, `updated_at`) VALUES
(12, 'PAS0001', 'Akbar', 'bandung', '0837647363', '2022-01-05', 'Laki-Laki', '2022-01-12', 'antri', '2022-01-03 15:02:36', '2022-01-03 15:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendaftaran`
--

CREATE TABLE `data_pendaftaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pendaftaran`
--

INSERT INTO `data_pendaftaran` (`id`, `id_pasien`, `id_dokter`, `tgl_pendaftaran`, `created_at`, `updated_at`) VALUES
(66, 'PAS0001', 'DOK0011', '2022-01-20', '2022-01-03 15:05:18', '2022-01-03 15:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `data_rekamedia`
--

CREATE TABLE `data_rekamedia` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_badan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_periksa` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rekamedia`
--

INSERT INTO `data_rekamedia` (`id`, `id_pasien`, `nama_pasien`, `id_dokter`, `nama_dokter`, `tgl_pendaftaran`, `diagnosis`, `tindakan`, `berat_badan`, `tgl_periksa`, `created_at`, `updated_at`) VALUES
(26, 'PAS0001', 'Akbar', 'DOK0011', 'dokter', '2022-01-20', '-', '-', '-', '2022-01-13', '2022-01-03 15:05:35', '2022-01-03 15:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `data_resep`
--

CREATE TABLE `data_resep` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif_pemeriksaan` double(8,2) NOT NULL,
  `id_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double(8,2) NOT NULL,
  `jumlah` smallint(6) NOT NULL,
  `aturan_makan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_tebus_resep` date NOT NULL,
  `total_obat` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_resep`
--

INSERT INTO `data_resep` (`id`, `id_pasien`, `id_dokter`, `tarif_pemeriksaan`, `id_obat`, `harga`, `jumlah`, `aturan_makan`, `tgl_tebus_resep`, `total_obat`, `created_at`, `updated_at`) VALUES
(77, 'PAS0001', 'DOK0011', 50000.00, 'OBT0003', 50000.00, 2, '-', '2022-01-05', 150000.00, '2022-01-03 15:05:51', '2022-01-03 15:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `data_resepsionis`
--

CREATE TABLE `data_resepsionis` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_resepsionis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_resepsionis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_resepsionis`
--

INSERT INTO `data_resepsionis` (`id`, `id_resepsionis`, `id_user`, `nama_resepsionis`, `alamat`, `telepon`, `created_at`, `updated_at`) VALUES
(1, 'RSP0001', '37', 'Resepsionis', 'bandung', '04395935443', '2021-12-30 10:34:41', '2021-12-30 10:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kembalian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`id`, `id_transaksi`, `id_pasien`, `id_dokter`, `total_bayar`, `bayar`, `kembalian`, `tgl_pembayaran`, `created_at`, `updated_at`) VALUES
(6, 'TRANS0001', 'PAS0001', 'DOK0011', '150000', '5000000', '4850000', '2022-01-21', '2022-01-03 15:06:05', '2022-01-03 15:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_12_10_104325_create_data_obat_table', 1),
(4, '2021_12_11_142450_create_data_dokter_table', 2),
(5, '2021_12_13_080929_create_data_pasien_table', 3),
(6, '2021_12_13_123719_create_data_pendaftaran_table', 3),
(8, '2021_12_18_144713_create_data_rekamedia_table', 4),
(9, '2021_12_20_130510_create_data_resep_table', 5),
(10, '2021_12_22_100811_create_data_kategori_obat_table', 6),
(11, '2021_12_27_065115_create_data_transaksi_table', 7),
(12, '2021_12_30_150321_create_data_apoteker_table', 8),
(13, '2021_12_30_151423_create_data_apoteker_table', 9),
(14, '2021_12_30_171740_create_data_resepsionis_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `hak_akses` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `hak_akses`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'admin', 'admin@gmail.com', '$2y$10$98nsfrCHO1syH6TgfU4CI.LLiPJoBAiEC5z3lmrII1ooik6zCQw7C', '2y06yc1VGeS9JcHuOoFL7xa74MudY4GI9CrMnTTD3o9HlKd4zXTdsQccjMPK', '2021-12-29 07:30:53', '2021-12-29 07:30:53'),
(35, 'apoteker', 'Apoteker', 'apoteker@gmail.com', '$2y$10$yDKQpy3kN9uzyJ5baz5sQ.9ctdAcqwKh2YlZ743ERwcVkwJ7Shb1K', 'Z6s1xpez27B9iIpfE3MuOt5D0sDDleCP7gMjmXlPfHMO6Uaq3cyZoh1bSEU2', '2021-12-30 08:36:54', '2021-12-30 08:36:54'),
(36, 'dokter', 'dokter', 'dokter@gmail.com', '$2y$10$X27mF.CTI2.qjf.dcD3zVeMEWap67GtRqyODd44WlH76C958NANZW', 'SgmbUVscx0E7Kx8yTbvjCjMt8eHwDtwcstq2vYBeuYIPOBF5BNFSRgN2ycid', '2021-12-30 09:49:15', '2021-12-30 09:49:15'),
(37, 'resepsionis', 'Resepsionis', 'resepsionis@gmail.com', '$2y$10$UIS6I.vGFeZcT8kZSgMq/eWRBLkxRsKhc.ghzauPfgR/dimR3qM56', 'sOR497CrDts1xKiRb5DFXimHElwAztOvE6fhVrBlEHQjR2G62XXuogR00AnB', '2021-12-30 10:34:41', '2021-12-30 10:34:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_apoteker`
--
ALTER TABLE `data_apoteker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_dokter`
--
ALTER TABLE `data_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kategori_obat`
--
ALTER TABLE `data_kategori_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_obat`
--
ALTER TABLE `data_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rekamedia`
--
ALTER TABLE `data_rekamedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_resep`
--
ALTER TABLE `data_resep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_resepsionis`
--
ALTER TABLE `data_resepsionis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_apoteker`
--
ALTER TABLE `data_apoteker`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_dokter`
--
ALTER TABLE `data_dokter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_kategori_obat`
--
ALTER TABLE `data_kategori_obat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `data_obat`
--
ALTER TABLE `data_obat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `data_rekamedia`
--
ALTER TABLE `data_rekamedia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `data_resep`
--
ALTER TABLE `data_resep`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `data_resepsionis`
--
ALTER TABLE `data_resepsionis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
