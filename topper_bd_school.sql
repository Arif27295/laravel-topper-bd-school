-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2025 at 11:21 AM
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
-- Table structure for table `add_students`
--

CREATE TABLE `add_students` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_n` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_nid` int NOT NULL,
  `mother_n` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_nid` int NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` int NOT NULL,
  `number` int NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blo_grp` enum('o-','o+','a-','a+','b-','b+','ab-','ab+') COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_care` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pre_vill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pre_dist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pre_upzi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pre_p_offi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pre_p_cod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_care` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_vill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_dist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_upzi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_p_offi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_p_cod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '0001_01_01_000002_create_jobs_table', 1),
(7, '2025_01_21_155859_create_add_students_table', 2);

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
-- Table structure for table `post_code`
--

CREATE TABLE `post_code` (
  `id` int NOT NULL,
  `p_code` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p_cod_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post_code`
--

INSERT INTO `post_code` (`id`, `p_code`, `p_cod_id`) VALUES
(1, '1000', 1),
(2, '1223', 1),
(3, '1100', 2),
(4, '1203', 2),
(5, '1204', 2),
(6, '1205', 3),
(7, '1206', 4),
(8, '1207', 5),
(9, '1222', 5),
(10, '1211', 6),
(11, '1225', 11),
(12, '1230', 12),
(13, '1236', 13),
(15, '1214', 14),
(16, '1360', 15),
(17, '1361', 15),
(18, '1362', 16),
(19, '1208', 17),
(20, '1215', 17),
(21, '1217', 18),
(22, '1310', 19),
(23, '1311', 19),
(24, '1312', 19),
(25, '1313', 19),
(26, '1320', 20),
(27, '1321', 20),
(28, '1322', 20),
(29, '1323', 20),
(30, '1324', 20),
(31, '1325', 20),
(32, '1330', 21),
(33, '1331', 21),
(34, '1332', 21),
(35, '1333', 21),
(36, '1350', 22),
(37, '1351', 22),
(38, '1340', 23),
(39, '1341', 23),
(40, '1342', 23),
(41, '1343', 23),
(42, '1344', 23),
(43, '1345', 23),
(44, '1346', 23),
(45, '1347', 23),
(46, '1348', 23),
(47, '1349', 23),
(48, '	1229', 24);

-- --------------------------------------------------------

--
-- Table structure for table `post_office`
--

CREATE TABLE `post_office` (
  `id` int NOT NULL,
  `p_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p_office_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post_office`
--

INSERT INTO `post_office` (`id`, `p_name`, `p_office_id`) VALUES
(1, '	Dhaka GPO', 1),
(2, 'Dilkusha TSO', 1),
(3, 'Dhaka Sadar HO', 2),
(4, '	Wari TSO', 2),
(5, 'Gandaria TSO', 2),
(6, 'New Market TSO', 3),
(7, '	Dhaka Cen,ft. TSO', 4),
(8, 'Mohammadpur Housing Estate TSO', 5),
(9, 'Bangabhaban TSO', 5),
(10, '	Posta TSO', 6),
(11, '	Jigatola TSO', 7),
(12, 'Gulshan TSO', 8),
(13, '	Banani TSO', 9),
(14, 'Mirpur TSO', 10),
(15, 'Sangshad Bhaban', 11),
(16, 'Uttara Model Town TSO', 12),
(17, '	Dania TSO', 13),
(18, '	Bashabo TSO', 14),
(19, 'Demra UPO', 15),
(20, '	Sarulia SO', 15),
(21, 'Kodomtoli UPO', 16),
(22, 'Dhaka Politechnique Institut', 17),
(23, 'Tejgaon TSO', 17),
(24, 'Shantinagar TSO', 18),
(25, 'Keranigonj UPO', 19),
(26, '	Dhaka Jute Mils SO', 19),
(27, '	Ati EDSO', 19),
(28, '	Kalatia SO', 19),
(29, '	Nawabgonj UPO', 20),
(30, '	Hasnabad SO', 20),
(31, 'Daudpur So', 20),
(32, '	Agla EDSO', 20),
(33, '	Khalpur EDSO', 20),
(34, 'Churan So', 20),
(35, '	Joypara (Dohar) UPO', 21),
(36, '	Palamgonj SO', 21),
(37, '	Narisha SO', 21),
(38, '	Mokshedpur So', 21),
(39, 'Dhamrai UPO', 22),
(40, 'Kalampur EDSO', 22),
(41, 'Savar UPO', 23),
(42, 'Dairy Firm SO', 23),
(43, '	Jahangir Nagar University SO', 23),
(44, '	Savar PATC  SO', 23),
(45, '	Savar Cantt. SO', 23),
(46, '	Shimulia SO', 23),
(47, 'Kashem Cotton Mills SO', 23),
(48, 'Rajfulbaria EDSO', 23),
(49, 'Amin Bazar', 23),
(50, '	EPZ SO', 23),
(51, '	Khilkhet TSO', 24);

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
-- Indexes for table `add_students`
--
ALTER TABLE `add_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `add_students_number_unique` (`number`),
  ADD UNIQUE KEY `add_students_email_unique` (`email`),
  ADD UNIQUE KEY `add_students_stu_id_unique` (`stu_id`);

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
-- Indexes for table `post_code`
--
ALTER TABLE `post_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_office`
--
ALTER TABLE `post_office`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `add_students`
--
ALTER TABLE `add_students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_code`
--
ALTER TABLE `post_code`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `post_office`
--
ALTER TABLE `post_office`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
