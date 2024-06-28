-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 09:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khata_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `slug`, `value`, `created_at`, `updated_at`) VALUES
(53, 'Section 1 main tittle', 'section_1_main_tittle', '<span>About</span> <br><span>Softec</span>', '2024-02-29 12:10:28', '2024-03-01 16:05:48'),
(54, 'Section 1 tittle 2', 'section_1_tittle_2', 'Trusted by Thousands Business', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(55, 'Section 1 desc', 'section_1_desc', 'More than 100,000+ teams are using Softec', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(56, 'Section 2 main tittle', 'section_2_main_tittle', 'Softuch is Made <br>For the Creator.', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(57, 'Section 2 desc 1', 'section_2_desc_1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rutrum arcu sollicitudin viverra sit elit leo in. Vitae eu tellus mattis quis. Eu, tempus donec nam mauris egestas. Id aliquet ultricies ligula tellus arcu dolor. Massa arcu pulvinar in mattis', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(58, 'Section 2 desc 2', 'section_2_desc_2', 'Feugiat purus congue risus, blandit a sed. In aenean quam aenean purus dictum pellentesque consequat.!', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(59, 'Section 2 desc 3', 'section_2_desc_3', 'Our clean and simple APIs and transparent SaaS model will give you complete peace of mind.', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(60, 'Counter 1 tittle', 'counter_1_tittle', 'Creators', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(61, 'Counter 1 value', 'counter_1_value', '11,000<em>+</em>', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(62, 'Counter 2 tittle', 'counter_2_tittle', 'Revenue per Year', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(63, 'Counter 2 value', 'counter_2_value', '46<em>m</em>', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(64, 'Counter 3 tittle', 'counter_3_tittle', 'Countries using', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(65, 'Counter 3 value', 'counter_3_value', '150<em>+</em>', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(66, 'Section 3 main tittle', 'section_3_main_tittle', 'We Offer Real Time Data Solutions', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(67, 'Section 3 main desc', 'section_3_main_desc', 'Excepteur sint occaecat cupidatat officia non proident <br>sunt in culpa qui deserunt.!', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(68, 'Section 3 desc 1', 'section_3_desc_1', 'Various analysis options.', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(69, 'Section 3 desc 2', 'section_3_desc_2', 'Page Load (time, size, number of requests).', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(70, 'Section 3 desc 3', 'section_3_desc_3', 'Big data analysis.', '2024-02-29 12:11:47', '2024-03-01 16:05:48'),
(71, 'Section 1 main image', 'section_1_main_image', 'homeImages/breadcrumb-2.jpg_1709250574.jpg', '2024-02-29 12:11:47', '2024-02-29 18:49:34'),
(72, 'Section 3 image 1', 'section_3_image_1', 'homeImages/about-5.png_1709251763.png', '2024-02-29 12:11:47', '2024-02-29 19:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `tittle` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `overview` mediumtext NOT NULL,
  `image` mediumtext NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `tittle`, `description`, `overview`, `image`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '5 Companies doing Brand <br> Marketing Right', 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day going forward, a new normal that has evolved                                                gaining audience insights and making personalized <br>\n                                                content, content marketing.', 'From publishing content and hoping to acquire leads to <br>              gaining audience insights and making personalized <br>                                                 content, content marketing.', 'homeImages/contact-banner.jpg_1709737311.jpg', 1, 0, '2024-03-05 10:38:51', '2024-03-06 16:05:24'),
(2, '5 Companies doing Brand <br> Marketing Right', 'From publishing content and hoping to acquire leads to <br>\n                                                gaining audience insights and making personalized <br>\n                                                content, content marketing.Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day going forward, a new normal that has evolved', 'From publishing content and hoping to acquire leads to <br>', 'homeImages/breadcrumb-2.jpg_1709737809.jpg', 1, 0, '2024-03-06 08:32:00', '2024-03-06 16:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `name`, `slug`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Section 1 main tittle', 'section_1_main_tittle', 'Build Your Career With<br>\nThe Lemon Team', '2024-03-01 16:36:40', '2024-03-04 13:10:26'),
(2, 'Section 1 main desc', 'section_1_main_desc', 'Work without distraction on your own or with your team.', '2024-03-01 16:36:40', '2024-03-01 17:06:58'),
(3, 'Section 2 main tittle', 'section_2_main_tittle', 'Our Platform', '2024-03-01 16:36:40', '2024-03-04 13:08:05'),
(4, 'Section 2 main decs', 'section_2_main_decs', 'Explore how Avalance can help you toassess security <br> controls continuously.', '2024-03-01 16:36:40', '2024-03-01 22:30:34'),
(5, 'Section 3 main tittle', 'section_3_main_tittle', 'Open Positions', '2024-03-01 16:36:40', '2024-03-04 13:12:40'),
(6, 'Section 3 main desc', 'section_3_main_desc', 'Borem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque tristique <br>\nEt amet risus enim accumsan sit purus sit.', '2024-03-01 16:36:40', '2024-03-04 13:13:13'),
(7, 'Section 1 image 1', 'section_1_image_1', 'homeImages/image-1.png_1709330818.png', '2024-03-01 16:36:40', '2024-03-01 17:06:58'),
(8, 'Section 1 image 2', 'section_1_image_2', 'homeImages/image-2.png_1709330818.png', '2024-03-01 16:36:40', '2024-03-01 17:06:58'),
(9, 'Section 1 image 3', 'section_1_image_3', 'homeImages/image-3.png_1709330818.png', '2024-03-01 16:36:40', '2024-03-01 17:06:58'),
(10, 'Section 1 image 4', 'section_1_image_4', 'homeImages/image-4.png_1709330818.png', '2024-03-01 16:36:40', '2024-03-01 17:06:58'),
(11, 'Section 2 image 1', 'section_2_image_1', 'homeImages/section_6_main_image.png_1708972926.png_1709330818.png', '2024-03-01 16:36:40', '2024-03-01 17:06:58'),
(40, 'Section 2 tittle 1', 'section_2_tittle_1', 'Generate, Manage, and Convert leads <br>into Customers. Automatically', '2024-03-04 05:26:27', '2024-03-04 05:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Branding', '2024-03-04 13:27:46', '2024-03-04 13:27:46'),
(2, 'Web Design\r\n', '2024-03-04 13:28:15', '2024-03-04 13:28:15'),
(3, 'Mobile Application', '2024-03-04 13:28:15', '2024-03-04 13:28:15'),
(4, 'Illusutration', '2024-03-04 08:32:41', '2024-03-05 13:30:45'),
(9, 'cloths', '2024-06-12 10:28:08', '2024-06-12 10:28:08'),
(10, 'cloths', '2024-06-12 11:00:19', '2024-06-12 11:00:19'),
(11, 'hello', '2024-06-13 03:56:27', '2024-06-13 03:56:27'),
(12, 'socket', '2024-06-14 02:50:51', '2024-06-14 02:50:51'),
(13, 'socket', '2024-06-14 02:52:05', '2024-06-14 02:52:05'),
(14, 'helloaa', '2024-06-14 02:52:20', '2024-06-14 02:52:20'),
(15, 'socket12', '2024-06-14 02:52:54', '2024-06-14 02:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `cms_contacts`
--

CREATE TABLE `cms_contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cms_contacts`
--

INSERT INTO `cms_contacts` (`id`, `name`, `slug`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Section 1 main tittle', 'section_1_main_tittle', '<span>Get In</span> <br> <span>Touch</span>', '2024-03-04 06:11:01', '2024-03-04 06:29:59'),
(2, 'Section 2 tittle 1', 'section_2_tittle_1', 'Colombia', '2024-03-04 06:11:01', '2024-03-04 11:50:38'),
(3, 'Section 2 decs 1', 'section_2_decs_1', 'Bogota D.C., Colombia, b. a 181\nC No. 930 Ap 202', '2024-03-04 06:11:01', '2024-03-04 11:50:47'),
(4, 'Section 2 tittle 2', 'section_2_tittle_2', 'France', '2024-03-04 06:11:01', '2024-03-04 11:51:03'),
(5, 'Section 2 decs 2', 'section_2_decs_2', '9 Pearse Street, Kinsale,Cork,\nP17 AH66, Ireland', '2024-03-04 06:11:01', '2024-03-04 11:50:57'),
(6, 'Section 2 tittle 3', 'section_2_tittle_3', 'Egypt', '2024-03-04 06:11:01', '2024-03-04 11:51:12'),
(7, 'Section 2 decs 3', 'section_2_decs_3', 'Av. Cordoba 1309, 3\'A, City of <br>\n                                 Buenos Aires, Egyp', '2024-03-04 06:11:01', '2024-03-04 12:07:23'),
(8, 'Section 3 main tittle', 'section_3_main_tittle', 'We\'d love to <br>\nhear From  you.', '2024-03-04 06:11:01', '2024-03-04 11:51:41'),
(9, 'Section 3 main desc', 'section_3_main_desc', '   While we\'re good with smoke signals,\n                                 there <br> are easier ways to get in touch.', '2024-03-04 06:11:01', '2024-03-04 12:04:52'),
(10, 'Section 3 main image', 'section_3_main_image', 'homeImages/card-img-4.png_1709551799.png', '2024-03-04 06:11:01', '2024-03-04 06:29:59'),
(11, 'Section 4 main tittle', 'section_4_main_tittle', 'Book a Demo!', '2024-03-04 06:11:01', '2024-03-04 11:57:16'),
(12, 'Section 4 main desc', 'section_4_main_desc', 'While we\'re good with smoke signals, there are easier ways to get in touch.', '2024-03-04 06:11:01', '2024-03-04 12:17:34'),
(13, 'Section 1 main image', 'section_1_main_image', 'homeImages/contact-banner.jpg_1709551799.jpg', '2024-03-04 06:11:01', '2024-03-04 06:29:59'),
(14, 'Section 2 image 1', 'section_2_image_1', 'homeImages/Colombia.png_1709551799.png', '2024-03-04 06:11:01', '2024-03-04 06:29:59'),
(15, 'Section 2 image 2', 'section_2_image_2', 'homeImages/Colombia2.png_1709551799.png', '2024-03-04 06:11:01', '2024-03-04 06:29:59'),
(16, 'Section 2 image 3', 'section_2_image_3', 'homeImages/Colombia3.png_1709551799.png', '2024-03-04 06:11:01', '2024-03-04 06:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `name`, `slug`, `value`, `created_at`, `updated_at`) VALUES
(3, 'Contact number', 'contact_number', '+806 (000) 88 99', '2024-03-04 03:18:30', '2024-03-04 07:31:24'),
(4, 'Emal address', 'email_address', 'contact@info.com', '2024-03-04 03:18:30', '2024-03-04 07:31:25'),
(5, 'Address', 'address', '1811 Silverside Rd, Wilmington, DE <br> 19810, USA', '2024-03-04 03:18:30', '2024-03-04 07:31:25'),
(7, 'Facebook link', 'facebook_link', 'www.facebook.com', '2024-03-04 04:14:34', '2024-03-04 07:31:25'),
(8, 'Instagram link', 'instagram_link', 'instagram.com', '2024-03-04 04:14:34', '2024-03-04 07:31:25'),
(9, 'Youtube link', 'youtube_link', 'youtube.com', '2024-03-04 04:14:34', '2024-03-04 07:31:26'),
(10, 'Twitter link', 'twitter_link', 'twitter.com', '2024-03-04 04:14:34', '2024-03-04 07:31:26'),
(11, 'Tiktok link', 'tiktok_link', 'tiktok.com', '2024-03-04 04:14:34', '2024-03-04 07:31:26'),
(12, 'Copy right', 'copy_right', 'Full Copyright & Design By <a href=\"#\">@Theme pure</a> – 2023', '2024-03-04 07:28:46', '2024-03-04 07:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `name`, `slug`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Section 1 main tittle', 'section_1_main_tittle', 'The next generation payment ways.', '2024-02-28 13:33:30', '2024-02-28 22:01:53'),
(2, 'Section 2 main tittle', 'section_2_main_tittle', 'You\'ll love our <br>\npowerful payments.', '2024-02-28 13:33:30', '2024-02-28 22:02:39'),
(3, 'Section 2 main decs', 'section_2_main_decs', 'We\'ve got all your payments covered', '2024-02-28 13:33:30', '2024-02-28 22:03:14'),
(4, 'Section 2 tittle 1', 'section_2_tittle_1', 'Scan & Go', '2024-02-28 13:33:30', '2024-02-28 22:03:23'),
(5, 'Section 2 desc 1', 'section_2_desc_1', 'Transform your payment link into a QR code that <br> customers can scan with their <br>\nphone to pay.', '2024-02-28 13:33:30', '2024-02-28 22:07:52'),
(6, 'Section 2 tittle 2', 'section_2_tittle_2', 'Easily Send Requesrs vai e-mail or SMS', '2024-02-28 13:33:30', '2024-02-28 22:04:34'),
(7, 'Section 2 desc 2', 'section_2_desc_2', '... or copy-paste the link', '2024-02-28 13:33:30', '2024-02-28 22:07:09'),
(8, 'Section 2 tittle 3', 'section_2_tittle_3', 'Online Billing & <br>\nInvoicing Payments.', '2024-02-28 13:33:30', '2024-02-28 22:09:22'),
(9, 'Section 2 desc 3', 'section_2_desc_3', 'Get paid faster with Online Invoicing\nand the Virtual Terminal.', '2024-02-28 13:33:30', '2024-02-28 22:11:23'),
(10, 'Section 3 main tittle', 'section_3_main_tittle', 'All major\n<br>payment methods', '2024-02-28 13:33:30', '2024-02-28 22:15:30'),
(11, 'Section 3 main desc', 'section_3_main_desc', 'We\'ve got all your payments covered', '2024-02-28 13:33:30', '2024-02-28 22:15:25'),
(12, 'Section 4 main tittle', 'section_4_main_tittle', 'We provide the <br>\nbest service for you', '2024-02-28 13:33:30', '2024-02-28 22:16:10'),
(13, 'Section 4 main desc', 'section_4_main_desc', 'We\'ve got all your payments covered', '2024-02-28 13:33:30', '2024-02-28 22:16:31'),
(14, 'Section 4 tittle 1', 'section_4_tittle_1', 'More free tools than you can handle', '2024-02-28 13:33:30', '2024-02-28 22:17:16'),
(15, 'Section 5 main tittle', 'section_5_main_tittle', 'Let’s get started', '2024-02-28 13:33:30', '2024-02-28 22:17:48'),
(16, 'Section 5 sub tittle 1', 'section_5_sub_tittle_1', 'Sign up in a few minutes', '2024-02-28 13:33:30', '2024-02-28 22:18:14'),
(17, 'Section 5 sub tittle 2', 'section_5_sub_tittle_2', 'Let us verify your identity', '2024-02-28 13:33:30', '2024-02-28 22:18:27'),
(18, 'Section 5 sub tittle 3', 'section_5_sub_tittle_3', 'Your account is open; you can send <br>\nyour first payment', '2024-02-28 13:33:30', '2024-02-28 22:18:38'),
(19, 'Section 6 main tittle', 'section_6_main_tittle', 'Frequently <br>\nAsked Questions', '2024-02-28 13:33:30', '2024-02-28 22:19:19'),
(20, 'Section 6 main decs', 'section_6_main_decs', 'Sed ut perspiciatis unde omnis iste natus error <br>\nsit voluptatem accusantium.!', '2024-02-28 13:33:30', '2024-02-28 22:19:52'),
(21, 'Section 6 sub tittle 1', 'section_6_sub_tittle_1', 'Why should I choose Softec?', '2024-02-28 13:33:30', '2024-02-28 22:20:06'),
(22, 'Section 6 sub desc 1', 'section_6_sub_desc_1', 'The Softec Shop is built right into your account dashboard, <br> and is accessible immediately after signing up.', '2024-02-28 13:33:30', '2024-02-28 22:20:32'),
(23, 'Section 6 sub tittle 2', 'section_6_sub_tittle_2', 'Do I need to change banks?\n', '2024-02-28 13:33:30', '2024-02-28 22:21:12'),
(24, 'Section 6 sub desc 2', 'section_6_sub_desc_2', 'The Softec Shop is built right into your account dashboard, <br> and is accessible immediately after signing up.', '2024-02-28 13:33:30', '2024-02-28 22:21:44'),
(25, 'Section 6 sub tittle 3', 'section_6_sub_tittle_3', 'How can I order equipment?\n', '2024-02-28 13:33:30', '2024-02-28 22:22:44'),
(26, 'Section 6 sub desc 3', 'section_6_sub_desc_3', 'The Softec Shop is built right into your account dashboard, <br> and is accessible immediately after signing up.', '2024-02-28 13:33:30', '2024-02-28 22:21:50'),
(27, 'Section 6 sub tittle 4', 'section_6_sub_tittle_4', 'Do you offer volume discounts?\n', '2024-02-28 13:33:30', '2024-02-28 22:22:31'),
(28, 'Section 6 sub desc 4', 'section_6_sub_desc_4', 'The Softec Shop is built right into your account dashboard, <br> and is accessible immediately after signing up.', '2024-02-28 13:33:30', '2024-02-28 22:21:54'),
(29, 'Section 6 sub tittle 5', 'section_6_sub_tittle_5', 'How does signing up work?\n', '2024-02-28 13:33:30', '2024-02-28 22:22:21'),
(30, 'Section 6 sub desc 5', 'section_6_sub_desc_5', 'The Softec Shop is built right into your account dashboard, <br> and is accessible immediately after signing up.', '2024-02-28 13:33:30', '2024-02-28 22:21:57'),
(31, 'Section 7 main tittle', 'section_7_main_tittle', 'Try our service now!', '2024-02-28 13:33:30', '2024-02-28 22:23:14'),
(32, 'Section 7 main desc', 'section_7_main_desc', 'Eyerything you need to accept cord payments and grow your business <br>\nanywhere on the planet.', '2024-02-28 13:33:30', '2024-02-28 22:23:45'),
(33, 'Section 1 bg image', 'section_1_bg_image', 'logo_favicon_images/section_1_bg_image.png_1709157665.png', '2024-02-28 13:33:30', '2024-02-28 17:01:05'),
(34, 'Section 1 image 1', 'section_1_image_1', 'logo_favicon_images/section_1_image_1.png_1709157665.png', '2024-02-28 13:33:30', '2024-02-28 17:01:05'),
(35, 'Section 1 image 2', 'section_1_image_2', 'logo_favicon_images/section_1_image_2.png_1709157665.png', '2024-02-28 13:33:30', '2024-02-28 17:01:05'),
(36, 'Section 2 image 1', 'section_2_image_1', 'logo_favicon_images/section_2_image_1.png_1709157665.png', '2024-02-28 13:33:30', '2024-02-28 17:01:05'),
(37, 'Section 2 image 2', 'section_2_image_2', 'logo_favicon_images/section_2_image_2.png_1709157665.png', '2024-02-28 13:33:30', '2024-02-28 17:01:05'),
(38, 'Section 2 image 3', 'section_2_image_3', 'logo_favicon_images/section_2_image_3.png_1709157665.png', '2024-02-28 13:33:30', '2024-02-28 17:01:05'),
(39, 'Section 5 bg image', 'section_5_bg_image', 'logo_favicon_images/section_5_bg_image.png_1709157665.png', '2024-02-28 13:33:30', '2024-02-28 17:01:05'),
(40, 'Section 5 front image', 'section_5_front_image', 'logo_favicon_images/section_5_front_image.png_1709157665.png', '2024-02-28 13:33:30', '2024-02-28 17:01:05'),
(41, 'Section 6 image', 'section_6_image', 'logo_favicon_images/section_6_main_image.png_1709157665.png', '2024-02-28 13:33:30', '2024-02-28 17:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `khata`
--

CREATE TABLE `khata` (
  `id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`name`)),
  `user_id` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `description` mediumtext NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khata`
--

INSERT INTO `khata` (`id`, `name`, `user_id`, `amount`, `description`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(137, '\"hello\"', 35, '451', 'demo', 1, 0, '2024-06-26 04:40:38', '2024-06-26 04:40:38'),
(138, '\"demo\"', 35, '540', 'demo', 1, 0, '2024-06-26 04:40:38', '2024-06-26 04:40:38'),
(139, '\"tech\"', 35, '200', 'demo', 1, 0, '2024-06-26 04:40:38', '2024-06-26 04:40:38'),
(140, '\"cloths\"', 35, '451', 'demo', 1, 0, '2024-06-26 04:42:59', '2024-06-26 04:42:59'),
(141, '\"demo\"', 35, '540', 'demo', 1, 0, '2024-06-26 04:42:59', '2024-06-26 04:42:59'),
(142, '\"tech\"', 35, '200', 'demo', 1, 0, '2024-06-26 04:42:59', '2024-06-26 04:42:59'),
(143, '\"cloths\"', 34, '909', 'hello', 1, 0, '2024-06-26 04:45:41', '2024-06-26 04:45:41'),
(144, '\"cloths\"', 34, '909', 'hello', 1, 0, '2024-06-26 04:45:52', '2024-06-26 04:45:52'),
(145, '\"jlkjl\"', 34, '450', 'hello', 1, 0, '2024-06-26 04:45:52', '2024-06-26 04:45:52'),
(146, '\"anus\"', 34, '120', 'demo', 1, 0, '2024-06-26 06:14:16', '2024-06-26 06:14:16'),
(147, '\"cloths\"', 34, '451', 'demo', 1, 0, '2024-06-26 06:53:10', '2024-06-26 06:53:10'),
(148, '\"demo\"', 34, '540', 'demo', 1, 0, '2024-06-26 06:53:10', '2024-06-26 06:53:10'),
(149, '\"tech\"', 34, '200', 'demo', 1, 0, '2024-06-26 06:53:10', '2024-06-26 06:53:10'),
(150, '\"cloths\"', 34, '451', 'hello', 1, 0, '2024-06-26 07:06:34', '2024-06-26 07:06:34'),
(151, '\"demo\"', 34, '540', 'hello', 1, 0, '2024-06-26 07:06:34', '2024-06-26 07:06:34'),
(152, '\"tech\"', 34, '200', 'hello', 1, 0, '2024-06-26 07:06:34', '2024-06-26 07:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `slug`, `value`, `created_at`, `updated_at`) VALUES
(1, 'logo', 'logo_favicon_images/logo.png_1709052192.png', '2024-02-28 21:48:57', '2024-02-28 21:48:57'),
(2, 'favicon', 'logo_favicon_images/favicon.png_1709053336.png', '2024-02-28 21:48:57', '2024-02-28 21:48:57'),
(3, 'logo-white', 'logo_favicon_images/logo-white.png_1709160581.png', '2024-02-28 21:49:30', '2024-02-28 17:49:41'),
(4, 'logo-black', 'logo_favicon_images/logo-black.png_1709053064.png', '2024-02-28 21:49:30', '2024-02-28 21:49:30'),
(5, '_token', '3i8fJUYF30DV9qTDxhlUV6bjZuTV6ZmrBxRC3oOe', '2024-02-28 17:36:55', '2024-02-28 17:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

CREATE TABLE `our_services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `overview` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_services`
--

INSERT INTO `our_services` (`id`, `name`, `description`, `image`, `category`, `overview`, `created_at`, `updated_at`) VALUES
(3, 'Automate Workflows and Monitor your Sales.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum, orci at dapibus, massa ante pharetra tellus. Maecenas interdum, orci at euismod dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'homeImages/breadcrumb-2.jpg_1709733245.jpg', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum, orci at dapibus, massa ante pharetra tellus. Maecenas interdum, orci at euismod dapibus. Lorem ipsum dolor sit amet.!', '2024-03-05 03:07:41', '2024-03-06 08:54:05'),
(4, 'Quick & Easy Repeater Fields Option', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum, orci at dapibus, massa ante pharetra tellus. Maecenas interdum, orci at euismod dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'homeImages/breadcrumb-2.jpg_1709648103.jpg', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum, orci at dapibus, massa ante pharetra tellus. Maecenas interdum, orci at euismod dapibus. Lorem ipsum dolor sit amet.!', '2024-03-05 03:07:41', '2024-03-05 09:15:03'),
(5, 'Track your Marketing to see the best Results.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum, orci at dapibus, massa ante pharetra tellus. Maecenas interdum, orci at euismod dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'homeImages/contact-banner.jpg_1709648137.jpg', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum, orci at dapibus, massa ante pharetra tellus. Maecenas interdum, orci at euismod dapibus. Lorem ipsum dolor sit amet.!', '2024-03-05 03:07:41', '2024-03-05 09:15:37'),
(6, 'Get real-time visibility into every expense', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum, orci at dapibus, massa ante pharetra tellus. Maecenas interdum, orci at euismod dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'homeImages/contact-banner.jpg_1709648003.jpg', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum, orci at dapibus, massa ante pharetra tellus. Maecenas interdum, orci at euismod dapibus. Lorem ipsum dolor sit amet.!', '2024-03-05 03:07:41', '2024-03-05 09:13:23'),
(7, 'Get real-time visibility into every expense.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum, orci at dapibus, massa ante pharetra tellus. Maecenas interdum, orci at euismod dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'homeImages/Colombia3.png_1709732256.png', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum, orci at dapibus, massa ante pharetra tellus. Maecenas interdum, orci at euismod dapibus. Lorem ipsum dolor sit amet.!', '2024-03-05 03:07:41', '2024-03-06 08:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE `platforms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `platforms`
--

INSERT INTO `platforms` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(6, 'Live Security', 'Blocks infected website tracking programs and annoying.', '2024-03-01 15:43:19', '2024-03-01 15:43:19'),
(7, 'Hack Protection', 'Blocks infected website tracking programs and annoying.', '2024-03-01 15:43:35', '2024-03-01 15:43:35'),
(8, 'Live Security', 'Blocks infected website tracking programs and annoying.', '2024-03-01 15:43:59', '2024-03-01 15:43:59'),
(9, 'Online Support', 'Blocks infected website tracking programs and annoying.', '2024-03-01 15:44:14', '2024-03-01 15:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `value`, `created_at`, `updated_at`) VALUES
(28, 'Section 1 main tittle', 'section_1_main_tittle', '<span>Our Top</span> <br>                               <span>Services</span>', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(29, 'Section 2 main tittle', 'section_2_main_tittle', 'Accounting Software <br>That Handles it All.', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(30, 'Section 2 tittle 1', 'section_2_tittle_1', 'Generate, Manage, and Convert leads <br>into Customers. Automatically', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(31, 'Section 3 main tittle', 'section_3_main_tittle', 'Manage All your <br>Cards in one Place', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(32, 'Section 3 main desc', 'section_3_main_desc', 'Digital products are where it’s at! There are so many benefits to selling digital products. It’s easy to get started and they >br>can be extremely profitable', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(33, 'Section 4 main tittle', 'section_4_main_tittle', 'Track and Analyze <br> Sales in Real time', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(34, 'Section 4 main desc', 'section_4_main_desc', 'Centralize and simplify payments, and get comprehensive <br>insights on your financials softuch.!', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(35, 'Section 4 sub tittle 1', 'section_4_sub_tittle_1', 'No hidden fees.', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(36, 'Section 4 sub tittle 2', 'section_4_sub_tittle_2', '100% security. Guaranteed.', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(37, 'Section 4 sub tittle 3', 'section_4_sub_tittle_3', 'No training or maintenance needed', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(38, 'Section 5 main tittle', 'section_5_main_tittle', 'About Customer Stories', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(39, 'Section 1 main image', 'section_1_main_image', 'homeImages/breadcrumb-2.jpg_1709339064.jpg', '2024-03-01 18:57:30', '2024-03-01 19:24:24'),
(40, 'Section 2 bg image', 'section_2_bg_image', 'homeImages/service-3-bg.png_1709339064.png', '2024-03-01 18:57:30', '2024-03-01 19:24:24'),
(41, 'Section 3 bg image', 'section_3_bg_image', 'homeImages/card-bg.png_1709339154.png', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(42, 'Section 3 image 1', 'section_3_image_1', 'homeImages/card-img-1.png_1709339154.png', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(43, 'Section 3 image 2', 'section_3_image_2', 'homeImages/card-img-4.png_1709339154.png', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(44, 'Section 4 main image', 'section_4_main_image', 'homeImages/sale-1.png_1709339154.png', '2024-03-01 18:57:30', '2024-03-01 19:25:54'),
(45, 'Section 4 sub image', 'section_4_sub_image', 'homeImages/sale-2.png_1709339154.png', '2024-03-01 18:57:30', '2024-03-01 19:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `services_faqs`
--

CREATE TABLE `services_faqs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `question` mediumtext NOT NULL,
  `answer` mediumtext NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_faqs`
--

INSERT INTO `services_faqs` (`id`, `category_id`, `question`, `answer`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(4, 2, 'Why should I choose Softec?', 'The Softec Shop is built right into your account dashboard, and is accessible immediately after signing up.', 1, 0, '2024-03-05 06:30:14', '2024-03-05 06:30:14'),
(5, 1, 'Do I need to change banks?', 'The Softec Shop is built right into your account dashboard, and is accessible immediately after signing up.a', 1, 0, '2024-03-05 06:30:30', '2024-03-05 12:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `profession` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `image`, `profession`, `created_at`, `updated_at`) VALUES
(13, 'Alexa Montessdss', 'teamImages/image3.jpeg_1718282160.jpeg', 'Partner & COO', '2024-03-01 10:14:07', '2024-06-13 08:03:21'),
(14, 'Ravi Ganatra', 'teamImages/image3.jpeg_1718280770.jpeg', 'Designer', '2024-03-01 13:43:56', '2024-06-13 07:12:50'),
(15, 'Imdat Cimsit', 'teamImages/team-4-3.png_1709318658.png', 'CEO & Founder', '2024-03-01 13:44:18', '2024-03-01 13:44:18'),
(16, 'Imdat Cimsit', 'teamImages/team-4-4.png_1709318713.png', 'PHP Developer', '2024-03-01 13:45:13', '2024-03-01 13:45:13'),
(17, 'Trevor Philips', 'teamImages/team-4-5.png_1709318744.png', 'Marketing Lead', '2024-03-01 13:45:44', '2024-03-01 13:45:44'),
(18, 'Cohnor Delaney', 'teamImages/card-img-4.png_1709736603.png', 'Technology Officer', '2024-03-01 13:46:04', '2024-03-06 09:50:03'),
(19, 'Trian Dominguez', 'teamImages/team-4-7.png_1709318786.png', 'Visual designer', '2024-03-01 13:46:26', '2024-03-01 13:46:26'),
(20, 'Imdat Cimsit', 'teamImages/team-4-8.png_1709318808.png', 'Marketing Lead', '2024-03-01 13:46:48', '2024-03-01 13:46:48'),
(22, 'Aqisfdsfb Arain', 'teamImages/team-4-3.png_1709318658.png_1709910290.png', 'Main Image', '2024-03-08 10:04:50', '2024-06-11 14:24:37'),
(23, 'Aqib Arain', 'web_cms_images/image3.jpeg_1718285551.jpeg', 'Main Image', '2024-03-08 10:05:46', '2024-06-13 08:32:31'),
(36, 'socket', 'web_cms_images/image1.jpeg_1718279084.jpeg', 'Marketing Lead', '2024-06-13 06:44:44', '2024-06-13 06:44:44'),
(37, 'socket', 'web_cms_images/image2.jpeg_1718279550.jpeg', 'Marketing Lead', '2024-06-13 06:52:30', '2024-06-13 06:52:30'),
(38, 'fsg', 'web_cms_images/image4.jpeg_1718283790.jpeg', 'tert', '2024-06-13 08:03:10', '2024-06-13 08:03:10'),
(39, 'clothssfdsfsdf', 'web_cms_images/image4.jpeg_1718283814.jpeg', 'Marketing Lead', '2024-06-13 08:03:34', '2024-06-13 08:03:42'),
(40, 'aaaa', 'web_cms_images/image1.jpeg_1718351713.jpeg', 'Marketing Lead', '2024-06-14 02:55:13', '2024-06-14 02:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(50) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `phone_no`, `email_verified_at`, `password`, `remember_token`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(33, 'anus', 1, 'admin@project.com', 3222554514, NULL, '$2y$10$TzRGw2d6nDs7HtjDPY.6H.wxYkwVKlqTannaO0TFFh0XzgEtcPMzS', NULL, 1, 0, '2024-02-19 19:59:00', '2024-02-20 12:09:06'),
(34, 'Aqib Arain', 0, 'ali@gmail.com', 321253562, NULL, '$2y$10$lQfjojbiPR2KD5TeC4UdwuwC12OD5GrnGKX2S1Myn.EzdvgW7J1nO', NULL, 1, 0, '2024-02-20 12:45:33', '2024-02-20 12:45:33'),
(35, 'Dr.ali', 0, 'ali4@gmail.com', 321524867, NULL, '$2y$10$U6LLhKfunXc.WAONfV0IZOpU1yahF8RqxAggQehaAjvP/RFm3UVFG', NULL, 1, 0, '2024-02-20 13:00:07', '2024-02-20 13:00:07'),
(37, 'ali', 0, 'ali1@gmail.com', 3212569464, NULL, '$2y$10$VjXX0Jep8ry5g29Uk5ibEOMFvXLsN4TzKnhgrg2J1lVUAUjdSoWA.', NULL, 1, 0, '2024-02-20 13:00:56', '2024-02-20 13:00:56'),
(38, 'Aqib Arain', 0, 'anus2@gmail.com', 321524867, NULL, '$2y$10$ASR0gFCGwb0SaPeGJ4.HmuZ5ArlFPJpdmsho2kHaYRNm6Eqb/O1pq', NULL, 1, 0, '2024-02-20 13:03:26', '2024-02-20 13:03:26'),
(39, 'anus', 0, 'anusanus@gmail.com', 32125213421, NULL, '$2y$10$9V1Ym8ob0YGCMv0EAJ6KBO2BXoMysF5nFkZWM.NQrkjbhVhnkj/B.', NULL, 1, 0, '2024-02-21 12:59:24', '2024-02-21 12:59:24'),
(40, 'ali', 0, 'ali4a@gmail.com', 321524867, NULL, '$2y$10$i6nkE5/GT2Q83D7HumadRePzmAbDp8E.5LqzqiVKUdXVEbxES12lW', NULL, 1, 0, '2024-02-21 13:01:00', '2024-02-21 13:01:00'),
(42, 'socket', 2, 'customer@project.com', 3212569464, NULL, '$2y$10$zCs9Q86MKSnwuuDK.g/Xt.WhG4yHXxJsV4U6Vj5rhcGuz.pYMUWfG', NULL, 1, 0, '2024-06-21 05:45:22', '2024-06-21 05:45:22'),
(45, 'customer', 2, 'aaanus@gmail.com', 3212121, NULL, '$2y$10$UcmT3Hr3G9BjhJxCMybw0uAtZrDy7.MkAapMeSudGN0iyM4gBNUhK', NULL, 1, 0, '2024-06-21 06:18:17', '2024-06-21 06:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `web_cms`
--

CREATE TABLE `web_cms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_cms`
--

INSERT INTO `web_cms` (`id`, `name`, `slug`, `value`, `tag`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(45, 'Section 1 main tittle', 'section_1_main_tittle', 'The next generation payment ways.', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 13:04:25'),
(46, 'Section 2 main tittle', 'section_2_main_tittle', 'Softuch is Made <br>For the Creator.', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:59:57'),
(47, 'Section 2 main decs', 'section_2_main_decs', 'We\'ve got all your payments covered', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(48, 'Section 2 tittle 1', 'section_2_tittle_1', 'Scan & Go', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(49, 'Section 2 desc 1', 'section_2_desc_1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rutrum arcu sollicitudin viverra sit elit leo in. Vitae eu tellus mattis quis. Eu, tempus donec nam mauris egestas. Id aliquet ultricies ligula tellus arcu dolor. Massa arcu pulvinar in mattis', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:59:57'),
(50, 'Section 2 tittle 2', 'section_2_tittle_2', 'Easily Send Requesrs vai e-mail or SMS', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(51, 'Section 2 desc 2', 'section_2_desc_2', 'Feugiat purus congue risus, blandit a sed. In aenean quam aenean purus dictum pellentesque consequat.!', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:59:57'),
(52, 'Section 2 tittle 3', 'section_2_tittle_3', 'Online Billing & <br>Invoicing Payments.', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(53, 'Section 2 desc 3', 'section_2_desc_3', 'Our clean and simple APIs and transparent SaaS model will give you complete peace of mind.', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:59:57'),
(54, 'Section 3 main tittle', 'section_3_main_tittle', 'We Offer Real Time Data Solutions', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:59:57'),
(55, 'Section 3 main desc', 'section_3_main_desc', 'Excepteur sint occaecat cupidatat officia non proident <br>sunt in culpa qui deserunt.!', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:59:57'),
(56, 'Section 4 main tittle', 'section_4_main_tittle', 'We provide the <br>best service for you', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(57, 'Section 4 main desc', 'section_4_main_desc', 'We\'ve got all your payments covered', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(58, 'Section 4 tittle 1', 'section_4_tittle_1', 'More free tools than you can handle', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(59, 'Section 5 main tittle', 'section_5_main_tittle', 'Let’s get started', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(60, 'Section 5 sub tittle 1', 'section_5_sub_tittle_1', 'Sign up in a few minutes', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(61, 'Section 5 sub tittle 2', 'section_5_sub_tittle_2', 'Let us verify your identity', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(62, 'Section 5 sub tittle 3', 'section_5_sub_tittle_3', 'Your account is open; you can send <br>your first payment', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(63, 'Section 6 main tittle', 'section_6_main_tittle', 'Frequently <br>Asked Questions', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(64, 'Section 6 main decs', 'section_6_main_decs', 'Sed ut perspiciatis unde omnis iste natus error <br>sit voluptatem accusantium.!', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(65, 'Section 6 sub tittle 1', 'section_6_sub_tittle_1', 'Why should I choose Softec?', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(66, 'Section 6 sub desc 1', 'section_6_sub_desc_1', 'The Softec Shop is built right into your account dashboard, <br> and is accessible immediately after signing up.', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(67, 'Section 6 sub tittle 2', 'section_6_sub_tittle_2', 'Do I need to change banks?', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(68, 'Section 6 sub desc 2', 'section_6_sub_desc_2', 'The Softec Shop is built right into your account dashboard, <br> and is accessible immediately after signing up.', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(69, 'Section 6 sub tittle 3', 'section_6_sub_tittle_3', 'How can I order equipment?', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(70, 'Section 6 sub desc 3', 'section_6_sub_desc_3', 'The Softec Shop is built right into your account dashboard, <br> and is accessible immediately after signing up.', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(71, 'Section 6 sub tittle 4', 'section_6_sub_tittle_4', 'Do you offer volume discounts?', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(72, 'Section 6 sub desc 4', 'section_6_sub_desc_4', 'The Softec Shop is built right into your account dashboard, <br> and is accessible immediately after signing up.', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(73, 'Section 6 sub tittle 5', 'section_6_sub_tittle_5', 'How does signing up work?', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(74, 'Section 6 sub desc 5', 'section_6_sub_desc_5', 'The Softec Shop is built right into your account dashboard, <br> and is accessible immediately after signing up.', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(75, 'Section 7 main tittle', 'section_7_main_tittle', 'Try our service now!', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(76, 'Section 7 main desc', 'section_7_main_desc', 'Eyerything you need to accept cord payments and grow your business <br>anywhere on the planet.', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(77, 'Section 1 bg image', 'section_1_bg_image', 'web_cms_images/section_1_bg_image.png_1709897922.png', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(78, 'Section 1 image 1', 'section_1_image_1', 'web_cms_images/section_1_image_1.png_1709897922.png', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(79, 'Section 1 image 2', 'section_1_image_2', 'web_cms_images/section_1_image_2.png_1709897922.png', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(80, 'Section 2 image 1', 'section_2_image_1', 'web_cms_images/section_2_image_1.png_1709897922.png', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(81, 'Section 2 image 2', 'section_2_image_2', 'web_cms_images/section_2_image_2.png_1709897922.png', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(82, 'Section 2 image 3', 'section_2_image_3', 'web_cms_images/section_2_image_3.png_1709897922.png', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(83, 'Section 5 bg image', 'section_5_bg_image', 'web_cms_images/section_5_bg_image.png_1709897922.png', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(84, 'Section 5 front image', 'section_5_front_image', 'web_cms_images/section_5_front_image.png_1709897922.png', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(85, 'Section 6 image', 'section_6_image', 'web_cms_images/section_6_main_image.png_1709897922.png', 'home', 1, 0, '2024-03-08 06:38:42', '2024-03-08 06:38:42'),
(86, 'Section 1 tittle 2', 'section_1_tittle_2', 'Trusted by Thousands Business', 'about', 1, 0, '2024-03-08 06:50:06', '2024-03-08 07:54:26'),
(87, 'Section 1 desc', 'section_1_desc', 'More than 100,000+ teams are using Softec', 'about', 1, 0, '2024-03-08 06:50:06', '2024-03-08 07:54:26'),
(88, 'Counter 1 tittle', 'counter_1_tittle', 'Creators', 'about', 1, 0, '2024-03-08 06:50:06', '2024-03-08 07:54:26'),
(89, 'Counter 1 value', 'counter_1_value', '11,000<em>+</em>', 'about', 1, 0, '2024-03-08 06:50:06', '2024-03-08 07:54:26'),
(90, 'Counter 2 tittle', 'counter_2_tittle', 'Revenue per Year', 'about', 1, 0, '2024-03-08 06:50:06', '2024-03-08 07:54:26'),
(91, 'Counter 2 value', 'counter_2_value', '46<em>m</em>', 'about', 1, 0, '2024-03-08 06:50:06', '2024-03-08 07:54:26'),
(92, 'Counter 3 tittle', 'counter_3_tittle', 'Countries using', 'about', 1, 0, '2024-03-08 06:50:06', '2024-03-08 07:54:26'),
(93, 'Counter 3 value', 'counter_3_value', '150<em>+</em>', 'about', 1, 0, '2024-03-08 06:50:06', '2024-03-08 07:54:26'),
(94, 'Section 3 desc 1', 'section_3_desc_1', 'Various analysis options.', 'about', 1, 0, '2024-03-08 06:50:06', '2024-03-08 07:54:26'),
(95, 'Section 3 desc 2', 'section_3_desc_2', 'Page Load (time, size, number of requests).', 'about', 1, 0, '2024-03-08 06:50:06', '2024-03-08 07:54:26'),
(96, 'Section 3 desc 3', 'section_3_desc_3', 'Big data analysis.', 'about', 1, 0, '2024-03-08 06:50:06', '2024-03-08 07:54:26'),
(97, 'Section 1 main image', 'section_1_main_image', 'web_cms_images/breadcrumb-2.jpg_1709250574.jpg_1709900476.jpg', 'about', 1, 0, '2024-03-08 06:50:06', '2024-03-08 07:21:16'),
(98, 'Section 3 image 1', 'section_3_image_1', 'web_cms_images/about-5.png_1709900476.png', 'about', 1, 0, '2024-03-08 06:50:06', '2024-03-08 07:21:16'),
(99, 'Section 1 main tittle', 'section_1_main_tittle', '<span>About</span> <br><span>Softec</span><span>About</span> <br><span>Softec</span>', 'about', 1, 0, '2024-03-08 07:21:16', '2024-03-08 07:54:26'),
(100, 'Section 2 main tittle', 'section_2_main_tittle', 'Softuch is Made <br>For the Creator.', 'about', 1, 0, '2024-03-08 07:21:16', '2024-03-08 07:54:26'),
(101, 'Section 2 desc 1', 'section_2_desc_1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rutrum arcu sollicitudin viverra sit elit leo in. Vitae eu tellus mattis quis. Eu, tempus donec nam mauris egestas. Id aliquet ultricies ligula tellus arcu dolor. Massa arcu pulvinar in mattis', 'about', 1, 0, '2024-03-08 07:21:16', '2024-03-08 07:54:26'),
(102, 'Section 2 desc 2', 'section_2_desc_2', 'Feugiat purus congue risus, blandit a sed. In aenean quam aenean purus dictum pellentesque consequat.!', 'about', 1, 0, '2024-03-08 07:21:16', '2024-03-08 07:54:26'),
(103, 'Section 2 desc 3', 'section_2_desc_3', 'Our clean and simple APIs and transparent SaaS model will give you complete peace of mind.', 'about', 1, 0, '2024-03-08 07:21:16', '2024-03-08 07:54:26'),
(104, 'Section 3 main tittle', 'section_3_main_tittle', 'We Offer Real Time Data Solutions', 'about', 1, 0, '2024-03-08 07:21:16', '2024-03-08 07:54:26'),
(105, 'Section 3 main desc', 'section_3_main_desc', 'Excepteur sint occaecat cupidatat officia non proident <br>sunt in culpa qui deserunt.!', 'about', 1, 0, '2024-03-08 07:21:16', '2024-03-08 07:54:26'),
(106, 'Section 1 main tittle', 'section_1_main_tittle', 'Build Your Career With<br>The Lemon Team', 'career', 1, 0, '2024-03-08 07:49:51', '2024-03-08 07:49:51'),
(107, 'Section 1 main desc', 'section_1_main_desc', 'Work without distraction on your own or with your team.', 'career', 1, 0, '2024-03-08 07:49:51', '2024-03-08 07:49:51'),
(108, 'Section 2 main tittle', 'section_2_main_tittle', 'Our Platform', 'career', 1, 0, '2024-03-08 07:49:51', '2024-03-08 07:49:51'),
(109, 'Section 2 main decs', 'section_2_main_decs', 'Explore how Avalance can help you toassess security <br> controls continuously.', 'career', 1, 0, '2024-03-08 07:49:51', '2024-03-08 07:49:51'),
(110, 'Section 3 main tittle', 'section_3_main_tittle', 'Open Positions', 'career', 1, 0, '2024-03-08 07:49:51', '2024-03-08 07:49:51'),
(111, 'Section 3 main desc', 'section_3_main_desc', 'Borem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque tristique <br>Et amet risus enim accumsan sit purus sit.', 'career', 1, 0, '2024-03-08 07:49:51', '2024-03-08 07:49:51'),
(112, 'Section 1 image 1', 'section_1_image_1', 'web_cms_images/image-1.png_1709330818.png_1709902191.png', 'career', 1, 0, '2024-03-08 07:49:51', '2024-03-08 07:49:51'),
(113, 'Section 1 image 2', 'section_1_image_2', 'web_cms_images/image-2.png_1709330818.png_1709902191.png', 'career', 1, 0, '2024-03-08 07:49:51', '2024-03-08 07:49:51'),
(114, 'Section 1 image 3', 'section_1_image_3', 'web_cms_images/image-3.png_1709330818.png_1709902191.png', 'career', 1, 0, '2024-03-08 07:49:51', '2024-03-08 07:49:51'),
(115, 'Section 1 image 4', 'section_1_image_4', 'web_cms_images/image-4.png_1709330818.png_1709902191.png', 'career', 1, 0, '2024-03-08 07:49:51', '2024-03-08 07:49:51'),
(116, 'Section 2 image 1', 'section_2_image_1', 'web_cms_images/section_6_main_image.png_1708972926.png_1709330818.png_1709902191.png', 'career', 1, 0, '2024-03-08 07:49:51', '2024-03-08 07:49:51'),
(117, 'Section 1 main tittle', 'section_1_main_tittle', '<span>Our Top</span> <br>                               <span>Services</span>', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(118, 'Section 2 main tittle', 'section_2_main_tittle', 'Accounting Software <br>That Handles it All.', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(119, 'Section 2 tittle 1', 'section_2_tittle_1', 'Generate, Manage, and Convert leads <br>into Customers. Automatically', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(120, 'Section 3 main tittle', 'section_3_main_tittle', 'Manage All your <br>Cards in one Place', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(121, 'Section 3 main desc', 'section_3_main_desc', 'Digital products are where it’s at! There are so many benefits to selling digital products. It’s easy to get started and they >br>can be extremely profitable', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(122, 'Section 4 main tittle', 'section_4_main_tittle', 'Track and Analyze <br> Sales in Real time', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(123, 'Section 4 main desc', 'section_4_main_desc', 'Centralize and simplify payments, and get comprehensive <br>insights on your financials softuch.!', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(124, 'Section 4 sub tittle 1', 'section_4_sub_tittle_1', 'No hidden fees.', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(125, 'Section 4 sub tittle 2', 'section_4_sub_tittle_2', '100% security. Guaranteed.', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(126, 'Section 4 sub tittle 3', 'section_4_sub_tittle_3', 'No training or maintenance needed', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(127, 'Section 5 main tittle', 'section_5_main_tittle', 'About Customer Stories', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(128, 'Section 1 main image', 'section_1_main_image', 'web_cms_images/breadcrumb-2.jpg_1709339064.jpg_1709902320.jpg', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(129, 'Section 2 bg image', 'section_2_bg_image', 'web_cms_images/service-3-bg.png_1709339064.png_1709902320.png', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(130, 'Section 3 bg image', 'section_3_bg_image', 'web_cms_images/card-bg.png_1709339153.png_1709902320.png', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(131, 'Section 3 image 1', 'section_3_image_1', 'web_cms_images/card-img-1.png_1709732761.png_1709902320.png', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(132, 'Section 3 image 2', 'section_3_image_2', 'web_cms_images/card-img-4.png_1709339154.png_1709902320.png', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(133, 'Section 4 main image', 'section_4_main_image', 'web_cms_images/sale-1.png_1709339154.png_1709902320.png', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(134, 'Section 4 sub image', 'section_4_sub_image', 'web_cms_images/sale-2.png_1709339153.png_1709902320.png', 'service', 1, 0, '2024-03-08 07:51:59', '2024-03-08 07:52:00'),
(135, 'Section 1 main tittle', 'section_1_main_tittle', '<span>Get In</span> <br> <span>Touch</span>', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(136, 'Section 2 tittle 1', 'section_2_tittle_1', 'Colombia', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(137, 'Section 2 decs 1', 'section_2_decs_1', 'Bogota D.C., Colombia, b. a 181C No. 930 Ap 202', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(138, 'Section 2 tittle 2', 'section_2_tittle_2', 'France', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(139, 'Section 2 decs 2', 'section_2_decs_2', '9 Pearse Street, Kinsale,Cork,P17 AH66, Ireland', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(140, 'Section 2 tittle 3', 'section_2_tittle_3', 'Egypt', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(141, 'Section 2 decs 3', 'section_2_decs_3', 'Av. Cordoba 1309, 3\'A, City of <br>                                 Buenos Aires, Egyp', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(142, 'Section 3 main tittle', 'section_3_main_tittle', 'We\'d love to <br>hear From  you.', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(143, 'Section 3 main desc', 'section_3_main_desc', 'While we\'re good with smoke signals,                                 there <br> are easier ways to get in touch.', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(144, 'Section 4 main tittle', 'section_4_main_tittle', 'Book a Demo!', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(145, 'Section 4 main desc', 'section_4_main_desc', 'While we\'re good with smoke signals, there are easier ways to get in touch.', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(146, 'Section 1 main image', 'section_1_main_image', 'web_cms_images/contact-banner.jpg_1709735262.jpg_1709902388.jpg', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(147, 'Section 2 image 1', 'section_2_image_1', 'web_cms_images/Colombia.png_1709551799.png_1709902388.png', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(148, 'Section 2 image 2', 'section_2_image_2', 'web_cms_images/Colombia2.png_1709551799.png_1709902388.png', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(149, 'Section 2 image 3', 'section_2_image_3', 'web_cms_images/Colombia3.png_1709551799.png_1709902388.png', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(150, 'Section 3 main image', 'section_3_main_image', 'web_cms_images/card-img-4.png_1709339154.png_1709902388.png', 'contact', 1, 0, '2024-03-08 07:53:08', '2024-03-08 07:53:08'),
(151, 'Logo-white', 'logo-white', 'web_cms_images/logo-white.png_1709159843.png_1709904202.png', 'logo-favicon', 1, 0, '2024-03-08 08:23:22', '2024-03-08 08:23:22'),
(152, 'Logo-black', 'logo-black', 'web_cms_images/logo-black.png_1709053064.png_1709904202.png', 'logo-favicon', 1, 0, '2024-03-08 08:23:22', '2024-03-08 08:23:22'),
(153, 'Favicon', 'favicon', 'web_cms_images/favicon.png_1709904202.png', 'logo-favicon', 1, 0, '2024-03-08 08:23:22', '2024-03-08 08:23:22'),
(154, 'Contact number', 'contact_number', '+806 (000) 88 99', 'config', 1, 0, '2024-03-08 08:28:14', '2024-03-08 08:28:14'),
(155, 'Email address', 'email_address', 'contact@info.com', 'config', 1, 0, '2024-03-08 08:28:14', '2024-03-08 08:28:14'),
(156, 'Address', 'address', '1811 Silverside Rd, Wilmington, DE <br> 19810, USA', 'config', 1, 0, '2024-03-08 08:28:14', '2024-03-08 08:28:14'),
(157, 'Facebook link', 'facebook_link', 'www.facebook.com', 'config', 1, 0, '2024-03-08 08:28:14', '2024-03-08 08:28:14'),
(158, 'Instagram link', 'instagram_link', 'instagram.com', 'config', 1, 0, '2024-03-08 08:28:14', '2024-03-08 08:28:14'),
(159, 'Youtube link', 'youtube_link', 'youtube.com', 'config', 1, 0, '2024-03-08 08:28:14', '2024-03-08 08:28:14'),
(160, 'Twitter link', 'twitter_link', 'twitter.com', 'config', 1, 0, '2024-03-08 08:28:14', '2024-03-08 08:28:14'),
(161, 'Tiktok link', 'tiktok_link', 'tiktok.com', 'config', 1, 0, '2024-03-08 08:28:14', '2024-03-08 08:28:14'),
(162, 'Copy right', 'copy_right', 'Full Copyright & Design By <a href=\"#\">@Theme pure</a> – 2023', 'config', 1, 0, '2024-03-08 08:28:14', '2024-03-08 08:28:14'),
(163, 'Section 1 main tittle', 'slug', 'The next generation payment ways.', 'contact', 1, 0, '2024-03-08 06:38:42', '2024-03-08 13:04:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_contacts`
--
ALTER TABLE `cms_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khata`
--
ALTER TABLE `khata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_services`
--
ALTER TABLE `our_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_faqs`
--
ALTER TABLE `services_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `web_cms`
--
ALTER TABLE `web_cms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cms_contacts`
--
ALTER TABLE `cms_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `khata`
--
ALTER TABLE `khata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_services`
--
ALTER TABLE `our_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `services_faqs`
--
ALTER TABLE `services_faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `web_cms`
--
ALTER TABLE `web_cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
