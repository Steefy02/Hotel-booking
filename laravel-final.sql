-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 03:33 PM
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

--
-- Dumping data for table `AssociationFacility`
--

INSERT INTO `AssociationFacility` (`id_Association`, `id_Room`, `id_Facility`) VALUES
(5, 2, 5),
(12, 1, 5),
(13, 1, 12),
(14, 1, 10),
(15, 2, 8),
(16, 2, 10),
(17, 2, 12),
(18, 2, 11),
(19, 3, 4),
(20, 3, 5),
(21, 3, 8),
(22, 3, 9),
(23, 3, 10),
(24, 3, 11),
(25, 3, 12),
(26, 3, 3),
(27, 4, 5),
(29, 4, 10),
(30, 4, 12),
(32, 4, 11);

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
  `id_Payment` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Booking`
--

INSERT INTO `Booking` (`id_Reservation`, `fullName`, `checkIn`, `checkOut`, `status`, `roomsBooked`, `numberAdults`, `numberChildren`, `id_Room`, `id_User`, `id_Payment`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 'Dari', '2023-06-17 00:00:00', '2023-06-18 00:00:00', 'confirmed', 433, 1, 1, 3, 1, 12, '2023-06-17 13:01:25', '2023-06-17 13:01:25', NULL),
(17, 'Tanasescu Darius', '2023-06-18 00:00:00', '2023-06-19 00:00:00', 'confirmed', 725, 1, 1, 4, 1, 17, '2023-06-18 03:06:15', '2023-06-18 03:06:15', NULL),
(18, 'Dari', '2023-06-18 00:00:00', '2023-06-19 00:00:00', 'confirmed', 100, 1, 0, 1, 1, 18, '2023-06-18 03:08:35', '2023-06-18 03:08:35', NULL),
(19, 'Tanasescu Darius', '2023-06-18 00:00:00', '2023-06-19 00:00:00', 'confirmed', 233, 1, 1, 2, 1, 19, '2023-06-18 03:09:42', '2023-06-18 03:09:42', NULL),
(20, 'Dari', '2023-08-07 00:00:00', '2023-08-09 00:00:00', 'confirmed', 100, 1, 0, 1, 1, 20, '2023-06-18 10:12:14', '2023-06-18 10:12:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Facility`
--

CREATE TABLE `Facility` (
  `id_Facility` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Facility`
--

INSERT INTO `Facility` (`id_Facility`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Minibar', NULL, '2023-06-14 13:04:13', NULL),
(4, 'Balcon', NULL, NULL, NULL),
(5, 'Televizor', '2023-06-14 13:00:40', '2023-06-14 13:00:40', NULL),
(8, 'Uscator de par', '2023-06-18 10:25:11', '2023-06-18 10:25:11', NULL),
(9, 'Frigider', '2023-06-18 10:25:16', '2023-06-18 10:25:16', NULL),
(10, 'Aer conditionat', '2023-06-18 10:26:32', '2023-06-18 10:26:32', NULL),
(11, 'Seif', '2023-06-18 10:26:41', '2023-06-18 10:26:41', NULL),
(12, 'Prosoape', '2023-06-18 10:26:55', '2023-06-18 10:26:55', NULL);

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
  `id_RoomType` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `HistoryPrice`
--

INSERT INTO `HistoryPrice` (`id_HistoryPrice`, `dateStart`, `dateEnd`, `price`, `id_RoomType`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, '2023-06-20', '2023-06-25', 400, 2, '2023-06-12 23:19:04', '2023-06-12 23:19:04', NULL);

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
  `dateOfPay` date DEFAULT NULL,
  `ammount` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Payment`
--

INSERT INTO `Payment` (`id_Payment`, `typePayment`, `dateOfPay`, `ammount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'cash', '2023-06-15', 0, '2023-06-15 05:32:52', '2023-06-15 05:32:52', NULL),
(2, 'cash', '2023-06-15', 0, '2023-06-15 20:18:43', '2023-06-15 20:18:43', NULL),
(3, 'cash', '2023-06-15', 0, '2023-06-15 20:18:45', '2023-06-15 20:18:45', NULL),
(4, 'cash', '2023-06-15', 0, '2023-06-15 20:18:49', '2023-06-15 20:18:49', NULL),
(5, 'cash', '2023-06-15', 0, '2023-06-15 20:23:50', '2023-06-15 20:23:50', NULL),
(6, 'cash', '2023-06-16', 0, '2023-06-15 21:37:59', '2023-06-15 21:37:59', NULL),
(7, 'card', '2023-06-16', 0, '2023-06-16 08:38:03', '2023-06-16 08:38:03', NULL),
(8, 'card', '2023-06-16', 0, '2023-06-16 08:57:38', '2023-06-16 08:57:38', NULL),
(9, 'card', '2023-06-16', 0, '2023-06-16 13:01:01', '2023-06-16 13:01:01', NULL),
(10, 'cash', '2023-06-16', 0, '2023-06-16 13:02:33', '2023-06-16 13:02:33', NULL),
(11, 'cash', '2023-06-16', 0, '2023-06-16 14:15:00', '2023-06-16 14:15:00', NULL),
(12, 'cash', '2023-06-17', 600, '2023-06-17 13:01:25', '2023-06-17 13:01:25', NULL),
(13, 'cash', '2023-06-18', 400, '2023-06-17 21:30:06', '2023-06-17 21:30:06', NULL),
(14, 'cash', '2023-06-18', 250, '2023-06-17 21:34:07', '2023-06-17 21:34:07', NULL),
(15, 'cash', '2023-06-18', 250, '2023-06-17 21:36:53', '2023-06-17 21:36:53', NULL),
(16, 'card', '2023-06-18', 400, '2023-06-17 21:40:24', '2023-06-17 21:40:24', NULL),
(17, 'cash', '2023-06-18', 250, '2023-06-18 03:06:15', '2023-06-18 03:06:15', NULL),
(18, 'cash', '2023-06-18', 200, '2023-06-18 03:08:35', '2023-06-18 03:08:35', NULL),
(19, 'cash', '2023-06-18', 400, '2023-06-18 03:09:42', '2023-06-18 03:09:42', NULL),
(20, 'cash', '2023-06-18', 400, '2023-06-18 10:12:14', '2023-06-18 10:12:14', NULL);

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
  `id_RoomType` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Room`
--

INSERT INTO `Room` (`id_Room`, `roomNumber`, `status`, `image`, `id_RoomType`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 100, 'vizibil', 'r1.jpg', 1, NULL, NULL, NULL),
(2, 233, 'vizibil', 'r2.jpg', 3, NULL, '2023-06-09 01:00:19', NULL),
(3, 433, 'vizibil', 'r3.jpg', 4, NULL, '2023-06-09 01:00:29', NULL),
(4, 725, 'vizibil', 'r4.jpg', 2, NULL, '2023-06-11 22:16:31', NULL),
(5, 1, 'visible', 'test.jpg', 4, '2023-06-16 12:38:49', '2023-06-16 13:03:27', '2023-06-16 13:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `Testimonials`
--

CREATE TABLE `Testimonials` (
  `id_Testimonial` int(11) NOT NULL,
  `id_User` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `rating` int(5) NOT NULL,
  `id_RoomType` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
  `capacity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `TypeRoom`
--

INSERT INTO `TypeRoom` (`id_RoomType`, `type`, `description`, `price`, `capacity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Camera Single', 'O oază de intimitate și liniște, camera single te încântă cu un design elegant și facilități de top. Cu un pat confortabil, baie privată și facilități moderne, vei găsi tot confortul de care ai nevoie într-un spațiu intim.', 200, 1, NULL, '2023-06-18 10:20:05', NULL),
(2, 'Camera Double', 'Perfecțiunea în doi! Camera dublă te așteaptă cu un pat generos, o atmosferă relaxantă și toate dotările necesare pentru o ședere plăcută. Admiră priveliștea încântătoare de la fereastră și bucură-te de confortul oferit de această cameră spațioasă.', 250, 2, NULL, '2023-06-18 10:20:32', NULL),
(3, 'Camera Triple', 'Spațiu și confort pentru întreaga familie sau grupul tău de prieteni! Camera triplă dispune de trei paturi confortabile, asigurând o ședere plăcută pentru toți. Cu facilități moderne și o ambianță relaxantă, veți avea parte de momente memorabile în această cameră spațioasă.', 400, 3, NULL, '2023-06-18 10:21:00', NULL),
(4, 'Apartament', 'Lux și rafinament într-un cadru montan spectaculos. Apartamentul nostru elegant și spațios vă încântă cu un dormitor confortabil, o zonă de living generoasă, o bucătărie complet utilată și o baie elegantă. Savurați confortul și frumusețea acestei locații unice în timpul șederii dvs.', 600, 5, NULL, '2023-06-18 10:21:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `UserAccount`
--

CREATE TABLE `UserAccount` (
  `id_User` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile` varchar(30) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `UserAccount`
--

INSERT INTO `UserAccount` (`id_User`, `username`, `email`, `phoneNumber`, `password`, `userType`, `name`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nightraven420', 'test@yahoo.com', '0748024111', '$2y$10$swtv30u6Y49Hmq8VOdLg7ev5AIeBfjH99U8cV1obgTwLsm9Eg.5JW', 'admin', 'Dari', 'cat.png', NULL, '2023-05-22 22:37:20', '2023-06-17 20:38:20'),
(6, 'Nightraven', 'tana.dariusxbl@gmail.com', '0748024111', '$2y$10$vpp/mtFEPLNTrIigpK/XKurH1pt2Cp0.l/qZRDlnZcf8Z4x487Bci', 'client', 'Tanasescu Darius', 'profile.png', NULL, '2023-06-17 21:25:48', '2023-06-17 21:25:48');

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
-- Indexes for table `Testimonials`
--
ALTER TABLE `Testimonials`
  ADD PRIMARY KEY (`id_Testimonial`);

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
  MODIFY `id_Association` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `id_Reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Facility`
--
ALTER TABLE `Facility`
  MODIFY `id_Facility` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `HistoryPrice`
--
ALTER TABLE `HistoryPrice`
  MODIFY `id_HistoryPrice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
  MODIFY `id_Payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Room`
--
ALTER TABLE `Room`
  MODIFY `id_Room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Testimonials`
--
ALTER TABLE `Testimonials`
  MODIFY `id_Testimonial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `TypeRoom`
--
ALTER TABLE `TypeRoom`
  MODIFY `id_RoomType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `UserAccount`
--
ALTER TABLE `UserAccount`
  MODIFY `id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
