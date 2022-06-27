-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 11:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wavefinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `airbnb_rooms`
--

CREATE TABLE `airbnb_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` float DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `availability` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `airbnb_rooms`
--

INSERT INTO `airbnb_rooms` (`id`, `title`, `description`, `size`, `capacity`, `price`, `image`, `availability`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Asperiores exercitat', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 1400, 6, 100, '[\"airbnb-rooms\\\\June2022\\\\viyPaloIcpwOHJjAotUP.jpg\",\"airbnb-rooms\\\\June2022\\\\eDxzUIfNHrTLpIFG4JqO.jpg\"]', '1', 4, '2022-06-04 08:02:45', '2022-06-04 08:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Demo', '<p><strong style=\"margin: 0px; padding: 0px; color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'blogs\\May2022\\E2IPkLoZjGPPS69q4a7V.jpg', '2022-05-29 17:49:00', '2022-05-29 17:56:45'),
(2, 'Demo 2', '<p>Demo 2</p>', 'blogs\\May2022\\ivooodNAT3MaGeQcAL2J.jpg', '2022-05-29 17:52:24', '2022-05-29 17:52:24'),
(3, 'Demo 3', '<p>Demo 3</p>', 'blogs\\May2022\\JHYGKqmAr4yPFUjzO1qW.jpg', '2022-05-29 17:52:46', '2022-05-29 17:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `no_days` int(11) NOT NULL,
  `coupon_id` int(11) DEFAULT NULL,
  `price` float NOT NULL,
  `status` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `phone`, `check_in`, `check_out`, `no_days`, `coupon_id`, `price`, `status`, `user_id`, `created_at`, `updated_at`, `coupon`) VALUES
(1, '+8801709279556', '2022-06-02', '2022-06-03', 2, NULL, 55, '0', 4, '2022-05-31 20:55:32', '2022-05-31 20:55:32', NULL),
(2, '+1 (669) 719-4487', '2016-03-03', '1971-07-14', 3, NULL, 40, '0', 7, '2022-05-31 20:57:22', '2022-05-31 20:57:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(2, NULL, 1, 'Category 2', 'category-2', '2022-05-29 10:15:21', '2022-05-29 10:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `percentage` float NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `count`, `percentage`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '56274', NULL, 10, 5, '2022-05-31 20:53:55', '2022-05-31 20:53:55'),
(2, 'BQCB2', NULL, 5, 6, '2022-05-31 21:33:30', '2022-05-31 21:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 4),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 5),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 6),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 7),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 10),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 12),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 13),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 14),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 11),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'city', 'text', 'City', 0, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(59, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(63, 7, 'author_id', 'text', 'Author Id', 1, 0, 0, 0, 0, 0, '{}', 5),
(64, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(65, 8, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(66, 8, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(67, 8, 'address', 'text', 'Address', 1, 1, 1, 1, 1, 1, '{}', 4),
(68, 8, 'star', 'number', 'Star', 0, 1, 1, 1, 1, 1, '{}', 5),
(69, 8, 'roomQuantity', 'number', 'RoomQuantity', 0, 1, 1, 1, 1, 1, '{}', 6),
(70, 8, 'location_id', 'text', 'Location Id', 1, 1, 1, 1, 1, 1, '{}', 7),
(71, 8, 'user_id', 'text', 'User Id', 1, 0, 0, 0, 0, 0, '{}', 8),
(72, 8, 'image', 'multiple_images', 'Image', 0, 1, 1, 1, 1, 1, '{}', 9),
(73, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 10),
(74, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(75, 8, 'hotel_belongsto_location_relationship', 'relationship', 'locations', 1, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Location\",\"table\":\"locations\",\"type\":\"belongsTo\",\"column\":\"location_id\",\"key\":\"id\",\"label\":\"city\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 12),
(76, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(77, 9, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(78, 9, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(79, 9, 'capacity', 'number', 'Capacity', 1, 1, 1, 1, 1, 1, '{}', 4),
(80, 9, 'availability', 'checkbox', 'Availability', 0, 1, 1, 1, 1, 1, '{}', 5),
(82, 9, 'hotel_id', 'text', 'Hotel Id', 1, 1, 1, 1, 1, 1, '{}', 7),
(83, 9, 'user_id', 'text', 'User Id', 1, 0, 0, 0, 0, 0, '{}', 8),
(84, 9, 'image', 'multiple_images', 'Image', 0, 1, 1, 1, 1, 1, '{}', 9),
(85, 9, 'price', 'number', 'Price', 0, 1, 1, 1, 1, 1, '{}', 10),
(86, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 11),
(87, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 12),
(88, 9, 'room_belongsto_hotel_relationship', 'relationship', 'hotels', 1, 1, 1, 1, 1, 1, '{\"scope\":\"currentUser\",\"model\":\"App\\\\Hotel\",\"table\":\"hotels\",\"type\":\"belongsTo\",\"column\":\"hotel_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13),
(89, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(90, 10, 'room_id', 'text', 'Room Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(91, 10, 'check_in', 'date', 'Check In', 0, 1, 1, 1, 1, 1, '{}', 3),
(92, 10, 'check_out', 'date', 'Check Out', 0, 1, 1, 1, 1, 1, '{}', 4),
(93, 10, 'user_id', 'text', 'User Id', 0, 0, 0, 0, 0, 0, '{}', 5),
(94, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(95, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(96, 10, 'roomdate_belongsto_room_relationship', 'relationship', 'rooms', 1, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Room\",\"table\":\"rooms\",\"type\":\"belongsTo\",\"column\":\"room_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(97, 7, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 6),
(98, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(99, 11, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(100, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(101, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(102, 9, 'room_belongsto_type_relationship', 'relationship', 'types', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Type\",\"table\":\"types\",\"type\":\"belongsTo\",\"column\":\"type_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 14),
(103, 11, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 5),
(104, 9, 'type_id', 'text', 'Type Id', 1, 1, 1, 1, 1, 1, '{}', 12),
(105, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(106, 12, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(107, 12, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(108, 12, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 4),
(109, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(110, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(111, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(112, 13, 'code', 'text', 'Code', 0, 1, 1, 1, 1, 1, '{}', 2),
(113, 13, 'count', 'number', 'Count', 0, 1, 1, 1, 1, 1, '{}', 3),
(114, 13, 'percentage', 'number', 'Percentage', 1, 1, 1, 1, 1, 1, '{}', 4),
(115, 13, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 5),
(116, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(117, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(118, 13, 'coupon_belongsto_user_relationship', 'relationship', 'users', 1, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"blogs\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(119, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(120, 14, 'phone', 'text', 'Phone', 1, 1, 1, 1, 1, 1, '{}', 2),
(121, 14, 'check_in', 'date', 'Check In', 1, 1, 1, 1, 1, 1, '{}', 3),
(122, 14, 'check_out', 'date', 'Check Out', 1, 1, 1, 1, 1, 1, '{}', 4),
(123, 14, 'no_days', 'number', 'No Days', 1, 1, 1, 1, 1, 1, '{}', 5),
(124, 14, 'coupon_id', 'text', 'Coupon Id', 0, 1, 1, 1, 1, 1, '{}', 6),
(125, 14, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 7),
(126, 14, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{}', 8),
(127, 14, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 9),
(128, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 10),
(129, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(130, 14, 'booking_belongsto_user_relationship', 'relationship', 'users', 1, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"blogs\",\"pivot\":\"0\",\"taggable\":\"0\"}', 12),
(131, 14, 'booking_belongsto_coupon_relationship', 'relationship', 'coupons', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Coupon\",\"table\":\"coupons\",\"type\":\"belongsTo\",\"column\":\"coupon_id\",\"key\":\"id\",\"label\":\"code\",\"pivot_table\":\"blogs\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13),
(132, 14, 'coupon', 'text', 'Coupon', 0, 1, 1, 1, 1, 1, '{}', 12),
(133, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(134, 16, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(135, 16, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(136, 16, 'size', 'number', 'Size', 0, 1, 1, 1, 1, 1, '{}', 4),
(137, 16, 'capacity', 'number', 'Capacity', 0, 1, 1, 1, 1, 1, '{}', 5),
(138, 16, 'price', 'number', 'Price', 0, 1, 1, 1, 1, 1, '{}', 6),
(139, 16, 'image', 'multiple_images', 'Image', 0, 1, 1, 1, 1, 1, '{}', 7),
(140, 16, 'availability', 'checkbox', 'Availability', 0, 1, 1, 1, 1, 1, '{}', 8),
(141, 16, 'user_id', 'text', 'User Id', 0, 1, 1, 1, 1, 1, '{}', 9),
(142, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 10),
(143, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(144, 16, 'airbnb_room_belongsto_user_relationship', 'relationship', 'users', 1, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"airbnb_rooms\",\"pivot\":\"0\",\"taggable\":\"0\"}', 12),
(145, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 8),
(146, 1, 'cell_phone', 'number', 'Cell Phone', 0, 1, 1, 1, 1, 1, '{}', 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2022-05-29 10:15:20', '2022-06-24 13:06:35'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(7, 'locations', 'locations', 'Location', 'Locations', NULL, 'App\\Location', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"city\",\"order_direction\":\"asc\",\"default_search_key\":\"city\",\"scope\":null}', '2022-05-29 10:44:27', '2022-05-29 16:26:21'),
(8, 'hotels', 'hotels', 'Hotel', 'Hotels', NULL, 'App\\Hotel', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"name\",\"order_direction\":\"asc\",\"default_search_key\":\"name\",\"scope\":\"currentUser\"}', '2022-05-29 12:56:57', '2022-05-29 13:18:23'),
(9, 'rooms', 'rooms', 'Room', 'Rooms', NULL, 'App\\Room', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"asc\",\"default_search_key\":\"title\",\"scope\":\"currentUser\"}', '2022-05-29 13:05:09', '2022-05-31 21:24:53'),
(10, 'roomdates', 'roomdates', 'Roomdate', 'Roomdates', NULL, 'App\\Roomdate', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"room_id\",\"order_direction\":\"asc\",\"default_search_key\":\"room_id\",\"scope\":\"currentUser\"}', '2022-05-29 13:11:07', '2022-05-29 13:19:04'),
(11, 'types', 'types', 'Type', 'Types', NULL, 'App\\Type', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"asc\",\"default_search_key\":\"title\",\"scope\":null}', '2022-05-29 16:56:15', '2022-05-29 16:59:51'),
(12, 'blogs', 'blogs', 'Blog', 'Blogs', NULL, 'App\\Blog', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"asc\",\"default_search_key\":\"title\"}', '2022-05-29 17:48:38', '2022-05-29 17:48:38'),
(13, 'coupons', 'coupons', 'Coupon', 'Coupons', NULL, 'App\\Coupon', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"code\",\"order_direction\":\"asc\",\"default_search_key\":\"code\",\"scope\":null}', '2022-05-31 20:34:02', '2022-05-31 20:59:18'),
(14, 'bookings', 'bookings', 'Booking', 'Bookings', NULL, 'App\\Booking', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"id\",\"order_direction\":\"asc\",\"default_search_key\":\"phone\",\"scope\":null}', '2022-05-31 20:47:47', '2022-05-31 20:51:20'),
(15, 'airbnb_room', 'airbnb-room', 'Airbnb Room', 'Airbnb Rooms', NULL, 'App\\AirbnbRoom', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"title\",\"order_direction\":\"asc\",\"default_search_key\":\"title\"}', '2022-06-04 07:55:04', '2022-06-04 07:55:04'),
(16, 'airbnb_rooms', 'airbnb-rooms', 'Airbnb Room', 'Airbnb Rooms', NULL, 'App\\AirbnbRoom', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-06-04 07:56:48', '2022-06-04 08:01:12');

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
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` int(11) DEFAULT NULL,
  `roomQuantity` int(11) DEFAULT NULL,
  `location_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `description`, `address`, `star`, `roomQuantity`, `location_id`, `user_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Syed Salman Reza', '<p>fsfsfsdf</p>', '5th floor, House#1133, Khanermor, East Monipur, Mirpur-2, Dhaka', 5, 10, 1, 1, '[\"hotels\\\\May2022\\\\VrWkS2TWPND3NfEQgfYv.jpg\",\"hotels\\\\May2022\\\\pwxL7xwCKkPLctml7b5x.jpg\",\"hotels\\\\May2022\\\\JDEPkXlc76yDlKD1VPyW.jpg\",\"hotels\\\\May2022\\\\CanV7H1ksm9GmzuPipLJ.jpg\"]', '2022-05-29 13:01:37', '2022-05-29 13:01:37'),
(2, 'AAaaa', '<p>asdadasd</p>', '5th floor, House#1133, Khanermor, East Monipur, Mirpur-2, Dhaka', 5, 20, 1, 3, '[\"hotels\\\\May2022\\\\kdgChYdH4YHnX5PY3iYL.jpg\",\"hotels\\\\May2022\\\\g41e0kChlgEhqdYYXWyG.jpg\"]', '2022-05-29 13:20:16', '2022-05-29 13:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `city`, `created_at`, `updated_at`, `author_id`, `image`) VALUES
(1, 'London', '2022-05-29 12:45:00', '2022-05-29 16:26:36', 1, 'locations\\May2022\\4UY1tTLgKdTytl4RyRzD.jpg'),
(3, 'England', '2022-05-29 12:50:00', '2022-05-29 16:26:44', 3, 'locations\\May2022\\PvI84bC7puUWvPrwxydj.jpg'),
(4, 'Dhaka', '2022-06-10 03:57:15', '2022-06-10 03:57:15', 1, 'locations\\June2022\\Z2E3yKH64yx5f4OYbvn0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2022-05-29 10:15:20', '2022-05-29 10:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2022-05-29 10:15:20', '2022-05-29 10:15:20', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 11, '2022-05-29 10:15:20', '2022-06-10 03:46:56', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 9, '2022-05-29 10:15:20', '2022-06-10 03:46:56', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 10, '2022-05-29 10:15:20', '2022-06-10 03:46:56', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 15, '2022-05-29 10:15:20', '2022-06-10 03:46:56', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2022-05-29 10:15:20', '2022-05-30 08:07:40', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2022-05-29 10:15:20', '2022-05-30 08:07:40', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2022-05-29 10:15:20', '2022-05-30 08:07:40', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2022-05-29 10:15:20', '2022-05-30 08:07:40', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 16, '2022-05-29 10:15:20', '2022-06-10 03:46:56', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 14, '2022-05-29 10:15:21', '2022-06-10 03:46:56', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 12, '2022-05-29 10:15:21', '2022-06-10 03:46:56', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 13, '2022-05-29 10:15:21', '2022-06-10 03:46:56', 'voyager.pages.index', NULL),
(14, 1, 'Locations', '', '_self', 'voyager-location', '#000000', NULL, 2, '2022-05-29 10:44:27', '2022-05-30 08:10:36', 'voyager.locations.index', 'null'),
(15, 1, 'Hotels', '', '_self', 'voyager-company', '#000000', NULL, 3, '2022-05-29 12:56:57', '2022-05-30 08:11:52', 'voyager.hotels.index', 'null'),
(16, 1, 'Rooms', '', '_self', 'voyager-categories', '#000000', 21, 1, '2022-05-29 13:05:09', '2022-05-30 08:13:59', 'voyager.rooms.index', 'null'),
(17, 1, 'Roomdates', '', '_self', 'voyager-alarm-clock', '#000000', 21, 3, '2022-05-29 13:11:07', '2022-05-30 08:14:34', 'voyager.roomdates.index', 'null'),
(18, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2022-05-29 15:27:59', '2022-05-30 08:07:40', 'voyager.hooks', NULL),
(19, 1, 'Types', '', '_self', 'voyager-dot-3', '#000000', 21, 2, '2022-05-29 16:56:15', '2022-05-30 08:14:15', 'voyager.types.index', 'null'),
(20, 1, 'Blogs', '', '_self', 'voyager-file-text', '#000000', NULL, 6, '2022-05-29 17:48:38', '2022-06-10 03:49:34', 'voyager.blogs.index', 'null'),
(21, 1, 'Rooms', '', '_self', 'voyager-home', '#000000', NULL, 4, '2022-05-30 08:08:31', '2022-06-10 03:48:19', NULL, ''),
(22, 1, 'Coupons', '', '_self', 'voyager-gift', '#000000', NULL, 7, '2022-05-31 20:34:02', '2022-06-10 03:49:34', 'voyager.coupons.index', 'null'),
(23, 1, 'Bookings', '', '_self', 'voyager-wallet', '#000000', NULL, 8, '2022-05-31 20:47:47', '2022-06-10 03:49:34', 'voyager.bookings.index', 'null'),
(25, 1, 'Airbnb Rooms', '', '_self', 'voyager-treasure', '#000000', NULL, 5, '2022-06-04 07:56:48', '2022-06-10 03:48:19', 'voyager.airbnb-rooms.index', 'null');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2016_01_01_000000_create_pages_table', 2),
(26, '2016_01_01_000000_create_posts_table', 2),
(27, '2016_02_15_204651_create_categories_table', 2),
(28, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2022-05-29 10:15:21', '2022-05-29 10:15:21');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(2, 'browse_bread', NULL, '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(3, 'browse_database', NULL, '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(4, 'browse_media', NULL, '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(5, 'browse_compass', NULL, '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(6, 'browse_menus', 'menus', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(7, 'read_menus', 'menus', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(8, 'edit_menus', 'menus', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(9, 'add_menus', 'menus', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(10, 'delete_menus', 'menus', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(11, 'browse_roles', 'roles', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(12, 'read_roles', 'roles', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(13, 'edit_roles', 'roles', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(14, 'add_roles', 'roles', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(15, 'delete_roles', 'roles', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(16, 'browse_users', 'users', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(17, 'read_users', 'users', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(18, 'edit_users', 'users', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(19, 'add_users', 'users', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(20, 'delete_users', 'users', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(21, 'browse_settings', 'settings', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(22, 'read_settings', 'settings', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(23, 'edit_settings', 'settings', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(24, 'add_settings', 'settings', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(25, 'delete_settings', 'settings', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(26, 'browse_categories', 'categories', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(27, 'read_categories', 'categories', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(28, 'edit_categories', 'categories', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(29, 'add_categories', 'categories', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(30, 'delete_categories', 'categories', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(31, 'browse_posts', 'posts', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(32, 'read_posts', 'posts', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(33, 'edit_posts', 'posts', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(34, 'add_posts', 'posts', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(35, 'delete_posts', 'posts', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(36, 'browse_pages', 'pages', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(37, 'read_pages', 'pages', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(38, 'edit_pages', 'pages', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(39, 'add_pages', 'pages', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(40, 'delete_pages', 'pages', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(41, 'browse_locations', 'locations', '2022-05-29 10:44:27', '2022-05-29 10:44:27'),
(42, 'read_locations', 'locations', '2022-05-29 10:44:27', '2022-05-29 10:44:27'),
(43, 'edit_locations', 'locations', '2022-05-29 10:44:27', '2022-05-29 10:44:27'),
(44, 'add_locations', 'locations', '2022-05-29 10:44:27', '2022-05-29 10:44:27'),
(45, 'delete_locations', 'locations', '2022-05-29 10:44:27', '2022-05-29 10:44:27'),
(46, 'browse_hotels', 'hotels', '2022-05-29 12:56:57', '2022-05-29 12:56:57'),
(47, 'read_hotels', 'hotels', '2022-05-29 12:56:57', '2022-05-29 12:56:57'),
(48, 'edit_hotels', 'hotels', '2022-05-29 12:56:57', '2022-05-29 12:56:57'),
(49, 'add_hotels', 'hotels', '2022-05-29 12:56:57', '2022-05-29 12:56:57'),
(50, 'delete_hotels', 'hotels', '2022-05-29 12:56:57', '2022-05-29 12:56:57'),
(51, 'browse_rooms', 'rooms', '2022-05-29 13:05:09', '2022-05-29 13:05:09'),
(52, 'read_rooms', 'rooms', '2022-05-29 13:05:09', '2022-05-29 13:05:09'),
(53, 'edit_rooms', 'rooms', '2022-05-29 13:05:09', '2022-05-29 13:05:09'),
(54, 'add_rooms', 'rooms', '2022-05-29 13:05:09', '2022-05-29 13:05:09'),
(55, 'delete_rooms', 'rooms', '2022-05-29 13:05:09', '2022-05-29 13:05:09'),
(56, 'browse_roomdates', 'roomdates', '2022-05-29 13:11:07', '2022-05-29 13:11:07'),
(57, 'read_roomdates', 'roomdates', '2022-05-29 13:11:07', '2022-05-29 13:11:07'),
(58, 'edit_roomdates', 'roomdates', '2022-05-29 13:11:07', '2022-05-29 13:11:07'),
(59, 'add_roomdates', 'roomdates', '2022-05-29 13:11:07', '2022-05-29 13:11:07'),
(60, 'delete_roomdates', 'roomdates', '2022-05-29 13:11:07', '2022-05-29 13:11:07'),
(61, 'browse_hooks', NULL, '2022-05-29 15:27:59', '2022-05-29 15:27:59'),
(62, 'browse_types', 'types', '2022-05-29 16:56:15', '2022-05-29 16:56:15'),
(63, 'read_types', 'types', '2022-05-29 16:56:15', '2022-05-29 16:56:15'),
(64, 'edit_types', 'types', '2022-05-29 16:56:15', '2022-05-29 16:56:15'),
(65, 'add_types', 'types', '2022-05-29 16:56:15', '2022-05-29 16:56:15'),
(66, 'delete_types', 'types', '2022-05-29 16:56:15', '2022-05-29 16:56:15'),
(67, 'browse_blogs', 'blogs', '2022-05-29 17:48:38', '2022-05-29 17:48:38'),
(68, 'read_blogs', 'blogs', '2022-05-29 17:48:38', '2022-05-29 17:48:38'),
(69, 'edit_blogs', 'blogs', '2022-05-29 17:48:38', '2022-05-29 17:48:38'),
(70, 'add_blogs', 'blogs', '2022-05-29 17:48:38', '2022-05-29 17:48:38'),
(71, 'delete_blogs', 'blogs', '2022-05-29 17:48:38', '2022-05-29 17:48:38'),
(72, 'browse_coupons', 'coupons', '2022-05-31 20:34:02', '2022-05-31 20:34:02'),
(73, 'read_coupons', 'coupons', '2022-05-31 20:34:02', '2022-05-31 20:34:02'),
(74, 'edit_coupons', 'coupons', '2022-05-31 20:34:02', '2022-05-31 20:34:02'),
(75, 'add_coupons', 'coupons', '2022-05-31 20:34:02', '2022-05-31 20:34:02'),
(76, 'delete_coupons', 'coupons', '2022-05-31 20:34:02', '2022-05-31 20:34:02'),
(77, 'browse_bookings', 'bookings', '2022-05-31 20:47:47', '2022-05-31 20:47:47'),
(78, 'read_bookings', 'bookings', '2022-05-31 20:47:47', '2022-05-31 20:47:47'),
(79, 'edit_bookings', 'bookings', '2022-05-31 20:47:47', '2022-05-31 20:47:47'),
(80, 'add_bookings', 'bookings', '2022-05-31 20:47:47', '2022-05-31 20:47:47'),
(81, 'delete_bookings', 'bookings', '2022-05-31 20:47:47', '2022-05-31 20:47:47'),
(82, 'browse_airbnb_room', 'airbnb_room', '2022-06-04 07:55:04', '2022-06-04 07:55:04'),
(83, 'read_airbnb_room', 'airbnb_room', '2022-06-04 07:55:04', '2022-06-04 07:55:04'),
(84, 'edit_airbnb_room', 'airbnb_room', '2022-06-04 07:55:04', '2022-06-04 07:55:04'),
(85, 'add_airbnb_room', 'airbnb_room', '2022-06-04 07:55:04', '2022-06-04 07:55:04'),
(86, 'delete_airbnb_room', 'airbnb_room', '2022-06-04 07:55:04', '2022-06-04 07:55:04'),
(87, 'browse_airbnb_rooms', 'airbnb_rooms', '2022-06-04 07:56:48', '2022-06-04 07:56:48'),
(88, 'read_airbnb_rooms', 'airbnb_rooms', '2022-06-04 07:56:48', '2022-06-04 07:56:48'),
(89, 'edit_airbnb_rooms', 'airbnb_rooms', '2022-06-04 07:56:48', '2022-06-04 07:56:48'),
(90, 'add_airbnb_rooms', 'airbnb_rooms', '2022-06-04 07:56:48', '2022-06-04 07:56:48'),
(91, 'delete_airbnb_rooms', 'airbnb_rooms', '2022-06-04 07:56:48', '2022-06-04 07:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(1, 4),
(2, 1),
(3, 1),
(4, 1),
(4, 3),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(31, 4),
(32, 1),
(32, 4),
(33, 1),
(33, 4),
(34, 1),
(34, 4),
(35, 1),
(35, 4),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(41, 3),
(42, 1),
(42, 3),
(43, 1),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 3),
(47, 1),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(49, 3),
(50, 1),
(50, 3),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3),
(57, 1),
(57, 3),
(58, 1),
(58, 3),
(59, 1),
(59, 3),
(60, 1),
(60, 3),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(67, 4),
(68, 1),
(68, 4),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(72, 4),
(73, 1),
(73, 4),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1);

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
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(5, 1, 1, 'fsfasf', NULL, 'sdsfsafdds', '<p>sdfasfdsssdf</p>', NULL, 'fsfasf', NULL, NULL, 'PUBLISHED', 0, '2022-05-29 12:39:19', '2022-05-29 12:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(2, 'user', 'Normal User', '2022-05-29 10:15:20', '2022-05-29 10:15:20'),
(3, 'HotelOwner', 'Hotel Owner', '2022-05-29 13:15:48', '2022-05-29 13:15:48'),
(4, 'Agent', 'Agent', '2022-05-30 08:16:06', '2022-05-30 08:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `roomdates`
--

CREATE TABLE `roomdates` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roomdates`
--

INSERT INTO `roomdates` (`id`, `room_id`, `check_in`, `check_out`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 2, '2022-06-17', '2022-07-01', 1, '2022-05-29 13:19:00', '2022-06-15 13:46:17'),
(3, 3, '2022-06-16', '2022-07-07', 1, '2022-06-10 04:05:00', '2022-06-15 13:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` int(11) NOT NULL,
  `availability` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `description`, `capacity`, `availability`, `hotel_id`, `user_id`, `image`, `price`, `created_at`, `updated_at`, `type_id`) VALUES
(2, 'Single Room', '<p>dfadsfdasfasfas</p>', 4, '1', 2, 1, '[\"rooms\\\\May2022\\\\w9wPhC161rBuEm52n64W.jpg\",\"rooms\\\\May2022\\\\r1bYGOzrC9Mk9Tkow4GA.jpg\",\"rooms\\\\May2022\\\\QQH0QlXVKR2WIJfNZzNj.jpg\",\"rooms\\\\May2022\\\\P36mH61TFpzinvjmvgIl.jpg\"]', 40, '2022-05-29 17:06:04', '2022-05-29 17:06:04', 1),
(3, 'Incidunt nisi eum d', '<p>sdsfsfsfsd</p>', 3, '1', 1, 1, '[\"rooms\\\\June2022\\\\91aJVBIyFrfdENSdcJu7.jpg\"]', 85, '2022-05-31 21:35:08', '2022-05-31 21:35:08', 4);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Walkinroom', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Walkinroom', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Walkinroom', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `version` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theme_options`
--

CREATE TABLE `theme_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme_id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2022-05-29 10:15:21', '2022-05-29 10:15:21'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2022-05-29 10:15:21', '2022-05-29 10:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `title`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Single Room', '2022-05-29 16:58:00', '2022-05-29 17:00:21', 'types\\May2022\\UJYIz7dRvnfe1Ep9DYZz.jpg'),
(2, 'Double Room', '2022-05-29 16:58:00', '2022-05-29 17:00:37', 'types\\May2022\\7NzrtRMTbXFzSswfa8Dv.jpg'),
(3, 'Apartment', '2022-05-29 16:59:00', '2022-05-29 17:00:51', 'types\\May2022\\aokGou963PaYqTgyz4Dz.jpg'),
(4, 'Resorts', '2022-05-29 16:59:00', '2022-05-29 17:01:03', 'types\\May2022\\4SSQBkOBvuAK36Ni7p8y.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cell_phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `cell_phone`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$Xy9Lh9O.69fsSnO3.D2Wb.SAva7u9.1V6nvaw097nSBPGIYDaAs3q', '8psfGDepXRWo9SdInz3IcECDbR9MJGqUcR5S6KSBdau9TmzPUDOlgpEFjMGd', '{\"locale\":\"en\"}', '2022-05-29 10:15:21', '2022-06-24 13:16:17', 1709279555),
(3, 3, 'Salman', 'syedsalmanreza1998@gmail.com', 'users/default.png', NULL, '$2y$10$en0lMYWFYpqu9v9OHwBFs.Wo6d6FTXm6fhHzl6ydpt13FdJlWwUYi', NULL, '{\"locale\":\"en\"}', '2022-05-29 12:49:11', '2022-05-29 13:16:12', NULL),
(4, 2, 'Syed Salman Reza', 'syedsalmanreza8@gmail.com', 'users/default.png', NULL, '$2y$10$BM3vsPe2lA/jWWGOkhh7HOw3aq/jZWCYTF9RizxyufXm36k7jfsmC', NULL, '{\"locale\":\"en\"}', '2022-05-29 14:29:26', '2022-05-29 14:30:33', NULL),
(5, 4, 'Ignacia Burgess', 'mamyvopob@mailinator.com', 'users/default.png', NULL, '$2y$10$h/fn/ddXule7FUNhli.PG.AzxvKZVu79fcSq5BKOEIrINjJ3nX5WG', NULL, '{\"locale\":\"en\"}', '2022-05-31 20:39:56', '2022-05-31 20:39:56', NULL),
(6, 4, 'Quinlan Malone', 'lelulywi@mailinator.com', 'users/default.png', NULL, '$2y$10$c0Fd/xb/8CEiAZ5he7dtTeumnTmX.M3aHFs42l6dcIg0G9zXP1mQO', NULL, '{\"locale\":\"en\"}', '2022-05-31 20:53:35', '2022-05-31 20:53:35', NULL),
(7, 2, 'Sylvia Hull', 'nor@mailinator.com', 'users/default.png', NULL, '$2y$10$Qq6DMPobEF63B45ujhr.QeI6XnBb3zmUaM8DjY.rxOuVF7Q//7.QS', NULL, '{\"locale\":\"en\"}', '2022-05-31 20:56:44', '2022-05-31 20:56:44', NULL),
(8, 3, 'Hotel', 'hotel@hotel.com', 'users/default.png', NULL, '$2y$10$ZlDDi1Ss9cNYV5rXo/S4tucDfm11vwZkM8TbTHRlYsGcoFYRxZmpu', NULL, '{\"locale\":\"en\"}', '2022-06-10 04:14:29', '2022-06-10 04:14:29', NULL),
(9, 1, 'Salman Rezaa', 'syed@gmail.com', 'users/default.png', NULL, '$2y$10$nuZ0ZepCqnMI7Qz9XcE3t.8XLs7vYgSlHiFnIOw4gT/B3hx9UwSoO', NULL, '{\"locale\":\"en\"}', '2022-06-24 13:15:39', '2022-06-24 13:15:39', 1709279556);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(8, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airbnb_rooms`
--
ALTER TABLE `airbnb_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hotels_name_unique` (`name`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `locations_city_unique` (`city`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `roomdates`
--
ALTER TABLE `roomdates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `themes_folder_unique` (`folder`);

--
-- Indexes for table `theme_options`
--
ALTER TABLE `theme_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme_options_theme_id_index` (`theme_id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types_title_unique` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_cell_phone_unique` (`cell_phone`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airbnb_rooms`
--
ALTER TABLE `airbnb_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roomdates`
--
ALTER TABLE `roomdates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theme_options`
--
ALTER TABLE `theme_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `theme_options`
--
ALTER TABLE `theme_options`
  ADD CONSTRAINT `theme_options_theme_id_foreign` FOREIGN KEY (`theme_id`) REFERENCES `themes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
