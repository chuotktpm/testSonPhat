-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 08:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sonphat`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookticket`
--

CREATE TABLE `bookticket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(11) UNSIGNED DEFAULT NULL,
  `provinceID` bigint(11) UNSIGNED DEFAULT 1,
  `namecustomer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonecustomer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookticket`
--

INSERT INTO `bookticket` (`id`, `userID`, `provinceID`, `namecustomer`, `phonecustomer`, `created_at`, `updated_at`) VALUES
(53, 2, 3, 'Hiếu', '09999999999', '2021-11-26 02:09:47', '2021-11-26 02:09:47'),
(54, 2, 4, 'Lợn', '0000000000', '2021-11-26 02:09:47', '2021-11-26 02:09:47'),
(55, 2, 3, 'Bảo', '1234', '2021-11-26 10:33:36', '2021-11-26 10:33:36'),
(56, 2, 1, NULL, NULL, '2021-11-26 10:33:37', '2021-11-26 10:33:37'),
(57, 2, 6, 'Bảo', '123', '2021-11-26 20:23:08', '2021-11-26 20:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `coachinfo`
--

CREATE TABLE `coachinfo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `license_plate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_seats` int(11) NOT NULL,
  `number_beds` int(11) NOT NULL,
  `cargo_per_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestart` time(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coachinfo`
--

INSERT INTO `coachinfo` (`id`, `license_plate`, `number_seats`, `number_beds`, `cargo_per_customer`, `name`, `phone`, `timestart`, `created_at`, `updated_at`) VALUES
(1, '20B-00248', 30, 0, '10kg', 'Doanh nghiệp tư nhân Mạnh Hà', '0345678912', '04:50:00.000000', NULL, NULL),
(2, '20B-00769', 24, 0, '15kg', 'HTX vận tải Chùa Hang', '0343456765', '04:00:00.000000', NULL, NULL),
(3, '20B-00115', 30, 0, '15kg', 'Công ty CPVT Thái Nguyên', '0343888573', '01:00:00.000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coachroute`
--

CREATE TABLE `coachroute` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `license_plate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_province` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(60,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coachroute`
--

INSERT INTO `coachroute` (`id`, `license_plate`, `serial`, `id_province`, `price`, `created_at`, `updated_at`) VALUES
(1, '20B-00248', '1-7-3-2', 2, '90000', NULL, NULL),
(2, '20B-00769', '1-4-5-6', 6, '100000', NULL, NULL),
(3, '20B-00248', '1-2-5', 5, '150000', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_24_034548_create_province_table', 2),
(6, '2021_11_24_040424_create_coachinfo_table', 3),
(7, '2021_11_24_065521_create_coachroute_table', 4),
(8, '2021_11_25_065721_create_bookticket_table', 5),
(9, '2021_11_25_100630_create_order_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(11) UNSIGNED NOT NULL,
  `coachrouteID` bigint(11) UNSIGNED DEFAULT NULL,
  `chainTicketID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unfinished',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `userID`, `coachrouteID`, `chainTicketID`, `status`, `created_at`, `updated_at`) VALUES
(10, 2, 1, '53-54', 'done', '2021-11-26 02:09:47', '2021-11-26 09:02:59'),
(11, 2, NULL, '55-56', 'unfinished', '2021-11-26 10:33:37', '2021-11-26 10:33:37'),
(12, 2, NULL, '57', 'unfinished', '2021-11-26 20:23:08', '2021-11-26 20:23:08');

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
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameprovince` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `nameprovince`, `created_at`, `updated_at`) VALUES
(1, 'Thái Nguyên', NULL, NULL),
(2, 'Thái Bình', NULL, NULL),
(3, 'Hà Nội', NULL, NULL),
(4, 'Bắc Giang', NULL, NULL),
(5, 'Cao Bằng', NULL, NULL),
(6, 'Lạng Sơn', NULL, NULL),
(7, 'Hải Phòng', NULL, NULL),
(8, 'Bắc Kạn', NULL, NULL);

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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@sonphat.com', NULL, '$2y$10$3uN40hEJ41tFoBHkJ4W6SeXabcSYML59rrL7wP6t/5j8THaZqLz4W', 'admin', NULL, NULL, NULL),
(2, 'Nguyễn Thái Bảo', 'bao01@gmail.com', NULL, '$2y$10$8oxRHicPYO6UjJgEI7rm/ODwhA0pPjdAEZpcytz2gPYzI2Afi2JlC', 'user', NULL, NULL, NULL),
(4, 'Chuột', 'baomit01@gmail.com', NULL, '$2y$10$uc0L6AEr2BpPHBJk7FgF6OIXhC8eNduIS3ZvQ5EP.TLXMfOB3Zxl6', 'user', NULL, '2021-11-26 22:38:41', '2021-11-26 22:38:41'),
(5, 'Link mời discord', 'trucquay99@gmail.com', NULL, '$2y$10$zkglkBDQA7WHVKSOjIzNsOPcA8Ww/7Dub2aZefqvr93b8bzLtnnu2', 'user', NULL, '2021-11-27 00:31:29', '2021-11-27 00:31:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookticket`
--
ALTER TABLE `bookticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`),
  ADD KEY `provinceID` (`provinceID`);

--
-- Indexes for table `coachinfo`
--
ALTER TABLE `coachinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `license_plate` (`license_plate`);

--
-- Indexes for table `coachroute`
--
ALTER TABLE `coachroute`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_province` (`id_province`),
  ADD KEY `license_plate` (`license_plate`);

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
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`),
  ADD KEY `coachrouteID` (`coachrouteID`);

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
-- Indexes for table `province`
--
ALTER TABLE `province`
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
-- AUTO_INCREMENT for table `bookticket`
--
ALTER TABLE `bookticket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `coachinfo`
--
ALTER TABLE `coachinfo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coachroute`
--
ALTER TABLE `coachroute`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookticket`
--
ALTER TABLE `bookticket`
  ADD CONSTRAINT `bookticket_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bookticket_ibfk_2` FOREIGN KEY (`provinceID`) REFERENCES `province` (`id`);

--
-- Constraints for table `coachroute`
--
ALTER TABLE `coachroute`
  ADD CONSTRAINT `coachroute_ibfk_1` FOREIGN KEY (`license_plate`) REFERENCES `coachinfo` (`license_plate`),
  ADD CONSTRAINT `coachroute_ibfk_2` FOREIGN KEY (`id_province`) REFERENCES `province` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`coachrouteID`) REFERENCES `coachroute` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
