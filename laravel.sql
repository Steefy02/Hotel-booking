-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 01:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `AssociationFacility`
--

CREATE TABLE `AssociationFacility` (
  `id_Association` int(11) NOT NULL,
  `id_Room` int(11) NOT NULL,
  `id_Facility` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE `Booking` (
  `id_Reservation` int(11) NOT NULL,
  `fullName` varchar(20) DEFAULT NULL,
  `checkIn` datetime NOT NULL,
  `checkOut` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `roomsBooked` int(11) DEFAULT NULL,
  `numberAdults` int(11) DEFAULT NULL,
  `numberChildren` int(11) DEFAULT NULL,
  `id_Room` int(11) NOT NULL,
  `id_User` int(11) NOT NULL,
  `id_Payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Facility`
--

CREATE TABLE `Facility` (
  `id_Facility` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `HistoryPrice`
--

CREATE TABLE `HistoryPrice` (
  `id_HistoryPrice` int(11) NOT NULL,
  `dateStart` date DEFAULT NULL,
  `dateEnd` date DEFAULT NULL,
  `price` float DEFAULT NULL,
  `id_RoomType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `id_Payment` int(11) NOT NULL,
  `typePayment` varchar(20) DEFAULT NULL,
  `dateOfPay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Room`
--

CREATE TABLE `Room` (
  `id_Room` int(11) NOT NULL,
  `roomNumber` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_RoomType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `TypeRoom`
--

CREATE TABLE `TypeRoom` (
  `id_RoomType` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `UserAccount`
--

CREATE TABLE `UserAccount` (
  `id_User` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AssociationFacility`
--
ALTER TABLE `AssociationFacility`
  ADD PRIMARY KEY (`id_Association`),
  ADD KEY `id_Room` (`id_Room`),
  ADD KEY `id_Facility` (`id_Facility`);

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`id_Reservation`),
  ADD KEY `id_Room` (`id_Room`),
  ADD KEY `id_User` (`id_User`),
  ADD KEY `id_Payment` (`id_Payment`);

--
-- Indexes for table `Facility`
--
ALTER TABLE `Facility`
  ADD PRIMARY KEY (`id_Facility`);

--
-- Indexes for table `HistoryPrice`
--
ALTER TABLE `HistoryPrice`
  ADD PRIMARY KEY (`id_HistoryPrice`),
  ADD KEY `fk_RoomType` (`id_RoomType`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`id_Payment`);

--
-- Indexes for table `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`id_Room`),
  ADD KEY `id_RoomType` (`id_RoomType`);

--
-- Indexes for table `TypeRoom`
--
ALTER TABLE `TypeRoom`
  ADD PRIMARY KEY (`id_RoomType`);

--
-- Indexes for table `UserAccount`
--
ALTER TABLE `UserAccount`
  ADD PRIMARY KEY (`id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AssociationFacility`
--
ALTER TABLE `AssociationFacility`
  MODIFY `id_Association` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `id_Reservation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Facility`
--
ALTER TABLE `Facility`
  MODIFY `id_Facility` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `HistoryPrice`
--
ALTER TABLE `HistoryPrice`
  MODIFY `id_HistoryPrice` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
  MODIFY `id_Payment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Room`
--
ALTER TABLE `Room`
  MODIFY `id_Room` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TypeRoom`
--
ALTER TABLE `TypeRoom`
  MODIFY `id_RoomType` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `UserAccount`
--
ALTER TABLE `UserAccount`
  MODIFY `id_User` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `AssociationFacility`
--
ALTER TABLE `AssociationFacility`
  ADD CONSTRAINT `associationfacility_ibfk_1` FOREIGN KEY (`id_Room`) REFERENCES `Room` (`id_Room`),
  ADD CONSTRAINT `associationfacility_ibfk_2` FOREIGN KEY (`id_Facility`) REFERENCES `Facility` (`id_Facility`);

--
-- Constraints for table `Booking`
--
ALTER TABLE `Booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_Room`) REFERENCES `Room` (`id_Room`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_User`) REFERENCES `UserAccount` (`id_User`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`id_Payment`) REFERENCES `Payment` (`id_Payment`);

--
-- Constraints for table `HistoryPrice`
--
ALTER TABLE `HistoryPrice`
  ADD CONSTRAINT `fk_RoomType` FOREIGN KEY (`id_RoomType`) REFERENCES `TypeRoom` (`id_RoomType`);

--
-- Constraints for table `Room`
--
ALTER TABLE `Room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`id_RoomType`) REFERENCES `TypeRoom` (`id_RoomType`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
