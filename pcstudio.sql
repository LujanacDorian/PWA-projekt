-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 04:34 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcstudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `monitori`
--

CREATE TABLE `monitori` (
  `id` int(10) NOT NULL,
  `marka` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `cijena` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `velicina` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `rezolucija` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `panel` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `aspect_ratio` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `osvjezavanje` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monitori`
--

INSERT INTO `monitori` (`id`, `marka`, `model`, `cijena`, `velicina`, `rezolucija`, `panel`, `aspect_ratio`, `osvjezavanje`) VALUES
(1, 'Asus', 'TUF Gaming VG32UQA1A', '€ 766,35', '31.5\"', '3840x2160', 'VA', '16:9', '160Hz'),
(2, 'Philips', '329P9H', '€ 775,76', '31.5\"', '3840x2160', 'IPS', '16:9', '60Hz'),
(3, 'Dell', 'G3223Q', '€ 779,00', '32\"', '3840x2160', 'IPS', '16:9', '144Hz'),
(4, 'Asus', 'ProArt PA34VCNV', '€ 814,20', '34.1\"', '3440x1440', 'IPS', '21:9', '60Hz'),
(5, 'Philips', '45B1U6900CH', '€ 962,19', '44.5\"', '5120x1440', 'VA', '32:9', '75Hz'),
(6, 'Acer', 'Predator XB323QKNV', '€ 1.132,62', '31.5\"', '3840x2160', 'IPS', '16:9', '144Hz'),
(7, 'Samsung', 'Odyssey Neo G7', '€ 1.106,35', '43\"', '3840x2160', 'VA', '16:9', '144Hz'),
(8, 'Asus', 'ROG Swift PG27AQDM', '€ 1.108,50', '26.5\"', '2560x1440', 'OLED', '16:9', '240Hz'),
(9, 'Dell', 'U4324QE', '€ 1.185,43', '43\"', '3840x2160', 'IPS', '16:9', '60Hz');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `korisnik` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `korisnik`, `lozinka`) VALUES
(1, 'dorian', '$2y$10$/.7fOH8Oq2VNuC3.Yl4AYeEKJehjoN7gcD.MnEj96FBWLyl3qTKEW'),
(2, 'dorian1', '$2y$10$9tNKYTQLPM/p4ArDv10ePeJNvp7DA.eN.Flo9wembZCGNVrSpra4a'),
(4, 'dorijan', '$2y$10$2K6ZNRcqpJWkMnXiPOi3u.2Z2RINxsuYW.VyCFoIisAYTFjnRt2cW'),
(15, 'user', '$2y$10$7KCmMtUnbiQ8YBi6iJE.eO.VUBvTrjU5hls0aLYUi3bfRDynCTI9G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitori`
--
ALTER TABLE `monitori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`korisnik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monitori`
--
ALTER TABLE `monitori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
