-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 02:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sada_hobby`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'imanuel saragih', 'admin', '$2y$10$a89NGQbLT3KFVYo/mlBv/OecplOwX3f58wkpLHRN.Hu4T9oG4NJyO'),
(2, 'admin07', 'admin07', '$2y$10$1SsSOxY6AbhmM0jE7CwKzuIyYjppDr7ZcL8B.kpCuYbkvjfZGl0re'),
(3, 'imanuel', 'imanuel', '$2y$10$p2D67.ULob6/m0h5RbKCp.W/mn.FOpENkpsN0wvmScbdaMV6RgN/q'),
(4, 'admin2', 'admin2', '$2y$10$dWcHqTUgcjOujqmIZaAPqOwRwYxSPHBwKE.t.ElydUfQ9MzEr9hWS');

-- --------------------------------------------------------

--
-- Table structure for table `etalases`
--

CREATE TABLE `etalases` (
  `id_etalase` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `etalases`
--

INSERT INTO `etalases` (`id_etalase`, `nama`) VALUES
(1, 'Hotwheels'),
(3, 'Majorette'),
(2, 'Tomica');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `admin_id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, 'User mengedit produk Hotwheels Hot Rally Racing pada etalase Hotwheels', '2023-04-08 09:53:59', '2023-04-08 09:53:59'),
(2, 1, 'User menambahkan produk Tomica White Car pada etalase Tomica', '2023-04-08 09:59:44', '2023-04-08 09:59:44'),
(3, 1, 'User menambahkan produk Tomica Tomy Takara pada etalase Tomica', '2023-04-08 10:01:03', '2023-04-08 10:01:03'),
(4, 1, 'User menambahkan produk Takara Tomy Tipe Panjang pada etalase Tomica', '2023-04-08 10:01:53', '2023-04-08 10:01:53'),
(5, 1, 'User mengedit etalase Hotwheelss', '2023-04-13 01:05:39', '2023-04-13 01:05:39'),
(6, 1, 'User mengedit etalase Hotwheels', '2023-04-13 01:05:47', '2023-04-13 01:05:47'),
(7, 1, 'User menghapus etalase Efsi', '2023-05-24 09:22:33', '2023-05-24 09:22:33'),
(8, 1, 'User mengedit produk Tomica White Car pada etalase Tomica', '2023-05-26 09:14:19', '2023-05-26 09:14:19'),
(9, 1, 'User mengedit produk Tomica White Car pada etalase Tomica', '2023-05-26 09:15:08', '2023-05-26 09:15:08'),
(10, 1, 'User mengedit produk Tomica White Car pada etalase Tomica', '2023-05-26 09:19:49', '2023-05-26 09:19:49'),
(11, 1, 'User mengedit produk Tomica White Car pada etalase Tomica', '2023-05-26 09:20:01', '2023-05-26 09:20:01'),
(12, 1, 'User mengedit produk Tomica White Car pada etalase Tomica', '2023-05-26 09:20:15', '2023-05-26 09:20:15'),
(13, 1, 'User menghapus produk Tomica Rally X pada etalase Tomica', '2023-05-26 09:22:26', '2023-05-26 09:22:26'),
(14, 1, 'User menghapus produk Tomica White Car pada etalase Tomica', '2023-05-26 09:22:46', '2023-05-26 09:22:46'),
(15, 1, 'User menambahkan produk Hotwheels Velvet pada etalase Hotwheels', '2023-06-04 08:10:36', '2023-06-04 08:10:36'),
(16, 1, 'User menghapus produk Hotwheels Velvet pada etalase Hotwheels', '2023-06-04 08:20:25', '2023-06-04 08:20:25'),
(17, 1, 'User mengedit produk Hotwheels Hot Rally Racing pada etalase Hotwheels', '2023-06-04 08:25:01', '2023-06-04 08:25:01'),
(18, 1, 'User mengedit produk Hotwheels Hot Rally SS pada etalase Hotwheels', '2023-06-04 08:25:08', '2023-06-04 08:25:08'),
(19, 1, 'User mengedit produk Majorette X pada etalase Majorette', '2023-06-04 08:25:18', '2023-06-04 08:25:18'),
(20, 1, 'User mengedit produk Majorette X pada etalase Majorette', '2023-06-04 08:26:15', '2023-06-04 08:26:15'),
(21, 1, 'User mengedit produk Majorette X pada etalase Majorette', '2023-06-04 08:26:23', '2023-06-04 08:26:23'),
(22, 1, 'User mengedit produk Majorette X pada etalase Majorette', '2023-06-04 08:26:31', '2023-06-04 08:26:31'),
(23, 1, 'User mengedit produk Majorette X pada etalase Majorette', '2023-06-04 08:27:19', '2023-06-04 08:27:19'),
(24, 1, 'User menambahkan produk Hotwheels Velvet pada etalase Hotwheels', '2023-06-04 08:28:04', '2023-06-04 08:28:04'),
(25, 1, 'User menghapus produk Hotwheels Velvet pada etalase Hotwheels', '2023-06-04 08:28:06', '2023-06-04 08:28:06'),
(26, 1, 'User menambahkan laporan transaksi untuk  dengan nama produk ', '2023-06-04 08:58:31', '2023-06-04 08:58:31'),
(27, 1, 'User menambahkan laporan transaksi pada 2023-06-17 dengan nama produk Tomica Red Seventy', '2023-06-04 09:01:27', '2023-06-04 09:01:27'),
(28, 1, 'User mengedit laporan transaksi pada 2023-06-24 dengan nama produk Tomica Red Eleven', '2023-06-04 09:07:10', '2023-06-04 09:07:10'),
(29, 1, 'User menghapus laporan transaksi pada 2023-06-24 dengan nama produk Tomica Red Eleven', '2023-06-04 09:09:34', '2023-06-04 09:09:34'),
(30, 1, 'User mengedit produk Tomica Tomy Takara pada etalase Tomica', '2023-06-04 11:46:25', '2023-06-04 11:46:25'),
(31, 1, 'User mengedit produk Takara Tomy Tipe Panjang pada etalase Tomica', '2023-06-04 11:46:30', '2023-06-04 11:46:30'),
(32, 1, 'User mengedit produk Takara Tomy Tipe Panjang pada etalase Tomica', '2023-06-04 11:48:06', '2023-06-04 11:48:06'),
(33, 1, 'User mengedit produk Tomica Tomy Takara pada etalase Tomica', '2023-06-04 11:48:19', '2023-06-04 11:48:19'),
(34, 1, 'User menambahkan laporan transaksi pada 2023-05-11 dengan nama produk Tomica Red Elevens', '2023-06-04 11:55:03', '2023-06-04 11:55:03'),
(35, 1, 'User menambahkan produk Hotwheelsa33 pada etalase Hotwheels', '2023-06-06 11:25:39', '2023-06-06 11:25:39'),
(36, 1, 'User mengedit laporan transaksi pada 2023-03-30 dengan nama produk Tomica Seventy', '2023-06-06 11:26:03', '2023-06-06 11:26:03'),
(37, 1, 'User menghapus produk Hotwheelsa33 pada etalase Hotwheels', '2023-06-06 11:27:54', '2023-06-06 11:27:54'),
(38, 1, 'User menambahkan produk Hotwheels Velvet pada etalase Hotwheels', '2023-06-13 12:46:21', '2023-06-13 12:46:21'),
(39, 1, 'User mengedit produk Hotwheels Hot Rally Racing pada etalase Hotwheels', '2023-06-14 07:42:16', '2023-06-14 07:42:16'),
(40, 1, 'User mengedit produk Hotwheels Hot Rally Racing pada etalase Hotwheels', '2023-06-14 07:43:45', '2023-06-14 07:43:45'),
(41, 1, 'User mengedit produk Hotwheels Velvet pada etalase Hotwheels', '2023-06-16 05:20:53', '2023-06-16 05:20:53'),
(42, 1, 'User mengedit produk Hotwheels Velvet pada etalase Hotwheels', '2023-06-16 05:23:03', '2023-06-16 05:23:03'),
(43, 4, 'User mengedit produk Hotwheels Hot Rally SS pada etalase Hotwheels', '2023-06-17 04:44:19', '2023-06-17 04:44:19'),
(44, 4, 'User menambahkan produk Hotwheells Racing Ty pada etalase Hotwheels', '2023-06-17 04:45:14', '2023-06-17 04:45:14'),
(45, 4, 'User menghapus produk Hotwheells Racing Ty pada etalase Hotwheels', '2023-06-17 04:45:28', '2023-06-17 04:45:28'),
(46, 4, 'User menambahkan laporan transaksi pada 2023-04-06 dengan nama produk Tomica White CAR', '2023-06-17 04:48:22', '2023-06-17 04:48:22'),
(47, 1, 'User menambahkan laporan transaksi pada 2023-01-14 dengan nama produk Hotwheels White Car', '2023-06-18 06:24:33', '2023-06-18 06:24:33'),
(48, 1, 'User menambahkan laporan transaksi pada 2023-01-05 dengan nama produk Majorette Golden Car', '2023-06-18 06:28:29', '2023-06-18 06:28:29'),
(49, 1, 'User menambahkan laporan transaksi pada 2022-02-18 dengan nama produk Efsi Blue Bird', '2023-06-18 06:30:41', '2023-06-18 06:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id_laporan` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_produk` int(11) NOT NULL,
  `total_transaksi` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporans`
--

INSERT INTO `laporans` (`id_laporan`, `nama_produk`, `harga`, `total_produk`, `total_transaksi`, `tanggal`) VALUES
(4, 'Tomica Seventy', 100000, 4, 400000, '2023-03-30'),
(22, 'Tomica Red Elevens', 100000, 3, 300000, '2023-05-11'),
(23, 'Tomica White CAR', 450000, 3, 1350000, '2023-04-06'),
(24, 'Hotwheels White Car', 150000, 4, 600000, '2023-01-14'),
(25, 'Majorette Golden Car', 750000, 2, 1500000, '2023-01-05'),
(26, 'Efsi Blue Bird', 230000, 10, 2300000, '2022-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_02_23_074126_create_admins_table', 1),
(3, '2023_03_01_062541_create_etalases_table', 2),
(5, '2023_03_03_072415_create_products_table', 3),
(7, '2023_03_10_103447_create_histories_name', 4),
(8, '2023_03_13_180815_add_image_column_to_products_table', 5),
(12, '2023_06_03_152813_create_laporans_table', 6),
(13, '2023_06_04_150446_add_stok_to_products_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_etalase` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `nama`, `harga`, `stok`, `deskripsi`, `image`, `id_etalase`) VALUES
(6, 'Hotwheels Hot Rally SS', 150000, 3, 'Hotwheels Hot Rally buatan Amerika', 'uploads/Hotwheels Hot Rally SS-1686977058.jpg', 1),
(13, 'Majorette X', 500000, 5, 'Buatan Prancis', '', 3),
(22, 'Hotwheels Hot Rally Racing', 100000, 1, 'Produk Buatan Amerika', 'uploads/Hotwheels Hot Rally Racing-1686728625.jpg', 1),
(53, 'Tomica Tomy Takara', 70000, 2, 'Tomica Tomy Takara merupakan produk dengan kualitas besi unggul', 'uploads/Tomica Tomy Takara-1685879299.webp', 2),
(54, 'Takara Tomy Tipe Panjang', 85000, 1, 'Takara Tomy Tipe Panjang adalah produk desain Amerika', 'uploads/Takara Tomy Tipe Panjang-1685879286.jpg', 2),
(59, 'Hotwheels Velvet', 200000, 1, 'Buatan Jepang', 'uploads/Hotwheels Velvet-1686892983.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `etalases`
--
ALTER TABLE `etalases`
  ADD PRIMARY KEY (`id_etalase`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `histories_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD KEY `products_id_etalase_foreign` (`id_etalase`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `etalases`
--
ALTER TABLE `etalases`
  MODIFY `id_etalase` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id_laporan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `histories`
--
ALTER TABLE `histories`
  ADD CONSTRAINT `histories_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_etalase_foreign` FOREIGN KEY (`id_etalase`) REFERENCES `etalases` (`id_etalase`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
