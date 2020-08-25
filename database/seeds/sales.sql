-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2020 at 06:33 PM
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
  `vatpercent` double DEFAULT 7,
  `total` int(11) DEFAULT NULL,
  `bill_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `percost` double(8,2) DEFAULT NULL,
  `profit` double(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `created_at`, `updated_at`, `saleprice`, `pro_name`, `category_id`, `user_id`, `amount`, `vatpercent`, `total`, `bill_id`, `product_id`, `percost`, `profit`) VALUES
(777, '2020-09-01 13:31:05', '2020-08-19 13:30:51', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 2, 1, 7, 37, 744, 1, 15.00, 22.00),
(778, '2020-09-03 05:24:44', '2020-08-19 13:30:51', 10, 'แอนตาซิน', 1, 2, 1, 7, 11, 744, 26, 5.00, 6.00),
(779, '2020-01-01 17:39:53', '2020-08-22 17:39:56', 10, 'แอนตาซิน', 1, 2, 1, 7, 11, 745, 26, 5.00, 6.00),
(780, '2020-08-02 17:40:04', '2020-08-22 17:40:06', 10, 'แอนตาซิน', 1, 2, 1, 7, 11, 746, 26, 5.00, 6.00),
(781, '2020-02-22 17:41:10', '2020-08-22 17:41:15', 10, 'แอนตาซิน', 1, 2, 50, 7, 535, 747, 26, 253.00, 282.00),
(782, '2020-03-22 17:41:36', '2020-08-22 17:41:39', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 2, 20, 7, 749, 748, 1, 300.00, 449.00),
(783, '2020-04-22 17:43:12', '2020-08-22 17:43:14', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 2, 10, 7, 374, 749, 1, 150.00, 224.00),
(784, '2020-05-22 17:43:23', '2020-08-22 17:43:25', 10, 'แอนตาซิน', 1, 2, 7, 7, 75, 750, 26, 42.00, 33.00),
(785, '2020-06-23 15:12:01', '2020-08-23 15:12:03', 10, 'แอนตาซิน', 1, 2, 1, 7, 11, 751, 26, 6.00, 5.00),
(786, '2020-07-24 03:00:07', '2020-08-24 03:00:09', 10, 'แอนตาซิน', 1, 2, 1, 7, 11, 752, 26, 6.00, 5.00),
(787, '2020-08-13 08:18:05', '2020-08-24 08:18:07', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 2, 70, 7, 2622, 753, 1, 1052.00, 1570.00),
(791, '2020-01-12 09:51:02', '2020-08-24 09:52:46', 10, 'แอนตาซิน', 1, 2, 1, 7, 11, 754, 26, 6.00, 5.00),
(792, '2020-10-11 09:52:09', '2020-08-24 09:52:46', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 1, 7, 21, 754, 35, 15.00, 21.00),
(794, '2020-01-10 16:09:50', '2020-08-25 04:15:47', 10, 'แอนตาซิน', 1, 2, 1, 7, 11, 755, 26, 6.00, 5.00),
(795, '2020-12-13 17:58:55', '2020-08-25 04:15:47', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 2, 1, 7, 37, 755, 1, 17.00, 20.00),
(796, '2020-08-04 18:07:05', '2020-08-25 04:15:47', 10, 'แอนตาซิน', 1, 2, 1, 7, 11, 755, 26, 6.00, 5.00),
(797, '2020-08-04 04:52:56', '2020-08-25 04:52:58', 10, 'แอนตาซิน', 1, 2, 10, 7, 107, 756, 26, 60.00, 47.00),
(798, '2020-01-03 04:53:09', '2020-08-25 04:53:11', 10, 'แอนตาซิน', 1, 2, 10, 7, 107, 757, 26, 60.00, 47.00),
(799, '2020-07-02 04:53:19', '2020-08-25 04:53:22', 10, 'แอนตาซิน', 1, 2, 10, 7, 107, 758, 26, 60.00, 47.00),
(800, '2020-07-01 04:53:30', '2020-08-25 04:53:32', 10, 'แอนตาซิน', 1, 2, 5, 7, 54, 759, 26, 30.00, 24.00),
(801, '2020-11-06 04:56:00', '2020-08-25 04:56:03', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 5, 7, 107, 760, 35, 75.00, 32.00),
(802, '2020-05-07 04:56:13', '2020-05-25 04:56:16', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 5, 7, 107, 761, 35, 75.00, 32.00),
(803, '2020-05-10 04:57:02', '2020-05-25 04:57:05', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 10, 7, 214, 762, 35, 150.00, 64.00),
(804, '2020-06-15 04:57:13', '2020-06-25 04:57:14', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 5, 7, 107, 763, 35, 75.00, 32.00),
(805, '2020-06-09 04:57:23', '2020-08-25 04:57:26', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 5, 7, 107, 764, 35, 75.00, 32.00),
(806, '2020-09-08 04:57:35', '2020-08-25 04:57:38', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 5, 7, 107, 765, 35, 75.00, 32.00),
(807, '2020-10-11 05:00:50', '2020-08-25 05:00:52', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 3, 7, 64, 766, 35, 45.00, 19.00),
(808, '2020-12-12 05:01:00', '2020-08-25 05:01:02', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 5, 7, 107, 767, 35, 75.00, 32.00),
(809, '2020-10-13 05:01:14', '2020-08-21 05:01:16', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 7, 7, 150, 768, 35, 105.00, 45.00),
(810, '2020-09-14 05:01:25', '2020-08-20 05:01:27', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 5, 7, 107, 769, 35, 75.00, 32.00),
(811, '2020-12-19 05:35:29', '2020-08-19 05:35:33', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 5, 7, 107, 770, 35, 75.00, 32.00),
(812, '2020-11-18 05:35:42', '2020-08-18 05:35:46', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 5, 7, 107, 771, 35, 75.00, 32.00),
(813, '2020-08-17 05:35:55', '2020-08-17 05:35:57', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 5, 7, 107, 772, 35, 75.00, 32.00),
(814, '2020-08-16 05:36:04', '2020-08-16 05:36:06', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 5, 7, 107, 773, 35, 75.00, 32.00),
(815, '2020-08-20 07:14:56', '2020-08-25 07:14:59', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 5, 7, 107, 774, 35, 75.00, 32.00),
(816, '2020-08-25 15:50:37', '2020-08-25 15:50:40', 20, 'แอลกอฮอล์ 70% 60 ml', 6, 2, 20, 7, 428, 775, 35, 300.00, 128.00),
(817, '2020-08-01 15:53:48', '2020-08-25 15:53:50', 45, 'Antacil 240 ml', 1, 2, 5, 7, 241, 776, 23, 112.50, 128.50),
(818, '2020-08-02 15:54:49', '2020-08-25 15:54:53', 45, 'Antacil 240 ml', 1, 2, 15, 7, 722, 777, 23, 337.50, 384.50),
(819, '2020-08-03 15:55:32', '2020-08-25 15:55:34', 45, 'Antacil 240 ml', 1, 2, 5, 7, 241, 778, 23, 112.50, 128.50),
(820, '2020-08-04 15:56:22', '2020-08-25 15:56:25', 45, 'Antacil 240 ml', 1, 2, 5, 7, 241, 779, 23, 112.50, 128.50),
(821, '2020-08-05 15:56:37', '2020-08-25 15:56:40', 45, 'Antacil 240 ml', 1, 2, 10, 7, 482, 780, 23, 225.00, 257.00),
(822, '2020-08-06 15:56:50', '2020-08-25 15:56:53', 45, 'Antacil 240 ml', 1, 2, 20, 7, 963, 781, 23, 450.00, 513.00),
(823, '2020-08-07 15:58:57', '2020-08-25 15:58:59', 45, 'Antacil 240 ml', 1, 2, 7, 7, 337, 782, 23, 157.50, 179.50),
(824, '2020-08-08 15:59:12', '2020-08-25 15:59:22', 45, 'Antacil 240 ml', 1, 2, 8, 7, 385, 783, 23, 180.00, 205.00),
(825, '2020-08-09 15:59:20', '2020-08-25 15:59:22', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 2, 8, 7, 300, 783, 1, 136.00, 164.00),
(826, '2020-08-07 16:01:54', '2020-08-25 16:02:02', 45, 'Antacil 240 ml', 1, 2, 10, 7, 482, 784, 23, 225.00, 257.00),
(827, '2020-08-08 16:02:12', '2020-08-25 16:02:16', 45, 'Antacil 240 ml', 1, 2, 15, 7, 722, 785, 23, 337.50, 384.50),
(828, '2020-08-09 16:02:35', '2020-08-25 16:02:38', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 2, 10, 7, 374, 786, 1, 170.00, 204.00),
(829, '2020-08-10 16:04:11', '2020-08-25 16:04:21', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 2, 10, 7, 374, 787, 1, 170.00, 204.00),
(830, '2020-08-10 16:04:18', '2020-08-25 16:04:21', 45, 'Antacil 240 ml', 1, 2, 5, 7, 241, 787, 23, 112.50, 128.50),
(831, '2020-08-11 16:06:55', '2020-08-25 16:04:40', 45, 'Antacil 240 ml', 1, 2, 9, 7, 433, 788, 23, 202.50, 230.50),
(832, '2020-08-11 16:04:37', '2020-08-25 16:04:40', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 2, 5, 7, 187, 788, 1, 85.00, 102.00),
(833, '2020-08-12 16:08:21', '2020-08-25 16:08:24', 45, 'Antacil 240 ml', 1, 2, 12, 7, 578, 789, 23, 270.00, 308.00),
(834, '2020-08-14 16:08:34', '2020-08-25 16:08:36', 45, 'Antacil 240 ml', 1, 2, 14, 7, 674, 790, 23, 315.00, 359.00),
(835, '2020-08-15 16:11:46', '2020-08-25 16:11:49', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 2, 15, 7, 562, 791, 1, 255.00, 307.00),
(836, '2020-08-16 16:11:57', '2020-08-25 16:12:00', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 2, 16, 7, 599, 792, 1, 272.00, 327.00),
(837, '2020-08-17 16:15:39', '2020-08-25 16:15:41', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 2, 17, 7, 637, 793, 1, 289.00, 348.00),
(838, '2020-08-18 16:16:09', '2020-08-25 16:16:11', 45, 'Antacil 240 ml', 1, 2, 20, 7, 963, 794, 23, 450.00, 513.00),
(839, '2020-08-19 16:16:20', '2020-08-25 16:16:22', 45, 'Antacil 240 ml', 1, 2, 18, 7, 867, 795, 23, 405.00, 462.00),
(840, '2020-08-20 16:17:20', '2020-08-25 16:17:23', 45, 'Antacil 240 ml', 1, 2, 22, 7, 1059, 796, 23, 495.00, 564.00),
(841, '2020-08-21 16:17:41', '2020-08-25 16:17:44', 35, 'Cemol 500 ml (ยาลดไข้ ระดับต้น)', 5, 2, 17, 7, 637, 797, 1, 289.00, 348.00),
(842, '2020-08-22 16:17:53', '2020-08-25 16:17:56', 45, 'Antacil 240 ml', 1, 2, 10, 7, 482, 798, 23, 225.00, 257.00),
(844, '2020-08-23 16:19:29', '2020-08-25 16:19:31', 45, 'Antacil 240 ml', 1, 2, 20, 7, 963, 799, 23, 450.00, 513.00),
(845, '2020-08-24 16:19:46', '2020-08-25 16:19:48', 45, 'Antacil 240 ml', 1, 2, 13, 7, 626, 800, 23, 292.50, 333.50),
(846, '2020-08-25 16:20:00', '2020-08-25 16:20:02', 45, 'Antacil 240 ml', 1, 2, 6, 7, 289, 801, 23, 135.00, 154.00),
(847, '2020-08-26 16:20:17', '2020-08-25 16:20:19', 45, 'Antacil 240 ml', 1, 2, 15, 7, 722, 802, 23, 337.50, 384.50),
(848, '2020-08-27 16:21:36', '2020-08-25 16:21:38', 45, 'Antacil 240 ml', 1, 2, 24, 7, 1156, 803, 23, 540.00, 616.00),
(849, '2020-08-28 16:21:48', '2020-08-25 16:21:50', 45, 'Antacil 240 ml', 1, 2, 10, 7, 482, 804, 23, 225.00, 257.00),
(850, '2020-08-29 16:21:58', '2020-08-25 16:22:01', 45, 'Antacil 240 ml', 1, 2, 12, 7, 578, 805, 23, 270.00, 308.00),
(851, '2020-08-30 16:22:08', '2020-08-25 16:22:10', 45, 'Antacil 240 ml', 1, 2, 10, 7, 482, 806, 23, 225.00, 257.00),
(852, '2020-08-31 16:22:22', '2020-08-25 16:22:23', 45, 'Antacil 240 ml', 1, 2, 14, 7, 674, 807, 23, 315.00, 359.00),
(853, '2020-01-25 16:23:47', '2020-08-25 16:23:50', 45, 'Antacil 240 ml', 1, 2, 100, 7, 4815, 808, 23, 2250.00, 2565.00),
(854, '2020-02-25 16:24:55', '2020-08-25 16:24:57', 45, 'Antacil 240 ml', 1, 2, 150, 7, 7222, 809, 23, 3375.00, 3847.00),
(855, '2020-03-25 16:26:25', '2020-08-25 16:26:27', 45, 'Antacil 240 ml', 1, 2, 116, 7, 5585, 810, 23, 2610.00, 2975.00),
(856, '2020-04-25 16:27:02', '2020-08-25 16:27:04', 45, 'Antacil 240 ml', 1, 2, 150, 7, 7222, 811, 23, 3375.00, 3847.00),
(857, '2020-05-25 16:27:15', '2020-08-25 16:27:17', 45, 'Antacil 240 ml', 1, 2, 50, 7, 2408, 812, 23, 1125.00, 1283.00),
(858, '2020-06-25 16:27:26', '2020-08-25 16:27:28', 45, 'Antacil 240 ml', 1, 2, 100, 7, 4815, 813, 23, 2250.00, 2565.00),
(859, '2020-07-25 16:29:51', '2020-08-25 16:29:53', 45, 'Antacil 240 ml', 1, 2, 130, 7, 6260, 814, 23, 2875.00, 3385.00),
(860, '2020-09-25 16:30:46', '2020-08-25 16:30:49', 45, 'Antacil 240 ml', 1, 2, 70, 7, 3370, 815, 23, 1575.00, 1795.00),
(861, '2020-10-25 16:31:56', '2020-08-25 16:31:58', 45, 'Antacil 240 ml', 1, 2, 200, 7, 9630, 816, 23, 4500.00, 5130.00),
(862, '2020-11-25 16:32:21', '2020-08-25 16:32:23', 45, 'Antacil 240 ml', 1, 2, 150, 7, 7222, 817, 23, 2785.50, 4436.50),
(863, '2020-12-25 16:32:32', '2020-08-25 16:32:35', 45, 'Antacil 240 ml', 1, 2, 200, 7, 9630, 818, 23, 3714.00, 5916.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=864;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
