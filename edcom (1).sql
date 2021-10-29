-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 29, 2021 at 01:01 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins_user`
--

DROP TABLE IF EXISTS `admins_user`;
CREATE TABLE IF NOT EXISTS `admins_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins_user`
--

INSERT INTO `admins_user` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Sapna Bnaiya', 'sapna@gmail.com', '$2y$10$WIau.kbbryisyUP7re0kFurHcY/Nfv95YAQLDVgEcn8rnz67hmGza', '2021-10-07 12:48:15', '2021-10-07 12:48:15'),
(2, 'sapnabaniya', 'sapna123@gmail.com', '$2y$10$Ava9eNSPCuHLDfRB9PQSnuxMr5qefXX./Pv7qSodiH3VEDEtgHD86', '2021-10-07 14:38:32', '2021-10-07 14:38:32'),
(3, 'astha shrestha', 'astha@gmail.com', '$2y$10$IWa6312Cs4xdrceiCNeeY.82q0wf1LSuC2B/Vg7VN1KOYsrCOvmGW', '2021-10-08 06:11:41', '2021-10-08 06:11:41'),
(4, 'Simran Shilpakar', 'simransilpakar@yahoo.com', '$2y$10$2vsaInWFyLeoh/3qAcViCujgFwT6yzkKbX/9xsoU.QjZtCEzhY276', '2021-10-11 02:29:15', '2021-10-11 02:29:15'),
(5, 'simran', 'simransilpakar@yahoo.com', '$2y$10$WqncQuUjiNpFkjVzYbj45uZMwVjnafGX6cJDUlLltrKfK8DT9oOPa', '2021-10-24 01:27:30', '2021-10-24 01:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

DROP TABLE IF EXISTS `admissions`;
CREATE TABLE IF NOT EXISTS `admissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_no` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `name`, `email`, `phone`, `address`, `skill`, `gender`, `ward_no`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sapna Bnaiya', 'sapna@gmail.com', '9827190713', 'nayabazar', 'Html/css', 'Female', '2', 'This is my application.', 'Active', '2021-10-05 01:43:25', '2021-10-05 01:43:25'),
(3, 'simran', 'simransilpakar@yahoo.com', '9866011435', 'Nepal', 'python', 'Female', '1', 'ede', 'Active', '2021-10-10 13:15:21', '2021-10-10 13:15:21'),
(4, 'sarman', 'sarman@gmail.com', '9846023561', 'India', 'Html/css', 'Female', '2', 'wdewdwedewdwed', 'Active', '2021-10-24 02:47:25', '2021-10-24 02:47:25'),
(5, 'Astha Shrestha', 'astha@gmail.com', '9866011435', 'India', 'Html/css', 'Female', '2', 'wdwdewd', 'Active', '2021-10-24 02:51:50', '2021-10-24 02:51:50'),
(6, 'sita', 'sara@gmail.com', '9866011435', 'India', 'Html/css', 'Female', '1', 'ybhyb', 'Active', '2021-10-24 02:53:40', '2021-10-24 02:53:40'),
(7, 'Simran Shilpakar', 'sulavshilpakar@hotmail.com', '9846023853', 'India', 'python', 'Female', '2', 'hello', 'Active', '2021-10-24 02:59:29', '2021-10-24 02:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tittle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `tittle`, `text`, `img_link`, `details`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Sports', 'sports make you fit.', 'blog1_1633923111.jpg', 'It\'s all about entertainment.', 'Active', '2021-10-09 23:10:10', '2021-10-10 21:47:15'),
(3, 'Books', 'Don,t Judge a book by it\'s cover.', 'blog2_1633923229.jpg', 'thanks.. error solved but i getting null output. join query not working properly data is not fetched from tables  please give me some suggestions where i going wrong', 'Active', '2021-10-10 21:50:09', '2021-10-10 21:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `coursecats`
--

DROP TABLE IF EXISTS `coursecats`;
CREATE TABLE IF NOT EXISTS `coursecats` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursecats`
--

INSERT INTO `coursecats` (`c_id`, `c_name`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'BCA', 'Active', '2021-10-04 01:08:12', '2021-10-04 01:08:12'),
(2, 'Bph', 'Active', '2021-10-24 01:53:11', '2021-10-24 01:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `duration` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imglink` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` int(11) NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `text`, `time`, `duration`, `imglink`, `c_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Numerical Method', 'this is NM', '07:03:00', '2 Months', 'course1_1633930609.jpg', 1, 'Active', '2021-10-04 01:33:21', '2021-10-10 23:52:17'),
(2, 'Computer Achitecture', 'Learn more about computer.', '06:17:00', '2 Months', 'course1_1633930609.jpg', 1, 'Active', '2021-10-24 01:48:16', '2021-10-24 01:51:29'),
(3, 'Medicine', 'All about pharmacist', '07:23:00', '2 Months', 'course1_1633930609.jpg', 2, 'Active', '2021-10-24 01:53:53', '2021-10-24 01:53:53'),
(4, 'test', 'test', '15:58:00', '2 Months', 'test', 2, 'Active', '2021-10-24 04:24:10', '2021-10-24 04:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tittle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `tittle`, `date`, `time`, `address`, `img_link`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'college sport meet', '2021-09-30', '11:12', 'pokhara', 'event1_1633927417.jpg', 'this the 6 annual sports meet', 'Active', '2021-09-28 23:37:22', '2021-10-10 22:58:56'),
(2, 'Feed a hungry child', '2021-10-20', '12:23', 'nadipur', 'event1_1635057480.jpg', 'It\'s all aboout entertainment.', 'Active', '2021-10-24 00:51:08', '2021-10-24 00:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_link` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `title`, `file_link`, `extension`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slider', 'slider_1633591552.jpg', 'jpg', NULL, 1, '2021-10-07 01:40:52', '2021-10-07 01:40:52'),
(2, 'blog', 'blog_1633841615.jpg', 'jpg', NULL, 1, '2021-10-09 23:08:35', '2021-10-09 23:08:35'),
(3, 'abtus_welcome', 'abtus_welcome_1633843978.jpg', 'jpg', NULL, 1, '2021-10-09 23:47:58', '2021-10-09 23:47:58'),
(4, 'logo', 'logo_1633851253.png', 'png', NULL, 1, '2021-10-10 01:49:13', '2021-10-10 01:49:13'),
(5, 'paint', 'paint_1633859388.jpg', 'jpg', NULL, 1, '2021-10-10 04:04:48', '2021-10-10 04:04:48'),
(6, 'chemistry', 'chemistry_1633859515.jpg', 'jpg', NULL, 1, '2021-10-10 04:06:55', '2021-10-10 04:06:55'),
(7, 'planning', 'planning_1633860416.jpg', 'jpg', NULL, 1, '2021-10-10 04:21:56', '2021-10-10 04:21:56'),
(8, 'bgimage', 'bgimage_1633878618.jpg', 'jpg', NULL, 1, '2021-10-10 09:25:18', '2021-10-10 09:25:18'),
(9, 'ramesh', 'ramesh_1633880730.jpg', 'jpg', NULL, 1, '2021-10-10 10:00:30', '2021-10-10 10:00:30'),
(10, 'sitaram', 'sitaram_1633880756.jpg', 'jpg', NULL, 1, '2021-10-10 10:00:56', '2021-10-10 10:00:56'),
(11, 'mekh', 'mekh_1633881308.jpg', 'jpg', NULL, 1, '2021-10-10 10:10:08', '2021-10-10 10:10:08'),
(12, 'blog1', 'blog1_1633923111.jpg', 'jpg', NULL, 1, '2021-10-10 21:46:51', '2021-10-10 21:46:51'),
(13, 'blog2', 'blog2_1633923229.jpg', 'jpg', NULL, 1, '2021-10-10 21:48:49', '2021-10-10 21:48:49'),
(14, 'news1', 'news1_1633925951.jpg', 'jpg', NULL, 1, '2021-10-10 22:34:11', '2021-10-10 22:34:11'),
(15, 'event1', 'event1_1633927417.jpg', 'jpg', NULL, 1, '2021-10-10 22:58:37', '2021-10-10 22:58:37'),
(16, 'gallery1', 'gallery1_1633928482.jpg', 'jpg', NULL, 1, '2021-10-10 23:16:22', '2021-10-10 23:16:22'),
(17, 'gallery2', 'gallery2_1633928495.jpg', 'jpg', NULL, 1, '2021-10-10 23:16:35', '2021-10-10 23:16:35'),
(18, 'gallery3', 'gallery3_1633928508.jpg', 'jpg', NULL, 1, '2021-10-10 23:16:48', '2021-10-10 23:16:48'),
(19, 'gallery4', 'gallery4_1633928522.jpg', 'jpg', NULL, 1, '2021-10-10 23:17:03', '2021-10-10 23:17:03'),
(20, 'course1', 'course1_1633930609.jpg', 'jpg', NULL, 1, '2021-10-10 23:51:49', '2021-10-10 23:51:49'),
(21, 'slider1', 'slider1_1633937220.jpg', 'jpg', NULL, 1, '2021-10-11 01:42:00', '2021-10-11 01:42:00'),
(22, 'event1', 'event1_1635057480.jpg', 'jpg', NULL, 1, '2021-10-24 00:53:00', '2021-10-24 00:53:00'),
(23, 'news2', 'news2_1635254989.jpg', 'jpg', NULL, 1, '2021-10-26 07:44:49', '2021-10-26 07:44:49'),
(24, 'slider2', 'slider2_1635257492.jpg', 'jpg', NULL, 1, '2021-10-26 08:26:32', '2021-10-26 08:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `img_link`, `status`, `g_id`, `created_at`, `updated_at`) VALUES
(7, 'gallery4', 'gallery4_1633928522.jpg', 'Active', '2', '2021-10-11 02:09:21', '2021-10-11 02:09:21'),
(5, 'gallery1', 'gallery1_1633928482.jpg', 'Active', '1', '2021-10-11 02:01:54', '2021-10-11 02:01:54'),
(6, 'gallery3', 'gallery3_1633928508.jpg', 'Active', '1', '2021-10-11 02:03:49', '2021-10-11 02:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

DROP TABLE IF EXISTS `gallery_categories`;
CREATE TABLE IF NOT EXISTS `gallery_categories` (
  `g_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `g_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`g_id`, `g_name`, `g_status`, `created_at`, `updated_at`) VALUES
(1, 'Photographic', 'Active', '2021-09-29 09:20:56', '2021-09-29 09:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `messages_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `details`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'Sapna Bnaiya', 'sapna@gmail.com', 'Computer Science', 'xcbgsedgre', '9811111', '2021-10-03 10:37:49', '2021-10-03 10:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_09_24_143648_create_galleries_table', 2),
(5, '2021_09_24_143725_create_gallery_categories_table', 3),
(6, '2021_09_24_143804_create_messages_table', 4),
(7, '2021_09_24_143821_create_news_table', 5),
(8, '2021_09_24_143854_create_results_table', 6),
(9, '2021_09_24_143915_create_teachers_table', 7),
(10, '2021_09_28_080637_create_courses_table', 8),
(11, '2021_09_28_081128_create_coursecats_table', 9),
(12, '2021_09_28_081324_create_sliders_table', 10),
(13, '2021_09_28_081410_create_notices_table', 11),
(14, '2021_09_28_081509_create_siteconfigs_table', 12),
(15, '2021_09_28_081840_create_blogs_table', 13),
(16, '2021_09_28_081941_create_files_table', 14),
(17, '2021_09_28_082104_create_files_table', 15),
(18, '2021_09_28_082923_create_admissions_table', 16),
(19, '2021_09_28_083045_create_whychooseuses_table', 17),
(20, '2021_09_28_083543_create_events_table', 18),
(21, '2021_10_04_075626_create_files_table', 19),
(22, '2021_10_07_174337_admin_user_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imglink` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `date`, `time`, `location`, `details`, `status`, `created_at`, `updated_at`, `imglink`) VALUES
(1, 'Feed Hungry child', 'Feed Hungry child', '2021-09-29', '11:07:00', 'pokhara', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo unde, Accounting Technologies corporis dolorum blanditiis ullam officia car repairing natus minima fugiat repellat! Corrupti voluptatibus aperiam voluptatem. Exercitationem, placeat, cupiditate.', 'Active', '2021-09-28 11:38:02', '2021-10-10 22:34:37', 'news1_1633925951.jpg'),
(2, 'sports', 'sports make you fit.', '2021-10-28', '10:15:00', 'pokhara', 'It\'s all aboout entertainment.', 'Active', '2021-10-26 07:45:38', '2021-10-26 07:45:38', 'news2_1635254989.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
CREATE TABLE IF NOT EXISTS `notices` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `heading` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `started` date NOT NULL,
  `ended` date NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `heading`, `date`, `detail`, `started`, `ended`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Business Conferences 2016', '2021-09-23', 'Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.fwwefgegrehytjukuyj gwfefewgrtytjuykuyjbfvdcsxadxwqdxcrgth .', '2021-09-23', '2021-10-01', 'Active', '2021-09-28 23:21:19', '2021-10-10 09:21:08'),
(2, 'Business Conferences 2016', '2021-09-23', 'Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.', '2021-09-30', '2021-10-06', 'Active', '2021-09-28 23:23:38', '2021-09-28 23:23:38'),
(4, 'Educational Tour', '2021-10-13', 'Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta', '2021-10-13', '2021-10-16', 'Active', '2021-10-10 09:18:10', '2021-10-10 09:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `date`, `link`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Examination', '2021-09-21', 'https://groups.google.com/g/livro-laravel/c/3mvLCEsQY-U?pli=1', 'Deactive', '2021-09-26 03:54:36', '2021-09-26 03:55:16'),
(5, 'Final Assesment', '2021-10-13', 'https://groups.google.com/g/livro-laravel/c/3mvLCEsQY-U?pli=1', 'Active', '2021-10-10 09:44:03', '2021-10-10 09:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `siteconfigs`
--

DROP TABLE IF EXISTS `siteconfigs`;
CREATE TABLE IF NOT EXISTS `siteconfigs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `site_key` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imglink` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siteconfigs`
--

INSERT INTO `siteconfigs` (`id`, `site_key`, `site_value`, `site_name`, `imglink`, `status`, `created_at`, `updated_at`) VALUES
(1, 'contact', '9828222222', 'contact', 'hello', 'Active', '2021-09-29 10:16:50', '2021-09-29 10:16:50'),
(2, 'location', '#405, Lan Streen, Los Vegas, USA', 'location', '-', 'Active', '2021-09-29 10:19:00', '2021-09-29 10:19:00'),
(3, 'email', 'supporte@yourdomin.com', 'email', '-', 'Active', '2021-09-29 10:19:27', '2021-09-29 10:19:27'),
(4, 'program', 'Painting', 'painting', 'chemistry_1633859515.jpg', 'Active', '2021-09-29 10:20:26', '2021-10-10 04:16:31'),
(5, 'program', 'Chemestry', 'Chemestry', 'chemistry_1633859515.jpg', 'Active', '2021-09-29 10:21:02', '2021-10-10 04:07:20'),
(25, 'planning', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'Introduction', 'planning_1633860416.jpg', 'Active', '2021-10-05 00:56:27', '2021-10-10 04:22:52'),
(7, 'message from principal', 'Since its inception in 1997, the University has shown a commitment to innovation and to serving the needs of its community and nation with a vision “to be a leader in the promotion of education through quality higher education and community service”.', 'Message from Principal', 'abtus_welcome_1633843978.jpg', 'Active', '2021-09-29 10:22:33', '2021-10-10 02:16:29'),
(8, 'visionaboutus', 'To be a leader in the promotion of education through quality higher education, health and community service', 'Vision', 'abtus_welcome_1633843978.jpg', 'Active', '2021-09-29 10:23:08', '2021-10-10 01:45:43'),
(9, 'missionaboutus', 'To accelerate the national development process by producing job market-driven, responsible, productive, welfare focused and committed human resources', 'Mission', 'abtus_welcome_1633843978.jpg', 'Active', '2021-09-29 10:23:39', '2021-10-10 01:46:03'),
(10, 'aboutus', 'Produce adept human resource in science and technology, humanities and management, and law and education for nation building', 'Objectives', '-', 'Active', '2021-09-29 10:24:13', '2021-09-29 10:24:13'),
(11, 'aboutus', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti', 'Objectives', '-', 'Active', '2021-09-29 10:24:44', '2021-09-29 10:24:44'),
(12, 'progressbar', '23', 'class-types', '-', 'Active', '2021-09-29 10:25:10', '2021-09-29 10:25:10'),
(13, 'progressbar', '500', 'classrooms', '-', 'Active', '2021-09-29 10:25:45', '2021-09-29 10:25:45'),
(14, 'progressbar', '123', 'student', '-', 'Active', '2021-09-29 10:26:10', '2021-09-29 10:26:10'),
(15, 'progressbar', '256', 'professors', '-', 'Active', '2021-09-29 10:26:38', '2021-09-29 10:26:38'),
(16, 'welcome', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'welcome', 'abtus_welcome_1633843978.jpg', 'Active', '2021-09-29 10:27:09', '2021-10-10 00:07:18'),
(17, 'google', 'https://www.google.com/', 'google', '-', 'Active', '2021-09-29 10:27:45', '2021-09-29 10:27:45'),
(18, 'twitter', 'https://twitter.com/', 'twitter', '-', 'Active', '2021-09-29 10:28:07', '2021-09-29 10:28:07'),
(19, 'youtube', 'https://www.youtube.com/', 'youtube', '-', 'Active', '2021-09-29 10:28:30', '2021-09-29 10:28:30'),
(20, 'logo', 'hello this is edcom', 'logo', 'logo_1633851253.png', 'Active', '2021-09-29 10:29:08', '2021-10-10 01:49:43'),
(21, 'learnpress', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'WELCOME TO LEARNPRESS', '-', 'Active', '2021-09-29 10:45:00', '2021-10-05 02:36:59'),
(22, 'facebook', 'https://www.facebook.com/', 'Facebook', '11632150585.jpg', 'Active', '2021-10-03 11:30:34', '2021-10-03 11:32:39'),
(23, 'objective', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.', 'Objectives', 'abtus_welcome_1633843978.jpg', 'Active', '2021-10-04 03:29:47', '2021-10-10 01:03:51'),
(26, 'program', 'Painting', 'Painting', 'chemistry_1633859515.jpg', 'Active', '2021-10-05 01:19:38', '2021-10-10 04:16:52'),
(27, 'program', 'Chemestry', 'Chemestry', 'chemistry_1633859515.jpg', 'Active', '2021-10-05 01:20:18', '2021-10-10 04:08:25'),
(28, 'principlename', 'Prof.Ram Kaji Shrestha', 'Principle', '-', 'Active', '2021-10-10 02:22:38', '2021-10-10 02:22:38'),
(29, 'msgfrmdean', 'A man who has never gone to school may steal from a freight car; but if he has a university education, he may steal the whole railroad. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quis adipisci sint sed laudantium recusandae beatae accusantium ab dicta magni odit fugiat, architecto ipsa rerum minima a illum, reiciendis aspernatur.', 'Message From Dean', 'abtus_welcome_1633843978.jpg', 'Active', '2021-10-10 02:42:21', '2021-10-10 02:42:21'),
(30, 'deanname', 'Prof.name', 'Dean', '-', 'Active', '2021-10-10 02:46:14', '2021-10-10 02:46:14'),
(31, 'bgimage', 'bgimage', 'bgimage', 'bgimage_1633878618.jpg', 'Active', '2021-10-10 09:26:55', '2021-10-10 09:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `btnlink` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `header`, `sub_heading`, `text`, `img_link`, `btn`, `btnlink`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slider1', 'Education', 'Education for everyone', 'Lorem ipsum dolor sit amet, consectetur.', 'slider1_1633937220.jpg', 'View Details', 'about-us', 'Active', '2021-09-28 21:35:31', '2021-10-11 01:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `post`, `img_link`, `details`, `experience`, `address`, `contact`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Ramesh Chalise', 'Professor', 'ramesh_1633880730.jpg', 'It\'s all aboout entertainment.', 'Qualifies with master degree in computer application. 5 years of teaching experience', 'Nadipur,Pokhara', '9846023835', 'Active', '2021-10-10 09:56:42', '2021-10-10 10:08:59'),
(3, 'Sitaram Pokhrel', 'Co-Ordinator', 'sitaram_1633880756.jpg', 'It\'s all about entertainment.', 'Qualifies with master degree in computer application. 5 years of teaching experience', 'kathmandu', '9846023837', 'Active', '2021-10-10 09:59:10', '2021-10-10 10:06:45'),
(4, 'Mekh Raj Poudel', 'Supervisor', 'mekh_1633881308.jpg', 'It\'s all aboout entertainment.', 'Qualifies with master degree in computer application. 5 years of teaching experience', 'Pokhara', '9866011425', 'Active', '2021-10-10 10:11:00', '2021-10-10 10:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `whychooseuses`
--

DROP TABLE IF EXISTS `whychooseuses`;
CREATE TABLE IF NOT EXISTS `whychooseuses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `heading` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whychooseuses`
--

INSERT INTO `whychooseuses` (`id`, `heading`, `text`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Best Teacher', 'Lorem ipsum dolor sit amet, consectetur.', 'Active', '2021-09-29 10:32:24', '2021-09-29 10:32:24'),
(2, 'Student', 'HI', 'Active', '2021-10-29 07:13:59', '2021-10-29 07:13:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
