-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 03:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

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

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `pro_name`, `barcode`, `contain`, `status_sale`, `saleprice`, `stock_ps`, `category_id`) VALUES
(1, NULL, NULL, 'Cemol 500 ml (ยาลดไข้ แก้ปวดระดับต้น)', 'CE001101', 'ขวด', NULL, 35, 1000, 0),
(2, NULL, NULL, 'Panadol (ยาลดไข้ แก้ปวดระดับต้น)', 'PA001102', 'แผง', NULL, 39, 1000, 0),
(3, NULL, NULL, 'Paracap 500 ml (ยาลดไข้ แก้ปวดระดับต้น)', 'PA001101', 'ขวด', NULL, 50, 1000, 0),
(4, NULL, NULL, 'Sara 500 ml (ยาลดไข้ แก้ปวดระดับต้น)', 'SA001101', 'ขวด', NULL, 100, 1000, 0),
(5, NULL, NULL, 'Tylenol 500 ml (ยาลดไข้ แก้ปวดระดับต้น)', 'TY001101\'', 'ขวด', NULL, 100, 1000, 0),
(6, NULL, NULL, 'Tylenol (ยาลดไข้ แก้ปวดระดับต้น)', 'TY001102', 'แผง', NULL, 10, 1000, 0),
(7, NULL, NULL, 'Coprofen (ยาลดไข้ แก้ปวดระดับต้น)', 'CO001102', 'แผง', NULL, 20, 1000, 0),
(8, NULL, NULL, 'Sara (ยาลดไข้ แก้ปวดระดับต้น)', 'SA001102', 'แผง', NULL, 10, 1000, 0),
(9, NULL, NULL, 'Anadol (ยาแก้ปวด ระดับกลาง ถึง รุนแรง)', 'AN001102', 'แผง', NULL, 100, 1000, 0),
(10, NULL, NULL, 'Amanda (ยาแก้ปวด ระดับกลาง ถึง รุนแรง)', 'AM001102', 'แผง', NULL, 100, 1000, 0),
(11, NULL, NULL, 'Tramadol (ยาแก้ปวด) (ยาแก้ปวด ระดับกลาง ถึง รุนแรง)', 'TR001102', 'แผง', NULL, 100, 1000, 0),
(12, NULL, NULL, 'Cerazette (ยาคุมกำเนิด)', 'CE001102', 'แผง', NULL, 230, 1000, 0),
(13, NULL, NULL, 'Exluton (ยาคุมกำเนิด)', 'EX001102', 'แผง', NULL, 100, 1000, 0),
(14, NULL, NULL, 'Postinor (ยาคุมฉุกเฉิน)', 'PO001102', 'แผง', NULL, 40, 1000, 0),
(15, NULL, NULL, 'Madonna (ยาคุมฉุกเฉิน)', 'MA001102', 'แผง', NULL, 30, 1000, 0),
(16, NULL, NULL, 'ยาธาตุน้ำขาวไทยนคร 200 ml', 'KR001101', 'ขวด', NULL, 55, 1000, 0),
(17, NULL, NULL, 'ยาธาตุน้ำขาวสหการ 200 ml', 'SK001101', 'ขวด', NULL, 35, 1000, 0),
(18, NULL, NULL, 'ยาธาตุน้ำขาวตรากระต่ายบิน 50 ml', 'KT001101', 'ขวด', NULL, 15, 1000, 0),
(19, NULL, NULL, 'Dimenhydrinate (ยาแก้แพ้ เมารถ คลื่นไส้)', 'DI001102', 'แผง', NULL, 10, 1000, 0),
(20, NULL, NULL, 'Denim (ยาแก้แพ้ เมารถ คลื่นไส้)', 'DE001101', 'แผง', NULL, 10, 1000, 0),
(21, NULL, NULL, 'ยาคลอเฟนิรามีน (ยาแก้แพ้ ลมพิษ ผื่นคัน)', 'CH001102', 'แผง', NULL, 50, 1000, 0),
(22, NULL, NULL, 'เบลสิด ฟอร์ท 240 ml', 'BI001101', 'ขวด', NULL, 50, 1000, 0),
(23, NULL, NULL, 'Antacil 240 ml', 'AN001101', 'ขวด', NULL, 45, 1000, 0),
(24, NULL, NULL, 'ENO รสมะนาว', 'EN001104', 'ซอง', NULL, 12, 1000, 0),
(25, NULL, NULL, 'ENO รสส้ม', 'EN001204', 'ซอง', NULL, 12, 1000, 0),
(26, NULL, NULL, 'แอนตาซิน', 'AC001102', 'แผง', NULL, 10, 1000, 0),
(27, NULL, NULL, 'Royal-D (รสส้ม)', 'RO001104', 'ซอง', NULL, 12, 1000, 0),
(28, NULL, NULL, 'Oreda (รสส้ม)', 'OR001104', 'ซอง', NULL, 10, 1000, 0),
(29, NULL, NULL, 'ยาแก้ไอน้ำดำตราเสือดาว', 'BM001101', 'ขวด', NULL, 80, 1000, 0),
(30, NULL, NULL, 'แอมโมเนีย 30 ml', 'AM001101', 'ขวด', NULL, 15, 1000, 0),
(31, NULL, NULL, 'Ponstan 500', 'PT001102', 'แผง', NULL, 20, 1000, 0),
(32, NULL, NULL, 'ยาใส่แผลเบนตาดีน 30 ml', 'BN001101', 'ขวด', NULL, 20, 1000, 0),
(33, NULL, NULL, 'ทิงเจอร์ไอดีน', 'TI001101', 'ขวด', NULL, 50, 1000, 0),
(34, NULL, NULL, 'แอลกอฮอล์ 70% 30 ml', 'AL001101', 'ขวด', NULL, 15, 1000, 0),
(35, NULL, NULL, 'แอลกอฮอล์ 70% 60 ml', 'AL001201', 'ขวด', NULL, 20, 1000, 0),
(36, NULL, NULL, 'แอลกอฮอล์ 70% 240 ml', 'AL001301', 'ขวด', NULL, 48, 1000, 0),
(37, NULL, NULL, 'แอลกอฮอล์ 70% 450 ml', 'AL001401', 'ขวด', NULL, 80, 1000, 0),
(38, NULL, NULL, 'น้ำเกลือ Klean&Kare 500 ml', 'KK001101', 'ขวด', NULL, 50, 1000, 0),
(39, NULL, NULL, 'เบอร์นี่ เจล รักษาแผลไฟไหม้ น้ำร้อนลวก', 'BNT001103', 'หลอด', NULL, 50, 1000, 0),
(40, NULL, NULL, 'Hiruscar', 'HI001103', 'หลอด', NULL, 150, 1000, 0),
(41, NULL, NULL, 'Hirudoid', 'HD001103', 'หลอด', NULL, 80, 1000, 0),
(42, NULL, NULL, 'ยาหม่องชนิดขี้ผึ้ง แซม-บัค', 'SB001105', 'ตลับ', NULL, 46, 1000, 0),
(43, NULL, NULL, 'ยาหม่อง ตราถ้วยทอง', 'TT001106', 'กระปุก', NULL, 35, 1000, 0),
(44, NULL, NULL, 'Calamine คาลาไมน์ ตราเสือดาว 60 ml', 'CM001101', '???', NULL, 41, 1000, 0);

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
