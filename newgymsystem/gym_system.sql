-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 04:08 PM
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
-- Database: `gym_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `AttendanceID` int(11) NOT NULL,
  `MemberName` varchar(200) NOT NULL,
  `SessionName` varchar(200) NOT NULL,
  `CoachName` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `TimeIN` time NOT NULL,
  `TimeOUT` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`AttendanceID`, `MemberName`, `SessionName`, `CoachName`, `Date`, `TimeIN`, `TimeOUT`) VALUES
(1, 'Jonathan Cruz', 'Cardio', 'Marvin', '2024-05-02', '13:29:00', '14:29:00'),
(2, 'Richard Natividad', 'Cardio', 'Marvin', '2024-05-08', '09:11:00', '10:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `CoachID` int(11) NOT NULL,
  `FirstName` varchar(11) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Date_Applied` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`CoachID`, `FirstName`, `Phone`, `Address`, `Gender`, `Date_Applied`) VALUES
(1, 'Marvin', '0912-3456-789', 'SPC', 'Male', '2022-01-13'),
(2, 'Joross', '0977-2648-765', 'San Gregorio,San Pablo, Laguna', 'Male', '2023-01-08'),
(3, 'Ava', '0912-3456-711', 'SPC', 'Female', '2021-09-13');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `EquipmentID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `SerialNumber` varchar(7) NOT NULL,
  `EquipType` varchar(200) NOT NULL,
  `ConditionType` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`EquipmentID`, `Name`, `SerialNumber`, `EquipType`, `ConditionType`) VALUES
(1, 'Treadmill', 'TM-1002', 'Strength Training Equipment', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `Login_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`Login_ID`, `Name`, `Email`, `Password`) VALUES
(1, 'Jonathan Cruz', 'jonathancruz@gmail.com', '12345'),
(3, 'Richard Natividad', 'richardnatividad@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MemberID` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Gender` text NOT NULL,
  `Birthday` date NOT NULL,
  `Height` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Joining_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MemberID`, `FirstName`, `LastName`, `Gender`, `Birthday`, `Height`, `Weight`, `Contact`, `Address`, `Joining_Date`) VALUES
(1, 'Jonathan', 'Cruz', 'Male', '1989-12-01', 170, 60, '0912-3456-78', 'San Ignacio, San Pablo, Laguna', '2024-05-05'),
(2, 'Mj', 'Monterde', 'Male', '1999-06-05', 177, 80, '0915-4789-33', 'San Lucas, San Pablo,Laguna', '2024-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `PaymentMethod` varchar(200) NOT NULL,
  `MembershipType` varchar(150) NOT NULL,
  `PaymentDate` date NOT NULL DEFAULT current_timestamp(),
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `Name`, `PaymentMethod`, `MembershipType`, `PaymentDate`, `Amount`) VALUES
(1, 'Jonathan Cruz', 'Card', 'Gold', '2024-05-05', 600),
(2, 'Mj Monterde', 'Gcash', 'Silver', '2024-05-08', 300),
(3, 'Richard Natividad', 'Gcash', 'Gold', '2024-05-08', 600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`AttendanceID`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`CoachID`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`EquipmentID`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`Login_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `AttendanceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `CoachID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `EquipmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `Login_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
