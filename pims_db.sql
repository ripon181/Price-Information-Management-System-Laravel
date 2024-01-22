-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 11:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pims_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Md Ripon', 'ripon@southbanglabd.com', 'ripon', NULL, '$2y$10$1aTcBFi6pL8j3qJt.9A0Aek4hZBag90paAmp4oUFPJ/o0zlXi0/0m', NULL, '2023-06-04 00:09:22', '2023-06-04 02:37:17'),
(6, 'Mohammad Nahid', 'gsbnahid@southbanglabd.com', 'nahid', NULL, '$2y$10$CvcSPMTuxofnbbvAmlncEe4Wdw9CjNVCjmZSs4yfSIiW9DvScsY1S', NULL, '2023-06-04 03:23:29', '2023-06-04 03:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
(6, '2023_05_09_101206_create_tbl_brands_table', 2),
(7, '2023_05_09_104847_create_tbl_brands_table', 3),
(128, '2023_05_27_093416_update_permission_guard_name', 4),
(159, '2014_10_12_000000_create_users_table', 5),
(160, '2014_10_12_100000_create_password_resets_table', 5),
(161, '2019_08_19_000000_create_failed_jobs_table', 5),
(162, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(163, '2023_05_08_121122_create_tbl_categories_table', 5),
(164, '2023_05_09_105215_create_tbl_brands_table', 5),
(165, '2023_05_10_075213_create_tbl_products_table', 5),
(166, '2023_05_15_045820_create_tbl_product_managers_table', 5),
(167, '2023_05_16_115320_create_admins_table', 5),
(168, '2023_05_24_053246_create_permission_tables', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(4, 'App\\Models\\admin', 4),
(4, 'App\\Models\\admin', 6);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'admin', 'dashboard', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(2, 'tenda.view', 'admin', 'dashboard', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(3, 'cisco.view', 'admin', 'dashboard', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(4, 'meetion.view', 'admin', 'dashboard', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(5, 'phyhome.view', 'admin', 'dashboard', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(6, 'rosenberger.view', 'admin', 'dashboard', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(7, 'ubiquiti.view', 'admin', 'dashboard', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(8, 'solitine.view', 'admin', 'dashboard', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(9, 'marsriva.view', 'admin', 'dashboard', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(10, 'ipcom.view', 'admin', 'dashboard', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(11, 'category.create', 'admin', 'Category', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(12, 'category.view', 'admin', 'Category', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(13, 'category.edit', 'admin', 'Category', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(14, 'category.delete', 'admin', 'Category', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(15, 'brand.create', 'admin', 'Brand', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(16, 'brand.view', 'admin', 'Brand', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(17, 'brand.edit', 'admin', 'Brand', '2023-06-03 23:42:01', '2023-06-03 23:42:01'),
(18, 'brand.delete', 'admin', 'Brand', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(19, 'product.create', 'admin', 'Product', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(20, 'product.view', 'admin', 'Product', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(21, 'product.edit', 'admin', 'Product', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(22, 'product.delete', 'admin', 'Product', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(23, 'productmanager.create', 'admin', 'Product Manager', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(24, 'productmanager.view', 'admin', 'Product Manager', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(25, 'productmanager.edit', 'admin', 'Product Manager', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(26, 'productmanager.delete', 'admin', 'Product Manager', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(27, 'role.create', 'admin', 'settings', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(28, 'role.view', 'admin', 'settings', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(29, 'role.edit', 'admin', 'settings', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(30, 'role.delete', 'admin', 'settings', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(31, 'user.create', 'admin', 'settings', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(32, 'user.view', 'admin', 'settings', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(33, 'user.edit', 'admin', 'settings', '2023-06-03 23:42:02', '2023-06-03 23:42:02'),
(34, 'user.delete', 'admin', 'settings', '2023-06-03 23:42:02', '2023-06-03 23:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(4, 'Super Admin', 'admin', '2023-06-04 00:00:20', '2023-06-04 00:00:20'),
(6, 'Admin', 'admin', '2023-06-04 02:09:00', '2023-06-04 02:09:00'),
(7, 'Tenda Manager', 'admin', '2023-06-04 02:14:22', '2023-06-04 02:14:22'),
(8, 'Cisco Manager', 'admin', '2023-06-04 02:14:50', '2023-06-04 02:14:50'),
(9, 'Meetion Manager', 'admin', '2023-06-04 02:15:35', '2023-06-04 02:15:35'),
(10, 'Phyhome Manager', 'admin', '2023-06-04 02:16:01', '2023-06-04 02:16:01'),
(11, 'Rosenberger Manager', 'admin', '2023-06-04 02:16:32', '2023-06-04 02:16:32'),
(12, 'Ubiquiti Manager', 'admin', '2023-06-04 02:16:56', '2023-06-04 02:16:56'),
(13, 'Solitine Manager', 'admin', '2023-06-04 02:17:14', '2023-06-04 02:17:14'),
(14, 'Marsriva Manager', 'admin', '2023-06-04 02:17:34', '2023-06-04 02:17:34'),
(15, 'IP-COM Manager', 'admin', '2023-06-04 02:17:54', '2023-06-04 02:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 4),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(2, 4),
(2, 6),
(2, 7),
(3, 4),
(3, 6),
(3, 8),
(4, 4),
(4, 6),
(4, 9),
(5, 4),
(5, 6),
(5, 10),
(6, 4),
(6, 6),
(6, 11),
(7, 4),
(7, 6),
(7, 12),
(8, 4),
(8, 6),
(8, 13),
(9, 4),
(9, 6),
(9, 14),
(10, 4),
(10, 6),
(10, 15),
(11, 4),
(11, 6),
(11, 7),
(11, 8),
(11, 9),
(11, 10),
(11, 11),
(11, 12),
(11, 13),
(11, 14),
(11, 15),
(12, 4),
(12, 6),
(12, 7),
(12, 8),
(12, 9),
(12, 10),
(12, 11),
(12, 12),
(12, 13),
(12, 14),
(12, 15),
(13, 4),
(13, 6),
(13, 7),
(13, 8),
(13, 9),
(13, 10),
(13, 11),
(13, 12),
(13, 13),
(13, 14),
(13, 15),
(14, 4),
(14, 6),
(14, 7),
(14, 8),
(14, 9),
(14, 10),
(14, 11),
(14, 12),
(14, 13),
(14, 14),
(14, 15),
(15, 4),
(15, 6),
(15, 7),
(15, 8),
(15, 9),
(15, 10),
(15, 11),
(15, 12),
(15, 13),
(15, 14),
(15, 15),
(16, 4),
(16, 6),
(16, 7),
(16, 8),
(16, 9),
(16, 10),
(16, 11),
(16, 12),
(16, 13),
(16, 14),
(16, 15),
(17, 4),
(17, 6),
(17, 7),
(17, 8),
(17, 9),
(17, 10),
(17, 11),
(17, 12),
(17, 13),
(17, 14),
(17, 15),
(18, 4),
(18, 6),
(18, 7),
(18, 8),
(18, 9),
(18, 10),
(18, 11),
(18, 12),
(18, 13),
(18, 14),
(18, 15),
(19, 4),
(19, 6),
(19, 7),
(19, 8),
(19, 9),
(19, 10),
(19, 11),
(19, 12),
(19, 13),
(19, 14),
(19, 15),
(20, 4),
(20, 6),
(20, 7),
(20, 8),
(20, 9),
(20, 10),
(20, 11),
(20, 12),
(20, 13),
(20, 14),
(20, 15),
(21, 4),
(21, 6),
(21, 7),
(21, 8),
(21, 9),
(21, 10),
(21, 11),
(21, 12),
(21, 13),
(21, 14),
(21, 15),
(22, 4),
(22, 6),
(22, 7),
(22, 8),
(22, 9),
(22, 10),
(22, 11),
(22, 12),
(22, 13),
(22, 14),
(22, 15),
(23, 4),
(23, 6),
(23, 7),
(23, 8),
(23, 9),
(23, 10),
(23, 11),
(23, 12),
(23, 13),
(23, 14),
(23, 15),
(24, 4),
(24, 6),
(24, 7),
(24, 8),
(24, 9),
(24, 10),
(24, 11),
(24, 12),
(24, 13),
(24, 14),
(24, 15),
(25, 4),
(25, 6),
(25, 7),
(25, 8),
(25, 9),
(25, 10),
(25, 11),
(25, 12),
(25, 13),
(25, 14),
(25, 15),
(26, 4),
(26, 6),
(26, 7),
(26, 8),
(26, 9),
(26, 10),
(26, 11),
(26, 12),
(26, 13),
(26, 14),
(26, 15),
(27, 4),
(27, 6),
(28, 4),
(28, 6),
(29, 4),
(29, 6),
(30, 4),
(30, 6),
(31, 4),
(31, 6),
(32, 4),
(32, 6),
(33, 4),
(33, 6),
(34, 4),
(34, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE `tbl_brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 for active 2 for inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_brands`
--

INSERT INTO `tbl_brands` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tenda', '1144609865.png', 1, '2023-06-04 02:23:02', '2023-06-04 02:23:02'),
(2, 'Cisco', '257314144.png', 1, '2023-06-04 02:23:18', '2023-06-04 02:23:18'),
(3, 'Meetion', '1921798166.png', 1, '2023-06-04 02:23:38', '2023-06-04 02:23:38'),
(4, 'Phyhome', '1613400663.png', 1, '2023-06-04 02:23:57', '2023-06-04 02:23:57'),
(5, 'Rosenberger', '16501018.png', 1, '2023-06-04 02:24:12', '2023-06-04 02:24:12'),
(6, 'Ubiquiti', '394654800.png', 1, '2023-06-04 02:24:30', '2023-06-04 02:24:30'),
(7, 'Solitine', '187354460.png', 1, '2023-06-04 02:24:44', '2023-06-04 02:24:44'),
(8, 'Marsriva', '1245967116.png', 1, '2023-06-04 02:24:57', '2023-06-04 02:24:57'),
(9, 'IP-COM', '1740699333.png', 1, '2023-06-04 02:25:11', '2023-06-04 02:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 for active 2 for inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Router', 1, '2023-06-04 02:26:25', '2023-06-04 02:26:25'),
(2, 'Switch', 1, '2023-06-04 02:26:41', '2023-06-04 02:26:41'),
(3, 'Cabling', 1, '2023-06-04 02:26:53', '2023-06-04 02:26:53'),
(4, 'Security System & Camera', 1, '2023-06-04 02:26:59', '2023-06-04 02:26:59'),
(5, 'Media Converters', 1, '2023-06-04 02:27:05', '2023-06-04 02:27:05'),
(6, 'Network Rack', 1, '2023-06-04 02:27:11', '2023-06-04 02:27:11'),
(7, 'Networking Tools', 1, '2023-06-04 02:27:17', '2023-06-04 02:27:17'),
(8, 'Range Extender', 1, '2023-06-04 02:32:29', '2023-06-04 02:32:29'),
(9, 'Wireless Access Point', 1, '2023-06-04 02:32:39', '2023-06-04 02:32:39'),
(10, 'OLT/GPON/EPON', 1, '2023-06-04 02:32:45', '2023-06-04 02:32:45'),
(11, 'Wireless USB Adapter', 1, '2023-06-04 02:32:51', '2023-06-04 02:32:51'),
(12, 'Transceiver Module', 1, '2023-06-04 02:32:57', '2023-06-04 02:32:57'),
(13, 'Power Strip', 1, '2023-06-04 02:33:03', '2023-06-04 02:33:03'),
(14, 'Basestation & Data Connectivity', 1, '2023-06-04 02:33:08', '2023-06-04 02:33:08'),
(15, 'Antenna', 1, '2023-06-04 02:33:13', '2023-06-04 02:33:13'),
(16, 'Mouse', 1, '2023-06-04 02:33:18', '2023-06-04 02:33:18'),
(17, 'Keyboard', 1, '2023-06-04 02:33:24', '2023-06-04 02:33:24'),
(18, 'Headset', 1, '2023-06-04 02:33:29', '2023-06-04 02:33:29'),
(19, 'Gaming Chair', 1, '2023-06-04 02:33:35', '2023-06-04 02:33:35'),
(20, 'Microphone', 1, '2023-06-04 02:33:40', '2023-06-04 02:33:40'),
(21, 'UPS', 1, '2023-06-04 02:33:45', '2023-06-04 02:33:45'),
(22, 'Speaker', 1, '2023-06-04 02:33:50', '2023-06-04 02:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_stock` int(11) NOT NULL DEFAULT 2 COMMENT '1 for No 2 for Yes',
  `product_dpprice` double NOT NULL,
  `product_mrpprice` double NOT NULL,
  `product_offerprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_shortdesc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_name`, `product_model`, `category_id`, `brand_id`, `image`, `product_stock`, `product_dpprice`, `product_mrpprice`, `product_offerprice`, `product_shortdesc`, `created_at`, `updated_at`) VALUES
(1, 'Solitine Every 2.0 Stereo Speaker', 'Model No. SE 722', 22, 7, '1710776357.png', 2, 10500, 10800, '10200', 'Introduction : \r\nOUTPUT POWER : 80W RMS (40W X2)\r\nPOWER : 220V-240v/50Hz\r\nSupports Bluetooth 5.0V/ USB/SD Card AUX INPUT FM Radio & wireless Remote Control\r\nWEIGHT :\r\n12.5 KG NET 15.0 KG GROSS (Approx.)\r\nDimension :\r\n28\" x 7\" x 9\" Active / Passive', '2023-06-04 03:06:45', '2023-06-04 03:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_managers`
--

CREATE TABLE `tbl_product_managers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_managers`
--
ALTER TABLE `tbl_product_managers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_product_managers`
--
ALTER TABLE `tbl_product_managers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
