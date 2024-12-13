-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 01:18 PM
-- Server version: 8.0.39
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cii`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`) VALUES
(2, 'Matres', '123'),
(3, 'Tomoc', '123'),
(4, 'Victorino', '123');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `clothes_id` int NOT NULL,
  `apparel` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `size` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `donator_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`clothes_id`, `apparel`, `size`, `gender`, `donator_id`) VALUES
(13, 'Top', 'XS', 'Male', 45),
(14, 'Pants', 'S', 'Male', 42);

-- --------------------------------------------------------

--
-- Table structure for table `donator`
--

CREATE TABLE `donator` (
  `donator_id` int NOT NULL,
  `d_firstname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `d_lastname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `d_phone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donator`
--

INSERT INTO `donator` (`donator_id`, `d_firstname`, `d_lastname`, `d_phone`, `username`, `password`) VALUES
(42, 'test', 'test', '321321', 'test', 'test'),
(43, 'test3', 'test3', '9690201119', 'test1', 'test1'),
(45, 'test3', 'test3', '09690201119', 'test', 'test3');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int NOT NULL,
  `food_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `amount_of_serving` int DEFAULT NULL,
  `date_donated` date NOT NULL,
  `donator_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_type`, `amount_of_serving`, `date_donated`, `donator_id`) VALUES
(29, 'test', 1, '2024-12-07', 45),
(30, 'Rice', 5, '2024-12-07', 42),
(31, 'Rice', 5, '2024-12-07', 42),
(32, 'Rice', 1, '2024-12-07', 42);

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `money_id` int NOT NULL,
  `money_amount` decimal(10,2) NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_donated` date NOT NULL,
  `donator_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`money_id`, `money_amount`, `currency`, `date_donated`, `donator_id`) VALUES
(30, 500.00, 'AUD', '2024-12-06', 42);

-- --------------------------------------------------------

--
-- Table structure for table `p_clothes`
--

CREATE TABLE `p_clothes` (
  `clothes_id` int NOT NULL,
  `apparel` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `size` varchar(3) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `gender` varchar(6) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `donator_id` int NOT NULL,
  `status` enum('Pending','Approved','Rejected') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `p_clothes`
--

INSERT INTO `p_clothes` (`clothes_id`, `apparel`, `size`, `gender`, `donator_id`, `status`) VALUES
(7, 'test', 'M', 'm', 42, 'Approved'),
(8, 'test', 'M', 'female', 42, 'Approved'),
(9, 'test', 'M', 'female', 42, 'Approved'),
(10, 'shirt', 'M', 'Male', 42, 'Approved'),
(11, 'Top', 'XS', 'Male', 45, 'Approved'),
(12, 'Pants', 'S', 'Male', 42, 'Approved'),
(13, 'Underwear', 'S', 'Female', 42, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `p_food`
--

CREATE TABLE `p_food` (
  `food_id` int NOT NULL,
  `food_type` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `amount_of_serving` int NOT NULL,
  `date_donated` date NOT NULL,
  `donator_id` int NOT NULL,
  `status` enum('Pending','Approved','Rejected') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `p_food`
--

INSERT INTO `p_food` (`food_id`, `food_type`, `amount_of_serving`, `date_donated`, `donator_id`, `status`) VALUES
(9, 'test', 2, '2024-12-06', 42, 'Approved'),
(10, '5', 1, '2024-12-06', 42, 'Approved'),
(14, 'test', 5, '2024-12-06', 42, 'Approved'),
(24, 'test', 5, '2024-12-06', 42, 'Approved'),
(25, 'test', 5, '2024-12-06', 42, 'Approved'),
(29, 'test', 1, '2024-12-07', 45, 'Rejected'),
(30, 'Rice', 5, '2024-12-07', 42, 'Approved'),
(32, 'Rice', 1, '2024-12-07', 42, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `p_money`
--

CREATE TABLE `p_money` (
  `money_id` int NOT NULL,
  `money_amount` int NOT NULL,
  `currency` varchar(3) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date_donated` date NOT NULL,
  `donator_id` int NOT NULL,
  `status` enum('Pending','Approved','Rejected') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `p_money`
--

INSERT INTO `p_money` (`money_id`, `money_amount`, `currency`, `date_donated`, `donator_id`, `status`) VALUES
(7, 500, 'USD', '2024-12-06', 42, 'Rejected'),
(8, 5, 'USD', '2024-12-06', 42, 'Rejected'),
(14, 50, 'USD', '2024-12-06', 42, 'Rejected'),
(24, 500, 'USD', '2024-12-06', 42, 'Rejected'),
(26, 500, 'AUD', '2024-12-06', 42, 'Rejected'),
(27, 321321, 'AUD', '2024-12-06', 42, 'Rejected'),
(28, 5000, 'AUD', '2024-12-07', 42, 'Rejected'),
(29, 5000, 'AUD', '2024-12-07', 42, 'Rejected'),
(30, 400, 'AUD', '2024-12-07', 42, 'Pending'),
(31, 500, 'AUD', '2024-12-07', 42, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `donator_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `donator_id`) VALUES
(17, 'test', 'test', 42),
(18, 'test1', 'test1', 43),
(20, 'test', 'test3', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`clothes_id`);

--
-- Indexes for table `donator`
--
ALTER TABLE `donator`
  ADD PRIMARY KEY (`donator_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `food_id` (`donator_id`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`money_id`);

--
-- Indexes for table `p_clothes`
--
ALTER TABLE `p_clothes`
  ADD PRIMARY KEY (`clothes_id`);

--
-- Indexes for table `p_food`
--
ALTER TABLE `p_food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `p_money`
--
ALTER TABLE `p_money`
  ADD PRIMARY KEY (`money_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `donator_id` (`donator_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `clothes_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `donator`
--
ALTER TABLE `donator`
  MODIFY `donator_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `money_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `p_clothes`
--
ALTER TABLE `p_clothes`
  MODIFY `clothes_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `p_food`
--
ALTER TABLE `p_food`
  MODIFY `food_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `p_money`
--
ALTER TABLE `p_money`
  MODIFY `money_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `donator_id` FOREIGN KEY (`donator_id`) REFERENCES `donator` (`donator_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
