-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 12:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `event` varchar(255) DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `batch_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'default', 'created', 'App\\Models\\Navigation', 'created', 7, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"John Bright\",\"icon\":\"<i class=\\\"ri-account-circle-line\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"john-bright-5\",\"order\":1,\"href\":\"7\",\"status\":\"1\"}}', NULL, '2024-06-18 23:02:58', '2024-06-18 23:02:58'),
(2, 'default', 'created', 'App\\Models\\Navigation', 'created', 1, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Dashboard\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"dashboard\",\"order\":1,\"href\":\"dashboard\",\"status\":\"1\"}}', NULL, '2024-06-18 23:10:26', '2024-06-18 23:10:26'),
(3, 'default', 'updated', 'App\\Models\\Navigation', 'updated', 1, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Dashboard\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"dashboard-2\",\"order\":1,\"href\":\"dashboard\",\"status\":\"1\"},\"old\":{\"name\":\"Dashboard\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"dashboard\",\"order\":1,\"href\":\"dashboard\",\"status\":\"1\"}}', NULL, '2024-06-18 23:11:23', '2024-06-18 23:11:23'),
(4, 'default', 'created', 'App\\Models\\Navigation', 'created', 2, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Home Page\",\"icon\":\"<i class=\\\"fas fa-file\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"home-page\",\"order\":2,\"href\":\"page\",\"status\":\"1\"}}', NULL, '2024-06-18 23:20:51', '2024-06-18 23:20:51'),
(5, 'default', 'updated', 'App\\Models\\Navigation', 'updated', 2, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Home Page\",\"icon\":\"<i class=\\\"fas fa-file\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"home-page-2\",\"order\":2,\"href\":\"page\",\"status\":\"1\"},\"old\":{\"name\":\"Home Page\",\"icon\":\"<i class=\\\"fas fa-file\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"home-page\",\"order\":2,\"href\":\"page\",\"status\":\"1\"}}', NULL, '2024-06-18 23:21:05', '2024-06-18 23:21:05'),
(6, 'default', 'updated', 'App\\Models\\Navigation', 'updated', 1, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Dashboard\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"dashboard\",\"order\":1,\"href\":\"dashboard\",\"status\":\"1\"},\"old\":{\"name\":\"Dashboard\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"dashboard-2\",\"order\":1,\"href\":\"dashboard\",\"status\":\"1\"}}', NULL, '2024-06-18 23:26:35', '2024-06-18 23:26:35'),
(7, 'default', 'updated', 'App\\Models\\Navigation', 'updated', 2, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Home Page\",\"icon\":\"<i class=\\\"fas fa-file\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"home-page\",\"order\":2,\"href\":\"page\",\"status\":\"1\"},\"old\":{\"name\":\"Home Page\",\"icon\":\"<i class=\\\"fas fa-file\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"home-page-2\",\"order\":2,\"href\":\"page\",\"status\":\"1\"}}', NULL, '2024-06-18 23:26:44', '2024-06-18 23:26:44'),
(8, 'default', 'updated', 'App\\Models\\Navigation', 'updated', 1, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Dashboard\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"dashboard-2\",\"order\":1,\"href\":\"dashboard\",\"status\":\"1\"},\"old\":{\"name\":\"Dashboard\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"dashboard\",\"order\":1,\"href\":\"dashboard\",\"status\":\"1\"}}', NULL, '2024-06-18 23:28:16', '2024-06-18 23:28:16'),
(9, 'default', 'updated', 'App\\Models\\Navigation', 'updated', 1, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Dashboard\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"dashboard\",\"order\":1,\"href\":\"dashboard\",\"status\":\"1\"},\"old\":{\"name\":\"Dashboard\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"dashboard-2\",\"order\":1,\"href\":\"dashboard\",\"status\":\"1\"}}', NULL, '2024-06-18 23:29:03', '2024-06-18 23:29:03'),
(10, 'default', 'updated', 'App\\Models\\Navigation', 'updated', 1, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Dashboard\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"dashboard-2\",\"order\":1,\"href\":\"dashboard\",\"status\":\"1\"},\"old\":{\"name\":\"Dashboard\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"dashboard\",\"order\":1,\"href\":\"dashboard\",\"status\":\"1\"}}', NULL, '2024-06-18 23:30:15', '2024-06-18 23:30:15'),
(11, 'default', 'updated', 'App\\Models\\Navigation', 'updated', 2, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Home Page\",\"icon\":\"<i class=\\\"fas fa-file\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"home-page-2\",\"order\":2,\"href\":\"Pages\\/manage\",\"status\":\"1\"},\"old\":{\"name\":\"Home Page\",\"icon\":\"<i class=\\\"fas fa-file\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"home-page\",\"order\":2,\"href\":\"page\",\"status\":\"1\"}}', NULL, '2024-06-19 01:37:06', '2024-06-19 01:37:06'),
(12, 'default', 'updated', 'App\\Models\\Navigation', 'updated', 2, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Home Page\",\"icon\":\"<i class=\\\"fas fa-file\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"home-page\",\"order\":2,\"href\":\"Pages.manage\",\"status\":\"1\"},\"old\":{\"name\":\"Home Page\",\"icon\":\"<i class=\\\"fas fa-file\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"home-page-2\",\"order\":2,\"href\":\"Pages\\/manage\",\"status\":\"1\"}}', NULL, '2024-06-19 01:38:45', '2024-06-19 01:38:45'),
(13, 'default', 'created', 'App\\Models\\Navigation', 'created', 3, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Students\",\"icon\":\"<i class=\\\"fas fa-tasks\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"students\",\"order\":3,\"href\":\"student\\/manage\",\"status\":\"1\"}}', NULL, '2024-06-19 04:01:39', '2024-06-19 04:01:39'),
(14, 'default', 'updated', 'App\\Models\\Navigation', 'updated', 3, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Students\",\"icon\":\"<i class=\\\"fas fa-tasks\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"students-2\",\"order\":3,\"href\":\"student.manage\",\"status\":\"1\"},\"old\":{\"name\":\"Students\",\"icon\":\"<i class=\\\"fas fa-tasks\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"students\",\"order\":3,\"href\":\"student\\/manage\",\"status\":\"1\"}}', NULL, '2024-06-19 04:02:48', '2024-06-19 04:02:48'),
(15, 'default', 'created', 'App\\Models\\Navigation', 'created', 4, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Bright\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"2\",\"slug\":\"bright\",\"order\":1,\"href\":\"br\",\"status\":\"1\"}}', NULL, '2024-06-19 04:33:30', '2024-06-19 04:33:30'),
(16, 'default', 'updated', 'App\\Models\\Navigation', 'updated', 4, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"Bright7\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"2\",\"slug\":\"bright7\",\"order\":1,\"href\":\"br\",\"status\":\"1\"},\"old\":{\"name\":\"Bright\",\"icon\":\"<i class=\\\"fas fa-home\\\"><\\/i>\",\"parent\":\"2\",\"slug\":\"bright\",\"order\":1,\"href\":\"br\",\"status\":\"1\"}}', NULL, '2024-06-19 04:33:39', '2024-06-19 04:33:39'),
(17, 'default', 'created', 'App\\Models\\Navigation', 'created', 5, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"TCS123\",\"icon\":\"<i class=\\\"ri-account-circle-line\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"tcs123\",\"order\":1,\"href\":\"dash123\",\"status\":\"1\"}}', NULL, '2024-06-19 04:39:32', '2024-06-19 04:39:32'),
(18, 'default', 'updated', 'App\\Models\\Navigation', 'updated', 5, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":\"TCS123uuu\",\"icon\":\"<i class=\\\"ri-account-circle-line\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"tcs123uuu\",\"order\":1,\"href\":\"dash123\",\"status\":\"1\"},\"old\":{\"name\":\"TCS123\",\"icon\":\"<i class=\\\"ri-account-circle-line\\\"><\\/i>\",\"parent\":\"0\",\"slug\":\"tcs123\",\"order\":1,\"href\":\"dash123\",\"status\":\"1\"}}', NULL, '2024-06-19 04:39:43', '2024-06-19 04:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semster` varchar(255) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `s_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `semster`, `mark`, `s_id`, `created_at`, `updated_at`) VALUES
(1, '1', '70', '1', '2024-06-19 08:33:52', '2024-06-19 08:33:52'),
(2, '2', '80', '1', '2024-06-19 08:33:52', '2024-06-19 08:33:52'),
(3, '1', '60', '2', '2024-06-19 08:35:20', '2024-06-19 08:35:20'),
(4, '2', '75', '2', '2024-06-19 08:35:20', '2024-06-19 08:35:20');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_17_051138_create_dashboards_table', 1),
(9, '2024_01_19_060954_create_activity_log_table', 3),
(10, '2024_01_19_060955_add_event_column_to_activity_log_table', 3),
(11, '2024_01_19_060956_add_batch_uuid_column_to_activity_log_table', 3),
(13, '2024_01_17_040156_create_logs_table', 4),
(32, '2024_06_19_051317_create_pages_table', 5),
(34, '2024_06_19_072009_create_student_classes_table', 7),
(35, '2024_06_19_072913_create_subjects_table', 8),
(38, '2024_06_19_073231_create_students_table', 9),
(40, '2024_06_19_082942_create_marks_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `href` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `name`, `icon`, `parent`, `slug`, `order`, `href`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', '<i class=\"fas fa-home\"></i>', '0', 'dashboard-2', 1, 'dashboard', '1', '2024-06-18 23:10:26', '2024-06-18 23:30:15'),
(2, 'Home Page', '<i class=\"fas fa-file\"></i>', '0', 'home-page', 2, 'Pages.manage', '1', '2024-06-18 23:20:51', '2024-06-19 01:38:45'),
(3, 'Students', '<i class=\"fas fa-tasks\"></i>', '0', 'students-2', 3, 'student.manage', '1', '2024-06-19 04:01:39', '2024-06-19 04:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_types`
--

CREATE TABLE `navigation_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigation_types`
--

INSERT INTO `navigation_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Navigation For Stohos', '2024-02-12 06:27:01', '2024-02-12 06:27:01'),
(2, 'Navigation For Customer', '2024-02-12 06:27:01', '2024-02-12 06:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Home Page 1', 'Lorem Ipsum Dollar sit amit 12345', '2024-06-19 04:32:05', '2024-06-19 00:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `class`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'Alex', 'alex@gmail.com', '1', '1', '2024-06-19 08:25:37', '2024-06-19 08:25:37'),
(2, 'Geethu', 'geethu@gmail.com', '2', '2', '2024-06-19 08:25:50', '2024-06-19 08:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SSLC', '2024-06-19 07:26:07', '2024-06-19 07:26:07'),
(2, 'HSC', '2024-06-19 07:26:07', '2024-06-19 07:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Maths', '2024-06-19 07:30:32', '2024-06-19 07:30:32'),
(2, 'Science', '2024-06-19 07:30:32', '2024-06-19 07:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Bright', 'johnbright03@gmail.com', NULL, '$2y$10$/1tGmzBH6zI2cKKdgn3sRuoLjZqEi3NSzy7WfxPrZ4.m2MYHUcHuu', NULL, '2024-06-19 04:32:05', '2024-06-19 04:32:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_types`
--
ALTER TABLE `navigation_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `navigation_types`
--
ALTER TABLE `navigation_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
