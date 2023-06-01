-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 12:15 AM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `carttb`
--

CREATE TABLE `carttb` (
  `cartID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carttb`
--

INSERT INTO `carttb` (`cartID`, `userID`, `bookname`, `author`, `date`) VALUES
(12, 1, 'The Wager', 'RD Sharma', '2023-05-20 07:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `s_registration`
--

CREATE TABLE `s_registration` (
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `enrollment_No` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_registration`
--

INSERT INTO `s_registration` (`first`, `last`, `username`, `password`, `enrollment_No`, `email`, `phone_no`) VALUES
('[riya]', '[value-2]', '[riya@123]', '[value-4]', 0, '[value-6]', 0),
('[riya]', '[value-2]', '[riya@123]', '[value-4]', 0, '[value-6]', 0),
('margi', 'patel', 'margi@123', '1234', 2007601001, 'abc@123', 999999999),
('riya', 'patel', 'riya@123', '1234', 2007601002, 'riya@123gmail.com', 2147483647),
('prachi', 'patel', 'ppatel', '4321', 2007601008, 'prachi@gmail.com', 1234567890),
('Agam', 'Mistry', 'agam@123', '1234', 2007601003, 'agam@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`userID`, `username`, `password`, `email`, `phoneno`) VALUES
(1, 'xyz', 'xyz@123', 'xyz@gmail.com', '5545565755'),
(2, 'abc@123', '1234', 'margi@gmail.com', '9999999999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carttb`
--
ALTER TABLE `carttb`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `fk-userID` (`userID`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carttb`
--
ALTER TABLE `carttb`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usertb`
--
ALTER TABLE `usertb`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carttb`
--
ALTER TABLE `carttb`
  ADD CONSTRAINT `fk-userID` FOREIGN KEY (`userID`) REFERENCES `usertb` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
