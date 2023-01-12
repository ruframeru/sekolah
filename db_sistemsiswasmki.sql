-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2022 pada 19.58
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistemsiswasmki`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `absen` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `jenkel_guru` varchar(255) NOT NULL,
  `no_tlp_guru` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama_guru`, `jenkel_guru`, `no_tlp_guru`, `created_at`, `updated_at`) VALUES
(3, 'Rianismara S.A, S.Pd.', 'Perempuan', '0876536273271', '2022-11-19 21:23:46', '2022-11-19 21:23:46'),
(4, 'Muhammad Ikhwan, S.Kom.', 'Laki-Laki', '0893173123', '2022-11-19 21:26:07', '2022-11-19 21:26:07'),
(5, 'Khoriyah Dwi Utami, S.Pd.', 'Perempuan', '0892173134', '2022-11-19 21:26:56', '2022-11-19 21:26:56'),
(6, 'Dewi Santika, S.Kom.', 'Perempuan', '0887878431', '2022-11-19 21:27:33', '2022-11-19 21:27:33'),
(7, 'Harnoko, S.Kom.', 'Laki-Laki', '083617312', '2022-11-19 21:28:10', '2022-11-19 21:28:10'),
(8, 'M.Sukarata, S.Pd.', 'Laki-Laki', '082397473412', '2022-11-19 21:28:39', '2022-11-19 21:28:39'),
(9, 'Sohib, M.Pd.', 'Laki-Laki', '09247823', '2022-11-19 21:29:13', '2022-11-19 21:29:13'),
(10, 'MZ.Nurus Sobah, S.Pd', 'Laki-Laki', '0873161444', '2022-11-19 21:32:38', '2022-11-19 21:32:38'),
(11, 'Faiza, S.Pd.', 'Perempuan', '078126123123', '2022-11-19 21:33:08', '2022-11-19 21:33:08'),
(12, 'Nurlaelani, S.Pd.', 'Perempuan', '08216378153', '2022-11-19 21:33:38', '2022-11-19 21:33:38'),
(13, 'Mahmudin, S.Kom.', 'Laki-Laki', '08276712131', '2022-11-19 21:34:11', '2022-11-19 21:34:11'),
(14, 'Suherman, S. Si., M.Pd.', 'Laki-Laki', '08', '2022-11-26 15:26:57', '2022-11-26 23:26:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `total_siswa` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `guru_id`, `total_siswa`, `created_at`, `updated_at`) VALUES
(4, 'XA', 9, '', '2022-11-19 21:36:03', '2022-11-19 13:36:03'),
(5, 'XB', 10, '', '2022-11-19 21:36:21', '2022-11-19 13:36:21'),
(6, 'XIA', 4, '', '2022-11-19 21:36:50', '2022-11-19 13:36:50'),
(7, 'XIB', 6, '', '2022-11-19 21:37:03', '2022-11-19 13:37:03'),
(8, 'XIIA', 5, '', '2022-11-19 21:37:15', '2022-11-19 13:37:15'),
(9, 'XIIB', 11, '', '2022-11-19 21:37:28', '2022-11-19 13:37:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_mapel` varchar(255) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`, `guru_id`, `created_at`, `updated_at`) VALUES
(7, 'Matematika', 5, '2022-11-25 17:05:26', '2022-11-25 09:05:26'),
(8, 'B.indonesia', 11, '2022-11-25 17:09:35', '2022-11-25 09:09:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_siswa`
--

CREATE TABLE `mapel_siswa` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `jenis_tugas` varchar(255) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(6, '2022_11_10_121757_create_siswa_table', 1);

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
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'adminasiq@gmail.com', 'admin', NULL, '$2y$10$4hZxKw9I5gf0L7mcyr1I7uYrPvenfx0zXOEmhmM1M.gRjrErimSLS', 'JU6Hbhz4k6NtwIJ4asiLCxKQzD6wgYs4nDtjcsPZeCAnXI8z0GqEhbhP1Utm', '2022-11-19 18:11:39', '2022-11-19 18:11:39'),
(14, 'Bambang Heru Firnadi', 'bambang21@gmail.com', 'siswa', NULL, '$2y$10$SIH3wya7218mSptGhpWKJOfBHcoa9tx0VxqWxMSR4dUWrzGI8uygq', 'cnDYaopr1u603g9YIi8KuRlUXFBb57wHQUEv8oUGzJ7aPKi9Yd', '2022-11-19 22:51:55', '2022-11-19 22:51:55'),
(15, 'Zainudin', 'udin@gmail.com', 'siswa', NULL, '$2y$10$optVNIQvTv99o0l1AkylQ..hMjdXXvgH1gchpw9ONekd0odiUhAbe', 'qG4h2hf274PkG3s8XzSHNxiyNqvzvfUd4JxOecJYR5e2huIwYg', '2022-11-20 13:30:31', '2022-11-20 13:30:31'),
(16, 'heur', 'her@gmail.com', 'siswa', NULL, '$2y$10$qFtwXg2.x1eECIYpe2KfcuN8q8QO2SDl3qjIFveNUrlRdsD5EsDsS', 'b79G9GE5bvFIYrggbr4e6BOZJ4RWYVqKhS3muT24vqzv28QrUd', '2022-11-25 17:19:18', '2022-11-25 17:19:18'),
(17, 'Bambang Heru', 'ruu@gmail.com', 'siswa', NULL, '$2y$10$SJpQsmHY6FVJh99SagdCBeNHpYHt2wT5O1hskutORrN5cCV78owp.', 'hxN77Iy93Xap7FqJX3tgj7fE7M5nNe5cbyy92LAWDbQI2TUNff', '2022-11-26 22:22:04', '2022-11-26 22:22:04'),
(18, 'Basda', 'da@gmail.com', 'siswa', NULL, '$2y$10$c3Vq2FqHjvan23KzBaPBTe88HQoII42VbmCtGOTA74Tot3aCXI4IC', 'tL9sZCi1q8MrCmif8MkhreBLdl2oTdgBFNA96Yo2RMZzt8i6b2', '2022-11-27 01:55:09', '2022-11-27 01:55:09'),
(19, 'Paca', 'pa@gmail.com', 'siswa', NULL, '$2y$10$oTSVNNfsvWGZ2aJV7.aCo.x8TPBFhuKWysuQ8PzdJAhgtWdAVGnP6', 'XSNzCexy64oJ6vhK7HP89XabWp5i9GMubng1ZbCkSsfAPwG4im', '2022-11-27 01:56:24', '2022-11-27 01:56:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
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
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
