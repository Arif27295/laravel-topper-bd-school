-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2025 at 11:18 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topper_bd_school`
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

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@example.com|127.0.0.1', 'i:1;', 1737305445),
('admin@example.com|127.0.0.1:timer', 'i:1737305445;', 1737305445);

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
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int NOT NULL,
  `d_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Creation_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `d_name`, `Creation_at`) VALUES
(1, 'Dhaka', '2024-06-20 13:34:29'),
(2, 'Faridpur', '2024-06-20 13:51:30'),
(3, 'Gazipur', '2024-06-20 13:51:30'),
(4, 'Gopalganj', '2024-06-20 13:51:30'),
(5, 'jamalpur', '2024-06-20 13:51:30'),
(6, 'Kishorganj', '2024-06-20 13:51:30'),
(7, 'Madaripur', '2024-06-20 13:51:30'),
(8, 'Manikganj', '2024-06-20 13:51:30'),
(9, 'Munshiganj', '2024-06-20 13:51:30'),
(10, 'Mymensingh', '2024-06-20 13:51:30'),
(11, 'Narayanganj', '2024-06-20 13:51:30'),
(12, 'Narsingdi', '2024-06-20 13:51:30'),
(13, 'Netrokkona', '2024-06-20 13:51:30'),
(14, 'Rajbari', '2024-06-20 13:51:30'),
(15, 'Shariatpur', '2024-06-20 13:51:30'),
(16, 'Sherpur', '2024-06-20 13:51:30'),
(17, 'Tangail', '2024-06-20 13:51:30'),
(18, 'Bogura', '2024-06-20 13:51:30'),
(19, 'Joypurhat', '2024-06-20 13:51:30'),
(20, 'Naogaon', '2024-06-20 13:51:30'),
(21, 'Natore', '2024-06-20 13:51:30'),
(22, 'Nawabganj', '2024-06-20 13:51:30'),
(23, 'Pabna', '2024-06-20 13:51:30'),
(24, 'Rajshahi', '2024-06-20 13:51:30'),
(25, 'Dinajpur', '2024-06-20 13:51:30'),
(26, 'Gaibandha', '2024-06-20 13:51:30'),
(27, 'Kurigram', '2024-06-20 13:51:30'),
(28, 'Lalmonirhat', '2024-06-20 13:51:30'),
(29, 'Nilphamari', '2024-06-20 13:51:30'),
(30, 'Panchagarh', '2024-06-20 13:51:30'),
(31, 'Rangpur', '2024-06-20 13:51:30'),
(32, 'Thakurgaon', '2024-06-20 13:51:30'),
(33, 'Barguna', '2024-06-20 13:51:30'),
(34, 'Barisal', '2024-06-20 13:51:30'),
(35, 'Bhola', '2024-06-20 13:51:30'),
(36, 'Jhalookati', '2024-06-20 13:51:30'),
(37, 'Patuakhali', '2024-06-20 13:51:30'),
(38, 'Pirojpur', '2024-06-20 13:51:30'),
(39, 'Bandarban', '2024-06-20 13:51:30'),
(40, 'Brahmanbaria', '2024-06-20 13:51:30'),
(41, 'Chandpur', '2024-06-20 13:51:30'),
(42, 'Chittagong', '2024-06-20 13:51:30'),
(43, 'Comilla', '2024-06-20 13:51:30'),
(44, 'Cox\'s Bazar', '2024-06-20 13:51:30'),
(45, 'Feni', '2024-06-20 13:51:30'),
(46, 'Khargrachari', '2024-06-20 13:51:30'),
(47, 'Lakshmipur', '2024-06-20 13:51:30'),
(48, 'Noakhali', '2024-06-20 13:51:30'),
(49, 'Rangamati', '2024-06-20 13:51:30'),
(50, 'Habiganj', '2024-06-20 13:51:30'),
(51, 'Maulvibazar', '2024-06-20 13:51:30'),
(52, 'Sunamganj', '2024-06-20 13:51:30'),
(53, 'Sylhet', '2024-06-20 13:51:30'),
(54, 'Bagerhat', '2024-06-20 13:51:30'),
(55, 'Chuadanga', '2024-06-20 13:51:30'),
(56, 'Jessore', '2024-06-20 13:51:30'),
(57, 'Jhenaidah', '2024-06-20 13:51:30'),
(58, 'Khulna', '2024-06-20 13:51:30'),
(59, 'Kushtia', '2024-06-20 13:51:30'),
(60, 'Magura', '2024-06-20 13:51:30'),
(61, 'Meherpur', '2024-06-20 13:51:30'),
(62, 'Narail', '2024-06-20 13:51:30'),
(63, 'Satkhira', '2024-06-20 13:51:30'),
(64, 'Sirajgonj', '2025-01-19 14:33:29');

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
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1);

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
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(1, 'Sample 101', 'This is a sample schedule only.', '2022-01-10 10:30:00', '2022-01-11 18:00:00'),
(2, 'Sample 102', 'Sample Description 102', '2022-01-08 09:30:00', '2022-01-08 11:30:00'),
(4, 'Sample 102', 'Sample Description', '2022-01-12 14:00:00', '2022-01-12 17:00:00'),
(5, 'holiday', 'holiday', '2024-08-01 02:10:00', '2024-08-01 05:12:00'),
(6, 'holidays', 'holiday', '2024-08-01 02:10:00', '2024-08-01 05:12:00'),
(7, 'off day', 'off day', '2024-07-02 20:30:00', '2024-07-03 18:28:00'),
(8, 'off day', 'asdfsa', '2024-09-26 18:30:00', '2024-09-26 12:30:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `upzila`
--

CREATE TABLE `upzila` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `upzila_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `upzila`
--

INSERT INTO `upzila` (`id`, `name`, `upzila_id`) VALUES
(1, 'Motijheel', 1),
(2, 'Dhaka Sadar', 1),
(3, 'Nilkhet', 1),
(4, 'Kochukhet', 1),
(5, 'Mohammadpur', 1),
(6, 'Kamrangirchar', 1),
(7, 'Dhanmondi', 1),
(8, 'Gulshan', 1),
(9, 'Banani', 1),
(10, 'Mirpur', 1),
(11, 'Lalmati', 1),
(12, 'Uttara', 1),
(13, 'Dania', 1),
(14, 'Khilgaon', 1),
(15, 'Demra', 1),
(16, 'Kodomtoli', 1),
(17, 'Tejgaon', 1),
(18, 'Shantinagar', 1),
(19, 'Keranigonj', 1),
(20, 'Nawabgonj', 1),
(21, 'Dohar', 1),
(22, 'Dhamrai', 1),
(23, 'Savar', 1),
(24, '	Khilkhet', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ARIF HAWLADER', 'mdarifhowlader091@gmail.com', 'admin', NULL, '$2y$12$4ChtSG6R1nYcPhJ3y/TvhO6fr7Oj1Ko5hlU3pJM1gsiuqaWpCMtQK', NULL, '2025-01-16 11:25:28', '2025-01-16 11:25:28');

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
-- Indexes for table `district`
--
ALTER TABLE `district`
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
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `upzila`
--
ALTER TABLE `upzila`
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
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `upzila`
--
ALTER TABLE `upzila`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
