-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 08:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `subtitle`, `short_description`, `image`, `button_url`, `created_at`, `updated_at`) VALUES
(4, 'go lightly', 'mega sale', 'In augue urna, nunc, tincidunt, augue, augue facilisis facilisis.', '4.jpg', '/', '2021-10-12 09:49:18', '2021-10-12 09:49:18'),
(5, 'season sale', 'modern design', 'In augue urna, nunc, tincidunt, augue, augue facilisis facilisis.', '5.jpg', '/', '2021-10-15 04:10:40', '2021-10-15 04:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `category_id`, `description`, `quote`, `image`, `created_at`, `updated_at`) VALUES
(8, 'SPRING – SUMMER TRENDING 2020', '3', 'Typography is the work of typesetters, compositors, typographers, graphic designers, art directors, manga artists, comic book artists, graffiti artists, and now—anyone who arranges words, letters, numbers, and symbols for publication, display, or distribution—from clerical workers and newsletter writers to anyone self-publishing materials.', 'As the capability to create typography has become ubiquitous, the application of principles and best practices developed over generations of skilled workers and professionals has diminished. Ironically, at a time when scientific techniques.', '8.jpg', '2021-09-09 12:50:49', '2021-09-09 12:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Life Style', '2021-09-08 09:13:42', '2021-09-08 09:13:42'),
(4, 'Electric', '2021-09-08 09:13:59', '2021-09-08 09:13:59'),
(5, 'electronics', '2021-09-08 09:14:08', '2021-09-08 09:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `blog_images`
--

CREATE TABLE `blog_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `multiple_images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_images`
--

INSERT INTO `blog_images` (`id`, `blog_id`, `multiple_images`, `created_at`, `updated_at`) VALUES
(10, '7', '7-1.jpg', '2021-09-09 12:43:17', '2021-09-09 12:43:17'),
(11, '7', '7-2.jpg', '2021-09-09 12:43:17', '2021-09-09 12:43:17'),
(12, '7', '7-3.jpg', '2021-09-09 12:43:17', '2021-09-09 12:43:17'),
(13, '8', '8-1.jpg', '2021-09-09 12:50:49', '2021-09-09 12:50:49'),
(14, '8', '8-2.jpg', '2021-09-09 12:50:49', '2021-09-09 12:50:49'),
(15, '8', '8-3.jpg', '2021-09-09 12:50:49', '2021-09-09 12:50:49'),
(16, '8', '8-4.jpg', '2021-09-09 12:50:49', '2021-09-09 12:50:49'),
(17, '8', '8-5.jpg', '2021-09-09 12:50:49', '2021-09-09 12:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `qty`, `amount`, `size`, `color`, `ip`, `created_at`, `updated_at`) VALUES
(44, 17, 1, 23, NULL, NULL, '127.0.0.1', '2021-10-17 23:16:24', '2021-10-17 23:16:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `added_by`, `created_at`, `updated_at`) VALUES
(18, 'Fruits', '18.jpg', 1, '2021-10-04 14:46:44', '2021-10-04 14:46:44'),
(19, 'Organic Fruits', '19.jpg', 1, '2021-10-04 14:46:57', '2021-10-04 14:46:57'),
(20, 'Vegetables', '20.jpg', 1, '2021-10-04 14:47:08', '2021-10-04 14:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `product_id`, `color`, `created_at`, `updated_at`) VALUES
(31, 17, 'green', '2021-10-04 15:00:29', '2021-10-04 15:00:29'),
(32, 18, 'red', '2021-10-04 15:01:10', '2021-10-04 15:01:10'),
(33, 19, 'orange', '2021-10-04 15:01:44', '2021-10-04 15:01:44'),
(34, 20, 'green', '2021-10-04 15:02:22', '2021-10-04 15:02:22'),
(35, 21, 'red', '2021-10-04 15:03:16', '2021-10-04 15:03:16'),
(36, 22, 'green', '2021-10-04 15:38:49', '2021-10-04 15:38:49'),
(37, 23, 'yellow', '2021-10-04 19:44:03', '2021-10-04 19:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `color_settings`
--

CREATE TABLE `color_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_settings`
--

INSERT INTO `color_settings` (`id`, `brand_color`, `sub_color`, `footer_background`, `created_at`, `updated_at`) VALUES
(1, '#60be74', '#f7746d', '#000000', NULL, '2021-10-16 05:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `expired_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `discount`, `expired_at`, `created_at`, `updated_at`) VALUES
(1, 'shop20', 20, '2021-10-17', '2021-10-16 06:16:16', '2021-10-16 06:16:16'),
(2, 'shop20', 20, '2021-10-17', '2021-10-16 06:24:00', '2021-10-16 06:24:00'),
(3, 'shop20', 20, '2021-10-17', '2021-10-16 06:29:42', '2021-10-16 06:29:42'),
(4, 'shop20', 20, '2021-10-17', '2021-10-16 06:30:06', '2021-10-16 06:30:06'),
(5, 'shop20', 20, '2021-10-17', '2021-10-16 06:32:59', '2021-10-16 06:32:59'),
(6, 'shop20', 20, '2021-10-17', '2021-10-16 06:33:07', '2021-10-16 06:33:07');

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
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `header_background`, `email`, `phone`, `address`, `logo`, `favicon`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'header_background.jpg', 'admin@admin.com', '01747 620489', '38/2 Rajabari,savar', 'logo.png', 'favicon.png', 'Enter Meta Title', 'Enter Meta Description', 'Enter Meta  Keywords', NULL, '2021-10-15 05:27:24');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2021_07_11_183742_create_sessions_table', 1),
(21, '2021_07_13_064321_create_categories_table', 2),
(22, '2021_07_16_124133_create_sub_categories_table', 3),
(26, '2021_07_26_164437_create_product_images_table', 5),
(27, '2021_08_25_182924_create_colors_table', 6),
(28, '2021_08_25_184107_create_sizes_table', 6),
(29, '2021_07_26_095824_create_products_table', 7),
(30, '2021_08_28_110432_create_banners_table', 8),
(32, '2021_09_08_135143_create_blog_categories_table', 9),
(34, '2021_09_08_153647_create_blogs_table', 10),
(35, '2021_09_09_171954_create_blog_images_table', 11),
(37, '2021_09_16_185719_create_carts_table', 12),
(39, '2021_10_04_211903_create_order_details_table', 14),
(40, '2021_10_12_142633_create_social_icon_settings_table', 15),
(41, '2021_10_12_144751_create_general_settings_table', 16),
(42, '2021_10_13_181336_create_coupons_table', 17),
(43, '2021_10_15_101515_create_color_settings_table', 17),
(44, '2021_10_16_123707_create_subscriptions_table', 18),
(45, '2021_10_16_150303_create_wishlists_table', 19),
(47, '2021_10_04_211336_create_orders_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_total` int(11) NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_two` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','completed','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_method` enum('cash on delivery','online transaction') COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` enum('paid','not paid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not paid',
  `total_payable` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prod_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `subCategory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_as` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `discount_till` datetime DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `short_description`, `long_description`, `sku`, `price`, `image`, `category_id`, `subCategory_id`, `display_as`, `discount`, `discount_till`, `slug`, `created_at`, `updated_at`) VALUES
(17, 'Broccoli', 'adfs', 'adf', '124345', 23, '17.jpg', 20, '21', 'featured', NULL, NULL, 'broccoli-D4oUngYIc7', '2021-10-04 15:00:29', '2021-10-04 15:00:29'),
(18, 'App;e', 'asdf', 'asdf', '124345', 5, '18.jpg', 18, '13', 'normal', NULL, NULL, 'appe-2TEUOYmQB8', '2021-10-04 15:01:10', '2021-10-04 15:01:10'),
(19, 'Orange', 'asdf', 'asdf', '124345', 5, '19.jpg', 19, '16', 'trending', NULL, NULL, 'orange-D2HO7f9mmh', '2021-10-04 15:01:44', '2021-10-04 15:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `multiple_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `multiple_image`, `created_at`, `updated_at`) VALUES
(26, 17, '17-1.jpg', '2021-10-04 15:00:29', '2021-10-04 15:00:29'),
(27, 17, '17-2.jpg', '2021-10-04 15:00:29', '2021-10-04 15:00:29'),
(28, 19, '19-1.jpg', '2021-10-04 15:01:44', '2021-10-04 15:01:44'),
(29, 20, '20-1.jpg', '2021-10-04 15:02:22', '2021-10-04 15:02:22'),
(30, 21, '21-1.jpg', '2021-10-04 15:03:16', '2021-10-04 15:03:16'),
(31, 22, '22-1.jpg', '2021-10-04 15:38:48', '2021-10-04 15:38:48'),
(32, 23, '23-1.jpg', '2021-10-04 19:44:02', '2021-10-04 19:44:02'),
(33, 23, '23-2.jpg', '2021-10-04 19:44:02', '2021-10-04 19:44:02'),
(34, 23, '23-3.jpg', '2021-10-04 19:44:02', '2021-10-04 19:44:02'),
(35, 23, '23-4.jpg', '2021-10-04 19:44:02', '2021-10-04 19:44:02'),
(36, 23, '23-5.jpg', '2021-10-04 19:44:02', '2021-10-04 19:44:02'),
(37, 23, '23-6.jpg', '2021-10-04 19:44:02', '2021-10-04 19:44:02'),
(38, 23, '23-7.jpg', '2021-10-04 19:44:03', '2021-10-04 19:44:03'),
(39, 23, '23-8.jpg', '2021-10-04 19:44:03', '2021-10-04 19:44:03'),
(40, 23, '23-9.jpg', '2021-10-04 19:44:03', '2021-10-04 19:44:03'),
(41, 23, '23-10.jpg', '2021-10-04 19:44:03', '2021-10-04 19:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('dh087POurn3ffuYp9Y6wOItNp0RRPL1l0w9Wd35s', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiN3VCWU5VU21Oa0UxMXJ4d25jYWtkTGZCRDhrTjRTY0dIRkVCd2NMZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC93aXNoLWxpc3Q/MT0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkLk9udzBRa0llTlYvRkJYbWE3UXhIZUYuMy5wNU1mQnlFb0Z1RlhtNXFlLnRPVjAxckxhRjIiO30=', 1634401763),
('pSASzQqzUd5gAdKDtwd6rCoyB4vDKlqOqSArGuSH', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWDhlYnNFT1ZuelU0RUNuUzVpcHZWWEk5d29BNGFwTXRUT3pJWmh5eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkLk9udzBRa0llTlYvRkJYbWE3UXhIZUYuMy5wNU1mQnlFb0Z1RlhtNXFlLnRPVjAxckxhRjIiO30=', 1634539632);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `product_id`, `size`, `created_at`, `updated_at`) VALUES
(37, 17, 'Big', '2021-10-04 15:00:29', '2021-10-04 15:00:29'),
(38, 17, ' Medium', '2021-10-04 15:00:29', '2021-10-04 15:00:29'),
(39, 17, ' Small', '2021-10-04 15:00:29', '2021-10-04 15:00:29'),
(40, 18, 'Big', '2021-10-04 15:01:10', '2021-10-04 15:01:10'),
(41, 18, ' Medium', '2021-10-04 15:01:11', '2021-10-04 15:01:11'),
(42, 18, ' Small', '2021-10-04 15:01:11', '2021-10-04 15:01:11'),
(43, 19, 'Big', '2021-10-04 15:01:44', '2021-10-04 15:01:44'),
(44, 19, ' Medium', '2021-10-04 15:01:44', '2021-10-04 15:01:44'),
(45, 19, ' Small', '2021-10-04 15:01:44', '2021-10-04 15:01:44'),
(46, 20, 'Big', '2021-10-04 15:02:22', '2021-10-04 15:02:22'),
(47, 20, ' Medium', '2021-10-04 15:02:22', '2021-10-04 15:02:22'),
(48, 20, ' Small', '2021-10-04 15:02:22', '2021-10-04 15:02:22'),
(49, 21, 'Big', '2021-10-04 15:03:16', '2021-10-04 15:03:16'),
(50, 21, ' Medium', '2021-10-04 15:03:16', '2021-10-04 15:03:16'),
(51, 21, ' Small', '2021-10-04 15:03:16', '2021-10-04 15:03:16'),
(52, 22, 'Big', '2021-10-04 15:38:49', '2021-10-04 15:38:49'),
(53, 22, ' Medium', '2021-10-04 15:38:49', '2021-10-04 15:38:49'),
(54, 22, ' Small', '2021-10-04 15:38:49', '2021-10-04 15:38:49'),
(55, 23, 'Big', '2021-10-04 19:44:03', '2021-10-04 19:44:03'),
(56, 23, ' Medium', '2021-10-04 19:44:03', '2021-10-04 19:44:03'),
(57, 23, ' Small', '2021-10-04 19:44:03', '2021-10-04 19:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `socialicons`
--

CREATE TABLE `socialicons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialicons`
--

INSERT INTO `socialicons` (`id`, `fb`, `fb_url`, `twitter`, `twitter_url`, `instagram`, `instagram_url`, `youtube`, `youtube_url`, `created_at`, `updated_at`) VALUES
(1, '<i class=\"fa fa-facebook\"></i>', 'https://www.facebook.com/', '<i class=\"fa fa-twitter\"></i>', 'https://www.twitter.com/', '<i class=\"fa fa-instagram\"></i>', 'https://www.instagram.com/', '<i class=\"fa fa-youtube\"></i>', 'https://www.youtube.com/', NULL, '2021-10-12 08:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `created_at`, `updated_at`) VALUES
(16, 'imtiazahmedbhuiyancit@gmail.com', '2021-10-16 07:45:29', '2021-10-16 07:45:29'),
(17, 'ahmedfarahnaz1@gmail.com', '2021-10-16 07:52:42', '2021-10-16 07:52:42'),
(18, 'user@user.com', '2021-10-16 07:53:29', '2021-10-16 07:53:29'),
(19, 'user@user.comjgc', '2021-10-16 07:54:20', '2021-10-16 07:54:20'),
(20, 'admin@admin.com', '2021-10-16 07:55:17', '2021-10-16 07:55:17'),
(21, 'your.email.inbox@here.com', '2021-10-16 07:57:28', '2021-10-16 07:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(12, 'Seasonal Fruits', 18, '2021-10-04 14:51:47', '2021-10-04 14:51:47'),
(13, 'Regular Fruits', 18, '2021-10-04 14:51:59', '2021-10-04 14:51:59'),
(14, 'Exotic Fruits', 18, '2021-10-04 14:52:10', '2021-10-04 14:52:10'),
(15, 'Imported Fruits', 19, '2021-10-04 14:52:41', '2021-10-04 14:52:41'),
(16, 'Citrus Fruits', 19, '2021-10-04 14:52:52', '2021-10-04 14:52:52'),
(17, 'Dry Fruits', 19, '2021-10-04 14:53:02', '2021-10-04 14:53:02'),
(18, 'Leaf', 20, '2021-10-04 14:53:47', '2021-10-04 14:53:47'),
(19, 'Root', 20, '2021-10-04 14:53:56', '2021-10-04 14:53:56'),
(20, 'Bulb', 20, '2021-10-04 14:54:08', '2021-10-04 14:54:08'),
(21, 'Flowers', 20, '2021-10-04 14:54:18', '2021-10-04 14:54:18'),
(22, 'Fresh Veggie', 20, '2021-10-04 14:56:12', '2021-10-04 14:56:12'),
(23, 'Healthy', 20, '2021-10-04 14:56:24', '2021-10-04 14:57:15');

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
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '2021-08-05 04:46:30', '$2y$10$.Onw0QkIeNV/FBXma7QxHeF.3.p5MfByEoFuFXm5qe.tOV01rLaF2', 'admin', NULL, NULL, 'xdysHWkRWoCnXsC7RY8f36nQOef1cQ66nLnglMIkArDxXGdcRwphG6nMgL88', NULL, 'profile-photos/jzNdjVbBXRAYFMAwMqFxngTNh909lxiMwI0fJ6pe.jpg', '2021-07-11 13:21:20', '2021-10-12 08:46:19'),
(2, 'Farahnaz', 'w@w.com', NULL, '$2y$10$K7ZklyZG6kgv5ul.tkWRdOGlWhnMkizy7x.ocPI7cEsoWLo0frbmC', 'user', NULL, NULL, NULL, NULL, NULL, '2021-09-11 14:01:17', '2021-09-11 14:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(11, 18, 1, '2021-10-16 10:25:05', '2021-10-16 10:25:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_name_unique` (`name`);

--
-- Indexes for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_settings`
--
ALTER TABLE `color_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialicons`
--
ALTER TABLE `socialicons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `color_settings`
--
ALTER TABLE `color_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `socialicons`
--
ALTER TABLE `socialicons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
