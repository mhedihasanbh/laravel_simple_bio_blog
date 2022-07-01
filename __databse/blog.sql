-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 02:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Entertainment', NULL, '', NULL, '2022-06-29 07:47:25', '2022-06-29 07:47:25'),
(4, 'Journalists', NULL, '', NULL, '2022-06-29 07:47:45', '2022-06-29 07:47:45'),
(5, 'Politician', NULL, '', NULL, '2022-06-29 07:48:16', '2022-06-29 07:48:16');

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
(5, '2022_06_27_154556_create_posts_table', 2),
(6, '2022_06_28_000912_create_single_posts_table', 3),
(7, '2022_06_29_020827_create_categories_table', 4),
(9, '2022_06_30_140342_create_social_media_table', 5),
(10, '2022_06_30_143905_create_social_media_table', 6),
(11, '2022_06_30_194948_create_website_settings_table', 7);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_tittle`, `post_description`, `post_image`, `created_at`, `updated_at`) VALUES
(8, 'Park Jimin Profile, Age, Weight, Height, Family, Affairs, Biography & More', 'Kim SeokJin Age, Height, Family, Net Worth, Affairs, Wiki, Biography & More Kim SeokJin also known by his stage name Jin, is a South Korean singer, songwriter, and member of', 'post-images/1656356316.jpg', '2022-06-27 10:58:36', '2022-06-27 10:58:36'),
(9, 'Namrata Dutt Age, Height, Husband, Family, Networth, Biography & More', 'Namrata Dutt Age, Height, Husband, Family, Networth, Biography & More Namrata Dutt is an Indian internet celebrity. She was born in the year 1962 in Mumbai, Maharshtra, India. She is', 'post-images/1656356396.jpg', '2022-06-27 10:59:56', '2022-06-27 10:59:56'),
(10, 'Neha Kakkar Profile, Age, Height, Husband, Family, Biography & More', 'Neha Kakkar Profile, Age, Height, Husband, Family, Affairs, Biography & More Neha Kakkar Singh was born on June 6, 1988 is an Indian playback singer. She is the younger sister', 'post-images/1656356437.jpg', '2022-06-27 11:00:37', '2022-06-27 11:00:37'),
(11, 'Park Jimin Profile, Age, Weight, Height, Family, Affairs, Biography & More', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'post-images/1656356914.webp', '2022-06-27 11:08:34', '2022-06-27 11:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `single_posts`
--

CREATE TABLE `single_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_tittle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bicipes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eyeColor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hairColor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zodic_sign` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_town` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sister` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affair` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wife_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_cause` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facts` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `single_posts`
--

INSERT INTO `single_posts` (`id`, `post_tittle`, `post_image`, `full_name`, `profession`, `height`, `weight`, `chest`, `waist`, `bicipes`, `eyeColor`, `hairColor`, `birth_date`, `age`, `birth_place`, `zodic_sign`, `nationality`, `home_town`, `education_qualification`, `father_name`, `mother_name`, `sister`, `brother`, `regions`, `hobby`, `material_status`, `affair`, `wife`, `wife_image`, `death_date`, `death_cause`, `summary`, `facts`, `created_at`, `updated_at`) VALUES
(1, 'Neha Kakkar Singh', 'singlePost-images/1656465079.jpg', 'Shreedhan sign adon', 'artist', '5', '67', '49 inches', '33 inches', '17 inches', 'Black', 'Black', '1995-10-17', '27', 'hasan', 'Not', 'Bangladeshi', 'dhaka', 'm.sc', 'abdul kashem bhuyan', 'ferdeushe begum', 'topo', 'mili', 'islam', 'programming', '1', 'no', 'salma', 'wife-images/1656465079.jpg', NULL, NULL, '<p style=\"margin: 0px; padding: 0px;\"><font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 14px;\">In 2008, she launched her debut album Neha The Rockstar with music by Meet Bros. Anjjan.</span></font><br></p>', NULL, '2022-06-28 17:11:19', '2022-06-29 17:40:48'),
(2, 'Malavika Mohanan', 'singlePost-images/1656520893.jpg', 'Malavika Mohanan', 'artist', '5', NULL, NULL, NULL, NULL, 'black', 'black', '1998-06-30', '26', 'india', 'sign', 'indian', 'Mumbai, Maharashtra', 'LLB', 'KU Mohanan', 'Beena Mohanan', 'Neha shorma', 'Birat Shorma', 'Hindu', 'shopping', 'married', 'unknown', 'Rohit', '', NULL, NULL, '<p><span style=\"color: rgb(84, 83, 83); font-family: Lora; font-size: 14px;\">Biography Earlier life Malavika Mohanan was born on 4th August 1993 to KU Mohanan, who is an Indian film cinematographer, and Beena Mohanan in Payyanur, Kannur. She has a bachelor’s degree from…</span><br></p>', NULL, '2022-06-29 08:41:33', '2022-06-29 16:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(28, 'facebook', 'sajib.bhuyan.167', '2022-06-30 07:16:54', '2022-06-30 09:06:05'),
(29, 'instgram', NULL, '2022-06-30 07:16:54', '2022-06-30 08:24:46'),
(30, 'twitter', NULL, '2022-06-30 07:16:54', '2022-06-30 08:24:46'),
(31, 'linkdin', 'in/mehedihasanbh/', '2022-06-30 07:16:54', '2022-06-30 09:01:51'),
(32, 'quora', NULL, '2022-06-30 07:16:54', '2022-06-30 08:24:46');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sajib hasan', 'test@gmail.com', NULL, '$2y$10$eXTFAKJbBqZv58uHFlfNBuBBKbsozDzTdeyog3MgA2GvjnqENUmOK', NULL, '2022-06-26 17:01:33', '2022-06-26 17:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `website_settings`
--

CREATE TABLE `website_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_favicon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_settings`
--

INSERT INTO `website_settings` (`id`, `website_logo`, `website_favicon`, `created_at`, `updated_at`) VALUES
(3, '1656634260.jpg', '1656634366.jpg', '2022-06-30 12:28:04', '2022-06-30 16:12:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_posts`
--
ALTER TABLE `single_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `website_settings`
--
ALTER TABLE `website_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `single_posts`
--
ALTER TABLE `single_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `website_settings`
--
ALTER TABLE `website_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
