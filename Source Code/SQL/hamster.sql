-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 12:53 AM
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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `subject` varchar(512) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `lastname`, `email`, `subject`, `date`) VALUES
(28, 'Florian', 'Alshiqi', 'flori.alshiqi.fa@gmail.com', 'Whether you need to draft polished consent letters or confirmation letters, our customizable Letter PDF Templates will help you generate and organize letters for your company — for free! To get started, customize and publish any of our free templates for confirmation letters, consent letters, cover letters, letters of recommendation, and more.', '2021-03-15 23:38:16'),
(29, 'Customer 1', 'Customer', 'costumer.1@gmail.com', 'Hello, I wanted to as you a question about one of your mouses, specifically RAZER VIPER ULTIMATE - Cyberpunk Edition. Does it come with a package & does it have backup battery? since it is a wireless mouse. Thank You', '2021-03-15 23:38:16'),
(30, 'Customer 2', 'Customer ', 'c2.customer@mail.com', 'Hello, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2021-03-15 23:38:16'),
(31, 'Customer 3', 'Customer', 'c3.customer@gmail.com', 'Greetings, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.', '2021-03-15 23:38:16'),
(32, 'Random ', 'User', 'ruser@gmail.com', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', '2021-03-15 23:38:16'),
(33, 'Florian', 'Alshiqi', 'flori.alshiqi.fa@gmail.com', 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '2021-03-15 23:46:13');

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
(27, '1615847012https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h0c_h2f_9081146998814_Thresher-for-PS4-500x500.png', 'Razer Thresher for PS4™', 'https://www.razer.com/console-headsets/Razer-Thresher-for-PS4/RZ04-02580100-R3U1', '149.99', '129.99', 'Kushtrim Ibishi'),
(30, '1615847374https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h98_h43_8968529674270_razer-nari-ultimate-lucio-500x500.png', 'Razer Ultimate - Overwatch', 'https://www.razer.com/gaming-headsets/Razer-Nari-Ultimate/RZ04-02670200-R3M1', '249.99', '229.99', 'Florjan Alshiqi'),
(31, '1615847434https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h28_h7d_9086238621726_500x500-bsv2-pro.png', 'Razer BlackShark V2 Pro', 'https://www.razer.com/gaming-headsets/Razer-BlackShark-V2-Pro/RZ04-03220100-R3U1', '189.99', '179.99', 'Edon Krasniqi'),
(32, '1615847552https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h64_h23_9081099288606_Kraken-Kitty-Black-500x500.png', 'Razer Kraken Kitty - Black', 'https://www.razer.com/gaming-headsets/Razer-Kraken-Kitty/RZ04-02980100-R3M1', '159.99', '149.99', 'Florjan Alshiqi');

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
(27, '1615846416https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h20_hf0_9090120712222_blackwidow-v3-500x500-quartz.png', 'Razer BlackWidow V3 - Green Switch - US - Quartz', 'https://www.razer.com/gaming-keyboards/Razer-BlackWidow-V3/RZ03-03541800-R3M1', '159.99', '139.99', 'Florjan Alshiqi'),
(29, '1615846512https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_hf1_h81_9081077891102_500x500_blackwidow-v3-tenkeyless.png', 'Razer BlackWidow V3 Tenkeyless - Green Switch', 'https://www.razer.com/gaming-keyboards/Razer-BlackWidow-V3-Tenkeyless/RZ03-03490200-R3U1', '110.99', '99.99', 'Edon Krasniqi'),
(31, '1615846651https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_hcf_ha2_9009542037534_RZ03-02190100-R3M1_500x500.png', 'Razer BlackWidow Edition Chroma V2 - Green Switch', 'https://www.razer.com/gaming-keyboards/Razer-BlackWidow-Tournament-Edition-Chroma-V2/RZ03-02190100-R3M1', '139.99', '111.99', 'Kushtrim Ibishi'),
(32, '1615846917https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_hb9_h26_9081099190302_Huntsman-Quartz-500x500.png', 'Razer Huntsman - US - Quartz - Optical Switches', 'https://www.razer.com/gaming-keyboards/Razer-Huntsman/RZ03-02521800-R3M1', '169.99', '149.99', 'Edon Krasniqi');

-- --------------------------------------------------------

--
-- Table structure for table `mouses`
--

CREATE TABLE `mouses` (
  `mouse_id` int(11) NOT NULL,
  `image` varchar(512) NOT NULL,
  `name` text NOT NULL,
  `url` varchar(512) NOT NULL,
  `price_before` varchar(512) NOT NULL,
  `price_after` varchar(512) NOT NULL,
  `added_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mouses`
--

INSERT INTO `mouses` (`mouse_id`, `image`, `name`, `url`, `price_before`, `price_after`, `added_by`) VALUES
(234, '1615845702https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h30_h04_9125417975838_razer-viper-ultimate-dock-cyberpunk_500x500.png', 'Razer Viper Ultimate Cyberpunk 2077 Edition', 'https://www.razer.com/gaming-mice/Razer-Viper-Ultimate/RZ01-03050500-R3M1', '179.99', '159.99', 'Florjan Alshiqi'),
(235, '1615845842https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h83_h6e_9004661833758_Mamba-Firefly-Hyperflux-Base.png', 'Razer Mamba HyperFlux + Razer Firefly HyperFlux', 'https://www.razer.com/gaming-mice/Razer-Mamba-HyperFlux-Razer-Firefly-HyperFlux/RZ83-02480100-B3M1', '269.99', '249.99', 'Florjan Alshiqi'),
(236, '1615846196https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h0f_h65_9125418926110_razer-viper-ultimate-dock-quartz_500x500.png', 'Razer Viper Ultimate with Charging Dock - Quartz', 'https://www.razer.com/gaming-mice/Razer-Viper-Ultimate/RZ01-03050300-R3M1', '179.99', '149.99', 'Edon Krasniqi'),
(237, '1615846295https___hybrismediaprod.blob.core.windows.net_sys-master-phoenix-images-container_h8a_hb3_9125419122718_razer-basilisk-ultimate-dock_500x500.png', 'Razer Basilisk Ultimate with Charging Dock', 'https://www.razer.com/gaming-mice/Razer-Basilisk-Ultimate/RZ01-03170100-R3U1', '179.99', '169.99', 'Kushtrim Ibishi');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(512) NOT NULL,
  `text` text NOT NULL,
  `posted_by` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `image`, `text`, `posted_by`, `date`) VALUES
(10, 'Team Razer Reignites the Asia-Pacific League of Legends Esports Scene', '1615762951Key-Visual_FINAL.webp', 'SINGAPORE – Razer™, the leading global lifestyle brand for gamers (Hong Kong Stock Code: 1337), today reaffirms its commitment to the League of Legends (LoL) esports scene with one of the brand’s largest roster expansions in Asia-Pacific. Team Razer announced two new strategic partnerships with Korean LoL giants Hanwha Life Esports (HLE) and Chinese powerhouse JD Gaming (JDG). Meanwhile, China-based Edward Gaming (EDG) and Oceanic stars Legacy Esports will continue their growth under the Team Razer banner.', 'Florjan Alshiqi', '2021-03-15'),
(11, 'Razer announces inaugural Razer DevCon', '1615763041DevCon-1-1024x576.webp', 'Razer DevCon to take place on May 7, 2021 at 10:00 AM PST on the official Razer Twitch channel. Razer DevCon 2021 aims to empower developers of all sizes and on all platforms by providing them insight into how to integrate Razer’s world-class ecosystem of hardware, software, and services at every level of development to drive innovation and provide gamers with a more immersive experience. ', 'Florjan Alshiqi', '2021-03-15'),
(12, 'Razer announces all-new Thunderbolt™ 4 Dock bringing expansive connectivity to every desk', '1615763100Dock1-1024x644.webp', 'RAZER THUNDERBOLT™ 4 DOCK CHROMA\r\n\r\nThe all-new Razer Thunderbolt™ 4 Dock Chroma has been designed to expand desktop connectivity and empower users to do more – whether on a Windows or Mac¹ laptop or desktop. It features the latest standards in connectivity, including a UHS-II SD card reader to quickly transfer files from a camera, an Ethernet port for fast and stable internet connectivity, three USB Type-A ports for connecting legacy devices, and four USB Type-C Thunderbolt™ 4 ports for connecting everything else.', 'Edon Krasniqi', '2021-03-15'),
(13, 'Show you mean business with the outstanding video quality of the new Razer Kiyo Pro webcam', '1615763136Kiyo-Pro-1.webp', 'Pro, a USB camera with a high-performance Adaptive Light Sensor to deliver market-leading image fidelity, even in low-light conditions. Combining an ultra-sensitive CMOS sensor with STARVIS™* technology, the Kiyo Pro brings a professional level of image quality to video conferencing and streaming.', 'Kushtrim Ibishi', '2021-03-15'),
(14, 'Razer unveils smart mask and gaming chair concept designs at CES 2021', '1615763217CES01.webp', 'LAS VEGAS, NV – Razer™, the leading global lifestyle brand for gamers, today announced two new concept designs for CES 2021; Project Hazel, the world’s smartest and most socially friendly face mask, and Project Brooklyn, a compact, integrated gaming chair for next generation immersion.\r\n\r\nConcept designs at Razer are explorations of innovation by the Razer design and engineering teams to evaluate feedback from the community and influence Razer’s future product portfolio. Earlier concept designs have either gone to market or elements of which have been included in shipping products.', 'Florjan Alshiqi', '2021-03-15'),
(15, 'Performance Meets Productivity in the New Razer Book 13', '1615764256razerbook13.webp', 'Since the launch of the first Razer Blade in 2011, Razer has built a legacy on delivering the highest performing gaming laptops to the delight of our fans worldwide. Today we are excited to announce Razer is breaking into the productivity space the same way we broke into laptop gaming: With a bang,” said Brad Wildes, Senior Vice President & General Manager of Razer’ Systems business unit. “The new Razer Book 13 is the culmination of a decade’s worth of experience in developing and crafting high-end gaming machines.  Sleek, powerful, and compact, the Razer Book 13 breaks out from the boring crowd and delivers prosumers an experience not yet realized in a work laptop.', 'Florjan Alshiqi', '2021-03-15'),
(16, 'Razer Fintech and Visa Unveil New Prepaid Card to Transform Digital Payments Experience for Youths and Millennials in Singapore', '1615764290Low-Res-PR-Image.jpg', 'SINGAPORE – Razer Fintech, the financial technology arm of leading global lifestyle brand for gamers, Razer Inc. has collaborated with Visa, the world’s leader in digital payments, to unveil a brand-new Visa prepaid solution – the Razer Card. Users can sign up and use the virtual card at no subscription, with the option to upgrade to a Standard or Premium physical card. All card users will enjoy year-long cashback features with no capped limit, a gamified rewards system in-app, and can make payments at over 61 million merchant locations globally where Visa is accepted.', 'Edon Krasniqi', '2021-03-15'),
(17, 'Razer unleashes a fleet of wireless flagships', '1615764320Trio-1.png', 'IRVINE, Calif. – Razer™, the leading global lifestyle brand for gamers, today announced the launch of the new Razer BlackShark V2 Pro, DeathAdder V2 Pro and BlackWidow V3 Pro, creating a fleet of flagship wireless peripherals with state-of-the-art gaming performance and total freedom of movement. Gamers can now enjoy their favorite games unhindered by cords, with the Razer HyperSpeed Wireless Technology maintaining a stable, fast connection.', 'Kushtrim Ibishi', '2021-03-15'),
(19, 'Dominate on a Different Scale: Razer Unveils the Razer Huntsman Mini', '1615764403HH-Mini-1.webp', 'IRVINE, Calif. – Razer™, the leading global lifestyle brand for gamers, today announced the Razer Huntsman Mini 60% optical gaming keyboard. This new ultra-compact form factor keyboard is the latest addition to the Huntsman family lineup, known for its industry-leading optical switches that outperform traditional mechanical switches in both speed and response times.\r\n\r\nThe Huntsman Mini will be available in Black and Mercury White finishes as well as in both the clicky purple, and newly improved linear red optical switch variations.', 'Edon Krasniqi', '2021-03-15'),
(20, 'Razer Announces Exclusive Peripherals Partnership with Helix Esports', '1615764435Helix-TeamRazer-Img1.jpg', 'Irvine, California – Razer™, the leading global lifestyle brand for gamers, today announced its’ collaboration with Helix eSports to be the exclusive peripherals partner inside their North American gaming centers. Helix eSports offers world class gaming and virtual reality experiences at their state-of-the-art esports centers throughout the United States.', 'Florjan Alshiqi', '2021-03-15'),
(21, 'Be faster with the all-new Razer Blade Stealth 13', '1615764467L2.5-feature-image.png', 'IRVINE, USA – Razer™, the leading global lifestyle brand for gamers, today revealed the all-new Razer Blade Stealth 13, taking Ultrabook gaming to the next level. The Blade Stealth 13 is the first Ultrabook with a 13.3” 120Hz display, powered by the new NVIDIA GeForce GTX 1650 Ti GPU and a faster 25W variant of the Intel® Core™ i7-1065G7 processor. The Blade Stealth 13 also packs a faster, more efficient keyboard and more efficient LPDDR4X memory, all within the signature matte black aluminum chassis.', 'Kushtrim Ibishi', '2021-03-15'),
(22, 'Razer Huntsman Elite is the #1 Best-Selling Gaming Keyboard in the US', '1615764515helite.webp', 'The Huntsman Elite excels in its gaming performance and function. The revolutionary keyboard is best known for its industry-leading optical switches, which provide unrivaled speed and durability when compared to traditional mechanical switches found in other gaming keyboards. It also features media keys and beautiful Chroma lighting all around each side of the keyboard, even when the plush wrist rest is attached.', 'Florjan Alshiqi', '2021-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `products_id` int(11) NOT NULL,
  `image` varchar(512) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`products_id`, `image`, `name`) VALUES
(1, 'slide1.png', 'DESIGN'),
(2, 'slide2.jpg', 'COMPATIBILITY'),
(3, 'slide3.jpg', 'QUALITY'),
(4, 'slide4.png', 'ERGONOMIC'),
(5, 'slide5.jpg', 'COLORFUL');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `admin`, `user_name`, `email`, `password`, `date`) VALUES
(1, 1, 'florian', 'florian.alshiqi@gmail.com', 'florian', '2021-03-11 12:53:59'),
(8, 0, 'Kushtrim Ibishi', 'ki47730@ubt-uni.net', 'kushtrim', '2021-03-10 18:38:29'),
(112, 1, 'Edon Krasniqi', 'edon.krasniqi@gmail.com', 'edonedon', '2021-03-14 23:21:30'),
(113, 1, 'admin', 'admin@hamster.com', 'admin', '2021-03-15 23:23:28'),
(114, 1, 'Betim Gashi', 'betim.gashi@ubt-uni.net', 'bgashi123.', '2021-03-15 23:23:52'),
(115, 0, 'Customer One', 'cone.customer@gmail.com', 'customer1', '2021-03-15 23:24:26'),
(116, 0, 'Random user', 'ruser@gmail.com', 'random', '2021-03-15 23:24:43'),
(117, 0, 'Simple User', 'simpleuser@gmail.com', 'simpleuser', '2021-03-15 23:25:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headsets`
--
ALTER TABLE `headsets`
  ADD PRIMARY KEY (`headset_id`);

--
-- Indexes for table `homeproducts`
--
ALTER TABLE `homeproducts`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `keyboards`
--
ALTER TABLE `keyboards`
  ADD PRIMARY KEY (`keyboard_id`);

--
-- Indexes for table `mouses`
--
ALTER TABLE `mouses`
  ADD PRIMARY KEY (`mouse_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `headsets`
--
ALTER TABLE `headsets`
  MODIFY `headset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `homeproducts`
--
ALTER TABLE `homeproducts`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keyboards`
--
ALTER TABLE `keyboards`
  MODIFY `keyboard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `mouses`
--
ALTER TABLE `mouses`
  MODIFY `mouse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
