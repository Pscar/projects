-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 08:35 AM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pro_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_sale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleprice` int(11) DEFAULT NULL,
  `stock_ps` int(11) DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `pro_name`, `drug_id`, `contain`, `status_sale`, `saleprice`, `stock_ps`, `category_id`) VALUES
(1, NULL, '2020-05-25 23:27:11', 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 'CE001101', 'ขวด', NULL, 35, 1000, 5),
(2, NULL, '2020-05-25 23:27:26', 'Panadol (ยาลดไข้ ระดับต้น)', 'PA001102', 'แผง', NULL, 39, 1000, 5),
(3, NULL, '2020-05-25 23:27:37', 'Paracap 500 ml (ยาลดไข้ ระดับต้น)', 'PA001101', 'ขวด', NULL, 50, 1000, 5),
(4, NULL, '2020-05-25 23:27:50', 'Sara 500 ml (ยาลดไข้ ระดับต้น)', 'SA001101', 'ขวด', NULL, 100, 1000, 5),
(5, NULL, '2020-05-25 23:28:06', 'Tylenol 500 ml (ยาลดไข้ ระดับต้น)', 'TY001101\'', 'ขวด', NULL, 100, 1000, 5),
(6, NULL, '2020-05-25 23:28:22', 'Tylenol (ยาลดไข้ ระดับต้น)', 'TY001102', 'แผง', NULL, 10, 1000, 5),
(7, NULL, '2020-05-25 23:28:33', 'Coprofen (ยาลดไข้ ระดับต้น)', 'CO001102', 'แผง', NULL, 20, 1000, 5),
(8, NULL, '2020-05-25 23:28:58', 'Sara (ยาลดไข้ ระดับต้น)', 'SA001102', 'แผง', NULL, 10, 1000, 5),
(9, NULL, '2020-05-25 23:29:08', 'Anadol (ระดับกลาง ถึง รุนแรง)', 'AN001102', 'แผง', NULL, 100, 1000, 5),
(10, NULL, '2020-05-25 23:26:39', 'Amanda (ระดับกลาง ถึง รุนแรง)', 'AM001102', 'แผง', NULL, 100, 1000, 5),
(11, NULL, '2020-05-25 23:25:56', 'Tramadol ( ระดับกลาง ถึง รุนแรง)', 'TR001102', 'แผง', NULL, 100, 1000, 5),
(12, NULL, '2020-05-25 23:28:45', 'Cerazette (ยาคุมกำเนิด)', 'CE001102', 'แผง', NULL, 230, 1000, 3),
(13, NULL, '2020-05-25 23:29:19', 'Exluton (ยาคุมกำเนิด)', 'EX001102', 'แผง', NULL, 100, 1000, 3),
(14, NULL, '2020-05-25 23:29:25', 'Postinor (ยาคุมฉุกเฉิน)', 'PO001102', 'แผง', NULL, 40, 1000, 3),
(15, NULL, '2020-05-25 23:29:35', 'Madonna (ยาคุมฉุกเฉิน)', 'MA001102', 'แผง', NULL, 30, 1000, 3),
(16, NULL, NULL, 'ยาธาตุน้ำขาวไทยนคร 200 ml', 'KR001101', 'ขวด', NULL, 55, 1000, 1),
(17, NULL, NULL, 'ยาธาตุน้ำขาวสหการ 200 ml', 'SK001101', 'ขวด', NULL, 35, 1000, 1),
(18, NULL, NULL, 'ยาธาตุน้ำขาวตรากระต่ายบิน 50 ml', 'KT001101', 'ขวด', NULL, 15, 1000, 1),
(19, NULL, '2020-05-25 23:30:28', 'Dimenhydrinate', 'DI001102', 'แผง', NULL, 10, 1000, 4),
(20, NULL, '2020-05-25 23:30:37', 'Denim', 'DE001101', 'แผง', NULL, 10, 1000, 4),
(21, NULL, '2020-05-25 23:30:56', 'ยาคลอเฟนิรามีน (ยาแก้แพ้ ลมพิษ ผื่นคัน)', 'CH001102', 'แผง', NULL, 50, 1000, 4),
(22, NULL, NULL, 'เบลสิด ฟอร์ท 240 ml', 'BI001101', 'ขวด', NULL, 50, 1000, 1),
(23, NULL, NULL, 'Antacil 240 ml', 'AN001101', 'ขวด', NULL, 45, 1000, 1),
(24, NULL, NULL, 'ENO รสมะนาว', 'EN001104', 'ซอง', NULL, 12, 1000, 1),
(25, NULL, NULL, 'ENO รสส้ม', 'EN001204', 'ซอง', NULL, 12, 1000, 1),
(26, NULL, NULL, 'แอนตาซิน', 'AC001102', 'แผง', NULL, 10, 1000, 1),
(27, NULL, NULL, 'Royal-D (รสส้ม)', 'RO001104', 'ซอง', NULL, 12, 1000, 1),
(28, NULL, NULL, 'Oreda (รสส้ม)', 'OR001104', 'ซอง', NULL, 10, 1000, 1),
(29, NULL, '2020-05-25 23:31:37', 'ยาแก้ไอน้ำดำตราเสือดาว', 'BM001101', 'ขวด', NULL, 80, 1000, 7),
(30, NULL, '2020-05-25 23:31:49', 'แอมโมเนีย 30 ml', 'AM001101', 'ขวด', NULL, 15, 1000, 6),
(31, NULL, NULL, 'Ponstan 500', 'PT001102', 'แผง', NULL, 20, 1000, 1),
(32, NULL, '2020-05-25 23:33:40', 'ยาใส่แผลเบนตาดีน 30 ml', 'BN001101', 'ขวด', NULL, 20, 1000, 6),
(33, NULL, '2020-05-25 23:33:49', 'ทิงเจอร์ไอดีน', 'TI001101', 'ขวด', NULL, 50, 1000, 6),
(34, NULL, '2020-05-25 23:34:02', 'แอลกอฮอล์ 70% 30 ml', 'AL001101', 'ขวด', NULL, 15, 1000, 6),
(35, NULL, '2020-05-25 23:34:11', 'แอลกอฮอล์ 70% 60 ml', 'AL001201', 'ขวด', NULL, 20, 1000, 6),
(36, NULL, '2020-05-25 23:34:43', 'แอลกอฮอล์ 70% 240 ml', 'AL001301', 'ขวด', NULL, 48, 1000, 6),
(37, NULL, '2020-05-25 23:34:32', 'แอลกอฮอล์ 70% 450 ml', 'AL001401', 'ขวด', NULL, 80, 1000, 6),
(38, NULL, '2020-05-25 23:34:21', 'น้ำเกลือ Klean&Kare 500 ml', 'KK001101', 'ขวด', NULL, 50, 1000, 6),
(39, NULL, '2020-05-25 23:33:27', 'เบอร์นี่ เจล รักษาแผลไฟไหม้ น้ำร้อนลวก', 'BNT001103', 'หลอด', NULL, 50, 1000, 6),
(40, NULL, '2020-05-25 23:33:14', 'Hiruscar', 'HI001103', 'หลอด', NULL, 150, 1000, 6),
(41, NULL, '2020-05-25 23:33:02', 'Hirudoid', 'HD001103', 'หลอด', NULL, 80, 1000, 6),
(42, NULL, '2020-05-25 23:32:51', 'ยาหม่องชนิดขี้ผึ้ง แซม-บัค', 'SB001105', 'ตลับ', NULL, 46, 1000, 6),
(43, NULL, '2020-05-25 23:32:30', 'ยาหม่อง ตราถ้วยทอง', 'TT001106', 'กระปุก', NULL, 35, 1000, 6),
(44, NULL, '2020-05-25 23:32:20', 'Calamine คาลาไมน์ ตราเสือดาว 60 ml', 'CM001101', 'ขวด', NULL, 41, 1000, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
