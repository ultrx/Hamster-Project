-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 02:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamster`
--

-- --------------------------------------------------------

--
-- Table structure for table `headsets`
--

CREATE TABLE `headsets` (
  `headset_id` int(11) NOT NULL,
  `image` varchar(512) NOT NULL,
  `name` text NOT NULL,
  `url` varchar(512) NOT NULL,
  `price_before` varchar(512) NOT NULL,
  `price_after` varchar(512) NOT NULL,
  `added_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `headsets`
--

INSERT INTO `headsets` (`headset_id`, `image`, `name`, `url`, `price_before`, `price_after`, `added_by`) VALUES
(1, 'heatset1.png', 'Razer Kaira', 'https://www.razer.com/console-headsets/Razer-Kaira-for-Xbox/RZ04-03480100-R3U1', '129.00', '99.99', ''),
(2, 'heatset2.png', 'Razer Kraken X', 'https://www.razer.com/gaming-headsets/Razer-Kraken-Tournament-Edition/RZ04-02051100-R3M1', '69.99', '49.99', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `headsets`
--
ALTER TABLE `headsets`
  ADD PRIMARY KEY (`headset_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `headsets`
--
ALTER TABLE `headsets`
  MODIFY `headset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
