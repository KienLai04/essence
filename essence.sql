-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2024 at 04:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `essence`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidden` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `hidden`, `created_at`, `updated_at`) VALUES
(1, 'Nam', '0', NULL, NULL),
(2, 'Nữ', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_21_132303_create_categories_table', 1),
(5, '2024_05_21_132304_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `sale_price` decimal(10,0) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: sản phẩm bình thường, 1: sản phẩm mới, 2: sản phẩm hot',
  `sold` bigint UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `img`, `description`, `price`, `sale_price`, `status`, `sold`, `hidden`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Áo Blazer Len Xám', NULL, 'https://static.zara.net/assets/public/2d3f/3872/bb5e4526b145/e381265aa021/04582636403-p/04582636403-p.jpg?ts=1715611738668&w=364', 'Ex deserunt qui corporis cum autem.', '800000', '20000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(2, 'Áo Blazer Polyester Xanh', NULL, 'https://static.zara.net/assets/public/c88d/1a2d/066549a386da/9035bf178e93/06895073942-1-p/06895073942-1-p.jpg?ts=1715784661406&w=158', 'Quis esse est rerum voluptas ducimus et neque.', '400000', '0', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(3, 'Áo Blazer Jeans Hồng', NULL, 'https://static.zara.net/assets/public/a090/9011/644447bbb9bb/d0f833f3a062/07938527113-p/07938527113-p.jpg?ts=1715877069992&w=158', 'Sunt officiis ducimus magnam tenetur et omnis.', '700000', '40000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(4, 'Chân Váy Len Đỏ', NULL, 'https://static.zara.net/assets/public/9f38/fc8d/717943858bf2/3bbc373a43be/02183060051-15-p/02183060051-15-p.jpg?ts=1712160350225&w=158', 'Qui earum ut aut doloremque in asperiores.', '1500000', '100000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(5, 'Áo polo Polyester Xanh', NULL, 'https://static.zara.net/assets/public/781a/dea5/5b004349b168/f7185ceabc40/04864715405-ult/04864715405-ult.jpg?ts=1715600737348&w=364', 'Corporis animi iure vitae maiores est nihil sequi.', '1000000', '20000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(6, 'Áo Khoác Da Đen', NULL, 'https://static.zara.net/assets/public/0475/72ae/b9e6466aaa47/45e5be305d0f/02996708505-p/02996708505-p.jpg?ts=1715171880363&w=158', 'Enim iusto quam harum molestiae.', '400000', '50000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(7, 'Áo Blazer Linen Hồng', NULL, 'https://static.zara.net/assets/public/0b8f/66eb/da0146199937/07f2211feb63/02795432300-p/02795432300-p.jpg?ts=1715868791813&w=364', 'Qui qui id ut doloribus blanditiis fugit.', '1200000', '40000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(8, 'Áo Blazer Len Xám', NULL, 'https://static.zara.net/assets/public/2ab1/bf79/8e5b43518aa3/ae877a601ecf/03083151250-p/03083151250-p.jpg?ts=1715257384323&w=158', 'Debitis occaecati iure sint et.', '1300000', '90000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(9, 'Quần Short Len Nâu', NULL, 'https://static.zara.net/assets/public/0475/72ae/b9e6466aaa47/45e5be305d0f/02996708505-p/02996708505-p.jpg?ts=1715171880363&w=158', 'Eum qui aut dolores debitis est adipisci.', '1000000', '70000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(10, 'Áo polo Linen Xanh', NULL, 'https://static.zara.net/assets/public/781a/dea5/5b004349b168/f7185ceabc40/04864715405-ult/04864715405-ult.jpg?ts=1715600737348&w=364', 'Eligendi pariatur sed necessitatibus maiores aut blanditiis aut vel.', '400000', '70000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(11, 'Chân Váy Lanh Nâu', NULL, 'https://static.zara.net/assets/public/a090/9011/644447bbb9bb/d0f833f3a062/07938527113-p/07938527113-p.jpg?ts=1715877069992&w=158', 'Accusantium voluptas consequatur et sunt voluptatibus quam et.', '1200000', '0', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(12, 'Quần đùi Linen Tím', NULL, 'https://static.zara.net/assets/public/ee09/3894/430f46ce996d/a98c746dcbbb/04825702403-ult/04825702403-ult.jpg?ts=1715600738056&w=364', 'Et est expedita temporibus et.', '900000', '10000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(13, 'Áo Vest Polyester Đỏ', NULL, 'https://static.zara.net/assets/public/3e6f/b1c7/975b416d9bd2/dbb88c4861ac/04851730403-p/04851730403-p.jpg?ts=1715178555568&w=364', 'In eos enim itaque tempora officia laudantium nisi maxime.', '900000', '90000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(14, 'Quần tây Jeans Nâu', NULL, 'https://static.zara.net/assets/public/bfa7/1c5f/a9944f809f8d/3dea625733ce/04856708250-ult/04856708250-ult.jpg?ts=1715600737841&w=364', 'Voluptas et qui quae.', '700000', '40000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(15, 'Quần bò Jeans Xám', NULL, 'https://static.zara.net/assets/public/ae18/466a/3a61478f92be/402f1535bdb9/03666133250-p/03666133250-p.jpg?ts=1715612392862&w=364', 'Voluptatem et omnis enim et reprehenderit voluptas.', '700000', '10000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(16, 'Áo Gi Lê Cotton Hồng', NULL, 'https://static.zara.net/assets/public/c88d/1a2d/066549a386da/9035bf178e93/06895073942-1-p/06895073942-1-p.jpg?ts=1715784661406&w=158', 'Repudiandae quo quo architecto veniam consequatur cumque.', '200000', '50000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(17, 'Áo thun Linen Đen', NULL, 'https://static.zara.net/assets/public/2d3f/3872/bb5e4526b145/e381265aa021/04582636403-p/04582636403-p.jpg?ts=1715611738668&w=364', 'Non provident aut eos fugiat esse praesentium omnis.', '400000', '30000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(18, 'Quần bò Cotton Đỏ', NULL, 'https://static.zara.net/assets/public/0b8f/66eb/da0146199937/07f2211feb63/02795432300-p/02795432300-p.jpg?ts=1715868791813&w=364', 'Recusandae consectetur expedita reprehenderit.', '1100000', '60000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(19, 'Áo Gi Lê Da Hồng', NULL, 'https://static.zara.net/assets/public/f7ac/edff/132d4e1b9e21/bb17a72cdba3/03324505712-p/03324505712-p.jpg?ts=1715257375793&w=158', 'Omnis voluptatibus qui voluptate quia minima.', '1200000', '10000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(20, 'Áo thun Cotton Vàng', NULL, 'https://static.zara.net/assets/public/86f5/923a/7cfc4233b833/2431ec5775fb/06861303250-p/06861303250-p.jpg?ts=1715326808459&w=364', 'Vitae maiores accusamus velit odit ratione deleniti iusto.', '300000', '0', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(21, 'Áo Phông Silk Trắng', NULL, 'https://static.zara.net/assets/public/ea96/02b5/647e4d6abf8f/5c7f6de2f82b/03097177707-001-p/03097177707-001-p.jpg?ts=1713284124421&w=158', 'Rerum ratione nemo iusto tempora quo ullam.', '1000000', '100000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(22, 'Quần bò Cotton Xám', NULL, 'https://static.zara.net/assets/public/781a/dea5/5b004349b168/f7185ceabc40/04864715405-ult/04864715405-ult.jpg?ts=1715600737348&w=364', 'Ducimus sit quisquam autem laboriosam sint.', '1400000', '40000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(23, 'Áo Blazer Jeans Xanh', NULL, 'https://static.zara.net/assets/public/2d3f/3872/bb5e4526b145/e381265aa021/04582636403-p/04582636403-p.jpg?ts=1715611738668&w=364', 'Veritatis rerum quisquam magnam nihil sit earum ex nihil.', '1000000', '20000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(24, 'Áo Gi Lê Len Xanh', NULL, 'https://static.zara.net/assets/public/29a8/3f3e/738847999461/6a5dc59f4d85/03137482520-p/03137482520-p.jpg?ts=1714664998929&w=158', 'Qui ducimus atque labore quisquam laudantium aut.', '600000', '70000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(25, 'Quần đùi Polyester Hồng', NULL, 'https://static.zara.net/assets/public/ee09/3894/430f46ce996d/a98c746dcbbb/04825702403-ult/04825702403-ult.jpg?ts=1715600738056&w=364', 'Rerum perspiciatis perferendis id aperiam ut et non quae.', '1100000', '40000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(26, 'Áo len Jeans Xám', NULL, 'https://static.zara.net/assets/public/bfa7/1c5f/a9944f809f8d/3dea625733ce/04856708250-ult/04856708250-ult.jpg?ts=1715600737841&w=364', 'Aut voluptas similique velit beatae nemo in sed.', '1100000', '0', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(27, 'Áo Len Jeans Đen', NULL, 'https://static.zara.net/assets/public/9f38/fc8d/717943858bf2/3bbc373a43be/02183060051-15-p/02183060051-15-p.jpg?ts=1712160350225&w=158', 'Veritatis voluptatibus velit autem est enim corrupti itaque.', '300000', '50000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(28, 'Quần đùi Cashmere Đỏ', NULL, 'https://static.zara.net/assets/public/86f5/923a/7cfc4233b833/2431ec5775fb/06861303250-p/06861303250-p.jpg?ts=1715326808459&w=364', 'Assumenda molestias atque eligendi.', '1000000', '60000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(29, 'Chân Váy Polyester Đen', NULL, 'https://static.zara.net/assets/public/c88d/1a2d/066549a386da/9035bf178e93/06895073942-1-p/06895073942-1-p.jpg?ts=1715784661406&w=158', 'Necessitatibus omnis veritatis quisquam et rerum qui voluptatum.', '1500000', '40000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(30, 'Áo Khoác Cotton Trắng', NULL, 'https://static.zara.net/assets/public/f7ac/edff/132d4e1b9e21/bb17a72cdba3/03324505712-p/03324505712-p.jpg?ts=1715257375793&w=158', 'Minima incidunt quod alias sint.', '1100000', '40000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(31, 'Áo Len Polyester Tím', NULL, 'https://static.zara.net/assets/public/2110/8d40/67f64d5eb05d/f24ff0b99a47/04786051800-510-p/04786051800-510-p.jpg?ts=1714383481816&w=158', 'Nostrum molestiae debitis omnis quidem id.', '500000', '0', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(32, 'Chân Váy Cashmere Trắng', NULL, 'https://static.zara.net/assets/public/0475/72ae/b9e6466aaa47/45e5be305d0f/02996708505-p/02996708505-p.jpg?ts=1715171880363&w=158', 'Sunt consequatur et et totam.', '400000', '20000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(33, 'Áo Gi Lê Polyester Tím', NULL, 'https://static.zara.net/assets/public/c88d/1a2d/066549a386da/9035bf178e93/06895073942-1-p/06895073942-1-p.jpg?ts=1715784661406&w=158', 'Qui id excepturi ut voluptatem qui illo.', '800000', '30000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(34, 'Quần Short Da Tím', NULL, 'https://static.zara.net/assets/public/29a8/3f3e/738847999461/6a5dc59f4d85/03137482520-p/03137482520-p.jpg?ts=1714664998929&w=158', 'Omnis quas recusandae quos ullam dolor.', '1300000', '60000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(35, 'Áo sơ mi Jeans Đỏ', NULL, 'https://static.zara.net/assets/public/c132/7ead/c9bf43fa93de/b81cb3378395/04855699403-p/04855699403-p.jpg?ts=1715326806480&w=364', 'Sunt omnis excepturi et saepe ut.', '600000', '0', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(36, 'Chân Váy Silk Vàng', NULL, 'https://static.zara.net/assets/public/1879/a641/a3504af8b462/c618af7223eb/03653012321-p/03653012321-p.jpg?ts=1715093545194&w=158', 'Inventore totam incidunt qui.', '700000', '40000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(37, 'Áo Sơ Mi Silk Xám', NULL, 'https://static.zara.net/assets/public/ea96/02b5/647e4d6abf8f/5c7f6de2f82b/03097177707-001-p/03097177707-001-p.jpg?ts=1713284124421&w=158', 'Ipsa dolores laudantium odio quia eveniet neque.', '1000000', '50000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(38, 'Áo Khoác Len Xanh', NULL, 'https://static.zara.net/assets/public/bcc6/c9ee/a8394a8cb711/7a463166feb7/09878091251-p/09878091251-p.jpg?ts=1706259806480&w=158', 'Non harum unde autem quaerat laborum quasi et.', '900000', '90000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(39, 'Quần tây Lanh Trắng', NULL, 'https://static.zara.net/assets/public/781a/dea5/5b004349b168/f7185ceabc40/04864715405-ult/04864715405-ult.jpg?ts=1715600737348&w=364', 'Et a natus aliquam odio.', '500000', '30000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(40, 'Bộ Com Lê Jeans Vàng', NULL, 'https://static.zara.net/assets/public/c132/7ead/c9bf43fa93de/b81cb3378395/04855699403-p/04855699403-p.jpg?ts=1715326806480&w=364', 'Dolorem fugit omnis debitis recusandae quaerat amet ratione consequatur.', '1000000', '100000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(41, 'Áo polo Lanh Vàng', NULL, 'https://static.zara.net/assets/public/86c7/161d/f73b498d9731/b289a13bffd7/03666131250-ult/03666131250-ult.jpg?ts=1715615611215&w=364', 'Repudiandae sequi consequatur a dolorem nihil sit amet voluptas.', '1000000', '0', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(42, 'Áo Khoác Cashmere Đỏ', NULL, 'https://static.zara.net/assets/public/f7ac/edff/132d4e1b9e21/bb17a72cdba3/03324505712-p/03324505712-p.jpg?ts=1715257375793&w=158', 'Voluptatum molestias porro dolorem voluptatibus.', '1300000', '30000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(43, 'Áo Blazer Len Nâu', NULL, 'https://static.zara.net/assets/public/b278/bfbd/f9274643b31a/00e737c8dea7/04581636403-p/04581636403-p.jpg?ts=1715097187250&w=364', 'Sit iste voluptate dicta modi perspiciatis non.', '600000', '50000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(44, 'Áo Phông Linen Xanh', NULL, 'https://static.zara.net/assets/public/ea96/02b5/647e4d6abf8f/5c7f6de2f82b/03097177707-001-p/03097177707-001-p.jpg?ts=1713284124421&w=158', 'Omnis consequatur cupiditate molestias quam.', '600000', '80000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(45, 'Quần tây Wool Đen', NULL, 'https://static.zara.net/assets/public/3e6f/b1c7/975b416d9bd2/dbb88c4861ac/04851730403-p/04851730403-p.jpg?ts=1715178555568&w=364', 'Aliquam minus aut voluptatem et.', '300000', '0', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(46, 'Áo Phông Linen Xanh', NULL, 'https://static.zara.net/assets/public/da6d/9716/2310418da682/0197b57f286f/03357183044-p/03357183044-p.jpg?ts=1715170809748&w=158', 'Magnam aliquam dolorem molestiae nulla ducimus nostrum.', '400000', '40000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(47, 'Áo Len Len Tím', NULL, 'https://static.zara.net/assets/public/2ab1/bf79/8e5b43518aa3/ae877a601ecf/03083151250-p/03083151250-p.jpg?ts=1715257384323&w=158', 'Error amet quia maxime voluptatem velit.', '700000', '60000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(48, 'Áo polo Lanh Đen', NULL, 'https://static.zara.net/assets/public/3e6f/b1c7/975b416d9bd2/dbb88c4861ac/04851730403-p/04851730403-p.jpg?ts=1715178555568&w=364', 'Consectetur perspiciatis fuga vel sed in et porro.', '300000', '50000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(49, 'Áo Phông Da Vàng', NULL, 'https://static.zara.net/assets/public/f7ac/edff/132d4e1b9e21/bb17a72cdba3/03324505712-p/03324505712-p.jpg?ts=1715257375793&w=158', 'Et ratione labore nam facilis autem repudiandae qui asperiores.', '400000', '0', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(50, 'Áo Vest Linen Xanh', NULL, 'https://static.zara.net/assets/public/ae18/466a/3a61478f92be/402f1535bdb9/03666133250-p/03666133250-p.jpg?ts=1715612392862&w=364', 'Ab et deleniti vel iure.', '1500000', '90000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(51, 'Áo Len Jeans Tím', NULL, 'https://static.zara.net/assets/public/ea96/02b5/647e4d6abf8f/5c7f6de2f82b/03097177707-001-p/03097177707-001-p.jpg?ts=1713284124421&w=158', 'Omnis ut consequatur voluptates repellat.', '1200000', '40000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(52, 'Áo Sơ Mi Cashmere Đỏ', NULL, 'https://static.zara.net/assets/public/29a8/3f3e/738847999461/6a5dc59f4d85/03137482520-p/03137482520-p.jpg?ts=1714664998929&w=158', 'Vitae quidem assumenda odio et et.', '900000', '20000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(53, 'Chân Váy Da Đen', NULL, 'https://static.zara.net/assets/public/ea96/02b5/647e4d6abf8f/5c7f6de2f82b/03097177707-001-p/03097177707-001-p.jpg?ts=1713284124421&w=158', 'Beatae repellat possimus qui quas quo ipsam voluptatem.', '1400000', '20000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(54, 'Áo Blazer Polyester Nâu', NULL, 'https://static.zara.net/assets/public/f7ac/edff/132d4e1b9e21/bb17a72cdba3/03324505712-p/03324505712-p.jpg?ts=1715257375793&w=158', 'Tenetur aliquam et ut velit voluptatibus voluptas eaque non.', '1400000', '10000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(55, 'Áo polo Len Xám', NULL, 'https://static.zara.net/assets/public/b278/bfbd/f9274643b31a/00e737c8dea7/04581636403-p/04581636403-p.jpg?ts=1715097187250&w=364', 'Sit qui quia voluptas corrupti facilis saepe quia ipsam.', '800000', '60000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(56, 'Quần bò Lanh Nâu', NULL, 'https://static.zara.net/assets/public/2d3f/3872/bb5e4526b145/e381265aa021/04582636403-p/04582636403-p.jpg?ts=1715611738668&w=364', 'Ut qui et dolorum tempore inventore.', '400000', '30000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(57, 'Áo sơ mi Wool Vàng', NULL, 'https://static.zara.net/assets/public/2d3f/3872/bb5e4526b145/e381265aa021/04582636403-p/04582636403-p.jpg?ts=1715611738668&w=364', 'Aspernatur et ea qui optio dicta.', '900000', '40000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(58, 'Quần Jogger Lanh Đỏ', NULL, 'https://static.zara.net/assets/public/b278/bfbd/f9274643b31a/00e737c8dea7/04581636403-p/04581636403-p.jpg?ts=1715097187250&w=364', 'Ea saepe nulla aut tenetur suscipit necessitatibus quam.', '1500000', '40000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(59, 'Quần tây Wool Hồng', NULL, 'https://static.zara.net/assets/public/bfa7/1c5f/a9944f809f8d/3dea625733ce/04856708250-ult/04856708250-ult.jpg?ts=1715600737841&w=364', 'Animi est rerum esse laborum et consectetur totam.', '500000', '50000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(60, 'Chân Váy Jeans Đỏ', NULL, 'https://static.zara.net/assets/public/1879/a641/a3504af8b462/c618af7223eb/03653012321-p/03653012321-p.jpg?ts=1715093545194&w=158', 'Fugit dolorum dolores amet voluptas quis ipsa velit.', '200000', '20000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(61, 'Áo Gi Lê Jeans Đen', NULL, 'https://static.zara.net/assets/public/e6db/7f22/895a45deb83d/014658742768/04043060711-p/04043060711-p.jpg?ts=1715257388437&w=158', 'Accusantium et porro rerum eos numquam odio et.', '1100000', '30000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(62, 'Quần tây Jeans Đỏ', NULL, 'https://static.zara.net/assets/public/ae18/466a/3a61478f92be/402f1535bdb9/03666133250-p/03666133250-p.jpg?ts=1715612392862&w=364', 'Provident qui et saepe alias vero architecto.', '700000', '70000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(63, 'Quần Short Linen Vàng', NULL, 'https://static.zara.net/assets/public/c88d/1a2d/066549a386da/9035bf178e93/06895073942-1-p/06895073942-1-p.jpg?ts=1715784661406&w=158', 'Sapiente ut id qui delectus harum ipsum repellat.', '900000', '100000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(64, 'Áo polo Polyester Đen', NULL, 'https://static.zara.net/assets/public/ca05/1ee2/e20c46d4911d/8da0f96aceb9/04854703044-ult/04854703044-ult.jpg?ts=1715600737915&w=364', 'Similique odit quia facilis mollitia.', '400000', '10000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(65, 'Quần đùi Len Xám', NULL, 'https://static.zara.net/assets/public/b278/bfbd/f9274643b31a/00e737c8dea7/04581636403-p/04581636403-p.jpg?ts=1715097187250&w=364', 'In modi labore quasi qui ea qui.', '800000', '50000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(66, 'Quần tây Jeans Đen', NULL, 'https://static.zara.net/assets/public/c132/7ead/c9bf43fa93de/b81cb3378395/04855699403-p/04855699403-p.jpg?ts=1715326806480&w=364', 'Vel facilis voluptate consequatur beatae et.', '600000', '30000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(67, 'Quần đùi Cashmere Vàng', NULL, 'https://static.zara.net/assets/public/781a/dea5/5b004349b168/f7185ceabc40/04864715405-ult/04864715405-ult.jpg?ts=1715600737348&w=364', 'Maxime aut perferendis quo.', '300000', '60000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(68, 'Chân Váy Len Hồng', NULL, 'https://static.zara.net/assets/public/1879/a641/a3504af8b462/c618af7223eb/03653012321-p/03653012321-p.jpg?ts=1715093545194&w=158', 'Corrupti optio optio esse fugit sit sint ut.', '600000', '40000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(69, 'Quần đùi Lanh Vàng', NULL, 'https://static.zara.net/assets/public/86f5/923a/7cfc4233b833/2431ec5775fb/06861303250-p/06861303250-p.jpg?ts=1715326808459&w=364', 'Quod itaque eveniet dolor ad optio ut.', '1000000', '70000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(70, 'Áo Gi Lê Cotton Nâu', NULL, 'https://static.zara.net/assets/public/29a8/3f3e/738847999461/6a5dc59f4d85/03137482520-p/03137482520-p.jpg?ts=1714664998929&w=158', 'Facere at neque fugiat provident blanditiis enim earum.', '200000', '30000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(71, 'Bộ Com Lê Wool Tím', NULL, 'https://static.zara.net/assets/public/86c7/161d/f73b498d9731/b289a13bffd7/03666131250-ult/03666131250-ult.jpg?ts=1715615611215&w=364', 'Unde cumque alias a unde sed qui.', '900000', '90000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(72, 'Áo Gi Lê Cashmere Đỏ', NULL, 'https://static.zara.net/assets/public/2ab1/bf79/8e5b43518aa3/ae877a601ecf/03083151250-p/03083151250-p.jpg?ts=1715257384323&w=158', 'Quo qui iusto laborum autem molestias iusto.', '700000', '40000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(73, 'Áo polo Cotton Đỏ', NULL, 'https://static.zara.net/assets/public/86f5/923a/7cfc4233b833/2431ec5775fb/06861303250-p/06861303250-p.jpg?ts=1715326808459&w=364', 'Autem adipisci saepe nisi perspiciatis totam laborum.', '1000000', '60000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(74, 'Quần tây Polyester Xám', NULL, 'https://static.zara.net/assets/public/86f5/923a/7cfc4233b833/2431ec5775fb/06861303250-p/06861303250-p.jpg?ts=1715326808459&w=364', 'Voluptas quos voluptas rem totam voluptas eius.', '700000', '100000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(75, 'Áo khoác Da Hồng', NULL, 'https://static.zara.net/assets/public/b278/bfbd/f9274643b31a/00e737c8dea7/04581636403-p/04581636403-p.jpg?ts=1715097187250&w=364', 'In debitis maiores rerum reiciendis.', '600000', '10000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(76, 'Áo khoác Da Xanh', NULL, 'https://static.zara.net/assets/public/ee09/3894/430f46ce996d/a98c746dcbbb/04825702403-ult/04825702403-ult.jpg?ts=1715600738056&w=364', 'In veritatis consequatur animi cupiditate cumque eum aut.', '1500000', '90000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(77, 'Áo Blazer Jeans Vàng', NULL, 'https://static.zara.net/assets/public/781a/dea5/5b004349b168/f7185ceabc40/04864715405-ult/04864715405-ult.jpg?ts=1715600737348&w=364', 'Ut ipsum velit accusamus dolor.', '300000', '70000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(78, 'Áo Len Polyester Xanh', NULL, 'https://static.zara.net/assets/public/ea96/02b5/647e4d6abf8f/5c7f6de2f82b/03097177707-001-p/03097177707-001-p.jpg?ts=1713284124421&w=158', 'Quae autem nobis necessitatibus aliquid.', '1300000', '100000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(79, 'Quần bò Da Trắng', NULL, 'https://static.zara.net/assets/public/b278/bfbd/f9274643b31a/00e737c8dea7/04581636403-p/04581636403-p.jpg?ts=1715097187250&w=364', 'Consequuntur sit eligendi maxime doloribus qui a.', '800000', '80000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(80, 'Quần đùi Cashmere Đỏ', NULL, 'https://static.zara.net/assets/public/781a/dea5/5b004349b168/f7185ceabc40/04864715405-ult/04864715405-ult.jpg?ts=1715600737348&w=364', 'Atque ab deleniti est dignissimos quae.', '600000', '30000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(81, 'Quần Jogger Jeans Đỏ', NULL, 'https://static.zara.net/assets/public/3e6f/b1c7/975b416d9bd2/dbb88c4861ac/04851730403-p/04851730403-p.jpg?ts=1715178555568&w=364', 'Quod voluptate quia quis ut.', '400000', '90000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(82, 'Áo Sơ Mi Cashmere Tím', NULL, 'https://static.zara.net/assets/public/0475/72ae/b9e6466aaa47/45e5be305d0f/02996708505-p/02996708505-p.jpg?ts=1715171880363&w=158', 'Quasi reiciendis impedit voluptatem et odio nemo rerum.', '200000', '100000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(83, 'Áo Gi Lê Da Hồng', NULL, 'https://static.zara.net/assets/public/9f38/fc8d/717943858bf2/3bbc373a43be/02183060051-15-p/02183060051-15-p.jpg?ts=1712160350225&w=158', 'Vitae et dolores assumenda.', '700000', '90000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(84, 'Quần Short Da Đỏ', NULL, 'https://static.zara.net/assets/public/bcc6/c9ee/a8394a8cb711/7a463166feb7/09878091251-p/09878091251-p.jpg?ts=1706259806480&w=158', 'Sunt quos nulla est doloribus.', '1400000', '60000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(85, 'Áo Blazer Da Nâu', NULL, 'https://static.zara.net/assets/public/c88d/1a2d/066549a386da/9035bf178e93/06895073942-1-p/06895073942-1-p.jpg?ts=1715784661406&w=158', 'Dolor a eius voluptas quibusdam aliquid incidunt dolorem.', '1400000', '70000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(86, 'Áo Gi Lê Cotton Trắng', NULL, 'https://static.zara.net/assets/public/f7ac/edff/132d4e1b9e21/bb17a72cdba3/03324505712-p/03324505712-p.jpg?ts=1715257375793&w=158', 'Deserunt consequuntur harum nulla reiciendis debitis id voluptates ut.', '1200000', '40000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(87, 'Áo Gi Lê Cotton Vàng', NULL, 'https://static.zara.net/assets/public/ea96/02b5/647e4d6abf8f/5c7f6de2f82b/03097177707-001-p/03097177707-001-p.jpg?ts=1713284124421&w=158', 'Perspiciatis aspernatur error eos.', '700000', '40000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(88, 'Quần Short Len Hồng', NULL, 'https://static.zara.net/assets/public/f7ac/edff/132d4e1b9e21/bb17a72cdba3/03324505712-p/03324505712-p.jpg?ts=1715257375793&w=158', 'Similique pariatur in autem tempore.', '700000', '40000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(89, 'Quần bò Jeans Xanh', NULL, 'https://static.zara.net/assets/public/ee09/3894/430f46ce996d/a98c746dcbbb/04825702403-ult/04825702403-ult.jpg?ts=1715600738056&w=364', 'Doloribus quia voluptas maiores labore aut minima et.', '1300000', '70000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(90, 'Áo Sơ Mi Lanh Tím', NULL, 'https://static.zara.net/assets/public/c88d/1a2d/066549a386da/9035bf178e93/06895073942-1-p/06895073942-1-p.jpg?ts=1715784661406&w=158', 'Omnis sequi qui id labore ut deleniti error.', '800000', '10000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(91, 'Áo Phông Linen Nâu', NULL, 'https://static.zara.net/assets/public/2ab1/bf79/8e5b43518aa3/ae877a601ecf/03083151250-p/03083151250-p.jpg?ts=1715257384323&w=158', 'Ut accusamus repudiandae omnis dolorum incidunt amet.', '300000', '10000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(92, 'Áo polo Wool Tím', NULL, 'https://static.zara.net/assets/public/86c7/161d/f73b498d9731/b289a13bffd7/03666131250-ult/03666131250-ult.jpg?ts=1715615611215&w=364', 'Iusto quos iste ut qui temporibus assumenda quasi.', '600000', '90000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(93, 'Quần đùi Cotton Đen', NULL, 'https://static.zara.net/assets/public/781a/dea5/5b004349b168/f7185ceabc40/04864715405-ult/04864715405-ult.jpg?ts=1715600737348&w=364', 'Doloribus eligendi dolorem aut molestiae est nemo aut.', '400000', '100000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(94, 'Áo len Linen Đen', NULL, 'https://static.zara.net/assets/public/86f5/923a/7cfc4233b833/2431ec5775fb/06861303250-p/06861303250-p.jpg?ts=1715326808459&w=364', 'Amet et quia reiciendis voluptatem dolorem ullam.', '1100000', '90000', 2, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(95, 'Áo Vest Cotton Trắng', NULL, 'https://static.zara.net/assets/public/c132/7ead/c9bf43fa93de/b81cb3378395/04855699403-p/04855699403-p.jpg?ts=1715326806480&w=364', 'Eligendi id consectetur sed soluta rerum sapiente.', '500000', '40000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(96, 'Áo Khoác Linen Đen', NULL, 'https://static.zara.net/assets/public/c88d/1a2d/066549a386da/9035bf178e93/06895073942-1-p/06895073942-1-p.jpg?ts=1715784661406&w=158', 'Aperiam in cum magni unde velit est voluptatum.', '600000', '50000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(97, 'Áo sơ mi Len Trắng', NULL, 'https://static.zara.net/assets/public/0b8f/66eb/da0146199937/07f2211feb63/02795432300-p/02795432300-p.jpg?ts=1715868791813&w=364', 'Adipisci fuga impedit corporis harum voluptates.', '300000', '70000', 1, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(98, 'Áo len Cashmere Tím', NULL, 'https://static.zara.net/assets/public/86f5/923a/7cfc4233b833/2431ec5775fb/06861303250-p/06861303250-p.jpg?ts=1715326808459&w=364', 'Doloremque autem maxime itaque consequatur quo a voluptatum.', '700000', '50000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 1),
(99, 'Áo Gi Lê Cashmere Hồng', NULL, 'https://static.zara.net/assets/public/1879/a641/a3504af8b462/c618af7223eb/03653012321-p/03653012321-p.jpg?ts=1715093545194&w=158', 'Aut nobis aliquam quis.', '1300000', '70000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 06:40:46', 2),
(100, 'Quần tây Linen Nâu', NULL, 'https://static.zara.net/assets/public/c132/7ead/c9bf43fa93de/b81cb3378395/04855699403-p/04855699403-p.jpg?ts=1715326806480&w=364', 'Provident voluptatem fuga dicta voluptatibus velit natus.', '800000', '40000', 0, 0, 0, '2024-06-09 06:40:46', '2024-06-09 22:06:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('FfKF4AXYLyfbBcBotqr13kpR6wKuFlOjBcRlxBBc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicWp6bnNDSVBRT1ZpVXd3d0R3WmtTQlplaDkwNGl4TEJUTUhOU2U2MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0LWRldGFpbC83Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo3OiJwcmV2dXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4iO3M6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1718002938),
('s45DtZ372eXjFN7ADKKGutfxNb4r5ZzlhJAef7Ow', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSGZGalJoUWdqclBSbFNMaW40c2lLWHdUdEt5dUx3a3NuVTJmVjg4VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NzoicHJldnVybCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluIjtzOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1717996051);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `diachi`, `hinh`, `dienthoai`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cao Chót Vót', 'caochotvot@gmail.com', NULL, '$2y$12$lZ2O3nl0hEKoZO8/MUJ6TOiBYqnu3rdbP7ph2LUtYgLaIawx8ZaV.', '', '', '0918765238', 1, NULL, NULL, NULL),
(2, 'Mai Nhớ Em', 'mainhoem@gmail.com', NULL, '$2y$12$0DVXOpV6TS6Hgg8VSoPa2e8gyUvviPU1jsITMM1rusN3YzvHiof/2', '', '', '098532482', 0, NULL, NULL, NULL),
(3, 'Vi Na Phôn', 'vinaphone@gmail.com', NULL, '$2y$12$3Alf2gGmAYjvtRCHN16ZGOaUcpSEUIP3p0riMBB2lLSstqNgK2Nhq', '', '', '097397392', 1, NULL, NULL, NULL),
(4, 'kien', 'laigiakien1010@gmail.com', NULL, '$2y$12$GMZ0pf1K.Yw9zJo3qbIFbOmgcLBjnFEHv8QykPxhRJlxbTMtnQLaK', 'HCM', NULL, '10219312', 0, NULL, '2024-06-09 09:51:05', '2024-06-09 09:51:05'),
(6, 'kiena', 'laigiakien10110@gmail.com', NULL, '$2y$12$50mY2V81gXmgWT2f2JY6i.mFsQphnBRcPTY9Ci86b3AUYB9eNd3NW', 'HCM', NULL, '10219312', 0, NULL, '2024-06-09 09:52:11', '2024-06-09 09:52:11'),
(7, 'hung', 'hung@gmail.com', NULL, '$2y$12$I9m4VuRj17BfGl0fVYS8euKEFbnTixtg10As44WpvS6o8hBBF6YPq', 'hcm', NULL, '', 0, NULL, '2024-06-09 23:53:45', '2024-06-09 23:53:45'),
(8, 'demo1', 'demo@gmail.com', NULL, '$2y$12$/b4CLgAETCAe8E3Wr2YZueXeavGFwUP9I/ZNJo23YgFSb09DXOdTm', '', NULL, '', 0, NULL, '2024-06-10 00:00:47', '2024-06-10 00:00:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
