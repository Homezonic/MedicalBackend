-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 19, 2023 at 04:15 AM
-- Server version: 5.7.34
-- PHP Version: 8.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `medical`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labtests`
--

CREATE TABLE `labtests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labtests`
--

INSERT INTO `labtests` (`id`, `testname`, `categoryname`) VALUES
(1, 'Chest', 'X-ray'),
(2, 'Lumbo Sacral Vertebrae', 'X-ray'),
(3, 'Shoulder Joint', 'X-ray'),
(4, 'Pelvic Joint', 'X-ray'),
(5, 'Humerus', 'X-ray'),
(6, 'Fingers', 'X-ray'),
(7, 'Toes', 'X-ray'),
(8, 'Radius/Ulner', 'X-ray'),
(9, 'Foot', 'X-ray'),
(10, 'Tibia/Fibula', 'X-ray'),
(11, 'Ankle', 'X-ray'),
(12, 'Femoral', 'X-ray'),
(13, 'Hip Joint', 'X-ray'),
(14, 'Elbow Joint', 'X-ray'),
(15, 'Knee Joint', 'X-ray'),
(16, 'Scar Iliac Joint', 'X-ray'),
(17, 'Thoracic Inlet', 'X-ray'),
(18, 'Wrist Joint', 'X-ray'),
(19, 'Thoracic Lumbar Vertebrae', 'X-ray'),
(20, 'Cervical Vertebrae', 'X-ray'),
(21, 'Thoracic Vertebrae', 'X-ray'),
(22, 'Lumbar Vertebrae', 'X-ray'),
(23, 'Obstetric', 'Ultrasound'),
(24, 'Abdominal', 'Ultrasound'),
(25, 'Pelvis', 'Ultrasound'),
(26, 'Prostate', 'Ultrasound'),
(27, 'Breast', 'Ultrasound'),
(28, 'Thyroid', 'Ultrasound');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_18_005308_create_labtests_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2023_06_18_021424_add_bearer_token_to_users_table', 3);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'api-token', 'b3fa6d835e4bcd84d5219ab4885d0a644ad829017c3d7a943b43976ef5442843', '[\"*\"]', NULL, NULL, '2023-06-18 00:48:06', '2023-06-18 00:48:06'),
(2, 'App\\Models\\User', 2, 'api-token', '97c2330af6f72a019879e96ac32dbb3d82902e5128685093619b48f5e72f17fc', '[\"*\"]', '2023-06-18 01:04:18', NULL, '2023-06-18 01:04:01', '2023-06-18 01:04:18'),
(3, 'App\\Models\\User', 7, 'api-token', '9a39a3003ac0afc8cb00c26af6d1325fafc02ea3e11f86ea412c5ede812d92e2', '[\"*\"]', '2023-06-19 03:07:31', NULL, '2023-06-18 01:27:14', '2023-06-19 03:07:31');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `bearer_token` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `bearer_token`) VALUES
(1, 'Homezonic', 'homezonic@gmail.com', NULL, '$2y$10$xRzN73fNJpCplSVhz0CBPOOhI5eyM0aEWvYVH8PMnwkuz.r487/4q', NULL, '2023-06-18 00:48:06', '2023-06-18 00:48:06', NULL),
(2, 'Homezonic', 'homie@gmail.com', NULL, '$2y$10$hmtdT2iTWoTZJxDq7hRXFekvaPx0m0Z/k5b7iBuKXwaeySLzxbeS2', NULL, '2023-06-18 01:04:01', '2023-06-18 01:04:01', NULL),
(3, 'Joshua Akande', 'homezonics@gmail.com', NULL, '$2y$10$vRpgeXhxKXZfqGWArLE2tuRuuHkIixNhXrx7kX7BiwXSu688U9zZm', NULL, '2023-06-18 01:15:44', '2023-06-18 01:15:44', NULL),
(4, 'Akande Joshua', 'abc@gmail.com', NULL, '$2y$10$mH8M3dfkZ7LLvwymr2mHHezyAymeBLX/R2odol3mdLAyM41y1d3b2', NULL, '2023-06-18 01:20:17', '2023-06-18 01:20:17', NULL),
(5, 'jrfb', 'shs@hh.com', NULL, '$2y$10$.gcOUh.mu8Zf8NxCQu8.gO5on11bcea7WWqhWaEqJ88dCO2J4oDp2', NULL, '2023-06-18 01:23:02', '2023-06-18 01:23:02', NULL),
(6, 'gjrjj1jh', 'hhha@aaa.com', NULL, '$2y$10$p4HjUo7Bn1nmsux.V/X5tenEZgGf3nQgT8DbcSggFgS352nbS/6kG', NULL, '2023-06-18 01:24:46', '2023-06-18 01:24:46', NULL),
(7, 'Homezonic', 'zido@mail.com', NULL, '$2y$10$nGsvswq8ayhapajCPROJXO34biZdA8c/Lvpr1a0aAa2o2uwGtnvNO', NULL, '2023-06-18 01:27:14', '2023-06-18 01:27:14', '3|HkinvdbPnX0VN85xD25uVJhAPGAfdgeKyhi1kqEA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `labtests`
--
ALTER TABLE `labtests`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labtests`
--
ALTER TABLE `labtests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
