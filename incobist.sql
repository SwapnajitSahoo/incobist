-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: May 22, 2026 at 09:36 AM
-- Server version: 8.0.41
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incobist`
--

-- --------------------------------------------------------

--
-- Table structure for table `banking_industries`
--

CREATE TABLE `banking_industries` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lending_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lending_desc` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
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
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `positions` int NOT NULL DEFAULT '1',
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `posted_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `category`, `location`, `type`, `positions`, `description`, `status`, `posted_at`, `created_at`, `updated_at`) VALUES
(1, 'Laravel Developers', 'It', 'Bbsr', 'Development', 3, 'Assist in the creation of best practices for future development and participate in all facets of development, including design, planning, development, and deployment.To deliver a complete system or application, coordinate with all business lines. The architectural team will assist you in designing and architecting a mobile domain for iOS and Android. Rapid prototyping of proof-of-concept features and applications according to specifications. Create and manage new mobile application development features. To come up with the most inventive ideas, combine your technical expertise with your creative imagination. Frequent reviews of the code. The Financial Systems team in the FinTech business unit provides technical expertise to the finance department and is responsible for supporting and innovating SAP ERP/S4HANA, SAP BI, Native HANA solutions, and many other connected external systems like Ivalua, Conga or Blackline.  We want to change the way people work with enterprise systems, by building an application platform that supports simplification of business processes and empowers the finance community with better integrations and financial insights.', 1, '2026-04-25', '2026-04-25 16:12:38', '2026-05-12 17:09:03'),
(2, 'React Development', 'Software', 'Kolkata', 'Development', 12, 'Assist in the creation of best practices for future development and participate in all facets of development, including design, planning, development, and deployment.To deliver a complete system or application, coordinate with all business lines. The architectural team will assist you in designing and architecting a mobile domain for iOS and Android. Rapid prototyping of proof-of-concept features and applications according to specifications. Create and manage new mobile application development features. To come up with the most inventive ideas, combine your technical expertise with your creative imagination. Frequent reviews of the code. The Financial Systems team in the FinTech business unit provides technical expertise to the finance department and is responsible for supporting and innovating SAP ERP/S4HANA, SAP BI, Native HANA solutions, and many other connected external systems like Ivalua, Conga or Blackline.  We want to change the way people work with enterprise systems, by building an application platform that supports simplification of business processes and empowers the finance community with better integrations and financial insights.', 1, '2026-04-25', '2026-04-25 16:13:26', '2026-05-12 17:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `created_at`, `updated_at`) VALUES
(2, 'Odette Cash', 'loqymova@mailinator.com', '+1 (213) 296-7171', '2026-03-05 14:45:17', '2026-03-05 14:45:17'),
(3, 'Odette Cash', 'loqymova@mailinator.com', '+1 (213) 296-7171', '2026-03-05 14:45:22', '2026-03-05 14:45:22'),
(4, 'Cruz Reid', 'zokacufa@mailinator.com', '+1 (223) 445-4732', '2026-03-05 14:49:22', '2026-03-05 14:49:22'),
(5, 'Cruz Reid', 'zokacufa@mailinator.com', '+1 (223) 445-4732', '2026-03-05 14:49:26', '2026-03-05 14:49:26'),
(6, 'Hadassah Wells', 'tybytohal@mailinator.com', '+1 (564) 877-5649', '2026-03-05 14:58:03', '2026-03-05 14:58:03'),
(7, 'Hadassah Wells', 'tybytohal@mailinator.com', '+1 (564) 877-5649', '2026-03-05 14:58:03', '2026-03-05 14:58:03'),
(8, 'Nerea Hobbs', 'lowiki@mailinator.com', '+1 (935) 545-2635', '2026-03-05 15:01:11', '2026-03-05 15:01:11'),
(9, 'Nerea Hobbs', 'lowiki@mailinator.com', '+1 (935) 545-2635', '2026-03-05 15:01:12', '2026-03-05 15:01:12'),
(10, 'Winifred Combs', 'hifebo@mailinator.com', '+1 (337) 351-2641', '2026-03-05 20:17:40', '2026-03-05 20:17:40'),
(11, 'Winifred Combs', 'hifebo@mailinator.com', '+1 (337) 351-2641', '2026-03-05 20:17:41', '2026-03-05 20:17:41'),
(12, 'swap', 'swap@gmail.com', '08455033896', '2026-03-08 07:39:13', '2026-03-08 07:39:13'),
(13, 'swap', 'swap@gmail.com', '08455033896', '2026-03-08 07:39:13', '2026-03-08 07:39:13'),
(14, 'Swapnajit sahoo', 'aa@gmail.com', '08455033896', '2026-03-18 07:39:05', '2026-03-18 07:39:05'),
(15, 'Swapnajit sahoo', 'aa@gmail.com', '08455033896', '2026-03-18 07:39:05', '2026-03-18 07:39:05'),
(16, 'Swapnajit sahoo', 'mikusahoo60@gmail.com', '08455033896', '2026-03-18 07:39:59', '2026-03-18 07:39:59'),
(17, 'Swapnajit sahoo', 'mikusahoo60@gmail.com', '08455033896', '2026-03-18 07:39:59', '2026-03-18 07:39:59');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `faq_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'corporate or shares',
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `faq_type`, `question`, `answer`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 'shares', 'ww', 'ss', 1, '2026-03-18 05:58:28', '2026-03-18 05:58:28'),
(3, 'corporate', 'hi?ss?sss', 'sqaasdaddxss', 1, '2026-03-18 05:58:36', '2026-03-18 05:59:49'),
(4, 'corporate', 'question  cor1', 'cor1', 1, '2026-03-18 11:08:17', '2026-03-18 11:08:17'),
(5, 'corporate', 'cor 3', 'cor', 1, '2026-03-18 11:08:26', '2026-03-18 11:08:26'),
(6, 'shares', 'share?', 'yes', 1, '2026-03-18 11:08:36', '2026-03-18 11:08:36'),
(7, 'shares', 'shear2?', 'yes', 1, '2026-03-18 11:08:47', '2026-03-18 11:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `healthcare_industries`
--

CREATE TABLE `healthcare_industries` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lending_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lending_desc` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hightech_industries`
--

CREATE TABLE `hightech_industries` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lending_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lending_desc` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inclusion_cards`
--

CREATE TABLE `inclusion_cards` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inclusion_cards`
--

INSERT INTO `inclusion_cards` (`id`, `title`, `content`, `second_content`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Comprehensive Security & Data Protection Services', 'At Incobist we are more than just an IT solutions provider - we are your dedicated partners in the journey of technological advancement and business success.1', 'At Incobist we are more than just an IT solutions provider - we are your dedicated partners in the journey of technological advancement and business success.', 1, 1, '2026-03-18 14:40:12', '2026-03-18 14:40:12'),
(2, 'c', 'aaaa', 'aa', 1, 2, '2026-03-18 14:41:04', '2026-03-18 14:41:04'),
(3, 'd', 'd1', 'd2', 1, 3, '2026-03-18 14:41:30', '2026-03-18 14:41:30'),
(4, 'e', 'e1', 'e2', 1, 4, '2026-03-18 14:42:40', '2026-03-18 14:42:40'),
(5, 'f', 'f1', 'f2', 1, 5, '2026-03-18 14:43:53', '2026-03-18 14:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `inco_industries`
--

CREATE TABLE `inco_industries` (
  `id` bigint UNSIGNED NOT NULL,
  `nav_menu_id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lending_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lending_desc` longtext COLLATE utf8mb4_unicode_ci,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wp_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inco_industries`
--

INSERT INTO `inco_industries` (`id`, `nav_menu_id`, `type`, `page_title`, `page_img`, `heading`, `heading_subtitle`, `lending_title`, `lending_desc`, `linkedin_link`, `twitter_link`, `instagram_link`, `fb_link`, `wp_link`, `tel_no`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Industry', NULL, 'Industry Inovation', 'Transforming Industries Through Intelligent Technology.', 'Industries We Serve', 'At Incobist, we blend deep domain expertise with digital-first thinking to create tailored solutions for every industry. From AI-driven insights to seamless product engineering, we help businesses stay ahead in a rapidly evolving world.', 'https://incobist.com/', 'https://incobist.com/', 'https://incobist.com/', 'https://incobist.com/', 'https://incobist.com/', '9090909090', 1, NULL, '2026-03-22 13:56:39', '2026-03-22 13:56:39'),
(2, 1, NULL, 'High Tech', NULL, 'High-tech industries', 'We co-create futuristic technologies and transformative experiences for a better world.', 'Lending speed to strategy', 'At Incobist, we blend deep domain expertise with digital-first thinking to create tailored solutions for every industry. From AI-driven insights to seamless product engineering, we help businesses stay ahead in a rapidly evolving world.', 'https://incobist.com/', 'https://incobist.com/', 'https://incobist.com/', 'https://incobist.com/', 'https://incobist.com/', '9090909090', 1, '2026-03-22 15:15:20', '2026-03-22 14:02:05', '2026-03-22 15:15:20'),
(3, 3, NULL, 'High-tech', NULL, 'High-tech industries', 'We co-create futuristic technologies and transformative experiences for a better world.', 'Lending speed to strategy', 'At Incobist, we blend deep domain expertise with digital-first thinking to create tailored solutions for every industry. From AI-driven insights to seamless product engineering, we help businesses stay ahead in a rapidly evolving world.', 'https://incobist.com/', 'https://incobist.com/', 'https://incobist.com/', 'https://incobist.com/', 'https://incobist.com/', '9090909091', 1, NULL, '2026-03-22 15:20:22', '2026-03-22 16:59:47'),
(4, 4, NULL, 'Banking', NULL, 'Banking', 'We co-create futuristic technologies and transformative experiences for a better world.', 'Lending speed to strategy', 'At Incobist, we blend deep domain expertise with digital-first thinking to create tailored solutions for every industry. From AI-driven insights to seamless product engineering, we help businesses stay ahead in a rapidly evolving world.', 'https://incobist.com/', 'https://incobist.com/', 'https://incobist.com/', 'https://incobist.com/', 'https://incobist.com/', '9090909090', 1, NULL, '2026-03-22 15:33:29', '2026-03-22 15:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `inco_industry_cards`
--

CREATE TABLE `inco_industry_cards` (
  `id` bigint UNSIGNED NOT NULL,
  `industry_id` bigint UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci,
  `card_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inco_industry_cards`
--

INSERT INTO `inco_industry_cards` (`id`, `industry_id`, `img`, `title`, `subtitle`, `desc`, `card_link`, `type`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'industry/cards/gjueX9TELpARjf3HBg4dx3772iW7YGf5xDiIFWt2.jpg', 'High Tech', 'tech lead', 'test', 'https://test.com', 'serve', 1, NULL, '2026-03-22 13:58:49', '2026-03-22 13:58:49'),
(2, 1, 'industry/cards/7MXMsUsM0skVMZeTmNm3KSQg48XqxI1Er69MVrZR.jpg', 'test2', 'tech lead 2', 'sscdc', 'https://test.com', 'capable', 1, NULL, '2026-03-22 13:59:33', '2026-03-22 13:59:33'),
(3, 3, 'industry/cards/gzK5ljrcHWabwgUxJoBkynE4rbyrDDziZjq7uL5S.jpg', 'test', 'tech lead', 'test', 'https://test.com', 'focus', 1, NULL, '2026-03-22 15:21:26', '2026-03-22 15:21:26'),
(4, 3, 'industry/cards/FUFbuocVaqYyp6Gc35R7jzkYEO4gvjzGgxh1osIa.png', 'test22', 'tech lead 2222', 'wwdef', 'https://test.com', 'service', 1, NULL, '2026-03-22 15:22:25', '2026-03-22 15:22:25'),
(5, 3, NULL, 'efrefde', 'qswd', 'qddfwf', 'https://test.com', 'service', 1, NULL, '2026-03-22 15:22:47', '2026-03-22 15:22:47'),
(6, 3, 'industry/cards/vsMlRKigEm3Hj63HD6fS8L8jtcntwjlPwT6c9iQ5.png', 'qwef', 'sddsd', 'aSVSC', 'https://test.com', 'focus', 1, NULL, '2026-03-22 15:57:32', '2026-03-22 15:57:32'),
(7, 3, 'industry/cards/93TkVERm7ZjTGv7TLlaJfDTc4iyoRF9itansM3AW.png', 'SXCDVDSCD', 'c xc', 'xsc cx', 'https://test.com', 'focus', 1, NULL, '2026-03-22 16:00:14', '2026-03-22 16:00:14'),
(8, 3, 'industry/cards/DtReshdPx0n5K6yVcr4qCPoSoaP2AMM7sDDLozX1.png', 'asxsc', 'tech lead', 'xas', 'https://test.com', 'focus', 1, NULL, '2026-03-22 16:02:55', '2026-03-22 16:02:55'),
(9, 3, NULL, 'sdwfeg', 'sdwdvf', 'sadwfv', 'https://test.com', 'focus', 1, NULL, '2026-03-22 16:03:15', '2026-03-22 16:03:15'),
(10, 3, 'industry/cards/Wxr40GAIoiezGFZH6wT1dT1dvJuYYZxy37Mlaekf.png', 'asdfv', 'sqs', 'dfs', 'https://test.com', 'service', 1, NULL, '2026-03-22 16:44:40', '2026-03-22 16:44:57'),
(11, 3, 'industry/cards/SaHckbHqI11AkmoTClgyi7hneaFcH6zUHUOD90Uv.jpg', 'bvhvjvkh', 'tech lead 2222', 'mmnmn,,', 'https://test.com', 'service', 1, NULL, '2026-03-22 16:46:05', '2026-03-22 16:46:05'),
(12, 3, 'industry/cards/I1G6MqXTZEQOPYidpvgCEWmzQHCgTZtgwLgupsYO.jpg', 'bhbmbmnbnm,b,', 'qswd', 'n m.', 'https://test.com', 'service', 1, NULL, '2026-03-22 16:46:53', '2026-03-22 16:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `inco_industry_card_challenges`
--

CREATE TABLE `inco_industry_card_challenges` (
  `id` bigint UNSIGNED NOT NULL,
  `industry_id` bigint UNSIGNED NOT NULL,
  `solution_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inco_industry_card_challenges`
--

INSERT INTO `inco_industry_card_challenges` (`id`, `industry_id`, `solution_name`, `img`, `title`, `subtitle`, `desc`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, 'wqrf', 'industry/challenges/8ddMEl7ShvZWZu8ZnHha2ftbN4uYsKGCychzwNjv.jpg', 'wedf', 'eqd', 'qewf', 1, NULL, '2026-03-22 15:23:11', '2026-03-22 15:23:11'),
(2, 3, 'eqdd', 'industry/challenges/2VnUvinNsO9Zca5P0iTBpFzMCHrcytbycJBtKKwP.png', 'wfw', 'eqf', 'rwrf', 1, NULL, '2026-03-22 15:23:36', '2026-03-22 15:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lending_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lending_desc` text COLLATE utf8mb4_unicode_ci,
  `social_linked_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_insta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_fb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_wp_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_num` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industry_cards`
--

CREATE TABLE `industry_cards` (
  `id` bigint UNSIGNED NOT NULL,
  `industry_id` bigint UNSIGNED NOT NULL,
  `card_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industry_services`
--

CREATE TABLE `industry_services` (
  `id` bigint UNSIGNED NOT NULL,
  `industry_id` bigint UNSIGNED NOT NULL,
  `service_card_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_card_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_card_desc` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insight_blogs`
--

CREATE TABLE `insight_blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insight_blogs`
--

INSERT INTO `insight_blogs` (`id`, `name`, `slug`, `image`, `content`, `is_active`, `created_at`, `updated_at`) VALUES
(8, 'High Lights', 'high-lights', 'asset/image/bg/blog-highlights.png', '<p>Extended reality (XR), which includes AR, VR, and MR, has the potential to transform customer-facing enterprises by offering immersive and engaging virtual experiences.</p>\n                             <p>For a well-known jewelry business in India, TCS produced a 3D virtual store tour and a 360-degree experience of the NYC Marathon.</p>\n                             <p>VR will also assist lower operating expenses and the carbon impact of enterprises in a variety of ways.</p>', 1, '2026-03-18 09:05:33', '2026-03-18 09:05:33'),
(9, 'Presenting the other domain', 'other-domain', 'asset/image/bg/blog-other-domain.png', '<p>The metaverse is becoming more and more noticeable in both business and everyday life, and it is expected to establish itself as a kind of fixture for next generations. The Metaverse, which is based on Virtual Reality (VR), Augmented Reality (AR), and Mixed Reality (MR), is creating new opportunities for lifelike experiences in addition to a new digital and social environment.</p>\n                             <p>Significant progress has been achieved in the immersive technologies field by TCS Interactive and TCS AvapresenceTM, a TCS platform to design, implement, and scale digital innovation—both disruptive and incremental. This encompasses AR, VR, and MR, all of which are included in the XR category...</p>', 1, '2026-03-18 09:05:33', '2026-03-18 09:05:33'),
(10, 'Extend the ordinary', 'extend-the-ordinary', 'asset/image/bg/blog-orinary1.png', '<p>By fusing the virtual and \"real\" worlds or by producing an entirely immersive experience, all immersive technologies enhance the reality we see. AR and MR offer an expanded reality by combining the physical and digital worlds, whereas VR is a totally artificial medium that lets people fully immerse themselves in an experience.</p>\n                             <p>Applying XR to corporate processes, particularly those that interact with customers, leads to increased user engagement, lower operating costs, training programs for employees and classrooms, the provision of unique and personalized experiences, and remote data access.</p>\n                             <h4>Using VR to achieve green aims</h4>\n                             <p>The most relevant of all the innovative uses of virtual reality is its effect on environmental sustainability. As VR replaces procedures in a variety of industrial verticals, it reduces carbon footprints. It also facilitates the assimilation of input. VR is essential to reaching \"green\" objectives at a time when industries are working to achieve net zero and implement sustainable models at the local level.</p>', 1, '2026-03-18 09:05:34', '2026-03-18 09:05:34'),
(12, 'Presenting the other domain 222', 'presenting-the-other-domain-222', 'uploads/blogs/1773825134.png', '<p>The most relevant of all the innovative uses of virtual reality is its effect on environmental sustainability. As VR replaces procedures in a variety of industrial verticals, it reduces carbon footprints. It also facilitates the assimilation of input. VR is essential to reaching \"green\" objectives at a time when industries are working to achieve net zero and implement sustainable models at the local level.</p>\'', 1, '2026-03-18 09:12:14', '2026-03-18 09:12:14'),
(14, 'Presenting the other domain 333', 'presenting-the-other-domain-333', 'uploads/blogs/1773825796.png', '<p>\r\n        “ One of the most <span>effective strategies</span> for reaching clients and selling wedding jewelry is this\r\n        idea. Every day, more than <br><span>3,000 clients</span> <br> visit our Company, which give them a distinctive\r\n        and striking opportunity to view our brand. ”\r\n      </p>', 1, '2026-03-18 09:23:16', '2026-03-18 09:23:16'),
(15, 'presenting 234', 'presenting-234', 'uploads/blogs/1773825847.png', '<p>\r\n        “ One of the most <span>effective strategies</span> for reaching clients and selling wedding jewelry is this\r\n        idea. Every day, more than <br><span>3,000 clients</span> <br> visit our Company, which give them a distinctive\r\n        and striking opportunity to view our brand. ”\r\n      </p>', 1, '2026-03-18 09:24:07', '2026-03-18 09:24:07');

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
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` bigint UNSIGNED NOT NULL,
  `career_id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `career_id`, `first_name`, `last_name`, `email`, `education`, `experience`, `phone`, `state`, `district`, `resume`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '', '', 'mikusahoo60@gmail.com', '', '', '08455033896', '', '', 'uploads/resumes/1777134130_250918351604-eticket.pdf', 'hi', 'accepted', '2026-04-25 16:22:10', '2026-04-25 17:07:03'),
(2, 2, 'siya', 'sahoo', 'siya@gmail.com', 'siya!@gmail.com', '2 years', '8455033896', 'odisha', 'bbsr', 'uploads/resumes/1778605445_250918351604-eticket.pdf', NULL, 'pending', '2026-05-12 17:04:05', '2026-05-12 17:04:05');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_03_04_023513_add_role_to_users_table', 2),
(5, '2026_03_05_200706_create_contacts_table', 3),
(6, '2026_03_05_203230_create_project_inquiries_table', 4),
(7, '2026_03_15_132556_create_navbar_menus_table', 5),
(8, '2026_03_17_041819_create_page_contents_table', 5),
(9, '2026_03_17_041914_create_page_sections_table', 5),
(10, '2026_03_17_041929_create_seo_metas_table', 5),
(11, '2026_03_18_022554_create_insight_blogs_table', 6),
(12, '2026_03_18_025521_create_products_table', 7),
(13, '2026_03_18_054434_create_faqs_table', 8),
(14, '2026_03_18_072729_create_potential_rois_table', 9),
(15, '2026_03_18_075923_create_resources_table', 10),
(16, '2026_03_18_080657_change_title_to_text_on_resources_table', 11),
(17, '2026_03_18_141813_create_inclusion_cards_table', 12),
(18, '2026_03_19_032332_create_industries_table', 13),
(19, '2026_03_19_032422_create_industry_cards_table', 13),
(20, '2026_03_19_032453_create_industry_services_table', 13),
(21, '2026_03_19_034930_create_hightech_industries_table', 13),
(22, '2026_03_19_034948_create_hightech_cards_table', 13),
(23, '2026_03_19_035000_create_hightech_services_table', 13),
(24, '2026_03_19_035011_create_hightech_challenges_table', 13),
(25, '2026_03_19_041930_create_healthcare_industries_table', 13),
(26, '2026_03_19_042041_create_healthcare_cards_table', 13),
(27, '2026_03_19_042117_create_healthcare_services_table', 13),
(28, '2026_03_19_042145_create_healthcare_challenges_table', 13),
(29, '2026_03_19_043234_create_banking_industries_table', 13),
(30, '2026_03_19_043252_create_banking_cards_table', 13),
(31, '2026_03_19_043300_create_banking_services_table', 13),
(32, '2026_03_19_043308_create_banking_challenges_table', 13),
(33, '2026_03_21_025347_create_inco_industries_table', 13),
(34, '2026_03_21_031258_create_inco_industry_cards_table', 13),
(35, '2026_03_21_031744_create_inco_industry_card_challenges_table', 13),
(36, '2026_03_22_080203_drop_industry_related_tables', 13),
(37, '2026_04_25_160700_create_careers_table', 14),
(38, '2026_04_25_161758_create_job_applications_table', 15),
(39, '2026_05_12_170035_add_details_to_job_applications_table', 16),
(40, '2026_05_12_170314_remove_name_from_job_applications_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `navbar_menus`
--

CREATE TABLE `navbar_menus` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `menu_order` int NOT NULL DEFAULT '0',
  `target` enum('_self','_blank') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navbar_menus`
--

INSERT INTO `navbar_menus` (`id`, `title`, `slug`, `url`, `parent_id`, `menu_order`, `target`, `icon`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Industry', 'industry', 'industry', NULL, 0, '_self', NULL, 1, '2026-03-22 13:30:23', '2026-03-22 13:30:23'),
(3, 'High Tech', 'high-tech', 'high-tech', 1, 1, '_self', NULL, 1, '2026-03-22 15:16:35', '2026-03-22 15:18:04'),
(4, 'Banking', 'banking', 'banking', 1, 2, '_self', NULL, 1, '2026-03-22 15:31:57', '2026-03-22 15:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `page_contents`
--

CREATE TABLE `page_contents` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'full-width',
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_sections`
--

CREATE TABLE `page_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `page_id` bigint UNSIGNED NOT NULL,
  `type` enum('hero','text_block','challenge_solution','card_grid','testimonial','cta_banner','faq','custom_html') COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` json NOT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `potential_rois`
--

CREATE TABLE `potential_rois` (
  `id` bigint UNSIGNED NOT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_stage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `potential_rois`
--

INSERT INTO `potential_rois` (`id`, `industry`, `budget`, `goal`, `business_stage`, `timeline`, `created_at`, `updated_at`) VALUES
(2, 'E-commerce', 'Above ₹10L', 'Website Traffic', 'Growing', '6-12 Months', '2026-03-18 07:38:24', '2026-03-18 07:38:24'),
(3, 'Healthcare', '₹1L - ₹5L', 'Lead Generation', 'Growing', '1-3 Months', '2026-03-18 07:47:02', '2026-03-18 07:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `heading`, `slug`, `image`, `content`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 'test1', 'test lorem ipsum', 'test1', 'uploads/products/1773831221.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2026-03-18 10:53:41', '2026-03-18 10:53:41'),
(3, 'test2', 'test 2 lorem ipsum,', 'test2', 'uploads/products/1773831256.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2026-03-18 10:54:16', '2026-03-18 10:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `project_inquiries`
--

CREATE TABLE `project_inquiries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_inquiries`
--

INSERT INTO `project_inquiries` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Lamar Cook', 'sinulaqise@mailinator.com', '+1 (837) 604-7932', 'myco@mailinator.com', 'Cupiditate anim quae', '2026-03-05 15:05:08', '2026-03-05 15:05:08'),
(2, 'Aladdin Mercer', 'tyjymizydo@mailinator.com', '+1 (413) 679-3329', 'lahejuku@mailinator.com', 'Qui adipisicing sunt', '2026-03-05 15:06:33', '2026-03-05 15:06:33'),
(3, 'Aladdin Mercer', 'tyjymizydo@mailinator.com', '+1 (413) 679-3329', 'lahejuku@mailinator.com', 'Qui adipisicing sunt', '2026-03-05 15:06:34', '2026-03-05 15:06:34'),
(4, 'Portia Chen', 'pazutabiji@mailinator.com', '+1 (582) 759-7668', 'podugabone@mailinator.com', 'Nihil excepteur ut e', '2026-03-05 20:17:52', '2026-03-05 20:17:52'),
(5, 'Portia Chen', 'pazutabiji@mailinator.com', '+1 (582) 759-7668', 'podugabone@mailinator.com', 'Nihil excepteur ut e', '2026-03-05 20:17:52', '2026-03-05 20:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `hover_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hover_description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order_index` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `category`, `title`, `description`, `hover_category`, `hover_description`, `image`, `status`, `order_index`, `created_at`, `updated_at`) VALUES
(1, 'PERSPECTIVE', 'The Rise of SaaS Startups in India: Opportunities & Challenges', NULL, 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'asset/image/bg/resources-perspective.png', 1, 1, '2026-03-18 08:06:39', '2026-03-18 08:06:39'),
(2, 'ARTICLE', 'Top 5 Tech Trends Reshaping the Digital Landscape in 2025', 'Explore how AI, automation, and no-code platforms are changing how digital products are built.', 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'asset/image/bg/resources-article.png', 1, 2, '2026-03-18 08:06:39', '2026-03-18 08:06:39'),
(3, 'CASE STUDY', 'How to Build a Future-Ready Digital Team', NULL, 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'asset/image/bg/industry-page-box-3.png', 1, 3, '2026-03-18 08:06:39', '2026-03-18 08:06:39'),
(4, 'PERSPECTIVE', 'The Rise of SaaS Startups in India: Opportunities & Challenges', NULL, 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'asset/image/bg/resources-perspective.png', 1, 1, '2026-03-18 08:06:50', '2026-03-18 08:06:50'),
(5, 'ARTICLE', 'Top 5 Tech Trends Reshaping the Digital Landscape in 2025', 'Explore how AI, automation, and no-code platforms are changing how digital products are built.', 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'asset/image/bg/resources-article.png', 1, 2, '2026-03-18 08:06:50', '2026-03-18 08:06:50'),
(6, 'CASE STUDY', 'How to Build a Future-Ready Digital Team', NULL, 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'asset/image/bg/industry-page-box-3.png', 1, 3, '2026-03-18 08:06:50', '2026-03-18 08:06:50'),
(7, 'PERSPECTIVE', 'The Rise of SaaS Startups in India: Opportunities & Challenges', NULL, 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'asset/image/bg/resources-perspective.png', 1, 1, '2026-03-18 08:07:34', '2026-03-18 08:07:34'),
(8, 'ARTICLE', 'Top 5 Tech Trends Reshaping the Digital Landscape in 2025', 'Explore how AI, automation, and no-code platforms are changing how digital products are built.', 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'asset/image/bg/resources-article.png', 1, 2, '2026-03-18 08:07:34', '2026-03-18 08:07:34'),
(9, 'CASE STUDY', 'How to Build a Future-Ready Digital Team', NULL, 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'asset/image/bg/industry-page-box-3.png', 1, 3, '2026-03-18 08:07:34', '2026-03-18 08:07:34'),
(10, 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'EXPAND', 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', NULL, 1, 4, '2026-03-18 08:07:34', '2026-03-18 08:07:34'),
(11, 'PERSPECTIVE', 'Understanding Product-Market Fit in the SaaS World', 'A framework for early-stage companies to validate ideas before scaling.', 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'asset/image/bg/resources-perspective-2.png', 1, 5, '2026-03-18 08:07:34', '2026-03-18 08:07:34'),
(12, 'ARTICLE', 'The Role of Cybersecurity in SaaS-based Infrastructure', 'Why protecting data and customer trust is more critical than ever.', 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'asset/image/bg/resources-article-2.png', 1, 6, '2026-03-18 08:07:34', '2026-03-18 08:07:34'),
(13, 'CASE STUDY', 'Why UX Strategy is a Game-Changer for Enterprise Platforms', 'Why protecting data and customer trust is more critical than ever.', 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'asset/image/bg/industry-page-box-5.png', 1, 7, '2026-03-18 08:07:34', '2026-03-18 08:07:34'),
(14, 'CASE STUDY', 'From Legacy to Cloud: Navigating the Transition for MSMEs', 'Why protecting data and customer trust is more critical than ever.', 'CASE STUDY', 'For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn\'t just a tech upgrade — it\'s a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.', 'asset/image/bg/industry-page-box-6.png', 1, 8, '2026-03-18 08:07:34', '2026-03-18 08:07:34'),
(15, 's', 'aaaa', 'as', 'a', 'ass', 'asset/image/resources/1773822303.jpg', 1, 15, '2026-03-18 08:10:10', '2026-03-18 08:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `seo_metas`
--

CREATE TABLE `seo_metas` (
  `id` bigint UNSIGNED NOT NULL,
  `page_id` bigint UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `og_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canonical_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('a9FFLjpTjjSa3YPkVfptoHL2QE2EQyYMpZiLScbQ', 2, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNTg0SU80QW9hUjdQU0VwWUJabnUyVzd3aGI3QldtQ3ByZWdVNndTQSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjYzOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vam9iLWFwcGxpY2F0aW9ucz9jYXJlZXJfaWQ9JnNlYXJjaD0iO3M6NToicm91dGUiO3M6Mjg6ImFkbWluLmpvYi1hcHBsaWNhdGlvbnMuaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1778648729),
('f4SMaLyNrryGwH8lkAP3XSotKKekXWGCQIb70wQY', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUM0dWVwbFpQTXpaNWNmcER6c096RzJ3ZkZRakF1MnJOSHY3cmFwMiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jYXJlZXIvMi9hcHBseSI7czo1OiJyb3V0ZSI7czoxMjoiY2FyZWVyLmFwcGx5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1778647354),
('SS6ixKW2ETwGjswsrBVIVDjkeiTPfCMLlQMwVWLx', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZm4wRUhreTdZOFpNYndMSW84dDB2U2kwajhLOXY2cVFabXBzUEV2ciI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jYXJlZXIvMi9hcHBseSI7czo1OiJyb3V0ZSI7czoxMjoiY2FyZWVyLmFwcGx5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1778608139),
('YG8Q0RnecZ7PchUT8r8F745MWUP76W0m06dmq0GS', 2, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNFRIR2xJY29KRVIyd0N3aDBlaHQzOUNlVjJkR0duRFJQWmhSNVBCSSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjM1OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vY2FyZWVycyI7czo1OiJyb3V0ZSI7czoxOToiYWRtaW4uY2FyZWVycy5pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1778605743);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin', 'admin@yopmail.com', NULL, '$2y$12$kX97191aBBMnZDRIH5XNg.7A/u2RVOd4.PZqhIIsVJl/rcJZQ1Mxy', 'obPQ2WoVHRNyX0ziFaCllsv23NHhO31OrAAitkcAll51FbCwSqKlDAjWUnKz', '2026-03-03 21:21:56', '2026-03-03 21:21:56', 'user'),
(2, 'mikus', 'miku@gmail.com', NULL, '$2y$12$9LqpcdOwCd/uFuTpq/.EeuUi/bvUY8D7DL/pOC9zbwZZdG4obDAQ.', NULL, '2026-03-08 07:33:50', '2026-03-18 07:53:27', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banking_industries`
--
ALTER TABLE `banking_industries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banking_industries_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `healthcare_industries`
--
ALTER TABLE `healthcare_industries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `healthcare_industries_slug_unique` (`slug`);

--
-- Indexes for table `hightech_industries`
--
ALTER TABLE `hightech_industries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hightech_industries_slug_unique` (`slug`);

--
-- Indexes for table `inclusion_cards`
--
ALTER TABLE `inclusion_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inco_industries`
--
ALTER TABLE `inco_industries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inco_industries_nav_menu_id_foreign` (`nav_menu_id`);

--
-- Indexes for table `inco_industry_cards`
--
ALTER TABLE `inco_industry_cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inco_industry_cards_industry_id_foreign` (`industry_id`);

--
-- Indexes for table `inco_industry_card_challenges`
--
ALTER TABLE `inco_industry_card_challenges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inco_industry_card_challenges_industry_id_foreign` (`industry_id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `industries_slug_unique` (`slug`);

--
-- Indexes for table `industry_cards`
--
ALTER TABLE `industry_cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `industry_cards_industry_id_foreign` (`industry_id`);

--
-- Indexes for table `industry_services`
--
ALTER TABLE `industry_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `industry_services_industry_id_foreign` (`industry_id`);

--
-- Indexes for table `insight_blogs`
--
ALTER TABLE `insight_blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `insight_blogs_slug_unique` (`slug`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_applications_career_id_foreign` (`career_id`);

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
-- Indexes for table `navbar_menus`
--
ALTER TABLE `navbar_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_contents`
--
ALTER TABLE `page_contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_contents_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `page_sections`
--
ALTER TABLE `page_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_sections_page_id_foreign` (`page_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `potential_rois`
--
ALTER TABLE `potential_rois`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `project_inquiries`
--
ALTER TABLE `project_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_metas`
--
ALTER TABLE `seo_metas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_metas_page_id_foreign` (`page_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `banking_industries`
--
ALTER TABLE `banking_industries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `healthcare_industries`
--
ALTER TABLE `healthcare_industries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hightech_industries`
--
ALTER TABLE `hightech_industries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inclusion_cards`
--
ALTER TABLE `inclusion_cards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inco_industries`
--
ALTER TABLE `inco_industries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inco_industry_cards`
--
ALTER TABLE `inco_industry_cards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inco_industry_card_challenges`
--
ALTER TABLE `inco_industry_card_challenges`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industry_cards`
--
ALTER TABLE `industry_cards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industry_services`
--
ALTER TABLE `industry_services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insight_blogs`
--
ALTER TABLE `insight_blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `navbar_menus`
--
ALTER TABLE `navbar_menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page_contents`
--
ALTER TABLE `page_contents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_sections`
--
ALTER TABLE `page_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `potential_rois`
--
ALTER TABLE `potential_rois`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_inquiries`
--
ALTER TABLE `project_inquiries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `seo_metas`
--
ALTER TABLE `seo_metas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inco_industries`
--
ALTER TABLE `inco_industries`
  ADD CONSTRAINT `inco_industries_nav_menu_id_foreign` FOREIGN KEY (`nav_menu_id`) REFERENCES `navbar_menus` (`id`);

--
-- Constraints for table `inco_industry_cards`
--
ALTER TABLE `inco_industry_cards`
  ADD CONSTRAINT `inco_industry_cards_industry_id_foreign` FOREIGN KEY (`industry_id`) REFERENCES `inco_industries` (`id`);

--
-- Constraints for table `inco_industry_card_challenges`
--
ALTER TABLE `inco_industry_card_challenges`
  ADD CONSTRAINT `inco_industry_card_challenges_industry_id_foreign` FOREIGN KEY (`industry_id`) REFERENCES `inco_industries` (`id`);

--
-- Constraints for table `industry_cards`
--
ALTER TABLE `industry_cards`
  ADD CONSTRAINT `industry_cards_industry_id_foreign` FOREIGN KEY (`industry_id`) REFERENCES `industries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `industry_services`
--
ALTER TABLE `industry_services`
  ADD CONSTRAINT `industry_services_industry_id_foreign` FOREIGN KEY (`industry_id`) REFERENCES `industries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD CONSTRAINT `job_applications_career_id_foreign` FOREIGN KEY (`career_id`) REFERENCES `careers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_contents`
--
ALTER TABLE `page_contents`
  ADD CONSTRAINT `page_contents_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `navbar_menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_sections`
--
ALTER TABLE `page_sections`
  ADD CONSTRAINT `page_sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `page_contents` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seo_metas`
--
ALTER TABLE `seo_metas`
  ADD CONSTRAINT `seo_metas_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `page_contents` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
