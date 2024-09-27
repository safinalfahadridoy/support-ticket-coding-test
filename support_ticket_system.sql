-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 02:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `support_ticket_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `uni_id` int(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(40) NOT NULL,
  `category` varchar(20) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `uni_id`, `name`, `phone`, `email`, `category`, `status`) VALUES
(2, 1108007, 'Mushfiqur Rahim', '01880362484', 'zrhreblcjmjony@spidy17.com', 'billing', 'Slow speed of work'),
(5, 1108003, 'GAZI MD. SAFIN AL FAHAD', '01880361383', 'safinalfahad2000@gmail.com', 'technical', 'Impressive fast work'),
(6, 123, 'Gazi Md Safin Al Fahad', '01880362484', 'fahadridoy193@gmail.com', 'billing', 'Need to improve'),
(15, 12309, 'Safin Al Fahad Ridoy', '01880362484', 'safinalfahad2000@gmail.com', 'technical', 'Paid'),
(16, 54321, 'Virat Kohli', '01880987123', 'virat18@gmail.com', 'billing', 'paid'),
(17, 395, 'Gazi Md Safin Al Fahad', '01937098123', 'virat18@gmail.com', 'technical', 'unpaid'),
(18, 123098, 'Rohit Sharma', '01880362484', 'zrhreblcjmjony@spidy17.com', 'technical', 'Impressive fast work');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
