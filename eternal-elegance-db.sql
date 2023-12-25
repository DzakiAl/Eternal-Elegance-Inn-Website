-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 25, 2023 at 06:04 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eternal-elegance-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `room_order`
--

CREATE TABLE `room_order` (
  `id` int NOT NULL,
  `first_name` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_name` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room_order`
--

INSERT INTO `room_order` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `check_in`, `check_out`, `room_type`) VALUES
(1, 'Dzaki', 'Al', 'dzakial@gmail.com', 543876000, '2023-12-17', '2023-12-23', 'Penthouse Suite'),
(2, 'Welt', 'Yang', 'weltyang@gmail.com', 987678001, '2023-12-17', '2023-12-19', 'Executive Suite'),
(3, 'Dan', 'Heng', 'danheng@gmail.com', 321456888, '2023-12-27', '2023-12-30', 'Penthouse Suite'),
(4, 'March', '7th', 'march7th@gmail.com', 334778999, '2023-12-30', '2024-01-02', 'Presidential Suite'),
(5, 'Neuvillette', '', 'neuvillette@gmail.com', 889000334, '2023-12-31', '2024-01-03', 'Penthouse Suite');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room_order`
--
ALTER TABLE `room_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room_order`
--
ALTER TABLE `room_order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
