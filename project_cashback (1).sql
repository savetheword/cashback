-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 05:58 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_cashback`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_approval`
--

CREATE TABLE `payment_approval` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `method` text NOT NULL,
  `payment_id` text NOT NULL,
  `amount` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_request`
--

CREATE TABLE `payment_request` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `payment_method` text NOT NULL,
  `payment_id` text NOT NULL,
  `payment_amount` int(255) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_request`
--

INSERT INTO `payment_request` (`id`, `name`, `email`, `payment_method`, `payment_id`, `payment_amount`, `date`) VALUES
(1, 'Dark Hunters', 'amuhammadaslam823@gmail.com', 'v ', 'vbn', 4, '0000-00-00 00:00:00'),
(2, 'Muhammad Aslam', 'amuhammadaslam823@gmail.com', 'hdr', 'erewqrqwer', 9, '2024-04-23 00:00:00'),
(3, 'Muhammad Aslam', 'amuhammadaslam823@gmail.com', 'amuhammadasl', 'erewqrqwer', 2, '2024-04-23 13:17:25'),
(4, 'Muhammad Aslam', 'amuhammadaslam823@gmail.com', 'we', 'jf', 5, '0000-00-00 00:00:00'),
(5, 'Muhammad Aslam', 'amuhammadaslam823@gmail.com', 'hdr', 'hxf', 22, ''),
(6, 'ad', 'amuhammadaslam823@gmail.com', 'da', 'd', 3, '2024-04-2308:34:45'),
(7, 'Muhammad Aslam', 'amuhammadaslam823@gmail.com', 'we', 'erewqrqwer', 44, '2024-04-23 14:08:20'),
(8, 'Muhammad Aslam', 'gamingmusic6758@gmail.com', 'we', 'jkk', 777, '2024-05-08 19:54:01'),
(9, 'Muhammad Aslam', 'gamingmusic6758@gmail.com', 'we', 'jkk', 777, '2024-05-08 19:55:44'),
(10, 'Muhammad Aslam', 'gamingmusic6758@gmail.com', 'we', 'jkk', 777, '2024-05-08 19:55:44'),
(11, 'Muhammad Aslam', 'gamingmusic6758@gmail.com', 'hdr', 'erewqrqwer', 666, '2024-05-08 20:08:32'),
(12, 'Muhammad Aslam', 'gamingmusic6758@gmail.com', 'hdr', 'erewqrqwer', 666, '2024-05-08 20:08:32'),
(13, 'Muhammad Aslam', 'gamingmusic6758@gmail.com', 'hdr', 'erewqrqwer', 666, '2024-05-08 20:08:32'),
(14, 'Muhammad Aslam', 'gamingmusic6758@gmail.com', 'hdr', 'erewqrqwer', 666, '2024-05-08 20:08:32'),
(15, 'Muhammad Aslam', 'gamingmusic6758@gmail.com', 'jjfj', 'erewqrqwer', 777, '2024-05-08 20:11:18'),
(16, 'Muhammad Aslam', 'gamingmusic6758@gmail.com', 'jjfj', 'erewqrqwer', 777, '2024-05-08 20:11:18'),
(17, 'Muhammad Aslam', 'gamingmusic6758@gmail.com', 'jjfj', 'erewqrqwer', 777, '2024-05-08 20:11:18'),
(18, 'Muhammad Aslam', 'gamingmusic6758@gmail.com', 'jjfj', 'erewqrqwer', 777, '2024-05-08 20:11:18'),
(19, 'Muhammad Aslam', 'gamingmusic6758@gmail.com', 'jjfj', 'erewqrqwer', 777, '2024-05-08 20:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `title` text NOT NULL,
  `price` text NOT NULL,
  `discount_price` text NOT NULL,
  `discount_precentage` text NOT NULL,
  `category` text NOT NULL,
  `details` text NOT NULL,
  `more_details` text NOT NULL,
  `description` text NOT NULL,
  `product_image` text NOT NULL,
  `offer_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `title`, `price`, `discount_price`, `discount_precentage`, `category`, `details`, `more_details`, `description`, `product_image`, `offer_link`) VALUES
(87, 'Flipkart', 'not specified', '', '30%', 'offers', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'file_6640b9a6526ca.webp', 'coming-soon'),
(88, 'Amazon', 'not specified', '', '30%', 'offers', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'file_6640ba0e81a48.webp', 'coming-soon'),
(90, 'Ajio', 'not specified', '', '30%', 'offers', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard', 'file_6640ba83a9cba.jpg', 'coming-soon'),
(99, 'uranium 235, Physics science nuclear on Men\'s Tall T-Shirt', '$100', '$50', '50%', 'men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'file_6640e44ff2866.jpg', 'coming-soon'),
(103, 'Nuclear Fission Uranium 235 Physics on Women\'s T-Shirt', '$100', '$70', '30%', 'women', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'file_6640e6f2b8358.jpg', 'coming-soon'),
(107, 'ELEGANTE Polarized Classic Wayfarer Sunglasses ', '$50', '$30', '40%', 'accessories', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'file_6640ef6a0ffb0.webp', 'coming-soon'),
(111, 'Women\'s Premium Tank Top', '$100', '$50', '50%', 'Best sellers', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'file_6640f3138760c.jpg', 'coming-soon'),
(112, 'Women\'s Premium Tank Top', '$100', '$50', '50%', 'Best sellers', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'file_6641d11be51b7.jpg', 'coming-soon');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `verify_token` text NOT NULL,
  `news_letter_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `verify_token`, `news_letter_email`) VALUES
(1, 'Muhammad Aslam', 'amuhammadaslam823@gamil.com', '$2y$10$/esq0y0foUrDzusI3iPuIeQMBr0ZaO/bpSYU9sl/jZfrr70kN/7Im', 'd7ffc143e9ac02397fefc53eed7d15a5', ''),
(4, 'Muhammad Aslam', 'amuhammadaslam823@gmail.com4', '$2y$10$KdNPvANuIEgps8DH4i61POXn2jjgVh5HKUIkIanLQF0xbYOg7O2DK', '', ''),
(5, 'Muhammad Aslam', 'amuhammadaslam8234@gmail.com', '$2y$10$G0xrHbH2LPTRbYHvzK9XVuwbo/aY4yDzrTdutQC.my8MXy14Vunb6', '', ''),
(6, 'Dark Hunters', 'gamingmusic67587@gmail.com', '$2y$10$9BRqjEOMo9AP1vJFYnwhaeCWU51v68jdShlTZtoQpPG/gLHnKwG0i', '', ''),
(7, 'Muhammad Aslam', 'amuhammadaslam823@guamil.com', '$2y$10$gSu/C67DlYOgdtKW1roRMe.CCI1vOObeAZP3W8wEv47LN1Ge3Do2K', '', ''),
(13, 'Muhammad Aslam', 'amuhammadaslam823@gmail.com', '$2y$10$tauySwZp3CJFmSda520D4O2gQE.xEL2X6y/OMChyqdaqWLspAHA7q', '7cd98746a0b7f785827725f4cce93bb3', ''),
(14, 'Muhammad Aslam', 'gamingmusic6758@gmail.com', '$2y$10$Hwa/6FJ9abw5YlAOBRxdVO65k3aY4QNkHCoZppsR6zoORyU.4bx4a', '44ea1190731858eeb774014245db366d', ''),
(15, '', '', '$2y$10$k5TLc9heS/l6ieYKP8GwsuvAb9iPF15RubtZJoAHevsxv8FwBLveG', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_request`
--
ALTER TABLE `payment_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_request`
--
ALTER TABLE `payment_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
