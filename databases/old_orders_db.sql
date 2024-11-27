-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2024 at 08:49 AM
-- Server version: 8.0.39
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `old_orders_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `old_orders`
--

DROP TABLE IF EXISTS `old_orders`;
CREATE TABLE IF NOT EXISTS `old_orders` (
  `id` int NOT NULL,
  `table_number` int NOT NULL,
  `items` text NOT NULL,
  `order_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `old_orders`
--

INSERT INTO `old_orders` (`id`, `table_number`, `items`, `order_time`, `deleted_at`) VALUES
(15, 5, 'Sushi Roll, Miso Soup', '2024-09-19 10:20:00', '2024-09-25 09:24:16'),
(17, 2, 'Spaghetti Carbonara, Garlic Bread', '2024-09-19 10:05:00', NULL),
(18, 3, 'Chicken Wings, French Fries', '2024-09-19 10:10:00', '2024-09-25 09:46:02'),
(19, 4, 'Taco, Nachos, Guacamole', '2024-09-19 10:15:00', '2024-09-25 09:32:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
