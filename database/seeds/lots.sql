-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2020 at 06:35 PM
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
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `stock_amount` int(11) DEFAULT NULL,
  `percost` double(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lots`
--

INSERT INTO `lots` (`id`, `created_at`, `updated_at`, `deteexp_at`, `drug_id`, `cost`, `stock_im`, `user_id`, `product_id`, `stock_amount`, `percost`) VALUES
(222, '2020-08-19 13:26:17', '2020-08-25 04:53:32', NULL, 'AC001102', 250.00, 50, 2, 26, 0, 5.00),
(223, '2020-08-19 13:28:31', '2020-08-25 16:17:44', NULL, 'CE001101', 1500.00, 100, 2, 1, 0, 15.00),
(224, '2020-08-19 13:28:45', '2020-08-25 04:53:32', NULL, 'AC001102', 300.00, 50, 2, 26, 0, 6.00),
(225, '2020-08-19 13:28:59', '2020-08-25 16:17:44', NULL, 'CE001101', 1700.00, 100, 2, 1, 0, 17.00),
(226, '2020-08-25 04:55:37', '2020-08-25 15:50:40', NULL, 'AL001201', 1500.00, 100, 2, 35, 0, 15.00),
(227, '2020-08-25 15:53:15', '2020-08-25 16:32:35', NULL, 'AN001101', 22500.00, 1000, 2, 23, 0, 22.50),
(228, '2020-08-25 16:26:08', '2020-08-25 16:32:35', NULL, 'AN001101', 2200.00, 100, 2, 23, 0, 22.00),
(229, '2020-08-25 16:29:31', '2020-08-25 16:32:35', NULL, 'AN001101', 6750.00, 300, 2, 23, 0, 22.50),
(230, '2020-08-25 16:31:44', '2020-08-25 16:32:35', NULL, 'AN001101', 6500.00, 350, 2, 23, 0, 18.57);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lots`
--
ALTER TABLE `lots`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lots`
--
ALTER TABLE `lots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
