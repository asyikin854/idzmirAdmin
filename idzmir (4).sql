-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 06:31 PM
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
-- Database: `idzmir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_infos`
--

CREATE TABLE `admin_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_infos`
--

INSERT INTO `admin_infos` (`id`, `username`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'cs1', 'cs@gmail.com', NULL, '$2y$12$Clwqz15IGQ4eq6qpQWs6E.2UdfF9fM53uFron/hPWPMt9.iwRqPZW', NULL, '2024-06-06 05:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `url_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `filename`, `path`, `title`, `content`, `url`, `url_text`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'sfsfsadfsafsa', 'dfasfsadfsfsafasf', NULL, NULL, '2024-06-29 10:47:08', '2024-06-29 10:47:08'),
(2, '1719686850_WhatsApp Image 2024-05-24 at 20.53.26.jpeg', 'announcements/1719686850_WhatsApp Image 2024-05-24 at 20.53.26.jpeg', 'Holiday', 'happy holiday for all', 'http://127.0.0.1:8000', 'login page', '2024-06-29 10:47:30', '2024-06-29 10:47:30'),
(3, '1719690018_snack1.jpg', 'announcements/1719690018_snack1.jpg', 'asdfasf', 'asdfasdfdsafadsf', 'http://127.0.0.1:8000', 'login page', '2024-06-29 11:40:18', '2024-06-29 11:40:18'),
(4, '1719983784_Rehabilitation Management System.pdf', 'announcements/1719983784_Rehabilitation Management System.pdf', 'Welcome', 'Hi welcome', NULL, NULL, '2024-07-02 21:16:25', '2024-07-02 21:16:25'),
(5, NULL, NULL, 'Visit our website', 'our new website', 'http://idzmirkidshub.com/', 'Website Link', '2024-07-02 21:18:25', '2024-07-02 21:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `child_infos`
--

CREATE TABLE `child_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `child_name` varchar(255) NOT NULL,
  `child_ic` varchar(255) NOT NULL,
  `child_age` varchar(255) NOT NULL,
  `child_dob` date NOT NULL,
  `child_passport` varchar(255) DEFAULT NULL,
  `child_nationality` varchar(255) NOT NULL,
  `child_race` varchar(255) NOT NULL,
  `child_bp` varchar(255) NOT NULL,
  `child_religion` varchar(255) NOT NULL,
  `child_sex` varchar(255) NOT NULL,
  `child_address` varchar(255) NOT NULL,
  `child_posscode` varchar(255) NOT NULL,
  `child_city` varchar(255) NOT NULL,
  `child_country` varchar(255) NOT NULL,
  `pediatricians` varchar(255) DEFAULT NULL,
  `recommend` varchar(255) DEFAULT NULL,
  `deadline` varchar(255) DEFAULT NULL,
  `diagnosis` varchar(255) DEFAULT NULL,
  `occ_therapy` varchar(255) DEFAULT NULL,
  `sp_therapy` varchar(255) DEFAULT NULL,
  `others` varchar(255) DEFAULT NULL,
  `house_income` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_infos`
--

INSERT INTO `child_infos` (`id`, `child_name`, `child_ic`, `child_age`, `child_dob`, `child_passport`, `child_nationality`, `child_race`, `child_bp`, `child_religion`, `child_sex`, `child_address`, `child_posscode`, `child_city`, `child_country`, `pediatricians`, `recommend`, `deadline`, `diagnosis`, `occ_therapy`, `sp_therapy`, `others`, `house_income`, `created_at`, `updated_at`, `package`) VALUES
(37, 'Aliff Irfan bin Muhaimin', '165151656415', '10', '2024-01-01', NULL, 'Malaysian', 'Malay', 'Johor Bahru', 'Islam', 'Male', 'no 11, Jalan Ubi, Taman Uda Utama', '81200', 'Johor Bahru', 'Malaysia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'less than RM 10000', '2024-06-14 06:07:04', '2024-06-14 06:36:55', 'Re-Asessment'),
(38, 'Haidi Bin Mahmoud', '201565269529', '4', '2024-01-01', NULL, 'Malaysian', 'Malay', 'Johor Bahru', 'Islam', 'Male', 'no 23, Jalan Sri Perling 3, Taman Perling', '81200', 'Johor Bahru', 'Malaysia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'less than RM 10000', '2024-06-26 02:27:04', '2024-06-26 02:27:53', 'Full Asessment'),
(39, 'Anggun Inarah', '202151556134', '4', '2024-07-23', NULL, 'Malaysian', 'Malay', 'johor bahru', 'Islam', 'Male', '20, level 20, Ataraxia, Forest City', '80000', 'Gelang Patah', 'Malaysia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'less than RM 10000', '2024-07-02 01:18:43', '2024-07-02 01:23:08', 'Re-Asessment'),
(40, 'Muhaimin', '059651855165', '5', '0001-01-25', NULL, 'Malaysian', 'Malay', 'Johor', 'Islam', 'Male', 'no. 21, Jalan Perwira, Taman Nusa Jaya,', '80000', 'Johor Bahru', 'Malaysia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'less than RM 10000', '2024-07-02 19:33:32', '2024-07-02 19:35:51', 'Full Asessment');

-- --------------------------------------------------------

--
-- Table structure for table `child_schedules`
--

CREATE TABLE `child_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `child_id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `therapist` varchar(255) DEFAULT NULL,
  `attendance` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` enum('approved','pending','disapproved','request') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_schedules`
--

INSERT INTO `child_schedules` (`id`, `child_id`, `session`, `day`, `time`, `price`, `therapist`, `attendance`, `remark`, `status`, `created_at`, `updated_at`, `date`) VALUES
(5, 37, '1', 'Monday', '9.00 a.m.', '800', 'Pn. Nazihah', 'present', 'asdfsadf', 'approved', '2024-06-14 08:39:27', '2024-06-25 10:04:23', '2024-06-19'),
(6, 37, '2', 'Sunday', '9.00 a.m.', '800', 'Pn. Khadijah', NULL, 'sick', 'approved', '2024-06-14 08:39:27', '2024-06-29 23:43:14', '2024-07-03'),
(9, 38, '1', 'Thursday', '12.00 p.m.', '700', 'En. Maimunah', NULL, NULL, 'approved', '2024-06-26 05:03:09', '2024-06-28 04:47:24', '2024-06-21'),
(13, 37, '3', 'Monday', '9.00 a.m.', '800', 'Pn. Nazihah', 'absent', NULL, 'approved', NULL, '2024-06-26 10:07:46', '2024-06-23'),
(15, 37, '5', 'Thursday', '12.00 p.m.', '800', 'Pn. Nazihah', 'present', NULL, 'approved', NULL, '2024-06-26 10:07:50', '2024-06-21'),
(17, 38, '2', 'Thursday', '12.00 p.m.', '700', 'Pn. Nazihah', NULL, NULL, 'approved', NULL, '2024-06-28 04:47:25', '2024-06-28'),
(18, 38, '3', 'Thursday', '12.00 p.m.', '700', 'En. Maimunah', NULL, NULL, 'approved', NULL, '2024-06-28 04:47:25', '2024-07-12'),
(19, 38, '4', 'Thursday', '12.00 p.m.', '700', 'Pn. Nazihah', 'present', NULL, 'approved', NULL, '2024-07-02 10:55:22', '2024-07-19'),
(20, 39, '1', 'Tuesday', '12.00 p.m.', '700', 'Pn. Nazihah', 'present', NULL, 'approved', '2024-07-02 01:23:30', '2024-07-02 10:55:47', '2024-07-03'),
(21, 39, '2', 'Thursday', '9.00 a.m.', '700', 'Pn. Nazihah', NULL, NULL, 'approved', '2024-07-02 01:23:30', '2024-07-02 10:31:30', '2024-07-12'),
(22, 39, '3', 'Tuesday', '12.00 p.m.', '700', 'Pn. Nazihah', 'present', NULL, 'approved', '2024-07-02 01:23:30', '2024-07-02 10:56:02', '2024-07-17'),
(23, 39, '4', 'Thursday', '9.00 a.m.', '700', 'Pn. Nazihah', NULL, NULL, 'approved', '2024-07-02 01:23:30', '2024-07-02 10:31:30', '2024-07-26'),
(24, 39, '5', 'Tuesday', '12.00 p.m.', '700', 'Pn. Nazihah', '', NULL, 'approved', '2024-07-02 01:23:30', '2024-07-02 10:31:30', '2024-07-31'),
(25, 39, '6', 'Thursday', '9.00 a.m.', '700', 'Pn. Nazihah', NULL, NULL, 'approved', '2024-07-02 01:23:30', '2024-07-02 10:31:30', '2024-08-09'),
(26, 39, '7', 'Tuesday', '12.00 p.m.', '700', 'Pn. Nazihah', 'present', NULL, 'approved', '2024-07-02 01:23:30', '2024-08-25 08:51:08', '2024-08-14'),
(27, 39, '8', 'Thursday', '9.00 a.m.', '700', 'Pn. Nazihah', NULL, NULL, 'approved', '2024-07-02 01:23:30', '2024-07-02 10:31:30', '2024-08-23'),
(28, 40, '1', 'Wednesday', '3.00 p.m.', '700', 'Pn. Khadijah', NULL, NULL, 'approved', '2024-07-02 19:52:17', '2024-07-02 20:02:19', '2024-07-05'),
(29, 40, '2', 'Wednesday', '12.00 p.m.', '700', 'Pn. Khadijah', NULL, NULL, 'approved', '2024-07-02 19:52:17', '2024-07-02 20:05:10', '2024-07-12'),
(30, 40, '3', 'Wednesday', '12.00 p.m.', '700', 'Pn. Nazihah', 'present', NULL, 'approved', '2024-07-02 19:52:17', '2024-07-02 20:18:47', '2024-07-18'),
(31, 40, '4', 'Wednesday', '12.00 p.m.', '700', 'Pn. Nazihah', NULL, NULL, 'approved', '2024-07-02 19:52:17', '2024-07-02 19:57:39', '2024-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `cs_infos`
--

CREATE TABLE `cs_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cs_infos`
--

INSERT INTO `cs_infos` (`id`, `username`, `email`, `email_verified_at`, `password`, `name`, `created_at`, `updated_at`) VALUES
(1, 'firstcs', 'first@gmail.com', NULL, '$2y$12$d7Cu0aus8ifx/fSvegFeUuRHkESS.K/A7w7FH4cynKw7d4QqBD.2u', 'Aiman bin Tino', NULL, '2024-06-08 00:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `father_infos`
--

CREATE TABLE `father_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `child_id` bigint(20) UNSIGNED NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_phone` varchar(255) NOT NULL,
  `father_ic` varchar(255) NOT NULL,
  `father_race` varchar(255) NOT NULL,
  `father_occ` varchar(255) NOT NULL,
  `father_email` varchar(255) NOT NULL,
  `father_address` varchar(255) NOT NULL,
  `father_posscode` varchar(255) NOT NULL,
  `father_city` varchar(255) NOT NULL,
  `father_work_address` varchar(255) NOT NULL,
  `father_work_posscode` varchar(255) NOT NULL,
  `father_work_city` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `father_infos`
--

INSERT INTO `father_infos` (`id`, `child_id`, `father_name`, `father_phone`, `father_ic`, `father_race`, `father_occ`, `father_email`, `father_address`, `father_posscode`, `father_city`, `father_work_address`, `father_work_posscode`, `father_work_city`, `created_at`, `updated_at`) VALUES
(1, 37, 'Muhaimin bin Muzaffar', '01756465156', '985151561561', 'Malay', 'Police Officer', 'muhaimin@gmail.com', 'no 11, Jalan Ubi, Taman Uda Utama', '81200', 'Johor Bahru', 'no 123, Jalan Ubi, Taman Uda Utama', '81200', 'Johor Bahru', '2024-06-14 06:07:04', '2024-06-14 06:07:04'),
(2, 38, 'Mahmoud bin Razak', '01465266156', '921525656151', 'Malay', 'Engineer', 'mahmoud@gmail.com', 'no 23, Jalan Sri Perling 3, Taman Perling', '81200', 'Johor Bahru', 'no 23, Jalan Sri Perling 3, Taman Perling', '81200', 'Johor Bahru', '2024-06-26 02:27:04', '2024-06-26 02:27:04'),
(3, 39, 'Abdullah', '0175466845', '546545648654', 'Malay', 'Clerk', 'abdullah@gmail.com', '20, level 20, Ataraxia, Forest City', '80000', 'Gelang Patah', 'Larkin', '81300', 'Johor Bahru', '2024-07-02 01:18:43', '2024-07-02 01:18:43'),
(4, 40, 'Muzaffar', '017561561656', '819851215615', 'Malay', 'Engineer', 'muzaffar@gmail.com', 'no. 21, Jalan Perwira, Taman Nusa Jaya,', '80000', 'Johor Bahru', 'no. 21, Jalan Perwira, Taman Nusa Jaya,', '80000', 'Johor Bahru', '2024-07-02 19:33:32', '2024-07-02 19:33:32');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_13_133528_create_child_infos', 1),
(5, '2024_05_13_135520_create_father_infos', 1),
(6, '2024_05_13_135535_create_mother_infos', 1),
(7, '2024_05_13_142331_create_parents_permission', 1),
(8, '2024_06_01_172526_create_parent_accounts', 2),
(9, '2024_06_02_170124_create_admin_infos', 3),
(10, '2024_06_02_170154_create_therapist_infos', 3),
(11, '2024_06_02_170203_create_cs_infos', 3),
(12, '2024_06_08_183104_create_packages', 4),
(13, '2024_06_08_190643_add_new_column_to_child_infos_table', 5),
(14, '2024_06_12_173542_create_child_schedule', 6),
(15, '2024_06_14_154649_add_new_column_to_child_schedules_table', 7),
(16, '2024_06_16_154852_add_new_column_to_child_schedules_table', 8),
(17, '2024_06_17_185307_create_announcements', 9),
(20, '2024_06_22_140022_add_new_column_to_session_reports_2', 12),
(25, '2024_06_24_124032_add_new_column_to_child_schedules', 14),
(26, '2024_06_21_154957_create_session_reports', 15),
(29, '2024_06_26_092457_add_new_column_to_packages', 16),
(30, '2024_06_26_191747_add_new_column_to_child_schedules_2', 17);

-- --------------------------------------------------------

--
-- Table structure for table `mother_infos`
--

CREATE TABLE `mother_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `child_id` bigint(20) UNSIGNED NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_phone` varchar(255) NOT NULL,
  `mother_ic` varchar(255) NOT NULL,
  `mother_race` varchar(255) NOT NULL,
  `mother_occ` varchar(255) NOT NULL,
  `mother_email` varchar(255) NOT NULL,
  `mother_address` varchar(255) NOT NULL,
  `mother_posscode` varchar(255) NOT NULL,
  `mother_city` varchar(255) NOT NULL,
  `mother_work_address` varchar(255) NOT NULL,
  `mother_work_posscode` varchar(255) NOT NULL,
  `mother_work_city` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mother_infos`
--

INSERT INTO `mother_infos` (`id`, `child_id`, `mother_name`, `mother_phone`, `mother_ic`, `mother_race`, `mother_occ`, `mother_email`, `mother_address`, `mother_posscode`, `mother_city`, `mother_work_address`, `mother_work_posscode`, `mother_work_city`, `created_at`, `updated_at`) VALUES
(1, 37, 'Aisyah binti Rahmat', '01815156151', '995615615615', 'Malay', 'Clerk', 'aisyah@gmail.com', 'no 11, Jalan Ubi, Taman Uda Utama', '81200', 'Johor Bahru', '41,. Jalan Mentadak, Taman Perling', '81200', 'Johor Bahru', '2024-06-14 06:07:04', '2024-06-14 06:07:04'),
(2, 38, 'Atiqah binti Suhaimi', '0186015612165', '904515641564', 'Malay', 'Clerk', 'atiqah@gmail.com', 'no 23, Jalan Sri Perling 3, Taman Perling', '81200', 'Johor Bahru', 'no 23, Jalan Sri Perling 3, Taman Perling', '81200', 'Johor Bahru', '2024-06-26 02:27:04', '2024-06-26 02:27:04'),
(3, 39, 'Nurasyikin', '01452347541', '846486548654', 'Malay', 'Programmer', 'asyikin@esrmy.com', '20, level 20, Ataraxia, Forest City', '80000', 'Gelang Patah', 'sfsafasifafiisoooin', '81200', 'Johor Bahru', '2024-07-02 01:18:43', '2024-07-02 01:18:43'),
(4, 40, 'Sakinah', '01651561655', '989415165165', 'Malay', 'Clerk', 'sakinah@gmail.com', 'no. 21, Jalan Perwira, Taman Nusa Jaya,', '80000', 'Johor Bahru', 'no. 21, Jalan Perwira, Taman Nusa Jaya,', '80000', 'Johor Bahru', '2024-07-02 19:33:32', '2024-07-02 19:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quota` varchar(255) NOT NULL,
  `package_step` varchar(255) DEFAULT NULL,
  `package_long_desc1` varchar(255) DEFAULT NULL,
  `package_long_desc2` varchar(255) DEFAULT NULL,
  `package_long_desc3` varchar(255) DEFAULT NULL,
  `package_short_desc1` varchar(255) DEFAULT NULL,
  `package_short_desc2` varchar(255) DEFAULT NULL,
  `package_short_desc3` varchar(255) DEFAULT NULL,
  `package_short_desc4` varchar(255) DEFAULT NULL,
  `package_short_desc5` varchar(255) DEFAULT NULL,
  `session_quantity` varchar(255) NOT NULL,
  `package_normal_price` varchar(255) NOT NULL,
  `package_wkday_price` varchar(255) NOT NULL,
  `package_wkend_price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `type`, `quota`, `package_step`, `package_long_desc1`, `package_long_desc2`, `package_long_desc3`, `package_short_desc1`, `package_short_desc2`, `package_short_desc3`, `package_short_desc4`, `package_short_desc5`, `session_quantity`, `package_normal_price`, `package_wkday_price`, `package_wkend_price`, `created_at`, `updated_at`) VALUES
(2, 'Full Asessment', 'grouping', '5', 'Step 2', 'Asessment is a guideline to detect child\'s area of difficulty using standardize asessment form. Therapist will prioritize child\'s difficulty and Plan Intervention according to child\'s needs.', 'The checklist is based on developmental \'norms\' and leads to the development of Progress Report.', NULL, '3 Session Asessment', '1 Full Development Report', 'Consultation Session', 'HOME - PROGRAM', NULL, '4', '1600', '700', '800', NULL, NULL),
(3, 'Intervention with Consistency', 'individual', '1', 'Step 3', 'Based on the performance analysis result, the therapist choose suitable intervention approaches or plan adaptive strategies in order to compensate the child\'s ineffective actions.', 'Right treatment implementation to deliver good and fast result to the patient. Evidence-based practice.', NULL, 'Age: 0-12 Years Old', 'Duration: 1 hour', 'Session: 4 Session', 'Reporting: Progress Report every 6 months', 'Area of Intervention\r\n- Fine Motor Development \r\n- Grass Motor Development \r\n- Sensosry Processing\r\n- Speech & Language Development\r\n- Personal Social Development', '4', '1200', '500', '600', NULL, NULL),
(4, 'Re-Asessment', 'individual', '1', 'Step 4', 'Re-asessment is a guideline to detect child\'s area of difficulty using standardize asessment form. Therapist will prioritize child\'s difficulty and Plan Intervention according to child\'s needs.', 'The checklist is based on developmental \'norms\' and leads to the development of Progress Report.\r\n', NULL, '3 Session Asessment', '1 Full Development Report', 'Consultation Session', 'HOME - PROGRAM', NULL, '8', '1600', '700', '800', NULL, NULL),
(6, 'Ready To School Program ', 'grouping', '10', '4', NULL, NULL, NULL, 'Age: 5 - 12 Years Old', 'Duration: 2 Hour 30 Minute/Session, 10 Hours/Month', '1 Session/Week, 4 Session/Month', 'Reporting: Progress Summary Report Every 6 Month', 'Schedule:\r\nMorning: 09.00 a.m. - 11.30 a.m.\r\nEvening: 02.00 p.m. - 04.30 p.m.', '4', '2000', '1000', '1200', NULL, NULL),
(7, 'Ready To School Program', 'grouping', '10', '8', NULL, NULL, NULL, 'Age: 5 - 12 Years Old', 'Duration: \r\n2 Hour 30 Minute/Session,\r\n20 Hours/Month', 'Session:\r\n2 Session/Week,\r\n8 Session/Month', 'Reporting:\r\nProgress Summary Report Every 6 month', 'Schedule: Morning: 09.00 a.m. - 11.30 a.m., Evening: 02.00 p.m. - 04.30 p.m.', '8', '4000', '2000', '2200', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parents_permission`
--

CREATE TABLE `parents_permission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `child_id` bigint(20) UNSIGNED NOT NULL,
  `parent_sign` varchar(255) NOT NULL,
  `sign_name` varchar(50) NOT NULL,
  `sign_date` date NOT NULL,
  `sign_time` time NOT NULL,
  `agree_disagree` enum('agree','disagree') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parents_permission`
--

INSERT INTO `parents_permission` (`id`, `child_id`, `parent_sign`, `sign_name`, `sign_date`, `sign_time`, `agree_disagree`, `created_at`, `updated_at`) VALUES
(1, 37, 'Muhaimin', 'Muhaimin bin Muzaffar', '2024-06-14', '22:01:00', 'agree', '2024-06-14 06:07:04', '2024-06-14 06:07:04'),
(2, 38, 'Mahmoud', 'Mahmoud binti Razak', '2024-06-26', '18:21:00', 'agree', '2024-06-26 02:27:04', '2024-06-26 02:27:04'),
(3, 39, 'Nurasyikin', 'Nurasyikin', '2024-07-02', '17:13:00', 'agree', '2024-07-02 01:18:43', '2024-07-02 01:18:43'),
(4, 40, 'Sakinah', 'Sakinah', '2024-07-03', '11:29:00', 'agree', '2024-07-02 19:33:32', '2024-07-02 19:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `parent_accounts`
--

CREATE TABLE `parent_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `child_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_accounts`
--

INSERT INTO `parent_accounts` (`id`, `child_id`, `username`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 37, 'Muhaimin123', 'muhaimin@gmail.com', NULL, '$2y$12$AgO2jOcIbSB6ZLGr2/thg.TQC0fLQKr5Onw6pEcbrTXD5T9WXV3.u', '2024-06-14 06:07:04', '2024-06-14 06:07:04'),
(2, 38, 'mahmoud', 'mahmoud@gmail.com', NULL, '$2y$12$qNfbdCL8YMkrzbIIOmRiueFsfVX2Y.3GrRXE.D.dT5RqCI57jUSNq', '2024-06-26 02:27:04', '2024-06-26 02:27:04'),
(3, 39, 'Nurasyikin', 'asyikin@esrmy.com', NULL, '$2y$12$2uL/ykY/ZE8GxQ1/9jJkVuR8UX3NViKT83fc/ntObkz.6h1jEOdci', '2024-07-02 01:18:44', '2024-07-02 01:18:44'),
(4, 40, 'Sakinah', 'sakinah@gmail.com', NULL, '$2y$12$5scjq6JI4I9VwA.Wl2fEauwhSdCe.PJB78MN3XVuOmIHahQ68NlZO', '2024-07-02 19:33:32', '2024-07-02 19:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0ALML37dWzkjHgZSCnfQwq6Go61IIp1A4b0eejeK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTTBnVlkyaXREWTBYZjJiOTl6WENNUHl0aVl1MU81aDd6YXkzcXFjOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MzoibG9naW5fcGFyZW50XzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3Byb2ZpbGUtcGFyZW50Ijt9czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo1MToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZC9kYXNoYm9hcmQtdGhlcmFwaXN0Ijt9fQ==', 1724756817),
('1h72KbjrALxrecpjEVShMkaF29FMYlVbjj7PWQ0s', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidk1EUWxIeUlHQ2Zub3JnaXUzZFBkOEJqV2ZxQ3BCY0Y3VWJyWm51MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3Rlci1wYXJlbnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1725441896),
('69jtLOalOR7HaIeMFrCPlTvXXPkCXUg4ogl8Y7fv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaXNRMzlUbnFOaHJSVkRkbGZoNnRGYVBLcE9sMUNUbnlqVmdMNVdEYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlLXBhcmVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1725114339),
('ATcriFv1RrIaARO8fbmLaKsV4nQwMiyyYh4AmtAv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZm1MNFQ4QkQzYndGZTRNa1QxRGtzQXpyaWtIOWh4ckltOUpnQ21tSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZXNzaW9uRGV0YWlscy10aGVyYXBpc3QvMjAyNC0wNy0zMS8xMi4wMCUyMHAubS4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU2OiJsb2dpbl90aGVyYXBpc3RfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1724589052),
('KJZX8TlWAqWW9kE7xINrgqQ6P69QJS7EYGA3azRT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibjQ4OGRlWWN6ZzN1dTRVT210QXFCNjNrSFBFSk12RWxxUWthTkN3UiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3Rlci1wYXJlbnQiO319', 1725888588),
('rlgNJH0dkhiqCacReomHUWEpS7nuu5YI90ctnMs4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMXpwem1QZngzekU0aGpjSmZxOVBMNzlqMGhRdDI5TTlIb0ZqRjV5aSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90aGVyYXBpc3Qtc2Vzc2lvbiI7fXM6NTY6ImxvZ2luX3RoZXJhcGlzdF81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1724606980),
('XDPAeCMDz9WUJxBW7bsXTJtP26Qiqmw7AA1o5jIB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2ZsdjdVbXlqbjF5VTB2ZFUyYTVKWFFIaFRoUFk3cDNaRzZlYXNLZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3Rlci1wYXJlbnQiO319', 1725123531),
('zB20nps5tEJ7vCaGpMg8QmhqmJIOcAWor8AEJH0o', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZGZyOXZJanRkNmx1ckM5dk5ETnBIMmt4TXRibVpQSm1pTzdodlRpUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3Rlci1wYXJlbnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1725606164);

-- --------------------------------------------------------

--
-- Table structure for table `session_reports`
--

CREATE TABLE `session_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schedules_id` bigint(20) UNSIGNED NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_ic` varchar(255) NOT NULL,
  `session_attended` varchar(255) NOT NULL,
  `treatment_provided` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `ques1_1` tinyint(1) DEFAULT NULL,
  `ques1_2` tinyint(1) DEFAULT NULL,
  `ques1_3` tinyint(1) DEFAULT NULL,
  `ques1_4` tinyint(1) DEFAULT NULL,
  `ques1_5` tinyint(1) DEFAULT NULL,
  `ques1_6` tinyint(1) DEFAULT NULL,
  `ques1_7` tinyint(1) DEFAULT NULL,
  `ques1_8` tinyint(1) DEFAULT NULL,
  `ques2_1` tinyint(1) DEFAULT NULL,
  `ques2_2` tinyint(1) DEFAULT NULL,
  `ques2_3` tinyint(1) DEFAULT NULL,
  `ques2_4` tinyint(1) DEFAULT NULL,
  `ques2_5` tinyint(1) DEFAULT NULL,
  `ques2_6` tinyint(1) DEFAULT NULL,
  `ques2_7a` tinyint(1) DEFAULT NULL,
  `ques2_7b` tinyint(1) DEFAULT NULL,
  `ques2_7c` tinyint(1) DEFAULT NULL,
  `ques2_7d` tinyint(1) DEFAULT NULL,
  `ques2_7e` tinyint(1) DEFAULT NULL,
  `ques2_7f` tinyint(1) DEFAULT NULL,
  `ques2_7g` tinyint(1) DEFAULT NULL,
  `ques2_8a` tinyint(1) DEFAULT NULL,
  `ques2_8b` tinyint(1) DEFAULT NULL,
  `ques2_8c` tinyint(1) DEFAULT NULL,
  `ques2_8d` tinyint(1) DEFAULT NULL,
  `ques2_8e` tinyint(1) DEFAULT NULL,
  `ques2_8f` tinyint(1) DEFAULT NULL,
  `ques2_8g` tinyint(1) DEFAULT NULL,
  `ques2_8h` tinyint(1) DEFAULT NULL,
  `ques2_8i` tinyint(1) DEFAULT NULL,
  `ques3_1` tinyint(1) DEFAULT NULL,
  `ques3_2` tinyint(1) DEFAULT NULL,
  `ques3_3` tinyint(1) DEFAULT NULL,
  `ques3_4` tinyint(1) DEFAULT NULL,
  `ques3_5` tinyint(1) DEFAULT NULL,
  `ques3_6` tinyint(1) DEFAULT NULL,
  `ques3_7` tinyint(1) DEFAULT NULL,
  `ques4_1a` tinyint(1) DEFAULT NULL,
  `ques4_1b` tinyint(1) DEFAULT NULL,
  `ques4_1c` tinyint(1) DEFAULT NULL,
  `ques4_1d` tinyint(1) DEFAULT NULL,
  `ques4_2` tinyint(1) DEFAULT NULL,
  `ques4_3` tinyint(1) DEFAULT NULL,
  `ques4_4` varchar(255) DEFAULT NULL,
  `ques4_5` varchar(255) DEFAULT NULL,
  `ques4_6` tinyint(1) DEFAULT NULL,
  `ques5_1` tinyint(1) DEFAULT NULL,
  `ques5_2` varchar(255) DEFAULT NULL,
  `ques5_3` tinyint(1) DEFAULT NULL,
  `ques5_4` tinyint(1) DEFAULT NULL,
  `ques5_5` tinyint(1) DEFAULT NULL,
  `ques5_6` tinyint(1) DEFAULT NULL,
  `ques5_7a` tinyint(1) DEFAULT NULL,
  `ques5_7b` tinyint(1) DEFAULT NULL,
  `ques5_7c` tinyint(1) DEFAULT NULL,
  `ques5_8a` tinyint(1) DEFAULT NULL,
  `ques5_8b` tinyint(1) DEFAULT NULL,
  `ques5_8c` tinyint(1) DEFAULT NULL,
  `ques6_1a` tinyint(1) DEFAULT NULL,
  `ques6_1b` tinyint(1) DEFAULT NULL,
  `ques6_1c` tinyint(1) DEFAULT NULL,
  `ques6_1d` tinyint(1) DEFAULT NULL,
  `ques6_1e` tinyint(1) DEFAULT NULL,
  `ques6_1f` tinyint(1) DEFAULT NULL,
  `ques6_1g` tinyint(1) DEFAULT NULL,
  `ques7_1a` tinyint(1) DEFAULT NULL,
  `ques7_1b` varchar(255) DEFAULT NULL,
  `ques7_1c` varchar(255) DEFAULT NULL,
  `ques7_2a` varchar(255) DEFAULT NULL,
  `ques7_2b` varchar(255) DEFAULT NULL,
  `ques7_3` tinyint(1) DEFAULT NULL,
  `ques7_4` tinyint(1) DEFAULT NULL,
  `ques7_5` varchar(255) DEFAULT NULL,
  `ques7_6` tinyint(1) DEFAULT NULL,
  `ques7_7` tinyint(1) DEFAULT NULL,
  `ques7_8` tinyint(1) DEFAULT NULL,
  `ques7_9` tinyint(1) DEFAULT NULL,
  `ques7_10` tinyint(1) DEFAULT NULL,
  `ques8_0` enum('Good','Average','Fair','Poor','Unable to follow') DEFAULT NULL,
  `remark1` varchar(255) DEFAULT NULL,
  `remark2` varchar(255) DEFAULT NULL,
  `remark3` varchar(255) DEFAULT NULL,
  `remark4` varchar(255) DEFAULT NULL,
  `remark5` varchar(255) DEFAULT NULL,
  `remark6` varchar(255) DEFAULT NULL,
  `remark7` varchar(255) DEFAULT NULL,
  `analysis` varchar(255) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  `therapist` varchar(255) NOT NULL,
  `status` enum('pending','approved') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `session_reports`
--

INSERT INTO `session_reports` (`id`, `schedules_id`, `std_name`, `std_ic`, `session_attended`, `treatment_provided`, `date`, `ques1_1`, `ques1_2`, `ques1_3`, `ques1_4`, `ques1_5`, `ques1_6`, `ques1_7`, `ques1_8`, `ques2_1`, `ques2_2`, `ques2_3`, `ques2_4`, `ques2_5`, `ques2_6`, `ques2_7a`, `ques2_7b`, `ques2_7c`, `ques2_7d`, `ques2_7e`, `ques2_7f`, `ques2_7g`, `ques2_8a`, `ques2_8b`, `ques2_8c`, `ques2_8d`, `ques2_8e`, `ques2_8f`, `ques2_8g`, `ques2_8h`, `ques2_8i`, `ques3_1`, `ques3_2`, `ques3_3`, `ques3_4`, `ques3_5`, `ques3_6`, `ques3_7`, `ques4_1a`, `ques4_1b`, `ques4_1c`, `ques4_1d`, `ques4_2`, `ques4_3`, `ques4_4`, `ques4_5`, `ques4_6`, `ques5_1`, `ques5_2`, `ques5_3`, `ques5_4`, `ques5_5`, `ques5_6`, `ques5_7a`, `ques5_7b`, `ques5_7c`, `ques5_8a`, `ques5_8b`, `ques5_8c`, `ques6_1a`, `ques6_1b`, `ques6_1c`, `ques6_1d`, `ques6_1e`, `ques6_1f`, `ques6_1g`, `ques7_1a`, `ques7_1b`, `ques7_1c`, `ques7_2a`, `ques7_2b`, `ques7_3`, `ques7_4`, `ques7_5`, `ques7_6`, `ques7_7`, `ques7_8`, `ques7_9`, `ques7_10`, `ques8_0`, `remark1`, `remark2`, `remark3`, `remark4`, `remark5`, `remark6`, `remark7`, `analysis`, `plan`, `therapist`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'Aliff Irfan bin Muhaimin', '165151656415', '1', 'Individual Therapy', '2024-06-26', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 1, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 'Fair', 'Fair', 0, 1, 'Most of the time', 1, 1, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1, 1, 'mod', 'min', 'Good', 'Fair', 0, 0, 'slurred', 1, 1, NULL, 1, 1, 'Average', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'asdsadasdas', NULL, 'Pn. Nazihah', 'approved', '2024-06-25 09:58:19', '2024-06-29 10:05:39'),
(2, 20, 'Anggun Inarah', '202151556134', '1', 'Individual Therapy', '2024-07-03', 1, 0, 1, 0, NULL, 1, 0, 0, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 0, 0, 1, 1, 1, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 1, 0, 1, 1, 0, 1, 0, NULL, 0, 0, 'Fair', 'Fair', 0, NULL, 'Most of the time', 1, 0, 0, 0, 1, NULL, 1, 1, 0, NULL, 1, 0, 1, 0, 1, 0, 0, 0, 'min', 'mod', 'Fair', 'Good', 1, 1, 'clear', 1, 1, 0, NULL, 1, 'Good', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'asfasf', 'dsfasdfas sdfasdf', 'Pn. Nazihah', 'approved', '2024-07-02 11:05:31', '2024-07-02 11:12:19'),
(3, 30, 'Muhaimin', '059651855165', '1', 'Individual Therapy', '2024-07-03', 1, 0, 1, NULL, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, 0, 1, 1, 1, 1, 1, 'Fair', 'Good', 1, 0, 'Most of the time', 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 'mod', 'mod', 'Fair', 'Fair', 1, 1, 'clear', 0, 1, 1, 0, 1, 'Good', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', NULL, NULL, 'Pn. Nazihah', 'approved', '2024-07-02 20:20:06', '2024-07-02 20:21:07'),
(4, 19, 'Haidi Bin Mahmoud', '201565269529', '5', 'Individual Therapy', '2024-08-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Good', 'Good', NULL, NULL, 'All the time', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'min', 'min', 'Good', 'Good', NULL, NULL, 'clear', NULL, NULL, NULL, NULL, NULL, 'Good', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', 'Positive progress slowly increase', NULL, NULL, 'Pn. Nazihah', 'pending', '2024-08-23 05:45:29', '2024-08-23 05:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `therapist_infos`
--

CREATE TABLE `therapist_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `therapist_infos`
--

INSERT INTO `therapist_infos` (`id`, `username`, `email`, `email_verified_at`, `password`, `name`, `created_at`, `updated_at`) VALUES
(1, 'therapist1', 'therapist@gmail.com', NULL, '$2y$12$9SeuwxGBmDAG5bF07eblJOx9xkCjSxbBWs0lPItekzBw2Rs3x.Ti2', 'Pn. Nazihah', NULL, '2024-06-26 09:07:23'),
(2, 'therapist2', 'therapist2@gmail.com', NULL, '$2y$12$O8IYSJDIllLOTofyy/8bseJNGgN3kROOiutsQfm7EUcFfM.D.soxu', 'En. Maimunah', NULL, '2024-06-26 09:07:24'),
(3, 'therapist3', 'therapist3@gmail.com', NULL, '$2y$12$0THJi5kqosAAAZ4yhdcYCOMPkdyyCb32VaSIAWR7cJwS7o/lEYqhO', 'Pn. Khadijah', NULL, '2024-06-26 09:07:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_infos`
--
ALTER TABLE `admin_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_infos_email_unique` (`email`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `child_infos`
--
ALTER TABLE `child_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_schedules`
--
ALTER TABLE `child_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_schedules_child_id_foreign` (`child_id`);

--
-- Indexes for table `cs_infos`
--
ALTER TABLE `cs_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cs_infos_email_unique` (`email`);

--
-- Indexes for table `father_infos`
--
ALTER TABLE `father_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `father_infos_child_id_foreign` (`child_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mother_infos`
--
ALTER TABLE `mother_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mother_infos_child_id_foreign` (`child_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents_permission`
--
ALTER TABLE `parents_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parents_permission_child_id_foreign` (`child_id`);

--
-- Indexes for table `parent_accounts`
--
ALTER TABLE `parent_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parent_accounts_email_unique` (`email`),
  ADD KEY `parent_accounts_child_id_foreign` (`child_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `session_reports`
--
ALTER TABLE `session_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_reports_schedules_id_foreign` (`schedules_id`);

--
-- Indexes for table `therapist_infos`
--
ALTER TABLE `therapist_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `therapist_infos_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_infos`
--
ALTER TABLE `admin_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `child_infos`
--
ALTER TABLE `child_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `child_schedules`
--
ALTER TABLE `child_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `cs_infos`
--
ALTER TABLE `cs_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `father_infos`
--
ALTER TABLE `father_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `mother_infos`
--
ALTER TABLE `mother_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parents_permission`
--
ALTER TABLE `parents_permission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parent_accounts`
--
ALTER TABLE `parent_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `session_reports`
--
ALTER TABLE `session_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `therapist_infos`
--
ALTER TABLE `therapist_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child_schedules`
--
ALTER TABLE `child_schedules`
  ADD CONSTRAINT `child_schedules_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `child_infos` (`id`);

--
-- Constraints for table `father_infos`
--
ALTER TABLE `father_infos`
  ADD CONSTRAINT `father_infos_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `child_infos` (`id`);

--
-- Constraints for table `mother_infos`
--
ALTER TABLE `mother_infos`
  ADD CONSTRAINT `mother_infos_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `child_infos` (`id`);

--
-- Constraints for table `parents_permission`
--
ALTER TABLE `parents_permission`
  ADD CONSTRAINT `parents_permission_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `child_infos` (`id`);

--
-- Constraints for table `parent_accounts`
--
ALTER TABLE `parent_accounts`
  ADD CONSTRAINT `parent_accounts_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `child_infos` (`id`);

--
-- Constraints for table `session_reports`
--
ALTER TABLE `session_reports`
  ADD CONSTRAINT `session_reports_schedules_id_foreign` FOREIGN KEY (`schedules_id`) REFERENCES `child_schedules` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
