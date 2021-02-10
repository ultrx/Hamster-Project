-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 10:23 PM
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
  `products_id` int(11) NOT NULL,
  `image` varchar(512) NOT NULL,
  `buton` text NOT NULL,
  `name` text NOT NULL,
  `price_before` varchar(512) NOT NULL,
  `price_after` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `headsets`
--

INSERT INTO `headsets` (`products_id`, `image`, `buton`, `name`, `price_before`, `price_after`) VALUES
(1, 'heatset1.png', 'buy now', 'Razer Kaira', '$ 129.00', '$ 99.99'),
(2, 'heatset2.png', 'buy now', 'Razer Kraken X', '$ 69.99', '$ 49.99'),
(3, 'heatset3.png', 'buy now', 'Razer Kraken ', '$ 129.99', '$ 99.99'),
(4, 'heatset4.png', 'buy now', 'Razer Kraken Kitty', '$ 139.99', '$ 99.99');

-- --------------------------------------------------------

--
-- Table structure for table `homeproducts`
--

CREATE TABLE `homeproducts` (
  `products_id` int(11) NOT NULL,
  `image` varchar(512) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeproducts`
--

INSERT INTO `homeproducts` (`products_id`, `image`, `name`) VALUES
(1, 'mouse1.png', 'Mouse'),
(2, 'keyboard1.png', 'Keyboard'),
(3, 'heatset1.png', 'Headset');

-- --------------------------------------------------------

--
-- Table structure for table `keyboards`
--

CREATE TABLE `keyboards` (
  `products_id` int(11) NOT NULL,
  `image` varchar(512) NOT NULL,
  `buton` text NOT NULL,
  `name` text NOT NULL,
  `price_before` varchar(512) NOT NULL,
  `price_after` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keyboards`
--

INSERT INTO `keyboards` (`products_id`, `image`, `buton`, `name`, `price_before`, `price_after`) VALUES
(1, 'keyboard1.png', 'buy now', 'Razer BlackWidow', '$ 200.00', '$ 139.99'),
(2, 'keyboard2.png', 'buy now', 'Razer Huntsman V2', '$ 149.99', '$ 129.99'),
(3, 'keyboard3.png', 'buy now', 'Razer Huntsman', '$ 179.99', '$ 149.99'),
(4, 'keyboard4.png', 'buy now', 'Razer BlackWidow M', '$ 131.99', '$ 111.99');

-- --------------------------------------------------------

--
-- Table structure for table `mouses`
--

CREATE TABLE `mouses` (
  `mouse_id` int(11) NOT NULL,
  `image` varchar(512) NOT NULL,
  `buton` text NOT NULL,
  `name` text NOT NULL,
  `price_before` varchar(512) NOT NULL,
  `price_after` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mouses`
--

INSERT INTO `mouses` (`mouse_id`, `image`, `buton`, `name`, `price_before`, `price_after`) VALUES
(1, 'mouse1.png', 'Buy now', 'Razer x *A Bathing', '$ 100.00', '$ 89.99'),
(2, 'mouse2.png', 'buy now', 'Razer DeathAdder V2 Pro', '$ 159.99', '$ 129.99'),
(3, 'mouse3.png', 'buy now', 'Razer DeathAdder V2 Mini', '$ 79.99', '$ 49.99'),
(4, 'mouse4.png', 'buy now', 'Razer DeathAdder', '$ 69.99', '$ 49.99');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `email`, `password`, `date`) VALUES
(7, 1, 'florian', 'ad@gmail.com', 'florian123', '2021-02-10 20:27:41'),
(11, 8, 'edonedonedoinaelikdfnk', 'edon.kali@gmail.com', 'a307646df3cc99768b04cbcaef2f5825', '2021-02-10 21:22:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `headsets`
--
ALTER TABLE `headsets`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `homeproducts`
--
ALTER TABLE `homeproducts`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `keyboards`
--
ALTER TABLE `keyboards`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `mouses`
--
ALTER TABLE `mouses`
  ADD PRIMARY KEY (`mouse_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `headsets`
--
ALTER TABLE `headsets`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `homeproducts`
--
ALTER TABLE `homeproducts`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keyboards`
--
ALTER TABLE `keyboards`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mouses`
--
ALTER TABLE `mouses`
  MODIFY `mouse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
