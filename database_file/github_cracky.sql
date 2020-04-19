-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2020 at 08:38 AM
-- Server version: 5.6.41-84.1
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
-- Database: `crackyeg_cracky_save_for_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@test.com', '$2y$10$sGrr1uQv0OWX73l6xgUhieqPSRZjz1ZS3o1Yy2nP/xsqtB2S4ESQy', 'NJcPoEYtJwDCxHh6e4xXY0PZXKBLhZY8C1yie9KheI8MvkKS6xKmf1vvNdUb', '2020-03-07 16:10:33', '2020-03-15 19:37:23'),
(17, 'mostafa', 'mostafa.print3@gmail.com', '$2y$10$lsfJN.mtOZrVhaNuKk.Q8eC.Mzj6KUIb33IDjKDndT9GgG96IOFrO', 'toVWAPhFnAXQNPTl9Bi1rni535v9srEwGRZQstrhSv9N4VncujoHwiEgtAo1', '2020-03-17 01:34:08', '2020-03-30 16:02:10'),
(18, 'mohamed', 'm@m.com', '$2y$10$46/JpTjLOCYoFF/Kj1S7FOFumS8WrDrqeGPzz2nf0ktIHEDEvYU6a', 'dnMheBLf3g3kFHwRp7MfHFzzUUnyPfyzu1FUyPnafAaKbeiT8uiEPuNbiDrd', '2020-03-23 20:34:45', '2020-03-23 20:34:45'),
(21, 'mohamed', 'm01127673780@gmail.com', '$2y$10$UkO2kZVpsMN3lfJP61ETU.Ke7TMZr.ZNVM6cn3bC2mv77LsFB5QVy', NULL, '2020-03-24 21:25:01', '2020-03-24 21:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `countreis`
--

CREATE TABLE `countreis` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countreis`
--

INSERT INTO `countreis` (`id`, `country_name_ar`, `country_name_en`, `mob`, `code`, `logo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Egypt', 'MacKenzie Burke', 'Impedit illum veni', 'Et et non eius rerum', 'countreis/hUziv4X42NMzmSbGDWSxUe1URw8mWRI0HBHCYbKe.png', NULL, '2020-03-09 20:26:33', '2020-04-19 06:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `dep_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dep_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dep_name_ar`, `dep_name_en`, `description_ar`, `description_en`, `keyword_en`, `keyword_ar`, `icon`, `parent`, `created_at`, `updated_at`) VALUES
(13, 'احدث المنتجات القسم الاول 1', 'The latest products, section 1', NULL, NULL, NULL, NULL, 'departments/m9KT3nlzyh2B0fze2HKwNanyi5v2Ebxkv5N9Q7A0.png', NULL, '2020-03-08 16:36:46', '2020-03-17 21:06:17'),
(14, 'احدث المنتجات القسم الثانى 2', 'Latest products, second section 2', NULL, NULL, NULL, NULL, 'departments/iMrovlIZg1GgOCFIutbG3YRFsDauyajt3nkaOmgx.jpeg', NULL, '2020-03-08 16:37:19', '2020-03-17 21:08:41'),
(15, 'أحدث المنتجات ، القسم الثالث 3', 'Latest products, section three  3', NULL, NULL, NULL, NULL, 'departments/OBX6E10AflqUGbe4tLBSbr9iQ8qo62hfot67jEo1.gif', NULL, '2020-03-08 16:39:43', '2020-03-17 21:10:16'),
(16, 'منتجات مميزة القسم الثانى 2', 'Featured products, second  section 2', NULL, NULL, NULL, NULL, 'departments/hLjMTMjV1NR4vrESBgL2hbhHRcpjHN4B2WY0pIZg.jpeg', NULL, '2020-03-08 16:40:05', '2020-03-17 20:46:58'),
(18, 'منتجات مميزة  القسم الاول', 'Featured products, first section', NULL, NULL, NULL, NULL, 'departments/KaREbXfdVMGukYzQNScRG7yYTIVMrYmPY1azvpr9.jpeg', NULL, '2020-03-11 06:37:36', '2020-03-17 20:45:01'),
(19, 'الاكثر طلباً', 'the most wanted', NULL, NULL, NULL, NULL, 'departments/ZNOvaCxBsR0C56vE1JeZpwbdDOzdQhqV7H2TAVT1.jpeg', NULL, '2020-03-11 11:16:10', '2020-03-17 20:40:52'),
(20, 'عروض خاصه', 'special offers', NULL, NULL, NULL, NULL, 'departments/umlU9XE2V8wBwxvTvpUlvnSr2bPss0iGxnDBp60i.jpeg', NULL, '2020-03-11 11:29:29', '2020-03-17 20:37:34'),
(21, 'الاكثر مبيعاً', 'Best seller', NULL, NULL, NULL, NULL, 'departments/TNzYgYDkt1DavnFt7mj05sUJhQ4RrVmNzqleHuwr.jpeg', NULL, '2020-03-11 12:22:42', '2020-03-17 20:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frontends`
--

CREATE TABLE `frontends` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_larg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_insid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_three_img_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_three_img_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_three_img_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_tow_img_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_tow_img_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_footer_about_ar` longtext COLLATE utf8mb4_unicode_ci,
  `section_footer_about_en` longtext COLLATE utf8mb4_unicode_ci,
  `section_footer_img_about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_footer_img_payment_methods` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_footer_address_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_footer_address_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_footer_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_footer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_footer_sen_message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_footer_sen_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_footer_payment_methods` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontends`
--

INSERT INTO `frontends` (`id`, `logo`, `icon`, `img_larg`, `img_insid`, `section_three_img_one`, `section_three_img_two`, `section_three_img_three`, `section_tow_img_one`, `section_tow_img_two`, `section_footer_about_ar`, `section_footer_about_en`, `section_footer_img_about`, `section_footer_img_payment_methods`, `section_footer_address_ar`, `section_footer_address_en`, `section_footer_phone`, `section_footer_email`, `section_footer_sen_message`, `section_footer_sen_email`, `section_footer_payment_methods`, `facebook`, `twitter`, `instagram`, `gmail`, `created_at`, `updated_at`) VALUES
(1, 'frontends/E4nAoY15TNVA63s1OBFtKFa3RvwTwhlgfGAhwSDI.jpeg', 'frontends/i6TwH6o0NYXZSysCeMmj0PekZHj6IMLFB99Z5zsM.jpeg', 'frontends/2HxLnuwFBwhJCOOXb4K3WafeQyvEFr9eIPkIAYYN.jpeg', 'frontends/N9e70nKJ59nzXtTTGrXX706FRQqPeo3qvldLmJp4.jpeg', 'frontends/wHur1Q1wfulGJ7AIZaMhjJS2EYh5sIhLNxNau3Zu.jpeg', 'frontends/sMMoxXpQvRNy9JVxbXCPP3Nr7rGdeaWiGWo8v8kE.jpeg', 'frontends/DgSv0JKT7ak6joKhKMdw8yC17qfqDSsDQbwdraAC.jpeg', 'frontends/31OYcIAGv7Rt8MXORNhNmV3Z6kzA2toAU9sAwWsh.png', 'frontends/bBWjGZNN2wLL77zhQKuNYdw2c6GDyUsYAu3SBhpt.png', 'كراكى .كوم هو موقع تجارة إلكترونية ويضم العديد من المنتجات الغذائية الصحية وكل متطلبات المطبخ والمكسرات والقهوة والتمور والأعشاب والتوابل لأشهر البرندات المحلية والعالمية في مكان واحد من خلال لينك   cracky-eg.com لتصلك الى باب المنزل في أي مكان في مصر والوطن العربي وهو أول موقع إلكتروني يبيع منتجات مصرية في دول خارج مصر بخدمة Dor to Dor ويعمل كموقع للبيع بالتجزئة للعملاء بالإضافة الى أنه يعمل كسوق للبائعين من جهات خارجية بحيث يقدم تجربة تسوق مرنة وآمنة للعديد من السلع والمنتجات الحيوية بالإضافة أنه يقدم عملية الدفع عند الإستلام أو الدفع الألكتروني مع إمكانية إرجاع السلع مجانا بدون رسوم + تعويض العميل . ويعمل كموقع للبيع بالتجزئة للعملاء بالإضافة الى أنه يعمل كسوق للبائعين من جهات خارجية بحيث يقدم تجربة تسوق مرنة وآمنة للعديد من السلع والمنتجات الحيوية و التوصيل في جمهورية مصر العربية, المملكة العربية السعودية و الامارات العربية المتحدة. بالإضافة أنه يقبل طرق سداد مختلفة منها: “الدفع عند الإستلام, بطاقات الدفع الالكترونية: فيزا و ماستركارد” مع “إمكانية إرجاع السلع مجانا بدون رسوم و شحن مجاني داخل جمهورية مصر العربية للطلبات التي تتعدي قيمتها 300ج.م “ يمكنم التواصل معنا عببر الوسائل', 'healthy food products and all the requirements of the kitchen, nuts, coffee, dates, herbs and spices for the most famous local and international notes in one place through the link cracky-eg.com to get you to the door of the house anywhere in Egypt and the Arab world, which is the first site Electronic sells Egyptian products in countries outside Egypt with Dor to Dor service and works as a retail site for customers in addition to that it works as a market for sellers from external parties to provide a flexible and safe shopping experience for many vital goods and products in addition to it provides the process of payment upon receipt or electronic payment with Spatial free to return the goods without fee + customer compensation. It acts as a retail site for customers in addition to serving as a market For third-party sellers to provide a flexible and secure shopping experience for many vital goods and products and delivery in the Arab Republic of Egypt,', 'frontends/fCVXCpd09zzizWiSt730IjyZQPGMzLCSj9R5WufO.jpeg', 'frontends/xwAhEqifbkZ1A88sGCDQgba0LSFujWqG9MZr9KlM.png', 'Dicta dolor dolorem', 'Et id sint hic quod', '01115568077', 'craky2020@gmail.com', 'Voluptatem soluta s', 'mostafa.print3@gmail.com', NULL, 'Ipsum unde reprehen', 'Fugit ut eu optio', 'Nostrum recusandae', 'Magni est saepe ut', NULL, '2020-03-30 16:51:46');

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
(3, '2020_02_11_211915_create_admins_table', 1),
(4, '2020_02_11_211915_create_countreis_table', 1),
(5, '2020_02_26_112449_create_settings_table', 1),
(6, '2020_02_27_190156_create_files_table', 1),
(7, '2020_03_02_124916_create_departments_table', 1),
(9, '2020_03_02_124916_create_products_table', 2),
(10, '2020_03_02_124916_create_sliders_table', 3),
(11, '2020_03_02_124916_create_frontends_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('m01127673780@gmail.com', '$2y$10$693Kh0bG03pdm.3YeQLkxeK5j3r6jX9PTKIWd7fTyvN2ehWlN8xnC', '2020-03-25 01:10:31'),
('m01127673780@gmail.com', 'a02c56521f9d3600a4b76e653d5c7b7d4ed2454f2a82a67aaaa9f09698ee3350', '2020-03-25 01:10:31'),
('m@m.com', '$2y$10$rgrD5GNWWgqrSA/8KW0y.ekrqUjTCo1mz84wYOSY7fcfw49Ee6sim', '2020-04-19 06:43:34'),
('m@m.com', 'a86a54739c61449e3fe948b9d681f5db7595d2c5c70a477c25c29964fc0ab66b', '2020-04-19 06:43:34'),
('admin@test.com', '$2y$10$BnR6JS4Gz7s6SvFQ4tQYfOy1rkQD55Km2cz5/qXM5Vol7x31AHznW', '2020-04-19 06:47:51'),
('admin@test.com', '53c4a3291d8eca8c07b9c27d8ced36b8bba9c9a5ced0e9320298c4a7cd911f75', '2020-04-19 06:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_by_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_by_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_by_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_offer` decimal(5,2) NOT NULL DEFAULT '0.00',
  `price_old` decimal(5,2) NOT NULL DEFAULT '0.00',
  `price` decimal(5,2) NOT NULL DEFAULT '0.00',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name_ar`, `product_name_en`, `description_ar`, `description_en`, `add_by_ar`, `add_by_en`, `add_by_photo`, `discount`, `price_offer`, `price_old`, `price`, `photo`, `department_id`, `created_at`, `updated_at`) VALUES
(51, 'فرفشة', 'FRFASHA', 'Quidem ab quod ea no', 'Et hic ducimus solu', 'Consequat Qui sit l', 'Enim sit et id eum', NULL, 'Animi nobis fugiat', '0.00', '0.00', '0.00', 'products/TfLw4ngt9Xr4rT095OF5bkVURlupqqGssxkvM0Ab.jpeg', 13, '2020-03-17 05:06:08', '2020-03-21 15:45:35'),
(58, 'فينجرز كاتشب', 'Fingers ketchup', 'فينجرز مقرمشات بطعم الكاتشب', 'Fingers crunchy ketchup flavor', 'Corporis unde dolore', 'Est nulla dolore eu', NULL, 'Praesentium et ea au', '1.00', '2.00', '1.00', 'products/NHaRibzjPhnvewEu4iWqDowBkobVCEePW9zttbLv.png', 15, '2020-03-17 05:22:20', '2020-03-21 15:52:18'),
(59, 'فينجرز سجق', 'Fingers sausage flavored crackers', 'فينجرز مقرمشات بطعم السجق', 'Fingers sausage flavored crackers', 'Dolorem aliquip sit', 'Id reprehenderit q', NULL, 'Amet dicta cupidita', '1.00', '2.00', '1.00', 'products/pctBNAtYF1YE7XAHs3LfPwNKZW9z0gXAErsaKJzf.png', 15, '2020-03-17 05:22:44', '2020-03-21 15:53:50'),
(60, 'فينجرز شطة وليمون', 'Fingers crispy pepper and lemon flavor', 'فينجرز بطعم الشطة والليمون', 'Fingers crispy pepper and lemon flavor', 'Pariatur Est ipsa', 'Dolores itaque volup', NULL, 'Quia est ut odio nos', '1.00', '2.00', '1.00', 'products/8Nq7HFJTogyHqHBmvwe84UIu5hewEoiL8PGa2l5b.png', 15, '2020-03-17 05:23:33', '2020-03-21 15:57:36'),
(62, 'Emi Hutchinson', 'Rinah Lara', 'Aliquid placeat ut', 'Aut adipisicing quis', 'Veniam aliquam dign', 'Quod incidunt elige', NULL, 'Accusantium et place', '348.00', '229.00', '647.00', 'products/8ZHuqoYkLv3loptdrO77AvANo3REdzeP5Pb4E7Lk.jpeg', 16, '2020-03-17 05:25:52', '2020-03-17 05:33:39'),
(63, 'Claire Thornton', 'Keiko Cash', 'Occaecat eum cumque', 'Consectetur error ma', 'Natus elit eum amet', 'Deserunt est volupta', NULL, 'Omnis aspernatur dol', '816.00', '26.00', '91.00', 'products/KOkaZaKQ1OITad1ulxwNvq41CXddnYtR7h4Cll7c.jpeg', 16, '2020-03-17 05:26:15', '2020-03-17 05:34:08'),
(64, 'Stuart Douglas', 'Wesley Glover', 'Est tenetur magnam', 'Aperiam voluptas mol', 'Sed ut repellendus', 'Eum architecto cumqu', NULL, 'Nihil molestias pari', '888.00', '605.00', '519.00', 'products/AqZ6pA04SMi5dA2DE4u8NYsfgKDmaqXXgKR1PR1e.jpeg', 16, '2020-03-17 05:26:35', '2020-03-17 05:34:31'),
(65, 'Branden Blackwell', 'Ebony Slater', 'Omnis sit explicabo', 'Et exercitationem od', 'Culpa consequat It', 'Et corrupti digniss', NULL, 'Mollit ea quis esse', '375.00', '850.00', '958.00', 'products/bYCR3L5Pd3kOz5dM36hgYa0l9JpSR6L6tZzLB28U.jpeg', 18, '2020-03-17 05:28:10', '2020-04-18 21:22:33'),
(66, 'Patience Odom', 'Xerxes Finch', 'Impedit quis quas a', 'Modi dolor cupiditat', 'Id sed minus dolorem', 'Iste qui dolorum sap', NULL, 'Sit vero earum ut i', '459.00', '739.00', '859.00', 'products/nOmIfS8rLYS6sD9KPiWF4dA418WiYReV91uqqmgO.jpeg', 16, '2020-03-17 05:28:52', '2020-03-17 05:35:49'),
(67, 'Xandra Harris', 'Mariko Charles', 'Sequi exercitationem', 'Ea neque non id expe', 'Adipisci odio labori', 'Nisi sit expedita n', NULL, 'Voluptatibus mollit', '558.00', '863.00', '179.00', 'products/ijC74bMXXDntcEUH6GCUgZhtPrWZVC6qOXJSb9VE.jpeg', 16, '2020-03-17 05:37:16', '2020-03-17 05:37:16'),
(69, 'Bianca Howell', 'Ruth Rowe', 'Dolore porro excepte', 'Quas aut culpa asper', 'Earum qui voluptate', 'Quaerat maxime asper', NULL, 'Maiores quod et expe', '938.00', '110.00', '822.00', 'products/8FlRzjMKrzs5w8T3q1E58PiG5UOOZLYzR9kagXmB.jpeg', 20, '2020-03-17 05:39:57', '2020-03-17 05:39:57'),
(71, 'Jerome Delgado', 'Zenia Burke', 'Et voluptatem quia', 'Inventore eum est la', 'Consequatur Dolores', 'Sed doloremque inven', NULL, 'Porro deserunt sapie', '588.00', '626.00', '64.00', 'products/jZvE2R1dgaIg4ZxbdJnrAldp8auHy3ecGVKdlXBt.jpeg', 20, '2020-03-17 05:43:05', '2020-03-17 05:43:05'),
(72, 'Hyacinth Pope', 'Signe Macdonald', 'Sit ea aliquid labo', 'Corporis harum sit e', 'Non aut quia a ex qu', 'Aute esse accusamus', NULL, 'Ex iure non officia', '487.00', '972.00', '957.00', 'products/lVZNV5Ra21dmfIlqdvyVD13IgRQKu1BrL3FlVaYx.jpeg', 20, '2020-03-17 05:43:30', '2020-03-17 05:43:30'),
(73, 'Paki Dudley', 'Kiara Munoz', 'Velit doloremque co', 'Voluptate veniam ac', 'In voluptate volupta', 'Vel quo reprehenderi', NULL, 'Eum fugiat et volup', '588.00', '345.00', '150.00', 'products/4DBqgG93CRiwAwvpu7K5kq2hkIAcsctIIc4mCYjU.jpeg', 20, '2020-03-17 05:43:54', '2020-03-17 05:43:54'),
(74, 'Leigh Bernard', 'Erin Fulton', 'Ducimus vitae bland', 'Consectetur sit quos', 'Voluptatem Quia ea', 'Velit voluptatibus s', NULL, 'Est velit rerum ven', '268.00', '967.00', '95.00', 'products/ZOn1InDmEK4KfAXiWaHi1XhsB5QHpDWUvU3SbXxb.jpeg', 20, '2020-03-17 05:44:21', '2020-03-17 05:44:21'),
(79, 'فينجرز شطة وليمون', 'Shata and lemon crackers', 'مقرمشات سناكس بطعم الشطة والليمون', 'Shata and lemon crackers', 'مصطفى أبوهشيمة', 'Mostafa.Abohashima', 'products/a8myRHDXTRgl7zz1mvjmLkbVEnCl8irZn9QmjK7H.jpeg', 'Et cupiditate sunt', '0.00', '1.00', '2.00', 'products/m0MHMJOebY0c8O6DFg3TJWL84H9JPNyP2Zr24Hmp.jpeg', 19, '2020-03-17 05:48:13', '2020-03-22 21:44:42'),
(80, 'Sheila Payne', 'Brooke Kane', 'Non accusantium labo', 'Tempor voluptates mo', 'Ullamco est elit do', 'Nisi velit doloremqu', NULL, 'Earum vel nostrum do', '432.00', '283.00', '658.00', 'products/4DYSJMpSPVBd39HlcnGaDFZFSXUCu0hWnU7XGfpM.jpeg', 21, '2020-03-17 05:49:24', '2020-03-17 05:49:24'),
(84, 'فينجرز كاتشب', 'Ketchup crackers', 'مقرمشات بطعم الكاتشب', 'Ketchup crackers', 'مصطفى أبوهشيمة', 'Mostafa.Abohashima', 'products/0xopn8Oku7zbO1sEVma4xcQQk6PyX2pgMYinhYlk.jpeg', '0.00', '0.00', '1.00', '2.00', 'products/C0nBydrbPu3txBCN25nYtpqCNBdin6uRf6XWr9sE.jpeg', 19, '2020-03-17 20:39:39', '2020-03-22 21:45:22'),
(90, 'فينجرز بالكاتشب', 'vers;sk', 'فينجرز', 'sgsgjhg', NULL, NULL, NULL, NULL, '0.00', '2.00', '1.00', 'products/eeTOuqwf1TvdFDCuvJw5PvREBN32gC3O5Vb8NbR9.png', 13, '2020-03-21 16:12:33', '2020-03-21 16:12:33'),
(91, 'فينجرز بالجبنة', 'Fingers Cheese', 'مقرمشات سناكس بطعم الجبنة', 'Fingers Cheese', 'مصطفى أبوهشيمة', 'Mostafa.Abohashima', 'products/cvUECnhtU0Oe0bugku9JSvPbpUFKxlnXAN1KkHQf.jpeg', '0.00', '0.00', '1.00', '2.00', 'products/UYAg9DIZYJO3PKBMpdy0hOKuGEmmPo3lKumQGKLI.jpeg', 19, '2020-03-22 21:19:17', '2020-03-22 21:48:21'),
(92, 'فينجرز سجق', 'Hot Dogs Sausage', 'مقرمشات بطعم السجق', 'Hot Dogs Sausage', 'مصطفى أبوهشيمة', 'Mostafa.Abohashima', 'products/0Ml8ieVh68dP5f8Jpun38krvucnTXbOVLt7BlZdZ.jpeg', '0.00', '0.00', '1.00', '2.00', 'products/J5DN5MLd6JIgkYFOis3b3L2s36vlRkIkvj9a2lIb.jpeg', 19, '2020-03-22 21:21:36', '2020-03-22 21:47:09'),
(93, 'كريك نتس', 'CRICK NUTS', 'فول سودانى', 'فول سودانى CRICK NUTS', 'مصطفى أبوهشيمة', 'Mostafa.Abohashima', 'products/5fSXAEjQwnGeamWGYVuzz66UiNRLxYcvfNvgpEkk.jpeg', '0.00', '0.00', '2.00', '1.00', 'products/Lj60Fi1Lf5JYRvVy7AgSCEJKSZgKFtgY3bIQj7Yu.jpeg', 19, '2020-03-22 21:23:37', '2020-03-22 21:23:37'),
(94, 'مقرمشات فرفشة', 'Farfasha crackers', 'Farfasha crackers', 'Farfasha crackers', 'مصطفى أبوهشيمة', 'Mostafa.Abohashima', 'products/BfxoRNHfJ0qAhrtdSCEShl2NSLoe5Hsw56bhAZYq.jpeg', '0.00', '0.00', '2.00', '1.00', 'products/8eldrM2bPBcc6UhmJ8VrvN7J5zcBpofxBS32kj49.jpeg', 19, '2020-03-22 21:24:45', '2020-03-22 21:24:45'),
(96, 'فينجرز اصل الطعم', 'Vengers', 'فينجرز بطعم الكاتشب', 'vengers', 'mostafa.abohashima', 'mostafa.abohashima', 'products/Xgqy1Z0OP3YGCHDbZjsvyu6zRYlrBLtY6JS72xt9.jpeg', '0.00', '0.00', '0.00', '0.00', 'products/ltW7Fsm3fiE4PSQIfdMTyTl8KdzpVSnF7oH2LBQV.jpeg', 13, '2020-03-30 17:00:10', '2020-03-30 17:00:10'),
(97, 'Madonna Cole', 'Otto Allen', 'Repellendus Eligend', 'Non consequa\r\ntur quo', 'Error ut laboriosam', 'Duis ut magna fugit', 'products/dhx7KHGTQ8LrnMXstVgMvlu7LnyOyo0ybA1hv0tn.jpeg', 'Doloremque adipisici', '643.00', '371.00', '329.00', 'products/EjMxlFvqPzNytkRHSdZjFpEmYIzmqCUsgCU7FvLs.jpeg', 18, '2020-04-18 18:38:38', '2020-04-18 20:45:24'),
(98, 'Chava Yates', 'Regan Townsend', 'Eiusmod maiores cons', 'Reprehenderit est', 'Est in quasi iure es', 'Laborum Officiis be', NULL, 'Dolorum aliquam duis', '340.00', '219.00', '522.00', 'products/YP4vbUDEm6jHuxZy3REOm9K57ZW1AmVmKPW0c0um.jpeg', 18, '2020-04-18 18:39:31', '2020-04-18 20:46:27'),
(99, 'Shana Clayton', 'Meredith Hines', 'Voluptatem velit do', 'Porro odit enim fugi', 'Ipsum veritatis exer', 'Molestias elit adip', NULL, 'Eaque elit pariatur', '124.00', '753.00', '343.00', 'products/0S7HeR6Up7QpLj6lACKVAE6v0UVNZSVttLWDxJYh.jpeg', 18, '2020-04-18 18:40:05', '2020-04-18 21:17:17'),
(100, 'Arden Palmer', 'Elvis Osborn', 'Hic occaecat qui in', 'Rerum irure magni na', 'At aute proident vi', 'Molestiae ad incidid', NULL, 'Velit architecto qua', '255.00', '43.00', '334.00', 'products/w50MN1DVFQguuyV2x3RyO4gtsti9P6vKSzs0LsnQ.jpeg', 18, '2020-04-18 18:40:44', '2020-04-18 21:15:21'),
(101, 'Leslie Alexander', 'Courtney Dunlap', 'Qui rerum officiis q', 'Molestiae sunt moles', 'Do expedita soluta c', 'Dolore dolorum maior', NULL, 'Quia error est aperi', '113.00', '452.00', '636.00', 'products/zZ1NOqGJ55eZYr375wZisPm87393VcrfW6XbwI0G.jpeg', 18, '2020-04-18 18:41:02', '2020-04-18 18:41:02'),
(102, 'Keegan Burt', 'Brenden Willis', 'Excepturi at saepe v', 'Id consequuntur cupi', 'Placeat non ut obca', 'Itaque rerum dolore', NULL, 'Qui totam in sint so', '835.00', '531.00', '732.00', 'products/C3GRNiyQzNMIcuApdQa4zNua3ZbD2N8w9FhRTtN0.jpeg', 14, '2020-04-18 19:00:26', '2020-04-18 19:00:26'),
(103, 'Lael Morin', 'Warren Whitley', 'Quam culpa nulla rer', 'Proident voluptas a', 'Tempore aliquid des', 'Excepturi placeat m', NULL, 'Exercitationem omnis', '494.00', '571.00', '837.00', 'products/71x3nyTUk7RO1eK2pwDXtkULmiv0JbY1GOlHEMsH.jpeg', 14, '2020-04-18 19:01:06', '2020-04-18 19:21:35'),
(104, 'Helen Gillespie', 'Quinlan Reeves', 'Deserunt doloribus t', 'Non autem quia dolor', 'Magni nostrum id rer', 'Pariatur Praesentiu', NULL, 'Aute qui repellendus', '623.00', '192.00', '61.00', 'products/Fp74KBq72cGCbVdXE2GzHwq5SKHueDE8SblEf11q.jpeg', 14, '2020-04-18 19:01:58', '2020-04-18 19:19:34'),
(105, 'Hashim William', 'Charlotte Alvarez', 'Voluptatem voluptas', 'Quod rem quibusdam n', 'Placeat ratione nob', 'Fugiat tempora omni', NULL, 'Sunt doloremque dol', '443.00', '35.00', '309.00', 'products/ti9oRpvsMqEM5HjnFYwA3qRG2vkW9WXYKkSdFc8a.jpeg', 14, '2020-04-18 19:02:33', '2020-04-18 19:18:58'),
(106, 'Martha Pittman', 'Fletcher Rosales', 'Labore et porro sunt', 'Ipsam ad fugiat ulla', 'Exercitation maxime', 'Quis eum quia atque', NULL, 'Laborum dolore deser', '273.00', '683.00', '28.00', 'products/HzdSV7zDblfYDNr8JV9secZu0FN8oK7LAnEUhnY1.jpeg', 14, '2020-04-18 19:02:53', '2020-04-18 19:19:54'),
(107, 'Kaden French', 'Vaughan Orr', 'Ratione voluptate cu', 'Magni quis fugiat cu', 'Praesentium culpa ex', 'Error veniam sit al', NULL, 'Laborum Molestiae q', '37.00', '259.00', '121.00', 'products/8ipzPFYJQyEZr04H6OCoasVYclr4sWjfdrQdYITn.jpeg', 14, '2020-04-18 19:03:26', '2020-04-18 19:20:33'),
(108, 'Robert Humphrey', 'Jemima Fleming', 'Dolor rerum qui sed', 'Dolor enim pariatur', 'Quia velit temporibu', 'Facilis dolores itaq', NULL, 'Est quo non placeat', '588.00', '64.00', '532.00', 'products/sOszbqiYWtETKQ1ptoyHH2VEW3lXLhmRan3EPxs4.jpeg', 21, '2020-04-18 19:27:23', '2020-04-18 20:03:38'),
(109, 'Kristen English', 'Mikayla Carson', 'Ipsam sint veniam c', 'Velit tempore dolor', 'Animi fugit ut aut', 'Quia dolorem accusam', NULL, 'Magni nisi esse qui', '681.00', '752.00', '788.00', 'products/0svAFF0OmAAQyzZGAaeEm8TZ5joynj3rVOhhxbrt.jpeg', 21, '2020-04-18 19:29:02', '2020-04-18 19:29:02'),
(110, 'Fallon Fischer', 'Shaeleigh Ramirez', 'Quisquam temporibus', 'Molestias est cupidi', 'Molestiae ex proiden', 'Atque quo a doloremq', 'products/4te0iRzennlKTQl7FxC59ULSfNYjgAQJNWTCb7UP.jpeg', 'Labore aperiam odio', '43.00', '513.00', '48.00', 'products/RDUZ7fsxsEaASzDsh5PlG0fcWAggChfnffXcxmjW.jpeg', 21, '2020-04-18 19:32:48', '2020-04-18 19:32:48'),
(111, 'Lana Murphy', 'Howard Mcfarland', 'Et explicabo Proide', 'Vel corrupti nostru', 'Mollit assumenda sim', 'Ipsum labore invent', NULL, 'Sint impedit labor', '643.00', '199.00', '930.00', 'products/MepUNh5F9Znz7OnVMlt31FWWhgXkqmmN0rbw6BUi.jpeg', 18, '2020-04-18 21:17:54', '2020-04-18 21:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sitename_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sitename_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_maintenance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_maintenance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ar',
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `keywords` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('open','close') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `message_maintenance` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename_ar`, `sitename_en`, `logo`, `icon`, `img_maintenance`, `bg_maintenance`, `email`, `main_lang`, `description`, `keywords`, `status`, `message_maintenance`, `created_at`, `updated_at`) VALUES
(1, 'كراكي للصناعات الغذائية', 'craky eg', 'settings/872L9JgXnzl8pvPBwExDt2pnXu55jkrzTp4FiQ8S.jpeg', 'settings/M1O4S5KJgDoXTJx62CeUCUKWv5PCqdmQBPm8XeS5.jpeg', 'settings/aiOAdsuU0BaTtw12Mo5cDorZIvBBTLRmNHYglc0P.png', 'settings/Dn7jhmOTt2JrFTcAN2gdo53jOjpaGQK9vUisWzzd.jpeg', 'craky2020@gamil.com', 'ar', 'شركة كركي للصناعات الغذائية بمدينة 6 أكتوبر\r\nمقرمشات سناكس', 'Non dolores facilis', 'open', 'Tempor necessitatibu', '2020-03-07 16:10:33', '2020-04-19 06:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `link`, `head_en`, `head_ar`, `title_en`, `title_ar`, `text1_ar`, `text1_en`, `text2_ar`, `text2_en`, `text3_ar`, `text3_en`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'فينجرز قراميش', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sliders/yyHq1BfhfmDZ4WqHSDLVR33h3utSIF8of5bCasod.jpeg', '2020-03-07 19:37:14', '2020-03-17 02:05:00'),
(3, 'كريك نتس قراميش بطعم الجبنة', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sliders/dkZ0vnIimwmA9GbrCHDog4EGTouvMy7z1kgQOtZr.jpeg', '2020-03-07 19:58:38', '2020-03-17 02:06:13'),
(4, 'كريك نتس قراميش بطعم  الصوص الحار', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sliders/v2LxtmRhOEfv5JweOUxbl69wbn4ZNsqINlTTMWwZ.jpeg', '2020-03-07 19:58:48', '2020-03-17 02:06:56'),
(8, 'Quia ipsum in quia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sliders/s62FPcGwaJ0lbI2K0qxbBJLUQL5Ujft53BprGvYc.jpeg', '2020-03-17 03:57:32', '2020-03-17 03:57:32'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sliders/9zR6Nv3KqevY2pJIypOKAQNakV4PInmThXNPtHyr.jpeg', '2020-03-17 03:58:57', '2020-03-17 03:58:57'),
(11, 'فينجرز قراميش بطعم الجبنة', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sliders/mob1WyBOFMkJNUvTVLe3CaAmzM1cYVYsuHDAw6tz.jpeg', '2020-03-19 03:25:13', '2020-03-19 03:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('user','vendor','company','labor_Office','corporation','store') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'test store', 'admin@test.com', '$2y$10$2FbkV1vdLKc9JhubufVIZ.B8EO9EbP4C6maU0OINb2/9zyxUAgRhi', 'store', NULL, '2020-03-17 01:07:53', '2020-03-17 01:07:53'),
(5, 'test 2 company', 'jepiwu@mailinator.net', '$2y$10$vZWiliJ9ZxJuXJdgnn5yu.4QB.DcYE/.H6VvOy/kMXMtkJAdn9UZO', 'company', NULL, '2020-03-17 01:08:33', '2020-03-17 01:08:33'),
(6, 'ttttttttt', 'lusykorul@mailinator.com', '$2y$10$Ke4./FLlyYSFjuH3S33KLOnR7kgezeYFZye3p8WXlPrFwWY9YElzO', 'vendor', NULL, '2020-03-17 01:08:59', '2020-03-17 01:08:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countreis`
--
ALTER TABLE `countreis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_parent_foreign` (`parent`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontends`
--
ALTER TABLE `frontends`
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
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_department_id_foreign` (`department_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `countreis`
--
ALTER TABLE `countreis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontends`
--
ALTER TABLE `frontends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_parent_foreign` FOREIGN KEY (`parent`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
