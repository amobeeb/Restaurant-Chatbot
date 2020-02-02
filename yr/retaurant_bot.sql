-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 01:32 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retaurant_bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `mobile`, `service`, `price`, `date`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Habeeb', 'amobeeb@gm.com', '08900', 'dodo', '200', '23', '323', '2019-08-06 06:13:55', '2019-08-06 06:13:55'),
(2, 'Habeeb', 'amobeeb@gm.com', '08900', 'dodo', '200', '23', '323', '2019-08-06 06:13:56', '2019-08-06 06:13:56'),
(3, 'amode', 'amobre@c.c', '42423', 'Fried Rice and Chicken', '1500', '2019-08-07', '9 AM', '2019-08-06 06:23:04', '2019-08-06 06:23:04'),
(4, 'Amode Habeeb', 'amodehabeeb@gmail.com', '08123232323', 'Fried Rice and Chicken', '1500', '2019-08-07', '1 PM', '2019-08-06 06:26:21', '2019-08-06 06:26:21'),
(5, 'Habeeb', 'amobeeb@gmail.com', '08123556666', 'Fried Rice and Chicken', '1500', '2019-08-07', '9 AM', '2019-08-06 06:47:02', '2019-08-06 06:47:02'),
(6, 'Wale', 'wale@gmail.com', '0812393993', 'Fried Rice and Chicken', '1500', '2019-08-07', '9 AM', '2019-08-06 06:52:47', '2019-08-06 06:52:47'),
(7, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '2019-08-08', '2019-08-06 12:13:22', '2019-08-06 12:13:22'),
(8, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '2019-08-07', '2019-08-06 12:13:24', '2019-08-06 12:13:24'),
(9, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '2019-08-09', '2019-08-06 12:13:25', '2019-08-06 12:13:25'),
(10, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '2019-08-09', '2019-08-06 12:13:25', '2019-08-06 12:13:25'),
(11, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '2019-08-08', '2019-08-06 12:13:26', '2019-08-06 12:13:26'),
(12, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '2019-08-07', '2019-08-06 12:13:26', '2019-08-06 12:13:26'),
(13, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '2019-08-08', '2019-08-06 12:13:26', '2019-08-06 12:13:26'),
(14, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '2019-08-09', '2019-08-06 12:13:26', '2019-08-06 12:13:26'),
(15, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '2019-08-07', '2019-08-06 12:13:27', '2019-08-06 12:13:27'),
(16, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '2019-08-08', '2019-08-06 12:13:27', '2019-08-06 12:13:27'),
(17, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '2019-08-08', '2019-08-06 12:13:27', '2019-08-06 12:13:27'),
(18, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '3 PM', '2019-08-06 12:13:27', '2019-08-06 12:13:27'),
(19, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '3 PM', '2019-08-06 12:13:28', '2019-08-06 12:13:28'),
(20, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '9 AM', '2019-08-06 12:13:28', '2019-08-06 12:13:28'),
(21, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '1 PM', '2019-08-06 12:13:28', '2019-08-06 12:13:28'),
(22, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '1 PM', '2019-08-06 12:13:33', '2019-08-06 12:13:33'),
(23, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '1 PM', '2019-08-06 12:13:34', '2019-08-06 12:13:34'),
(24, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '1 PM', '2019-08-06 12:13:35', '2019-08-06 12:13:35'),
(25, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '3 PM', '2019-08-06 12:13:36', '2019-08-06 12:13:36'),
(26, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '3 PM', '2019-08-06 12:13:37', '2019-08-06 12:13:37'),
(27, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '9 AM', '2019-08-06 12:13:37', '2019-08-06 12:13:37'),
(28, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '9 AM', '2019-08-06 12:13:43', '2019-08-06 12:13:43'),
(29, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '9 AM', '2019-08-06 12:13:44', '2019-08-06 12:13:44'),
(30, 'Habeeb', 'amode@gmail.com', '08138282828', 'Fried Rice and Chicken', '1500', '2019-08-07', '9 AM', '2019-08-06 12:13:54', '2019-08-06 12:13:54'),
(31, 'Amode', 'Amobeeb@fm.com', '028338', 'Fried Rice and Chicken', '1500', '2019-08-08', '1 PM', '2019-08-06 12:14:34', '2019-08-06 12:14:34'),
(32, 'Amode', 'amobe@fm.com', '839292', 'Fried Rice and Chicken', '1500', '2019-08-07', '9 AM', '2019-08-06 12:20:30', '2019-08-06 12:20:30'),
(33, 'Habeeb', 'amoe@fm.com', '083929923', 'Fried Rice and Chicken', '1500', '2019-08-08', '1 PM', '2019-08-06 12:23:06', '2019-08-06 12:23:06'),
(34, 'Habeeb', 'amobeeb@gm.com', '08128382929', 'Fried Rice and Chicken', '1500', '2019-08-07', '9 AM', '2019-08-06 12:26:18', '2019-08-06 12:26:18'),
(35, 'Habeeb', 'abb@m.c', '929393', 'Fried Rice and Chicken', '1500', '2019-08-07', '9 AM', '2019-08-06 12:29:34', '2019-08-06 12:29:34'),
(36, 'Habeeb', 'amobeeb@gmail.com', '08137373838', 'Fried Rice and Chicken', '1500', '2019-08-07', '1 PM', '2019-08-06 12:31:51', '2019-08-06 12:31:51'),
(37, 'Habeeb', 'amobeeb@gmail.com', '08393393', 'Fried Rice and Chicken', '1500', '2019-08-07', '9 AM', '2019-08-06 12:37:01', '2019-08-06 12:37:01'),
(38, 'Habeeb Amode', 'amobeeb1net@gmail.com', '08127383728', 'Fried Rice and Chicken', '1500', '2019-08-08', '9 AM', '2019-08-07 09:14:06', '2019-08-07 09:14:06'),
(39, 'balqis', 'bharleykiss4kiss@gmail.com', '07036156904', 'Fried Rice and Chicken', '1500', '2019-08-08', '1 PM', '2019-08-07 09:20:53', '2019-08-07 09:20:53');

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
(3, '2019_08_06_032056_create_services_table', 1),
(4, '2019_08_06_033605_create_services', 2),
(5, '2019_08_06_055223_create_bookings_table', 3);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_pix` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `service`, `service_price`, `service_desc`, `service_pix`) VALUES
(1, '2019-08-05 23:00:00', '2019-08-05 23:00:00', 'Fried Rice and Chicken', '1500', 'Fried Rice and Chicken', 'noimage.jpg'),
(2, '2019-08-06 08:00:32', '2019-08-06 08:00:32', 'Chicken and Chips', '1300', 'Chicken and Chips with sauce', 'noimage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Pc7jE6CYjPRvLqRYsAlhy.Pi8m.p4L5.pt7byKDQNQxPwpMk.u73G', '0W7hgebn54SHI2lEZy3ErWZupFEnoM6xYJQmIVuZwFQGWW3MQ0ceAaWcqeyF', '2019-08-06 06:37:59', '2019-08-06 06:37:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
