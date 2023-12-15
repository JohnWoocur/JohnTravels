-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 07:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `johntravels`
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
  `Image` varchar(256) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Admin_Id`, `First_name`, `Last_name`, `Mobile_number`, `Create_at`, `City`, `Country`, `Email`, `Image`, `Password`, `Status`) VALUES
(9, 'woocur', 'dilaxsan', 778497666, '2023-12-11', 'vavuniya', 'sri lanka', 'antonydilaxsan99@gmail.com', 'testimonial-3.jpg', 'ad001', 'Active'),
(10, 'john', 'woocur', 112225441, '2023-12-11', 'vavuniya', 'sri lanka', 'admin@mirabilis.com', 'testimonial-2.jpg', '1234', 'Active');

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
  `Blog_img` varchar(255) NOT NULL,
  `Create_at` date NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Blog_Id`, `Customer_Id`, `Blog_title`, `Blog_content1`, `Blog_content2`, `Highlighted`, `Blog_img`, `Create_at`, `Status`) VALUES
(147, 10, 'Gaming', 'wqd', 'wqd', 'wqd', 'profile2.jpg', '2023-12-14', 'Pending'),
(148, 10, 'Gamingd', 'sjhadbjh', 'sjahdbjha', 'jasdakd', 'profile2.jpg', '2023-12-14', 'Pending'),
(149, 10, 'Gamingd', 'sjhadbjh', 'sjahdbjha', 'jasdakd', 'profile2.jpg', '2023-12-14', 'Pending'),
(150, 10, 'movie2', 'ewfc', 'asf', 'sfafasf', 'profile1.jpg', '2023-12-14', 'Pending'),
(151, 10, 'movie2', 'ewfc', 'asf', 'sfafasf', 'profile1.jpg', '2023-12-14', 'Pending'),
(152, 10, 'movie2', 'ewfc', 'asf', 'sfafasf', 'profile1.jpg', '2023-12-14', 'Pending'),
(153, 10, 'movie2', 'ewfc', 'asf', 'sfafasf', 'profile1.jpg', '2023-12-14', 'Pending'),
(154, 10, 'movie2', 'ewfc', 'asf', 'sfafasf', 'profile1.jpg', '2023-12-14', 'Pending'),
(155, 10, 'movie2', 'ewfc', 'asf', 'sfafasf', 'profile1.jpg', '2023-12-14', 'Pending'),
(156, 10, 'movie2', 'ewfc', 'asf', 'sfafasf', 'profile1.jpg', '2023-12-14', 'Pending'),
(157, 10, 'movie2', 'ewfc', 'asf', 'sfafasf', 'profile1.jpg', '2023-12-14', 'Pending'),
(158, 10, 'movie2', 'ewfc', 'asf', 'sfafasf', 'profile1.jpg', '2023-12-14', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `Blog_Tag_Id` int(11) NOT NULL,
  `Blog_Id` int(11) NOT NULL,
  `Tag_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`Blog_Tag_Id`, `Blog_Id`, `Tag_Name`) VALUES
(7, 147, '#gaming'),
(8, 147, '#gaming');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Contact_Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
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
  `Status` varchar(50) NOT NULL DEFAULT 'Active',
  `verify_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_Id`, `Username`, `Email`, `Password`, `Create_at`, `Status`, `verify_token`) VALUES
(8, 'dilaxsan001', 'antony@gmail', '123456', '2023-12-11', 'Active', NULL),
(10, 'Sivaharan', 'sivabook404@outlook.com', '$2y$10$si1eYcPnomimvj3MmUIaO..ZEjDgKvka/ngSZ8DEdZ0paSIcCQKFO', '2023-12-12', 'Active', 'a8d3900cae34e9ab936e3aa14f6d5df7');

-- --------------------------------------------------------

--
-- Table structure for table `customer_more_details`
--

CREATE TABLE `customer_more_details` (
  `Customer_Id` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Mobile_number` int(11) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Dob` date NOT NULL,
  `About` varchar(255) NOT NULL,
  `Image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_more_details`
--

INSERT INTO `customer_more_details` (`Customer_Id`, `First_name`, `Last_name`, `Mobile_number`, `NIC`, `City`, `Country`, `district`, `Address`, `Dob`, `About`, `Image`) VALUES
(8, 'antony', 'ad', 2147483647, '991653821', 'nellukullam', 'sri lanka', 'vavuniya', 'no.22', '2023-12-13', 'ho iam dilaxsan hello', ''),
(10, 'sivaharan', 'Mohan', 760550512, '200023233223', 'mullativu', 'srilanka', 'mullativu', 'kanukerney', '2000-12-07', 'Traveller', 'testi-img2-150x150.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Enquiry_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Packages_name` varchar(255) NOT NULL,
  `Phone_number` int(10) NOT NULL,
  `No_of_people` int(11) NOT NULL,
  `Checkin_date` date NOT NULL,
  `Checkout_date` date NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Enquiry_Id`, `Customer_Id`, `Packages_name`, `Phone_number`, `No_of_people`, `Checkin_date`, `Checkout_date`, `Status`) VALUES
(7, 8, 'galle', 775487965, 20, '2023-12-13', '2023-12-22', 'Active'),
(17, 10, 'vavuniya', 3231, 3232, '2023-12-27', '0000-00-00', 'Pending'),
(18, 10, ' SUNSET VIEW OF BEAUTIFUL LAKESIDE RESIDENT', 213, 21, '2023-12-09', '2023-12-01', 'Pending');

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
-- Table structure for table `guest_enquiry`
--

CREATE TABLE `guest_enquiry` (
  `Guest_enquriy_Id` int(11) NOT NULL,
  `Guest_Name` varchar(256) NOT NULL,
  `Phone_Number` int(10) NOT NULL,
  `Destination` varchar(256) NOT NULL,
  `No_of_people` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guest_enquiry`
--

INSERT INTO `guest_enquiry` (`Guest_enquriy_Id`, `Guest_Name`, `Phone_Number`, `Destination`, `No_of_people`, `Date`) VALUES
(4, 'dilaxsan', 122546695, 'kandy', 10, '1999-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Pack_Id` int(11) NOT NULL,
  `Pack_title` varchar(255) NOT NULL,
  `Pack_img` varchar(256) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Location` varchar(256) NOT NULL,
  `Place_one` varchar(256) NOT NULL,
  `Place_two` varchar(256) NOT NULL,
  `Place_three` varchar(256) NOT NULL,
  `Place_four` varchar(256) NOT NULL,
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
  `Status` varchar(255) NOT NULL DEFAULT 'pending',
  `Trip_date` date NOT NULL,
  `Wish` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Pack_Id`, `Pack_title`, `Pack_img`, `Description`, `Location`, `Place_one`, `Place_two`, `Place_three`, `Place_four`, `Group_size`, `Days`, `Night`, `Sale_price`, `Reqular_price`, `Discount`, `Category`, `Map`, `Api_key`, `Popular`, `Status`, `Trip_date`, `Wish`) VALUES
(27, 'vavuniya', '', 'sads', 'vavuniya', 'colombo', 'sad', 'sad', 'asd', 23, 23, 23, 233, 321, 32, 'dasd', 'uis', 'hu', 'uhas', 'Delete', '2023-12-13', 'Active'),
(28, ' SUNSET VIEW OF BEAUTIFUL LAKESIDE RESIDENT', 'img26.jpg', 'SUNSET VIEW OF BEAUTIFUL LAKESIDE RESIDENT', 'Mullaitivu', 'mulliyawalai', 'mullativu', 'oddusudaan', 'vattraapalai', 12, 12, 12, 1075, 1222, 12, 'Couple', 'Google Map', '123321', '', 'Active', '2023-12-14', ''),
(29, 'Trincomalee', 'img27.jpg', 'LAS', 'Trincomalee', 'Koneswaram Temple', 'Marble Beach', 'Velgam Vehera', ' Fort Frederick', 60, 3, 2, -28000, 7000, 500, 'Adult', 'Google Map', '123321', '', 'Active', '2023-12-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `package_booking`
--

CREATE TABLE `package_booking` (
  `Booking_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Pack_Id` int(11) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Destination` varchar(255) NOT NULL,
  `Status` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_booking`
--

INSERT INTO `package_booking` (`Booking_Id`, `Customer_Id`, `Pack_Id`, `Date`, `Destination`, `Status`) VALUES
(1, 10, 28, '2023-12-14', 'vavuniya', 'Pending');

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
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `Testimonial_Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL
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
-- Dumping data for table `user-wish`
--

INSERT INTO `user-wish` (`Wish_Id`, `Customer_Id`, `Pack_Id`) VALUES
(35, 8, 27),
(37, 10, 28),
(41, 10, 28);

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
  ADD KEY `fkblogtbl` (`Blog_Id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Contact_Id`);

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
  ADD PRIMARY KEY (`Enquiry_Id`),
  ADD KEY `fk` (`Customer_Id`);

--
-- Indexes for table `faq_form`
--
ALTER TABLE `faq_form`
  ADD PRIMARY KEY (`Form_Id`);

--
-- Indexes for table `guest_enquiry`
--
ALTER TABLE `guest_enquiry`
  ADD PRIMARY KEY (`Guest_enquriy_Id`);

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
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`Testimonial_Id`),
  ADD KEY `testimonialfk` (`Customer_Id`);

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
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Blog_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `Blog_Tag_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Contact_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `Enquiry_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `faq_form`
--
ALTER TABLE `faq_form`
  MODIFY `Form_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest_enquiry`
--
ALTER TABLE `guest_enquiry`
  MODIFY `Guest_enquriy_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Pack_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `package_booking`
--
ALTER TABLE `package_booking`
  MODIFY `Booking_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pack_tags`
--
ALTER TABLE `pack_tags`
  MODIFY `Pack_tag_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `Testimonial_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user-wish`
--
ALTER TABLE `user-wish`
  MODIFY `Wish_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `Customer_fk` FOREIGN KEY (`Customer_Id`) REFERENCES `customer_more_details` (`Customer_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD CONSTRAINT `blog_tags_ibfk_1` FOREIGN KEY (`Blog_Id`) REFERENCES `blog` (`Blog_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `customer_more_details`
--
ALTER TABLE `customer_more_details`
  ADD CONSTRAINT `customer_more_details_ibfk_1` FOREIGN KEY (`Customer_Id`) REFERENCES `customers` (`Customer_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD CONSTRAINT `Customer_more_details_fk` FOREIGN KEY (`Customer_Id`) REFERENCES `customer_more_details` (`Customer_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
-- Constraints for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `testimonial` FOREIGN KEY (`Customer_Id`) REFERENCES `customer_more_details` (`Customer_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
