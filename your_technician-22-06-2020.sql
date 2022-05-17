-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 03:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `your_technician`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `profile_img`, `remember_token`, `created_at`, `updated_at`, `email_verified_at`) VALUES
(1, 'John doe', 'admin@admin.com', '$2y$10$bhSF.RlIA4IHwMqjZMatyeoIZXxXDRebwP0vE/GR8s43xbKXRgnDy', '+91-12365458754', '20200609114042.jpg', 'sThyPk28WzZ6fx1SWpkJYx250FlOe16iIMS2f6PlTdg774XlWfhekbnLRGkP', '2020-05-29 05:21:18', '2020-06-03 06:31:59', '2020-05-29 10:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_13_175531_create_admins_table', 1),
(4, '2019_06_05_094651_add_email_verified_at_column_to_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `our_bank_details` longtext DEFAULT NULL,
  `footer_email_id` varchar(55) NOT NULL,
  `footer_ph_no` varchar(255) DEFAULT NULL,
  `fb_link` text NOT NULL,
  `twitter_link` text NOT NULL,
  `google_plus_link` text NOT NULL,
  `instagram_link` varchar(255) NOT NULL,
  `header_logo` varchar(255) NOT NULL,
  `header_logo_alt_tag` varchar(255) DEFAULT NULL,
  `footer_logo` varchar(255) NOT NULL,
  `footer_address` varchar(255) DEFAULT NULL,
  `copyright_text` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT current_timestamp(),
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User 1', 'test1@test.com', '2020-05-29 13:45:44', '$2y$10$2VIdAugjOimjGNM66GhBr.vLsQ6/TfBnY47rHBIT9Qd09VVXLHuI.', NULL, '2020-05-29 08:15:44', '2020-05-29 08:15:44'),
(2, 'Test User 2', 'test2@test.com', '2020-05-29 13:46:58', '$2y$10$wxTMQF2.Fju8Jrrt4zf/4.CzPSSmVaQh5jLDmJc0ha7/x8hXcYiUi', NULL, '2020-05-29 08:16:58', '2020-05-29 08:16:58'),
(3, 'fgdfg', 'fdsf@gffg.com', '2020-05-29 13:49:01', '$2y$10$qmwxz7CPJQzOrNAWYoF65.83bTZNkcrCV0oJDTRMWWUO1sQLuS7o.', NULL, '2020-05-29 08:19:01', '2020-05-29 08:19:01'),
(4, 'fgdfg', 'fd5sf@gffg.com', '2020-05-29 13:51:16', '$2y$10$ysAyN14O8Ta92Wg8Q0o7pe9FbAHae07NUf7x2Rqys7Qtoi2K6JhB2', NULL, '2020-05-29 08:21:16', '2020-05-29 08:21:16'),
(5, 'fgfdgdfg', 'sd@sfv.com', '2020-05-29 13:55:05', '$2y$10$5iM39iRAmfz4mEjLQWcSRu/VNtTnSU6o/XST1TXSsSbiC1S6W4skS', NULL, '2020-05-29 08:25:05', '2020-05-29 08:25:05'),
(6, 'sdfsd', 'sdf@dff.com', '2020-05-29 13:55:29', '$2y$10$MFzSxEr1oXCfm8B8Gkwpi.skteIjnpW./TUud9UmT5LJpA1Jhioy6', NULL, '2020-05-29 08:25:29', '2020-05-29 08:25:29'),
(7, 'dsfsdf', 'asas@fdgf.com', '2020-05-29 14:09:29', '$2y$10$bbTxMZZalUAw1GtyUr5f7.4Uyg0E30gx/5ehIZ39RuXreidwZWIUy', NULL, '2020-05-29 08:39:29', '2020-05-29 08:39:29'),
(8, 'dsfsdf', 'adsas@fdgf.com', '2020-05-29 14:10:12', '$2y$10$cu5dXti31WRabsvXD4.9Qu.Yzdx7FSvMywScWR6ZOk2KtZBOqzcjO', NULL, '2020-05-29 08:40:12', '2020-05-29 08:40:12'),
(9, 'dsfsdf', 'aertdsas@fdgf.com', '2020-05-29 14:11:23', '$2y$10$YAzbgt64.Gu7e7tMUr9LJOuv0Ll0aPRPT4rIxFr0eCHdV1oulteg2', NULL, '2020-05-29 08:41:23', '2020-05-29 08:41:23'),
(10, 'dsfsdf', 'a234ertdsas@fdgf.com', '2020-05-29 14:12:20', '$2y$10$H.c7WlH1pc3xwj7H6mMqTeTHir6WA/iJR1uw4977XmpMxFSSsmV9e', NULL, '2020-05-29 08:42:20', '2020-05-29 08:42:20'),
(11, 'sfgr4t', 'dfg@g.com', '2020-05-29 14:13:17', '$2y$10$2WlaYhob.m6tGhRK7UqvGeTRkCCNyeymXSmZmTcn8Cinc4tJr5UKy', NULL, '2020-05-29 08:43:17', '2020-05-29 08:43:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

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
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
