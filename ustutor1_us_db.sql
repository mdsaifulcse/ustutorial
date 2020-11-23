-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2020 at 10:08 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ustutor1_us_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_companies`
--

CREATE TABLE `about_companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ban` varchar(700) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_ban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ban` longtext COLLATE utf8mb4_unicode_ci,
  `short_description_ban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision_ban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_us` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `vision` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_companies`
--

INSERT INTO `about_companies` (`id`, `title`, `short_description`, `image`, `title_ban`, `mission_ban`, `description_ban`, `short_description_ban`, `vision_ban`, `why_us`, `description`, `vision`, `mission`, `created_at`, `updated_at`) VALUES
(1, 'BCIC COLLEGE', '<p>\r\n\r\n</p><p></p>\r\n\r\nBCIC College started its journey in 1983 with the slogan “Education for Humanization”. The motto of this institution is to make the students worthy citizens and able leaders to serve the country and the world community. Besides, academic programs, we do duly emphasize on curricular and co-curricular activities to explore their hidden talents. Our efforts are also directed to ensure their sound state of mind and body.<div>\r\n\r\nIt really gives me immense pleasure to learn that the students of BCIC College are groomed with digital contents and well acquainted with the ICT devices to face the challenges of the 21st century. I wish BCIC College will keep up its tempo of excellence in the years to come.\r\n\r\n<br>&nbsp;\r\n\r\n<p></p>\r\n\r\n<br><p></p>                                </div>', 'images/about/about.jpg', 'বি সি আই সি কলেজ', '<p>বিসিআইসি কলেজ ঢাকা পৃথক পৃথক প্রতিষ্ঠান হিসেবে জুলাই 1991 সালে আসছে। সময় থেকে প্রাচীনতম শিক্ষা বর্তমান উত্থিত সভ্যতার প্রধান অনুঘটক হিসাবে গণ্য করা হয়েছে। কিন্তু বিদ্যমান শিক্ষা ব্যবস্থায় বাণিজ্যিক উদ্দেশ্য এবং ব্যবহারিক শিক্ষার অভাব, আমাদের মোট সামাজিক ব্যবস্থা অন্ধকারে আটকে আছে। এটি মনে রেখে বাংলাদেশ কেমিক্যাল ইন্ডাস্ট্রিজ কর্পোরেশন এই প্রতিষ্ঠানটিকে অন্ধকার থেকে একটি ধাপের পাথর হিসাবে প্রতিষ্ঠা করেছে, এই প্রতিষ্ঠানটি মিরপুর বোটানিকাল গার্ডেন এবং ঢাকা ন্যাশনাল চিড়িয়াখানায় অবস্থিত 6২6 একর জমিতে আরামদায়ক এবং ঠাণ্ডা পরিবেশের আওতায় অবস্থিত।<br></p>', '<p>বিসিআইসি কলেজ ঢাকা পৃথক পৃথক প্রতিষ্ঠান হিসেবে জুলাই 1991 সালে আসছে। সময় থেকে প্রাচীনতম শিক্ষা বর্তমান উত্থিত সভ্যতার প্রধান অনুঘটক হিসাবে গণ্য করা হয়েছে। কিন্তু বিদ্যমান শিক্ষা ব্যবস্থায় বাণিজ্যিক উদ্দেশ্য এবং ব্যবহারিক শিক্ষার অভাব, আমাদের মোট সামাজিক ব্যবস্থা অন্ধকারে আটকে আছে। এটি মনে রেখে বাংলাদেশ কেমিক্যাল ইন্ডাস্ট্রিজ কর্পোরেশন এই প্রতিষ্ঠানটিকে অন্ধকার থেকে একটি ধাপের পাথর হিসাবে প্রতিষ্ঠা করেছে, এই প্রতিষ্ঠানটি মিরপুর বোটানিকাল গার্ডেন এবং ঢাকা ন্যাশনাল চিড়িয়াখানায় অবস্থিত 6২6 একর জমিতে আরামদায়ক এবং ঠাণ্ডা পরিবেশের আওতায় অবস্থিত।<br></p>', '<p>বিসিআইসি কলেজ ঢাকা পৃথক পৃথক প্রতিষ্ঠান হিসেবে জুলাই 1991 সালে আসছে। সময় থেকে প্রাচীনতম শিক্ষা বর্তমান উত্থিত সভ্যতার প্রধান অনুঘটক হিসাবে গণ্য করা হয়েছে। কিন্তু বিদ্যমান শিক্ষা ব্যবস্থায় বাণিজ্যিক উদ্দেশ্য এবং ব্যবহারিক শিক্ষার অভাব, আমাদের মোট সামাজিক ব্যবস্থা অন্ধকারে আটকে আছে। এটি মনে রেখে বাংলাদেশ কেমিক্যাল ইন্ডাস্ট্রিজ কর্পোরেশন এই প্রতিষ্ঠানটিকে অন্ধকার থেকে একটি ধাপের পাথর হিসাবে প্রতিষ্ঠা করেছে, এই প্রতিষ্ঠানটি মিরপুর বোটানিকাল গার্ডেন এবং ঢাকা ন্যাশনাল চিড়িয়াখানায় অবস্থিত 6২6 একর জমিতে আরামদায়ক এবং ঠাণ্ডা পরিবেশের আওতায় অবস্থিত।<br></p>', '<p>বিসিআইসি কলেজ ঢাকা পৃথক পৃথক প্রতিষ্ঠান হিসেবে জুলাই 1991 সালে আসছে। সময় থেকে প্রাচীনতম শিক্ষা বর্তমান উত্থিত সভ্যতার প্রধান অনুঘটক হিসাবে গণ্য করা হয়েছে। কিন্তু বিদ্যমান শিক্ষা ব্যবস্থায় বাণিজ্যিক উদ্দেশ্য এবং ব্যবহারিক শিক্ষার অভাব, আমাদের মোট সামাজিক ব্যবস্থা অন্ধকারে আটকে আছে। এটি মনে রেখে বাংলাদেশ কেমিক্যাল ইন্ডাস্ট্রিজ কর্পোরেশন এই প্রতিষ্ঠানটিকে অন্ধকার থেকে একটি ধাপের পাথর হিসাবে প্রতিষ্ঠা করেছে, এই প্রতিষ্ঠানটি মিরপুর বোটানিকাল গার্ডেন এবং ঢাকা ন্যাশনাল চিড়িয়াখানায় অবস্থিত 6২6 একর জমিতে আরামদায়ক এবং ঠাণ্ডা পরিবেশের আওতায় অবস্থিত।<br></p>', NULL, '<p>\r\n\r\n\r\n\r\nBCIC College started its journey in 1983 with the slogan “Education for Humanization”. The motto of this institution is to make the students worthy citizens and able leaders to serve the country and the world community. Besides, academic programs, we do duly emphasize on curricular and co-curricular activities to explore their hidden talents. Our efforts are also directed to ensure their sound state of mind and body.\r\n\r\n\r\n<br></p><p>\r\n\r\nIt really gives me immense pleasure to learn that the students of BCIC College are groomed with digital contents and well acquainted with the ICT devices to face the challenges of the 21st century. I wish BCIC College will keep up its tempo of excellence in the years to come.\r\n\r\n<br></p>', '<p>\r\n\r\n\r\n\r\nBCIC College Dhaka came into being in July 1991 as a separate institution. From time immemorial education has been regarded as the main catalyst of the present flourished civilization. But in the existing education system commercial purpose and lack of pragmatic education, our total social system is gripping in the darkness. Keeping it in mind Bangladesh Chemical Industries Corporation has established this institution as a stepping stone from the darkness, This institution is situated in the lap of Mirpur Botanical Garden and Dhaka National Zoo covering 6.16 Acres of land with congenial and fasciuating atmosphere.\r\n\r\n\r\n<br></p>', '<p>\r\n\r\n\r\n\r\nThe College authority has always been keen to keep all kinds of developing activities continued. With the flow of development, the college has been constructed as a three-storied building and the facilities of laboratory rooms, students´ common rooms and the library room have been increased. From the beginning of the session there is an access for all students to cultural and sports competitions in keeping with regular class lessons on pre-arranged schedule such as general knowledge, science exhibition, recitation, music, painting, spelling, extempore speech, essay writing, debating, wall magazine, football, cricket, badminton, hand ball, volley ball, and so on.\r\n\r\n\r\n<br></p>', NULL, '2019-04-02 02:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci,
  `contact` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `name`, `branch_id`, `address`, `details`, `contact`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Farmgate', 11, '27, Koumudi Market (3rd Floor), Indira Road, Farmgate, Dhaka.', '', '01701665540, 01701665550', 1, '2019-05-16 09:23:01', NULL),
(2, 'Nilkhet', 12, 'Jessore Jela Shomiti Building (5th Floor) - beside New Market Police Station, Nilkhet, Dhaka', '', '01701665541, 01701665551', 1, '2019-05-16 09:24:22', NULL),
(3, 'Mouchak', 13, '240, Outher Circular Road (Above Pubali Bank – opposite to Mouchak market), Dhaka', '', '01701665552', 1, '2019-05-16 09:26:20', NULL),
(4, 'Malibagh', 14, 'Genex Garden, 260/1, Malibagh Mor, Malibagh, Dhaka', '', '01701665542', 1, '2019-05-16 09:30:31', NULL),
(5, 'Uttara', 15, 'Rafa Tower (Lift – 6) East side of House Building Foot-over bridge, Uttara, Dhaka', NULL, '01701665554', 1, '2019-07-23 03:59:50', NULL),
(6, 'Mirpur-10', 16, 'Samad Mansion (2nd Floor), Folpotti Moshjid Goli, Mirpur-10 Circle, Dhaka', NULL, '01701665549\r\n01701665556\r\n', 1, '2019-07-23 04:00:05', NULL),
(7, 'Mirpur–1', 17, 'Mukto Bangla Market (5th Floor), Mirpur-1, Dhaka', NULL, '01701665557', 1, '2019-07-23 04:00:18', NULL),
(8, 'Faridpur', 18, 'Shopnochura, Onather Mor, Jhiltuli, Faridpur', NULL, '01701665558', 1, '2019-07-23 04:00:45', NULL),
(9, 'Mymensingh', 19, 'Notun Bazar, Nilu Plaza (4th floor) - Above Spark Gear, Mymensingh', NULL, '01701665559', 1, '2019-07-23 04:00:57', NULL),
(10, 'Sylhet', 20, 'Point View Shopping Center (4th floor), Amberkhana, Sylhet', NULL, '01701665561', 1, '2019-07-23 04:01:09', NULL),
(11, 'Rangpur', 21, 'Lalbagh (East to Bagh chottor – 3rd floor), Rangpur', NULL, '01701665564', 1, '2019-07-23 04:01:22', NULL),
(12, 'Khulna', 22, 'Shaj Shopping Complex (2nd Floor) Bayra Bazar (Bus Stand), Main Road, Bayra, Khulna', NULL, '01701665565', 1, '2019-07-23 04:01:33', NULL),
(13, 'Chittagong ', 23, '245, Boshor Market (4th Floor), Kapasgola Road, Chak Bazar, Chittagong', NULL, '01701665567', 1, '2019-07-23 04:01:45', NULL),
(14, 'Rajshahi', 24, 'Grameenphone Building (5th Floor), Alupotti, Ghoramara, Boalia, Rajshahi', NULL, '01701665568', 1, '2019-07-23 04:01:55', NULL),
(15, 'Barisal', 25, 'Dutch Bangla Bank building (2nd Floor) - Opposite to BM College Mashjid gate, Barisal', NULL, '01701665590', 1, '2019-07-23 04:02:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_num` tinyint(4) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `icon_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_class` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=Business, 2=Product',
  `post_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=Normal, 2=Special',
  `ad_view_type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_name_bn`, `serial_num`, `short_description`, `description`, `icon_photo`, `icon_class`, `link`, `type`, `post_type`, `ad_view_type`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'QA Engineering (regular course)', NULL, 1, NULL, NULL, NULL, NULL, 'qa-engineering-(regular-course)', 1, 1, 1, 1, 1, 1, '2020-02-20 12:52:56', '2020-02-20 13:01:56'),
(2, 'QA Engineering (Boot camp)', NULL, 2, NULL, NULL, NULL, NULL, 'qa-engineering-(boot-camp)', 1, 1, 1, 1, 1, 1, '2020-02-20 13:02:11', '2020-02-20 13:05:50'),
(3, 'Development', NULL, 3, NULL, NULL, NULL, NULL, 'development', 1, 1, 1, 1, 1, NULL, '2020-02-20 13:02:43', '2020-02-20 13:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `sub_category_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date DEFAULT NULL,
  `overview` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `curriculum` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `program_structure` text COLLATE utf8mb4_unicode_ci,
  `instructor` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `course_duration` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eligibility` text COLLATE utf8mb4_unicode_ci,
  `price` int(8) UNSIGNED DEFAULT NULL,
  `discount` int(8) UNSIGNED DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_small` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `serial` tinyint(3) DEFAULT NULL,
  `show_at_home` tinyint(1) UNSIGNED DEFAULT '0' COMMENT '0=Not show at  home, 1=Show at home',
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `sub_category_id`, `name`, `start_date`, `overview`, `curriculum`, `program_structure`, `instructor`, `course_duration`, `eligibility`, `price`, `discount`, `image`, `image_small`, `status`, `serial`, `show_at_home`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, 'STATE TEST PREP', '2020-11-30', 'Through our hands-on tutorial programs, our students are achieving mastery in both mathematics and English Language Arts (ELA).', 'There are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some', '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', 'null', NULL, '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', NULL, NULL, 'images/course/2020/06/18/state-test-prep-sl-118-06-202001-41-46.jpg', 'images/course-small/2020/06/18/state-test-prep-sl-118-06-202001-41-46.jpg', 1, 1, 1, 1, 3, '2020-02-20 17:24:56', '2020-06-23 18:44:33'),
(3, 2, 6, 'SHSAT PREP', '2020-11-30', 'Our SHSAT Test Prep program provides the most up-to-date content to help a student to succeed in the Specialized High Schools Admission Test (SHSAT).', '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', 'null', '6 Months', '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', NULL, NULL, 'images/course/2020/06/18/shsat-prep-sl-218-06-202001-42-13.jpg', 'images/course-small/2020/06/18/shsat-prep-sl-218-06-202001-42-14.jpg', 1, 2, 1, 1, 3, '2020-02-20 17:27:29', '2020-06-23 18:46:09'),
(4, 3, 26, 'COMMON CORE PROGRAM', '1970-01-01', 'Rigorous and fully aligned materials with the Common Core Standard to increase CONFIDENCE and GRADE of your child as well as STATE TEST preparation.', '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', 'null', '26 Weeks', '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', NULL, NULL, 'images/course/2020/06/18/common-core-prep-sl-418-06-202001-43-29.jpg', 'images/course-small/2020/06/18/common-core-prep-sl-418-06-202001-43-29.jpg', 1, 4, 0, 1, 3, '2020-02-20 17:29:22', '2020-06-23 19:06:54'),
(5, 3, 96, 'COMING SOON.......', '2021-01-01', NULL, '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', 'null', '96 Class', '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', NULL, NULL, 'images/course/2020/06/18/regenet-test-sl-518-06-202001-44-05.jpg', 'images/course-small/2020/06/18/regenet-test-sl-518-06-202001-44-05.jpg', 1, 5, 0, 1, 3, '2020-02-20 17:30:25', '2020-06-23 19:07:48'),
(6, 3, 8, 'HOMEWORK HELP', '2020-11-30', 'Building strong foundations and providing help to the student to get up to the speed in the subjects they need help with.', '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', 'null', '8 Weeks', '<p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p><p>\r\n\r\nThere are many varians of sages of Lorem Ipsum available, but the mrity have suffered alteration in soe orm, by injected humour,There are many buthe mri have suffered alteration in some\r\n\r\n<br></p>', NULL, NULL, 'images/course/2020/06/18/homework-help-sl-318-06-202001-42-37.jpg', 'images/course-small/2020/06/18/homework-help-sl-318-06-202001-42-37.jpg', 1, 3, 1, 1, 3, '2020-02-20 17:31:53', '2020-06-23 18:55:56'),
(9, 0, NULL, 'COMING SOON.......', '2021-01-01', NULL, NULL, NULL, 'null', NULL, NULL, NULL, NULL, 'images/course/2020/06/18/sat-prep-sl-618-06-202001-44-34.jpg', 'images/course-small/2020/06/18/sat-prep-sl-618-06-202001-44-35.jpg', 1, 6, 0, 3, 3, '2020-06-16 16:32:04', '2020-06-23 19:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_type` tinyint(3) UNSIGNED NOT NULL COMMENT '1=overview, 2=curriculum, 3=features,4=Faqs',
  `serial` tinyint(3) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`id`, `course_id`, `title`, `details`, `photo`, `detail_type`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'Bringing the Students up to speed', '<div>This program helps the student catch up with the basics of the topics that they are struggling with. We understand that every student\'s study techniques can be different, so we work closely with them to make sure that they are touching up on all important concepts or materials.<div></div></div>', NULL, 1, 1, 1, NULL, '2020-06-24 13:56:43'),
(4, 9, 'Welcome to Bangla Food!', '<p>This course will teach you about cooking Bangla Food</p>', NULL, 1, 1, 1, '2020-06-16 16:37:05', '2020-06-16 16:37:05'),
(5, 9, 'Welcome back to Bangla Food.', '<p>There is no end to excellence.</p>', NULL, 1, 2, 1, '2020-06-16 16:38:20', '2020-06-16 16:38:20'),
(6, 4, 'Overview Element 1', '<p>Description&nbsp;</p>', NULL, 1, 1, 1, '2020-06-17 18:03:48', '2020-06-17 18:03:48'),
(7, 4, 'sss', '<p>aaaaa</p>', NULL, 1, 2, 1, '2020-06-17 18:04:06', '2020-06-17 18:04:06'),
(8, 3, 'Topic-wise exploration of the SHSAT', '<p>Our SHSAT prep educators are trained to tackle every relevant topic to its very core, and steadily work back up to higher levels. This bottom-up approach is essential in boosting the confidence of weaker students, and encouraging them to reach higher potentials.<br><br>\r\n\r\nUS Tutorial\'s content management staff constantly cross-check the program\'s libraries, making sure that they adhere effectively to the latest versions of the SHSAT.<br><br>The practice tests closely simulate the environment of the real thing- so that the student learns both theoretical and practical skills to ace the exam up front. \r\n\r\n<br></p>', NULL, 1, 1, 1, '2020-06-18 17:01:34', '2020-06-24 13:34:28'),
(11, 3, 'Guided solutions to each problem', 'Each full-length practice test comes with with detailed answer explanations for every question, leaving zero room for confusion.<p></p>', NULL, 2, 4, 1, '2020-06-18 17:36:16', '2020-06-18 17:38:57'),
(12, 3, 'Q: Who can attend US Tutorials SHSAT Prep program?', '<p>\r\n\r\n<b></b></p><p><b>A: Students who are planning to take SHSAT can attend our SHSAT Prep program.&nbsp;\r\n\r\n<b>Students in grades eight or nine who want to enroll in one of New York City’s specialized high schools must take this test. </b>\r\n\r\n</b></p><br>\r\n\r\n<br><p></p>', NULL, 4, 7, 1, '2020-06-18 17:50:14', '2020-06-18 17:56:37'),
(13, 3, 'Q: What is in US Tutorials SHSAT Prep Program?', '<p>\r\n\r\n<b>A: In our, SHSAT Prep Program offers all the guidance a student needs to excel on the test. All content is up-to-date for the most recent test changes, updated math and reading comprehension, proven score-raising strategies with an emphasis on improving math and verbal skills. </b>\r\n\r\n<br></p>', NULL, 4, 6, 1, '2020-06-18 17:50:34', '2020-06-18 17:55:48'),
(14, 3, 'Q: What is the SHSAT?', '<p>\r\n\r\n<b>A: The Specialized High School Admissions Test (SHSAT) is a test used in New York City to determine which students will be accepted to specialized high schools. SHSAT is the only criterion for admissions to 8 of the 9 New York City Specialized High School. </b>\r\n\r\n<br></p>', NULL, 4, 5, 1, '2020-06-18 17:55:34', '2020-06-18 17:55:34'),
(15, 3, 'Q: When is the actual test given?', '<p>\r\n\r\n<b></b></p><p><b>A: Registration begins in early September. Students should contact their school counselors to register.</b></p><br>\r\n\r\n<br><p></p>', NULL, 4, 8, 1, '2020-06-18 17:57:04', '2020-06-18 17:57:04'),
(16, 3, 'Q: What is on the test?', '<p>\r\n\r\n<b>A: The SHSAT assesses knowledge and skills. These skills consist of the ability to comprehend English prose, to demonstrate an understanding of revising and editing skills central to writing in English, and to use problem-solving skills in mathematics. The test measures knowledge and skills students have gained throughout their education.</b></p>', NULL, 4, 9, 1, '2020-06-18 17:57:41', '2020-06-18 17:57:41'),
(17, 3, 'Q: How many Specialized High School are in New York City?', '<p>\r\n\r\n<b></b><b>A: There are a total of 9 Specialized High Schools in New York City. They are:</b><br>-Bronx High School of Science<br>-Brooklyn Latin School<br>-Brooklyn Technical High School<br>-Fiorello H. LaGuardia High School of Music &amp; Art and Performing Art<br>-High School for Math, Science &amp; Engineering at City College<br>-High school of American Studies at Lehman College<br>-Queens High School for the Sciences at York College<br>-Staten Island Technical High School<br>-Stuyvesant High School.</p>', NULL, 4, 10, 1, '2020-06-18 17:58:54', '2020-06-18 18:01:03'),
(18, 2, 'Mastery of grade-level Math and English', 'Through our hands-on tutorial programs, our students are achieving mastery in both mathematics and English Language Arts (ELA).\r\nAnalyzing previous year\'s test questionnaires, pattern, and State standard guidelines we have tailored state of art curriculum for our students to score highest in the State Test exams.', NULL, 1, 1, 1, '2020-06-18 18:08:26', '2020-06-18 18:08:26'),
(19, 2, 'Key Components', '<p>\r\n\r\n<b>Key components of our curriculum include:<br></b>-Skill-building exercises<br>- Practice tests<br>- Answer keys with detailed explanations<br>- Test prep tips <b><br></b>These elements, among others, are essential building blocks in ensuring that the students approach the tests with ample confidence.\r\n<b></b>\r\n<br><br>\r\n\r\n<b>Our curriculum focuses on the core skills </b>needed to help our students prepare for success on the New York State Test. We walk our students through practice tests in a format and content of the type of math and ELA problems they will face on the official test including multiple-choice, short response, and extended response questions.\r\n\r\n<br></p>', NULL, 2, 2, 1, '2020-06-18 18:13:34', '2020-06-24 13:31:29'),
(21, 2, 'Q: Who can attend US Tutorials State Test Prep Program?', '<p>\r\n\r\n<b></b></p><p><b>A: Any student from grade 3-8 who wants to excel on the State Test can attend this program.</b></p><p></p>', NULL, 4, 4, 1, '2020-06-18 18:18:48', '2020-06-18 18:20:46'),
(22, 2, 'Q: What is the New York State test?', '<p>\r\n\r\n<b></b></p><p><b>A: State test evaluates whether a child has mastered the skills that he or she should have for a specific grade level. It measures the extent to which students are on track to graduate high school, and are college and career ready. Students in grades 3–8 take this test each spring.</b></p><p></p>', NULL, 4, 5, 1, '2020-06-18 18:20:32', '2020-06-18 18:20:39'),
(23, 2, 'Q: What is the New York State English Language Arts (ELA) test?', '<p>\r\n\r\n<b>A: The ELA test is an untimed test that contains several different kinds of questions. Students answer multiple-choice questions based on short passages they read and write responses to open-ended questions based on stories, articles, or poems they listen to or read.</b>\r\n\r\n<br></p>', NULL, 4, 6, 1, '2020-06-18 18:21:18', '2020-06-18 18:21:18'),
(24, 2, 'Q: What is the New York State Math Test?', '<p>\r\n\r\n<b>A: The math test is an untimed test that contains several different types of math problems. Students answer multiple-choice and open-ended questions.</b>\r\n\r\n<br></p>', NULL, 4, 7, 1, '2020-06-18 18:21:41', '2020-06-18 18:21:41'),
(25, 2, 'Q: What is the NY State Science Test?', '<p>\r\n\r\n<b>A: Students in grade four, and most students in grade eight, take the State Assessment in Science to determine how well they have learned the New York State Learning Standards.</b>\r\n\r\n<br></p>', NULL, 4, 8, 1, '2020-06-18 18:21:53', '2020-06-18 18:21:53'),
(26, 6, 'Solving confusions, breaking frustrations.', '<p>The Homework Help Program helps tackle the frustrating and confusing problems, and helps foster self-sufficiency and independent learning skills in all grade levels. Our professional tutors help them prioritize and plan homework time and complete assignments.</p>', NULL, 2, 2, 1, '2020-06-24 14:02:32', '2020-06-24 14:02:32'),
(27, 6, 'Q: How does the Homework Help program help a child?', '<p>With our Homework help program, the child will lower their frustration, boost comprehension, and learn how to apply new skills. And this will lead to higher scores and better performance in class.<br></p>', NULL, 4, 3, 1, '2020-06-24 14:03:13', '2020-06-24 14:03:13'),
(28, 6, 'Q: Who can attend US Tutorials Homework Help program?', '<p>A: students from 1 st grade to 8 grades who need extra help on their daily homework can attend this program.<br></p>', NULL, 4, 4, 1, '2020-06-24 14:03:51', '2020-06-24 14:03:51'),
(29, 6, 'Q: What is in the US Tutorials Homework Help program?', '<p>A: In our Homework Help program our approach is to get the student up to speed in the subjects they need help with. Providing this solid foundation we ensure the student is not missing any important concepts or material that affects their ability to learn future lessons.<br></p>', NULL, 4, 5, 1, '2020-06-24 14:04:25', '2020-06-24 14:04:25'),
(30, 6, 'Q: What subjects are included in the Homework Help program?', '<p>A: English Language Art (ELA), Math, and Science are included in the Homework Help program.<br></p>', NULL, 4, 6, 1, '2020-06-24 14:04:44', '2020-06-24 14:04:44'),
(31, 6, 'Q: How long is this Homework Help program?', '<p>A: This program is designed as a month to month basis. So it will continue as long as the student wants to continue with it.<br></p>', NULL, 4, 7, 1, '2020-06-24 14:04:59', '2020-06-24 14:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `demo_classes`
--

CREATE TABLE `demo_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demo_classes`
--

INSERT INTO `demo_classes` (`id`, `name`, `email`, `phone`, `course_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'sayed', 'isayed.us@gmail.com', '2122039863', 2, NULL, '2020-06-15 01:00:46', '2020-06-15 01:00:46'),
(4, 'Shohan', 'r.shohan12@gmail.com', '01627811497', 6, NULL, '2020-06-25 17:29:59', '2020-06-25 17:29:59'),
(5, 'nwe', 'sfsl@gmail.com', '02154210', 9, NULL, '2020-07-04 15:11:11', '2020-07-04 15:11:11'),
(6, 'svr', 'svr@gmail.com', '465616', 6, NULL, '2020-07-04 15:17:49', '2020-07-04 15:17:49'),
(7, 'Sayed Islam', 'isayed.us@gmail.com', '2122039863', 2, NULL, '2020-08-20 05:54:54', '2020-08-20 05:54:54'),
(8, 'Rayhan Aqib', 'syedabulbul@gmail.com', '+1-587-586-5585', 6, NULL, '2020-08-21 10:45:20', '2020-08-21 10:45:20'),
(9, 'Gideon Shields', 'carol_haley30@gmxxail.com', 'carol_haley30@gmxxail.com', 4, NULL, '2020-11-08 19:49:57', '2020-11-08 19:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `event_time` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_map` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_type` tinyint(1) DEFAULT NULL COMMENT '1=Latest, 2=Upcoming',
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `overview` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `event_tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_date`, `end_date`, `event_time`, `address`, `address_map`, `image`, `event_type`, `url`, `overview`, `description`, `event_tag`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(3, 'If you are going', '2020-02-19', '2020-02-20', '10:00 AM To 1:30 PM', 'Dhaka', NULL, 'images/events/2020/02/19/map-marker19-02-202019-05-34.png', 2, 'if-you-are-going-1-20-02-19', 'There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr', NULL, 'events, Nationa', 1, 1, '2020-02-19 11:35:03', '2020-02-19 17:09:39'),
(4, 'There many variaons', '2020-02-18', '2020-02-20', '12 AM to 2 PM', 'Dhaha', NULL, 'images/events/2020/02/19/event-619-02-202017-43-58.jpg', 2, 'there-many-variaons-1-20-02-19', 'There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr', NULL, NULL, 1, 1, '2020-02-19 11:43:59', '2020-02-19 12:03:31'),
(5, 'Lorem Ipsum availableddddddddddddd', '2020-02-19', '2020-02-25', '9AM to 20 PM', 'Dhaka', NULL, 'images/events/2020/02/19/product-2-300x30019-02-202019-05-08.jpg', 2, 'lorem-ipsum-available-1-20-02-19', '1There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amrder bangla  1There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amrder bangla', NULL, NULL, 1, 1, '2020-02-19 11:44:54', '2020-02-19 13:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `event_booked`
--

CREATE TABLE `event_booked` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic_qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_of_work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_of_work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_class` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `serial_num` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=For Admin / Student, 2=For Applicant',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `icon_class`, `url`, `status`, `serial_num`, `slug`, `icon`, `big_icon`, `type`, `created_at`, `updated_at`) VALUES
(15, 'Admin', 'fa fa-user-plus', 'all-users', 1, 15, '[\"users\"]', 'images/menu/icon/2020/02/19/information19-11-201912-41-2219-02-202011-39-32.png', 'images/menu/big-icon/2020/02/19/information19-11-201912-41-2219-02-202011-39-32.png', 1, '2019-05-22 16:32:56', '2020-02-19 05:39:32'),
(16, 'Settings', 'fa fa-wrench', '#', 1, 16, '[\"primary-info\",\"acl\",\"menu\"]', 'images/menu/icon/2020/02/19/setting19-11-201912-42-1019-02-202011-39-49.png', 'images/menu/big-icon/2020/02/19/setting19-11-201912-42-1019-02-202011-39-49.png', 1, '2019-05-22 16:33:25', '2020-02-19 05:39:49'),
(49, 'Visit Site', 'fa fa-user', '/', 1, 1, '[\"slider\"]', 'images/menu/icon/2020/06/08/us-logo08-06-202007-28-03.jpg', 'images/menu/big-icon/2020/06/08/us-logo08-06-202007-28-03.jpg', 1, '2020-02-19 06:06:01', '2020-06-08 01:28:03'),
(50, 'Slider', 'fa fa-folder', 'slider-admin', 1, 2, '[\"slider\"]', 'images/menu/icon/2020/02/22/information19-11-201912-41-2222-02-202007-52-44.png', 'images/menu/big-icon/2020/02/22/information19-11-201912-41-2222-02-202007-52-44.png', 1, '2020-02-22 01:52:45', '2020-02-22 09:32:25'),
(51, 'Teachers', 'fa fa-folder', 'teachers', 1, 5, '[\"teacher\"]', 'images/menu/icon/2020/02/22/information19-11-201912-41-2222-02-202007-53-23.png', 'images/menu/big-icon/2020/02/22/information19-11-201912-41-2222-02-202007-53-23.png', 1, '2020-02-22 01:53:23', '2020-02-22 09:33:06'),
(52, 'Program', 'fa fa-folder', 'courses', 1, 4, '[\"courses\"]', 'images/menu/icon/2020/02/22/information19-11-201912-41-2222-02-202007-54-23.png', 'images/menu/big-icon/2020/02/22/information19-11-201912-41-2222-02-202007-54-23.png', 1, '2020-02-22 01:54:23', '2020-06-08 03:30:42'),
(53, 'Events', 'fa fa-folder', 'events', 2, 3, '[\"events\"]', 'images/menu/icon/2020/02/22/information19-11-201912-41-2222-02-202007-56-28.png', 'images/menu/big-icon/2020/02/22/information19-11-201912-41-2222-02-202007-56-28.png', 1, '2020-02-22 01:56:28', '2020-06-15 03:04:53'),
(54, 'Information', 'fa fa-folder', '/', 1, 1, '[\"subscriber\"]', 'images/menu/icon/2020/02/22/information19-11-201912-41-2222-02-202015-57-11.png', 'images/menu/big-icon/2020/02/22/information19-11-201912-41-2222-02-202015-57-11.png', 1, '2020-02-22 09:57:11', '2020-02-22 09:58:23'),
(55, 'Testimonial', 'fa fa-folder', 'testimonial', 1, 17, '[\"testimonial\"]', 'images/menu/icon/2020/06/02/information19-11-201912-41-2202-06-202007-06-50.png', 'images/menu/big-icon/2020/06/02/information19-11-201912-41-2202-06-202007-06-50.png', 1, '2020-06-02 01:06:50', '2020-06-02 01:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `menu_settings`
--

CREATE TABLE `menu_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `slider_bg_color` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_text_color` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_color` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_color` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_settings`
--

INSERT INTO `menu_settings` (`id`, `status`, `slider_bg_color`, `slider_text_color`, `bg_color`, `text_color`, `created_at`, `updated_at`) VALUES
(1, 1, '#38030f5e', '#edf2fb', '#ff6600', '#fff', NULL, '2019-03-11 05:40:28');

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
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2015_12_20_100001_create_permissions_table', 3),
(4, '2015_12_20_100002_create_roles_table', 4),
(5, '2015_12_20_100003_create_permission_role_table', 4),
(6, '2015_12_20_100004_create_role_user_table', 4),
(8, '2019_02_19_083426_create_primary_infos_table', 5),
(11, '2018_08_06_101634_create_menu_table', 8),
(12, '2018_08_06_101708_create_sub_menu_table', 8),
(13, '2018_08_06_101726_create_sub_sub_menu_table', 8),
(14, '2019_03_03_115155_create_teachers_table', 9),
(16, '2019_03_04_063418_create_notice-cats_table', 11),
(17, '2019_03_04_083344_create_notices_table', 12),
(21, '2019_03_07_042805_create__page_table', 16),
(22, '2019_03_07_042833_create__page_photo_table', 16),
(62, '2019_06_18_110150_create_teachers_table', 50),
(71, '2019_05_18_042635_create_branches_table', 57),
(72, '2019_07_15_035836_create_courses_table', 58),
(73, '2019_07_23_082445_create_subjects_table', 59),
(75, '2020_02_19_233000_create_event_bookeds_table', 61),
(76, '2020_02_22_072334_create_subscriptions_table', 62),
(78, '2020_06_03_110412_create_course_details_table', 64),
(79, '2020_06_01_151713_create_demo_classes_table', 65),
(80, '2019_09_19_061029_create_testimonials_table', 66);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `title_ban` text COLLATE utf8mb4_unicode_ci,
  `description_ban` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `fk_notice_cat` int(11) UNSIGNED NOT NULL,
  `show_popop` int(11) NOT NULL DEFAULT '0',
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_homepage` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `date`, `title_ban`, `description_ban`, `description`, `fk_notice_cat`, `show_popop`, `pdf`, `show_homepage`, `created_at`, `updated_at`) VALUES
(1, 'fv fv', '2019-08-01', NULL, NULL, '<p>fv fv<u>fv ff<b>&nbsp;fv fv<i>fv fv fv&nbsp;fv fv<small></small></i></b></u></p>', 1, 0, NULL, 0, '2019-08-29 02:46:43', '2019-08-29 02:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `notice_cat`
--

CREATE TABLE `notice_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_name_ban` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_cat`
--

INSERT INTO `notice_cat` (`id`, `cat_name`, `cat_name_ban`, `keyword`, `created_at`, `updated_at`) VALUES
(1, 'Admission Notice', 'ভর্তি', 'adsmission Notice', '2019-03-04 02:09:46', '2019-03-27 23:19:55'),
(2, 'Academic', '', 'academic notice', '2019-03-04 02:19:23', '2019-03-04 02:19:23'),
(3, 'Exam', '', 'Exam', '2019-03-05 22:46:29', '2019-03-05 22:46:29'),
(4, 'Career', '', 'Career', '2019-03-05 22:46:54', '2019-03-05 22:46:54'),
(5, 'News & Event', '', 'Event', '2019-03-05 22:47:12', '2019-03-24 22:43:03'),
(6, 'Official', '', 'Official', '2019-03-05 22:47:31', '2019-03-05 22:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `our_clients`
--

CREATE TABLE `our_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_num` int(10) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bn` varchar(450) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ban` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `name`, `name_bn`, `title`, `title_ban`, `description_ban`, `description`, `status`, `link`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Dress Style', 'পোশাকরীতি', 'পোশাকরীতি', 'পোশাকরীতি', '<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: center;\">শীত কালঃ নভেম্বর-মার্চ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; গ্রীষ্ম কালঃ এপ্রিল-অক্টোবর</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px; margin-left: auto; margin-right: auto;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">প্লে গ্রুপ হতে ৩য় শ্রেণী (বালক)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ সাদা ফুল শার্ট ও এ্যাশ টাই, এ্যাশ ফুলপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা, সবুজ (বটল গ্রীন) পুলওভার।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ সাদা হাফ শার্ট ও এ্যাশ টাই, এ্যাশ হাফপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">প্লে গ্রুপ হতে ৩য় শ্রেণী (বালিকা)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ এ্যাশ স্কার্ট, সাদা শার্ট, এ্যাশ টাই, কালো স্কুল সু, সাদা মোজা, সবুজ (বটল গ্রীন) পুলওভার।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ এ্যাশ স্কার্ট, সাদা হাফশার্ট, কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">৪র্থ শ্রেণী হতে ১০ম শ্রেণী (বালক)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ সাদা ফুল শার্ট ও এ্যাশ টাই, এ্যাশ ফুলপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা, সবুজ (বটল গ্রীন) কার্ডিগান।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ সাদা হাফ শার্ট ও এ্যাশ ফুলপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">৪র্থ শ্রেণী হতে ১০ম শ্রেণী (বালিকা)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ এ্যাশ কামিজ, সাদা সালোয়ার ও দোপাট্টা, এ্যাশ বেল্ট ও কালো স্কুল সু, সাদা মোজা ও সবুজ (বটল গ্রীন) কার্ডিগান।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ এ্যাশ কামিজ, সাদা সালোয়ার ও দোপাট্টা, এ্যাশ বেল্ট ও কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">একাদশ-দ্বাদশ (বালক)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ কালো প্যান্ট, সাদা ফুল শার্ট, টাই, সবুজ (বটল গ্রীন) রঙের পুলওভার, কালো বেল্ট, কালো সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ কালো প্যান্ট, সাদা হাফ শার্ট, কালো বেল্ট, কালো সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">একাদশ-দ্বাদশ (বালিকা)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ সাদা সালোয়ার কামিজ, দোপাট্টা, সবুজ (বটল গ্রীন) রঙের কার্ডিগান, কালো জুতা, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ সাদা সালোয়ার কামিজ, দোপাট্টা, কালো জুতা, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: center;\">শীত কালঃ নভেম্বর-মার্চ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; গ্রীষ্ম কালঃ এপ্রিল-অক্টোবর</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px; margin-left: auto; margin-right: auto;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">প্লে গ্রুপ হতে ৩য় শ্রেণী (বালক)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ সাদা ফুল শার্ট ও এ্যাশ টাই, এ্যাশ ফুলপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা, সবুজ (বটল গ্রীন) পুলওভার।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ সাদা হাফ শার্ট ও এ্যাশ টাই, এ্যাশ হাফপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">প্লে গ্রুপ হতে ৩য় শ্রেণী (বালিকা)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ এ্যাশ স্কার্ট, সাদা শার্ট, এ্যাশ টাই, কালো স্কুল সু, সাদা মোজা, সবুজ (বটল গ্রীন) পুলওভার।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ এ্যাশ স্কার্ট, সাদা হাফশার্ট, কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">৪র্থ শ্রেণী হতে ১০ম শ্রেণী (বালক)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ সাদা ফুল শার্ট ও এ্যাশ টাই, এ্যাশ ফুলপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা, সবুজ (বটল গ্রীন) কার্ডিগান।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ সাদা হাফ শার্ট ও এ্যাশ ফুলপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">৪র্থ শ্রেণী হতে ১০ম শ্রেণী (বালিকা)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ এ্যাশ কামিজ, সাদা সালোয়ার ও দোপাট্টা, এ্যাশ বেল্ট ও কালো স্কুল সু, সাদা মোজা ও সবুজ (বটল গ্রীন) কার্ডিগান।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ এ্যাশ কামিজ, সাদা সালোয়ার ও দোপাট্টা, এ্যাশ বেল্ট ও কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">একাদশ-দ্বাদশ (বালক)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ কালো প্যান্ট, সাদা ফুল শার্ট, টাই, সবুজ (বটল গ্রীন) রঙের পুলওভার, কালো বেল্ট, কালো সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ কালো প্যান্ট, সাদা হাফ শার্ট, কালো বেল্ট, কালো সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">একাদশ-দ্বাদশ (বালিকা)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ সাদা সালোয়ার কামিজ, দোপাট্টা, সবুজ (বটল গ্রীন) রঙের কার্ডিগান, কালো জুতা, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ সাদা সালোয়ার কামিজ, দোপাট্টা, কালো জুতা, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 1, 'dress-style', '', '2019-04-13 01:38:00', '2019-04-13 01:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `page_photo`
--

CREATE TABLE `page_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_page_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('patronus.edubd@gmail.com', '$2y$10$IuYBzWYHgdeRNlybpbAFXe.w7yCOowMJ/4boTyqs9KfYxwh0D7z5O', '2019-07-10 17:06:14'),
('chawapawa@hotmail.com', '$2y$10$VnudzJMxa9oCLo8nIPXWJ.WvM6CQFq9nTcsQYR2YqsEM5l1rAgqni', '2019-07-13 17:03:52'),
('eduleam.digital@gmail.com', '$2y$10$djJnln/yjvC82HPbtCqts.xTnBkBWI6OY3zxuzQSuaah8Cao.0meS', '2019-08-04 01:08:18'),
('proggo@live.com', '$2y$10$A638iDwXsU/FxvHXAe9i/ubdZtioExgCDAldf26MeIrirt.Ldvu7y', '2019-08-28 06:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resource` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'System',
  `system` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `resource`, `system`, `created_at`, `updated_at`) VALUES
(7, 'primary info', 'primary-info', '', 1, '2019-02-26 15:57:09', '2019-02-26 15:57:09'),
(8, 'Users', 'users', '', 1, '2019-02-26 15:57:33', '2019-02-26 15:57:33'),
(9, 'ACL', 'acl', '', 1, '2019-02-26 15:59:25', '2019-02-26 15:59:25'),
(11, 'Menu', 'menu', '', 1, '2019-02-27 13:05:00', '2019-02-27 13:05:00'),
(32, 'sms', 'sms', '', 1, '2019-06-20 20:35:54', '2019-06-20 20:35:54'),
(36, 'teacher', 'teacher', '', 1, '2019-06-22 16:23:02', '2019-06-22 16:23:02'),
(41, 'Events', 'events', '', 1, '2019-06-23 16:47:38', '2019-06-23 16:47:38'),
(42, 'Calendar', 'calendar', '', 1, '2019-06-23 16:47:46', '2019-06-23 16:47:46'),
(49, 'Sms log', 'sms-log', '', 1, '2019-07-01 22:07:43', '2019-07-01 22:07:43'),
(58, 'sub-course', 'sub-course', '', 1, '2019-08-24 21:01:05', '2019-08-24 21:01:05'),
(59, 'subjects', 'subjects', '', 1, '2019-08-24 21:01:18', '2019-08-24 21:01:18'),
(63, 'category', 'category', '', 1, '2020-02-20 12:32:33', '2020-02-20 12:32:33'),
(64, 'sub-category', 'sub-category', '', 1, '2020-02-20 12:32:40', '2020-02-20 12:32:40'),
(65, 'slider', 'slider', '', 1, '2020-02-22 01:48:12', '2020-02-22 01:48:12'),
(66, 'subscriber', 'subscriber', '', 1, '2020-02-22 09:55:10', '2020-02-22 09:55:10'),
(67, 'event-register', 'event-register', '', 1, '2020-02-22 09:55:19', '2020-02-22 09:55:19'),
(68, 'testimonial', 'testimonial', '', 1, '2020-06-02 01:04:31', '2020-06-02 01:04:31'),
(69, 'course-details', 'course-details', '', 1, '2020-06-03 05:18:18', '2020-06-03 05:18:18'),
(70, 'courses', 'courses', '', 1, '2020-06-15 02:46:27', '2020-06-15 02:46:27'),
(71, 'social-icon', 'social-icon', '', 1, '2020-06-25 16:54:01', '2020-06-25 16:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1764, 7, 1, NULL, NULL),
(1765, 8, 1, NULL, NULL),
(1766, 9, 1, NULL, NULL),
(1767, 11, 1, NULL, NULL),
(1768, 32, 1, NULL, NULL),
(1769, 36, 1, NULL, NULL),
(1770, 41, 1, NULL, NULL),
(1771, 42, 1, NULL, NULL),
(1772, 49, 1, NULL, NULL),
(1773, 58, 1, NULL, NULL),
(1774, 59, 1, NULL, NULL),
(1775, 63, 1, NULL, NULL),
(1776, 64, 1, NULL, NULL),
(1777, 65, 1, NULL, NULL),
(1778, 66, 1, NULL, NULL),
(1779, 67, 1, NULL, NULL),
(1780, 68, 1, NULL, NULL),
(1781, 69, 1, NULL, NULL),
(1782, 70, 1, NULL, NULL),
(1783, 71, 1, NULL, NULL),
(1784, 7, 2, NULL, NULL),
(1785, 41, 2, NULL, NULL),
(1786, 58, 2, NULL, NULL),
(1787, 59, 2, NULL, NULL),
(1788, 63, 2, NULL, NULL),
(1789, 64, 2, NULL, NULL),
(1790, 65, 2, NULL, NULL),
(1791, 66, 2, NULL, NULL),
(1792, 67, 2, NULL, NULL),
(1793, 68, 2, NULL, NULL),
(1794, 69, 2, NULL, NULL),
(1795, 70, 2, NULL, NULL),
(1796, 71, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `primary_info`
--

CREATE TABLE `primary_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_ban` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name_ban` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no_ban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ban` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ban` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `why_us` text COLLATE utf8mb4_unicode_ci,
  `meta_description_ban` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_name` int(11) NOT NULL COMMENT '1=English, 2=Bangla',
  `language` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_embed` varchar(450) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `primary_info`
--

INSERT INTO `primary_info` (`id`, `company_name`, `logo`, `logo_ban`, `address`, `mobile_no`, `company_name_ban`, `mobile_no_ban`, `address_ban`, `description_ban`, `why_us`, `meta_description_ban`, `email`, `language_name`, `language`, `favicon`, `map_embed`, `meta_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 'US Tutorial', 'images/logo/logo.png', 'images/logo/logo_ban.png', 'Corporate Center: \r\n3906 62 Street, Woodside, NY-11377\r\n\r\nStudent Center: \r\n3418 Northern Blvd. Long Island City, NY-11101', '718 682 2767', 'TEkBLOCK', '3418 Northern Blvd. Long Islan', '3418 Northern Blvd. Long Island City, NY-11101', '<p>3418 Northern Blvd. Long Island City, NY-11101<br></p>', 'Welcome to the US Tutorial. come with us, we also teach children about the basic values of human beings as honesty, kindness, generosity, courage, freedom, equality, and respect. Learn to celebrate diversity in a spirit of understanding and tolerance and develop a positive regard and awareness of other people. They are taught the values and responsibilities needed to become active', '3418 Northern Blvd. Long Island City, NY-11101', 'info@ustutorial.com', 1, '1', 'images/logo/favicon.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3069.4631575554663!2d90.3464098882933!3d23.810510546088658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c11d7d1f4f9d%3A0x6e6633665517f8db!2sBCIC+College!5e0!3m2!1sen!2s!4v1500972819849', '', '<p>There are many variations of passg of Lorem Ipsum available, but thmajority have suffered altem,\r\n\r\n\r\n\r\nThere are many variations of passg of Lorem Ipsum available, but thmajority have suffered altem,\r\n\r\n\r\n\r\nThere are many variations of passg of Lorem Ipsum available, but thmajority have suffered altem,\r\n\r\n<br></p>', NULL, '2020-07-03 15:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `system` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `system`, `created_at`, `updated_at`) VALUES
(1, 'System Admin', 'system', 'System Admin', 1, NULL, NULL),
(2, 'Super Admin', 'super-admin', 'Super admin', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(3, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` tinyint(3) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `caption`, `overview`, `url`, `image`, `button_text`, `serial`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'First week is on us!', 'Explore the ins and outs of US Tutorial\'s vast library of resources.\r\nGet acquainted and introduced to our team of educators.\r\nTinker with the interactive learning materials… all free of cost!', 'http://ustutorial.com/course/SHSAT%20PREP', 'images/slider/2020/06/16/slider-1-1300-px-500-px-185-resu16-06-202022-11-46.jpg', 'VIEW PROGRAMS', 1, 1, 1, 3, '2019-09-15 17:58:51', '2020-06-18 16:40:34'),
(5, '#StayHome and learn!', 'Our programs are carefully designed  to fit the digital learning model.\r\nSo your child can get professional support without the to-and-fro hassle of tutorial centers.', 'http://localhost/tekblock.com/', 'images/slider/2020/06/16/slider-2-1300-px-500-px-185-resu16-06-202022-12-11.jpg', 'VIEW PROGRAMS', 2, 1, 1, 3, '2020-02-19 08:51:58', '2020-06-18 16:41:33'),
(6, 'Vivid study materials. Fun Activities. \r\nOnline Interactions.', 'Increase the confidence and grade potential of your child by encouraging active participation in US Tutorial’s handmade resource suite. Worksheets are a thing of the past, but we still have given them due respect by archiving them in our library.', '#', 'images/slider/2020/06/16/slider-3-1300-px-500-px-185-resu16-06-202022-12-38.jpg', 'VIEW PROGRAM', 3, 1, 1, 3, '2020-06-08 10:58:11', '2020-06-18 16:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_icons`
--

INSERT INTO `social_icons` (`id`, `name`, `icon_name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'fa fa-facebook', 'https://facebook.com/USTutorial-101524134907384', '2019-09-06 17:49:27', '2020-06-25 17:33:56'),
(2, 'Google Pluse', 'fa fa-google-plus', '#', '2019-09-06 17:51:29', '2019-09-06 17:51:29'),
(3, 'Twitter', 'fa fa-twitter', '#', '2019-09-06 17:52:48', '2019-09-06 17:52:48'),
(4, 'linkedin', 'fa fa-linkedin', '#', '2019-09-06 17:53:42', '2019-09-06 17:53:42'),
(5, 'Pinterest', 'fa fa-pinterest-p', '#', '2019-09-06 17:54:46', '2019-09-06 18:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_course_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `subject_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `sub_course_id`, `branch_id`, `subject_name`, `short_name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, 'Bangla', 'BN', 1, 1, 1, '2019-08-06 22:12:11', '2019-08-06 22:12:29'),
(2, 3, NULL, 'English', 'EN', 1, 1, NULL, '2019-08-06 22:12:35', '2019-08-06 22:12:35'),
(3, 4, NULL, 'Bangla', 'BN', 1, 1, NULL, '2019-08-07 22:39:03', '2019-08-07 22:39:03'),
(4, 4, NULL, 'English', 'EN', 1, 1, NULL, '2019-08-07 22:39:11', '2019-08-07 22:39:11'),
(5, 4, NULL, 'Mathematics', 'MAT', 1, 1, NULL, '2019-08-07 22:39:27', '2019-08-07 22:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `sub_category_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category_name_bn` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_num` tinyint(3) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `sub_category_name`, `sub_category_name_bn`, `description`, `serial_num`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 3, 'ETL Development with Informatica  (Regular)', NULL, NULL, 1, 1, 1, NULL, '2020-02-20 13:03:14', '2020-02-20 13:03:14'),
(3, 3, 'ETL Development with Informatica  (Boot Camp)', NULL, NULL, 2, 1, 1, NULL, '2020-02-20 13:03:33', '2020-02-20 13:03:33'),
(4, 3, 'SQL Development (Regular Course )', NULL, NULL, 3, 1, 1, NULL, '2020-02-20 13:03:56', '2020-02-20 13:03:56'),
(5, 3, 'SQL Development (Boot Camp )', NULL, NULL, 4, 1, 1, NULL, '2020-02-20 13:04:12', '2020-02-20 13:04:12'),
(6, 3, 'Salesforce Admin & Development (Regular Course )', NULL, NULL, 5, 1, 1, NULL, '2020-02-20 13:04:30', '2020-02-20 13:04:30'),
(7, 3, 'Salesforce Admin & Development (Boot Camp)', NULL, NULL, 6, 1, 1, NULL, '2020-02-20 13:04:49', '2020-02-20 13:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `serial_num` int(10) UNSIGNED NOT NULL,
  `fk_menu_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=For Admin / Student, 2=For Applicant',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `name`, `name_bn`, `url`, `status`, `serial_num`, `fk_menu_id`, `slug`, `icon`, `big_icon`, `type`, `created_at`, `updated_at`) VALUES
(13, 'Notice', NULL, '#', 1, 1, 25, '[\"notice\"]', 'images/menu/sub-menu/icon/2019/08/18/notice18-08-201910-31-03.png', 'images/menu/big-icon/2019/08/18/notice18-08-201910-31-03.png', 1, '2019-06-26 09:47:35', '2019-08-18 14:31:03'),
(14, 'Courses', NULL, 'all-courses', 2, 2, 25, '[\"courses\"]', 'images/menu/sub-menu/icon/2019/08/18/courses18-08-201910-31-14.png', 'images/menu/big-icon/2019/08/18/courses18-08-201910-31-14.png', 1, '2019-06-26 09:48:54', '2019-08-22 22:43:16'),
(17, 'Add Multiple Student', NULL, 'user-import-form', 2, 3, 38, '[\"student\"]', 'images/menu/sub-menu/icon/2019/08/17/add-multiple-students17-08-201918-36-48.png', 'images/menu/big-icon/2019/08/17/add-multiple-students17-08-201918-36-48.png', 1, '2019-06-27 08:26:45', '2019-08-22 22:40:36'),
(20, 'Student', NULL, '#', 1, 1, 45, '[\"student\"]', 'images/menu/sub-menu/icon/2019/08/29/student29-08-201923-06-28.png', 'images/menu/big-icon/2019/08/29/student29-08-201923-06-28.png', 1, '2019-07-03 21:27:00', '2019-08-30 03:06:28'),
(21, 'Teacher', NULL, 'teachers', 1, 2, 45, '[\"teacher\"]', 'images/menu/sub-menu/icon/2019/08/29/teacher29-08-201923-06-53.png', 'images/menu/big-icon/2019/08/29/teacher29-08-201923-06-53.png', 1, '2019-07-03 21:27:24', '2019-08-30 03:06:53'),
(22, 'Student Attendance', NULL, 'coming-soon', 1, 1, 26, '[\"attendance\"]', 'images/menu/sub-menu/icon/2019/08/17/student-attendance17-08-201918-37-31.png', 'images/menu/big-icon/2019/08/17/student-attendance17-08-201918-37-31.png', 1, '2019-07-03 21:50:48', '2019-08-22 22:00:26'),
(23, 'Receive Payment', NULL, 'search-student', 1, 1, 14, '[\"receive-student-payment\"]', 'images/menu/sub-menu/icon/2019/08/29/recieve-payment29-08-201923-08-30.png', 'images/menu/big-icon/2019/08/29/recieve-payment29-08-201923-08-30.png', 1, '2019-07-03 21:55:56', '2019-08-30 03:08:30'),
(24, 'Payment History', NULL, 'payment-history', 1, 2, 14, '[\"payment-history\"]', 'images/menu/sub-menu/icon/2019/08/29/payment-history29-08-201923-09-05.png', 'images/menu/big-icon/2019/08/29/payment-history29-08-201923-09-05.png', 1, '2019-07-03 21:57:24', '2019-08-30 03:09:05'),
(25, 'Calendar', NULL, 'calendar', 1, 3, 25, '[\"calendar\"]', 'images/menu/sub-menu/icon/2019/08/18/calendar18-08-201910-31-25.png', 'images/menu/big-icon/2019/08/18/calendar18-08-201910-31-25.png', 1, '2019-07-03 22:10:48', '2019-08-18 14:31:25'),
(26, 'Manage Events', NULL, 'events', 1, 4, 25, '[\"events\"]', 'images/menu/sub-menu/icon/2019/08/18/manage-events18-08-201910-31-35.png', 'images/menu/big-icon/2019/08/18/manage-events18-08-201910-31-35.png', 1, '2019-07-03 22:11:16', '2019-08-18 14:31:35'),
(27, 'Routine', NULL, '#', 2, 5, 25, '[\"routine\"]', 'images/menu/sub-menu/icon/2019/08/18/routine18-08-201910-31-47.png', 'images/menu/big-icon/2019/08/18/routine18-08-201910-31-47.png', 1, '2019-07-03 22:32:11', '2019-08-29 23:08:54'),
(28, 'Menu', NULL, 'menu', 1, 1, 16, '[\"menu\"]', NULL, NULL, 1, '2019-07-03 22:35:54', '2019-07-03 22:35:54'),
(29, 'ACL Roles', NULL, 'acl-role', 1, 2, 16, '[\"acl\"]', NULL, NULL, 1, '2019-07-03 22:36:13', '2019-07-03 22:36:13'),
(30, 'Primary Info', NULL, 'primary-info', 1, 3, 16, '[\"primary-info\"]', NULL, NULL, 1, '2019-07-03 22:36:30', '2019-07-03 22:36:30'),
(40, 'Manage Exam', NULL, 'exams', 1, 1, 41, '[\"exam-question\"]', 'images/menu/sub-menu/icon/2019/08/23/creative-writing23-08-201910-58-15.png', 'images/menu/big-icon/2019/08/23/creative-writing23-08-201910-58-15.png', 1, '2019-07-11 20:18:59', '2019-08-23 14:58:15'),
(41, 'Marks Single Entry', NULL, 'marks-entry/create', 1, 2, 41, '[\"marks-entry\"]', 'images/menu/sub-menu/icon/2019/08/23/792921-file-512x51223-08-201911-04-03.png', 'images/menu/big-icon/2019/08/23/792921-file-512x51223-08-201911-04-03.png', 1, '2019-07-11 20:19:21', '2019-08-23 15:04:03'),
(42, 'Generate Result', NULL, 'generate-result', 1, 4, 41, '[\"marks-entry\"]', 'images/menu/sub-menu/icon/2019/08/23/rating23-08-201911-01-33.png', 'images/menu/big-icon/2019/08/23/rating23-08-201911-01-33.png', 1, '2019-07-11 20:19:45', '2019-08-23 15:01:33'),
(43, 'View Result', NULL, 'marks-entry', 1, 5, 41, '[\"marks-entry\"]', 'images/menu/sub-menu/icon/2019/08/23/online-learning23-08-201911-09-50.png', 'images/menu/big-icon/2019/08/23/online-learning23-08-201911-09-50.png', 1, '2019-07-11 20:20:38', '2019-08-23 15:09:50'),
(44, 'My Result', NULL, 'my-result', 1, 6, 41, '[\"my-form\"]', 'images/menu/sub-menu/icon/2019/08/17/result17-08-201918-38-43.png', 'images/menu/big-icon/2019/08/17/result17-08-201918-38-43.png', 1, '2019-07-11 20:21:25', '2019-08-17 22:38:43'),
(45, 'Upload Exam Result', NULL, 'exam-result-pdf', 1, 7, 41, '[\"result-pdf-upload\"]', 'images/menu/sub-menu/icon/2019/08/23/exam23-08-201911-03-07.png', 'images/menu/big-icon/2019/08/23/exam23-08-201911-03-07.png', 1, '2019-07-11 20:21:46', '2019-08-23 15:03:07'),
(46, 'New SMS', NULL, 'single-sms', 1, 1, 23, '[\"sms\"]', 'images/menu/sub-menu/icon/2019/08/29/new-sms29-08-201923-10-53.png', 'images/menu/big-icon/2019/08/29/new-sms29-08-201923-10-53.png', 1, '2019-07-17 14:34:00', '2019-08-30 03:10:53'),
(47, 'SMS Log', NULL, 'sms-log', 1, 2, 23, '[\"sms-log\"]', 'images/menu/sub-menu/icon/2019/08/29/sms-log29-08-201923-11-10.png', 'images/menu/big-icon/2019/08/29/sms-log29-08-201923-11-10.png', 1, '2019-07-17 14:34:23', '2019-08-30 03:11:10'),
(48, 'Marks Bulk Entry', NULL, 'marks-bulk-entry', 1, 3, 41, '[\"marks-entry\"]', 'images/menu/sub-menu/icon/2019/08/23/report-4923-08-201911-07-05.png', 'images/menu/big-icon/2019/08/23/report-4923-08-201911-07-05.png', 1, '2019-08-01 13:58:13', '2019-08-23 15:07:05'),
(51, 'Admit Students', NULL, 'students', 1, 4, 38, '[\"admit-student\"]', 'images/menu/sub-menu/icon/2019/08/29/admit-new-student29-08-201923-01-35.png', 'images/menu/big-icon/2019/08/29/admit-new-student29-08-201923-01-35.png', 1, '2019-08-22 22:27:51', '2019-08-30 03:01:35'),
(54, 'Assign Batch', NULL, 'students-batch-assign', 1, 5, 38, '[\"students-batch-assign\"]', 'images/menu/sub-menu/icon/2019/08/29/admin-up29-08-201923-03-31.png', 'images/menu/big-icon/2019/08/29/admin-up29-08-201923-03-31.png', 1, '2019-08-29 21:47:29', '2019-08-30 03:03:31'),
(55, 'Categories', NULL, 'category', 1, 6, 16, '[\"category\"]', 'images/menu/sub-menu/icon/2020/02/22/information19-11-201912-41-2222-02-202007-55-19.png', 'images/menu/sub-menu/big-icon/2020/02/22/information19-11-201912-41-2222-02-202007-55-19.png', 1, '2020-02-22 01:55:19', '2020-02-22 01:55:19'),
(56, 'Demo class', NULL, 'demo-class', 1, 1, 54, '[\"slider\"]', 'images/menu/sub-menu/icon/2020/02/22/information19-11-201912-41-2222-02-202015-59-06.png', 'images/menu/sub-menu/big-icon/2020/02/22/information19-11-201912-41-2222-02-202015-59-06.png', 1, '2020-02-22 09:59:06', '2020-06-16 16:55:16'),
(58, 'Social Icon', NULL, 'social-icon', 1, 7, 16, '[\"social-icon\"]', 'images/menu/sub-menu/icon/2020/06/25/folder25-06-202022-55-43.png', 'images/menu/sub-menu/big-icon/2020/06/25/folder25-06-202022-55-43.png', 1, '2020-06-25 16:55:43', '2020-06-25 16:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_menu`
--

CREATE TABLE `sub_sub_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `serial_num` int(10) UNSIGNED NOT NULL,
  `fk_menu_id` int(10) UNSIGNED NOT NULL,
  `fk_sub_menu_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=For Admin / Student, 2=For Applicant',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_menu`
--

INSERT INTO `sub_sub_menu` (`id`, `name`, `name_bn`, `url`, `status`, `serial_num`, `fk_menu_id`, `fk_sub_menu_id`, `slug`, `icon`, `big_icon`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Booked Student', '', 'booked-student', 1, 1, 45, 20, '[\"student\"]', 'images/menu/sub-sub-menu/icon/2019/07/21/apple-icon-120x12021-07-201908-18-59.png', 'images/menu/sub-sub-menu/big-icon/2019/07/21/apple-icon-120x12021-07-201908-18-59.png', 1, '2019-07-03 21:28:04', '2019-07-21 02:18:59'),
(2, 'Registered Student', '', 'registered-student', 1, 2, 45, 20, '[\"student\"]', 'images/menu/sub-sub-menu/icon/2019/07/21/apple-icon-120x12021-07-201908-19-07.png', 'images/menu/sub-sub-menu/big-icon/2019/07/21/apple-icon-120x12021-07-201908-19-07.png', 1, '2019-07-03 21:28:31', '2019-07-21 02:19:07'),
(3, 'Enrolled Student', '', 'enrolled-student', 1, 3, 45, 20, '[\"student\"]', 'images/menu/sub-sub-menu/icon/2019/07/21/apple-icon-120x12021-07-201908-19-32.png', 'images/menu/sub-sub-menu/big-icon/2019/07/21/apple-icon-120x12021-07-201908-19-32.png', 1, '2019-07-03 21:29:14', '2019-07-21 02:19:32'),
(4, 'Manage Notice', '', 'notice-admin', 1, 1, 25, 13, '[\"notice\"]', NULL, NULL, 1, '2019-07-03 22:09:10', '2019-07-03 22:09:10'),
(5, 'View Notice', '', 'notice', 1, 2, 25, 13, '[\"notice\"]', NULL, NULL, 1, '2019-07-03 22:09:35', '2019-07-03 22:14:53'),
(6, 'View Routine', '', 'class-routine', 1, 2, 25, 27, '[\"routine\"]', NULL, NULL, 1, '2019-07-03 22:32:30', '2019-08-22 21:43:00'),
(8, 'Create Routine', '', 'class-routine/create', 1, 3, 25, 27, '[\"routine\"]', NULL, NULL, 1, '2019-07-04 22:05:24', '2019-08-22 22:45:34'),
(9, 'Student Black-List', '', 'deactivated-students', 1, 4, 45, 20, '[\"deactivated-students\"]', 'images/menu/sub-sub-menu/icon/2019/08/29/apple-icon-144x14429-08-201914-59-40.png', 'images/menu/sub-sub-menu/big-icon/2019/08/29/apple-icon-144x14429-08-201914-59-40.png', 1, '2019-08-29 18:59:40', '2019-08-29 18:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `mobile` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `email` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci,
  `permanent_address` text COLLATE utf8mb4_unicode_ci,
  `qualification` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Educational qualification',
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `mobile`, `email`, `subject_id`, `present_address`, `permanent_address`, `qualification`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'New instructor', '01784523698', 'ins1@gmail.com', NULL, 'sdfjl', 'sdfl', 'Good', '', 1, NULL, '2019-09-10 13:52:09', '2019-09-10 13:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` tinyint(3) UNSIGNED DEFAULT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_small` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `serial` tinyint(3) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `course_name`, `rating`, `name`, `content`, `image`, `image_small`, `url`, `created_by`, `updated_by`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Big Datam', 5, 'Namem', '<p>fksdjflsfdjlj    </p>', 'images/testimonial/2020/06/08/no-image08-06-202017-11-23.jpg', NULL, NULL, 1, NULL, NULL, 1, '2020-06-06 02:55:30', '2020-06-08 11:11:23'),
(2, 'Demo Course', 5, 'Demo name', '<p>Demo name</p>', 'images/testimonial/2020/06/08/5317608-06-202017-10-51.png', NULL, NULL, 1, NULL, NULL, 1, '2020-06-06 07:47:46', '2020-06-08 11:10:51'),
(3, 'Demo Course 3', 3, 'Demo Three', '<p>Demo Three</p>', 'images/testimonial/2020/06/08/previewimage08-06-202017-09-13.png', NULL, NULL, 1, NULL, NULL, 1, '2020-06-06 07:48:25', '2020-06-08 11:09:13'),
(4, 'SHSAT PREP', 5, 'David C.', '<p>UsTutorial changed my kid\'s life! Best service ever.</p>', 'images/testimonial/2020/06/08/no-image08-06-202017-07-19.jpg', NULL, NULL, 1, NULL, NULL, 1, '2020-06-06 07:49:10', '2020-06-16 16:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bn` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `branch` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '2',
  `code_reset_counter` int(11) NOT NULL DEFAULT '3',
  `otp_code` int(11) DEFAULT NULL,
  `otp_create_time` datetime DEFAULT NULL,
  `reset_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `name_bn`, `email`, `email_verified_at`, `branch`, `password`, `mobile_no`, `type`, `code_reset_counter`, `otp_code`, `otp_create_time`, `reset_token`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Developer', NULL, 'adeptsaiful@gmail.com', '2019-08-28 23:02:13', NULL, '$2y$10$kH4N.D91faqUifBUOQBVZ.78hGTIGWIXUWGc.zjXmkwXF/81jdsAK', '01829655974', 1, 3, 463706, '2019-08-20 15:38:59', 'b3921582231de1d199da9f182d9e8e6b00073883dc271a9aba72e0043c8e8453', 'images/users/2019/09/06/1106-09-201916-26-11.jpg', 'jc9ih0iAh81EzbcIkPVOv8pohDigBM4PIASRyaSksmeSyAEUmDSYC6gFcd3k', NULL, '2019-09-06 10:26:13'),
(3, 'Super Admin', NULL, 'superadmin@gmail.com', '2019-08-29 01:04:10', 1, '$2y$10$UpliRMDWA5/xPlkBDmEm4eI04F9jg/6AtXMpZlg1DVqPpUC5Px8Ba', '01212203986', 1, 3, NULL, NULL, NULL, 'images/users/2020/02/22/tek-block-logo22-02-202015-39-26.jpg', NULL, '2019-08-07 14:32:33', '2020-02-22 10:17:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_companies`
--
ALTER TABLE `about_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_created_by_foreign` (`created_by`),
  ADD KEY `categories_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_created_by_foreign` (`created_by`),
  ADD KEY `courses_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_details_course_id_foreign` (`course_id`);

--
-- Indexes for table `demo_classes`
--
ALTER TABLE `demo_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demo_classes_course_id_foreign` (`course_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `event_booked`
--
ALTER TABLE `event_booked`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_booked_event_id_foreign` (`event_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_settings`
--
ALTER TABLE `menu_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_notice_id_notice_cat_cat` (`fk_notice_cat`);

--
-- Indexes for table `notice_cat`
--
ALTER TABLE `notice_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_clients`
--
ALTER TABLE `our_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `our_clients_created_by_foreign` (`created_by`),
  ADD KEY `our_clients_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_photo`
--
ALTER TABLE `page_photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_page_photo_id_page_id` (`fk_page_id`);

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
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `primary_info`
--
ALTER TABLE `primary_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_created_by_foreign` (`created_by`),
  ADD KEY `sliders_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_sub_course_id_foreign` (`sub_course_id`),
  ADD KEY `subjects_branch_id_foreign` (`branch_id`),
  ADD KEY `subjects_created_by_foreign` (`created_by`),
  ADD KEY `subjects_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_category_category_id_foreign` (`category_id`),
  ADD KEY `sub_category_created_by_foreign` (`created_by`),
  ADD KEY `sub_category_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_menu_fk_menu_id_foreign` (`fk_menu_id`);

--
-- Indexes for table `sub_sub_menu`
--
ALTER TABLE `sub_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_sub_menu_fk_menu_id_foreign` (`fk_menu_id`),
  ADD KEY `sub_sub_menu_fk_sub_menu_id_foreign` (`fk_sub_menu_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_subject_id_foreign` (`subject_id`),
  ADD KEY `teachers_created_by_foreign` (`created_by`),
  ADD KEY `teachers_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_created_by_foreign` (`created_by`),
  ADD KEY `testimonials_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `user_branch_id` (`branch`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_companies`
--
ALTER TABLE `about_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `demo_classes`
--
ALTER TABLE `demo_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_booked`
--
ALTER TABLE `event_booked`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `menu_settings`
--
ALTER TABLE `menu_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice_cat`
--
ALTER TABLE `notice_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `our_clients`
--
ALTER TABLE `our_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_photo`
--
ALTER TABLE `page_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1797;

--
-- AUTO_INCREMENT for table `primary_info`
--
ALTER TABLE `primary_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `sub_sub_menu`
--
ALTER TABLE `sub_sub_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `courses_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `course_details`
--
ALTER TABLE `course_details`
  ADD CONSTRAINT `course_details_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `demo_classes`
--
ALTER TABLE `demo_classes`
  ADD CONSTRAINT `demo_classes_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `user_events_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `event_booked`
--
ALTER TABLE `event_booked`
  ADD CONSTRAINT `event_booked_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `fk_notice_id_notice_cat_cat` FOREIGN KEY (`fk_notice_cat`) REFERENCES `notice_cat` (`id`);

--
-- Constraints for table `page_photo`
--
ALTER TABLE `page_photo`
  ADD CONSTRAINT `fk_page_photo_id_page_id` FOREIGN KEY (`fk_page_id`) REFERENCES `page` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sliders_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `testimonials_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
