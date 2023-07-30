-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 04:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

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
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(200) NOT NULL,
  `zip` int(10) NOT NULL,
  `Created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`fname`, `lname`, `email`, `contact`, `address`, `City`, `State`, `zip`, `Created_at`) VALUES
('Parag', 'Shirsat', 'abc@gmail.com', '7219129198', 'ABC street', 'Nashik', ' Maharashtra', 422009, '2023-05-04 07:35:39.667345'),
('test', 'demo', 'test@gmail.com', '1234567890', 'ABC apt', 'Pune', ' Maharashtra', 411009, '2023-05-04 07:36:13.748509'),
('Anusha', 'Amrutkar', 'xatal84474@galcake.com', '1234567890', 'xyz apt', 'Nashik', ' Maharashtra', 422003, '2023-05-04 07:37:05.493783'),
('Abhishek', 'Soundankar', 'abhi@gmail.com', '1234509876', 'XYZ street', 'Nashik', ' Maharashtra', 422010, '2023-05-04 07:38:16.708180');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
