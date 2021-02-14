-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 02:27 AM
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
-- Table structure for table `keyboards`
--

CREATE TABLE `keyboards` (
  `keyboard_id` int(11) NOT NULL,
  `image` varchar(512) NOT NULL,
  `name` text NOT NULL,
  `url` varchar(512) NOT NULL,
  `price_before` varchar(512) NOT NULL,
  `price_after` varchar(512) NOT NULL,
  `added_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keyboards`
--

INSERT INTO `keyboards` (`keyboard_id`, `image`, `name`, `url`, `price_before`, `price_after`, `added_by`) VALUES
(1, 'keyboard1.png', 'Razer BlackWidow', 'https://www.razer.com/gaming-keyboards/Razer-BlackWidow-V3/RZ03-03541900-R3M1', '200.00', '139.99', ''),
(2, 'keyboard2.png', 'Razer Huntsman V2', 'https://www.razer.com/gaming-keyboards/Razer-Huntsman-Mini/RZ03-03390100-R3M1', '149.99', ' 129.99', ''),
(26, 'keyboard3.png', 'Maus gaming', 'https://www.razer.com/gaming-mice/Razer-DeathAdder-V2/RZ01-03210400-R3M1?__cf_chl_jschl_tk__=191a2b7b204a1052aa7cf1e7e56f96b76ee14cf2-1613261860-0-AXAh4_7HGU-5LjtOG7mDPqlGMMOq-J_nsogy6FXGbaEXcLhEtkAHWnk_ieylOylielS0Qvkde_xMThm_lrRl2hpgZ0203tIR91hoKHjDXpRf3WkZf_ZiHeTSiPFq8-JATNiQAYENFCNiI06YyNbuDkCfv4ZsUeBweSLGGUyqUd-jwH5oFXY56zVKMMtDzsO2Yng6bYVS4jbk9oLFt_7M1O9oPYsXJ66BULD_MLe6g1FmRbkm7dzO6-iBMRVqynOAc-Pj1RMqFu7sOl4pzEhWBjgcjqufjyS2gdXSMUKROzlK3jpz2APleKQbihzXS1CcXYJ2uWPPN-lUIqYRUYmIzof6hSFViyKBY2lQyjv32_uG7', '123', '119', 'EDON');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keyboards`
--
ALTER TABLE `keyboards`
  ADD PRIMARY KEY (`keyboard_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keyboards`
--
ALTER TABLE `keyboards`
  MODIFY `keyboard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
