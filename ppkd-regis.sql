-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Sep 2024 pada 09.15
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppkd-regis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gelombangs`
--

CREATE TABLE `gelombangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_gelombang` varchar(255) NOT NULL,
  `aktif` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gelombangs`
--

INSERT INTO `gelombangs` (`id`, `nama_gelombang`, `aktif`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Gelombang 1', 0, '2024-09-13 02:05:08', '2024-09-13 02:05:41', NULL),
(2, 'Gelombang 2', 1, '2024-09-13 02:05:29', '2024-09-13 02:05:41', NULL),
(3, 'Gelombang 3', 0, '2024-09-13 02:05:38', '2024-09-13 02:05:41', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusans`
--

CREATE TABLE `jurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jurusans`
--

INSERT INTO `jurusans` (`id`, `nama_jurusan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Operator Komputer', '2024-09-13 01:21:09', '2024-09-13 01:21:09', NULL),
(2, 'Bahasa Inggris', '2024-09-13 01:21:17', '2024-09-13 01:21:17', NULL),
(3, 'Desain Grafis', '2024-09-13 01:21:27', '2024-09-13 01:21:27', NULL),
(4, 'Tata Boga', '2024-09-13 01:21:35', '2024-09-13 01:21:35', NULL),
(5, 'Tata Busana', '2024-09-13 01:21:45', '2024-09-13 01:21:45', NULL),
(6, 'Tata Graha', '2024-09-13 01:21:53', '2024-09-13 01:21:53', NULL),
(7, 'Teknik Pendingin', '2024-09-13 01:22:02', '2024-09-13 01:22:02', NULL),
(8, 'Teknik Komputer', '2024-09-13 01:22:13', '2024-09-13 01:22:13', NULL),
(9, 'Otomotif Sepeda Motor', '2024-09-13 01:22:29', '2024-09-13 01:22:29', NULL),
(10, 'Jaringan Komputer', '2024-09-13 01:22:40', '2024-09-13 01:22:40', NULL),
(11, 'Barista', '2024-09-13 01:24:20', '2024-09-13 01:24:20', NULL),
(12, 'Bahasa Korea', '2024-09-13 01:24:34', '2024-09-13 01:24:34', NULL),
(13, 'MakeUp Artist', '2024-09-13 01:24:48', '2024-09-13 01:24:48', NULL),
(14, 'Video Editor', '2024-09-13 01:24:59', '2024-09-13 01:24:59', NULL),
(15, 'Content Creator', '2024-09-13 01:25:14', '2024-09-13 01:25:14', NULL),
(16, 'Web Programming', '2024-09-13 01:25:25', '2024-09-13 01:25:25', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_level` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `levels`
--

INSERT INTO `levels` (`id`, `nama_level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', NULL, '2024-09-16 18:33:03', NULL),
(2, 'Admin', '2024-09-13 01:15:49', '2024-09-16 18:33:15', NULL),
(3, 'PIC Jurusan', '2024-09-13 01:15:59', '2024-09-13 01:15:59', NULL),
(4, 'Instruktur', '2024-09-16 21:02:56', '2024-09-16 21:02:56', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2024_09_10_033403_create_personal_access_tokens_table', 1),
(4, '2024_09_10_045308_create_jurusans_table', 1),
(5, '2024_09_11_045212_create_levels_table', 1),
(9, '2024_09_11_075408_create_users_table', 2),
(10, '2024_09_12_031419_create_gelombangs_table', 2),
(11, '2024_09_12_060124_create_peserta_pelatihan_table', 3),
(12, '2024_09_16_082922_create_user_jurusan_table', 4),
(13, '2024_09_17_023908_add_delete_at_to_users', 5),
(14, '2024_09_17_035957_add_delete_at_to_levels', 6),
(15, '2024_09_17_040420_add_delete_at_to_jurusans', 7),
(16, '2024_09_17_041043_add_delete_at_to_peserta_pelatihan', 8),
(17, '2024_09_17_041311_add_delete_at_to_gelombangs', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_pelatihan`
--

CREATE TABLE `peserta_pelatihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `id_gelombang` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `kartu_keluarga` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `kejuruan` varchar(100) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `aktivitas_saat_ini` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peserta_pelatihan`
--

INSERT INTO `peserta_pelatihan` (`id`, `id_jurusan`, `id_gelombang`, `nama_lengkap`, `nik`, `kartu_keluarga`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pendidikan_terakhir`, `nama_sekolah`, `kejuruan`, `nomor_hp`, `email`, `aktivitas_saat_ini`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 3, 2, 'Ranto Gudhel', '3175070505030019', '123131', 'Lanang', 'BREBES', '2024-09-16', 'SMK/SLTA', 'smkn 5 jakarta', 't. mesin', '0895413010083', 'dgdvdgdgdhdhdd@gmail.com', 'Jualan Nasi', 0, '2024-09-13 23:00:54', '2024-09-16 18:23:16', NULL),
(4, 8, 2, 'ggggg', '3175070505030019', '8213091093813', 'Lanang', 'BREBES', '2024-09-12', 'SMK/SLTA', 'SMKN 5 Jakarta', 't. mesin', '0895413010083', 'fatsyah.regiyanto@gmail.com', 'Jualan Nasi', 1, '2024-09-16 04:38:01', '2024-09-16 04:38:43', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Kw5OUj8pqwMN9kECK0G5Yvn1SY8LFSkczZDUaGOO', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR2puRnNLNDJvOWdTR1JybG1zTmp2T0ZCWDlhYXVOb1RoWFU1NWNjMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL2NyZWF0ZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1726560373),
('QcKp9KhQE4VJTpNxwJDwRJqkoHyfu2rkJcEl2SqK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidnlJb29XVUh4ekpGaXNZS3QwUzlYYjdraUJtNWhRN3ZBQWF5Z21VSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL2NyZWF0ZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1726634795);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_level` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `id_level`, `nama_lengkap`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Rohmat Firdaus', 'administrator@gmail.com', '2024-09-16 18:40:52', '$2y$12$Iz58kRHDs9o46/HTJs.JK.Y4dPNXDGKyKdBoV6ncxa/DoPqB/XJ2m', 'jm04IM6X6Yar2u9aXqugRfXJk00P7i0yXiKGAh36olp1m4WMwudWatpfAcu7', '2024-09-16 18:40:52', '2024-09-16 18:40:52', NULL),
(2, 2, 'Ranto Gudhel', 'admin@gmail.com', '2024-09-16 18:40:53', '$2y$12$D75v3BqGnFPFtBqHXSkSjuxuQ9WOtUzvS04I8wcxzdGaHO0lSLSM6', 'FqXvhCmjruhqFSJW18H7grhpGyzqCAD1vQmC2r1XTFYwIngi22D2oM1QnLcl', '2024-09-16 18:40:53', '2024-09-16 18:40:53', NULL),
(3, 3, 'Yanto Kopling', 'pic@gmail.com', '2024-09-16 18:40:53', '$2y$12$CKZPWdkEcExochSrU94uzexVNfE/Ego/bKAJ7qNoyMpOJtwRNy.EG', 'vyl567RGqXmn6bhPApTpeQY1bvc5CGhCBBtYZ7KFv0E5Oz6DZU9FTWsXhQIf', '2024-09-16 18:40:53', '2024-09-16 18:40:53', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_jurusan`
--

CREATE TABLE `user_jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_level` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gelombangs`
--
ALTER TABLE `gelombangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `peserta_pelatihan`
--
ALTER TABLE `peserta_pelatihan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `peserta_pelatihan_email_unique` (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_level_foreign` (`id_level`);

--
-- Indeks untuk tabel `user_jurusan`
--
ALTER TABLE `user_jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_jurusan_id_jurusan_foreign` (`id_jurusan`),
  ADD KEY `user_jurusan_id_user_foreign` (`id_user`),
  ADD KEY `user_jurusan_id_level_foreign` (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gelombangs`
--
ALTER TABLE `gelombangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peserta_pelatihan`
--
ALTER TABLE `peserta_pelatihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user_jurusan`
--
ALTER TABLE `user_jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_level_foreign` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_jurusan`
--
ALTER TABLE `user_jurusan`
  ADD CONSTRAINT `user_jurusan_id_jurusan_foreign` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusans` (`id`),
  ADD CONSTRAINT `user_jurusan_id_level_foreign` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `user_jurusan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
