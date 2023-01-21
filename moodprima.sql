-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2023 at 02:16 PM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobuahgeri`
--

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
-- Table structure for table `meta_landing`
--

CREATE TABLE `meta_landing` (
  `id` bigint UNSIGNED NOT NULL,
  `hero` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_hero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_landing`
--

INSERT INTO `meta_landing` (`id`, `hero`, `heading_hero`, `about`, `maps`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, '1674284641-banner.png', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet', 'MOOD PRIMA adalah perseroan terbatas yang terbentuk pada tahun 2022 bergerak dalam bidang outsourcing dan bisnis management dibentuk oleh founder founder yang mempunyai latar belakang yang berbeda tetapi mempunyai keresahan yang sama yaitu problem tentang mengelola sdm dengan adanya MOOD PRIMA kami berharap pengelolaan sdm di indonesia semakin menuju titik terang tingkat pengangguran berkurang dan company mempunyai tenaga kerja yang kompeten dalam bidangnya.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1981.454024539495!2d106.77917085502496!3d-6.658317652837274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cf6ad9097f41%3A0xee8261e9ae59490!2sAbah%20haji%20h!5e0!3m2!1sid!2sid!4v1674180382549!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'reksa.prayoga1012@gmail.com', 'Jl. Nurul Iman No.7 RW.5, Cipendak, Kec Jagakarsa, Kota Jakarta Selatan 12630', NULL, '2023-01-21 00:04:01');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_19_140723_create_meta_landing_table', 1),
(6, '2023_01_19_140745_create_services_table', 1),
(7, '2023_01_19_140757_create_testimonial_table', 1);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `thumb`, `created_at`, `updated_at`) VALUES
(7, 'Asisten Rumah Tangga', '1674284840-service1.png', '2023-01-19 19:18:54', '2023-01-21 00:07:20'),
(8, 'Perawat Lansia', '1674284867-service2.png', '2023-01-21 00:07:47', '2023-01-21 00:07:47'),
(9, 'Homecare', '1674284888-service3.png', '2023-01-21 00:08:08', '2023-01-21 00:08:08'),
(10, 'Babysitter', '1674284904-service4.png', '2023-01-21 00:08:24', '2023-01-21 00:08:24'),
(11, 'Gardener', '1674284921-service5.png', '2023-01-21 00:08:41', '2023-01-21 00:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `description`, `thumb`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo reprehenderit quae obcaecati, ullam voluptate illum porro. Rerum amet iste deleniti officia modi aliquam voluptate temporibus, sed praesentium quo, vel qui.', '1674285129-testimoni.png', NULL, '2023-01-21 00:12:09'),
(2, 'John', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo reprehenderit quae obcaecati, ullam voluptate illum porro. Rerum amet iste deleniti officia modi aliquam voluptate temporibus, sed praesentium quo, vel qui.', '1674285129-testimoni.png', NULL, '2023-01-21 00:12:09'),
(3, 'John', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo reprehenderit quae obcaecati, ullam voluptate illum porro. Rerum amet iste deleniti officia modi aliquam voluptate temporibus, sed praesentium quo, vel qui.', '1674285129-testimoni.png', NULL, '2023-01-21 00:12:09'),
(4, 'John', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo reprehenderit quae obcaecati, ullam voluptate illum porro. Rerum amet iste deleniti officia modi aliquam voluptate temporibus, sed praesentium quo, vel qui.', '1674285129-testimoni.png', NULL, '2023-01-21 00:12:09');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chiquita Hill', 'mudepaw@mailinator.com', NULL, '$2y$10$NIDRpCM7Uz7pXPV9BBMDweuPCNOYymsAY9XjiMLDPaI7UF4PfsboC', NULL, '2023-01-19 07:35:12', '2023-01-19 07:35:12'),
(2, 'Russell Pennington', 'kywyvuroz@mailinator.com', NULL, '$2y$10$ulMMKb3LZdK.P2WTYlE5MuQomqbCGO8SKcn6tpjiRdyxJw9rjjyli', NULL, '2023-01-19 19:02:47', '2023-01-19 19:02:47'),
(3, 'Leah Hurley', 'wevy@mailinator.com', NULL, '$2y$10$xwpoyrO./EQonTDKHT7tvOMNRbxqXFLGccyxVTKhYWpjVJc1IFGT2', NULL, '2023-01-21 00:02:27', '2023-01-21 00:02:27');

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
-- Indexes for table `meta_landing`
--
ALTER TABLE `meta_landing`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meta_landing`
--
ALTER TABLE `meta_landing`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
