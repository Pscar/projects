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
(1, '2020-05-25 23:33:27', '2020-05-25 23:27:11', 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 'CE001101', 'ขวด', 'redysale', 35, 0, 5),
(2, '2020-05-25 23:33:27', '2020-05-25 23:27:26', 'Panadol (ยาลดไข้ ระดับต้น)', 'PA001102', 'แผง', 'redysale', 39, 0, 5),
(3, '2020-05-25 23:33:27', '2020-05-25 23:27:37', 'Paracap 500 ml (ยาลดไข้ ระดับต้น)', 'PA001101', 'ขวด', 'redysale', 50, 0, 5),
(4, '2020-05-25 23:33:27', '2020-05-25 23:27:50', 'Sara 500 ml (ยาลดไข้ ระดับต้น)', 'SA001101', 'ขวด', 'redysale', 100, 0, 5),
(5, '2020-05-25 23:33:27', '2020-05-25 23:28:06', 'Tylenol 500 ml (ยาลดไข้ ระดับต้น)', 'TY001101', 'ขวด', 'redysale', 100, 0, 5),
(6, '2020-05-25 23:33:27', '2020-05-25 23:28:22', 'Tylenol (ยาลดไข้ ระดับต้น)', 'TY001102', 'แผง', 'redysale', 10, 0, 5),
(7, '2020-05-25 23:33:27', '2020-05-25 23:28:33', 'Coprofen (ยาลดไข้ ระดับต้น)', 'CO001102', 'แผง', 'redysale', 20, 0, 5),
(8, '2020-05-25 23:33:27', '2020-05-25 23:28:58', 'Sara (ยาลดไข้ ระดับต้น)', 'SA001102', 'แผง', 'redysale', 10, 0, 5),
(9, '2020-05-25 23:33:27', '2020-05-25 23:29:08', 'Anadol (ระดับกลาง ถึง รุนแรง)', 'AN001102', 'แผง', 'redysale', 100, 0, 5),
(10, '2020-05-25 23:33:27', '2020-05-25 23:26:39', 'Amanda (ระดับกลาง ถึง รุนแรง)', 'AM001102', 'แผง', 'redysale', 100, 0, 5),
(11, '2020-05-25 23:33:27', '2020-05-25 23:25:56', 'Tramadol ( ระดับกลาง ถึง รุนแรง)', 'TR001102', 'แผง', 'redysale', 100, 0, 5),
(12, '2020-05-25 23:33:27', '2020-05-25 23:28:45', 'Cerazette (ยาคุมกำเนิด)', 'CE001102', 'แผง', 'redysale', 230, 0, 3),
(13, '2020-05-25 23:33:27', '2020-05-25 23:29:19', 'Exluton (ยาคุมกำเนิด)', 'EX001102', 'แผง', 'redysale', 100, 0, 3),
(14, '2020-05-25 23:33:27', '2020-05-25 23:29:25', 'Postinor (ยาคุมฉุกเฉิน)', 'PO001102', 'แผง', 'redysale', 40, 0, 3),
(15, '2020-05-25 23:33:27', '2020-05-25 23:29:35', 'Madonna (ยาคุมฉุกเฉิน)', 'MA001102', 'แผง', 'redysale', 30, 0, 3),
(16, '2020-05-25 23:33:27', NULL, 'ยาธาตุน้ำขาวไทยนคร 200 ml','KR001101',  'ขวด', 'redysale', 55, 0, 1),
(17, '2020-05-25 23:33:27', NULL, 'ยาธาตุน้ำขาวสหการ 200 ml','SK001101',  'ขวด', 'redysale', 35, 0, 1),
(18, '2020-05-25 23:33:27', NULL, 'ยาธาตุน้ำขาวตรากระต่ายบิน 50 ml', 'KT001101', 'ขวด', 'redysale', 15, 0, 1),
(19, '2020-05-25 23:33:27', '2020-05-25 23:30:28', 'Dimenhydrinate', 'DI001102', 'แผง', 'redysale', 10, 0, 4),
(20, '2020-05-25 23:33:27', '2020-05-25 23:30:37', 'Denim', 'DE001101', 'แผง', 'redysale', 10, 0, 4),
(21, '2020-05-25 23:33:27', '2020-05-25 23:30:56', 'ยาคลอเฟนิรามีน (ยาแก้แพ้ ลมพิษ ผื่นคัน)', 'CH001102', 'แผง', 'redysale', 50, 0, 4),
(22, '2020-05-25 23:33:27', NULL, 'เบลสิด ฟอร์ท 240 ml', 'BI001101', 'ขวด', 'redysale', 50, 0, 1),
(23, '2020-05-25 23:33:27', NULL, 'Antacil 240 ml', 'AN001101', 'ขวด', 'redysale', 45, 0, 1),
(24, '2020-05-25 23:33:27', NULL, 'ENO รสมะนาว', 'EN001104', 'ซอง', 'redysale', 12, 0,1),
(25, '2020-05-25 23:33:27', NULL, 'ENO รสส้ม', 'EN001204', 'ซอง', 'redysale', 12, 0, 1),
(26, '2020-05-25 23:33:27', NULL, 'แอนตาซิน', 'AC001102', 'แผง', 'redysale', 10, 0, 1),
(27, '2020-05-25 23:33:27', NULL, 'Royal-D (รสส้ม)', 'RO001104', 'ซอง', 'redysale', 12, 0, 1),
(28, '2020-05-25 23:33:27', NULL, 'Oreda (รสส้ม)', 'OR001104', 'ซอง', 'redysale', 10, 0, 1),
(29, '2020-05-25 23:33:27', '2020-05-25 23:31:37', 'ยาแก้ไอน้ำดำตราเสือดาว','BM001101', 'ขวด', 'redysale', 80, 0, 7),
(30, '2020-05-25 23:33:27', '2020-05-25 23:31:49', 'แอมโมเนีย 30 ml','AM001101', 'ขวด', 'redysale', 15, 0, 6),
(31, '2020-05-25 23:33:27', NULL, 'Ponstan 500', 'PT001102', 'แผง', 'redysale', 20, 0, 1),
(32, '2020-05-25 23:33:27', '2020-05-25 23:33:40', 'ยาใส่แผลเบนตาดีน 30 ml', 'BN001101', 'ขวด', 'redysale', 20, 0, 6),
(33, '2020-05-25 23:33:27', '2020-05-25 23:33:49', 'ทิงเจอร์ไอดีน', 'TI001101', 'ขวด', 'redysale', 50, 0, 6),
(34, '2020-05-25 23:33:27', '2020-05-25 23:34:02', 'แอลกอฮอล์ 70% 30 ml', 'AL001101', 'ขวด', 'redysale', 15, 0, 6),
(35, '2020-05-25 23:33:27', '2020-05-25 23:34:11', 'แอลกอฮอล์ 70% 60 ml', 'AL001201', 'ขวด', 'redysale', 20, 0, 6),
(36, '2020-05-25 23:33:27', '2020-05-25 23:34:43', 'แอลกอฮอล์ 70% 240 ml', 'AL001301', 'ขวด', 'redysale', 48, 0, 6),
(37, '2020-05-25 23:33:27', '2020-05-25 23:34:32', 'แอลกอฮอล์ 70% 450 ml', 'AL001401', 'ขวด', 'redysale', 80, 0, 6),
(38, '2020-05-25 23:33:27', '2020-05-25 23:34:21', 'น้ำเกลือ Klean&Kare 500 ml', 'KK001101', 'ขวด', 'redysale', 50, 0, 6),
(39, '2020-05-25 23:33:27', '2020-05-25 23:33:27', 'เบอร์นี่ เจล รักษาแผลไฟไหม้ น้ำร้อนลวก', 'BNT001103', 'หลอด', 'redysale', 50, 0, 6),
(40, '2020-05-25 23:33:27', '2020-05-25 23:33:14', 'Hiruscar', 'HI001103', 'หลอด','redysale', 150, 0, 6),
(41, '2020-05-25 23:33:27', '2020-05-25 23:33:02', 'Hirudoid', 'HD001103', 'หลอด', 'redysale', 80, 0, 6),
(42, '2020-05-25 23:33:27', '2020-05-25 23:32:51', 'ยาหม่องชนิดขี้ผึ้ง แซม-บัค', 'SB001105', 'ตลับ', 'redysale', 46, 0, 6),
(43, '2020-05-25 23:33:27', '2020-05-25 23:32:30', 'ยาหม่อง ตราถ้วยทอง', 'TT001106', 'กระปุก', 'redysale', 35, 0, 6),
(44, '2020-05-25 23:33:27', '2020-05-25 23:32:20', 'Calamine คาลาไมน์ ตราเสือดาว 60 ml', 'CM001101', 'ขวด', 'redysale', 41, 0, 6);


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
