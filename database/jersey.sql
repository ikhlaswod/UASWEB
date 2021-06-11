-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2021 pada 17.55
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jersey`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `jumlah_brg` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customs`
--

CREATE TABLE `customs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengiriman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_brg` int(11) NOT NULL,
  `pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cek_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customs`
--

INSERT INTO `customs` (`id`, `nama`, `alamat`, `no_tlp`, `pengiriman`, `jumlah_brg`, `pembayaran`, `cek_pembayaran`, `status`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Ananiklas', 'Kp.barukaso', '087771234521', 'JNE', 1, 'Transfer', '', 0, 3, 2, '2021-06-11 00:03:30', '2021-06-11 00:03:30'),
(2, 'anandaikhlas', 'jl gogoh 123', '089897957846', 'J&T', 2, 'Bayar ditempat', '', 0, 7, 3, '2021-06-11 01:14:04', '2021-06-11 01:14:04'),
(3, 'Ananiklas', 'jln cagak', '081231213321', 'JNE', 2, 'Transfer', '', 0, 7, 2, '2021-06-11 06:35:27', '2021-06-11 06:35:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `custom_orders`
--

CREATE TABLE `custom_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengiriman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_brg` int(11) NOT NULL,
  `pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `cek_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(2, 'Bundes Liga', '2021-06-10 07:59:56', '2021-06-10 07:59:56'),
(3, 'Priemere League', '2021-06-10 08:00:06', '2021-06-10 08:00:06'),
(5, 'Laliga', '2021-06-11 01:05:46', '2021-06-11 01:05:46'),
(6, 'Serie A', '2021-06-11 06:54:45', '2021-06-11 06:54:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2018_09_18_083147_create_kategoris_table', 1),
(16, '2018_09_18_085727_create_products_table', 1),
(17, '2018_09_18_090750_create_customs_table', 1),
(18, '2018_10_17_092606_create_custom_orders_table', 1),
(19, '2018_10_18_065230_create_product_customs_table', 1),
(20, '2018_11_12_041707_add_verification_to_users', 1),
(21, '2018_12_02_123247_laratrust_setup_tables', 1),
(22, '2019_01_14_073959_create_carts_table', 1),
(23, '2019_01_24_161632_create_beritas_table', 1),
(24, '2019_02_11_064654_create_testimonis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `nama`, `deskripsi`, `gambar`, `slug`, `harga`, `kategori_id`, `created_at`, `updated_at`) VALUES
(3, 'Manchester United', '<p>𝗦𝗣𝗘𝗦𝗜𝗙𝗜𝗞𝗔𝗦𝗜 𝗝𝗘𝗥𝗦𝗘𝗬:</p>\r\n\r\n<p>👍bahan/kain polyester High quality</p>\r\n\r\n<p>👍logo Apparel club bordir/plat HD</p>\r\n\r\n<p>👍versi player adizero, Climachill, vaporknit, HeatRDY dll TERBAIK</p>\r\n\r\n<p>👍sponsor poliflex printing HD (jika ada)</p>\r\n\r\n<p>👍Barang dipilih yg terbaik PREMIUM</p>', '6mHFjY_mu1.png', 'manchester-united-9HrtFF', '125000', 3, '2021-06-10 08:09:50', '2021-06-10 08:14:16'),
(4, 'Bayer Muncen', '<p>𝗦𝗣𝗘𝗦𝗜𝗙𝗜𝗞𝗔𝗦𝗜 𝗝𝗘𝗥𝗦𝗘𝗬:</p>\r\n\r\n<p>👍bahan/kain polyester High quality</p>\r\n\r\n<p>👍logo Apparel club bordir/plat HD</p>\r\n\r\n<p>👍versi player adizero, Climachill, vaporknit, HeatRDY dll TERBAIK</p>\r\n\r\n<p>👍sponsor poliflex printing HD (jika ada)</p>\r\n\r\n<p>👍Barang dipilih yg terbaik PREMIUM</p>', 'MdBQGX_munchen.png', 'bayer-muncen-HgEp2T', '125000', 2, '2021-06-10 08:10:39', '2021-06-11 00:29:48'),
(7, 'Real Madrid', '<p>𝗦𝗣𝗘𝗦𝗜𝗙𝗜𝗞𝗔𝗦𝗜 𝗝𝗘𝗥𝗦𝗘𝗬:</p>\r\n\r\n<p>👍bahan/kain polyester High quality</p>\r\n\r\n<p>👍logo Apparel club bordir/plat HD</p>\r\n\r\n<p>👍versi player adizero, Climachill, vaporknit, HeatRDY dll TERBAIK</p>\r\n\r\n<p>👍sponsor poliflex printing HD (jika ada)</p>\r\n\r\n<p>👍Barang dipilih yg terbaik PREMIUM</p>', 'z1cRDe_madrid.png', 'real-madrid', '125000', 5, '2021-06-11 01:07:20', '2021-06-11 01:07:20'),
(8, 'Ac Milan', '<p>𝗦𝗣𝗘𝗦𝗜𝗙𝗜𝗞𝗔𝗦𝗜 𝗝𝗘𝗥𝗦𝗘𝗬:</p>\r\n\r\n<p>👍bahan/kain polyester High quality</p>\r\n\r\n<p>👍logo Apparel club bordir/plat HD</p>\r\n\r\n<p>👍versi player adizero, Climachill, vaporknit, HeatRDY dll TERBAIK</p>\r\n\r\n<p>👍sponsor poliflex printing HD (jika ada)</p>\r\n\r\n<p>👍Barang dipilih yg terbaik PREMIUM</p>', 'BIquBv_acmilan.png', 'ac-milan', '125000', 6, '2021-06-11 06:55:47', '2021-06-11 06:55:47'),
(9, 'Leceister', '<p>𝗦𝗣𝗘𝗦𝗜𝗙𝗜𝗞𝗔𝗦𝗜 𝗝𝗘𝗥𝗦𝗘𝗬:</p>\r\n\r\n<p>👍bahan/kain polyester High quality</p>\r\n\r\n<p>👍logo Apparel club bordir/plat HD</p>\r\n\r\n<p>👍versi player adizero, Climachill, vaporknit, HeatRDY dll TERBAIK</p>\r\n\r\n<p>👍sponsor poliflex printing HD (jika ada)</p>\r\n\r\n<p>👍Barang dipilih yg terbaik PREMIUM</p>', 'XR6lKM_leicester.png', 'leceister', '125000', 3, '2021-06-11 07:06:40', '2021-06-11 07:06:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_customs`
--

CREATE TABLE `product_customs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, '2021-06-09 03:36:30', '2021-06-09 03:36:30'),
(2, 'member', 'Member', NULL, '2021-06-09 03:36:30', '2021-06-09 03:36:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(2, 3, 'App\\User'),
(2, 4, 'App\\User'),
(2, 5, 'App\\User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonis`
--

CREATE TABLE `testimonis` (
  `id` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verification_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `verification_token`, `is_verified`) VALUES
(1, 'Admin Jersey', 'adminjersey@gmail.com', '$2y$10$7s03V6Y80Pukue77BAhJD.Jm7fNfbmK7XPcdRlZEoo52B4OUBEuzC', 'Sy6Go5zTFoyEHgyeRuIAk1LVhQJAbmZPJQXOiY5E1AiEoe00GUmbMZmJrD7V', '2021-06-09 03:36:31', '2021-06-09 03:36:31', NULL, 1),
(2, 'Ananiklas', 'ananiklas@gmail.com', '$2y$10$NK3kV0sEL7NS8pRyt6rguur048sWn0ROK4H8Jip/aqh8AkyDyunIq', 'zzuda0QGtrUlfLPpvzbnwGkUS2z5zSiNfK7zyPUpmDDOGhzQfGdvybEPosQq', '2021-06-09 03:37:50', '2021-06-09 03:37:50', 'k3C7Hz4g3iLaVbjNtlNd04Km66x2LG22D7EPVy15', 1),
(3, 'anandaikhlas', 'anandaikhlas@gmail.com', '$2y$10$gtq3jnhE5mGNfCE2eqdo..eh1b7.p647gYz3O./pIwOQkKgskdp/6', 'uOMRKR54hro4kv5tKUNKfkFAUaX4XpXFD2wvmiJx9cx3bRnx0l6VnExkudAc', '2021-06-11 01:10:52', '2021-06-11 01:10:53', 'dVSmwgSZH4uSNSjLzgquO4JUTpukVcV1dlyPW8JL', 0),
(4, 'ikhlasnanda', 'ikhlasnanda@gmail.com', '$2y$10$zEAce7wtoZ2.OQ3z0FCwIuffG0rUf8xBRo0IuhDy4jSyjAkrnelD6', 'EPSa83VMDGCqFtvaCPK8A4oWKqgmG8HViZJs5gzlvfeIYyyRFRcG1Mo69VYR', '2021-06-11 07:09:46', '2021-06-11 07:09:47', 'XGMuCOBqzeBRYlcVE2OkucYi05HzKkBKZiqbOp0O', 0),
(5, 'ikhlassanandaa', 'ikhlassanandaa@gmail.com', '$2y$10$.izZuffkcm8acSkpO9zwte1IOnULi.O5zPbPY88fekWDCFPT3WJki', 'dbHCLU9Lm6RFq4X7GpwpNxLFZio8WchJAJ2UdOkHy1MqJm0HsXf6uTP82WRx', '2021-06-11 07:13:06', '2021-06-11 07:13:07', '2vgScH0nxxo9lotsPzGolcXxvXaFC4LXsUDj01Eo', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customs`
--
ALTER TABLE `customs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customs_product_id_foreign` (`product_id`),
  ADD KEY `customs_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `custom_orders`
--
ALTER TABLE `custom_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custom_orders_product_id_foreign` (`product_id`),
  ADD KEY `custom_orders_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
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
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indeks untuk tabel `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_kategori_id_foreign` (`kategori_id`);

--
-- Indeks untuk tabel `product_customs`
--
ALTER TABLE `product_customs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_customs_kategori_id_foreign` (`kategori_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `customs`
--
ALTER TABLE `customs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `custom_orders`
--
ALTER TABLE `custom_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `product_customs`
--
ALTER TABLE `product_customs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `customs`
--
ALTER TABLE `customs`
  ADD CONSTRAINT `customs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `customs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `custom_orders`
--
ALTER TABLE `custom_orders`
  ADD CONSTRAINT `custom_orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `custom_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`);

--
-- Ketidakleluasaan untuk tabel `product_customs`
--
ALTER TABLE `product_customs`
  ADD CONSTRAINT `product_customs_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`);

--
-- Ketidakleluasaan untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
