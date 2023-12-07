-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 10:22 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Admin_Id` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Mobile_number` int(11) NOT NULL,
  `Create_at` date NOT NULL DEFAULT current_timestamp(),
  `City` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Blog_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Blog_title` varchar(255) NOT NULL,
  `Blog_content1` varchar(255) NOT NULL,
  `Blog_content2` varchar(255) NOT NULL,
  `Highlighted` varchar(255) NOT NULL,
  `Blog_img` longblob NOT NULL,
  `Create_at` date NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `Blog_Tag_Id` int(11) NOT NULL,
  `Blog_Id` int(11) NOT NULL,
  `Tag_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Create_at` date NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_Id`, `Username`, `Email`, `Password`, `Create_at`, `Status`) VALUES
(1, 'Nusra', 'nus@gmail.com', '123', '2023-12-06', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `customer_more_details`
--

CREATE TABLE `customer_more_details` (
  `Customer_Id` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Mobile_number` int(11) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Dob` date NOT NULL,
  `About` varchar(255) NOT NULL,
  `Image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Enquiry_Id` int(11) NOT NULL,
  `Destination` varchar(255) NOT NULL,
  `No.of.people` int(11) NOT NULL,
  `Checkin_date` date NOT NULL,
  `Checkout_date` date NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_form`
--

CREATE TABLE `faq_form` (
  `Form_Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_number` int(11) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Pack_Id` int(11) NOT NULL,
  `Pack_title` varchar(255) NOT NULL,
  `Pack_img` longblob NOT NULL,
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
(1, 'fff', 0x53637265656e73686f742028313833292e706e67, 'ffdfwsfwsf', 40, 10, 5, 0, 20000, 20, 'Adult', 'Google Map', '01111', '', 'Active', '2023-12-13'),
(2, 'kandy', 0x53637265656e73686f742028313833292e706e67, '1002', 40, 10, 5, 0, 40000, 5, 'Adult', 'Google Map', '5454545', '', 'Active', '2023-12-22'),
(3, 'colombo', 0x53637265656e73686f742028313832292e706e67, 'city of sri lanka', 40, 5, 4, 0, 45000, 10, 'Child', 'Google Map', '1410441', '', 'Active', '2023-12-31'),
(4, 'kandy', 0x53637265656e73686f742028313834292e706e67, 'fdsgsfs', 50, 5, 5, 18000, 20000, 10, 'Couple', 'Google Map', '111111', '', 'Active', '2023-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `package_booking`
--

CREATE TABLE `package_booking` (
  `Booking_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Pack_Id` int(11) NOT NULL,
  `Status` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pack_tags`
--

CREATE TABLE `pack_tags` (
  `Pack_tag_id` int(11) NOT NULL,
  `Pack_Id` int(11) NOT NULL,
  `Tag_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `Tag_Id` int(11) NOT NULL,
  `Tag_names` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user-wish`
--

CREATE TABLE `user-wish` (
  `Wish_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Pack_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Admin_Id`),
  ADD UNIQUE KEY `uniqueEmail` (`Email`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Blog_Id`),
  ADD KEY `fktocustomer` (`Customer_Id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`Blog_Tag_Id`),
  ADD KEY `fkblogtbl` (`Blog_Id`),
  ADD KEY `fktagtbl` (`Tag_Id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_Id`),
  ADD UNIQUE KEY `uniqueusername` (`Username`),
  ADD KEY `uniqueeamil` (`Email`);

--
-- Indexes for table `customer_more_details`
--
ALTER TABLE `customer_more_details`
  ADD KEY `fk to customer tbl` (`Customer_Id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`Enquiry_Id`);

--
-- Indexes for table `faq_form`
--
ALTER TABLE `faq_form`
  ADD PRIMARY KEY (`Form_Id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Pack_Id`);

--
-- Indexes for table `package_booking`
--
ALTER TABLE `package_booking`
  ADD PRIMARY KEY (`Booking_Id`),
  ADD KEY `fktocustomerybl` (`Customer_Id`),
  ADD KEY `fk to packagetbl` (`Pack_Id`);

--
-- Indexes for table `pack_tags`
--
ALTER TABLE `pack_tags`
  ADD PRIMARY KEY (`Pack_tag_id`),
  ADD KEY `fktopackagetbl` (`Pack_Id`),
  ADD KEY `fktotagtbl` (`Tag_Id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`Tag_Id`);

--
-- Indexes for table `user-wish`
--
ALTER TABLE `user-wish`
  ADD PRIMARY KEY (`Wish_Id`),
  ADD KEY `fk` (`Customer_Id`),
  ADD KEY `ffvhgjvy` (`Pack_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Blog_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `Blog_Tag_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `Enquiry_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_form`
--
ALTER TABLE `faq_form`
  MODIFY `Form_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Pack_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package_booking`
--
ALTER TABLE `package_booking`
  MODIFY `Booking_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pack_tags`
--
ALTER TABLE `pack_tags`
  MODIFY `Pack_tag_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `Tag_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user-wish`
--
ALTER TABLE `user-wish`
  MODIFY `Wish_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD CONSTRAINT `blog_tags_ibfk_1` FOREIGN KEY (`Blog_Id`) REFERENCES `blog` (`Blog_Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_tags_ibfk_2` FOREIGN KEY (`Tag_Id`) REFERENCES `tags` (`Tag_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `customer_more_details`
--
ALTER TABLE `customer_more_details`
  ADD CONSTRAINT `customer_more_details_ibfk_1` FOREIGN KEY (`Customer_Id`) REFERENCES `customers` (`Customer_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `package_booking`
--
ALTER TABLE `package_booking`
  ADD CONSTRAINT `package_booking_ibfk_1` FOREIGN KEY (`Customer_Id`) REFERENCES `customers` (`Customer_Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `package_booking_ibfk_2` FOREIGN KEY (`Pack_Id`) REFERENCES `package` (`Pack_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pack_tags`
--
ALTER TABLE `pack_tags`
  ADD CONSTRAINT `pack_tags_ibfk_1` FOREIGN KEY (`Pack_Id`) REFERENCES `package` (`Pack_Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pack_tags_ibfk_2` FOREIGN KEY (`Tag_Id`) REFERENCES `tags` (`Tag_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user-wish`
--
ALTER TABLE `user-wish`
  ADD CONSTRAINT `user-wish_ibfk_1` FOREIGN KEY (`Customer_Id`) REFERENCES `customers` (`Customer_Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `user-wish_ibfk_2` FOREIGN KEY (`Pack_Id`) REFERENCES `package` (`Pack_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
