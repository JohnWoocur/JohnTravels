-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 06:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `johntravels_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Pack_Id` int(11) NOT NULL,
  `Pack_title` varchar(255) NOT NULL,
  `Pack_img` varchar(256) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Group_size` int(11) NOT NULL,
  `Days` int(11) NOT NULL,
  `Night` int(11) NOT NULL,
  `Sale_price` int(11) NOT NULL,
  `Reqular_price` int(11) NOT NULL,
  `Discount` int(11) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Map` varchar(255) NOT NULL,
  `Api_key` varchar(255) NOT NULL,
  `Popular` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Active',
  `Trip_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Pack_Id`, `Pack_title`, `Pack_img`, `Description`, `Group_size`, `Days`, `Night`, `Sale_price`, `Reqular_price`, `Discount`, `Category`, `Map`, `Api_key`, `Popular`, `Status`, `Trip_date`) VALUES
(1, 'fff', 'Screenshot (183).png', 'ffdfwsfwsf', 40, 10, 5, 0, 20000, 20, 'Adult', 'Google Map', '01111', '', 'Active', '2023-12-13'),
(2, 'kandy', 'Screenshot (183).png', '1002', 40, 10, 5, 0, 40000, 5, 'Adult', 'Google Map', '5454545', '', 'Active', '2023-12-22'),
(3, 'colombo', 'Screenshot (182).png', 'city of sri lanka', 40, 5, 4, 0, 45000, 10, 'Child', 'Google Map', '1410441', '', 'Active', '2023-12-31'),
(4, 'kandy', 'Screenshot (184).png', 'fdsgsfs', 50, 5, 5, 18000, 20000, 10, 'Couple', 'Google Map', '111111', '', 'Active', '2023-12-19'),
(5, 'colombo', 'Screenshot (182).png', 'sfdsafsf', 20, 4, 10, 18000, 20000, 10, 'Child', 'Google Map', '111111111', '', 'Active', '2023-12-21'),
(6, 'jaffna', 'user_images/', 'going to jaffna', 40, 2, 1, 18000, 20000, 10, 'Couple', 'Google Map', '11111111', '', 'Active', '2023-12-27'),
(7, 'colombo', 'user_images/', 'going to colombo', 50, 5, 4, 45000, 50000, 10, 'Couple', 'Google Map', '15111111', '', 'Active', '2023-12-22'),
(8, 'kandy', 'user_images/2023-12-07-19-39-16-', 'dSFWEFW', 52, 5, 6, 45000, 50000, 10, 'Couple', 'Google Map', '11111111', '', 'Active', '2023-12-19'),
(9, 'mannar', 'user_images/2023-12-07-19-43-08-', 'mannar city ', 50, 3, 2, 4500, 5000, 10, 'Couple', 'Google Map', '120000', '', 'Active', '2023-12-29'),
(10, 'jaffna', 'product1.jpg', 'testing', 2, 1, 3, 18000, 20000, 10, 'Child', 'Google Map', '11', '', 'Active', '2023-12-13'),
(11, 'kandy', 'product5.jpg', 'full fill', 40, 1, 20, 90000, 100000, 10, 'Child', 'Google Map', '111111', '', 'Active', '2023-12-26'),
(12, 'kandy', 'product5.jpg', 'full fill', 40, 1, 20, 90000, 100000, 10, 'Child', 'Google Map', '111111', '', 'Active', '2023-12-26'),
(13, 'trinco', 'product3.jpg', 'beach', 10, 4, 2, 9000, 10000, 10, 'Adult', 'Google Map', '112552', '', 'Active', '2023-11-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Pack_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Pack_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
