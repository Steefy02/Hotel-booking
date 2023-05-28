-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 01:55 AM
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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `Room`
--

INSERT INTO `Room` (`id_Room`, `roomNumber`, `status`, `image`, `id_RoomType`) VALUES
(1, 100, 'open', 'r1.jpg', 1),
(2, 12, 'open', 'r2.jpg', 3),
(3, 204, 'open', 'r3.jpg', 4),
(4, 725, 'open', 'r4.jpg', 2);

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

--
-- Dumping data for table `TypeRoom`
--

INSERT INTO `TypeRoom` (`id_RoomType`, `type`, `description`, `price`, `capacity`) VALUES
(1, 'Studio', 'Studio micut', 200, 1),
(2, 'Double', 'Camera double', 250, 2),
(3, 'Triple', 'Camera triple', 400, 3),
(4, 'Apartament', 'Apartament frumos', 600, 5);

-- --------------------------------------------------------

--
-- Table structure for table `UserAccount`
--

CREATE TABLE `UserAccount` (
  `id_User` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `UserAccount`
--

INSERT INTO `UserAccount` (`id_User`, `username`, `email`, `password`, `userType`, `name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DSteef', 'test@yahoo.com', '$2y$10$swtv30u6Y49Hmq8VOdLg7ev5AIeBfjH99U8cV1obgTwLsm9Eg.5JW', 'admin', 'Dari Steef', NULL, '2023-05-22 22:37:20', '2023-05-22 22:37:20');

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `HistoryPrice`
--
ALTER TABLE `HistoryPrice`
  ADD PRIMARY KEY (`id_HistoryPrice`),
  ADD KEY `fk_RoomType` (`id_RoomType`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`id_Payment`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `HistoryPrice`
--
ALTER TABLE `HistoryPrice`
  MODIFY `id_HistoryPrice` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
  MODIFY `id_Payment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Room`
--
ALTER TABLE `Room`
  MODIFY `id_Room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `TypeRoom`
--
ALTER TABLE `TypeRoom`
  MODIFY `id_RoomType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `UserAccount`
--
ALTER TABLE `UserAccount`
  MODIFY `id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
