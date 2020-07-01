-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 06:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL,
  `checking_at` datetime DEFAULT NULL,
  `paid_at` datetime DEFAULT NULL,
  `cancelled_at` datetime DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_category` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `created_at`, `updated_at`, `name_category`) VALUES
(1, NULL, NULL, 'ยาแก้ปวดท้อง ท้องอืดท้องเฟ้อ ท้องขึ้น'),
(2, NULL, NULL, 'ยาแก้ท้องเสีย'),
(3, NULL, NULL, 'ยาคุมกำเนิด'),
(4, NULL, NULL, 'ยาแก้แพ้ เมารถ คลื่นไส้'),
(5, NULL, NULL, 'ยาแก้ปวด'),
(6, NULL, NULL, 'ยาใช้ภายนอก');

-- --------------------------------------------------------

--
-- Table structure for table `lots`
--

CREATE TABLE `lots` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deteexp_at` datetime DEFAULT NULL,
  `drug_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` double(8,2) DEFAULT NULL,
  `stock_im` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lots`
--

INSERT INTO `lots` (`id`, `created_at`, `updated_at`, `deteexp_at`, `drug_id`, `cost`, `stock_im`, `user_id`) VALUES
(8, '2020-06-23 03:26:37', '2020-06-23 03:26:37', NULL, 'CE001101', 5.00, 500, NULL),
(9, '2020-06-23 03:38:46', '2020-06-23 03:38:46', NULL, 'CE001101', 5.00, 500, NULL),
(10, '2020-06-23 03:39:01', '2020-06-23 03:40:14', NULL, 'SA001102', 3.00, 500, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2020_01_20_150930_create_categorys_table', 1),
(9, '2020_04_15_044419_add_name_categorys_to_categorys_table', 1),
(10, '2020_04_16_042129_add_deteil_to_products_table', 1),
(11, '2020_04_16_083654_create_products_table', 1),
(12, '2020_04_17_051146_change_columns_to_informations_table', 1),
(13, '2020_04_30_072237_change_columns_to_categorys_table', 1),
(14, '2020_05_27_011328_change_columns_to_products_table', 1),
(15, '2020_05_27_104706_add_status_id_to_products_table', 1),
(16, '2020_06_22_221218_change_columns_to_productsdefault_table', 2),
(17, '2020_06_22_230200_create_lots_table', 3),
(18, '2020_06_23_115836_create_sales_table', 4),
(19, '2020_06_23_201812_add_vat_id_to_sales_table', 5),
(20, '2020_06_23_234105_add_vatpercent_id_to_sales_table', 6),
(21, '2020_06_24_175616_add_total_id_to_sales_table', 7),
(22, '2020_06_25_160558_create_bills_table', 8),
(23, '2020_06_25_161651_add_billid_to_sales_table', 9),
(24, '2020_06_25_162514_add_role_to_sales_table', 10),
(27, '2020_06_27_002748_create_scans_table', 11),
(30, '2020_07_01_171421_add_user_id_to_products_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pro_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drug_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_sale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleprice` float DEFAULT NULL,
  `stock_ps` int(11) DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `redysale_at` datetime DEFAULT NULL,
  `mostout_at` datetime DEFAULT NULL,
  `souout_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `pro_name`, `drug_id`, `contain`, `status_sale`, `saleprice`, `stock_ps`, `category_id`, `redysale_at`, `mostout_at`, `souout_at`, `user_id`) VALUES
(1, NULL, '2020-05-25 16:27:11', 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 'CE001101', 'ขวด', 'redysale', 35, 1000, 5, NULL, NULL, NULL, NULL),
(2, NULL, '2020-05-25 16:27:26', 'Panadol (ยาลดไข้ ระดับต้น)', 'PA001102', 'แผง', 'redysale', 39, 1000, 5, NULL, NULL, NULL, NULL),
(3, NULL, '2020-05-25 16:27:37', 'Paracap 500 ml (ยาลดไข้ ระดับต้น)', 'PA001101', 'ขวด', 'redysale', 50, 1000, 5, NULL, NULL, NULL, NULL),
(4, NULL, '2020-05-25 16:27:50', 'Sara 500 ml (ยาลดไข้ ระดับต้น)', 'SA001101', 'ขวด', 'redysale', 100, 1000, 5, NULL, NULL, NULL, NULL),
(5, NULL, '2020-05-25 16:28:06', 'Tylenol 500 ml (ยาลดไข้ ระดับต้น)', 'TY001101\'', 'ขวด', 'redysale', 100, 1000, 5, NULL, NULL, NULL, NULL),
(6, NULL, '2020-05-25 16:28:22', 'Tylenol (ยาลดไข้ ระดับต้น)', 'TY001102', 'แผง', 'redysale', 10, 100, 5, NULL, NULL, NULL, NULL),
(7, NULL, '2020-05-25 16:28:33', 'Coprofen (ยาลดไข้ ระดับต้น)', 'CO001102', 'แผง', 'redysale', 20, 1000, 5, NULL, NULL, NULL, NULL),
(8, NULL, '2020-05-25 16:28:58', 'Sara (ยาลดไข้ ระดับต้น)', 'SA001102', 'แผง', 'redysale', 10, 0, 5, NULL, NULL, NULL, NULL),
(9, NULL, '2020-05-25 16:29:08', 'Anadol (ระดับกลาง ถึง รุนแรง)', 'AN001102', 'แผง', 'redysale', 100, 1000, 5, NULL, NULL, NULL, NULL),
(10, NULL, '2020-05-25 16:26:39', 'Amanda (ระดับกลาง ถึง รุนแรง)', 'AM001102', 'แผง', 'redysale', 100, 1000, 5, NULL, NULL, NULL, NULL),
(11, NULL, '2020-05-25 16:25:56', 'Tramadol ( ระดับกลาง ถึง รุนแรง)', 'TR001102', 'แผง', 'redysale', 100, 1000, 5, NULL, NULL, NULL, NULL),
(12, NULL, '2020-05-25 16:28:45', 'Cerazette (ยาคุมกำเนิด)', 'CE001102', 'แผง', 'redysale', 230, 1000, 3, NULL, NULL, NULL, NULL),
(13, NULL, '2020-05-25 16:29:19', 'Exluton (ยาคุมกำเนิด)', 'EX001102', 'แผง', 'redysale', 100, 1000, 3, NULL, NULL, NULL, NULL),
(14, NULL, '2020-05-25 16:29:25', 'Postinor (ยาคุมฉุกเฉิน)', 'PO001102', 'แผง', 'redysale', 40, 1000, 3, NULL, NULL, NULL, NULL),
(15, NULL, '2020-05-25 16:29:35', 'Madonna (ยาคุมฉุกเฉิน)', 'MA001102', 'แผง', 'redysale', 30, 1000, 3, NULL, NULL, NULL, NULL),
(16, NULL, NULL, 'ยาธาตุน้ำขาวไทยนคร 200 ml', 'KR001101', 'ขวด', 'redysale', 55, 1000, 1, NULL, NULL, NULL, NULL),
(17, NULL, NULL, 'ยาธาตุน้ำขาวสหการ 200 ml', 'SK001101', 'ขวด', 'redysale', 35, 1000, 1, NULL, NULL, NULL, NULL),
(18, NULL, NULL, 'ยาธาตุน้ำขาวตรากระต่ายบิน 50 ml', 'KT001101', 'ขวด', 'redysale', 15, 1000, 1, NULL, NULL, NULL, NULL),
(19, NULL, '2020-05-25 16:30:28', 'Dimenhydrinate', 'DI001102', 'แผง', 'redysale', 10, 1000, 4, NULL, NULL, NULL, NULL),
(20, NULL, '2020-05-25 16:30:37', 'Denim', 'DE001101', 'แผง', 'redysale', 10, 1000, 4, NULL, NULL, NULL, NULL),
(21, NULL, '2020-05-25 16:30:56', 'ยาคลอเฟนิรามีน (ยาแก้แพ้ ลมพิษ ผื่นคัน)', 'CH001102', 'แผง', 'redysale', 50, 1000, 4, NULL, NULL, NULL, NULL),
(22, NULL, NULL, 'เบลสิด ฟอร์ท 240 ml', 'BI001101', 'ขวด', 'redysale', 50, 1000, 1, NULL, NULL, NULL, NULL),
(23, NULL, NULL, 'Antacil 240 ml', 'AN001101', 'ขวด', 'redysale', 45, 1000, 1, NULL, NULL, NULL, NULL),
(24, NULL, NULL, 'ENO รสมะนาว', 'EN001104', 'ซอง', 'redysale', 12, 1000, 1, NULL, NULL, NULL, NULL),
(25, NULL, NULL, 'ENO รสส้ม', 'EN001204', 'ซอง', 'redysale', 12, 1000, 1, NULL, NULL, NULL, NULL),
(26, NULL, NULL, 'แอนตาซิน', 'AC001102', 'แผง', 'redysale', 10, 1000, 1, NULL, NULL, NULL, NULL),
(27, NULL, NULL, 'Royal-D (รสส้ม)', 'RO001104', 'ซอง', 'redysale', 12, 1000, 1, NULL, NULL, NULL, NULL),
(28, NULL, NULL, 'Oreda (รสส้ม)', 'OR001104', 'ซอง', 'redysale', 10, 1000, 1, NULL, NULL, NULL, NULL),
(29, NULL, '2020-05-25 16:31:37', 'ยาแก้ไอน้ำดำตราเสือดาว', 'BM001101', 'ขวด', 'redysale', 80, 1000, 7, NULL, NULL, NULL, NULL),
(30, NULL, '2020-05-25 16:31:49', 'แอมโมเนีย 30 ml', 'AM001101', 'ขวด', 'redysale', 15, 1000, 6, NULL, NULL, NULL, NULL),
(31, NULL, NULL, 'Ponstan 500', 'PT001102', 'แผง', 'redysale', 20, 1000, 1, NULL, NULL, NULL, NULL),
(32, NULL, '2020-05-25 16:33:40', 'ยาใส่แผลเบนตาดีน 30 ml', 'BN001101', 'ขวด', 'redysale', 20, 1000, 6, NULL, NULL, NULL, NULL),
(33, NULL, '2020-05-25 16:33:49', 'ทิงเจอร์ไอดีน', 'TI001101', 'ขวด', 'redysale', 50, 1000, 6, NULL, NULL, NULL, NULL),
(34, NULL, '2020-05-25 16:34:02', 'แอลกอฮอล์ 70% 30 ml', 'AL001101', 'ขวด', 'redysale', 15, 1000, 6, NULL, NULL, NULL, NULL),
(35, NULL, '2020-05-25 16:34:11', 'แอลกอฮอล์ 70% 60 ml', 'AL001201', 'ขวด', 'redysale', 20, 1000, 6, NULL, NULL, NULL, NULL),
(36, NULL, '2020-05-25 16:34:43', 'แอลกอฮอล์ 70% 240 ml', 'AL001301', 'ขวด', 'redysale', 48, 1000, 6, NULL, NULL, NULL, NULL),
(37, NULL, '2020-05-25 16:34:32', 'แอลกอฮอล์ 70% 450 ml', 'AL001401', 'ขวด', 'redysale', 80, 1000, 6, NULL, NULL, NULL, NULL),
(38, NULL, '2020-05-25 16:34:21', 'น้ำเกลือ Klean&Kare 500 ml', 'KK001101', 'ขวด', 'redysale', 50, 1000, 6, NULL, NULL, NULL, NULL),
(39, NULL, '2020-05-25 16:33:27', 'เบอร์นี่ เจล รักษาแผลไฟไหม้ น้ำร้อนลวก', 'BNT001103', 'หลอด', 'redysale', 50, 1000, 6, NULL, NULL, NULL, NULL),
(40, NULL, '2020-05-25 16:33:14', 'Hiruscar', 'HI001103', 'หลอด', 'redysale', 150, 1000, 6, NULL, NULL, NULL, NULL),
(41, NULL, '2020-05-25 16:33:02', 'Hirudoid', 'HD001103', 'หลอด', 'redysale', 80, 1000, 6, NULL, NULL, NULL, NULL),
(42, NULL, '2020-05-25 16:32:51', 'ยาหม่องชนิดขี้ผึ้ง แซม-บัค', 'SB001105', 'ตลับ', 'redysale', 46, 1000, 6, NULL, NULL, NULL, NULL),
(43, NULL, '2020-05-25 16:32:30', 'ยาหม่อง ตราถ้วยทอง', 'TT001106', 'กระปุก', 'redysale', 35, 1000, 6, NULL, NULL, NULL, NULL),
(44, NULL, '2020-05-25 16:32:20', 'Calamine คาลาไมน์ ตราเสือดาว 60 ml', 'CM001101', 'ขวด', 'redysale', 41, 1000, 6, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `saleprice` float DEFAULT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `total_beforesale` double DEFAULT NULL,
  `vat` double DEFAULT NULL,
  `vatpercent` double DEFAULT 7,
  `vat_totalafter` double(8,2) DEFAULT NULL,
  `total` double(8,2) DEFAULT 0.00,
  `bill_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `created_at`, `updated_at`, `saleprice`, `pro_name`, `category_id`, `user_id`, `amount`, `total_beforesale`, `vat`, `vatpercent`, `vat_totalafter`, `total`, `bill_id`) VALUES
(52, '2020-07-01 09:37:48', '2020-07-01 09:37:48', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, NULL, 1, NULL, NULL, 7, NULL, 35.00, NULL),
(53, '2020-07-01 09:41:22', '2020-07-01 09:41:22', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, NULL, 1, NULL, NULL, 7, NULL, 35.00, NULL),
(54, '2020-07-01 09:41:41', '2020-07-01 09:41:41', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 1, 20, NULL, NULL, 7, NULL, 700.00, NULL),
(55, '2020-07-01 09:46:09', '2020-07-01 09:46:09', 100, 'Anadol (ระดับกลาง ถึง รุนแรง)', 5, 1, 1, NULL, NULL, 7, NULL, 100.00, NULL),
(56, '2020-07-01 09:47:09', '2020-07-01 09:47:09', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 1, 1, NULL, NULL, 7, NULL, 35.00, NULL),
(57, '2020-07-01 09:50:47', '2020-07-01 09:50:47', 50, 'Paracap 500 ml (ยาลดไข้ ระดับต้น)', 5, NULL, 50, NULL, NULL, 7, NULL, 2500.00, NULL),
(58, '2020-07-01 09:53:59', '2020-07-01 09:53:59', 45, 'Antacil 240 ml', 1, NULL, 5, NULL, NULL, 7, NULL, 225.00, NULL),
(59, '2020-07-01 10:21:59', '2020-07-01 10:21:59', 50, 'Tramadol ( ระดับกลาง ถึง รุนแรง)', 5, NULL, 1, NULL, NULL, 7, NULL, 50.00, NULL),
(60, '2020-07-01 10:25:34', '2020-07-01 10:25:34', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, NULL, 10, NULL, NULL, 7, NULL, 350.00, NULL),
(61, '2020-07-01 15:59:11', '2020-07-01 15:59:11', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, NULL, 50, NULL, NULL, 7, NULL, 1750.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scans`
--

CREATE TABLE `scans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `drug_id` int(11) DEFAULT NULL,
  `sale_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scans`
--

INSERT INTO `scans` (`id`, `created_at`, `updated_at`, `drug_id`, `sale_id`) VALUES
(1, '2020-06-30 18:09:29', '2020-06-30 18:09:29', 1, 1),
(2, '2020-06-30 18:10:33', '2020-06-30 18:10:33', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'staff',
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `tel`) VALUES
(1, 'Pang', 'pangza115@hotmail.com', NULL, '$2y$10$DKHrwSfQRLQVv05rqQU7ZO4Mol8tClMjRae4uPdo4ZKEisZRlV6Ea', NULL, '2020-06-01 05:53:30', '2020-06-01 05:53:30', 'staff', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lots`
--
ALTER TABLE `lots`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scans`
--
ALTER TABLE `scans`
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
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lots`
--
ALTER TABLE `lots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `scans`
--
ALTER TABLE `scans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
