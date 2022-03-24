-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Sep 2021 pada 08.14
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topsis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatifs`
--

INSERT INTO `alternatifs` (`id`, `alternatif`, `created_at`, `updated_at`) VALUES
(1, 'Telkomsel', '2021-09-16 00:19:20', '2021-09-16 03:15:16'),
(2, 'Indosat', '2021-09-13 07:07:01', '2021-09-13 07:07:01'),
(3, 'XL', '2021-09-13 07:25:43', '2021-09-13 07:25:43'),
(4, 'Smartfren', '2021-09-16 02:02:26', '2021-09-16 02:02:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_kriteria` int(11) NOT NULL,
  `atribut` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriterias`
--

INSERT INTO `kriterias` (`id`, `kriteria`, `bobot_kriteria`, `atribut`, `created_at`, `updated_at`) VALUES
(1, 'Kualitas Produk', 30, 'Benefit', '2021-09-16 02:55:17', '2021-09-16 03:13:10'),
(2, 'Harga', 25, 'Cost', '2021-09-16 02:56:23', '2021-09-16 02:56:23'),
(3, 'Waktu Akses', 20, 'Benefit', '2021-09-16 02:56:41', '2021-09-16 02:56:41'),
(4, 'Kecepatan Akses', 20, 'Benefit', '2021-09-16 02:56:57', '2021-09-16 02:56:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matriks`
--

CREATE TABLE `matriks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poin` int(11) NOT NULL,
  `nilai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matriks`
--

INSERT INTO `matriks` (`id`, `kriteria`, `poin`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'Kualitas Produk', 4, 'Cukup', '2021-09-16 09:27:29', '2021-09-16 23:27:28'),
(2, 'Kualitas Produk', 6, 'Baik', '2021-09-16 09:27:42', '2021-09-16 09:27:42'),
(3, 'Kualitas Produk', 8, 'Sangat Baik', '2021-09-16 09:27:54', '2021-09-16 09:27:54'),
(4, 'Kualitas Produk', 10, 'Memuaskan', '2021-09-16 09:28:11', '2021-09-16 09:28:11'),
(5, 'Harga', 4, 'Harga Standar/Minimum', '2021-09-16 09:28:47', '2021-09-16 09:28:47'),
(6, 'Harga', 6, 'Harga Sesuai Bonus yang Didapatkan', '2021-09-16 09:29:04', '2021-09-16 09:29:04'),
(7, 'Harga', 8, 'Harga Sesuai Kualitas', '2021-09-16 09:29:16', '2021-09-21 10:13:11'),
(8, 'Harga', 10, 'Harga Lebih Murah', '2021-09-16 09:29:33', '2021-09-16 09:29:33'),
(9, 'Waktu Akses', 4, 'Cukup', '2021-09-16 09:30:02', '2021-09-16 09:30:02'),
(10, 'Waktu Akses', 6, 'Baik', '2021-09-16 09:30:18', '2021-09-16 09:30:18'),
(11, 'Waktu Akses', 8, 'Sangat Baik', '2021-09-16 09:30:31', '2021-09-16 09:30:31'),
(12, 'Waktu Akses', 10, 'Memuaskan', '2021-09-16 09:30:41', '2021-09-16 09:30:41'),
(13, 'Kecepatan Akses', 4, 'Cukup', '2021-09-16 09:30:57', '2021-09-16 09:30:57'),
(14, 'Kecepatan Akses', 6, 'Baik', '2021-09-16 09:31:10', '2021-09-16 09:31:10'),
(15, 'Kecepatan Akses', 8, 'Sangat Baik', '2021-09-16 09:31:28', '2021-09-16 09:31:28'),
(16, 'Kecepatan Akses', 10, 'Memuaskan', '2021-09-16 09:31:50', '2021-09-16 09:31:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_09_08_181532_create_alternatifs', 2),
(15, '2021_09_14_123821_create_kriterias', 3),
(21, '2021_09_16_102048_create_matriks', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2021-09-08 08:28:38', '$2y$10$wRIGU/FvBOW/VGGJ2.zsiucNHElHTA13iXP/2pDAtPV3yIl1DB7VW', NULL, '2021-09-08 08:28:38', '2021-09-08 08:28:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kriteria` (`kriteria`);

--
-- Indeks untuk tabel `matriks`
--
ALTER TABLE `matriks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `matriks`
--
ALTER TABLE `matriks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
