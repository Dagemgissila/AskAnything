-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 04:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `askanything`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `profile_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `user_id`, `profile_id`, `question_id`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 2, 'amazing ethiopia culture food', 1, '2023-03-04 01:50:04', '2023-03-04 01:50:04'),
(2, 2, 2, 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque in aspernatur culpa tenetur, iure voluptas quo obcaecati facere, quasi explicabo, dolorum provident. Quam provident a suscipit eaque incidunt facilis. Eum!', 1, '2023-03-04 01:50:15', '2023-03-04 01:50:15'),
(3, 2, 2, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque in aspernatur culpa tenetur, iure voluptas quo obcaecati facere, quasi explicabo, dolorum provident. Quam provident a suscipit eaque incidunt facilis. Eum!', 1, '2023-03-04 01:53:17', '2023-03-04 01:53:17'),
(4, 2, 2, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque in aspernatur culpa tenetur, iure voluptas quo obcaecati facere, quasi explicabo, dolorum provident. Quam provident a suscipit eaque incidunt facilis. Eum!', 1, '2023-03-04 01:54:02', '2023-03-04 01:54:02'),
(5, 2, 2, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque in aspernatur culpa tenetur, iure voluptas quo obcaecati facere, quasi explicabo, dolorum provident. Quam provident a suscipit eaque incidunt facilis. Eum!', 1, '2023-03-04 01:55:04', '2023-03-04 01:55:04'),
(6, 2, 2, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque in aspernatur culpa tenetur, iure voluptas quo obcaecati facere, quasi explicabo, dolorum provident. Quam provident a suscipit eaque incidunt facilis. Eum!', 1, '2023-03-04 01:55:45', '2023-03-04 01:55:45'),
(7, 2, 2, 1, 'hey', 1, '2023-03-04 01:58:17', '2023-03-04 01:58:17'),
(8, 2, 2, 2, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi quod doloribus iure quia iusto deserunt sed, enim doloremque inventore eaque incidunt expedita veniam temporibus praesentium, beatae impedit! Similique, voluptatibus quaerat!', 1, '2023-03-04 02:01:09', '2023-03-04 02:01:09'),
(9, 1, 1, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptates voluptas vitae, ducimus ipsa esse impedit a quidem aspernatur fugit adipisci illum magni, commodi sit, facilis officiis assumenda ipsum non?', 1, '2023-03-04 02:23:08', '2023-03-04 02:23:08'),
(10, 1, 1, 5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptates voluptas vitae, ducimus ipsa esse impedit a quidem aspernatur fugit adipisci illum magni, commodi sit, facilis officiis assumenda ipsum non?', 1, '2023-03-04 02:23:32', '2023-03-04 02:23:32'),
(11, 1, 1, 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptates voluptas vitae, ducimus ipsa esse impedit a quidem aspernatur fugit adipisci illum magni, commodi sit, facilis officiis assumenda ipsum non?', 1, '2023-03-04 02:24:31', '2023-03-04 02:24:31');

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
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(26, '2023_03_03_042229_create_profiles_table', 1),
(27, '2023_03_03_062130_create_questions_table', 1),
(28, '2023_03_03_163642_create_answers_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `study` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `fullname`, `phonenumber`, `profile_pic`, `location`, `work`, `hobby`, `study`, `relation`, `birthdate`, `created_at`, `updated_at`) VALUES
(1, 1, 'dagem gissila', '09000000000', '1677944156.png', 'addis abeba', 'i am software enginner', 'coding,reading', 'arba minch university', 'in relation', '2023-03-08', '2023-03-04 01:42:46', '2023-03-04 04:35:56'),
(2, 2, 'mamasita', '09238164', '1677934037.webp', 'arba minch', 'employee at abysinnia bank', 'music', 'addis abeba university', 'i am  single', '2023-03-21', '2023-03-04 01:46:30', '2023-03-04 01:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `profile_id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `profile_id`, `question`, `image`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque in aspernatur culpa tenetur, iure voluptas quo obcaecati facere, quasi explicabo, dolorum provident. Quam provident a suscipit eaque incidunt facilis. Eum!', '1677933894.jpg', 'technology', 1, '2023-03-04 01:44:54', '2023-03-04 01:44:54'),
(2, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque in aspernatur culpa tenetur, iure voluptas quo obcaecati facere, quasi explicabo, dolorum provident. Quam provident a suscipit eaque incidunt facilis. Eum!', '1677933912.jpg', 'technology', 1, '2023-03-04 01:45:12', '2023-03-04 01:45:12'),
(3, 1, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque in aspernatur culpa tenetur, iure voluptas quo obcaecati facere, quasi explicabo, dolorum provident. Quam provident a suscipit eaque incidunt facilis. Eum!', NULL, 'Education', 1, '2023-03-04 01:45:23', '2023-03-04 01:45:23'),
(4, 2, 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque in aspernatur culpa tenetur, iure voluptas quo obcaecati facere, quasi explicabo, dolorum provident. Quam provident a suscipit eaque incidunt facilis. Eum!', NULL, 'technology', 1, '2023-03-04 01:48:35', '2023-03-04 01:48:35'),
(5, 2, 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque in aspernatur culpa tenetur, iure voluptas quo obcaecati facere, quasi explicabo, dolorum provident. Quam provident a suscipit eaque incidunt facilis. Eum!', '1677934143.jpg', 'History', 1, '2023-03-04 01:49:03', '2023-03-04 01:49:03'),
(6, 2, 2, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi quod doloribus iure quia iusto deserunt sed, enim doloremque inventore eaque incidunt expedita veniam temporibus praesentium, beatae impedit! Similique, voluptatibus quaerat!', '1677934757.jpg', 'Entertainment', 1, '2023-03-04 01:59:17', '2023-03-04 01:59:17'),
(7, 1, 1, 'dfjdkfjn', '1677944194.jpg', 'technology', 1, '2023-03-04 04:36:34', '2023-03-04 04:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `fullname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dagem gissila', 'admin@gmail.com', NULL, '$2y$10$Vp6vZUbdmB.gGDrWoS4R7u0DhW7spRNM6YEWIR05APLQHtKzEAYRi', NULL, '2023-03-04 01:42:46', '2023-03-04 01:42:46'),
(2, 'mamasita', 'mamasita@gmail.com', NULL, '$2y$10$ei2HMSUYVVrrcK1m.Dh0dOjJEsGkymDrjN2R3IpTBKEsl08pvk9Mq', NULL, '2023-03-04 01:46:30', '2023-03-04 01:46:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_user_id_foreign` (`user_id`),
  ADD KEY `answers_profile_id_foreign` (`profile_id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_user_id_foreign` (`user_id`),
  ADD KEY `questions_profile_id_foreign` (`profile_id`);

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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
